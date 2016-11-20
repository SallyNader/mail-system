<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
<meta name="csrf-token" content="{{csrf_token()}}"/>
     <script src="{!!asset('ckeditor/ckeditor.js')!!}"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="{!!asset('assets/css/bootstrap.css')!!}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{!!asset('assets/css/font-awesome.css')!!}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{!!asset('assets/css/custom.css')!!}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i ></i>Cayshly MailSystem</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> </a></li>
                        <li><a href="#"> </a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="{!!asset('assets/img/find_user.png')!!}" class="img-responsive" />
                     
                    </li>


                    
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Mails<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('mail/create')}}">Send new Mail</a>
                            </li>
                            <li>
                                <a href="{{url('mail')}}">Inbox</a>
                            </li>
                            
                        </ul>
                    </li>










    <li>
                        <a href="#"><i class="fa fa-edit "></i>Contacts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('contact/create')}}">Add new Contact</a>
                            </li>
                            <li>
                                <a href="{{url('contact')}}">All Contacts</a>
                            </li>
                            
                        </ul>
                    </li>






    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Lists<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('list/create')}}">Add new List</a>
                            </li>
                            <li>
                                <a href="{{url('list')}}">All Lists</a>
                            </li>
                            
                        </ul>
                    </li>












    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Images<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('image/create')}}">Add new Image</a>
                            </li>
                            <li>
                                <a href="{{url('image')}}">All Images</a>
                            </li>
                            
                        </ul>
                    </li>














    <li>
                        <a href="#"><i class="fa fa-table "></i>Themes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('theme/create')}}">Add new Theme</a>
                            </li>
                            <li>
                                <a href="{{url('theme')}}">All Themes</a>
                            </li>
                            
                        </ul>
                    </li>




                   
                  
                </ul>

            </div>

        </nav>