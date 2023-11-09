<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Parts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>View Parts</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Parts</th>
                    <th>Package</th>
                    <th>Tipe</th>
                    <th>Merek</th>
                    <th>Jenis</th>
                    <th>Spesifikasi</th>
                    <th>Keterangan Spesifikasi</th>
                    <th>Harga Jual</th>
                    <th>Foto</th>
                    <th>Catatan</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // SQL query to retrieve data
                $sql = "SELECT * FROM parts";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nama_parts"] . "</td>";
                        echo "<td>" . $row["package_parts"] . "</td>";
                        echo "<td>" . $row["tipe_parts"] . "</td>";
                        echo "<td>" . $row["merek_parts"] . "</td>";
                        echo "<td>" . $row["jenis_parts"] . "</td>";
                        echo "<td>" . $row["spesifikasi_parts"] . "</td>";
                        echo "<td>" . $row["ket_spesifikasi_parts"] . "</td>";
                        echo "<td>" . $row["harga_jual_parts"] . "</td>";
                        echo "<td><img src='uploads/{$row["foto_parts"]}' alt='Product Image' width='100'></td>";
                        echo "<td>" . $row["catatan_parts"] . "</td>";
                        echo "<td>" . $row["stock_parts"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
