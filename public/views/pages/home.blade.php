@extends('layout.default')

@section('content')

@include('layout.navbarwscroll')


<header>
	<div class="container">
		<div class="hero-header">What is Designz?</div>
		<div class="hero-text">
			<!-- A graphic design and corporate gifting solutions firm promoted by a group of like minded people with experience in specialized fields like Designing, Corporate Gifting, we at Designz cater to today's customized requirements of our clients. -->

			Designz is a graphic design and corporate gifting solutions firm promoted by a group of like minded experts in specialized fields like Designing, Corporate Gifting, we at designz, cater to today's customized requirements of our clients. 
			<br><br> 
			What sets us apart you ask? Well, We put our hearts and souls into making every project we undertake the best it can be and we dont stop until we get there.
		</div>
	</div>
</header>

<div class="maincontent content">
    <div class="container">
		<div class="row">        
			<div class="col-sm-6">
				<h3>
					<span>
						With our network of highly <strong>reliable vendors</strong>, we provide complete end to end Gifting solutions to our clients, reliving them from administration of the process. <br><br> 

						We also specialize in organizing <strong> rewards and recognition </strong> programs for the corporate clients and help them customize and personalize these programs.
					</span>
				</h3>
				<a class="btn btn-default btn-lg" href="/products">View Products</a>
				
			</div>
			<div class="col-sm-6">
				<h3>
					<span>
						A <strong>professional design</strong>, be it a website, a logo, a brochure, business stationery or a flyer, can change the <strong>perception</strong> about your company in the minds of your customers. <br><br> Supporting the ideology, backed by a strong design team we deliver quality designs to meet the objectives set by our clients.
					</span>
				</h3>
				<a class="btn btn-default btn-lg" href="/services">View Services</a>
				
			</div>
		</div>
    </div>
</div>
<div class="intquote content">  
    <div class="container">
		<div class="row">
			<span><i class="fa fa-quote-left"></i></span>

			We ordered couple of Mementos and certificates for our team's annual meet. And as promised we recieved the order on time and must say, the quality was impeccable. Their service is awesome and would definitely recommend them!

			<span><i class="fa fa-quote-right"></i></span>

			<div class="quoteby">A leading mnc</div>
		</div>
    </div>
</div>

<div class="clients content">  
    <div class="container">
    <h3>Our Clients</h3>
		<div class="row">
			
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="each-client client-wipro">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="each-client client-ge">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="each-client client-symantec">
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="each-client client-cisco">
				</div>
			</div>
		</div>
    </div>
</div>
@stop