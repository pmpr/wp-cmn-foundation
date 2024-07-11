<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f2a487f65c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Wrapper\Wrapper; trait WrapperTrait { protected ?Wrapper $wrapper = null; protected static ?Wrapper $staticWrapper = null; public function uwkmaywceaaaigwo() : Wrapper { if ($this->wrapper) { goto mkuuaucmumoqmogc; } $this->wrapper = new Wrapper(); mkuuaucmumoqmogc: return $this->wrapper; } public static function haqswuugoswcyoia() : Wrapper { if (self::$staticWrapper) { goto qsiiueeogkusyayq; } self::$staticWrapper = new Wrapper(); qsiiueeogkusyayq: return self::$staticWrapper; } }
