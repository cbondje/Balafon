<?php

define("IGK_SQL3LITE_KN", "sql3lite");
define("IGK_SQL3LITE_KN_TABLE_KEY", IGK_SQL3LITE_KN."::/tableName");
define("IGK_SQL3LITE_KN_QUERY_KEY", IGK_SQL3LITE_KN."::/query");
define("IGK_SQL3LITE_TYPE_NAME_INDEX", 2);
define("IGK_SQL3LITE_NAME_INDEX", 1);


class IGKSQLiteConnectionManager{
	var $Sql;
	var $count; 
}
///<summary> represent SQLite3 database adapter</summary>
class IGKSQLite3DataAdapter extends IGKSQLDataAdapter{
	
	private static $LENGTHDATA = array("int"=>"Int","varchar"=>"VarChar");
	private static $sm_sql; // store present sql connection
	private static $sm_list;
	private static $sm_connexions; 
	
	private $m_creator;
	private $fname; //store the current filename
	private $m_current;//store current connection information
	
	public function getSql(){
		if (self::$sm_sql ==null){
			self::$sm_sql = [];
		}
		return igk_getv(self::$sm_sql, $this->fname, function(){
			// igk_wln("filename : ".$this->fname);
			$s =   new SQLite3($this->fname);
			$man = new IGKSQLiteConnectionManager();
			$man->Sql = $s;
			$man->count = 0;

			self::$sm_sql[$this->fname] = $man;
			return $man;
		})->Sql; //connexions,self::$sm_connexions 
	}
	public function getConnectionManager(){
		if (self::$sm_sql)
			return igk_getv(self::$sm_sql, $this->fname);
		return null;
	}
	public function getConnexion($n){
		$r = igk_getv(self::$sm_connexions,$n);
		return $r;
	}
	public function getLastId(){
		return $this->sql->lastInsertRowID();
	}
	///<summary>get sql version</summary>
	public function getVersion(){
		return $this->sql->version();
	}
	public function storeConnexion($fname, $sql){
		if (self::$sm_connexions==null)
			self::$sm_connexions  = array();
		$this->m_current = (object)array(
			"filename"=>$fname,
			"openCount"=>1,
			"sql"=>$sql
		);
		self::$sm_connexions[$fname]= $this->m_current;
	}
	
	
	// public function getSQL(){
		// return $this->m_current!=null ? $this->m_current->sql : $this->m_sql;
	// }
	public function OpenCount(){
		$r = $this->getConnectionManager();
		return $r ? $r->count: 0;
	}
	public static function GetSchemaOptions($n){
		//$n = igk_createNode("div");
		$ul = $n->addUL();
		
		$li = $ul->add("li");
		$li->addLabel("clsqlite3_file")->setContent(null)->addSpan()->Content = "SQLite3 Db Filename";
		$li->addInput("clsqlite3_file", "text");
		return $n;
	}
	// public static function StoreSchemaOptions(){
		
	// }
	// public function select($tab, $condition=null){
		// throw new Exception("dk");
		
