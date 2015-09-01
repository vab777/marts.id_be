<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Size;

/**
 * SizeSearch represents the model behind the search form about `app\models\Size`.
 */
class SizeSearch extends Size
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size_id'], 'integer'],
            [['size_name', 'date_added', 'date_update'], 'safe'],
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
        $query = Size::find();

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
            'size_id' => $this->size_id,
            'flag_active' => 1,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'size_name', $this->size_name]);

        return $dataProvider;
    }
}
