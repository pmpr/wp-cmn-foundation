<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Submit extends Button
{
    
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null)
    {
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy);
        $this->qigsyyqgewgskemg('btn-primary');
        $this->igmaewykumgwoaoy('type', 'submit');
    }
    
    public function ieoqemcqwqowuwie($eaoumsseceiowgsk) : self
    {
        $this->igmaewykumgwoaoy('form', $eaoumsseceiowgsk);
        return $this;
    }
}
