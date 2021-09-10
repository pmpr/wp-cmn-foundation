<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\144", "\x74\151\164\154\x65", "\x75\162\154"];
    const ADMIN_GET_ = "\x61\x64\x6d\151\156\x5f\147\x65\164\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\x63\157\x6e\163";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\x70\157\x73\x74\163";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\164\x65\x72\x6d\163";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\163\145\x72\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\x6f\x64\145\154\163";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\143\x6f\155\155\x65\156\x74\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\141\x64\155\x69\x6e\137\141\144\144\137\156\x65\167\x5f\164\x65\x72\x6d";
    const FRONT_GET_NONCE_ACTION = "\146\162\157\156\x74\137\147\145\x74\x5f\x6e\157\156\143\x65";
    const FRONT_ACTIONS = ["\147\145\164\x5f\x6e\x6f\x6e\x63\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\x61\144\x64\137\x74\x65\162\x6d" => self::ADMIN_ADD_NEW_TERM_ACTION, "\147\x65\164\x5f\x69\x63\x6f\156\163" => self::ADMIN_GET_ICONS_ACTION, "\x67\145\164\137\160\x6f\x73\x74\x73" => self::ADMIN_GET_POSTS_ACTION, "\x67\145\164\x5f\164\145\x72\x6d\163" => self::ADMIN_GET_TERMS_ACTION, "\147\145\164\x5f\x75\163\145\x72\x73" => self::ADMIN_GET_USERS_ACTION, "\147\145\x74\137\155\x6f\144\145\x6c\163" => self::ADMIN_GET_MODELS_ACTION, "\147\x65\x74\137\x63\x6f\x6d\155\x65\156\164\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\145\x6e\161\x75\145\x75\x65"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\x6b\147\147\163\x75\x65\x79\x75\x79\161\x65\x71\145\x75\163\143"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\x69\x79\x73\x73\x67\157\151\167\x67\167\x79\147\145\141\143\147"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\x6b\x77\x61\x67\153\x65\x6d\147\141\x77\165\157\141\143\167\171"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\167\145\145\x73\143\x77\167\x67\x71\x67\x69\x79\165\155\171\x77"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\155\145\x6d\165\165\153\167\163\155\157\171\x71\x75\x73\x75\x61"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\165\171\x69\x77\147\155\145\161\155\157\143\x67\x79\x71\147\153"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\167\141\x6f\x65\151\x67\x77\151\x67\153\x73\x6f\151\x6b\x67\x75"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\157\x73\145\171\171\x75\x75\171\x75\x6b\143\167\x69\x63\141\x71"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\152\141\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\152\141\x78", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto qomigguamoeqekky;
        dgawqiokqseygyqe:
        goto keqaggeoasegyigg;
        goto kksgsgiywgosikqa;
        uowyqyiqscmccsei:
        goto kmcccsgokysskgqg;
        goto ysemiouayuuqimyg;
        qomigguamoeqekky:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto gkggmkmswikmmmki;
        immogeiuaiqwkcgy:
        $sogksuscggsicmac = ["\x69\164\145\x6d" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\154\x65\x63\x74" => $iiueagsqmqqkiiwm];
        goto kegoyegkioysaaai;
        yqssyeyuimcmauao:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\160\x61\x72\145\156\x74" => ManipulateArray::get($icwicymcioeyeyek, "\160\x61\162\145\x6e\164", -1)]);
        goto mmmyemwwkkmsomoq;
        kksgsgiywgosikqa:
        caykmykgamymycgk:
        goto acqkeymqakmcumko;
        emgwikaikyywkmwm:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\x21\x20\123\x6f\155\145\x74\x68\151\156\147\40\151\x73\x20\x77\162\157\156\147\x2e\40\x41\162\145\x20\171\157\x75\x20\150\141\143\x6b\x69\x6e\x67\x3f\41\40\72\x28", PR__CMN__FOUNDATION), "\145\162\x72\157\162");
        goto uowyqyiqscmccsei;
        ysemiouayuuqimyg:
        kyuseiceyycyoqiy:
        goto yqssyeyuimcmauao;
        acqkeymqakmcumko:
        $occymigcemkqucuw = true;
        goto cysugoacwakoqwiu;
        akakuqyqwwuquiia:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\x70\x73\x21\40\x53\157\x6d\x65\x74\150\151\156\147\x20\151\x73\40\167\x72\x6f\x6e\147\56\x20\101\x72\x65\40\x79\x6f\x75\x20\x74\162\x79\x20\x74\157\x20\141\x64\x64\x20\145\170\x69\x73\164\x20\x76\141\154\165\145\x3f\x21", PR__CMN__FOUNDATION), "\145\x72\162\x6f\x72");
        goto dgawqiokqseygyqe;
        kegoyegkioysaaai:
        keqaggeoasegyigg:
        goto yowqeciqwemaysog;
        cysugoacwakoqwiu:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto cukuyoqwmyggamgu;
        saiwskyicecogocg:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto gyiiogoieoicewae;
        kgeyoegiqceocosu:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto ykseokcqemaqqyae;
        gyiiogoieoicewae:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto uauggckimussuumk;
        gkggmkmswikmmmki:
        $occymigcemkqucuw = false;
        goto yucyeouoieoqgqos;
        yowqeciqwemaysog:
        kmcccsgokysskgqg:
        goto kgeyoegiqceocosu;
        mmmyemwwkkmsomoq:
        if (is_array($sogksuscggsicmac)) {
            goto caykmykgamymycgk;
        }
        goto akakuqyqwwuquiia;
        yucyeouoieoqgqos:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto saiwskyicecogocg;
        uauggckimussuumk:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto kyuseiceyycyoqiy;
        }
        goto emgwikaikyywkmwm;
        cukuyoqwmyggamgu:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto immogeiuaiqwkcgy;
        ykseokcqemaqqyae:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto eyymwewkeseeaggc;
        sskkqugewogogagg:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto oekqegamyyuuqcoy;
        eyymwewkeseeaggc:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\141\155\145", self::AJAX_NONCE_KEY);
        goto ikiqwekimqmyuuis;
        aaiwsiciesymiaok:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto sskkqugewogogagg;
        ikiqwekimqmyuuis:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\x63\x74\x69\x6f\156", self::AJAX_NONCE);
        goto aaiwsiciesymiaok;
        oekqegamyyuuqcoy:
    }
    public function kwagkemgawuoacwy()
    {
        goto goaqoeqygekuaywo;
        igumwqkcasocmuui:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto iswssqmsymsiqygm;
        goaqoeqygekuaywo:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto igumwqkcasocmuui;
        sqsggomiyygwoumi:
        cakayowsqeqayweo:
        goto yckuogqwcayqumoq;
        segwckgisqwkowcc:
        asgouseqowywicmy:
        goto uiskasyyiewuwmmk;
        mkaiiiimcywymqgk:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto qqoyaewmawgkcmqo;
        uiskasyyiewuwmmk:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto cakayowsqeqayweo;
        }
        goto mkaiiiimcywymqgk;
        uosiwiemuswkisyq:
        kamgygkuikoaigyw:
        goto iissqgqwyqmmqugg;
        yckuogqwcayqumoq:
        kqgsykaimimimyae:
        goto uaqsosmwikwoqioa;
        osyceoeiwaucwgci:
        $sogksuscggsicmac = [];
        goto sumqgcmuacwikauo;
        uaqsosmwikwoqioa:
        if (!$ykiyyumywksqcisg) {
            goto kamgygkuikoaigyw;
        }
        goto wsogoeqsmeucowak;
        akcygikyemoocswm:
        goto kqgsykaimimimyae;
        goto segwckgisqwkowcc;
        iswssqmsymsiqygm:
        $wmgwaquemmoicmas = [];
        goto giiymwkcouoegqgo;
        sumqgcmuacwikauo:
        if ($aokagokqyuysuksm) {
            goto asgouseqowywicmy;
        }
        goto sigsaocukiawcgqe;
        owswawakaekmsckk:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\x5c\142{$qwcmueausqgiwigy}\134\142\57\x69", $gygawogosumsgmme);
        });
        goto sigumeougskmckcy;
        giiymwkcouoegqgo:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto wyyqkqigmomsqsmi;
            yuwoskumkgymgauq:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto wuucaoemqqoomiey;
            wyyqkqigmomsqsmi:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto yuwoskumkgymgauq;
            wuucaoemqqoomiey:
            mimueoiwogkckmei:
            goto gwyuiugysgmueoik;
            gwyuiugysgmueoik:
        }
        goto yuauuacmomcmgggi;
        sigsaocukiawcgqe:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto owswawakaekmsckk;
        qqoyaewmawgkcmqo:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto sqsggomiyygwoumi;
        ooggyokmmcmwygwk:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto mgukweouugammoui;
            akysqyaywkiwwoog:
            iiomwaiuuemuygkq:
            goto moykkkgogaygokus;
            qscwycyimmeagyim:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto wsqoesokcweweiga;
            moykkkgogaygokus:
            cmaoqqqqaqwqsaii:
            goto wuiciowuskgmysck;
            wakyowemmceeeqiy:
            if (!$eqgoocgaqwqcimie) {
                goto iiomwaiuuemuygkq;
            }
            goto qscwycyimmeagyim;
            wsqoesokcweweiga:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto akysqyaywkiwwoog;
            mgukweouugammoui:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto wakyowemmceeeqiy;
            wuiciowuskgmysck:
        }
        goto uswycqewimcuqmua;
        keaoumygogemaeek:
        $ykiyyumywksqcisg = [];
        goto osyceoeiwaucwgci;
        sigumeougskmckcy:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto akcygikyemoocswm;
        uswycqewimcuqmua:
        cuyskuymgaukqaey:
        goto uosiwiemuswkisyq;
        wsogoeqsmeucowak:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto ooggyokmmcmwygwk;
        yuauuacmomcmgggi:
        ggskywuesswiqwqw:
        goto keaoumygogemaeek;
        iissqgqwyqmmqugg:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto woemukewigiwuyis;
        woemukewigiwuyis:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto ueoywqkaiwqoeakw;
        wywcgacaomkaesmw:
        keygmsycouauqmqc:
        goto sycmikycociqswka;
        oqikoeeugogqkaim:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto okaacoqueimcowme;
        ckuegykmyekmewco:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto yqucaaqoyswiskeg;
        saigyoyoqauaqsuu:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto kuuickoqgquuqwci;
            omoomgsaackaseqm:
            if (!$qmwikaeuqeyuaoiy) {
                goto cciyuigcccggekmc;
            }
            goto myouqgwqoegsyseg;
            kuuickoqgquuqwci:
            if (!$post instanceof WP_Post) {
                goto kgyiqgaemwaqwome;
            }
            goto akwkqauksyquwkqc;
            uwkaosmauksiukco:
            kgyiqgaemwaqwome:
            goto qgkuoayqesmgmcmq;
            akwkqauksyquwkqc:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto wqyiquqemcueoogs;
            uqyqsmgeeiyiaqck:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto uwkaosmauksiukco;
            qgkuoayqesmgmcmq:
            mygwgowqguameswo:
            goto iggkoiikmckimmmw;
            myouqgwqoegsyseg:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x70\x6f\x73\164\57{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\144\x61\x74\145" => ManipulatePost::squyiyimquqicqke(null, $post), "\164\x69\164\154\x65" => ManipulatePost::qcgakseyaikigqco($post), "\141\x75\164\x68\x6f\162" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\x68\141\x73\137\151\x6d\x61\147\x65" => ManipulateArray::get($ywmkwiwkosakssii, "\150\x61\x73\x5f\x69\155\x61\147\x65", false), "\160\x6f\x73\x74\x5f\164\x79\160\145" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto ygkwwkuaqoemuaqq;
            wqyiquqemcueoogs:
            $gskuwmeemyeuwogc = '';
            goto omoomgsaackaseqm;
            ygkwwkuaqoemuaqq:
            cciyuigcccggekmc:
            goto uqyqsmgeeiyiaqck;
            iggkoiikmckimmmw:
        }
        goto wywcgacaomkaesmw;
        yoqkmcigwewgykya:
        $qeiakyocuggicwsy = [];
        goto smekigasqcyykywe;
        icccqacuqseakkew:
        if ($aokagokqyuysuksm) {
            goto ogoaaswoyusgsycg;
        }
        goto wyisakyowacouyqk;
        wyisakyowacouyqk:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\163\164\x5f\163\x74\141\x74\165\163" => $qisccquumwewokoy]);
        goto gmyoyegggggmymes;
        gmyoyegggggmymes:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\160\x6f\x73\164\163\x5f\x61\x72\147\163"), $ywmkwiwkosakssii);
        goto ooqymioycsgcoqiy;
        ieggkeomcusisuoo:
        $qisccquumwewokoy[] = "\x69\156\x68\x65\x72\x69\164";
        goto weqkywkusswmawim;
        ueoywqkaiwqoeakw:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto yaaggqiuogwiyeia;
        aossaeoauaeuoywc:
        if (!($oammesyieqmwuwyi == "\x61\x74\164\141\x63\x68\x6d\145\x6e\164" || is_array($oammesyieqmwuwyi) && in_array("\x61\164\x74\141\x63\x68\x6d\145\x6e\x74", $oammesyieqmwuwyi))) {
            goto iaouysocayacmusu;
        }
        goto ieggkeomcusisuoo;
        uemuasgumguyeaye:
        goto qqewqsyyogoieaqc;
        goto mscqweuqwsqywggy;
        yqucaaqoyswiskeg:
        ymkmgwqugkeoeyas:
        goto aossaeoauaeuoywc;
        mscqweuqwsqywggy:
        ogoaaswoyusgsycg:
        goto umasciaeyewkkuuw;
        umasciaeyewkkuuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\x73\x74\137\163\x74\x61\x74\x75\163" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto seemkiyosiscigms;
        ooqymioycsgcoqiy:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto uemuasgumguyeaye;
        smekigasqcyykywe:
        if ($oammesyieqmwuwyi) {
            goto ymkmgwqugkeoeyas;
        }
        goto ckuegykmyekmewco;
        weqkywkusswmawim:
        iaouysocayacmusu:
        goto icccqacuqseakkew;
        sycmikycociqswka:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto ymoaemsamquwomcs;
        yaaggqiuogwiyeia:
        $qisccquumwewokoy = ["\160\165\x62\x6c\x69\x73\x68"];
        goto yoqkmcigwewgykya;
        seemkiyosiscigms:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x70\157\163\164\x73\137\141\162\x67\163"), $ywmkwiwkosakssii);
        goto oqikoeeugogqkaim;
        okaacoqueimcowme:
        qqewqsyyogoieaqc:
        goto saigyoyoqauaqsuu;
        ymoaemsamquwomcs:
    }
    public function weescwwgqgiyumyw()
    {
        goto ycisoqiyiiyqqwwm;
        acgausemsusqaeas:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto qmgcgicaaqquoicw;
            yaiiekwggusgygac:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto gmmeasywcygwkugq;
            mwqsmcweqikkcksk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto cqgwyoacewoaecik;
            eiumaaaqmcqiuqgs:
            $gskuwmeemyeuwogc = '';
            goto wsymmqucieigkeac;
            qmgcgicaaqquoicw:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto uwkammcmgokwweew;
            }
            goto yaiiekwggusgygac;
            wsymmqucieigkeac:
            if (!$qmwikaeuqeyuaoiy) {
                goto uackuyqecwisyieg;
            }
            goto yciwiygwyqaeoqwo;
            kmokokcqewwcwyws:
            uackuyqecwisyieg:
            goto mwqsmcweqikkcksk;
            cqgwyoacewoaecik:
            uwkammcmgokwweew:
            goto gkcakkuoeioaieee;
            gkcakkuoeioaieee:
            qswoscmyiawaeaek:
            goto cwcwemecykowqwui;
            yciwiygwyqaeoqwo:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x74\x65\162\x6d\x2f{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\164\151\164\154\x65" => $ymqmyyeuycgmigyo, "\x74\x61\x78\157\156\x6f\155\x79" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto kmokokcqewwcwyws;
            gmmeasywcygwkugq:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto eiumaaaqmcqiuqgs;
            cwcwemecykowqwui:
        }
        goto ackamyewsisqcmia;
        sesyqeyukqeuwckk:
        if ($aokagokqyuysuksm) {
            goto yiemweuwugqwcooa;
        }
        goto cyyaquqmmceukggi;
        scmoqmqikogqcuew:
        yiemweuwugqwcooa:
        goto iuiuisqqeosykycg;
        mkeogqemimomcgsm:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cumykwakewgamugu;
        guqgkmaoggceoumc:
        sacesysuwmcykeuo:
        goto mkeogqemimomcgsm;
        usimgkkmqgmqiqug:
        if (!$kesssewsiegssiya) {
            goto sacesysuwmcykeuo;
        }
        goto sesyqeyukqeuwckk;
        cyyaquqmmceukggi:
        $ggauoeuaesiymgee = ["\156\x61\155\145\137\x5f\154\x69\153\x65" => $qwcmueausqgiwigy, "\x68\151\x64\145\x5f\145\x6d\160\164\x79" => 0, "\x6e\165\155\142\x65\x72" => ''];
        goto ogyiiuogeeaywkic;
        giqwqyiaiemgguye:
        asmiwssgmoaaoswm:
        goto saikcqqkyoeikuyo;
        saikcqqkyoeikuyo:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto acgausemsusqaeas;
        ycisoqiyiiyqqwwm:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto uyowaccwwyusqkuc;
        iuiuisqqeosykycg:
        $ggauoeuaesiymgee = ["\x69\x6e\143\154\x75\x64\145" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\150\x69\x64\145\137\x65\155\160\164\x79" => 0];
        goto giqwqyiaiemgguye;
        uyowaccwwyusqkuc:
        $qeiakyocuggicwsy = [];
        goto usimgkkmqgmqiqug;
        ackamyewsisqcmia:
        akcksasayaumouky:
        goto guqgkmaoggceoumc;
        ogyiiuogeeaywkic:
        goto asmiwssgmoaaoswm;
        goto scmoqmqikogqcuew;
        cumykwakewgamugu:
    }
    public function memuukwsmoyqusua()
    {
        goto sewcwygikycqyqmu;
        gocmieowkqeqwcks:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\151\156\x63\154\165\x64\145" => $aokagokqyuysuksm]);
        goto ucaocaceeuqiggso;
        simsoqkqsiqmwsaa:
        goto giyaooswwsuyuema;
        goto saekawmmwcmsyyaq;
        gacweccyqemocmky:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto gwqyuyucgguaisyg;
        iwaausiukycagkau:
        oieimyigeaywmmco:
        goto eqakckaqmkweciao;
        saekawmmwcmsyyaq:
        ecsskqmyqyuamyym:
        goto gocmieowkqeqwcks;
        ucaocaceeuqiggso:
        giyaooswwsuyuema:
        goto qqaecgmomioggcyu;
        sewcwygikycqyqmu:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto qakaoeiwgeuckeka;
        gwqyuyucgguaisyg:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\157\154\145" => $uagwmwoawiwkycao, "\163\145\141\162\x63\x68" => "\52{$qwcmueausqgiwigy}\x2a", "\163\145\x61\162\x63\150\137\143\x6f\x6c\165\x6d\156\x73" => ["\x75\x73\x65\x72\x5f\x75\162\154", "\x75\x73\145\162\x5f\154\x6f\x67\151\x6e", "\165\163\145\x72\137\145\155\x61\x69\154", "\x64\151\x73\x70\x6c\x61\171\137\x6e\141\x6d\x65", "\x75\163\x65\162\x5f\156\151\143\x65\156\141\155\x65"], "\155\x65\x74\141\137\161\x75\x65\162\171" => ["\x72\145\154\x61\164\x69\x6f\156" => "\117\x52", ["\x6b\145\x79" => "\146\x69\162\163\164\x5f\156\x61\155\x65", "\166\141\x6c\165\145" => $qwcmueausqgiwigy, "\x63\x6f\x6d\160\141\162\145" => "\x4c\x49\x4b\x45"], ["\153\x65\171" => "\154\x61\163\164\137\x6e\x61\x6d\x65", "\x76\141\x6c\165\145" => $qwcmueausqgiwigy, "\x63\157\x6d\160\141\162\145" => "\114\111\113\x45"]]]));
        goto simsoqkqsiqmwsaa;
        qakaoeiwgeuckeka:
        $qeiakyocuggicwsy = [];
        goto qyowkusecoyawauc;
        qqaecgmomioggcyu:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto syekaumywgekyoca;
            qwaqsogsaaegoiko:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto wwkekusquqscgmsm;
            ucoeooiewkkwwyuy:
            wwwcacoscyqesksm:
            goto iuwaekscacmamkeu;
            wwkekusquqscgmsm:
            $gskuwmeemyeuwogc = '';
            goto ooiysqkgmiqmkgeq;
            wimcauwoukmwgcwc:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto qwaqsogsaaegoiko;
            ooiysqkgmiqmkgeq:
            if (!$qmwikaeuqeyuaoiy) {
                goto cmqkuqqmciawcqaq;
            }
            goto ismooqwiqgmegcue;
            gyayocggoaickkqq:
            sgcuekgueuimciki:
            goto ucoeooiewkkwwyuy;
            akqwmskmmcamuwkm:
            cmqkuqqmciawcqaq:
            goto cqsiewasswyayuyk;
            ismooqwiqgmegcue:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\165\x73\x65\x72\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\x6e\x61\155\145" => sprintf(__("\x4e\x61\155\x65\72\40\45\163", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\155\141\x69\x6c" => sprintf(__("\x45\155\141\x69\154\x3a\40\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\162\x6f\x6c\x65\163" => sprintf(__("\x52\157\x6c\145\163\x3a\x20\x25\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\163\145\x72\x6e\141\155\x65" => sprintf(__("\x55\x73\x65\x72\156\x61\155\x65\72\40\45\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto akqwmskmmcamuwkm;
            cqsiewasswyayuyk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto gyayocggoaickkqq;
            syekaumywgekyoca:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto sgcuekgueuimciki;
            }
            goto wimcauwoukmwgcwc;
            iuwaekscacmamkeu:
        }
        goto iwaausiukycagkau;
        eqakckaqmkweciao:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto oagkkuowwccmeaoc;
        qyowkusecoyawauc:
        if ($aokagokqyuysuksm) {
            goto ecsskqmyqyuamyym;
        }
        goto gacweccyqemocmky;
        oagkkuowwccmeaoc:
    }
    public function waoeigwigksoikgu()
    {
        goto yosaemoyeeiykeai;
        cwwusaokqsuisggk:
        goto ksqaeuyiiiuuouoi;
        goto osiqkqkuswkomaui;
        saoqimsoqwweysso:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x65\x61\162\x63\150" => $qwcmueausqgiwigy]));
        goto cwwusaokqsuisggk;
        omoiwieaiucgikse:
        oekessmycksmemam:
        goto ekeiwcgqeikqiyks;
        ekeiwcgqeikqiyks:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto ioawiemsmsyyssyu;
            mcqegwkqsoygamey:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto csgcicsyauawamqw;
            cqcskimegccygqym:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto eoasqcamsowcwweq;
            csgcicsyauawamqw:
            $gskuwmeemyeuwogc = '';
            goto uyeqsmcyogggskye;
            iayicqkseeycaaqk:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto mcqegwkqsoygamey;
            eoasqcamsowcwweq:
            ayayswaesiscymcw:
            goto osysmqqcyasqyscm;
            cayayuqimskqkayc:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x63\x6f\x6d\155\145\x6e\x74\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\164\x69\x74\154\x65" => $pkyyagewkiyckmwy, "\164\141\170\157\156\157\155\171" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto qgcicekcucaauaka;
            uyeqsmcyogggskye:
            if (!$qmwikaeuqeyuaoiy) {
                goto ewucaygocgykeweg;
            }
            goto cayayuqimskqkayc;
            osysmqqcyasqyscm:
            kmccaesicogsgcmk:
            goto aoooaekesimaisms;
            qgcicekcucaauaka:
            ewucaygocgykeweg:
            goto cqcskimegccygqym;
            ioawiemsmsyyssyu:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto ayayswaesiscymcw;
            }
            goto iayicqkseeycaaqk;
            aoooaekesimaisms:
        }
        goto aqwugymawgissagm;
        cscgqokcugoeacek:
        ksqaeuyiiiuuouoi:
        goto quysmmuogiamswey;
        ykmkawakkqkuuaym:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\x6f\155\x6d\x65\x6e\164\137\x5f\x69\156" => $aokagokqyuysuksm]));
        goto omoiwieaiucgikse;
        sescoamicygaiooy:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto cscgqokcugoeacek;
        yosaemoyeeiykeai:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto mywoocikqmgcqsog;
        mywoocikqmgcqsog:
        $qeiakyocuggicwsy = [];
        goto swekqaeccossoigy;
        wgmwswuwumgsyomo:
        oqsykugcsggakmoy:
        goto ykmkawakkqkuuaym;
        aqwugymawgissagm:
        gwaiikaaqgaoigay:
        goto gayuaogckqsomgsy;
        quysmmuogiamswey:
        goto oekessmycksmemam;
        goto wgmwswuwumgsyomo;
        osiqkqkuswkomaui:
        wymmeymakykomoeg:
        goto sescoamicygaiooy;
        swekqaeccossoigy:
        $ywmkwiwkosakssii["\163\164\x61\x74\165\163"] = "\x61\160\160\162\x6f\x76\145";
        goto omommciksgmosmku;
        kyqsamceokgyseks:
        if ($post) {
            goto wymmeymakykomoeg;
        }
        goto saoqimsoqwweysso;
        omommciksgmosmku:
        if ($aokagokqyuysuksm) {
            goto oqsykugcsggakmoy;
        }
        goto kyqsamceokgyseks;
        gayuaogckqsomgsy:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cuyoyqcisqywkqaa;
        cuyoyqcisqywkqaa:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto gcwcoaasoisikiis;
        umqcguqgqygqossy:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\155\x61\x72\x6b\165\x70", false);
        goto kciusguyocmsuaeu;
        cymiymiigkyegwqq:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\145\x61\162\x63\150", false);
        goto umqcguqgqygqossy;
        kciusguyocmsuaeu:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\145\x6d\x70\x6c\x61\x74\x65\137\x74\171\x70\145", "\151\156\x64\x65\170");
        goto eiqaaeeseksuaoso;
        gcmeeeyemkqeacws:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto jsageqqwqkykweig;
        agsmckaiamicsmku:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\x69\164\145\155\163", null);
        goto cymiymiigkyegwqq;
        ikcmyyecwuoacqyg:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\141\162\147\163", "\x7b\x7d");
        goto agsmckaiamicsmku;
        ekywgoqskwiummes:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto iuueumuwsooouiao;
        }
        goto qacikuseouqsqmwq;
        eiqaaeeseksuaoso:
        if (!is_string($ywmkwiwkosakssii)) {
            goto cwoocwkqsoosaqkm;
        }
        goto akkyiomimkeoskos;
        qacikuseouqsqmwq:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto sgwymesyqucmwwkw;
        oiwgeqquqqoougyk:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto ikcmyyecwuoacqyg;
        gcwcoaasoisikiis:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto oiwgeqquqqoougyk;
        akkyiomimkeoskos:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto cuqiuaqqmiwysuss;
        meywqiioyoucokow:
        ioagaggwicqesuyq:
        goto gcmeeeyemkqeacws;
        sgwymesyqucmwwkw:
        iuueumuwsooouiao:
        goto meywqiioyoucokow;
        cuqiuaqqmiwysuss:
        cwoocwkqsoosaqkm:
        goto symooqoecgcicomq;
        symooqoecgcicomq:
        if (!$kmiooagcykmqaiac) {
            goto ioagaggwicqesuyq;
        }
        goto ekywgoqskwiummes;
        jsageqqwqkykweig:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\x64\141\164\x61" => ["\143\157\x6e\164\145\156\x74" => $ewgwqamkygiqaawc], "\164\145\170\x74" => $cmwygeyygwqaemaq, "\x76\x61\x6c\x75\145" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto weyeyookuqayoakq;
        mogeeqsawaqyeaaa:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto qosuyiciqgmakegs;
        weyeyookuqayoakq:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\141\147\145", 1));
        goto mogeeqsawaqyeaaa;
        ysukiaoekgcswucm:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto ycsockioamocssqc;
        mcgskyeeqqsyswam:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aiecqsmqwwceuigs;
        ycsockioamocssqc:
        $keccaugmemegoimu = ["\162\145\x73\165\154\x74\x73" => $qeiakyocuggicwsy, "\x6d\157\x72\145\x5f\162\145\x73\165\x6c\x74\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto mcgskyeeqqsyswam;
        qosuyiciqgmakegs:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ysukiaoekgcswucm;
        aiecqsmqwwceuigs:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto aogemgkeckkmuyus;
        qmwcqkmogmmseeaa:
        oyogcgssysygmeam:
        goto imycaqewmusocike;
        imycaqewmusocike:
        yugiaygagouuesgo:
        goto yoowqwwqgyoqusam;
        aogemgkeckkmuyus:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\x70\x72\145\146\145\162", "\x49\x44");
        goto iugkiwiucuaueycm;
        yoowqwwqgyoqusam:
        return $eqgoocgaqwqcimie;
        goto qccqwqewgsuaassw;
        gagmssewkqoakmic:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\165\x72\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto yugiaygagouuesgo;
            case "\164\151\164\x6c\145":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto yugiaygagouuesgo;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto yugiaygagouuesgo;
        }
        goto qmwcqkmogmmseeaa;
        iugkiwiucuaueycm:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\x49\x44";
        goto gagmssewkqoakmic;
        qccqwqewgsuaassw:
    }
}
