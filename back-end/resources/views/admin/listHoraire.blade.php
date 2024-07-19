@extends('layouts.master')

@section('title')
Liste horaire
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="d-flex align-items-center">
                     <h4 class="card-title">Tous Les Horaires</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                           <tr>
                              <th>Id</th>
                              <th>1er Jour</th>
                              <th>Dernier Jour</th>
                              <th>Heure D'ouverture</th>
                              <th>Heure Fermeture</th>
                              <th>Samedi</th>
                              <th>Heure D'ouverture (Samedi)</th>
                              <th>Heure Fermeture (Samedi)</th>
                              <th>Téléphone</th>
                              <th style="width: 10%">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($shifts as $shift)
                           <tr>
                              <td>#{{ $shift->id }}</td>
                              <td>{{ $shift->firstday }}</td>
                              <td>{{ $shift->lastday }}</td>
                              <td>{{ $shift->openhour }}</td>
                              <td>{{ $shift->closehour }}</td>
                              <td>{{ $shift->samedi }}</td>
                              <td>{{ $shift->sopenhour }}</td>
                              <td>{{ $shift->sclosehour }}</td>
                              <td>{{ $shift->phone }}</td>
                              <td>
                                 <div class="form-button-action">
                                    <a href="/shift-edit/{{ $shift->id}}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" title="Modifier">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="/delete-shift/{{ $shift->id }}" method="POST" style="display:inline-block;">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}
                                       <button type="submit" class="btn btn-link btn-danger" data-bs-toggle="tooltip" title="Supprimer">
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
