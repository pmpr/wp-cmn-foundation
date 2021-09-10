<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin;

use Pmpr\Common\Foundation\FormMaker\Admin\Type\Type;

class Admin extends Common
{
    
    public function __construct()
    {
        parent::__construct();
        $this->iemaakgqgqosiecm();
    }
    public function iemaakgqgqosiecm()
    {
        $this->kqmyggcqsgeyyicg();
        Type::symcgieuakksimmu();
        CMB2::symcgieuakksimmu();
        Editor::symcgieuakksimmu();
    }
    public function kqmyggcqsgeyyicg()
    {
        $couygeouymagssgw = self::couwksyewgyeooqe()->ikeqsmumgwwuqmkw();
        if ($this->kcciqwskewsuaemk()->exists("{$couygeouymagssgw}/vendor/narmafzam/cmb2/init.php")) {
            require_once "{$couygeouymagssgw}/vendor/narmafzam/cmb2/init.php";
        } else {
            if ($this->kcciqwskewsuaemk()->exists("{$couygeouymagssgw}/../../narmafzam/cmb2/init.php")) {
                require_once "{$couygeouymagssgw}/../../narmafzam/cmb2/init.php";
            }
        }
    }
}
