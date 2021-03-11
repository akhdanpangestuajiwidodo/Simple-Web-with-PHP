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
    $nama = "Akhdan Pangestuaji";
    $nama1 = substr($nama,1,6);
    $nama2 = strtolower($nama);
    $nama3 = strtoupper($nama);
    $nama4 = substr_replace($nama,'ow',3,1);
    $nama5 = str_replace($nama,'','Ganteng');
    $nama6 = md5($nama);
    $nama7 = str_shuffle($nama);
    $nama8 = str_word_count($nama);
    $nama9 = strcspn($nama,'k');
    $nama10 = strlen($nama);
    $nama11 = trim($nama,"Akh");

    echo '<table>
    <tr>
    <td>Nama Asli</td>
    <td>'.$nama.'</td>
    </tr>
    <tr>
    <td>Fungsi substr()</td>
    <td>'.$nama1.'</td>
    </tr>
    <tr>
    <td>Fungsi strtolower()</td>
    <td>'.$nama2.'</td>
    </tr>
    <tr>
    <td>Fungsi strtoupper()</td>
    <td>'.$nama3.'</td>
    </tr>
    <tr>
    <td>Fungsi substr_replace()</td>
    <td>'.$nama4.'</td>
    </tr>
    <tr>
    <td>Fungsi str_replace()</td>
    <td>'.$nama5.'</td>
    </tr>
    <tr>
    <td>Fungsi md5()</td>
    <td>'.$nama6.'</td>
    </tr>
    <tr>
    <td>Fungsi str_replace()</td>
    <td>'.$nama7.'</td>
    </tr>
    <tr>
    <td>Fungsi str_word_count()</td>
    <td>'.$nama8.'</td>
    </tr>
    <tr>
    <td>Fungsi strcspn()</td>
    <td>'.$nama9.'</td>
    </tr>
    <tr>
    <td>Fungsi strlen()</td>
    <td>'.$nama10.'</td>
    </tr>
    <tr>
    <td>Fungsi trim()</td>
    <td>'.$nama11.'</td>
    </tr>
    </table>';
    ?>
</body>