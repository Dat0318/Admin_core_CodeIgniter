  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row pt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="tableData_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="tableData_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableData"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="tableData" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="tableData_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="tableData" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th>
                            <th class="sorting" tabindex="0" aria-controls="tableData" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th>
                            <th class="sorting" tabindex="0" aria-controls="tableData" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                            <th class="sorting" tabindex="0" aria-controls="tableData" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                            <th class="sorting" tabindex="0" aria-controls="tableData" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr role="row" class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td>1.9</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td>1.8</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td>1.7</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td>1.7</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1 dtr-control" tabindex="0">Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td>1</td>
                            <td>A</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                      <div class="dataTables_info" id="tableData_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                      <div class="dataTables_paginate paging_simple_numbers" id="tableData_paginate">
                        <ul class="pagination">
                          <li class="paginate_button page-item previous disabled" id="tableData_previous"><a href="#" aria-controls="tableData" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                          <li class="paginate_button page-item active"><a href="#" aria-controls="tableData" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="tableData" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="tableData" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="tableData" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="tableData" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                          <li class="paginate_button page-item "><a href="#" aria-controls="tableData" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                          <li class="paginate_button page-item next" id="tableData_next"><a href="#" aria-controls="tableData" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

