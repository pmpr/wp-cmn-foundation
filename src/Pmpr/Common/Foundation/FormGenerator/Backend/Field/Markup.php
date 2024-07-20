<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c35a8281f4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto imeaooemieqcmgag; } $aokagokqyuysuksm = "\155\x61\x72\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); imeaooemieqcmgag: if ($sqeykgyoooqysmca) { goto soeawcescakswowc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; soeawcescakswowc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\146\x69\145\x6c\x64\55\x68\164\x6d\x6c"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qmiseemyqgoaemmo; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qmiseemyqgoaemmo: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\x73\x2d\163\160\141\143\x65"); return $this; } }
