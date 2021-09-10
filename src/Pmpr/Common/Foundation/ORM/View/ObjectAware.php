<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        ygcgoaokauigwuus:
        ikcwmsgocyuqiumc:
        goto ysiqakyaiooyscwy;
        quamuugoocyyceec:
        wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
        goto qcssigmcayuyweiy;
        ysiqakyaiooyscwy:
        eqiiaokcgakicaye:
        goto auumaoycmsmsgigs;
        kyiuewcikkqagwwg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aumowowgewgqmwci;
        oasggeyceiyieuuo:
        if (!$aokagokqyuysuksm) {
            goto eqiiaokcgakicaye;
        }
        goto omuauimgkygcecsc;
        wwcqoeuwskquakwy:
        
        if ($this->mwikyscisascoeea()) {
            goto cyosacayacumuaks;
        }
        goto quamuugoocyyceec;
        ssywsaaqqaucesau:
        wp_die(__("\x59\157\165\40\141\x74\164\x65\x6d\160\164\x65\144\x20\x74\157\40\x65\144\x69\x74\40\x61\156\40\x69\x74\145\155\40\164\150\141\164\x20\144\157\145\x73\x6e\x27\164\40\x65\x78\151\163\164\56\x20\x50\145\162\x68\x61\x70\163\x20\x69\x74\40\x77\x61\163\40\x64\145\x6c\x65\x74\145\x64\x3f", PR__CMN__FOUNDATION));
        goto ygcgoaokauigwuus;
        aumowowgewgqmwci:
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        goto oasggeyceiyieuuo;
        omuauimgkygcecsc:
        
        $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
        goto wwcqoeuwskquakwy;
        iymaiwqimisgacmk:
        cyosacayacumuaks:
        goto mugscgugcogcasue;
        qcssigmcayuyweiy:
        exit;
        goto iymaiwqimisgacmk;
        mugscgugcogcasue:
        $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
        goto qyyyycwaookqaoke;
        gcucsowqoeiwmyyq:
        parent::mqyuagguukgcoeka();
        goto kyiuewcikkqagwwg;
        auumaoycmsmsgigs:
    }
}
