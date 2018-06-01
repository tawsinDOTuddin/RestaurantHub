@extends('layouts.admincommon')

@section('content')

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li ><a href="/admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li ><a href="/admin/bookinglist/{{Auth::user()->restaurant_id}}"><em class="fa fa-calendar">&nbsp;</em>Booking List</a></li>
            <!--li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li-->
            <li class="active"><a href="/admin/resdetails/{{Auth::user()->restaurant_id}}"><em class="fa fa-toggle-off">&nbsp;</em> Restaruant Details</a></li>
            <li><a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <em class="fa fa-power-off">&nbsp;</em>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
        </ul>
    </div>
<div class="col-sm-9 col-md-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="container">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-12 text-center">
            <div class="well well-sm">
                <div class="row">
                    
                    <div class="col-sm-6 col-md-11">
                        <h1>
                            {{$res->name}}</h1>
                            <br>
                          <h3>{{$res->area}}</h3>
                        
                         <br>
                        <h3>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$res->address}}
                            <br />
                             <br>
                            
                            <br />
                             <br>
                         </p>
                           </h3>
                           <p>{{$res->description}}</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection