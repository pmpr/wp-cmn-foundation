<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\REST;


abstract class RESTRegister extends Common
{
    
    protected array $controllers = [];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x72\145\x73\164\137\x61\x70\151\137\151\156\151\x74", [$this, "\164\151\163\167\x61\171\163\161\141\167\165\143\147\x67\x75\143"]);
        parent::wigskegsqequoeks();
    }
    public function tiswaysqawucgguc()
    {
        goto aasoskwecamqssmy;
        ggwmmgogwmqokkoq:
        foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) {
            goto qeccuawaemcqssuk;
            gksasoiwiaceowkg:
            
            $ioqmgqkiwqgmgcks->register_routes();
            goto maemyookcuoiqmik;
            miiiiqmymyqkkoos:
            wakyiiuceqggyyyu:
            goto uecqkgmguskwausu;
            qeccuawaemcqssuk:
            if (!$ioqmgqkiwqgmgcks instanceof RESTController) {
                goto mwmcmswsggukkcei;
            }
            goto gksasoiwiaceowkg;
            maemyookcuoiqmik:
            mwmcmswsggukkcei:
            goto miiiiqmymyqkkoos;
            uecqkgmguskwausu:
        }
        goto esaggsqoamgyguem;
        esaggsqoamgyguem:
        coyiuicwequccqoy:
        goto osgawwyuaegkasms;
        aasoskwecamqssmy:
        $this->gigwcakmiyayoigw();
        goto ggwmmgogwmqokkoq;
        osgawwyuaegkasms:
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
