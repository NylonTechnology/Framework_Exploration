<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Office Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $value_statement
 * @property string $description_intro
 * @property string $description
 * @property string $building
 * @property string $address_1
 * @property string $address_2
 * @property string $city
 * @property string $state
 * @property string $province
 * @property string $zip
 * @property string $country
 * @property string $delivery_notes
 * @property string $delivery_address_1
 * @property string $delivery_address_2
 * @property string $delivery_city
 * @property string $delivery_state
 * @property string $delivery_province
 * @property string $delivery_zip
 * @property string $delivery_country
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $directions
 * @property string $directions_url
 * @property int $sort
 * @property string $notes
 * @property int $display_status_id
 * @property \App\Model\Entity\DisplayStatus $display_status
 * @property \Cake\I18n\Time $date_updated
 * @property \Cake\I18n\Time $date_created
 * @property int $migrated_OfficeID
 * @property \App\Model\Entity\ContactOfficeJn[] $contact_office_jn
 */
class Office extends Entity
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
