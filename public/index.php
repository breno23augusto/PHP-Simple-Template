<?php

require_once '../vendor/autoload.php';
require_once 'bootstrap.php';
session_start();
$activePage = isset($_GET['page']) ? $_GET['page'] : 'index';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebSite</title>
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo checkActivePage($activePage, 'index'); ?>">
                        <a class="nav-link" href="?page=index">Home</a>
                    </li>
                    <li class="nav-item <?php echo checkActivePage($activePage, 'about'); ?>">
                        <a class="nav-link" href="?page=about" id="about_link">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <main>
            <?php include_once(getPage()); ?>
        </main>
    </div>
    <footer class="section text-center">
        <p>© 2020 My Template</p>
    </footer>
    <script src="../vendor/components/jquery/jquery.min.js"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php

function getPage()
{
    $page404Path = "../app/pages/404.php";
    $pagePath = "../app/pages/index.php";

    if (isset($_GET['page'])) {
        $pageName = $_GET['page'];
        $newPagePath = "../app/pages/{$pageName}.php";
        $pagePath = file_exists($newPagePath) ? $newPagePath : $page404Path;
    }

    return $pagePath;
}

function checkActivePage($activePage, $pageName)
{
    return $activePage == $pageName ? 'active' : '';
}
