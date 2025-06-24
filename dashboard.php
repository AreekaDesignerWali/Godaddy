<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
    body { font-family: Arial; background: #f0f0f0; padding: 30px; }
    table { width: 100%; border-collapse: collapse; background: #fff; }
    th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
    th { background: #333; color: white; }
    button { padding: 5px 10px; border: none; background: #007bff; color: white; border-radius: 4px; cursor: pointer; }
  </style>
</head>
<body>
  <h2>Your Registered Domains</h2>
  <table>
    <tr><th>Domain</th><th>Expiry</th><th>Actions</th></tr>
    <?php
    $res = mysqli_query($conn, "SELECT * FROM domains");
    while($row = mysqli_fetch_assoc($res)) {
      echo "<tr><td>{$row['name']}</td><td>{$row['expiry']}</td><td><button onclick='alert(\"Renewal soon!\")'>Renew</button></td></tr>";
    }
    ?>
  </table>
</body>
</html>