	// }
	public static function GetCurrent(){
		if (self::$sm_list==null)
			self::$sm_list =array();
		return  igk_getv(self::$sm_list, 0);
	}
	public static function StoreStack($l){
		
		self::GetCurrent();
		array_unshift(self::$sm_list, $l);
	}
	public function setCreatorListener($listener){
		$this->m_creator = $listener;
	}
	///<summary>mixed data value<summary>
	public function connect($dbname=null){
	

		if (func_num_args()>0){

			if (igk_is_controller($dbname)){
				$f = igk_getv($dbname->Configs, "clSQLite3DataFile");
				$fulln = IGKIO::GetDir(igk_io_ctrl_db_dir($dbname)."/{$f}");
				$ctn = $this->getConnexion($fulln);
				if (($ctn == null) || ($ctn->openCount<=0)){
						//$sql = new SQLite3($fulln);
						$this->fname = $fulln;
						$this->initConfig();
						return 1;
				}
				//$ctn->openCount++;
				return 1;
			}else if (is_string($dbname)){
				$this->fname = $dbname;
			}
		}
		$fulln = "";
		$sql = $this->fname ?  $this->getSql() : null;
		$c = 0;
		if (!$sql){
			if ($this->m_creator){
				//you setup a global creator
				$o = $this->m_creator;
			
				if (igk_is_callback_obj($o)){
					$sql= igk_invoke_callback_obj(null,$o);
				}
				else if (is_object($o))
					$sql= $o->createDb($this);
			}
			else{
				if (igk_is_controller($dbname)){
					
					$f = igk_getv($dbname->Configs, "clSQLite3DataFile");
					if (empty($f)){
						igk_die("no file setup");
					}
					$fulln = IGKIO::GetDir(igk_io_ctrl_db_dir($dbname)."/{$f}");
				
				} else if (is_string($dbname)){
					$fulln = $dbname;
				} else{
					igk_die(" failed to get initiated data");

				}	
				$this->fname = $fulln;
				$this->initConfig();
				$this->storeConnexion($fulln, $sql);
				$sql = $this->sql;
				$c = 1;		
			}
			if (!$c){
				if ($sql==null){
					igk_die("/!\\No creator set to init the sql connection");
				}
				$this->initConfig();
				$this->storeConnexion("", $sql);
				$this->fname = "";
				return 1;
			}
		}
		$man = $this->getConnectionManager();
		$man->count++;
		$this->initConfig();
		if ($man->count ==1)
		$this->enableForeignKey(1);
		return 1;
	}
	public function close(){
		// igk_wln("call close");
		// igk_wln(self::$sm_connexions);
		
		
		// if ($this->m_current){
		// 	$this->m_current->openCount--;
			
		// 	if ($this->m_current->openCount<=0){
				
		// 		$this->m_current->sql->close();
		// 		array_shift(self::$sm_connexions);
		// 		$this->m_current = igk_getv(self::$sm_connexions, 0);//array_shift($this->
		// 	}
		// 	return;
		// }
		// igk_wln("after");
		// igk_wln(self::$sm_connexions);
		// return;
		// if (!empty($this->fname)){
			
			// $fulln = $this->fname;
			// $ctn = $this->getConnexion($fulln);
			// $ctn->openCount--;
			
			// if ($ctn->openCount<=0){
				
				// $ctn->sql->close();
			// }
			// exit;
			
		// }
		$sql = $this->getConnectionManager();
		if ($sql){
			$sql->count--;
			if (($sql->count<=0) && ($sql->Sql)){
				$sql->Sql->close();
				$sql = null;
				unset(self::$sm_sql[$this->fname]);
			}
			

		}
	}
	public function CreateEmptyResult($result=null, $query=null, $info=null){

		$r =  IGKMySQLQueryResult::CreateResult($result, $query, $info);
		return $r;
	}
	public  function initSystableRequired($tablename){
		
	}
	protected function initConfig(){
		$this->makeCurrent();
		self::StoreStack($this);
	}
	
