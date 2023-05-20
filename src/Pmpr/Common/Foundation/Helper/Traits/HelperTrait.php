<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64690d716cb03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto mckkqgseimcgkcgu; } $this->helper = new Helper(); mckkqgseimcgkcgu: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto syqysaawasmesiqs; } self::$staticHelper = new Helper(); syqysaawasmesiqs: return self::$staticHelper; } }
