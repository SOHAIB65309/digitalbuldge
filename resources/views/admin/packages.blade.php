@include('Admin.header')

<body class="vertical  dark  ">
    <div class="wrapper">
        @include('Admin.nav')
        @include('Admin.sidebar')
        <main role="main" class="main-content">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <style>
                .custom-input {
                    width: 100%; /* Full width */
                    padding: 10px; /* Padding */
                    border: 2px solid #ced4da; /* Border */
                    border-radius: 4px; /* Rounded corners */
                    box-sizing: border-box; /* Include padding and border in the element's total width and height */
                }
                .custom-input:focus {
                    border-color: #80bdff; /* Border color on focus */
                    outline: 0; /* Remove default outline */
                    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25); /* Box shadow on focus */
                }
            </style>
            <div class="container-fluid">
                <div class="wrapper ">
                    <div class=" align-items-center ">
                            <form action="{{ route('Createpackages') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="title">Package Title:</label>
                                        <input type="text" id="title" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="type">Package Type:</label>
                                        <select id="type" name="type" class="form-control" required>
                                            <option value="">Select Package Type</option>
                                            <option value="Basic">Basic</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                            <option value="Enterprise">Enterprise</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="actual_amount">Actual Amount:</label>
                                        <input type="number" id="actual_amount" name="actual_amount" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="discounted_price">Discounted Price:</label>
                                        <input type="number" id="discounted_price" name="discounted_price" class="form-control">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="services">Services:</label>
                                        <input type="text" id="services"class="custom-input" name="services" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create Package</button>
                                </div>
                            </form>
                            <h3>Existing Packages</h3>
                            <div class="row">
                                @foreach($packages as $package)
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('Admin/updatePackage',$package->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                                <div class="form-group">
                                                    <label for="title">Package Title:</label>
                                                    <input type="text" id="title" name="title" class="form-control" value="{{ $package->title }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Package Type:</label>
                                                    <input type="text" id="type" name="type" class="form-control" value="{{ $package->type }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="actual_amount">Actual Amount:</label>
                                                    <input type="number" id="actual_amount" name="actual_amount" class="form-control" value="{{ $package->actual_amount }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="discounted_price">Discounted Price:</label>
                                                    <input type="number" id="discounted_price" name="discounted_price" class="form-control" value="{{ $package->discounted_price }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="services">Services:</label>
                                                    <input type="text" id="services-{{ $package->id }}"class="custom-input" name="update_services" class="" value="{{ implode(',', $package->services->pluck('service')->toArray()) }}">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update Package</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                    </div>
                </div>
            </div> <!-- .container-fluid -->
            
            <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-box fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Package has uploaded successfull</strong></small>
                                            <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                            <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-download fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Widgets are updated successfull</strong></small>
                                            <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                            <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-inbox fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Notifications have been sent</strong></small>
                                            <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                            <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-link fe-24"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Link was attached to menu</strong></small>
                                            <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                            <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div> <!-- / .list-group -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-5">
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-success justify-content-center">
                                        <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Control area</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Activity</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Droplet</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Upload</p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Users</p>
                                </div>
                                <div class="col-6 text-center">
                                    <div class="squircle bg-primary justify-content-center">
                                        <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                    </div>
                                    <p>Settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('Admin.footer')
    @include('Admin.jsincludes')
    <!-- Include Tagify CSS -->
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet">

<!-- Include Tagify JS -->
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/jQuery.tagify.min.js"></script>

    <script>
        // Convert the textarea into Tagify input
        var input = document.querySelector('input[name=services]');
        new Tagify(input);
    </script>
    <script>
        // Convert the input fields into Tagify input
        var inputs = document.querySelectorAll('input[name="update_services"]');
        inputs.forEach(function(input) {
            new Tagify(input);
        });
    </script>

   
</body>

</html>