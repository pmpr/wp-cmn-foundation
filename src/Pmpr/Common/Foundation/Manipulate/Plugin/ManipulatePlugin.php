<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Plugin;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorPlugin;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use WP_Requirements_Check;

class ManipulatePlugin extends Common
{
    
    public static function yicegakcoioyuwos() : array
    {
        return (array) DecoratorOption::get("\x61\x63\164\151\x76\x65\137\160\x6c\165\147\x69\156\163", []);
    }
    
    public static function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool
    {
        return DecoratorPlugin::ggocakcisguuokai($mkysicwccoeicumg) || self::sioyqaykmwwugmgi($mkysicwccoeicumg);
    }
    
    public static function sskmceyamwugkaii($ywmkwiwkosakssii = []) : bool
    {
        goto yeeaasukmegoociq;
        gaoycoykycqicwaq:
        $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii);
        goto eoieikyaiucwwwas;
        eoieikyaiucwwwas:
        return $gioggcykgoikcwiy->uysacksscoseuguc();
        goto oeooskowyaoiesig;
        yeeaasukmegoociq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\150\x70" => "\x37\x2e\x34", "\x77\160" => "\x35\x2e\62"]);
        goto gaoycoykycqicwaq;
        oeooskowyaoiesig:
    }
    
    public static function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool
    {
        goto oioygkocoumymyqa;
        skgguaeyousyogee:
        $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]);
        goto gqqmmososkagcqco;
        asoqwsaqqyuoioac:
        return $ggocakcisguuokai;
        goto wuogwyququiiecaa;
        ocgyqmccaskoieei:
        $mseykiqqcmyesccu = DecoratorOption::kuaqqosyyoqiueym("\141\143\x74\151\166\x65\x5f\163\x69\164\145\x77\151\x64\x65\x5f\160\154\x75\147\x69\x6e\163");
        goto skgguaeyousyogee;
        gqqmmososkagcqco:
        awkycquykaigeoms:
        goto asoqwsaqqyuoioac;
        makoqausqoiwyouc:
        if (!is_multisite()) {
            goto awkycquykaigeoms;
        }
        goto ocgyqmccaskoieei;
        oioygkocoumymyqa:
        $ggocakcisguuokai = false;
        goto makoqausqoiwyouc;
        wuogwyququiiecaa:
    }
}
