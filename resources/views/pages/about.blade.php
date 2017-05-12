@extends('layouts/app',['title' => 'About'])

@section('default')
 <div class="container">
 	<h2>What is Laracarte?</h2>
 	<p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">laramap.com</a>.</p>
 	<div class="row">
 		<div class="col-md-6">
 			<p class="alert alert-warning">
 				<strong>
 					<i class="fa fa-warning"></i>
 				    This app has been buit by 
 				    <a href="https://twiter.com/mlamine860" target="_blank">@mlamine860
                     for learning purposes .
 				    </a>
 				</strong>
 			</p>
 		</div>
 	</div>
 		<p>Fell free to help to the improve <a target="_blank" href="https://github.com/mercuryseries/laracarte">source code</a>.</p></p>
 		<hr>
 		<h2>What is Laramap ?</h2>
 		<p>Laramap is the website by which was inspired Laracarte :).</p>
 		<hr>
 		<h2>which tools and services are used in Laracarte ?</h2>
 		<p>Basically it 's built on Laravel  &amp; Bootstrap. But there 's a bunch of services used form email and other sections. </p>
 		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
 </div>
@endsection()