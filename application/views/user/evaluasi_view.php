<div class="main-content">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('user'); ?>">Home</a>
                                          </li>
                                          <li class="active">Input Data Penilaian Pelayanan Supplier</li>
                                    </ul><!-- /.breadcrumb -->
                              </div>

                              <div class="page-content">

                                <div class="ace-settings-container " id="ace-settings-container">
                                  <div class="btn btn-app btn-xs btn-info ace-settings-btn " id="ace-settings-btn">
                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                                  </div>

                                  <div class="ace-settings-box clearfix " style="border-color: #22CDBD;" id="ace-settings-box">
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


    <div class="navbar"  style="height: 80px; background-color: #17E3CE" > 
            <h1 class="center" style="color: white">
                Form Input Data Penilaian Pelayanan Supplier
            </h1>
    </div><hr>

<div class="table-header text-center" style="background-color: #22CDBD;">
     "<?= $title; ?>"
</div>  
<div class="container-fluid">
	<input type="hidden" name="txtKodeEvaluasi" id="txtKodeEvaluasi" value="">
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                        <tr><td style="width: 25%">Nama Supplier</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtNamaSupplier" id="txtNamaSupplier" required>
                                <?php foreach ($datasupplier as $data): ?> 
                                <option value="<?php echo $data->nama_supplier  ?>"><?php echo $data->nama_supplier  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">No. PO / Tgl. Pembelian</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtTanggal" id="txtTanggal" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang / Jasa</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtNamaBarangJasa" id="txtNamaBarangJasa" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Pengiriman</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtPengiriman" id="txtPengiriman" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Kualitas</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKualitas" id="txtKualitas" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Pelayanan Puma Jual</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtPelayananPumaJual" id="txtPelayananPumaJual" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Pelayanan Keluhan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtPelayananKeluhan" id="txtPelayananKeluhan" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeterangan" id="txtKeterangan" required>
                            </td>
                        </tr>
                    </table>
                    <div class="center">
                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                    <i class="ace-icon fa fa-save bigger-120 blue"></i>Masukkan</button>
                    </div>
            </div>
            
</div>
</div>
<br><br>

<script>
$(document).ready(function() {
$( "li.evaluasi" ).addClass( "active open" );
$( "li.evaluasi1" ).addClass( "active" );

	$('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>evaluasi/add/", {
                type:1,
                txtKodeEvaluasi:$('#txtKodeEvaluasi').val(),
                txtNamaSupplier:$('#txtNamaSupplier').val(),
                txtTanggal:$('#txtTanggal').val(),
                txtNamaBarangJasa:$('#txtNamaBarangJasa').val(),
                txtPengiriman:$('#txtPengiriman').val(),
                txtKualitas:$('#txtKualitas').val(),
                txtPelayananPumaJual:$('#txtPelayananPumaJual').val(),
                txtPelayananKeluhan:$('#txtPelayananKeluhan').val(),
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
                        
                        $('#txtKodeEvaluasi').val('');
                        $('#txtNamaSupplier').val('');
                        $('#txtTanggal').val('');
                        $('#txtNamaBarangJasa').val('');
                        $('#txtPengiriman').val('');
                        $('#txtKualitas').val('');
                        $('#txtPelayananPumaJual').val('');
                        $('#txtPelayananKeluhan').val('');
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


});
</script>