@extends('layouts.frontend')

@section('content')
    
     <!-- Page Header Start -->
     <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">{{ $viewData['title']}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $viewData['title']}}
                </li>
                </ol>
            </nav>
        </div>
    </div>
   <!-- Page Header End -->

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
              <h1 class="display-6 mb-5">
                Si vous avez une autre question, prière de nous contacter
              </h1>
              <p class="mb-4">
                Entrez rirectement en contact avec nous en remplissant ce formulaire. 
                Notre service d'assiatance client vous répondra dans 48H maximum
              </p>
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
            <div
              class="col-lg-6 wow fadeIn"
              data-wow-delay="0.5s"
              style="min-height: 450px"
            >
              <div class="position-relative rounded overflow-hidden h-100">
                <iframe
                  class="position-relative w-100 h-100"
                  src="https://www.google.com/maps/place/Av.+M%C3%A9t%C3%A9o,+Lubumbashi/@-11.6496559,27.4449134,17z/data=!4m6!3m5!1s0x19723bf8e21a4b05:0x2fbe9a7877907c5a!8m2!3d-11.6496559!4d27.4474883!16s%2Fg%2F1tfkyl3n?entry=ttu"
                  frameborder="0"
                  style="min-height: 450px; border: 0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Appointment End -->

@endsection


   
