  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>UpdateImage</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  

                 <div class="col-md-4">
                        <div class="form-group">

                        <form action="{{url('image/'.$image->i_id)}}" files="true" method="POST" enctype="multipart/form-data" >
                        {!! method_field('PUT') !!} 
                  
{{ csrf_field() }}


                   <img src="{{url('upload/'.$image->i_path)}}" style="width: 200px;height: 200px">

                            <label>Name of Image</label>
                            <input class="form-control" type="text" name="name" value="{{$image->i_name}}" />
                             <p style="color:blue">{{$errors->first('name')}}</p>
                            <p class="help-block"></p>
                            <br/>
                                <label class="btn btn-default btn-file">
   Upload Image<input type="file" style="display: none; " class="btn btn-success" name="file"  ></label>
<br/><br/>
                     <input type="submit" name="update" value="Update"  class="btn btn-success">      </div>
                    </div>  

</form>


    </div>



             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     @include('include.footer')