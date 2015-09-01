<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderReturnDetail;

/**
 * OrderReturnDetailSearch represents the model behind the search form about `app\models\OrderReturnDetail`.
 */
class OrderReturnDetailSearch extends OrderReturnDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_return_id', 'order_detail_id', 'qty_returned'], 'integer'],
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
        $query = OrderReturnDetail::find();

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
            'order_return_id' => $this->order_return_id,
            'order_detail_id' => $this->order_detail_id,
            'qty_returned' => $this->qty_returned,
        ]);

        return $dataProvider;
    }
}
