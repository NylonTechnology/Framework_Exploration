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



	public function getOffices() {
	    return $this->hasMany(Office::className(), ['id' => 'office_id'])
	      ->viaTable('contact_office_jn', ['contact_id' => 'id'])
          ->orderBy('offices.sort ASC');
	}


}
