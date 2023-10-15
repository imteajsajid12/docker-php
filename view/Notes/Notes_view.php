<?php
include base_path ('/view/pirtials/head.view.php');
include base_path('/view/pirtials/nave.vew.php');
//var_dump($_SERVER);

?>
<?php //= $Errors[] ?>
    <section id="hero" class="" style="color: #ffffff">
        <div class="container">
            <form method="post" action="/notes/update"  >
                <input type="hidden" name="_method" value="PATCH" >
                <input type="hidden" name="id" value="<?= $Notes['id'] ?>" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="emailHelp"
                           placeholder="Title" value=" <?= $Notes['title'] ?>">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <?php if (isset($Errors['title'])) : ?>
                        <p style="color: red"><?= $Errors['title'] ?> </p>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">comment</label>
                    <input type="text" class="form-control" name="comment" id="exampleInputPassword1" placeholder="comments" value="<?= $Notes['comment']?>">
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
require base_path('/view/pirtials/footer.view.php')
?>