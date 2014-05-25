@extends('layout.default')

@section('content')

@include('layout.navbar')

<header class="opage">
	<div class="container">
		<div class="hero-header">Want to get in touch?</div>
		<div class="hero-text">
			Well, we put our hearts and souls into making every project we undertake the best it can be and we dont stop until we get there.
		</div>
	</div>
</header>

<div class="maincontent content">
    <div class="container">
		<div class="row">        
			<div class="col-sm-6">
				<h3>
					<span>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Name</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Full name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputPassword3" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Message</label>
								<div class="col-sm-9">
									<textarea name="" id="" placeholder="Message" class="form-control"></textarea>
								</div>
							</div>
						</form>
					</span>
				</h3>
				<a class="btn btn-default btn-lg" href="/products">Send</a>
				
			</div>
			<div class="col-sm-6">
				<h3>
					<span>
						<!-- A <strong>professional design</strong>, be it a website, a logo, a brochure, business stationery or a flyer, can change the <strong>perception</strong> about your company in the minds of your customers. <br><br> Supporting the ideology, backed by a strong design team we deliver quality designs to meet the objectives set by our clients. -->
					</span>
				</h3>
				<!-- <a class="btn btn-default btn-lg" href="/services">View Services</a> -->
				
			</div>
		</div>
    </div>
</div>

@stop