@extends('layout.default')

@section('content')

@include('layout.navbar')
<!-- 
<div class="page-header">
	<h1>Products will come here</h1>
</div>

 -->

<div class="container">
	<div class="row" ng-repeat="grouped in categorygroup">
	
		<div class="col-lg-3 visible-lg">
			<div id="sidebar" data-spy="affix" class="sidebar">
				<ul>
					<li ng-repeat="group in grouped.categories">
						<a href="#((group.id))" class="each-link" ng-click="setActive($event)" du-smooth-scroll>((group.name))</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-3 col-md-2 col-sm-12 hidden-lg">
			<div id="sidebar" class="sidebar col-lg-2 hidden-print">
				<ul>
					<li ng-repeat="group in grouped.categories">
						<a href="#((group.id))" class="each-link" ng-click="setActive($event)" du-smooth-scroll du-scrollspy>((group.name))</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-9 col-md-10 col-sm-12">
			<div  id="top" class="intro-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, consequuntur, dolores, in blanditiis cupiditate recusandae quasi beatae vel aliquam officiis tempora alias saepe voluptatum architecto veniam ab delectus reprehenderit debitis?</div>
			<div id="((group.id))" class="category-intro" ng-repeat="group in grouped.categories">
				<div class="category-name">((group.name))</div>
	
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" ng-repeat="crap in group.products">
						<div class="each-item" ng-click="openItemDetails(crap)">
							<div class="img-blk">
								<img ng-src="((crap.imgurl))" alt="">
							</div>
							<div class="item-det">
								<div class="item-name">((crap.name))</div>
								
								<div class="item-footer">
									<div class="item-price pull-left">&#x20B9; ((crap.price))</div>
									<div class="pull-right"><a href="" class="btn btn-default btn-xs">Add to Cart</a></div>
									
								</div>
								<div class="clearfix"></div>
							</div>
							
							<!-- <div>((crap.desc))</div> -->
						</div>

					</div>
				</div>
			</div>
			
		</div>
	
	</div>

	<div class="modal fade" id="itemDetail" tabindex="-1" role="dialog" aria-labelledby="itemDetail" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">((selectedItem.name))</h4>
				</div>
				<div class="modal-body">
					((selectedItem.desc))
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" ng-click="addToCart(selectedItem)" class="btn btn-primary">Add to Cart</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="viewCart" tabindex="-1" role="dialog" aria-labelledby="itemDetail" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Your Cart</h4>
				</div>
				<div class="modal-body">
					<ul class="list-group">
  						<li class="list-group-item"  ng-repeat="item in selectedItems">(($index+1)). ((item.name)) <a ng-click="removeItemCart($index)" class="close">&times;</a></li>
  					</ul>
  					<div class="clearfix">&nbsp;</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" ng-click="addToCart(selectedItem)" class="btn btn-primary">Enquire</button>
				</div>
			</div>
		</div>
	</div>

	<div class="back-top">
		<a href="javascript:void(0)"><i class="glyphicon glyphicon-chevron-up" du-smooth-scroll></i>adasd</a>
	</div>
</div>

@stop