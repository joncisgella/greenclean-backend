
      <!-- Page Content -->
      <div id="page-content-wrapper ">
        <div class="container-fluid bg-secondary">

          <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
          <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
            <h1 class="text-center display-4">Administrator Management</h1>
            <div class="dropdown-divider"></div>
            <h2 class="display-5 pt-5 pb-3">Available Packages</h2>

            <!-- ACCORDION -->
            
            <div id="accordion" role="tablist">
            <?php
              foreach($services as $service):
              ?>
              <div class="card">
                <div class="card-header" role="tab" id="heading">
                  <h5 class="mb-0">
                    <a href="<?php echo "#".str_replace(' ','_',$service->service_type_key); ?>" data-parent="#accordion" data-toggle="collapse">
                      <?php echo $service->service_type_key; ?>
                    </a>
                  </h5>
                </div>
                <div id="<?php echo str_replace(' ','_',$service->service_type_key); ?>" class="collapse">
                  <div class="card-block">
                    <?php echo $service->service_description; ?>
                    <br/><br/> Duration: <?php echo $service->service_duration; ?> hours
                    <br/> Price: Php <?php echo $service->service_price; ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <div class="d-flex justify-content-center clearfix pt-5">
              <button class="btn btn-outline-primary mx-1 " data-toggle="modal" data-target="#addService">Add Service Package</button>
              <button class="btn btn-outline-success mx-1">Update</button>
              <button class="btn btn-outline-danger mx-1">Delete</button>
            </div>
          </main>
          
          <div class="modal fade" id="addService" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add new service</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <?php echo form_open('services/add'); ?>
                      <div class="form-row">
                        <div class="form-group col-sm-12">
                          <input type="text" class="form-control" id="service_type" name="type" required placeholder="Service name" />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                          <input type="number" class="form-control" id="service_price" name="price" required placeholder="Price" />
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                          <input type="number" class="form-control" id="service_duration" name="duration" required placeholder="Duration" />
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-12">
                          <textarea class="form-control" id="service_description" name="description" placeholder="Description" required ></textarea>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-12">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
          </div>

        </div>


      </div>