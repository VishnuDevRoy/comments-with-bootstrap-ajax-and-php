
<?php
     $conn=mysqli_connect("localhost","root","","meetproject");
     extract($_POST);
       if(empty($name))
       {
          echo "Please Enter Your Name";
          
       }elseif(empty($email)){
            echo "Please Enter Your Email";
       }elseif (!stristr($email,"@") OR !stristr($email,".")) {
       	echo "Please Enter Your Valid Email";
       }

       elseif(empty($comments)){
         echo "Please Enter Your Comments";
       }
       elseif (!empty($name) AND !empty($email) AND !empty($comments)) {
       	$sql1="INSERT INTO comments(name,email,comm)
          VALUES ('$name','$email','$comments');";
          mysqli_query($conn,$sql1);
          echo "Comment Submited";
       }
  ?>