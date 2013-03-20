<html>
<body>

<?php

mysql_connect (10.33.16.70:3306, root, dkmdxtif);

mysql_select_db (test);

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
                    print("<p>");
    } while($row = mysql_fetch_array($result));
} else {print "Sorry, no records were found!";
}

?>

</body>
</html>
