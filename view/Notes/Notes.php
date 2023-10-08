<?php

include view ('/pirtials/head.view.php');
include view('/pirtials/nave.vew.php');



?>
<?php //= $Errors[] ?>
    <section id="hero" class="" style="color: #ffffff">
        <div class="container">
            <form method="post" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <?php if (isset($Errors['title'])) : ?>
                        <p style="color: red"><?= $Errors['title'] ?> </p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">comment</label>
                    <input type="text" class="form-control" name="comment" id="exampleInputPassword1" placeholder="Password">
                    <?php if (isset($Errors['comment'])) : ?>
                        <p style="color: red"><?= $Errors['comment'] ?> </p>
                    <?php endif; ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section><!-- End Hero -->

    <main id="main">

    </main>
<?php
require view('/pirtials/footer.view.php')
?><?php
