<?
class Database{
	public $db;
	
	public function __construct($host,$user,$pass,$db){
		$this->db = mysql_connect($host,$user,$pass);
		if(!$this->db){
			exit('No connection');
		}
		if(!mysql_select_db($db,$this->db)){
			exit('No table');
		}
		mysql_query('SET NAMES utf-8');
	}
	
	public function get_all_db(){
		
	}
	
	public function get_one_db(){
		
	}
}
?>