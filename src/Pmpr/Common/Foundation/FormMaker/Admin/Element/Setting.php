<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Element;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\MetaTab;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Setting extends Page
{
    
    protected array $defaults = [];
    
    public function __construct()
    {
        $this->type = 'settings';
        if (!$this->cgugaaoykcyiomuk()) {
            $this->parentMenu = 'options-general.php';
        }
        parent::__construct();
    }
    
    public function cosqcmekuiigqywc(MetaTab $uqcooyiiyysckskk) : MetaTab
    {
        $uqcooyiiyysckskk->kkigeuaeguyueaem('')->ceiqwucmgawwmawo(__('Save Changes', PR__CMN__FOUNDATION));
        return parent::cosqcmekuiigqywc($uqcooyiiyysckskk);
    }
    
    public function mwikyscisascoeea() : ?string
    {
        $aokagokqyuysuksm = parent::mwikyscisascoeea();
        if (!$aokagokqyuysuksm) {
            $aokagokqyuysuksm = "{$this->aakmagwggmkoiiyu()}_{$this->gueasuouwqysmomu()}";
        }
        return $aokagokqyuysuksm;
    }
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("update_option_{$this->cisyiemkeykgkomc()}", [$this, 'ocqaqswoeyscuoao'])->qcsmikeggeemccuu("update_option_{$this->cisyiemkeykgkomc()}", [$this, 'scmmymqkoyckgkam'], 10, 2)->qcsmikeggeemccuu("update_setting_{$this->cisyiemkeykgkomc()}", [$this, 'eiaacegkigqiwawg'], 10, 2);
        parent::wigskegsqequoeks();
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("get_{$this->cisyiemkeykgkomc()}", [$this, 'mywwyegkuymookeg'], 10, 2)->cecaguuoecmccuse("get_{$this->aakmagwggmkoiiyu()}_setting", [$this, 'eiwcuqigayigimak'], 10, 2)->cecaguuoecmccuse("pre_update_option_{$this->cisyiemkeykgkomc()}", [$this, 'ciagcoiyeioaggso'], 50, 3)->cecaguuoecmccuse("cmb2_override_option_get_{$this->cisyiemkeykgkomc()}", [$this, 'mmeqsuaqacwuogya'], 2, 1);
        parent::kgquecmsgcouyaya();
    }
    
    public function gecwckciuqqukcko() : array
    {
        return $this->defaults;
    }
    
    public function syuyisqgcskmaymc($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->defaults[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $eqgoocgaqwqcimie;
    }
    private function wascmggskiyiaogs()
    {
        $ggauoeuaesiymgee = $this->gecwckciuqqukcko();
        if ($ggauoeuaesiymgee && !self::mywwyegkuymookeg()) {
            
            $uusmaiomayssaecw = $this->cisyiemkeykgkomc();
            $ggauoeuaesiymgee = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('default_settings', false), $ggauoeuaesiymgee, $this->cisyiemkeykgkomc());
            if ($ggauoeuaesiymgee && is_array($ggauoeuaesiymgee)) {
                DecoratorOption::add($uusmaiomayssaecw, $ggauoeuaesiymgee);
            }
        }
    }
    
    public function ciagcoiyeioaggso($eqgoocgaqwqcimie, $msqkueqksqwmskak, $omkysikckkcieckq)
    {
        if ($eqgoocgaqwqcimie !== $msqkueqksqwmskak && maybe_serialize($eqgoocgaqwqcimie) !== maybe_serialize($msqkueqksqwmskak)) {
            $eqgoocgaqwqcimie = $this->iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak);
            $eqgoocgaqwqcimie = $this->sscegwueamckwmcy("before_update_{$this->cisyiemkeykgkomc()}", $eqgoocgaqwqcimie, $msqkueqksqwmskak);
        }
        return $eqgoocgaqwqcimie;
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('saved', false), $msqkueqksqwmskak, $uwomkgseoiegeume);
    }
    public function ocqaqswoeyscuoao()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('before_remove_cache_path'));
        if ($skacuygeqykiwiwy = ManipulateSetting::cmaecekuqkwmemms(self::PR__CACHE__PATH)) {
            $this->kcciqwskewsuaemk()->remove($skacuygeqykiwiwy);
            $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('after_remove_cache_path'));
        }
    }
    
    public static function mywwyegkuymookeg()
    {
        $eiockasigaaayoem = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        $usymaaaeawgmyqig = wp_cache_get($eiockasigaaayoem);
        if ($usymaaaeawgmyqig !== false) {
            $ksaameoqigiaoigg = $usymaaaeawgmyqig;
        } else {
            
            $ksaameoqigiaoigg = DecoratorOption::get($eiockasigaaayoem);
            wp_cache_set($eiockasigaaayoem, $ksaameoqigiaoigg);
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function eiaacegkigqiwawg($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        if (!$qeqooyuoiasweuck) {
            $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        }
        $qeqooyuoiasweuck[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        self::oqyuwccsuskiwgew($qeqooyuoiasweuck);
        return $eqgoocgaqwqcimie;
    }
    
    public static function oqyuwccsuskiwgew($qeqooyuoiasweuck = null)
    {
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
        wp_cache_delete($uusmaiomayssaecw);
    }
    
    public static function myekoowckeqqeuyq($amakmumgguksgmum, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null) : bool
    {
        if (!$qeqooyuoiasweuck) {
            $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        }
        if (!$qeqooyuoiasweuck) {
            $qeqooyuoiasweuck = [];
        }
        $qeqooyuoiasweuck[$amakmumgguksgmum] = $eqgoocgaqwqcimie;
        $uusmaiomayssaecw = self::symcgieuakksimmu()->cisyiemkeykgkomc();
        wp_cache_delete($uusmaiomayssaecw);
        return DecoratorOption::update($uusmaiomayssaecw, $qeqooyuoiasweuck);
    }
    
    public static function yceqggqwokesouww($uusmaiomayssaecw, $eqgoocgaqwqcimie, $qeqooyuoiasweuck = null)
    {
        $amakmumgguksgmum = self::eiwcuqigayigimak($uusmaiomayssaecw, null, $qeqooyuoiasweuck);
        if (!$amakmumgguksgmum) {
            $amakmumgguksgmum = $eqgoocgaqwqcimie;
            self::myekoowckeqqeuyq($uusmaiomayssaecw, $eqgoocgaqwqcimie);
        }
        return $amakmumgguksgmum;
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false, $qeqooyuoiasweuck = null)
    {
        if (!$qeqooyuoiasweuck) {
            $qeqooyuoiasweuck = self::mywwyegkuymookeg();
        }
        if (is_string($uusmaiomayssaecw)) {
            if (isset($qeqooyuoiasweuck[$uusmaiomayssaecw])) {
                $eqgoocgaqwqcimie = $qeqooyuoiasweuck[$uusmaiomayssaecw];
                $eqgoocgaqwqcimie = $eqgoocgaqwqcimie === 'on' ? true : $eqgoocgaqwqcimie;
            } else {
                $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
            }
        } else {
            $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        }
        return $eqgoocgaqwqcimie;
    }
    
    public static function wcoqgwyekgsmiueo(array $qiouiwasaauyaaue, string $ymqmyyeuycgmigyo, int $gaeqamemwmwsyukm = 1) : array
    {
        $isksgswsmmqgeqmo = ManipulateArray::get($qiouiwasaauyaaue, $ymqmyyeuycgmigyo, []);
        if ($qiouiwasaauyaaue && is_array($qiouiwasaauyaaue) && $isksgswsmmqgeqmo && is_array($isksgswsmmqgeqmo)) {
            foreach ($isksgswsmmqgeqmo as $momcykaoccoymeig => $omkysikckkcieckq) {
                $omkysikckkcieckq = array_filter($omkysikckkcieckq);
                if (count($omkysikckkcieckq) >= $gaeqamemwmwsyukm) {
                    $uusmaiomayssaecw = ManipulateArray::get($omkysikckkcieckq, self::KEY);
                    if (!$uusmaiomayssaecw) {
                        $qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig][self::KEY] = ManipulateString::uniqid();
                    }
                } else {
                    unset($qiouiwasaauyaaue[$ymqmyyeuycgmigyo][$momcykaoccoymeig]);
                }
                owuuuiekkaeoeacq:
            }
            koiscokkkaimiecq:
        }
        return $qiouiwasaauyaaue;
    }
    
    public function mmeqsuaqacwuogya($gcaqwmmqioouwccc)
    {
        return $gcaqwmmqioouwccc;
    }
    
    public function gcmaamyeggyiugae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        return $uqcooyiiyysckskk && $uqcooyiiyysckskk->imyagkswqcsocsoi();
    }
    
    public function eaiyegoagkgeowae() : bool
    {
        $uqcooyiiyysckskk = $this->aeqcqgsamsqomowm();
        if ($uqcooyiiyysckskk) {
            return $uqcooyiiyysckskk->csaueuycewaiuaay();
        }
        return $this->cisyiemkeykgkomc() === ManipulateServer::get('page');
    }
}
