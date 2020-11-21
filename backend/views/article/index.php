<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\helpers\StatusHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],

            'id',
//            'meta_title',
//            'meta_description:ntext',
            'url:text',
            'title',
            'description:ntext',
//            'content:ntext',
            ['attribute' => 'status', 'filter' => StatusHelper::labels()],
            //'created_at',
            //'updated_at',
            'image',
            'viewed',
//            'user_id',
            'category_id',
//            ['attribute' => 'tags', 'value' => ''],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
