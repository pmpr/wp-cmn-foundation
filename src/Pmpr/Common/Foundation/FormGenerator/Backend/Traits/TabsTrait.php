<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77cb5a35c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; trait TabsTrait { protected array $tabs = []; public function equiyaoamqmaeckc() : array { return $this->tabs; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function kmmgwqwowkgusics(array $ywoucyskcquysiwc) : self { $this->tabs = $ywoucyskcquysiwc; return $this; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce) : self { if (!$cciauwuwuqaywgce) { goto ciwcwcqkgkmoguok; } if ($cciauwuwuqaywgce->yywskysiycwkwsgw()) { goto gyaoqaggggoiaoqs; } $cciauwuwuqaywgce->jyumyyugiwwiqomk(count($this->equiyaoamqmaeckc()) + 1); gyaoqaggggoiaoqs: $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; ciwcwcqkgkmoguok: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto wameiecycmkcuimk; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); wameiecycmkcuimk: qgeiemoywoccmwgw: } ksseoiqcgiqsamwy: return $this; } }
