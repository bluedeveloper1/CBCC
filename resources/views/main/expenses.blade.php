@extends('layout')
@section('content')

<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewExpense">
                        <i class="fa fa-plus"></i> &nbsp; Add Expense
                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" 
                            data-target="#editModal"><i class="fa fa-edit"></i> &nbsp; Edit Expense
                    </button>
                    <button type="button" class="btn btn-danger">
                        <i class="fa fa-trash"></i> &nbsp; Delete Expense
                    </button>
                </div>
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
                            <th>Date</th>
                            <th>Receiver</th>
                            <th>Particulars</th>
                            <th>Service Type</th>
                            <th>Ministry</th>
                            <th>Voucher Number</th>
                            <th>Amount</th>
                            <!-- <th>Action</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($expenses)>0)
                        @foreach($expenses->all() as $expenses)
                        <tr>
                            <td>{{ $expenses->id }}</td>
                            <td>{{ $expenses->date }}</td>
                            <td>{{ $expenses->receiver }}</td>
                            <td>{{ $expenses->particulars }}</td>
                            <td>{{ $expenses->service_type}}</td>
                            <td>{{ $expenses->ministry}}</td>
                            <td>{{ $expenses->voucher_number }}</td>
                            <td>&#8369;{{ $expenses->amount }}</td>
                        </tr>
                        @endforeach
                        @endif
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
                    <h4 class="modal-title">Add Expense</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <form method="POST" action="{{ url('/insertExpense') }}">
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
                                    <label for="lbl-date">Date: </label> 
                                    <input type="date" class="form-control"  name="expense-date" id="expense-date" >

                                </div>
                                <div class="form-group">
                                    <label for="lbl-receiver">Receiver:</label>
                                    <input type="text" class="form-control" name="expense-receiver" id="expense-receiver" placeholder="Enter Receiver">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-type">Type of Service:</label>
                                    <select class="form-control" name="service-type">
                                        <option value="Main">Main Service</option>
                                        <option value="gospel-hour">Gospel Hour Service</option>
                                        <option value="prayer-meeting">Prayer Meeting Service</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="lbl-type">Select Ministry:</label>&nbsp
                                    <select name="ministry-list" class="form-control">

                                        @if(count($ministries)>0)
                                        @foreach($ministries->all() as $ministries)


                                        <option value="Main">{{ $ministries->name }}</option>


                                        @endforeach
                                        @endif


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="lbl-vouchernum">Voucher number:</label>
                                    <input type="number" class="form-control" name="ministry-funds" id="ministry-funds" placeholder="Enter Voucher Number">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-amount">Amount:</label>
                                    <input type="number" class="form-control" name="ministry-funds" id="ministry-funds" 
                                           placeholder="&#8369;" disabled>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary form-control" id="btn-add-particulars" type="button" onclick="addParticular()">Add Particulars</button>
                                </div>
                                <!--ADD PARTICULAR FORMS-->
                                <div id="particulars-form" >

                                    <!--A JAVASCRIPT PERFORMS HERE-->

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

    <!--ADDED JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @section('myscript')
    <script src="{{ asset('js/views/main.js') }}"></script>
    @endsection


    <!--ADD PARTICULAR SCRIPT-->
    <script>
        var counter = 0;
        function addParticular(){


            //create div in name
            var create_div1 = document.createElement('div');
            create_div1.setAttribute('class','form-group group1 ');
            //create label
            var particular_label = document.createElement('label');
            var lbl_particular = document.createTextNode("Particulars: ");
            particular_label.setAttribute("for", "lbl_particulars");

            //create textfield
            var particular_text = document.createElement('input');
            particular_text.setAttribute('placeholder','Enter Name of Particulars')
            particular_text.setAttribute('class', 'form-control particular-name');
            particular_text.setAttribute('type', 'text');

            //create div in amount
            var create_div2 = document.createElement('div');
            create_div2.setAttribute('class','form-group');

            //create label2
            var particular_label2 = document.createElement('label');
            var lbl_particular2 = document.createTextNode("Amount: ");
            particular_label2.setAttribute("for", "lbl_amount");

            //create textfield2
            var particular_text2 = document.createElement('input');
            particular_text2.setAttribute('placeholder','Enter Amount of Particulars')
            particular_text2.setAttribute('class', 'form-control particular-amount');
            particular_text2.setAttribute('type', 'text');

            //create div for buttton remove particular
            var create_div3 = document.createElement('div');
            create_div3.setAttribute('class','form-group');

            //create button
            var particular_remove = document.createElement('button');
            particular_remove.setAttribute('class','btn btn-primary form-control');
            particular_remove.setAttribute('onclick','removeParticular()');
            particular_remove.innerHTML = 'Remove Particular';

            //append to div in name
            create_div1.appendChild(lbl_particular);
            create_div1.appendChild(particular_text);

            //append to div of amount
            create_div2.appendChild(lbl_particular2);
            create_div2.appendChild(particular_text2);

            //append to div of button
            create_div3.appendChild(particular_remove);

            var form = document.createElement('div');
            form.setAttribute('id','added-form');
            form.style.display='block';
            form.appendChild(create_div1);
            form.appendChild(create_div2);
            form.appendChild(create_div3);

            //append to the main div
            var wrapper = document.getElementById("particulars-form");
            wrapper.appendChild(form);

            /* counter++;*/
        }

        function removeParticular() {

            var removethis = document.getElementById('added-form');
            removethis.style.display = 'none';


        }

    </script>

