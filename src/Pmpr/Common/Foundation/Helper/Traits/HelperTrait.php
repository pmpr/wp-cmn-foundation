<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643a53df34d76             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto iyekyouiiwcsewgy; } $this->helper = new Helper(); iyekyouiiwcsewgy: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto sqsksyaqsweqiyci; } self::$staticHelper = new Helper(); sqsksyaqsweqiyci: return self::$staticHelper; } }
