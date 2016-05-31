<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactFixture
 *
 */
class ContactFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contact';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'internalUserID' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'pepper_history' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'organizations' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'prior_employment' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'reference_keys' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'gender' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'company_name' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'job_title' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_address_1' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_address_2' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_city' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_state' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_zip' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_country' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_address_notes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'business_phone_1' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_phone_1_ext' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_phone_2' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'business_notes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'home_address_1' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_address_2' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_city' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_state' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_zip' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_country' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_address_notes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'home_phone_1' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'home_phone_2' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'is_summer_associate' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'is_on_holiday_list' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'is_retired' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'is_deceased' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'is_on_dnc_list' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'dnc_notes' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'primary_practice_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contact_internal_department_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_updated' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'date_created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'internalUserID' => 'Lorem ipsum dolor sit amet',
            'pepper_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'organizations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'prior_employment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'reference_keys' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'gender' => 'Lorem ipsum dolor sit ame',
            'company_name' => 'Lorem ipsum dolor sit amet',
            'job_title' => 'Lorem ipsum dolor sit amet',
            'business_address_1' => 'Lorem ipsum dolor sit amet',
            'business_address_2' => 'Lorem ipsum dolor sit amet',
            'business_city' => 'Lorem ipsum dolor sit amet',
            'business_state' => 'Lorem ipsum dolor sit amet',
            'business_zip' => 'Lorem ipsum dolor ',
            'business_country' => 'Lorem ipsum dolor sit amet',
            'business_address_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'business_phone_1' => 'Lorem ipsum dolor sit amet',
            'business_phone_1_ext' => 'Lorem ip',
            'business_phone_2' => 'Lorem ipsum dolor sit amet',
            'business_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'home_address_1' => 'Lorem ipsum dolor sit amet',
            'home_address_2' => 'Lorem ipsum dolor sit amet',
            'home_city' => 'Lorem ipsum dolor sit amet',
            'home_state' => 'Lorem ipsum dolor sit amet',
            'home_zip' => 'Lorem ipsum dolor ',
            'home_country' => 'Lorem ipsum dolor sit amet',
            'home_address_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'home_phone_1' => 'Lorem ipsum dolor sit amet',
            'home_phone_2' => 'Lorem ipsum dolor sit amet',
            'is_summer_associate' => 1,
            'is_on_holiday_list' => 1,
            'is_retired' => 1,
            'is_deceased' => 1,
            'is_on_dnc_list' => 1,
            'dnc_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'primary_practice_id' => 1,
            'contact_internal_department_id' => 1,
            'date_updated' => '2016-05-26 20:19:08',
            'date_created' => '2016-05-26 20:19:08'
        ],
    ];
}
