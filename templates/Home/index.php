<?php $this->layout = 'master'; ?>
// significa que isso é o layout

<?php $this->start('css'); ?> // inicio valo de css que vai se cuspido no layout
// digo qual css a view usa, substituindo o css do layout
<link rel="stylesheet" type="text/css" href="css/my_home.css"/>
<?php $this->end(); ?>

<?php $this->assign('title', 'My home page read assign'); ?>

<?php $this->start('sidebar') ?>
    <?php echo $this->element('sidebar'); ?>
<?php $this->end() ?>

<h2>Home, <?= $name . ' ' . $age; ?></h2>

<?php $this->start('script'); ?>
    <script>
        alert('home');
    </script>
<?php $this->end(); ?>