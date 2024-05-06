<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/backend/modules/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/fontawesome/css/all.min.css ')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/backend/modules/jqvmap/dist/jqvmap.min.css ')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/weather-icon/css/weather-icons.min.css ')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/weather-icon/css/weather-icons-wind.min.css ')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/summernote/summernote-bs4.css ')}}">

  <link rel="stylesheet" href="{{asset('assets/backend/modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/backend/css/style.css ')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/css/components.css ')}}">
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/backend/modules/ionicons/css/ionicons.min.css ')}}">

  <!-- Bootstrap-Iconpicker -->
<link rel="stylesheet" href="{{asset('assets/backend/modules/bootstrap-iconpicker/dist/css/bootstrap-iconpicker.min.css ')}}"/>

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('assets/backend/img/products/product-3-50.png ')}}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('assets/backend/img/products/product-2-50.png ')}}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('assets/backend/img/products/product-1-50.png ')}}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-1.png ')}}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-2.png ')}}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-3.png ')}}" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-4.png ')}}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-5.png ')}}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{asset('assets/backend/img/avatar/avatar-1.png ')}}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Salut, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{route('profile.edit')}}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
             
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard')}}">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Visiter le site</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown @if (request()->routeIs('dashboard')) active @endif">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class=active><a class="nav-link" href="{{ route('dashboard')}}">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li><a class="nav-link" href="{{route('slides.index')}}"><i class="fa fa-images"></i> <span>Slides</span></a></li>
            <li><a class="nav-link" href="{{route('about.create')}}"><i class="fa fa-home"></i> <span>Apropos</span></a></li>
            <li><a class="nav-link" href="{{route('success.create')}}"><i class="fa fa-check"></i> <span>Parcours</span></a></li>
            <li><a class="nav-link" href="{{route('reason.create')}}"><i class="fa fa-edit"></i> <span>Raison </span></a></li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Services</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('services.create')}}">Ajouter Service</a></li>
                <li><a class="nav-link" href="{{route('services.index')}}">Liste des services</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-car"></i> <span>Catégories Engins</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('categories.create')}}">Ajouter Catégorie</a></li>
                <li><a class="nav-link" href="{{route('categories.index')}}">Liste des catégories</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-car"></i> <span> Engins</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('products.create')}}">Ajouter un engin</a></li>
                <li><a class="nav-link" href="{{route('products.index')}}">Liste des engins</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span> Membres Equipe</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('teams.create')}}">Ajouter un membre</a></li>
                <li><a class="nav-link" href="{{route('teams.index')}}">Liste des membres</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span> Témoignages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('temoignages.create')}}">Ajouter un témoignage</a></li>
                <li><a class="nav-link" href="{{route('temoignages.index')}}">Liste des témoignages</a></li>
              </ul>
            </li>          
            <li><a class="nav-link" href="{{ route('organisations.create')}}"><i class="fas fa-pencil-ruler"></i> <span>Votre Organisation</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Afficher le site
            </a>
          </div>        </aside>
      </div>

      @yield('content')

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/backend/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/popper.js')}}"></script>
  <script src="{{asset('assets/backend/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/backend/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/backend/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets/backend/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/chart.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
  <script src="{{asset('assets/backend/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('assets/backend/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{asset('assets/backend/modules/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/backend/modules/jquery-selectric/jquery.selectric.min.js ')}}"></script>
  <script src="{{asset('assets/backend/modules/upload-preview/assets/js/jquery.uploadPreview.min.js ')}}"></script>
  <script src="{{asset('assets/backend/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js ')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('assets/backend/js/page/modules-datatables.js')}}"></script>
  <script src="{{asset('assets/backend/js/bootstrap-iconpicker.bundle.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/backend/modules/upload-preview/assets/js/jquery.uploadPreview.min.js ')}}"></script>


  <!-- Page Specific JS File -->
  <script src="{{asset('assets/backend/js/page/index-0.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('assets/backend/js/scripts.js')}}"></script>
  <script src="{{asset('assets/backend/js/custom.js')}}"></script>
</body>
</html>