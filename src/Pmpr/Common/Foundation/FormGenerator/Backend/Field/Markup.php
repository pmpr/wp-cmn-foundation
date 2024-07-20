<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c444fadf9a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto aqwccmsqgqgumymq; } $aokagokqyuysuksm = "\155\141\162\x6b\165\160\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); aqwccmsqgqgumymq: if ($sqeykgyoooqysmca) { goto imeaooemieqcmgag; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; imeaooemieqcmgag: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\x72\x2d\146\151\x65\154\144\x2d\150\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto soeawcescakswowc; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); soeawcescakswowc: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\163\x2d\163\160\x61\143\x65"); return $this; } }
