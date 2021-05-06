<?php
abstract class Core 
{
	
	protected $m;
	
	public function __construct() 
	{
		$this->m = new model();
	}
		
	public function get_body($tpl)
	{
		$content = $this->get_content();
		include "tpl/index.php";
	}
	abstract function get_content();
	
}

?>
