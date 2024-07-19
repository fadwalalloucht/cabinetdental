@extends('layouts.master')

@section('title')
Ajouter horaire
@endsection

@section('content')

<div class="container">
   <div class="page-inner">
      <div class="page-header">
         <h3 class="fw-bold mb-3">Horaire</h3>
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
               <a href="#">Ajouter horaire</a>
            </li>
         </ul>
      </div>

      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Ajouter horaire</div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12 col-lg-12">
                        <form action="/addshift" method="POST" >
                           {{ csrf_field() }}
                           <div class="form-group">
                              <label for="firstday">Premier jour de travail :</label>
                              <input type="text" name="firstday" class="form-control" id="firstday" placeholder="Le jour" required>
                           </div>
                           <div class="form-group">
                              <label for="lastday">Dernier jour de travail :</label>
                              <input type="text" name="lastday" class="form-control" id="lastday" placeholder="Le jour" required>
                           </div>
                           <div class="form-group" style="margin-bottom: 4px;">
                              <label for="openhour">Heure d'ouverture :</label>
                              <div class='input-group date' id='datetimepicker' >
                                 <input type='text' class="form-control" name="openhour" />
                                 <span class="input-group-addon" style="padding: 6px 11.5px;">
                                    <span> 
                                       <i class="fas fa-calendar-alt"></i>
                                    </span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group" style="margin-bottom: 4px;">
                              <label for="closehour">Heure de fermeture :</label>
                              <div class='input-group date' id='datetimepicker2'>
                                 <input type='text' class="form-control" name="closehour" />
                                 <span class="input-group-addon" style="padding: 6px 11.5px;">
                                    <span> 
                                       <i class="fas fa-calendar-alt"></i>
                                    </span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="samedi">Pour samedi :</label>
                              <input type="text" name="samedi" class="form-control" id="samedi" placeholder="Le jour" required>
                           </div>
                           <div class="form-group" style="margin-bottom: 4px;">
                              <label for="sopenhour">Heure d'ouverture :</label>
                              <div class='input-group date' id='datetimepicker3'>
                                 <input type='text' class="form-control" name="sopenhour" />
                                 <span class="input-group-addon" style="padding: 6px 11.5px;">
                                    <span> 
                                       <i class="fas fa-calendar-alt"></i>
                                    </span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group" style="margin-bottom: 4px;">
                              <label for="sclosehour">Heure de fermeture :</label>
                              <div class='input-group date' id='datetimepicker4'>
                                 <input type='text' class="form-control" name="sclosehour" />
                                 <span class="input-group-addon" style="padding: 6px 11.5px;">
                                    <span> 
                                       <i class="fas fa-calendar-alt"></i>
                                    </span>
                                 </span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="phone">Numéro de téléphone en cas d'urgence :</label>
                              <input type="text" name="phone" class="form-control" id="phone" placeholder="Numéro" required>
                           </div>
                           <div class="card-action">
                              <button type="submit" class="btn btn-success">Soumettre</button>
                              <button type="button" class="btn btn-danger">Annuler</button>
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
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet" />
<script type="text/javascript">
   $(function () {
      $('#datetimepicker').datetimepicker({
         ignoreReadonly: true,
         format: 'HH:mm'
      });
      $('#datetimepicker2').datetimepicker({
         ignoreReadonly: true,
         format: 'HH:mm'
      });
      $('#datetimepicker3').datetimepicker({
         ignoreReadonly: true,
         format: 'HH:mm'
      });
      $('#datetimepicker4').datetimepicker({
         ignoreReadonly: true,
         format: 'HH:mm'
      });
   });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection
