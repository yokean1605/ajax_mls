<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <title>Ajax</title>
    </head>
    <body>
        <div class="app-web">
            <div class="container">
                <h3>Membuat Input Data Ke Database Tanpa Reload dengan Ajax Jquery</h3>
                <div class="row">
                    <div class="col-8">
                        <form method="post" action="aksi.php" class="form-user">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" class="form-control" type="text" placeholder="Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input id="pekerjaan" class="form-control" type="text" placeholder="Pekerjaan" name="pekerjaan">
                            </div>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
                <div class="tampil-data">

                </div>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.form-user').submit(function(e){
                    e.preventDefault();
                    var data = $('.form-user').serialize();
                    $.ajax({
                        type   : "POST",
                        url    : "aksi.php",
                        data   : data,
                        success: function () {
                            $('.tampil-data').load('tampil.php');
                            alert("success");
                        }
                    });
                });
                $('.tampil-data').load('tampil.php');
            });
        </script>
    </body>
</html>