<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\137\x69\x6e\x69\x74", [$this, "\x79\145\x79\x69\x67\165\171\x65\147\x6d\x6d\171\x75\x73\x65\x61"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\x77\157\162\144\x70\x72\x65\x73\163\137\x73\145\x74\164\151\156\x67\163\137\146\x69\145\x6c\x64\163", []);
        goto coqmamquawyaeyae;
        ymsiicmasqigsymw:
        qywueemkicmwyoqg:
        goto yiyuuyewoweiaokc;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\151\164\154\x65"], [$this, "\162\145\156\x64\145\162"], $amakmumgguksgmum["\147\162\x6f\165\160"], $amakmumgguksgmum["\x73\x65\143\164\x69\157\156"], $amakmumgguksgmum["\141\162\147\163"]);
            goto uywoegeimqomwqoa;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\163\145\143\164\151\x6f\x6e" => "\x64\x65\146\x61\x75\x6c\164", "\164\x69\164\154\145" => '', "\x67\162\157\165\x70" => "\x67\145\156\145\x72\141\154", "\141\162\x67\x73" => []]);
            goto kamwemiweockugia;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\147\162\157\165\160"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\x72\x67\163"]["\151\144"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            yeomwmwumiieiywi:
        }
        goto ymsiicmasqigsymw;
        yiyuuyewoweiaokc:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\145\x63\150\x6f" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
