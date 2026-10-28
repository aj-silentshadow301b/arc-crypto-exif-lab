# ARC Labs: Crypto & EXIF Challenge Lab

A small PHP training site with six self-guided cryptography and file-metadata challenges. It is designed for a local classroom, CTF, or isolated practice VM.

> **Safety:** This lab contains intentionally weak cryptography, a dictionary-password exercise, and challenge clues in source and metadata. Run it only on localhost or an isolated network you control. Do not expose it to the public internet or use real credentials, personal photos, or production data.

## What’s inside

- **Caesar / ROT chain** — reverse two classical-cipher layers.
- **Vigenère** — discover the repeating key from a site clue.
- **XOR** — decode a repeating-key XOR message from hex.
- **Hash identification** — identify a weak demo hash and use the small included wordlist.
- **Base64 + XOR** — reverse the encoding layers in the correct order.
- **EXIF metadata hunt** — inspect a fictional lab image for embedded clues.

The site checks submitted flags server-side using SHA-256 digests. The plaintext flags and instructor answer key are intentionally not included. The recon.php page contains a visible source-code clue for the Vigenère challenge by design.

## Requirements

- PHP 7.4 or newer with the standard session and hash functions.
- No database, Composer packages, or extra PHP extensions are required.

## Run locally

```sh
php -S 127.0.0.1:8000
```

Open http://127.0.0.1:8000. Stop the server with Ctrl+C when you finish.

For the EXIF challenge, download the provided image and inspect it with ExifTool:

```sh
exiftool -a -G1 assets/team_photo.jpg
```

## Project layout

```text
index.php                   Challenge index
challenges/                 Six challenge pages and the recon clue page
assets/style.css            Shared styles
assets/team_photo.jpg       Fictional image used by the EXIF challenge
assets/hash.txt             Demo hash for the hash exercise
assets/wordlist.txt         Small, purpose-built demo wordlist
assets/xor_cipher.txt       XOR ciphertext for the XOR exercise
includes/flag_check.php     Server-side flag verification helper
SECURITY.md                 Safe-use and security reporting notes
```

## Safety and scope

This is an educational challenge environment, not a production application or a security-testing tool. Keep it on localhost or in a disposable, isolated lab VM. Never point it at real services, accounts, or data. The puzzles use deliberately weak methods so learners can study them safely.

See SECURITY.md for the lab’s scope and reporting guidance.
