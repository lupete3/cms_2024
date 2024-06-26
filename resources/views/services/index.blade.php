

@extends('layouts.backend')

@section('content')

    <!-- Main Content -->
    <div class="main-content">
        
        <section class="section">
            <div class="section-header">
                <h1>{{ $viewData['title'] }}</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                  <div class="breadcrumb-item"><a href="{{ route('services.index')}}">Services</a></div>
                  <div class="breadcrumb-item">{{ $viewData['title'] }}</div>
                </div>
            </div>

            <div class="section-body ">
            
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $viewData['title'] }} </h4>
                                <div class="card-header-action">
                                    <a href="{{ route('services.create')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Ajouter un service</a>
                                </div>   
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>                                 
                                        <tr>
                                            <th>Icone</th>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viewData['services'] as $service)
                                            <tr>
                                                <td> <i class="{{ $service->icon }}"></i> </td>
                                                
                                                <td>
                                                    {{ $service->title }}
                                                </td>
                                                <td>
                                                    {{ $service->description }}
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Action</a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                          <a href="{{ route('services.edit',$service->id)}}" class="dropdown-item has-icon"><i class="far fa-edit text-primary"></i> Modifier</a>
                                                          <a href="{{ route('services.destroy', $service->id)}}" class="dropdown-item has-icon"><i class="fas fa-trash text-danger"></i> Supprimer</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection