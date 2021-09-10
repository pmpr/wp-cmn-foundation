<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Manipulate\ManipulateServer;

class ObjectAware extends View
{
    
    protected ?int $id = 0;
    
    protected ?object $object = null;
    
    public function ggiaseqygioygumq(?int $aokagokqyuysuksm) : self
    {
        $this->id = $aokagokqyuysuksm;
        return $this;
    }
    
    public function mwikyscisascoeea() : int
    {
        return $this->id;
    }
    
    public function kwmiaokywwmwecuc(?object $mksyucucyswaukig) : self
    {
        $this->object = $mksyucucyswaukig;
        return $this;
    }
    
    public function imgymusqgccqsqqq() : ?object
    {
        return $this->object;
    }
    public function mqyuagguukgcoeka()
    {
        goto gcucsowqoeiwmyyq;
        kyiuewcikkqagwwg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aumowowgewgqmwci;
        oasggeyceiyieuuo:
        if (!$aokagokqyuysuksm) {
            goto eqiiaokcgakicaye;
        }
        goto omuauimgkygcecsc;
        ygcgoaokauigwuus:
        ikcwmsgocyuqiumc:
        goto ysiqakyaiooyscwy;
        aumowowgewgqmwci:
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        goto oasggeyceiyieuuo;
        quamuugoocyyceec:
        wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
        goto qcssigmcayuyweiy;
        omuauimgkygcecsc:
        
        $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
        goto wwcqoeuwskquakwy;
        ysiqakyaiooyscwy:
        eqiiaokcgakicaye:
        goto auumaoycmsmsgigs;
        gcucsowqoeiwmyyq:
        parent::mqyuagguukgcoeka();
        goto kyiuewcikkqagwwg;
        iymaiwqimisgacmk:
        cyosacayacumuaks:
        goto mugscgugcogcasue;
        wwcqoeuwskquakwy:
        
        if ($this->mwikyscisascoeea()) {
            goto cyosacayacumuaks;
        }
        goto quamuugoocyyceec;
        mugscgugcogcasue:
        $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
        goto qyyyycwaookqaoke;
        ssywsaaqqaucesau:
        wp_die(__("\x59\157\x75\40\x61\x74\x74\x65\155\x70\164\145\144\x20\x74\157\x20\145\x64\151\164\x20\141\156\x20\x69\164\145\155\x20\164\150\x61\164\x20\144\157\145\x73\x6e\47\164\40\145\x78\151\x73\x74\x2e\40\x50\x65\162\x68\x61\160\x73\x20\151\x74\40\x77\141\x73\x20\x64\x65\154\x65\x74\145\x64\x3f", PR__CMN__FOUNDATION));
        goto ygcgoaokauigwuus;
        qyyyycwaookqaoke:
        
        if ($this->imgymusqgccqsqqq()) {
            goto ikcwmsgocyuqiumc;
        }
        goto ssywsaaqqaucesau;
        qcssigmcayuyweiy:
        exit;
        goto iymaiwqimisgacmk;
        auumaoycmsmsgigs:
    }
}
