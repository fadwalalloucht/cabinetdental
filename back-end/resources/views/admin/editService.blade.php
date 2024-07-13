@extends('layouts.master')

@section('title')
Edit Service
@endsection

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Service</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Edit service</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Service</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <form action="/updateService/{{$service->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <label for="name">Nom de service :</label>
                                        <input type="text" value="{{$service->name}}" name="name" class="form-control"
                                            id="nom" placeholder="Entrer le Nom" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="description">Description :</label>
                                        <div class="input-group">
                                            <textarea name="description" class="form-control" id="description"
                                                aria-label="With textarea" required>{{$service->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image :</label>
                                        <div class="input-group">
                                            <input class="form-control" type="file" name="image" id="image" >
                                        </div>
                                        @if($service->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('images/' . $service->image) }}" class="img-fluid"
                                                alt="Service Image" style="width: 200px; height: 150px;">
                                        </div>
                                        @endif
                                    </div>

                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">Edit</button>
                                        <a href="/liste-Service" class="btn btn-danger">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection


@section('scripts')
@endsection