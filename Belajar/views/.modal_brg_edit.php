<!-- dibawah ini adlh script EDIT mnggunakan modal bootsrap -->
<div id="edit" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit data barang</h4>
         </div>
         <form id="form" enctype="multipart/form-data">
            <div class="modal-body" id="modal-edit">
               <div class="form-group">
                  <label for="nm_brg" class="control-label">Nama Barang</label>
                  <input type="hidden" name="id_brg" id="id_brg">
                  <input type="text" name="nm_brg" class="form-control" id="nm_brg" required>
               </div>
               <div class="form-group">
                  <label for="hrg_brg" class="control-label">Harga Barang</label>
                  <input type="number" name="hrg_brg" class="form-control" id="hrg_brg" min="0" required>
               </div>
               <div class="form-group">
                  <label for="stok_brg" class="control-label">Stok Barang</label>
                  <input type="number" name="stok_brg" class="form-control" id="stok_brg" min="0" required>
               </div>
                <div class="form-group">
                  <label for="gbr_brg" class="control-label">Gambarnumber Barang</label>
                  <div style="margin-bottom: 5px;">
                     <img src="" id="pict" width="80px">
                  </div>
                  <input type="file" name="gbr_brg" class="form-control" id="gbr_brg">
               </div>
               <div class="modal-footer">
                  <input type="submit" class="btn btn-success" name="edit" value="Simpan">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).on("click", "#edit_brg", function(){
      var idbrg = $(this).data('id');
      var nmbrg = $(this).data('nama');
      var hrgbrg = $(this).data('harga');
      var stokbrg = $(this).data('stok');
      var gbrbrg = $(this).data('gbr');
      $("#modal-edit #id_brg").val(idbrg);
      $("#modal-edit #nm_brg").val(nmbrg);
      $("#modal-edit #hrg_brg").val(hrgbrg);
      $("#modal-edit #stok_brg").val(stokbrg);
      $("#modal-edit #pict").attr("src", "assets/img/barang/"+gbrbrg);
   })

   $(document).ready(function(e) {
      $("#form").on("submit", function(e) {
         e.preventDefault();
         $.ajax({
            url : 'models/proses_edit_barang.php',
            type : 'POST',
            data : new FormData(this),
            contentType : false,
            cache : false,
            processData : false, 
            success : function(msg) {
               $('.table').html(msg);
            }
         });
      });
   })
</script>