

    <h2><?php echo $contact->name; ?></h2>
 
 		<?php if ( !$contact->offices->count() ): ?>
        Your contact has no offices.
    <?php else: ?>
        <ul>
        		<?php foreach( $contact->offices as $office ): ?>
        			<li><a href="<?php echo route('offices.show', $office->id); ?>"><?php echo $office->name; ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
