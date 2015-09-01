<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductGroupDetail;

/**
 * ProductGroupDetailSearch represents the model behind the search form about `app\models\ProductGroupDetail`.
 */
class ProductGroupDetailSearch extends ProductGroupDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_group_detail_id', 'product_qty'], 'integer'],
            [['product_group_id', 'product_id'], 'safe'],
            [['product_ori_price', 'product_group_price'], 'number'],
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
        $query = ProductGroupDetail::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith(['productGroup','product']);

        $query->andFilterWhere([
            'product_group_detail_id' => $this->product_group_detail_id,
            'product_qty' => $this->product_qty,
            'product_ori_price' => $this->product_ori_price,
            'product_group_price' => $this->product_group_price,
        ]);
        
        $query->andFilterWhere(['like', 'product_group_desc', $this->product_group_id])
            ->andFilterWhere(['like', 'product_name', $this->product_id]);

        return $dataProvider;
    }
}
