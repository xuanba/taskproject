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
          </tr>";
            foreach ($data as $item) {
                echo "<tr>";
                echo "<td>" . $item['User']['id'] . "</td>";
                echo "<td>" . $item['User']['username'] . "</td>";
                echo "<td>" . $item['User']['role'] . "</td>";
                echo "<td>" . $item['User']['name'] . "</td>";
                echo "<td>" . $item['User']['email'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
        <?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add')); ?>
    </body>
</html>