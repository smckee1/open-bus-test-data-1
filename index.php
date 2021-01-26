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
echo "<p>Fast timing between timing points</p>
";
$path = "/app/testdata/Fast timing between timing points";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Fast timing between timing points/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Stop(s) are not found in NaPTAN</p>
";
$path = "/app/testdata/Stop(s) are not found in NaPTAN";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Stop(s) are not found in NaPTAN/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>First stop is not a timing point</p>
";
$path = "/app/testdata/First stop is not a timing point";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/First stop is not a timing point/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Last stop is not a timing point</p>
";
$path = "/app/testdata/Last stop is not a timing point";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Last stop is not a timing point/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>First stop is found to be set down only</p>
";
$path = "/app/testdata/First stop is found to be set down only";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/First stop is found to be set down only/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Last stop is found to be pick up only (BODP cannot recognize)</p>
";
$path = "/app/testdata/Last stop is found to be pick up only (BODP cannot recognize)";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Last stop is found to be pick up only (BODP cannot recognize)/$file'>$file</a><br /><br />";
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
echo "<p>Incorrect stop type</p>
";
$path = "/app/testdata/Incorrect stop type";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Incorrect stop type/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Slow timing between timing points</p>
";
$path = "/app/testdata/Slow timing between timing points";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Slow timing between timing points/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Slow running time between stops</p>
";
$path = "/app/testdata/Slow running time between stops";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Slow running time between stops/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>No timing point for more than 30 minutes</p>
";
$path = "/app/testdata/No timing point for more than 30 minutes";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/No timing point for more than 30 minutes/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Same stop is found multiple times</p>
";
$path = "/app/testdata/Same stop is found multiple times";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Same stop is found multiple times/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Duplicate journey(s) has been found</p>
";
$path = "/app/testdata/Duplicate journey(s) has been found";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Duplicate journey(s) has been found/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Fast running time between stops</p>
";
$path = "/app/testdata/Fast running time between stops";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Fast running time between stops/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 

<?php
echo "<p>Journey overlap</p>
";
$path = "/app/testdata/Journey overlap";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Journey overlap/$file'>$file</a><br /><br />";
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
echo "<p>Cache data</p>
";
$path = "/app/testdata/Cache data";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Cache data/$file'>$file</a><br /><br />";
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

<?php
echo "<p>Expired timetable</p>
";
$path = "/app/testdata/Expired timetable";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='/testdata/Expired timetable/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 