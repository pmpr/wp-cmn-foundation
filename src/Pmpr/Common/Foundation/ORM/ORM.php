<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\ORM\DB\Model;

class ORM extends Common
{
    const ADMIN_GET_MODELS_ACTION = 'admin_get_models';
    
    public function __construct()
    {
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'init']);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('parent_file', [$this, 'kmuaeicmssiesoyk'])->cecaguuoecmccuse('submenu_file', [$this, 'uwcygoykiyquomiw']);
        parent::kgquecmsgcouyaya();
    }
    
    public function kmuaeicmssiesoyk($qogsmwakwacwqogk)
    {
        global $orm_model;
        if ($orm_model instanceof Model) {
            $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
            if (strpos($suaemuyiacqyugsm, $orm_model->miwqiiqeegeqcwis()) !== false) {
                $qogsmwakwacwqogk = $orm_model::akuociswqmoigkas();
                $qqomumygoacsmsie = $orm_model->cgswceaawqgeskua('index');
                if ($qqomumygoacsmsie) {
                    global $_wp_real_parent_file;
                    $_wp_real_parent_file[$qqomumygoacsmsie->aqcogscycyycgkuq()] = $qogsmwakwacwqogk;
                }
            }
        }
        return $qogsmwakwacwqogk;
    }
    
    public function uwcygoykiyquomiw($qogsmwakwacwqogk)
    {
        global $orm_model;
        if ($orm_model instanceof Model) {
            $suaemuyiacqyugsm = ManipulateServer::get(self::PAGE);
            if (strpos($suaemuyiacqyugsm, $orm_model->miwqiiqeegeqcwis()) !== false) {
                $qqomumygoacsmsie = $orm_model->cgswceaawqgeskua('index');
                if ($qqomumygoacsmsie) {
                    $qogsmwakwacwqogk = $qqomumygoacsmsie->aqcogscycyycgkuq();
                }
            }
        }
        return $qogsmwakwacwqogk;
    }
    public function init()
    {
        $this->auemcisgwigucumo();
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('init'));
        if (is_admin()) {
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('admin_init'));
        }
    }
    private function auemcisgwigucumo()
    {
        
        $oeucsuyqysaciasy = ManipulateUser::ikcimmaqiwekowoi('administrator');
        if ($oeucsuyqysaciasy) {
            $sksmomeiauyqaomi = $this->homgcsoocssgwgym([], 'item', null);
            foreach ($sksmomeiauyqaomi as $gkswkiicccswksiq) {
                $oeucsuyqysaciasy->add_cap($gkswkiicccswksiq);
                qgoiooayqmqqsiok:
            }
            qogqewiwmwiwskgm:
        }
    }
}
