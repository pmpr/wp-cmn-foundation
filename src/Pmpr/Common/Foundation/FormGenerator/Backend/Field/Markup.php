<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e0f1a4291a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto acuusyssiosuysmg; } $aokagokqyuysuksm = "\155\141\x72\x6b\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); acuusyssiosuysmg: if ($sqeykgyoooqysmca) { goto sgyickkqymqecksi; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; sgyickkqymqecksi: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\146\151\145\x6c\x64\55\x68\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto aqiiysigquiqsgeg; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); aqiiysigquiqsgeg: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\x73\160\x61\x63\145"); return $this; } }
