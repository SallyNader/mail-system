
@include('include.header')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->       


                    <h5></h5>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              Create File To Upload Theme
                            </div>
                            <div class="panel-body" style="width:600px">
                               


<form action="{{url('theme')}}" method="POST" enctype="multipart/form-data" files="true" >

{{ csrf_field() }}

                 <div class="col-md-4" style="width:600px">
                        <div class="form-group">
                            <label>Name of Theme</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                                <p style="color:blue">{{$errors->first('name')}}</p>
                            <p class="help-block"></p>
                               
<br/><br/>
                        </div>




                    </div>  






                            </div>
                            <div class="panel-footer">
                            <input type="submit" name="upload" value="Add Name For Theme" class="btn btn-success">
         
                            </div>
                        </div>  
</form>





<br/>
<br/>


 <div class="panel panel-primary">
                            <div class="panel-heading">
                                Upload Theme
                            </div>
                            <div class="panel-body" style="width:600px">
                               
<form action="{{url('theme\uploadtheme')}}" method="POST" enctype="multipart/form-data" files="true" >

{{ csrf_field() }}

                 <div class="col-md-4" style="width:600px">
                        <div class="form-group">
                            <label>Name of Theme</label>
                            <select name="theme">
                              
                            @foreach($themes as $theme)

                            <option value="{{$theme->t_name}}">{{$theme->t_name}}</option>
                            @endforeach

                            </select>
                               
                            <p class="help-block"></p>
                               
<br/><br/>
<input type="file" name="multi[]" multiple>
 
                        </div>
                    </div>  






                            </div>
                            <div class="panel-footer">
                            <input type="submit" name="upload" value="Upload Theme" class="btn btn-success">
         
                            </div>
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