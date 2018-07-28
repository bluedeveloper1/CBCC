@extends('layout')
@section('content')

<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                <h2  style="color: #20a8d8;"> Church Expenses </h2> &nbsp
                <!--Session Info Message-->

                <div class="col-md-12 col-lg-12">
                    @if(session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                    @endif

                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewExpense">
                    <i class="fa fa-user-plus"></i> &nbsp; Add New Expense
                </button>
            </div>
        </div>
        <br>
        <!--Search-->
        <div class="row">
            <div class="col-lg-12">
                <div class="controls">
                    <div class="input-group">
                        <input id="appendedInputButton" class="form-control" placeholder="Search for Expenses" size="16" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <!--Expenses' Table -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-responsive-sm table-outline text-center white-bg">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Particulars</th>
                            <th>To</th>
                            <th>Service Type</th>
                            <th>Date</th>
                            <th>Voucher Number</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem Ipsum</td>
                            <td>Joe Doe</td>
                            <td>Gospel Hour Service</td>
                            <td>1/1/2020</td>
                            <td>123456</td>
                            <td>1599</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                        data-target="#editModal">&nbsp;Edit</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem Ipsum</td>
                            <td>Joe Doe</td>
                            <td>Gospel Hour Service</td>
                            <td>1/1/2020</td>
                            <td>123456</td>
                            <td>1599</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                        data-target="#editModal">&nbsp;Edit</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem Ipsum</td>
                            <td>Joe Doe</td>
                            <td>Gospel Hour Service</td>
                            <td>1/1/2020</td>
                            <td>123456</td>
                            <td>1599</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                        data-target="#editModal">&nbsp;Edit</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lorem Ipsum</td>
                            <td>Joe Doe</td>
                            <td>Gospel Hour Service</td>
                            <td>1/1/2020</td>
                            <td>123456</td>
                            <td>1599</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                        data-target="#editModal">&nbsp;Edit</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <nav>
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
                </nav>
            </div>
        </div>

    </div>

    <!--- NEW MODAL FOR EDIT -->
    <div class="modal fade" id="addNewExpense" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-primary" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Expense</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <form>
                            {{csrf_field()}}
                            <fieldset>
                                <!--Error Handling-->
                                @if(count($errors)>0)
                                @foreach($errors->all() as $error)
                                <div class = "alert alert-danger">
                                    {{ $error }}
                                </div>
                                @endforeach
                                @endif
                                <!--End of Error Handling-->

                                <div class="form-group">
                                    <label for="lbl-ministry">Particulars</label>
                                    <input type="text" class="form-control"  name="ministry-name" id="ministry-name" placeholder="Enter name of Particulars">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-funds">To</label>
                                    <input type="text" class="form-control" name="ministry-funds" id="ministry-funds" placeholder="Enter to">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-funds">Amount</label>
                                    <input type="number" class="form-control" name="ministry-funds" id="ministry-funds" placeholder="Enter funds of the Ministry">
                                </div>
                                
                                <div class="form-group">
                                    <label for="lbl-type">Type of Service:</label>&nbsp;
                                    <select name="ministry-type form-control">
                                        <option value="Main">Main Service</option>
                                        <option value="gospel-hour">Gospel Hour Service</option>
                                        <option value="prayer-meeting">Prayer Meeting Service</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save Expense</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!--/.col-->

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endsection
    <!-- /.conainer-fluid -->

    @section('myscript')
    <script src="{{ asset('js/views/main.js') }}"></script>
    @endsection