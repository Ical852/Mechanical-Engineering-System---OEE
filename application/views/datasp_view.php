<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                                <a style="text-decoration: none;" href="<?= base_url('sparepart'); ?> ">Home</a>
                </li>
                <li class="active">Data Spare Part</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">

            <div class="ace-settings-container " id="ace-settings-container">
                                  <div class="btn btn-app btn-xs btn-success ace-settings-btn " id="ace-settings-btn">
                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                                  </div>

                                  <div class="ace-settings-box clearfix " style="border-color: #1A8237;" id="ace-settings-box">
                                    <div class="pull-left width-50">
                                      <div class="ace-settings-item">
                                        <div class="pull-left">
                                          <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#34495E">#34495E</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                          </select><div class="dropdown dropdown-colorpicker"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" style="background-color:#34495E;" data-color="#34495E"></a></li><li><a class="colorpick-btn" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>
                                        </div>
                                        <span>&nbsp; Pilih Warna Menu</span>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off">
                                        <label class="lbl" for="ace-settings-navbar"> Header Diam</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off">
                                        <label class="lbl" for="ace-settings-sidebar"> Menu Diam</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off">
                                        <label class="lbl" for="ace-settings-breadcrumbs"> Head Content Diam</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off">
                                        <label class="lbl" for="ace-settings-rtl"> Ubah Sisi</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off">
                                        <label class="lbl" for="ace-settings-add-container">
                                          Kecilkan
                                        </label>
                                      </div>
                                    </div><!-- /.pull-left -->

                                    <div class="pull-left width-50">
                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off">
                                        <label class="lbl" for="ace-settings-hover"> Submenu Pop Up</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off">
                                        <label class="lbl" for="ace-settings-compact"> Menu Icon Bigger</label>
                                      </div>

                                      <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off">
                                        <label class="lbl" for="ace-settings-highlight"> Ubah Active Item</label>
                                      </div>
                                    </div><!-- /.pull-left -->
                                  </div><!-- /.ace-settings-box -->
                                </div>
                                
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                    </div>
                    <div class="table-header" style="background-color: #1A8237">
                            "<?= $title; ?>"
                    </div>
                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"></div>
        
                    <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-hover" style="width: 100%;">
                        <thead>
                            <tr> 
                                <th class="center" width="1%">No</th>
                                <th class="center" width="10%">Kode Barang</th>
                                <th class="center" width="10%">Nama Barang</th>
                                <th class="center" width="10%">Merek</th>
                                <th class="center" width="10%">Tipe/ Model/ No. Seri</th>
                                <th class="center" width="5%">Stok</th>
                                <th class="center" width="14%">Masuk Pada Tanggal</th>
                                <th class="center" width="20%">Keterangan</th>
                                <th class="center" >
                                    <a style="text-decoration: none;" href="# " class="tooltip-info" title="Tambah">
                                    <span class="blue"><i class="ace-icon fa fa-search-plus bigger-120">Tambah Stok Baru</i></span></a>
                                </th>
                            </tr>
                        </thead>                    
                            <tr>
                                <td align="center"></td>
                                <td></td>
                                <td align="center"></td>
                            </tr>
                    </table>
                    </div>
                    <!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                </div>
            </div>
        </div>
    </div> 
</div>      

<!-- modal input stok sp baru -->
<div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background-color: #1A8237">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Data Spare Part
                </div>
            </div>
            <div class="modal-body">
                <form name="f_kategori" id="f_kategori" action="">
                    <input type="hidden" name="txtKodeSp" id="txtKodeSp" value="">
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Kode Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKodeBarang" id="txtKodeBarang" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNamaBarang" id="txtNamaBarang" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Merek</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtMerek" id="txtMerek" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tipe/ Model/ No. Seri</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtTipe" id="txtTipe" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Jumlah Stok</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtStok" id="txtStok" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tanggal</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtDateSp" id="txtDateSp" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeterangan" id="txtKeterangan" required>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                    <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Masukkan</button>
                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-minus-circle"></i> Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal input stok sp baru -->

