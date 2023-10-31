<?php 
	session_start();
 	include("../conn.php");
 	extract($_POST);

	$exmneSess = $_SESSION['examineeSession']['exmne_id'];

 	$selMyFeedbacks = $conn->query("SELECT * FROM feedbacks_tbl WHERE student_id='$exmneSess' ");

 	if($selMyFeedbacks->rowCount() >= 1){
 		$res = array("res" => "limit");
	} else {
		$date = date("F d, Y");
		
		$fb_ratings = $_POST['mySelect'];
        $fb_mygains = $_POST['mygains'];
        $fb_mygains = str_replace("'", '', $fb_mygains);
        $fb_improve = $_POST['improve'];
        $fb_improve = str_replace("'", '', $fb_improve);

		$insFedd = $conn->query("INSERT INTO feedbacks_tbl(student_id,fb_student_as,fb_ratings,fb_mygains,fb_feedbacks,fb_improve,fb_date) VALUES('$exmneSess','$asMe','$fb_ratings','$fb_mygains','$myFeedbacks','$improve','$date') ");

		if($insFedd) {
			$res = array("res" => "success");
		} else {
			$res = array("res" => "failed");
		}
 	}

 	echo json_encode($res);
?>