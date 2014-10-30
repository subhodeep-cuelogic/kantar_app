<?php
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
$_SERVER['REMOTE_ADDR'] = '127.0.0.1';

// Bootstrap Drupal.
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);


class TddTests extends PHPUnit_Framework_TestCase
{
    public function test_tdd_help()
    {
        // Arbritary function to ensure Drupal is bootstrapped properly.
        $this->assertEquals("testdfdfsdf", "test");

        //print_r(_dblog_get_message_types());
    }

    /*public function testGetUser()
    {
        #Include required files
        module_load_include('inc', 'userform', 'inc/userinfo');

        $arrNodeInfo = node_load(1);

        //print_r($arrNodeInfo);

        $objUserInfo = new clsUserInfo();
        $ObjUser = $objUserInfo->fnGetUserList();
        $this->assertEquals('fdf', $ObjUser->name, "User name is matched with expected result");
    }*/
}
?>