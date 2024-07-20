<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c3a21eaac3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto aqwccmsqgqgumymq; } $aokagokqyuysuksm = "\x6d\141\162\153\x75\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); aqwccmsqgqgumymq: if ($sqeykgyoooqysmca) { goto imeaooemieqcmgag; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; imeaooemieqcmgag: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\55\x66\x69\x65\154\x64\x2d\x68\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto soeawcescakswowc; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); soeawcescakswowc: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\55\x73\160\x61\143\145"); return $this; } }
