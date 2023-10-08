

<?php
require base_path('view/pirtials/head.view.php');
require  base_path('/view/pirtials/nave.vew.php');


?>
    <section id="hero" class="" style="color: #ffffff">



        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!--        table-->
        <div class="container">
            <h2 class=""><?= $heading ?></h2>
            <div class="button float-end">
                <a href="/note/create" class="btn btn-primary">Create</a>
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
                        <td><?= $note['user_id'] ?></td>
                        <td><a href="/note/view/<?= $note['id']  ?>" class="btn bn-succeass">view</a>
                            <a class="btn btn-primary">Edit</a>
                            <a class="btn-btn-danger">Delete</a></td>


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