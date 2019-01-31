<nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
	<div class="container">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand mx-auto" href="#">Gra<span>freez</span></a>
		<div class="collapse navbar-collapse" id="navbarCollapse1">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"> <a class="nav-link" href="#myCarousel">Home <span class="sr-only">(current)</span></a> </li>
				<li class="nav-item"> <a class="nav-link" href="#benefits">Benefits</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#about">About</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#gallery">Image Gallery</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#contact">Contact</a> </li>
			</ul>
			<ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>--}}
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    	<a class="dropdown-item" href="{{ url('/profile') }}">Mi cuenta</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
		</div>
	</div>
</nav>