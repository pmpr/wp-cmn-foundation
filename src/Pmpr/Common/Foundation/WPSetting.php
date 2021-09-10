<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;

class WPSetting extends Container
{
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\155\x69\156\x5f\151\x6e\151\164", [$this, "\x79\x65\x79\x69\x67\165\x79\x65\x67\155\155\171\x75\163\x65\141"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto gkiikogcsmysucuc;
        uywoegeimqomwqoa:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto remiaquuossuqoma;
            remiaquuossuqoma:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\x73\x65\143\x74\x69\x6f\x6e" => "\x64\145\146\x61\x75\x6c\164", "\x74\151\x74\x6c\145" => '', "\147\x72\157\165\160" => "\147\145\156\145\x72\141\154", "\141\162\x67\x73" => []]);
            goto qywueemkicmwyoqg;
            qywueemkicmwyoqg:
            register_setting($amakmumgguksgmum["\x67\162\157\x75\x70"], $aokagokqyuysuksm);
            goto aikaeokwagkiecao;
            acikugwgomwemcmu:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\151\164\x6c\x65"], [$this, "\162\145\156\x64\145\162"], $amakmumgguksgmum["\x67\162\x6f\x75\x70"], $amakmumgguksgmum["\163\145\143\x74\x69\157\156"], $amakmumgguksgmum["\141\162\x67\x73"]);
            goto kamwemiweockugia;
            kamwemiweockugia:
            yegimqcqoeaacsyq:
            goto mkggmsugkikwywom;
            aikaeokwagkiecao:
            $amakmumgguksgmum["\141\x72\x67\163"]["\151\144"] = $aokagokqyuysuksm;
            goto acikugwgomwemcmu;
            mkggmsugkikwywom:
        }
        goto yeomwmwumiieiywi;
        gkiikogcsmysucuc:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\167\157\162\x64\x70\x72\145\x73\x73\x5f\163\x65\x74\164\x69\156\x67\x73\x5f\146\151\145\154\x64\163", []);
        goto uywoegeimqomwqoa;
        yeomwmwumiieiywi:
        cyekoicwwmekycyy:
        goto wakmmggoiykyuamq;
        wakmmggoiykyuamq:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\x68\157" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
