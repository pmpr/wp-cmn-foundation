<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\x64", $mqogqgswmasasmik = false) : Builder
    {
        goto ayeqwsqywosymiwu;
        oemkgkauqekgkumy:
        $this->wheres[] = compact("\164\x79\x70\x65", "\161\165\x65\162\x79", "\x62\x6f\157\154\x65\x61\x6e");
        goto iuoayeiykmokiiys;
        ayeqwsqywosymiwu:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\164\x45\x78\x69\163\x74\x73" : "\x45\170\151\163\x74\x73";
        goto oemkgkauqekgkumy;
        ygegasgiwgmswaog:
        return $this;
        goto qiaaqckmooiayuae;
        iuoayeiykmokiiys:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto mmmgeukkswewyuoa;
        mmmgeukkswewyuoa:
        
        $this->addBinding($iykmscciaowcagqu);
        goto ygegasgiwgmswaog;
        qiaaqckmooiayuae:
    }
    
    public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk);
    }
    
    public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string
    {
        goto ayuwkwsuioumscca;
        gswoagoguesomwyc:
        if (!$mgcmmwqwguicsews instanceof Database) {
            goto mswucuuigmosimuo;
        }
        goto ecomecoqggyssmsk;
        ecomecoqggyssmsk:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto agicooogqyeyoyqi;
        osoukeawsoyqmwgo:
        return $aasascamegmwqmqk;
        goto wesooeakucoqmisw;
        agicooogqyeyoyqi:
        mswucuuigmosimuo:
        goto osoukeawsoyqmwgo;
        ayuwkwsuioumscca:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto gswoagoguesomwyc;
        wesooeakucoqmisw:
    }
}
