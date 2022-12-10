<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6394c5fba8fb9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Manipulate; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use WP_Error; class ManipulateRequest extends Manipulate { public static function omaawkkwwyesqwcc(array $ywmkwiwkosakssii = []) : array { return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::aqgsqqkgmigcsaau => true, self::kuisysmymgakemym => DecoratorHook::sscegwueamckwmcy("\150\164\164\x70\163\137\x6c\x6f\143\x61\x6c\x5f\x73\163\154\x5f\166\145\x72\151\x66\x79", false)]); } public static function yyqgamuwwakgciey(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_get(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function eammiwsquyqgimgg(string $eeamcawaiqocomwy, array $ywmkwiwkosakssii = []) { return wp_remote_post(esc_url_raw($eeamcawaiqocomwy), self::omaawkkwwyesqwcc($ywmkwiwkosakssii)); } public static function ykqgmaeumqwokcmo($keccaugmemegoimu) : string { return wp_remote_retrieve_body($keccaugmemegoimu); } }
