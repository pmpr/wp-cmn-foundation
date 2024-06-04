<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             665f429803592             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto sgyickkqymqecksi; } $aokagokqyuysuksm = "\x6d\x61\x72\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); sgyickkqymqecksi: if ($sqeykgyoooqysmca) { goto aqiiysigquiqsgeg; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; aqiiysigquiqsgeg: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\x2d\146\x69\145\x6c\144\x2d\x68\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto kiqaiwiwmeesaagy; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); kiqaiwiwmeesaagy: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\x70\x61\x63\x65"); return $this; } }
