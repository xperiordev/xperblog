
<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?= $home ?>">XperBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>top">Top Posts</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>category">Category</a></li>
                <?php if(!isset($_SESSION["user"])){ ?>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>login">Login</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>register">Register</a></li>
                <?php } else { ?>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $home ?>logout">Logout</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>