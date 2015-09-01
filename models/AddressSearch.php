<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Address;

/**
 * AddressSearch represents the model behind the search form about `app\models\Address`.
 */
class AddressSearch extends Address
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'address_category'], 'integer'],
            [['country_id', 'province_id', 'customer_id', 'address_1', 'address_2', 'postcode', 'city', 'phone_1', 'phone_2', 'other', 'date_added', 'date_update'], 'safe'],
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
        $query = Address::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith(['country','province','customer']);
        //$query->joinWith('country');
        //$query->joinWith('province');
        //$query->joinWith('customer');

        $query->andFilterWhere([
            'address_id' => $this->address_id,
            //'country_id' => $this->country_id,
            //'province_id' => $this->province_id,
            //'customer_id' => $this->customer_id,
            'address_category' => $this->address_category,
            'flag_active' => $this->flag_active,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'country_name', $this->country_id])
            ->andFilterWhere(['like', 'province_name', $this->province_id])
            ->andFilterWhere(['like', 'first_name', $this->customer_id])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'phone_1', $this->phone_1])
            ->andFilterWhere(['like', 'phone_2', $this->phone_2])
            ->andFilterWhere(['like', 'other', $this->other]);

        return $dataProvider;
    }
}
