<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity.
 *
 * @property int $id
 * @property string $internalUserID
 * @property string $pepper_history
 * @property string $organizations
 * @property string $prior_employment
 * @property string $reference_keys
 * @property string $gender
 * @property string $company_name
 * @property string $job_title
 * @property string $business_address_1
 * @property string $business_address_2
 * @property string $business_city
 * @property string $business_state
 * @property string $business_zip
 * @property string $business_country
 * @property string $business_address_notes
 * @property string $business_phone_1
 * @property string $business_phone_1_ext
 * @property string $business_phone_2
 * @property string $business_notes
 * @property string $home_address_1
 * @property string $home_address_2
 * @property string $home_city
 * @property string $home_state
 * @property string $home_zip
 * @property string $home_country
 * @property string $home_address_notes
 * @property string $home_phone_1
 * @property string $home_phone_2
 * @property bool $is_summer_associate
 * @property bool $is_on_holiday_list
 * @property bool $is_retired
 * @property bool $is_deceased
 * @property bool $is_on_dnc_list
 * @property string $dnc_notes
 * @property int $primary_practice_id
 * @property \App\Model\Entity\PrimaryPractice $primary_practice
 * @property int $contact_internal_department_id
 * @property \App\Model\Entity\ContactInternalDepartment $contact_internal_department
 * @property \Cake\I18n\Time $date_updated
 * @property \Cake\I18n\Time $date_created
 * @property \App\Model\Entity\ContactOfficeJn[] $contact_office_jn
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];



}




