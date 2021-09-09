<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto wmqacumokqegmmiq;
        wmqacumokqegmmiq:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            wegiqgicwasiuomk:
        }
        goto cqewgaaqiwayuoko;
        kgywiqemagekugqe:
        return $this;
        goto uuiukusqaqkykiyi;
        cqewgaaqiwayuoko:
        gwewaiykiykyigeo:
        goto kgywiqemagekugqe;
        uuiukusqaqkykiyi:
    }
}
