<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->goods_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->goods_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'goods_id',
            'goods_name',
            'goods_price',
            'goods_shop_price',
            'goods_number',
            'goods_weight',
            'cat_id',
            'brand_id',
            'goods_big_logo',
            'goods_small_logo',
            'goods_introduce:ntext',
            'is_sale',
            'is_rec',
            'is_hot',
            'is_new',
            'add_time:datetime',
            'upd_time:datetime',
            'is_del',
            'goods_detail:ntext',
        ],
    ]) ?>

</div>
