<?php echo date("d.m.Y H:i:s", time()); ?>
<table class="table">
<thead>
    <tr>
        <th scope="col">Datum</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Subjekt</th>
        <th scope="col">Aktionen</th>
        
    </tr>
</thead>
<tbody>
    <?php foreach($messages as $message): ?>
    <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td><?php echo e($message["name"]); ?></td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
        <td>   
            
            <a href="contact-view.php?id=<?php echo $message["id"] ?>">Anzeigen</a>
            <a href="contact-edit.php?id=<?php echo $message["id"] ?>">Bearbeiten</a>
            <form action="contact-delete.php" class="contact-delete-form" method="post">
                <input type="hidden" name="id" value="<?php echo e($message["id"]) ?>">
                <button class="btn btn-link"type="submit">Löschen</button>
            </form>
            
        </td>

    </tr>
  
    <?php endforeach ?>
</tbody>
</table>