<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">
</head>

<body>
    <!-- navbar-->
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand container fw-bolder" href="#">IT INDEPENDENT SCHOOL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end container" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Mobile Developer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Web Developer</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data Security
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar-->

    <!--Jumbotron-->
    <main style="margin-top: 80px ;" class="container">
        <div class="p-5 mb-4 bg-light rounded-3 mt-auto">
            <div class="container-fluid py-5">
                <h4 class="">Information Technology</h4>
                <p class="col-md-8">Teknologi Informasi adalah istilah umum untuk teknologi apa pun yang membantu
                    manusia dalam
                    membuat, mengubah, menyimpan, mengomunikasikan
                    dan/atau menyebarkan informasi. TI menyatukan komputasi dan komunikasi berkecepatan tinggi untuk
                    data, suara, dan video.
                    Contoh dari Teknologi Informasi bukan hanya berupa komputer pribadi, tetapi juga telepon, TV,
                    peralatan rumah tangga
                    elektronik, dan peranti genggam modern.</p>
                <button class="btn btn-primary btn-sm" type="button">Example button</button>
            </div>
        </div>


        <footer class="pt-3 mt-4 text-muted border-top" style="display: fixed; bottom: 0px; ">
            &copy; 2022
        </footer>
        </div>
    </main>
    <!--Akhir Jumbotron-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>