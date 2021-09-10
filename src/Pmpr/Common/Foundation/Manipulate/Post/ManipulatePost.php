<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use WP_Post;
use WP_Post_Type;
use WP_Query;

class ManipulatePost extends Common
{
    
    public static function wugecumwuwwwqyoe($post)
    {
        return DecoratorPost::wugecumwuwwwqyoe(self::mwikyscisascoeea($post, true));
    }
    
    public static function cwucesiiikgqsgui()
    {
        $sqeykgyoooqysmca = ManipulateArray::get(self::get(), self::POST_TYPE);
        if (!$sqeykgyoooqysmca) {
            global $typenow, $current_screen;
            if ($typenow) {
                $sqeykgyoooqysmca = $typenow;
            } elseif ($current_screen) {
                $sqeykgyoooqysmca = ManipulateArray::get($current_screen, self::POST_TYPE);
            }
            if (!$sqeykgyoooqysmca) {
                $sqeykgyoooqysmca = ManipulateServer::ayueggmoqeeukqmq(self::POST_TYPE);
                $post = ManipulateServer::ayueggmoqeeukqmq(self::POST);
                if (!$sqeykgyoooqysmca && $post) {
                    $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
                }
            }
        }
        return $sqeykgyoooqysmca;
    }
    
    public static function ygqycmmkoiuocoia($post)
    {
        return ManipulateArray::get(self::get($post), 'post_parent');
    }
    
    public static function ekwkywuguceaogsk()
    {
        $wyoiwuqokyeeuguk = [];
        if (have_posts()) {
            ookcgumoacskyymy:
            if (!have_posts()) {
                goto owisckseoogsugqq;
            }
            the_post();
            $wyoiwuqokyeeuguk[] = self::get();
            goto ookcgumoacskyymy;
            owisckseoogsugqq:
        }
        return $wyoiwuqokyeeuguk;
    }
    
    public static function cuoieqacocyyookg($post)
    {
        $emeuskyoeemoywwi = self::wgocauqiyqkmkyki($post);
        return floor($emeuskyoeemoywwi / 200);
    }
    
    public static function wgocauqiyqkmkyki($post)
    {
        $post = self::get($post);
        $ewgwqamkygiqaawc = self::souwykwwmyygqyqi($post);
        
        $ewgwqamkygiqaawc = preg_replace('/[[:punct:][:digit:]]/', '', $ewgwqamkygiqaawc);
        
        $ewgwqamkygiqaawc = preg_replace('/[[:space:]]/', ' ', $ewgwqamkygiqaawc);
        
        
        $emeuskyoeemoywwi = preg_split("/[\n\r\t ]+/", $ewgwqamkygiqaawc, 0, PREG_SPLIT_NO_EMPTY);
        
        return count($emeuskyoeemoywwi);
    }
    
