<div class="main-container ace-save-state" id="main-container">

      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header no-padding">
                              <div class="table-header" style="background-color: #1A8237">
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
                                    <a href="<?= base_url('sparepart'); ?> ">
                                          <i class="menu-icon fa fa-tachometer"></i>
                                          <span class="menu-text"> Dashboard </span>
                                    </a>
                              </li>

                              <li class="profile">
                                    <a href="<?php echo site_url ('sparepart/profile') ?>">
                                          <i class="menu-icon fa fa-user"></i>
                                          <span class="menu-text"> My Profile </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="control">
                                    <a href="<?php echo site_url ('control1') ?>">
                                          <i class="menu-icon fa fa-cogs"></i>
                                          <span class="menu-text"> User Control </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="sp">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-wrench"></i>
                                          <span class="menu-text">
                                                Spare Part
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="sp1"> 
                                                <a href="<?php echo site_url ('spbaru') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Spare Part Baru
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="sp2"> 
                                                <a href="<?php echo site_url ('datasp') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Data Stok Spare Part
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                    </ul>
                              </li>

                              <li class="form">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-laptop"></i>
                                          <span class="menu-text">
                                                Form Input Data SP
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="form1"> 
                                                <a href="<?php echo site_url ('spmasukform') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Spare Part Masuk
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="form2"> 
                                                <a href="<?php echo site_url ('spkeluarform') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Spare Part Keluar
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
                                                <a href="<?php echo site_url ('spmasuk') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Pemasukkan
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="report2">
                                                <a href="<?php echo site_url ('spkeluar') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Pengeluaran
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