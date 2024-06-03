<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665dbc319ca47             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto acuusyssiosuysmg; } $aokagokqyuysuksm = "\x6d\141\162\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); acuusyssiosuysmg: if ($sqeykgyoooqysmca) { goto sgyickkqymqecksi; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; sgyickkqymqecksi: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\x66\x69\x65\154\x64\x2d\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto aqiiysigquiqsgeg; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); aqiiysigquiqsgeg: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\x73\x70\x61\x63\145"); return $this; } }
