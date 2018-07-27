@extends('layout')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
<!--header-->
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <div class="controls">
            <span class="pull-right">
              <button type="button" class="btn btn-outline-secondary">Generate PDF</button>
              <button type="button" class="btn btn-outline-success">PDF Alphabetically</button>
              <button type="button" class="btn btn-outline-info">Edit Transaction</button>
              <button type="button" class="btn btn-outline-warning">Modify Transaction</button>
              <button type="button" class="btn btn-outline-danger">Delete Transaction</button>
            </span>
          </div>
        </div>
      </div>  
    </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="controls">
                        <div class="input-group">
                            <input id="appendedInputButton" class="form-control" size="16" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Search</button>
                                <button type="button" class="btn btn-outline-primary" style="font-weight:bold;"
                data-toggle="collapse" data-target="#filter-panel" aira-expanded="true">Advance Search</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

<!--filter-panel-->
        <div class="row">
          <div class="col-lg-12">
            <div id="filter-panel" class="filter-panel collapse in" aria-expanded="true" style>
              <div class="panel-body">
                <div class="form-horizontal">
                  <div class="form-group">
                    <div class="row">
                      <label for="bdatesearch" class="col-md-1 control-label">Date</label>
                      <div class="col-md-2">
                        <input class="form-control" type="date" name="dategiven" value>
                      </div>
                      <label for="givensearch" class="col-md-1 control-label">Service</label>
                      <div class="col-md-2">
                        <select class="from-control input-md" name="service">
                          <option value selected>ALL</option>
                          <option value="1">Worship Service</option>
                          <option value="2">Gospel Hour Service</option>
                        </select>
                      </div>
                      <label for="monthsearch" class="col-md-1 control-label">Month</label>
                      <div class="col-md-2">
                        <select class="form-control input-md" name="month">
                          <option value selected>ALL</option>
                          <option value="1">January</option>
                          <option value="2">February</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                      </div>
                      <label for="yearsearch" class="col-md-1 control-label">Year</label>
                      <div class="col-md-2">
                        <select class="form-control input-md" name="year">
                          <option value selected>ALL</option>
                          <option value="1">2019</option>
                          <option value="2">2020</option>
                          <option value="3">2021</option>
                          <option value="4">2022</option>
                          <option value="5">2023</option>
                          <option value="6">2024</option>
                          <option value="7">2025</option>
                          <option value="8">2026</option>
                          <option value="9">2027</option>
                          <option value="10">2028</option>
                          <option value="11">2029</option>
                          <option value="12">2030</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
<!--main-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <div class="table-responsive">
            <table class="table table-responsive-sm table-sm" style="font-size:10pt;">
              <tbody>
                <tr>
                  <th style="width:5px">&nbsp;ID</th>
                  <th style="width:110px">&nbsp;Name</th>
                  <th style="width:50px">&nbsp;Date</th>
                  <th style="width:90px">&nbsp;Tithes</th>
                  <th style="width:90px">&nbsp;Offering</th>
                  <th style="width:90px">&nbsp;Firstfruit</th>
                  <th style="width:70px">&nbsp;Mission</th>
                  <th style="width:70px">&nbsp;Care</th>
                  <th style="width:70px">&nbsp;Ladies</th>
                  <th style="width:70px">&nbsp;Men</th>
                  <th style="width:70px">&nbsp;YDC</th>
                  <th style="width:70px">&nbsp;Choir</th>
                  <th style="width:70px">&nbsp;Prayer</th>
                  <th style="width:70px">&nbsp;Circle</th>
                  <th style="width:70px">&nbsp;Creative</th>
                  <th style="width:70px">&nbsp;DVBS</th>
                  <th style="width:70px">&nbsp;Others</th>
                  <th style="width:100px">&nbsp;Total</th>
                </tr>
                <tr style="font-size:8pt;">
                  <td>
                    <b>TOTAL</b>
                  </td>
                  <td colspan="2"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
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

<!---->
  </div>
</div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
  <script src="{{ asset('js/views/main.js') }}"></script>
@endsection