	public static  function CreateTableQuery($tbname, $columninfo, $entries =null, $desc=null){
		//create a mysql table query
		$query = "CREATE TABLE IF NOT EXISTS `".igk_mysql_db_tbname($tbname)."`(";
		$tb = false;
		$primary = ""; //primary key
		$unique =""; //unique row
		$funique = ""; //unique row
		$findex ="";
		$uniques = array();
		//$unique_entity = "";
		$primkey = "";
		$tinf = array();//"auto_increment_word"=>"AUTOINCREMENT");
		$foreignkey = "";
		foreach($columninfo as $k=>$v)
		{
		
			if (($v==null) || !is_object($v)){
				igk_die(__CLASS__." ::: Error table column info is not an object error for ".$tbname);
			}
			$primkey = "noprimkey://".$v->clName;
			if ($tb)
				$query.=",";
			$v_name = igk_db_escape_string($v->clName);
			$query .= "`".$v_name."` ";
			$type = igk_getev($v->clType, "Int");//default type
		
			
			if (($type=="Int") && ($v->clLinkType || $v->clAutoIncrement))
				$type = "INTEGER";
			

			$query .= igk_db_escape_string($type);
			$s = strtolower($type);
			$number =false;
			if (isset(self::$LENGTHDATA[$s]))
			{
			
				if ($v->clTypeLength>0)
				{
					$number = true;
					$query .="(".igk_db_escape_string($v->clTypeLength).") ";
				}
				else 
					$query .= " ";
			}
			else 
				$query .= " ";
			
			//number data
			if (!$number)
			{
				if(($v->clNotNull) || ($v->clAutoIncrement))
					$query .= "NOT NULL ";
				else 
					$query .= "NULL ";				
			}
			else if ($v->clNotNull){
				$query .= "NOT NULL ";
			}
			if ($v->clAutoIncrement){
				$query .= IGKSQLManager::GetValue("auto_increment_word", $v, $tinf)." ";// "AUTO_INCREMENT ";
				
			}				
			$tb = true;
			//igk_wln("default : ".$v_name . " : ".$v->clDefault);
			if ($v->clDefault || $v->clDefault==='0'){
				$query .= "DEFAULT '".igk_db_escape_string($v->clDefault)."' ";
				//igk_wln("set ok ");
			}
			
			// if ($v->clDescription && !$nocomment)
			// {
				// $query .= "COMMENT '".igk_db_escape_string($v->clDescription)."' ";
			// }
			
			if ($v->clIsUnique){
				if (!empty($unique))
					$unique .= ",";				
					
				$unique .= "CONSTRAINT ".strtolower("constraint_".$v_name)." UNIQUE (`".$v_name."`)";
				//"UNIQUE KEY `".$v_name."` (`".$v_name."`)";
			}
			//to merge all unique column members
			if ($v->clIsUniqueColumnMember)
			{
				if (isset($v->clColumnMemberIndex))
				{
					
					$tindex = explode("-", $v->clColumnMemberIndex);
					$indexes = array();
					foreach($tindex as $kindex){
						//$ck = 'unique_'.$v->clColumnMemberIndex;
						if (!is_numeric($kindex) || isset($indexes[$kindex]))
							continue;
						// igk_wln($kindex);
						$indexes[$kindex] = 1;
						$ck = 'unique_'. $kindex;
						
						//igk_wln("for ".$ck);
						$bf ="";
						if (!isset($uniques[$ck]))
						{
							// $bf  .= "UNIQUE KEY `clUC_".$ck."_index`(`".$v_name."`";
							$bf  .= "CONSTRAINT  `clUC_".$ck."_index` UNIQUE(`".$v_name."`";
						}
						else{ 
							$bf = $uniques[$ck];
							$bf  .= ", `".$v_name."`";
						}
						$uniques[$ck] = $bf;
					}
				}
				else{
					if (empty($funique))
					{
						$funique = "CONSTRAINT `clUnique_Column_".$v_name."_idx` UNIQUE (`".$v_name."`";
						//$funique  = "UNIQUE KEY `clUnique_Column_".$v_name."_index`(`".$v_name."`";
					}
					else
						$funique  .= ", `".$v_name."`";
				}
			}
			if ($v->clIsPrimary && !isset($tinf[$primkey]))
			{
				// igk_wln("isset ".isset($tinf[$primkey]));
				// igk_wln($primkey);
				// igk_wln($tinf);
				if (!empty($primary))
				$primary .= ",";
				$primary .= "`".$v_name."`";
			}
			
			if (($v->clIsIndex || $v->clLinkType) && !$v->clIsUnique && !$v->clIsUniqueColumnMember && $v->clIsPrimary ){
				if (!empty($findex))
					$findex .= ",";
				$findex .= "KEY `".$v_name."_index` (`".$v_name."`)";
			}
			unset($tinf[$primkey]);
			
			if  ($v->clLinkType){
				$cl = igk_getv($v, "clLinkColumn", "clId");
				if (!empty($foreignkey ))
					$foreignkey .=",";
				$foreignkey .= "FOREIGN KEY ({$v_name}) REFERENCES {$v->clLinkType}({$cl})";
			
				// igk_wln($foreignkey);
				// exit;
			}
			
		}
		if (!empty($primary))
		{
			$query .=", PRIMARY KEY  (".$primary.") ";
		}
		if (!empty($unique))
		{
			$query .=", ".$unique." ";
		}
		if (!empty($funique))
		{
			$funique .= ")";
			$query .=", ".$funique." ";
		}
		if (igk_count($uniques)>0)
		{
			foreach($uniques as $k=>$v){
				$v .= ")";
				$query .=", ".$v." ";	
			}
		}
		
		if (!empty($findex))
			$query .=", ".$findex ;
		if (!empty($foreignkey)){
			
			$query .=", ".$foreignkey ;
		}
		
		$query .=")";
		// if (!$noengine)
		// $query .= ' ENGINE=InnoDB ';
		//  sql3lite do not support comment tag
		// if ($desc){
			//$query .= "COMMENT='".igk_db_escape_string($desc)."' ";
		// }
		$query.=";";
		igk_debug_wln($query);
		return $query;
	}
	public function createTable($tbname, $columninfo, $entries =null, $desc=null){
		//$this->initConfig();
		$unique = array();
		$query = self::CreateTableQuery( $tbname, $columninfo, $entries, $desc);
		
		//unique contraint
		//CONSTRAINT constraint_name UNIQUE (uc_col1, uc_col2, ... uc_col_n)
		//igk_wln($query. "<br />");
		$r =  $this->sendQuery($query,$tbname);
		
		if ($entries){
			igk_db_inserts($this, $tbname, $entries);
		}
		
		
		return $r;
	}
	
