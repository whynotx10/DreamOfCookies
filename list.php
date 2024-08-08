<table>
    <tr>
        <th>item</th>
        <th>name</th>
        <th>phone</th>
    </tr>


<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("127.0.0.1", "root", "1", "cookies");

/* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */
$result = $mysqli->query("SELECT * FROM requests;", MYSQLI_USE_RESULT)->fetch_all();

foreach ($result as $r) {
    ?> <tr>
        <th><?php echo $r[1]?></th>
        <th><?php echo $r[2]?></th>
        <th><?php echo $r[3]?></th>
    </tr><?php
}
?></table>
