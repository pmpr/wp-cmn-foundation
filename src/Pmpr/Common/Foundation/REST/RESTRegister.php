<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\x65\163\x74\x5f\x61\160\151\x5f\151\156\x69\x74", [$this, "\164\151\x73\x77\x61\x79\x73\161\141\167\x75\143\147\x67\165\143"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto saikuiquwyasomue;
        saikuiquwyasomue:
        $this->gigwcakmiyayoigw();
        goto wegygoseewgquwcs;
        wegygoseewgquwcs:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto sucqiqmssemsygei;
            ysuykwkygggkkuqc:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto iqymwucscyyeqcwa;
            sucqiqmssemsygei:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto ssegekmssqkgsoge;
            }
            goto ysuykwkygggkkuqc;
            eiscuqyckkwcscog:
            cqygwmwkkiqqwquw:
            goto kiwskyeqwwokioks;
            iqymwucscyyeqcwa:
            ssegekmssqkgsoge:
            goto eiscuqyckkwcscog;
            kiwskyeqwwokioks:
        }
        goto iwgacmgmqsoyyuiu;
        iwgacmgmqsoyyuiu:
        iucwiggcmogeikck:
        goto akoqyygqeiiikmco;
        akoqyygqeiiikmco:
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