	public function enableForeignKey($b){
		$s = $b?'ON': 'OFF';
		$this->sql->exec('PRAGMA foreign_keys='.$s);		
	}
	public function IsForeignKeyEnable(){
		
		$r = $this->sendQuery('PRAGMA foreign_keys;',':global:');
		$f = 0;		
		if ($r && ($r->RowCount == 1)){
			$f = $r->getRowAtIndex(0)->foreign_keys;
		}	
		return $f;
	}
	
	///<summary>get entry database name</symmary>
	public function getDatabaseFileName(){
		$r = $this->sendQuery('PRAGMA database_list', ':global:');
		// igk_wln($r);
		$f = null;
		if ($r && ($r->RowCount == 1)){
			$f = $r->getRowAtIndex(0)->file;
		}		
		return $f;
	}
	
	public function getDatabaseVersion(){
		$r = $this->sendQuery('PRAGMA user_version;', ':global:');
		$f = null;
		if ($r && ($r->RowCount == 1)){
			$f = $r->getRowAtIndex(0)->user_version;
		}		
		return $f;
	}
	
	public function setDatabaseVersion($v){
		$this->sql->exec('PRAGMA user_version='.$v);		
	}
	public function dropAllTables(){
		$r = $this->listTables();
		if ($r){
				$this->sql->exec('PRAGMA foreign_keys=OFF');
			
				foreach($r->Rows as $k=>$v){
					if ($v->name == "sqlite_sequence"){
						$this->deleteAll("sqlite_sequence");
						continue;				
					}
					$this->dropTable($v->name);					
				}		
		}
	}
	public function beginTransaction(){
		$this->sql->exec("BEGIN TRANSACTION");
	}
	public function rollback(){
	$this->sql->exec("ROLLBACK");
	}
	public function commit(){
		$this->sql->exec("COMMIT");		
	}	
	public function sendQuery($query, $tbname=null){
		// igk_log_write_i(__FILE__."::".__FUNCTION__."::".__LINE__, $query);
		// igk_wln("query : ".$query);
		$sql = $this->getSql();

		if ($tbname == null)
			igk_die("tbname is null ");
		$r = null;
		if (preg_match("/^(INSERT|UPDATE|DELETE|CREATE|DROP)/i",$query)){
			// igk_ilog($query);
			$r = @$sql->exec($query) ?? igk_die("query failed . ".$query . " error ".$this->sql->lastErrorMsg());
			return $r;
		}
		else{
			$r =  @$sql->query($query) ?? igk_debug_or_local_die($this->sql->lastErrorMsg());
			
		}
		if ($r && is_object($r)){
			//load query result
			$obj = igk_createObj();			
			igk_setv($obj , IGK_SQL3LITE_KN_QUERY_KEY, $query);
			igk_setv($obj, IGK_SQL3LITE_KN_TABLE_KEY, $tbname);
			
			return $this->createResult($r,$query, $obj);
		}
		if ($this->sql->lastErrorCode()==0)
			return null;
		$obj=  self::CreateEmptyResult(false, $query, array(
		"error"=>1, 
		"errormsg"=>$this->sql->lastErrorMsg()));
		return $obj;
		// return null;
	}
	
