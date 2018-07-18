<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/admin/assets/images/favicon.png');?>">
    <title>Admin</title>
    <link href="<?php echo base_url('assets/admin/assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dataTable/css/dataTables.bootstrap.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/colors/default-dark.css');?>" id="theme" rel="stylesheet">

</head>

<body class="fix-header card-no-border fix-sidebar">
    <div id="main-wrapper" class="container">
        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>ID Barang</th>
                <th>ID Kategori</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Warna</th>
                <th>Berat</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_barang as $barang){?>
                <tr>
                    <td><?php echo $barang->idBarang;?></td>
                    <td><?php echo $barang->idKategori;?></td>
                    <td><?php echo $barang->namaBarang;?></td>
                    <td><?php echo $barang->deskripsi;?></td>
                    <td><?php echo $barang->warna;?></td>
                    <td><?php echo $barang->berat;?></td>
                    <td><?php echo $barang->jumlah;?></td>
                    <td><?php echo $barang->harga;?></td>
                    <td>
                    <?php if($barang->foto != null){?>
                        <img src="<?php echo base_url().'assets/uploads/'.$barang->foto;?>" width="100" height="75"></img>
                    <?php 
                    }
                    else{
                        echo "tidak ada gambar";
                    }
                    ?>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<script src="<?php echo base_url('assets/dataTable/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/dataTable/js/dataTables.bootstrap.js');?>"></script>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url('assets/admin/assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url('assets/admin/assets/plugins/bootstrap/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/datatables.min.js');?>"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url('assets/admin/js/perfect-scrollbar.jquery.min.js');?>"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets/admin/js/waves.js');?>"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets/admin/js/sidebarmenu.js');?>"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets/admin/js/custom.min.js');?>"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</body>
</html>
