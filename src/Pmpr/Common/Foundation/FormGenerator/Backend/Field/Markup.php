<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630fafa1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uugwoygiyecgymgw; } $aokagokqyuysuksm = "\x6d\x61\x72\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uugwoygiyecgymgw: if ($sqeykgyoooqysmca) { goto acmgueaoaaweiqqu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; acmgueaoaaweiqqu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\146\x69\145\x6c\144\x2d\x68\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto awaaowoqskgokwiy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); awaaowoqskgokwiy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\x73\x70\x61\x63\145"); return $this; } }
