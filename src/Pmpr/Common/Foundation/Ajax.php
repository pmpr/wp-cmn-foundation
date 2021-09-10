<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\x64", "\164\x69\x74\154\145", "\165\x72\x6c"];
    const ADMIN_GET_ = "\x61\x64\x6d\x69\x6e\137\x67\145\164\x5f";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\x63\157\x6e\163";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\x70\157\x73\x74\163";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\x74\145\x72\x6d\163";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\163\x65\x72\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\x6f\x64\145\154\163";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\143\x6f\155\155\145\156\164\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\x61\x64\155\x69\156\x5f\x61\144\x64\137\x6e\x65\167\137\x74\145\162\x6d";
    const FRONT_GET_NONCE_ACTION = "\146\x72\x6f\156\x74\x5f\147\x65\x74\137\156\157\x6e\143\145";
    const FRONT_ACTIONS = ["\147\x65\164\x5f\156\x6f\x6e\x63\x65" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\x64\x64\x5f\x74\x65\162\155" => self::ADMIN_ADD_NEW_TERM_ACTION, "\x67\x65\x74\137\x69\143\x6f\x6e\x73" => self::ADMIN_GET_ICONS_ACTION, "\147\x65\164\x5f\160\157\163\164\163" => self::ADMIN_GET_POSTS_ACTION, "\x67\145\x74\x5f\x74\x65\162\155\x73" => self::ADMIN_GET_TERMS_ACTION, "\147\x65\164\x5f\x75\163\x65\162\x73" => self::ADMIN_GET_USERS_ACTION, "\x67\x65\x74\x5f\x6d\x6f\144\145\154\x73" => self::ADMIN_GET_MODELS_ACTION, "\147\x65\164\x5f\143\157\155\155\x65\x6e\x74\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\145\x6e\x71\165\x65\165\x65"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\147\147\x73\165\x65\x79\165\171\161\145\161\x65\165\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\151\x79\163\x73\147\157\x69\167\147\167\171\x67\145\x61\x63\x67"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\x6b\167\141\x67\x6b\145\x6d\x67\x61\167\x75\157\141\x63\x77\171"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\x77\145\x65\x73\143\167\x77\x67\x71\147\x69\171\x75\155\171\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\155\x65\x6d\165\165\x6b\167\x73\x6d\x6f\171\x71\165\x73\165\141"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\165\x79\151\x77\x67\x6d\145\x71\155\157\x63\x67\x79\x71\147\153"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\x77\141\x6f\x65\x69\x67\x77\151\147\x6b\x73\x6f\151\x6b\x67\x75"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\x6f\x73\x65\x79\171\165\x75\171\165\153\x63\x77\x69\143\141\x71"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\x6a\141\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\x6a\141\170", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto koaowyckqwoeioea;
        ascaskisqyaysyoy:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto mksywokiwukaeyua;
        iuwqyoikmeusiweg:
        $occymigcemkqucuw = true;
        goto ascaskisqyaysyoy;
        qsaucowgmgqqwicy:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\x70\x61\x72\145\156\164" => ManipulateArray::get($icwicymcioeyeyek, "\160\141\162\x65\x6e\x74", -1)]);
        goto iiseqqukqsuysmmc;
        qaaqumsmuwkoykam:
        quuwumayckugywiy:
        goto iuwqyoikmeusiweg;
        ewkqkysmqgeugeoy:
        rkguoumeeggoqums:
        goto ccwuggocayogugme;
        uoaccgmmgiwmamsk:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto meymkkgksakewqqs;
        ccwuggocayogugme:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto uuqcwagaocukcqky;
        mksywokiwukaeyua:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto qeymeieqwmicycee;
        kmkuwkyoemikcice:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\x21\40\x53\157\155\x65\x74\x68\151\156\x67\40\151\x73\x20\167\162\157\156\x67\x2e\x20\x41\162\x65\40\x79\157\x75\40\x68\141\143\153\x69\156\x67\77\x21\x20\72\50", PR__CMN__FOUNDATION), "\145\x72\x72\x6f\x72");
        goto siemouciksuawwae;
        eyggicmmeuqywwmm:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto uoaccgmmgiwmamsk;
        iiseqqukqsuysmmc:
        if (is_array($sogksuscggsicmac)) {
            goto quuwumayckugywiy;
        }
        goto kumkykyegsquigkw;
        qeymeieqwmicycee:
        $sogksuscggsicmac = ["\151\164\145\x6d" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\x6c\x65\x63\164" => $iiueagsqmqqkiiwm];
        goto okocmqiikuykcaqg;
        siemouciksuawwae:
        goto rkguoumeeggoqums;
        goto agguamgmwsacekmq;
        sciawoykmqyoimsk:
        $occymigcemkqucuw = false;
        goto cukokoemmuwiwqyq;
        agguamgmwsacekmq:
        uckmiiogqewqoqyg:
        goto qsaucowgmgqqwicy;
        koaowyckqwoeioea:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto sciawoykmqyoimsk;
        ouimacsoeokwcuwa:
        goto ueeuaosuuqakmouy;
        goto qaaqumsmuwkoykam;
        meymkkgksakewqqs:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto uckmiiogqewqoqyg;
        }
        goto kmkuwkyoemikcice;
        cukokoemmuwiwqyq:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto eyggicmmeuqywwmm;
        okocmqiikuykcaqg:
        ueeuaosuuqakmouy:
        goto ewkqkysmqgeugeoy;
        kumkykyegsquigkw:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\160\163\41\x20\x53\x6f\x6d\145\164\x68\x69\x6e\x67\40\x69\x73\40\167\162\x6f\156\x67\x2e\40\x41\x72\145\x20\171\x6f\x75\x20\x74\x72\x79\x20\x74\x6f\40\x61\x64\x64\x20\x65\170\x69\x73\x74\40\x76\x61\x6c\165\x65\x3f\41", PR__CMN__FOUNDATION), "\145\x72\x72\157\162");
        goto ouimacsoeokwcuwa;
        uuqcwagaocukcqky:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto aquuskeeeususkmw;
        aquuskeeeususkmw:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\156\x61\155\x65", self::AJAX_NONCE_KEY);
        goto iegqiaoekkmuuqgo;
        yiiiyygiowkogagq:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aioymewmgwwgqiwu;
        iegqiaoekkmuuqgo:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\143\x74\x69\x6f\156", self::AJAX_NONCE);
        goto ksiaqmsuomessmmm;
        ksiaqmsuomessmmm:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto yiiiyygiowkogagq;
        aioymewmgwwgqiwu:
    }
    public function kwagkemgawuoacwy()
    {
        goto ayskeggsaioeeogy;
        keqaggeoasegyigg:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto kyuseiceyycyoqiy;
        yucyeouoieoqgqos:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto oswskykoomgqysqo;
            cwckmmsiouyaucea:
            wqomsowsgcumucgm:
            goto qwqsokugksycwkom;
            ckkkkwqaqcyuqweo:
            cykamcqoaeemeeak:
            goto cwckmmsiouyaucea;
            immuwwqcgeeikcoc:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto ckkkkwqaqcyuqweo;
            oswskykoomgqysqo:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto goqeumecwiwykkog;
            ickmakmomaakmmmc:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto immuwwqcgeeikcoc;
            goqeumecwiwykkog:
            if (!$eqgoocgaqwqcimie) {
                goto cykamcqoaeemeeak;
            }
            goto ickmakmomaakmmmc;
            qwqsokugksycwkom:
        }
        goto saiwskyicecogocg;
        kyuseiceyycyoqiy:
        mcoyueciqyqiigcc:
        goto kmcccsgokysskgqg;
        umwasmakyyqqigyq:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto mcoyueciqyqiigcc;
        }
        goto caykmykgamymycgk;
        gakcwmyakwyigswc:
        $wmgwaquemmoicmas = [];
        goto gsgsosqeoemwguea;
        miuswwgqmgicyuaq:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto eqgeksiquqymuaca;
        gyiiogoieoicewae:
        amuiigmiqoueiisi:
        goto uauggckimussuumk;
        caykmykgamymycgk:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto keqaggeoasegyigg;
        kmcccsgokysskgqg:
        qgskwweecckaecsy:
        goto qomigguamoeqekky;
        iiyiequuscsgsqiq:
        $sogksuscggsicmac = [];
        goto kooeoiymgykqaycs;
        kooeoiymgykqaycs:
        if ($aokagokqyuysuksm) {
            goto cwoescoukwcqeqey;
        }
        goto miuswwgqmgicyuaq;
        gsgsosqeoemwguea:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto tmoywiwaesgeqkau;
            kgakoeoomqmiuyou:
            mymoaysqioskuqqw:
            goto iumwoegoeuimmqqc;
            tmoywiwaesgeqkau:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto myeksmogkuwykamg;
            myeksmogkuwykamg:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto kgakoeoomqmiuyou;
            iumwoegoeuimmqqc:
        }
        goto mgqogcswmqgcgmac;
        uauggckimussuumk:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto emgwikaikyywkmwm;
        gkggmkmswikmmmki:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto yucyeouoieoqgqos;
        meicoiioyccqusio:
        $ykiyyumywksqcisg = [];
        goto iiyiequuscsgsqiq;
        ggqscaceqcsgksaq:
        goto qgskwweecckaecsy;
        goto yksoqouokyaskqki;
        wggiaskwosqecsuy:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto gakcwmyakwyigswc;
        mgqogcswmqgcgmac:
        uyeukoyamsaakqik:
        goto meicoiioyccqusio;
        cyckueeyskywyumk:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto ggqscaceqcsgksaq;
        saiwskyicecogocg:
        qiuyeygsgwskkwoy:
        goto gyiiogoieoicewae;
        ayskeggsaioeeogy:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto wggiaskwosqecsuy;
        yksoqouokyaskqki:
        cwoescoukwcqeqey:
        goto umwasmakyyqqigyq;
        eqgeksiquqymuaca:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\134\x62{$qwcmueausqgiwigy}\134\x62\57\151", $gygawogosumsgmme);
        });
        goto cyckueeyskywyumk;
        qomigguamoeqekky:
        if (!$ykiyyumywksqcisg) {
            goto amuiigmiqoueiisi;
        }
        goto gkggmkmswikmmmki;
        emgwikaikyywkmwm:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto sskkqugewogogagg;
        yuwoskumkgymgauq:
        uowyqyiqscmccsei:
        goto wuucaoemqqoomiey;
        kqgsykaimimimyae:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\x74\137\163\x74\141\164\x75\163" => $qisccquumwewokoy]);
        goto cuyskuymgaukqaey;
        wuiciowuskgmysck:
        akakuqyqwwuquiia:
        goto kamgygkuikoaigyw;
        cakayowsqeqayweo:
        ysemiouayuuqimyg:
        goto asgouseqowywicmy;
        ggskywuesswiqwqw:
        $qeiakyocuggicwsy = [];
        goto mimueoiwogkckmei;
        cmaoqqqqaqwqsaii:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto iiomwaiuuemuygkq;
        wakyowemmceeeqiy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\163\x74\x5f\x73\164\141\x74\165\x73" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto qscwycyimmeagyim;
        wyyqkqigmomsqsmi:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto yuwoskumkgymgauq;
        gwyuiugysgmueoik:
        $qisccquumwewokoy[] = "\x69\156\150\145\162\151\164";
        goto cakayowsqeqayweo;
        sskkqugewogogagg:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto oekqegamyyuuqcoy;
        moykkkgogaygokus:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto cysugoacwakoqwiu;
            eyymwewkeseeaggc:
            acqkeymqakmcumko:
            goto ikiqwekimqmyuuis;
            kgeyoegiqceocosu:
            kksgsgiywgosikqa:
            goto ykseokcqemaqqyae;
            immogeiuaiqwkcgy:
            $gskuwmeemyeuwogc = '';
            goto kegoyegkioysaaai;
            ykseokcqemaqqyae:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto eyymwewkeseeaggc;
            yowqeciqwemaysog:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x70\157\163\x74\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\144\x61\164\145" => ManipulatePost::squyiyimquqicqke(null, $post), "\164\151\x74\x6c\x65" => ManipulatePost::qcgakseyaikigqco($post), "\x61\165\164\x68\157\162" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\x68\x61\x73\x5f\151\x6d\x61\147\x65" => ManipulateArray::get($ywmkwiwkosakssii, "\150\x61\x73\137\151\155\141\147\145", false), "\x70\x6f\x73\164\137\164\171\x70\145" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto kgeyoegiqceocosu;
            cukuyoqwmyggamgu:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto immogeiuaiqwkcgy;
            cysugoacwakoqwiu:
            if (!$post instanceof WP_Post) {
                goto acqkeymqakmcumko;
            }
            goto cukuyoqwmyggamgu;
            ikiqwekimqmyuuis:
            dgawqiokqseygyqe:
            goto aaiwsiciesymiaok;
            kegoyegkioysaaai:
            if (!$qmwikaeuqeyuaoiy) {
                goto kksgsgiywgosikqa;
            }
            goto yowqeciqwemaysog;
            aaiwsiciesymiaok:
        }
        goto wuiciowuskgmysck;
        wsqoesokcweweiga:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto akysqyaywkiwwoog;
        akysqyaywkiwwoog:
        mmmyemwwkkmsomoq:
        goto moykkkgogaygokus;
        wuucaoemqqoomiey:
        if (!($oammesyieqmwuwyi == "\141\164\164\x61\x63\150\155\x65\x6e\x74" || is_array($oammesyieqmwuwyi) && in_array("\x61\164\164\x61\143\150\x6d\145\x6e\164", $oammesyieqmwuwyi))) {
            goto ysemiouayuuqimyg;
        }
        goto gwyuiugysgmueoik;
        qscwycyimmeagyim:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\137\160\157\x73\164\163\x5f\x61\162\147\163"), $ywmkwiwkosakssii);
        goto wsqoesokcweweiga;
        cuyskuymgaukqaey:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\160\157\163\164\x73\137\x61\162\147\163"), $ywmkwiwkosakssii);
        goto cmaoqqqqaqwqsaii;
        kamgygkuikoaigyw:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto goaqoeqygekuaywo;
        mgukweouugammoui:
        yqssyeyuimcmauao:
        goto wakyowemmceeeqiy;
        mimueoiwogkckmei:
        if ($oammesyieqmwuwyi) {
            goto uowyqyiqscmccsei;
        }
        goto wyyqkqigmomsqsmi;
        asgouseqowywicmy:
        if ($aokagokqyuysuksm) {
            goto yqssyeyuimcmauao;
        }
        goto kqgsykaimimimyae;
        iiomwaiuuemuygkq:
        goto mmmyemwwkkmsomoq;
        goto mgukweouugammoui;
        oekqegamyyuuqcoy:
        $qisccquumwewokoy = ["\x70\165\142\154\151\x73\x68"];
        goto ggskywuesswiqwqw;
        goaqoeqygekuaywo:
    }
    public function weescwwgqgiyumyw()
    {
        goto wsogoeqsmeucowak;
        wsogoeqsmeucowak:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ooggyokmmcmwygwk;
        uosiwiemuswkisyq:
        if ($aokagokqyuysuksm) {
            goto igumwqkcasocmuui;
        }
        goto iissqgqwyqmmqugg;
        kgyiqgaemwaqwome:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto kuuickoqgquuqwci;
        ooggyokmmcmwygwk:
        $qeiakyocuggicwsy = [];
        goto uswycqewimcuqmua;
        keygmsycouauqmqc:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto sumqgcmuacwikauo;
            mkaiiiimcywymqgk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto qqoyaewmawgkcmqo;
            sigsaocukiawcgqe:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto owswawakaekmsckk;
            sumqgcmuacwikauo:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto osyceoeiwaucwgci;
            }
            goto sigsaocukiawcgqe;
            segwckgisqwkowcc:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\164\x65\x72\x6d\57{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\164\x69\164\154\x65" => $ymqmyyeuycgmigyo, "\x74\141\x78\157\156\x6f\155\x79" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto uiskasyyiewuwmmk;
            sqsggomiyygwoumi:
            yuauuacmomcmgggi:
            goto yckuogqwcayqumoq;
            qqoyaewmawgkcmqo:
            osyceoeiwaucwgci:
            goto sqsggomiyygwoumi;
            akcygikyemoocswm:
            if (!$qmwikaeuqeyuaoiy) {
                goto keaoumygogemaeek;
            }
            goto segwckgisqwkowcc;
            uiskasyyiewuwmmk:
            keaoumygogemaeek:
            goto mkaiiiimcywymqgk;
            owswawakaekmsckk:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto sigumeougskmckcy;
            sigumeougskmckcy:
            $gskuwmeemyeuwogc = '';
            goto akcygikyemoocswm;
            yckuogqwcayqumoq:
        }
        goto mygwgowqguameswo;
        ogoaaswoyusgsycg:
        iswssqmsymsiqygm:
        goto qqewqsyyogoieaqc;
        woemukewigiwuyis:
        goto iswssqmsymsiqygm;
        goto ymkmgwqugkeoeyas;
        cciyuigcccggekmc:
        uaqsosmwikwoqioa:
        goto kgyiqgaemwaqwome;
        uswycqewimcuqmua:
        if (!$kesssewsiegssiya) {
            goto uaqsosmwikwoqioa;
        }
        goto uosiwiemuswkisyq;
        qqewqsyyogoieaqc:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto keygmsycouauqmqc;
        mygwgowqguameswo:
        giiymwkcouoegqgo:
        goto cciyuigcccggekmc;
        iissqgqwyqmmqugg:
        $ggauoeuaesiymgee = ["\156\x61\x6d\x65\x5f\x5f\x6c\x69\x6b\x65" => $qwcmueausqgiwigy, "\x68\151\x64\145\x5f\x65\x6d\x70\x74\x79" => 0, "\156\165\155\142\145\x72" => ''];
        goto woemukewigiwuyis;
        ymkmgwqugkeoeyas:
        igumwqkcasocmuui:
        goto iaouysocayacmusu;
        iaouysocayacmusu:
        $ggauoeuaesiymgee = ["\151\156\x63\x6c\165\x64\145" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\x68\x69\144\x65\x5f\x65\155\x70\x74\171" => 0];
        goto ogoaaswoyusgsycg;
        kuuickoqgquuqwci:
    }
    public function memuukwsmoyqusua()
    {
        goto weqkywkusswmawim;
        seemkiyosiscigms:
        wqyiquqemcueoogs:
        goto oqikoeeugogqkaim;
        wyisakyowacouyqk:
        if ($aokagokqyuysuksm) {
            goto akwkqauksyquwkqc;
        }
        goto gmyoyegggggmymes;
        uemuasgumguyeaye:
        goto wqyiquqemcueoogs;
        goto mscqweuqwsqywggy;
        oqikoeeugogqkaim:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto uwkaosmauksiukco;
            smekigasqcyykywe:
            ygkwwkuaqoemuaqq:
            goto ckuegykmyekmewco;
            yoqkmcigwewgykya:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x75\163\x65\x72\57{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\x6e\141\155\145" => sprintf(__("\x4e\141\x6d\x65\72\x20\x25\163", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\155\x61\x69\x6c" => sprintf(__("\105\x6d\141\151\154\x3a\x20\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\x72\157\154\145\x73" => sprintf(__("\122\x6f\154\145\x73\x3a\x20\45\x73", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\165\x73\145\162\x6e\x61\155\145" => sprintf(__("\x55\163\x65\x72\156\141\x6d\145\72\x20\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto smekigasqcyykywe;
            ckuegykmyekmewco:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto yqucaaqoyswiskeg;
            aossaeoauaeuoywc:
            myouqgwqoegsyseg:
            goto ieggkeomcusisuoo;
            ueoywqkaiwqoeakw:
            $gskuwmeemyeuwogc = '';
            goto yaaggqiuogwiyeia;
            uwkaosmauksiukco:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto uqyqsmgeeiyiaqck;
            }
            goto qgkuoayqesmgmcmq;
            iggkoiikmckimmmw:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto ueoywqkaiwqoeakw;
            qgkuoayqesmgmcmq:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto iggkoiikmckimmmw;
            yqucaaqoyswiskeg:
            uqyqsmgeeiyiaqck:
            goto aossaeoauaeuoywc;
            yaaggqiuogwiyeia:
            if (!$qmwikaeuqeyuaoiy) {
                goto ygkwwkuaqoemuaqq;
            }
            goto yoqkmcigwewgykya;
            ieggkeomcusisuoo:
        }
        goto okaacoqueimcowme;
        gmyoyegggggmymes:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto ooqymioycsgcoqiy;
        okaacoqueimcowme:
        omoomgsaackaseqm:
        goto saigyoyoqauaqsuu;
        umasciaeyewkkuuw:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\x69\156\143\154\x75\x64\x65" => $aokagokqyuysuksm]);
        goto seemkiyosiscigms;
        icccqacuqseakkew:
        $qeiakyocuggicwsy = [];
        goto wyisakyowacouyqk;
        mscqweuqwsqywggy:
        akwkqauksyquwkqc:
        goto umasciaeyewkkuuw;
        saigyoyoqauaqsuu:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto wywcgacaomkaesmw;
        weqkywkusswmawim:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto icccqacuqseakkew;
        ooqymioycsgcoqiy:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\157\154\145" => $uagwmwoawiwkycao, "\x73\x65\141\x72\143\150" => "\x2a{$qwcmueausqgiwigy}\52", "\x73\x65\x61\162\x63\150\x5f\x63\157\154\165\155\x6e\163" => ["\x75\163\145\162\x5f\x75\x72\x6c", "\165\x73\x65\x72\137\x6c\x6f\x67\x69\156", "\x75\x73\x65\162\137\145\x6d\141\151\x6c", "\x64\x69\x73\160\x6c\141\171\137\x6e\141\x6d\145", "\x75\163\x65\162\137\156\x69\x63\145\156\x61\x6d\x65"], "\155\x65\x74\x61\x5f\x71\x75\x65\162\171" => ["\x72\x65\x6c\141\x74\x69\157\x6e" => "\x4f\x52", ["\x6b\x65\171" => "\146\x69\x72\x73\164\x5f\156\141\x6d\145", "\166\141\x6c\165\145" => $qwcmueausqgiwigy, "\143\x6f\x6d\x70\141\x72\x65" => "\114\x49\x4b\x45"], ["\153\145\x79" => "\154\141\163\164\x5f\156\x61\x6d\x65", "\x76\141\154\x75\145" => $qwcmueausqgiwigy, "\x63\x6f\155\160\x61\x72\145" => "\114\x49\113\105"]]]));
        goto uemuasgumguyeaye;
        wywcgacaomkaesmw:
    }
    public function waoeigwigksoikgu()
    {
        goto sacesysuwmcykeuo;
        saikcqqkyoeikuyo:
        goto asmiwssgmoaaoswm;
        goto acgausemsusqaeas;
        sacesysuwmcykeuo:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ycisoqiyiiyqqwwm;
        uyowaccwwyusqkuc:
        $ywmkwiwkosakssii["\163\x74\x61\164\x75\163"] = "\141\160\x70\x72\157\166\145";
        goto usimgkkmqgmqiqug;
        mkeogqemimomcgsm:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto qmgcgicaaqquoicw;
            eiumaaaqmcqiuqgs:
            $gskuwmeemyeuwogc = '';
            goto wsymmqucieigkeac;
            kmokokcqewwcwyws:
            uackuyqecwisyieg:
            goto mwqsmcweqikkcksk;
            wsymmqucieigkeac:
            if (!$qmwikaeuqeyuaoiy) {
                goto uackuyqecwisyieg;
            }
            goto yciwiygwyqaeoqwo;
            gkcakkuoeioaieee:
            qswoscmyiawaeaek:
            goto cwcwemecykowqwui;
            yaiiekwggusgygac:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto gmmeasywcygwkugq;
            cqgwyoacewoaecik:
            uwkammcmgokwweew:
            goto gkcakkuoeioaieee;
            gmmeasywcygwkugq:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto eiumaaaqmcqiuqgs;
            qmgcgicaaqquoicw:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto uwkammcmgokwweew;
            }
            goto yaiiekwggusgygac;
            yciwiygwyqaeoqwo:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\143\x6f\155\x6d\145\156\164\57{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\164\x69\x74\x6c\145" => $pkyyagewkiyckmwy, "\164\x61\x78\x6f\156\x6f\x6d\171" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto kmokokcqewwcwyws;
            mwqsmcweqikkcksk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto cqgwyoacewoaecik;
            cwcwemecykowqwui:
        }
        goto cumykwakewgamugu;
        sesyqeyukqeuwckk:
        if ($post) {
            goto sycmikycociqswka;
        }
        goto cyyaquqmmceukggi;
        ackamyewsisqcmia:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\x6f\155\x6d\x65\x6e\164\x5f\x5f\x69\156" => $aokagokqyuysuksm]));
        goto guqgkmaoggceoumc;
        ecsskqmyqyuamyym:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto giyaooswwsuyuema;
        usimgkkmqgmqiqug:
        if ($aokagokqyuysuksm) {
            goto yiemweuwugqwcooa;
        }
        goto sesyqeyukqeuwckk;
        acgausemsusqaeas:
        yiemweuwugqwcooa:
        goto ackamyewsisqcmia;
        cumykwakewgamugu:
        akcksasayaumouky:
        goto ecsskqmyqyuamyym;
        ycisoqiyiiyqqwwm:
        $qeiakyocuggicwsy = [];
        goto uyowaccwwyusqkuc;
        giqwqyiaiemgguye:
        ymoaemsamquwomcs:
        goto saikcqqkyoeikuyo;
        guqgkmaoggceoumc:
        asmiwssgmoaaoswm:
        goto mkeogqemimomcgsm;
        cyyaquqmmceukggi:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x65\141\162\x63\x68" => $qwcmueausqgiwigy]));
        goto ogyiiuogeeaywkic;
        ogyiiuogeeaywkic:
        goto ymoaemsamquwomcs;
        goto scmoqmqikogqcuew;
        iuiuisqqeosykycg:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto giqwqyiaiemgguye;
        scmoqmqikogqcuew:
        sycmikycociqswka:
        goto iuiuisqqeosykycg;
        giyaooswwsuyuema:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto sgcuekgueuimciki;
        ooiysqkgmiqmkgeq:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\x61\162\x6b\x75\x70", false);
        goto ismooqwiqgmegcue;
        qakaoeiwgeuckeka:
        wwwcacoscyqesksm:
        goto qyowkusecoyawauc;
        cqsiewasswyayuyk:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto gyayocggoaickkqq;
        wimcauwoukmwgcwc:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\141\x72\x67\163", "\173\175");
        goto qwaqsogsaaegoiko;
        sgcuekgueuimciki:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto syekaumywgekyoca;
        iuwaekscacmamkeu:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto wwwcacoscyqesksm;
        }
        goto sewcwygikycqyqmu;
        ucoeooiewkkwwyuy:
        if (!$kmiooagcykmqaiac) {
            goto cmqkuqqmciawcqaq;
        }
        goto iuwaekscacmamkeu;
        qyowkusecoyawauc:
        cmqkuqqmciawcqaq:
        goto gacweccyqemocmky;
        qwaqsogsaaegoiko:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\151\164\x65\x6d\x73", null);
        goto wwkekusquqscgmsm;
        wwkekusquqscgmsm:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\x73\145\141\x72\143\x68", false);
        goto ooiysqkgmiqmkgeq;
        ismooqwiqgmegcue:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\164\x65\x6d\x70\154\x61\x74\x65\137\164\x79\x70\145", "\x69\x6e\144\145\170");
        goto akqwmskmmcamuwkm;
        sewcwygikycqyqmu:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto qakaoeiwgeuckeka;
        akqwmskmmcamuwkm:
        if (!is_string($ywmkwiwkosakssii)) {
            goto oieimyigeaywmmco;
        }
        goto cqsiewasswyayuyk;
        gacweccyqemocmky:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto gwqyuyucgguaisyg;
        syekaumywgekyoca:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto wimcauwoukmwgcwc;
        gyayocggoaickkqq:
        oieimyigeaywmmco:
        goto ucoeooiewkkwwyuy;
        gwqyuyucgguaisyg:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\144\x61\x74\141" => ["\143\157\x6e\164\x65\156\164" => $ewgwqamkygiqaawc], "\164\x65\170\164" => $cmwygeyygwqaemaq, "\x76\141\154\165\x65" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto simsoqkqsiqmwsaa;
        simsoqkqsiqmwsaa:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\x70\x61\147\145", 1));
        goto saekawmmwcmsyyaq;
        saekawmmwcmsyyaq:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto gocmieowkqeqwcks;
        qqaecgmomioggcyu:
        $keccaugmemegoimu = ["\x72\145\x73\165\154\164\x73" => $qeiakyocuggicwsy, "\155\157\x72\145\x5f\x72\145\163\165\x6c\164\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto iwaausiukycagkau;
        ucaocaceeuqiggso:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto qqaecgmomioggcyu;
        iwaausiukycagkau:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto eqakckaqmkweciao;
        gocmieowkqeqwcks:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ucaocaceeuqiggso;
        eqakckaqmkweciao:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto ksqaeuyiiiuuouoi;
        ewucaygocgykeweg:
        return $eqgoocgaqwqcimie;
        goto ayayswaesiscymcw;
        oekessmycksmemam:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\165\162\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto oagkkuowwccmeaoc;
            case "\164\x69\164\154\145":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto oagkkuowwccmeaoc;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto oagkkuowwccmeaoc;
        }
        goto gwaiikaaqgaoigay;
        oqsykugcsggakmoy:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\x49\x44";
        goto oekessmycksmemam;
        ksqaeuyiiiuuouoi:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\160\162\145\146\145\162", "\x49\104");
        goto oqsykugcsggakmoy;
        gwaiikaaqgaoigay:
        wymmeymakykomoeg:
        goto kmccaesicogsgcmk;
        kmccaesicogsgcmk:
        oagkkuowwccmeaoc:
        goto ewucaygocgykeweg;
        ayayswaesiscymcw:
    }
}
