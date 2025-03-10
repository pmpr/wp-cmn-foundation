<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaefdf7a8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Frontend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Markup extends Field { protected ?string $content = null; public function __construct(string $aokagokqyuysuksm = '', string $sqeykgyoooqysmca = '') { if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = 'markup_' . $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } if (!$sqeykgyoooqysmca) { $sqeykgyoooqysmca = Constants::kicoscymgmgqeqgy; } $this->askmmuauqcuuqsea('Markup'); $this->storable = false; parent::__construct($aokagokqyuysuksm, $sqeykgyoooqysmca); } public function oguessuismosauuu(?string $ewgwqamkygiqaawc) : self { $this->content = $ewgwqamkygiqaawc; return $this; } }
