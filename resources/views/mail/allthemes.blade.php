    @include('include.header')

  





  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Themes</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
                        <div class="col-md-6">
                        <h5>All Themes</h5>
                        <table class="table table-striped table-bordered table-hover" style="width:600px;text-align: center;">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                   
                                    <th>Update</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($themes as $t)
                                <tr>
                                    <td style="width: 30px">{{$t->t_id}}</td>
                                    <td>{{$t->t_name}}</td>

                                   <!-- <td><img src="{{url('upload/'.$t->t_path)}}" style="width: 100px;height: 100px"></td>-->
                                    <td style="width:100px">

                                   <a href="{{route('theme.edit',$t->t_id)}}"  class="btn btn-warning">Update</a>

                                   </td>
                                                    <td  style="width:100px"> 



                                               <form action="{{url('theme/'.$t->t_id)}}" method="POST"  >
                                                  {!! method_field('DELETE') !!} 

                                                  {{ csrf_field() }}
                     
  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                                               </form>



                                                    </td>
                                    
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>

                    </div>         
   
























              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

    @include('include.footer')