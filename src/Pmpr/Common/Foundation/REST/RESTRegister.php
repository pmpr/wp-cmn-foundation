<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\145\163\164\x5f\x61\160\151\x5f\151\x6e\151\164", [$this, "\164\x69\163\167\141\171\163\161\141\x77\165\x63\147\147\x75\143"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto wqgwguwaoomgaiik;
        gyaowmgukagqyoeq:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto sycmggisamuqcmqm;
            sycmggisamuqcmqm:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto mksiaogycqumieig;
            }
            goto kqkwquycsmecsyoa;
            kqkwquycsmecsyoa:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto eyweqiugyoewuqks;
            ecgwiyooacwymoum:
            waasqesguuugkyki:
            goto oigccucsmoiegsic;
            eyweqiugyoewuqks:
            mksiaogycqumieig:
            goto ecgwiyooacwymoum;
            oigccucsmoiegsic:
        }
        goto ucycmogwkmqoqycw;
        wqgwguwaoomgaiik:
        $this->gigwcakmiyayoigw();
        goto gyaowmgukagqyoeq;
        ucycmogwkmqoqycw:
        cggoissgmskoycqy:
        goto maeqicokuuskkcac;
        maeqicokuuskkcac:
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
