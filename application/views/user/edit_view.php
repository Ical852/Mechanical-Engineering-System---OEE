<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a style="text-decoration: none;" href="<?= base_url('user'); ?> ">Home</a>
							</li>
							<li>
								<i class="ace-icon fa fa-user user-icon"></i>
								<a style="text-decoration: none;" href="<?= base_url('user/profile'); ?> ">Profile</a>
							</li>
							<li class="active">Profile Edit</li>
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


					<div class="container-fluid">
						<div class="page-header">
							<h1>
								<?= $title; ?>
							</h1>
						</div>

						<form>
							<input class="hidden" type="text" name="txtId" id="txtId" value="<?= $user['id'];?>">
							<div class="form-group row">
								<div id="konfirmasi"></div>
							<label for="email" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
							</div>
							
						</div>
						<div class="form-group row">
							<label for="date_created" class="col-sm-2 col-form-label">Member Since</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="date_created" name="date_created" value="<?= date('d F Y', $user['date_created']); ?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="role" class="col-sm-2 col-form-label">Role</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="txtRole" name="txtRole" value="<?= $user['role_id'];?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="status" class="col-sm-2 col-form-label">Status</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="txtStatus" name="txtStatus" value="<?= $user['is_active'];?>" readonly>
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-2 col-form-label">Full Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="txtNama" name="txtNama" value="<?= $user['name'];?>">
								<?= form_error('name', '<small class="text-danger pl-3">','</small>' ); ?>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-sm-2">Picture</div>
							<div class="col-sm-10">
								<div class="row">
								<div class="col-sm-3">
									<img src="<?= base_url('assets/img/profile/').$user['image']?>" class="img-thumbnail">
								</div>
								<div class="col-sm-9">
									<div class="custom-file">
									<input type="text" id="txtImg" name="txtImg" value="<?= $user['image'];?>">
									</div>
								</div>
								</div>
							</div>							
						</div>
						
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="button" id="btnSimpan" name="btnSimpan">Edit</button>
								<a  style="text-decoration: none; color: black;" href="<?= base_url('user/profile'); ?> ">
								<button type="button">Batal</button>
								</a>
							</div>
						</div>
					</div>
				</div></form>

			  </div>
			</div>
<script>
$(document).ready(function() {
$( "li.profile" ).addClass( "active" );

	$('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>admin/add/", {
                type:1,
                txtId:$('#txtId').val(),
                txtNama:$('#txtNama').val(),
                txtImg:$('#txtImg').val()

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
                        
                        $('#txtId').val('');
                        $('#txtNama').val('');
                        $('#txtImg').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      setInterval('location.reload()', 1000);
                
            });
            
    });


});
</script>