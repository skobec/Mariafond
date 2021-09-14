<?php

    include('pageConstract/header.php');

    $id = $_GET['id'];

    $kid = $db->get_one('kids', $id);

    //dd($kid);


?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <h2>Стасус сбора - <?php echo $kid['name']?></h2>
            <form action="kid_update_status.php?id=<?php echo $id ?>" method="POST"> <!--enctype="multipart/form-data"-->
                <div class="mb-3">
                    <select class="form-select" required aria-label="select example" name="status">
                        <option value="active">Активный</option>
                        <option value="finished">Закрыт</option>
                    </select>
                </div>
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
