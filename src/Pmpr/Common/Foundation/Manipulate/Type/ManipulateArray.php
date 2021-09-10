<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;


class ManipulateArray extends Common
{
    
    public static function unset(&$uomewyckeuqoqocu, $uusmaiomayssaecw)
    {
        $eqgoocgaqwqcimie = null;
        if ($uomewyckeuqoqocu && is_array($uomewyckeuqoqocu)) {
            if (is_array($uusmaiomayssaecw)) {
                $uomewyckeuqoqocu = array_diff_key($uomewyckeuqoqocu, array_flip($uusmaiomayssaecw));
            } else {
                if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                    $eqgoocgaqwqcimie = $uomewyckeuqoqocu[$uusmaiomayssaecw];
                    unset($uomewyckeuqoqocu[$uusmaiomayssaecw]);
                }
            }
        }
        return $eqgoocgaqwqcimie;
    }
    
    public static function set($oaiciiqoawkamweo, $uwomkgseoiegeume = [])
    {
        if (is_array($uwomkgseoiegeume) && $uwomkgseoiegeume) {
            $casemmqcsgmemwyg = is_array($oaiciiqoawkamweo);
            $awqscowmskeuymeu = is_object($oaiciiqoawkamweo);
            foreach ($uwomkgseoiegeume as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                if ($casemmqcsgmemwyg) {
                    $oaiciiqoawkamweo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                } else {
                    if ($awqscowmskeuymeu) {
                        $oaiciiqoawkamweo->{$uusmaiomayssaecw} = $eqgoocgaqwqcimie;
                    }
                }
                uwaimsisescsgyqk:
            }
            qyeswawykmasuqye:
        }
        return $oaiciiqoawkamweo;
    }
    
    public static function isset($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        $ksaameoqigiaoigg = true;
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && is_array($yygmoeguaqyumuui) && $yygmoeguaqyumuui) {
            foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
                if (!isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                    $ksaameoqigiaoigg = false;
                    goto uqcsksaywyqeumig;
                }
                yggmaskeguaqkusc:
            }
            uqcsksaywyqeumig:
        } else {
            $ksaameoqigiaoigg = false;
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function gymccqywkegiqiiw($uomewyckeuqoqocu) : int
    {
        $iukyueweicuocgow = 0;
        if ($uomewyckeuqoqocu) {
            $iukyueweicuocgow = rand(0, count($uomewyckeuqoqocu) - 1);
        }
        return $iukyueweicuocgow;
    }
    
    public static function uuegkqwagymmusiy($uomewyckeuqoqocu, $yygmoeguaqyumuui) : bool
    {
        $ksaameoqigiaoigg = false;
        if ($uomewyckeuqoqocu && $yygmoeguaqyumuui) {
            foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
                if (!self::get($uomewyckeuqoqocu, $uusmaiomayssaecw, false)) {
                    $ksaameoqigiaoigg = true;
                    goto ukwoswyyogmsygqg;
                }
                jsmisuccwyukksgc:
            }
            ukwoswyyogmsygqg:
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function gyciysooayoqiisg(&$uomewyckeuqoqocu, $eqgoocgaqwqcimie)
    {
        $qcgkuqesqqymcuui = null;
        if (!is_array($eqgoocgaqwqcimie)) {
            $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie];
        }
        $qcgkuqesqqymcuui = false;
        foreach ($eqgoocgaqwqcimie as $uiymkeeaukcyqqik) {
            $uusmaiomayssaecw = array_search($uiymkeeaukcyqqik, $uomewyckeuqoqocu);
            if ($uusmaiomayssaecw !== false) {
                $qcgkuqesqqymcuui = self::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            }
            yqicwmekwuoywyus:
        }
        kwmiwaecqcgiaqye:
        return $qcgkuqesqqymcuui;
    }
    
    public static function insert(&$uomewyckeuqoqocu, $kuuiuigeacouwmaa, $igqsaukqcqscimok)
    {
        if (is_int($kuuiuigeacouwmaa)) {
            array_splice($uomewyckeuqoqocu, $kuuiuigeacouwmaa, 0, $igqsaukqcqscimok);
        } else {
            $yuyowiyumyysomoy = array_search($kuuiuigeacouwmaa, array_keys($uomewyckeuqoqocu));
            $uomewyckeuqoqocu = array_merge(array_slice($uomewyckeuqoqocu, 0, $yuyowiyumyysomoy), $igqsaukqcqscimok, array_slice($uomewyckeuqoqocu, $yuyowiyumyysomoy));
        }
    }
    
    public static function gogeqwskoiiaocoe($uomewyckeuqoqocu) : bool
    {
        return count($uomewyckeuqoqocu) != count($uomewyckeuqoqocu, 1);
    }
    
    public static function wuoqgcwmkicakygs($uomewyckeuqoqocu) : bool
    {
        $wuoqgcwmkicakygs = false;
        if ($uomewyckeuqoqocu) {
            $wuoqgcwmkicakygs = array_keys($uomewyckeuqoqocu) !== range(0, count($uomewyckeuqoqocu) - 1);
        }
        return $wuoqgcwmkicakygs;
    }
    
    public static function yaeiiwwyckwugsem($uomewyckeuqoqocu, $igaagwuyasawwqms = self::PRIORITY)
    {
        if (is_array($uomewyckeuqoqocu)) {
            uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($igaagwuyasawwqms) {
                $uiuykcweuosgmwki = false;
                if (is_object($mmeioagwmyscwumo) && is_object($csougakqegqiqsgi)) {
                    if (isset($mmeioagwmyscwumo->{$igaagwuyasawwqms}, $csougakqegqiqsgi->{$igaagwuyasawwqms})) {
                        $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms} <=> $csougakqegqiqsgi->{$igaagwuyasawwqms};
                    } else {
                        if (method_exists($mmeioagwmyscwumo, $igaagwuyasawwqms) && method_exists($csougakqegqiqsgi, $igaagwuyasawwqms)) {
                            $uiuykcweuosgmwki = $mmeioagwmyscwumo->{$igaagwuyasawwqms}() <=> $csougakqegqiqsgi->{$igaagwuyasawwqms}();
                        }
                    }
                } else {
                    if (is_array($mmeioagwmyscwumo) && is_array($csougakqegqiqsgi)) {
                        $uiuykcweuosgmwki = self::get($mmeioagwmyscwumo, $igaagwuyasawwqms) <=> self::get($csougakqegqiqsgi, $igaagwuyasawwqms);
                    }
                }
                return $uiuykcweuosgmwki;
            });
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee = null)
    {
        $sogksuscggsicmac = $ggauoeuaesiymgee;
        if (is_array($oaiciiqoawkamweo)) {
            if (isset($oaiciiqoawkamweo[$uusmaiomayssaecw])) {
                $sogksuscggsicmac = $oaiciiqoawkamweo[$uusmaiomayssaecw];
            }
        } else {
            if (is_object($oaiciiqoawkamweo)) {
                if (isset($oaiciiqoawkamweo->{$uusmaiomayssaecw})) {
                    $sogksuscggsicmac = $oaiciiqoawkamweo->{$uusmaiomayssaecw};
                }
            }
        }
        return $sogksuscggsicmac;
    }
    
    public static function cswcewwmmicqesei($uomewyckeuqoqocu, $oegoegssokkyiqam) : array
    {
        $sogksuscggsicmac = [];
        foreach ($oegoegssokkyiqam as $ymqmyyeuycgmigyo => $mkomwsiykqigmqca) {
            $sogksuscggsicmac[$ymqmyyeuycgmigyo] = self::qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca);
            eekaiaeqewiqkkgm:
        }
        gkoaeuekqockuoiq:
        return $sogksuscggsicmac;
    }
    
    public static function qamwegcyimgcqksw($uomewyckeuqoqocu, $mkomwsiykqigmqca, $ggauoeuaesiymgee = null)
    {
        $yygmoeguaqyumuui = explode('.', $mkomwsiykqigmqca);
        foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) {
            if (is_array($uomewyckeuqoqocu)) {
                if (isset($uomewyckeuqoqocu[$uusmaiomayssaecw])) {
                    $uomewyckeuqoqocu =& $uomewyckeuqoqocu[$uusmaiomayssaecw];
                } else {
                    $uomewyckeuqoqocu = null;
                    goto kceuusiekagyeoys;
                }
            } else {
                if (is_object($uomewyckeuqoqocu)) {
                    if (method_exists($uomewyckeuqoqocu, $uusmaiomayssaecw)) {
                        $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw}();
                    } else {
                        if (isset($uomewyckeuqoqocu->{$uusmaiomayssaecw})) {
                            $uomewyckeuqoqocu = $uomewyckeuqoqocu->{$uusmaiomayssaecw};
                        } else {
                            $uomewyckeuqoqocu = null;
                            goto kceuusiekagyeoys;
                        }
                    }
                } else {
                    $uomewyckeuqoqocu = null;
                    goto kceuusiekagyeoys;
                }
            }
            uyeyscsaigimsqwq:
        }
        kceuusiekagyeoys:
        if (!$uomewyckeuqoqocu) {
            $uomewyckeuqoqocu = $ggauoeuaesiymgee;
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function sagscekukkacqaaw($uomewyckeuqoqocu, $uusmaiomayssaecw, $uuyoeicyoayimaoa = -1) : array
    {
        if (is_array($uomewyckeuqoqocu)) {
            uasort($uomewyckeuqoqocu, function ($mmeioagwmyscwumo, $csougakqegqiqsgi) use($uusmaiomayssaecw) {
                return $mmeioagwmyscwumo[$uusmaiomayssaecw] <=> $csougakqegqiqsgi[$uusmaiomayssaecw];
            });
            if ($uuyoeicyoayimaoa > 0) {
                $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 0, $uuyoeicyoayimaoa, true);
            }
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function gucyquqwoimkiiaq($oaiciiqoawkamweo, $yygmoeguaqyumuui, $mywqgwsimwoeoawk = true, $ekiuyucoiagmscgy = null) : array
    {
        $sogksuscggsicmac = [];
        if (is_array($oaiciiqoawkamweo) && is_array($yygmoeguaqyumuui)) {
            $ggauoeuaesiymgee = '';
            foreach ($yygmoeguaqyumuui as $ewyuweyoskiagksm => $uauoccoqcsaeggui) {
                if (is_numeric($ewyuweyoskiagksm)) {
                    $uusmaiomayssaecw = $uauoccoqcsaeggui;
                } else {
                    $uusmaiomayssaecw = $ewyuweyoskiagksm;
                    $ggauoeuaesiymgee = $uauoccoqcsaeggui;
                }
                $eqgoocgaqwqcimie = self::get($oaiciiqoawkamweo, $uusmaiomayssaecw, $ggauoeuaesiymgee);
                if (is_callable($ekiuyucoiagmscgy)) {
                    $eqgoocgaqwqcimie = call_user_func($ekiuyucoiagmscgy, $eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee);
                }
                if ($mywqgwsimwoeoawk) {
                    $sogksuscggsicmac[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                } else {
                    $sogksuscggsicmac[] = $eqgoocgaqwqcimie;
                }
                wkiymcoqqiigqaaw:
            }
            mwieyyqamgwicgco:
        }
        return $sogksuscggsicmac;
    }
    
    public static function kaucoswaceqcuyam($uomewyckeuqoqocu, $xkqaigkogigocask = true, $sogksuscggsicmac = [])
    {
        if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $esquqsuaumgwoewu) {
                if (is_array($esquqsuaumgwoewu)) {
                    $sogksuscggsicmac = self::kaucoswaceqcuyam($esquqsuaumgwoewu, $xkqaigkogigocask, $sogksuscggsicmac);
                } else {
                    if ($xkqaigkogigocask) {
                        $sogksuscggsicmac[$uusmaiomayssaecw] = $esquqsuaumgwoewu;
                    } else {
                        $sogksuscggsicmac[] = $esquqsuaumgwoewu;
                    }
                }
                qmokwkocmcyeyesc:
            }
            esqwswmoegiqcckg:
        }
        return $sogksuscggsicmac;
    }
    
    public static function qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $aumugyockeskamiq, $gymeemoisimggcww = true) : array
    {
        if (is_array($aumugyockeskamiq)) {
            foreach ($aumugyockeskamiq as $igqsaukqcqscimok) {
                $uomewyckeuqoqocu = self::qwgieqiwscoeaygs($uomewyckeuqoqocu, $ksiyqouuaoymsycg, $igqsaukqcqscimok, $gymeemoisimggcww);
                qksckewucmosemuo:
            }
            mosuacsuaasssciu:
        } else {
            if (isset($uomewyckeuqoqocu[$ksiyqouuaoymsycg], $uomewyckeuqoqocu[$aumugyockeskamiq])) {
                $aseguuimuokgcami = [$aumugyockeskamiq => $uomewyckeuqoqocu[$aumugyockeskamiq]];
                if ($gymeemoisimggcww) {
                    $ggkaciewmeqmgckg = array_splice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)));
                } else {
                    $ggkaciewmeqmgckg = array_slice($uomewyckeuqoqocu, 0, array_search($ksiyqouuaoymsycg, array_keys($uomewyckeuqoqocu)), true);
                }
                unset($ggkaciewmeqmgckg[$aumugyockeskamiq]);
                $uomewyckeuqoqocu = $ggkaciewmeqmgckg + $aseguuimuokgcami + $uomewyckeuqoqocu;
            }
        }
        return $uomewyckeuqoqocu;
    }
    
    public static function oooekmcokooqkcgg($uomewyckeuqoqocu, $oaukocmsckciqaok, $couiucmsqaieciue = []) : array
    {
        $giqggecqqikcysgq = 0;
        $uiymkeeaukcyqqik = null;
        $aqeywoskqiugcmye = null;
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
            if (!key_exists($momcykaoccoymeig, $couiucmsqaieciue)) {
                if (is_object($eqgoocgaqwqcimie)) {
                    $eqgoocgaqwqcimie = $eqgoocgaqwqcimie->{$oaukocmsckciqaok};
                }
                if (is_string($eqgoocgaqwqcimie)) {
                    $ykiwomimkkuiigoq = strlen($eqgoocgaqwqcimie);
                    if ($ykiwomimkkuiigoq > $giqggecqqikcysgq) {
                        $giqggecqqikcysgq = $ykiwomimkkuiigoq;
                        $uiymkeeaukcyqqik = $eqgoocgaqwqcimie;
                        $aqeywoskqiugcmye = $momcykaoccoymeig;
                    }
                }
            }
            skuuyysooocugyww:
        }
        kmooekeyemqgucci:
        return [$aqeywoskqiugcmye, $uiymkeeaukcyqqik];
    }
    
    public static function ksiyqouuaoymsycg(array $uomewyckeuqoqocu, string $mkomwsiykqigmqca, string $qwcmueausqgiwigy, $momcykaoccoymeig = false)
    {
        $ksiyqouuaoymsycg = null;
        foreach ($uomewyckeuqoqocu as $momcykaoccoymeig => $igqsaukqcqscimok) {
            $esoaccosseymguso = self::qamwegcyimgcqksw($igqsaukqcqscimok, $mkomwsiykqigmqca);
            if ($esoaccosseymguso == $qwcmueausqgiwigy) {
                if ($momcykaoccoymeig) {
                    $ksiyqouuaoymsycg = $momcykaoccoymeig;
                } else {
                    $ksiyqouuaoymsycg = $igqsaukqcqscimok;
                }
                goto cmmusgkieoqyymgs;
            }
            mkgmaguyswskyioa:
        }
        cmmusgkieoqyymgs:
        return $ksiyqouuaoymsycg;
    }
}
