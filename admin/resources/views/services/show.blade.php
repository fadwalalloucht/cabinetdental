<!doctype html>
<html lang="{{ app()->getLocale() }}">
<body>

   @include('header')
    
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
              <a href="#">Modifier un service</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Modfier Un Service</div>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="email2">Nom de service :</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email2"
                        placeholder="Entrer le Nom"
                      />
                      <br>
                        <label for="description">Description :</label>
                           <div class="input-group">
                             <textarea
                               class="form-control"
                               aria-label="With textarea"
                             ></textarea>
                             
                           </div>
                           <br>
                           <label for="description">Image :</label>
                           <div class="input-group">
                             <br>
                             <input class="form-control" type="file" id="formFile">
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