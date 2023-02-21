<nav id="sidebarMenu" class="col-md-3 col-lg-2   d-md-block bg-light sidebar collapse">
    <div class="container">
      <ul class="nav flex-column">
        <li class="nav-item mt-2">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/">
            <span data-feather="sun" class="align-text-bottom"></span>
            SIMKAPAI
          </a>
        </li>
        <li>
          <p></p>
        </li>
        <li>
          <p></p>
        </li>
        <li>
          <p></p>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Dashboard</span>
        </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Welcome
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Posts
          </a>
        </li>
      </ul>
      
      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
        <ul class="nav flex-column">
          <li class="nav item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid"></span>
              Posts Categories
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav item">
            <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
              <span data-feather="user"></span>
              User management
            </a>
          </li>
        </ul>
        @endcan

    </div>
  </nav>