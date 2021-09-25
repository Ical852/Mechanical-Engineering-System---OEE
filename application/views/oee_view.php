<div class="main-content">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                                <a style="text-decoration: none;" href="<?= base_url('admin'); ?> ">Home</a>
                </li>
                <li class="active">Input OEE Per Shift</li>
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
                                
<div class="table-header text-center" style="background-color: #1A5276">
     "<?= $title; ?>"
</div>  
<div class="container-fluid">
	<input type="hidden" name="txtKodeOee" id="txtKodeOee" value="">
                    <div id="konfirmasi"></div>
                    <table class="table table-form">
                    	<tr><td style="width: 25%">Tanggal</td>
                            <td style="width: 75%">
                                <input type="date" class="form-control" name="txtDate" id="txtDate" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Shift</td>
                            <td style="width: 75%">
                            	<select name="shift" class="form-control" name="txtShift" id="txtShift" required>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Nama Mesin</td>
                            <td style="width: 75%">
                            	<select name="nama_mesin" class="form-control" name="txtNamaMesin" id="txtNamaMesin" required>
                            	<?php foreach ($datamesin as $data): ?>	
								<option value="<?php echo $data->nama_mesin  ?>"><?php echo $data->nama_mesin  ?></option>
								<?php endforeach ?>
								</select>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Waktu yang tersedia</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtWaktuYgTer" id="txtWaktuYgTer" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan waktu kerja mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtWaktuKerMes" id="txtWaktuKerMes" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Planned Downtime mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtPlannedDt" id="txtPlannedDt" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Unplanned Downtime mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtUnplannedDt" id="txtUnplannedDt" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Setup Time mesin</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtSetupTime" id="txtSetupTime" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Jumlah Output unit</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtJumlahOutput" id="txtJumlahOutput" required>
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Jumlah Reject unit</td>
                            <td style="width: 75%">
                                <input type="text" class="form-control" name="txtJumlahReject" id="txtJumlahReject" required data-parsley-error-message="Field ini harus diisi" value="">
                            </td>
                        </tr>
                        <tr><td style="width: 25%">Masukkan Ideal Cycle Time</td>
                        <td style="width: 75%">
                                <input type="text" class="form-control" name="txtIdealCyTime" id="txtIdealCyTime" required data-parsley-error-message="Field ini harus diisi" value="">
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
$( "li.oee" ).addClass( "active open" );
$( "li.input" ).addClass( "active open" );
$( "li.input1" ).addClass( "active" );

	$('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>oee/add/", {
                type:1,
                txtKodeOee:$('#txtKodeOee').val(),
                txtDate:$('#txtDate').val(),
                txtShift:$('#txtShift').val(),
                txtNamaMesin:$('#txtNamaMesin').val(),
                txtWaktuYgTer:$('#txtWaktuYgTer').val(),
                txtWaktuKerMes:$('#txtWaktuKerMes').val(),
                txtPlannedDt:$('#txtPlannedDt').val(),
                txtUnplannedDt:$('#txtUnplannedDt').val(),
                txtSetupTime:$('#txtSetupTime').val(),
                txtJumlahOutput:$('#txtJumlahOutput').val(),
                txtJumlahReject:$('#txtJumlahReject').val(),
                txtIdealCyTime:$('#txtIdealCyTime').val()


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
                        
                        $('#txtKodeOee').val('');
                        $('#txtDate').val('');
                        $('#txtShift').val('');
                        $('#txtNamaMesin').val('');
                        $('#txtWaktuYgTer').val('');
                        $('#txtWaktuKerMes').val('');
                        $('#txtPlannedDt').val('');
                        $('#txtUnplannedDt').val('');
                        $('#txtSetupTime').val('');
                        $('#txtJumlahOutput').val('');
                        $('#txtJumlahReject').val('');
                        $('#txtIdealCyTime').val('');
                        
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