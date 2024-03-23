<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ff5b6f7cae0             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use WP_Error; class ManipulateRequest extends Manipulate { public static function omaawkkwwyesqwcc(array $ywmkwiwkosakssii = []) : array { return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::aqgsqqkgmigcsaau => true, self::kuisysmymgakemym => DecoratorHook::sscegwueamckwmcy("\150\x74\164\160\163\x5f\x6c\x6f\x63\141\154\137\163\163\x6c\137\x76\145\162\x69\146\x79", false)]); } public static function yyqgamuwwakgciey(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function eammiwsquyqgimgg(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function ykqgmaeumqwokcmo($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } }
