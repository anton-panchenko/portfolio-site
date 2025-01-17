<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Set Tags', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'meta_title',
            'meta_description:ntext',
            'url:url',
            'title',
            'description:ntext',
            'content:ntext',
            'status',
            'created_at',
            'updated_at',
            'image',
            'viewed',
            'user_id',
            'category_id',
            'author.username',
            ['attribute' => 'tags', 'value' => ''],
        ],
    ]) ?>

    <div class="well">
        <?php foreach ($model->tags as $tag): ?>
            <p><?= $tag->title ?></p>
        <?php endforeach; ?>
    </div>

</div>
