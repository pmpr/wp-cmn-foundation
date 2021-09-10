<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Convert\Type\ConvertArray;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Template;

class ManipulateHTML extends Common
{
    
    public static function cuumgioggkmuecyo() : string
    {
        return self::uuccukgasskgimsq('div', ['class' => 'd-flex justify-content-start'], ['%2$s', self::uuccukgasskgimsq('small', ['class' => 'font-13 my-auto ml-2'], '%1$s')]);
    }
    
    public static function skyucqyswomguscg($uomewyckeuqoqocu)
    {
        if (is_array($uomewyckeuqoqocu)) {
            if (ManipulateArray::gogeqwskoiiaocoe($uomewyckeuqoqocu)) {
                $aqykuigiuwmmcieu = json_encode($uomewyckeuqoqocu);
            } else {
                $aqykuigiuwmmcieu = implode(' ', $uomewyckeuqoqocu);
            }
        } else {
            $aqykuigiuwmmcieu = $uomewyckeuqoqocu;
        }
        return esc_attr($aqykuigiuwmmcieu);
    }
    
    public static function aoyseswaaaugicuq($uomewyckeuqoqocu, $oswgusmmccauqika = "\"") : ?string
    {
        $aqykuigiuwmmcieu = '';
        if (is_array($uomewyckeuqoqocu)) {
            foreach ($uomewyckeuqoqocu as $ymqmyyeuycgmigyo => $eqgoocgaqwqcimie) {
                $eqgoocgaqwqcimie = self::skyucqyswomguscg($eqgoocgaqwqcimie);
                if (preg_replace('/\\s+/', '', $eqgoocgaqwqcimie)) {
                    if (is_numeric($ymqmyyeuycgmigyo)) {
                        $aqykuigiuwmmcieu .= "{$eqgoocgaqwqcimie} ";
                    } else {
                        $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo}={$oswgusmmccauqika}{$eqgoocgaqwqcimie}{$oswgusmmccauqika} ";
                    }
                } else {
                    $aqykuigiuwmmcieu .= "{$ymqmyyeuycgmigyo} ";
                }
                ooysmgyeqoiesgqm:
            }
            wmaeicoyyciuaiuy:
        }
        return rtrim($aqykuigiuwmmcieu, ' ');
    }
    
    public static function kqmkicmuscsgqeoi($ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii[self::ICON] = ManipulateArray::get($ywmkwiwkosakssii, self::ICON, IconFontawesomeInterface::ICON_SPINNER_THIRD);
        return Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::SPINNER_TEMPLATE_PATH, $ywmkwiwkosakssii);
    }
    
    public static function symsyiaqmawcmycu($sysgmomuyiiawwcm, $gcegymooyemmaysk) : array
    {
        if ($gcegymooyemmaysk) {
            foreach ($sysgmomuyiiawwcm as $uusmaiomayssaecw => $wisgiwskwawciiee) {
                if (isset($gcegymooyemmaysk[$uusmaiomayssaecw])) {
                    $sysgmomuyiiawwcm[$uusmaiomayssaecw] = self::igmaewykumgwoaoy($gcegymooyemmaysk, $uusmaiomayssaecw, $wisgiwskwawciiee);
                    unset($gcegymooyemmaysk[$uusmaiomayssaecw]);
                }
                aaogeemgkogagkai:
            }
            kwoyiysciqumswcy:
            $sysgmomuyiiawwcm = array_merge($sysgmomuyiiawwcm, $gcegymooyemmaysk);
        }
        return $sysgmomuyiiawwcm;
    }
    
    public static function cmsgeysmsqqogeki($uomewyckeuqoqocu, $yygmoeguaqyumuui)
    {
        foreach ($yygmoeguaqyumuui as $msqkueqksqwmskak => $uwomkgseoiegeume) {
            if (isset($uomewyckeuqoqocu[$msqkueqksqwmskak])) {
                $uomewyckeuqoqocu[$uwomkgseoiegeume] = $uomewyckeuqoqocu[$msqkueqksqwmskak];
                ManipulateArray::unset($uomewyckeuqoqocu, $msqkueqksqwmskak);
            }
            isqwwmikecauwyuc:
        }
        qqmmycmsoqegcqqw:
        return $uomewyckeuqoqocu;
    }
    
    public static function gmqyuaqwgiayskei($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq('span', $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi = '', $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false, $qawsmigsyysqwmeq = false)
    {
        $nsmgceoqaqogqmuw = '';
        if ($wkaqekwwgqsqwcoi) {
            if (!ManipulateValidation::wmcwegoisyeeosqu($wkaqekwwgqsqwcoi)) {
                $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-icon');
                if (ManipulateAttachment::aauyuieeeaakygki($wkaqekwwgqsqwcoi)) {
                    $wkaqekwwgqsqwcoi = ManipulateAttachment::mgaeeqsgeoukeokc($wkaqekwwgqsqwcoi);
                } else {
                    $wkaqekwwgqsqwcoi = Template::symcgieuakksimmu()->miocmcoykayoyyau()->eyamqkqiykagecsw($wkaqekwwgqsqwcoi, $gskuwmeemyeuwogc, $qawsmigsyysqwmeq);
                }
            }
            $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy('icon_attributes', $wwgucssaecqekuek, $wkaqekwwgqsqwcoi);
            if ($gskuwmeemyeuwogc) {
                $wkaqekwwgqsqwcoi = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
            } else {
                $wwgucssaecqekuek['src'] = $wkaqekwwgqsqwcoi;
                $wkaqekwwgqsqwcoi = self::uuccukgasskgimsq('img', $wwgucssaecqekuek);
            }
            $nsmgceoqaqogqmuw = DecoratorHook::sscegwueamckwmcy('icon_html', $wkaqekwwgqsqwcoi);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function ciuuiyckmsygceis($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq('strong', $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function icqkogwskuwscskk($ywmkwiwkosakssii = [], $gskauacumcmekigs = []) : string
    {
        $qsqwqsymmqeoqwcu = ManipulateFormat::omaawkkwwyesqwcc(self::uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, ['json' => false])), ['view' => 'dialog', 'prefix' => 'general', 'spinner' => false, 'close_title' => __('Close', PR__CMN__FOUNDATION)]);
        if (!ManipulateArray::get($qsqwqsymmqeoqwcu, 'prefix', '')) {
            _doing_it_wrong(__FUNCTION__, __('please specify a prefix for for modal', PR__CMN__FOUNDATION), 1);
        }
        $nsmgceoqaqogqmuw = Template::symcgieuakksimmu()->iuygowkemiiwqmiw(self::MODAL_TEMPLATE_PATH, $qsqwqsymmqeoqwcu);
        if ($gskauacumcmekigs) {
            $wwgucssaecqekuek = ManipulateArray::get($gskauacumcmekigs, 'attrs', []);
            $meqocwsecsywiiqs = ManipulateArray::get($gskauacumcmekigs, 'title');
            $kqywgoqsmuswammk = ManipulateArray::get($gskauacumcmekigs, 'element', 'button');
            $wwgucssaecqekuek['data-modal'] = ManipulateArray::get($qsqwqsymmqeoqwcu, 'prefix', 'general') . '_modal';
            if ($kqywgoqsmuswammk == 'a' && !ManipulateArray::get($wwgucssaecqekuek, 'href', false)) {
                $wwgucssaecqekuek['href'] = '#';
            }
            $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-confirmable-action');
            $ewgwqamkygiqaawc = ManipulateArray::unset($gskauacumcmekigs, 'content');
            if (!$ewgwqamkygiqaawc) {
                $ewgwqamkygiqaawc = $meqocwsecsywiiqs;
            }
            $nsmgceoqaqogqmuw .= self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function igmaewykumgwoaoy($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        if (is_object($siquossayskcwkea) && $uusmaiomayssaecw) {
            if (isset($siquossayskcwkea->{$uusmaiomayssaecw})) {
                $wisgiwskwawciiee = $siquossayskcwkea->{$uusmaiomayssaecw};
            } else {
                $wisgiwskwawciiee = '';
            }
        } else {
            if (is_array($siquossayskcwkea)) {
                if ($uusmaiomayssaecw) {
                    if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
                        $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
                    } else {
                        $wisgiwskwawciiee = '';
                    }
                } else {
                    $wisgiwskwawciiee = $siquossayskcwkea;
                }
            } else {
                return trim($siquossayskcwkea . ' ' . (is_array($eqgoocgaqwqcimie) ? implode(' ', $eqgoocgaqwqcimie) : $eqgoocgaqwqcimie));
            }
        }
        if (is_array($eqgoocgaqwqcimie)) {
            $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, $eqgoocgaqwqcimie) : trim(implode(' ', $eqgoocgaqwqcimie));
        } else {
            if (is_string($eqgoocgaqwqcimie)) {
                $wisgiwskwawciiee = is_array($wisgiwskwawciiee) ? array_merge($wisgiwskwawciiee, explode(' ', $eqgoocgaqwqcimie)) : trim($wisgiwskwawciiee . ' ' . $eqgoocgaqwqcimie);
            }
        }
        if (is_object($siquossayskcwkea)) {
            $siquossayskcwkea->{$uusmaiomayssaecw} = $wisgiwskwawciiee;
        } else {
            if (is_array($siquossayskcwkea)) {
                if ($uusmaiomayssaecw) {
                    $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
                } else {
                    $siquossayskcwkea = $wisgiwskwawciiee;
                }
            }
        }
        return $siquossayskcwkea;
    }
    
    public static function gusouagusgyoaeya($ewgwqamkygiqaawc, $wwgucssaecqekuek = []) : string
    {
        return self::uuccukgasskgimsq('p', $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function yekemqwyimcqgeuk($ewgwqamkygiqaawc, $ekasyoagocygouom, $wwgucssaecqekuek = []) : string
    {
        $wwgucssaecqekuek['datetime'] = $ekasyoagocygouom;
        return self::uuccukgasskgimsq('time', $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function kuumcaywkqiasisk($essikcmqiyqaqoaq, $uykgysuswksgmwqy = [], $wwgucssaecqekuek = []) : string
    {
        $ewgwqamkygiqaawc = '';
        if ($uykgysuswksgmwqy) {
            $kakckmgscyiskome = '';
            foreach ($uykgysuswksgmwqy as $uusmaiomayssaecw => $kmmmiumuegqmksky) {
                $kakckmgscyiskome .= self::uuccukgasskgimsq('th', ['data-key' => "th-{$uusmaiomayssaecw}", 'class' => 'text-left'], $kmmmiumuegqmksky);
                magymcqykamwqigw:
            }
            oiiqqgyqmggyiums:
            $ewgwqamkygiqaawc .= self::uuccukgasskgimsq('thead', [], $kakckmgscyiskome);
        }
        if (is_array($essikcmqiyqaqoaq)) {
            $ymoekaoqgqmmgoqk = '';
            foreach ($essikcmqiyqaqoaq as $momcykaoccoymeig => $keuwuekioomqqaey) {
                $ykaygkcscgyoiiae = '';
                foreach ($keuwuekioomqqaey as $uusmaiomayssaecw => $yycqiageqkquoioq) {
                    if ($uusmaiomayssaecw == 'tr_attrs') {
                        goto ayamomygygmgwgkg;
                    }
                    $ykaygkcscgyoiiae .= self::uuccukgasskgimsq('td', ['data-key' => "td-{$uusmaiomayssaecw}-{$momcykaoccoymeig}"], $yycqiageqkquoioq);
                    ayamomygygmgwgkg:
                }
                oymyqcoekqyuiguq:
                $ecuqamumceeoyiui = ManipulateArray::get($keuwuekioomqqaey, 'tr_attrs', []);
                $ecuqamumceeoyiui['data-key'] = "tr-{$momcykaoccoymeig}";
                $ymoekaoqgqmmgoqk .= self::uuccukgasskgimsq('tr', $ecuqamumceeoyiui, $ykaygkcscgyoiiae);
                gicmaqmuscawegie:
            }
            ukogwqiuuuakkawy:
            $essikcmqiyqaqoaq = $ymoekaoqgqmmgoqk;
        }
        $ewgwqamkygiqaawc .= self::uuccukgasskgimsq('tbody', [], $essikcmqiyqaqoaq);
        $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'table m-0');
        return self::uuccukgasskgimsq('table', $wwgucssaecqekuek, $ewgwqamkygiqaawc);
    }
    
    public static function sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $mogykyiukkoqceec = 6) : string
    {
        if (is_array($qgqgaykggoemycsk)) {
            $qgqgaykggoemycsk = ConvertArray::kamisyecckmwywwo($qgqgaykggoemycsk, ['index', 'length']);
        }
        $giwamsoicooomueg = '';
        if ($qgqgaykggoemycsk) {
            $wkkweuacukumqmya = array_filter(explode('col-', $qgoqiacsiccwoawi));
            foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
                $eqgoocgaqwqcimie = explode('-', $qgoqiacsiccwoawi);
                $gaeqamemwmwsyukm = count($eqgoocgaqwqcimie);
                $gcgsqcoqciockquc = '';
                if ($gaeqamemwmwsyukm == 1) {
                    
                    $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[0];
                } else {
                    if ($gaeqamemwmwsyukm == 2) {
                        
                        $gcgsqcoqciockquc = $eqgoocgaqwqcimie[0];
                        $qgoqiacsiccwoawi = (int) $eqgoocgaqwqcimie[1];
                    }
                }
                $qgoqiacsiccwoawi = 12 / $qgoqiacsiccwoawi;
                $ykiwomimkkuiigoq = (int) $qgqgaykggoemycsk->length;
                $aoqagsqecokqqwqg = (int) ($ykiwomimkkuiigoq / $qgoqiacsiccwoawi) * $qgoqiacsiccwoawi;
                if ($aoqagsqecokqqwqg == $ykiwomimkkuiigoq) {
                    $aoqagsqecokqqwqg -= $qgoqiacsiccwoawi;
                }
                if ($gcgsqcoqciockquc) {
                    $gcgsqcoqciockquc = "-{$gcgsqcoqciockquc}";
                }
                if ($qgqgaykggoemycsk->index > $aoqagsqecokqqwqg) {
                    $giwamsoicooomueg .= " mb{$gcgsqcoqciockquc}-0";
                } else {
                    $giwamsoicooomueg .= " mb{$gcgsqcoqciockquc}-{$mogykyiukkoqceec}";
                }
                ucksaiwquekagyqe:
            }
            gygqgauaceiuawkq:
        }
        return rtrim($giwamsoicooomueg);
    }
    
    public static function ogaeogwycyqqckeu($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $ukwmeuiywasikwcu = false;
        if (is_string($siquossayskcwkea)) {
            $siquossayskcwkea = trim(str_replace($eqgoocgaqwqcimie, '', $siquossayskcwkea));
        } else {
            if (isset($siquossayskcwkea[$uusmaiomayssaecw])) {
                $wisgiwskwawciiee = $siquossayskcwkea[$uusmaiomayssaecw];
                if (is_string($wisgiwskwawciiee)) {
                    $wisgiwskwawciiee = explode(' ', $wisgiwskwawciiee);
                    $ukwmeuiywasikwcu = true;
                }
                if (is_array($wisgiwskwawciiee)) {
                    if (in_array($eqgoocgaqwqcimie, $wisgiwskwawciiee)) {
                        if (($ccamueccusigaaio = array_search($eqgoocgaqwqcimie, $wisgiwskwawciiee)) !== false) {
                            unset($wisgiwskwawciiee[$ccamueccusigaaio]);
                        }
                        if ($ukwmeuiywasikwcu) {
                            $wisgiwskwawciiee = implode(' ', $wisgiwskwawciiee);
                        }
                        $siquossayskcwkea[$uusmaiomayssaecw] = $wisgiwskwawciiee;
                    }
                }
            }
        }
        return $siquossayskcwkea;
    }
    
    public static function qcgocuceocquqcuw($siquossayskcwkea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        $siquossayskcwkea[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $siquossayskcwkea;
    }
    
    public static function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string
    {
        $iwamiguusayooguq = self::qgsekwygcgawekeq('span', ['class' => 'my-auto'], true, $iwamiguusayooguq);
        if ($wkaqekwwgqsqwcoi) {
            $wwgucssaecqekuek = [];
            if (is_array($wkaqekwwgqsqwcoi)) {
                $wwgucssaecqekuek = ManipulateArray::get($wkaqekwwgqsqwcoi, 'attrs', []);
                $wkaqekwwgqsqwcoi = ManipulateArray::get($wkaqekwwgqsqwcoi, 'icon', '');
            }
            $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'my-auto icon-sm mr-2');
            $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true);
        }
        return self::qgsekwygcgawekeq('div', ['class' => 'pr-modal-guide d-flex'], true, $wkaqekwwgqsqwcoi . $iwamiguusayooguq);
    }
    
    public static function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string
    {
        if (is_array($uamcoiueqaamsqma)) {
            $suuagcecoyuweoqk = '';
            foreach ($uamcoiueqaamsqma as $yaakimaumwqiaeei) {
                $suuagcecoyuweoqk .= self::uuccukgasskgimsq('li', [], $yaakimaumwqiaeei);
                asqqqqakiagymemk:
            }
            iyeswoaqkaeggiiy:
            $uamcoiueqaamsqma = self::uuccukgasskgimsq('ul', [], $suuagcecoyuweoqk);
        }
        if (is_string($uamcoiueqaamsqma)) {
            $uamcoiueqaamsqma = self::uuccukgasskgimsq('div', ['class' => 'text-center modal-message modal-message-' . ($iqaosyayeiuaisqi ? $iqaosyayeiuaisqi : ($occymigcemkqucuw ? 'success' : 'danger'))], $uamcoiueqaamsqma);
        }
        return $uamcoiueqaamsqma;
    }
    
    public static function uskieqmcqyecigmy($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = 'button')
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['type' => 'info', 'json' => JSON_UNESCAPED_SLASHES, 'size' => 'md', 'title' => __('Alert', PR__CMN__FOUNDATION), 'content' => '', 'buttons' => []]);
        $qyukicweqoisimwg = ManipulateArray::get($ywmkwiwkosakssii, 'buttons', []);
        if ($qyukicweqoisimwg) {
            if (in_array('cancel', $qyukicweqoisimwg)) {
                $qyukicweqoisimwg[array_search('cancel', $qyukicweqoisimwg)] = ['class' => 'btn btn-outline-primary', 'title' => __('Cancel', PR__CMN__FOUNDATION), 'dismiss' => true];
            }
            foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
                if (is_array($gskauacumcmekigs)) {
                    if (ManipulateArray::get($gskauacumcmekigs, 'dismiss', false)) {
                        $gskauacumcmekigs[] = 'data-micromodal-close';
                    }
                    $geecqyososceumsk = ManipulateArray::get($gskauacumcmekigs, 'href');
                    $gskauacumcmekigs = self::igmaewykumgwoaoy($gskauacumcmekigs, 'class', 'px-5');
                    if ($geecqyososceumsk) {
                        $scwiymciagumsuiw = 'a';
                    } else {
                        $scwiymciagumsuiw = $kqywgoqsmuswammk;
                    }
                    $qyukicweqoisimwg[$momcykaoccoymeig] = self::qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, ManipulateArray::get($gskauacumcmekigs, 'title'));
                }
                sgiuwkisugmewmcs:
            }
            jkgouewqysmscmqs:
            $ywmkwiwkosakssii['buttons'] = $qyukicweqoisimwg;
        }
        if ($smgooosyoeqwcaeg = ManipulateArray::get($ywmkwiwkosakssii, 'json')) {
            $ywmkwiwkosakssii = json_encode($ywmkwiwkosakssii, $smgooosyoeqwcaeg);
        }
        return $ywmkwiwkosakssii;
    }
    
    public static function sykissckqqccoiqs($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function wegccueewucwyaew($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['has_body' => true, self::ICON => '', self::TITLE => '', self::ATTRS => [], self::CONTENT => '']);
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, self::ATTRS);
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        $ewgwqamkygiqaawc = ManipulateArray::get($ywmkwiwkosakssii, self::CONTENT);
        if ($ewgwqamkygiqaawc) {
            if ($ywmkwiwkosakssii['has_body']) {
                $ewgwqamkygiqaawc = self::uuccukgasskgimsq('div', ['class' => 'card-body'], $ewgwqamkygiqaawc);
            }
            if ($meqocwsecsywiiqs) {
                $meqocwsecsywiiqs = self::uuccukgasskgimsq('div', ['class' => 'card-header'], self::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi));
                $meqocwsecsywiiqs = self::uuccukgasskgimsq('h2', ['class' => 'm-0'], $meqocwsecsywiiqs);
            }
            $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-card card');
            $ewgwqamkygiqaawc = self::uuccukgasskgimsq('div', $wwgucssaecqekuek, [$meqocwsecsywiiqs, $ewgwqamkygiqaawc]);
        }
        return $ewgwqamkygiqaawc;
    }
    
    public static function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false)
    {
        if ($wkaqekwwgqsqwcoi) {
            $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
            $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($meqocwsecsywiiqs, ['class' => 'ml-2']);
            $meqocwsecsywiiqs = self::gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs);
        }
        return $meqocwsecsywiiqs;
    }
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        $egkyssmuqcwaciya = "notice notice-{$iqaosyayeiuaisqi}";
        if ($wygwqsssewkqooqm) {
            $egkyssmuqcwaciya .= ' is-dismissible';
        }
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', $egkyssmuqcwaciya);
        return self::qgsekwygcgawekeq('div', $wwgucssaecqekuek, true, self::gusouagusgyoaeya($uamcoiueqaamsqma));
    }
    
    public static function awwqwouuoioauoaw($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '')
    {
        echo self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
    }
    
    public static function uuccukgasskgimsq($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $ewgwqamkygiqaawc = '') : string
    {
        return self::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc);
    }
    
    public static function qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = false, $ewgwqamkygiqaawc = '') : string
    {
        $wwgucssaecqekuek = self::aoyseswaaaugicuq($wwgucssaecqekuek);
        $ggkaciewmeqmgckg = "<%s %s>%s";
        if (in_array($kqywgoqsmuswammk, ['input', 'br', 'hr', 'img', 'link'])) {
            $ggkaciewmeqmgckg = "<%s %s/>";
            $muiegiugiocacqkm = false;
        }
        if (is_array($ewgwqamkygiqaawc)) {
            $aqykuigiuwmmcieu = implode('', $ewgwqamkygiqaawc);
        } else {
            $aqykuigiuwmmcieu = $ewgwqamkygiqaawc;
        }
        $aqykuigiuwmmcieu = sprintf($ggkaciewmeqmgckg, $kqywgoqsmuswammk, $wwgucssaecqekuek, $aqykuigiuwmmcieu);
        if ($muiegiugiocacqkm) {
            $aqykuigiuwmmcieu = sprintf("%s</%s>", $aqykuigiuwmmcieu, $kqywgoqsmuswammk);
        }
        return $aqykuigiuwmmcieu;
    }
}
