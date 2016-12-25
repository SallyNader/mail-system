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
                  <br><br>
                  @foreach($mail as $n)
              <div class="panel panel-info" style="width: 750px;margin-left: 40px;height: 400px">
      <div class="panel-heading">To: {{$n->person}}<br/><br/><div style="margin-left:40px : ">At :  {{$n->created_at}}  </div></div>
      <br/>

   <b>Subject:</b>  {{$n->subject}}
      <div class="panel-body" style="height: 1000px"><?php    echo $n->message ?></div>
    </div>

    @endforeach
             <br/>


             <a href ="{{route('mail.create')}}"   class="btn btn-primary active" style="margin-left:  50px ">New Message                  </a>
    </div>
             <!-- /. PAGE INNER  -->



            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
     @include('include.footer')