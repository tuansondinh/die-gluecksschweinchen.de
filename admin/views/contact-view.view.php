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
 
