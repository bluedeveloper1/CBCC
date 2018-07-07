@extends('layout')
@section('content')

<div class="container-fluid">

<<<<<<< Updated upstream
  <div class="animated fadeIn">
  

      <div class="card">
          <div class="card-body">
            <div class="row">
                <button type="button" class="btn btn-lg btn-facebook" style="margin-bottom: 4px">
                    <span>Facebook</span>
                </button>
            </div>    
          </div>
          
      </div>
      <div class="col-md-6">

        <div class="card">
            <div class="card-header">
              <strong>Horizontal</strong>
              Form
            </div>
            <div class="card-body">
              <form action="" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="hf-email">Email</label>
                  <div class="col-md-9">
                    <input type="email" id="hf-email" name="hf-email" class="form-control" placeholder="Enter Email..">
                    <span class="help-block">Please enter your email</span>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 col-form-label" for="hf-password">Password</label>
                  <div class="col-md-9">
                    <input type="password" id="hf-password" name="hf-password" class="form-control" placeholder="Enter Password..">
                    <span class="help-block">Please enter your password</span>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
              <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
            </div>
          </div>
      </div>
    <!--/.row-->

    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="social-box facebook">
          <i class="fa fa-facebook"></i>
          <div class="chart-wrapper">
            <canvas id="social-box-chart-1" height="90"></canvas>
          </div>
          <ul>
            <li>
              <strong>89k</strong>
              <span>friends</span>
            </li>
            <li>
              <strong>459</strong>
              <span>feeds</span>
            </li>
          </ul>
=======
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <h2> Ministries </h2>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal">
                    <i class="fa fa-user-plus"></i> &nbsp; Add New Ministry
                </button>
            </div>
>>>>>>> Stashed changes
        </div>
        
        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 1</p>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 2</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 3</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart2" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 4</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 5</p>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 6</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 7</p>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">        
                                <a class="dropdown-item" href="#">Show Details</a>
                                <a class="dropdown-item" href="#">Edit Ministry</a>
                                <a class="dropdown-item" href="#">Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">9.823</h4>
                        <p>Ministry 8</p>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>

</div>
@endsection
<!-- /.conainer-fluid -->

<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Ministry</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Enter name of Ministry">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Ministry</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@section('myscript')
<script src="{{ asset('js/views/main.js') }}"></script>
@endsection