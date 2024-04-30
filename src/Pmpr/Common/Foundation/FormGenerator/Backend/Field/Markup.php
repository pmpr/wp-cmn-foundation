<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630b55e1c67c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cauqmacqkssciwyq; } $aokagokqyuysuksm = "\155\141\x72\153\165\160\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cauqmacqkssciwyq: if ($sqeykgyoooqysmca) { goto gusgywuaimwooawc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; gusgywuaimwooawc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\x70\162\55\x66\x69\145\154\x64\x2d\150\164\155\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto uugwoygiyecgymgw; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); uugwoygiyecgymgw: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\55\x73\x70\x61\x63\145"); return $this; } }
