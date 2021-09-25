<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-desktop"></i>
                        <a href="#">Master Web</a>
                </li>
                <li class="active">Kelompok Keluhan</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                        <h4 class="pink">
                            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                            <?= $title; ?>
                            <div class="pull-right tableTools-container"></div>
                        </h4>
                    </div>
                    <div class="table-header">
                            Hasil "<?= $title; ?>"
                    </div>
                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"></div>
        
                    <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr> 
                                <th class="center" width="5%">No</th>  
                                <th class="center" width="20%">Nama</th>
                                <th class="center" width="20%">Alamat</th>
                                <th class="center" width="20%">No telfon</th>
                                <th class="center" width="25%">Keluhan</th>
                                <th class="center" width="25%">Kritik dan saran</th>
                                <th class="center" >
                                    <a href="# " class="tooltip-info" title="Tambah">
                                    <span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a>
                                </th>
                            </tr>
                        </thead>                    
                            <tr>
                                <td align="center"></td>
                                <td></td>
                                <td align="center"></td>
                            </tr>
                    </table>
                    <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                </div>
            </div>
        </div>
    </div> 
</div>      

<div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Kategori Keluhan
                </div>
            </div>
            <div class="modal-body">
                <form name="f_kategori" id="f_kategori" action="">
                    <input type="hidden" name="txtKodeKeluhan" id="txtKodeKeluhan" value="">
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Nama</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNama" id="txtNama" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Alamat</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtAlamat" id="txtAlamat" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">No telfon</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNoTelfon" id="txtNoTelfon" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keluhan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeluhan" id="txtKeluhan" required data-parsley-error-message="Field ini harus diisi" value="">
                        <tr><td style="width: 25%">Kritik dan Saran</td>
                        <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKritikdanSaran" id="txtKritikdanSaran" required data-parsley-error-message="Field ini harus diisi" value="">
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                    <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-minus-circle"></i> Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Simpan Modal -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white"> &times; </span>
                    </button>
                    Simpan Data 
                </div>
            </div>
            <div class="modal-body">
                <div id="konfirmasisimpan"></div>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-white btn-default btn-round">
                    <i class="fa fa-minus-circle"></i>
                    Tutup
                </a>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Simpan Modal -->

<!-- Hapus Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white"> &times; </span>
                    </button>
                    Hapus Data 
                </div>
            </div>
            <div class="modal-body">
                <div id="konfirmasihapus"></div>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn btn-white btn-default btn-round">
                    <i class="fa fa-minus-circle"></i>
                    Tutup
                </a>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Hapus Modal -->
<script>
$(document).ready(function() {

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>keluhan/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "orderable": false, "targets": 2 },
            { "visible": false, "targets": [7], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

    $('#datatable tbody').on( 'click', '.fa-share-square-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[7];
                    
                    jawab=confirm("Apakah anda yakin untuk menyimpan Data \n"+
                                    "Perlengkapan: "+myTable.row( $(this).parents('tr') ).data()[1]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>keluhan/simpan/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal4").modal('show');
                        if (obj.msg[0]=="simpan"){
                            
                            
                            $('#konfirmasisimpan').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Simpan Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasisimpan').html('');
                                $("#myModal4").modal('hide');
                            },2000);

                            myTable.ajax.reload();
                            
                        } else {
                        
                            $('#konfirmasisimpan').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[7];
                    
                    jawab=confirm("Apakah yakin untuk menghapus record \n"+
                                    "Perlengkapan: "+myTable.row( $(this).parents('tr') ).data()[1]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>keluhan/hapus/", { id:id  }, function( data ) {
                        obj = $.parseJSON(data);
                        $("#myModal3").modal('show');
                        if (obj.msg[0]=="hapus"){
                            
                            
                            $('#konfirmasihapus').html(
                                        '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                                        '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                        '   <strong>Hapus Data</strong><br/>'+obj.msg[1]+
                                        '</div>');
                            setTimeout(function() {
                                $('#konfirmasihapus').html('');
                                $("#myModal3").modal('hide');
                            },2000);
                            
                            myTable.ajax.reload();
                            
                        } else {
                        
                            $('#konfirmasihapus').html(
                                '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                                '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                '   <strong>Error</strong><br/>'+obj.msg[1]+
                                '</div>');
                        }
                    });
            });           
            
     $('#datatable thead').on( 'click', '.fa-search-plus', function () {
                $("#m_kategori").modal('show');
                $('#txtKodeKeluhan').val('');
                $('#txtNama').val('');
                $('#txtAlamat').val('');
                $('#txtNoTelfon').val('');
                $('#txtKeluhan').val('');
                $('#txtKritikdanSaran').val('');


                
     });

     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        id  = myTable.row( $(this).parents('tr') ).data()[7];
        $('#txtNama').val(nama);
        $('#txtAlamat').val(nama1);
        $('#txtNoTelfon').val(nama2);
        $('#txtKeluhan').val(nama3);
        $('#txtKritikdanSaran').val(nama4);
        $('#txtKodeKeluhan').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>keluhan/add/", {
                type:1,
                txtKodeKeluhan:$('#txtKodeKeluhan').val(),
                txtNama:$('#txtNama').val(),
                txtAlamat:$('#txtAlamat').val(),
                txtNoTelfon:$('#txtNoTelfon').val(),
                txtKeluhan:$('#txtKeluhan').val(),
                txtKritikdanSaran:$('#txtKritikdanSaran').val()


            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        $('#txtKodeKeluhan').val('');
                        $('#txtNama').val('');
                        $('#txtAlamat').val('');
                        $('#txtNoTelfon').val('');
                        $('#txtKeluhan').val('');
                        $('#txtKritikdanSaran').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      myTable.ajax.reload();  
                
            });
            
    });


});
</script>

