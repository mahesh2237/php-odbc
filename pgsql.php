<?php
$pg_conn = pg_connect("host=localhost port=5432 dbname=test_db user=test password=123456789");

if(!$pg_conn)
{
    die("Unable to connect to DB, With ODBC");
}


$sql = "select * from students";

$res = pg_query($pg_conn,$sql);

$rows = array();
while($row = pg_fetch_array($res))
{
    $rows[] = $row;
}

?>
<table border="1" style="width:100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
    </tr>
    <?php
   foreach($rows as $r)
   {
    echo '<tr>
    <td>'.$r['id'].'</td>
    <td>'.$r['name'].'</td>
    <td>'.$r['city'].'</td>
      </tr>';
   }
    ?>
</table>
<p>For MySQL ODBC Connection please <a href="index.php">click here</a></p>
<p>For SIMPLE PGSQL Connection please <a href="pgsql.php">click here</a></p>
<p>For ODBC PGSQL Connection please <a href="pgsql-odbc.php">click here</a></p>

