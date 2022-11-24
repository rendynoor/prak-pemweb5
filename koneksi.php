<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "prak-pemweb5";

    $connection = mysqli_connect($host, $user, $password, $dbName);

    if(!$connection){
        die("Koneksi gagal : ".mysqli_connect_error());
    }
?>
<table border="1">
    <tr>
        <th> No. </th>
        <th> NIM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>
    <?php
    $query = "SELECT * FROM mahasiswa WHERE prodi='".$_POST['prodi']."'";
    $result = mysqli_query($connection, $query);
    $i = 0;
    while ($data = mysqli_fetch_array($result)) :
        $i++;
    ?>
        <tr>
            <td> <?= $i ?> </td>
            <td> <?= $data["nim"] ?> </td>
            <td> <?= $data["nama"] ?> </td>
            <td> <?= $data["prodi"] ?> </td>
        </tr>
    <?php
        endwhile
    ?>
</table>