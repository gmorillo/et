@extends('layouts.app')
@section('title')
	<title>Estudio de tatuajes y piercings en albacete | Etnias Tattoo Collective </title>
@endsection
@section('metas')
	<meta property="og:title" content="Tienda y estudio de tatuajes y piercings en albacete | Etnias Tattoo Collective">
	<meta property="og:description" content="Piercings y diferentes estilos y tipos de tatuajes en albacete watercolor, blackwork, puntillismo, realismo, japones, neo tradicional, trash polka, cover up ">
	<meta property="og:url" content="http://www.etniastattoo.es/">
	<meta property="og:site_name" content="Etnias Tattoo Collective">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:description" content="Estudio de TATTOO, PIERCINGS, MICRODERMAL en ALBACETE, expertos en REALISMO. Tatuajes orientales">
	<meta name="twitter:title" content="Estudio de tatuajes y piercings en albacete | Tatuajes a color | Tienda de tatuajes la roda | Tatuajes murcia">
<meta name="description" content="En nuestro estudio de tatuajes y piercings en albacete realizamos diferentes estilos de tattoo. Blackwork, Brush & Sketch, Tatuaje japones, Lettering, Neotradicional, Newschool, tatuajes ornamentales, realismo, trash polka, piercing y microdemar. Contactanos 670 98 85 44 - Estamos ubicados en Calle Marzo, 5 02002 Albacete.">
<meta name="keywords" content="Tatuajes realismo albacete, Studio de tatuajes albacete, piercings en albacete, Tienda de tattoo albacete, Tienda de tatuajes la roda, Dotwork tattoo, Tatuajes españa, Tatuadores albacete, Tatuajes orientales, Tienda de piercings albacete ">
@endsection
@section('content')
	@include('sections.home.slider')	
@endsection

@section('stylesheet')
<link href="{{ asset('css/slideshow.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ asset('js/slideshow.js') }}" type="text/javascript"></script>
@endsection