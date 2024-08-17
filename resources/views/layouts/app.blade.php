<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Gestion Préinscription</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden; /* Hide any overflow from the content */
    }
    
    .background-image {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('images/img_isi.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      z-index: -1; /* Ensure it is behind the content */
    }

    .centered-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      z-index: 1; /* Ensure text is on top of the background */
    }

    .container-scroller {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    .container-fluid.page-body-wrapper {
      display: flex;
      flex: 1;
      flex-direction: column;
      overflow: hidden; /* Hide any overflow from the content */
    }

    .main-panel {
      display: none; /* Hide the main content */
    }
  </style>
</head>

<body>
  <div class="background-image"></div>
  
  <div class="centered-text">
    VOTRE DOSSIER DE PRÉINSCRIPTION À L'ISI
  </div>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts._navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts._sidebar')
      <!-- partial -->
      <!-- Hide the content wrapper -->
      {{-- <div class="main-panel">
        @yield('content')
      </div> --}}
    </div>
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->            
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset("vendors/chart.js/Chart.min.js")}}"></script>
  <script src="{{asset("vendors/bootstrap-datepicker/bootstrap-datepicker.min.js")}}"></script>
  <script src="{{asset("vendors/progressbar.js/progressbar.min.js")}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset("js/off-canvas.js")}}"></script>
  <script src="{{asset("js/hoverable-collapse.js")}}"></script>
  <script src="{{asset("js/template.js")}}"></script>
  <script src="{{asset("js/settings.js")}}"></script>
  <script src="{{asset("js/todolist.js")}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset("js/jquery.cookie.js")}}" type="text/javascript"></script>
  <script src="{{asset("js/dashboard.js")}}"></script>
  <script src="{{asset("js/Chart.roundedBarCharts.js")}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
