<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder
    {
        goto akqkquwcomkgeqcy;
        eigusiimieqkeiuo:
        
        $this->addBinding($iykmscciaowcagqu);
        goto qiimegquckqywkaq;
        kaimmgsyuygocsos:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto eigusiimieqkeiuo;
        kiaguokkqkaokqqw:
        $this->wheres[] = compact("\164\x79\160\x65", "\161\165\145\x72\x79", "\x62\x6f\157\154\x65\141\x6e");
        goto kaimmgsyuygocsos;
        akqkquwcomkgeqcy:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\x6f\164\x45\x78\x69\x73\164\163" : "\105\x78\x69\163\x74\x73";
        goto kiaguokkqkaokqqw;
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
        qqywgucwkcwwwika:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto aickummaecoksgec;
        ugiuakmiswagycwy:
        if (!$mgcmmwqwguicsews instanceof Database) {
            goto ymkwkqaswwcwaaog;
        }
        goto qqywgucwkcwwwika;
        oiammieoqaouyioy:
        return $aasascamegmwqmqk;
        goto qcwcskcquoyuesge;
        aickummaecoksgec:
        ymkwkqaswwcwaaog:
        goto oiammieoqaouyioy;
        rwekqsecucoaeyua:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto ugiuakmiswagycwy;
        qcwcskcquoyuesge:
    }
}
