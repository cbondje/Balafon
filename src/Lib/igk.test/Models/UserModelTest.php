<?php
require_once igk_io_packagesdir()."/vendor/autoload.php";

use IGK\Models\User;
use IGK\Tests\Models\ModelBaseTestCase;
use Faker\Factory;

/**
 * 
 * @package 
 */
class UserModelTest extends ModelBaseTestCase{

    protected function getControllerClass() { 
        return IGKSysDbController::class;
    }
    public function test_UsersModel(){
        $user  = User::create(); 
        $this->assertTrue(get_class($user)== User::class);
    }
    public function test_test_macro(){
        User::registerMacro("testdel", function(){
            igk_wl("call test");
        });

        $this->expectOutputString("call test");
        $user = User::create();
        $user->testdel();
        User::unregisterMacro("testdel");
    }
    public function test_get_All_Users(){
        $u = User::select_all();
        $this->assertTrue( count($u)>0, "No user defined");
    }
    public function test_use_save_user(){
        $u = User::select_all();
        $this->assertTrue($u[0]->save());
    }
    public function test_use_delete(){
        $this->assertTrue(User::delete(["clId"=>5]));
    }

    public function test_use_static_insert(){
        $c = Factory::create();
        $unique = $c->unique();
        $login = $unique->email();
        $b = User::insert([
            "clLogin"=>$login,
            "clPwd"=> hash("sha256", "admin123"),
            "clFirstName"=>$unique->firstname(),
            "clLastName"=>$unique->lastname()
        ]);
        $this->assertTrue($b!== false);

        $this->assertTrue(User::delete(["clLogin"=>$login]), "failed to delete by clLogin");
    }
}