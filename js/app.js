var app = angular.module("myInventoryApp",[]);
app.controller("myInventoryCtrl",function($scope,$http){

	$scope.switchBtn = "Insert";

	$http.get('index.php?r=inventory/get-inventory').then(function(response){
		$scope.checkInventory = response.data;
	});

	$scope.sortType     = 'product_name';
  $scope.sortReverse  = false;
	$scope.searchInventory  = '';

	$scope.data = {};

	$scope.checkInventory = [
	{ product_name: "", model: "", sku: "", price: "", status: "", qty: "", inventory_date: "" }
  ];

	$scope.insertInventory = function(){
		$http.post("index.php?r=inventory/create", {data : $scope.data})
		.then(function successCallback(response) {
			$scope.clearData();
			$scope.selectInventory();
		});
	}

	$scope.selectInventory = function(){
		$http.get("index.php?r=inventory/get-inventory").then(function(response){
			$scope.checkInventory = response.data;
		});
	}

	$scope.updateBtn = function(response){
		$scope.data = response;
		$scope.switchBtn = "Update";
	};

	$scope.update = function(response){
		$http.post("index.php?r=inventory/update", {data : $scope.data})
		.then(function successCallback(response) {
			$scope.clearData();
			$scope.selectInventory();
		});
	$scope.switchBtn = "Insert";
	}

	$scope.deleteInventory = function(id){
		$http.post("index.php?r=inventory/delete", {id: id})
		.then(function successCallback(response) {
			$scope.selectInventory();
		})
	}

	$scope.switchBtns = function(){
		switch($scope.switchBtn){
			case "Insert" :
				$scope.insertInventory();
			break;
			case "Update" :
				$scope.update();
			break;
		}
	};

	$scope.clearData = function(){
		$scope.data = {
			product_name: "",
			model: "",
			sku: "",
			price: "",
			status: "",
			qty: "",
			inventory_date: ""
		};
	};

	$scope.selectInventory();

});
