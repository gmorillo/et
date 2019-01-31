@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row ">
    	<div class="container my-5"></div>		
    	<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-4">
			@include('administration.profile-menu')
		</div>
		<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-4">
			<div class="dashborad-box p-5 ">
		        <form action="/profile/edit-info-artist/{{$artist->id}}" method="POST" enctype="multipart/form-data">
		            @csrf
		            <h3>Editar Artista {{$artist->name}}</h3>
		            <div class="row">
		                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
		                    <label for="condition_id" class="col-form-label">¿Artista residente o invitado?</label>
		                    <select class="form-control" name="condition_id" id="condition_id">
		                    	@foreach($residenteInvitado as $ri)
				    				@if($artist->condition_id == $ri->id)
										<option value="{{$ri->id}}" selected="selected">{{$ri->condition}}</option>
										@else
										<option value="{{$ri->id}}">{{$ri->condition}}</option>
									@endif
								@endforeach
		                    </select>
		                </div>
		                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
		                    <label for="type_id" class="col-form-label">¿Que hace éste artista?</label>
		                    <select class="form-control" name="type_id" id="type_id">
		                    	@foreach($tattooPiercing as $tp)
				    				@if($artist->type_id == $tp->id)
										<option value="{{$tp->id}}" selected="selected">{{$tp->type}}</option>
										@else
										<option value="{{$tp->id}}">{{$tp->type}}</option>
									@endif
								@endforeach
		                    </select>
		                </div>
		                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
		                    <label for="name" class="col-form-label">Nombre</label>
		                    <input type="text" name="name" id="name" class="form-control" placeholder="Introduce el nombre del artista" value="{{$artist->name}}">
		                </div>

		                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5">
		                    <div class="card-columns">
								@foreach($photos as $img)
									<div class="card">
										<img class="card-img-top" src="{{ asset('img/artist-gallery') }}/{{$img->img}}" alt="Card image cap">
										<div class="position-absolute" style="padding: 5px;bottom: 0;right: 0;background-color: rgba(0,0,0,0.8);color: white;">
											<a href="/profile/delete-img/{{$img->id}}" style="color: white"><i class="fas fa-trash-alt"></i></a>
										</div>
									</div>
								@endforeach
							</div>
		                </div>
		                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                    <div class="row my-5">
		                        <div class="uploader__box js-uploader__box l-center-box" style="border: 1px solid black;">
		                        <div class="uploader__contents">
		                            <label class="button button--secondary" for="fileinput">Select Files</label>
		                            <input id="fileinput" class="uploader__file-input" type="file" multiple name="secondary_img[]">
		                        </div>
		                    </div>
		                    </div>
		                    <!--<div class="mx-3">
		                        <input type="file" name="secondary_img[]" multiple id="basic-gallery-photo-add" max="2">
		                        <div class="gallery"></div>
		                    </div>-->
		                </div>
		            </div>
		            <div class="row justify-content-center">
		                <button class="btn btn-success btn-lg" type="submit">Editar Información</button>
		            </div>
		        </form>
		    </div>
		</div>
    </div>
</div>
    
@endsection
<style>
    .dashborad-box {
        padding: 12px;
        margin-bottom: 30px;
        -webkit-box-shadow: 0 0 20px rgba(38,38,38,.2);
        box-shadow: 0 0 20px rgba(38,38,38,.2);
    }
</style>