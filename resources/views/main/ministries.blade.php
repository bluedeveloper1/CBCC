@extends('layout')
@section('content')

<div class="container-fluid">

    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <h2  style="color: #20a8d8;"> Church Ministries </h2> &nbsp
                <!--Session Info Message-->

                <div class="col-md-12 col-lg-12">
                    @if(session('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                    @endif

                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#primaryModal">
                    <i class="fa fa-user-plus"></i> &nbsp; Add New Ministry
                </button>
            </div>
        </div>

        <?php
        $classes = array("bg-primary", "bg-info", "bg-warning", "bg-danger");
        $x=0;
        ?>


        @if(count($ministries)>0)
        <div class="row">
            @foreach($ministries->all() as $ministries)

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white {{$classes[$x]}}">
                            @php
                                if($x < 3)
                                    $x++;
                                elseif ($x == 3) 
                                    $x = 0;
                            @endphp
                                          
                    <div class="card-body pb-0">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href='{{ url("/show-profile/{$ministries->id}") }}'><i class="fa fa-eye" aria-hidden="true"></i>Show Profile</a>
                                <button 
                                        class="dropdown-item" 
                                        href="#" 
                                        data-name="{{ $ministries->name }}" 
                                        data-funds="{{ $ministries->funds }}"  
                                        data-toggle="modal" data-target="#edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit Ministry
                                </button>
                                <!--<a class="dropdown-item" data-toggle="modal"  data-target="#deleteministry" href='#'><i class="fa fa-trash-o"></i>Delete Ministry</a>-->
                                <a class="dropdown-item" href='{{ url("/delete/{$ministries->id}") }}'><i class="fa fa-trash-o"></i>Delete Ministry</a>
                            </div>
                        </div>
                        <h4 class="mb-0">${{ $ministries->funds }}</h4>
                        <p>{{ $ministries->name }}</p>
                    </div>
                    <div class="chart-wrapper px-3" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            @endforeach
        </div>
        <!--/.row-->
        @endif

    </div>
    @endsection
    <!-- /.conainer-fluid -->

    <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-primary" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Ministry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Ministry</strong>
                                <small>Form</small>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ url('/insert') }}">

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
                                            <label for="lbl-ministry">Ministry</label>
                                            <input type="text" class="form-control" name="ministry-name" id="ministry-name" placeholder="Enter name of the Ministry">
                                        </div>

                                        <div class="form-group">
                                            <label for="lbl-funds">Funds</label>
                                            <input type="number" class="form-control" name="ministry-funds" id="ministry-funds" placeholder="Enter funds of the Ministry">
                                        </div>

                                        <div class="form-group">
                                            <label for="lbl-type">Type of Ministry:</label>&nbsp
                                            <select name="ministry-type">
                                                <option value="Main">Main Ministry</option>
                                                <option value="Sub">Sub Ministry</option>
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save Ministry</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!--/.col-->

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!--- NEW MODAL FOR EDIT -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-warning" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Ministry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <form method="POST" action="{{ url('/edit', array($ministries->id)) }}">
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
                                    <label for="lbl-ministry">Ministry</label>
                                    <input type="text" class="form-control"  name="ministry-name" id="ministry-name" placeholder="Enter name of the Ministry">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-funds">Funds</label>
                                    <input type="number" class="form-control" name="ministry-funds" id="ministry-funds" placeholder="Enter funds of the Ministry">
                                </div>

                                <div class="form-group">
                                    <label for="lbl-type">Type of Ministry:</label>&nbsp;
                                    <select name="ministry-type form-control">
                                        <option value="Main">Main Ministry</option>
                                        <option value="Sub">Special Ministry</option>
                                    </select>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
    <!-- /.modal -->

    <!--MODAL FOR DELETE-->
<!--    <div class="modal fade" id="deleteministry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-danger" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Ministry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <form method="POST" action="{{ route('ministries.destroy','test') }}">

                                {{csrf_field()}}

                                <fieldset>

                                    <h4>Are you sure you want to delete this Ministry?</h4>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>-->
    <!-- /.modal -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @section('myscript')
        <script src="{{ asset('js/views/main.js') }}"></script>
    @endsection

    <script>
        $(document).ready(function(){
            $('#edit').on('show.bs.modal', function (event) {
                console.log("dsafsdf");
                var button = $(event.relatedTarget),
                     name = button.data('name'),
                         funds = button.data('funds'),
                            //var id = button.data('id') 
                             modal = $(this);

                modal.find('.modal-body #ministry-name').val(name);
                modal.find('.modal-body #ministry-funds').val(funds);
                // modal.find('.modal-body #cat_id').val(id);
            })
        });

    </script>