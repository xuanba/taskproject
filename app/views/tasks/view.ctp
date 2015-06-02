
<h1><b>Task name:</b> <?php echo $task['Task']['name']?></h1>
<h1><b>Description:</b> <?php echo $task['Task']['description']?></h1>
<h1><b>Status:</b> <?php echo $task['Task']['status']?></h1>
<h1><b>Begin day:</b> <?php echo $task['Task']['begin_day']?></h1>
<h1><b>End day:</b> <?php echo $task['Task']['end_day']?></h1>
<h1><b>User id:</b> <?php echo $task['Task']['user_id']?></h1>

<?php
echo $this->Html->link('Edit', array('action' => 'edit', $task['Task']['id']));
?>