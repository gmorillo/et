@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    	<div class="container my-5"></div>		
    	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-4">
			@include('administration.profile-menu')
		</div>
		<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-4">
			@if (session('message'))
			    <div class="alert alert-success alert-dismissible fade show" role="alert">
			        <p class="mb-0"><strong>{{ session('message') }}</strong></p>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
			@endif
			{{--@include('sections.profile.botones-comprar.botones')--}}
		</div>
    </div>
</div>
@endsection