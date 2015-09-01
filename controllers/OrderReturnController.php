<?php

namespace app\controllers;

use Yii;
use app\models\OrderReturn;
use app\models\OrderReturnSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderReturnController implements the CRUD actions for OrderReturn model.
 */
class OrderReturnController extends Controller
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
     * Lists all OrderReturn models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderReturnSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderReturn model.
     * @param integer $order_return_id
     * @param integer $order_id
     * @return mixed
     */
    public function actionView($order_return_id, $order_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($order_return_id, $order_id),
        ]);
    }

    /**
     * Creates a new OrderReturn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderReturn();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_return_id' => $model->order_return_id, 'order_id' => $model->order_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderReturn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $order_return_id
     * @param integer $order_id
     * @return mixed
     */
    public function actionUpdate($order_return_id, $order_id)
    {
        $model = $this->findModel($order_return_id, $order_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'order_return_id' => $model->order_return_id, 'order_id' => $model->order_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderReturn model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $order_return_id
     * @param integer $order_id
     * @return mixed
     */
    public function actionDelete($order_return_id, $order_id)
    {
        $this->findModel($order_return_id, $order_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderReturn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $order_return_id
     * @param integer $order_id
     * @return OrderReturn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($order_return_id, $order_id)
    {
        if (($model = OrderReturn::findOne(['order_return_id' => $order_return_id, 'order_id' => $order_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
