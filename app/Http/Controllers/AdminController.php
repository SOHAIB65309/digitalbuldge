<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\packeges;
use App\Models\services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\contact;
class AdminController extends Controller
{
    public function Adduser(Request $request)
    {

        return view('Admin.adduser');
    }
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required|string|max:255',
            'role' => 'required|string',
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
        ]);

        try {
            $user = User::create([
                'email' => $request->email,
                'name' => $request->firstname,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('success', 'User created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', 'There was an issue creating the user. Please try again.');
        }
    }
    public function viewuser()
    {
        $admins = User::whereIn('Role', ['Admin', 'freezed_Admin'])->get();
        $chatConsultants = User::whereIn('Role', ['Chat Consultant', 'freezed_Chat Consultant'])->get();
        return view('Admin.viewusers', compact('admins', 'chatConsultants'));
    }

    public function freezeUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->Role = 'freezed_' . $user->Role;
            $user->save();
            return redirect()->back()->with('success', 'User has been frozen successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
    public function unfreezeUser($id)
    {
        try {
            $user = User::findOrFail($id);
            // Assuming you want to remove the "freezed_" prefix from the role
            $user->Role = str_replace('freezed_', '', $user->Role);
            $user->save();
            return redirect()->back()->with('success', 'User has been Unfrozen successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
    public function packages()
    {
        $packages = packeges::with('services')->get();
        return view('admin.packages', compact('packages'));
    }

    public function packageStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'actual_amount' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'services' => 'required|string',
        ]);

        try {
            $package = new packeges();
            $package->title = $request->title;
            $package->type = $request->type;
            $package->actual_amount = $request->actual_amount;
            $package->discounted_price = $request->discounted_price;
            $package->save();

            $services = json_decode($request->services, true);
            foreach ($services as $service) {
                $service = trim($service['value']);
                if (!empty($service)) {
                    services::create([
                        'package_id' => $package->id,
                        'service' => $service,
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Package created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', 'There was an issue creating the package. Please try again.');
        }
    }
    public function updatePackage(Request $request, $id)
    {
        $package = packeges::findOrFail($id);

        // Validate input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'actual_amount' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'update_services' => 'nullable|string',
        ]);

        // Update package data
        $package->title = $validatedData['title'];
        $package->actual_amount = $validatedData['actual_amount'];
        $package->discounted_price = $validatedData['discounted_price'];

        // Update services (if provided)
        if ($request->has('update_services')) {
            $services = json_decode($validatedData['update_services'], true);
            $package->services()->delete(); // Remove old services
    
            // Add new services
            foreach ($services as $service) {
                $service = trim($service['value']);
                if (!empty($service)) {
                    Services::create([
                        'package_id' => $package->id,
                        'service' => $service,
                    ]);
                }
            }
        }

        $package->save();

        return redirect()->back()->with('success', 'Package updated successfully.');
    }
    public function message()
{
    $messages = Contact::orderBy('status', 'desc')->paginate(10);
    return view('admin.contact', compact('messages'));
}
public function updatemessagestatus($id, $status)
{
    // Find the message by ID
    $message = Contact::findOrFail($id);

    // Update the status
    $message->update(['status' => $status]);

    // Redirect back or to a specific route
    return redirect()->back()->with('success', 'Message status updated successfully.');
}
}
