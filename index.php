<?php
require ('./backend/allProducts.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<?php include ('./components/head.php') ?>
<style>
/* Style pour garder la même taille pour les images dans les cartes */
.card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
}
</style>

<body>
    <?php include ('./components/navBar.php') ?>


    <main class="container p-3 " style="margin-bottom: 10rem">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($products as $product): ?>
            <div class="col">
                <a href="https://micro-service-8wezg131m-christ-mbulis-projects.vercel.app/products/<?= $product['id'] ?>/edit" target="_blank" class="nav-link">
                    <div class="card">
                        <img src="<?= htmlspecialchars($product['images']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['title']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars(substr($product['description'], 0, 100)) ?>...</p>
                            <p><?= htmlspecialchars($product['price']) ?> </p>
                        </div>
                    </div>
                </a>

            </div>
            <?php endforeach; ?>
        </div>
    </main>



    <?php include ('./components/footer.php') ?>
</body>

</html>