<!-- modal input pemasukkan stok sp -->
<div class="modal fade" id="m_kategori2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background-color: #1A8237">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Data Spare Part Masuk
                </div>
            </div>
            <div class="modal-body">
                <form name="f_kategori" id="f_kategori" action="">
                    <input type="hidden" name="txtKodeSpMasuk" id="txtKodeSpMasuk" value="">
                    <div id="konfirmasi2"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Tanggal</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtDateSpMasuk" id="txtDateSpMasuk" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Kode Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKodeBarangMasuk" id="txtKodeBarangMasuk" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNamaBarangMasuk" id="txtNamaBarangMasuk" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Merek</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtMerekMasuk" id="txtMerekMasuk" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tipe/ Model/ No. Seri</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtTipeMasuk" id="txtTipeMasuk" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Jumlah Masuk</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtJumlahMasuk" id="txtJumlahMasuk" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeteranganMasuk" id="txtKeteranganMasuk" required>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan2" name="btnSimpan2">
                    <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Masukkan</button>
                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-minus-circle"></i> Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal input pemasukkan stok sp -->

<!-- modal input pengeluaran stok sp -->
<div class="modal fade" id="m_kategori3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background-color: #1A8237">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Data Spare Part Keluar
                </div>
            </div>
            <div class="modal-body">
                <form name="f_kategori" id="f_kategori" action="">
                    <input type="hidden" name="txtKodeSpKeluar" id="txtKodeSpKeluar" value="">
                    <div id="konfirmasi3"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Tanggal</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtDateSpKeluar" id="txtDateSpKeluar" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Kode Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKodeBarangKeluar" id="txtKodeBarangKeluar" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNamaBarangKeluar" id="txtNamaBarangKeluar" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Merek</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtMerekKeluar" id="txtMerekKeluar" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tipe/ Model/ No. Seri</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtTipeKeluar" id="txtTipeKeluar" required readonly="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Jumlah Keluar</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtJumlahKeluar" id="txtJumlahKeluar" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeteranganKeluar" id="txtKeteranganKeluar" required>
                            </td>
                        </tr>
                    </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan3" name="btnSimpan3">
                    <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Masukkan</button>
                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-minus-circle"></i> Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal input pengeluaran stok sp -->

