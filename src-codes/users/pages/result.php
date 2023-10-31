 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE exam_id='$examId' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="app-main__outer">
<div class="app-main__inner">
    <div id="refreshData">
            
    <div class="col-md-12">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <?php echo $selExam['exam_title']; ?>

                    </div>
                </div>
            </div>
        </div>  
        <div class="row col-md-12">
        	<h1 class="text-primary">RESULTS</h1>
        </div>

        <div class="row col-md-6 float-left">
        	<div class="">
                <div class="card-body">
                	<h5 class="card-title">Your performance in the test is as follows:</h5>
        			<table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                    <?php 
                    	$selQuest = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.question_id = ea.question_id WHERE eqt.exam_id='$examId' AND ea.student_id='$exmneId' AND ea.answer_status='new' ");
                    	$i = 1;
                    	while ($selQuestRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                    		<?php ?> <?php ?>
                    					<?php 
                    						if($selQuestRow['exam_answer'] != $selQuestRow['exam_answer'])
                    						{ ?>
                    							
                    						<?PHP }
                    						else
                    						{ ?>
                    							
                    						<?php }?>
                    	<?php }?>
	                 </table>
                </div>
            </div>
        </div>
        

        <div class="col-md-6 float-left">
        	<div class="col-md-6 float-left">
        	<div class="card mb-3 widget-content bg-night-fade">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><h5>Score</h5></div>
                        <div class="widget-subheading" style="color: transparent;">/</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.question_id = ea.question_id AND eqt.exam_answer = ea.exam_answer  WHERE ea.student_id='$exmneId' AND ea.exam_id='$examId' AND ea.answer_status='new' ");
                            ?>
                            <span>
                                <?php echo $selScore->rowCount(); ?>
                                <?php 
                                    $over  = $selExam['exam_questionlimit_display'];
                                 ?>
                            </span> / <?php echo $over; ?>
                        </div>
                    </div>
                </div>
            </div>
        	</div>

            <div class="col-md-6 float-left">
            <div class="card mb-3 widget-content bg-happy-green">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading"><h5>Percentage</h5></div>
                        <div class="widget-subheading" style="color: transparent;">/</div>
                        </div>
                        <div class="widget-content-right">
                        <div class="widget-numbers text-white">
                            <?php 
                                $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.question_id = ea.question_id AND eqt.exam_answer = ea.exam_answer  WHERE ea.student_id='$exmneId' AND ea.exam_id='$examId' AND ea.answer_status='new'");
                            ?>
                            <span>
                                <?php 
                                    $score = $selScore->rowCount();
                                    $ans = $score / $over * 100;
                                    echo number_format($ans,2);
                                    echo "%";
                                    
                                 ?>
                            </span> 
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    


    </div>
</div>


<br />


<div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                          <div class="page-title-subheading">
                              <?php echo "Please give your feedback before you logout from here." ?><br><br>
                            <?php echo "Thank you for attending the workshop.!" ?>
                          </div>

                    </div>
                </div>
            </div>
        </div>