<?php
	include('connect.php');
	
	extract($_POST);

	if(isset($_POST['Binsend']) && isset($_POST['Binweightsend'])) {
    // Assuming $con is your database connection object

    $Binsend = mysqli_real_escape_string($con, $_POST['Binsend']);
    $Binweightsend = mysqli_real_escape_string($con, $_POST['Binweightsend']);

    $sql = "INSERT INTO admin_option (Bin_Size, Empty_Bin_Weight)
            VALUES ('$Binsend', '$Binweightsend')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//insert user into database

include('connect.php');
	
	extract($_POST);
	
	if(isset($_POST['Namesend']) && isset($_POST['Emailsend']) &&isset($_POST['UserNamesend'])) {
    // Assuming $con is your database connection object

    $Namesend = mysqli_real_escape_string($con, $_POST['Namesend']);
    $Emailsend = mysqli_real_escape_string($con, $_POST['Emailsend']);
    $UserNamesend = mysqli_real_escape_string($con, $_POST['UserNamesend']);

    $sql = "INSERT INTO users (Name, Email, UserName)
            VALUES ('$Namesend', '$Emailsend', '$UserNamesend')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//insert upload into database
include('connect.php');
	
	extract($_POST);
	
	if(isset($_POST['GrowerNamesend']) && isset($_POST['UploadingIDsend']) &&isset($_POST['TimeAddedsend']) && isset($_POST['Statussend'])) {
    // Assuming $con is your database connection object

    $GrowerNamesend = mysqli_real_escape_string($con, $_POST['GrowerNamesend']);
    $UploadingIDsend = mysqli_real_escape_string($con, $_POST['UploadingIDsend']);
    $TimeAddedsend = mysqli_real_escape_string($con, $_POST['TimeAddedsend']);
    $Statussend = mysqli_real_escape_string($con, $_POST['Statussend']);

    $sql = "INSERT INTO upload (Grower_Name, Uploading_ID, Time_Added, Status)
        VALUES ('$GrowerNamesend', '$UploadingIDsend', '$TimeAddedsend', '$Statussend')";


    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

//insert Notes into database

include('connect.php');
	
	extract($_POST);

	if(isset($_POST['Messagesend'])) {
    // Assuming $con is your database connection object

    $Messagesend = mysqli_real_escape_string($con, $_POST['Messagesend']);
    

    $sql = "INSERT INTO notes (Message)
            VALUES ('$Messagesend')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

// insert data receivals into database

//insert upload into database
include('connect.php');
	
	extract($_POST);
	
	if(isset($_POST['Growernamesend']) && isset($_POST['Growergroupsend']) &&isset($_POST['Time_Addedsend']) && isset($_POST['Paddocksend'])) {
    // Assuming $con is your database connection object

    $GrowerNamesend = mysqli_real_escape_string($con, $_POST['GrowerNamesend']);
    $Growergroupsend = mysqli_real_escape_string($con, $_POST['Growergroupsend']);
    $Time_Addedsend = mysqli_real_escape_string($con, $_POST['Time_Addedsend']);
    $Paddocksend = mysqli_real_escape_string($con, $_POST['Paddocksend']);

    $sql = "INSERT INTO receivals (Grower_Name, Grower_Group, Time_Added, Paddock)
        VALUES ('$Growernamesend', 'Growergroupsend', '$Time_Addedsend', '$Paddocksend')";


    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

	


?>