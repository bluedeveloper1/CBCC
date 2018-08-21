@extends('layout')
@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="row margin-bottom-padding">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h3  style="color: #20a8d8;"> Church Expenses </h2> &nbsp
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
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addNewExpense">
                        <i class="fa fa-plus"></i> &nbsp; Add Expense
                    </button>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" 
                            data-target="#editModal"><i class="fa fa-edit"></i> &nbsp; Edit Expense
                    </button>
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> &nbsp; Delete Expense
                    </button>
                </div>
            </div>
        </div>

        <!--Search-->
        <div class="row mt-0">
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
                <table class="table table-responsive-sm table-outline table-sm text-center white-bg fontsize-9">
                    <thead class="thead-light fontsize-10">
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
                        <form method="POST" action="{{ url('/insertExpense') }}" class="form-horizontal">
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

                                <div class="form-group row">
                                    <label for="expense-date" class="col-md-3 col-form-label">Date: </label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control"  name="expense-date" id="expense-date" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="expense-receiver" class="col-md-3 col-form-label">Receiver:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="expense-receiver" id="expense-receiver" placeholder="Enter Receiver">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="service-type" class="col-md-3 col-form-label">Service:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="service-type">
                                            <option value="Main">Worship Service</option>
                                            <option value="gospel-hour">Gospel Hour Service</option>
                                            <option value="prayer-meeting">Prayer Meeting Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ministry-list" class="col-md-3 col-form-label">Ministry:</label>
                                    <div class="col-md-9">
                                        <select name="ministry-list" class="form-control">

                                            @if(count($ministries)>0)
                                            @foreach($ministries->all() as $ministries)


                                            <option value="Main">{{ $ministries->name }}</option>


                                            @endforeach
                                            @endif


                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="vouchernum" class="col-md-3 col-form-label">Voucher No:</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="vouchernum" id="vouchernu" placeholder="Enter Voucher Number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="amount" class="col-md-3 col-form-label">Amount:</label>
                                    <div class="col-md-9">
                                    <input type="number" class="form-control" name="amount" id="amount" 
                                           placeholder="&#8369;" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
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
            counter++;
            var particularNo = "particular" + counter;

            var create_div1 = document.createElement('div');
            create_div1.setAttribute('class','form-group row margin-bottom-padding-10');
            create_div1.setAttribute('id', particularNo);

            //create div in amount
            var create_div2 = document.createElement('div');
            create_div2.setAttribute('class','form-group col-md-6');

            //create textfield
            var particular_text = document.createElement('input');
            particular_text.setAttribute('placeholder','Particulars')
            particular_text.setAttribute('class', 'form-control particular-name');
            particular_text.setAttribute('type', 'text');

            create_div2.appendChild(particular_text);

            //create div in amount
            var create_div3 = document.createElement('div');
            create_div3.setAttribute('class','form-group col-md-5');

            //create textfield2
            var particular_text2 = document.createElement('input');
            particular_text2.setAttribute('placeholder','Amount')
            particular_text2.setAttribute('class', 'form-control particular-amount');
            particular_text2.setAttribute('type', 'number');

            create_div3.appendChild(particular_text2);

            //create div for buttton remove particular
            var create_div4 = document.createElement('div');
            create_div4.setAttribute('class','form-group');

            //create button
            var particular_remove = document.createElement('button');
            particular_remove.setAttribute('class','btn btn-danger btn-sm rounded removeParticular');
            particular_remove.setAttribute('type','button');
            particular_remove.setAttribute('id','removePartBtn' + counter);
            particular_remove.onclick = function () {
                counter--;
                document.getElementById(particularNo).remove();
                this.remove();
            }
            //create button icon
            var particular_remove_i = document.createElement('i');
            particular_remove_i.setAttribute('class','fa fa-window-close');

            particular_remove.appendChild(particular_remove_i);
            create_div4.appendChild(particular_remove);

            create_div1.appendChild(create_div2);
            create_div1.appendChild(create_div3);
            create_div1.appendChild(create_div4);

            //append to the main div
            var wrapper = document.getElementById("particulars-form");
            wrapper.appendChild(create_div1);
        }

    </script>

