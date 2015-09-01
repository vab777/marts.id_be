<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * OrderSearch represents the model behind the search form about `app\models\Order`.
 */
class OrderSearch extends Order
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'customer_id', 'cart_id', 'carrier_id', 'payment_channel_id', 'current_state', 'flag_gift', 'total_product_count', 'round_mode', 'delivery_time_id', 'delivery_address_id', 'invoice_address_id'], 'integer'],
            [['order_no', 'order_date', 'gift_message', 'delivery_no', 'delivery_date', 'tracking_no', 'invoice_no', 'invoice_date', 'date_added', 'date_update'], 'safe'],
            [['flag_free_delivery'], 'boolean'],
            [['total_order', 'total_discount', 'total_tax', 'total_shipping_cost', 'total_shipping_tax', 'total_wrapping', 'grand_total', 'grand_total_rounded', 'total_paid', 'total_weight'], 'number'],
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
        $query = Order::find();

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
            'order_id' => $this->order_id,
            'order_date' => $this->order_date,
            'customer_id' => $this->customer_id,
            'cart_id' => $this->cart_id,
            'carrier_id' => $this->carrier_id,
            'payment_channel_id' => $this->payment_channel_id,
            'current_state' => $this->current_state,
            'flag_gift' => $this->flag_gift,
            'flag_free_delivery' => $this->flag_free_delivery,
            'total_product_count' => $this->total_product_count,
            'total_order' => $this->total_order,
            'total_discount' => $this->total_discount,
            'total_tax' => $this->total_tax,
            'total_shipping_cost' => $this->total_shipping_cost,
            'total_shipping_tax' => $this->total_shipping_tax,
            'total_wrapping' => $this->total_wrapping,
            'grand_total' => $this->grand_total,
            'round_mode' => $this->round_mode,
            'grand_total_rounded' => $this->grand_total_rounded,
            'total_paid' => $this->total_paid,
            'total_weight' => $this->total_weight,
            'delivery_date' => $this->delivery_date,
            'delivery_time_id' => $this->delivery_time_id,
            'delivery_address_id' => $this->delivery_address_id,
            'invoice_date' => $this->invoice_date,
            'invoice_address_id' => $this->invoice_address_id,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'gift_message', $this->gift_message])
            ->andFilterWhere(['like', 'delivery_no', $this->delivery_no])
            ->andFilterWhere(['like', 'tracking_no', $this->tracking_no])
            ->andFilterWhere(['like', 'invoice_no', $this->invoice_no]);

        return $dataProvider;
    }
}
