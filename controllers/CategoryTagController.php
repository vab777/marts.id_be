<?php

namespace app\controllers;

use Yii;
use app\models\CategoryTag;
use app\models\CategoryTagSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CategoryTagController implements the CRUD actions for CategoryTag model.
 */
class CategoryTagController extends Controller
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
     * Lists all CategoryTag models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategoryTagSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CategoryTag model.
     * @param integer $category_id
     * @param integer $tag_id
     * @return mixed
     */
    public function actionView($category_id, $tag_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($category_id, $tag_id),
        ]);
    }

    /**
     * Creates a new CategoryTag model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CategoryTag();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'category_id' => $model->category_id, 'tag_id' => $model->tag_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CategoryTag model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $category_id
     * @param integer $tag_id
     * @return mixed
     */
    public function actionUpdate($category_id, $tag_id)
    {
        $model = $this->findModel($category_id, $tag_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'category_id' => $model->category_id, 'tag_id' => $model->tag_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CategoryTag model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $category_id
     * @param integer $tag_id
     * @return mixed
     */
    public function actionDelete($category_id, $tag_id)
    {
        $this->findModel($category_id, $tag_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CategoryTag model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $category_id
     * @param integer $tag_id
     * @return CategoryTag the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($category_id, $tag_id)
    {
        if (($model = CategoryTag::findOne(['category_id' => $category_id, 'tag_id' => $tag_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
