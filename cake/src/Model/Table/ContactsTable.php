<?php
namespace App\Model\Table;

use App\Model\Entity\Contact;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PrimaryPractices
 * @property \Cake\ORM\Association\BelongsTo $ContactInternalDepartments
 * @property \Cake\ORM\Association\HasMany $ContactOfficeJn
 */
class ContactsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('contacts');
        $this->displayField('id');
        $this->primaryKey('id');

        /*$this->belongsTo('PrimaryPractices', [
            'foreignKey' => 'primary_practice_id'
        ]);
        $this->belongsTo('ContactInternalDepartments', [
            'foreignKey' => 'contact_internal_department_id'
        ]);*/
        $this->belongsToMany('Offices', [
            'joinTable' => 'contact_office_jn',
            'foreignKey' => 'contact_id',
            'sort' => 'Offices.sort ASC'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('internalUserID');

        $validator
            ->allowEmpty('pepper_history');

        $validator
            ->allowEmpty('organizations');

        $validator
            ->allowEmpty('prior_employment');

        $validator
            ->allowEmpty('reference_keys');

        $validator
            ->allowEmpty('gender');

        $validator
            ->allowEmpty('company_name');

        $validator
            ->allowEmpty('job_title');

        $validator
            ->allowEmpty('business_address_1');

        $validator
            ->allowEmpty('business_address_2');

        $validator
            ->allowEmpty('business_city');

        $validator
            ->allowEmpty('business_state');

        $validator
            ->allowEmpty('business_zip');

        $validator
            ->allowEmpty('business_country');

        $validator
            ->allowEmpty('business_address_notes');

        $validator
            ->allowEmpty('business_phone_1');

        $validator
            ->allowEmpty('business_phone_1_ext');

        $validator
            ->allowEmpty('business_phone_2');

        $validator
            ->allowEmpty('business_notes');

        $validator
            ->allowEmpty('home_address_1');

        $validator
            ->allowEmpty('home_address_2');

        $validator
            ->allowEmpty('home_city');

        $validator
            ->allowEmpty('home_state');

        $validator
            ->allowEmpty('home_zip');

        $validator
            ->allowEmpty('home_country');

        $validator
            ->allowEmpty('home_address_notes');

        $validator
            ->allowEmpty('home_phone_1');

        $validator
            ->allowEmpty('home_phone_2');

        $validator
            ->boolean('is_summer_associate')
            ->allowEmpty('is_summer_associate');

        $validator
            ->boolean('is_on_holiday_list')
            ->allowEmpty('is_on_holiday_list');

        $validator
            ->boolean('is_retired')
            ->allowEmpty('is_retired');

        $validator
            ->boolean('is_deceased')
            ->allowEmpty('is_deceased');

        $validator
            ->boolean('is_on_dnc_list')
            ->allowEmpty('is_on_dnc_list');

        $validator
            ->allowEmpty('dnc_notes');

        $validator
            ->dateTime('date_updated')
            ->allowEmpty('date_updated');

        $validator
            ->dateTime('date_created')
            ->allowEmpty('date_created');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        //$rules->add($rules->existsIn(['primary_practice_id'], 'PrimaryPractices'));
        //$rules->add($rules->existsIn(['contact_internal_department_id'], 'ContactInternalDepartments'));
        return $rules;
    }
}
