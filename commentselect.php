<?php
     
           $conn=mysqli_connect("localhost","root","","meetproject");
           $sql="SELECT * FROM comments ORDER BY id DESC ";
           $result=mysqli_query($conn,$sql);
           $output="";
           
           while($row=mysqli_fetch_assoc($result)){
           
                   $output.='<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>
                  '.$row["comm"].'<br><br>Name:'.$row["name"].'<br>Email:'.$row["email"].'
                  </div>';

                }
            echo $output;  
?>