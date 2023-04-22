<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644402fcab147             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto qsqwywcesyquykqq; } $this->wrapper = new Wrapper(); qsqwywcesyquykqq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto kqscgsuaugsiwiwi; } self::$staticWrapper = new Wrapper(); kqscgsuaugsiwiwi: return self::$staticWrapper; } }
