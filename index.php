<?php
require_once __DIR__ . "/proses.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <style>
        .input-group-append {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- MODAL ADD STUDENT -->
    <div class="modal" tabindex="-1" id="add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Smartphone</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses.php" method="post">
                        <div class="mb-3">
                            <label>Kode Smartphone</label>
                            <input type="text" name="kode_hp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Seri Smartphone</label>
                            <input type="text" name="seri_hp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Merk Smartphone</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Pilih Merk</option>
                                <option value="samsung">Samsung</option>
                                <option value="iphone">iPhone</option>
                                <option value="oppo">Oppo</option>
                                <option value="vivo">Vivo</option>
                                <option value="xiaomi">Xiaomi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Ukuran Layar</label>
                            <input type="text" name="ukuran_layar" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Kamera Depan</label>
                            <input type="text" name="kamera_depan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Kamera Belakang</label>
                            <input type="text" name="kamera_belakang" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Launching</label>
                            <div class="input-group date" id="datepicker">
                                <input type="text" name="tanggal_launching" class="form-control" id="date" />
                                <span class="input-group-append">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" name="save_hp" type="submit">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Master Smartphone</h4>
                        <a href="#add" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#add">Tambah
                            Smartphone</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Kode Smartphone</th>
                                    <th>Seri Smartphone</th>
                                    <th>Merk Smartphone</th>
                                    <th>Ukuran Layar</th>
                                    <th>Kamera Depan</th>
                                    <th>Kamera Belakang</th>
                                    <th>Tanggal Launching</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($smartphones as $smartphone) { ?>
                                    <tr>
                                        //
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>
    <script>
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: '-7d'
        });
    </script>
</body>

</html>