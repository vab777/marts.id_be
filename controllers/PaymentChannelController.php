<?php

namespace app\controllers;

use Yii;
use app\models\PaymentChannel;
use app\models\PaymentChannelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * PaymentChannelController implements the CRUD actions for PaymentChannel model.
 */
class PaymentChannelController extends Controller
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
     * Lists all PaymentChannel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PaymentChannelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PaymentChannel model.
     * @param integer $payment_channel_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionView($payment_channel_id, $customer_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($payment_channel_id, $customer_id),
        ]);
    }

    /**
     * Creates a new PaymentChannel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PaymentChannel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_channel_id' => $model->payment_channel_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PaymentChannel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $payment_channel_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionUpdate($payment_channel_id, $customer_id)
    {
        $model = $this->findModel($payment_channel_id, $customer_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'payment_channel_id' => $model->payment_channel_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PaymentChannel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $payment_channel_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionDelete($payment_channel_id, $customer_id)
    {
        $this->findModel($payment_channel_id, $customer_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PaymentChannel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $payment_channel_id
     * @param integer $customer_id
     * @return PaymentChannel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($payment_channel_id, $customer_id)
    {
        if (($model = PaymentChannel::findOne(['payment_channel_id' => $payment_channel_id, 'customer_id' => $customer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
