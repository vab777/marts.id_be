<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'cust_group_id', 'salutation', 'gender', 'status'], 'integer'],
            [['first_name', 'last_name', 'email', 'password', 'last_password_gen', 'mobile_phone', 'birthday', 'ip_add_newsletter', 'note', 'last_visit', 'date_added', 'date_update'], 'safe'],
            [['flag_newsletter', 'flag_active'], 'boolean'],
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
        $query = Customer::find();

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
            'customer_id' => $this->customer_id,
            'cust_group_id' => $this->cust_group_id,
            'salutation' => $this->salutation,
            'gender' => $this->gender,
            'last_password_gen' => $this->last_password_gen,
            'birthday' => $this->birthday,
            'flag_newsletter' => $this->flag_newsletter,
            'status' => $this->status,
            'flag_active' => $this->flag_active,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'mobile_phone', $this->mobile_phone])
            ->andFilterWhere(['like', 'ip_add_newsletter', $this->ip_add_newsletter])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'last_visit', $this->last_visit]);

        return $dataProvider;
    }
}
