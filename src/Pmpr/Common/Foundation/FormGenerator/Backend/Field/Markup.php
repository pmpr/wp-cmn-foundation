<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669eebb4a8985             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto imeaooemieqcmgag; } $aokagokqyuysuksm = "\155\x61\162\x6b\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); imeaooemieqcmgag: if ($sqeykgyoooqysmca) { goto soeawcescakswowc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; soeawcescakswowc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\x69\x65\154\x64\x2d\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qmiseemyqgoaemmo; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qmiseemyqgoaemmo: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\x73\x70\141\143\145"); return $this; } }
