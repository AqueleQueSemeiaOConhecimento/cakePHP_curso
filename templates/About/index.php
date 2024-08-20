<?php $this->layout = 'master'; ?>
// significa que isso é o layout

// startando css.
$this->start('css', function() {
    return <link rel="stylesheet" href="css/my_home.css"/>
}); ?>

<?php $this->assign('title', 'My about page read assign'); ?>
// sidebar vem de element
<?php $this->start('sidebar') ?>
    <?php echo $this->element('sidebar'); ?>
<?php $this->end() ?>

<h2>About</h2>