<div class="main-content">
                        <div class="main-content-inner">
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('admin'); ?>">Home</a>
                                          </li>
                                          <li class="active">Chart Persentase Data Harian</li>
                                    </ul><!-- /.breadcrumb -->
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
                                

                                      <br />
                                      <h3 align="center">Grafik Persentase Data OEE Per Hari</h3>
                                      <br />
                                      <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="panel-title">Chart Persentase Data OEE</h3>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p class="panel-title" style="text-align: right">Pilih Tanggal :</p>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="date" name="date" id="date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="chart_area" style="width: 100%; height: 620px;"></div>
                                                </div>
                                            </div>
                              </div><!-- /.page-content -->
                        </div>
                  </div><!-- /.main-content -->

                                          <script type="text/javascript">

                                          google.charts.load('current', {packages:['corechart', 'bar']});
                                          google.charts.setOnLoadCallback();

                                          function load_monthwise_data(date, title)
                                          {
                                              var temp_title = title + ' ' + date;
                                              $.ajax({
                                                  url:"<?php echo base_url(); ?>chartdaily/fetch_data",
                                                  method:"POST",
                                                  data:{date:date},
                                                  dataType:"JSON",
                                                  success:function(data)
                                                  {
                                                      drawMonthwiseChart(data, temp_title);
                                                  }
                                              })
                                          }

                                          function drawMonthwiseChart(chart_data, chart_main_title)
                                          {
                                              var jsonData = chart_data;
                                              var data = new google.visualization.DataTable();
                                              data.addColumn('string', 'Machine');
                                              data.addColumn('number', 'Availibility');
                                              data.addColumn('number', 'Performance');
                                              data.addColumn('number', 'Quality');
                                              data.addColumn('number', 'OEE');

                                              $.each(jsonData, function(i, jsonData){
                                                  var nama_mesin = jsonData.nama_mesin;
                                                  var AvailRatio = parseFloat($.trim(jsonData.AvailRatio));
                                                  var Performance = parseFloat($.trim(jsonData.Performance));
                                                  var Quality = parseFloat($.trim(jsonData.Quality));
                                                  var OEE = parseFloat($.trim(jsonData.OEE));
                                                  data.addRows([[nama_mesin, AvailRatio, Performance, Quality, OEE]]);
                                              });

                                              var options = {
                                                  title:chart_main_title,
                                                  hAxis: {
                                                      title: "Nama Mesin"
                                                  },
                                                  vAxis: {
                                                      title: 'Availibility, Performance, Quality, OEE'
                                                  },
                                                  chartArea:{width:'80%',height:'85%'}
                                              }

                                              var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));

                                              chart.draw(data, options);
                                          }

                                          </script>

                                          <script>
                                              
                                          $(document).ready(function(){
                                              $('#date').change(function(){
                                                  var date = $(this).val();
                                                  if(date != '')
                                                  {
                                                      load_monthwise_data(date, 'Persentase Data Oee Tanggal :');
                                                  }
                                              });
                                          });

                                          $( "li.graph" ).addClass( "active open" );
                                          $( "li.graph1" ).addClass( "active" );

                                          </script>