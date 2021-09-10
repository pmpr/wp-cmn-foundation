<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Convert\Type\ConvertArray;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBankInterface;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use ReflectionClass;
use WP_Comment;
use WP_Post;
use WP_Term;
use WP_User;

class Ajax extends Container
{
    const VALID_REQUESTED_VALE_FOR_POST = ['id', 'title', 'url'];
    const ADMIN_GET_ = 'admin_get_';
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . 'icons';
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . 'posts';
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . 'terms';
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . 'users';
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . 'models';
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . 'comments';
    const ADMIN_ADD_NEW_TERM_ACTION = 'admin_add_new_term';
    const FRONT_GET_NONCE_ACTION = 'front_get_nonce';
    const FRONT_ACTIONS = ['get_nonce' => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ['add_term' => self::ADMIN_ADD_NEW_TERM_ACTION, 'get_icons' => self::ADMIN_GET_ICONS_ACTION, 'get_posts' => self::ADMIN_GET_POSTS_ACTION, 'get_terms' => self::ADMIN_GET_TERMS_ACTION, 'get_users' => self::ADMIN_GET_USERS_ACTION, 'get_models' => self::ADMIN_GET_MODELS_ACTION, 'get_comments' => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu('init', [$this, 'enqueue'])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, 'kggsueyuyqeqeusc'])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, 'iyssgoiwgwygeacg'])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, 'kwagkemgawuoacwy'])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, 'weescwwgqgiyumyw'])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, 'memuukwsmoyqusua'])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, 'uyiwgmeqmocgyqgk'])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, 'waoeigwigksoikgu'])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, 'oseyyuuyukcwicaq']);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq('ajax', Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw('ajax', Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        $occymigcemkqucuw = false;
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ['parent' => ManipulateArray::get($icwicymcioeyeyek, 'parent', -1)]);
            if (is_array($sogksuscggsicmac)) {
                $occymigcemkqucuw = true;
                $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
                $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
                $sogksuscggsicmac = ['item' => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), 'select' => $iiueagsqmqqkiiwm];
            } else {
                $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__('Ops! Something is wrong. Are you try to add exist value?!', PR__CMN__FOUNDATION), 'error');
            }
        } else {
            $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__('Ops! Something is wrong. Are you hacking?! :(', PR__CMN__FOUNDATION), 'error');
        }
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, 'name', self::AJAX_NONCE_KEY);
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, 'action', self::AJAX_NONCE);
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
    }
    public function kwagkemgawuoacwy()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        $wmgwaquemmoicmas = [];
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goswwiomuackymqi:
        }
        agemeseegiuuowgo:
        $ykiyyumywksqcisg = [];
        $sogksuscggsicmac = [];
        if ($aokagokqyuysuksm) {
            if (in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
                $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
                $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
            }
        } else {
            $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
            $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
                return preg_match("/\\b{$qwcmueausqgiwigy}\\b/i", $gygawogosumsgmme);
            });
            $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        }
        if ($ykiyyumywksqcisg) {
            $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
            foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
                $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
                if ($eqgoocgaqwqcimie) {
                    $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
                    $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
                }
                camawumockccayaq:
            }
            gykuaukukosiocoy:
        }
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        $qisccquumwewokoy = ['publish'];
        $qeiakyocuggicwsy = [];
        if (!$oammesyieqmwuwyi) {
            $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        }
        if ($oammesyieqmwuwyi == 'attachment' || is_array($oammesyieqmwuwyi) && in_array('attachment', $oammesyieqmwuwyi)) {
            $qisccquumwewokoy[] = 'inherit';
        }
        if ($aokagokqyuysuksm) {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['post_status' => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
            $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('get_posts_args'), $ywmkwiwkosakssii);
            $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        } else {
            $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['post_status' => $qisccquumwewokoy]);
            $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('get_posts_args'), $ywmkwiwkosakssii);
            $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        }
        foreach ($wyoiwuqokyeeuguk as $post) {
            if ($post instanceof WP_Post) {
                $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
                $gskuwmeemyeuwogc = '';
                if ($qmwikaeuqeyuaoiy) {
                    $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("post/{$qqscaoyqikuyeoaw}", ['ID' => $aokagokqyuysuksm, 'date' => ManipulatePost::squyiyimquqicqke(null, $post), 'title' => ManipulatePost::qcgakseyaikigqco($post), 'author' => ManipulatePost::ygwimyogyaqgumam($post->post_author), 'has_image' => ManipulateArray::get($ywmkwiwkosakssii, 'has_image', false), 'post_type' => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
                }
                $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            }
            ggqeakyaggiuegek:
        }
        uuisaeysawuagysg:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
    }
    public function weescwwgqgiyumyw()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        $qeiakyocuggicwsy = [];
        if ($kesssewsiegssiya) {
            if ($aokagokqyuysuksm) {
                $ggauoeuaesiymgee = ['include' => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), 'hide_empty' => 0];
            } else {
                $ggauoeuaesiymgee = ['name__like' => $qwcmueausqgiwigy, 'hide_empty' => 0, 'number' => ''];
            }
            $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
            foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
                if ($iwewcwusemqaiggk instanceof WP_Term) {
                    $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
                    $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
                    $gskuwmeemyeuwogc = '';
                    if ($qmwikaeuqeyuaoiy) {
                        $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("term/{$qqscaoyqikuyeoaw}", ['ID' => $aokagokqyuysuksm, 'title' => $ymqmyyeuycgmigyo, 'taxonomy' => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
                    }
                    $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
                }
                qowcwmsiyscackaa:
            }
            usgcoawgqswoeiec:
        }
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
    }
    public function memuukwsmoyqusua()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        $qeiakyocuggicwsy = [];
        if ($aokagokqyuysuksm) {
            $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(['include' => $aokagokqyuysuksm]);
        } else {
            $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
            $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['role' => $uagwmwoawiwkycao, 'search' => "*{$qwcmueausqgiwigy}*", 'search_columns' => ['user_url', 'user_login', 'user_email', 'display_name', 'user_nicename'], 'meta_query' => ['relation' => 'OR', ['key' => 'first_name', 'value' => $qwcmueausqgiwigy, 'compare' => 'LIKE'], ['key' => 'last_name', 'value' => $qwcmueausqgiwigy, 'compare' => 'LIKE']]]));
        }
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            if ($mkucggyaiaukqoce instanceof WP_User) {
                $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
                $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
                $gskuwmeemyeuwogc = '';
                if ($qmwikaeuqeyuaoiy) {
                    $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("user/{$qqscaoyqikuyeoaw}", ['ID' => $aokagokqyuysuksm, 'name' => sprintf(__('Name: %s', PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), 'email' => sprintf(__('Email: %s', PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), 'roles' => sprintf(__('Roles: %s', PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), 'username' => sprintf(__('Username: %s', PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
                }
                $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            }
            qesqgumuouyymcwa:
        }
        aqigiwmamkowomiw:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
    }
    public function waoeigwigksoikgu()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        $qeiakyocuggicwsy = [];
        $ywmkwiwkosakssii['status'] = 'approve';
        if ($aokagokqyuysuksm) {
            $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['comment__in' => $aokagokqyuysuksm]));
        } else {
            if ($post) {
                $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
            } else {
                $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['search' => $qwcmueausqgiwigy]));
            }
        }
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            if ($aqqmosqmsuueyaes instanceof WP_Comment) {
                $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
                $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
                $gskuwmeemyeuwogc = '';
                if ($qmwikaeuqeyuaoiy) {
                    $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("comment/{$qqscaoyqikuyeoaw}", ['ID' => $aokagokqyuysuksm, 'title' => $pkyyagewkiyckmwy, 'taxonomy' => ManipulateComment::get($aqqmosqmsuueyaes)]);
                }
                $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            }
            ggqwcqssoauckuic:
        }
        csyoimsqgwcmiwki:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, 'args', '{}');
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, 'items', null);
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, 'search', false);
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, 'markup', false);
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, 'template_type', 'index');
        if (is_string($ywmkwiwkosakssii)) {
            $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        }
        if ($kmiooagcykmqaiac) {
            if (!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm) {
                $aokagokqyuysuksm = [$aokagokqyuysuksm];
            }
        }
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ['data' => ['content' => $ewgwqamkygiqaawc], 'text' => $cmwygeyygwqaemaq, 'value' => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq('page', 1));
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        $keccaugmemegoimu = ['qeiakyocuggicwsy' => $qeiakyocuggicwsy, 'more_results' => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
    }
    
    public function cwqsecwssgggwiag($post)
    {
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq('prefer', 'ID');
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : 'ID';
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case 'url':
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto ggwcauaeuagekeyo;
            case 'title':
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto ggwcauaeuagekeyo;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto ggwcauaeuagekeyo;
        }
        mmkoqmccusoeaoyi:
        ggwcauaeuagekeyo:
        return $eqgoocgaqwqcimie;
    }
}