<!-- Hapus Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background-color: #1A8237">
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
$( "li.sp" ).addClass( "active open" );
$( "li.sp2" ).addClass( "active" );

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>datasp/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [9], "searchable": false }
        ],
        select: {
            style: 'multi'
        },

        dom :'Bflrtip',
        buttons: [
        { extend:'csv', text:' CSV', className:'fa fa-file-alt btn-success', titleAttr:'Export to CSV' },
        { extend: 'pdf', text:' PDF', className: 'fa fa-file-pdf btn-success', titleAttr:'Export to PDF' }, 
        { extend: 'copy', text: ' COPY', className: 'fa fa-copy btn-success', titleAttr:'Copy Record Data' },
        { extend: 'print', text: ' PRINT', className: 'fa fa-print btn-success', titleAttr:'Print Record Data' },
        { extend: 'colvis', text: ' KOLOM', className: 'fa fa-filter btn-success', titleAttr:'Sembunyikan Kolom', background:false },
        ],
        "lengthMenu" :[ [10, 25, 50, 100, 250, 500, -1], [10, 25, 50, 100, 250, 500, "ALL"] ]
        
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[9];
                    
                    jawab=confirm("Apakah yakin untuk menghapus data spare part \n"+
                                    "dengan kode: "+myTable.row( $(this).parents('tr') ).data()[1]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>datasp/hapus/", { id:id  }, function( data ) {
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
                $('#txtKodeSp').val('');
                $('#txtKodeBarang').val('');
                $('#txtNamaBarang').val('');
                $('#txtMerek').val('');
                $('#txtTipe').val('');
                $('#txtStok').val('');
                $('#txtDateSp').val('');
                $('#txtKeterangan').val('');
                
     });

     $('#datatable tbody').on( 'click', '.fa-cube', function () {            
        $("#m_kategori2").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[6];
        nama6    = myTable.row( $(this).parents('tr') ).data()[7];
        id  = myTable.row( $(this).parents('tr') ).data()[9];
        $('#txtDateSpMasuk').val();
        $('#txtKodeBarangMasuk').val(nama);
        $('#txtNamaBarangMasuk').val(nama1);
        $('#txtMerekMasuk').val(nama2);
        $('#txtTipeMasuk').val(nama3);
        $('#txtJumlahMasuk').val();
        $('#txtKeteranganMasuk').val();
        $('#txtKodeSpMasuk').val(id);

    });

     $('#datatable tbody').on( 'click', '.fa-outdent', function () {            
        $("#m_kategori3").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[6];
        nama6    = myTable.row( $(this).parents('tr') ).data()[7];
        id  = myTable.row( $(this).parents('tr') ).data()[9];
        $('#txtDateSpKeluar').val();
        $('#txtKodeBarangKeluar').val(nama);
        $('#txtNamaBarangKeluar').val(nama1);
        $('#txtMerekKeluar').val(nama2);
        $('#txtTipeKeluar').val(nama3);
        $('#txtJumlahKeluar').val();
        $('#txtKeteranganKeluar').val();
        $('#txtKodeSpKeluar').val(id);

    });


     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[6];
        nama6    = myTable.row( $(this).parents('tr') ).data()[7];
        id  = myTable.row( $(this).parents('tr') ).data()[9];
        $('#txtKodeBarang').val(nama);
        $('#txtNamaBarang').val(nama1);
        $('#txtMerek').val(nama2);
        $('#txtTipe').val(nama3);
        $('#txtStok').val(nama4);
        $('#txtDateSp').val(nama5);
        $('#txtKeterangan').val(nama6);
        $('#txtKodeSp').val(id);

        myTable.ajax.reload();
                
    });

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>datasp/add/", {
                type:1,
                txtKodeSp:$('#txtKodeSp').val(),
                txtKodeBarang:$('#txtKodeBarang').val(),
                txtNamaBarang:$('#txtNamaBarang').val(),
                txtMerek:$('#txtMerek').val(),
                txtTipe:$('#txtTipe').val(),
                txtStok:$('#txtStok').val(),
                txtDateSp:$('#txtDateSp').val(),
                txtKeterangan:$('#txtKeterangan').val()

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
                        
                        $('#txtKodeSp').val('');
                        $('#txtKodeBarang').val('');
                        $('#txtNamaBarang').val('');
                        $('#txtMerek').val('');
                        $('#txtTipe').val('');
                        $('#txtStok').val('');
                        $('#txtDateSp').val('');
                        $('#txtKeterangan').val('');
                        
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

     $('#btnSimpan2').click(function(){
            
        $.post( "<?php echo base_url(); ?>datasp/masuk/", {
                type:1,
                txtKodeSpMasuk:$('#txtKodeSpMasuk').val(),
                txtDateSpMasuk:$('#txtDateSpMasuk').val(),
                txtKodeBarangMasuk:$('#txtKodeBarangMasuk').val(),
                txtNamaBarangMasuk:$('#txtNamaBarangMasuk').val(),
                txtMerekMasuk:$('#txtMerekMasuk').val(),
                txtTipeMasuk:$('#txtTipeMasuk').val(),
                txtJumlahMasuk:$('#txtJumlahMasuk').val(),
                txtKeteranganMasuk:$('#txtKeteranganMasuk').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi2').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi2').html('');
                        },2000);
                        
                        $('#txtKodeSpMasuk').val('');
                        $('#txtDateSpMasuk').val('');
                        $('#txtKodeBarangMasuk').val('');
                        $('#txtNamaBarangMasuk').val('');
                        $('#txtMerekMasuk').val('');
                        $('#txtTipeMasuk').val('');
                        $('#txtJumlahMasuk').val('');
                        $('#txtKeteranganMasuk').val('');
                        
                    } else {
                        
                        $('#konfirmasi2').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      myTable.ajax.reload();  
                
            });
            
    });

     $('#btnSimpan3').click(function(){
            
        $.post( "<?php echo base_url(); ?>datasp/keluar/", {
                type:1,
                txtKodeSpKeluar:$('#txtKodeSpKeluar').val(),
                txtDateSpKeluar:$('#txtDateSpKeluar').val(),
                txtKodeBarangKeluar:$('#txtKodeBarangKeluar').val(),
                txtNamaBarangKeluar:$('#txtNamaBarangKeluar').val(),
                txtMerekKeluar:$('#txtMerekKeluar').val(),
                txtTipeKeluar:$('#txtTipeKeluar').val(),
                txtJumlahKeluar:$('#txtJumlahKeluar').val(),
                txtKeteranganKeluar:$('#txtKeteranganKeluar').val()

            }, function( data ) {
                
                console.log(data);
                    obj = $.parseJSON(data);
                        
                    if (obj.msg[0]=="ok"){
                        $('#konfirmasi3').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi3').html('');
                        },2000);
                        
                        $('#txtKodeSpKeluar').val('');
                        $('#txtDateSpKeluar').val('');
                        $('#txtKodeBarangKeluar').val('');
                        $('#txtNamaBarangKeluar').val('');
                        $('#txtMerekKeluar').val('');
                        $('#txtTipeKeluar').val('');
                        $('#txtJumlahKeluar').val('');
                        $('#txtKeteranganKeluar').val('');
                        
                    } else {
                        
                        $('#konfirmasi3').html(
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