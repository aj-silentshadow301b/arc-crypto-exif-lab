<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Base64 + XOR Combo :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>Base64 + XOR Combo</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>This flag was XOR'd against a single-byte key, then the result was
    Base64-encoded. You'll need to reverse both layers, <strong>in the
    opposite order they were applied</strong>.</p>

    <p><strong>Key (hex):</strong> <code>13</code></p>

    <p class="ciphertext">VV9SVGh/cmp2YXZ3THZ9cHx3en10TGB8f2V2d24=</p>

    <div class="hint-box">
      Step 1: Base64-decode the string to get raw bytes.
      Step 2: XOR those bytes against the key. Encoding order matters --
      always reverse the outermost layer first.
    </div>

    <?php arc_render_flag_form('b64xor'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
