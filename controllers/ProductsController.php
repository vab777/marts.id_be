<?php

namespace app\controllers;

use Yii;
use app\models\Products;
use app\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', '_form'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $product_id
     * @param integer $category_id
     * @param integer $manufacturer_id
     * @param integer $size_id
     * @return mixed
     */
    public function actionView($product_id, $category_id, $manufacturer_id, $size_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($product_id, $category_id, $manufacturer_id, $size_id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_id' => $model->product_id, 'category_id' => $model->category_id, 'manufacturer_id' => $model->manufacturer_id, 'size_id' => $model->size_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $product_id
     * @param integer $category_id
     * @param integer $manufacturer_id
     * @param integer $size_id
     * @return mixed
     */
    public function actionUpdate($product_id, $category_id, $manufacturer_id, $size_id)
    {
        $model = $this->findModel($product_id, $category_id, $manufacturer_id, $size_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_id' => $model->product_id, 'category_id' => $model->category_id, 'manufacturer_id' => $model->manufacturer_id, 'size_id' => $model->size_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $product_id
     * @param integer $category_id
     * @param integer $manufacturer_id
     * @param integer $size_id
     * @return mixed
     */
    public function actionDelete($product_id, $category_id, $manufacturer_id, $size_id)
    {
        $this->findModel($product_id, $category_id, $manufacturer_id, $size_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $product_id
     * @param integer $category_id
     * @param integer $manufacturer_id
     * @param integer $size_id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($product_id, $category_id, $manufacturer_id, $size_id)
    {
        if (($model = Products::findOne(['product_id' => $product_id, 'category_id' => $category_id, 'manufacturer_id' => $manufacturer_id, 'size_id' => $size_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
