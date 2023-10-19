<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6530ee0ae0c70             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto oseqayimqaycaycw; } $this->wrapper = new Wrapper(); oseqayimqaycaycw: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto imsmosgqcqgeksws; } self::$staticWrapper = new Wrapper(); imsmosgqcqgeksws: return self::$staticWrapper; } }
