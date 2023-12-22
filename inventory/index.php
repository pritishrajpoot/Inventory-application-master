<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Inventory';
$this->params['breadcrumbs'][] = $this->title;
?>

<fieldset ng-app="myInventoryApp" ng-controller="myInventoryCtrl">
	<form>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-search"></i></div>
				<input type="text" class="form-control" placeholder="Search Products" ng-model="searchInventory">
			</div>
		</div>
	</form>
	<legend></legend>
	 <table class="table table-striped">
		<thead>
			<th>#</th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'product_name'; sortReverse = !sortReverse">Product Name
				<span ng-show="sortType == 'product_name' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'product_name' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'model'; sortReverse = !sortReverse">Model
				<span ng-show="sortType == 'model' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'model' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'sku'; sortReverse = !sortReverse">SKU
				<span ng-show="sortType == 'sku' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'sku' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'price'; sortReverse = !sortReverse">Price
				<span ng-show="sortType == 'price' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'price' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'status'; sortReverse = !sortReverse">Status
				<span ng-show="sortType == 'status' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'status' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'qty'; sortReverse = !sortReverse">Qty
				<span ng-show="sortType == 'qty' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'qty' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
			<th><a style="color: black;" href="#" ng-click="sortType = 'inventory_date'; sortReverse = !sortReverse">Inventory Date
				<span ng-show="sortType == 'inventory_date' && !sortReverse" class="glyphicon glyphicon-circle-arrow-down"></span>
				<span ng-show="sortType == 'inventory_date' && sortReverse" class="glyphicon glyphicon-circle-arrow-up"></span></th>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td>
					<input type="text" placeholder="Product Name" class="form-control" ng-model="data.product_name" />
				</td>
				<td>
					<input type="text" placeholder="Model" class="form-control" ng-model="data.model" />
				</td>
				<td>
					<input type="text" placeholder="SKU" class="form-control" ng-model="data.sku" />
				</td>
				<td>
					<input type="text" placeholder="Price" class="form-control" ng-model="data.price" />
				</td>
				<td>
					<select ng-model="data.status" class="form-control">
					<option selected value=""></option>
					<option value='In Stock'>In Stock</option>
					<option value='Out of Stock'>Out of Stock</option>
					</select>
					</td>
				<td>
					<input type="text" placeholder="Qty" class="form-control" ng-model="data.qty" />
				</td>
				<td>
					<input type="text" placeholder="Inventory Date" class="form-control" ng-model="data.inventory_date" />
				</td>
				<td>
					  <button type="button" class="btn btn-primary" ng-click="switchBtns()"><span class="glyphicon glyphicon-save"></span> Insert</button>
				</td>
			</tr>
			<tr ng-repeat="inventory in checkInventory | orderBy:sortType:sortReverse | filter:searchInventory">
				<td>{{$index+1}}</td>
				<td>{{inventory.product_name}}</td>
				<td>{{inventory.model}}</td>
				<td>{{inventory.sku}}</td>
				<td>{{inventory.price}}</td>
				<td ng-class="{'color-red': inventory.status === 'Out of Stock', 'color-blue': inventory.status === 'In Stock'}">{{inventory.status}}</td>
				<td ng-class="{'color-red': inventory.qty === '0'}">{{inventory.qty}}</td>
				<td>{{inventory.inventory_date}}</td>
				<td>
						<button type="button" class="btn btn-warning" ng-click="updateBtn(inventory)">
							<span class="glyphicon glyphicon-edit"></span> Update
						</button>
				</td>
				<td>
					 <button type="button" class="btn btn-danger" ng-click="deleteInventory(inventory.id)">
					   <span class="glyphicon glyphicon-remove"></span> Delete
					 </button>
				</td>
			</tr>
		</tbody>
	</table>
</fieldset>

<?php
	echo $this->registerJsFile('js/angular.min.js');
	echo $this->registerJsFile('js/app.js');
	echo $this->registerCssFile('css/inventory.css');
?>
