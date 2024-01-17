<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css' integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==' crossorigin='anonymous'/>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <?php 
                for ($perkalian=4; $perkalian <= 6 ; $perkalian++) { 
                    for ($i=1; $i <= 10; $i++) { 
                        $result = $i * $perkalian;

                        if (($result % 3 == 0) && ($result % 5 == 0)) {
                            $class = "warning";
                        } else if($result % 5 == 0){
                            $class = "primary";
                        } else if ($result % 4 == 0){
                            $class = "success";
                        } else {
                            $class = "danger";
                        }

                        echo '
                            <div class="col-4">
                                <div class="card text-start">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fa fa-archive fa-2x text-'.$class.'" style="font-size:5em" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-6 text-'.$class.'">
                                            <h1>'.$i.' * '.$perkalian.' = '.$result.'</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>