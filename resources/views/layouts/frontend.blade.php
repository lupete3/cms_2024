<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{ $viewData['title'] }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{asset('assets/frontend/img/favicon.ico')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css ')}}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css ')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css ')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css ')}}" rel="stylesheet" />

    <style>
      .ico{
        font-size: 60px;
        color: #2e66d0;
        margin-right: 0.2em;
      }
      .ico-service{
        font-size: 60px;
        color: #f9f9f9;
      }

      .product:hover {
        background-color: blue;
        opacity: 0.7;
      }

    </style>
  </head>

  <body>
    @php
    use App\Models\Organisation;

    $organisations = Organisation::latest()->get();

    foreach ($organisations as $organisation):
        $name = $organisation->name;
        $slogan = $organisation->slogan;
        $logo = $organisation->logo;
        $adress = $organisation->adress;
        $phone = $organisation->phone;
        $email = $organisation->email;
        $facebook = $organisation->facebook;
        $twitter = $organisation->twitter;
        $youtube = $organisation->youtube;
        $instagram = $organisation->instagram;
        $linkedin = $organisation->linkedin;
    endforeach

@endphp
    <!-- Spinner Start -->
    {{-- <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div> --}}
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div
      class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block head"
    >
      <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="fa fa-phone-alt me-2"></small>
            <small>+{{ $organisation->phone }}</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-envelope-open me-2"></small>
            <small>{{ $organisation->email }}</small>
          </div>
          {{-- <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-clock me-2"></small>
            <small>Lun - Sam : 09 AM - 09 PM</small>
          </div> --}}
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="text-white-50 ms-4" href="{{ $organisation->facebook }}"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="text-white-50 ms-4" href="{{ $organisation->twitter }}"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="text-white-50 ms-4" href="{{ $organisation->linkedin }}"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="text-white-50 ms-4" href="{{ $organisation->instagram }}"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 "
    >
      <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <img
            class="img-fluid me-3 text-primary"
            src="{{ asset('about/'.$organisation->logo)}}"
            alt=""
          />{{ $organisation->name }}
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
          <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::routeIs('home') ? 'active' : ''}}">Accueil</a>
          <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : ''}}">A Propos</a>
          <a href="{{ route('services') }}" class="nav-item nav-link {{ Request::routeIs('services') ? 'active' : ''}}">Nos Produits et Services</a>
          <a href="{{ route('projets') }}" class="nav-item nav-link {{ Request::routeIs('projets') ? 'active' : ''}}">Nos Projets</a>
          <a href="{{ route('galeries') }}" class="nav-item nav-link {{ Request::routeIs('galeries') ? 'active' : ''}}">Galerie Photos</a>
          <a href="{{ route('activites.all')}}" class="nav-item nav-link {{ Request::routeIs('activites.all') ? 'active' : ''}}">Nos Activités</a>
          {{-- <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu bg-light border-0 m-0">
              <a href="feature.html" class="dropdown-item">Features</a>
              <a href="appointment.html" class="dropdown-item">Appointment</a>
              <a href="team.html" class="dropdown-item">Team Members</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div> --}}
        </div>
      </div>
      <a href="{{ route('contact') }}" class="btn btn-primary px-3 d-none d-lg-block">Nous Contacter</a>
    </nav>
    <!-- Navbar End -->

    <!-- Home content -->
    @yield('content')


     <!-- Footer Start -->
     <div
     class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
     data-wow-delay="0.1s"
   >
     <div class="container py-5">
       <div class="row g-5">
         <div class="col-lg-3 col-md-6">
           <h1 class="text-white mb-4">
             <img
               class="img-fluid me-3"
               src="img/icon/icon-02-light.png"
               alt=""
             />{{ $organisation->name }}
           </h1>
           <p>
            {{ $organisation->slogan }}
           </p>
           <div class="d-flex pt-2">
             <a class="btn btn-square me-1" href="{{ $organisation->twitter }}"
               ><i class="fab fa-twitter"></i
             ></a>
             <a class="btn btn-square me-1" href="{{ $organisation->facebook }}"
               ><i class="fab fa-facebook-f"></i
             ></a>
             <a class="btn btn-square me-1" href="{{ $organisation->youtube }}"
               ><i class="fab fa-youtube"></i
             ></a>
             <a class="btn btn-square me-0" href="{{ $organisation->linkedin }}"
               ><i class="fab fa-linkedin-in"></i
             ></a>
           </div>
         </div>
         <div class="col-lg-3 col-md-6">
           <h5 class="text-light mb-4">Addresse</h5>
           <p>
             <i class="fa fa-map-marker-alt me-3"></i>{{ $organisation->adress }}
           </p>
           <p><i class="fa fa-phone-alt me-3"></i>+{{ $organisation->phone }}</p>
           <p><i class="fa fa-envelope me-3"></i>{{ $organisation->email }}</p>
         </div>
         <div class="col-lg-3 col-md-6">
           <h5 class="text-light mb-4">Liens Rapides</h5>
           <a class="btn btn-link" href="{{ route('about')}}">A Propos</a>
           <a class="btn btn-link" href="{{ route('contact')}}">Nous Contacter</a>
           <a class="btn btn-link" href="{{ route('services')}}">Nos Produits et Services</a>
         </div>
         <div class="col-lg-3 col-md-6">
           <h5 class="text-light mb-4">Newsletter</h5>
           <p>Abonnez-vous pour recevoir nos newslatter</p>
           <div class="position-relative mx-auto" style="max-width: 400px">

            <form action="{{ route('subsciber.store')}}" method="post">
              @csrf
             <input
               class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
               type="text"
               name="email"
               placeholder="Votre email"
             />
             <button
               type="submit"
               class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2"
             >
               S'abonner
             </button>
            </form>
            <br>
            <div class="col-sm-12 ">
              @if($errors->any())
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger alert-dismissible" id="msg" role="alert">
                      <h6> {{ $error }} </h6>
                    </div>
                @endforeach
              @endif
                @if(Session::has('success'))
                  <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                      <h6>
                          {{ Session::get('success') }}
                      </h6>
                    </div>
                @endif
            </div>
           </div>
         </div>
       </div>
     </div>
     <div class="container-fluid copyright">
       <div class="container">
         <div class="row">
           <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
             &copy; <a href="#">{{ $organisation->name }}</a>, Tout droits réservés.
           </div>
           <div class="col-md-6 text-center text-md-end">
             <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              <a href="https://pdevtuto.com">COOPABU</a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- Footer End -->

   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
     ><i class="bi bi-arrow-up"></i
   ></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/frontend/lib/wow/wow.min.js ') }}"></script>
    <script src="{{asset('assets/frontend/lib/easing/easing.min.js ') }}"></script>
    <script src="{{asset('assets/frontend/lib/waypoints/waypoints.min.js ') }}"></script>
    <script src="{{asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js ') }}"></script>
    <script src="{{asset('assets/frontend/lib/counterup/counterup.min.js ') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/frontend/js/main.js ') }}"></script>

 </body>
</html>
