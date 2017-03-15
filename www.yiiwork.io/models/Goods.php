<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property string $goods_id
 * @property string $goods_name
 * @property string $goods_price
 * @property string $goods_shop_price
 * @property integer $goods_number
 * @property integer $goods_weight
 * @property integer $cat_id
 * @property integer $brand_id
 * @property string $goods_big_logo
 * @property string $goods_small_logo
 * @property string $goods_introduce
 * @property string $is_sale
 * @property string $is_rec
 * @property string $is_hot
 * @property string $is_new
 * @property integer $add_time
 * @property integer $upd_time
 * @property string $is_del
 * @property string $goods_detail
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_name', 'add_time', 'upd_time'], 'required'],
            [['goods_price', 'goods_shop_price'], 'number'],
            [['goods_number', 'goods_weight', 'cat_id', 'brand_id', 'add_time', 'upd_time'], 'integer'],
            [['goods_introduce', 'is_sale', 'is_rec', 'is_hot', 'is_new', 'is_del', 'goods_detail'], 'string'],
            [['goods_name'], 'string', 'max' => 256],
            [['goods_big_logo', 'goods_small_logo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_price' => 'Goods Price',
            'goods_shop_price' => 'Goods Shop Price',
            'goods_number' => 'Goods Number',
            'goods_weight' => 'Goods Weight',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'goods_big_logo' => 'Goods Big Logo',
            'goods_small_logo' => 'Goods Small Logo',
            'goods_introduce' => 'Goods Introduce',
            'is_sale' => 'Is Sale',
            'is_rec' => 'Is Rec',
            'is_hot' => 'Is Hot',
            'is_new' => 'Is New',
            'add_time' => 'Add Time',
            'upd_time' => 'Upd Time',
            'is_del' => 'Is Del',
            'goods_detail' => 'Goods Detail',
        ];
    }
}
