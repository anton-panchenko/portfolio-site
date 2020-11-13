<?php

/* @var $this yii\web\View */
/* @var $article \common\models\Article */
/* @var $tags \common\models\Tag */
/* @var $comments \common\models\Comment */
/* @var $form_model \common\models\Comment */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('main', 'Portfolio | Article');

?>

<div class="post">
    <div class="post_wrap">
        <div class="section_title">
            <div class="section_title__img">
                <img src="/img/svg/blog.svg" alt="section_img">
            </div>
            <h2 class="section_title__text">
                <?= Yii::t('blog', 'Blog') ?>
            </h2>
        </div><!-- end section_title -->
        <div class="post_header">
            <div class="post_header__tags">
                <?php foreach ($tags as $tag): ?>
                    <a href="404.html">#<?= $tag->title ?></a>
                <?php endforeach; ?>
            </div><!-- end post_header__tags -->
            <h2 class="post_header__title">
                <?= $article->title ?>
            </h2><!-- end post_header__title -->
            <div class="post_header__img">
                <img src="<?php echo \Yii::$app->imagemanager->getImagePath($article->image); ?>" alt="post_image">
            </div><!-- end post_header__img -->
            <div class="post_header__date">
                <a href="404.html" class="post_header__date_date">
                    <?= Yii::$app->formatter->asDate($article->updated_at, 'php:d / m / Y') ?>
                </a>
                <a href="404.html" class="post_header__date_author"><?= $article->author->username ?></a>
            </div><!-- end post_header__date -->
            <a href="404.html" class="post_header__comments"><?= $article->category->title ?></a><!-- end post_header__comments -->
        </div><!-- end post_header -->
        <div class="post_body">
            <?= $article->content ?>
        </div><!-- end post_body -->
        <div class="post_links">
            <a href="404.html" class="post_links__item">
                <i class="icon-left"></i>
                <p><?= Yii::t('blog', 'Previous article') ?></p>
            </a><!-- end post_links__previous -->
            <a href="404.html" class="post_links__item">
                <p><?= Yii::t('blog', 'Next article') ?></p>
                <i class="icon-right"></i>
            </a><!-- end post_links__next -->
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
                                <?= $comment->user->username ?>
                            </h5>
                            <p class="post_comments__comment_head__addingTime">
                                <?= Yii::$app->formatter->asDate($comment->updated_at, 'php:d / m / Y') ?>
                            </p>
                        </div><!-- end post_comments__comment_head -->
                        <p class="post_comments__comment_text">
                            <?= $comment->text ?>
                        </p><!-- end post_comments__comment_text -->
                    </div><!-- end post_comments__comment -->

                <?php endforeach; ?>
            <?php endif; ?>

        </div><!-- end post_comments -->

        <?php if (Yii::$app->user->isGuest): ?>
            <h1>Guest</h1>
        <?php else: ?>

            <div class="post_form">
                <h3 class="post_form__title">
                    <?= Yii::t('blog', 'Add comment') ?>
                </h3>

                <?php $form = ActiveForm::begin([
                    'action' => ['comment/add/'.$article->id],
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