<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductImage;

/**
 * ProductImageSearch represents the model behind the search form about `app\models\ProductImage`.
 */
class ProductImageSearch extends ProductImage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_image_id', 'position'], 'integer'],
            [['product_id', 'thumb_url', 'mid_size_url', 'ori_size_url', 'date_added', 'date_update'], 'safe'],
            [['flag_cover', 'flag_active'], 'boolean'],
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
        $query = ProductImage::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith('product');

        $query->andFilterWhere([
            'product_image_id' => $this->product_image_id,
            //'product_id' => $this->product_id,
            'flag_cover' => $this->flag_cover,
            'position' => $this->position,
            'flag_active' => $this->flag_active,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_id])
            ->andFilterWhere(['like', 'thumb_url', $this->thumb_url])
            ->andFilterWhere(['like', 'mid_size_url', $this->mid_size_url])
            ->andFilterWhere(['like', 'ori_size_url', $this->ori_size_url]);

        return $dataProvider;
    }
}
