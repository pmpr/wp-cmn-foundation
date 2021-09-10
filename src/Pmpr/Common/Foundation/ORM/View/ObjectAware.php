<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        qyyyycwaookqaoke:
        
        if ($this->imgymusqgccqsqqq()) {
            goto ikcwmsgocyuqiumc;
        }
        goto ssywsaaqqaucesau;
        iymaiwqimisgacmk:
        cyosacayacumuaks:
        goto mugscgugcogcasue;
        mugscgugcogcasue:
        $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
        goto qyyyycwaookqaoke;
        qcssigmcayuyweiy:
        exit;
        goto iymaiwqimisgacmk;
        gcucsowqoeiwmyyq:
        parent::mqyuagguukgcoeka();
        goto kyiuewcikkqagwwg;
        aumowowgewgqmwci:
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        goto oasggeyceiyieuuo;
        kyiuewcikkqagwwg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aumowowgewgqmwci;
        ysiqakyaiooyscwy:
        eqiiaokcgakicaye:
        goto auumaoycmsmsgigs;
        wwcqoeuwskquakwy:
        
        if ($this->mwikyscisascoeea()) {
            goto cyosacayacumuaks;
        }
        goto quamuugoocyyceec;
        quamuugoocyyceec:
        wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
        goto qcssigmcayuyweiy;
        omuauimgkygcecsc:
        
        $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
        goto wwcqoeuwskquakwy;
        oasggeyceiyieuuo:
        if (!$aokagokqyuysuksm) {
            goto eqiiaokcgakicaye;
        }
        goto omuauimgkygcecsc;
        ssywsaaqqaucesau:
        wp_die(__("\x59\x6f\x75\40\141\x74\164\145\x6d\160\x74\145\x64\x20\164\x6f\40\x65\x64\151\x74\x20\x61\156\x20\x69\x74\145\x6d\40\x74\x68\141\164\40\144\157\145\x73\x6e\x27\164\x20\x65\x78\x69\x73\x74\56\40\120\x65\x72\150\x61\x70\163\40\x69\x74\40\x77\141\163\40\144\145\x6c\x65\x74\x65\x64\x3f", PR__CMN__FOUNDATION));
        goto ygcgoaokauigwuus;
        ygcgoaokauigwuus:
        ikcwmsgocyuqiumc:
        goto ysiqakyaiooyscwy;
        auumaoycmsmsgigs:
    }
}
