<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_position".
 *
 * @property integer $position_id
 * @property string $position_name
 * @property string $position_desc
 * @property boolean $flag_active
 *
 * @property MiEmployee[] $miEmployees
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_name'], 'required'],
            [['flag_active'], 'boolean'],
            //[['date_added', 'date_update'], 'safe'],
            [['position_name'], 'string', 'max' => 50],
            [['position_desc'], 'string', 'max' => 500],
            [['position_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
            'position_desc' => 'Position Desc',
            'flag_active' => 'Flag Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMiEmployees()
    {
        return $this->hasMany(MiEmployee::className(), ['position_id' => 'position_id']);
    }
}
