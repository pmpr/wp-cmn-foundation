<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\x64", $mqogqgswmasasmik = false) : Builder
    {
        goto akqkquwcomkgeqcy;
        kaimmgsyuygocsos:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto eigusiimieqkeiuo;
        akqkquwcomkgeqcy:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\x74\105\170\x69\x73\x74\x73" : "\105\x78\151\x73\x74\x73";
        goto kiaguokkqkaokqqw;
        eigusiimieqkeiuo:
        
        $this->addBinding($iykmscciaowcagqu);
        goto qiimegquckqywkaq;
        qiimegquckqywkaq:
        return $this;
        goto iceweuyyswquiiea;
        kiaguokkqkaokqqw:
        $this->wheres[] = compact("\x74\x79\160\x65", "\161\165\145\x72\171", "\142\157\157\154\x65\x61\156");
        goto kaimmgsyuygocsos;
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
        rwekqsecucoaeyua:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto ugiuakmiswagycwy;
        oiammieoqaouyioy:
        return $aasascamegmwqmqk;
        goto qcwcskcquoyuesge;
        qqywgucwkcwwwika:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto aickummaecoksgec;
        aickummaecoksgec:
        ymkwkqaswwcwaaog:
        goto oiammieoqaouyioy;
        qcwcskcquoyuesge:
    }
}
