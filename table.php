<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="border">
        <tr>
          
          <th>Type of Activity</th>
          <th>Name of Activity</th>
          <th>From </th>
          <th>To </th>
          <th>Role</th>
          <th>Level</th>
        </tr>
        <tr>
          <td><?php echo $row["type_of_activity"]; ?></td>
          <td><?php echo $row["name_of_activity"]; ?></td>
          <td><?php echo $row["from_date"];?></td>
          <td><?php echo $row["to_date"];?></td>
          <td><?php echo $row["role"];?></td>
          <td><?php echo $row["level"];?></td>
        </tr>
        
      </table>
</body>
</html>