	public function escapeString ($str){
		return $this->sql->escapeString ($str);		
	}
	public function numRows(){
		return -1; //$this->sql->numRows();
	}
	public function dieNotConnect(){
		if ($this->sql == null)
			throw new Exception("sql3lite no connection available ");
	}
	public function createResult($r,$query=null, $obj=null){
		
		$inf = (object) array_merge(array(
		"source"=>$this, 
		"handle"=>true,
		"adapterName"=>IGK_SQL3LITE_KN,
		"query"=>$query
		), (array)$obj ?? []) ;
		
		// $r->{":info"} = $inf;
		return IGKMySQLQueryResult::CreateResult($r, $query, $inf);
	}
	public function dropTable($tbname){		
		return $this->sendQuery("Drop Table IF EXISTS   `{$tbname}`", $tbname);//, $this->DbName);			
	}
	
	public function listTables(){
		return $this->sendQuery("SELECT name FROM sqlite_master WHERE type='table';", "sqlite_master");
	}
	public function countTable($tb){
		return $this->sendQuery("SELECT Count(*) FROM `".$tb."`;", $tb);
	}
	
	///<summary>get data schema</summary>
	///<param name="fmt">format of the request dataschema. default is xml. acceptable is xml|obj</param>
	public function getDataSchema($entries=0, $fmt='xml'){
		$rep = null;
		
		switch($fmt){
			
			case 'xml':
			default : 
			
		
		$rep  = igk_createNode("data-schemas");
		$rep["Date"] = date('Y-m-d');
		$rep["Version"]= $this->getDatabaseVersion();
		$rep["Name"]= basename($this->getDatabaseFileName());
		
		$r = $this->listTables();//("Show Tables;");	
		$entry_node = null;
		if ($entry_node ==null)
			$entry_node = $rep->addXMLNode("Entries"); 
		if ($r)
		{
				$n = $r->Columns[0]->name;
				$e = false;
				foreach($r->Rows as $t){
					if ($e)
						exit;	

					$table_n = $t->$n;
					if (($table_n == null) || ($table_n == "sqlite_sequence"))
						continue;
					// igk_wln("for ".$table_n);
					
					$row = $rep->addNode("DataDefinition")->setAttributes(array(
						"TableName"=>$table_n
					));
					// if ($table_n != "users")continue;
					$tinfo = array();
					$tt = $this->countTable($table_n);
					$b = $tt->Columns[0]->name;
					if ($entries){
						$row["Entries"] = $tt->Rows[0]->$b;	

						$b = $this->select($table_n);
						$trow = $entry_node->addXMLNode("Rows")
						->setAttribute("For", $table_n);
						foreach($b->Rows as $kk=>$vv){
							$trow->addXMLNode("Row")->setAttributes((array)$vv);
						}
						// igk_exit();
					}
					
					//$tt = $mysql->sendQuery("DESCRIBE `".$t->$n."`;");
					// $tt = $mysql->sendQuery("SHOW FULL COLUMNS FROM `".$table_n."`;");
					$tt = $this->sql->query("pragma table_info('{$table_n}')");
					$itt = $this->sql->query("pragma index_list('{$table_n}')");
					$ift = $this->sql->query("pragma foreign_key_list('{$table_n}')");
					//load index info
				
					$tinfo = array();
					$clinfo = (object)array();
					$uc_index = 1;
					while ($d = $itt->fetchArray(SQLITE3_NUM)){
							$info = (object)array();
							$cn = igk_getv($d , 1);
							$clt = igk_getv($d, 3);
							
							
							// igk_wln("name = ".$cn);
							// igk_wln("cltype = ".$clt);
							$por =  $this->sql->query("PRAGMA index_info('{$cn}')");
							$cl_count = 0;
							$cln = null;
							while ($rc = $por->fetchArray(SQLITE3_NUM)){
								$cln = igk_getv($rc, 2);
								
								if(!empty($info->$cln ))
									$info->$cln .="|".$clt;
								else 
									$info->$cln = $clt;
								$cl_count ++;
								if (!isset($clinfo->$cln))
								$clinfo->$cln = (object)array(
								"is_Unique"=>0,
								"is_UniqueColumnMember"=>0,
								"cl_member_index"=>0,
								"clRefType"=>null,
								"clRefColumn"=>null,
								"clInfo"=>$info);
								else{
									if (is_array($clinfo->$cln->clInfo))
										$clinfo->$cln->clInfo[] = $info;
									else{
										$clinfo->$cln->clInfo = array($clinfo->$cln->clInfo, $info);
									}
								}
							}
							
							if ($cl_count>1){
								$info->clUniqueColumnMember = 	$uc_index++;
								foreach(array_keys((array)$info) as $rmm=>$rtt){
									// igk_wln("rtt " .$rtt);
									if ($rtt=="clUniqueColumnMember")
										continue;
									$clinfo->$rtt->is_UniqueColumnMember = 1;
									
									$clinfo->$rtt->cl_member_index = (empty($clinfo->$rtt->cl_member_index) ? $info->clUniqueColumnMember : 
									$clinfo->$rtt->cl_member_index."-".$info->clUniqueColumnMember);
								}
							}else{
								if ($clt=="u"){
									$clinfo->$cln->is_Unique = 1;
								}
							}
							$tinfo[] = $info;
					}
				
					
					
					
					$fields = array();
					if ($tt){	
						$tbrelations = [];
						while ($relations = $ift->fetchArray(SQLITE3_NUM)){
							$tbrelations[igk_getv($relations, 3)] =(object) [
								"table"=> igk_getv($relations, 2), 
								"sourceColumn"=>igk_getv($relations, 3), 
								"targetColumn"=>igk_getv($relations, 4)
							];
						}
					
						while ($d = $tt->fetchArray(SQLITE3_NUM)){
						
							$fi = (object)array(
								"clName"=>igk_getv($d, 1),
								"clType"=>igk_getv($d, IGK_SQL3LITE_TYPE_NAME_INDEX),
								"clComment"=>"",
								"clAutoIncrement"=>igk_getv($d,5),
								"clDefault"=>igk_getv($d,4),
								"clNotNull"=>igk_getv($d,3)
							);
									if (isset($tbrelations[$fi->clName])){
										
										$fi->clLinkType = $tbrelations[$fi->clName]->table;
										if ($tbrelations[$fi->clName]->targetColumn != IGK_FD_ID)
											$fi->clLinkTypeColumn = $tbrelations[$fi->clName]->targetColumn;
									}
							
							
							$v = $fi;
							$cl = $row->addNode("Column");
							$cl["clName"] = $fi->clName;
							$tab = array();
							preg_match_all("/^((?P<type>([^\(\))]+)))\\s*(\((?P<length>([0-9]+))\)){0,1}$/i", 
							trim($fi->clType)
							//"Text"
							, $tab);
							
							//build output response 		
							$cl["clType"] = igk_sql_data_type( igk_getv($tab["type"],0, "Int"));
							$cl["clTypeLength"] = igk_getv($tab["length"],0, 0);
							$cl["clAutoIncrement"] =$v->clAutoIncrement?$v->clAutoIncrement:null;//preg_match("/auto_increment/i", $v->Extra) ? "True" : null;
							$cl["clNotNull"] = $v->clNotNull?$v->clNotNull:null;//preg_match("/NO/i", $v->Null) ? "True": null;
							$cl["clIsPrimary"] =$v->clAutoIncrement?$v->clAutoIncrement:null;// preg_match("/PRI/i", $v->Key) ? "True": null;
							
							$rinf = igk_getv($clinfo,  $fi->clName);
					
							$cl["clColumnMemberIndex"] = $rinf && $rinf->is_UniqueColumnMember?$rinf->cl_member_index: null;
							$cl["clIsUnique"] = $rinf && $rinf->is_Unique?1: null;
							$cl["clIsUniqueColumnMember"] = $rinf && $rinf->is_UniqueColumnMember?1: null;
							$cl["clLinkType"] = igk_getv($fi, "clLinkType");
							$cl["clLinkTypeColumn"] = igk_getv($fi, "clLinkTypeColumn");
						}	
					}
					$tinfo[$fi->clName] = new IGKDbColumnInfo((array)$fi);
					$fields[] = $fi;
					$tables[$table_n] = (object)array("tinfo"=>$tinfo, 'ctrl'=>"sys://mysql_db");
				}	
		}
			break;
		}
		return $rep;		
	}
	public function getDbIdentifier(){
		return IGK_SQL3LITE_KN;
	}
	
