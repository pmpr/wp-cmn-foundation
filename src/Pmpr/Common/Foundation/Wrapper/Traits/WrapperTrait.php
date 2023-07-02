<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a18c630610a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto smecgcsaskaiyqwg; } $this->wrapper = new Wrapper(); smecgcsaskaiyqwg: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto kwqqookuogugoeoc; } self::$staticWrapper = new Wrapper(); kwqqookuogugoeoc: return self::$staticWrapper; } }
