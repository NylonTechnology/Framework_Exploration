<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Contacts</h1>
<ul>
<?php foreach ($contacts as $contact): ?>
    <li>
        <?= Html::encode("{$contact->id} ({$contact->name})") ?>:
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>