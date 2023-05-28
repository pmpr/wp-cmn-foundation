<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64733c1ce743c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use WP_Error; class ManipulateRequest extends Manipulate { public static function omaawkkwwyesqwcc(array $ywmkwiwkosakssii = []) : array { return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::aqgsqqkgmigcsaau => true, self::kuisysmymgakemym => DecoratorHook::sscegwueamckwmcy("\x68\164\x74\160\163\137\x6c\x6f\x63\x61\154\137\x73\163\154\137\x76\145\162\x69\146\171", false)]); } public static function yyqgamuwwakgciey(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function eammiwsquyqgimgg(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function ykqgmaeumqwokcmo($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } }
