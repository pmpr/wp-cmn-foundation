<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\x64", "\x74\151\x74\154\145", "\x75\162\154"];
    const ADMIN_GET_ = "\x61\144\155\x69\156\x5f\147\x65\164\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\143\157\x6e\163";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\x70\x6f\x73\164\163";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\x74\145\x72\155\x73";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\163\145\162\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\155\x6f\x64\x65\x6c\x73";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\143\157\x6d\155\145\156\164\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\141\x64\x6d\x69\156\x5f\141\x64\144\x5f\156\145\x77\x5f\164\x65\162\x6d";
    const FRONT_GET_NONCE_ACTION = "\x66\162\x6f\156\164\x5f\x67\x65\x74\137\x6e\x6f\156\143\145";
    const FRONT_ACTIONS = ["\147\x65\164\x5f\x6e\157\x6e\x63\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\x64\x64\137\x74\145\162\155" => self::ADMIN_ADD_NEW_TERM_ACTION, "\147\145\x74\x5f\151\x63\157\x6e\x73" => self::ADMIN_GET_ICONS_ACTION, "\x67\145\164\137\160\x6f\x73\164\x73" => self::ADMIN_GET_POSTS_ACTION, "\147\145\x74\137\x74\145\162\155\163" => self::ADMIN_GET_TERMS_ACTION, "\x67\145\x74\137\165\x73\145\162\163" => self::ADMIN_GET_USERS_ACTION, "\147\145\164\x5f\155\157\144\145\x6c\x73" => self::ADMIN_GET_MODELS_ACTION, "\x67\145\x74\x5f\143\x6f\155\155\145\x6e\x74\x73" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x65\x6e\161\x75\x65\x75\145"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\x67\147\x73\x75\145\x79\165\171\161\x65\x71\x65\165\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\x69\x79\163\163\x67\x6f\x69\x77\147\167\x79\147\145\x61\143\147"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\153\x77\141\x67\153\x65\x6d\147\141\167\x75\x6f\141\143\x77\171"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\167\145\x65\163\x63\x77\x77\x67\x71\x67\151\171\x75\155\x79\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\x6d\145\155\x75\165\x6b\167\163\155\157\x79\161\x75\x73\x75\x61"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\165\x79\151\x77\x67\155\145\x71\x6d\x6f\143\147\171\161\147\x6b"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\x77\141\157\x65\151\x67\167\x69\147\x6b\x73\157\x69\153\147\165"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\157\163\x65\x79\171\x75\x75\x79\165\x6b\143\167\x69\143\x61\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\152\141\x78", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\152\x61\170", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto koaowyckqwoeioea;
        eyggicmmeuqywwmm:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto uoaccgmmgiwmamsk;
        siemouciksuawwae:
        goto rkguoumeeggoqums;
        goto agguamgmwsacekmq;
        koaowyckqwoeioea:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto sciawoykmqyoimsk;
        ccwuggocayogugme:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto uuqcwagaocukcqky;
        sciawoykmqyoimsk:
        $occymigcemkqucuw = false;
        goto cukokoemmuwiwqyq;
        uoaccgmmgiwmamsk:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto meymkkgksakewqqs;
        iuwqyoikmeusiweg:
        $occymigcemkqucuw = true;
        goto ascaskisqyaysyoy;
        qeymeieqwmicycee:
        $sogksuscggsicmac = ["\x69\164\145\x6d" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\x65\154\145\x63\164" => $iiueagsqmqqkiiwm];
        goto okocmqiikuykcaqg;
        meymkkgksakewqqs:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto uckmiiogqewqoqyg;
        }
        goto kmkuwkyoemikcice;
        iiseqqukqsuysmmc:
        if (is_array($sogksuscggsicmac)) {
            goto quuwumayckugywiy;
        }
        goto kumkykyegsquigkw;
        okocmqiikuykcaqg:
        ueeuaosuuqakmouy:
        goto ewkqkysmqgeugeoy;
        qsaucowgmgqqwicy:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\x70\x61\x72\145\156\164" => ManipulateArray::get($icwicymcioeyeyek, "\x70\141\x72\145\x6e\x74", -1)]);
        goto iiseqqukqsuysmmc;
        agguamgmwsacekmq:
        uckmiiogqewqoqyg:
        goto qsaucowgmgqqwicy;
        mksywokiwukaeyua:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto qeymeieqwmicycee;
        ouimacsoeokwcuwa:
        goto ueeuaosuuqakmouy;
        goto qaaqumsmuwkoykam;
        kmkuwkyoemikcice:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\160\163\41\x20\123\x6f\155\145\164\x68\x69\x6e\x67\40\x69\163\40\167\x72\157\156\147\x2e\40\x41\x72\x65\40\171\x6f\x75\x20\150\x61\x63\x6b\x69\x6e\147\x3f\x21\40\x3a\50", PR__CMN__FOUNDATION), "\x65\x72\162\x6f\x72");
        goto siemouciksuawwae;
        ascaskisqyaysyoy:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto mksywokiwukaeyua;
        kumkykyegsquigkw:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\x70\163\41\x20\123\157\155\x65\x74\x68\x69\x6e\147\40\x69\x73\x20\167\x72\x6f\x6e\x67\56\40\101\162\145\40\171\157\165\x20\164\x72\171\x20\164\x6f\40\x61\x64\x64\x20\145\x78\151\163\x74\x20\166\141\x6c\x75\x65\77\x21", PR__CMN__FOUNDATION), "\x65\162\x72\157\162");
        goto ouimacsoeokwcuwa;
        cukokoemmuwiwqyq:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto eyggicmmeuqywwmm;
        qaaqumsmuwkoykam:
        quuwumayckugywiy:
        goto iuwqyoikmeusiweg;
        ewkqkysmqgeugeoy:
        rkguoumeeggoqums:
        goto ccwuggocayogugme;
        uuqcwagaocukcqky:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto aquuskeeeususkmw;
        aquuskeeeususkmw:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\141\x6d\x65", self::AJAX_NONCE_KEY);
        goto iegqiaoekkmuuqgo;
        ksiaqmsuomessmmm:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto yiiiyygiowkogagq;
        yiiiyygiowkogagq:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aioymewmgwwgqiwu;
        iegqiaoekkmuuqgo:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\x63\x74\x69\157\156", self::AJAX_NONCE);
        goto ksiaqmsuomessmmm;
        aioymewmgwwgqiwu:
    }
    public function kwagkemgawuoacwy()
    {
        goto ayskeggsaioeeogy;
        umwasmakyyqqigyq:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto mcoyueciqyqiigcc;
        }
        goto caykmykgamymycgk;
        saiwskyicecogocg:
        qiuyeygsgwskkwoy:
        goto gyiiogoieoicewae;
        gsgsosqeoemwguea:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto tmoywiwaesgeqkau;
            kgakoeoomqmiuyou:
            mymoaysqioskuqqw:
            goto iumwoegoeuimmqqc;
            myeksmogkuwykamg:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto kgakoeoomqmiuyou;
            tmoywiwaesgeqkau:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto myeksmogkuwykamg;
            iumwoegoeuimmqqc:
        }
        goto mgqogcswmqgcgmac;
        qomigguamoeqekky:
        if (!$ykiyyumywksqcisg) {
            goto amuiigmiqoueiisi;
        }
        goto gkggmkmswikmmmki;
        eqgeksiquqymuaca:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\x5c\x62{$qwcmueausqgiwigy}\134\142\57\151", $gygawogosumsgmme);
        });
        goto cyckueeyskywyumk;
        caykmykgamymycgk:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto keqaggeoasegyigg;
        ayskeggsaioeeogy:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto wggiaskwosqecsuy;
        uauggckimussuumk:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto emgwikaikyywkmwm;
        gyiiogoieoicewae:
        amuiigmiqoueiisi:
        goto uauggckimussuumk;
        yucyeouoieoqgqos:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto oswskykoomgqysqo;
            cwckmmsiouyaucea:
            wqomsowsgcumucgm:
            goto qwqsokugksycwkom;
            goqeumecwiwykkog:
            if (!$eqgoocgaqwqcimie) {
                goto cykamcqoaeemeeak;
            }
            goto ickmakmomaakmmmc;
            oswskykoomgqysqo:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto goqeumecwiwykkog;
            ckkkkwqaqcyuqweo:
            cykamcqoaeemeeak:
            goto cwckmmsiouyaucea;
            ickmakmomaakmmmc:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto immuwwqcgeeikcoc;
            immuwwqcgeeikcoc:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto ckkkkwqaqcyuqweo;
            qwqsokugksycwkom:
        }
        goto saiwskyicecogocg;
        wggiaskwosqecsuy:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto gakcwmyakwyigswc;
        miuswwgqmgicyuaq:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto eqgeksiquqymuaca;
        kooeoiymgykqaycs:
        if ($aokagokqyuysuksm) {
            goto cwoescoukwcqeqey;
        }
        goto miuswwgqmgicyuaq;
        iiyiequuscsgsqiq:
        $sogksuscggsicmac = [];
        goto kooeoiymgykqaycs;
        gkggmkmswikmmmki:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto yucyeouoieoqgqos;
        mgqogcswmqgcgmac:
        uyeukoyamsaakqik:
        goto meicoiioyccqusio;
        cyckueeyskywyumk:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto ggqscaceqcsgksaq;
        ggqscaceqcsgksaq:
        goto qgskwweecckaecsy;
        goto yksoqouokyaskqki;
        yksoqouokyaskqki:
        cwoescoukwcqeqey:
        goto umwasmakyyqqigyq;
        keqaggeoasegyigg:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto kyuseiceyycyoqiy;
        meicoiioyccqusio:
        $ykiyyumywksqcisg = [];
        goto iiyiequuscsgsqiq;
        kmcccsgokysskgqg:
        qgskwweecckaecsy:
        goto qomigguamoeqekky;
        gakcwmyakwyigswc:
        $wmgwaquemmoicmas = [];
        goto gsgsosqeoemwguea;
        kyuseiceyycyoqiy:
        mcoyueciqyqiigcc:
        goto kmcccsgokysskgqg;
        emgwikaikyywkmwm:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto sskkqugewogogagg;
        sskkqugewogogagg:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto oekqegamyyuuqcoy;
        wsqoesokcweweiga:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto akysqyaywkiwwoog;
        akysqyaywkiwwoog:
        mmmyemwwkkmsomoq:
        goto moykkkgogaygokus;
        kamgygkuikoaigyw:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto goaqoeqygekuaywo;
        kqgsykaimimimyae:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\x73\x74\137\163\164\x61\164\165\163" => $qisccquumwewokoy]);
        goto cuyskuymgaukqaey;
        qscwycyimmeagyim:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\x74\137\x70\157\x73\164\x73\137\x61\x72\147\163"), $ywmkwiwkosakssii);
        goto wsqoesokcweweiga;
        wuiciowuskgmysck:
        akakuqyqwwuquiia:
        goto kamgygkuikoaigyw;
        wuucaoemqqoomiey:
        if (!($oammesyieqmwuwyi == "\x61\164\x74\141\143\150\155\145\x6e\x74" || is_array($oammesyieqmwuwyi) && in_array("\141\164\164\x61\143\x68\x6d\145\156\x74", $oammesyieqmwuwyi))) {
            goto ysemiouayuuqimyg;
        }
        goto gwyuiugysgmueoik;
        mimueoiwogkckmei:
        if ($oammesyieqmwuwyi) {
            goto uowyqyiqscmccsei;
        }
        goto wyyqkqigmomsqsmi;
        yuwoskumkgymgauq:
        uowyqyiqscmccsei:
        goto wuucaoemqqoomiey;
        wyyqkqigmomsqsmi:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto yuwoskumkgymgauq;
        wakyowemmceeeqiy:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\x73\164\x5f\x73\x74\141\164\x75\163" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto qscwycyimmeagyim;
        iiomwaiuuemuygkq:
        goto mmmyemwwkkmsomoq;
        goto mgukweouugammoui;
        asgouseqowywicmy:
        if ($aokagokqyuysuksm) {
            goto yqssyeyuimcmauao;
        }
        goto kqgsykaimimimyae;
        oekqegamyyuuqcoy:
        $qisccquumwewokoy = ["\160\165\x62\x6c\x69\x73\150"];
        goto ggskywuesswiqwqw;
        moykkkgogaygokus:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto cysugoacwakoqwiu;
            cukuyoqwmyggamgu:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto immogeiuaiqwkcgy;
            eyymwewkeseeaggc:
            acqkeymqakmcumko:
            goto ikiqwekimqmyuuis;
            kgeyoegiqceocosu:
            kksgsgiywgosikqa:
            goto ykseokcqemaqqyae;
            immogeiuaiqwkcgy:
            $gskuwmeemyeuwogc = '';
            goto kegoyegkioysaaai;
            cysugoacwakoqwiu:
            if (!$post instanceof WP_Post) {
                goto acqkeymqakmcumko;
            }
            goto cukuyoqwmyggamgu;
            yowqeciqwemaysog:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\160\x6f\163\164\x2f{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\144\141\x74\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\x69\164\154\x65" => ManipulatePost::qcgakseyaikigqco($post), "\141\x75\164\x68\157\162" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\150\x61\x73\137\x69\155\x61\x67\x65" => ManipulateArray::get($ywmkwiwkosakssii, "\150\141\x73\x5f\x69\x6d\141\x67\x65", false), "\x70\157\163\x74\x5f\164\171\160\145" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto kgeyoegiqceocosu;
            ikiqwekimqmyuuis:
            dgawqiokqseygyqe:
            goto aaiwsiciesymiaok;
            kegoyegkioysaaai:
            if (!$qmwikaeuqeyuaoiy) {
                goto kksgsgiywgosikqa;
            }
            goto yowqeciqwemaysog;
            ykseokcqemaqqyae:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto eyymwewkeseeaggc;
            aaiwsiciesymiaok:
        }
        goto wuiciowuskgmysck;
        mgukweouugammoui:
        yqssyeyuimcmauao:
        goto wakyowemmceeeqiy;
        ggskywuesswiqwqw:
        $qeiakyocuggicwsy = [];
        goto mimueoiwogkckmei;
        cmaoqqqqaqwqsaii:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto iiomwaiuuemuygkq;
        cuyskuymgaukqaey:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\x5f\x70\157\x73\164\x73\137\141\x72\147\163"), $ywmkwiwkosakssii);
        goto cmaoqqqqaqwqsaii;
        cakayowsqeqayweo:
        ysemiouayuuqimyg:
        goto asgouseqowywicmy;
        gwyuiugysgmueoik:
        $qisccquumwewokoy[] = "\x69\156\150\145\x72\151\x74";
        goto cakayowsqeqayweo;
        goaqoeqygekuaywo:
    }
    public function weescwwgqgiyumyw()
    {
        goto wsogoeqsmeucowak;
        woemukewigiwuyis:
        goto iswssqmsymsiqygm;
        goto ymkmgwqugkeoeyas;
        wsogoeqsmeucowak:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ooggyokmmcmwygwk;
        ogoaaswoyusgsycg:
        iswssqmsymsiqygm:
        goto qqewqsyyogoieaqc;
        qqewqsyyogoieaqc:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto keygmsycouauqmqc;
        cciyuigcccggekmc:
        uaqsosmwikwoqioa:
        goto kgyiqgaemwaqwome;
        ymkmgwqugkeoeyas:
        igumwqkcasocmuui:
        goto iaouysocayacmusu;
        uosiwiemuswkisyq:
        if ($aokagokqyuysuksm) {
            goto igumwqkcasocmuui;
        }
        goto iissqgqwyqmmqugg;
        uswycqewimcuqmua:
        if (!$kesssewsiegssiya) {
            goto uaqsosmwikwoqioa;
        }
        goto uosiwiemuswkisyq;
        kgyiqgaemwaqwome:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto kuuickoqgquuqwci;
        iissqgqwyqmmqugg:
        $ggauoeuaesiymgee = ["\156\x61\155\145\x5f\x5f\154\x69\x6b\145" => $qwcmueausqgiwigy, "\x68\151\144\x65\x5f\145\155\x70\164\x79" => 0, "\156\x75\x6d\142\x65\x72" => ''];
        goto woemukewigiwuyis;
        mygwgowqguameswo:
        giiymwkcouoegqgo:
        goto cciyuigcccggekmc;
        iaouysocayacmusu:
        $ggauoeuaesiymgee = ["\151\x6e\x63\x6c\x75\x64\145" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\x68\x69\144\145\x5f\145\155\x70\x74\171" => 0];
        goto ogoaaswoyusgsycg;
        keygmsycouauqmqc:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto sumqgcmuacwikauo;
            akcygikyemoocswm:
            if (!$qmwikaeuqeyuaoiy) {
                goto keaoumygogemaeek;
            }
            goto segwckgisqwkowcc;
            sigumeougskmckcy:
            $gskuwmeemyeuwogc = '';
            goto akcygikyemoocswm;
            uiskasyyiewuwmmk:
            keaoumygogemaeek:
            goto mkaiiiimcywymqgk;
            sumqgcmuacwikauo:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto osyceoeiwaucwgci;
            }
            goto sigsaocukiawcgqe;
            sqsggomiyygwoumi:
            yuauuacmomcmgggi:
            goto yckuogqwcayqumoq;
            segwckgisqwkowcc:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\164\145\162\155\57{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\x74\151\164\x6c\x65" => $ymqmyyeuycgmigyo, "\164\141\x78\x6f\x6e\x6f\x6d\x79" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto uiskasyyiewuwmmk;
            sigsaocukiawcgqe:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto owswawakaekmsckk;
            mkaiiiimcywymqgk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto qqoyaewmawgkcmqo;
            owswawakaekmsckk:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto sigumeougskmckcy;
            qqoyaewmawgkcmqo:
            osyceoeiwaucwgci:
            goto sqsggomiyygwoumi;
            yckuogqwcayqumoq:
        }
        goto mygwgowqguameswo;
        ooggyokmmcmwygwk:
        $qeiakyocuggicwsy = [];
        goto uswycqewimcuqmua;
        kuuickoqgquuqwci:
    }
    public function memuukwsmoyqusua()
    {
        goto weqkywkusswmawim;
        umasciaeyewkkuuw:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\x69\156\x63\x6c\x75\144\145" => $aokagokqyuysuksm]);
        goto seemkiyosiscigms;
        ooqymioycsgcoqiy:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\157\154\145" => $uagwmwoawiwkycao, "\x73\145\141\x72\143\x68" => "\52{$qwcmueausqgiwigy}\x2a", "\x73\145\141\162\143\x68\x5f\x63\x6f\154\x75\x6d\x6e\163" => ["\165\x73\x65\x72\x5f\165\x72\x6c", "\x75\163\145\162\x5f\x6c\x6f\147\151\x6e", "\165\163\145\162\137\145\x6d\x61\151\154", "\144\151\163\x70\154\141\171\137\156\141\x6d\x65", "\165\x73\x65\x72\x5f\156\x69\143\145\x6e\x61\x6d\x65"], "\155\x65\x74\x61\137\161\165\x65\162\x79" => ["\162\145\x6c\141\x74\x69\157\x6e" => "\x4f\x52", ["\153\145\x79" => "\146\x69\x72\163\164\137\156\141\155\145", "\166\x61\154\x75\145" => $qwcmueausqgiwigy, "\x63\x6f\x6d\160\141\x72\x65" => "\x4c\111\113\x45"], ["\x6b\145\x79" => "\154\x61\x73\164\x5f\x6e\x61\155\x65", "\x76\x61\154\165\145" => $qwcmueausqgiwigy, "\143\157\155\160\x61\x72\145" => "\x4c\x49\x4b\105"]]]));
        goto uemuasgumguyeaye;
        saigyoyoqauaqsuu:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto wywcgacaomkaesmw;
        gmyoyegggggmymes:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto ooqymioycsgcoqiy;
        icccqacuqseakkew:
        $qeiakyocuggicwsy = [];
        goto wyisakyowacouyqk;
        weqkywkusswmawim:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto icccqacuqseakkew;
        uemuasgumguyeaye:
        goto wqyiquqemcueoogs;
        goto mscqweuqwsqywggy;
        mscqweuqwsqywggy:
        akwkqauksyquwkqc:
        goto umasciaeyewkkuuw;
        okaacoqueimcowme:
        omoomgsaackaseqm:
        goto saigyoyoqauaqsuu;
        oqikoeeugogqkaim:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto uwkaosmauksiukco;
            qgkuoayqesmgmcmq:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto iggkoiikmckimmmw;
            aossaeoauaeuoywc:
            myouqgwqoegsyseg:
            goto ieggkeomcusisuoo;
            smekigasqcyykywe:
            ygkwwkuaqoemuaqq:
            goto ckuegykmyekmewco;
            ueoywqkaiwqoeakw:
            $gskuwmeemyeuwogc = '';
            goto yaaggqiuogwiyeia;
            yqucaaqoyswiskeg:
            uqyqsmgeeiyiaqck:
            goto aossaeoauaeuoywc;
            uwkaosmauksiukco:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto uqyqsmgeeiyiaqck;
            }
            goto qgkuoayqesmgmcmq;
            yaaggqiuogwiyeia:
            if (!$qmwikaeuqeyuaoiy) {
                goto ygkwwkuaqoemuaqq;
            }
            goto yoqkmcigwewgykya;
            iggkoiikmckimmmw:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto ueoywqkaiwqoeakw;
            yoqkmcigwewgykya:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x75\x73\145\162\x2f{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\x6e\141\x6d\145" => sprintf(__("\116\x61\x6d\145\x3a\40\45\x73", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\155\141\x69\x6c" => sprintf(__("\105\155\141\x69\x6c\x3a\40\x25\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\162\157\154\145\163" => sprintf(__("\122\x6f\154\x65\163\x3a\40\45\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\163\145\162\x6e\x61\155\145" => sprintf(__("\125\x73\145\x72\x6e\x61\155\x65\x3a\40\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto smekigasqcyykywe;
            ckuegykmyekmewco:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto yqucaaqoyswiskeg;
            ieggkeomcusisuoo:
        }
        goto okaacoqueimcowme;
        seemkiyosiscigms:
        wqyiquqemcueoogs:
        goto oqikoeeugogqkaim;
        wyisakyowacouyqk:
        if ($aokagokqyuysuksm) {
            goto akwkqauksyquwkqc;
        }
        goto gmyoyegggggmymes;
        wywcgacaomkaesmw:
    }
    public function waoeigwigksoikgu()
    {
        goto sacesysuwmcykeuo;
        cyyaquqmmceukggi:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x65\x61\x72\143\x68" => $qwcmueausqgiwigy]));
        goto ogyiiuogeeaywkic;
        guqgkmaoggceoumc:
        asmiwssgmoaaoswm:
        goto mkeogqemimomcgsm;
        scmoqmqikogqcuew:
        sycmikycociqswka:
        goto iuiuisqqeosykycg;
        acgausemsusqaeas:
        yiemweuwugqwcooa:
        goto ackamyewsisqcmia;
        sesyqeyukqeuwckk:
        if ($post) {
            goto sycmikycociqswka;
        }
        goto cyyaquqmmceukggi;
        ackamyewsisqcmia:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x63\x6f\155\x6d\145\x6e\x74\137\137\x69\x6e" => $aokagokqyuysuksm]));
        goto guqgkmaoggceoumc;
        ogyiiuogeeaywkic:
        goto ymoaemsamquwomcs;
        goto scmoqmqikogqcuew;
        usimgkkmqgmqiqug:
        if ($aokagokqyuysuksm) {
            goto yiemweuwugqwcooa;
        }
        goto sesyqeyukqeuwckk;
        giqwqyiaiemgguye:
        ymoaemsamquwomcs:
        goto saikcqqkyoeikuyo;
        sacesysuwmcykeuo:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ycisoqiyiiyqqwwm;
        ecsskqmyqyuamyym:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto giyaooswwsuyuema;
        ycisoqiyiiyqqwwm:
        $qeiakyocuggicwsy = [];
        goto uyowaccwwyusqkuc;
        cumykwakewgamugu:
        akcksasayaumouky:
        goto ecsskqmyqyuamyym;
        iuiuisqqeosykycg:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto giqwqyiaiemgguye;
        uyowaccwwyusqkuc:
        $ywmkwiwkosakssii["\x73\164\x61\x74\x75\x73"] = "\x61\x70\160\162\x6f\x76\x65";
        goto usimgkkmqgmqiqug;
        saikcqqkyoeikuyo:
        goto asmiwssgmoaaoswm;
        goto acgausemsusqaeas;
        mkeogqemimomcgsm:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto qmgcgicaaqquoicw;
            mwqsmcweqikkcksk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto cqgwyoacewoaecik;
            kmokokcqewwcwyws:
            uackuyqecwisyieg:
            goto mwqsmcweqikkcksk;
            wsymmqucieigkeac:
            if (!$qmwikaeuqeyuaoiy) {
                goto uackuyqecwisyieg;
            }
            goto yciwiygwyqaeoqwo;
            gmmeasywcygwkugq:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto eiumaaaqmcqiuqgs;
            yciwiygwyqaeoqwo:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\143\157\155\x6d\x65\156\164\x2f{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\x74\151\x74\154\145" => $pkyyagewkiyckmwy, "\x74\x61\170\x6f\156\157\x6d\x79" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto kmokokcqewwcwyws;
            qmgcgicaaqquoicw:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto uwkammcmgokwweew;
            }
            goto yaiiekwggusgygac;
            eiumaaaqmcqiuqgs:
            $gskuwmeemyeuwogc = '';
            goto wsymmqucieigkeac;
            cqgwyoacewoaecik:
            uwkammcmgokwweew:
            goto gkcakkuoeioaieee;
            yaiiekwggusgygac:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto gmmeasywcygwkugq;
            gkcakkuoeioaieee:
            qswoscmyiawaeaek:
            goto cwcwemecykowqwui;
            cwcwemecykowqwui:
        }
        goto cumykwakewgamugu;
        giyaooswwsuyuema:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto sgcuekgueuimciki;
        syekaumywgekyoca:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto wimcauwoukmwgcwc;
        ismooqwiqgmegcue:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\x65\x6d\x70\x6c\141\x74\x65\x5f\x74\x79\x70\145", "\x69\x6e\x64\x65\x78");
        goto akqwmskmmcamuwkm;
        wimcauwoukmwgcwc:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\x61\x72\147\x73", "\x7b\x7d");
        goto qwaqsogsaaegoiko;
        ooiysqkgmiqmkgeq:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\141\162\153\x75\x70", false);
        goto ismooqwiqgmegcue;
        qyowkusecoyawauc:
        cmqkuqqmciawcqaq:
        goto gacweccyqemocmky;
        sgcuekgueuimciki:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto syekaumywgekyoca;
        gyayocggoaickkqq:
        oieimyigeaywmmco:
        goto ucoeooiewkkwwyuy;
        wwkekusquqscgmsm:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\x65\x61\162\143\150", false);
        goto ooiysqkgmiqmkgeq;
        cqsiewasswyayuyk:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto gyayocggoaickkqq;
        akqwmskmmcamuwkm:
        if (!is_string($ywmkwiwkosakssii)) {
            goto oieimyigeaywmmco;
        }
        goto cqsiewasswyayuyk;
        qakaoeiwgeuckeka:
        wwwcacoscyqesksm:
        goto qyowkusecoyawauc;
        qwaqsogsaaegoiko:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\x69\x74\x65\x6d\163", null);
        goto wwkekusquqscgmsm;
        gacweccyqemocmky:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto gwqyuyucgguaisyg;
        iuwaekscacmamkeu:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto wwwcacoscyqesksm;
        }
        goto sewcwygikycqyqmu;
        sewcwygikycqyqmu:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto qakaoeiwgeuckeka;
        ucoeooiewkkwwyuy:
        if (!$kmiooagcykmqaiac) {
            goto cmqkuqqmciawcqaq;
        }
        goto iuwaekscacmamkeu;
        gwqyuyucgguaisyg:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\144\141\164\x61" => ["\x63\157\x6e\164\x65\x6e\164" => $ewgwqamkygiqaawc], "\x74\x65\170\164" => $cmwygeyygwqaemaq, "\166\x61\154\165\x65" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto simsoqkqsiqmwsaa;
        qqaecgmomioggcyu:
        $keccaugmemegoimu = ["\x72\145\163\165\154\164\163" => $qeiakyocuggicwsy, "\155\157\162\145\137\x72\145\x73\x75\154\x74\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto iwaausiukycagkau;
        simsoqkqsiqmwsaa:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\141\147\x65", 1));
        goto saekawmmwcmsyyaq;
        saekawmmwcmsyyaq:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto gocmieowkqeqwcks;
        iwaausiukycagkau:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto eqakckaqmkweciao;
        ucaocaceeuqiggso:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto qqaecgmomioggcyu;
        gocmieowkqeqwcks:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ucaocaceeuqiggso;
        eqakckaqmkweciao:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto ksqaeuyiiiuuouoi;
        kmccaesicogsgcmk:
        oagkkuowwccmeaoc:
        goto ewucaygocgykeweg;
        ksqaeuyiiiuuouoi:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\160\162\x65\146\x65\162", "\x49\x44");
        goto oqsykugcsggakmoy;
        gwaiikaaqgaoigay:
        wymmeymakykomoeg:
        goto kmccaesicogsgcmk;
        oekessmycksmemam:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\165\162\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto oagkkuowwccmeaoc;
            case "\164\x69\x74\154\x65":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto oagkkuowwccmeaoc;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto oagkkuowwccmeaoc;
        }
        goto gwaiikaaqgaoigay;
        ewucaygocgykeweg:
        return $eqgoocgaqwqcimie;
        goto ayayswaesiscymcw;
        oqsykugcsggakmoy:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\x49\104";
        goto oekessmycksmemam;
        ayayswaesiscymcw:
    }
}
