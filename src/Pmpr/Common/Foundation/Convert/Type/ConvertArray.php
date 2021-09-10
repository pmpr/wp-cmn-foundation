<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Convert\Type;

use stdClass;

class ConvertArray extends Common
{
    
    public static function comkeiiwgwaqmcwe($uomewyckeuqoqocu)
    {
        array_walk($uomewyckeuqoqocu, function (&$eqgoocgaqwqcimie, $uusmaiomayssaecw) {
            if (is_numeric($eqgoocgaqwqcimie)) {
                $eqgoocgaqwqcimie = intval($eqgoocgaqwqcimie);
            } elseif (is_array($eqgoocgaqwqcimie)) {
                $eqgoocgaqwqcimie = self::comkeiiwgwaqmcwe($eqgoocgaqwqcimie);
            }
        });
        return $uomewyckeuqoqocu;
    }
    
    public static function uusyiuwawuywwmye($uomewyckeuqoqocu)
    {
        $sogksuscggsicmac = [];
        if (is_array($uomewyckeuqoqocu)) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                if (is_array($eqgoocgaqwqcimie)) {
                    $sogksuscggsicmac = array_merge($sogksuscggsicmac, self::uusyiuwawuywwmye($eqgoocgaqwqcimie));
                } else {
                    $sogksuscggsicmac = array_merge($sogksuscggsicmac, [$uusmaiomayssaecw => $eqgoocgaqwqcimie]);
                }
                ssmgmiuqoeiuacsa:
            }
            cqkuuyouqoqyguus:
        }
        return $sogksuscggsicmac;
    }
    
    public static function kamisyecckmwywwo($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : stdClass
    {
        $mksyucucyswaukig = new stdClass();
        foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            if (key_exists($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                if (is_numeric($uusmaiomayssaecw)) {
                    $uusmaiomayssaecw = $yygmoeguaqyumuui[$uusmaiomayssaecw];
                }
                unset($yygmoeguaqyumuui[$uusmaiomayssaecw]);
            } elseif (in_array($uusmaiomayssaecw, $yygmoeguaqyumuui)) {
                unset($yygmoeguaqyumuui[array_search($uusmaiomayssaecw, $yygmoeguaqyumuui)]);
            }
            $mksyucucyswaukig->{$uusmaiomayssaecw} = $igqsaukqcqscimok;
            gwoacimkeyymqccq:
        }
        wiqigqgiegmacgsw:
        
        if (count($yygmoeguaqyumuui) > 0) {
            foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
                if (!isset($mksyucucyswaukig->{$uusmaiomayssaecw})) {
                    $mksyucucyswaukig->{$uusmaiomayssaecw} = null;
                }
                ueaiskyiqcquiika:
            }
            koggssokukoukkay:
        }
        return $mksyucucyswaukig;
    }
    
    public static function wauqeqkcymgoceuy($uomewyckeuqoqocu, $yygmoeguaqyumuui = []) : array
    {
        $mguygkocuoaoqqkg = [];
        if (is_array($uomewyckeuqoqocu)) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                if (is_array($igqsaukqcqscimok)) {
                    $mguygkocuoaoqqkg[$uusmaiomayssaecw] = self::kamisyecckmwywwo($igqsaukqcqscimok, $yygmoeguaqyumuui);
                }
                ucecweoaoyeoyuue:
            }
            eqemcocqsyasqycq:
        }
        return $mguygkocuoaoqqkg;
    }
    
    public static function skauuuoqcaiseuks($uomewyckeuqoqocu, $kyckqucegowukmcm = PHP_EOL) : string
    {
        return implode($kyckqucegowukmcm, $uomewyckeuqoqocu);
    }
}
