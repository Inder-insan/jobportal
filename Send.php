<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    $Id = $_GET['Id'];
    $Email = $_GET['Email'];
    // Establish Connection with MYSQL
    $con = mysqli_connect("localhost", "root");
    // Select Database
    mysqli_select_db("job", $con);
    // Specify the query to Update Record
    $sql = "Update Application_Master set Status='Call Latter Send' where ApplicationId=" . $Id . "";
    // Execute query
    mysqli_query($sqli, $con);
    // Close The Connection
    mysqli_close($con);
    echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'Application.php\';</script>';
    ?>
</body>

</html>