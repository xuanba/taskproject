<?php

echo $this->Form->create('Task');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('begin_day', array('dateFormat' => 'DMY'));
echo $this->Form->input('end_day', array('dateFormat' => 'DMY'));
echo $this->Form->input('user_id');
echo $this->Form->end('Save Task');
?>