@extends ('layouts.master')

@section('title', 'Dynamic Post')

@section('navigation')

	@include ('partials.nav')

@endsection

@section('content')

	@include('partials.createPostForm')

@endsection

@section('footer')

	{{-- @include('layouts.footer') --}}

@endsection