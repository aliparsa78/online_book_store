
<nav class="navbar navbar-expand-md bg-info navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/">Online Book Store</a>
    
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <div class="row">
      <div class="col-md-10">
        <ul class="navbar-nav p-2">
          <li class="nav-item">
            <a class="nav-link" href="#">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Catagories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Catagories</a>
          </li>
          <li class="nav-item" style="margin-right:700px">
            <a class="nav-link" href="#">Latest</a>
          </li>
        </ul>
      </div>
      <div class="col-md-2">
        <ul>
          <li class="nav-item dropdown" id="navbar-auth">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              <a class="dropdown-item" href="#">My Profile</a> 
          </li>
        </ul>
      </div>
    </div>
    
      
      
    </ul>
  </div>
</nav>

