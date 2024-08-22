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

<ul>
    
    <?php foreach($posts as $post): ?>
        <!-- <?php var_dump($post); ?> -->
        <li><?= h($post->id) ?>: <?= h($post->title); ?> <?= h($post->author->firstName); ?></li>
    <?php endforeach; ?>
</ul>

<hr>

<ul>
    <?php foreach($users2 as $user): ?>
        <!-- <?php var_dump($user) ?> -->
        <li><?= h($user->id); ?>: <?= h($user->firstName); ?> <?= count($user->posts); ?> </li>
    <?php endforeach; ?>
</ul>

<hr>

<ul>
    <?php foreach($roles as $role): ?>
        <?php var_dump($role); ?>
    <?php endforeach; ?>
</ul>