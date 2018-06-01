@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-12 text-center">
            <div class="well well-sm">
                <div class="row">
                    <!--div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div-->
                    <div class="col-sm-6 col-md-11">
                        <h1>
                            {{$user->name}}</h1>
                            <br>
                          <h2>  
                        <i class="glyphicon glyphicon-globe"></i>Username: {{$user->username}}
                        </h2>
                         <br>
                        <h3>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />
                             <br>
                            
                            <br />
                             <br>
                            </p>
                           </h3>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
  <h2>Bookings</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Booking ID</th>
        <th>Restaurant</th>
        <th>Timing</th>
        <th>Status</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
@foreach($user->bookings->sortByDesc('id') as $booking)
      <tr>
        <td>{{$booking->id}}</td>
        <td>{{$booking->restaurant->name}}</td>
        <!--td>{{$booking->timing}}</td-->
        <td>{{ Carbon\Carbon::parse($booking->timing)->format('d F Y H:i') }}</td>
        @if($booking->status==0)
        <td>Confirmed</td>
        @else 
        <td>Pending</td>
        @endif
        @if($booking->status==0)
        <td>Already Completed</td>
        @else 
        <td><a href="/profile/deletebooking/{{$booking->id}}">Delete</a></td>
        @endif
        
      </tr>
@endforeach
      
    </tbody>
  </table>
</div>
</div>

@endsection