<?php
$od_conn = odbc_connect("MySQL_DSN32BIT","root","");

if(!$od_conn)
{
    die("Unable to connect to DB, With ODBC");
}

$sql = "select * from students";

$res = odbc_exec($od_conn,$sql);

if(!$res)
{
    die("Unable to get Resource");
}
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
<p>For MSSQL ODBC Connection please <a href="mssql.php">click here</a></p>
<p>For SIMPLE PGSQL Connection please <a href="pgsql.php">click here</a></p>
<p>For ODBC PGSQL Connection please <a href="pgsql-odbc.php">click here</a></p>

