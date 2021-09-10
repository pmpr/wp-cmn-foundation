<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\x61\x6e\144", $mqogqgswmasasmik = false) : Builder
    {
        goto akqkquwcomkgeqcy;
        kaimmgsyuygocsos:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto eigusiimieqkeiuo;
        akqkquwcomkgeqcy:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\164\x45\x78\x69\x73\164\163" : "\x45\x78\151\163\x74\x73";
        goto kiaguokkqkaokqqw;
        eigusiimieqkeiuo:
        
        $this->addBinding($iykmscciaowcagqu);
        goto qiimegquckqywkaq;
        kiaguokkqkaokqqw:
        $this->wheres[] = compact("\164\x79\160\145", "\161\x75\145\x72\171", "\142\x6f\x6f\154\145\141\156");
        goto kaimmgsyuygocsos;
        qiimegquckqywkaq:
        return $this;
        goto iceweuyyswquiiea;
        iceweuyyswquiiea:
    }
    
    public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk);
    }
    
    public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string
    {
        goto rwekqsecucoaeyua;
        aickummaecoksgec:
        ymkwkqaswwcwaaog:
        goto oiammieoqaouyioy;
        qqywgucwkcwwwika:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto aickummaecoksgec;
        rwekqsecucoaeyua:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto ugiuakmiswagycwy;
        ugiuakmiswagycwy:
        if (!$mgcmmwqwguicsews instanceof Database) {
            goto ymkwkqaswwcwaaog;
        }
        goto qqywgucwkcwwwika;
        oiammieoqaouyioy:
        return $aasascamegmwqmqk;
        goto qcwcskcquoyuesge;
        qcwcskcquoyuesge:
    }
}
