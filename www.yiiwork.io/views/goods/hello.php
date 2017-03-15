<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */
/* @var $form ActiveForm */
?>
<div class="goods-hello">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'goods_name') ?>
        <?= $form->field($model, 'add_time') ?>
        <?= $form->field($model, 'upd_time') ?>
        <?= $form->field($model, 'goods_price') ?>
        <?= $form->field($model, 'goods_shop_price') ?>
        <?= $form->field($model, 'goods_number') ?>
        <?= $form->field($model, 'goods_weight') ?>
        <?= $form->field($model, 'cat_id') ?>
        <?= $form->field($model, 'brand_id') ?>
        <?= $form->field($model, 'goods_introduce') ?>
        <?= $form->field($model, 'is_sale') ?>
        <?= $form->field($model, 'is_rec') ?>
        <?= $form->field($model, 'is_hot') ?>
        <?= $form->field($model, 'is_new') ?>
        <?= $form->field($model, 'is_del') ?>
        <?= $form->field($model, 'goods_detail') ?>
        <?= $form->field($model, 'goods_big_logo') ?>
        <?= $form->field($model, 'goods_small_logo') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- goods-hello -->
