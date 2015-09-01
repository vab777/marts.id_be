<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaymentChannel;

/**
 * PaymentChannelSearch represents the model behind the search form about `app\models\PaymentChannel`.
 */
class PaymentChannelSearch extends PaymentChannel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_channel_id', 'payment_category', 'cc_type', 'exp_month', 'exp_year'], 'integer'],
            [['payment_channel_name', 'customer_id', 'cc_no', 'cvv', 'paypal_id', 'date_added', 'date_update'], 'safe'],
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
        $query = PaymentChannel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('customer');

        $query->andFilterWhere([
            'payment_channel_id' => $this->payment_channel_id,
            //'customer_id' => $this->customer_id,
            'payment_category' => $this->payment_category,
            'cc_type' => $this->cc_type,
            'exp_month' => $this->exp_month,
            'exp_year' => $this->exp_year,
            'flag_active' => $this->flag_active,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'payment_channel_name', $this->payment_channel_name])
            ->andFilterWhere(['like', 'first_name', $this->customer_id])
            ->andFilterWhere(['like', 'cc_no', $this->cc_no])
            ->andFilterWhere(['like', 'cvv', $this->cvv])
            ->andFilterWhere(['like', 'paypal_id', $this->paypal_id]);

        return $dataProvider;
    }
}
