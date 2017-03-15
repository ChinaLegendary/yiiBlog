<?php $this->beginPage() ?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <h1>这是自定义公共头部</h1>
        <?php echo $content; ?> 
        <?= $this->render('//site/index'); ?>
        <h2>这是自定义公共尾部</h2>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage(); ?>




