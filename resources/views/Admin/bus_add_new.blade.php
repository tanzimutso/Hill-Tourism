
@extends('layouts.master2')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          View Vehicle Management Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Vehicle maangnent</a>
          </li>
          <li class="active">Add New</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          </div>
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Add Vehicle Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="" method="post" class="validate" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Id</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name" placeholder="Bus Name">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                      <label>Vehicle Type</label>
                      <select tabindex="3" class="form-control select2 required" style="width: 100%;" name="bus_type_id">
                        <option value="1"> - AC</option>
                        <option value="54"> - AC Bus</option>
                        <option value="77"> - RES</option>
                        <option value="89"> - afdasfa</option>
                        <option value="90"> - dfsf</option>
                        <option value="91"> - Landseer</option>
                        <option value="92"> - AM</option>
                        <option value="93"> - posti</option>
                        <option value="94"> - sanjay rsererer</option>
                        <option value="95"> - akm</option>
                        <option value="97"> - Point to point</option>
                        <option value="98"> - GSRTC</option>
                        <option value="99"> - GSRTC Ac Volvo Bus</option>
                        <option value="100"> - Volvo Ac Sleeper</option>
                        <option value="101"> - Double Fast</option>
                        <option value="102"> - Smart executive</option>
                        <option value="103"> - tyu</option>
                        <option value="104"> - BUS</option>
                      </select>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle Type Id</label>
                      <input tabindex="5" type="text" class="form-control required" name="board_point" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Vehicle Type Id..">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>


                    <div class="box-footer">
                      <button tabindex="10" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Bus RegiNumber</label>
                      <input tabindex="2" type="text" class="form-control required" name="bus_reg_no" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" required="" placeholder="Bus RegiNumber">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Seat Capacity</label>
                      <input tabindex="4" type="text" class="form-control required" name="max_seats" data-parsley-trigger="change" required=""
                        placeholder="Maximum Seats">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                  </div>
              </form>
              </div>
              <!-- /.box -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
