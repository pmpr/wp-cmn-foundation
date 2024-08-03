<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66aeb5dd1a4cd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; class Markup extends Field { protected $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if ($aokagokqyuysuksm) { goto wqcquwuiqkqaoamo; } $aokagokqyuysuksm = "\155\141\162\153\x75\x70\137" . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); wqcquwuiqkqaoamo: if ($sqeykgyoooqysmca) { goto csueasskicaaoaii; } $sqeykgyoooqysmca = self::kicoscymgmgqeqgy; csueasskicaaoaii: $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\160\162\x2d\x66\151\145\x6c\x64\55\x68\x74\x6d\154"); } public function oguessuismosauuu($ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } public function souwykwwmyygqyqi() { $ewgwqamkygiqaawc = $this->content; if (!is_callable($ewgwqamkygiqaawc)) { goto yyousguikogqkecs; } $ewgwqamkygiqaawc = $ewgwqamkygiqaawc($this); yyousguikogqkecs: return $ewgwqamkygiqaawc; } public function iimeiciayeewywqg() : self { $this->kakecegieeqyyayu()->qigsyyqgewgskemg("\141\163\x2d\x73\160\x61\x63\145"); return $this; } }
