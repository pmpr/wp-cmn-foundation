<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6403c9f23603d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto oqkqaggagwswaaqi; } $this->helper = new Helper(); oqkqaggagwswaaqi: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto qiiwgkcyqweecqoa; } self::$staticHelper = new Helper(); qiiwgkcyqweecqoa: return self::$staticHelper; } }
