<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65536707cb9cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto sawkmwweawsciysi; } $this->wrapper = new Wrapper(); sawkmwweawsciysi: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto uiceasouwuawugsq; } self::$staticWrapper = new Wrapper(); uiceasouwuawugsq: return self::$staticWrapper; } }
