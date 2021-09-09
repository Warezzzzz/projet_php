<?php require_once "config/init.conf.php"; ?>/
<?php require_once "class/Articles.class.php" ?>
<?php require_once "class/ArticleManager.php" ?>
<?php
    $articleManager = new ArticleManager($bdd);

    $articles = $articleManager->getList();
    print_r2($articles);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php require_once("includes/header.inc.php") ?>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-md-12">
                    <h1 class="font-weight-light"><?= "Hello world" ?></h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                </div>
            </div>
            <!-- Content Row-->
               <div class="row gx-4 gx-lg-5">
                   <?php foreach ($articles as $key => $listeArticle) { ?>
                 <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" <?php if($listeArticle->getId() == 1) { echo 'src="img/logo1.png"';} elseif ($listeArticle->getId() == 2) { echo 'src="img/logo2.jpg"';} elseif ($listeArticle->getId() == 3) { echo 'src="img/logo3.png"';} ?> alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?= $listeArticle->getTitre() ?></h2>
                            <p class="card-text"><?= $listeArticle->getTexte() ?></p>
                            <?php if($listeArticle->getPublie() != false)
                            {
                                echo "<button class='btn btn-success'>L'article est publie</button>";
                            } else {
                                echo "<button class='btn btn-danger'>L'article n'est pas publié</button>";
                            }


                                ?>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!"><?= $listeArticle->getDate() ?></a></div>
                    </div>
                    </div>
                 </div>
                   <?php } ?>
                </div>
            </div>

        <!-- Footer-->
        <?php include_once("includes/footer.inc.php") ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