	public function stopRelationChecking(){
		$this->enableForeignKey(0);
	}
	public function restoreRelationChecking(){
		$this->enableForeignKey(1);
	}
}

//------------------------------------------------------------------------
// sqli3lite Utility functions
//------------------------------------------------------------------------

function igk_sql3lite_escapestring($str){	
	$sq = IGKSQLite3DataAdapter::GetCurrent();//::$Config[IGK_SQL3LITE_KN]["res"] ;
	igk_assert_die( $sq->sql ===null, 'SQLite3 Error : Sql is null');
	return $sq->sql->escapeString($str);	
}
function igk_sql3lite_num_rows($t){
	igk_sql3lite_fetch_row($t); //required
	//igk_sql3lite_fetch_row($t); //required
	if ($t->numColumns() && $t->columnType(0) != SQLITE3_NULL)
		{
			
			return 1;
    // have rows
		} else {
			// zero rows
			return 0;
		} 
	
}
function igk_sql3lite_num_fields($r){
	return $r->numColumns();
}
function igk_sql3lite_tosql_data($d){
// igk_wln("??... data {$d}");
// igk_wln($d);

if (!preg_match_all("/(?P<type>([^\(\)])+)(\((?P<number>[0-9]+)\))?/i", $d, $tab))
	return "unknown";
// igk_wln($tab);
// exit;
$d = igk_getv($tab["type"],0);

	
	switch(strtolower($d)){
		case "integer":
		case "int":
			return MYSQLI_TYPE_SHORT;
		case "text":
		case "string":
			return  MYSQLI_TYPE_STRING;
		default:
		break;
			
	}
	igk_wln("error : " .$d);
	exit;

// switch($d){
	// case SQLITE3_NULL:	
	// igk_wln("null ... data");
	// throw new Exception("kd");
			// return MYSQLI_TYPE_NULL;
		// break;
	// case SQLITE3_INTEGER:
		// return MYSQLI_TYPE_SHORT;
	// case SQLITE3_TEXT:
	// case SQLITE3_FLOAT:
			// return MYSQLI_TYPE_FLOAT;
		// break;
	
	// default:
		
		// break;
// }
// igk_wln($d);
// igk_wln(MYSQLI_TYPE_SHORT);
// igk_wln(SQLITE3_FLOAT);
	// exit;

}
function igk_sql3lite_fetch_field($r, $requiretable=1){
	$index = 0;
	$v_k = "field::/index";
	$v_inf_k = "field::/index_info";
	$index = igk_getv($r,$v_k,0);
	$v_inf = igk_getv($r,$v_inf_k,0);
	$tb = igk_getv($r, IGK_SQL3LITE_KN_TABLE_KEY);
	$ctx = IGKSQLite3DataAdapter::GetCurrent();
	$k = null;
	// igk_wln($r);
	// if ($requiretable && empty($tb)){
		// igk_die("failed to retrieve the source data table");
	// }

	 if ($index< $r->numColumns()){
		
		if (!$v_inf){
			

			//dynamic detection of table field type
			$h = $r->fetchArray( SQLITE3_NUM );
			$fieldnames = [];
			$fieldtypes = [];

			for( $colnum=0; $colnum<$r->numColumns(); $colnum++) {
				$fieldnames[] = $r->columnName($colnum);
				$fieldtypes[] = $r->columnType($colnum);
			}
			// if ($fieldtypes[count($fieldtypes) - 1] === false){
				// // last feach row found :::: 

				// igk_wln('entry data is null');
				// igk_wln('data : '. $h);
				// igk_exit();
			// }




			$r->reset();
			if (!empty($tb)){
				$q = "pragma table_info('{$tb}')";
				
				$v_inf = $ctx->sql->query($q);
				igk_wln($q);
				// igk_wln($v_inf);			
				$r->$v_inf_k = $v_inf;
				// igk_wln("column : ".$v_inf->numColumns());
				while($d = $r->$v_inf_k->fetchArray(SQLITE3_NUM)){
				// while($d = $r->fetchArray(SQLITE3_NUM)){
					igk_wln("i ");
					igk_wln($d);
				}
			}
			else{
			
			}
			// throw new Exception("id");
			// exit;
		}
		$tab = [];
		$k= (object)array(
		"name"=>$r->columnName($index),
		"type"=>igk_sql3lite_tosql_data(igk_getv($tab, IGK_SQL3LITE_TYPE_NAME_INDEX)),
		"flags"=>igk_getv($tab, 5),
		"table"=>$tb,
		"primary_key"=>igk_getv($tab, 5),//null
		);
		$index++;		
		$r->$v_k = $index;
	}else{
		$r->reset();
		unset($r->$v_k);
	}
	return $k;
}
function igk_sql3lite_fetch_row($r){
	return $r->fetchArray(SQLITE3_NUM);
}
function igk_sql3lite_close(){
	$sq = IGKSQLite3DataAdapter::GetCurrent();//::$Config[IGK_SQL3LITE_KN]["res"] ;
	return $sq && $sq->close();
}
function igk_sql3lite_lastid(){
	return -1;
}
function igk_sql3lite_error(){
	$c = IGKSQLite3DataAdapter::GetCurrent();
	if ($c) return $c->sql->lastErrorMsg();
	return 0;
	
}
function igk_sql3lite_error_code(){
	$c = IGKSQLite3DataAdapter::GetCurrent();
	if ($c) return $c->sql->lastErrorCode();
	return 0;
	
}
function igk_sql3lite_autoincrement($r, & $info =null){
	if (preg_match("/^(int(eger)?)$/i", (strtolower($r->clType))) &&
		($r->clIsPrimary)){
			if ($info!==null){
				$primkey="noprimkey://".$r->clName;
				$info[$primkey] = 1;
			}
			return "primary key autoincrement";
		}
	return null;
}

