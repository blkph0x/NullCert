<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Nullsec PKI Writen by BlkPh0x">
<meta name="theme-color" content="#317EFB"/>
<head>
<center><title>Nullsec PKI</title></center>
<style>
strong,h1 {

  text-align: center;

}
.top {
text-align:left;
max-width: 100%;
height: auto;
width: auto\9; /* ie8 */
}
.tables {
display: inline-block;
align:center;
max-width: 100%;
height: auto;
width: auto\9; /* ie8 */
}
table, th, td {
  border: 1px solid black;

}

</style>
</head>
<body>
<div class="top">
<strong>All certificates require Authentication!</strong>
</div>
<div class="tables">
<table>
        <tr>
                <td>
                        <h1>Nullsec PKI</h1>
                <p>
                <table style="witdth:100%">
                        <th>Users</th>
                        <th>Certificates</th>
        

<?php
/*place ovpn certificates there formate {name}.ovpn */
if ($handle = opendir('./certs')) {



    while (false !== ($entry = readdir($handle))) {



        if ($entry != "." && $entry != "..") {

            $name = explode(".", $entry);
            print '<tr>';
            print '<td>' . $name[0] . '</td>';
            print '<td> <a href="/certs/' . $name[0] . '.ovpn' . '" download>Click here to download</a> </td>';
            print '</td></tr>';
            

        }

    }



    closedir($handle);

}
?>
</table>
</div>
</body>
</html>

