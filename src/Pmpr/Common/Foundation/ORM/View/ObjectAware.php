<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        oasggeyceiyieuuo:
        if (!$aokagokqyuysuksm) {
            goto eqiiaokcgakicaye;
        }
        goto omuauimgkygcecsc;
        ysiqakyaiooyscwy:
        eqiiaokcgakicaye:
        goto auumaoycmsmsgigs;
        gcucsowqoeiwmyyq:
        parent::mqyuagguukgcoeka();
        goto kyiuewcikkqagwwg;
        omuauimgkygcecsc:
        
        $this->ggiaseqygioygumq((int) $aokagokqyuysuksm);
        goto wwcqoeuwskquakwy;
        ygcgoaokauigwuus:
        ikcwmsgocyuqiumc:
        goto ysiqakyaiooyscwy;
        kyiuewcikkqagwwg:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aumowowgewgqmwci;
        iymaiwqimisgacmk:
        cyosacayacumuaks:
        goto mugscgugcogcasue;
        qcssigmcayuyweiy:
        exit;
        goto iymaiwqimisgacmk;
        aumowowgewgqmwci:
        $aokagokqyuysuksm = ManipulateServer::get($meywaqqsugaoeyys->kumuygiiqswoyasy(), false);
        goto oasggeyceiyieuuo;
        quamuugoocyyceec:
        wp_redirect($meywaqqsugaoeyys->comogmawyoiquwis());
        goto qcssigmcayuyweiy;
        qyyyycwaookqaoke:
        
        if ($this->imgymusqgccqsqqq()) {
            goto ikcwmsgocyuqiumc;
        }
        goto ssywsaaqqaucesau;
        wwcqoeuwskquakwy:
        
        if ($this->mwikyscisascoeea()) {
            goto cyosacayacumuaks;
        }
        goto quamuugoocyyceec;
        ssywsaaqqaucesau:
        wp_die(__("\131\157\x75\40\x61\164\164\x65\155\160\x74\145\144\x20\164\157\40\x65\x64\x69\x74\40\x61\156\40\151\x74\x65\x6d\40\x74\x68\x61\x74\40\144\157\145\163\x6e\x27\x74\x20\x65\170\151\163\x74\x2e\x20\120\145\162\150\x61\160\163\40\x69\164\x20\x77\x61\163\40\x64\145\x6c\x65\x74\145\x64\77", PR__CMN__FOUNDATION));
        goto ygcgoaokauigwuus;
        mugscgugcogcasue:
        $this->kwmiaokywwmwecuc($this->mgogaykgkoogasim()->akkkoiiymmamsauc($this->mwikyscisascoeea()));
        goto qyyyycwaookqaoke;
        auumaoycmsmsgigs:
    }
}
