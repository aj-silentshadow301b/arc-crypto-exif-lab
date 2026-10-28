<?php
// ARC Vulnerable Website Lab -- New Challenges Module
// Educational use only. Deploy on an isolated VM / localhost only.
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ARC Labs :: Training Site</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>ARC Security Training Portal</h1>
  <p class="tagline">Internal tools &amp; resources -- authorized students only</p>
</header>

<nav class="site-nav">
  <a href="index.php">Home</a>
  <a href="challenges/recon.php">About / Team</a>
</nav>

<main>
  <section class="intro">
    <p>Welcome to the ARC Labs training site. This box contains a set of
    self-contained cryptography and file-metadata challenges. Each challenge
    below is independent -- solve them in any order. Flags follow the format
    <code>FLAG{...}</code>.</p>
  </section>

  <section class="challenge-grid">
    <a class="card" href="challenges/caesar_rot.php">
      <h2>Caesar / ROT Chain</h2>
      <p>A message was run through two classical ciphers, one after another.</p>
    </a>
    <a class="card" href="challenges/vigenere.php">
      <h2>Vigenère Cipher</h2>
      <p>A short repeating-key cipher. The key is hiding somewhere on this site.</p>
    </a>
    <a class="card" href="challenges/xor.php">
      <h2>XOR Cipher</h2>
      <p>A flag has been XOR'd against a short hex key.</p>
    </a>
    <a class="card" href="challenges/hash.php">
      <h2>Hash ID &amp; Cracking</h2>
      <p>Someone reused a weak password. Identify the hash, then crack it.</p>
    </a>
    <a class="card" href="challenges/b64xor.php">
      <h2>Base64 + XOR Combo</h2>
      <p>Two layers of encoding were applied. Peel them off in the right order.</p>
    </a>
    <a class="card" href="challenges/exif.php">
      <h2>Image Metadata Hunt</h2>
      <p>A "team photo" is hiding more than pixels. Inspect it closely.</p>
    </a>
  </section>
</main>

<footer>
  <p>ARC Labs training environment -- for authorized educational use only.</p>
</footer>
</body>
</html>
