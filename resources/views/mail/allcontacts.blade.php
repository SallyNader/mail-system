  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Contacts</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->  
                        <div class="col-md-6">
                        <h5>All Contacts</h5>
                        <table class="table table-striped table-bordered table-hover" style="width:600px;text-align: center;">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Email</th>
                                    <th>In List</th>
                                    <th>Add To List</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody >

                            @foreach($contacts as $c)
                                <tr>
                                    <td style="width: 30px">{{$c->c_id}}</td>
                                    <td>{{$c->c_mail}}</td>
                                    <td style="width: 50px">
                                      

  

  @foreach($c->lists as $cc)

  {{ $cc->l_name}}
  <br/>
  @endforeach


                                    </td>
                                    <td style="width:100px">

                                <form action="{{url('contact/addtolist')}}" method="POST">
                                  {{ csrf_field() }}


<input type="hidden" value="{{$c->c_id}}" name="contactid">
<select class="form-control" name="lists">
@foreach($lists as $list)
<option value="{{ $list->l_id}}">{{ $list->l_name}}</option>
@endforeach
</select>
<br/>
<br/>
<input type="submit" name="add" value="Add To List" class="btn btn-warning">

                                </form>

                                      
                                  

                                    </td>

                                    <td><a href="{{route('contact.edit',$c->c_id)}}" class="btn btn-primary" >Update</a></td>



                                                    <td  style="width:100px">  



<form action="{{url('contact/'.$c->c_id)}}" method="POST">
  
 {!! method_field('DELETE') !!} 
                  
{{ csrf_field() }}

  <input type="submit" name="Delete" value="Delete"  class="btn btn-danger">
</form>

                                                   </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

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