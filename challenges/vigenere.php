<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Vigenère Cipher :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>Vigenère Cipher</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>This flag was encrypted with a short, repeating-key Vigenère cipher.
    We haven't published the key anywhere obvious on this page -- but it
    might be sitting somewhere else on the site if you look closely
    (view-source is your friend).</p>

    <p class="ciphertext">FCCR{vjgvpprf_kva_qovnu}</p>

    <div class="hint-box">
      No key hint here on purpose. Try recon on the rest of the site first.
      If you want to solve it without the hint at all, look into Kasiski
      examination or index-of-coincidence analysis for key-length recovery.
    </div>

    <?php arc_render_flag_form('vigenere'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
