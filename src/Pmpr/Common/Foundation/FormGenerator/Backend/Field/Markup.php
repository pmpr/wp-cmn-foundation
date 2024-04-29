<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             663029441b0a9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cauqmacqkssciwyq; } $aokagokqyuysuksm = "\155\141\162\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cauqmacqkssciwyq: if ($sqeykgyoooqysmca) { goto gusgywuaimwooawc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; gusgywuaimwooawc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\x66\151\x65\154\x64\x2d\x68\x74\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto uugwoygiyecgymgw; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); uugwoygiyecgymgw: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x61\x73\x2d\163\x70\141\x63\145"); return $this; } }
