<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657605ed631a1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto cmkiiseesikwqgou; } $this->helper = new Helper(); cmkiiseesikwqgou: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto kwyiqscekoommuog; } self::$staticHelper = new Helper(); kwyiqscekoommuog: return self::$staticHelper; } }
