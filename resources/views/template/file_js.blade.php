<!-- Jquery JS-->
<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap JS
<script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>  -->

<!-- Bootstrap JS 3.3.7-->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!--- Sparkline --->
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>


<!-- Vendor JS-->
<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>

<!--- Custom --->
<script src="{{asset('validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<!--- sweetalert --->
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<!--- Toastr --->
<script src="{{asset('js/toastr.min.js')}}"></script>
<!-- Main JS-->
<script src="{{asset('js/main.js')}}"></script>
<script>
  @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Sukses")
    toastr.options.closeMethod = 'fadeOut';
    toastr.options.closeDuration = 1000;
    toastr.options.closeEasing = 'swing';
  @endif
</script>
