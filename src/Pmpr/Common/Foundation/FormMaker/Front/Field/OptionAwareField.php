<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61488e738039d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormMaker\Front\Field; class OptionAwareField extends Field { protected ?array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function acauweqyyugwisqc($qiouiwasaauyaaue) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); swkukukimeueycaq: } qsecoiqswyiseake: return $this; } }
