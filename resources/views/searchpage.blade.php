@extends('layouts.app')

@section('content')
  
<div class="row">

	@forelse($results as $result)
		<div class="container col-md-12 mt-3 ">

			<div class="card col-md-6 offset-md-3">
				<div class="card-header"> {{ $result->name }} </div>
				<div class="card-body">
				<span>{{ $result->address }}</span>
				</div>
				<div class="card-footer">
				 <a href="/restaurantpage/{{ $result->id }}" class="card-link">More Info about this restaurant</a>
				 @if(($result->menu) != NULL)
				 <a class="col-sm-4" href="/menufolder/{{$result->menu}}.pdf" ><div class="btn btn-success btn-sm">View Menu</div></a>
				 <!--a class="col-sm-4" href="/menufolder/{{$result->menu}}.pdf" download="{{$result->menu}}.pdf"><div class="btn btn-success btn-sm">View Menu</div></a-->
				 @endif
				</div>
			</div>
		</div>
	@empty
		<div class="">
  <div class="">
    <h1></h1>
  </div>
</div>
	@endforelse	
</div>


@endsection