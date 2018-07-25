
@extends('layouts.master2')

@section('content')
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Add Driver Details
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Driver Detail</a>
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
                <h3 class="box-title">Add Driver Details</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="" method="post" class="validate" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Driver NID</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name" placeholder="Driver NID">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Driver Name</label>
                      <input type="text" class="form-control required" tabindex="1" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-maxlength="15"
                        data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="bus_name" placeholder="Driver NID">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>


                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Mobile No.</label>
                      <input tabindex="5" type="text" class="form-control required" name="board_point" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" data-parsley-pattern="^[a-zA-Z0-9\  \/]+$" required="" placeholder="Mobile no...">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Driver photo</label>
                      <input tabindex="4" type="file" class="form-control required" data-parsley-trigger="change" required="" <span class="glyphicon  form-control-feedback">
                      </span>
                    </div>

                    <div class="box-footer">
                      <button tabindex="10" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle RegiNumber</label>
                      <input tabindex="2" type="text" class="form-control required" name="bus_reg_no" data-parsley-trigger="change" data-parsley-minlength="2"
                        data-parsley-maxlength="15" required="" placeholder="Bus RegiNumber">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Address</label>
                      <input tabindex="4" type="text" class="form-control required" name="max_seats" data-parsley-trigger="change" required=""
                        placeholder="Maximum Seats">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Driver Licence No.</label>
                      <input tabindex="4" type="text" class="form-control required" name="max_seats" data-parsley-trigger="change" required=""
                        placeholder="Maximum Seats">
                      <span class="glyphicon  form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label for="exampleInputEmail1">Vehicle photo</label>
                      <input tabindex="4" type="file" class="form-control required" data-parsley-trigger="change" required="" <span class="glyphicon  form-control-feedback">
                      </span>
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