//<summary>global sql 3 lite connection</summary>
function igk_sql3lite_connect(){
	igk_wln(func_get_args());
	throw new Exception("not permitted");
	
}
//init SQL3Lite balafon's settings
IGKSQLManager::Init(function(& $conf){
	$n =IGK_SQL3LITE_KN;
	$conf["db"]=IGK_SQL3LITE_KN;
	$conf[$n]["func"]= array();
	$conf[$n]["auto_increment_word"] = "igk_sql3lite_autoincrement";
	
	$t = array();
	$t["connect"] = "igk_sql3lite_connect";
	$t["selectdb"] = "";
	$t["check_connect"] = "";
	$t["query"] = "igk_sql3lite_fetch_query";
	$t["escapestring"] = "igk_sql3lite_escapestring";
	$t["num_rows"] = "igk_sql3lite_num_rows";
	$t["num_fields"] = "igk_sql3lite_num_fields";
	$t["fetch_field"] = "igk_sql3lite_fetch_field";
	$t["fetch_row"] = "igk_sql3lite_fetch_row";
	$t["close"] =  "igk_sql3lite_close";
	$t["error"] =  "igk_sql3lite_error";
	$t["errorc"] = "igk_sql3lite_error_code";
	$t["lastid"] = "igk_sql3lite_lastid";
	$conf[$n]["func"]= $t;	
});