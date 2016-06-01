<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Contact;

/**
 * Site controller
 */
class ContactController extends Controller
{
  

    public function actionIndex()
    {
        $query = Contact::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $contacts = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->with('offices')
            ->all();

        return $this->render('index', [
            'contacts' => $contacts,
            'pagination' => $pagination,
        ]);
    }


    public function actionView($id = null)
    {
        $query = Contact::find();

        $contact = $query
            ->with('offices')
            ->where(['id' => $id])
            ->one();

        return $this->render('view', [
            'contact' => $contact
        ]);
    }    


}
