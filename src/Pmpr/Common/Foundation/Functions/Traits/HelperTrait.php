<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668421067646d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ykeaeieyycoeqccm; } $this->helper = new Helper(); ykeaeieyycoeqccm: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto auguaocagomuuqqk; } self::$staticHelper = new Helper(); auguaocagomuuqqk: return self::$staticHelper; } }
