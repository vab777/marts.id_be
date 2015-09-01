<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_tag".
 *
 * @property integer $tag_id
 * @property string $tag_name
 *
 * @property MiPostTag[] $miPostTags
 * @property MiPost[] $posts
 * @property MiProductTag[] $miProductTags
 * @property MiProducts[] $products
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_name'], 'required'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['tag_name'], 'string', 'max' => 50],
            [['tag_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => 'Tag ID',
            'tag_name' => 'Tag Name',
            //'flag_active' => 'Flag Active',
            //'date_added' => 'Date Added',
            //'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiPostTags()
    {
        return $this->hasMany(MiPostTag::className(), ['tag_id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(MiPost::className(), ['post_id' => 'post_id'])->viaTable('mi_post_tag', ['tag_id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProductTags()
    {
        return $this->hasMany(MiProductTag::className(), ['tag_id' => 'tag_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(MiProducts::className(), ['product_id' => 'product_id'])->viaTable('mi_product_tag', ['tag_id' => 'tag_id']);
    }
}
