<head>
<style>
form{
    padding : 20px;
}
table{
    border:1px solid black;
    rules:none;
}
td{
    width:500px;
}
</style>
</head>
<body>
    <form method=POST action="">
    Nama : <input type="text" name=nama><br>
    NIM : <input type="text" name=nim><br>
    Kelas : <select name="kelas" id="" ><br>
    <option value="">--Pilih Kelas--</option>
    <option value="D3IF-43-01">D3IF-43-01</option>
    <option value="D3IF-43-02">D3IF-43-02</option>
    <option value="D3IF-43-03">D3IF-43-03</option>
    <option value="D3IF-43-04">D3IF-43-04</option>
    </select> <br>
    <input type="submit" name = submit>
    </form>
    <h1>Hasilnya</h1>

    <?php
    if(isset($_POST["submit"])){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $nim = $_POST["nim"];
        $data = $nama.' '.$nim.' '.$kelas;
        $data2 = wordwrap($data,7,"<br/>\n",true);
        $data3 = strlen($data);
        $data4 = substr($nim,4,2);
        $data5 = date('l d-m-y');
        $data6 = date('H:i:s');
        switch($data4){
            case 19:
                $data4 = "Angkatan 2019";
            break;
            case 18:
                $data4 = "angkatan 2018";
            break;
            case 17:
                $data4 = "angkatan 2017";
            break;
            default:
            $data4 = "Anda Bukan Mahasiswa IF";
        break;
        }

        if(substr($nim,4,2)%2==0){
            $data7="Genap";
        }if(substr($nim,4,2)%2==1){
            $data7="Ganjil";
        }

        if(empty($nama) || empty($nim) ||empty($kelas)){
            echo ("<h1>Anda harus memasukkan semua input</h1>");
        }else{
           echo 
           '<table>
           <tr>
           <td>ini adalah tampilan awal :</td>
           <td>'.$data.'</td>
           </tr>
           <tr>
           <td>Baris baru setelah string ke-7 :</td>
           <td>'.$data2.'</td>
           </tr>
           <tr>
           <td>Panjang string keseluruhan adalah:</td>
           <td>'.$data3.'</td>
           </tr>
           <tr>
           <td>Mengambil kata pada index yang ke-2 :</td>
           <td>'.$nim.'</td>
           </tr>
           <tr>
           <td>Angkatan :</td>
           <td>'.$data4.'</td>
           </tr>
           <tr>
           <td>NIM anda adalah :</td>
           <td>'.strrev($data7).'</td>
           </tr>
           <tr>
           <td>Anda mengerjakan pada tanggal :</td>
           <td>'.$data5.'</td>
           </tr>
           <tr>
           <td>Pukul :</td>
           <td>'.$data6.'</td>
           </tr>
           <tr>
           <td></td>
           <td>';
           for($i=1;$i<=4;$i++){
               for($j=1;$j<=16;$j++){
                   if($i==1||$i==4||$j==1||$j==16){
                       echo "* ";
                   }else{
                       echo "&nbsp&nbsp ";
                   }
               }
               echo "<br>";
           }
           
           echo '</td>
           </tr>
           </table>';
        }
    }
    ?>
</body>