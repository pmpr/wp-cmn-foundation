<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6669766bc975d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto qqcciieyaqwkcasi; } $aokagokqyuysuksm = "\155\141\x72\153\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); qqcciieyaqwkcasi: if ($sqeykgyoooqysmca) { goto oyskccqkmomukcoi; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; oyskccqkmomukcoi: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\55\x66\151\x65\x6c\x64\x2d\x68\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto sckwuwwueomkksag; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); sckwuwwueomkksag: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\x73\x70\141\143\x65"); return $this; } }
