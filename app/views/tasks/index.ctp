<html>
    <body>

        <?php
        if ($data == NULL) {
            echo "<h2>Dada Empty</h2>";
        } else {
            echo "<table>
          <tr>
            <td>id</td>
            <td>Name Task</td>
            <td>Description</td>
            <td>Status</td>
            <td>Begin day</td>
            <td>End day</td>
            <td>User</td>
            <td>Action</td>
          </tr>";
            foreach ($data as $item) {
                echo "<tr>";
                echo "<td>" . $item['Task']['id'] . "</td>";
                echo "<td>" . $item['Task']['name'] . "</td>";
                echo "<td>" . $item['Task']['description'] . "</td>";
                echo "<td>" . $item['Task']['status'] . "</td>";
                echo "<td>" . $item['Task']['begin_day'] . "</td>";
                echo "<td>" . $item['Task']['end_day'] . "</td>";
                echo "<td>" . $item['Task']['user_id'] . "</td>";
                echo "<td>";
                echo $this->Html->link('View', array('controller' => 'tasks', 'action' => 'view', $item['Task']['id']));
                echo "&nbsp;&nbsp;";
                echo $this->Html->link('Edit', array('action' => 'edit', $item['Task']['id']));
                echo "&nbsp;&nbsp;";
                echo $this->Html->link('Delete', array('action' => 'delete', $item['Task']['id']), null, 'Are you sure?');
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?>
    </body>
</html>