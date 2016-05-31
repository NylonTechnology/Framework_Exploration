    

    <h2>Contacts</h2>
 
    <?php if ( !$contacts->count() ): ?>
        You have no contacts
    <?php else: ?>
        <ul>
            <?php foreach( $contacts as $contact ): ?>
                <li><a href="<?php echo route('contacts.show', $contact->id); ?>"><?php echo $contact->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    

