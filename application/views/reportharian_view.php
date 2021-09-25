<div class="main-content"><!-- main content -->
                        <div class="main-content-inner"><!-- /.main-content -->
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('admin'); ?>">Home</a>
                                          </li>
                                          <li class="active">Data Persentase Per Hari</li>
                                    </ul><!-- /.breadcrumb -->
                              </div>


                              <!-- Menu data harian shift -->

                              
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
                                
                                <div class="navbar" style="background-color: #1A5276">
                                    <h1 class="center" style="color: white">
                                          Persentase Data Per Hari
                                    </h1>
                              </div>

                              <br>

                              <div class="container-fluid">

                                    <div class="table-header" style="background-color: #34495E">
                                    "<?= $title; ?>"
                                    </div><br>
                                    <!-- BATAS HEADER TITLE -->
                                    <div class="ln_solid"></div>

                                    <div class="table-responsive">
                                     <table id="datatable" class="table table-striped table-bordered table-hover" style="width: 100%;">
                                          <thead>
                                              <tr> 
                                                  <th class="center" width="1%">No</th>  
                                                  <th class="center" width="5%">Tanggal</th>
                                                  <th class="center" width="25%">Nama Mesin</th>
                                                  <th class="center" width="15%">Availability</th>
                                                  <th class="center" width="15%">Performance</th>
                                                  <th class="center" width="15%">Quality</th>
                                                  <th class="center" width="14%">OEE</th>
                                                  <th class="center" >
                                                      Check
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

                                    <div class="modal fade" id="m_kategori" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header no-padding">
                                                    <div class="table-header" style="background-color:#34495E ">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Persentase Data
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="">
                                                        <input type="hidden" name="txtKodeOEE" id="txtKodeOEE" value="">
                                                        <table class="table table-form">
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtDate" id="txtDate" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama Mesin</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtNamaMesin" id="txtNamaMesin" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Availability</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtAvailRatio" id="txtAvailRatio" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Performance</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtPerformance" id="txtPerformance" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Quality</td>
                                                            <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtQuality" id="txtQuality" required data-parsley-error-message="Field ini harus diisi" value="" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">OEE</td>
                                                            <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtOEE" id="txtOEE" required data-parsley-error-message="Field ini harus diisi" value="" readonly="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true">
                                                        <i class="fa fa-minus-circle"></i> Tutup</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                              </div>

                              <hr> <br>
                        <!-- Menu data harian shift -->

            <!-- menu input daily -->
            <div class="navbar" style="background-color: #1A5276">
                  <h1 class="center" style="color: white">
                        Input Persentase Data Per Bulan
                  </h1>
            </div>

            <div class="container-fluid">
              <div id="konfirmasi"></div>
              <h3>Persentase Data Per Hari Ke Data Per Bulan :</h3><br>

              <div class="table-responsive">
              <table class="table table-form">
                <h4>Masukkan Data Per Hari Ke Per Bulan</h4>
                <tr>
              <td>
                <p>Filter Data Untuk Bulan :</p>
              </td>
              <td>
                <input type="month" name="txtDateFilterMonthly" id="txtDateFilterMonthly" required>
              </td>
              <td><p>Pada Mesin :</p></td>
              <td>
                <select name="txtNamaMesinFilterMonthly" id="txtNamaMesinFilterMonthly" required>
                    <?php foreach ($datamesin as $data): ?> 
                      <option value="<?php echo $data->nama_mesin  ?>"><?php echo $data->nama_mesin  ?></option>
                    <?php endforeach ?>
                </select>
              </td>

              
              <td><p>Dari Bulan :</p></td>
              <td>
                <select name="txtDariBulan" id="txtDariBulan" required>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                </select>
              </td>
              <td>
                <p>Pada Tahun :</p>
              </td>
              <td>
                <input type="text" name="txtPadaTahun" id="txtPadaTahun" required>
                </select>
              </td>
                </tr>
              </table>
              </div>

              <div class="center">
                    <button class="btn btn-white btn-info btn-bold" type="button" id="btnSimpan" name="btnSimpan">
                    <i class="ace-icon fa fa-save bigger-120 blue"></i>Masukkan</button>
              </div>
            </div>

</div><!-- /.main-content -->

</div><!-- /.main-content -->
</div>

<script>
$(document).ready(function() {
$( "li.report" ).addClass( "active open" );
$( "li.report2" ).addClass( "active" );

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>reportharian/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "visible": false, "targets": [8], "searchable": false }
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

     $('#datatable tbody').on( 'click', '.fa-search', function () {            
        $("#m_kategori").modal('show');
        nama    = myTable.row( $(this).parents('tr') ).data()[1];
        nama1    = myTable.row( $(this).parents('tr') ).data()[2];
        nama2    = myTable.row( $(this).parents('tr') ).data()[3];
        nama3    = myTable.row( $(this).parents('tr') ).data()[4];
        nama4    = myTable.row( $(this).parents('tr') ).data()[5];
        nama5    = myTable.row( $(this).parents('tr') ).data()[6];
        id  = myTable.row( $(this).parents('tr') ).data()[8];
        $('#txtDate').val(nama);
        $('#txtNamaMesin').val(nama1);
        $('#txtAvailRatio').val(nama2);
        $('#txtPerformance').val(nama3);
        $('#txtQuality').val(nama4);
        $('#txtOEE').val(nama5);
        $('#txtKodeOEE').val(id);

        myTable.ajax.reload();
                
    });

});
</script>

<script>
$(document).ready(function() {
  $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>reportharian/add/", {
                type:1,
                txtDateFilterMonthly:$('#txtDateFilterMonthly').val(),
                txtNamaMesinFilterMonthly:$('#txtNamaMesinFilterMonthly').val(),
                txtDariBulan:$('#txtDariBulan').val(),
                txtPadaTahun:$('#txtPadaTahun').val()


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
                        
                        $('#txtDateFilterMonthly').val('');
                        $('#txtNamaMesinFilterMonthly').val('');
                        $('#txtDariBulan').val('');
                        $('#txtPadaTahun').val('');
                        
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