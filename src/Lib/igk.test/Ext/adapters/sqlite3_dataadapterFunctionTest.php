<?php
namespace IGK\Tests\Ext\winui\Components\MailBox;
use PHPUnit\Framework\TestCase;
class sqlite3_dataadapterFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/Ext/adapters/sqlite3.dataadapter.php"; 
	}
	/** @test */
	public function testigk_sql3lite_autoincrement(){ 
	$this->assertTrue(function_exists('igk_sql3lite_autoincrement'), 'function igk_sql3lite_autoincrement not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_close(){ 
	$this->assertTrue(function_exists('igk_sql3lite_close'), 'function igk_sql3lite_close not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_connect(){ 
	$this->assertTrue(function_exists('igk_sql3lite_connect'), 'function igk_sql3lite_connect not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_error(){ 
	$this->assertTrue(function_exists('igk_sql3lite_error'), 'function igk_sql3lite_error not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_error_code(){ 
	$this->assertTrue(function_exists('igk_sql3lite_error_code'), 'function igk_sql3lite_error_code not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_escapestring(){ 
	$this->assertTrue(function_exists('igk_sql3lite_escapestring'), 'function igk_sql3lite_escapestring not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_fetch_field(){ 
	$this->assertTrue(function_exists('igk_sql3lite_fetch_field'), 'function igk_sql3lite_fetch_field not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_fetch_row(){ 
	$this->assertTrue(function_exists('igk_sql3lite_fetch_row'), 'function igk_sql3lite_fetch_row not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_lastid(){ 
	$this->assertTrue(function_exists('igk_sql3lite_lastid'), 'function igk_sql3lite_lastid not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_num_fields(){ 
	$this->assertTrue(function_exists('igk_sql3lite_num_fields'), 'function igk_sql3lite_num_fields not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_num_rows(){ 
	$this->assertTrue(function_exists('igk_sql3lite_num_rows'), 'function igk_sql3lite_num_rows not exists'); 
	}
	/** @test */
	public function testigk_sql3lite_tosql_data(){ 
	$this->assertTrue(function_exists('igk_sql3lite_tosql_data'), 'function igk_sql3lite_tosql_data not exists'); 
	}
}