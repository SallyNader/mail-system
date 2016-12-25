  @include('include.header')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Inbox</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  --> 

                          <div class="col-md-6">
                
                        <div class="table-responsive" style="width: 880px">
                            <table class="table">
                              
                                <tbody>



                                  @if(!empty($mails))

@foreach($mails as $c)  



                              <tr  style="background-color: #d6f5f4">
                                        
                                        <td><?php echo substr($c->person,0,10) ?>...</td>
                                        
                                        <td>{{substr($c->subject,0,20)}}...</td>
                                        
                                        <td>{{$c->created_at}}</td>
                                        <td><a href="{{ route('mail.show',$c->m_id) }}">open</a></td>
                                    </tr>

                                   @endforeach

                                    @endif
                                </tbody>
                            </table>
<br/><br/>




<a href="{{route('mail.create')}}"  style="margin-right:  80px "  class="btn btn-primary active">New Message</a>
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