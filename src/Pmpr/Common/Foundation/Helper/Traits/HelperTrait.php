<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492ef49d4e3a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto wyqumeogqqakouyw; } $this->helper = new Helper(); wyqumeogqqakouyw: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto aeeoymcoceusaems; } self::$staticHelper = new Helper(); aeeoymcoceusaems: return self::$staticHelper; } }
