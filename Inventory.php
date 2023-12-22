<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $id
 * @property string $product_name
 * @property string $model
 * @property string $sku
 * @property string $price
 * @property string $status
 * @property string $qty
 * @property string $inventory_date
 *
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'model', 'sku', 'price', 'status', 'qty', 'inventory_date'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'model' => 'Model',
            'sku' => 'Sku',
            'price' => 'Price',
            'status' => 'Status',
            'qty' => 'Qty',
            'inventory_date' => 'Inventory Date'
        ];
    }
}
