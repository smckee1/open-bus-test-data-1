<?php include_once("home.html")	
?> 

<?php
echo "<p>Timetable large zip</p>
";
$path = "/app/testdata/Timetable large zip";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Timetable large zip/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>66mb Timetable</p>
";
$path = "/app/testdata/66mb Timetable";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/66mb Timetable/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Incorrect NOC code</p>
";
$path = "/app/testdata/Incorrect NOC code";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Incorrect NOC code/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Missing stops</p>
";
$path = "/app/testdata/Missing stops";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Missing stops/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>No timing point for more than 15 minutes</p>
";
$path = "/app/testdata/No timing point for more than 15 minutes";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/No timing point for more than 15 minutes/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Missing destination display</p>
";
$path = "/app/testdata/Missing destination display";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Missing destination display/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Expired lines</p>
";
$path = "/app/testdata/Expired lines";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Expired lines/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Missing Block Number</p>
";
$path = "/app/testdata/Missing Block Number";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Missing Block Number/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Missing National Operator Code</p>
";
$path = "/app/testdata/Missing National Operator Code";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Missing National Operator Code/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>DQ zip</p>
";
$path = "/app/testdata/DQ zip";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/DQ zip/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Shared python results</p>
";
$path = "/app/testdata/Shared python results";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Shared python results/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Siri SM</p>
";
$path = "/app/testdata/Siri SM";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Siri SM/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Siri VM request</p>
";
$path = "/app/testdata/Siri VM request";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Siri VM request/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Siri VM response</p>
";
$path = "/app/testdata/Siri VM response";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Siri VM response/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Siri VM request simple</p>
";
$path = "/app/testdata/Siri VM request simple";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Siri VM request simple/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Siri VM response simple</p>
";
$path = "/app/testdata/Siri VM response simple";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Siri VM response simple/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Fare NWBT</p>
";
$path = "/app/testdata/Fare NWBT";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Fare NWBT/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Fare STBC</p>
";
$path = "/app/testdata/Fare STBC";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Fare STBC/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Fares zip</p>
";
$path = "/app/testdata/Fares zip";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Fares zip/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 
