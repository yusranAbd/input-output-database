    <?php
    include "koneksi.php";
    $panggil_data = mysqli_query($koneksi, "SELECT*FROM mahasiswa");
    echo "<h4>Data Mahasiswa</h4>";
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>NPM</th>";
    echo "<th>Kelas</th>";
    echo "<th>Kemampuan</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($panggil_data, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>", $row['Nama'], "</td>";
        echo "<td>", $row['NPM'], "</td>";
        echo "<td>", $row['Kelas'], "</td>";
        echo "<td>", $row['kemapuan'], "</td>";
        echo "<tr>";
    }

    echo "</table>";
    ?>
