      <div class="main-content">
                        <div class="main-content-inner">
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('sparepart'); ?>">Home</a>
                                          </li>
                                          <li class="active">Dashboard</li>
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

                                    <div class="page-header">
                                          <h1>
                                                Dashboard
                                          </h1>
                                    </div><!-- /.page-header -->
                                    <div class="row">
                                          <div class="col-xs-12">
                                                      <div class="alert alert-block alert-info">
                                                            <button type="button" class="close" data-dismiss="alert">
                                                                  <i class="ace-icon fa fa-times"></i>
                                                            </button>
                                                            
                                                            Selamat datang
                                                            <strong class="green">
                                                                  <b><?= $user['name']; ?></b>
                                                            </strong>,<br><br>
                                                            Semangat Selalu

                                                      </div>
                                          </div><!-- /.col -->
                                    </div><!-- /.row --><hr>

                                    <h1 class="center"><strong>Report Data Spare Part Terkini</strong></h1><br>

                                    <div class="row">
                                          <div class="col-lg-12">
                                                <h2><strong>Spare Part Terbaru</strong></h2><br>
                                                <div class="table-responsive">
                                                <table class="table table-hover" style="width: 100%;">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Kode Barang</th>
                                                      <th scope="col">Nama Barang</th>
                                                      <th scope="col">Merek</th>
                                                      <th scope="col">Tipe</th>
                                                      <th scope="col">Stok</th>
                                                      <th scope="col">Tanggal</th>
                                                      <th scope="col">Keterangan</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 0;
                                                      foreach ($datasparepart as $data) : $no++ ?>
                                                    <tr>
                                                      <th scope="row"><?= $no ?></th>
                                                      <td><?= $data->kode_barang ?></td>
                                                      <td><?= $data->nama_barang ?></td>
                                                      <td><?= $data->merek ?></td>
                                                      <td><?= $data->tipe ?></td>
                                                      <td><?= $data->stok ?></td>
                                                      <td><?= $data->date ?></td>
                                                      <td><?= $data->keterangan ?></td>
                                                    </tr>
                                                      <?php endforeach; ?>
                                             
                                                  </tbody>
                                                </table></div><br><br>

                                                <a href="<?php echo site_url ('datasp') ?>"><button class="btn btn-primary"><strong style="color: black;">Ke Detail</strong></button></a>

                                                <a href="<?php echo site_url ('spbaru') ?>"><button class="btn btn-success"><strong style="color: black;">Tambah Spare Part Baru</strong></button></a>
                                          </div><!-- /.col -->
                                    </div><hr><br>


                                    <div class="row">
                                          <div class="col-lg-12">
                                                <h2><strong>Pemasukkan Spare Part Terkini</strong></h2><br>
                                                <div class="table-responsive">
                                                <table class="table table-hover" style="width: 100%;">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Tanggal</th>
                                                      <th scope="col">Kode Barang</th>
                                                      <th scope="col">Nama Barang</th>
                                                      <th scope="col">Merek</th>
                                                      <th scope="col">Tipe</th>
                                                      <th scope="col">Jumlah Masuk</th>
                                                      <th scope="col">Keterangan</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 0;
                                                      foreach ($datamasuk as $data) : $no++ ?>
                                                    <tr>
                                                      <th scope="row"><?= $no ?></th>
                                                      <td><?= $data->date ?></td>
                                                      <td><?= $data->kode_barang ?></td>
                                                      <td><?= $data->nama_barang ?></td>
                                                      <td><?= $data->merek ?></td>
                                                      <td><?= $data->tipe ?></td>
                                                      <td><?= $data->jumlah_masuk ?></td>
                                                      <td><?= $data->keterangan ?></td>
                                                    </tr>
                                                      <?php endforeach; ?>
                                             
                                                  </tbody>
                                                </table></div><br><br>

                                                <a href="<?php echo site_url ('spmasuk') ?>"><button class="btn btn-primary"><strong style="color: black;">Ke Detail</strong></button></a>

                                                <a href="<?php echo site_url ('spmasukform') ?>"><button class="btn btn-success"><strong style="color: black;">Spare Part Baru Masuk</strong></button></a>
                                          </div><!-- /.col -->
                                    </div><hr><br><!-- /.row -->

                                    <div class="row">
                                          <div class="col-lg-12">
                                                <h2><strong>Penggunaan / Pengeluaran Spare Part Terkini</strong></h2><br>
                                                <div class="table-responsive">
                                                <table class="table table-hover" style="width: 100%;">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">No</th>
                                                      <th scope="col">Tanggal</th>
                                                      <th scope="col">Kode Barang</th>
                                                      <th scope="col">Nama Barang</th>
                                                      <th scope="col">Merek</th>
                                                      <th scope="col">Tipe</th>
                                                      <th scope="col">Jumlah Keluar</th>
                                                      <th scope="col">Keterangan</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                      <?php $no = 0;
                                                      foreach ($datakeluar as $data) : $no++ ?>
                                                    <tr>
                                                      <th scope="row"><?= $no ?></th>
                                                      <td><?= $data->date ?></td>
                                                      <td><?= $data->kode_barang ?></td>
                                                      <td><?= $data->nama_barang ?></td>
                                                      <td><?= $data->merek ?></td>
                                                      <td><?= $data->tipe ?></td>
                                                      <td><?= $data->jumlah_keluar ?></td>
                                                      <td><?= $data->keterangan ?></td>
                                                    </tr>
                                                      <?php endforeach; ?>
                                             
                                                  </tbody>
                                                </table></div><br><br>

                                                <a href="<?php echo site_url ('spkeluar') ?>"><button class="btn btn-primary"><strong style="color: black;">Ke Detail</strong></button></a>
                                                
                                                <a href="<?php echo site_url ('spkeluarform') ?>"><button class="btn btn-success"><strong style="color: black;">Gunakan Spare Part</strong></button></a>
                                          </div><!-- /.col -->
                                    </div><hr><br><!-- /.row -->
                              </div><!-- /.page-content -->
                        </div>
                  </div><!-- /.main-content -->

                  <script>
                    $( "li.dashboard" ).addClass( "active" );
                  </script>