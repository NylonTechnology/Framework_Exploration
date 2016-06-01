<?php
namespace app\models;

use yii\db\ActiveRecord;


class Office extends ActiveRecord 
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offices';
    }



	public function getContacts() {
	    return $this->hasMany(Contact::className(), ['id' => 'contact_id'])
	      ->viaTable('contact_office_jn', ['office_id' => 'id']);
	}


}
