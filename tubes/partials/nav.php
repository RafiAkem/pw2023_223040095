<style>
    .navbar-brand {
        font-family: Viga;
        font-size: 32px;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">No'Akem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <a href="#" class="nav-link active" aria-current="page">Populer</a>
                <a href="about.php" class="nav-link active" aria-current="page">About</a>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="navbar-nav my-2">
                <a class="nav-item btn btn-primary ms-3" href="login.php">Login</a>
            </div>
        </div>
    </div>
</nav>