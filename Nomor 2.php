<head>
<style>
table,th,td{
    padding:2px;
    border:1px solid black;
}
</style>
</head>
<body>
    <?php
    $nama = "__Akhdan Pangestuaji__";
    $nama1 = ltrim($nama,"__");
    $nama2 = rtrim($nama,"__");

    
    echo "<br><br>";
    echo '<table>
    <tr>
    <td>Nama Asli</td>
    <td>__Akhdan Pangestuaji__</td>
    </tr>
    <tr>
    <td>ltrim()</td>
    <td>'.$nama1.'</td>
    </tr>
    <tr>
    <td>rtrim()</td>
    <td>'.$nama2.'</td>
    </tr>
    </table>';
    
    ?>
</body>