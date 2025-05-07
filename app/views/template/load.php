<script src="<?= base_url ?>assets/load.js"></script>
<script src="<?= base_url ?>assets/toast/toast.js"></script>
<script>
    handleAjaxDelete(
  '.btn-delete', 
"Delete this Data?", 
"Data deleted!", 
"<?= path('produk') ?>");


//  update ajax

  submitFormAjax(
    "#formUpdate",
    "<?= path('produk/update_data')?>",
    "<?= path('produk')?>",
    "Data Update Successfully",
    "Update Failed"
  );

  submitFormAjax(
    "#formAdd",
    "<?= path('produk/tambah_data')?>",
    "<?= path('produk')?>",
    "Data Update Successfully",
    "Update Failed"
  )
  </script>
  </html>