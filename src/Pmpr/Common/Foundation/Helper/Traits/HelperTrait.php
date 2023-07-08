<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a9071795a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ieuawqgmecwsukqg; } $this->helper = new Helper(); ieuawqgmecwsukqg: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto kgoiagiewgoeuyym; } self::$staticHelper = new Helper(); kgoiagiewgoeuyym: return self::$staticHelper; } }
