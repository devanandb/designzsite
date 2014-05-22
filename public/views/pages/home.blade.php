@extends('layout.default')

@section('content')

@include('layout.navbar')


<div class="hero-blk text-center">
	<div class="container">
		<!-- <div class="logo">
			<div>D</div>
			<div>E</div>
			<div>S</div>
			<div>I</div>
			<div>G</div>
			<div>N</div>
			<div>Z</div>
		
		</div> -->
		<div class="row">
			<div class="col-lg-8">
				<p>A graphic design and corporate gifting solutions firm promoted by a group of like minded people with experience in specialized fields like Designing, Corporate Gifting, we at Designz cater to today's customized requirements of our clients.</p>
			</div>
			<div class="col-lg-4 hero-img">
				<i class="glyphicon glyphicon-gift">&nbsp;</i>
			</div>
		</div>
		<!-- <p>With our network of highly reliable vendors, we provide complete end to end Gifting solutions to our clients, reliving them from administration of the process. We also are specialized in organizing rewards and recognition programs for the corporate clients. Our Designing capabilities help us customize and personalize these programs.</p>
		
		<p>A professional design, be it a website, a logo, a brochure, business stationery or a flyer, can change the perception about your company in the minds of your customers. Supporting the ideology, backed by a strong design team we deliver quality designs to meet the objectives set by our clients.</p> -->
	</div>
</div>
<div class="hero-footer">
</div>
<div class="main-content">
	<div class="container">

		<div class="col-lg-6">
			<div class="each-blk">	&nbsp;
				<i class="glyphicon glyphicon-shopping-cart">&nbsp;</i>
			
				<a href="/products" class="">View Products</a> 
			</div>
		</div>

		<div class="col-lg-6">
			<div class="each-blk">	&nbsp;
				<i class="glyphicon glyphicon-compressed">&nbsp;</i>
			
				<a href="/services" class="">View Services</a> 
			</div>
		</div>

		<!-- <div class="col-lg-4 col-lg-offset-2 each-blk">
			<p>A professional design, be it a website, a logo, a brochure, business stationery or a flyer, can change the perception about your company in the minds of your customers. Supporting the ideology, backed by a strong design team we deliver quality designs to meet the objectives set by our clients.</p>
			<a href="/services" class="">View Services</a>
		</div> -->
		
		
	</div>
</div>


@stop