
<h1><b>Username:</b> <?php echo $user['User']['username']?></h1>
<h1><b>Role:</b> <?php echo $user['User']['role']?></h1>
<h1><b>Name:</b> <?php echo $user['User']['name']?></h1>
<h1><b>Email:</b> <?php echo $user['User']['email']?></h1>

<?php
echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));
?>