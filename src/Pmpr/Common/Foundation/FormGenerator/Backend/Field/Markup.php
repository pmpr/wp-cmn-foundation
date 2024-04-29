<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66302f12394be             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto cauqmacqkssciwyq; } $aokagokqyuysuksm = "\x6d\x61\x72\153\165\x70\x5f" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); cauqmacqkssciwyq: if ($sqeykgyoooqysmca) { goto gusgywuaimwooawc; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; gusgywuaimwooawc: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\x72\x2d\x66\151\145\154\x64\55\x68\164\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto uugwoygiyecgymgw; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc(); uugwoygiyecgymgw: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\x73\160\141\x63\x65"); return $this; } }
