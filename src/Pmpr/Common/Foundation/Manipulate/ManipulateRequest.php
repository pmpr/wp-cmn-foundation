<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d60f6616b83             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Manipulate; use WP_Error; class ManipulateRequest extends Manipulate { public static function yyqgamuwwakgciey(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public static function eammiwsquyqgimgg(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post($eeamcawaiqocomwy, $ywmkwiwkosakssii); } public static function ykqgmaeumqwokcmo($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } }
