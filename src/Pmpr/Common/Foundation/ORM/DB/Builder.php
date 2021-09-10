<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder
    {
        goto akqkquwcomkgeqcy;
        kiaguokkqkaokqqw:
        $this->wheres[] = compact("\x74\171\160\x65", "\x71\165\x65\x72\171", "\x62\x6f\x6f\x6c\x65\141\156");
        goto kaimmgsyuygocsos;
        eigusiimieqkeiuo:
        
        $this->addBinding($iykmscciaowcagqu);
        goto qiimegquckqywkaq;
        akqkquwcomkgeqcy:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\157\x74\x45\170\x69\x73\x74\163" : "\105\x78\x69\x73\164\163";
        goto kiaguokkqkaokqqw;
        qiimegquckqywkaq:
        return $this;
        goto iceweuyyswquiiea;
        kaimmgsyuygocsos:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto eigusiimieqkeiuo;
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
        ugiuakmiswagycwy:
        if (!$mgcmmwqwguicsews instanceof Database) {
            goto ymkwkqaswwcwaaog;
        }
        goto qqywgucwkcwwwika;
        oiammieoqaouyioy:
        return $aasascamegmwqmqk;
        goto qcwcskcquoyuesge;
        qqywgucwkcwwwika:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto aickummaecoksgec;
        aickummaecoksgec:
        ymkwkqaswwcwaaog:
        goto oiammieoqaouyioy;
        rwekqsecucoaeyua:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto ugiuakmiswagycwy;
        qcwcskcquoyuesge:
    }
}
