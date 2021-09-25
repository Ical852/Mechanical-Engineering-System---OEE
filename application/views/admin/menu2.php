<div class="main-container ace-save-state" id="main-container">

      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header no-padding">
                              <div class="table-header" style="background-color: #DC8500">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span class="white">&times;</span>
                                    </button>
                                    Logout
                              </div>
                        </div>
                        <div class="modal-body">
                              <h4>Apakah Anda Yakin Untuk Keluar?</h4>
                        </div>
                        <div class="modal-footer">
                              <a href="<?= base_url('auth/logout'); ?>"><button class="btn btn-white btn-info btn-bold" type="button">
                              <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Logout</button></a>
                              <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                              <i class="fa fa-minus-circle"></i> Tutup</button>
                        </div>
                  </div>
            </div>
      </div>

                  <script type="text/javascript">
                        try{ace.settings.loadState('main-container')}catch(e){}
                  </script>

                  <div id="sidebar" class="sidebar responsive ace-save-state">

                        <script type="text/javascript">
                              try{ace.settings.loadState('sidebar')}catch(e){}
                        </script>

                        <ul class="nav nav-list">

                              <li class="center">
                                    <a>
                                          <i class="menu-icon fa fa-bars"></i>
                                          <span class="menu-text"><strong>List Menu</strong></span>
                                    </a>
                              </li>

                              <li class="dashboard">
                                    <a href="<?= base_url('service'); ?> ">
                                          <i class="menu-icon fa fa-tachometer"></i>
                                          <span class="menu-text"> Dashboard </span>
                                    </a>
                              </li>

                              <li class="profile">
                                    <a href="<?php echo site_url ('service/profile') ?>">
                                          <i class="menu-icon fa fa-user"></i>
                                          <span class="menu-text"> My Profile </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="control">
                                    <a href="<?php echo site_url ('control2') ?>">
                                          <i class="menu-icon fa fa-cogs"></i>
                                          <span class="menu-text"> User Control </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="sup">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-users"></i>
                                          <span class="menu-text">
                                                Supplier
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="sup1"> 
                                                <a href="<?php echo site_url ('tambahsup') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Tambah Supplier
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="sup2"> 
                                                <a href="<?php echo site_url ('supplier') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Data Supplier
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                    </ul>
                              </li>

                              <li class="evaluasi">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-file-archive"></i>
                                          <span class="menu-text">
                                                Evaluasi
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="evaluasi1"> 
                                                <a href="<?php echo site_url ('evaluasi') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Tambah Data Evaluasi
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="evaluasi2"> 
                                                <a href="<?php echo site_url ('dataevaluasi') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Data Evaluasi
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                    </ul>
                              </li>

                              <li class="report">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-book"></i>
                                          <span class="menu-text">
                                                Data Laporan
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="report1">
                                                <a href="<?php echo site_url ('reportevaluasi') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Evaluasi
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          
                                    </ul>
                              </li>
                            
                              </ul>

                              <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse" style="z-index: 1;">
                              <i id="sidebar-toggle-icon" class="ace-save-state ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                              </div>

                              </li>

                              </li>
                        </ul><!-- /.nav-list -->
                  </div>