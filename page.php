<?
class Page{
	public $header = "HEADER";
	public $content;
	public $footer;
	
	public function view_header(){
		echo $this->header;	
	}
	public function foo(){
		echo $this->view_header();	
	}
}
$index = new Page();
//echo $index->header;
echo $index->foo();
$admin = new Page();

$view = new Page();
?>

метро московское московское шоссе 25 -*/бц пристиж, паспорт 6 этаж 609 офис, ольга 6779370 , автобус к-3