<!doctype html>
<html lang="{{ app()->getLocale() }}">
  
<body>

   @include('header')
    
   <div class="container">
      <div class="page-inner">
        <!-- Card -->
        <h3 class="fw-bold mb-3">Dashboard</h3>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Client</p>
                      <h4 class="card-title">1,294</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-user-check"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Subscribers</p>
                      <h4 class="card-title">1303</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-chart-pie"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Sales</p>
                      <h4 class="card-title">$ 1,345</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-secondary card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="far fa-check-circle"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Order</p>
                      <h4 class="card-title">576</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
         <div class="card">
           <div class="card-header">
             <div class="card-title">Chart with HTML Legends</div>
           </div>
           <div class="card-body">
             <div class="card-sub">
               Sometimes you need a very complex legend. In these cases,
               it makes sense to generate an HTML legend. Charts provide
               a generateLegend() method on their prototype that returns
               an HTML string for the legend.
             </div>
             <div class="chart-container">
               <canvas id="htmlLegendsChart"></canvas>
             </div>
             <div id="myChartLegend"></div>
           </div>
         </div>
       </div>
     </div>
     


   @include('footer')




   </div>
   
</body>
</html> 


