<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a style="text-decoration: none;" href="<?= base_url('sparepart'); ?> ">Home</a>
							</li>
							<li class="active">Profile</li>
						</ul><!-- /.breadcrumb -->

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

					<div class="container-fluid">
						<div class="page-header">
							<h1>
								<?= $title; ?>
							</h1>
						</div>

						<div class="card mb-3" style="max-width: 540px;">
 							<div class="row no-gutters">
   						 		<div class="col-md-4">
    								<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="180"height="180" class="card-img">
    								</div>
   									<div class="col-md-8">   										
    					 				<div class="card-body">    					 					
    					    				<h4 class="card-title">Name : <?= $user['name']; ?> </h4>
   						    				<p class="card-text">Email : <?= $user['email']; ?> </p>
                          					<p class="card-text">Role id : <?= $user['role_id']; ?> </p>
   						    				<p class="card-text">Status : <?= $user['is_active']; ?> </p>
   		 				    				<p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?> </small></p>
   		 				    				<div>


   		 				    				<a style="text-decoration: none" href="<?php echo site_url ('sparepart/edit') ?>">
   		 				    				<button type="submit" class="btn-user" >
   		 				    				<i class="fas fa fw fa-edit" style="color: black;">
   		 				    				 Edit profile
   		 				    				</i>
   		 				    				</button>
   		 				    				</a>

   		 				    				<a style="text-decoration: none;" href="<?php echo site_url ('sparepart/password') ?>">
				                            <button type="submit" class="btn-user" >
				                              <i class="fas fa fw fa-cog " style="color: black;">
				                              Change Password
				                              </i>
				                            </button>
				                          	</a>

   		 				    				</div>
   						    			</div>
 						   			</div>
 						 	</div>
						</div>

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
		</div>

			<script>
            $( "li.profile" ).addClass( "active" );
            </script>