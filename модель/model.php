<?php
class model 
{
	
	protected $db;
	public function __construct() 
	  {
	    
	   	include($_SERVER['DOCUMENT_ROOT'].'/model/config.php'); 
	    $this->db->query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'");
	    
	  }
	public function get_story() 
	  {
		
     $query ="SELECT DISTINCT c.id, c.name_client, c.name_tovar, p.id, p.name,
		
		COUNT(DISTINCT p.id) as product_count 
		
		FROM story c  
		
		LEFT JOIN tovary p 
		
		ON p.id = c.name_tovar  
		
		GROUP BY c.name_client 
		
		HAVING COUNT(product_count)>=3
		
		ORDER BY product_count DESC";
		
	
	 $result = mysqli_query($this->db,$query);
	  if(!$result) 
	  {
		exit(mysqli_error());
	  }
		for($i = 0; $i < mysqli_num_rows($result);$i++) 
	  {
		$row[] = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  }
		return $row;
	  }
}
?>
