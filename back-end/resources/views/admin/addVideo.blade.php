@extends('layouts.master')

@section('title')
 Upload 
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
       <div class="page-header">
           <h3 class="fw-bold mb-3">Ajouter Image Or Video</h3>
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
                   <a href="#">Ajouter Image Or Video</a>
               </li>
           </ul>
       </div>

       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <div class="card-title">Ajouter Image or Video</div>
                   </div>
                   <div class="card-body">
                       <div class="row">
                           <div class="col-md-12 col-lg-12">
                              <form action="{{ url('/addfile') }}" method="POST" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                   <div class="form-group">
                                       <label for="image">upload file (image , video) :</label>
                                       <br/>
                                       <br/>
                                       <div class="input-group">
                                           <input class="form-control" type="file" name="file" id="image" required>
                                       </div>
                                   </div>
                                    <br/>
                                   <div class="card-action">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                       <button type="button" class="btn btn-danger">Cancel</button>
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

