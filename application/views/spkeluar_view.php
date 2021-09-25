<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                                <a style="text-decoration: none;" href="<?= base_url('sparepart'); ?> ">Home</a>
                </li>
                <li class="active">Data Riwayat Spare Part Keluar</li>
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
                                <th class="center" width="4%">Tanggal</th>
                                <th class="center" width="10%">Kode Barang</th>
                                <th class="center" width="15%">Nama Barang</th>
                                <th class="center" width="10%">Merek</th>
                                <th class="center" width="10%">Tipe/ Model/ No. Seri</th>
                                <th class="center" width="5%">Jumlah Keluar</th>
                                <th class="center" width="25%">Keterangan</th>
                                <th class="center" >
                                    <a style="text-decoration: none;" href="# " class="tooltip-info" title="Tambah">
                                    <span class="blue"><i class="ace-icon fa fa-search-plus bigger-120">Tambah Sp Keluar</i></span></a>
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

<div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Tanggal</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtDateKeluar" id="txtDateKeluar" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Kode Barang</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtKodeBarangKeluar" id="txtKodeBarangKeluar" required>
                                <?php foreach ($kode_barang as $data): ?> 
                                <option value="<?php echo $data->kode_barang  ?>"><?php echo $data->kode_barang  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtNamaBarangKeluar" id="txtNamaBarangKeluar" required>
                                <?php foreach ($nama_barang as $data): ?> 
                                <option value="<?php echo $data->nama_barang  ?>"><?php echo $data->nama_barang  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Merek</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtMerekKeluar" id="txtMerekKeluar" required>
                                <?php foreach ($merek as $data): ?> 
                                <option value="<?php echo $data->merek  ?>"><?php echo $data->merek  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tipe/ Model/ No. Seri</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtTipeKeluar" id="txtTipeKeluar" required>
                                <?php foreach ($tipe as $data): ?> 
                                <option value="<?php echo $data->tipe  ?>"><?php echo $data->tipe  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Jumlah Barang Keluar</td>
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
                <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                    <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Masukkan</button>
                <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                    <i class="fa fa-minus-circle"></i> Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>

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
$( "li.report" ).addClass( "active open" );
$( "li.report2" ).addClass( "active" );

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>spkeluar/daftar_data/",
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
                    
                    jawab=confirm("Apakah anda yakin untuk membatalkan penggunaan \n"+
                                    "Spare Part: "+myTable.row( $(this).parents('tr') ).data()[3]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>spkeluar/hapus/", { id:id  }, function( data ) {
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
                $('#txtKodeSpKeluar').val('');
                $('#txtDateKeluar').val('');
                $('#txtKodeBarangKeluar').val('');
                $('#txtNamaBarangKeluar').val('');
                $('#txtMerekKeluar').val('');
                $('#txtTipeKeluar').val('');
                $('#txtJumlahKeluar').val('');
                $('#txtKeteranganKeluar').val('');
                
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
        $('#txtDateKeluar').val(nama);
        $('#txtKodeBarangKeluar').val(nama1);
        $('#txtNamaBarangKeluar').val(nama2);
        $('#txtMerekKeluar').val(nama3);
        $('#txtTipeKeluar').val(nama4);
        $('#txtJumlahKeluar').val(nama5);
        $('#txtKeteranganKeluar').val(nama6);
        $('#txtKodeSpKeluar').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>spkeluar/add/", {
                type:1,
                txtKodeSpKeluar:$('#txtKodeSpKeluar').val(),
                txtDateKeluar:$('#txtDateKeluar').val(),
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
                        $('#konfirmasi').html(
                            '<div class="alert alert-success alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Sukses</strong><br/>'+obj.msg[1]+
                            '</div>');
                            
                        setTimeout(function() {
                            $('#konfirmasi').html('');
                        },2000);
                        
                        $('#txtKodeSpKeluar').val('');
                        $('#txtDateKeluar').val('');
                        $('#txtKodeBarangKeluar').val('');
                        $('#txtNamaBarangKeluar').val('');
                        $('#txtMerekKeluar').val('');
                        $('#txtTipeKeluar').val('');
                        $('#txtJumlahKeluar').val('');
                        $('#txtKeteranganKeluar').val('');
                        
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