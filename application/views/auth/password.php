<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/bootstrap.min.css');?>">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Forgot Password</h1>
                  </div>

                  <div id="konfirmasi"></div>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="txtEmail" name="txtEmail" placeholder="Enter Email Address" style="width: 100%;">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password Terakhir">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="txtPassword" name="txtPassword" placeholder="Password Baru">
                    </div>
                    <button type="button" id="btnSimpan" name="btnSimpan" class="btn btn-danger btn-user btn-block">
                      Reset
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth'); ?>"> Already have an account? Login!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url ('auth/registration'); ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<script>
$(document).ready(function() {
  $('#btnSimpan').click(function(){
            
        $.post( "<?php echo base_url(); ?>admin/resetpassword/", {
                type:1,
                txtEmail:$('#txtEmail').val(),
                txtPassword:$('#txtPassword').val()

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
                        },3000);
                        
                        $('#txtEmail').val('');
                        $('#txtPassword').val('');
                        
                    } else {
                        
                        $('#konfirmasi').html(
                            '<div class="alert alert-danger alert-dismissible fade in" role="alert">'+
                            '   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                            '   <strong>Error</strong><br/>'+obj.msg[1]+
                            '</div>');
                    }
                      
                      setInterval('location.reload()', 3500);
                
            });
            
    });


});
</script>