<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
echo '<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/Loginsystem/welcome.php">iSecure</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/php1/Loginsystem/welcome.php" aria-current="page">Home
                        <span class="visually-hidden">(current)</span></a>
                </li>';

if (!$loggedin) {
    echo '<li class="nav-item">
                    <a class="nav-link" href="/php1/Loginsystem/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/php1/Loginsystem/signup.php">Signup</a>
                </li>';
}
if ($loggedin) {
    echo '<li class="nav-item">
                    <a class="nav-link" href="/php1/Loginsystem/logout.php">Logout</a>
                </li>';
}


echo '</ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>';
