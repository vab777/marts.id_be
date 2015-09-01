<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_category".
 *
 * @property integer $category_id
 * @property string $category_name
 * @property integer $parent_id
 * @property integer $level
 * @property boolean $flag_active
 *
 * @property MiPostCategory[] $miPostCategories
 * @property MiPost[] $posts
 * @property MiProducts[] $miProducts
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name', 'level'], 'required'],
            [['parent_id', 'level'], 'integer'],
            [['flag_active'], 'boolean'],
            [['category_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'parent_id' => 'Parent Name',
            'level' => 'Level',
            'flag_active' => 'Flag Active',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiCategories()
    {
        return $this->hasMany(Category::className(), ['category_id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiPostCategories()
    {
        return $this->hasMany(PostCategory::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['post_id' => 'post_id'])->viaTable('mi_post_category', ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'category_id']);
    }
}
