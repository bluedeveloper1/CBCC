@extends('layout')
@section('content')
<!-- Comment here -->
<div class="container-fluid">
  <div class="animated fadeIn">

    <div class="row">
        <div class="col-lg-9 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#description" data-toggle="tab" class="nav-link">More Info</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#accounts" data-toggle="tab" class="nav-link">Related Accounts</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">James-Andrew Sarmiento</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Address</h6>
                            <p>
                               1090 Me Dona Feliza Ave., Felville Subdivision, Brgy. Sta. Cruz, Guiguinto, Bulacan
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Account's Related</h6> 
                            <a href="#" class="badge badge-dark badge-pill">James' Computer Store</a>
                            <a href="#" class="badge badge-dark badge-pill">James-Dorothy</a>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <h6>Birthdate</h6>
                            <p>
                                November 24, 1995
                            </p>
                        </div>
                        <div class="col-md-1">
                            <h6>Age</h6>
                            <p>
                                22
                            </p>
                            </div>
                        <div class="col-md-1">
                            <h6>Sex</h6>
                            <p>
                                Male
                            </p>
                        </div>
                        <div class="col-md-1">
                            <h6>Status</h6>
                            <p>
                                Single
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Occupation</h6>
                            <p>
                                Software Engineer
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Telephone Number</h6>
                            <p>
                                +639068655315
                            </p>
                        </div>
                        
                        <div class="col-md-12">
                            <h5 class="mt-2">Summary of Givings this Year</h5>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-primary p-4 font-2xl mr-3 float-left">C</em>
                                            <div class="h5 text-primary mb-0 pt-3">&#8369;1,500.50</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">Care</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-success p-4 font-2xl mr-3 float-left">C</em>
                                            <div class="h5 text-primary mb-0 pt-3">&#8369;2,500.50</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">Choir</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-warning p-4 font-2xl mr-3 float-left">T</em>
                                            <div class="h5 text-primary mb-0 pt-3">&#8369;20,000</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">Tithes</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-primary p-4 font-2xl mr-3 float-left">M</em>
                                            <div class="h5 text-primary mb-0 pt-3">&#8369;2,500</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">M&M</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-success p-4 font-2xl mr-3 float-left">Y</em>
                                            <div class="h5 text-success mb-0 pt-3">&#8369;400</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">YDC</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-body p-0 clearfix">
                                            <em class="bg-secondary p-4 font-2xl mr-3 float-left">C</em>
                                            <div class="h5 text-primary mb-0 pt-3">&#8369;3,500</div>
                                            <div class="text-muted text-uppercase font-weight-bold font-xs">Creative Team</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="description">
                    <h5 class="mb-3">Additional Info</h5>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Place of Birth</h6>
                            <p>
                                Malolos, Bulacan
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Date of Salvation</h6>
                            <p>
                                January 2, 2013
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Date of Baptism</h6>
                            <p>
                                April 10, 2013
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Place of Baptism</h6>
                            <p>
                                Iba, Zambales
                            </p>
                        </div>
                    </div>
                    
                    <hr>

                    <h5 class="mb-3">Educational Background</h5>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h6>School</h6>
                        </div>
                        <div class="col-md-3">
                            <h6>Year Graduated</h6>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Elementary</h6>
                        </div>
                        <div class="col-md-6">
                            <p>San Ildefonso Learning Center</p>
                        </div>
                        <div class="col-md-3">
                            <p>2008</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>High School</h6>
                        </div>
                        <div class="col-md-6">
                            <p>Marcelo H. del Pilar National High School</p>
                        </div>
                        <div class="col-md-3">
                            <p>2012</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>College</h6>
                            </div>
                            <div class="col-md-6">
                                <p>University of the Philippines, Manila</p>
                                <p>BS Computer Science</p>
                            </div>
                            <div class="col-md-3">
                            <p>2017</p>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-3">Family Info</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <h6>Name of Spouse</h6>
                            <p>
                                Liza Soberano
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Occupation</h6>
                            <p>
                                ABS-CBN Artist
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Year of Marriage</h6>
                            <p>
                                2017
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h6>Father's Name</h6>
                            <p>
                                Tony Stark
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Occupation</h6>
                            <p>
                                Genius, Playboy
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Mother's Name</h6>
                            <p>
                                Wanda Maximoff
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Occupation</h6>
                            <p>
                                Avenger Officer
                            </p>
                        </div>
                    </div>

                    

                </div> <!-- description -->
                <div class="tab-pane" id="accounts">
                    <div class="col-md-12">
                        <h5 class="mt-2">James Computer Store</h5>
                        <div class="col-md-5 offset-md-4">
                            <table class="table table-responsive-sm table-bordered table-sm">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th>Ministry</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>                                    
                                    <tr>
                                        <td>Choir</td>
                                        <td>280.00</td>
                                    </tr>
                                    <tr>
                                        <td>Care</td>
                                        <td>1280.00</td>
                                    </tr>
                                    <tr>
                                        <td>M&M</td>
                                        <td>430.00</td>
                                    </tr>
                                    <tr>
                                        <td>Creative Team</td>
                                        <td>220.00</td>
                                    </tr>
                                    <tr>
                                        <td>YDC</td>
                                        <td>330.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <hr>

                    <div class="col-md-12">
                        <h5 class="mt-2">James-Dorothy</h5>
                        <div class="col-md-5 offset-md-4">
                            <table class="table table-responsive-sm table-bordered table-sm">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th>Ministry</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>                                    
                                    <tr>
                                        <td>Choir</td>
                                        <td>280.00</td>
                                    </tr>
                                    <tr>
                                        <td>Care</td>
                                        <td>1280.00</td>
                                    </tr>
                                    <tr>
                                        <td>M&M</td>
                                        <td>430.00</td>
                                    </tr>
                                    <tr>
                                        <td>Creative Team</td>
                                        <td>220.00</td>
                                    </tr>
                                    <tr>
                                        <td>YDC</td>
                                        <td>330.50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- edit -->
            </div>
        </div>
        <div class="col-lg-3 order-lg-1 text-center">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2"></h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input"></input>
                <span class="custom-file-control">Upload Photo</span>
            </label>
            <h6 class="mt-2"></h6>    
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                <i class="fa fa-wrench fa-lg"></i>&nbsp; Edit Info
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRelatedModal">
                <i class="fa fa-id-card fa-lg"></i>&nbsp; Add Account
            </button>
            <h6 class="mt-2"></h6>    
            <div class="col-md-12">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addCommitmentModal">
                    <i class="fa fa-money fa-lg"></i>&nbsp; Add First Fruit Commitment
                </button>
            </div>           
        </div>
    </div>

    <!-- Modal Section -->
    <div class="modal fade" id="addRelatedModal" tabindex="-1" role="dialog" aria-labelledby="addRelatedModal" aria-hidden="true">
      <div class="modal-dialog modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">New Related Account</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                <form action="" method="post">
                <div class="form-group">
                    <label for="acctname">Account Name</label>
                    <input type="email" id="acctname" name="acctname" class="form-control" placeholder="Enter Name of New Related Account">
                </div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- Modal Section -->
    <div class="modal fade" id="addCommitmentModal" tabindex="-1" role="dialog" aria-labelledby="addCommitmentModal" aria-hidden="true">
      <div class="modal-dialog modal-success" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Add New Commitment</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ffaccount">Name of Account</label>
                                <select id="ffaccount" name="ffaccount" class="form-control">
                                    <option value="0">James-Andrew Sarmiento</option>
                                    <option value="1">James' Computer Store</option>
                                    <option value="2">James-Dorothy</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="ffyear">Year</label>
                                <input type="number" id="ffyear" name="ffyear" class="form-control" placeholder="Enter Year">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="ffcommitment">Commitment Amount</label>
                                <input type="number" id="ffcommitment" name="ffcommitment" class="form-control" placeholder="Enter Commitment">
                            </div>
                        </div>
                    </div>                           
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


  </div>
</div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
  <script src="{{ asset('js/views/main.js') }}"></script>
@endsection