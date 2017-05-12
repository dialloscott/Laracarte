<!-- Static navbar -->
<div class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Laracarte</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="">Home</a></li>
				<li class="{{setActive('about_path')}}"><a href="{{route('about_path')}}">About</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
					<ul class="dropdown-menu">
				        <li><a target="_blank" href="http://laravel.com">Laravel.com</a></li>
				        <li><a target="_blank" href="http://laravel.io">Laravel.io</a></li>
				        <li><a target="_blank" href="http://laracasts.com">Laracasts</a></li>
				        <li><a target="_blank" href="http://larajobs.com">Larajobs</a></li>
				        <li><a target="_blank" href="http://laravel-news.com">Laravel News</a></li>
				        <li><a target="_blank" href="http://larachat.co">Larachat</a></li>
                  </ul>
				</li>
				<li class="{{setActive('contact_path')}}"><a href="{{route('contact_path')}}">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			   @if(!Auth::check())
			    <li class="dropdwon">
			    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="">My profile</a></li>
						<li><a href="">Edit profile</a></li>
						<li><a href="">Change my password</a></li>
						<li class="divider"></li>
						<li><a href="">Logout</a></li>
					</ul>
			    </li>
			   @else
				<li><a href="#">Login</a></li>
				<li><a href="#">Register</a></li>
				@endif
			</ul>
		</div>
	</div>
</div>