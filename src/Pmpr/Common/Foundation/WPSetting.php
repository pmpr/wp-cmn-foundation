<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\x69\156\151\x74", [$this, "\171\145\x79\x69\x67\x75\171\145\x67\x6d\x6d\171\x75\163\145\x61"]);
        parent::wigskegsqequoeks();
    }
    public function yeyiguyegmmyusea()
    {
        goto gmwkmgkmawygkuuq;
        eeucaygkomwqoiys:
        aeicswayaimcoecy:
        goto oguamsyoaimwgqos;
        oougqkueomqysagg:
        foreach ($qeqooyuoiasweuck as $aokagokqyuysuksm => $amakmumgguksgmum) {
            goto keyyeiogkmkeiciu;
            keyyeiogkmkeiciu:
            $amakmumgguksgmum = ManipulateFormat::omaawkkwwyesqwcc($amakmumgguksgmum, ["\x73\145\x63\164\x69\x6f\x6e" => "\x64\x65\x66\141\x75\154\164", "\164\x69\164\154\x65" => '', "\x67\162\157\165\160" => "\x67\145\156\x65\162\x61\154", "\141\x72\147\x73" => []]);
            goto wikicusisykwugay;
            wikicusisykwugay:
            register_setting($amakmumgguksgmum["\x67\x72\x6f\165\160"], $aokagokqyuysuksm);
            goto ugsmoyiommwgecww;
            ugsmoyiommwgecww:
            $amakmumgguksgmum["\x61\162\147\x73"]["\x69\144"] = $aokagokqyuysuksm;
            goto gkiwqegsueqsmweu;
            gkiwqegsueqsmweu:
            add_settings_field($aokagokqyuysuksm, $amakmumgguksgmum["\164\x69\x74\154\x65"], [$this, "\x72\145\x6e\144\x65\162"], $amakmumgguksgmum["\x67\x72\157\165\160"], $amakmumgguksgmum["\163\145\143\164\x69\157\x6e"], $amakmumgguksgmum["\x61\x72\x67\x73"]);
            goto ykaasokuacwyuoig;
            ykaasokuacwyuoig:
            ewewgkiuwacswmmk:
            goto agmakygyoykkegws;
            agmakygyoykkegws:
        }
        goto eeucaygkomwqoiys;
        gmwkmgkmawygkuuq:
        $qeqooyuoiasweuck = $this->sscegwueamckwmcy("\x77\157\x72\x64\x70\162\x65\x73\x73\x5f\x73\x65\164\164\151\156\147\163\137\x66\x69\145\154\144\x73", []);
        goto oougqkueomqysagg;
        oguamsyoaimwgqos:
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
