@extends ('layouts.master')

@section('title', 'View Messages')

@section('topTitle', 'Messages')

@section('navigation')

	@include ('partials.nav')

@endsection

@section('content')
	<section class="posts">
		@foreach($messages as $message)

			@include('partials.post')

		@endforeach
	</section>
	
	{{-- @include('partials.featuredPost') --}}

	

@endsection