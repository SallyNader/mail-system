  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Contacts</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    

 <div class="col-md-4">
                        <div class="form-group">
                            <label>Add New Contact</label>
                            <form  action="{{route('contact.store')}}" method="POST">
{{ csrf_field() }}
                            <input class="form-control" type="email" name="email" />

                                <p style="color:blue">{{$errors->first('email')}}</p>
                         <br/>
                          
                          <input type="submit" name="add" value="Create Contact" class="btn btn-info"> 
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