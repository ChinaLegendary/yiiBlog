<?php
    $this->title= "Test";
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
?>

<h1>这是测试用的模板</h1>
<?= $name ?>
<?= var_dump($pic) ?>
<?= $address ?>
<?=  Html::encode($address) ?>
<?= HtmlPurifier::process($address); ?>