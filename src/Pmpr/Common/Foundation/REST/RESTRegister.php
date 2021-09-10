<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\145\163\x74\x5f\x61\160\x69\137\x69\156\151\x74", [$this, "\164\151\x73\x77\141\x79\x73\x71\141\x77\x75\143\x67\147\x75\143"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto wegygoseewgquwcs;
        akoqyygqeiiikmco:
        cqygwmwkkiqqwquw:
        goto iooomaqggygwwuok;
        iwgacmgmqsoyyuiu:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto ysuykwkygggkkuqc;
            kiwskyeqwwokioks:
            ssegekmssqkgsoge:
            goto saikuiquwyasomue;
            ysuykwkygggkkuqc:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto sucqiqmssemsygei;
            }
            goto iqymwucscyyeqcwa;
            eiscuqyckkwcscog:
            sucqiqmssemsygei:
            goto kiwskyeqwwokioks;
            iqymwucscyyeqcwa:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto eiscuqyckkwcscog;
            saikuiquwyasomue:
        }
        goto akoqyygqeiiikmco;
        wegygoseewgquwcs:
        $this->gigwcakmiyayoigw();
        goto iwgacmgmqsoyyuiu;
        iooomaqggygwwuok:
    }
    
    public function ksmgmuacawsaomao() : array
    {
        return $this->controllers;
    }
    
    public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self
    {
        $this->controllers[] = $ioqmgqkiwqgmgcks;
        return $this;
    }
    public abstract function gigwcakmiyayoigw();
}
