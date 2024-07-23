<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669f571e3146a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto imeaooemieqcmgag; } $aokagokqyuysuksm = "\155\x61\x72\x6b\x75\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); imeaooemieqcmgag: if ($sqeykgyoooqysmca) { goto soeawcescakswowc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; soeawcescakswowc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\151\x65\x6c\x64\55\150\x74\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qmiseemyqgoaemmo; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qmiseemyqgoaemmo: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\55\163\160\x61\x63\145"); return $this; } }
