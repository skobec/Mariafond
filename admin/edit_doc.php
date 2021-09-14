<?php

    include('pageConstract/header.php');

    $id = $_GET['id'];

    $kid = $db->get_one('kids', $id);

    //dd($kid);


?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <form action="kid_update.php?id=<?php echo $id ?>" method="POST"> <!--enctype="multipart/form-data"-->
                <h2>Кому нужна помощь?</h2>
                <input class="form-control mb-3" type="text" name="name" value="<?php echo $kid['name']?>">
                <input class="form-control mb-3" type="text" name="last_name" value="<?php echo $kid['last_name']?>">
                <textarea class="form-control mb-3" name="history" cols="30" rows="10"><?php echo $kid['history']?></textarea>
                <input class="form-control mb-3" type="text" name="sum1" value="<?php echo $kid['sum1']?>">
                <input class="form-control mb-3" type="text" name="sum2" value="<?php echo $kid['sum2']?>">
                <!--<input class="form-control mb-3" type="file" name="avatar">-->
                <button type="submit" class="btn btn-primary mb-3">Обновить</button>
            </form>
        </div>
        <!-- /.col-lg-8 col-12 -->
        <div class="col-12 col-lg-4 pt-4">
            <span class="d-block mb-4">Уведомления:</span>
            <?php
            if(!empty($_SESSION['alert'])){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['alert'] ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php }
            unset($_SESSION['alert']);
            ?>
        </div>
        <!-- /.col-12 col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
