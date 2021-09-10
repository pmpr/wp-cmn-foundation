<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin;

use Pmpr\Common\Foundation\Container\Traits\SingletonTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Interfaces\ConstantInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Traits\ComponentTrait;
use Pmpr\Common\Foundation\Traits\HookTrait;

class SettingTab implements ConstantInterface
{
    use SingletonTrait, HookTrait, FieldTrait, ElementTrait, ComponentTrait;
    
    protected ?Setting $settingObj = null;
    
    public function kmuweyayaqoeqiyw() : ?Setting
    {
        return $this->settingObj;
    }
    public function kgquecmsgcouyaya()
    {
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        if ($amakmumgguksgmum) {
            $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc();
            $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}_tabs"), [$this, 'aucimgwswmgaocae'])->cecaguuoecmccuse("before_update_{$uusmaiomayssaecw}", [$this, 'iasywwkguyauiywu'], 10, 2);
        }
    }
    public function wigskegsqequoeks()
    {
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        if ($amakmumgguksgmum) {
            $this->qcsmikeggeemccuu("update_option_{$amakmumgguksgmum->cisyiemkeykgkomc()}", [$this, 'scmmymqkoyckgkam'], 10, 2);
        }
    }
    
    public function aucimgwswmgaocae($ywoucyskcquysiwc)
    {
        return $ywoucyskcquysiwc;
    }
    
    public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak)
    {
        return $eqgoocgaqwqcimie;
    }
    
    public function scmmymqkoyckgkam($msqkueqksqwmskak, $uwomkgseoiegeume)
    {
    }
    
    public function aakmagwggmkoiiyu() : string
    {
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        $uucsugkcsciausuk = self::ugwmakayykcmcmqa();
        $aiieyweysaukqemc = ManipulateString::wqqwcuegeiqgyswe($egkyssmuqcwaciya);
        return ManipulateString::ogimogiceeekegoi("{$aiieyweysaukqemc}_{$uucsugkcsciausuk}");
    }
    
    public function mmsykuomogaqoaye() : string
    {
        return "{$this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()}_{$this->aakmagwggmkoiiyu()}_tab";
    }
    
    public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        if ($amakmumgguksgmum) {
            $eqgoocgaqwqcimie = $amakmumgguksgmum::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        }
        return $eqgoocgaqwqcimie;
    }
}
