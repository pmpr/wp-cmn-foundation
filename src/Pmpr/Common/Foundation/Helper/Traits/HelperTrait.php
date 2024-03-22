<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65fd7defcd6f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto ugkqimokoeicsyqm; } $this->helper = new Helper(); ugkqimokoeicsyqm: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto kyuewcuomwmweguq; } self::$staticHelper = new Helper(); kyuewcuomwmweguq: return self::$staticHelper; } }
