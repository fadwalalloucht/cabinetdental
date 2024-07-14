@extends('layouts.master')

@section('title')
Upload
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
      <div class="page-header">
         <h3 class="fw-bold mb-3">Edit </h3>
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
               <a href="#">Edit</a>
            </li>
         </ul>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Edit image\video</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12 col-lg-12">
                        <form action="/updategalerie/{{$file->id}}" method="POST" enctype="multipart/form-data">
                           {{ csrf_field() }}
                           {{ method_field('PUT')}}
                           <div class="form-group">
                              <label for="image">upload file (image , video) :</label>
                              <br />
                              <div class="input-group">
                                 <input class="form-control" type="file" name="file" id="image">
                              </div>
                              <br />
                              <label for="image">current file (image , video) :</label>

                              @if($file->type == 'image')
                              <div class="mt-2">
                                 <img src="{{ asset('uploads/' . $file->file) }}" class="img-fluid"
                                    alt="Image {{ $file->id }}" style="width: 200px; height: 150px;">
                              </div>
                              @elseif($file->type == 'video')
                              <div class="mt-2">
                                 <video  controls class="img-fluid">
                                    <source src="{{ asset('uploads/' . $file->file) }}"
                                       type="video/{{ pathinfo($file->file, PATHINFO_EXTENSION) }}">
                                    Your browser does not support the video tag.
                                 </video>
                              </div>
                              @endif
                           </div>

                           <div class="card-action">
                              <button type="submit" class="btn btn-success">Edit</button>
                              <a href="/liste-Galeries" class="btn btn-danger">Cancel</a>
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