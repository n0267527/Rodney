<?php
    $con = mysql_connect("www.freesql.org","ntupd2","P@ssw0rd");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    // some code
    
    
    ?>
<html>
<head>

</head>
<body>

</body>
</html>
<?php
mysql_close($con);
?>