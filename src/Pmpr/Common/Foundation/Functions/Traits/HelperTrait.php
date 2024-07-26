<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f45159400             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto mgcieuiwescwqymy; } $this->helper = new Helper(); mgcieuiwescwqymy: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto uyyomesiccsqemog; } self::$staticHelper = new Helper(); uyyomesiccsqemog: return self::$staticHelper; } }
