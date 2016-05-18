<?php 
	class Reviews
	{
		public static function getReviewsList()
		{
			$db = Db::getConnection();
			
			$reviewsList = array();
			
			$result = $db->query('SELECT ** FROM reviews ORDER BY date');
			
			$i = 0;
		}
	}

?>