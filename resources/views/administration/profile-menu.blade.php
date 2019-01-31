<div class="user-profile-box">
    <div class="header clearfix">
        <h2>Bienvenido, </h2>
        <h4 class="ng-binding">{{ Auth::user()->name}}</h4>
        <img src="{{ asset('img/avatar.png') }}" alt="avatar" class="img-fluid profile-img">
    </div>
    <div class="detail clearfix">
        <div class="list-group py-2 @if(Auth::getUser()->role_id == 2 || Auth::getUser()->role_id == 1) d-none @endif" id="list-tab" role="tablist">
            <a href="{{ url('/profile/form-style') }}" class="list-group-item list-group-item-action" id="addstyle"><i class="fas fa-plus"></i> Agregar Estilo</a>
            <a href="{{ url('/profile/get-edit-info-style') }}" class="list-group-item list-group-item-action" id="addstyle"><i class="far fa-edit"></i> Editar o eliminar Estilos</a>
            <a href="{{ url('/profile/get-info-artist') }}" class="list-group-item list-group-item-action" id="mis-anuncios"><i class="fas fa-user-plus"></i> Agregar Artistas</a>
            <a href="{{ url('/profile/get-edit-info-artist') }}" class="list-group-item list-group-item-action" id="mis-anuncios"><i class="far fa-edit"></i> Editar o eliminar Artistas</a>
        </div>
    </div>
</div>
@section('stylesheet')
    <style>
        .user-profile-box {
            background: #fff;
            box-shadow: 0 0 20px rgba(38,38,38,.2);
            margin: 0 auto 50px;
        }
        .user-profile-box .header {
            padding: 30px 20px 120px;
            text-align: center;
            position: relative;
            background-repeat: no-repeat;
            border: none;
            margin: 0;
            background:linear-gradient( to bottom, rgba(239, 6, 6, 0), rgba(0, 0, 0, 0.67) ), url('/../img/texture.jpg') top left repeat;
            background-size: cover;
            color: #fff;
        }
        .user-profile-box .header h2 {
            margin: 0 0 8px;
            color: #fff;
            font-size: 24px;
        }
        .user-profile-box .header h4 {
            font-size: 16px;
            color: #fff;
            font-weight: 400;
        }
        .user-profile-box .profile-img {
            border-radius: 50%;
            background-clip: padding-box;
            border: 5px solid #fff;
            bottom: -75px;
            float: left;
            height: 160px;
            width: 160px;
            left: 50%;
            margin-left: -75px;
            position: absolute;
            box-shadow: 0 0 0 0 rgba(0,0,0,.1), 0 3px 3px 0 rgba(0,0,0,.1);
            object-fit: cover;
        }
        .user-profile-box .detail {
            padding-top: 100px;
        }
        ul, ol {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        ul li, ol li {
            list-style: none;
        }
        .user-profile-box .detail ul li .active, .user-profile-box .detail ul li a:hover {
            color: #3490DD;
        }
        .user-profile-box .detail ul li .active {
            background: #fafafa;
            color: #3490DD;
            font-weight: 500;
        }
        .user-profile-box .detail ul li a:hover {
            background: #fafafa;
            color: #3490DD;
        }
        .user-profile-box .detail ul li a {
            color: #727272;
            border-bottom: 1px solid #f5f5f5;
            padding: 12px 20px;
            display: block;
            font-size: 14px;
            font-weight: 500;
        }
        .user-profile-box .detail ul li a i {
            margin-right: 10px;
        }
        .lni-files:before {
            content: "\e972";
        }
        a:hover {
            text-decoration: none;
            cursor: pointer;
        }
        .list-group-item.active {
            z-index: 2;
            color: #3490dc;
            background-color: #fafafa;
            border-color: transparent;
            box-shadow: 0 0 15px transparent;
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.75rem 1.25rem;
            margin-bottom: 0px;
            background-color: #fff;
            border-bottom: 0.5px solid rgba(0, 0, 0, 0.125) !important;
            border: none;
        }

        #page-wrap { 
          width: auto; 
          margin: 15px auto; 
          position: relative; 
        }

        #sidebar { 
          width: auto; 
          position: fixed; 
          margin-left: 410px; 
        }
    </style>
@endsection