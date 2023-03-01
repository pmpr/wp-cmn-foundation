<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffb8ad6ac3f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Post; use WP_Error; use WP_Taxonomy; class Taxonomy extends Common { public function get($kesssewsiegssiya) { return get_taxonomy($kesssewsiegssiya); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aqykuigiuwmmcieu = self::emgcgiseaoouacge, string $cackiyicawmkyqqg = "\141\156\x64") : array { return get_taxonomies($ywmkwiwkosakssii, $aqykuigiuwmmcieu, $cackiyicawmkyqqg); } public function qgckgkwskmsomoqs($mksyucucyswaukig, string $aqykuigiuwmmcieu = self::emgcgiseaoouacge) : array { return get_object_taxonomies($mksyucucyswaukig, $aqykuigiuwmmcieu); } public function myagqecycsaiyqsk(string $kesssewsiegssiya) : bool { return taxonomy_exists($kesssewsiegssiya); } public function register($kesssewsiegssiya, $mqyaskyaekmkegmg, $ywmkwiwkosakssii = []) { return register_taxonomy($kesssewsiegssiya, $mqyaskyaekmkegmg, $ywmkwiwkosakssii); } public function ycewygugskisecuo($kesssewsiegssiya, $mqyaskyaekmkegmg) : bool { return register_taxonomy_for_object_type($kesssewsiegssiya, $mqyaskyaekmkegmg); } public function aewcsqigycuaekym($kesssewsiegssiya) : bool { return is_taxonomy_hierarchical($kesssewsiegssiya); } }
