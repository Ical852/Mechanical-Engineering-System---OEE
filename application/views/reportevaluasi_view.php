<div class="main-content"><!-- main content -->
                        <div class="main-content-inner"><!-- /.main-content -->
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('service'); ?>">Home</a>
                                          </li>
                                          <li class="active">Data Evaluasi Supplier</li>
                                    </ul><!-- /.breadcrumb -->
                              </div>

                              <div class="page-content">

                                <div class="ace-settings-container " id="ace-settings-container">
                                  <div class="btn btn-app btn-xs btn-warning ace-settings-btn " id="ace-settings-btn">
                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                                  </div>

                                  <div class="ace-settings-box clearfix " id="ace-settings-box">
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
                                
                                <div class="navbar" style="background-color: #FF9B00">
                                    <h1 class="center" style="color: white">
                                          Data Evaluasi Supplier
                                    </h1>
                              </div>

                              <br>

                              <div class="container-fluid">

                                    <div class="table-header" style="background-color: #DC8500">
                                    "<?= $title; ?>"
                                    </div><br>
                                    <!-- BATAS HEADER TITLE -->
                                    <div class="ln_solid"></div>
                                    <div class="table-responsive">
                                     <table id="datatable" class="table table-striped table-bordered table-hover" style="width: 100%;">
                                          <thead>
                                              <tr> 
                                                  <th class="center" width="1%">No</th>  
                                                  <th class="center" width="25%">Nama Supplier</th>
                                                  <th class="center" width="10%">Tanggal</th>
                                                  <th class="center" width="15%">Nama Barang / Jasa</th>
                                                  <th class="center" width="10%">Total Nilai</th>
                                                  <th class="center" width="10%">Rata - Rata</th>
                                                  <th class="center" width="25%">Keterangan</th>
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
                                                    <div class="table-header" style="background-color: #DC8500">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span class="white">&times;</span>
                                                        </button>
                                                        Data Evaluasi
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="f_kategori" id="f_kategori" action="">
                                                        <input type="hidden" name="txtKodeEvaluasi" id="txtKodeEvaluasi" value="">
                                                        <table class="table table-form">
                                                            <tr><td style="width: 25%">Nama Supplier</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtNamaSupplier" id="txtNamaSupplier" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Tanggal</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtTanggal" id="txtTanggal" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Nama Barang / Jasa</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtNamaBarang" id="txtNamaBarang" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Total Nilai</td>
                                                                <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtTotalNilai" id="txtTotalNilai" required readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Rata - Rata</td>
                                                            <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtRataRata" id="txtRataRata" required data-parsley-error-message="Field ini harus diisi" value="" readonly="">
                                                                </td>
                                                            </tr>
                                                            <tr><td style="width: 25%">Keterangan</td>
                                                            <td style="width: 75%">
                                                                    <input type="text" class="form-control" name="txtKeterangan" id="txtKeterangan" required data-parsley-error-message="Field ini harus diisi" value="" readonly="">
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

</div><!-- /.main-content -->

</div><!-- /.main-content -->
</div>

<script>
$(document).ready(function() {
$( "li.report" ).addClass( "active open" );
$( "li.report1" ).addClass( "active" );

    var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>reportevaluasi/daftar_data/",
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
        { extend:'csv', text:' CSV', className:'fa fa-file-alt btn-warning', titleAttr:'Export to CSV' },
        { extend: 'pdf', text:' PDF', className: 'fa fa-file-pdf btn-warning', titleAttr:'Export to PDF' }, 
        { extend: 'copy', text: ' COPY', className: 'fa fa-copy btn-warning', titleAttr:'Copy Record Data' },
        { extend: 'print', text: ' PRINT', className: 'fa fa-print btn-warning', titleAttr:'Print Record Data' },
        { extend: 'colvis', text: ' KOLOM', className: 'fa fa-filter btn-warning', titleAttr:'Sembunyikan Kolom', background:false },
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
        $('#txtNamaSupplier').val(nama);
        $('#txtTanggal').val(nama1);
        $('#txtNamaBarang').val(nama2);
        $('#txtTotalNilai').val(nama3);
        $('#txtRataRata').val(nama4);
        $('#txtKeterangan').val(nama5);
        $('#txtKodeEvaluasi').val(id);

        myTable.ajax.reload();
                
    });

});
</script>