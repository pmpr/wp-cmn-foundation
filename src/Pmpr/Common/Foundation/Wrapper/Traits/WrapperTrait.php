<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65f54b835db18             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Wrapper\Traits; use Pmpr\Common\Foundation\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto gqoiykcskgcqsikm; } $this->wrapper = new Wrapper(); gqoiykcskgcqsikm: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto eiecqmeuaaaiwgiq; } self::$staticWrapper = new Wrapper(); eiecqmeuaaaiwgiq: return self::$staticWrapper; } }
