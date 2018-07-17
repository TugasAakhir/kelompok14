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
    <link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/css/colors/default-dark.css');?>" id="theme" rel="stylesheet">

</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <img src="<?php echo base_url('assets/images/icons/te.png');?>" alt="homepage" class="dark-logo" width="125px" height="50px" />
                        </b>
                    </a>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                 <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/anggota/index');?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tabel Anggota</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/kategori/index');?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tabel Kategori</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/barang/index');?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tabel Barang</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/keranjangbelanja/index');?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tabel Transaksi</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/login/logout');?>" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Transaksi</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div align="right">
                                    <button type="button" class="btn waves-effect waves-light pull-left hidden-sm-down btn-success btn-lg" onclick="add_keranjangbelanja()"><i class="glyphicon glyphicon-plus"></i>Add Transaksi</button>
                                </div>
                                <div class="box-body table-responsive">
                                    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID Transaksi</th>
                                                <th>ID Barang</th>
                                                <th>ID Kategori</th>
                                                <th>Total Harga</th>
                                                <th style="width:175px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($KeranjangBelanja_List as $KeranjangBelanja){?>
                                            <tr>
                                                <td><?php echo $KeranjangBelanja->idKeranjangBelanja;?></td>
                                                <td><?php echo $KeranjangBelanja->idBarang;?></td>
                                                <td><?php echo $KeranjangBelanja->idKategori;?></td>
                                                <td><?php echo $KeranjangBelanja->totalHarga;?></td>
                                                <td>
                                                    <button class="btn btn-warning" onclick="edit_keranjangbelanja(<?php echo $KeranjangBelanja->idKeranjangBelanja;?>)"><i class="glyphicon glyphicon-pencil"></i>Edit</button>
                                                    <button class="btn btn-danger" onclick="delete_keranjangbelanja(<?php echo $KeranjangBelanja->idKeranjangBelanja;?>)"><i class="glyphicon glyphicon-remove"></i>Delete</button>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>ID Transaksi</th>
                                                <th>ID Barang</th>
                                                <th>ID Kategori</th>
                                                <th>Total Harga</th>
                                                <th style="width:175px;">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <p id="demo"></p>
                    </div>
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
                    var save_method; //for save method string
                    var table;


                    function add_keranjangbelanja()
                    {
                      save_method = 'add';
                      $('#form')[0].reset(); // reset form on modals
                      $('#modal_form').modal('show'); // show bootstrap modal
                    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
                    }

                    function edit_keranjangbelanja(id)
                    {
                      save_method = 'update';
                      $('#form')[0].reset(); // reset form on modals

                      //Ajax Load data from ajax
                      $.ajax({
                        url : "<?php echo site_url('keranjangbelanja/ajax_edit/')?>/" + id,
                        type: "GET",
                        dataType: "JSON",
                        success: function(data)
                        {
                            $('[name="idKeranjangBelanja"]').val(data.idKeranjangBelanja);
                            $('[name="idBarang"]').val(data.idBarang);
                            $('[name="idKategori"]').val(data.idKategori);
                            $('[name="totalHarga"]').val(data.totalHarga);

                            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                            $('.modal-title').text('Edit Pengiriman'); // Set title to Bootstrap modal title

                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error get data from ajax');
                        }
                    });
                    }



                    function save()
                    {
                      var url;
                      if(save_method == 'add')
                      {
                          url = "<?php echo site_url('keranjangbelanja/keranjangbelanja_add')?>";
                      }
                      else
                      {
                          url = "<?php echo site_url('keranjangbelanja/keranjangbelanja_update')?>";
                      }
                      
                       // ajax adding data to database
                          $.ajax({
                            url : url,
                            type: "POST",
                            data: $('#form').serialize(),
                            dataType: "JSON",
                            success: function(data)
                            {
                               //if success close modal and reload ajax table
                              $('#modal_form').modal('hide');
                              location.reload();// for reload a page
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                alert('Error adding / update data');
                            }
                        });
                    }

                    function delete_keranjangbelanja(id)
                    {
                      if(confirm('Are you sure delete this data?'))
                      {
                        // ajax delete data from database
                          $.ajax({
                            url : "<?php echo site_url('keranjangbelanja/keranjangbelanja_delete')?>/"+id,
                            type: "POST",
                            dataType: "JSON",
                            success: function(data)
                            {
                               location.reload();
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                alert('Error deleting data');
                            }
                        });

                      }
                    }
    </script>
  
                 
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Admin by kelompok14
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
     <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Keranjang Belanja Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="idKeranjangBelanja"/>
          <div class="form-body">
            
             <div class="form-group">
              <label class="control-label col-md-3">ID Barang</label>
              <div class="col-md-9">
                <select class="form-control"  name="idBarang">
                    <option>--</option>
                    <?php foreach ($nama_barang as $barang) {?>
                        <option><?php echo $barang->namaBarang;?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3">ID Kategori</label>
              <div class="col-md-9">
                <select class="form-control"  name="idKategori">
                    <option>--</option>
                    <?php foreach ($nama_kategori as $kategori) {?>
                        <option><?php echo $kategori->namaKategori;?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-md-3">Total Harga</label>
              <div class="col-md-9">
                <input name="totalHarga" placeholder="Total Harga" class="form-control" type="text">
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->  
    
</body>
</html>