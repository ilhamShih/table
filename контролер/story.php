<?php
class story extends Core 
{
	public function get_content() 
	{
		$result = $this->m->get_story();
		return $result;
	}
}
?>
