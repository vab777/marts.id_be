<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_size".
 *
 * @property integer $size_id
 * @property string $size_name
 *
 * @property MiProducts[] $miProducts
 */
class Size extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size_name'], 'required'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['size_name'], 'string', 'max' => 32],
            [['size_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'size_id' => 'Size ID',
            'size_name' => 'Size Name',
            //'flag_active' => 'Flag Active',
            //'date_added' => 'Date Added',
            //'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiProducts()
    {
        return $this->hasMany(MiProducts::className(), ['size_id' => 'size_id']);
    }
}
