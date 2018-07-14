@extends('layout')
@section('content')

<div class="container-fluid">
    {{csrf_field()}}

    <div class="row">
        <div class="col-lg-6">
            <h2 style="color: #20a8d8;"><?php echo $ministries->name; ?> Ministry</h2><br>
        </div>
        <div class="col-lg-6">
            <span class="pull-right">
                <button type="button" class="btn btn-primary"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Funds</button>
                <button type="button" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Funds</button>
            </span>
        </div>
    </div>
    <!--- IN -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 style="color: #20a8d8;">IN</h5>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class = "col-lg-6">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>

                    </div>
                    <div class ="col-lg-6">
                        <h4 style="color: #20a8d8;" align="center">Total in: <span class="total-in" style="color:#151b1e;" >0.00</span> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.col-->

    <!--OUT--->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 style="color: #20a8d8;">OUT</h5>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Mikhael Maclang</td>
                            <td>2012/01/01</td>
                            <td>P2000</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class = "col-lg-6">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>

                    </div>
                    <div class ="col-lg-6">
                        <h4 style="color: #20a8d8;" align="center">Total out: <span class="total-in" style="color:#151b1e;" >0.00</span> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.col-->
</div>
@endsection
<!-- /.conainer-fluid -->


@section('myscript')
<script src="{{ asset('js/views/main.js') }}"></script>
@endsection