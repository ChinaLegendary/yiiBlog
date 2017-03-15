<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Goods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'goods_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_shop_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_number')->textInput() ?>

    <?= $form->field($model, 'goods_weight')->textInput() ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'goods_big_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_small_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'goods_introduce')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_sale')->dropDownList([ '上架' => '上架', '下架' => '下架', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_rec')->dropDownList([ '推荐' => '推荐', '不推荐' => '不推荐', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_hot')->dropDownList([ '热销' => '热销', '不热销' => '不热销', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_new')->dropDownList([ '新品' => '新品', '不新品' => '不新品', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'add_time')->textInput() ?>

    <?= $form->field($model, 'upd_time')->textInput() ?>

    <?= $form->field($model, 'is_del')->dropDownList([ '删除' => '删除', '不删除' => '不删除', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'goods_detail')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
