<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a5844728f1d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Traits; use Pmpr\Common\Foundation\Functions\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto egqeaugqciqqaais; } $this->helper = new Helper(); egqeaugqciqqaais: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto qumgeeowggyeimes; } self::$staticHelper = new Helper(); qumgeeowggyeimes: return self::$staticHelper; } }
