<?php

/* @var $this yii\web\View */
/* @var $article \common\models\Article */
/* @var $changePossibility \common\models\Article */
/* @var $tags \frontend\models\Tag */
/* @var $comments \common\models\Comment */
/* @var $form_model \common\models\Comment */

use yii\helpers\Url;
use yii\helpers\Html;
use common\helpers\Date;
use yii\widgets\ActiveForm;
use frontend\models\repositories\ArticleRepository;

$this->title = Yii::t('main', 'Portfolio | Article');

?>

<div class="post">
    <div class="post_wrap">
        <div class="section_title">
            <a href="<?= Url::to('/blog') ?>">
                <div class="section_title__img">
                    <img src="/img/svg/blog.svg" alt="section_img">
                </div>
                <h2 class="section_title__text">
                    <?= Yii::t('blog', 'Blog') ?>
                </h2>
            </a>
        </div><!-- end section_title -->
        <div class="post_header">
            <div class="post_header__tags">
                <?php foreach ($tags as $tag): ?>
                    <a href="<?= Url::to('/blog/tag/'.$tag->getId()) ?>">#<?= $tag->getTitle() ?></a>
                <?php endforeach; ?>
            </div><!-- end post_header__tags -->
            <h2 class="post_header__title">
                <?= $article->getTitle() ?>
            </h2><!-- end post_header__title -->
            <div class="post_header__img">
                <img src="<?= ArticleRepository::getImageByPath($article->getImage()); ?>" alt="post_image">
            </div><!-- end post_header__img -->
            <div class="post_header__date">
                <p class="post_header__date_date">
                    <?= Date::getDate($article->getUpdatedAt()); ?>
                </p>
                <p class="post_header__date_author"><?= $article->getAuthorName() ?></p>
            </div><!-- end post_header__date -->
            <a href="<?= Url::to('/blog/category/'.$article->getCategoryId()) ?>" class="post_header__comments">
                <?= $article->getCategoryTitle() ?>
            </a><!-- end post_header__comments -->
        </div><!-- end post_header -->
        <div class="post_body">
            <?= $article->getContent() ?>
        </div><!-- end post_body -->

        <div class="post_links">

            <?php if ($changePossibility['canPrevious'] == true): ?>
            <a href="<?= Url::to('/article/previous/'.$article->getId()) ?>" class="post_links__item">
                <i class="icon-left"></i>
                <p><?= Yii::t('blog', 'Previous article') ?></p>
            </a><!-- end post_links__previous -->
            <?php endif; ?>

            <?php if ($changePossibility['canNext'] == true): ?>
            <a href="<?= Url::to('/article/next/'.$article->getId()) ?>" class="post_links__item">
                <p><?= Yii::t('blog', 'Next article') ?></p>
                <i class="icon-right"></i>
            </a><!-- end post_links__next -->
            <?php endif; ?>

        </div><!-- end post_links -->

        <div class="post_comments">

            <?php if (!empty($comments)): ?>
                <h3 class="post_comments__title">
                    <?= Yii::t('blog', 'Comments') ?>
                </h3><!-- end post_comments__title -->

                <?php foreach ($comments as $comment): ?>
                    <div class="post_comments__comment">
                        <div class="post_comments__comment_head">
                            <div class="post_comments__comment_head__img">
                                <i class="icon-user"></i>
                            </div>
                            <h5 class="post_comments__comment_head__username">
                                <?= $comment->getAuthorName() ?>
                            </h5>
                            <p class="post_comments__comment_head__addingTime">
                                <?= Date::getDate($comment->getUpdatedAt()); ?>
                            </p>
                        </div><!-- end post_comments__comment_head -->
                        <p class="post_comments__comment_text">
                            <?= $comment->getText() ?>
                        </p><!-- end post_comments__comment_text -->
                    </div><!-- end post_comments__comment -->

                <?php endforeach; ?>
            <?php endif; ?>

        </div><!-- end post_comments -->

        <?php if (Yii::$app->user->isGuest): ?>
            <?= Yii::t('blog', 'If you want to leave a comment, please login. If you are not registered, please register.') ?>
        <?php else: ?>

            <div class="post_form">
                <h3 class="post_form__title">
                    <?= Yii::t('blog', 'Add comment') ?>
                </h3>

                <?php $form = ActiveForm::begin([
                    'action' => ['comment/add/'.$article->getId()],
                    'options' => ['class' => 'post_form__item', 'role' => 'form']
                ]) ?>

                <?= $form->field($form_model, 'text')->textarea([
                    'rows' => 6, 'class' => 'input-textarea', 'placeholder' => Yii::t('blog', 'Comment')
                ])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('blog', 'Send'), ['class' => 'btn btn-dark', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div><!-- end post_form -->

        <?php endif; ?>

    </div><!-- end post_wrap -->
</div><!-- end post -->