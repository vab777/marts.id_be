<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi_menu".
 *
 * @property integer $menu_id
 * @property integer $parent_id
 * @property string $menu_name
 * @property string $menu_url
 * @property string $menu_class
 * @property boolean $flag_active
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['flag_active'], 'boolean'],
            [['menu_name', 'menu_class'], 'string', 'max' => 50],
            [['menu_url'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'parent_id' => 'Parent ID',
            'menu_name' => 'Menu Name',
            'menu_url' => 'Menu Url',
            'menu_class' => 'Menu Class',
            'flag_active' => 'Flag Active',
        ];
    }
}
