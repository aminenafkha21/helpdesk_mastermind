<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="{{URL::asset('assets/images/admin.jpg')}}">
          </div>
          <div class="user-name">
              {{Auth::user()->name}}
          </div>
          <div class="user-designation">
          Administrator             
        

          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/' . $page='home') }}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/' . $page='tickets') }}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Tickets</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/' . $page='services') }}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/' . $page='users') }}">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
    
          
        </ul>
      </nav>