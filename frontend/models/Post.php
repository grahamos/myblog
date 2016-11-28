<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $author
 * @property string $content
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'author', 'content'], 'required'],
            [['post_title'], 'string', 'max' => 50],
            [['author'], 'string', 'max' => 20],
            [['content'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'author' => 'Author',
            'content' => 'Content',
        ];
    }
}
