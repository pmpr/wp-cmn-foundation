<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4b95e34c9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto acyuamggaiuqmsoa; } $this->wrapper = new Wrapper(); acyuamggaiuqmsoa: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto oykmqmogcwumacqq; } self::$staticWrapper = new Wrapper(); oykmqmogcwumacqq: return self::$staticWrapper; } }
