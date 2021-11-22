<!-- Bootstrap core JavaScript-->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


*
<!-- base:js -->
 <script src="{{URL::asset('assets/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{URL::asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{URL::asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{URL::asset('assets/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{URL::asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{URL::asset('assets/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{URL::asset('assets/js/dashboard.js')}}"></script>
  


  <script>
    
    $(document).ready(function() {
          $('#dataTable').DataTable();
    });
</script>


  <!-- End custom js for this page-->
