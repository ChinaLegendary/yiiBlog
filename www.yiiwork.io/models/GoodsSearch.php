<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Goods;

/**
 * GoodsSearch represents the model behind the search form about `app\models\Goods`.
 */
class GoodsSearch extends Goods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'goods_number', 'goods_weight', 'cat_id', 'brand_id', 'add_time', 'upd_time'], 'integer'],
            [['goods_name', 'goods_big_logo', 'goods_small_logo', 'goods_introduce', 'is_sale', 'is_rec', 'is_hot', 'is_new', 'is_del', 'goods_detail'], 'safe'],
            [['goods_price', 'goods_shop_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Goods::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'goods_id' => $this->goods_id,
            'goods_price' => $this->goods_price,
            'goods_shop_price' => $this->goods_shop_price,
            'goods_number' => $this->goods_number,
            'goods_weight' => $this->goods_weight,
            'cat_id' => $this->cat_id,
            'brand_id' => $this->brand_id,
            'add_time' => $this->add_time,
            'upd_time' => $this->upd_time,
        ]);

        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_big_logo', $this->goods_big_logo])
            ->andFilterWhere(['like', 'goods_small_logo', $this->goods_small_logo])
            ->andFilterWhere(['like', 'goods_introduce', $this->goods_introduce])
            ->andFilterWhere(['like', 'is_sale', $this->is_sale])
            ->andFilterWhere(['like', 'is_rec', $this->is_rec])
            ->andFilterWhere(['like', 'is_hot', $this->is_hot])
            ->andFilterWhere(['like', 'is_new', $this->is_new])
            ->andFilterWhere(['like', 'is_del', $this->is_del])
            ->andFilterWhere(['like', 'goods_detail', $this->goods_detail]);

        return $dataProvider;
    }
}
