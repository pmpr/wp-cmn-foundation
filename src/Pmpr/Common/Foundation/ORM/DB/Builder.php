<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Query\Builder as BaseClass;

class Builder extends BaseClass
{
    
    public function addWhereExistsQuery($gqgemcmoicmgaqie, $qsycuegoicqcqkmo = 'and', $mqogqgswmasasmik = false) : Builder
    {
        $sqeykgyoooqysmca = $mqogqgswmasasmik ? 'NotExists' : 'Exists';
        $this->wheres[] = compact('type', 'query', 'boolean');
        
        $iykmscciaowcagqu = $gqgemcmoicmgaqie->getBindings();
        
        $this->addBinding($iykmscciaowcagqu);
        return $this;
    }
    
    public function leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg = null, $gcegymooyemmaysk = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return parent::leftJoin($aasascamegmwqmqk, $sysgmomuyiiawwcm, $cackiyicawmkyqqg, $gcegymooyemmaysk);
    }
    
    public function cokoiaeeomgssqgy($aasascamegmwqmqk) : string
    {
        
        $mgcmmwqwguicsews = $this->getConnection();
        if ($mgcmmwqwguicsews instanceof Database) {
            
            $aasascamegmwqmqk = $mgcmmwqwguicsews->getTableName($aasascamegmwqmqk);
        }
        return $aasascamegmwqmqk;
    }
}
