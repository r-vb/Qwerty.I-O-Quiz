// Admin Log in
$(document).on("submit","#examineeLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Invalid',
          'Please input valid email / password',
          'error'
        )
      }
      else if(data.res == "success")
      {
        $('body').fadeOut();
        window.location.href='home.php';
      }
   },'json');

   return false;
});




// Submit Answer
$(document).on('submit', '#submitAnswerFrm', function(){
  var examAction = $('#examAction').val();

  if(examAction != "")
  {
    Swal.fire({
    title: 'Time Out',
    text: "Your time is over, please click ok",
    icon: 'warning',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'OK!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Already Attempted',
         "You have already taken this exam.",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Submission Success',
            text: "Your answers are Evaluated!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something went wrong!",
         'error'
       ) 
    }

   },'json');

}
});
  }
  else
  {
      Swal.fire({
    title: 'Are you sure?',
    text: "Do you want to submit your answers now?",
    icon: 'warning',
    showCancelButton: true,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, submit now!'
}).then((result) => {
if (result.value) {

   $.post("query/submitAnswerExe.php", $(this).serialize(), function(data){

    if(data.res == "alreadyTaken")
    {
       Swal.fire(
         'Already Attempted',
         "You have already taken this exam.",
         'error'
       ) 
    }
    else if(data.res == "success")
    {
        Swal.fire({
            title: 'Submission Success',
            text: "Your answers are Evaluated!",
            icon: 'success',
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK!'
        }).then((result) => {
        if (result.value) {
          $('#submitAnswerFrm')[0].reset();
           var exam_id = $('#exam_id').val();
           window.location.href='home.php?page=result&id=' + exam_id;
        }

        });


    }
    else if(data.res == "failed")
    {
     Swal.fire(
         'Error',
         "Something went wrong!",
         'error'
       ) 
    }

   },'json');

}
});
  }








return false;
});


// Submit Feedbacks
$(document).on("submit","#addFeebacks", function(){
   $.post("query/submitFeedbacksExe.php", $(this).serialize(), function(data){
      if(data.res == "limit")
      {
        Swal.fire(
          'Error',
          'You have already responded.',
          'error'
        )
      }
      else if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'Your feedback has been recorded successfully. Thank you!',
          'success'
        )
          $('#addFeebacks')[0].reset();
        
      }
   },'json');

   return false;
});

