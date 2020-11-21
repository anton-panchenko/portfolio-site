<?php

namespace common\models;

use common\helpers\StatusHelper;
use phpDocumentor\Reflection\Types\This;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $meta_title
 * @property string|null $meta_description
 * @property string $url
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $image
 * @property int|null $viewed
 * @property int|null $user_id
 * @property int|null $category_id
 *
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    public $tags_array;

    const STATUS_ACTIVE = 1;
    const STATUS_DRAFT = 0;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    public function behaviors()
    {
        parent::behaviors();
        return [
            TimestampBehavior::className()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meta_title', 'url'], 'required'],
            [['meta_description', 'description', 'content'], 'string'],
            [['url'], 'unique'],
            [['status', 'created_at', 'updated_at', 'viewed', 'user_id', 'category_id'], 'integer'],
            [['meta_title', 'url', 'title', 'image'], 'string', 'max' => 255],
            [['tags_array'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'url' => 'ЧПУ',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Текст',
            'status' => 'Статус',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'image' => 'Обложка',
            'viewed' => 'Viewed',
            'user_id' => 'Автор',
            'category_id' => 'Категория',
            'tags_array' => 'Теги',
            'tagsAsString' => 'Теги',
            'author.username' => 'Автор',
        ];
    }

    /**
     * Gets query for [[ArticleTags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArticleTags()
    {
        return $this->hasMany(ArticleTag::className(), ['article_id' => 'id']);
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['article_id' => 'id']);
    }


    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])
            ->viaTable('article_tag', ['article_id' => 'id']);
    }

    public function getSelectedTags()
    {
        $selectedIds = $this->getTags()->select('id')->asArray()->all();

        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveTags($tags)
    {
        if (is_array($tags))
        {
            $this->clearCurrentTags();

            foreach ($tags as $tag_id)
            {
                $tag = Tag::findOne($tag_id);
                $this->link('tags', $tag);
            }
        }
    }

    public function clearCurrentTags()
    {
        ArticleTag::deleteAll(['article_id' => $this->id]);
    }



    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }

}

class ArticleQuery extends ActiveQuery
{
    public function active()
    {
        $this->andWhere(['status' => Article::STATUS_ACTIVE]);
        return $this;
    }
}
