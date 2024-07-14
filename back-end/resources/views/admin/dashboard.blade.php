@extends('layouts.master')

@section('title')
Dashboard
@endsection



@section('content')
<div class="page-inner">
  <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Dashboard</h3>
    </div>

  </div>
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-primary bubble-shadow-small">
                <i class="fas fa-users"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
              <div class="numbers">
                <p class="card-category">Visitors</p>
                <h4 class="card-title">1,294</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-info bubble-shadow-small">
                <i class="fas fa-user-check"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
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
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-success bubble-shadow-small">
                <i class="fas fa-luggage-cart"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
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
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-secondary bubble-shadow-small">
                <i class="far fa-check-circle"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
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
  <div class="row">
    <div class="col-md-8">
      <div class="card card-round">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">User Statistics</div>
            {{-- <div class="card-tools">
              <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                <span class="btn-label">
                  <i class="fa fa-pencil"></i>
                </span>
                Export
              </a>
              <a href="#" class="btn btn-label-info btn-round btn-sm">
                <span class="btn-label">
                  <i class="fa fa-print"></i>
                </span>
                Print
              </a>
            </div>
            --}}
          </div>
        </div>
        <div class="card-body">
          <div class="chart-container" style="min-height: 375px">
            <canvas id="statisticsChart"></canvas>
          </div>
          <div id="myChartLegend"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-primary card-round">
        <div class="card-header">
          <div class="card-head-row">
            <div class="card-title">Aujourd'hui</div>
            <div class="card-tools">

              {{-- <div class="dropdown">
                {{-- <button class="btn btn-sm btn-label-light dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Export
                </button> --}}
                {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="card-category" id="dateDisplay"></div>
          <script>
            function formatDate(date) {
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                return new Intl.DateTimeFormat('fr', options).format(date);
            }
    
            function displayToday() {
                const today = new Date();
                const formattedDate = formatDate(today);
                document.getElementById('dateDisplay').textContent = formattedDate;
            }
    
            displayToday();
          </script>
        </div>
        <div class="card-body pb-0">
          <div class="mb-4 mt-2">
            <h1>Vous êtes le meilleur. Passez une bonne journée !</h1>
          </div>
          {{-- <div class="pull-in">
            <canvas id="dailySalesChart"></canvas>
          </div> --}}
        </div>
      </div>
      <div class="card card-round">
        <div class="card-body pb-0">
          <div class="h1 fw-bold float-end text-primary">+5%</div>
          <h2 class="mb-2">17</h2>
          <p class="text-muted">Users online</p>
          <div class="pull-in sparkline-fix">
            <div id="lineChart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Our Location</div>
        </div>
        <div class="card-body">
          <iframe class="map-wrap" style="width:100%; height: 445px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.594389185703!2d-5.798149124698097!3d35.76077302560114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b812292c7993b%3A0xdf45bc0d9a4a0f20!2sCentre%20Dentaire%20Dr.%20Asmae%20El%20Bakkali%20Ettaheri!5e0!3m2!1sen!2sma!4v1719016442370!5m2!1sen!2sma"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border: 0; width: 100%"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@section('scripts')
@endsection