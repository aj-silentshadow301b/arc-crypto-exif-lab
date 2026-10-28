<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Caesar / ROT Chain :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>Caesar / ROT Chain</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>One of our devs encoded a note using <strong>two classical ciphers, one after
    another</strong>. We don't know the exact order or the Caesar shift amount --
    you'll need to figure both out.</p>

    <p class="ciphertext">ZFUA{wuymul_uhx_lin_wigvi}</p>

    <div class="hint-box">
      Hint: try reversing ROT13 first (it's its own inverse), then brute-force
      all 25 Caesar shifts on what's left. A tool like CyberChef's "ROT13" and
      "Caesar Brute Force" recipes, chained together, will get you there fast.
    </div>

<?php arc_render_flag_form('caesar_rot'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
