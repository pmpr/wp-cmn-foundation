<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             645b588b1c7bc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Decorator; class DecoratorCache extends Decorator { public static function get($uusmaiomayssaecw, $isksgswsmmqgeqmo = '', $cwwowqyuwccuykom = false, &$yumccasyisqwmmio = null) { return wp_cache_get($uusmaiomayssaecw, $isksgswsmmqgeqmo, $cwwowqyuwccuykom, $yumccasyisqwmmio); } public static function set($uusmaiomayssaecw, $icwicymcioeyeyek, $isksgswsmmqgeqmo = '', $owiuekcekysskaoe = 0) : bool { return wp_cache_set($uusmaiomayssaecw, $icwicymcioeyeyek, $isksgswsmmqgeqmo, $owiuekcekysskaoe); } public static function delete($uusmaiomayssaecw, $isksgswsmmqgeqmo = '') : bool { return wp_cache_delete($uusmaiomayssaecw, $isksgswsmmqgeqmo); } }
