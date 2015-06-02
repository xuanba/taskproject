<html>
    <body>

        <?php
        if ($data == NULL) {
            echo "<h2>Dada Empty</h2>";
        } else {
            echo "<table>
          <tr>
            <td>id</td>
            <td>Username</td>
            <td>Role</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
          </tr>";
            foreach ($data as $item) {
                echo "<tr>";
                echo "<td>" . $item['User']['id'] . "</td>";
                echo "<td>" . $item['User']['username'] . "</td>";
                echo "<td>" . $item['User']['role'] . "</td>";
                echo "<td>" . $item['User']['name'] . "</td>";
                echo "<td>" . $item['User']['email'] . "</td>";
                echo "<td>";
                echo $this->Html->link('View', array('controller' => 'users', 'action' => 'view', $item['User']['id']));
                echo "&nbsp;&nbsp;";
                echo $this->Html->link('Edit', array('action' => 'edit', $item['User']['id']));
                echo "&nbsp;&nbsp;";
                echo $this->Html->link('Delete', array('action' => 'delete', $item['User']['id']), null, 'Are you sure?');
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?>
    </body>
</html>