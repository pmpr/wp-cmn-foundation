<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5cc3c612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Traits; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Button; trait ButtonsTrait { protected array $buttons = []; public function imswwiyicyksouus() : ?array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function woyauweuuyoqmqeo(array $qyukicweqoisimwg) : self { $this->buttons = $qyukicweqoisimwg; return $this; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { if ($gskauacumcmekigs->yywskysiycwkwsgw()) { goto eosmwawqaocwgccq; } $gskauacumcmekigs->jyumyyugiwwiqomk(count($this->imswwiyicyksouus()) + 1); eosmwawqaocwgccq: $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function ygwuaykqmkaymyqs(array $qyukicweqoisimwg) : self { foreach ($qyukicweqoisimwg as $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Button) { goto ekgsawcuswowmosm; } $this->igmamuiesywmkgeu($gskauacumcmekigs); ekgsawcuswowmosm: keqagmaiqqsgkmso: } eymiqwsygoowowuu: return $this; } }
