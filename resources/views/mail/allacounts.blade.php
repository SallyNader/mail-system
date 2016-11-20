  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Accounts</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <div class="col-md-4" style="width: 800px ; height: 900px">
                        <h5>Accounts</h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                      All Accounts
                            </div>
                            <div class="panel-body">
                               

   <div class="col-md-6">
                        <h5>All Accounts</h5>
                        <table class="table table-striped table-bordered table-hover" style="width: 700px" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
 <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><button type="button" class="btn btn-warning">Update</button></td>
                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                     <td><button type="button" class="btn btn-warning">Update</button></td>
                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                     <td><button type="button" class="btn btn-warning">Update</button></td>
                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                     <td><button type="button" class="btn btn-warning">Update</button></td>
                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>







                            </div>
                            <div class="panel-footer">
                               <button type="button" class="btn btn-info">Add New Account</button>
                            </div>
                        </div>
                    </div>
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
      @include('include.footer')