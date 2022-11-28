<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\Models\Tag */

$this->title = 'Создание тега';
$this->params['breadcrumbs'][] = ['label' => 'Теги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
