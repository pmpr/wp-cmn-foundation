<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64524fcf95de8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper; class Sanitize extends Common { public function key($uusmaiomayssaecw) : ?string { return sanitize_key($uusmaiomayssaecw); } public function wkcwykowmmmwioqs($wkcwykowmmmwioqs) : ?string { return sanitize_file_name($wkcwykowmmmwioqs); } public function wouqysuosmigaggy($meqocwsecsywiiqs) : ?string { return sanitize_title_with_dashes($meqocwsecsywiiqs); } public function aoeoykwemwaqsikc($wkcwykowmmmwioqs) : ?string { return sanitize_text_field($wkcwykowmmmwioqs); } public function wseociicuusckqmu($wkcwykowmmmwioqs, $cwugquwaukuuosaw = '') : ?string { return sanitize_html_class($wkcwykowmmmwioqs, $cwugquwaukuuosaw); } public function iwewcwusemqaiggk($iwewcwusemqaiggk, $kesssewsiegssiya, $mgkceomocowocqyo = self::qoawsacmmgmimqaw) { return sanitize_term($iwewcwusemqaiggk, $kesssewsiegssiya, $mgkceomocowocqyo); } public function meqocwsecsywiiqs($meqocwsecsywiiqs, $cwugquwaukuuosaw = '', $mgkceomocowocqyo = "\x73\x61\166\x65") : ?string { return sanitize_title($meqocwsecsywiiqs, $cwugquwaukuuosaw, $mgkceomocowocqyo); } }
