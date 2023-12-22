<?php
	namespace app\controllers;
	use Yii;
	use yii\web\Controller;
	use app\models\Inventory;

	class InventoryController extends Controller {

		public function beforeAction($action) {
		    $this->enableCsrfValidation = false;
		    return parent::beforeAction($action);
		}

		public function actionIndex(){
			return $this->render('index');
		}

		public function actionCreate(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$inventory = new Inventory();
			$inventory->product_name = $dataObject->data->product_name;
			$inventory->model = $dataObject->data->model;
			$inventory->sku = $dataObject->data->sku;
			$inventory->price = $dataObject->data->price;
			$inventory->status = $dataObject->data->status;
			$inventory->qty = $dataObject->data->qty;
			$inventory->inventory_date = $dataObject->data->inventory_date;
			$inventory->save();
		}

		public function actionUpdate(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$inventory = Inventory::findOne($dataObject->data->id);
			$inventory->product_name = $dataObject->data->product_name;
			$inventory->model = $dataObject->data->model;
			$inventory->sku = $dataObject->data->sku;
			$inventory->price = $dataObject->data->price;
			$inventory->status = $dataObject->data->status;
			$inventory->qty = $dataObject->data->qty;
			$inventory->inventory_date = $dataObject->data->inventory_date;
			$inventory->save();
		}

		public function actionDelete(){
			$postData = file_get_contents("php://input");
			$dataObject = json_decode($postData);

			$inventory = Inventory::findOne($dataObject->id);
			$inventory->delete();
		}

		public function actionGetInventory(){
			$inventory = Inventory::find()->asArray()->all();
			return json_encode($inventory);
		}


	}
?>
