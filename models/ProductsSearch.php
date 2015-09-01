<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'qty', 'min_qty', 'visibility', 'qty_onsale', 'reduction_type'], 'integer'],
            [['category_id', 'manufacturer_id', 'product_name', 'upc_barcode', 'ean13_barcode', 'prod_short_desc', 'prod_long_desc', 'available_date', 'size_id', 'size', 'reduction_start_date', 'reduction_end_date', 'date_added', 'date_update'], 'safe'],
            [['price', 'wholesale_price', 'weight', 'width', 'height', 'depth', 'additional_shipping_cost', 'reduction_price'], 'number'],
            [['flag_active', 'flag_onsale', 'flag_visible', 'flag_show_price', 'flag_available', 'flag_reduction'], 'boolean'],
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
        $query = Products::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        $query->joinWith(['category','manufacturer','size']);

        $query->andFilterWhere([
            'product_id' => $this->product_id,
            //'category_id' => $this->category_id,
            //'manufacturer_id' => $this->manufacturer_id,
            'qty' => $this->qty,
            'min_qty' => $this->min_qty,
            'price' => $this->price,
            'wholesale_price' => $this->wholesale_price,
            'visibility' => $this->visibility,
            'weight' => $this->weight,
            'width' => $this->width,
            'height' => $this->height,
            'depth' => $this->depth,
            'additional_shipping_cost' => $this->additional_shipping_cost,
            'flag_active' => $this->flag_active,
            'flag_onsale' => $this->flag_onsale,
            'flag_visible' => $this->flag_visible,
            'flag_show_price' => $this->flag_show_price,
            'flag_available' => $this->flag_available,
            'available_date' => $this->available_date,
            'qty_onsale' => $this->qty_onsale,
            //'size_id' => $this->size_id,
            'reduction_price' => $this->reduction_price,
            'reduction_start_date' => $this->reduction_start_date,
            'reduction_end_date' => $this->reduction_end_date,
            'flag_reduction' => $this->flag_reduction,
            'reduction_type' => $this->reduction_type,
            'date_added' => $this->date_added,
            'date_update' => $this->date_update,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_id])
            ->andFilterWhere(['like', 'manufacturer_name', $this->manufacturer_id])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'upc_barcode', $this->upc_barcode])
            ->andFilterWhere(['like', 'ean13_barcode', $this->ean13_barcode])
            ->andFilterWhere(['like', 'prod_short_desc', $this->prod_short_desc])
            ->andFilterWhere(['like', 'prod_long_desc', $this->prod_long_desc])
            ->andFilterWhere(['like', 'size_name', $this->size_id])
            ->andFilterWhere(['like', 'size', $this->size]);

        return $dataProvider;
    }
}
