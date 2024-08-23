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
<div class="sorts">
    <span class="sort">Organizar por: </span>
    <span class="sort">
        <?php echo $this->Paginator->sort('firstName', 'Nome') ?>
    </span>
    <span class="sort">
        <?php echo $this->Paginator->sort('lastName', 'Sobrenome') ?>
    </span>
</div>

<ul>
    <?php foreach($users as $user): ?>
        <li><?= $user->id ?>: <?= $user->firstName; ?> <?= $user->lastName ?></li>
    <?php endforeach; ?>
</ul>


<?= $this->element('/paginator/simple') ?>