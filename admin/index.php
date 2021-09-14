<?php

    include('pageConstract/header.php');

    $kids = $db->get_all('kids');

?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <a href="add_new_kid.php" class="btn btn-success">+</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($kids as $post){ ?>
                        <tr>
                            <th scope="row"><?php echo $post['id']?></th>
                            <td><?php echo $post['name'] . ' ' . $post['last_name'] ?></td>
                            <td>
                                <a class="dropdown-toggle btn btn-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    edit
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="edit.php?id=<?php echo $post['id']?>">Основная информация</a></li>
                                    <li><a class="dropdown-item" href="edit_avatar.php?id=<?php echo $post['id']?>">Аватар</a></li>
                                    <li><a class="dropdown-item" href="edit_doc.php?id=<?php echo $post['id']?>">Документы</a></li>
                                    <li><a class="dropdown-item" href="edit_status.php?id=<?php echo $post['id']?>">Статус сбора</a></li>
                                </ul>
                                <a href="kid_delete.php?id=<?php echo $post['id']?>" onclick="confirm('Вы точно хотите удалить запись <?php echo $post['name'] . ' ' . $post['last_name'] ?>')" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php }
                ?>
                </tbody>
            </table>
        </div>
        <!-- /.col-12 -->
        <?php include('pageConstract/sidebar.php'); ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</body>
</html>