<!doctype html>
<html lang="en">
  <head>
    <title>Du An Mau</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="../fontawesome-free-5.13.0-web/css/all.min.css">
  </head>
  <body>
  <div class="container-fluid m-0 pl-0">
    <div class="row" id="ctrl">
        <div class="col-md-3">
        <div class="bg-admin1">
            <nav class="navbar navbar-expand-sm navbar-dark bg-warning">
          <a class="navbar-brand" href="home.html"> HOARIENT</a>
          </nav>
            <div class="accordion mt-4" id="accordionExample">
                <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-align-left"></i> <a href="index.php?ctrl=catalog&page=index">Danh Mục</a>
                                </button>
                            </h2>
                        </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-gifts"></i> Sản Phẩm
                            </button>
                        </h2>
                    </div>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <a class="dropdown-item" href="add-product"><i class="fas fa-plus"></i> Add Product</a>
                        </div>
                        <div class="card-body">
                            <a class="dropdown-item" href="manager-product"><i class="fas fa-tasks"></i> manager Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" id="dm" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <i class="fas fa-users"></i>  Khách hàng
                            </button>
                        </h2>
                    </div>
            </div>
            <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <i class="fas fa-comment"></i>   Bình luận
                            </button>
                        </h2>
                    </div>
            </div>
            <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            <i class="fas fa-chart-pie"></i>  Thống kê
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a class="dropdown-item" href="thong-ke"><i class="fas fa-chart-bar"></i> Thống kê</a>
                      </div>
                    </div>
            </div>
        </div>
         
        </div>
        <div class="col-md-8 p-0">
                <div class="container m-0 p-0">
                    <?php
                $ctrl='home';
                if(isset($_GET['ctrl'])){
                  $ctrl=$_GET['ctrl'];
                }
                include "controller/".$ctrl.".php";
              ?>
                </div>
            </div>
    </div>
  </div>




    <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a class="navbar-brand" href="home.html"> Admin Management</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php?ctrl=catalog&page=index">Danh mục</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sản Phẩm
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="add-product">Add Product</a>
                <a class="dropdown-item" href="manager-product">manager Product</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bình luận</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="thong-ke">Thống kê</a>
            </li>
            </ul>

        </div>
    </nav> -->
    <!-- end container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
