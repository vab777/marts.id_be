<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Province;

/**
 * ProvinceSearch represents the model behind the search form about `app\models\Province`.
 */
class ProvinceSearch extends Province
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id'], 'integer'],
            //[['flag_active'], 'boolean'],
            [['country_id', 'province_name', 'date_added', 'date_update'], 'safe'],
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
        $query = Province::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('country');

        $query->andFilterWhere([
            'province_id' => $this->province_id,
            //'country_id' => $this->country_id,
            'mi_country.flag_active' => 1,
            //'date_added' => $this->date_added,
            //'date_update' => $this->date_update,
        ]);
        
        $query->andFilterWhere(['like', 'country_name', $this->country_id])
            ->andFilterWhere(['like', 'province_name', $this->province_name]);

        return $dataProvider;
    }
}
