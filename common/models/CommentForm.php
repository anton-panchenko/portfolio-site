<?php


namespace common\models;

use yii\base\Model;


class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return [
            [['comment'], 'required'],
            [['comment'], 'string']
        ];
    }

    public function saveComment($article_id)
    {
        $comment = new Comment();
        $comment->text = $this->comment;
        $comment->user_id = \Yii::$app->user->id;
        $comment->article_id = $article_id;
        $comment->status = 1;
        return $comment->save();
    }

//    public function save()
//    {
//    }

}