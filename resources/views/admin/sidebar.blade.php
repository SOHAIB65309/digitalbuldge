<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{url('/')}}">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>

    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Pages</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">

      <li class="nav-item dropdown">
        <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-user fe-16"></i>
          <span class="ml-3 item-text">Users</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="profile">
          <a class="nav-link pl-3" href="{{ route('Admin.Adduser') }}"><span class="ml-1">Add user</span></a>
          <a class="nav-link pl-3" href="{{ route('Admin.viewuser') }}"><span class="ml-1">View Users</span></a>

        </ul>
      </li>
    </ul>
    {{-- <p class="text-muted nav-heading mt-4 mb-1">
      <span>Chats</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-message-square fe-16"></i>
          <span class="ml-3 item-text">Chats</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="contact">
          <!-- Update routes based on chat type -->
          <a class="nav-link pl-3" href="{{ route('unassigned-chats') }}"><span class="ml-1">Unassigned Chats</span></a>
          <a class="nav-link pl-3" href="{{ route('assigned-chats') }}"><span class="ml-1">Assigned Chats</span></a>
          <a class="nav-link pl-3" href="{{ route('closed-chats') }}"><span class="ml-1">Closed Chats</span></a>
        </ul>
      </li>
    </ul> --}}
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Extra</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-user fe-16"></i>
          <span class="ml-3 item-text">Profile</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="profile">
          <a class="nav-link pl-3" href="{{route('profile')}}"><span class="ml-1">Overview</span></a>
        </ul>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Packeges</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('Admin/packeges') }}">
              <i class="fe fe-package fe-16"></i>
              <span class="ml-3 item-text">Packages</span>
          </a>
      </li>
      <li class="nav-item w-100">
          <a class="nav-link" href="{{ url('Admin/contacts') }}">
              <i class="fe fe-message-square fe-16"></i>
              <span class="ml-3 item-text">contacts</span>
          </a>
      </li>
  </ul>
  
    <div class="btn-box w-100 mt-4 mb-1">
      <a href="{{ route('logout') }}"  class="btn mb-2 btn-warning btn-lg btn-block">
        <i class="fe fe-log-out fe-12 mx-2"></i><span class="small">Logout</span>
      </a>


    </div>
  </nav>
</aside>