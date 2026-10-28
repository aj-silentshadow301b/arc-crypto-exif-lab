<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>XOR Cipher :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>XOR Cipher</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>A flag was XOR'd against a short repeating hex key. The ciphertext is
    provided as a hex string below (and as a download).</p>

    <p><strong>Key (hex):</strong> <code>4c1e</code></p>

    <a class="download-btn" href="../assets/xor_cipher.txt" download>Download ciphertext (.txt)</a>
    <p class="ciphertext">0a520d593766236c1378207f2b6d137f3e7b1378397031</p>

    <div class="hint-box">
      Convert the hex to raw bytes, then XOR each byte against the repeating
      key bytes. CyberChef's "From Hex" + "XOR" recipe works well, or a
      one-liner in Python: <code>bytes(a ^ b for a, b in zip(ct, cycle(key)))</code>.
    </div>

    <?php arc_render_flag_form('xor'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
