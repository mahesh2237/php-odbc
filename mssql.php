<?php
$od_conn = odbc_connect("MyNewSQLServer23","test","123456789");

//Driver={SQL Server Native Client 10.0};Server=$server;Database=$database;", $user, $password
if(!$od_conn)
{
    die("Unable to connect to DB, With ODBC");
}

$sql = "select * from students";

$res = odbc_exec($od_conn,$sql);

$rows = array();
while($row = odbc_fetch_array($res))
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

