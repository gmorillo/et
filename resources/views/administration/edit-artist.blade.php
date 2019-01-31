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

			<div class="row">
				@foreach($artist as $artista)
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3" style>
						<div class="card" style="box-shadow: 0 0 20px rgba(38,38,38,.2);">
							{{--<img class="card-img-top" src="..." alt="Card image cap">--}}
							<div class="card-body">
								<h5 class="card-title">
									{{$artista->name}}
								</h5>
								<p class="m-0">
									<small>
										@foreach($residenteInvitado as $ri)
														    				@if($artista->condition_id == $ri->id)
												<strong>Condición: </strong>{{$ri->condition}} <br> 
											@endif
										@endforeach
										@foreach($tattooPiercing as $tp)
														    				@if($artista->type_id == $tp->id)
												<strong>Arte: </strong>{{$tp->type}}
											@endif
										@endforeach
									</small>
								</p>
								<h5><span class="float-right">
										<a class="px-1 text-danger" title="Eliminar éste estilo" href="{{ url('profile/delete-artist/') }}/{{$artista->id}}"><i class="fas fa-trash-alt"></i></a> 
										<a class="px-1 text-success" title="Editar éste estilo" href="{{ url('profile/edit-artist/') }}/{{$artista->id}}"><i class="far fa-edit"></i></a>
									</span></h5>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
    </div>
</div>
@endsection