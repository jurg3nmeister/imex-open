<?php
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $adm_users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'length' => 15),
		'password' => array('type' => 'string', 'null' => false, 'length' => 256),
		'active' => array('type' => 'integer', 'null' => false),
		'active_date' => array('type' => 'datetime', 'null' => false),
		'lc_state' => array('type' => 'string', 'null' => false, 'default' => 'ELABORATED', 'length' => 30),
		'lc_transaction' => array('type' => 'string', 'null' => false, 'default' => 'CREATE', 'length' => 30),
		'creator' => array('type' => 'integer', 'null' => false),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'modifier' => array('type' => 'integer', 'null' => true),
		'date_modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'uc_admusers_login' => array('unique' => true, 'column' => 'login')
		),
		'tableParameters' => array()
	);

	public $adm_profiles = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'adm_user_id' => array('type' => 'integer', 'null' => false),
		'first_name' => array('type' => 'string', 'null' => false, 'length' => 60),
		'last_name1' => array('type' => 'string', 'null' => false, 'length' => 50),
		'last_name2' => array('type' => 'string', 'null' => false, 'length' => 50),
		'birthdate' => array('type' => 'date', 'null' => false),
		'birthplace' => array('type' => 'string', 'null' => true, 'length' => 160),
		'address' => array('type' => 'string', 'null' => true, 'length' => 160),
		'di_number' => array('type' => 'integer', 'null' => false),
		'di_place' => array('type' => 'string', 'null' => false, 'length' => 80),
		'email' => array('type' => 'string', 'null' => false, 'length' => 60),
		'phone' => array('type' => 'string', 'null' => true, 'length' => 60),
		'job' => array('type' => 'string', 'null' => false, 'length' => 60),
		'lc_state' => array('type' => 'string', 'null' => false, 'default' => 'ELABORATED', 'length' => 30),
		'lc_transaction' => array('type' => 'string', 'null' => false, 'default' => 'CREATE', 'length' => 30),
		'creator' => array('type' => 'integer', 'null' => false),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'modifier' => array('type' => 'integer', 'null' => true),
		'date_modified' => array('type' => 'datetime', 'null' => true),
		'location' => array('type' => 'string', 'null' => true, 'length' => 300),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'uc_admprofiles_dinumber' => array('unique' => true, 'column' => 'di_number')
		),
		'tableParameters' => array()
	);

	public $adm_user_restrictions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'adm_user_id' => array('type' => 'integer', 'null' => false),
		'adm_role_id' => array('type' => 'integer', 'null' => false),
		'adm_area_id' => array('type' => 'integer', 'null' => false),
		'selected' => array('type' => 'integer', 'null' => false),
		'active' => array('type' => 'integer', 'null' => false),
		'active_date' => array('type' => 'datetime', 'null' => false),
		'period' => array('type' => 'string', 'null' => false, 'length' => 8),
		'lc_state' => array('type' => 'string', 'null' => false, 'default' => 'ELABORATED', 'length' => 30),
		'lc_transaction' => array('type' => 'string', 'null' => false, 'default' => 'CREATE', 'length' => 30),
		'creator' => array('type' => 'integer', 'null' => false),
		'date_created' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'modifier' => array('type' => 'integer', 'null' => true),
		'date_modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'uc_admuserrestrictions_userid_roleid_areaid_period' => array('unique' => true, 'column' => array('adm_user_id', 'adm_role_id', 'adm_area_id', 'period'))
		),
		'tableParameters' => array()
	);

}
