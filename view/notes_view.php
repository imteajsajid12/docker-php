<?php
require('pirtials/head.view.php');
require('pirtials/nave.vew.php');


?>
    <section id="hero" class="" style="color: #ffffff">

        <?php foreach ($notes as $key => $note): ?>
            <li><?= $note['name'] ?></li>

        <?php endforeach; ?>

        </div>

    </section><!-- End Hero -->

    <main id="main">

    </main>
<?php
require('pirtials/footer.view.php')
?>