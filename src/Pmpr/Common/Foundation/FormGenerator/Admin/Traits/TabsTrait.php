<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63aea747c3d8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Admin\Traits; use Pmpr\Common\Foundation\FormGenerator\Admin\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto gsimeiqkoyqkuecq; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); gsimeiqkoyqkuecq: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto quewwumogiocouii; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); quewwumogiocouii: eyuoecmogqwkmomi: } gqywcowiigceimaw: return $this; } }
