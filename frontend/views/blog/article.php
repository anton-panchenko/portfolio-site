<?php

/* @var $this yii\web\View */
/* @var $article \frontend\controllers\BlogController */

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
                <a href="404.html">#Yii2</a>
                <a href="404.html">#PHP</a>
            </div><!-- end post_header__tags -->
            <h2 class="post_header__title">
                <?= $article->title ?>
            </h2><!-- end post_header__title -->
            <div class="post_header__img">
                <img src="/img/png/yii_framework.png" alt="post_image">
            </div><!-- end post_header__img -->
            <div class="post_header__date">
                <a href="404.html" class="post_header__date_date">19 / 09 / 2020</a>
                <a href="404.html" class="post_header__date_author">Антон Панченко</a>
            </div><!-- end post_header__date -->
            <a href="404.html" class="post_header__comments">0 комментариев</a><!-- end post_header__comments -->
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
            <div class="post_comments__comment">
                <div class="post_comments__comment_head">
                    <div class="post_comments__comment_head__img">
                        <i class="icon-user"></i>
                    </div>
                    <h5 class="post_comments__comment_head__username">
                        Максим Квач
                    </h5>
                    <p class="post_comments__comment_head__addingTime">
                        25.09.2020 20:20
                    </p>
                    <a href="404.html" class="post_comments__comment_head__answerBtn">
                        Ответить
                    </a>
                </div><!-- end post_comments__comment_head -->
                <p class="post_comments__comment_text">
                    Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития.
                </p><!-- end post_comments__comment_text -->
                <div class="post_comments__subcomment">
                    <div class="post_comments__comment_head">
                        <div class="post_comments__comment_head__img">
                            <i class="icon-user"></i>
                        </div>
                        <h5 class="post_comments__comment_head__username">
                            Максим Квач
                        </h5>
                        <p class="post_comments__comment_head__addingTime">
                            25.09.2020 20:20
                        </p>
                        <a href="404.html" class="post_comments__comment_head__answerBtn">
                            Ответить
                        </a>
                    </div><!-- end post_comments__comment_head -->
                    <p class="post_comments__comment_text">
                        Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития.
                    </p><!-- end post_comments__comment_text -->
                    <div class="post_comments__subcomment">
                        <div class="post_comments__comment_head">
                            <div class="post_comments__comment_head__img">
                                <i class="icon-user"></i>
                            </div>
                            <h5 class="post_comments__comment_head__username">
                                Максим Квач
                            </h5>
                            <p class="post_comments__comment_head__addingTime">
                                25.09.2020 20:20
                            </p>
                            <a href="404.html" class="post_comments__comment_head__answerBtn">
                                Ответить
                            </a>
                        </div><!-- end post_comments__comment_head -->
                        <p class="post_comments__comment_text">
                            Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития.
                        </p><!-- end post_comments__comment_text -->
                    </div><!-- end post_comments__subcomment -->
                </div><!-- end post_comments__subcomment -->
            </div><!-- end post_comments__comment -->
            <div class="post_comments__comment">
                <div class="post_comments__comment_head">
                    <div class="post_comments__comment_head__img">
                        <i class="icon-user"></i>
                    </div>
                    <h5 class="post_comments__comment_head__username">
                        Максим Квач
                    </h5>
                    <p class="post_comments__comment_head__addingTime">
                        25.09.2020 20:20
                    </p>
                    <a href="404.html" class="post_comments__comment_head__answerBtn">
                        Ответить
                    </a>
                </div><!-- end post_comments__comment_head -->
                <p class="post_comments__comment_text">
                    Таким образом начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации. Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки направлений прогрессивного развития.
                </p><!-- end post_comments__comment_text -->
            </div><!-- end post_comments__comment -->
        </div><!-- end post_comments -->
        <div class="post_form">
            <h3 class="post_form__title">
                Добавить комментарий
            </h3>
            <form action="#" method="post" class="post_form__item">
                <input type="text" name="name" class="input-text" placeholder="Имя">
                <input type="text" name="email" class="input-text" placeholder="Email">
                <textarea name="message" class="input-textarea" placeholder="Комментарий"></textarea>
                <input type="submit" class="btn btn-dark" value="Добавить">
            </form><!-- end post_form__item -->
        </div><!-- end post_form -->
    </div><!-- end post_wrap -->
</div><!-- end post -->