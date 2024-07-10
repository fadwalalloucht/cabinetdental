<!doctype html>
<html lang="{{ app()->getLocale() }}">
<body>

   @include('header')
    
   <div class="container">
		
      <div class="page-inner">
        <div class="page-header">
          <h3 class="fw-bold mb-3">Images</h3>
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
              <a href="#">Ajouter image</a>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title">Ajouter Image</div>
              </div>
              <div class="card-body">
               <div class="row">
                  <div class="col-md-12 col-lg-12">
                     <div class="mb-3">
                        <label for="formFile" class="form-label">upload image</label>
                        <input class="form-control" type="file" id="formFile">
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