<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\x65\163\164\137\x61\x70\x69\137\x69\x6e\151\164", [$this, "\x74\x69\163\x77\x61\x79\163\161\141\x77\x75\x63\147\147\165\x63"]);
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
            sucqiqmssemsygei:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto ssegekmssqkgsoge;
            }
            goto ysuykwkygggkkuqc;
            iqymwucscyyeqcwa:
            ssegekmssqkgsoge:
            goto eiscuqyckkwcscog;
            ysuykwkygggkkuqc:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto iqymwucscyyeqcwa;
            eiscuqyckkwcscog:
            cqygwmwkkiqqwquw:
            goto kiwskyeqwwokioks;
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
