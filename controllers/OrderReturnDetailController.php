<?php

namespace app\controllers;

use Yii;
use app\models\OrderReturnDetail;
use app\models\OrderReturnDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderReturnDetailController implements the CRUD actions for OrderReturnDetail model.
 */
class OrderReturnDetailController extends Controller
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
        ];
    }

    /**
     * Lists all OrderReturnDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderReturnDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderReturnDetail model.
     * @param integer $order_return_id
     * @param integer $order_detail_id
     * @return mixed
     */
    public function actionView($order_return_id, $order_detail_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($order_return_id, $order_detail_id),
        ]);
    }

    /**
     * Creates a new OrderReturnDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderReturnDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_return_id' => $model->order_return_id, 'order_detail_id' => $model->order_detail_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderReturnDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $order_return_id
     * @param integer $order_detail_id
     * @return mixed
     */
    public function actionUpdate($order_return_id, $order_detail_id)
    {
        $model = $this->findModel($order_return_id, $order_detail_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_return_id' => $model->order_return_id, 'order_detail_id' => $model->order_detail_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderReturnDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $order_return_id
     * @param integer $order_detail_id
     * @return mixed
     */
    public function actionDelete($order_return_id, $order_detail_id)
    {
        $this->findModel($order_return_id, $order_detail_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderReturnDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $order_return_id
     * @param integer $order_detail_id
     * @return OrderReturnDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($order_return_id, $order_detail_id)
    {
        if (($model = OrderReturnDetail::findOne(['order_return_id' => $order_return_id, 'order_detail_id' => $order_detail_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
