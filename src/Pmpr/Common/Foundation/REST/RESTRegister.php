<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\162\145\163\x74\137\x61\x70\151\x5f\151\x6e\151\164", [$this, "\x74\151\x73\x77\x61\x79\x73\x71\x61\167\x75\143\x67\x67\165\x63"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto wqgwguwaoomgaiik;
        gyaowmgukagqyoeq:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto sycmggisamuqcmqm;
            eyweqiugyoewuqks:
            mksiaogycqumieig:
            goto ecgwiyooacwymoum;
            ecgwiyooacwymoum:
            waasqesguuugkyki:
            goto oigccucsmoiegsic;
            kqkwquycsmecsyoa:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto eyweqiugyoewuqks;
            sycmggisamuqcmqm:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto mksiaogycqumieig;
            }
            goto kqkwquycsmecsyoa;
            oigccucsmoiegsic:
        }
        goto ucycmogwkmqoqycw;
        ucycmogwkmqoqycw:
        cggoissgmskoycqy:
        goto maeqicokuuskkcac;
        wqgwguwaoomgaiik:
        $this->gigwcakmiyayoigw();
        goto gyaowmgukagqyoeq;
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
