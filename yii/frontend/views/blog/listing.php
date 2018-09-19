<?php
    /* @var $this yii\web\View */
    /* @var $blogs common\models\Blog */
use yii\bootstrap\Html;
?>

<div class="body-content">

        <div class="row">
            <?php foreach($blogs as $blog):?>
            <div class="col-lg-4">
                <h2><?=$blog->title ?></h2>
                <p><?=$blog->text ?></p>
                <p><?= \yii\bootstrap\Html::a('Подробнее', ['blog/single', 'url'=>$blog->url], ['class' => 'btn btn-default']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>

</div>