@extends('layouts.master')

@section('title')
Liste Service
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Tous Les Services</h4>
                
                  </div>

               </div>

               <div class="card-body">
                  <div class="table-responsive">

                     <table id="add-row" class="display table table-striped table-hover">

                        <thead>

                           <tr>

                              <th>Id</th>
                              <th>Image</th>
                              <th>Titre</th>
                              <th>Description</th>

                              <th style="width: 10%">Action</th>
                           </tr>

                        </thead>
                        <tbody>
                           @foreach($services as $service)
                           <tr>
                              <td>#{{ $service->id }}</td>
                              <td>
                                 <img src="{{ asset('images/' . $service->image) }}" class="img-fluid"
                                    alt="Image {{ $service->id }}" width="50" height="50">
                              </td>
                              <td>{{ $service->name }}</td>
                              <td>{{ $service->description }}</td>
                              <td>
                                 <div class="form-button-action">
                                    <a href="/service-edit/{{ $service->id}}" class="btn btn-link btn-primary btn-lg"
                                       data-bs-toggle="tooltip" title="Edit Task">
                                       <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="/deleteservice/{{ $service->id }}" method="POST"
                                       style="display:inline-block;">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}
                                       <button type="submit" class="btn btn-link btn-danger" data-bs-toggle="tooltip"
                                          title="Remove">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                       </button>
                                    </form>


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
</div>
@endsection


@section('scripts')
@endsection