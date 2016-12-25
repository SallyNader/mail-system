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
                  <!-- /. ROW  -->
                  <!-- /. ROW  -->
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
                                  <h4>{{$list->l_name}}


                                  </h4>
                               
                                    


                                    
                          

                             <h3> </h3>  
                               
                                          <div class="col-md-6">
                       
                        <table class="table table-striped table-bordered table-hover" style="width:600px">
                            <thead>

                          
                                <tr>
                                    <th>id</th>
                                    <th>Email</th>
                               
                                    
                                </tr>
                            </thead>
                            <tbody>



                             @foreach($list->contacts as  $l)
                                <tr>

                                    <td>{{$l->c_id}}</td>
                                    <td>{{$l->c_mail}}</td>
                                   


                                                    
                                    
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>

                        <form action="{{url('list/deletecontact')}}" method="post">
                                
                                    {{ csrf_field() }}



                                    <input type="hidden" name="list_id" value="{{$list->l_id}}"/>




                                    

                                     <input type="submit" name="remove" value="Delete All From List" class="btn btn-warning">
                                                      </form>
                                                      
                                                      <h1>
<form action="{{url('list/'.$list->l_id)}}" method="POST">
    
 {!! method_field('DELETE') !!} 

          {{ csrf_field() }}
    <input type="submit" name="delete" value="delete list" class="btn btn-danger">
</form></h1>
                                 

                                     @endforeach
                    </div>   
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