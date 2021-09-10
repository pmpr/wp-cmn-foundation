<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->qcsmikeggeemccuu("\141\144\155\151\x6e\137\151\x6e\x69\x74", [$this, "\x79\145\171\x69\147\x75\x79\x65\147\x6d\155\171\x75\x73\x65\141"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto wakmmggoiykyuamq;
        ymsiicmasqigsymw:
        qywueemkicmwyoqg:
        goto yiyuuyewoweiaokc;
        coqmamquawyaeyae:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto acikugwgomwemcmu;
            gkiikogcsmysucuc:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\x69\164\154\x65"], [$this, "\162\145\156\144\x65\x72"], $amakmumgguksgmum["\x67\162\157\165\160"], $amakmumgguksgmum["\163\x65\x63\164\x69\x6f\156"], $amakmumgguksgmum["\141\162\147\163"]);
            goto uywoegeimqomwqoa;
            mkggmsugkikwywom:
            $amakmumgguksgmum["\x61\162\x67\x73"]["\151\144"] = $aokagokqyuysuksm;
            goto gkiikogcsmysucuc;
            uywoegeimqomwqoa:
            aikaeokwagkiecao:
            goto yeomwmwumiieiywi;
            acikugwgomwemcmu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\x73\145\143\x74\x69\157\156" => "\x64\145\x66\x61\165\154\x74", "\x74\151\164\x6c\x65" => '', "\x67\x72\157\165\x70" => "\147\145\156\145\x72\x61\154", "\x61\162\x67\163" => []]);
            goto kamwemiweockugia;
            kamwemiweockugia:
            register_setting($amakmumgguksgmum["\147\x72\x6f\x75\x70"], $aokagokqyuysuksm);
            goto mkggmsugkikwywom;
            yeomwmwumiieiywi:
        }
        goto ymsiicmasqigsymw;
        wakmmggoiykyuamq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\x77\157\x72\x64\x70\162\145\x73\x73\137\x73\x65\x74\164\x69\x6e\x67\163\137\x66\151\145\154\x64\163", []);
        goto coqmamquawyaeyae;
        yiyuuyewoweiaokc:
    }
    
    public function render($ywmkwiwkosakssii)
    {
        MetaBox::okmsgamiiemyesao(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x65\143\150\x6f" => true]));
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = false)
    {
        return DecoratorOption::get($uusmaiomayssaecw, $ggauoeuaesiymgee);
    }
}
