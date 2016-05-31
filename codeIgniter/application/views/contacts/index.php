<?php foreach ($contacts as $contact): ?>

    <h2><?php echo $contact['name'] ?></h2>

    <p><a href="contacts/<?php echo $contact['id'] ?>">View contact</a></p>

<?php endforeach ?>