<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665e31bc60886             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto acuusyssiosuysmg; } $aokagokqyuysuksm = "\155\x61\x72\x6b\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); acuusyssiosuysmg: if ($sqeykgyoooqysmca) { goto sgyickkqymqecksi; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; sgyickkqymqecksi: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\151\x65\154\144\55\x68\164\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto aqiiysigquiqsgeg; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); aqiiysigquiqsgeg: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\x70\x61\143\145"); return $this; } }
