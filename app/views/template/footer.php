</div>
    <!-- Bootstrap core JavaScript-->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 9999;">
  <div id="liveToast" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">Success</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body" id="toastBody">
      Message goes here
    </div>
  </div>
</div>

</body>
<script src="<?= base_url ?>assets/jquery/jquery.js"></script>
<script src="<?= base_url ?>assets/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url ?>assets/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url ?>assets/sb-admin-2.min.js"></script>

    <script src="<?= base_url ?>assets/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url ?>assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "paging": true,
        "searching": true,
        "info": true,
        "ordering": true,
        "lengthMenu": [ [10, 5, 15, 20], [10, 5, 15, 20] ],
        "pageLength": 10 // Default number of rows
    });
});
</script>

