<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string|null $url
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property string|null $filter_class
 * @property int|null $status
 * @property int|null $sort
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['status', 'sort'], 'integer'],
            [['url', 'title', 'image', 'filter_class'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'filter_class' => 'Filter Class',
            'status' => 'Status',
            'sort' => 'Sort',
        ];
    }
}
