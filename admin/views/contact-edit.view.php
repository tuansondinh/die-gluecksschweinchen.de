<form action="contact-edit.php?id=<?php echo e($message["id"]); ?>" method="POST">
<!-- Schicke Formular zu contact-edit  -->
<!-- daten müssen name besitzen um übertragbar zu sein -->
<div class="form-group">
    <label for="InputEmail1">Email:</label>
    <input name="email" type="email" class="form-control" id="InputEmail1" value="<?php echo e($message["email"]); ?>">
</div>
<div class="form-group">
    <label for="InputEmail1">Name:</label>
    <input name="name" type="text" class="form-control" id="InputEmail1" value="<?php echo e($message["name"]); ?>">
</div>
<div class="form-group">
    <label for="InputEmail1">Betreff</label>
    <input name="subject" type="text" class="form-control" id="InputEmail1" value="<?php echo e($message["subject"]); ?>">
</div>

  <div class="form-group">
    <label for="FormControlTextarea1">Nachricht:</label>
    <textarea name="message" class="form-control" id="FormControlTextarea1" rows="4">
    <?php echo nl2br(e($message["message"])); ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Absenden</button>

</form>


<dl>
    <dt>Id:</dt>
    <dd><?php echo $message["id"]; ?></dd>

    <dt>Name:</dt>
    <dd><?php echo e($message["name"]); ?></dd>
    <!-- warum ist escape wichtig? -->

    <dt>E-Mail:</dt>
    <dd><?php echo $message["email"]; ?></dd>

    <dt>Betreff:</dt>
    <dd><?php echo $message["subject"]; ?></dd>

    <dt>Nachricht:</dt>
    <dd><?php echo nl2br($message["message"]); ?></dd>
    <!-- new line to </br> -->
 </dl>
 
