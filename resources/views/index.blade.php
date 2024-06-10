@extends('layouts.frontend')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($viewData['slides'] as $key => $slide)
                <div class="carousel-item w-100 @if($key < 1) active @endif" >
                <img class="w-100 shadow" src="{{asset('slides/'.$slide->image)}}" alt="Image" >
                    <div class="carousel-caption" style="

                    background: linear-gradient(rgba(3, 23, 47, 0.5),
                    rgba(2, 13, 26, 0.9)), center right no-repeat;
                    background-size: cover;
                    ">
                    <div class="container">
                        <div class="row">
                        <div class="col-12 col-lg-8">
                            <h1 class="display-3 text-white mb-4 animated slideInDown">
                            {{ $slide->title }}
                            </h1>
                            <p class="fs-5 text-white mb-5">
                                {{ $slide->description }}
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-primary py-3 px-5"
                            >En savoir plus</a
                            >
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    @foreach ($viewData['abouts'] as $about)

      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div
                class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
                style="min-height: 400px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="{{ asset('about/'.$about->about_img) }}"
                  alt=""
                  style="object-fit: cover"
                />
                <div
                  class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                  style="width: 200px; height: 200px"
                >
                  <div
                    class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                  >
                    <h1 class="text-white mb-0">{{ $about->annee_experience }}</h1>
                    <h2 class="text-white">Années</h2>
                    <h5 class="text-white mb-0">Expériences</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="h-100">
                <h1 class="display-6 mb-5">
                  {{ $about->title }}
                </h1>
                <p class="fs-5 text-primary mb-4">
                  {{ $about->short_description }}
                </p>
                <div class="row g-4 mb-4">
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                      <i class=" ico {{ $about->img1 }}" ></i>
                      <h5 class="mb-0">{{ $about->text1 }}</h5>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="d-flex align-items-center">
                      <i class=" ico {{ $about->img2 }}" ></i>
                      <h5 class="mb-0">{{ $about->text2 }}</h5>
                    </div>
                  </div>
                </div>
                <p class="mb-4">
                  {{ $about->full_description }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- About End -->

    <!-- Facts Start -->
    @foreach ($viewData['successes'] as $success)

      <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
          <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s"
              style="
                background: linear-gradient(rgba(1, 95, 201, 0.5),
                rgba(4, 43, 88, 0.5)),
                url(@php echo asset('success/'.$success->img1)@endphp) center right no-repeat;
                background-size: cover;
              " >
              <div class="h-100 px-4 ps-lg-0">
                <h1 class="text-white mb-4">{{ $success->title }}</h1>
                <p class="text-light mb-5">
                  {{ $success->description }}
                </p>
                <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                  >En savoir plus</a
                >
              </div>
            </div>
            <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s"
              style="
                background: linear-gradient(rgba(255, 255, 255, .9), rgba(255, 255, 255, .9)),
                url(@php echo asset('success/'.$success->img2)@endphp) center right no-repeat;
                background-size: cover;
              " >

              <div class="h-100 px-4 pe-lg-0">
                <div class="row g-5">
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count1 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text1 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count2 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text2 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count3 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text3 }}</p>
                  </div>
                  <div class="col-sm-6">
                    <h1 class="display-5" data-toggle="counter-up">{{ $success->count4 }}</h1>
                    <p class="fs-5 text-primary">{{ $success->text4 }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- Facts End -->

    <!-- Features Start -->
    @foreach ($viewData['reasons'] as $reason)

      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="display-6 mb-5">{{ $reason->title }}</h1>
              <p class="mb-4">
                {{ $reason->description }}
              </p>
              <div class="row g-3">
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                  <div class="bg-light rounded h-100 p-3">
                    <div
                      class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                    >
                      <i class="ico {{ $reason->img1 }}"></i>
                      <h5 class="mb-0">{{ $reason->text1 }}</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                  <div class="bg-light rounded h-100 p-3">
                    <div
                      class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                    >
                      <i class="ico {{ $reason->img2 }}"></i>
                      <h5 class="mb-0">{{ $reason->text2 }}</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                  <div class="bg-light rounded h-100 p-3">
                    <div
                      class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                    >
                      <i class="ico {{ $reason->img3 }}"></i>
                      <h5 class="mb-0">{{ $reason->text3 }}</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                  <div class="bg-light rounded h-100 p-3">
                    <div
                      class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                    >
                      <i class="ico {{ $reason->img4 }}"></i>
                      <h5 class="mb-0">{{ $reason->text4 }}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div
                class="position-relative rounded overflow-hidden h-100"
                style="min-height: 400px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="{{ asset('reason/'.$reason->image_full) }}"
                  alt=""
                  style="object-fit: cover"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            Nous fournissons des services professionnels
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          @foreach ($viewData['services'] as $service)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded h-100 p-5">
                <div class="d-flex align-items-center ms-n5 mb-4">
                  <div
                    class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                  >
                    <i class="ico-service {{ $service->icon }}"></i>
                  </div>
                  <h4 class="mb-0">{{ $service->title }}</h4>
                </div>
                <p class="mb-4">
                  {{ $service->description }}
                </p>
                <a class="btn btn-light px-3" href="{{route('services')}}">En savoir plus</a>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Product Start -->

      <div class="container ">
        <div class="">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
              <h1 class="display-6 mb-5 text-center">Nos activités</h1>

              <div class="row g-1 mt-2">

                @foreach ($viewData['activites'] as $activite)
                  <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                      <img class="img-fluid" src="{{asset('activites/'.$activite->image)}}" alt="" />
                      <div class="text-center p-4">
                        <h5>{{ $activite->name }}</h5>
                      </div>
                      <div class="team-text text-center bg-white p-4">
                        <h5>{{ $activite->name }}</h5>
                        <p>{!! Str::limit($activite->description,50) !!}</p>

                          <div class="d-flex justify-content-center">
                            <a class="btn btn-light m-1" href="{{ route('activites.detail',$activite->slug)}}"
                              ><i class="fas fa-eye"></i
                            > Voir le détail</a>

                          </div>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
              <div class="row container text-center mt-4">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <a class="btn btn-primary py-2 px-5 "  href="{{ route('activites.all')}} " data-filter="*">Autres Activités <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>

          </div>
        </div>
      </div>

    <!-- Product End -->

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s" >
      <div class="container py-5">
        <div class="row g-5">
          @php
            use App\Models\Organisation;

            $organisations = Organisation::latest()->get();
            foreach ($organisations as $organisation) {

            }
          @endphp
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">
              {{ $organisation->name}}
            </h1>
            <p class="text-white mb-5">
              {!! $about->telephone !!}
            </p>

          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <form method="post" action="{{ route('contacts.store')}}">
                @csrf
                <div class="row g-3">
                  <div class="col-sm-12">
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
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        name="name"
                        placeholder="Votre nom"
                      />
                      <label for="gname">Votre Nom</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        name="email"
                        placeholder="Votre Email"
                      />
                      <label for="gmail">Votre Email</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        name="objet"
                        placeholder="Child Age"
                      />
                      <label for="cage">Votre Objet</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        name="message"
                        style="height: 80px"
                      ></textarea>
                      <label for="message">Votre Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      Nous contacter
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
          <h1 class="display-6 mb-5">Rencontrez les membres de notre équipe </h1>
        </div>
        <div class="row g-4">
          @foreach ($viewData['teams'] as $team)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item rounded">
                <img class="img-fluid" src="{{ asset('teams/'.$team->image)}}" alt="" />
                <div class="text-center p-4">
                  <h5>{{ $team->name }}</h5>
                  <span>{{ $team->role }}</span>
                </div>
                <div class="team-text text-center bg-white p-4">
                  <h5>{{ $team->name }}</h5>
                  <p>{{ $team->role }}</p>

                    <div class="d-flex justify-content-center">
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->twitter }}"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->facebook }}"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->youtube }}"
                        ><i class="fab fa-youtube"></i
                      ></a>
                      <a class="btn btn-square btn-light m-1" href="{{ $organisation->linkedin }}"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </div>
                </div>
              </div>
            </div>
          @endforeach


        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Ce qu'ils disent à propos de nos services</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-left h-100">


            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              @foreach ($viewData['temoignages'] as $temoignage)
                <div class="testimonial-item text-center">
                  <img
                    class="img-fluid rounded mx-auto mb-4"
                    src="{{asset('temoignages/'.$temoignage->image)}}"
                    alt=""
                  />
                  <p class="fs-5">
                    {{ $temoignage->description }}
                  </p>
                  <h5>{{ $temoignage->name }}</h5>
                  <span>{{ $temoignage->title }}</span>
                </div>
              @endforeach

            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-right h-100">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

      </div>
      <!-- Testimonial End -->
    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Nos partenaires</h1>
        </div>
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach ($viewData['partenaires'] as $partenaire)
                        <img src="{{asset('partenaires/'.$partenaire->image)}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection



