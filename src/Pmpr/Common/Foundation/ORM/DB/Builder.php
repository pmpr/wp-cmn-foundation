<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\156\x64", $mqogqgswmasasmik = false) : Builder
    {
        goto akqkquwcomkgeqcy;
        kiaguokkqkaokqqw:
        $this->wheres[] = compact("\164\171\160\x65", "\161\165\x65\162\171", "\142\157\x6f\x6c\145\141\156");
        goto kaimmgsyuygocsos;
        kaimmgsyuygocsos:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto eigusiimieqkeiuo;
        eigusiimieqkeiuo:
        
        $this->addBinding($iykmscciaowcagqu);
        goto qiimegquckqywkaq;
        qiimegquckqywkaq:
        return $this;
        goto iceweuyyswquiiea;
        akqkquwcomkgeqcy:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\116\157\x74\x45\170\x69\x73\164\163" : "\105\170\151\x73\164\x73";
        goto kiaguokkqkaokqqw;
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
        oiammieoqaouyioy:
        return $aasascamegmwqmqk;
        goto qcwcskcquoyuesge;
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
        qcwcskcquoyuesge:
    }
}
