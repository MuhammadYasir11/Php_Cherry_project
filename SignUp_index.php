<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>SignUp Details</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/style.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/animate.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/hover.css" />
</head>
<body>
	<div class="container">
	  <a href="Signup.php" class="btn btn-primary" style="margin-top: 35px;">Add Signup User</a>

	  	<table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th> 
                        <th scope="col">FirstName</th>                       
                        <th scope="col">Email</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
        $sql = "select * from signup" ;
        $result =mysqli_query($con,$sql);
        if($result){
        while ($row=mysqli_fetch_assoc($result)) {
 
            ?>
<!--Fetch the Records -->
                    <tr>
                        <td><?php  echo $row['id'];?></td>
                        <td><?php  echo $row['FirstName'];?></td>
                        <td><?php  echo $row['email'];?></td>                        
                        <td><?php  echo $row['LastName'];?></td>
                        <td><?php  echo $row['password'];?></td>
                        <td>
         <a href="read.php?viewid=<?php echo htmlentities ($row['id']);?>" class="view" title="View" data-toggle="tooltip"><i class="material-icons"></i></a>

         <a href="SignUp_update.php?editid=<?php echo ($row['id']);?>" class="btn btn-primary" title="Edit" data-toggle="tooltip"><i class="material-icons"></i>Edit</a>                      
          
          <a href="SignUp_delete.php?delid=<?php echo ($row['id']);?>" class="btn btn-danger" title="Delete" data-toggle="tooltip" ><i class="material-icons"></i>Delete</a>

				</td>
				 </tr>
				<?php 
				
				} } else {?>
				<tr>
				<th style="text-align:center; color:red;" colspan="6">No Record Found</th>
				</tr>
				<?php } ?>                 
              
</tbody>
 </table>
	</div>





      <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>
</body>
</html>