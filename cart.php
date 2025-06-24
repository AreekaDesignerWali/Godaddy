<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Your Cart</title>
a    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
      color: #333;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h2 {
      color: #0a0;
      margin-bottom: 25px;
    }

    .domain-item {
      padding: 12px;
      border: 1px solid #ccc;
      margin-bottom: 12px;
      border-radius: 5px;
      display: flex;
      justify-content: space-between;
    }

    .btn {
      padding: 8px 12px;
      background-color: #0a0;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #060;
    }

    .empty {
      text-align: center;
      font-size: 18px;
      color: #999;
    }

    a {
      display: block;
      margin-top: 30px;
      color: #0a0;
      text-decoration: none;
      font-weight: bold;
      text-align: center;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Your Cart</h2>

    <?php if (!empty($cart)): ?>
      <?php foreach ($cart as $domain): ?>
        <div class="domain-item">
          <span><?= htmlspecialchars($domain) ?></span>
          <form method="post" action="remove.php">
            <input type="hidden" name="domain" value="<?= $domain ?>">
            <button class="btn">Remove</button>
          </form>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="empty">Your cart is empty. <br>Search domains from <a href="index.php">homepage</a>.</p>
    <?php endif; ?>

    <a href="index.php">← Back to Home</a>
  </div>
</body>
</html>
