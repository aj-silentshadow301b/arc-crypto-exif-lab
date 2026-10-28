<?php require __DIR__ . '/../includes/flag_check.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Image Metadata Hunt :: ARC Labs</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header class="site-header">
  <h1>Image Metadata Hunt</h1>
</header>
<nav class="site-nav"><a href="../index.php">Home</a></nav>

<main>
  <div class="panel">
    <p>Here's our latest team photo. It looks completely ordinary in a
    browser or photo viewer -- but files can carry a lot more than what's
    visible on screen.</p>

    <img src="../assets/team_photo.jpg" alt="ARC Labs team photo" style="max-width:100%;border-radius:8px;border:1px solid #223345;">

    <a class="download-btn" href="../assets/team_photo.jpg" download>Download image</a>

    <div class="hint-box">
      Don't just view it -- inspect it with a metadata tool:
      <pre>exiftool -a -G1 team_photo.jpg</pre>
      The <code>-a</code> flag shows all tags (including duplicates) and
      <code>-G1</code> groups them by family, so you don't miss anything
      hiding outside the tags a default viewer would show you. Check every
      populated field: Comment/UserComment, Artist/Copyright, GPS, and any
      custom XMP fields. Some fragments are Base64-encoded -- try
      <code>base64 -d</code> on anything that looks like it.
    </div>

    <?php arc_render_flag_form('exif'); ?>
  </div>
</main>
<footer><p>ARC Labs training environment -- for authorized educational use only.</p></footer>
</body>
</html>
