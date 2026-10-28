<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hash ID &amp; Cracking :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>Hash Identification &amp; Cracking</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>One of our (fake) staff accounts reused a weak, dictionary-style
    password. We've pulled the password hash below. First figure out
    what hash algorithm it is, then crack it using the provided wordlist
    -- <strong>not</strong> a public breach list.</p>

    <p class="ciphertext">f3f2b1af0693f074be7115bd00f4c3ad</p>

    <a class="download-btn" href="../assets/hash.txt" download>Download hash (.txt)</a>
    <a class="download-btn" href="../assets/wordlist.txt" download>Download wordlist (.txt)</a>

    <div class="hint-box">
      Length/format usually tells you the algorithm: 32 hex characters
      typically means MD5, 40 means SHA-1. Try:
      <pre>hashcat -m 0 hash.txt wordlist.txt</pre>
      or
      <pre>john --wordlist=wordlist.txt hash.txt</pre>
      Once you recover the plaintext password, wrap it as
      <code>FLAG{the_password}</code> to submit.
    </div>

    <?php arc_render_flag_form('hash'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
