<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_post".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_desc
 * @property string $post_date
 * @property integer $author_id
 * @property boolean $flag_visible
 * @property boolean $flag_active
 *
 * @property MiPostCategory[] $miPostCategories
 * @property MiCategory[] $categories
 * @property MiPostTag[] $miPostTags
 * @property MiTag[] $tags
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title'], 'required'],
            [['post_desc'], 'string'],
            [['post_date', 'date_added', 'date_update'], 'safe'],
            [['author_id'], 'integer'],
            [['flag_visible', 'flag_active'], 'boolean'],
            [['post_title'], 'string', 'max' => 100]
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
            'post_desc' => 'Post Desc',
            'post_date' => 'Post Date',
            'author_id' => 'Author ID',
            'flag_visible' => 'Flag Visible',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiPostCategories()
    {
        return $this->hasMany(MiPostCategory::className(), ['post_id' => 'post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(MiCategory::className(), ['category_id' => 'category_id'])->viaTable('mi_post_category', ['post_id' => 'post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiPostTags()
    {
        return $this->hasMany(MiPostTag::className(), ['post_id' => 'post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(MiTag::className(), ['tag_id' => 'tag_id'])->viaTable('mi_post_tag', ['post_id' => 'post_id']);
    }
}
