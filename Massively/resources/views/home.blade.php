@extends ('layouts.master')

@section('title', 'Home -- Create Message')

@section('topTitle', 'This is Massively')

@section('topText', 'Welcome')

@section('navigation')

	@include ('partials.nav')

@endsection

@section('content')

	@include('partials.createPostForm')

@endsection

@section('footer')

	{{-- @include('layouts.footer') --}}

@endsection