@extends('layout')
@section('content')

<div class="container-fluid">

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