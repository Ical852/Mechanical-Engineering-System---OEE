<div class="main-content">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                                <a style="text-decoration: none;" href="<?= base_url('sparepart'); ?> ">Home</a>
                </li>
                <li class="active">Spare Part Keluar/Digunakan</li>
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
                                
<div class="table-header text-center" style="background-color: #219E43">
     "<?= $title; ?>"
</div>  
<div class="container-fluid">
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
                                <option value="<?php echo $data->kode_barang  ?>"><?php echo $data->kode_barang ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Barang</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtNamaBarangKeluar" id="txtNamaBarangKeluar" required>
                                <?php foreach ($nama_barang as $data): ?> 
                                <option value="<?php echo $data->nama_barang  ?>"><?php echo $data->nama_barang ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Merek Barang</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtMerekBarangKeluar" id="txtMerekBarangKeluar" required>
                                <?php foreach ($merek as $data): ?> 
                                <option value="<?php echo $data->merek  ?>"><?php echo $data->merek  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Tipe/ Model/ No. Seri</td>
                            <td style="width: 75%">
                                <select class="form-control" name="txtTipeBarangKeluar" id="txtTipeBarangKeluar" required>
                                <?php foreach ($tipe as $data): ?> 
                                <option value="<?php echo $data->tipe  ?>"><?php echo $data->tipe  ?></option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Jumlah Barang Keluar</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtJumlahBarangKeluar" id="txtJumlahBarangKeluar" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Keterangan</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtKeteranganKeluar" id="txtKeteranganKeluar" required>
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
$( "li.form" ).addClass( "active open" );
$( "li.form2" ).addClass( "active" );

	$('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>spkeluarform/add/", {
                type:1,
                txtKodeSpKeluar:$('#txtKodeSpKeluar').val(),
                txtDateKeluar:$('#txtDateKeluar').val(),
                txtKodeBarangKeluar:$('#txtKodeBarangKeluar').val(),
                txtNamaBarangKeluar:$('#txtNamaBarangKeluar').val(),
                txtMerekBarangKeluar:$('#txtMerekBarangKeluar').val(),
                txtTipeBarangKeluar:$('#txtTipeBarangKeluar').val(),
                txtJumlahBarangKeluar:$('#txtJumlahBarangKeluar').val(),
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
                        $('#txtMerekBarangKeluar').val('');
                        $('#txtTipeBarangKeluar').val('');
                        $('#txtJumlahBarangKeluar').val('');
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