<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Post;

use Pmpr\Common\Foundation\Data\PageInfo;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use WP_Post;

class ManipulatePage extends ManipulatePost
{
    
    public static function okiaumcqquyioqcy()
    {
        global $wp_query;
        return isset($wp_query) && (bool) $wp_query->is_posts_page;
    }
    
    public static function cykwscocqwykiocm()
    {
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        if ($oikyogsosqcyueay) {
            $oikyogsosqcyueay = self::get($oikyogsosqcyueay);
        }
        return $oikyogsosqcyueay;
    }
    
    public static function eokiwumgqmymgyoa()
    {
        return DecoratorOption::get('page_for_posts');
    }
    
    public static function icikwuksyiceccmo()
    {
        $oikyogsosqcyueay = self::cykwscocqwykiocm();
        $aaokuekaimigoyue = 'blog';
        if ($oikyogsosqcyueay instanceof WP_Post) {
            $aaokuekaimigoyue = self::aqcogscycyycgkuq($oikyogsosqcyueay);
        }
        return $aaokuekaimigoyue;
    }
    
    public static function oigaewqgekgugqug()
    {
        return DecoratorOption::get('page_on_front');
    }
    
    public static function awgkmqkqkqawmqcu() : bool
    {
        $aiamqeawckcsuaou = ManipulateServer::get('action');
        $syuuigcamkiegaqy = ManipulateServer::oymwkcegiigooaqm('pagenow');
        return $syuuigcamkiegaqy === 'wp-login.php' || in_array($aiamqeawckcsuaou, ['rp', 'lostpassword', 'register']);
    }
    
    public static function symuoymymumgwkaw()
    {
        $migiiksoiymissge = null;
        $oikyogsosqcyueay = self::eokiwumgqmymgyoa();
        if ($oikyogsosqcyueay) {
            $migiiksoiymissge = self::ycqquoiyyuesegsy($oikyogsosqcyueay);
        }
        return $migiiksoiymissge;
    }
    
    public static function qcgakseyaikigqco($post = null)
    {
        $meqocwsecsywiiqs = parent::qcgakseyaikigqco($post);
        if (!$post) {
            if (DecoratorQuery::takycgcamoacksqw()) {
                $meqocwsecsywiiqs = get_bloginfo('name');
            } elseif (self::okiaumcqquyioqcy()) {
                $meqocwsecsywiiqs = parent::qcgakseyaikigqco(self::cykwscocqwykiocm());
            } elseif (DecoratorQuery::moegwqkekcawsggs()) {
                $useksmwkuswkwcqg = self::waaisqccqacqeium();
                if ($useksmwkuswkwcqg) {
                    $meqocwsecsywiiqs = $useksmwkuswkwcqg->label;
                }
            } elseif (DecoratorQuery::migkyseymeomymmy()) {
                $meqocwsecsywiiqs = DecoratorPost::syeuyeikogukksam();
            }
        }
        return $meqocwsecsywiiqs;
    }
    
    public static function somwagieycgkcyec()
    {
        return self::ycqquoiyyuesegsy(self::oigaewqgekgugqug());
    }
    
