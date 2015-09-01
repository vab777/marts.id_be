<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DeliveryTime;

/**
 * DeliveryTimeSearch represents the model behind the search form about `app\models\DeliveryTime`.
 */
class DeliveryTimeSearch extends DeliveryTime
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['delivery_time_id'], 'integer'],
            [['delivery_time_range'], 'safe'],
            [['flag_peak_hour'], 'boolean'],
            [['conversion_rate'], 'number'],
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
        $query = DeliveryTime::find();

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
            'delivery_time_id' => $this->delivery_time_id,
            'flag_peak_hour' => $this->flag_peak_hour,
            'conversion_rate' => $this->conversion_rate,
        ]);

        $query->andFilterWhere(['like', 'delivery_time_range', $this->delivery_time_range]);

        return $dataProvider;
    }
}
