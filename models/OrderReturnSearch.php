<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrderReturn;

/**
 * OrderReturnSearch represents the model behind the search form about `app\models\OrderReturn`.
 */
class OrderReturnSearch extends OrderReturn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_return_id', 'order_id', 'return_state'], 'integer'],
            [['return_date', 'notes', 'date_added', 'date_update'], 'safe'],
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
        $query = OrderReturn::find();

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
            'order_id' => $this->order_id,
            'return_date' => $this->return_date,
            'return_state' => $this->return_state,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
