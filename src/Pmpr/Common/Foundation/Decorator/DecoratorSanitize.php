<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655dfeabddd0c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Decorator; class DecoratorSanitize extends Decorator { public static function key($uusmaiomayssaecw) : ?string { return sanitize_key($uusmaiomayssaecw); } public static function wkcwykowmmmwioqs($wkcwykowmmmwioqs) : ?string { return sanitize_file_name($wkcwykowmmmwioqs); } public static function wouqysuosmigaggy($meqocwsecsywiiqs) : ?string { return sanitize_title_with_dashes($meqocwsecsywiiqs); } public static function aoeoykwemwaqsikc($wkcwykowmmmwioqs) : ?string { return sanitize_text_field($wkcwykowmmmwioqs); } public static function wseociicuusckqmu($wkcwykowmmmwioqs, $cwugquwaukuuosaw = '') : ?string { return sanitize_html_class($wkcwykowmmmwioqs, $cwugquwaukuuosaw); } public static function iwewcwusemqaiggk($iwewcwusemqaiggk, $kesssewsiegssiya, $mgkceomocowocqyo = self::qoawsacmmgmimqaw) { return sanitize_term($iwewcwusemqaiggk, $kesssewsiegssiya, $mgkceomocowocqyo); } public static function meqocwsecsywiiqs($meqocwsecsywiiqs, $cwugquwaukuuosaw = '', $mgkceomocowocqyo = "\x73\x61\166\x65") : ?string { return sanitize_title($meqocwsecsywiiqs, $cwugquwaukuuosaw, $mgkceomocowocqyo); } }
