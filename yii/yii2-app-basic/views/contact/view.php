<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Contact</h1>
<?= Html::encode("{$contact->id} ({$contact->name})") ?>:
<ul>
<?php foreach ($contact['offices'] as $office): ?>
    <li>
        <?= Html::encode("{$office->name}") ?>
    </li>
<?php endforeach; ?>  
</ul>


