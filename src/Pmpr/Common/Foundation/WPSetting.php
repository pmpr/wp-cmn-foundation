<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\171\145\171\x69\x67\x75\x79\145\x67\155\x6d\x79\165\163\x65\141"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\x67\162\157\165\160"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\162\x67\x73"]["\x69\144"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\163\x65\143\x74\x69\x6f\x6e" => "\144\x65\146\x61\x75\x6c\x74", "\164\x69\x74\x6c\145" => '', "\x67\162\x6f\165\160" => "\x67\145\156\x65\x72\141\154", "\141\162\x67\x73" => []]);
            goto kamwemiweockugia;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\x74\x69\x74\x6c\145"], [$this, "\x72\x65\156\144\x65\x72"], $amakmumgguksgmum["\147\x72\x6f\165\x70"], $amakmumgguksgmum["\x73\145\143\164\x69\157\x6e"], $amakmumgguksgmum["\141\162\147\163"]);
            goto uywoegeimqomwqoa;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
            yeomwmwumiieiywi:
        }
        goto ymsiicmasqigsymw;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\167\157\x72\x64\160\x72\145\163\x73\x5f\x73\x65\x74\x74\151\156\x67\x73\x5f\x66\x69\x65\x6c\144\163", []);
        goto coqmamquawyaeyae;
        ymsiicmasqigsymw:
        qywueemkicmwyoqg:
        goto yiyuuyewoweiaokc;
        yiyuuyewoweiaokc:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\150\157" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
