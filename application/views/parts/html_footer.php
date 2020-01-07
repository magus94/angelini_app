</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="<?= base_url('vendors/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-confirm.min.js') ?>"></script>

<?php
    if(isset($js) && count($js) > 0){
        foreach ($js as $item){
            echo '<script src="'.base_url('assets/js/'.$item).'"></script>';
        }
    }
?>

<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>
