<?php

include('pageConstract/header.php');

$contacts = $db->get_one('contacts', 4);

?>

<section class="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="form">
                    <form action="contacts_update.php" method="POST">
                        <h2>Реквизиты</h2>

                        <input class="form-control mb-3" type="text" name="phone" value="<?php echo $contacts['phone']; ?>">
                        <input class="form-control mb-3" type="text" name="email" value="<?php echo $contacts['email']; ?>">
                        <input class="form-control mb-3" type="text" name="adress" value="<?php echo $contacts['adress']; ?>">


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