<?php
	
	include_once ROOT.'/models/Reviews.php';
	
	class ReviewController
	{
		public function actionList()
		{
			$reviewsList = array();
			$reviewsList = Reviews::getReviewsList();
			return true;
		}
	}

?>