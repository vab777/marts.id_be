<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CategoryTag;

/**
 * CategoryTagSearch represents the model behind the search form about `app\models\CategoryTag`.
 */
class CategoryTagSearch extends CategoryTag
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'tag_id'], 'safe'],
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
        $query = CategoryTag::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith(['category','tag']);

        /*$query->andFilterWhere([
            'category_id' => $this->category_id,
            'tag_id' => $this->tag_id,
        ]);*/
        
        $query->andFilterWhere(['like', 'category_name', $this->category_id])
            ->andFilterWhere(['like', 'tag_name', $this->tag_id]);

        return $dataProvider;
    }
}
