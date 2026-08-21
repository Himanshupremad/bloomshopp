<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        .all {
            display: flex;
            justify-content: space-around;
        }

        .space {
            width: 375px;
            border-radius: 80px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid all">
                <div class="d-flex">
                    <a class="navbar-brand" href="#">BLOOM<span style="color: #f59e0b;">SHOP</span></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact</a>
                        </li>

                    </ul>
                </div>
                <div>
                    <form>
                        <div class="space">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </div>

                    </form>
                </div>
                <div>
                    <i class="bi bi-cart2"></i>
                    <button class="btn btn-outline-success" type="submit">sign in</button>
                    <button class="btn btn-outline-success" type="submit">sign up</button>
                </div>

            </div>
        </nav>

    </div>

</body>

</html>