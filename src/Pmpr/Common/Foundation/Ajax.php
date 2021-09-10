<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\144", "\164\151\x74\x6c\x65", "\x75\x72\x6c"];
    const ADMIN_GET_ = "\141\144\155\x69\x6e\x5f\x67\x65\164\x5f";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\x63\157\156\x73";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\160\157\163\164\163";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\x74\145\x72\x6d\x73";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\165\163\x65\x72\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\155\x6f\x64\x65\x6c\x73";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\x63\x6f\x6d\x6d\x65\x6e\x74\x73";
    const ADMIN_ADD_NEW_TERM_ACTION = "\141\144\x6d\151\x6e\x5f\x61\144\x64\x5f\156\x65\167\137\164\x65\x72\x6d";
    const FRONT_GET_NONCE_ACTION = "\146\x72\157\x6e\x74\x5f\147\145\x74\x5f\156\x6f\x6e\x63\x65";
    const FRONT_ACTIONS = ["\147\x65\164\x5f\x6e\x6f\x6e\143\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\x64\144\137\164\x65\162\155" => self::ADMIN_ADD_NEW_TERM_ACTION, "\x67\145\164\x5f\x69\x63\157\x6e\163" => self::ADMIN_GET_ICONS_ACTION, "\147\x65\x74\137\x70\157\163\x74\x73" => self::ADMIN_GET_POSTS_ACTION, "\x67\145\164\x5f\x74\x65\162\155\x73" => self::ADMIN_GET_TERMS_ACTION, "\147\145\x74\137\x75\x73\145\x72\x73" => self::ADMIN_GET_USERS_ACTION, "\147\x65\x74\x5f\155\157\x64\145\154\x73" => self::ADMIN_GET_MODELS_ACTION, "\147\145\x74\137\x63\157\155\155\145\x6e\x74\x73" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x65\x6e\161\165\145\x75\145"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\147\x67\x73\x75\x65\171\x75\x79\161\145\161\145\165\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\151\171\163\x73\x67\157\151\167\147\167\x79\147\x65\141\143\x67"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\x6b\x77\141\147\x6b\x65\155\147\x61\x77\x75\157\x61\x63\x77\x79"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\x77\x65\x65\163\x63\x77\167\x67\x71\x67\151\171\165\x6d\171\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\x6d\145\155\165\165\x6b\x77\x73\x6d\x6f\x79\x71\165\x73\x75\141"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\165\x79\x69\x77\147\155\145\x71\x6d\157\143\147\171\x71\x67\153"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\x77\x61\157\x65\151\147\167\x69\x67\153\x73\157\151\x6b\147\165"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\x6f\x73\145\x79\171\x75\165\171\165\x6b\x63\167\151\143\x61\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\141\x6a\x61\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\x6a\141\x78", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto qomigguamoeqekky;
        saiwskyicecogocg:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto gyiiogoieoicewae;
        mmmyemwwkkmsomoq:
        if (is_array($sogksuscggsicmac)) {
            goto caykmykgamymycgk;
        }
        goto akakuqyqwwuquiia;
        ysemiouayuuqimyg:
        kyuseiceyycyoqiy:
        goto yqssyeyuimcmauao;
        immogeiuaiqwkcgy:
        $sogksuscggsicmac = ["\x69\164\x65\155" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\x6c\145\143\x74" => $iiueagsqmqqkiiwm];
        goto kegoyegkioysaaai;
        gyiiogoieoicewae:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto uauggckimussuumk;
        kgeyoegiqceocosu:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto ykseokcqemaqqyae;
        cukuyoqwmyggamgu:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto immogeiuaiqwkcgy;
        acqkeymqakmcumko:
        $occymigcemkqucuw = true;
        goto cysugoacwakoqwiu;
        yowqeciqwemaysog:
        kmcccsgokysskgqg:
        goto kgeyoegiqceocosu;
        yucyeouoieoqgqos:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto saiwskyicecogocg;
        kegoyegkioysaaai:
        keqaggeoasegyigg:
        goto yowqeciqwemaysog;
        akakuqyqwwuquiia:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\160\x73\41\40\x53\157\x6d\145\164\150\x69\156\147\40\151\x73\x20\x77\x72\x6f\x6e\x67\56\x20\x41\162\145\40\x79\x6f\165\40\x74\x72\171\x20\x74\x6f\40\x61\144\144\x20\145\x78\151\x73\164\40\x76\141\154\165\x65\77\x21", PR__CMN__FOUNDATION), "\x65\162\x72\157\162");
        goto dgawqiokqseygyqe;
        dgawqiokqseygyqe:
        goto keqaggeoasegyigg;
        goto kksgsgiywgosikqa;
        kksgsgiywgosikqa:
        caykmykgamymycgk:
        goto acqkeymqakmcumko;
        yqssyeyuimcmauao:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\x70\x61\x72\145\156\x74" => ManipulateArray::get($icwicymcioeyeyek, "\x70\141\x72\x65\156\x74", -1)]);
        goto mmmyemwwkkmsomoq;
        gkggmkmswikmmmki:
        $occymigcemkqucuw = false;
        goto yucyeouoieoqgqos;
        uowyqyiqscmccsei:
        goto kmcccsgokysskgqg;
        goto ysemiouayuuqimyg;
        uauggckimussuumk:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto kyuseiceyycyoqiy;
        }
        goto emgwikaikyywkmwm;
        emgwikaikyywkmwm:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\x70\x73\41\40\x53\x6f\x6d\x65\x74\x68\151\x6e\x67\40\x69\163\40\167\x72\x6f\156\x67\x2e\x20\101\x72\x65\40\171\x6f\x75\40\x68\141\x63\153\x69\156\x67\x3f\41\40\x3a\50", PR__CMN__FOUNDATION), "\x65\x72\x72\x6f\x72");
        goto uowyqyiqscmccsei;
        qomigguamoeqekky:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto gkggmkmswikmmmki;
        cysugoacwakoqwiu:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto cukuyoqwmyggamgu;
        ykseokcqemaqqyae:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto eyymwewkeseeaggc;
        eyymwewkeseeaggc:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\x61\155\x65", self::AJAX_NONCE_KEY);
        goto ikiqwekimqmyuuis;
        ikiqwekimqmyuuis:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\143\164\151\157\156", self::AJAX_NONCE);
        goto aaiwsiciesymiaok;
        sskkqugewogogagg:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto oekqegamyyuuqcoy;
        aaiwsiciesymiaok:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto sskkqugewogogagg;
        oekqegamyyuuqcoy:
    }
    public function kwagkemgawuoacwy()
    {
        goto goaqoeqygekuaywo;
        akcygikyemoocswm:
        goto kqgsykaimimimyae;
        goto segwckgisqwkowcc;
        uosiwiemuswkisyq:
        kamgygkuikoaigyw:
        goto iissqgqwyqmmqugg;
        wsogoeqsmeucowak:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto ooggyokmmcmwygwk;
        mkaiiiimcywymqgk:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto qqoyaewmawgkcmqo;
        sigumeougskmckcy:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto akcygikyemoocswm;
        ooggyokmmcmwygwk:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto mgukweouugammoui;
            wakyowemmceeeqiy:
            if (!$eqgoocgaqwqcimie) {
                goto iiomwaiuuemuygkq;
            }
            goto qscwycyimmeagyim;
            mgukweouugammoui:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto wakyowemmceeeqiy;
            akysqyaywkiwwoog:
            iiomwaiuuemuygkq:
            goto moykkkgogaygokus;
            qscwycyimmeagyim:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto wsqoesokcweweiga;
            moykkkgogaygokus:
            cmaoqqqqaqwqsaii:
            goto wuiciowuskgmysck;
            wsqoesokcweweiga:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto akysqyaywkiwwoog;
            wuiciowuskgmysck:
        }
        goto uswycqewimcuqmua;
        sumqgcmuacwikauo:
        if ($aokagokqyuysuksm) {
            goto asgouseqowywicmy;
        }
        goto sigsaocukiawcgqe;
        sigsaocukiawcgqe:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto owswawakaekmsckk;
        owswawakaekmsckk:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\134\x62{$qwcmueausqgiwigy}\134\x62\57\x69", $gygawogosumsgmme);
        });
        goto sigumeougskmckcy;
        uswycqewimcuqmua:
        cuyskuymgaukqaey:
        goto uosiwiemuswkisyq;
        keaoumygogemaeek:
        $ykiyyumywksqcisg = [];
        goto osyceoeiwaucwgci;
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
        yuauuacmomcmgggi:
        ggskywuesswiqwqw:
        goto keaoumygogemaeek;
        segwckgisqwkowcc:
        asgouseqowywicmy:
        goto uiskasyyiewuwmmk;
        iswssqmsymsiqygm:
        $wmgwaquemmoicmas = [];
        goto giiymwkcouoegqgo;
        yckuogqwcayqumoq:
        kqgsykaimimimyae:
        goto uaqsosmwikwoqioa;
        sqsggomiyygwoumi:
        cakayowsqeqayweo:
        goto yckuogqwcayqumoq;
        igumwqkcasocmuui:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto iswssqmsymsiqygm;
        iissqgqwyqmmqugg:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto woemukewigiwuyis;
        osyceoeiwaucwgci:
        $sogksuscggsicmac = [];
        goto sumqgcmuacwikauo;
        goaqoeqygekuaywo:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto igumwqkcasocmuui;
        uaqsosmwikwoqioa:
        if (!$ykiyyumywksqcisg) {
            goto kamgygkuikoaigyw;
        }
        goto wsogoeqsmeucowak;
        uiskasyyiewuwmmk:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto cakayowsqeqayweo;
        }
        goto mkaiiiimcywymqgk;
        qqoyaewmawgkcmqo:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto sqsggomiyygwoumi;
        woemukewigiwuyis:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto ueoywqkaiwqoeakw;
        weqkywkusswmawim:
        iaouysocayacmusu:
        goto icccqacuqseakkew;
        mscqweuqwsqywggy:
        ogoaaswoyusgsycg:
        goto umasciaeyewkkuuw;
        okaacoqueimcowme:
        qqewqsyyogoieaqc:
        goto saigyoyoqauaqsuu;
        oqikoeeugogqkaim:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto okaacoqueimcowme;
        yqucaaqoyswiskeg:
        ymkmgwqugkeoeyas:
        goto aossaeoauaeuoywc;
        aossaeoauaeuoywc:
        if (!($oammesyieqmwuwyi == "\141\x74\164\141\143\150\x6d\145\156\164" || is_array($oammesyieqmwuwyi) && in_array("\x61\164\164\141\x63\x68\155\x65\156\x74", $oammesyieqmwuwyi))) {
            goto iaouysocayacmusu;
        }
        goto ieggkeomcusisuoo;
        seemkiyosiscigms:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\137\x70\x6f\x73\164\163\137\141\x72\x67\x73"), $ywmkwiwkosakssii);
        goto oqikoeeugogqkaim;
        ckuegykmyekmewco:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto yqucaaqoyswiskeg;
        uemuasgumguyeaye:
        goto qqewqsyyogoieaqc;
        goto mscqweuqwsqywggy;
        wywcgacaomkaesmw:
        keygmsycouauqmqc:
        goto sycmikycociqswka;
        sycmikycociqswka:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto ymoaemsamquwomcs;
        yoqkmcigwewgykya:
        $qeiakyocuggicwsy = [];
        goto smekigasqcyykywe;
        gmyoyegggggmymes:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\160\157\163\164\163\x5f\141\x72\x67\x73"), $ywmkwiwkosakssii);
        goto ooqymioycsgcoqiy;
        ooqymioycsgcoqiy:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto uemuasgumguyeaye;
        umasciaeyewkkuuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\x73\x74\x5f\x73\x74\x61\164\165\x73" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto seemkiyosiscigms;
        yaaggqiuogwiyeia:
        $qisccquumwewokoy = ["\x70\x75\142\154\151\163\150"];
        goto yoqkmcigwewgykya;
        saigyoyoqauaqsuu:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto kuuickoqgquuqwci;
            qgkuoayqesmgmcmq:
            mygwgowqguameswo:
            goto iggkoiikmckimmmw;
            uwkaosmauksiukco:
            kgyiqgaemwaqwome:
            goto qgkuoayqesmgmcmq;
            myouqgwqoegsyseg:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\160\157\163\164\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\x64\141\164\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\x69\x74\x6c\x65" => ManipulatePost::qcgakseyaikigqco($post), "\141\165\164\150\x6f\x72" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\x68\x61\x73\137\151\x6d\141\x67\145" => ManipulateArray::get($ywmkwiwkosakssii, "\150\141\163\x5f\x69\x6d\x61\x67\145", false), "\160\x6f\163\x74\137\164\x79\160\145" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto ygkwwkuaqoemuaqq;
            kuuickoqgquuqwci:
            if (!$post instanceof WP_Post) {
                goto kgyiqgaemwaqwome;
            }
            goto akwkqauksyquwkqc;
            ygkwwkuaqoemuaqq:
            cciyuigcccggekmc:
            goto uqyqsmgeeiyiaqck;
            uqyqsmgeeiyiaqck:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto uwkaosmauksiukco;
            akwkqauksyquwkqc:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto wqyiquqemcueoogs;
            wqyiquqemcueoogs:
            $gskuwmeemyeuwogc = '';
            goto omoomgsaackaseqm;
            omoomgsaackaseqm:
            if (!$qmwikaeuqeyuaoiy) {
                goto cciyuigcccggekmc;
            }
            goto myouqgwqoegsyseg;
            iggkoiikmckimmmw:
        }
        goto wywcgacaomkaesmw;
        wyisakyowacouyqk:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\164\137\x73\164\141\x74\165\x73" => $qisccquumwewokoy]);
        goto gmyoyegggggmymes;
        smekigasqcyykywe:
        if ($oammesyieqmwuwyi) {
            goto ymkmgwqugkeoeyas;
        }
        goto ckuegykmyekmewco;
        ieggkeomcusisuoo:
        $qisccquumwewokoy[] = "\151\156\x68\x65\x72\x69\164";
        goto weqkywkusswmawim;
        ueoywqkaiwqoeakw:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto yaaggqiuogwiyeia;
        icccqacuqseakkew:
        if ($aokagokqyuysuksm) {
            goto ogoaaswoyusgsycg;
        }
        goto wyisakyowacouyqk;
        ymoaemsamquwomcs:
    }
    public function weescwwgqgiyumyw()
    {
        goto ycisoqiyiiyqqwwm;
        scmoqmqikogqcuew:
        yiemweuwugqwcooa:
        goto iuiuisqqeosykycg;
        usimgkkmqgmqiqug:
        if (!$kesssewsiegssiya) {
            goto sacesysuwmcykeuo;
        }
        goto sesyqeyukqeuwckk;
        cyyaquqmmceukggi:
        $ggauoeuaesiymgee = ["\x6e\141\155\x65\137\x5f\x6c\151\153\x65" => $qwcmueausqgiwigy, "\150\x69\144\145\137\x65\x6d\x70\164\x79" => 0, "\156\x75\155\x62\145\x72" => ''];
        goto ogyiiuogeeaywkic;
        sesyqeyukqeuwckk:
        if ($aokagokqyuysuksm) {
            goto yiemweuwugqwcooa;
        }
        goto cyyaquqmmceukggi;
        ycisoqiyiiyqqwwm:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto uyowaccwwyusqkuc;
        saikcqqkyoeikuyo:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto acgausemsusqaeas;
        ackamyewsisqcmia:
        akcksasayaumouky:
        goto guqgkmaoggceoumc;
        uyowaccwwyusqkuc:
        $qeiakyocuggicwsy = [];
        goto usimgkkmqgmqiqug;
        guqgkmaoggceoumc:
        sacesysuwmcykeuo:
        goto mkeogqemimomcgsm;
        giqwqyiaiemgguye:
        asmiwssgmoaaoswm:
        goto saikcqqkyoeikuyo;
        acgausemsusqaeas:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto qmgcgicaaqquoicw;
            qmgcgicaaqquoicw:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto uwkammcmgokwweew;
            }
            goto yaiiekwggusgygac;
            gkcakkuoeioaieee:
            qswoscmyiawaeaek:
            goto cwcwemecykowqwui;
            wsymmqucieigkeac:
            if (!$qmwikaeuqeyuaoiy) {
                goto uackuyqecwisyieg;
            }
            goto yciwiygwyqaeoqwo;
            yaiiekwggusgygac:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto gmmeasywcygwkugq;
            kmokokcqewwcwyws:
            uackuyqecwisyieg:
            goto mwqsmcweqikkcksk;
            eiumaaaqmcqiuqgs:
            $gskuwmeemyeuwogc = '';
            goto wsymmqucieigkeac;
            yciwiygwyqaeoqwo:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\164\x65\162\x6d\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\x74\151\x74\x6c\145" => $ymqmyyeuycgmigyo, "\x74\x61\170\x6f\x6e\157\155\171" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto kmokokcqewwcwyws;
            gmmeasywcygwkugq:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto eiumaaaqmcqiuqgs;
            cqgwyoacewoaecik:
            uwkammcmgokwweew:
            goto gkcakkuoeioaieee;
            mwqsmcweqikkcksk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto cqgwyoacewoaecik;
            cwcwemecykowqwui:
        }
        goto ackamyewsisqcmia;
        mkeogqemimomcgsm:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cumykwakewgamugu;
        ogyiiuogeeaywkic:
        goto asmiwssgmoaaoswm;
        goto scmoqmqikogqcuew;
        iuiuisqqeosykycg:
        $ggauoeuaesiymgee = ["\x69\156\143\x6c\165\x64\145" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\150\x69\x64\x65\137\145\155\160\x74\171" => 0];
        goto giqwqyiaiemgguye;
        cumykwakewgamugu:
    }
    public function memuukwsmoyqusua()
    {
        goto sewcwygikycqyqmu;
        sewcwygikycqyqmu:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto qakaoeiwgeuckeka;
        qqaecgmomioggcyu:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto syekaumywgekyoca;
            akqwmskmmcamuwkm:
            cmqkuqqmciawcqaq:
            goto cqsiewasswyayuyk;
            wwkekusquqscgmsm:
            $gskuwmeemyeuwogc = '';
            goto ooiysqkgmiqmkgeq;
            ooiysqkgmiqmkgeq:
            if (!$qmwikaeuqeyuaoiy) {
                goto cmqkuqqmciawcqaq;
            }
            goto ismooqwiqgmegcue;
            qwaqsogsaaegoiko:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto wwkekusquqscgmsm;
            wimcauwoukmwgcwc:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto qwaqsogsaaegoiko;
            ismooqwiqgmegcue:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x75\163\x65\x72\57{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\156\x61\155\145" => sprintf(__("\116\x61\x6d\145\x3a\x20\45\163", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\145\x6d\141\x69\x6c" => sprintf(__("\x45\x6d\141\x69\154\x3a\40\x25\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\162\x6f\154\x65\x73" => sprintf(__("\x52\x6f\x6c\145\163\x3a\40\x25\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\x73\x65\x72\x6e\141\155\145" => sprintf(__("\x55\163\145\162\156\x61\x6d\145\72\40\x25\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto akqwmskmmcamuwkm;
            gyayocggoaickkqq:
            sgcuekgueuimciki:
            goto ucoeooiewkkwwyuy;
            syekaumywgekyoca:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto sgcuekgueuimciki;
            }
            goto wimcauwoukmwgcwc;
            cqsiewasswyayuyk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto gyayocggoaickkqq;
            ucoeooiewkkwwyuy:
            wwwcacoscyqesksm:
            goto iuwaekscacmamkeu;
            iuwaekscacmamkeu:
        }
        goto iwaausiukycagkau;
        gocmieowkqeqwcks:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\151\x6e\143\154\165\x64\145" => $aokagokqyuysuksm]);
        goto ucaocaceeuqiggso;
        qakaoeiwgeuckeka:
        $qeiakyocuggicwsy = [];
        goto qyowkusecoyawauc;
        eqakckaqmkweciao:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto oagkkuowwccmeaoc;
        gwqyuyucgguaisyg:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\157\154\x65" => $uagwmwoawiwkycao, "\x73\x65\141\x72\x63\x68" => "\52{$qwcmueausqgiwigy}\x2a", "\163\145\x61\x72\x63\x68\x5f\x63\157\154\x75\155\x6e\163" => ["\165\x73\145\x72\137\x75\162\x6c", "\165\x73\x65\x72\x5f\154\157\x67\x69\x6e", "\x75\163\145\162\x5f\x65\155\x61\x69\x6c", "\144\x69\163\160\x6c\141\x79\137\156\141\155\145", "\165\x73\x65\x72\137\156\x69\143\145\x6e\x61\x6d\145"], "\155\x65\164\141\x5f\161\x75\145\x72\x79" => ["\x72\x65\154\141\x74\x69\x6f\x6e" => "\x4f\x52", ["\x6b\x65\x79" => "\x66\151\162\163\x74\137\156\x61\x6d\x65", "\x76\x61\x6c\x75\145" => $qwcmueausqgiwigy, "\143\x6f\x6d\160\141\162\x65" => "\114\x49\x4b\x45"], ["\x6b\145\171" => "\154\x61\x73\164\137\156\141\x6d\145", "\166\141\x6c\165\145" => $qwcmueausqgiwigy, "\143\x6f\x6d\160\141\x72\145" => "\114\x49\113\x45"]]]));
        goto simsoqkqsiqmwsaa;
        simsoqkqsiqmwsaa:
        goto giyaooswwsuyuema;
        goto saekawmmwcmsyyaq;
        qyowkusecoyawauc:
        if ($aokagokqyuysuksm) {
            goto ecsskqmyqyuamyym;
        }
        goto gacweccyqemocmky;
        iwaausiukycagkau:
        oieimyigeaywmmco:
        goto eqakckaqmkweciao;
        ucaocaceeuqiggso:
        giyaooswwsuyuema:
        goto qqaecgmomioggcyu;
        saekawmmwcmsyyaq:
        ecsskqmyqyuamyym:
        goto gocmieowkqeqwcks;
        gacweccyqemocmky:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto gwqyuyucgguaisyg;
        oagkkuowwccmeaoc:
    }
    public function waoeigwigksoikgu()
    {
        goto yosaemoyeeiykeai;
        swekqaeccossoigy:
        $ywmkwiwkosakssii["\x73\164\x61\x74\x75\x73"] = "\141\x70\x70\x72\157\x76\x65";
        goto omommciksgmosmku;
        sescoamicygaiooy:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto cscgqokcugoeacek;
        omoiwieaiucgikse:
        oekessmycksmemam:
        goto ekeiwcgqeikqiyks;
        ykmkawakkqkuuaym:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\x6f\x6d\155\x65\x6e\x74\137\x5f\151\x6e" => $aokagokqyuysuksm]));
        goto omoiwieaiucgikse;
        cwwusaokqsuisggk:
        goto ksqaeuyiiiuuouoi;
        goto osiqkqkuswkomaui;
        wgmwswuwumgsyomo:
        oqsykugcsggakmoy:
        goto ykmkawakkqkuuaym;
        omommciksgmosmku:
        if ($aokagokqyuysuksm) {
            goto oqsykugcsggakmoy;
        }
        goto kyqsamceokgyseks;
        aqwugymawgissagm:
        gwaiikaaqgaoigay:
        goto gayuaogckqsomgsy;
        cscgqokcugoeacek:
        ksqaeuyiiiuuouoi:
        goto quysmmuogiamswey;
        mywoocikqmgcqsog:
        $qeiakyocuggicwsy = [];
        goto swekqaeccossoigy;
        quysmmuogiamswey:
        goto oekessmycksmemam;
        goto wgmwswuwumgsyomo;
        osiqkqkuswkomaui:
        wymmeymakykomoeg:
        goto sescoamicygaiooy;
        saoqimsoqwweysso:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\145\141\x72\x63\x68" => $qwcmueausqgiwigy]));
        goto cwwusaokqsuisggk;
        ekeiwcgqeikqiyks:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto ioawiemsmsyyssyu;
            cayayuqimskqkayc:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\143\x6f\x6d\155\145\x6e\x74\x2f{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\164\x69\164\154\145" => $pkyyagewkiyckmwy, "\x74\141\170\x6f\156\x6f\x6d\x79" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto qgcicekcucaauaka;
            csgcicsyauawamqw:
            $gskuwmeemyeuwogc = '';
            goto uyeqsmcyogggskye;
            qgcicekcucaauaka:
            ewucaygocgykeweg:
            goto cqcskimegccygqym;
            iayicqkseeycaaqk:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto mcqegwkqsoygamey;
            uyeqsmcyogggskye:
            if (!$qmwikaeuqeyuaoiy) {
                goto ewucaygocgykeweg;
            }
            goto cayayuqimskqkayc;
            mcqegwkqsoygamey:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto csgcicsyauawamqw;
            ioawiemsmsyyssyu:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto ayayswaesiscymcw;
            }
            goto iayicqkseeycaaqk;
            eoasqcamsowcwweq:
            ayayswaesiscymcw:
            goto osysmqqcyasqyscm;
            osysmqqcyasqyscm:
            kmccaesicogsgcmk:
            goto aoooaekesimaisms;
            cqcskimegccygqym:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto eoasqcamsowcwweq;
            aoooaekesimaisms:
        }
        goto aqwugymawgissagm;
        kyqsamceokgyseks:
        if ($post) {
            goto wymmeymakykomoeg;
        }
        goto saoqimsoqwweysso;
        yosaemoyeeiykeai:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto mywoocikqmgcqsog;
        gayuaogckqsomgsy:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cuyoyqcisqywkqaa;
        cuyoyqcisqywkqaa:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto gcwcoaasoisikiis;
        meywqiioyoucokow:
        ioagaggwicqesuyq:
        goto gcmeeeyemkqeacws;
        ikcmyyecwuoacqyg:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\141\162\147\x73", "\x7b\x7d");
        goto agsmckaiamicsmku;
        kciusguyocmsuaeu:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\x65\x6d\160\154\141\164\145\x5f\x74\171\160\145", "\151\x6e\x64\145\x78");
        goto eiqaaeeseksuaoso;
        symooqoecgcicomq:
        if (!$kmiooagcykmqaiac) {
            goto ioagaggwicqesuyq;
        }
        goto ekywgoqskwiummes;
        gcmeeeyemkqeacws:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto jsageqqwqkykweig;
        eiqaaeeseksuaoso:
        if (!is_string($ywmkwiwkosakssii)) {
            goto cwoocwkqsoosaqkm;
        }
        goto akkyiomimkeoskos;
        agsmckaiamicsmku:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\x69\x74\145\x6d\163", null);
        goto cymiymiigkyegwqq;
        gcwcoaasoisikiis:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto oiwgeqquqqoougyk;
        akkyiomimkeoskos:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto cuqiuaqqmiwysuss;
        qacikuseouqsqmwq:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto sgwymesyqucmwwkw;
        cuqiuaqqmiwysuss:
        cwoocwkqsoosaqkm:
        goto symooqoecgcicomq;
        cymiymiigkyegwqq:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\x65\x61\x72\x63\x68", false);
        goto umqcguqgqygqossy;
        sgwymesyqucmwwkw:
        iuueumuwsooouiao:
        goto meywqiioyoucokow;
        umqcguqgqygqossy:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\155\141\162\x6b\165\x70", false);
        goto kciusguyocmsuaeu;
        oiwgeqquqqoougyk:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto ikcmyyecwuoacqyg;
        ekywgoqskwiummes:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto iuueumuwsooouiao;
        }
        goto qacikuseouqsqmwq;
        jsageqqwqkykweig:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\144\x61\x74\x61" => ["\143\x6f\x6e\x74\145\156\x74" => $ewgwqamkygiqaawc], "\164\145\170\164" => $cmwygeyygwqaemaq, "\x76\x61\x6c\x75\145" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto weyeyookuqayoakq;
        ycsockioamocssqc:
        $keccaugmemegoimu = ["\162\145\x73\x75\154\x74\163" => $qeiakyocuggicwsy, "\x6d\157\162\x65\137\x72\145\x73\x75\x6c\x74\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto mcgskyeeqqsyswam;
        mogeeqsawaqyeaaa:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto qosuyiciqgmakegs;
        weyeyookuqayoakq:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\x61\147\x65", 1));
        goto mogeeqsawaqyeaaa;
        mcgskyeeqqsyswam:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aiecqsmqwwceuigs;
        ysukiaoekgcswucm:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto ycsockioamocssqc;
        qosuyiciqgmakegs:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ysukiaoekgcswucm;
        aiecqsmqwwceuigs:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto aogemgkeckkmuyus;
        imycaqewmusocike:
        yugiaygagouuesgo:
        goto yoowqwwqgyoqusam;
        qmwcqkmogmmseeaa:
        oyogcgssysygmeam:
        goto imycaqewmusocike;
        iugkiwiucuaueycm:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\x49\104";
        goto gagmssewkqoakmic;
        gagmssewkqoakmic:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\165\162\154":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto yugiaygagouuesgo;
            case "\x74\151\164\x6c\145":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto yugiaygagouuesgo;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto yugiaygagouuesgo;
        }
        goto qmwcqkmogmmseeaa;
        yoowqwwqgyoqusam:
        return $eqgoocgaqwqcimie;
        goto qccqwqewgsuaassw;
        aogemgkeckkmuyus:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\x70\162\145\x66\145\x72", "\x49\x44");
        goto iugkiwiucuaueycm;
        qccqwqewgsuaassw:
    }
}
