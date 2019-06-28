<?php $title = 'Mon test'; ?>

<div class="container bg-warning">
<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p>super test</p><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente molestiae quidem aliquid, quaerat iusto! Unde veritatis nam repellat eos esse, praesentium quidem eius nihil perferendis quod iste, rem molestiae quasi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis maxime ipsa consectetur, totam. Corporis perspiciatis, vitae iure quo. Debitis, iste! Totam, ratione repellat tempora quisquam fugiat nostrum illum. Commodi, error!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis repudiandae hic laboriosam ullam, delectus quae. Molestias itaque cumque suscipit. Eum sunt dolorum consequatur quas tempore ea qui, omnis dolor sit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique voluptatem, dignissimos laborum numquam praesentium minima natus consectetur officia! Eos assumenda natus, nemo velit facilis eius soluta nesciunt esse labore quasi.</p>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>