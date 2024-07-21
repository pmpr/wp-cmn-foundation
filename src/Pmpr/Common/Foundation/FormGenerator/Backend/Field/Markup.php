<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d5640862e9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto imeaooemieqcmgag; } $aokagokqyuysuksm = "\155\x61\x72\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); imeaooemieqcmgag: if ($sqeykgyoooqysmca) { goto soeawcescakswowc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; soeawcescakswowc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\x66\x69\x65\154\144\x2d\150\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qmiseemyqgoaemmo; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qmiseemyqgoaemmo: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\55\x73\x70\141\x63\145"); return $this; } }
