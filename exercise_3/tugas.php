<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa-10x {
            font-size: 5em;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <h1>Tugas</h1>
            <ul>
                <li>buat cards dengan perkalian 4 sd 6</li>
                <li>icon dengan font awesome archive</li>
                <li>jika hasil bisa dibagi 3 dan 5 maka berwarna kuning</li>
                <li>jika hasil bisa dibagi 5 maka berwarna biru</li>
                <li>jika hasil bisa dibagi 4 maka berwarna hijau</li>
                <li>jika tidak memenuhi syarat diatas maka berwarna merah</li>
            </ul>
            <?php 
                for ($perkalian = 4; $perkalian  <= 6 ; $perkalian ++) { 
                    for ($i=1; $i <= 10; $i++) { 
                        $hasil = $i * $perkalian;
                        if ($hasil % 3 == 0 && $hasil % 5 == 0) {
                            $color = 'text-warning';
                        } else if ($hasil % 5 == 0) {
                            $color = 'text-primary';
                        } else if ($hasil % 4 == 0) {
                            $color = 'text-success';
                        } else {
                            $color = 'text-danger';
                        }
    
                        echo '
                            <div class="col-3 mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fa fa-archive fa-10x '.$color.'" aria-hidden="true"></i>
                                            </div> 
                                            <div class="col-6">
                                                <h3 class="card-title '.$color.'">'.$i.' * '.$perkalian.' = '.($hasil).'</h3>
                                            </div>        
                                        </div>        
                                    </div>
                                </div>
                            </div>                    
                        ';
                    }
                }
            ?>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>