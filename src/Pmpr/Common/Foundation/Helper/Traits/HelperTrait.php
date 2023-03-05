<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6404a29e50a36             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Helper\Traits; use Pmpr\Common\Foundation\Helper\Helper; trait HelperTrait { protected ?Helper $helper = null; protected static ?Helper $staticHelper = null; public function caokeucsksukesyo() : Helper { if ($this->helper) { goto qiiwgkcyqweecqoa; } $this->helper = new Helper(); qiiwgkcyqweecqoa: return $this->helper; } public static function iwgqamekocwaigci() : Helper { if (self::$staticHelper) { goto ekkkweoucuyuqwik; } self::$staticHelper = new Helper(); ekkkweoucuyuqwik: return self::$staticHelper; } }
