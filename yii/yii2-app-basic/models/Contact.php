<?php
namespace app\models;

use yii\db\ActiveRecord;


class Contact extends ActiveRecord 
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }




}
