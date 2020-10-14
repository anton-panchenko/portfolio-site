<?php

/* @var $this yii\web\View */
/* @var $article \common\models\Article */
/* @var $tags \common\models\Tag */
/* @var $comments \common\models\Comment */

$this->title = $article->title;

?>

<div class="post">
    <div class="post_wrap">
        <div class="section_title">
            <div class="section_title__img">
                <img src="/img/svg/blog.svg" alt="section_img">
            </div>
            <h2 class="section_title__text">
                Блог
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
                <p>Предыдущая статья</p>
            </a><!-- end post_links__previous -->
            <a href="404.html" class="post_links__item">
                <p>Следующая статья</p>
                <i class="icon-right"></i>
            </a><!-- end post_links__next -->
        </div><!-- end post_links -->
        <div class="post_comments">
            <h3 class="post_comments__title">
                Комментарии
            </h3><!-- end post_comments__title -->

            <?php if (!empty($comments)): ?>
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
        <div class="post_form">
            <h3 class="post_form__title">
                Добавить комментарий
            </h3>

            <?php $form = \yii\widgets\ActiveForm::begin([
                    'action' => ['blog/comment', 'id' => 'article_id'],
                    'options' => ['class' => 'post_form__item', 'role' => 'form']
            ]) ?>

            <input type="text" name="name" class="input-text" placeholder="Имя">
            <input type="text" name="email" class="input-text" placeholder="Email">
            <textarea name="message" class="input-textarea" placeholder="Комментарий"></textarea>
            <input type="submit" class="btn btn-dark" value="Добавить">

            <?php \yii\widgets\ActiveForm::end(); ?>

<!--            <form action="#" method="post" class="post_form__item">-->
<!--                <input type="text" name="name" class="input-text" placeholder="Имя">-->
<!--                <input type="text" name="email" class="input-text" placeholder="Email">-->
<!--                <textarea name="message" class="input-textarea" placeholder="Комментарий"></textarea>-->
<!--                <input type="submit" class="btn btn-dark" value="Добавить">-->
<!--            </form><!-- end post_form__item -->-->


        </div><!-- end post_form -->
    </div><!-- end post_wrap -->
</div><!-- end post -->