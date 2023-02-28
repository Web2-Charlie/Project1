
<?php ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">User ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Lastname</th>
        <th scope="col">Firstname</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
<?php
    foreach($users as $user) {
        echo '<tr>';
        foreach($user as $attr) {
            echo '<td>'.$attr.'</td>';
        }
        echo '<tr>';
    }
?>
  </tbody>
</table>