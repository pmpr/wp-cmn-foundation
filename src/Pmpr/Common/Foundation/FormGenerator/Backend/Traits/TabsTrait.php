<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6d87474a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto keygauyiuaycggcw; } if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto wwugkwcimumgukko; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); wwugkwcimumgukko: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; keygauyiuaycggcw: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto ciwcwcqkgkmoguok; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); ciwcwcqkgkmoguok: gyaoqaggggoiaoqs: } memcsokyqmowucuo: return $this; } }
