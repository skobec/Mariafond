<?php

    include('pageConstract/header.php');

    //dd($kid);


?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-12">
            <form action="kid_create.php" method="POST"> <!--enctype="multipart/form-data"-->
                <h2>Кому нужна помощь?</h2>
                <input class="form-control mb-3" type="text" name="name" placeholder="Имя">
                <input class="form-control mb-3" type="text" name="last_name" placeholder="Фамилия">
                <textarea class="form-control mb-3" name="history" cols="30" rows="10">История ребенка...</textarea>
                <input class="form-control mb-3" type="text" name="sum1" placeholder="Собранные средства">
                <input class="form-control mb-3" type="text" name="sum2" placeholder="Необходимо собрать">
                <!--<input class="form-control mb-3" type="file" name="avatar">-->
                <button type="submit" class="btn btn-primary mb-3">Обновить</button>
            </form>
        </div>
        <!-- /.col-lg-8 col-12 -->
        <?php include('pageConstract/sidebar.php'); ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
