/**
 * Created by sankester on 14/05/2017.
 */

function hapus_peminjam(id){
    $.ajax({
        url :  "<?php echo site_url('Peminjam/delete');?>/" +id,
        type : "POST",
        dataType : "JSON",
        success : function(data){
            location.reload();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}
