<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supplier;

/**
 * SupplierSearch represents the model behind the search form about `app\models\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_id'], 'integer'],
            [['supplier_name', 'supplier_desc', 'contact_person', 'address_1', 'address_2', 'postcode', 'city', 'phone_1', 'phone_2', 'fax', 'country_id', 'province_id', 'logo_url', 'date_added', 'date_update'], 'safe'],
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
        $query = Supplier::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith(['country','province']);

        $query->andFilterWhere([
            'supplier_id' => $this->supplier_id,
            //'country_id' => $this->country_id,
            //'province_id' => $this->province_id,
            'mi_supplier.flag_active' => 1,
            //'date_added' => $this->date_added,
            //'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'supplier_desc', $this->supplier_desc])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'address_1', $this->address_1])
            ->andFilterWhere(['like', 'address_2', $this->address_2])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'phone_1', $this->phone_1])
            ->andFilterWhere(['like', 'phone_2', $this->phone_2])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'country_name', $this->country_id])
            ->andFilterWhere(['like', 'province_name', $this->province_id])
            ->andFilterWhere(['like', 'logo_url', $this->logo_url]);

        return $dataProvider;
    }
}
