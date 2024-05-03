<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6634d5467b11f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto uugwoygiyecgymgw; } $aokagokqyuysuksm = "\155\141\162\x6b\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); uugwoygiyecgymgw: if ($sqeykgyoooqysmca) { goto acmgueaoaaweiqqu; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; acmgueaoaaweiqqu: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\146\151\x65\154\144\x2d\x68\x74\155\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto awaaowoqskgokwiy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); awaaowoqskgokwiy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\x73\x70\x61\x63\145"); return $this; } }
