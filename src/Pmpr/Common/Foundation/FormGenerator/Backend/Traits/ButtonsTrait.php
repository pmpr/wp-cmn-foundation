<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d819504ee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; trait ButtonsTrait { protected array $buttons = []; public function imswwiyicyksouus() : ?array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function woyauweuuyoqmqeo(array $qyukicweqoisimwg) : self { $this->buttons = $qyukicweqoisimwg; return $this; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { if ($gskauacumcmekigs->yywskysiycwkwsgw()) { goto ewosekcicaqucsua; } $gskauacumcmekigs->jyumyyugiwwiqomk(count($this->imswwiyicyksouus()) + 1); ewosekcicaqucsua: $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function ygwuaykqmkaymyqs(array $qyukicweqoisimwg) : self { foreach ($qyukicweqoisimwg as $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Button) { goto ymsscygscwwicumm; } $this->igmamuiesywmkgeu($gskauacumcmekigs); ymsscygscwwicumm: sgamuuiycksmssoi: } mugaisykgmqcaggg: return $this; } }
