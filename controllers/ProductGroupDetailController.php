<?php

namespace app\controllers;

use Yii;
use app\models\ProductGroupDetail;
use app\models\ProductGroupDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ProductGroupDetailController implements the CRUD actions for ProductGroupDetail model.
 */
class ProductGroupDetailController extends Controller
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
     * Lists all ProductGroupDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductGroupDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductGroupDetail model.
     * @param integer $product_group_detail_id
     * @param integer $product_group_id
     * @param integer $product_id
     * @return mixed
     */
    public function actionView($product_group_detail_id, $product_group_id, $product_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($product_group_detail_id, $product_group_id, $product_id),
        ]);
    }

    /**
     * Creates a new ProductGroupDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductGroupDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_group_detail_id' => $model->product_group_detail_id, 'product_group_id' => $model->product_group_id, 'product_id' => $model->product_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProductGroupDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $product_group_detail_id
     * @param integer $product_group_id
     * @param integer $product_id
     * @return mixed
     */
    public function actionUpdate($product_group_detail_id, $product_group_id, $product_id)
    {
        $model = $this->findModel($product_group_detail_id, $product_group_id, $product_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'product_group_detail_id' => $model->product_group_detail_id, 'product_group_id' => $model->product_group_id, 'product_id' => $model->product_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProductGroupDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $product_group_detail_id
     * @param integer $product_group_id
     * @param integer $product_id
     * @return mixed
     */
    public function actionDelete($product_group_detail_id, $product_group_id, $product_id)
    {
        $this->findModel($product_group_detail_id, $product_group_id, $product_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductGroupDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $product_group_detail_id
     * @param integer $product_group_id
     * @param integer $product_id
     * @return ProductGroupDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($product_group_detail_id, $product_group_id, $product_id)
    {
        if (($model = ProductGroupDetail::findOne(['product_group_detail_id' => $product_group_detail_id, 'product_group_id' => $product_group_id, 'product_id' => $product_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
