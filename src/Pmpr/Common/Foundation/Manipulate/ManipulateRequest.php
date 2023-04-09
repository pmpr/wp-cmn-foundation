<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6432beb117511             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use WP_Error; class ManipulateRequest extends Manipulate { public static function omaawkkwwyesqwcc(array $ywmkwiwkosakssii = []) : array { return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::aqgsqqkgmigcsaau => true, self::kuisysmymgakemym => DecoratorHook::sscegwueamckwmcy("\150\164\x74\x70\163\x5f\x6c\157\x63\141\x6c\x5f\163\x73\154\x5f\x76\145\162\151\x66\x79", false)]); } public static function yyqgamuwwakgciey(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function eammiwsquyqgimgg(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function ykqgmaeumqwokcmo($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } }
