 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>&copy; {{ now()->year }} Dreams Boutique. All rights reserved.</span>
        </div>
    </div>
</footer>

<!-- End of Footer -->


<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


<!-- Bootstrap core JavaScript-->
<script src="{{asset('assetsDashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assetsDashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assetsDashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assetsDashboard/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->

<!-- Page level custom scripts -->
{{-- <script src="{{asset('assetsDashboard/js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assetsDashboard/js/demo/chart-pie-demo.js')}}"></script> --}}


<!-- 27-3 -->
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assetsDashboard/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assetsDashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assetsDashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assetsDashboard/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('assetsDashboard/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assetsDashboard/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('assetsDashboard/js/demo/datatables-demo.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        // Select2 Multiple
        $('.sizes').select2({
            placeholder: "Select",
            allowClear: true
        });

         // Select2 Multiple
         $('.materials').select2({
            placeholder: "Select",
            allowClear: true
        });

         // Select2 Multiple
         $('.colors').select2({
            placeholder: "Select",
            allowClear: true
        });

    });

</script>

