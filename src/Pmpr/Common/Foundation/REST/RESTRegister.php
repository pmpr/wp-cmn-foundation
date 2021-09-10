<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\x65\x73\164\x5f\x61\x70\151\137\151\x6e\x69\164", [$this, "\164\151\x73\x77\141\x79\x73\161\x61\x77\x75\x63\x67\x67\x75\143"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto eyweqiugyoewuqks;
        eyweqiugyoewuqks:
        $this->gigwcakmiyayoigw();
        goto ecgwiyooacwymoum;
        ecgwiyooacwymoum:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto cggoissgmskoycqy;
            mksiaogycqumieig:
            qooeamikmycgiyse:
            goto sycmggisamuqcmqm;
            cggoissgmskoycqy:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto qooeamikmycgiyse;
            }
            goto waasqesguuugkyki;
            sycmggisamuqcmqm:
            eccqqigoouugsysq:
            goto kqkwquycsmecsyoa;
            waasqesguuugkyki:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto mksiaogycqumieig;
            kqkwquycsmecsyoa:
        }
        goto oigccucsmoiegsic;
        oigccucsmoiegsic:
        ausccuiqiucusomk:
        goto wqgwguwaoomgaiik;
        wqgwguwaoomgaiik:
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
