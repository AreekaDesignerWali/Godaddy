<!DOCTYPE html>
<html>
<head>
  <title>GoDaddy Clone - Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      padding: 60px;
      text-align: center;
    }

    h1 {
      color: #0a0;
      margin-bottom: 30px;
    }

    input[type="text"] {
      width: 300px;
      padding: 12px;
      font-size: 16px;
    }

    button {
      padding: 12px 20px;
      font-size: 16px;
      background-color: #0a0;
      color: white;
      border: none;
      cursor: pointer;
      margin-left: 10px;
      border-radius: 4px;
    }

    a {
      display: block;
      margin-top: 30px;
      color: #0a0;
      text-decoration: none;
      font-size: 16px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <h1>Search Your Domain</h1>
  <input type="text" id="domain" placeholder="Enter domain name...">
  <button onclick="searchDomain()">Search</button>

  <a href="cart.php">🛒 View Cart</a>

  <script>
    function searchDomain() {
      const domain = document.getElementById('domain').value;
      if (domain.trim() !== '') {
        window.location.href = 'search.php?domain=' + encodeURIComponent(domain);
      } else {
        alert("Please enter a domain name.");
      }
    }
  </script>

</body>
</html>
