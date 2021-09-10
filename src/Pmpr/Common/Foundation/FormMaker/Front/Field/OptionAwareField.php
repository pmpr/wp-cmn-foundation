<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;


class OptionAwareField extends Field
{
    
    protected ?array $options = [];
    
    public function gkwkqmwweiawigae() : ?array
    {
        return $this->options;
    }
    
    public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self
    {
        $this->options = $qiouiwasaauyaaue;
        return $this;
    }
    
    public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self
    {
        $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    public function acauweqyyugwisqc($qiouiwasaauyaaue) : self
    {
        goto zkqawssceymsouka;
        wgmoucsgmmgsoeks:
        csaumcaiqkmaosqw:
        goto kgcygucmaeeaeoqw;
        zkqawssceymsouka:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            qkcawoouacuyaiiw:
        }
        goto wgmoucsgmmgsoeks;
        kgcygucmaeeaeoqw:
        return $this;
        goto ayumqmewoimoeiwi;
        ayumqmewoimoeiwi:
    }
}
