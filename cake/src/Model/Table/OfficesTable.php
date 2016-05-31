<?php
namespace App\Model\Table;

use App\Model\Entity\Office;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $DisplayStatuses
 * @property \Cake\ORM\Association\HasMany $ContactOfficeJn
 */
class OfficesTable extends Table
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

        $this->table('offices');
        $this->displayField('name');
        $this->primaryKey('id');

        /*$this->belongsTo('DisplayStatuses', [
            'foreignKey' => 'display_status_id'
        ]);*/
        $this->belongsToMany('Contacts', [
            'joinTable' => 'contact_office_jn',
            'foreignKey' => 'office_id'
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
            ->allowEmpty('name');

        $validator
            ->allowEmpty('value_statement');

        $validator
            ->allowEmpty('description_intro');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('building');

        $validator
            ->allowEmpty('address_1');

        $validator
            ->allowEmpty('address_2');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('state');

        $validator
            ->allowEmpty('province');

        $validator
            ->allowEmpty('zip');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('delivery_notes');

        $validator
            ->allowEmpty('delivery_address_1');

        $validator
            ->allowEmpty('delivery_address_2');

        $validator
            ->allowEmpty('delivery_city');

        $validator
            ->allowEmpty('delivery_state');

        $validator
            ->allowEmpty('delivery_province');

        $validator
            ->allowEmpty('delivery_zip');

        $validator
            ->allowEmpty('delivery_country');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('fax');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('directions');

        $validator
            ->allowEmpty('directions_url');

        $validator
            ->integer('sort')
            ->allowEmpty('sort');

        $validator
            ->allowEmpty('notes');

        $validator
            ->dateTime('date_updated')
            ->allowEmpty('date_updated');

        $validator
            ->dateTime('date_created')
            ->allowEmpty('date_created');

        $validator
            ->integer('migrated_OfficeID')
            ->allowEmpty('migrated_OfficeID');

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
        $rules->add($rules->isUnique(['email']));
        //$rules->add($rules->existsIn(['display_status_id'], 'DisplayStatuses'));
        return $rules;
    }
}
