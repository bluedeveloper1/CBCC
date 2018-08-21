@extends('layout')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
<!--header-->
    <div class="row margin-bottom-padding">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <h3  style="color: #20a8d8;"> View Transactions </h2> &nbsp
            <!--Session Info Message-->

            <div class="col-md-12 col-lg-12">
                @if(session('info'))
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
                @endif

            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="pull-right">
                <div class="form-group">
                    <div class="controls">
                        <span class="pull-right">
                        <button type="button" class="btn btn-secondary btn-sm">Generate PDF</button>
                        <button type="button" class="btn btn-success btn-sm">PDF Alphabetically</button>
                        <button type="button" class="btn btn-info btn-sm">Edit Transaction</button>
                        <button type="button" class="btn btn-warning btn-sm">Modify Transaction</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete Transaction</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <form>
  <div class="row mb-2">
      <div class="col-12">
          <div class="controls">
            <div class="input-group">
              <input id="appendedInputButtons" size="16" class="form-control" type="text">
              <div class="input-group-btn">
                <button class="btn btn-primary" type="button">Search</button>
                <button type="button" class="btn btn-secondary" style="font-weight:bold;"
                      data-toggle="collapse" data-target="#filter-panel" aria-expanded="true">Advanced Search</button>
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
                  <label for="date" class="col-md-1 control-label font-weight-bold">Date</label>
                  <div class="col-md-2">
                    <input class="form-control-sm" type="date" name="dategiven" value>
                  </div>
                  <label for="service" class="col-md-1 control-label font-weight-bold">Service</label>
                  <div class="col-md-2">
                    <select class="form-control-sm" name="service">
                      <option value selected>ALL</option>
                      <option value="1">Worship Service</option>
                      <option value="2">Gospel Hour Service</option>
                    </select>
                  </div>
                  <label for="month" class="col-md-1 control-label font-weight-bold">Month</label>
                  <div class="col-md-2">
                    <select class="form-control-sm" name="month">
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
                  <label for="year" class="col-md-1 control-label font-weight-bold">Year</label>
                  <div class="col-md-2">
                    <select class="form-control-sm" name="year">
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
  </form>
<!--main-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <div class="table-responsive">
            <table class="table table-responsive-sm table-sm table-bordered white-bg" style="font-size:10pt;">
              <tbody>
                <tr class="blue-bg">
                  <th>&nbsp;ID</th>
                  <th colspan="2">&nbsp;Name</th>
                  <th>&nbsp;Date</th>
                  <th>&nbsp;Tithes</th>
                  <th>&nbsp;Offering</th>
                  <th>&nbsp;Firstfruit</th>
                  <th>&nbsp;Mission</th>
                  <th>&nbsp;Care</th>
                  <th>&nbsp;Ladies</th>
                  <th>&nbsp;Men</th>
                  <th>&nbsp;YDC</th>
                  <th>&nbsp;Choir</th>
                  <th>&nbsp;Prayer</th>
                  <th>&nbsp;Circle</th>
                  <th>&nbsp;Creative</th>
                  <th>&nbsp;DVBS</th>
                  <th>&nbsp;Others</th>
                  <th colspan="2">&nbsp;Total</th>
                </tr>
                <tr style="font-size:9pt;">
                  <td>11001</td>
                  <td colspan="2">Sarmiento, James-Andrew Rodriguez</td>
                  <td>08-17-2018</td>
                  <td>500</td>
                  <td>500</td>
                  <td>500</td>
                  <td>10,000</td>
                  <td>5,000</td>
                  <td>4,000</td>
                  <td>200</td>
                  <td>12,450.50</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td colspan="2" class="font-weight-bold">14,440.50</td>
                </tr>
                <tr style="font-size:9pt;">
                  <td>11001</td>
                  <td colspan="2">Sarmiento, Justine</td>
                  <td>08-17-2018</td>
                  <td>500</td>
                  <td>500</td>
                  <td>500</td>
                  <td>10,000</td>
                  <td>5,000</td>
                  <td>4,000</td>
                  <td>200</td>
                  <td>12,450.50</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td>200</td>
                  <td colspan="2" class="font-weight-bold">14,440.50</td>
                </tr>
                <tr style="font-size:9pt;">
                  <td class="font-weight-bold" colspan="3">Total</td>
                  <td class="font-weight-bold" >500</td>
                  <td class="font-weight-bold" >500</td>
                  <td class="font-weight-bold" >500</td>
                  <td class="font-weight-bold" >10,000</td>
                  <td class="font-weight-bold" >5,000</td>
                  <td class="font-weight-bold" >4,000</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >12,450.50</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td class="font-weight-bold" >200</td>
                  <td colspan="2" class="font-weight-bold">140,440.50</td>
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

<!---->
  </div>
</div>
@endsection
<!-- /.conainer-fluid -->

@section('myscript')
  <script src="{{ asset('js/views/main.js') }}"></script>
@endsection