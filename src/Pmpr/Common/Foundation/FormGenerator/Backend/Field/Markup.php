<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669d714733e69             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto imeaooemieqcmgag; } $aokagokqyuysuksm = "\x6d\141\x72\x6b\165\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); imeaooemieqcmgag: if ($sqeykgyoooqysmca) { goto soeawcescakswowc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; soeawcescakswowc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\55\146\x69\x65\x6c\144\55\150\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto qmiseemyqgoaemmo; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); qmiseemyqgoaemmo: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\55\x73\160\x61\143\x65"); return $this; } }
