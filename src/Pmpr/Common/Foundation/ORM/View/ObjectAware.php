<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ysiqakyaiooyscwy:
        eqiiaokcgakicaye:
        goto auumaoycmsmsgigs;
        qyyyycwaookqaoke:
        
        if ($this->imgymusqgccqsqqq()) {
            goto ikcwmsgocyuqiumc;
        }
        goto ssywsaaqqaucesau;
        qcssigmcayuyweiy:
        exit;
        goto iymaiwqimisgacmk;
        gcucsowqoeiwmyyq:
        parent::mqyuagguukgcoeka();
        goto kyiuewcikkqagwwg;
        aumowowgewgqmwci:
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        goto oasggeyceiyieuuo;
        mugscgugcogcasue:
        $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
        goto qyyyycwaookqaoke;
        quamuugoocyyceec:
        wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
        goto qcssigmcayuyweiy;
        omuauimgkygcecsc:
        
        $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
        goto wwcqoeuwskquakwy;
        kyiuewcikkqagwwg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aumowowgewgqmwci;
        wwcqoeuwskquakwy:
        
        if ($this->mwikyscisascoeea()) {
            goto cyosacayacumuaks;
        }
        goto quamuugoocyyceec;
        ssywsaaqqaucesau:
        wp_die(__("\131\157\165\x20\x61\x74\164\145\155\x70\164\145\144\x20\x74\157\x20\145\x64\151\164\x20\141\156\40\x69\164\145\155\40\x74\x68\141\164\40\x64\157\145\x73\x6e\x27\x74\40\x65\x78\x69\x73\164\x2e\x20\x50\x65\x72\x68\141\160\163\x20\x69\x74\40\167\141\163\x20\x64\145\x6c\x65\x74\x65\x64\x3f", PR__CMN__FOUNDATION));
        goto ygcgoaokauigwuus;
        ygcgoaokauigwuus:
        ikcwmsgocyuqiumc:
        goto ysiqakyaiooyscwy;
        oasggeyceiyieuuo:
        if (!$aokagokqyuysuksm) {
            goto eqiiaokcgakicaye;
        }
        goto omuauimgkygcecsc;
        iymaiwqimisgacmk:
        cyosacayacumuaks:
        goto mugscgugcogcasue;
        auumaoycmsmsgigs:
    }
}
