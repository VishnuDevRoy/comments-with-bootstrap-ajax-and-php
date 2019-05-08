<!DOCTYPE html>
<html>
<head>
 <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
        <h1 class="display-3">Lorem Ipsum</h1>
        <p class="lead text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <hr class="my-4">
        <p>Write Your Comments</p>
        <input type="text" name="" id="name" class="form-control" placeholder="Enter Your Name" required>
        <br>
        <input type="text" name="" id="email" class="form-control" placeholder="Enter Your Email" required>
        <br>
        <textarea class="form-control" id="comments" placeholder="Write Your Comments Here....." style="height: 200px;" maxlength="250" required></textarea>
        <br>
        <input type="button" name="" id="Submit" value="Submit" class="btn btn-success" >

        <br>
        <br>
        <div id="commentsdata"></div>

</div>
</div>
<script type="text/javascript">
$( document ).ready(function() {
     readcomments(); 

     
}); 
function readcomments()
{
	$.get("commentselect.php", {}, function (data, status) {
        $("#commentsdata").html(data);
    });
}

</script>
<script type="text/javascript">
     $('#Submit').click(function(){
     	var name= $('#name').val();
     	var email = $('#email').val();
     	var comments= $('#comments').val();
     	
     	$.post("commentsubmit.php", {name:name,email:email,comments:comments}, function (data, status) {
     		alert(data);
        readcomments();
      });

     });
 </script>

</body>
</html>