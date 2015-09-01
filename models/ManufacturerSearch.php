<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Manufacturer;

/**
 * ManufacturerSearch represents the model behind the search form about `app\models\Manufacturer`.
 */
class ManufacturerSearch extends Manufacturer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer_id'], 'integer'],
            [['manufacturer_name', 'manufacturer_desc', 'date_added', 'date_update'], 'safe'],
            [['flag_active'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Manufacturer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'manufacturer_id' => $this->manufacturer_id,
            'flag_active' => $this->flag_active,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'manufacturer_name', $this->manufacturer_name])
            ->andFilterWhere(['like', 'manufacturer_desc', $this->manufacturer_desc]);

        return $dataProvider;
    }
}
