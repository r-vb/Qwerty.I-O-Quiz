<style>
    .req {
        color: red;
    }
</style>
<!-- Modal For Add Course -->
<div class="modal fade" id="feedbacksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addFeebacks" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give Your Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
              Workshop: <b>Figmaverse</b><br /><br />
            <label>Feedback</label><br>
            <?php 
               $selMe = $conn->query("SELECT * FROM examinee_tbl WHERE student_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
             ?>
            <input type="radio" name="asMe" value="<?php echo $selMe['student_fullname']; ?>" checked required> <?php echo $selMe['student_fullname']; ?> <br>
            
            
          </div>
          <div class="form-group">
           <span>➥ How would you rate this Workshop?<span class="req">*</span></span><br />
            <select id="mySelect" name="mySelect" class="form-control">
            <option value="1">1 (Poor)</option>
            <option value="2">2 (Okay)</option>
            <option value="3">3 (Good)</option>
            <option value="4" selected>4 (Nice)</option>
            <option value="5">5 (Excellent)</option>
            </select>
            <br />
           <span>➥ Any three take aways..<span class="req">*</span></span><br />
           <textarea name="mygains" class="form-control" rows="2" placeholder="My Gains..." required></textarea>
           <br />
           <span>➥ On which topics do you want us to conduct our next workshops?<span class="req">*</span></span><br />
           <textarea name="myFeedbacks" class="form-control" rows="" placeholder="Demand here..." required></textarea>
           <br />
           <span>➥ How can we improve our sessions?<span class="req">*</span></span><br />
           <textarea name="improve" class="form-control" rows="" placeholder="Suggest us..." required></textarea>
          </div>
          <b><span class="req">Note: </span></b><span>Do not use <span class="req"><i>apostrophe</i></span> symbol ( <span class="req">'</span> ) in your feedback. Thank you!</span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
   </form>
  </div>
</div>