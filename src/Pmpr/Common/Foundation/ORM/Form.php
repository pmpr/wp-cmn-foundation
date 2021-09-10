<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use CMB2_Boxes;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model;
use Illuminate\Database\Eloquent\Collection;

class Form extends Common
{
    
    protected ?Model $model = null;
    
    public function mgogaykgkoogasim() : ?Model
    {
        return $this->model;
    }
    
    public function asumqyigwsqmyeoc(Model $meywaqqsugaoeyys) : self
    {
        $this->model = $meywaqqsugaoeyys;
        return $this;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'], 0)->qcsmikeggeemccuu('add_meta_boxes', [$this, 'mugcceiwosyciwos'], 10, 2)->qcsmikeggeemccuu($this->ygyygikyocoymgaw('save_object', Model::class), [$this, 'gsegsiocqmsoayii'], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse('cmb2_override_meta_value', [$this, 'agucyisikcsmeeug'], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    public function yeyiguyegmmyusea()
    {
        global $cmb2Override, $pagenow;
        
        $cmb2Override = false;
        
        if ($pagenow === 'admin.php') {
            $suaemuyiacqyugsm = ManipulateArray::get($_GET, 'page');
            if ($suaemuyiacqyugsm && ($qqomumygoacsmsie = $this->mgogaykgkoogasim()->cgswceaawqgeskua('edit'))) {
                if ($suaemuyiacqyugsm === $qqomumygoacsmsie->aqcogscycyycgkuq()) {
                    $cmb2Override = true;
                }
            }
        }
    }
    
    public function gsegsiocqmsoayii($kqokimuosyuyyucg, $mksyucucyswaukig)
    {
        global $cmb2Override;
        
        if (class_exists('CMB2')) {
            if (DecoratorUser::scmcyesmmikkucie('edit_item', $kqokimuosyuyyucg)) {
                $cmb2Override = true;
                foreach (CMB2_Boxes::get_all() as $scegeeyqweaksmki) {
                    if (in_array($this->mgogaykgkoogasim()->miwqiiqeegeqcwis(), $scegeeyqweaksmki->meta_box['object_types'])) {
                        $scegeeyqweaksmki->save_fields($kqokimuosyuyyucg, 'post', $_POST);
                    }
                    foeeqckqsyockkak:
                }
                oqugqwcyomiaaoqu:
            }
        }
    }
    
    public function mugcceiwosyciwos($syeseoiyagmgumcy, $mksyucucyswaukig)
    {
        global $cmb2Override;
        if ($mksyucucyswaukig) {
            $ceiwsaacewygcsqg = $this->mgogaykgkoogasim()->kumuygiiqswoyasy();
            
            $_REQUEST['post'] = $mksyucucyswaukig->{$ceiwsaacewygcsqg};
            
            $cmb2Override = true;
            
            
        }
    }
    
    public function agucyisikcsmeeug($eqgoocgaqwqcimie, $aokagokqyuysuksm, $ywmkwiwkosakssii, $aiowsaccomcoikus)
    {
        global $cmb2Override;
        if ($cmb2Override !== true) {
            return $eqgoocgaqwqcimie;
        }
        if ($aiowsaccomcoikus->group) {
            $mksyucucyswaukig = $this->mgogaykgkoogasim()->cyyiiykmaeuqqgok($aokagokqyuysuksm);
            if (ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii['field_id'])) {
                $eqgoocgaqwqcimie = ManipulateArray::get($mksyucucyswaukig, $ywmkwiwkosakssii['field_id']);
                if ($eqgoocgaqwqcimie instanceof Collection) {
                    $uomewyckeuqoqocu = [];
                    foreach ($eqgoocgaqwqcimie as $meywaqqsugaoeyys) {
                        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
                        
                        $uomewyckeuqoqocu[] = (array) $meywaqqsugaoeyys->gqaysymikgeawkqa()->ksiyqouuaoymsycg($meywaqqsugaoeyys->{$ceiwsaacewygcsqg});
                        hoeeyiowekaeemko:
                    }
                    iekumemscwieugqw:
                    $eqgoocgaqwqcimie = $uomewyckeuqoqocu;
                }
            }
        }
        return $eqgoocgaqwqcimie;
    }
}
