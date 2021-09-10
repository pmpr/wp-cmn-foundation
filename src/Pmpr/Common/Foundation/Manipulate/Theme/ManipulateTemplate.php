<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Container\Storage;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Foundation;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;

class ManipulateTemplate extends Common
{
    
    public static function sikqggwmmykuiymy($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', 'args' => [], 'screen' => '', 'icon_attrs' => [], self::ICON => '', self::TITLE => '', self::CONTEXT => 'side', self::CALLBACK => '', self::PRIORITY => 'high']);
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, 'id', ManipulateString::uniqid(5));
        $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::ICON);
        $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
        $gcgsqcoqciockquc = ManipulateArray::get($ywmkwiwkosakssii, 'screen');
        $mgkceomocowocqyo = ManipulateArray::get($ywmkwiwkosakssii, 'context');
        $ekiuyucoiagmscgy = ManipulateArray::get($ywmkwiwkosakssii, 'callback');
        $sqqewmoeaekuyyas = ManipulateArray::get($ywmkwiwkosakssii, self::PRIORITY);
        if ($wkaqekwwgqsqwcoi) {
            $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, 'icon_attrs', []);
            $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'icon-sm');
            $meqocwsecsywiiqs = ManipulateHTML::smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek);
        }
        add_meta_box($aokagokqyuysuksm, $meqocwsecsywiiqs, $ekiuyucoiagmscgy, $gcgsqcoqciockquc, $mgkceomocowocqyo, $sqqewmoeaekuyyas, ManipulateArray::get($ywmkwiwkosakssii, 'args'));
    }
    
    public static function ksokacwymoeoikcy($mokawwccycoiqeka) : array
    {
        $mksyucucyswaukig = DecoratorQuery::imgymusqgccqsqqq();
        $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu();
        $qookweymeqawmcwo = ['domain' => $mokawwccycoiqeka, 'object' => $mksyucucyswaukig, 'excerpt' => ManipulatePost::masoymaamekuykso($mksyucucyswaukig, true), 'jumbotron' => ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig), 'post_type' => $useksmwkuswkwcqg, 'date_format' => ManipulateSetting::uyomwmskouyyqyyq()];
        $aquuecykqwyukece[] = 'index';
        if (DecoratorQuery::seokosgecygsmqau() || DecoratorQuery::takycgcamoacksqw()) {
            $woaeeewomgcuesaa = 'home';
            $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index';
            if (DecoratorQuery::takycgcamoacksqw()) {
                $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'front';
            } else {
                $qookweymeqawmcwo['jumbotron'] = single_post_title('', false);
            }
        } else {
            if (DecoratorQuery::migkyseymeomymmy()) {
                $qookweymeqawmcwo['excerpt'] = null;
                $qookweymeqawmcwo['jumbotron'] = get_the_archive_title();
                $woaeeewomgcuesaa = 'archive';
                $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index';
                if (DecoratorQuery::mykygowqgwcuecua()) {
                    $qscaoekmoooeuyqg = 'author';
                    $aquuecykqwyukece[$woaeeewomgcuesaa][] = $qscaoekmoooeuyqg;
                    $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta('ID');
                    $aquuecykqwyukece[$woaeeewomgcuesaa][$qscaoekmoooeuyqg][] = get_the_author_meta('nickname');
                } else {
                    if (DecoratorQuery::ocwoeosukggumggw()) {
                        $scwiymciagumsuiw = 'tag';
                        $aquuecykqwyukece[$woaeeewomgcuesaa][] = $scwiymciagumsuiw;
                        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->term_id;
                        $aquuecykqwyukece[$woaeeewomgcuesaa][$scwiymciagumsuiw][] = $mksyucucyswaukig->slug;
                    } else {
                        if (DecoratorQuery::sgayqmgoigoseaoo()) {
                            $guwumyyyakswawas = 'category';
                            $aquuecykqwyukece[$woaeeewomgcuesaa][] = $guwumyyyakswawas;
                            $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->term_id;
                            $aquuecykqwyukece[$woaeeewomgcuesaa][$guwumyyyakswawas][] = $mksyucucyswaukig->slug;
                        } else {
                            if (DecoratorQuery::qmssqeyayicowkgy()) {
                                $kesssewsiegssiya = 'taxonomy';
                                $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->taxonomy;
                                $aquuecykqwyukece[$woaeeewomgcuesaa][$kesssewsiegssiya][] = $mksyucucyswaukig->slug;
                            } else {
                                if (DecoratorQuery::oowkceqysamwygwu()) {
                                    $woaeeewomgcuesaa = 'date';
                                    $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index';
                                    if (DecoratorQuery::qwakseskocsyiyks()) {
                                        $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'year';
                                    } else {
                                        if (DecoratorQuery::mgkmukikygowogsm()) {
                                            $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'month';
                                        } else {
                                            if (DecoratorQuery::wqscegcksyocaias()) {
                                                $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'day';
                                            }
                                        }
                                    }
                                } else {
                                    $aquuecykqwyukece[$woaeeewomgcuesaa][] = $useksmwkuswkwcqg;
                                }
                            }
                        }
                    }
                }
            } else {
                if (DecoratorQuery::cukiusasccucgwqc()) {
                    $qookweymeqawmcwo['post'] = ManipulatePost::get();
                    $aokagokqyuysuksm = $mksyucucyswaukig->ID;
                    $aaokuekaimigoyue = $mksyucucyswaukig->post_name;
                    $woaeeewomgcuesaa = 'singular';
                    $aquuecykqwyukece[$woaeeewomgcuesaa][] = 'index';
                    if (DecoratorQuery::sgeaogakoscmysgc()) {
                        $suaemuyiacqyugsm = 'page';
                        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aokagokqyuysuksm;
                        $aquuecykqwyukece[$woaeeewomgcuesaa][$suaemuyiacqyugsm][] = $aaokuekaimigoyue;
                    } else {
                        if (DecoratorQuery::kccakwkaqugygwmq()) {
                            $cuyooiakswegosog = 'single';
                            $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $useksmwkuswkwcqg;
                            $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aokagokqyuysuksm;
                            $aquuecykqwyukece[$woaeeewomgcuesaa][$cuyooiakswegosog][] = $aaokuekaimigoyue;
                        }
                    }
                } else {
                    if (DecoratorQuery::kmmyuiwaogukwqqi()) {
                        $aquuecykqwyukece[] = '404';
                    } else {
                        if (DecoratorQuery::gouusicsisumuiei()) {
                            if ($gqgemcmoicmgaqie = get_search_query()) {
                                $qookweymeqawmcwo['jumbotron'] = sprintf(__('Search result for: %s', PR__CMN__FOUNDATION), $gqgemcmoicmgaqie);
                            } else {
                                $qookweymeqawmcwo['jumbotron'] = __('Search', PR__CMN__FOUNDATION);
                            }
                            $qookweymeqawmcwo['excerpt'] = null;
                            $aquuecykqwyukece[] = 'search';
                        }
                    }
                }
            }
        }
        $qookweymeqawmcwo['_current_template_name'] = self::aaimaiecygmeiegm($aquuecykqwyukece);
        return [DecoratorHook::sscegwueamckwmcy('template_hierarchy_templates', $aquuecykqwyukece, $mksyucucyswaukig), DecoratorHook::sscegwueamckwmcy('template_hierarchy_parameters', $qookweymeqawmcwo, $mksyucucyswaukig)];
    }
    
    public static function eaqgqqisicwiqkio($iawmgqqucqegmiay, $oammesyieqmwuwyi, $mkomwsiykqigmqca)
    {
        $oammesyieqmwuwyi = array_reverse($oammesyieqmwuwyi);
        $qqscaoyqikuyeoaw = '';
        foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) {
            if (is_array($igqsaukqcqscimok)) {
                $qqscaoyqikuyeoaw = self::eaqgqqisicwiqkio($iawmgqqucqegmiay, $igqsaukqcqscimok, trailingslashit($mkomwsiykqigmqca) . $uusmaiomayssaecw);
            } else {
                $qqscaoyqikuyeoaw = trailingslashit($mkomwsiykqigmqca) . $igqsaukqcqscimok;
                $qqscaoyqikuyeoaw = $qqscaoyqikuyeoaw . '.html.twig';
            }
            if (Foundation::symcgieuakksimmu()->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) {
                goto kceeuicccqscwgsu;
            } else {
                $qqscaoyqikuyeoaw = $mkomwsiykqigmqca . '/index.html.twig';
            }
            iquecygaakmiomeg:
        }
        kceeuicccqscwgsu:
        return $qqscaoyqikuyeoaw;
    }
    
    public static function aaimaiecygmeiegm($aquuecykqwyukece, $sysgmomuyiiawwcm = true)
    {
        $qcmggaiwyoeyguco = [];
        if (is_array($aquuecykqwyukece)) {
            $momcykaoccoymeig = 0;
            foreach ($aquuecykqwyukece as $uusmaiomayssaecw => $qqscaoyqikuyeoaw) {
                if (!is_numeric($uusmaiomayssaecw) && is_string($uusmaiomayssaecw) && !in_array($uusmaiomayssaecw, $qcmggaiwyoeyguco)) {
                    $qcmggaiwyoeyguco[] = $uusmaiomayssaecw;
                }
                $qcmggaiwyoeyguco = array_merge($qcmggaiwyoeyguco, self::aaimaiecygmeiegm($qqscaoyqikuyeoaw, false));
                $momcykaoccoymeig++;
                yimeskeioamqmuwg:
            }
            eacysqsegwcqawsa:
        } else {
            if ($aquuecykqwyukece) {
                $qcmggaiwyoeyguco[] = $aquuecykqwyukece;
            }
        }
        if ($sysgmomuyiiawwcm) {
            $qcmggaiwyoeyguco = array_unique($qcmggaiwyoeyguco);
            krsort($qcmggaiwyoeyguco);
        }
        return $qcmggaiwyoeyguco;
    }
    
    public static function yiyqecawioyosoaw($ymqmyyeuycgmigyo, $wksoawcgagcgoask, ?string $ggauoeuaesiymgee = null)
    {
        $wksoawcgagcgoask = Storage::cqusmgskowmesgcg($wksoawcgagcgoask);
        $esaqeawoigqgagum = $ggauoeuaesiymgee;
        if ($wksoawcgagcgoask) {
            $couygeouymagssgw = untrailingslashit($wksoawcgagcgoask->ikeqsmumgwwuqmkw());
            if ($couygeouymagssgw) {
                $yucgcsieomwqgwws = pathinfo($ymqmyyeuycgmigyo, PATHINFO_EXTENSION);
                if (in_array($yucgcsieomwqgwws, ['php', 'twig'])) {
                    $esaqeawoigqgagum = "{$couygeouymagssgw}/{$yucgcsieomwqgwws}/{$ymqmyyeuycgmigyo}";
                }
            }
        }
        return $esaqeawoigqgagum;
    }
    
    public static function kikcumcscysmmuos($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null)
    {
        if (!$ymqmyyeuycgmigyo) {
            static $iswecucwioowigek;
            $ymqmyyeuycgmigyo = $iswecucwioowigek = $iswecucwioowigek + 1;
        }
        $ygwoqcwsaggqoamw = [];
        if (!$post) {
            $post = ManipulatePost::get();
        }
        if (defined("THEME_LOCATION_{$ymqmyyeuycgmigyo}")) {
            $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy(constant("THEME_LOCATION_{$ymqmyyeuycgmigyo}"), $ygwoqcwsaggqoamw, $qqscaoyqikuyeoaw, $post);
        } else {
            $ygwoqcwsaggqoamw = DecoratorHook::sscegwueamckwmcy("theme_location_{$ymqmyyeuycgmigyo}", $ygwoqcwsaggqoamw, $post);
        }
        if ($ygwoqcwsaggqoamw) {
            if ($skikiykssoocmmik) {
                $kqywgoqsmuswammk = $skikiykssoocmmik;
                if ($skikiykssoocmmik == 'container_section') {
                    $kqywgoqsmuswammk = 'section';
                }
                $egkyssmuqcwaciya = ($skikiykssoocmmik !== 'section' ? 'container ' : '') . 'my-5';
            }
            foreach ($ygwoqcwsaggqoamw as $ewgwqamkygiqaawc) {
                if ($ewgwqamkygiqaawc) {
                    if (isset($kqywgoqsmuswammk, $egkyssmuqcwaciya)) {
                        $ewgwqamkygiqaawc = ManipulateHTML::uuccukgasskgimsq($kqywgoqsmuswammk, ['class' => $egkyssmuqcwaciya, 'ocygcckqeouesoew' => $ymqmyyeuycgmigyo], $ewgwqamkygiqaawc);
                    }
                    echo $ewgwqamkygiqaawc;
                }
                wkaoyycsoeoyqcae:
            }
            yeemsgmumygmumqw:
        }
    }
}
