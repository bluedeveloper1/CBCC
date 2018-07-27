@extends('layout')
@section('content')
<!-- Comment here -->
<div class="container-fluid">
    <div class="animated fadeIn">

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="controls">
                        <div class="input-group">
                            <input id="appendedInputButton" class="form-control" size="16" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!--<div class="card">
<div class="card-body">-->
                <table class="table table-responsive-sm table-outline white-bg">
                    <thead class="thead-light">
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Sex</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sarmiento</td>
                            <td>James-Andrew</td>
                            <td>Rodriguez</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lingo</td>
                            <td>Jurim</td>
                            <td>Justan</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarmiento</td>
                            <td>James-Andrew</td>
                            <td>Rodriguez</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarmiento</td>
                            <td>James-Andrew</td>
                            <td>Rodriguez</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarmiento</td>
                            <td>James-Andrew</td>
                            <td>Rodriguez</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarmiento</td>
                            <td>James-Andrew</td>
                            <td>Rodriguez</td>
                            <td>Male</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" 
                                data-target="#addModal">&nbsp;Input</button>
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
                <!--</div>
</div>-->
            </div>

            <!--modal-->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myAddModal" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Input</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <form action method="post" enctype="multipart/form-data" class="form-horizontal">
 <!-- Date -->                            
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="date">Date</label>
                                            <div class="col-md-9">
                                            <input name="date_given" type="date"class="form-control" required value="2018-15-07">
                                            </div>
                                        </div>
<!--Service -->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="date">Service</label>
                                            <div class="col-md-9">
                                                <select class="form-control input-sm" for="date" name="service" required>
                                                    <option value="1">Worship Service</option>
                                                    <option value="2">Gospel Hour Service</option>
                                                </select>
                                            </div>
                                        </div>
 <!--Tithes-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Tithes</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="tithes">
                                            </div>
                                        </div>
 <!--Offering-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Offering</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="offering">
                                            </div>
                                        </div>
 <!--FF-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">First Fruit</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="ff">
                                            </div>
                                        </div>
 <!--Mission-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Mission</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="Mission">
                                            </div>
                                        </div>
 <!--Care-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Care</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="care">
                                            </div>
                                        </div>       
 <!--Ladies-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Ladies</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="ladies">
                                            </div>
                                        </div>
 <!--M&M's-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">M&M's</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="men">
                                            </div>
                                        </div>
 <!--YDC-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">YDC</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="ydc">
                                            </div>
                                        </div>
 <!--Choir-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Choir</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="choir">
                                            </div>
                                        </div>
 <!--PrayerBreakfast-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Prayer Breakfast</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="prayerbreakfast">
                                            </div>
                                        </div>
 <!--CircleofFaith-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Circle of Faith</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="CoF">
                                            </div>
                                        </div>
 <!--CreativeTeam-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Creative Team</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="creativeteam">
                                            </div>
                                        </div>
 <!--DVBS-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">DVBS</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="dvbs">
                                            </div>
                                        </div>
 <!--Others-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Others</label>
                                            <div class="col-md-9">
                                            <input type="number" class="form-control qty1" name="others">
                                            </div>
                                        </div>
 <!--Remarks-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Remarks</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control qty1" name="remarks">
                                            </div>
                                        </div>
 <!--Total-->
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label" for="time">Total</label>
                                            <div class="col-md-9">
                                            <input type="text" class="form-control qty1" name="total" disabled>
                                            </div>
                                        </div>
               
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>            
                                        </div>
                                    </form>
                                </div>                    
                            </div>                    
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--modal-->
    </div>
</div>

    @endsection
    <!-- /.conainer-fluid -->

    @section('myscript')
    <script src="{{ asset('js/views/main.js') }}"></script>
    @endsection