<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto ukmcukgkakisecyk;
        esqckkawqugyqimw:
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$uusmaiomayssaecw}\137\164\141\x62\163"), [$this, "\x61\165\x63\x69\x6d\147\x77\x73\167\155\147\x61\157\x63\x61\145"])->cecaguuoecmccuse("\x62\145\146\x6f\x72\x65\x5f\165\x70\x64\x61\164\145\x5f{$uusmaiomayssaecw}", [$this, "\x69\x61\x73\171\167\167\153\x67\165\171\141\x75\x69\171\167\165"], 10, 2);
        goto wksuqaqsicwqekuy;
        cyaomwaqoaiiqqes:
        if (!$amakmumgguksgmum) {
            goto awiomycussysmike;
        }
        goto acmaiqeukwiqqyms;
        acmaiqeukwiqqyms:
        $uusmaiomayssaecw = $amakmumgguksgmum->cisyiemkeykgkomc();
        goto esqckkawqugyqimw;
        wksuqaqsicwqekuy:
        awiomycussysmike:
        goto gusogiqwmwgywamm;
        ukmcukgkakisecyk:
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        goto cyaomwaqoaiiqqes;
        gusogiqwmwgywamm:
    }
    public function wigskegsqequoeks()
    {
        goto uyauemouyweqqkwu;
        gkcqueouksaqceqw:
        if (!$amakmumgguksgmum) {
            goto muycacscoqikyasc;
        }
        goto aaecacwqmsoowcsi;
        aaecacwqmsoowcsi:
        $this->qcsmikeggeemccuu("\x75\160\x64\x61\x74\145\137\157\x70\164\151\157\156\137{$amakmumgguksgmum->cisyiemkeykgkomc()}", [$this, "\x73\143\155\155\x79\155\x71\153\x6f\x79\143\153\x67\153\x61\x6d"], 10, 2);
        goto guquqeyggoqqkgkm;
        guquqeyggoqqkgkm:
        muycacscoqikyasc:
        goto smmqcueceqkiggkm;
        uyauemouyweqqkwu:
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        goto gkcqueouksaqceqw;
        smmqcueceqkiggkm:
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
        goto ggcmqkuwqkkkmcgu;
        ggcmqkuwqkkkmcgu:
        $egkyssmuqcwaciya = self::uqggkiomyiceyooa();
        goto gyawuaoseweeioce;
        gyawuaoseweeioce:
        $uucsugkcsciausuk = self::ugwmakayykcmcmqa();
        goto kouowucggykwmwgw;
        aoemyociekskwmke:
        return ManipulateString::ogimogiceeekegoi("{$aiieyweysaukqemc}\x5f{$uucsugkcsciausuk}");
        goto cyqeeaiwumyekkce;
        kouowucggykwmwgw:
        $aiieyweysaukqemc = ManipulateString::wqqwcuegeiqgyswe($egkyssmuqcwaciya);
        goto aoemyociekskwmke;
        cyqeeaiwumyekkce:
    }
    
    public function mmsykuomogaqoaye() : string
    {
        return "{$this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc()}\137{$this->aakmagwggmkoiiyu()}\x5f\164\x61\x62";
    }
    
    public function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        goto yeigmocusoouscsa;
        imyycasecqwmeuew:
        if (!$amakmumgguksgmum) {
            goto asksckakmysykiue;
        }
        goto wmcckwsaaemkqweg;
        iqucsoqomgkeuyco:
        asksckakmysykiue:
        goto auuogsqacsimiksi;
        ksqmykkeymqwoacg:
        $amakmumgguksgmum = $this->kmuweyayaqoeqiyw();
        goto imyycasecqwmeuew;
        yeigmocusoouscsa:
        $eqgoocgaqwqcimie = $ggauoeuaesiymgee;
        goto ksqmykkeymqwoacg;
        wmcckwsaaemkqweg:
        $eqgoocgaqwqcimie = $amakmumgguksgmum::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        goto iqucsoqomgkeuyco;
        auuogsqacsimiksi:
        return $eqgoocgaqwqcimie;
        goto cmooymowqeusayua;
        cmooymowqeusayua:
    }
}