    public static function iqoacwuiemooiysg() : PageInfo
    {
        $mksyucucyswaukig = get_queried_object();
        $yyimiwcuegayoskq = new PageInfo();
        if (DecoratorQuery::takycgcamoacksqw()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(self::somwagieycgkcyec())->ugaqcouwcuiaemgo('front_page');
        } elseif (DecoratorQuery::seokosgecygsmqau()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(self::symuoymymumgwkaw())->ugaqcouwcuiaemgo('home');
        } elseif (is_category()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var('cat'), 'category'))->ugaqcouwcuiaemgo('taxonomy')->aseocggwwegcmqes('category');
        } elseif (is_tag()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu(get_query_var('tag_id'), 'post_tag'))->ugaqcouwcuiaemgo('taxonomy')->aseocggwwegcmqes('tag');
        } elseif (is_tax()) {
            $kesssewsiegssiya = ManipulateTerm::yyoeeseewqmmyaee($mksyucucyswaukig);
            $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateTerm::qmgcisuuikgmqcsu($mksyucucyswaukig, $kesssewsiegssiya))->ugaqcouwcuiaemgo('taxonomy')->aseocggwwegcmqes($kesssewsiegssiya);
        } elseif (is_search()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(get_search_query())->ugaqcouwcuiaemgo('search');
        } elseif (is_year()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(get_year_link(get_the_time('Y')))->ugaqcouwcuiaemgo('year');
        } elseif (is_month()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(get_month_link(get_the_time('Y'), get_the_time('F')))->ugaqcouwcuiaemgo('month');
        } elseif (is_day()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(get_day_link(get_the_time('Y'), get_the_time('F'), get_the_time('d')))->ugaqcouwcuiaemgo('day');
        } elseif (is_author()) {
            $qscaoekmoooeuyqg = ManipulateUser::get(get_query_var('author'), true);
            $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg))->ugaqcouwcuiaemgo('author');
        } elseif (is_single() && !DecoratorQuery::aauyuieeeaakygki()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo('single')->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        } elseif (is_page()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(self::ycqquoiyyuesegsy($mksyucucyswaukig))->ugaqcouwcuiaemgo('page');
        } elseif (DecoratorQuery::aauyuieeeaakygki()) {
            $yyimiwcuegayoskq->qmueseocuuekommo(DecoratorAttachment::qmgcisuuikgmqcsu($mksyucucyswaukig))->ugaqcouwcuiaemgo('attachment');
        } elseif (self::sqyyemqmmgmyiaam()) {
            $useksmwkuswkwcqg = self::gueasuouwqysmomu($mksyucucyswaukig, true);
            $yyimiwcuegayoskq->qmueseocuuekommo(self::mqgeysameoesmuqw($useksmwkuswkwcqg->name))->ugaqcouwcuiaemgo('post_type')->aseocggwwegcmqes(self::gueasuouwqysmomu($mksyucucyswaukig));
        } elseif (is_404()) {
            $yyimiwcuegayoskq->ugaqcouwcuiaemgo('404');
        } else {
            $yyimiwcuegayoskq->qmueseocuuekommo(ManipulateServer::ekcymmyqoceukosc())->ugaqcouwcuiaemgo('unknown');
        }
        $yyimiwcuegayoskq->cggwsuueqwqscgei(is_paged());
        return $yyimiwcuegayoskq;
    }
    
    public static function ycqquoiyyuesegsy($post = null, $cwwowqyuwccuykom = false, $eoocgqsqmwuegiae = false)
    {
        $migiiksoiymissge = null;
        if ($post) {
            $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        } elseif (DecoratorQuery::takycgcamoacksqw()) {
            $migiiksoiymissge = ManipulateServer::auksikwsewaywikq();
        } elseif (DecoratorQuery::seokosgecygsmqau()) {
            $migiiksoiymissge = self::symuoymymumgwkaw();
        } elseif (DecoratorQuery::migkyseymeomymmy()) {
            global $wp;
            $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy($wp->request);
        } else {
            $migiiksoiymissge = parent::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom, $eoocgqsqmwuegiae);
        }
        return trailingslashit($migiiksoiymissge);
    }
    
    public static function masoymaamekuykso($post = null, $gioggcykgoikcwiy = false) : ?string
    {
        $iayakwckycsumkqa = null;
        if ($post) {
            $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        } elseif (DecoratorQuery::takycgcamoacksqw()) {
            $iayakwckycsumkqa = parent::masoymaamekuykso(self::oigaewqgekgugqug(), $gioggcykgoikcwiy);
        } elseif (self::okiaumcqquyioqcy()) {
            $iayakwckycsumkqa = parent::masoymaamekuykso(self::cykwscocqwykiocm(), $gioggcykgoikcwiy);
        } elseif (self::sqyyemqmmgmyiaam()) {
            $sqeykgyoooqysmca = self::waaisqccqacqeium();
            if ($sqeykgyoooqysmca) {
                $iayakwckycsumkqa = $sqeykgyoooqysmca->can_export;
            }
        } elseif (DecoratorQuery::migkyseymeomymmy()) {
            $iayakwckycsumkqa = DecoratorPost::wieoiwogwmcwukom();
        } else {
            $iayakwckycsumkqa = parent::masoymaamekuykso($post, $gioggcykgoikcwiy);
        }
        return $iayakwckycsumkqa;
    }
    
    public static function agegeeiiacceomke($aaokuekaimigoyue, $meqocwsecsywiiqs, $omkysikckkcieckq = null, $ywmkwiwkosakssii = [])
    {
        $suaemuyiacqyugsm = DecoratorOption::get($omkysikckkcieckq);
        $mksyucucyswaukig = null;
        if ($suaemuyiacqyugsm) {
            $mksyucucyswaukig = self::get($suaemuyiacqyugsm);
        }
        if (!$suaemuyiacqyugsm || !$mksyucucyswaukig) {
            $suaemuyiacqyugsm = DecoratorPost::qamwegcyimgcqksw($aaokuekaimigoyue, 'page');
            DecoratorOption::update($omkysikckkcieckq, self::mwikyscisascoeea($suaemuyiacqyugsm));
        }
        if (!$suaemuyiacqyugsm) {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['post_title' => $meqocwsecsywiiqs, 'post_name' => $aaokuekaimigoyue, 'post_status' => 'publish']);
            $suaemuyiacqyugsm = self::insert('page', $ywmkwiwkosakssii);
            if ($suaemuyiacqyugsm && $omkysikckkcieckq) {
                DecoratorOption::update($omkysikckkcieckq, $suaemuyiacqyugsm);
            }
            flush_rewrite_rules(false);
        }
    }
    
    public static function ssacaeeassumyuws(?string $migiiksoiymissge = null, $aqykuigiuwmmcieu = self::OBJECT, $useksmwkuswkwcqg = 'page')
    {
        if (!$migiiksoiymissge) {
            $migiiksoiymissge = ManipulateServer::ekcymmyqoceukosc();
        }
        $mkomwsiykqigmqca = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_PATH);
        return DecoratorPost::qamwegcyimgcqksw($mkomwsiykqigmqca, $useksmwkuswkwcqg, $aqykuigiuwmmcieu);
    }
}
