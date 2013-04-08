<html>
<body>

<?php

mysql_connect ('10.33.16.61', 'root', 'mfhncolz');

mysql_select_db ('test');
$fname = $_GET["fname"];
$lname = $_GET["lname"];
    
if ($fname == "")
{$fname = '%';}

if ($lname == "")
{$lname = '%';}

$result = mysql_query ("SELECT * FROM identity   
    WHERE fname LIKE '$fname%'
        AND lname LIKE '$lname%'
            ");

if ($row = mysql_fetch_array($result)) {

    do {
            print $row["fname"];
                print (" ");
                print $row["lname"];
                print (" ");
                print $row["id"];
                    print("<p>");
    } while($row = mysql_fetch_array($result));
} else {print "Sorry, no records were found!";
}

?>

</body>
</html>
