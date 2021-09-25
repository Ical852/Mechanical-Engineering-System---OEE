<div class="main-content">
                        <div class="main-content-inner">
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a style="text-decoration: none;" href="<?= base_url('admin'); ?>">Home</a>
                                          </li>
                                          <li class="active">Chart Testing 3</li>
                                    </ul><!-- /.breadcrumb -->
                              </div>
                              <div class="page-content">
                                    
                                    <script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.min.js');?>"></script>
                                    <script type="text/javascript" src="<?php echo base_url('assets2/js/bootstrap.min.js');?>"></script>

                                    <div class="container">
                                      <br />
                                      <h3 align="center">Testing 3</h3>
                                      <br />
                                      <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h3 class="panel-title">Chart Testing 3</h3>
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
                                                    <div id="chart_area" style="width: 1000px; height: 620px;"></div>
                                                </div>
                                            </div>
                                     </div>

                                     <script type="text/javascript" src="<?php echo base_url('assets2/js/loader.js');?>"></script>
                                          <script type="text/javascript">

                                          google.charts.load('current', {packages:['corechart', 'bar']});
                                          google.charts.setOnLoadCallback();

                                          function load_monthwise_data(date, title)
                                          {
                                              var temp_title = title + ' ' + date;
                                              $.ajax({
                                                  url:"<?php echo base_url(); ?>testing3/fetch_data",
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
                                                      load_monthwise_data(date, 'Persentase Data Tanggal :');
                                                  }
                                              });
                                          });

                                          </script>

                              </div><!-- /.page-content -->
                        </div>
                  </div><!-- /.main-content -->