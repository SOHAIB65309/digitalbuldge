<?php

namespace App\Http\Controllers;

use App\Models\packeges;
use App\Models\contact;
use Illuminate\Http\Request;

class digitalbuldgeController extends Controller
{
    public function showPricing()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.pricing', compact('packages'));
    }
    public function motiongraphic()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.motion-graphic', compact('packages'));
    }
    public function ddanimation()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.2d-animation', compact('packages'));
    }
    public function dddanimation()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.3d-animation', compact('packages'));
    }
    public function explainer_video()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.explainer-video', compact('packages'));
    }
    public function logo_animation()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.logo-animation', compact('packages'));
    }
    public function whiteboard_animation()
    {
        $packages = packeges::with('services')->get();
        return view('digitalbuldge.whiteboard-animation', compact('packages'));
    }
    public function sendmessage(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:11',
                'company' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);

            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'message' => $request->message,
                'status' => 'pending',
            ]);

            return redirect()->back()->with('success', 'Your message has been sent successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
