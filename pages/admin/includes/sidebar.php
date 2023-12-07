<div class="sidebar pe-4 pb-3">
                <nav style="background: #28323A;" class="navbar bg-light navbar-light">
                    <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                        <h3 class="text-primary">DASHMIN</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="../../assets/images/user.png" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"><?= $_SESSION['name'] ?></h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="dashboard.php" class="nav-item nav-link" id="dashboard-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="../categorie/show.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Categories</a>
                        <a href="materiels.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Materiels</a>
                        <a href="artisants.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Artisant</a>
                        <a href="produits.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>produits</a>


                    </div>

                </nav>
            </div>