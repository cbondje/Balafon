<?php
namespace IGK\Tests;
use PHPUnit\Framework\TestCase;
class igk_mysql_dbFunctionTest extends TestCase{
	protected function setUp():void{ 
	require_once IGK_LIB_FILE;
	require_once IGK_LIB_DIR ."/igk_mysql_db.php"; 
	}
	/** @test */
	public function testigk_db_connect(){ 
	$this->assertTrue(function_exists('igk_db_connect'), 'function igk_db_connect not exists'); 
	}
	/** @test */
	public function testigk_db_escape_string(){ 
	$this->assertTrue(function_exists('igk_db_escape_string'), 'function igk_db_escape_string not exists'); 
	}
	/** @test */
	public function testigk_db_fetch_field(){ 
	$this->assertTrue(function_exists('igk_db_fetch_field'), 'function igk_db_fetch_field not exists'); 
	}
	/** @test */
	public function testigk_db_fetch_row(){ 
	$this->assertTrue(function_exists('igk_db_fetch_row'), 'function igk_db_fetch_row not exists'); 
	}
	/** @test */
	public function testigk_db_is_resource(){ 
	$this->assertTrue(function_exists('igk_db_is_resource'), 'function igk_db_is_resource not exists'); 
	}
	/** @test */
	public function testigk_db_multi_query(){ 
	$this->assertTrue(function_exists('igk_db_multi_query'), 'function igk_db_multi_query not exists'); 
	}
	/** @test */
	public function testigk_db_num_fields(){ 
	$this->assertTrue(function_exists('igk_db_num_fields'), 'function igk_db_num_fields not exists'); 
	}
	/** @test */
	public function testigk_db_num_rows(){ 
	$this->assertTrue(function_exists('igk_db_num_rows'), 'function igk_db_num_rows not exists'); 
	}
	/** @test */
	public function testigk_db_query(){ 
	$this->assertTrue(function_exists('igk_db_query'), 'function igk_db_query not exists'); 
	}
	/** @test */
	public function testigk_mysql_datetime_now(){ 
	$this->assertTrue(function_exists('igk_mysql_datetime_now'), 'function igk_mysql_datetime_now not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_close(){ 
	$this->assertTrue(function_exists('igk_mysql_db_close'), 'function igk_mysql_db_close not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_error(){ 
	$this->assertTrue(function_exists('igk_mysql_db_error'), 'function igk_mysql_db_error not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_errorc(){ 
	$this->assertTrue(function_exists('igk_mysql_db_errorc'), 'function igk_mysql_db_errorc not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_gettypename(){ 
	$this->assertTrue(function_exists('igk_mysql_db_gettypename'), 'function igk_mysql_db_gettypename not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_has_error(){ 
	$this->assertTrue(function_exists('igk_mysql_db_has_error'), 'function igk_mysql_db_has_error not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_is_primary_key(){ 
	$this->assertTrue(function_exists('igk_mysql_db_is_primary_key'), 'function igk_mysql_db_is_primary_key not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_last_id(){ 
	$this->assertTrue(function_exists('igk_mysql_db_last_id'), 'function igk_mysql_db_last_id not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_selected_db(){ 
	$this->assertTrue(function_exists('igk_mysql_db_selected_db'), 'function igk_mysql_db_selected_db not exists'); 
	}
	/** @test */
	public function testigk_mysql_db_tbname(){ 
	$this->assertTrue(function_exists('igk_mysql_db_tbname'), 'function igk_mysql_db_tbname not exists'); 
	}
	/** @test */
	public function testigk_mysql_result_table(){ 
	$this->assertTrue(function_exists('igk_mysql_result_table'), 'function igk_mysql_result_table not exists'); 
	}
	/** @test */
	public function testigk_mysql_time_span(){ 
	$this->assertTrue(function_exists('igk_mysql_time_span'), 'function igk_mysql_time_span not exists'); 
	}
	/** @test */
	public function testigk_mysqli_multi_query(){ 
	$this->assertTrue(function_exists('igk_mysqli_multi_query'), 'function igk_mysqli_multi_query not exists'); 
	}
}