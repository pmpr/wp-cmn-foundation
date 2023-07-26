<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c1370edbfb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto yawiksokukeuwumm; } $this->wrapper = new Wrapper(); yawiksokukeuwumm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto wiisumwwuyqmqggs; } self::$staticWrapper = new Wrapper(); wiisumwwuyqmqggs: return self::$staticWrapper; } }
