@extends('layouts.master')

@section('content')

<div class="vd_content-section clearfix" id="pro-h">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel widget light-widget panel-bd-top">
                <div class="panel-heading no-title"> </div>
                    <div class="panel-body">
                        <div class="text-center vd_info-parent"> <img alt="example image" src="\css\avatar.jpg"> </div>
                            <div class="row">
                                <div class="col-xs-12"> 
                                    <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br">
                                        <i class="fa fa-camera" ></i>Upload Photo</a> 
                                </div>
                                <div class="col-xs-12"> 
                                    <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br">
                                        <i class="fa fa-envelope append-icon"></i>Send Message</a> 
                                </div>
                            </div>
                            <h2 class="font-semibold mgbt-xs-5">{{$user->name}}</h2>
                            <h5>{{Auth::user()->edit->description}}</h5>
                            <div class="mgtp-20">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td style="width:60%;">Status</td>
                                            <td><span class="label label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>User Rating</td>
                                            <td>
                                                <i class="fa fa-star vd_yellow fa-fw"></i>
                                                <i class="fa fa-star vd_yellow fa-fw"></i>
                                                <i class="fa fa-star vd_yellow fa-fw"></i>
                                                <i class="fa fa-star vd_yellow fa-fw"></i>
                                                <i class="fa fa-star vd_yellow fa-fw"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Member Since</td>
                                            <td> Jan 07, 2014 </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- panel widget -->
                 
        </div>
        <div class="col-sm-9">
            <div class="tabs widget">
                <ul class="nav nav-tabs widget" id="pro-nav">
                    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                    <li> <a data-toggle="tab" href="#projects-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
                    <li> <a data-toggle="tab" href="#photos-tab"> Photos <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                    <li> <a data-toggle="tab" href="#friends-tab"> Friends <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                    <li> <a data-toggle="tab" href="#groups-tab"> Groups <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                </ul>
                <div class="tab-content">
                    <div id="profile-tab" class="tab-pane active">
                        <div class="pd-20">
                            <div class="vd_info tr"> 
                                <a class="btn vd_btn btn-xs vd_bg-yellow" href="/edit/{{ Auth::user()->id }}/create"> 
                                    <i class="fa fa-pencil append-icon"></i> Edit </a> 
                            </div>      
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-user profile-icon fa-2x"></i> ABOUT</h3>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">First Name:</label>
                                    <div class="col-xs-7 controls">{{Auth::user()->edit->firstname}}

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">Last Name:</label>
                                    <div class="col-xs-7 controls">{{Auth::user()->edit->lastname}}

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">User Name:</label>
                                    <div class="col-xs-7 controls">{{Auth::user()->edit->name}}
                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">Email:</label>
                                    <div class="col-xs-7 controls">{{$user->email}}

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">City:</label>
                                    <div class="col-xs-7 controls">Los Angeles

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">Country:</label>
                                    <div class="col-xs-7 controls">United States

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">Birthday:</label>
                                    <div class="col-xs-7 controls">Jan 22, 1984

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                    <label class="col-xs-5 control-label">Interests:</label>
                                    <div class="col-xs-7 controls">{{Auth::user()->edit->interest}}

                                    </div>
              <!-- col-sm-10 --> 
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row mgbt-xs-0">
                                <label class="col-xs-5 control-label">Website:</label>
                                <div class="col-xs-7 controls"><a href="http://Vendroid.venmond.com">Vendroid.venmond.com</a>
                                </div>
              <!-- col-sm-10 --> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row mgbt-xs-0">
                                <label class="col-xs-5 control-label">Phone:</label>
                                <div class="col-xs-7 controls">{{Auth::user()->edit->phone}}

                                </div>
              <!-- col-sm-10 --> 
                            </div>
                        </div>
                    </div>
                    <hr class="pd-10"  />
                    <div class="row">
                        <div class="col-sm-7 mgbt-xs-20">
                            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-file-text-o mgr-10 profile-icon fa-2x"></i> EXPERIENCE</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Owner</a> at <a href="http://www.venmond.com">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">CEO</a> at <a href="http://www.venmond.com">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Web Designer</a> at <a href="http://www.venmond.com">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Sales</a> at <a href="http://www.venmond.com">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon fa-2x"></i> EDUCATION</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>                
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
                                        </ul>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


