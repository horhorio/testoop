<?
class Page{
	public $header = "HEADER";
	public $content;
	public $footer;
	
	function __construct($shapka,$text){
		$this->header = $shapka;
		$this->content = $text; 
	}
	
	public function view_header(){
		echo $this->header;	
	}
	public function foo(){
		echo $this->view_header($var, $var2);	
	}
}
$index = new Page('INDEX11','TEXT');
echo $index->header;
echo $index->content;
?>