<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\x65\163\164\x5f\141\160\151\137\151\156\x69\x74", [$this, "\164\151\x73\x77\141\x79\x73\x71\141\167\x75\143\x67\147\x75\x63"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto saikuiquwyasomue;
        iwgacmgmqsoyyuiu:
        iucwiggcmogeikck:
        goto akoqyygqeiiikmco;
        wegygoseewgquwcs:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto sucqiqmssemsygei;
            ysuykwkygggkkuqc:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto iqymwucscyyeqcwa;
            iqymwucscyyeqcwa:
            ssegekmssqkgsoge:
            goto eiscuqyckkwcscog;
            sucqiqmssemsygei:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto ssegekmssqkgsoge;
            }
            goto ysuykwkygggkkuqc;
            eiscuqyckkwcscog:
            cqygwmwkkiqqwquw:
            goto kiwskyeqwwokioks;
            kiwskyeqwwokioks:
        }
        goto iwgacmgmqsoyyuiu;
        saikuiquwyasomue:
        $this->gigwcakmiyayoigw();
        goto wegygoseewgquwcs;
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
