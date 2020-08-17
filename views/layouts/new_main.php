<?php

use app\assets\MyAsset;
use yii\helpers\Html;

MyAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="4e0ad09dfaccba93" />
        <meta name="author" content="Eduard Molchanov" />
        <link rel="shortcut icon" href="image/faviconka_ru_.ico" type="image/x-icon" />

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?= $this->render('header') ?>

        <?= $content ?>

        <?= $this->render('footer') ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
