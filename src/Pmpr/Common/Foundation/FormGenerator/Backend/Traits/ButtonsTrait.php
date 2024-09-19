<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08eec428e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; trait ButtonsTrait { protected array $buttons = []; public function imswwiyicyksouus() : ?array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function woyauweuuyoqmqeo(array $qyukicweqoisimwg) : self { $this->buttons = $qyukicweqoisimwg; return $this; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { if ($gskauacumcmekigs->yywskysiycwkwsgw()) { goto iqiuaammwkeiamuo; } $gskauacumcmekigs->jyumyyugiwwiqomk(count($this->imswwiyicyksouus()) + 1); iqiuaammwkeiamuo: $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function ygwuaykqmkaymyqs(array $qyukicweqoisimwg) : self { foreach ($qyukicweqoisimwg as $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Button) { goto aqwcyyigiukqikui; } $this->igmamuiesywmkgeu($gskauacumcmekigs); aqwcyyigiukqikui: zawceoyikyuwoucg: } imygueoqiqikwcws: return $this; } }
