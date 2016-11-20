
@include('include.header')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Update Theme</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->       


                    <h5></h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Update Theme
                            </div>
                            <div class="panel-body" style="width:600px">
                               


<form action="{{url('theme/'.$theme->t_id)}}" method="POST" enctype="multipart/form-data" files="true" >

{{ csrf_field() }}

{!!method_field('PUT')!!}
 <!--<img src="{{url('upload/'.$theme->t_path)}}" style="width: 200px;height: 200px">-->
                 <div class="col-md-4" style="width:600px">
                        <div class="form-group">

                         
                            <label>Name of Theme</label>
                            <input type="text" name="name" class="form-control" value="{{$theme->t_name}}" />

                             <p style="color:blue">{{$errors->first('name')}}</p>
                            <p class="help-block"></p>
                                <input type="file" name="multi[]" multiple>
<br/><br/>
                        </div>
                    </div>  






                            </div>
                            <div class="panel-footer">
                            <input type="submit" name="upload" value="upload" class="btn btn-success">
         
                            </div>
                        </div>  
</form>





<br/>
<br/>





    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    @include('include.footer')