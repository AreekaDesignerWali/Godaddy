<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle Add to Cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['domain'])) {
    $domain = $_POST['domain'];
    if (!in_array($domain, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $domain;
    }
}

// Domain search logic
$search = isset($_GET['domain']) ? trim($_GET['domain']) : '';
$extensions = ['.com', '.net', '.org'];
$results = [];

if ($search !== '') {
    foreach ($extensions as $ext) {
        $results[] = $search . $ext;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background: #f9f9f9;
    }

    h2 {
      color: #0a0;
      margin-bottom: 30px;
    }

    .domain-box {
      background: white;
      border: 1px solid #ddd;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 6px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .domain-name {
      font-size: 18px;
    }

    .btn {
      background-color: #0a0;
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #060;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #0a0;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <h2>Available Domains for: <em><?= htmlspecialchars($search) ?></em></h2>

  <?php if ($search): ?>
    <?php foreach ($results as $domain): ?>
      <div class="domain-box">
        <div class="domain-name"><?= $domain ?></div>
        <form method="post">
          <input type="hidden" name="domain" value="<?= $domain ?>">
          <button type="submit" class="btn">Add to Cart</button>
        </form>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>Please search a domain from <a href="index.php">homepage</a>.</p>
  <?php endif; ?>

  <a href="cart.php">🛒 View Cart</a>

</body>
</html>
