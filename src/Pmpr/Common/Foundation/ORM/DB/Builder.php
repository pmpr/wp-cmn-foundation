<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = "\141\x6e\144", $mqogqgswmasasmik = false) : Builder
    {
        goto caccouegecmukqci;
        icsukicuomwmqiyc:
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        goto akqkquwcomkgeqcy;
        kiaguokkqkaokqqw:
        return $this;
        goto kaimmgsyuygocsos;
        akqkquwcomkgeqcy:
        
        $this->addBinding($iykmscciaowcagqu);
        goto kiaguokkqkaokqqw;
        caccouegecmukqci:
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? "\x4e\x6f\x74\105\170\151\x73\x74\x73" : "\x45\x78\x69\163\x74\163";
        goto osouwwksqimikqqo;
        osouwwksqimikqqo:
        $this->wheres[] = compact("\x74\x79\160\x65", "\161\165\145\x72\171", "\x62\x6f\x6f\x6c\145\x61\156");
        goto icsukicuomwmqiyc;
        kaimmgsyuygocsos:
    }
    
    public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk);
    }
    
    public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string
    {
        goto qiimegquckqywkaq;
        rwekqsecucoaeyua:
        eigusiimieqkeiuo:
        goto ugiuakmiswagycwy;
        qiimegquckqywkaq:
        
        $mgcmmwqwguicsews = $this->getConnection();
        goto iceweuyyswquiiea;
        ymkwkqaswwcwaaog:
        
        $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        goto rwekqsecucoaeyua;
        iceweuyyswquiiea:
        if (!$mgcmmwqwguicsews instanceof Database) {
            goto eigusiimieqkeiuo;
        }
        goto ymkwkqaswwcwaaog;
        ugiuakmiswagycwy:
        return $aasascamegmwqmqk;
        goto qqywgucwkcwwwika;
        qqywgucwkcwwwika:
    }
}
