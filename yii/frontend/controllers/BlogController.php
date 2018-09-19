<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Blog;
use yii\web\NotFoundHttpException;

/**
 * Blog controller
 */
class BlogController extends Controller
{
    
    public function actionIndex()
    {
        $blogs = Blog::find()->andWhere(['status_id'=>1])->orderBy('sort')->all();
        return $this->render('listing', ['blogs' => $blogs]);
    }

    public function actionSingle($url)
    {
        if($blog = Blog::find()->andWhere(['url'=>$url])->one()){
            return $this->render('single', ['blog' => $blog]);
        }
        throw new NotFoundHttpException();

    }

}
