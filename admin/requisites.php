<?php

include('pageConstract/header.php');

$requisites = $db->get_one('requisites', 9);

?>

<section class="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="form">
                    <form action="requisite_update.php" method="POST">
                        <h2>Реквизиты</h2>

                        <input class="form-control mb-3" type="text" name="inn" value="<?php echo $requisites['inn']; ?>">
                        <input class="form-control mb-3" type="text" name="rs" value="<?php echo $requisites['rs']; ?>">
                        <input class="form-control mb-3" type="text" name="ks" value="<?php echo $requisites['ks']; ?>">
                        <input class="form-control mb-3" type="text" name="kpp" value="<?php echo $requisites['kpp']; ?>">
                        <input class="form-control mb-3" type="text" name="bik" value="<?php echo $requisites['bik']; ?>">
                        <input class="form-control mb-3" type="text" name="ogrn" value="<?php echo $requisites['ogrn']; ?>">
                        <input class="form-control mb-3" type="text" name="recipient" value="<?php echo $requisites['recipient']; ?>">
                        <input class="form-control mb-3" type="text" name="bank" value="<?php echo $requisites['bank']; ?>">

                        <button class="btn btn-primary mb-3">Обновить</button>
                    </form>
                </div>
                <!-- /.form -->
            </div>
            <!-- /.col-12 -->
            <?php include('pageConstract/sidebar.php'); ?>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.kids -->
</body>
</html>