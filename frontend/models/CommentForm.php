<?php


namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\Comment;


class CommentForm extends Model
{
    public $text;

    public function rules()
    {
        return [
            [['text'], 'trim'],
            [['text'], 'string'],
            [['text'], 'required']
        ]; 
    }
    
    public function attributeLabels()
    {
        return [
            'text' => 'Комментарий'
        ];
    }

    public function saveComment($article_id)
    {
        $comment = new Comment();
        $comment->text = $this->text;
        $comment->user_id = Yii::$app->user->id;
        $comment->article_id = $article_id;
        $comment->status = 1;
        $comment->save();
        
        return true;
    }
}