<!-- HEADER TITLE -->
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                                <a style="text-decoration: none;" href="<?= base_url('admin'); ?> ">Home</a>
                </li>
                <li class="active">Data Mesin</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">

            <div class="ace-settings-container " id="ace-settings-container">
                                  <div class="btn btn-app btn-xs btn-primary ace-settings-btn " id="ace-settings-btn">
                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                                  </div>

                                  <div class="ace-settings-box clearfix " style="border-color: #34495E;" id="ace-settings-box">
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
                    <div class="table-header" style="background-color: #34495E">
                            "<?= $title; ?>"
                    </div>
                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"></div>
        
                    <!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered table-hover" style="width: 100%">
                        <thead>
                            <tr> 
                                <th class="center" width="5%">No</th>  
                                <th class="center" width="10%">Kode Mesin</th>
                                <th class="center" width="15%">Nama Mesin</th>
                                <th class="center" width="25%">Keterangan</th>
                                <th class="center" width="25%">Status</th>
                                <th class="center" >
                                    <a href="# " class="tooltip-info" title="Tambah" style="text-decoration: none;"><span class="blue"><i class="ace-icon fa fa-search-plus bigger-120">Tambah Mesin
                                    </i></span></a>
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
                <div class="table-header" style="background-color: #34495E">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white">&times;</span>
                    </button>
                    Data Mesin
                </div>
            </div>
            <div class="modal-body">
                <form name="f_kategori" id="f_kategori" action="">
                    <input type="hidden" name="txtIdMesin" id="txtIdMesin" value="">
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Kode Mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKodeMesin" id="txtKodeMesin" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNamaMesin" id="txtNamaMesin" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeterangan" id="txtKeterangan" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Status</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtStatus" id="txtStatus" required>
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

<!-- Hapus Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background-color: #34495E">
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
$( "li.oee" ).addClass( "active open" );
$( "li.mmesin" ).addClass( "active open" );
$( "li.mesin2" ).addClass( "active" );

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>datamesin/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [6], "searchable": false }
        ],
        select: {
            style: 'multi'
        },

        dom :'Bflrtip',
        buttons: [
        { extend:'csv', text:' CSV', className:'fa fa-file-alt btn-primary', titleAttr:'Export to CSV' },
        { extend: 'pdf', text:' PDF', className: 'fa fa-file-pdf btn-primary', titleAttr:'Export to PDF' }, 
        { extend: 'copy', text: ' COPY', className: 'fa fa-copy btn-primary', titleAttr:'Copy Record Data' },
        { extend: 'print', text: ' PRINT', className: 'fa fa-print btn-primary', titleAttr:'Print Record Data' },
        { extend: 'colvis', text: ' KOLOM', className: 'fa fa-filter btn-primary', titleAttr:'Sembunyikan Kolom', background:false },
        ],
        "lengthMenu" :[ [10, 25, 50, 100, 250, 500, -1], [10, 25, 50, 100, 250, 500, "ALL"] ]
        
    });

    $('#datatable tbody').on( 'click', '.fa-trash-o', function () { 
                    var jawab;
                    obj= $(this).parents('tr');
                    id = myTable.row( $(this).parents('tr') ).data()[6];
                    
                    jawab=confirm("Apakah yakin untuk menghapus data \n"+
                                    "Mesin: "+myTable.row( $(this).parents('tr') ).data()[2]+"?");
                      if (jawab==false){
                        exit();
                      }
                    
                    console.log(id);
                    $.post( "<?php echo base_url(); ?>datamesin/hapus/", { id:id  }, function( data ) {
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
                $('#txtIdMesin').val('');
                $('#txtKodeMesin').val('');
                $('#txtNamaMesin').val('');
                $('#txtKeterangan').val('');
                $('#txtStatus').val('');
                
     });

     $('#datatable tbody').on( 'click', '.fa-pencil-square-o', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        id  = myTable.row( $(this).parents('tr') ).data()[6];
        $('#txtKodeMesin').val(nama);
        $('#txtNamaMesin').val(nama1);
        $('#txtKeterangan').val(nama2);
        $('#txtStatus').val(nama3);
        $('#txtIdMesin').val(id);

        myTable.ajax.reload();
                
    }); 

     $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>datamesin/add/", {
                type:1,
                txtIdMesin:$('#txtIdMesin').val(),
                txtKodeMesin:$('#txtKodeMesin').val(),
                txtNamaMesin:$('#txtNamaMesin').val(),
                txtKeterangan:$('#txtKeterangan').val(),
                txtStatus:$('#txtStatus').val()

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
                        
                        $('#txtIdMesin').val('');
                        $('#txtKodeMesin').val('');
                        $('#txtNamaMesin').val('');
                        $('#txtKeterangan').val('');
                        $('#txtStatus').val('');
                        
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