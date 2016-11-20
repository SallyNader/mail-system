  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Lists</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 
              
                 <!-- /. ROW  -->    

 <div class="col-md-4">
                        
                    </div>
                
                  <div class="col-md-4" style="width: 800px">
                  <br/><br/>
                        <h5></h5>
                        <ul class="nav nav-tabs">

                        
                    

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">

                            @foreach($lists as $list)
                                  <h4>{{$list->l_name}}</h4>
                          

                             <h3> </h3>  
                               
                                          <div class="col-md-6">
                       
                        <table class="table table-striped table-bordered table-hover" style="width:600px">
                            <thead>

                          
                                <tr>
                                    <th>id</th>
                                    <th>Email</th>
                                   
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($list->contacts as  $l)
                                <tr>

                                    <td>{{$l->c_id}}</td>
                                    <td>{{$l->c_mail}}</td>
                                   
                                                    <td  style="width:100px">  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>

                                     @endforeach
                    </div>   
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Daleel</h4>
                             <table class="table table-striped table-bordered table-hover" style="width:600px">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Email</th>
                                   
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                   
                                                    <td  style="width:100px">  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                              
                                       <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    
                                                       <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                      
                                                   <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                            </tbody>
                        </table>


                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Alboraq</h4>
                                <table class="table table-striped table-bordered table-hover" style="width:600px">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Email</th>
                                   
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                   
                                                    <td  style="width:100px">  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                              
                                       <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    
                                                       <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                      
                                                   <td>  <button type="button" class="btn btn-danger">Delete</button></td>
                                    
                                </tr>
                            </tbody>
                        </table>


                            </div>

                        </div>
                    </div>       
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     @include('include.footer')