<div class="main-container ace-save-state" id="main-container">

      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header no-padding">
                              <div class="table-header" style="background-color: #34495E">
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
                                    <a href="<?= base_url('admin'); ?> ">
                                          <i class="menu-icon fa fa-tachometer"></i>
                                          <span class="menu-text"> Dashboard </span>
                                    </a>
                              </li>

                              <li class="profile">
                                    <a href="<?php echo site_url ('admin/profile') ?>">
                                          <i class="menu-icon fa fa-user"></i>
                                          <span class="menu-text"> My Profile </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="control">
                                    <a href="<?php echo site_url ('control') ?>">
                                          <i class="menu-icon fa fa-cogs"></i>
                                          <span class="menu-text"> User Control </span>
                                    </a>
                                    <b class="arrow"></b>
                              </li>

                              <li class="oee">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-server"></i>
                                          <span class="menu-text">
                                                OEE
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="mmesin"> 
                                                <a href="#" class="dropdown-toggle">
                                                      <i class="menu-icon fa fa-hdd"></i>
                                                      Mesin
                                                <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                <ul class="submenu">
                                                            <li class="mesin1">
                                                                  <a href="<?php echo site_url ('inputmesin') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Mesin Baru
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>

                                                            <li class="mesin2">
                                                                  <a href="<?php echo site_url ('datamesin') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Data Mesin
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>
                                                </ul>
                                          </li>

                                          <li class="input">
                                                <a href="#" class="dropdown-toggle">
                                                      <i class="menu-icon fa fa-list-alt"></i>
                                                      Input Data
                                                <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                      <ul class="submenu">
                                                            <li class="input1">
                                                                  <a href="<?php echo site_url ('oee') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Input Data Per Shift
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>

                                                            <li class="input2">
                                                                  <a href="<?php echo site_url ('oeedaily') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Input Data Per Hari
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>

                                                            <li class="input3">
                                                                  <a href="<?php echo site_url ('oeemonthly') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Input Data Per Bulan
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>

                                                            <li class="input4">
                                                                  <a href="<?php echo site_url ('oeeyearly') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Input Data Per Tahun
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>  
                                                      </ul>
                                          </li>

                                          <li class="detail"> 
                                                <a href="#" class="dropdown-toggle">
                                                      <i class="menu-icon fa fa-info-circle"></i>
                                                      Detail Data
                                                <b class="arrow fa fa-angle-down"></b>
                                                </a>
                                                      <ul class="submenu">
                                                            <li class="detail1"> 
                                                                  <a href="<?php echo site_url ('dataoee') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Detail Data Per Shift
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>
                                                            <li class="detail2"> 
                                                                  <a href="<?php echo site_url ('dataoeedaily') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Detail Data Per Hari
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>
                                                            <li class="detail3"> 
                                                                  <a href="<?php echo site_url ('dataoeemonthly') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Detail Data Per Bulan
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>
                                                            <li class="detail4"> 
                                                                  <a href="<?php echo site_url ('dataoeeyearly') ?>">
                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                              Detail Data Per Tahun
                                                                  </a>
                                                                  <b class="arrow"></b>
                                                            </li>
                                                      </ul>
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
                                                <a href="<?php echo site_url ('reportshift') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Per Shift
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="report2">
                                                <a href="<?php echo site_url ('reportharian') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Per Hari
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="report3">
                                                <a href="<?php echo site_url ('reportbulanan') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Per Bulan
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="report4">
                                                <a href="<?php echo site_url ('reporttahunan') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Report Per Tahun
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                    </ul>
                              </li>

                              <li class="graph">
                                    <a href="#" class="dropdown-toggle">
                                          <i class="menu-icon fa fa-bar-chart"></i>
                                          <span class="menu-text">
                                                Grafik OEE
                                          </span>
                                          <b class="arrow fa fa-angle-down"></b>
                                    </a>
                                    <b class="arrow"></b>
                                    <ul class="submenu">
                                          <li class="graph1">
                                                <a href="<?php echo site_url ('chartdaily') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Grafik Data Per Hari
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="graph2">
                                                <a href="<?php echo site_url ('chartmonthly') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Grafik Data Per Bulan
                                                </a>
                                                <b class="arrow"></b>
                                          </li>
                                          <li class="graph3">
                                                <a href="<?php echo site_url ('chartyearly') ?>">
                                                      <i class="menu-icon fa fa-caret-right"></i>
                                                      Grafik Data Per Tahun
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