<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665dbc319ca47             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto gscsssqcacocusua; } $this->helper = new Helper(); gscsssqcacocusua: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto sqwgcyyoaismwkqs; } self::$staticHelper = new Helper(); sqwgcyyoaismwkqs: return self::$staticHelper; } }
