<?php

?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Request Parts saya ubah kembali yaa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">

        <form action="simpan_data.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <h2>Form Request Parts</h2>
                <div class="form-group">
                    <label for="nama_parts">Nama Parts :</label>
                    <input type="text" class="form-control" id="nama_parts" name="nama_parts" placeholder="Masukkan nama parts">
                </div>
            </div>

        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipe_parts">Tipe :</label>
                    <input type="text" class="form-control" id="tipe_parts" name="tipe_parts" placeholder="Masukkan package parts">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="package_parts">Package :</label>
                    <input type="text" class="form-control" id="package_parts" name="package_parts" placeholder="Masukkan package parts">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_list_merek_parts">Nama Merek :</label>
                    <select class="form-control" id="id_list_merek_parts" name="id_list_merek_parts">
                        <option disabled selected value="">Silahkan pilih merek</option>
                        <?php
                        // Sambungkan ke database Anda (gunakan 'koneksi.php')
                        include 'koneksi.php';

                        // Query untuk mengambil data merek_parts dari tabel 'list_merek_parts'
                        $query = "SELECT id, nama_merek FROM list_merek_parts";
                        $result = $conn->query($query);

                        // Loop untuk menampilkan opsi select list
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['nama_merek'] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No data available</option>";
                        }

                        // Tutup koneksi ke database
                        $conn->close();
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_list_jenis_parts">Nama jenis :</label>
                    <select class="form-control" id="id_list_jenis_parts" name="id_list_jenis_parts">
                        <option disabled selected value="">Silahkan pilih jenis</option>
                        <?php
                        // Sambungkan ke database Anda (gunakan 'koneksi.php')
                        include 'koneksi.php';

                        // Query untuk mengambil data jenis_parts dari tabel 'list_jenis_parts'
                        $query = "SELECT id, nama_jenis FROM list_jenis_parts";
                        $result = $conn->query($query);

                        // Loop untuk menampilkan opsi select list
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['nama_jenis'] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No data available</option>";
                        }

                        // Tutup koneksi ke database
                        $conn->close();
                        ?>
                    </select>
                </div>
            </div>

            
            
            <div class="col-md-6">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
    </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="path/to/select2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#id_list_jenis_parts').select2();
    });
</script>
<script>
    $(document).ready(function() {
        $('#id_list_merek_parts').select2();
    });
    </script>


</body>

</html>