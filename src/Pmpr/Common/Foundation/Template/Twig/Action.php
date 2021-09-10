<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Decorator\DecoratorWidget;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAttachment;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor;
use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\ManipulateWidget;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\WPSetting;
use WP_Post;
use WP_Term;

class Action extends Callback
{
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw('twig_render_filename'), [$this, 'ooqekmgsqomsakio']);
        parent::kgquecmsgcouyaya();
    }
    public function aqiicausqkomqkqy()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('extract', function (&$mgkceomocowocqyo, $uomewyckeuqoqocu) {
            foreach ($uomewyckeuqoqocu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
                $mgkceomocowocqyo[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
                uaqackioaiqwcocy:
            }
            mkwkkmkgiqiamacc:
        }, ['needs_context' => true]);
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('basename', function ($mkomwsiykqigmqca) {
            return basename($mkomwsiykqigmqca);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('call_user_func', function ($akemggqscawwikim, ...$qookweymeqawmcwo) {
            return call_user_func($akemggqscawwikim, ...$qookweymeqawmcwo);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('uniqid', function () {
            return uniqid();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('echo', function ($sociqikgoyemqaac) {
            echo $sociqikgoyemqaac;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_number', function ($eqgoocgaqwqcimie) {
            return is_numeric($eqgoocgaqwqcimie);
        });
    }
    public function sqmuqsscmimwqoki()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_get_attachment_url', function ($qssimkkaqkwceqqs) {
            return DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_meta', function ($uusmaiomayssaecw, $post, $cuyooiakswegosog = true) {
            return ManipulatePost::igawqaomowicuayw($uusmaiomayssaecw, $post, $cuyooiakswegosog);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_get_attachment_image_url', function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = '') {
            if ($oiegiwogmwmawkeo) {
                $eeamcawaiqocomwy = DecoratorAttachment::iaykyouimqoikagg($qssimkkaqkwceqqs, $oiegiwogmwmawkeo);
            } else {
                $eeamcawaiqocomwy = DecoratorAttachment::oiucukewkckkwiqc($qssimkkaqkwceqqs);
            }
            return $eeamcawaiqocomwy;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_type_object', function ($post) {
            return ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post));
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_type', function ($post) {
            return ManipulatePost::gueasuouwqysmomu($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('has_post_thumbnail', function ($post) {
            return DecoratorPost::oaqimsyggeyyceig($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('has_excerpt', function ($post) {
            return DecoratorPost::seewsasmyoyciiee($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_permalink', function ($post, $cwwowqyuwccuykom = false) {
            return ManipulatePost::ycqquoiyyuesegsy($post, $cwwowqyuwccuykom);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_pagination_limit', function () {
            return ManipulateSetting::omkaowmygoqwsywq();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('have_posts', function () {
            return ManipulatePost::ekwkywuguceaogsk();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_post', 'the_post');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_content', function ($post) {
            return ManipulatePost::souwykwwmyygqyqi($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_content', function ($yauwwygqkmsmamik = '', $ecckicuukiesgaig = false) {
            return the_content($yauwwygqkmsmamik, $ecckicuukiesgaig);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_custom_post_type_single', function () {
            return is_singular(ManipulatePost::mwoyqeeigwqoamiw());
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_image', function ($post = null) {
            return ManipulateAttachment::qecqsmowoqmwgagu($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_post', function ($post = null, $cwwowqyuwccuykom = false) {
            return ManipulatePost::get($post, self::OBJECT, $cwwowqyuwccuykom) instanceof WP_Post;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_attachment', function ($post = null) {
            return ManipulateAttachment::aauyuieeeaakygki($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_page', function ($suaemuyiacqyugsm = null) {
            return is_page($suaemuyiacqyugsm);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_status', function ($post = null) {
            return get_post_status($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_category_link', function ($guwumyyyakswawas) {
            return get_category_link($guwumyyyakswawas);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post', function ($post = null) {
            return ManipulatePost::get($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_date', function ($saqmwwmqiwmkiwaa = '', $post = null) {
            return ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_title', function ($post = 0) {
            return ManipulatePost::qcgakseyaikigqco($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_title', function () {
            return the_title();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_excerpt', function ($post = null) {
            return ManipulatePost::masoymaamekuykso($post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_edit_link', function ($mksyucucyswaukig) {
            $iwywmkygwewiamwm = '#';
            if ($mksyucucyswaukig instanceof WP_Post) {
                $iwywmkygwewiamwm = DecoratorPost::yyykkcyiksewsoqy($mksyucucyswaukig);
            } else {
                if ($mksyucucyswaukig instanceof WP_Term) {
                    $iwywmkygwewiamwm = ManipulateTerm::yyykkcyiksewsoqy($mksyucucyswaukig);
                }
            }
            return $iwywmkygwewiamwm;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_title', function ($mksyucucyswaukig) {
            return ManipulatePost::qcgakseyaikigqco($mksyucucyswaukig);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_id', function ($mksyucucyswaukig) {
            $aokagokqyuysuksm = '';
            if ($mksyucucyswaukig instanceof WP_Post) {
                $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($mksyucucyswaukig);
            } else {
                if ($mksyucucyswaukig instanceof WP_Term) {
                    $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($mksyucucyswaukig);
                } else {
                    if (is_numeric($mksyucucyswaukig)) {
                        $aokagokqyuysuksm = $mksyucucyswaukig;
                    }
                }
            }
            return $aokagokqyuysuksm;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_post_thumbnail', function ($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee = []) {
            return DecoratorPost::smwweookeqkiiygs($post, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_the_post_thumbnail_url', function ($post, $oiegiwogmwmawkeo = 'post-thumbnail') {
            return ManipulatePost::uamasysiccecccmw($oiegiwogmwmawkeo, $post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('post_class', function ($egkyssmuqcwaciya, $post = null) {
            post_class($egkyssmuqcwaciya, $post);
        });
    }
    public function ugugagoguiycqeys()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('can_show_on_grid', function ($momcykaoccoymeig = 1, $ywmkwiwkosakssii = []) {
            $aqykuigiuwmmcieu = '';
            if (is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii) {
                $uasyiiacieyekiia = ['xs', 'sm', 'md', 'lg', 'xl'];
                foreach ($uasyiiacieyekiia as $ycuyiqagsmgikago) {
                    $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, $ycuyiqagsmgikago, false);
                    if ($ycuyiqagsmgikago == 'xs') {
                        $ycuyiqagsmgikago = '';
                    } else {
                        $ycuyiqagsmgikago .= '-';
                    }
                    if (is_numeric($uuyoeicyoayimaoa) && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                        $aqykuigiuwmmcieu .= " d-{$ycuyiqagsmgikago}none";
                    } else {
                        $aqykuigiuwmmcieu .= " d-{$ycuyiqagsmgikago}block";
                    }
                    isgwkwacoyimiauk:
                }
                cscusseysqygsoiy:
            }
            return rtrim($aqykuigiuwmmcieu);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('unset', function ($uomewyckeuqoqocu, $uusmaiomayssaecw) {
            ManipulateArray::unset($uomewyckeuqoqocu, $uusmaiomayssaecw);
            return $uomewyckeuqoqocu;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('add_location', function ($qqscaoyqikuyeoaw = '', $skikiykssoocmmik = false, $ymqmyyeuycgmigyo = null, $post = null) {
            ManipulateTemplate::kikcumcscysmmuos($qqscaoyqikuyeoaw, $skikiykssoocmmik, $ymqmyyeuycgmigyo, $post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('create', function ($kqywgoqsmuswammk, $wwgucssaecqekuek = [], $muiegiugiocacqkm = true, $ewgwqamkygiqaawc = '') {
            return ManipulateHTML::qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, $muiegiugiocacqkm, $ewgwqamkygiqaawc);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('can_lazy_load', function () {
            return $this->sscegwueamckwmcy('can_lazy_load', true);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('card_bottom_margin', function ($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg = 6) {
            $giwamsoicooomueg = ManipulateHTML::sywwiggceceaqmko($qgqgaykggoemycsk, $qgoqiacsiccwoawi, $giwamsoicooomueg);
            return $giwamsoicooomueg;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_setting', function ($uusmaiomayssaecw, $ggauoeuaesiymgee = false) {
            return WPSetting::eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_url', function ($eeamcawaiqocomwy) {
            return ManipulateValidation::wmcwegoisyeeosqu($eeamcawaiqocomwy);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_icon', function ($wkaqekwwgqsqwcoi, $wwgucssaecqekuek = [], $gskuwmeemyeuwogc = false) {
            return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, $gskuwmeemyeuwogc);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_spinner', function ($ywmkwiwkosakssii = []) {
            return ManipulateHTML::kqmkicmuscsgqeoi($ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_template', [$this, 'yiyqecawioyosoaw']);
    }
    public function render()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_user_data', [$this, 'oeaigciskewsiiec']);
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_author_data', [$this, 'oeaigciskewsiiec']);
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('render_post_data', function ($aiowsaccomcoikus = 'title', $ccamueccusigaaio = null, $ywmkwiwkosakssii = []) {
            $cwwowqyuwccuykom = false;
            if ($ccamueccusigaaio) {
                $cwwowqyuwccuykom = true;
            }
            $post = ManipulatePost::get($ccamueccusigaaio, self::OBJECT, $cwwowqyuwccuykom);
            if ($post) {
                $ccamueccusigaaio = $post;
            }
            $icwicymcioeyeyek = null;
            switch ($aiowsaccomcoikus) {
                case self::IMAGE:
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, 'size', 'thumbnail');
                    $wwgucssaecqekuek = ManipulateArray::get($ywmkwiwkosakssii, 'attrs', []);
                    $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, 'class', "img-size size-{$oiegiwogmwmawkeo}");
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        $icwicymcioeyeyek = ManipulateAttachment::qaeeusqkgwagwaqc($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    } else {
                        $icwicymcioeyeyek = DecoratorPost::smwweookeqkiiygs($ccamueccusigaaio, $oiegiwogmwmawkeo, $wwgucssaecqekuek);
                    }
                    goto mggeqkcksyaymcsa;
                case 'image_url':
                case 'image_src':
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, 'size', 'thumbnail');
                    if (ManipulateAttachment::aauyuieeeaakygki($ccamueccusigaaio)) {
                        $icwicymcioeyeyek = DecoratorAttachment::iaykyouimqoikagg($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    } else {
                        $icwicymcioeyeyek = DecoratorPost::uamasysiccecccmw($ccamueccusigaaio, $oiegiwogmwmawkeo);
                    }
                    goto mggeqkcksyaymcsa;
                case self::NAME:
                case self::TITLE:
                    $icwicymcioeyeyek = ManipulatePost::qcgakseyaikigqco($ccamueccusigaaio);
                    goto mggeqkcksyaymcsa;
                case 'date':
                case 'time':
                case 'datetime':
                    switch ($aiowsaccomcoikus) {
                        case 'datetime':
                            $ggauoeuaesiymgee = ManipulateSetting::yoaaussmackoisuw();
                            goto cgyakcqgugqgkqiw;
                        case 'time':
                            $ggauoeuaesiymgee = ManipulateSetting::isiuiegyqiomccsw();
                            goto cgyakcqgugqgkqiw;
                        case 'date':
                        default:
                            $ggauoeuaesiymgee = ManipulateSetting::uyomwmskouyyqyyq();
                            goto cgyakcqgugqgkqiw;
                    }
                    eeyyskqsmquyquqw:
                    cgyakcqgugqgkqiw:
                    $somiuasmmwkuceag = ManipulateArray::get($ywmkwiwkosakssii, 'locale', 'fa');
                    $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, 'format', $ggauoeuaesiymgee);
                    $icwicymcioeyeyek = $this->eciukqcoqmyacwow(ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $ccamueccusigaaio, false), $saqmwwmqiwmkiwaa, $somiuasmmwkuceag);
                    goto mggeqkcksyaymcsa;
                case self::URL:
                case self::PERMALINK:
                    $icwicymcioeyeyek = ManipulatePost::ycqquoiyyuesegsy($ccamueccusigaaio);
                    goto mggeqkcksyaymcsa;
                case 'desc':
                case self::DESCRIPTION:
                    $gioggcykgoikcwiy = ManipulateArray::get($ywmkwiwkosakssii, 'check', true);
                    $icwicymcioeyeyek = ManipulatePost::masoymaamekuykso($ccamueccusigaaio, $gioggcykgoikcwiy);
                    goto mggeqkcksyaymcsa;
            }
            uegouoiuyoqkcscg:
            mggeqkcksyaymcsa:
            return rawurldecode($icwicymcioeyeyek);
        });
    }
    public function comment()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('comment_id_fields', function ($aokagokqyuysuksm = 0) {
            return comment_id_fields($aokagokqyuysuksm);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_link', function ($aqqmosqmsuueyaes = null, $ywmkwiwkosakssii = []) {
            return get_comment_link($aqqmosqmsuueyaes, $ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_time', function ($saqmwwmqiwmkiwaa = '', $eqwyacwmcqusmwoq = false, $mcmaiqckgiuqayau = true) {
            return get_comment_time($saqmwwmqiwmkiwaa, $eqwyacwmcqusmwoq, $mcmaiqckgiuqayau);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_date', function ($saqmwwmqiwmkiwaa = '', $aokagokqyuysuksm = null, $egkeamycaysqsoma = true) {
            return ManipulateComment::squyiyimquqicqke($aokagokqyuysuksm, $saqmwwmqiwmkiwaa, $egkeamycaysqsoma);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment', function ($aokagokqyuysuksm = null) {
            return ManipulateComment::get($aokagokqyuysuksm);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_text', function ($aokagokqyuysuksm = null, $ywmkwiwkosakssii = []) {
            return get_comment_text($aokagokqyuysuksm, $ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('comment_reply_link', function ($ywmkwiwkosakssii = [], $aqqmosqmsuueyaes = null, $post = null) {
            return get_comment_reply_link($ywmkwiwkosakssii, $aqqmosqmsuueyaes, $post);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('edit_comment_link', function ($cmwygeyygwqaemaq = null, $caacssaumiqeaoaw = '', $miisqgccsqqcscia = '') {
            return edit_comment_link($cmwygeyygwqaemaq, $caacssaumiqeaoaw, $miisqgccsqqcscia);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_next_comments_link', function ($pkyyagewkiyckmwy = '', $kmsquaeucgusuyio = 0) {
            return get_next_comments_link($pkyyagewkiyckmwy, $kmsquaeucgusuyio);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_author_link', function ($aqqmosqmsuueyaes = 0) {
            return get_comment_author_link($aqqmosqmsuueyaes);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comment_author', function ($aqqmosqmsuueyaes = 0) {
            return ManipulateComment::mguqscccckuywsya($aqqmosqmsuueyaes);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_comments_number_text', function ($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku) {
            return get_comments_number_text($ykmummwiwyeuawei, $uaggkeiqgiccaumk, $syieqkkqkeeuakku);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_previous_comments_link', function ($pkyyagewkiyckmwy = '') {
            return get_previous_comments_link($pkyyagewkiyckmwy);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('comment_class', function ($cmkqisoeyioisqaw, $aqqmosqmsuueyaes) {
            return comment_class($cmkqisoeyioisqaw, $aqqmosqmsuueyaes);
        });
    }
    public function mkukcsqosmkeeask()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('admin_url', function ($mkomwsiykqigmqca, $aaceqemaqqeckueq = 'admin') {
            return admin_url($mkomwsiykqigmqca, $aaceqemaqqeckueq);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_logout_url', function ($gwqgmkqcgwwmweom = '') {
            return wp_logout_url($gwqgmkqcgwwmweom);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_nonce_field', function ($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm = true) {
            return wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, $emaumsqyoyqcimcm, false);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('sanitize_title', function ($cmwygeyygwqaemaq) {
            return sanitize_title($cmwygeyygwqaemaq);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('current_user_can', function ($gkswkiicccswksiq) {
            return current_user_can($gkswkiicccswksiq);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_user_logged_in', function () {
            return DecoratorUser::ksgkoukcicwkkaum();
        });
    }
    public function eeoeyakoiycwiuoa()
    {
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_head', 'wp_head');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_footer', 'wp_footer');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('body_class', 'body_class');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_nav_menu', 'wp_nav_menu');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('has_nav_menu', 'has_nav_menu');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_search_form', 'get_search_form');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('comments_template', 'comments_template');
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('dynamic_sidebar', function ($momcykaoccoymeig) {
            DecoratorWidget::esuiacmywcmmsmao($momcykaoccoymeig);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_active_sidebar', function ($momcykaoccoymeig) {
            return DecoratorWidget::ooksqgokuwcmoqcu($momcykaoccoymeig);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_front_page', function () {
            return DecoratorQuery::takycgcamoacksqw();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('_admin_search_query', function () {
            _admin_search_query();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_archive', function () {
            return DecoratorQuery::migkyseymeomymmy() || ManipulatePage::okiaumcqquyioqcy();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('do_meta_boxes', function ($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig = null) {
            do_meta_boxes($gcgsqcoqciockquc, $mgkceomocowocqyo, $mksyucucyswaukig);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_widget', function ($assameyusgwogmce, $owgumcsyqsamiemg = [], $ywmkwiwkosakssii = []) {
            DecoratorWidget::assameyusgwogmce($assameyusgwogmce, $owgumcsyqsamiemg, $ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_paged', function () {
            return DecoratorQuery::sgeaogakoscmysgc();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_tax', function ($kesssewsiegssiya = null) {
            return DecoratorTaxonomy::qmssqeyayicowkgy($kesssewsiegssiya);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('bloginfo', function ($ekcswiguywieeeoc) {
            return get_bloginfo($ekcswiguywieeeoc);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_post_type_archive_link', function ($useksmwkuswkwcqg) {
            return ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('home_url', function ($mkomwsiykqigmqca = '', $aaqqkgyougeiueyq = null) {
            return ManipulateServer::gmigwwwmwemyaayy($mkomwsiykqigmqca, $aaqqkgyougeiueyq);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('selected', function ($ymmmmaiuoocagigk, $yeacayasgueouoqc = true) {
            if (is_array($yeacayasgueouoqc)) {
                if (in_array($ymmmmaiuoocagigk, $yeacayasgueouoqc)) {
                    $yeacayasgueouoqc = $ymmmmaiuoocagigk;
                } else {
                    $yeacayasgueouoqc = null;
                }
            }
            return selected($ymmmmaiuoocagigk, $yeacayasgueouoqc, false);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('checked', function ($gmeoaiyogiokeeau, $yeacayasgueouoqc = true) {
            if (is_array($yeacayasgueouoqc)) {
                if (in_array($gmeoaiyogiokeeau, $yeacayasgueouoqc)) {
                    $yeacayasgueouoqc = $gmeoaiyogiokeeau;
                } else {
                    $yeacayasgueouoqc = null;
                }
            }
            return checked($gmeoaiyogiokeeau, $yeacayasgueouoqc, false);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('apply_filters', function ($scwiymciagumsuiw, ...$qookweymeqawmcwo) {
            return $this->sscegwueamckwmcy($scwiymciagumsuiw, ...$qookweymeqawmcwo);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('editor', function ($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck = []) {
            return wp_editor($ewgwqamkygiqaawc, $bgyceomakyumggeu, $qeqooyuoiasweuck);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_format_from_mime_type', function ($qiwqkoiamayyqase) {
            $sqeykgyoooqysmca = '';
            if (strpos($qiwqkoiamayyqase, 'image') !== false) {
                $sqeykgyoooqysmca = 'image';
            } else {
                if (strpos($qiwqkoiamayyqase, 'pdf') !== false) {
                    $sqeykgyoooqysmca = 'pdf';
                }
            }
            return $sqeykgyoooqysmca;
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_get_attachment_image', function ($qssimkkaqkwceqqs, $oiegiwogmwmawkeo = 'thumbnail', $wisgiwskwawciiee = []) {
            return ManipulateAttachment::qaeeusqkgwagwaqc($qssimkkaqkwceqqs, $oiegiwogmwmawkeo, $wisgiwskwawciiee);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_avatar', function ($mkucggyaiaukqoce, $oiegiwogmwmawkeo = 96, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') {
            return ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, $gkykacccamuwowwc, $ggauoeuaesiymgee);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('the_author_meta', function ($aiowsaccomcoikus, $mkucggyaiaukqoce = false) {
            return DecoratorAuthor::igawqaomowicuayw($aiowsaccomcoikus, ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce));
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_author_posts_url', function ($wwumyikyegkqweeo, $wsaeqskqmwoamkum = '') {
            return DecoratorAuthor::mkaiaewoyaimieqg($wwumyikyegkqweeo, $wsaeqskqmwoamkum);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('wp_dropdown_categories', function ($ywmkwiwkosakssii) {
            wp_dropdown_categories($ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_term', function ($post = null, $kesssewsiegssiya = '', $qqgsimqiqyaugceg = true) {
            return ManipulatePost::kckogqkiycqeumoa($post, $kesssewsiegssiya, $qqgsimqiqyaugceg);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_term_link', function ($iwewcwusemqaiggk, $kesssewsiegssiya = '') {
            return ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('term_description', function ($iwewcwusemqaiggk = 0) {
            return term_description($iwewcwusemqaiggk);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_term_children', function ($iwewcwusemqaiggk, $ywmkwiwkosakssii = []) {
            return ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, $ywmkwiwkosakssii);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_term_title', function ($iwewcwusemqaiggk) {
            return ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('__', function ($cmwygeyygwqaemaq, $mokawwccycoiqeka = 'default') {
            return __($cmwygeyygwqaemaq, $mokawwccycoiqeka);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('submit_button', function () {
            return submit_button();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('do_settings_sections', function ($awcmekyiwwkeyisq) {
            return do_settings_sections($awcmekyiwwkeyisq);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('add_thickbox', function () {
            add_thickbox();
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_search_query', function ($sekkmwqwqwcayiwg = true) {
            return get_search_query($sekkmwqwqwcayiwg);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('do_action', function ($aiamqeawckcsuaou, ...$qookweymeqawmcwo) {
            $this->cqscqicucmeamkyq($aiamqeawckcsuaou, ...$qookweymeqawmcwo);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_option', function ($omkysikckkcieckq, $ggauoeuaesiymgee = false) {
            return DecoratorOption::get($omkysikckkcieckq, $ggauoeuaesiymgee);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('get_page_by_path', function ($mkomwsiykqigmqca) {
            return ManipulatePage::ssacaeeassumyuws($mkomwsiykqigmqca);
        });
        $this->yyyewgugioamwckw()->kmmegqceukkkawme('is_admin', function () {
            return is_admin();
        });
        $this->sqmuqsscmimwqoki();
        $this->comment();
        $this->mkukcsqosmkeeask();
    }
    public function iemaakgqgqosiecm()
    {
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw('add_twig_functions'), $this->yyyewgugioamwckw());
        $this->aqiicausqkomqkqy();
        $this->render();
        $this->ugugagoguiycqeys();
        $this->eeoeyakoiycwiuoa();
    }
    
    public function ooqekmgsqomsakio($wkcwykowmmmwioqs)
    {
        if (!is_admin() || ManipulateAjax::mcgoysmkqsqooceq()) {
            $wkcwykowmmmwioqs = ManipulateFile::cgwcgscqeqauaagi($wkcwykowmmmwioqs);
            $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $wkcwykowmmmwioqs);
            $yeacayasgueouoqc = ManipulateArray::get($uomewyckeuqoqocu, 0);
            $wksoawcgagcgoask = self::mqucqomkmisceawy(str_replace(self::AT_SYMBOL, '', $yeacayasgueouoqc));
            if ($wksoawcgagcgoask) {
                $mumucmmgemqwqiia = wp_get_theme();
                $woqmauweeqyeyymc = self::qmkyymgaecsmakqq("{$mumucmmgemqwqiia->get_theme_root()}/{$mumucmmgemqwqiia->get_stylesheet()}");
                if ($woqmauweeqyeyymc) {
                    if ($yeacayasgueouoqc && $yeacayasgueouoqc !== $woqmauweeqyeyymc->aqkmwawoaaigkoyq()) {
                        $ymqmyyeuycgmigyo = ManipulateArray::get(explode('__', $yeacayasgueouoqc), 2, $yeacayasgueouoqc);
                        if (is_string($ymqmyyeuycgmigyo)) {
                            $cqygeiuceemyuywc = ManipulateString::wiecmkiugmyyqiqc($yeacayasgueouoqc, "{$woqmauweeqyeyymc->aqkmwawoaaigkoyq()}/{$wksoawcgagcgoask->gueasuouwqysmomu()}/{$ymqmyyeuycgmigyo}", $wkcwykowmmmwioqs);
                            if ($this->yyyewgugioamwckw()->exists($cqygeiuceemyuywc)) {
                                $wkcwykowmmmwioqs = $cqygeiuceemyuywc;
                            }
                        }
                    }
                }
            }
        }
        return $wkcwykowmmmwioqs;
    }
    public function oeaigciskewsiiec($aiowsaccomcoikus = 'name', $mkucggyaiaukqoce = null, $ywmkwiwkosakssii = [])
    {
        $mkucggyaiaukqoce = ManipulateUser::get($mkucggyaiaukqoce, true);
        if (!$mkucggyaiaukqoce) {
            $mkucggyaiaukqoce = ManipulatePost::mguqscccckuywsya($mkucggyaiaukqoce);
        }
        $icwicymcioeyeyek = null;
        if ($mkucggyaiaukqoce) {
            switch ($aiowsaccomcoikus) {
                case 'url':
                    $icwicymcioeyeyek = DecoratorAuthor::mkaiaewoyaimieqg($mkucggyaiaukqoce);
                    goto ewscugeuicukkycc;
                case 'name':
                    $icwicymcioeyeyek = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, 'display_name');
                    goto ewscugeuicukkycc;
                case 'avatar':
                    $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, 'size', 64);
                    $icwicymcioeyeyek = ManipulateUser::ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo, $ywmkwiwkosakssii, __('User Avatar', PR__THM__PMPR));
                    goto ewscugeuicukkycc;
            }
            kqswcsysqawkcgye:
            ewscugeuicukkycc:
        }
        return $icwicymcioeyeyek;
    }
    
    public function yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc = null, $ccamueccusigaaio = null, $cwwowqyuwccuykom = false)
    {
        $aqykuigiuwmmcieu = null;
        $eyoesceegakeygsi = $this->yyyewgugioamwckw();
        if ($eyoesceegakeygsi->exists($qqscaoyqikuyeoaw)) {
            $aqykuigiuwmmcieu = $qqscaoyqikuyeoaw;
        } else {
            if (!$yeacayasgueouoqc) {
                $yeacayasgueouoqc = $eyoesceegakeygsi->yyewsaiwmyggmumg();
            }
            $yeacayasgueouoqc = str_replace('//', '/', $yeacayasgueouoqc);
            if ($yeacayasgueouoqc) {
                if ($ccamueccusigaaio) {
                    if (is_array($ccamueccusigaaio)) {
                        foreach ($ccamueccusigaaio as $igqsaukqcqscimok) {
                            if ($aqykuigiuwmmcieu = $this->yiyqecawioyosoaw($qqscaoyqikuyeoaw, $yeacayasgueouoqc, $igqsaukqcqscimok, true)) {
                                goto wusciwkkckmqigms;
                            }
                            iiiccouaaqsyikae:
                        }
                        wusciwkkckmqigms:
                    } else {
                        $qqscaoyqikuyeoaw = untrailingslashit($qqscaoyqikuyeoaw) . "/{$ccamueccusigaaio}";
                    }
                }
                $ymqmyyeuycgmigyo = basename($yeacayasgueouoqc);
                if ($ymqmyyeuycgmigyo && !$aqykuigiuwmmcieu) {
                    $ekwsasieesaqcsiw = '.';
                    if (preg_match('/\\.[0-9a-z]+$/i', $qqscaoyqikuyeoaw)) {
                        $ekwsasieesaqcsiw .= 'twig';
                    }
                    $ymqmyyeuycgmigyo = substr($ymqmyyeuycgmigyo, 0, strpos($ymqmyyeuycgmigyo, $ekwsasieesaqcsiw));
                    $aqykuigiuwmmcieu = preg_replace("/({$ymqmyyeuycgmigyo}(?!.*{$ymqmyyeuycgmigyo}))/", $qqscaoyqikuyeoaw, $yeacayasgueouoqc);
                }
            }
            if (!$aqykuigiuwmmcieu || !$eyoesceegakeygsi->exists($aqykuigiuwmmcieu)) {
                if ($qqscaoyqikuyeoaw !== 'index' && !$cwwowqyuwccuykom) {
                    $aqykuigiuwmmcieu = $this->yiyqecawioyosoaw('index', $aqykuigiuwmmcieu);
                } else {
                    $aqykuigiuwmmcieu = null;
                }
            }
            if ($aqykuigiuwmmcieu) {
                $aqykuigiuwmmcieu = $this->sscegwueamckwmcy('theme_template_requirements', $aqykuigiuwmmcieu);
            }
        }
        if ($aqykuigiuwmmcieu) {
            $aqykuigiuwmmcieu = $this->ooqekmgsqomsakio($aqykuigiuwmmcieu);
        }
        return $aqykuigiuwmmcieu;
    }
}
