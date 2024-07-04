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
            <div class="container-fluid">
                <div class=" mb-4">
                    <div class="d-flex flex-row tab-icon">
                        <div class="nav flex-column nav-pills" id="v-pills-tab3" role="tablist" aria-orientation="vertical">
                            <a class="nav-link py-3 active" id="v-pills-home-tab3" data-toggle="pill" href="#v-pills-home3" role="tab" aria-controls="v-pills-home3" aria-selected="true">
                                <span class="fe fe-16 fe-user"></span> Admin
                            </a>
                            <a class="nav-link py-3" id="v-pills-profile-tab3" data-toggle="pill" href="#v-pills-profile3" role="tab" aria-controls="v-pills-profile3" aria-selected="false">
                                <span class="fe fe-16 fe-users"></span> Chat Consultant
                            </a>
                            <a class="nav-link py-3 disabled" id="v-pills-messages-tab3" data-toggle="pill" href="#v-pills-messages3" role="tab" aria-controls="v-pills-messages3" aria-selected="false" aria-disabled="true">
                                <span class="fe fe-16 fe-ban"></span> Users (Disabled)
                            </a>

                        </div>
                        <div class="tab-content w-100" id="v-pills-tabContent3">
                            <div class="tab-pane fade show active" id="v-pills-home3" role="tabpanel" aria-labelledby="v-pills-home-tab3">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Recent orders -->
                                            <div class="col-md-12">
                                                <h6 class="mb-3">Admins</h6>
                                                <table class="table table-borderless table-striped">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($admins as $admin)
                                                        <tr>
                                                            <td>{{ $admin->id }}</td>
                                                            <td>{{ $admin->name }}</td>
                                                            <td>{{ $admin->email }}</td>
                                                            <td>{{ $admin->Role }}</td>
                                                            <td>{{ $admin->Role == 'freezed_Admin' ? 'Frozen' :'Active' }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class="text-muted sr-only">Action</span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        @if($admin->Role == 'freezed_Admin')
                                                                        <a class="dropdown-item" href="{{ route('unfreeze-user', ['id' => $admin->id]) }}">Unfreeze</a>
                                                                        @else
                                                                        <a class="dropdown-item" href="{{ route('freeze-user', ['id' => $admin->id]) }}">Freeze</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div> <!-- / .col-md-3 -->
                                        </div> <!-- end section -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile3" role="tabpanel" aria-labelledby="v-pills-profile-tab3">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- Recent orders -->
                                            <div class="col-md-12">
                                                <h6 class="mb-3">Users</h6>
                                                <table class="table table-borderless table-striped">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($chatConsultants as $chatConsultants)
                                                        <tr>
                                                            <td>{{ $chatConsultants->id }}</td>
                                                            <td>{{ $chatConsultants->name }}</td>
                                                            <td>{{ $chatConsultants->email }}</td>
                                                            <td>{{ $chatConsultants->Role }}</td>
                                                            <td>{{ $chatConsultants->Role == 'freezed_Admin' ? 'Frozen' : 'Active' }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class="text-muted sr-only">Action</span>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        @if($chatConsultants->Role == 'freezed_Admin')
                                                                        <a class="dropdown-item" href="{{ route('unfreeze-user', ['id' => $chatConsultants->id]) }}">Unfreeze</a>
                                                                        @else
                                                                        <a class="dropdown-item" href="{{ route('freeze-user', ['id' => $chatConsultants->id]) }}">Freeze</a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div> <!-- / .col-md-3 -->
                                        </div> <!-- end section -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages3" role="tabpanel" aria-labelledby="v-pills-messages-tab3">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>
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
    @include('Admin.jsincludes')
    @include('Admin.footer')
</body>

</html>