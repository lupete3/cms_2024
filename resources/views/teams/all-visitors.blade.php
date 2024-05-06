@extends('layouts.frontend')

@section('content')
    
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Produists</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Product Start -->
      
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <div class="row container text-center" style="margin-top: -50px">
                <div class="filterable-btn">
                  <a class=" btn px-3 {{ Route::is('products.all') ? 'bg-primary text-white' : 'btn-light' }}"  href="{{route('products.all')}}" data-filter="*">Tout</a>
                  @foreach ($viewData['categories'] as $category)
                    <a class="btn px-3 {{ Request::is('produits/category/'.$category->slug) ? 'bg-primary text-white' : 'btn-light' }} "  href="{{ route('products.category',$category->slug )}}" data-filter="*">{{$category->name}}</a>
                  @endforeach
                </div>
              </div>
              
              <div class="row g-3 mt-2">
                @foreach ($viewData['products'] as $product)
                
                  <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                    
                    <div class="bg-light rounded  h-100 p-1">
                      <div
                        class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                      >
                        <img src="{{asset('products/'.$product->image)}}" class="rounded " alt="">
                        <h5 class="mb-0 mt-2">{{ $product->name }}</h5> 
                        <p>{{ Str::limit($product->description, 50, ' (...)') }}</p>
                        <a class="btn btn-light px-3" href="">Détail</a>
                      </div>
                    </div>
                  </div>
                
                @endforeach

              </div>
              <!-- /.card-body -->
              <div class="row container ">
                <div class="mailbox-controls mt-3 ">
                  <ul class="pagination ">
                    @if(\Request::route()->getName() == 'products.category') 
                    
                    @else 
                        {!! $product = $viewData['products'];  $product->withQueryString()->links('pagination::bootstrap-5') !!} 
                    @endif 
                      
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    <!-- Product End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">
              We're Award Winning Insurance Company
            </h1>
            <p class="text-white mb-5">
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
              stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
              elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
              diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
              clita duo justo magna.
            </p>
            <div class="bg-white rounded p-3">
              <div class="d-flex align-items-center bg-primary rounded p-3">
                <img
                  class="flex-shrink-0 rounded-circle me-3"
                  src="{{ asset('assets/frontend/img/profile.jpg')}}"
                  alt=""
                />
                <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <form>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Gurdian Name"
                      />
                      <label for="gname">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Gurdian Email"
                      />
                      <label for="gmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      />
                      <label for="cname">Your Mobile</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                      />
                      <label for="cage">Service Type</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      Get Appointment
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/team-1.jpg')}}" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/team-2.jpg')}}" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/team-3.jpg ')}}" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item rounded">
              <img class="img-fluid" src="{{ asset('assets/frontend/img/team-4.jpg')}}" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->


@endsection


   
