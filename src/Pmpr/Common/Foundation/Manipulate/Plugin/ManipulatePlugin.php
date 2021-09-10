<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        return (array) DecoratorOption::get("\141\x63\x74\x69\x76\x65\x5f\160\154\165\x67\x69\x6e\163", []);
    }
    
    public static function ggocakcisguuokai(?string $mkysicwccoeicumg) : bool
    {
        return DecoratorPlugin::ggocakcisguuokai($mkysicwccoeicumg) || self::sioyqaykmwwugmgi($mkysicwccoeicumg);
    }
    
    public static function sskmceyamwugkaii($ywmkwiwkosakssii = []) : bool
    {
        goto gaoycoykycqicwaq;
        oeooskowyaoiesig:
        return $gioggcykgoikcwiy->uysacksscoseuguc();
        goto awkycquykaigeoms;
        eoieikyaiucwwwas:
        $gioggcykgoikcwiy = new WP_Requirements_Check($ywmkwiwkosakssii);
        goto oeooskowyaoiesig;
        gaoycoykycqicwaq:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\150\160" => "\67\56\64", "\x77\160" => "\65\56\62"]);
        goto eoieikyaiucwwwas;
        awkycquykaigeoms:
    }
    
    public static function sioyqaykmwwugmgi(?string $mkysicwccoeicumg) : bool
    {
        goto makoqausqoiwyouc;
        skgguaeyousyogee:
        $mseykiqqcmyesccu = DecoratorOption::kuaqqosyyoqiueym("\x61\x63\164\x69\166\145\x5f\x73\151\164\145\167\151\x64\145\137\160\154\x75\147\151\156\x73");
        goto gqqmmososkagcqco;
        ocgyqmccaskoieei:
        if (!is_multisite()) {
            goto oioygkocoumymyqa;
        }
        goto skgguaeyousyogee;
        makoqausqoiwyouc:
        $ggocakcisguuokai = false;
        goto ocgyqmccaskoieei;
        gqqmmososkagcqco:
        $ggocakcisguuokai = isset($mseykiqqcmyesccu[$mkysicwccoeicumg]);
        goto asoqwsaqqyuoioac;
        wuogwyququiiecaa:
        return $ggocakcisguuokai;
        goto scqwymaqqacaugqa;
        asoqwsaqqyuoioac:
        oioygkocoumymyqa:
        goto wuogwyququiiecaa;
        scqwymaqqacaugqa:
    }
}
