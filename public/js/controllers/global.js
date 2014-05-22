'use strict';

app.controller('globalController', function($scope,$http, $rootScope, $location) {

/*API CALLS*/
	window.scope = $scope;
	$http.get('/api/products').success(function(categorygroup) {
		$scope.categorygroup = categorygroup;
		console.log($scope.categorygroup);
		$('#sidebar').affix({
		      offset: {
		        top: 270
		      }
		});
	});

	$scope.setActive = function($event) {
		var target = $event.target;

		$('.sidebar').find('a.each-link').removeClass('active');
		$(target).addClass('active');
	}




	$scope.openItemDetails = function(item) {
		$scope.selectedItem = item;
		$('#itemDetail').modal('show');
	}

	$scope.selectedItems = [];
	$scope.addToCart = function(item) {
		var addcheck = false;
		var cartCount = $scope.selectedItems.length;
		if(cartCount!=0) {
			console.log(item.id);
			for(var i=0;i<cartCount; i++) {
				if(item.id==$scope.selectedItems[i].id) {
					addcheck = true;
				}
			}
		}
		
		if(addcheck==false || cartCount==0) {
			console.log(item,addcheck, "returned false");
			$scope.selectedItems.push(item);
		} else {
			console.log("already in cart");
		}

		
		console.log($scope.selectedItems);
		$('#itemDetail').modal('hide');
	}

	$scope.viewCart = function() {
		$('#viewCart').modal('show');
	}

	$scope.removeItemCart = function(index) {
		$scope.selectedItems.splice(index, 1);
		console.log($scope.selectedItems);
	}

});