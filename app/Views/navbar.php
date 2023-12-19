<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container px-4 px-lg-5">
        <img class="logo" src="<?= base_url() ?>/public/images/logo.png" alt="logo" style="height:100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./login"> Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./register">User Register</a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link "  href="./category" >Category</a>
                </li> -->
            </ul>
            <form class="d-flex" style="gap:10px">
            
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>