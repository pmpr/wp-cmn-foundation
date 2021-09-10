<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto ksyuggwmykuiiooy;
        aqiyqkqkeeaokeka:
        return $this;
        goto csaumcaiqkmaosqw;
        weckoamymcgsskke:
        skwsosgqyumikwkm:
        goto aqiyqkqkeeaokeka;
        ksyuggwmykuiiooy:
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            umuqqcsocwogmmuw:
        }
        goto weckoamymcgsskke;
        csaumcaiqkmaosqw:
    }
}
