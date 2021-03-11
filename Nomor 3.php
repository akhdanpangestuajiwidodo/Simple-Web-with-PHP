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
    <form method=GET action="">
    Nama : <input type="text" name=nama><br>
    Password : <input type="text" name=password><br>
    <input type="submit" name=submit>
    </form>
    <?php
    if(isset($_GET["submit"])){
        $nama=$_GET["nama"];
        $password = $_GET["password"];
        echo $nama."<br>";
        echo $password;
    
    }
    ?>
</body>