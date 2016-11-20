  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Contacts</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    

 <div class="col-md-4">
                        <div class="form-group">
                            <label>Create New List</label>
                            <form  action="{{route('list.store')}}" method="POST">
{{ csrf_field() }}
                            <input class="form-control" type="text" name="name" />

                              <p style="color:blue">{{$errors->first('name')}}</p>
                         <br/>
                          
                          <input type="submit" name="add" value="Create List" class="btn btn-info"> 
                            </form>
                        </div>
                    </div>
                    <br/><br/>
 <br/><br/> <br/><br/>
      
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     @include('include.footer')