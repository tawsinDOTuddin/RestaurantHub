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
            <li class="active"><a href="/admin/bookinglist/{{Auth::user()->restaurant_id}}"><em class="fa fa-calendar">&nbsp;</em>Booking List</a></li>
            <!--li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li-->
            <li><a href="/admin/resdetails/{{Auth::user()->restaurant_id}}"><em class="fa fa-toggle-off">&nbsp;</em> Restaruant Details</a></li>
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

@forelse($list as $result)
        <div class="col-md-6 col-md-offset-1 row">

            <div class="panel panel-primary">
                <div class="panel-heading">Name: {{ $result->user->name }} email: {{ $result->user->email }} </div>
                <div class="panel-body">
                <span>{{ $result->timing }}</span>
                </div>
                <div class="panel-footer"><a href="/admin/confirm/{{ $result->id }}">Confirmed</a>
                </div>
            </div>
        </div>
        <br>
    @empty
        <div class="">
  <div class="">
    <h1></h1>
  </div>
</div>
    @endforelse 

</div>



@endsection