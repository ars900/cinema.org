		<script src = "<?=URLROOT.'public/admin/main/factory/script/bootstrap.min.js' ?>"></script>
		<script src = "<?=URLROOT.'public/admin/main/factory/script/jquery.js' ?>"></script>
		<script src = "<?=URLROOT.'public/admin/main/factory/script/ui.min.js' ?>"></script>
		<script src = "<?=URLROOT.'public/admin/main/js/admin_index.js' ?>"></script>

        <?php
            $errors = new ErrorController;
            $errors -> clean_errors();
        ?>

    </body>
    </html>