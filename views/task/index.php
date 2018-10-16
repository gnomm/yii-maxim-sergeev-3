<?php foreach ($tasks as $value): ?>
<?php //var_dump($value['name_id']) ?>
    <?php echo $value['name_id'] . '<br>' ?>
    <?php echo $value['task'] . '<br>' ?>
    <?php echo $value['description'] . '<br>' ?>
    <?php echo $value['created'] . '<br>' ?>
    <br>
<?php endforeach; ?>