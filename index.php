<html>
<head>
<title>PHP Test</title>
</head>
<body>

<?php

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry\n";
        }
    }

    closedir($handle);
}
?>

</body>
</html>