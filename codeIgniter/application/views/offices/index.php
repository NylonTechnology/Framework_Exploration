<?php foreach ($offices as $office): ?>

    <h2><?php echo $office['name'] ?></h2>

    <p><a href="offices/<?php echo $office['id'] ?>">View office</a></p>

<?php endforeach ?>