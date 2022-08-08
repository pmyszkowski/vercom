<?php $users = $db->fetchUsers(); ?>

<?php foreach ($users as $user): ?>
    <p>Witaj <?php echo $user['imie'].' ('.$user['test'].')' ?> ,</p>

    <?php if( (int)$user['test'] === 1 ): ?>
        <p>Miło nam Cię gościć</p>
    <?php else: ?>
        <p>Miło nam Cię gościć ponownie</p>
    <?php endif; ?>
<?php endforeach; ?>
