@extends('layout.default')

@section('content')

@include('layout.navbar')

<header class="opage">
	<div class="container">
		<div class="hero-header">What sets us apart you ask?</div>
		<div class="hero-text">
			Well, we put our hearts and souls into making every project we undertake the best it can be and we dont stop until we get there.
		</div>
	</div>
</header>

<div class="maincontent content">
    <div class="container">
		<div class="row">        
			<div class="col-lg-6 col-sm-6">
				<div class="row">
					<div class="each-people col-lg-5">
						<img src="img/umesh.jpg" alt="">
					</div>
					<div class="people-det col-lg-5">
						UMESH K G REDDY
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, necessitatibus, odio, mollitia.
						</div>
						<div class="social-links">
							<span><i class="fa fa-facebook-square"></i></span>
							<span><i class="fa fa-linkedin-square"></i></span>
							<span><i class="fa fa-skype"></i></span>
							<span><i class="fa fa-google-plus-square"></i></span>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="row">
					<div class="each-people col-lg-5">
						<img src="img/hamsa.jpg" alt="">
					</div>
					<div class="people-det col-lg-5">
						HAMSA M REDDY
						<div class="desc">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, consequatur, tempore non expedita.
						</div>
						<div class="social-links">
							<span><i class="fa fa-facebook-square"></i></span>
							<span><i class="fa fa-linkedin-square"></i></span>
							<span><i class="fa fa-skype"></i></span>
							<span><i class="fa fa-google-plus-square"></i></span>
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>
</div>
@stop