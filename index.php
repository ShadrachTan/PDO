<?php require_once 'dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL</title>
</head>

<body>
  <?php

$stmt = $pdo->prepare("SELECT * FROM vehicles");
if ($stmt->execute()) {
  $results = $stmt->fetchAll(); // Fetch all results
  echo "<table border='2'>";
  echo "<tr>";
  echo "<th>id</th>";
  echo "<th>customerId</th>";
  echo "<th>make</th>";
  echo "<th>model</th>";
  echo "<th>year</th>";
  echo "</tr>";
  foreach ($results as $result) {
    echo "<tr>";
    echo "<td>" . $result['id'] . "</td>";
    echo "<td>" . $result['customerId'] . "</td>";
    echo "<td>" . $result['make'] . "</td>";
    echo "<td>" . $result['model'] . "</td>";
    echo "<td>" . $result['year'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}

  ?>
</body>

</html>