<?php
require base_path('view/pirtials/head.view.php');
require base_path('/view/pirtials/nave.vew.php');


?>
<section id="hero" class="" style="color: #ffffff">

    </div>

</section><!-- End Hero -->

<main id="main">
    <!--        table-->
    <div class="container">
        <h2 class=""><?= $heading ?></h2>
        <div class="button float-end">
            <a href="/notes/create" class="btn btn-primary">Create</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Comments</th>
                <th scope="col">User</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($notes as $key => $note): ?>
                <tr>
                    <th scope="row"><?= $note['id'] ?></th>
                    <td><?= $note['title'] ?></td>
                    <td><?= $note['comment'] ?></td>
                    <td><?= $note['name'] ?></td>
                    <td>
                        <form method="post" action="/notes/delete">
                        <a href="/notes/show?id=<?= $note['id'] ?>" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                            <input type="hidden" name="id" value="<?= $note['id']?>">
                    </form>
                    </td>



                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!--        table-->
    <br>
    <br>
</main>
<?php
require base_path('/view/pirtials/footer.view.php')
?>