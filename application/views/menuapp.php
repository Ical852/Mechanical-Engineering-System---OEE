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
                    <h1 class="h4 text-gray-900 mb-4">Pilih Menu</h1>
                  </div>
                  <hr>

                  <a style="text-decoration: none;" href="<?php echo site_url ('admin') ?>">
                    <img style="width: 100%;" src="<?php echo base_url('assets/img/oeem.png');?>">
                    <button type="submit" class="btn btn-warning
                     btn-user btn-block">
                      OEE
                    </button>
                  </a>
                  <hr>
                  <br>

                  <a style="text-decoration: none;" href="<?php echo site_url ('sparepart') ?>">
                    <img style="width: 100%;" src="<?php echo base_url('assets/img/sparepartm.png');?>">
                    <button type="submit" class="btn btn-warning
                     btn-user btn-block">
                      Spare Part
                    </button>
                  </a>
                  <hr>
                  <br>

                  <a style="text-decoration: none;" href="<?php echo site_url ('service') ?>">
                    <img style="width: 100%;" src="<?php echo base_url('assets/img/servicem.png');?>">
                    <button type="submit" class="btn btn-warning
                     btn-user btn-block">
                      Service
                    </button>
                  </a>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url ('auth'); ?>">Kembali</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>