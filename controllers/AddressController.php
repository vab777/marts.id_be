<?php

namespace app\controllers;

use Yii;
use app\models\Address;
use app\models\AddressSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AddressController implements the CRUD actions for Address model.
 */
class AddressController extends Controller
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
     * Lists all Address models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AddressSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Address model.
     * @param integer $address_id
     * @param integer $province_id
     * @param integer $country_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionView($address_id, $province_id, $country_id, $customer_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($address_id, $province_id, $country_id, $customer_id),
        ]);
    }

    /**
     * Creates a new Address model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Address();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'address_id' => $model->address_id, 'province_id' => $model->province_id, 'country_id' => $model->country_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Address model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $address_id
     * @param integer $province_id
     * @param integer $country_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionUpdate($address_id, $province_id, $country_id, $customer_id)
    {
        $model = $this->findModel($address_id, $province_id, $country_id, $customer_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'address_id' => $model->address_id, 'province_id' => $model->province_id, 'country_id' => $model->country_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Address model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $address_id
     * @param integer $province_id
     * @param integer $country_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionDelete($address_id, $province_id, $country_id, $customer_id)
    {
        $this->findModel($address_id, $province_id, $country_id, $customer_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Address model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $address_id
     * @param integer $province_id
     * @param integer $country_id
     * @param integer $customer_id
     * @return Address the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($address_id, $province_id, $country_id, $customer_id)
    {
        if (($model = Address::findOne(['address_id' => $address_id, 'province_id' => $province_id, 'country_id' => $country_id, 'customer_id' => $customer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
