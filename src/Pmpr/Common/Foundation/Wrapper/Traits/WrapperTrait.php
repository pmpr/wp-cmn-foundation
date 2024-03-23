<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65fee406e227f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto eiecqmeuaaaiwgiq; } $this->wrapper = new Wrapper(); eiecqmeuaaaiwgiq: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto icisyikkoqqasowa; } self::$staticWrapper = new Wrapper(); icisyikkoqqasowa: return self::$staticWrapper; } }
