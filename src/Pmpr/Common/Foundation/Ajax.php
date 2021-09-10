<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\144", "\x74\151\164\x6c\x65", "\x75\162\x6c"];
    const ADMIN_GET_ = "\141\144\155\151\156\137\147\x65\x74\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\x69\x63\x6f\x6e\x73";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\160\x6f\x73\x74\x73";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\x74\x65\162\155\x73";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\x73\x65\x72\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\157\x64\x65\x6c\163";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\x63\157\155\155\x65\156\164\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\141\144\x6d\151\156\137\x61\144\x64\x5f\156\145\x77\x5f\x74\x65\162\x6d";
    const FRONT_GET_NONCE_ACTION = "\x66\x72\157\156\x74\137\147\x65\164\x5f\156\157\156\x63\145";
    const FRONT_ACTIONS = ["\147\x65\164\137\156\157\x6e\x63\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\144\x64\x5f\164\145\x72\155" => self::ADMIN_ADD_NEW_TERM_ACTION, "\147\145\164\x5f\x69\143\157\x6e\x73" => self::ADMIN_GET_ICONS_ACTION, "\147\x65\164\137\160\157\x73\x74\x73" => self::ADMIN_GET_POSTS_ACTION, "\147\x65\164\x5f\x74\145\x72\x6d\x73" => self::ADMIN_GET_TERMS_ACTION, "\147\x65\164\137\x75\x73\x65\162\163" => self::ADMIN_GET_USERS_ACTION, "\x67\x65\164\137\155\157\144\145\x6c\x73" => self::ADMIN_GET_MODELS_ACTION, "\147\x65\164\x5f\x63\157\x6d\155\x65\x6e\164\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x65\x6e\x71\165\x65\x75\x65"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\x6b\147\x67\163\x75\145\171\x75\x79\x71\145\161\x65\165\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\151\x79\163\163\147\x6f\x69\167\147\x77\x79\x67\x65\x61\x63\x67"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\153\167\141\x67\x6b\145\155\x67\x61\x77\x75\157\x61\x63\167\x79"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\x77\x65\145\x73\x63\x77\x77\x67\161\147\151\171\x75\x6d\171\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\x6d\x65\x6d\165\x75\x6b\x77\163\155\x6f\x79\x71\165\x73\x75\x61"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\x75\171\151\167\147\x6d\x65\x71\155\x6f\143\147\x79\161\x67\x6b"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\x77\x61\157\x65\151\x67\x77\x69\x67\x6b\x73\157\x69\153\x67\x75"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\157\163\145\x79\x79\x75\165\171\165\153\143\x77\x69\143\x61\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\x6a\141\x78", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\x61\x6a\141\170", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto ueeuaosuuqakmouy;
        mksywokiwukaeyua:
        quuwumayckugywiy:
        goto qeymeieqwmicycee;
        sciawoykmqyoimsk:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto cukokoemmuwiwqyq;
        qeymeieqwmicycee:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto okocmqiikuykcaqg;
        ascaskisqyaysyoy:
        cksgmgyakmmkomoq:
        goto mksywokiwukaeyua;
        iuwqyoikmeusiweg:
        $sogksuscggsicmac = ["\x69\164\x65\x6d" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\154\x65\143\x74" => $iiueagsqmqqkiiwm];
        goto ascaskisqyaysyoy;
        cukokoemmuwiwqyq:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto akqwyoaqqkwiweke;
        }
        goto eyggicmmeuqywwmm;
        eyggicmmeuqywwmm:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\163\41\x20\123\157\155\x65\x74\x68\x69\156\x67\x20\151\x73\x20\x77\162\x6f\x6e\147\x2e\40\x41\162\145\40\171\x6f\x75\40\150\141\x63\153\151\156\147\77\41\40\x3a\x28", PR__CMN__FOUNDATION), "\x65\162\162\x6f\x72");
        goto uoaccgmmgiwmamsk;
        agguamgmwsacekmq:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\160\x73\x21\x20\123\x6f\155\145\164\x68\x69\x6e\x67\40\x69\163\x20\167\162\x6f\156\147\56\x20\101\x72\145\x20\x79\157\x75\x20\164\x72\x79\x20\x74\157\x20\x61\144\x64\x20\145\170\x69\x73\x74\x20\166\x61\154\165\x65\77\x21", PR__CMN__FOUNDATION), "\145\x72\162\157\162");
        goto qsaucowgmgqqwicy;
        meymkkgksakewqqs:
        akqwyoaqqkwiweke:
        goto kmkuwkyoemikcice;
        siemouciksuawwae:
        if (is_array($sogksuscggsicmac)) {
            goto uayimmyaoyciogiq;
        }
        goto agguamgmwsacekmq;
        kmkuwkyoemikcice:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\160\141\162\x65\156\164" => ManipulateArray::get($icwicymcioeyeyek, "\x70\x61\162\145\156\x74", -1)]);
        goto siemouciksuawwae;
        ouimacsoeokwcuwa:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto qaaqumsmuwkoykam;
        ueeuaosuuqakmouy:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto uckmiiogqewqoqyg;
        uoaccgmmgiwmamsk:
        goto quuwumayckugywiy;
        goto meymkkgksakewqqs;
        kumkykyegsquigkw:
        $occymigcemkqucuw = true;
        goto ouimacsoeokwcuwa;
        rkguoumeeggoqums:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto koaowyckqwoeioea;
        koaowyckqwoeioea:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto sciawoykmqyoimsk;
        uckmiiogqewqoqyg:
        $occymigcemkqucuw = false;
        goto rkguoumeeggoqums;
        iiseqqukqsuysmmc:
        uayimmyaoyciogiq:
        goto kumkykyegsquigkw;
        qsaucowgmgqqwicy:
        goto cksgmgyakmmkomoq;
        goto iiseqqukqsuysmmc;
        qaaqumsmuwkoykam:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto iuwqyoikmeusiweg;
        okocmqiikuykcaqg:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto ewkqkysmqgeugeoy;
        aquuskeeeususkmw:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto iegqiaoekkmuuqgo;
        ewkqkysmqgeugeoy:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\141\155\x65", self::AJAX_NONCE_KEY);
        goto ccwuggocayogugme;
        ccwuggocayogugme:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\x63\x74\151\x6f\156", self::AJAX_NONCE);
        goto uuqcwagaocukcqky;
        uuqcwagaocukcqky:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto aquuskeeeususkmw;
        iegqiaoekkmuuqgo:
    }
    public function kwagkemgawuoacwy()
    {
        goto cwckmmsiouyaucea;
        gkggmkmswikmmmki:
        ckkkkwqaqcyuqweo:
        goto yucyeouoieoqgqos;
        qwqsokugksycwkom:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto amuiigmiqoueiisi;
        kmcccsgokysskgqg:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto qiuyeygsgwskkwoy;
            cykamcqoaeemeeak:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto oswskykoomgqysqo;
            ickmakmomaakmmmc:
            cwoescoukwcqeqey:
            goto immuwwqcgeeikcoc;
            qiuyeygsgwskkwoy:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto wqomsowsgcumucgm;
            oswskykoomgqysqo:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto goqeumecwiwykkog;
            goqeumecwiwykkog:
            qgskwweecckaecsy:
            goto ickmakmomaakmmmc;
            wqomsowsgcumucgm:
            if (!$eqgoocgaqwqcimie) {
                goto qgskwweecckaecsy;
            }
            goto cykamcqoaeemeeak;
            immuwwqcgeeikcoc:
        }
        goto qomigguamoeqekky;
        yksoqouokyaskqki:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto umwasmakyyqqigyq;
        miuswwgqmgicyuaq:
        goto iumwoegoeuimmqqc;
        goto eqgeksiquqymuaca;
        amuiigmiqoueiisi:
        $wmgwaquemmoicmas = [];
        goto ayskeggsaioeeogy;
        wggiaskwosqecsuy:
        ksiaqmsuomessmmm:
        goto gakcwmyakwyigswc;
        gsgsosqeoemwguea:
        $sogksuscggsicmac = [];
        goto mgqogcswmqgcgmac;
        cyckueeyskywyumk:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto myeksmogkuwykamg;
        }
        goto ggqscaceqcsgksaq;
        mgqogcswmqgcgmac:
        if ($aokagokqyuysuksm) {
            goto kgakoeoomqmiuyou;
        }
        goto meicoiioyccqusio;
        ggqscaceqcsgksaq:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto yksoqouokyaskqki;
        iiyiequuscsgsqiq:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\57\x5c\142{$qwcmueausqgiwigy}\x5c\x62\57\151", $gygawogosumsgmme);
        });
        goto kooeoiymgykqaycs;
        kyuseiceyycyoqiy:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto kmcccsgokysskgqg;
        caykmykgamymycgk:
        iumwoegoeuimmqqc:
        goto keqaggeoasegyigg;
        eqgeksiquqymuaca:
        kgakoeoomqmiuyou:
        goto cyckueeyskywyumk;
        qomigguamoeqekky:
        mcoyueciqyqiigcc:
        goto gkggmkmswikmmmki;
        meicoiioyccqusio:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto iiyiequuscsgsqiq;
        keqaggeoasegyigg:
        if (!$ykiyyumywksqcisg) {
            goto ckkkkwqaqcyuqweo;
        }
        goto kyuseiceyycyoqiy;
        yucyeouoieoqgqos:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto saiwskyicecogocg;
        gakcwmyakwyigswc:
        $ykiyyumywksqcisg = [];
        goto gsgsosqeoemwguea;
        ayskeggsaioeeogy:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto aioymewmgwwgqiwu;
            mymoaysqioskuqqw:
            yiiiyygiowkogagq:
            goto tmoywiwaesgeqkau;
            aioymewmgwwgqiwu:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto uyeukoyamsaakqik;
            uyeukoyamsaakqik:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto mymoaysqioskuqqw;
            tmoywiwaesgeqkau:
        }
        goto wggiaskwosqecsuy;
        cwckmmsiouyaucea:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto qwqsokugksycwkom;
        kooeoiymgykqaycs:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto miuswwgqmgicyuaq;
        umwasmakyyqqigyq:
        myeksmogkuwykamg:
        goto caykmykgamymycgk;
        saiwskyicecogocg:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto eyymwewkeseeaggc;
        asgouseqowywicmy:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto kqgsykaimimimyae;
        wsqoesokcweweiga:
        ysemiouayuuqimyg:
        goto akysqyaywkiwwoog;
        wuucaoemqqoomiey:
        if ($aokagokqyuysuksm) {
            goto emgwikaikyywkmwm;
        }
        goto gwyuiugysgmueoik;
        ggskywuesswiqwqw:
        gyiiogoieoicewae:
        goto mimueoiwogkckmei;
        iiomwaiuuemuygkq:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\x5f\x70\x6f\163\x74\163\137\x61\x72\x67\x73"), $ywmkwiwkosakssii);
        goto mgukweouugammoui;
        aaiwsiciesymiaok:
        $qeiakyocuggicwsy = [];
        goto sskkqugewogogagg;
        mimueoiwogkckmei:
        if (!($oammesyieqmwuwyi == "\141\x74\164\141\x63\x68\155\x65\156\164" || is_array($oammesyieqmwuwyi) && in_array("\x61\164\164\141\x63\150\x6d\x65\156\164", $oammesyieqmwuwyi))) {
            goto uauggckimussuumk;
        }
        goto wyyqkqigmomsqsmi;
        mgukweouugammoui:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto wakyowemmceeeqiy;
        wakyowemmceeeqiy:
        uowyqyiqscmccsei:
        goto qscwycyimmeagyim;
        cmaoqqqqaqwqsaii:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\163\164\137\163\x74\141\x74\165\163" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto iiomwaiuuemuygkq;
        qscwycyimmeagyim:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto dgawqiokqseygyqe;
            immogeiuaiqwkcgy:
            mmmyemwwkkmsomoq:
            goto kegoyegkioysaaai;
            kgeyoegiqceocosu:
            yqssyeyuimcmauao:
            goto ykseokcqemaqqyae;
            cukuyoqwmyggamgu:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\160\x6f\x73\164\x2f{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\144\141\164\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\x69\x74\x6c\145" => ManipulatePost::qcgakseyaikigqco($post), "\141\165\x74\x68\157\x72" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\x68\141\163\137\151\x6d\141\147\145" => ManipulateArray::get($ywmkwiwkosakssii, "\150\x61\163\137\x69\155\141\147\x65", false), "\160\157\163\164\137\x74\171\x70\x65" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto immogeiuaiqwkcgy;
            kksgsgiywgosikqa:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto acqkeymqakmcumko;
            kegoyegkioysaaai:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto yowqeciqwemaysog;
            dgawqiokqseygyqe:
            if (!$post instanceof WP_Post) {
                goto akakuqyqwwuquiia;
            }
            goto kksgsgiywgosikqa;
            yowqeciqwemaysog:
            akakuqyqwwuquiia:
            goto kgeyoegiqceocosu;
            cysugoacwakoqwiu:
            if (!$qmwikaeuqeyuaoiy) {
                goto mmmyemwwkkmsomoq;
            }
            goto cukuyoqwmyggamgu;
            acqkeymqakmcumko:
            $gskuwmeemyeuwogc = '';
            goto cysugoacwakoqwiu;
            ykseokcqemaqqyae:
        }
        goto wsqoesokcweweiga;
        gwyuiugysgmueoik:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\x73\x74\137\x73\164\x61\x74\x75\x73" => $qisccquumwewokoy]);
        goto cakayowsqeqayweo;
        eyymwewkeseeaggc:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ikiqwekimqmyuuis;
        cakayowsqeqayweo:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x70\x6f\163\164\x73\137\141\162\147\x73"), $ywmkwiwkosakssii);
        goto asgouseqowywicmy;
        ikiqwekimqmyuuis:
        $qisccquumwewokoy = ["\160\x75\142\x6c\151\163\150"];
        goto aaiwsiciesymiaok;
        yuwoskumkgymgauq:
        uauggckimussuumk:
        goto wuucaoemqqoomiey;
        sskkqugewogogagg:
        if ($oammesyieqmwuwyi) {
            goto gyiiogoieoicewae;
        }
        goto oekqegamyyuuqcoy;
        wyyqkqigmomsqsmi:
        $qisccquumwewokoy[] = "\x69\x6e\150\x65\162\x69\164";
        goto yuwoskumkgymgauq;
        cuyskuymgaukqaey:
        emgwikaikyywkmwm:
        goto cmaoqqqqaqwqsaii;
        akysqyaywkiwwoog:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto moykkkgogaygokus;
        kqgsykaimimimyae:
        goto uowyqyiqscmccsei;
        goto cuyskuymgaukqaey;
        oekqegamyyuuqcoy:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto ggskywuesswiqwqw;
        moykkkgogaygokus:
    }
    public function weescwwgqgiyumyw()
    {
        goto sqsggomiyygwoumi;
        yckuogqwcayqumoq:
        $qeiakyocuggicwsy = [];
        goto uaqsosmwikwoqioa;
        sqsggomiyygwoumi:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto yckuogqwcayqumoq;
        iissqgqwyqmmqugg:
        $ggauoeuaesiymgee = ["\x69\x6e\x63\154\165\144\x65" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\x68\151\x64\x65\137\x65\155\x70\x74\x79" => 0];
        goto woemukewigiwuyis;
        uswycqewimcuqmua:
        goto kamgygkuikoaigyw;
        goto uosiwiemuswkisyq;
        ooggyokmmcmwygwk:
        $ggauoeuaesiymgee = ["\x6e\141\x6d\x65\x5f\x5f\x6c\x69\153\x65" => $qwcmueausqgiwigy, "\x68\151\144\x65\x5f\145\155\x70\x74\171" => 0, "\x6e\165\155\x62\145\162" => ''];
        goto uswycqewimcuqmua;
        iaouysocayacmusu:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto yuauuacmomcmgggi;
            akcygikyemoocswm:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto segwckgisqwkowcc;
            osyceoeiwaucwgci:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto sumqgcmuacwikauo;
            segwckgisqwkowcc:
            giiymwkcouoegqgo:
            goto uiskasyyiewuwmmk;
            sigsaocukiawcgqe:
            if (!$qmwikaeuqeyuaoiy) {
                goto iswssqmsymsiqygm;
            }
            goto owswawakaekmsckk;
            uiskasyyiewuwmmk:
            igumwqkcasocmuui:
            goto mkaiiiimcywymqgk;
            sumqgcmuacwikauo:
            $gskuwmeemyeuwogc = '';
            goto sigsaocukiawcgqe;
            yuauuacmomcmgggi:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto giiymwkcouoegqgo;
            }
            goto keaoumygogemaeek;
            keaoumygogemaeek:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto osyceoeiwaucwgci;
            owswawakaekmsckk:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x74\145\162\155\x2f{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\164\151\164\x6c\x65" => $ymqmyyeuycgmigyo, "\x74\141\x78\157\x6e\157\x6d\171" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto sigumeougskmckcy;
            sigumeougskmckcy:
            iswssqmsymsiqygm:
            goto akcygikyemoocswm;
            mkaiiiimcywymqgk:
        }
        goto ogoaaswoyusgsycg;
        uaqsosmwikwoqioa:
        if (!$kesssewsiegssiya) {
            goto qqoyaewmawgkcmqo;
        }
        goto wsogoeqsmeucowak;
        uosiwiemuswkisyq:
        wuiciowuskgmysck:
        goto iissqgqwyqmmqugg;
        qqewqsyyogoieaqc:
        qqoyaewmawgkcmqo:
        goto keygmsycouauqmqc;
        woemukewigiwuyis:
        kamgygkuikoaigyw:
        goto ymkmgwqugkeoeyas;
        ogoaaswoyusgsycg:
        goaqoeqygekuaywo:
        goto qqewqsyyogoieaqc;
        wsogoeqsmeucowak:
        if ($aokagokqyuysuksm) {
            goto wuiciowuskgmysck;
        }
        goto ooggyokmmcmwygwk;
        ymkmgwqugkeoeyas:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto iaouysocayacmusu;
        keygmsycouauqmqc:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto mygwgowqguameswo;
        mygwgowqguameswo:
    }
    public function memuukwsmoyqusua()
    {
        goto yqucaaqoyswiskeg;
        aossaeoauaeuoywc:
        $qeiakyocuggicwsy = [];
        goto ieggkeomcusisuoo;
        ieggkeomcusisuoo:
        if ($aokagokqyuysuksm) {
            goto cciyuigcccggekmc;
        }
        goto weqkywkusswmawim;
        weqkywkusswmawim:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto icccqacuqseakkew;
        gmyoyegggggmymes:
        cciyuigcccggekmc:
        goto ooqymioycsgcoqiy;
        uemuasgumguyeaye:
        kgyiqgaemwaqwome:
        goto mscqweuqwsqywggy;
        yqucaaqoyswiskeg:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto aossaeoauaeuoywc;
        ooqymioycsgcoqiy:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\151\156\143\154\165\x64\x65" => $aokagokqyuysuksm]);
        goto uemuasgumguyeaye;
        mscqweuqwsqywggy:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto myouqgwqoegsyseg;
            smekigasqcyykywe:
            akwkqauksyquwkqc:
            goto ckuegykmyekmewco;
            uwkaosmauksiukco:
            $gskuwmeemyeuwogc = '';
            goto qgkuoayqesmgmcmq;
            iggkoiikmckimmmw:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\165\163\x65\162\57{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\156\141\x6d\145" => sprintf(__("\x4e\x61\x6d\145\72\x20\45\163", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\155\x61\x69\154" => sprintf(__("\105\x6d\x61\151\154\72\x20\x25\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\x72\157\154\145\163" => sprintf(__("\122\157\154\x65\x73\x3a\x20\x25\x73", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\165\163\145\x72\x6e\x61\x6d\145" => sprintf(__("\x55\x73\x65\x72\156\x61\155\145\x3a\40\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto ueoywqkaiwqoeakw;
            myouqgwqoegsyseg:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto omoomgsaackaseqm;
            }
            goto ygkwwkuaqoemuaqq;
            qgkuoayqesmgmcmq:
            if (!$qmwikaeuqeyuaoiy) {
                goto wqyiquqemcueoogs;
            }
            goto iggkoiikmckimmmw;
            yoqkmcigwewgykya:
            omoomgsaackaseqm:
            goto smekigasqcyykywe;
            ueoywqkaiwqoeakw:
            wqyiquqemcueoogs:
            goto yaaggqiuogwiyeia;
            uqyqsmgeeiyiaqck:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto uwkaosmauksiukco;
            yaaggqiuogwiyeia:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto yoqkmcigwewgykya;
            ygkwwkuaqoemuaqq:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto uqyqsmgeeiyiaqck;
            ckuegykmyekmewco:
        }
        goto umasciaeyewkkuuw;
        wyisakyowacouyqk:
        goto kgyiqgaemwaqwome;
        goto gmyoyegggggmymes;
        icccqacuqseakkew:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\x6c\145" => $uagwmwoawiwkycao, "\163\x65\141\x72\143\150" => "\x2a{$qwcmueausqgiwigy}\x2a", "\x73\145\x61\162\143\x68\137\143\157\x6c\x75\x6d\156\163" => ["\165\x73\145\x72\137\165\162\154", "\x75\x73\145\x72\137\x6c\x6f\x67\151\156", "\x75\163\x65\x72\x5f\145\155\141\151\x6c", "\144\151\163\160\154\141\x79\x5f\156\x61\x6d\x65", "\165\163\145\162\137\156\151\143\x65\156\141\x6d\145"], "\155\145\164\x61\x5f\161\x75\x65\x72\x79" => ["\162\x65\154\x61\x74\x69\x6f\x6e" => "\117\122", ["\153\x65\x79" => "\146\151\162\163\164\137\x6e\x61\155\x65", "\x76\x61\154\165\x65" => $qwcmueausqgiwigy, "\x63\157\x6d\x70\141\162\x65" => "\114\x49\x4b\105"], ["\x6b\145\171" => "\x6c\141\163\164\x5f\156\x61\155\x65", "\x76\x61\x6c\x75\145" => $qwcmueausqgiwigy, "\x63\157\155\160\141\162\145" => "\114\111\113\x45"]]]));
        goto wyisakyowacouyqk;
        seemkiyosiscigms:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto oqikoeeugogqkaim;
        umasciaeyewkkuuw:
        kuuickoqgquuqwci:
        goto seemkiyosiscigms;
        oqikoeeugogqkaim:
    }
    public function waoeigwigksoikgu()
    {
        goto cqgwyoacewoaecik;
        guqgkmaoggceoumc:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto mkeogqemimomcgsm;
        sesyqeyukqeuwckk:
        okaacoqueimcowme:
        goto cyyaquqmmceukggi;
        usimgkkmqgmqiqug:
        goto saigyoyoqauaqsuu;
        goto sesyqeyukqeuwckk;
        giqwqyiaiemgguye:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\157\x6d\x6d\x65\156\x74\x5f\137\151\x6e" => $aokagokqyuysuksm]));
        goto saikcqqkyoeikuyo;
        ycisoqiyiiyqqwwm:
        if ($post) {
            goto okaacoqueimcowme;
        }
        goto uyowaccwwyusqkuc;
        uyowaccwwyusqkuc:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x65\141\162\143\x68" => $qwcmueausqgiwigy]));
        goto usimgkkmqgmqiqug;
        cyyaquqmmceukggi:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto ogyiiuogeeaywkic;
        ackamyewsisqcmia:
        ymoaemsamquwomcs:
        goto guqgkmaoggceoumc;
        gkcakkuoeioaieee:
        $qeiakyocuggicwsy = [];
        goto cwcwemecykowqwui;
        acgausemsusqaeas:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto qswoscmyiawaeaek;
            yciwiygwyqaeoqwo:
            akcksasayaumouky:
            goto kmokokcqewwcwyws;
            qswoscmyiawaeaek:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto akcksasayaumouky;
            }
            goto uackuyqecwisyieg;
            uackuyqecwisyieg:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto uwkammcmgokwweew;
            qmgcgicaaqquoicw:
            $gskuwmeemyeuwogc = '';
            goto yaiiekwggusgygac;
            kmokokcqewwcwyws:
            yiemweuwugqwcooa:
            goto mwqsmcweqikkcksk;
            wsymmqucieigkeac:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto yciwiygwyqaeoqwo;
            uwkammcmgokwweew:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto qmgcgicaaqquoicw;
            eiumaaaqmcqiuqgs:
            asmiwssgmoaaoswm:
            goto wsymmqucieigkeac;
            yaiiekwggusgygac:
            if (!$qmwikaeuqeyuaoiy) {
                goto asmiwssgmoaaoswm;
            }
            goto gmmeasywcygwkugq;
            gmmeasywcygwkugq:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x63\x6f\155\155\145\x6e\x74\57{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\164\x69\164\x6c\x65" => $pkyyagewkiyckmwy, "\164\141\x78\x6f\156\x6f\x6d\x79" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto eiumaaaqmcqiuqgs;
            mwqsmcweqikkcksk:
        }
        goto ackamyewsisqcmia;
        ogyiiuogeeaywkic:
        saigyoyoqauaqsuu:
        goto scmoqmqikogqcuew;
        cwcwemecykowqwui:
        $ywmkwiwkosakssii["\163\164\141\x74\x75\163"] = "\141\x70\160\x72\x6f\166\x65";
        goto sacesysuwmcykeuo;
        cqgwyoacewoaecik:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto gkcakkuoeioaieee;
        scmoqmqikogqcuew:
        goto sycmikycociqswka;
        goto iuiuisqqeosykycg;
        saikcqqkyoeikuyo:
        sycmikycociqswka:
        goto acgausemsusqaeas;
        iuiuisqqeosykycg:
        wywcgacaomkaesmw:
        goto giqwqyiaiemgguye;
        sacesysuwmcykeuo:
        if ($aokagokqyuysuksm) {
            goto wywcgacaomkaesmw;
        }
        goto ycisoqiyiiyqqwwm;
        mkeogqemimomcgsm:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto oieimyigeaywmmco;
        ismooqwiqgmegcue:
        cumykwakewgamugu:
        goto akqwmskmmcamuwkm;
        sewcwygikycqyqmu:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto qakaoeiwgeuckeka;
        cqsiewasswyayuyk:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto ecsskqmyqyuamyym;
        }
        goto gyayocggoaickkqq;
        syekaumywgekyoca:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\145\x61\162\143\150", false);
        goto wimcauwoukmwgcwc;
        akqwmskmmcamuwkm:
        if (!$kmiooagcykmqaiac) {
            goto giyaooswwsuyuema;
        }
        goto cqsiewasswyayuyk;
        wwwcacoscyqesksm:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto cmqkuqqmciawcqaq;
        oieimyigeaywmmco:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto wwwcacoscyqesksm;
        iuwaekscacmamkeu:
        giyaooswwsuyuema:
        goto sewcwygikycqyqmu;
        wwkekusquqscgmsm:
        if (!is_string($ywmkwiwkosakssii)) {
            goto cumykwakewgamugu;
        }
        goto ooiysqkgmiqmkgeq;
        cmqkuqqmciawcqaq:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\141\x72\x67\163", "\x7b\175");
        goto sgcuekgueuimciki;
        ooiysqkgmiqmkgeq:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto ismooqwiqgmegcue;
        wimcauwoukmwgcwc:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\141\x72\153\x75\160", false);
        goto qwaqsogsaaegoiko;
        ucoeooiewkkwwyuy:
        ecsskqmyqyuamyym:
        goto iuwaekscacmamkeu;
        sgcuekgueuimciki:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\151\164\x65\155\x73", null);
        goto syekaumywgekyoca;
        qwaqsogsaaegoiko:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\164\x65\x6d\x70\x6c\x61\x74\x65\x5f\x74\x79\x70\x65", "\x69\156\x64\x65\170");
        goto wwkekusquqscgmsm;
        gyayocggoaickkqq:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto ucoeooiewkkwwyuy;
        qakaoeiwgeuckeka:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\x64\141\x74\x61" => ["\x63\157\x6e\164\x65\156\x74" => $ewgwqamkygiqaawc], "\164\145\x78\164" => $cmwygeyygwqaemaq, "\x76\x61\x6c\165\x65" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto qyowkusecoyawauc;
        gocmieowkqeqwcks:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto ucaocaceeuqiggso;
        gwqyuyucgguaisyg:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto simsoqkqsiqmwsaa;
        gacweccyqemocmky:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto gwqyuyucgguaisyg;
        qyowkusecoyawauc:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\141\x67\x65", 1));
        goto gacweccyqemocmky;
        saekawmmwcmsyyaq:
        $keccaugmemegoimu = ["\162\145\163\x75\x6c\164\x73" => $qeiakyocuggicwsy, "\155\x6f\x72\145\137\162\145\x73\165\154\164\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto gocmieowkqeqwcks;
        simsoqkqsiqmwsaa:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto saekawmmwcmsyyaq;
        ucaocaceeuqiggso:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto eqakckaqmkweciao;
        wymmeymakykomoeg:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\x75\162\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto qqaecgmomioggcyu;
            case "\164\151\164\154\145":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto qqaecgmomioggcyu;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto qqaecgmomioggcyu;
        }
        goto ksqaeuyiiiuuouoi;
        oekessmycksmemam:
        return $eqgoocgaqwqcimie;
        goto gwaiikaaqgaoigay;
        oagkkuowwccmeaoc:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\111\104";
        goto wymmeymakykomoeg;
        oqsykugcsggakmoy:
        qqaecgmomioggcyu:
        goto oekessmycksmemam;
        ksqaeuyiiiuuouoi:
        iwaausiukycagkau:
        goto oqsykugcsggakmoy;
        eqakckaqmkweciao:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\x70\162\145\x66\145\x72", "\x49\x44");
        goto oagkkuowwccmeaoc;
        gwaiikaaqgaoigay:
    }
}
