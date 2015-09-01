<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderDetail;

/**
 * OrderDetailSearch represents the model behind the search form about `app\models\OrderDetail`.
 */
class OrderDetailSearch extends OrderDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_detail_id', 'order_id', 'product_id', 'qty_ordered', 'qty_in_stock', 'qty_refunded', 'qty_returned', 'product_group_id', 'supplier_id'], 'integer'],
            [['product_group_price', 'supplier_price', 'product_price'], 'number'],
            [['date_added', 'date_update'], 'safe'],
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
        $query = OrderDetail::find();

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
            'order_detail_id' => $this->order_detail_id,
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'qty_ordered' => $this->qty_ordered,
            'qty_in_stock' => $this->qty_in_stock,
            'qty_refunded' => $this->qty_refunded,
            'qty_returned' => $this->qty_returned,
            'product_group_id' => $this->product_group_id,
            'product_group_price' => $this->product_group_price,
            'supplier_id' => $this->supplier_id,
            'supplier_price' => $this->supplier_price,
            'product_price' => $this->product_price,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        return $dataProvider;
    }
}