    public static function mwoyqeeigwqoamiw($ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['query' => [], self::OUTPUT => self::NAMES, self::EXCLUDE => [], self::INCLUDE => []]);
        $gqgemcmoicmgaqie = ManipulateArray::get($ywmkwiwkosakssii, 'query');
        $sogksuscggsicmac = ManipulateArray::get($ywmkwiwkosakssii, self::OUTPUT);
        $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE);
        $yemgmmgogcwccuky = ManipulateArray::get($ywmkwiwkosakssii, self::EXCLUDE);
        $ggauoeuaesiymgee = self::DEFAULT_POST_TYPES;
        if (!$ooiewiwkegguusum) {
            $gqgemcmoicmgaqie = ManipulateFormat::omaawkkwwyesqwcc($gqgemcmoicmgaqie, ['public' => true, '_builtin' => false, 'publicly_queryable' => true]);
        } else {
            $gqgemcmoicmgaqie = [];
        }
        $aqykuigiuwmmcieu = $sogksuscggsicmac;
        if (!in_array($sogksuscggsicmac, [self::OBJECT, self::NAMES])) {
            $aqykuigiuwmmcieu = self::OBJECT;
        }
        $oammesyieqmwuwyi = ManipulateFormat::omaawkkwwyesqwcc($ggauoeuaesiymgee, DecoratorPost::mwoyqeeigwqoamiw($gqgemcmoicmgaqie, $aqykuigiuwmmcieu));
        if ($ooiewiwkegguusum) {
            $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi);
        } elseif ($yemgmmgogcwccuky) {
            $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky));
        }
        $ksaameoqigiaoigg = [];
        if (in_array($sogksuscggsicmac, [self::OBJECT, self::LABELS, self::SLUGS])) {
            foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) {
                $igqsaukqcqscimok = self::waaisqccqacqeium($igqsaukqcqscimok);
                if ($igqsaukqcqscimok) {
                    $ymqmyyeuycgmigyo = $igqsaukqcqscimok->name;
                    if ($sogksuscggsicmac === self::LABELS) {
                        $igqsaukqcqscimok = $igqsaukqcqscimok->label;
                    } elseif ($sogksuscggsicmac === self::SLUGS) {
                        $igqsaukqcqscimok = ManipulateArray::get($igqsaukqcqscimok->rewrite, self::SLUG, $ymqmyyeuycgmigyo);
                    }
                    $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok;
                }
                kgysyqkoqgwmoscq:
            }
            cuseccewekgcgkyg:
        } else {
            $ksaameoqigiaoigg = $oammesyieqmwuwyi;
        }
        return $ksaameoqigiaoigg;
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        return DecoratorPost::qcgakseyaikigqco(self::get($post));
    }
    
    public static function cekqoisoaceaqiam($post)
    {
        $auwuoyyagaiegwae = [];
        $post = self::get($post);
        $sqeykgyoooqysmca = self::gueasuouwqysmomu($post);
        
        array_push($auwuoyyagaiegwae, self::ycqquoiyyuesegsy($post));
        
        $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas($sqeykgyoooqysmca);
        foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) {
            $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
            if ($uyuaosigqymaqsaa) {
                foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                    $voccgqswsiwauyow = ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk);
                    if ($voccgqswsiwauyow) {
                        array_push($auwuoyyagaiegwae, $voccgqswsiwauyow);
                        $weyoqgcesqgeusiu = ManipulateSetting::omkaowmygoqwsywq();
                        if ($weyoqgcesqgeusiu) {
                            $gaeqamemwmwsyukm = $iwewcwusemqaiggk->count;
                            $ocqawgquwsqioses = ceil($gaeqamemwmwsyukm / $weyoqgcesqgeusiu);
                            $giqggecqqikcysgq = min($ocqawgquwsqioses, 10);
                            $ciyackuwsqkoqese = 2;
                            gwiaimosqoiquwkc:
                            if (!($ciyackuwsqkoqese <= $giqggecqqikcysgq)) {
                                goto qiaaqkymeuuueoqk;
                            }
                            $oaeeeywcmcskwwgy = $voccgqswsiwauyow . 'page/' . user_trailingslashit($ciyackuwsqkoqese);
                            array_push($auwuoyyagaiegwae, $oaeeeywcmcskwwgy);
                            ugswokwmkumcmigc:
                            $ciyackuwsqkoqese++;
                            goto gwiaimosqoiquwkc;
                            qiaaqkymeuuueoqk:
                        }
                    }
                    asaowisseacciyia:
                }
                acesyuieuuqwgkwm:
            }
            oqwcmgwimeisusoe:
        }
        makomwwyomweyamm:
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        
        array_push($auwuoyyagaiegwae, DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), get_author_feed_link($qscaoekmoooeuyqg));
        
        $myyccyuumcscsagc = self::mqgeysameoesmuqw($sqeykgyoooqysmca);
        if ($myyccyuumcscsagc == true) {
            array_push($auwuoyyagaiegwae, $myyccyuumcscsagc, get_post_type_archive_feed_link($sqeykgyoooqysmca));
        }
        
        if (self::ucwmcwqmqwaymkkc($post) == 'trash') {
            $gwiqqkoakiiquksg = self::ycqquoiyyuesegsy($post);
            $gwiqqkoakiiquksg = str_replace('__trashed', '', $gwiqqkoakiiquksg);
            array_push($auwuoyyagaiegwae, $gwiqqkoakiiquksg, $gwiqqkoakiiquksg . 'feed/');
        }
        
        array_push($auwuoyyagaiegwae, home_url('/'));
        $ucsmiamgwmayyoco = ManipulatePage::symuoymymumgwkaw();
        if (is_string($ucsmiamgwmayyoco) && !empty($ucsmiamgwmayyoco) && DecoratorOption::get('show_on_front') == 'page') {
            array_push($auwuoyyagaiegwae, $ucsmiamgwmayyoco);
        }
        return $auwuoyyagaiegwae;
    }
    
    public static function keeogscqcgsequyc($useksmwkuswkwcqg)
    {
        $wkaqekwwgqsqwcoi = '';
        $mksyucucyswaukig = self::waaisqccqacqeium($useksmwkuswkwcqg);
        if ($mksyucucyswaukig) {
            $wkaqekwwgqsqwcoi = $mksyucucyswaukig->menu_icon;
            $useksmwkuswkwcqg = $mksyucucyswaukig->name;
        }
        if (!$wkaqekwwgqsqwcoi) {
            $wkaqekwwgqsqwcoi = "admin-{$useksmwkuswkwcqg}";
        }
        return $wkaqekwwgqsqwcoi;
    }
    
    public static function uikgwcuascgeissw($post = null)
    {
        $post = self::get($post);
        $meqocwsecsywiiqs = DecoratorPost::qcgakseyaikigqco($post);
        $useksmwkuswkwcqg = self::gueasuouwqysmomu($post, true);
        if ($useksmwkuswkwcqg) {
            $useksmwkuswkwcqg = ManipulateArray::qamwegcyimgcqksw($useksmwkuswkwcqg, 'labels.singular_name');
        }
        return sprintf('%s - %s', $meqocwsecsywiiqs, $useksmwkuswkwcqg);
    }
    
    public static function wieguyuwywywksac($ywmkwiwkosakssii = [])
    {
        return wp_get_archives(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['echo' => false, self::TYPE => 'monthly', self::ORDER => 'DESC']));
    }
    
    public static function ccwssmqgyasqqcoc($post, $sqeykgyoooqysmca) : bool
    {
        $post = self::get($post, self::OBJECT, true);
        return $post && self::gueasuouwqysmomu($post) == $sqeykgyoooqysmca;
    }
    
    public static function qeosassuekcieuuy($sqeykgyoooqysmca = null) : bool
    {
        $cekoogweeooasayu = false;
        $sqeykgyoooqysmca = self::waaisqccqacqeium($sqeykgyoooqysmca);
        if ($sqeykgyoooqysmca) {
            $cekoogweeooasayu = $sqeykgyoooqysmca->public === true;
        }
        return $cekoogweeooasayu;
    }
    
    public static function qkweigiqsaaigqau($post = null) : ?string
    {
        $eeamcawaiqocomwy = null;
        $qscaoekmoooeuyqg = self::mguqscccckuywsya($post);
        if ($qscaoekmoooeuyqg) {
            $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg);
        }
        return $eeamcawaiqocomwy;
    }
    
    public static function wsiiswmaagmyiaiw($post = null)
    {
        return DecoratorPost::wsiiswmaagmyiaiw(self::mwikyscisascoeea($post));
    }
    
    public static function mqgeysameoesmuqw($useksmwkuswkwcqg) : string
    {
        if ($useksmwkuswkwcqg instanceof WP_Post_Type) {
            $useksmwkuswkwcqg = $useksmwkuswkwcqg->name;
        }
        return trailingslashit(DecoratorPost::mqgeysameoesmuqw($useksmwkuswkwcqg));
    }
    
    public static function insert($useksmwkuswkwcqg, $ywmkwiwkosakssii = []) : ?int
    {
        $sogksuscggsicmac = null;
        $ywmkwiwkosakssii[self::POST_TYPE] = $useksmwkuswkwcqg;
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['post_title' => '', 'post_name' => '', 'post_content' => '', 'post_status' => '']);
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, [self::NAME => $ywmkwiwkosakssii['post_name'], self::POSTS_PER_PAGE => 1]);
        if (!$wyoiwuqokyeeuguk) {
            $ywmkwiwkosakssii['post_author'] = ManipulateUser::mwikyscisascoeea();
            $sogksuscggsicmac = DecoratorPost::insert($ywmkwiwkosakssii);
        }
        return $sogksuscggsicmac;
    }
    
    public static function sqyyemqmmgmyiaam($sciomagaqmgggsiu = [])
    {
        return DecoratorQuery::moegwqkekcawsggs($sciomagaqmgggsiu);
    }
    
    public static function waoeigwigksoikgu($post, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii['post_id'] = self::mwikyscisascoeea($post);
        return ManipulateComment::ciugwooasaqcywas($ywmkwiwkosakssii);
    }
    
    public static function iuaacwwygkmcoeiy($qwcmueausqgiwigy, $gqgemcmoicmgaqie)
    {
        $uyuaosigqymaqsaa = ManipulateArray::get($gqgemcmoicmgaqie->query_vars, 'search_terms');
        if ($uyuaosigqymaqsaa && $qwcmueausqgiwigy) {
            global $wpdb;
            $qqmmggwcsmymegca = $uyuaosigqymaqsaa;
            $aaycmcgqqqsysccs = !empty($qqmmggwcsmymegca['exact']) ? '' : '%';
            $qwcmueausqgiwigy = [];
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                $qwcmueausqgiwigy[] = $wpdb->prepare("{$wpdb->posts}.post_title LIKE %s", $aaycmcgqqqsysccs . $wpdb->esc_like($iwewcwusemqaiggk) . $aaycmcgqqqsysccs);
                cigesysuauaiccms:
            }
            owgakkqgckqcegoi:
            if (!DecoratorUser::ksgkoukcicwkkaum()) {
                $qwcmueausqgiwigy[] = "{$wpdb->posts}.post_password = ''";
            }
            $qwcmueausqgiwigy = ' AND ' . implode(' AND ', $qwcmueausqgiwigy);
        }
        return $qwcmueausqgiwigy;
    }
    
    public static function waaisqccqacqeium($useksmwkuswkwcqg = null) : ?WP_Post_Type
    {
        if (!$useksmwkuswkwcqg instanceof WP_Post_Type) {
            if (!$useksmwkuswkwcqg) {
                $useksmwkuswkwcqg = self::gueasuouwqysmomu();
            }
            $useksmwkuswkwcqg = DecoratorPost::waaisqccqacqeium($useksmwkuswkwcqg);
        }
        return $useksmwkuswkwcqg;
    }
    
    public static function mwikyscisascoeea($post = null, $cwwowqyuwccuykom = false)
    {
        if (!is_numeric($post)) {
            $post = ManipulateArray::get($post, 'ID');
            if (!$post && !$cwwowqyuwccuykom) {
                if (DecoratorQuery::seokosgecygsmqau()) {
                    $post = DecoratorQuery::keeuqgyooycqoygw();
                } else {
                    $post = get_the_ID();
                }
            }
        }
        return $post;
    }
    
    public static function emcckouwaoassquc(array $sciomagaqmgggsiu = [])
    {
        if (!$sciomagaqmgggsiu) {
            $sciomagaqmgggsiu = self::mwoyqeeigwqoamiw();
        }
        return self::ciugwooasaqcywas($sciomagaqmgggsiu, ['post_status' => 'publish', 'fields' => self::IDS]);
    }
    
    public static function aqcogscycyycgkuq($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam('post_name', $post, $mgkceomocowocqyo);
    }
    
    public static function qkuksuwkueysueww(string $useksmwkuswkwcqg)
    {
        global $wpdb;
        $gaeqamemwmwsyukm = 0;
        try {
            $gaeqamemwmwsyukm = (int) $wpdb->get_var("SELECT COUNT(comment_ID)\n\t\t\t\t\tFROM {$wpdb->comments} WHERE comment_post_ID in (\n\t\t\t\t\tSELECT ID FROM {$wpdb->posts} WHERE post_type = '{$useksmwkuswkwcqg}'\n\t\t\t\t\tAND post_status = 'publish') AND comment_approved = '1'");
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $gaeqamemwmwsyukm;
    }
    
    public static function ucwmcwqmqwaymkkc($post = null, $mgkceomocowocqyo = [])
    {
        return self::ygwimyogyaqgumam('post_status', $post, $mgkceomocowocqyo);
    }
    
    public static function mguqscccckuywsya($post = null, $cwwowqyuwccuykom = false)
    {
        return self::ygwimyogyaqgumam('post_author', self::mwikyscisascoeea($post, $cwwowqyuwccuykom));
    }
    
    public static function uiuwugwykqocmiec($post = null) : ?int
    {
        return DecoratorHook::sscegwueamckwmcy('get_post_word_count', 0, self::get($post));
    }
    
    public static function gsaceacmqiuqoouo($useksmwkuswkwcqg, $ymqmyyeuycgmigyo, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii['name'] = $ymqmyyeuycgmigyo;
        $suuagcecoyuweoqk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        return $suuagcecoyuweoqk ? array_pop($suuagcecoyuweoqk) : '';
    }
    
    public static function owicscwgeuqcqaig($useksmwkuswkwcqg = 'post', $ywmkwiwkosakssii = [])
    {
        $ycmguuqqaiisymgg = ['numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC', 'include' => [], 'exclude' => [], 'meta_key' => '', 'meta_value' => '', 'post_type' => $useksmwkuswkwcqg, 'suppress_filters' => true];
        $yiasugywggckywoa = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        if (empty($yiasugywggckywoa['post_status'])) {
            $yiasugywggckywoa['post_status'] = 'attachment' === $yiasugywggckywoa['post_type'] ? 'inherit' : 'publish';
        }
        if (!empty($yiasugywggckywoa['numberposts']) && empty($yiasugywggckywoa['posts_per_page'])) {
            $yiasugywggckywoa['posts_per_page'] = $yiasugywggckywoa['numberposts'];
        }
        if (!empty($yiasugywggckywoa['category'])) {
            $yiasugywggckywoa['cat'] = $yiasugywggckywoa['category'];
        }
        if (!empty($yiasugywggckywoa['include'])) {
            $egekuwigiusmwiek = wp_parse_id_list($yiasugywggckywoa['include']);
            $yiasugywggckywoa['posts_per_page'] = count($egekuwigiusmwiek);
            $yiasugywggckywoa['post__in'] = $egekuwigiusmwiek;
        } elseif (!empty($yiasugywggckywoa['exclude'])) {
            $yiasugywggckywoa['post__not_in'] = wp_parse_id_list($yiasugywggckywoa['exclude']);
        }
        $yiasugywggckywoa['ignore_sticky_posts'] = true;
        $yiasugywggckywoa['no_found_rows'] = true;
        return new WP_Query($yiasugywggckywoa);
    }
    
    public static function weescwwgqgiyumyw($post, $seyqqsmuaiegkeeq, $ywmkwiwkosakssii = [])
    {
        $uyuaosigqymaqsaa = DecoratorPost::weescwwgqgiyumyw(self::mwikyscisascoeea($post), $seyqqsmuaiegkeeq, $ywmkwiwkosakssii);
        if (!is_array($uyuaosigqymaqsaa) || is_wp_error($uyuaosigqymaqsaa)) {
            $uyuaosigqymaqsaa = [];
        }
        return $uyuaosigqymaqsaa;
    }
    
    public static function ekauksssqmmykouq($post = null, $wwgucssaecqekuek = [])
    {
        $qscaoekmoooeuyqg = self::qkweigiqsaaigqau($post);
        if ($qscaoekmoooeuyqg) {
            $wwgucssaecqekuek['href'] = $qscaoekmoooeuyqg;
            $ymqmyyeuycgmigyo = DecoratorAuthor::igawqaomowicuayw('display_name', self::mguqscccckuywsya($post));
            $qscaoekmoooeuyqg = ManipulateHTML::uuccukgasskgimsq('a', $wwgucssaecqekuek, $ymqmyyeuycgmigyo);
        }
        return $qscaoekmoooeuyqg;
    }
    
    public static function gueasuouwqysmomu($post = null, $awqscowmskeuymeu = false)
    {
        $useksmwkuswkwcqg = get_post_type();
        if (is_numeric($post)) {
            $post = self::get($post);
        }
        if (is_array($post) || $post instanceof WP_Post) {
            $useksmwkuswkwcqg = ManipulateArray::get($post, 'post_type');
        }
        if (!$useksmwkuswkwcqg) {
            $useksmwkuswkwcqg = ManipulateServer::get('post_type');
        }
        if ($awqscowmskeuymeu) {
            $useksmwkuswkwcqg = self::waaisqccqacqeium($useksmwkuswkwcqg);
        }
        return $useksmwkuswkwcqg;
    }
    
    public static function gamoemyysmgugccu($post = null, $iueymcwwscwqkiyq = 'all')
    {
        return self::ymgsgecsiqeegseg($post, $iueymcwwscwqkiyq) > 0;
    }
    
    public static function wsqeykgqiemswysa($sqeykgyoooqysmca, $iueymcwwscwqkiyq = 'publish', $yiyimoacecwoqeko = '')
    {
        return ManipulateArray::get(wp_count_posts($sqeykgyoooqysmca, $yiyimoacecwoqeko), $iueymcwwscwqkiyq);
    }
    
    public static function igkcwemyysqkwuuy($meqocwsecsywiiqs, $useksmwkuswkwcqg, $ywmkwiwkosakssii = [])
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['order' => 'ASC', 'posts_per_page' => 10]);
        if (strlen($meqocwsecsywiiqs) > 1) {
            $ywmkwiwkosakssii['s'] = $meqocwsecsywiiqs;
            $ywmkwiwkosakssii['suppress_filters'] = false;
        }
        DecoratorHook::cecaguuoecmccuse('posts_search', [__CLASS__, 'iuaacwwygkmcoeiy'], 10, 2);
        $wyoiwuqokyeeuguk = self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii);
        DecoratorHook::ggmgmqswqkgecosg('posts_search', [__CLASS__, 'iuaacwwygkmcoeiy'], 10);
        return $wyoiwuqokyeeuguk;
    }
    
    public static function ygwimyogyaqgumam($aiowsaccomcoikus, $post = null, $mgkceomocowocqyo = [])
    {
        return DecoratorPost::ygwimyogyaqgumam($aiowsaccomcoikus, self::mwikyscisascoeea($post), $mgkceomocowocqyo);
    }
    
    public static function kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg = true)
    {
        $uyuaosigqymaqsaa = self::weescwwgqgiyumyw($post, $kesssewsiegssiya);
        if (is_array($uyuaosigqymaqsaa)) {
            if ($qqgsimqiqyaugceg) {
                $uyuaosigqymaqsaa = isset($uyuaosigqymaqsaa[0]) ? $uyuaosigqymaqsaa[0] : null;
            }
        } else {
            $uyuaosigqymaqsaa = null;
        }
        return $uyuaosigqymaqsaa;
    }
    
    public static function smqukgcyacswysqa($uusmaiomayssaecw = '', $post = null, $eqgoocgaqwqcimie = '')
    {
        return DecoratorPost::smqukgcyacswysqa($post, $uusmaiomayssaecw, $eqgoocgaqwqcimie);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        $post = self::get($post);
        $iayakwckycsumkqa = null;
        if (!$gioggcykgoikcwiy || DecoratorPost::seewsasmyoyciiee($post)) {
            $iayakwckycsumkqa = DecoratorPost::masoymaamekuykso($post);
        }
        return $iayakwckycsumkqa;
    }
    
    public static function cagmcswsqkwuasiy($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES)
    {
        global $pagenow;
        $sogksuscggsicmac = false;
        if ($pagenow == 'edit.php' && is_admin()) {
            $useksmwkuswkwcqg = self::gueasuouwqysmomu();
            if (is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || is_string($useksmwkuswkwcqg) && $useksmwkuswkwcqg == $sciomagaqmgggsiu) {
                $sogksuscggsicmac = true;
            }
        }
        return $sogksuscggsicmac;
    }
    
    public static function ymgsgecsiqeegseg($post = null, $iueymcwwscwqkiyq = 'approved')
    {
        $egkygecqiowwuuuu = DecoratorPost::ymgsgecsiqeegseg(self::mwikyscisascoeea($post));
        return ManipulateArray::get($egkygecqiowwuuuu, $iueymcwwscwqkiyq, 0);
    }
    
    public static function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $omasqoksqewuwwkq = false)
    {
        return DecoratorPost::giwmekimakcaawsq(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $omasqoksqewuwwkq);
    }
    
    public static function igawqaomowicuayw($uusmaiomayssaecw = '', $post = null, bool $cuyooiakswegosog = true)
    {
        return DecoratorPost::igawqaomowicuayw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $cuyooiakswegosog);
    }
    
    public static function souwykwwmyygqyqi($post = null, $egkeamycaysqsoma = true) : ?string
    {
        $post = self::get($post);
        $ewgwqamkygiqaawc = '';
        if ($egkeamycaysqsoma) {
            $ewgwqamkygiqaawc = DecoratorPost::souwykwwmyygqyqi($post);
        } elseif ($post) {
            $ewgwqamkygiqaawc = ManipulateArray::get($post, 'post_content');
        }
        return $ewgwqamkygiqaawc;
    }
    
    public static function ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $post = null, $oyuqkqayqyqysyse = '')
    {
        return DecoratorPost::ksmqawcowkmegigw(self::mwikyscisascoeea($post), $uusmaiomayssaecw, $eqgoocgaqwqcimie, $oyuqkqayqyqysyse);
    }
    
    public static function mmoaikqueyiwcesm($post, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii['post_parent'] = self::mwikyscisascoeea($post);
        return self::ciugwooasaqcywas(DecoratorPost::gueasuouwqysmomu($post), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function qmmimiesyoyuqeqo($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $eyagosskwwmgwmog = self::uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
        foreach ($eyagosskwwmgwmog as $omwmuycmeqcqokom) {
            $omwmuycmeqcqokom->children = self::mmoaikqueyiwcesm($omwmuycmeqcqokom, $ywmkwiwkosakssii);
            gcskyqewysqaceeg:
        }
        qumkwsqqocooyuoq:
        return $eyagosskwwmgwmog;
    }
    
    public static function ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $sogksuscggsicmac = [];
        $ycmguuqqaiisymgg = [self::POST_TYPE => $useksmwkuswkwcqg, self::POSTS_PER_PAGE => -1];
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ycmguuqqaiisymgg);
        $ywmkwiwkosakssii = DecoratorHook::sscegwueamckwmcy('get_posts_args', $ywmkwiwkosakssii);
        $wyoiwuqokyeeuguk = DecoratorPost::ciugwooasaqcywas($ywmkwiwkosakssii);
        if ($aqykuigiuwmmcieu == self::LABELS) {
            foreach ($wyoiwuqokyeeuguk as $uusmaiomayssaecw => $post) {
                $meqocwsecsywiiqs = get_the_title($post);
                if ($meqocwsecsywiiqs) {
                    $sogksuscggsicmac[self::mwikyscisascoeea($post)] = $meqocwsecsywiiqs;
                }
                wwswmaewcaisauei:
            }
            kkewoqqowugagwoy:
        } else {
            $sogksuscggsicmac = $wyoiwuqokyeeuguk;
        }
        return $sogksuscggsicmac;
    }
    
    public static function uamasysiccecccmw($oiegiwogmwmawkeo = 'post-thumbnail', $post = null)
    {
        $eeamcawaiqocomwy = DecoratorPost::uamasysiccecccmw(self::mwikyscisascoeea($post), $oiegiwogmwmawkeo);
        return (string) DecoratorHook::sscegwueamckwmcy('post_thumbnail_url', $eeamcawaiqocomwy, $post, $oiegiwogmwmawkeo);
    }
    
    public static function ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST_TYPE => $useksmwkuswkwcqg, 'post_status' => 'publish']);
        return DecoratorPost::ymuqsscwmcumcama($ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function squyiyimquqicqke($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        $post = self::get($post);
        $ocogsiouoiuuguym = null;
        if ($post) {
            if (!$saqmwwmqiwmkiwaa) {
                $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
            }
            $ocogsiouoiuuguym = DecoratorPost::kugamkssceycoyaq($saqmwwmqiwmkiwaa, false, $post);
            if ($egkeamycaysqsoma) {
                $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy('get_the_date', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
            }
        }
        return $ocogsiouoiuuguym;
    }
    
    public static function get($post = null, $aqykuigiuwmmcieu = self::OBJECT, $cwwowqyuwccuykom = false)
    {
        if (!$post instanceof WP_Post) {
            if (!$post && $cwwowqyuwccuykom) {
                $post = null;
            } else {
                if (!$post) {
                    $post = ManipulateServer::get(self::POST);
                }
                $post = DecoratorPost::get($post, $aqykuigiuwmmcieu);
            }
        }
        return $post;
    }
    
    public static function eqgwuukcqqayesqa($oysoyeaucuawyaky = [], $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::POST__IN => $oysoyeaucuawyaky, self::ORDERBY => self::POST__IN]);
        return self::ciugwooasaqcywas(self::mwoyqeeigwqoamiw(), $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function ycqquoiyyuesegsy($ccamueccusigaaio = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        $post = self::mwikyscisascoeea($ccamueccusigaaio, $cwwowqyuwccuykom);
        $migiiksoiymissge = '';
        if ($post) {
            $migiiksoiymissge = DecoratorPost::ycqquoiyyuesegsy($post, $eoocgqsqmwuegiae);
        } elseif (is_string($ccamueccusigaaio) && ManipulateValidation::wmcwegoisyeeosqu($ccamueccusigaaio)) {
            $migiiksoiymissge = $ccamueccusigaaio;
        }
        return trailingslashit($migiiksoiymissge);
    }
    
    public static function uswuayuaaosoksqg($useksmwkuswkwcqg, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii['post_parent'] = 0;
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
    
    public static function oukqamgqowciwoum($saqmwwmqiwmkiwaa = null, $post = null, $egkeamycaysqsoma = true)
    {
        $post = self::get($post);
        $ocogsiouoiuuguym = null;
        if ($post) {
            if (!$saqmwwmqiwmkiwaa) {
                $saqmwwmqiwmkiwaa = ManipulateSetting::uyomwmskouyyqyyq();
            }
            $ocogsiouoiuuguym = DecoratorPost::kkkiiqssauymiqsk($saqmwwmqiwmkiwaa, false, $post);
            if ($egkeamycaysqsoma) {
                $ocogsiouoiuuguym = DecoratorHook::sscegwueamckwmcy('get_the_modified_date', $ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $post);
            }
        }
        return $ocogsiouoiuuguym;
    }
    
    public static function uqwgsuysegkweago($sciomagaqmgggsiu = self::DEFAULT_POST_TYPES, $ccamueccusigaaio = 'both')
    {
        $sogksuscggsicmac = false;
        if (!$sciomagaqmgggsiu) {
            $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw();
        }
        if (is_admin() && $sciomagaqmgggsiu) {
            global $pagenow;
            $useksmwkuswkwcqg = self::cwucesiiikgqsgui();
            if (is_array($sciomagaqmgggsiu) && in_array($useksmwkuswkwcqg, $sciomagaqmgggsiu) || $useksmwkuswkwcqg === $sciomagaqmgggsiu) {
                switch ($ccamueccusigaaio) {
                    case 'edit':
                        $sogksuscggsicmac = in_array($pagenow, ['post.php']);
                        goto wsemeeocquawyauo;
                    case 'new':
                        $sogksuscggsicmac = in_array($pagenow, ['post-new.php']);
                        goto wsemeeocquawyauo;
                    default:
                        $sogksuscggsicmac = in_array($pagenow, ['post.php', 'post-new.php']);
                }
                ocgkwqqmgasuoies:
                wsemeeocquawyauo:
            }
        }
        return $sogksuscggsicmac;
    }
    
    public static function qgisekcaywsmigga(string $useksmwkuswkwcqg, string $gwiwsycaaqgwmewg, $aucgaecqisksougg = null, $ywmkwiwkosakssii = [], $aqykuigiuwmmcieu = self::OBJECT)
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc(['meta_key' => $gwiwsycaaqgwmewg, 'meta_value' => $aucgaecqisksougg, 'post_status' => 'any'], $ywmkwiwkosakssii);
        return self::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii, $aqykuigiuwmmcieu);
    }
}
