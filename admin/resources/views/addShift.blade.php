 <!doctype html>
<html lang="{{ app()->getLocale() }}">  
<body>

   @include('header')
    
   <div class="container">
		
      <div class="page-inner">
        <div class="page-header">
          <h3 class="fw-bold mb-3">Shift</h3>
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
              <a href="#">Ajouter Shift</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Ajouter Shift</div>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="email2">Jours :</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email2"
                        placeholder="le Jour"
                      />
                      <br>
                     
                      <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-group">
                                    <label for="timePicker">Select Time</label>
                                    <div class="input-group date" id="timePicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#timePicker"/>
                                        <div class="input-group-append" data-target="#timePicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    










                      
                  </div>
              </div>
              <div class="card-action">
                <button class="btn btn-success">Submit</button>
                <button class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


   @include('footer')



   </div>
</body>
</html> 


