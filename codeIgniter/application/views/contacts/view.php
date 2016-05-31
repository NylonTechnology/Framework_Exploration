<?php

echo '<h2>'.$contact['name'].'</h2>';
echo $contact['job_title'];

?>
<?php foreach ($offices as $office): ?>

    <h2><?php echo $office['name'] ?></h2>

    <p><a href="<?php echo base_url(); ?>/offices/<?php echo $office['id'] ?>">View office</a></p>

<?php endforeach ?>
