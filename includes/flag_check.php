<?php
/**
 * ARC Labs training site -- flag verification helper.
 *
 * Only SHA-256 hashes of flags live in this file (which itself sits in
 * includes/, outside of anything linked from the site). The plaintext
 * flags are never rendered to students. See the separate, non-deployed
 * instructor answer key for plaintext values.
 */

const ARC_FLAG_HASHES = [
    'caesar_rot' => '1d4ebc595468202348049acff0c54adba5364ce8618afc24158430d596d1b2e4',
    'vigenere'   => '4ad11c122b01535454739de8d82308bd5000ffcd6296cae6eefec9b43c579090',
    'xor'        => '2e20f4b4825a232051f48884ba5a32f8d4488f452f34b91116384d6e9c8f72dc',
    'hash'       => 'd6edc8cb83c9a18424cbcaaca09297b336982ab1abb7b2bc24e724e5b3e5fbe6',
    'b64xor'     => '5f7e6acd482bf6842130b0970cf7f54fa69372c90ea30879ff8a801a8630bffe',
    'exif'       => '0ac7f0af5586d9e4e61c7e0a1b238bfd986c4d288ec051d70f58e9370a196e36',
];

/**
 * Check a submitted flag against the stored hash for a given challenge.
 * Trims whitespace and is case-sensitive (flags are case-sensitive by design).
 */
function arc_check_flag(string $challenge, string $submitted): bool
{
    if (!isset(ARC_FLAG_HASHES[$challenge])) {
        return false;
    }
    $submitted = trim($submitted);
    return hash_equals(ARC_FLAG_HASHES[$challenge], hash('sha256', $submitted));
}

/**
 * Render the flag submission form + result message for a challenge page.
 */
function arc_render_flag_form(string $challenge): void
{
    $result = null;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['flag'])) {
        $result = arc_check_flag($challenge, $_POST['flag']);
    }
    ?>
    <form class="flag-form" method="post">
        <input type="text" name="flag" placeholder="FLAG{...}" autocomplete="off"
               value="<?= isset($_POST['flag']) ? htmlspecialchars($_POST['flag']) : '' ?>">
        <button type="submit">Submit</button>
    </form>
    <?php if ($result === true): ?>
        <div class="result correct">Correct! Nice work.</div>
    <?php elseif ($result === false): ?>
        <div class="result wrong">Not quite -- keep trying.</div>
    <?php endif; ?>
    <?php
}
