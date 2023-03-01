<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ffcf4ab8d26             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; abstract class OptionAwareField extends Field { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); oqugqwcyomiaaoqu: } eeqesooyqagwawae: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($this->msmiagueogcsucgc() && !$this->oiswysuiioecsaae())) { goto foeeqckqsyockkak; } $this->eyygsasuqmommkua(array_key_first($this->gkwkqmwweiawigae())); foeeqckqsyockkak: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
