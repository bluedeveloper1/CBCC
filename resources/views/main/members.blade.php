@extends('layout')
@section('content')
<!-- Comment here -->
<div class="container-fluid">
  <div class="animated fadeIn">

    <div class="row">
      <div class="col-lg-10">
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
      <div class="col-lg-2">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal">
            <i class="fa fa-user-plus"></i>&nbsp; Add New Member
          </button>
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
                  <th>Date of Birth</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sarmiento</td>
                  <td>James-Andrew</td>
                  <td>Rodriguez</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Lingo</td>
                  <td>Jurim</td>
                  <td>Justan</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Sarmiento</td>
                  <td>James-Andrew</td>
                  <td>Rodriguez</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Sarmiento</td>
                  <td>James-Andrew</td>
                  <td>Rodriguez</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Sarmiento</td>
                  <td>James-Andrew</td>
                  <td>Rodriguez</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                <tr>
                  <td>Sarmiento</td>
                  <td>James-Andrew</td>
                  <td>Rodriguez</td>
                  <td>2012/02/01</td>
                  <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">View</button>
                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
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
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Member Info</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-sm-4">
                      <label for="lastname">Last Name</label>
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>

                    <div class="form-group col-sm-5">
                      <label for="firstname">First Name</label>
                      <input type="text" class="form-control" id="firstname" placeholder="First Name">
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" placeholder="Middle Name">
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Complete Address">
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-sm-4">
                      <label for="birthdate">Date of Birth</label>
                      <input type="date" class="form-control" id="birthdate" placeholder="">
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="placeofbirth">Place of Birth</label>
                      <input type="text" class="form-control" id="placeofbirth" placeholder="Birthplace">
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="age">Age</label>
                        <input class="form-control" type="number" id="age" placeholder="Age">
                      </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-5">
                      <label for="contactno">Telephone/Mobile No.</label>
                      <input class="form-control" type="text" id="age" placeholder="Contact No.">
                    </div>

                    <div class="form-group col-sm-4">
                      <label for="civilstatus">Status</label>
                      <div class="col-md-12">
                        <select id="civilstatus" name="select" class="form-control">
                          <option value="0">Single</option>
                          <option value="1">Married</option>
                          <option value="2">Separated</option>
                          <option value="3">Divorced</option>
                          <option value="4">Widowed</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group col-sm-3">
                      <label for="sex">Sex</label>
                      <div class="col-md-12">
                          <select id="sex" name="select" class="form-control">
                            <option value="0">Male</option>
                            <option value="1">Female</option>
                          </select>
                        </div>
                    </div>
                  </div>
                  
                  <div class="row">                    
                    <div class="form-group col-sm-5">
                      <label for="spouse">Name of Spouse</label>
                      <input class="form-control" type="text" id="spouse" placeholder="Name of Spouse">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="spouseoccupation">His/Her Occupation</label>
                        <input class="form-control" type="text" id="spouseoccupation" placeholder="Occupation">
                    </div>

                    <div class="form-group col-sm-3">
                      <label for="marriage">Date of Marriage</label>
                      <input type="date" class="form-control" id="marriage" placeholder="">
                    </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-6">
                      <label for="fathername">Name of Father</label>
                      <input class="form-control" type="text" id="fathername" placeholder="Father's Name">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="fatheroccupation">Occupation</label>
                        <input class="form-control" type="text" id="fatheroccupation" placeholder="Occupation">
                    </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-6">
                      <label for="mothername">Name of Mother</label>
                      <input class="form-control" type="text" id="mothername" placeholder="Mother's Name">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="motheroccupation">Occupation</label>
                        <input class="form-control" type="text" id="motheroccupation" placeholder="Occupation">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-12">
                        <span>Educational Background: </span>
                    </div>
                  </div>
                   
                  <div class="row">                    
                    <div class="form-group col-sm-2">
                        <span>Elementary: </span>
                    </div>
                    <div class="form-group col-sm-7">
                        <input class="form-control" type="text" id="elemschool" placeholder="School Attended">
                    </div>
                    <div class="form-group col-sm-3">
                        <input class="form-control" type="number" id="elemgrad" placeholder="Year Graduated">
                    </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-2">
                        <span>High School: </span>
                    </div>
                    <div class="form-group col-sm-7">
                        <input class="form-control" type="text" id="hsschool" placeholder="School Attended">
                    </div>
                    <div class="form-group col-sm-3">
                        <input class="form-control" type="number" id="hsgrad" placeholder="Year Graduated">
                    </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-2">
                        <span>College: </span>
                    </div>
                    <div class="form-group col-sm-4">
                        <input class="form-control" type="text" id="collegeschool" placeholder="School Attended">
                    </div>
                    <div class="form-group col-sm-4">
                        <input class="form-control" type="number" id="course" placeholder="Course">
                    </div>
                    <div class="form-group col-sm-2">
                        <input class="form-control" type="number" id="collegegrad" placeholder="Year">
                    </div>
                  </div>

                  <div class="row">                    
                    <div class="form-group col-sm-4">
                      <label for="salvation">Date of Salvation</label>
                      <input class="form-control" type="date" id="salvation" placeholder="Date">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="baptized">Date Baptized</label>
                        <input class="form-control" type="date" id="baptized" placeholder="Date">
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="placebaptized">Where</label>
                        <input class="form-control" type="text" id="placebaptized" placeholder="Place of Baptism">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
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