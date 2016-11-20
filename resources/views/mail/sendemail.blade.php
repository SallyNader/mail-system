  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>New Message</h2>   
                    </div>











           
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
<form  action="{{route('mail.store')}}" method="POST">
  

 {{ csrf_field() }}
          <div class="form-group" style="margin-left: 30px;margin-top: 60px">
                            <label>To</label>
                            <input class="form-control"  style="width:500px" name="to" value="{{old('to')}}" />
                            <p class="help-block"></p>
                        </div>
                    




                
                        <div class="form-group" style="margin-left: 30px">
                            <label>Subject</label>
                            <input class="form-control" style="width:500px" name="subject" value="{{old('subject')}}" />
                            <p class="help-block"></p>
                        </div>




                        <h5></h5>
                        <div class="panel panel-primary" style="width:350px;margin-left: 30px"">
                            <div class="panel-heading">
                               Select Theme
                            </div>
                            <div class="panel-body">

                   <select name="theme" class="form-control" style="width:250px" >
                                 @foreach($themes as $theme)
                                 <option value="{{$theme->t_name}}">{{$theme->t_name}}</option>

                                 @endforeach


                              </select>

                                      
                            </div>
                            <div class="panel-footer">
                             <div></div>
                            </div>
                        </div>
               
<br/>


                        <div class="form-group" style="margin-left: 30px">
  <label for="comment">Message</label>
  <textarea class="form-control" rows="5" id="comment" style="width:500px" name="message" >{{old('message')}}</textarea>
</div>
            



<script >
  




  CKEDITOR.replace( 'message' );
</script>
    <p style="color:blue">{{$errors->first('name')}}</p>

<input type="submit" name="send" value="Send" class="btn btn-success" style="margin-left: 30px">




<br/>



<br/>






<br/>

<br/>







      <div class="col-md-6">

                        <h5>Select Contacts</h5>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">all Contacts</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Lists</a>
                            </li>
                           
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                                <h4></h4>
                                <p>

<br/>


<br/>


@foreach($contacts as $c)
                                    <input type="checkbox" name="contact[]" value="{{$c->c_mail}}">{{$c->c_mail}}<br>
                                     


                                     @endforeach
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile">
                             
                                <p>

<br/>


<br/>



                              @foreach($lists as $list)
                                    <input type="checkbox" name="list[]" value="{{$list->l_name}}">{{$list->l_name}}<br>
                                    @endforeach
                                     
                                </p>

                            </div>
                     

                        </div>
                    </div>


                </div> 










</form>
              
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     @include('include.footer')