<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\x69\x64", "\x74\x69\x74\154\x65", "\x75\x72\154"];
    const ADMIN_GET_ = "\x61\x64\x6d\151\156\x5f\x67\145\164\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\x63\x6f\156\x73";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\160\x6f\163\164\x73";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\164\145\162\x6d\x73";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\163\145\x72\x73";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\x6f\x64\145\154\163";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\x63\x6f\x6d\155\x65\x6e\x74\x73";
    const ADMIN_ADD_NEW_TERM_ACTION = "\x61\144\x6d\151\x6e\x5f\x61\x64\144\x5f\156\145\167\x5f\x74\x65\x72\155";
    const FRONT_GET_NONCE_ACTION = "\x66\162\157\156\164\137\147\145\164\137\156\x6f\156\x63\145";
    const FRONT_ACTIONS = ["\x67\145\x74\137\x6e\157\x6e\143\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\x64\144\137\x74\145\x72\x6d" => self::ADMIN_ADD_NEW_TERM_ACTION, "\x67\145\x74\x5f\151\143\x6f\156\163" => self::ADMIN_GET_ICONS_ACTION, "\147\x65\x74\137\160\x6f\x73\164\x73" => self::ADMIN_GET_POSTS_ACTION, "\147\145\x74\x5f\x74\x65\162\155\163" => self::ADMIN_GET_TERMS_ACTION, "\x67\x65\164\137\165\163\145\162\x73" => self::ADMIN_GET_USERS_ACTION, "\x67\x65\164\137\155\157\144\145\154\163" => self::ADMIN_GET_MODELS_ACTION, "\x67\145\164\137\x63\x6f\155\155\145\x6e\164\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x65\156\161\165\145\165\x65"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\147\x67\163\165\145\x79\165\171\161\145\x71\x65\x75\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\151\x79\x73\x73\147\x6f\x69\167\x67\x77\171\x67\145\x61\143\x67"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\x6b\167\x61\x67\x6b\x65\155\x67\141\167\x75\157\x61\x63\x77\171"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\167\x65\145\x73\143\167\x77\147\161\x67\151\x79\x75\x6d\171\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\155\x65\155\x75\165\x6b\x77\x73\155\x6f\x79\x71\165\163\x75\x61"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\x75\171\151\167\147\155\x65\161\x6d\157\x63\x67\x79\161\x67\x6b"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\x77\141\x6f\145\x69\147\x77\151\x67\153\163\x6f\x69\153\x67\165"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\157\x73\x65\171\x79\x75\x75\x79\165\153\x63\x77\x69\x63\x61\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\152\141\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\152\x61\170", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto qomigguamoeqekky;
        emgwikaikyywkmwm:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\41\x20\123\x6f\x6d\x65\x74\x68\151\156\147\40\x69\163\x20\x77\x72\x6f\x6e\147\x2e\x20\101\162\x65\x20\171\x6f\165\x20\x68\141\143\153\x69\x6e\147\77\41\40\72\50", PR__CMN__FOUNDATION), "\145\162\x72\157\162");
        goto uowyqyiqscmccsei;
        yucyeouoieoqgqos:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto saiwskyicecogocg;
        saiwskyicecogocg:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto gyiiogoieoicewae;
        yqssyeyuimcmauao:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\160\141\x72\145\x6e\164" => ManipulateArray::get($icwicymcioeyeyek, "\160\x61\x72\x65\x6e\x74", -1)]);
        goto mmmyemwwkkmsomoq;
        cysugoacwakoqwiu:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto cukuyoqwmyggamgu;
        immogeiuaiqwkcgy:
        $sogksuscggsicmac = ["\x69\164\145\155" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\x6c\x65\143\x74" => $iiueagsqmqqkiiwm];
        goto kegoyegkioysaaai;
        kgeyoegiqceocosu:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto ykseokcqemaqqyae;
        acqkeymqakmcumko:
        $occymigcemkqucuw = true;
        goto cysugoacwakoqwiu;
        kegoyegkioysaaai:
        keqaggeoasegyigg:
        goto yowqeciqwemaysog;
        uowyqyiqscmccsei:
        goto kmcccsgokysskgqg;
        goto ysemiouayuuqimyg;
        gyiiogoieoicewae:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto uauggckimussuumk;
        cukuyoqwmyggamgu:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto immogeiuaiqwkcgy;
        dgawqiokqseygyqe:
        goto keqaggeoasegyigg;
        goto kksgsgiywgosikqa;
        gkggmkmswikmmmki:
        $occymigcemkqucuw = false;
        goto yucyeouoieoqgqos;
        uauggckimussuumk:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto kyuseiceyycyoqiy;
        }
        goto emgwikaikyywkmwm;
        mmmyemwwkkmsomoq:
        if (is_array($sogksuscggsicmac)) {
            goto caykmykgamymycgk;
        }
        goto akakuqyqwwuquiia;
        akakuqyqwwuquiia:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\41\x20\x53\157\155\145\164\150\151\156\147\x20\151\x73\x20\167\162\157\156\147\56\x20\x41\162\145\40\171\157\x75\x20\x74\162\x79\x20\164\x6f\x20\141\144\144\40\x65\x78\151\x73\164\x20\x76\141\154\165\145\77\41", PR__CMN__FOUNDATION), "\145\x72\162\157\x72");
        goto dgawqiokqseygyqe;
        yowqeciqwemaysog:
        kmcccsgokysskgqg:
        goto kgeyoegiqceocosu;
        qomigguamoeqekky:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto gkggmkmswikmmmki;
        ysemiouayuuqimyg:
        kyuseiceyycyoqiy:
        goto yqssyeyuimcmauao;
        kksgsgiywgosikqa:
        caykmykgamymycgk:
        goto acqkeymqakmcumko;
        ykseokcqemaqqyae:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto eyymwewkeseeaggc;
        sskkqugewogogagg:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto oekqegamyyuuqcoy;
        eyymwewkeseeaggc:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\x61\155\x65", self::AJAX_NONCE_KEY);
        goto ikiqwekimqmyuuis;
        aaiwsiciesymiaok:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto sskkqugewogogagg;
        ikiqwekimqmyuuis:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\x61\143\164\x69\157\x6e", self::AJAX_NONCE);
        goto aaiwsiciesymiaok;
        oekqegamyyuuqcoy:
    }
    public function kwagkemgawuoacwy()
    {
        goto goaqoeqygekuaywo;
        wsogoeqsmeucowak:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto ooggyokmmcmwygwk;
        segwckgisqwkowcc:
        asgouseqowywicmy:
        goto uiskasyyiewuwmmk;
        uswycqewimcuqmua:
        cuyskuymgaukqaey:
        goto uosiwiemuswkisyq;
        uosiwiemuswkisyq:
        kamgygkuikoaigyw:
        goto iissqgqwyqmmqugg;
        keaoumygogemaeek:
        $ykiyyumywksqcisg = [];
        goto osyceoeiwaucwgci;
        owswawakaekmsckk:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\134\142{$qwcmueausqgiwigy}\134\x62\x2f\x69", $gygawogosumsgmme);
        });
        goto sigumeougskmckcy;
        iswssqmsymsiqygm:
        $wmgwaquemmoicmas = [];
        goto giiymwkcouoegqgo;
        giiymwkcouoegqgo:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto wyyqkqigmomsqsmi;
            wyyqkqigmomsqsmi:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto yuwoskumkgymgauq;
            yuwoskumkgymgauq:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto wuucaoemqqoomiey;
            wuucaoemqqoomiey:
            mimueoiwogkckmei:
            goto gwyuiugysgmueoik;
            gwyuiugysgmueoik:
        }
        goto yuauuacmomcmgggi;
        goaqoeqygekuaywo:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto igumwqkcasocmuui;
        iissqgqwyqmmqugg:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto woemukewigiwuyis;
        igumwqkcasocmuui:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto iswssqmsymsiqygm;
        yuauuacmomcmgggi:
        ggskywuesswiqwqw:
        goto keaoumygogemaeek;
        uaqsosmwikwoqioa:
        if (!$ykiyyumywksqcisg) {
            goto kamgygkuikoaigyw;
        }
        goto wsogoeqsmeucowak;
        akcygikyemoocswm:
        goto kqgsykaimimimyae;
        goto segwckgisqwkowcc;
        osyceoeiwaucwgci:
        $sogksuscggsicmac = [];
        goto sumqgcmuacwikauo;
        sigsaocukiawcgqe:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto owswawakaekmsckk;
        yckuogqwcayqumoq:
        kqgsykaimimimyae:
        goto uaqsosmwikwoqioa;
        uiskasyyiewuwmmk:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto cakayowsqeqayweo;
        }
        goto mkaiiiimcywymqgk;
        sigumeougskmckcy:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto akcygikyemoocswm;
        ooggyokmmcmwygwk:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto mgukweouugammoui;
            moykkkgogaygokus:
            cmaoqqqqaqwqsaii:
            goto wuiciowuskgmysck;
            wakyowemmceeeqiy:
            if (!$eqgoocgaqwqcimie) {
                goto iiomwaiuuemuygkq;
            }
            goto qscwycyimmeagyim;
            qscwycyimmeagyim:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto wsqoesokcweweiga;
            wsqoesokcweweiga:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto akysqyaywkiwwoog;
            akysqyaywkiwwoog:
            iiomwaiuuemuygkq:
            goto moykkkgogaygokus;
            mgukweouugammoui:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto wakyowemmceeeqiy;
            wuiciowuskgmysck:
        }
        goto uswycqewimcuqmua;
        qqoyaewmawgkcmqo:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto sqsggomiyygwoumi;
        mkaiiiimcywymqgk:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto qqoyaewmawgkcmqo;
        sumqgcmuacwikauo:
        if ($aokagokqyuysuksm) {
            goto asgouseqowywicmy;
        }
        goto sigsaocukiawcgqe;
        sqsggomiyygwoumi:
        cakayowsqeqayweo:
        goto yckuogqwcayqumoq;
        woemukewigiwuyis:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto ueoywqkaiwqoeakw;
        saigyoyoqauaqsuu:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto kuuickoqgquuqwci;
            uwkaosmauksiukco:
            kgyiqgaemwaqwome:
            goto qgkuoayqesmgmcmq;
            wqyiquqemcueoogs:
            $gskuwmeemyeuwogc = '';
            goto omoomgsaackaseqm;
            kuuickoqgquuqwci:
            if (!$post instanceof WP_Post) {
                goto kgyiqgaemwaqwome;
            }
            goto akwkqauksyquwkqc;
            uqyqsmgeeiyiaqck:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto uwkaosmauksiukco;
            omoomgsaackaseqm:
            if (!$qmwikaeuqeyuaoiy) {
                goto cciyuigcccggekmc;
            }
            goto myouqgwqoegsyseg;
            myouqgwqoegsyseg:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x70\x6f\x73\x74\x2f{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\x64\141\x74\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\151\164\154\145" => ManipulatePost::qcgakseyaikigqco($post), "\141\165\164\x68\157\162" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\x68\141\163\x5f\151\x6d\141\x67\145" => ManipulateArray::get($ywmkwiwkosakssii, "\150\x61\x73\137\x69\155\x61\x67\x65", false), "\x70\157\163\x74\137\x74\171\160\x65" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto ygkwwkuaqoemuaqq;
            qgkuoayqesmgmcmq:
            mygwgowqguameswo:
            goto iggkoiikmckimmmw;
            ygkwwkuaqoemuaqq:
            cciyuigcccggekmc:
            goto uqyqsmgeeiyiaqck;
            akwkqauksyquwkqc:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto wqyiquqemcueoogs;
            iggkoiikmckimmmw:
        }
        goto wywcgacaomkaesmw;
        icccqacuqseakkew:
        if ($aokagokqyuysuksm) {
            goto ogoaaswoyusgsycg;
        }
        goto wyisakyowacouyqk;
        uemuasgumguyeaye:
        goto qqewqsyyogoieaqc;
        goto mscqweuqwsqywggy;
        gmyoyegggggmymes:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\137\x70\x6f\x73\164\x73\x5f\x61\x72\147\x73"), $ywmkwiwkosakssii);
        goto ooqymioycsgcoqiy;
        seemkiyosiscigms:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\137\x70\157\163\x74\x73\137\x61\162\147\163"), $ywmkwiwkosakssii);
        goto oqikoeeugogqkaim;
        yqucaaqoyswiskeg:
        ymkmgwqugkeoeyas:
        goto aossaeoauaeuoywc;
        wywcgacaomkaesmw:
        keygmsycouauqmqc:
        goto sycmikycociqswka;
        ieggkeomcusisuoo:
        $qisccquumwewokoy[] = "\x69\156\x68\x65\162\151\x74";
        goto weqkywkusswmawim;
        yoqkmcigwewgykya:
        $qeiakyocuggicwsy = [];
        goto smekigasqcyykywe;
        smekigasqcyykywe:
        if ($oammesyieqmwuwyi) {
            goto ymkmgwqugkeoeyas;
        }
        goto ckuegykmyekmewco;
        ueoywqkaiwqoeakw:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto yaaggqiuogwiyeia;
        ckuegykmyekmewco:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto yqucaaqoyswiskeg;
        ooqymioycsgcoqiy:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto uemuasgumguyeaye;
        yaaggqiuogwiyeia:
        $qisccquumwewokoy = ["\x70\x75\142\154\x69\x73\150"];
        goto yoqkmcigwewgykya;
        sycmikycociqswka:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto ymoaemsamquwomcs;
        umasciaeyewkkuuw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\x74\x5f\163\164\141\164\165\163" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto seemkiyosiscigms;
        okaacoqueimcowme:
        qqewqsyyogoieaqc:
        goto saigyoyoqauaqsuu;
        mscqweuqwsqywggy:
        ogoaaswoyusgsycg:
        goto umasciaeyewkkuuw;
        wyisakyowacouyqk:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x6f\163\x74\x5f\163\164\141\164\x75\x73" => $qisccquumwewokoy]);
        goto gmyoyegggggmymes;
        oqikoeeugogqkaim:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto okaacoqueimcowme;
        weqkywkusswmawim:
        iaouysocayacmusu:
        goto icccqacuqseakkew;
        aossaeoauaeuoywc:
        if (!($oammesyieqmwuwyi == "\x61\x74\164\x61\143\x68\155\145\x6e\164" || is_array($oammesyieqmwuwyi) && in_array("\141\164\164\x61\143\150\155\145\156\164", $oammesyieqmwuwyi))) {
            goto iaouysocayacmusu;
        }
        goto ieggkeomcusisuoo;
        ymoaemsamquwomcs:
    }
    public function weescwwgqgiyumyw()
    {
        goto ycisoqiyiiyqqwwm;
        guqgkmaoggceoumc:
        sacesysuwmcykeuo:
        goto mkeogqemimomcgsm;
        sesyqeyukqeuwckk:
        if ($aokagokqyuysuksm) {
            goto yiemweuwugqwcooa;
        }
        goto cyyaquqmmceukggi;
        iuiuisqqeosykycg:
        $ggauoeuaesiymgee = ["\x69\156\x63\154\165\x64\x65" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\x68\x69\x64\x65\x5f\x65\155\160\x74\171" => 0];
        goto giqwqyiaiemgguye;
        usimgkkmqgmqiqug:
        if (!$kesssewsiegssiya) {
            goto sacesysuwmcykeuo;
        }
        goto sesyqeyukqeuwckk;
        cyyaquqmmceukggi:
        $ggauoeuaesiymgee = ["\156\x61\155\145\x5f\x5f\x6c\x69\153\x65" => $qwcmueausqgiwigy, "\x68\151\x64\145\137\x65\155\160\164\x79" => 0, "\156\x75\x6d\x62\145\x72" => ''];
        goto ogyiiuogeeaywkic;
        mkeogqemimomcgsm:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cumykwakewgamugu;
        acgausemsusqaeas:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto qmgcgicaaqquoicw;
            eiumaaaqmcqiuqgs:
            $gskuwmeemyeuwogc = '';
            goto wsymmqucieigkeac;
            qmgcgicaaqquoicw:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto uwkammcmgokwweew;
            }
            goto yaiiekwggusgygac;
            kmokokcqewwcwyws:
            uackuyqecwisyieg:
            goto mwqsmcweqikkcksk;
            gmmeasywcygwkugq:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto eiumaaaqmcqiuqgs;
            mwqsmcweqikkcksk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto cqgwyoacewoaecik;
            cqgwyoacewoaecik:
            uwkammcmgokwweew:
            goto gkcakkuoeioaieee;
            yaiiekwggusgygac:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto gmmeasywcygwkugq;
            yciwiygwyqaeoqwo:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x74\x65\162\x6d\57{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\x74\151\x74\x6c\x65" => $ymqmyyeuycgmigyo, "\164\x61\x78\157\x6e\157\155\x79" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto kmokokcqewwcwyws;
            wsymmqucieigkeac:
            if (!$qmwikaeuqeyuaoiy) {
                goto uackuyqecwisyieg;
            }
            goto yciwiygwyqaeoqwo;
            gkcakkuoeioaieee:
            qswoscmyiawaeaek:
            goto cwcwemecykowqwui;
            cwcwemecykowqwui:
        }
        goto ackamyewsisqcmia;
        ackamyewsisqcmia:
        akcksasayaumouky:
        goto guqgkmaoggceoumc;
        ogyiiuogeeaywkic:
        goto asmiwssgmoaaoswm;
        goto scmoqmqikogqcuew;
        giqwqyiaiemgguye:
        asmiwssgmoaaoswm:
        goto saikcqqkyoeikuyo;
        uyowaccwwyusqkuc:
        $qeiakyocuggicwsy = [];
        goto usimgkkmqgmqiqug;
        scmoqmqikogqcuew:
        yiemweuwugqwcooa:
        goto iuiuisqqeosykycg;
        ycisoqiyiiyqqwwm:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto uyowaccwwyusqkuc;
        saikcqqkyoeikuyo:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto acgausemsusqaeas;
        cumykwakewgamugu:
    }
    public function memuukwsmoyqusua()
    {
        goto sewcwygikycqyqmu;
        ucaocaceeuqiggso:
        giyaooswwsuyuema:
        goto qqaecgmomioggcyu;
        gacweccyqemocmky:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto gwqyuyucgguaisyg;
        iwaausiukycagkau:
        oieimyigeaywmmco:
        goto eqakckaqmkweciao;
        qakaoeiwgeuckeka:
        $qeiakyocuggicwsy = [];
        goto qyowkusecoyawauc;
        gwqyuyucgguaisyg:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\x6f\x6c\145" => $uagwmwoawiwkycao, "\163\x65\x61\162\143\150" => "\x2a{$qwcmueausqgiwigy}\52", "\x73\x65\141\162\x63\x68\137\x63\x6f\154\x75\x6d\x6e\163" => ["\x75\x73\145\x72\x5f\165\162\154", "\x75\x73\x65\162\x5f\x6c\157\x67\x69\156", "\x75\x73\x65\162\x5f\x65\x6d\141\x69\154", "\x64\x69\x73\x70\154\x61\171\137\156\141\x6d\x65", "\x75\163\145\x72\137\156\x69\143\145\156\x61\x6d\x65"], "\x6d\145\164\141\x5f\161\165\145\x72\171" => ["\162\x65\x6c\141\164\151\157\156" => "\117\122", ["\x6b\145\171" => "\x66\151\162\x73\x74\x5f\156\141\155\145", "\166\x61\154\x75\x65" => $qwcmueausqgiwigy, "\143\x6f\155\x70\141\162\145" => "\x4c\111\113\105"], ["\153\145\x79" => "\x6c\141\x73\164\x5f\x6e\x61\155\145", "\x76\141\x6c\165\145" => $qwcmueausqgiwigy, "\x63\x6f\155\x70\x61\162\x65" => "\x4c\x49\113\105"]]]));
        goto simsoqkqsiqmwsaa;
        qyowkusecoyawauc:
        if ($aokagokqyuysuksm) {
            goto ecsskqmyqyuamyym;
        }
        goto gacweccyqemocmky;
        gocmieowkqeqwcks:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\x69\156\143\154\165\144\x65" => $aokagokqyuysuksm]);
        goto ucaocaceeuqiggso;
        sewcwygikycqyqmu:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto qakaoeiwgeuckeka;
        eqakckaqmkweciao:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto oagkkuowwccmeaoc;
        qqaecgmomioggcyu:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto syekaumywgekyoca;
            akqwmskmmcamuwkm:
            cmqkuqqmciawcqaq:
            goto cqsiewasswyayuyk;
            ismooqwiqgmegcue:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x75\x73\145\x72\57{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\x6e\141\x6d\x65" => sprintf(__("\x4e\x61\x6d\x65\72\x20\x25\x73", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\x6d\141\x69\x6c" => sprintf(__("\105\x6d\x61\x69\x6c\72\x20\x25\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\162\157\154\x65\x73" => sprintf(__("\x52\157\154\x65\x73\72\x20\x25\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\163\145\x72\156\141\x6d\145" => sprintf(__("\x55\x73\x65\162\x6e\x61\155\145\x3a\40\x25\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto akqwmskmmcamuwkm;
            qwaqsogsaaegoiko:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto wwkekusquqscgmsm;
            wimcauwoukmwgcwc:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto qwaqsogsaaegoiko;
            syekaumywgekyoca:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto sgcuekgueuimciki;
            }
            goto wimcauwoukmwgcwc;
            ooiysqkgmiqmkgeq:
            if (!$qmwikaeuqeyuaoiy) {
                goto cmqkuqqmciawcqaq;
            }
            goto ismooqwiqgmegcue;
            ucoeooiewkkwwyuy:
            wwwcacoscyqesksm:
            goto iuwaekscacmamkeu;
            gyayocggoaickkqq:
            sgcuekgueuimciki:
            goto ucoeooiewkkwwyuy;
            cqsiewasswyayuyk:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto gyayocggoaickkqq;
            wwkekusquqscgmsm:
            $gskuwmeemyeuwogc = '';
            goto ooiysqkgmiqmkgeq;
            iuwaekscacmamkeu:
        }
        goto iwaausiukycagkau;
        saekawmmwcmsyyaq:
        ecsskqmyqyuamyym:
        goto gocmieowkqeqwcks;
        simsoqkqsiqmwsaa:
        goto giyaooswwsuyuema;
        goto saekawmmwcmsyyaq;
        oagkkuowwccmeaoc:
    }
    public function waoeigwigksoikgu()
    {
        goto yosaemoyeeiykeai;
        mywoocikqmgcqsog:
        $qeiakyocuggicwsy = [];
        goto swekqaeccossoigy;
        omommciksgmosmku:
        if ($aokagokqyuysuksm) {
            goto oqsykugcsggakmoy;
        }
        goto kyqsamceokgyseks;
        quysmmuogiamswey:
        goto oekessmycksmemam;
        goto wgmwswuwumgsyomo;
        cscgqokcugoeacek:
        ksqaeuyiiiuuouoi:
        goto quysmmuogiamswey;
        yosaemoyeeiykeai:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto mywoocikqmgcqsog;
        saoqimsoqwweysso:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x65\x61\162\143\150" => $qwcmueausqgiwigy]));
        goto cwwusaokqsuisggk;
        osiqkqkuswkomaui:
        wymmeymakykomoeg:
        goto sescoamicygaiooy;
        wgmwswuwumgsyomo:
        oqsykugcsggakmoy:
        goto ykmkawakkqkuuaym;
        ekeiwcgqeikqiyks:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto ioawiemsmsyyssyu;
            cayayuqimskqkayc:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x63\157\155\x6d\x65\x6e\164\x2f{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\164\x69\164\x6c\145" => $pkyyagewkiyckmwy, "\x74\141\170\157\x6e\157\x6d\171" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto qgcicekcucaauaka;
            iayicqkseeycaaqk:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto mcqegwkqsoygamey;
            uyeqsmcyogggskye:
            if (!$qmwikaeuqeyuaoiy) {
                goto ewucaygocgykeweg;
            }
            goto cayayuqimskqkayc;
            cqcskimegccygqym:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto eoasqcamsowcwweq;
            ioawiemsmsyyssyu:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto ayayswaesiscymcw;
            }
            goto iayicqkseeycaaqk;
            mcqegwkqsoygamey:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto csgcicsyauawamqw;
            osysmqqcyasqyscm:
            kmccaesicogsgcmk:
            goto aoooaekesimaisms;
            csgcicsyauawamqw:
            $gskuwmeemyeuwogc = '';
            goto uyeqsmcyogggskye;
            qgcicekcucaauaka:
            ewucaygocgykeweg:
            goto cqcskimegccygqym;
            eoasqcamsowcwweq:
            ayayswaesiscymcw:
            goto osysmqqcyasqyscm;
            aoooaekesimaisms:
        }
        goto aqwugymawgissagm;
        omoiwieaiucgikse:
        oekessmycksmemam:
        goto ekeiwcgqeikqiyks;
        sescoamicygaiooy:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto cscgqokcugoeacek;
        aqwugymawgissagm:
        gwaiikaaqgaoigay:
        goto gayuaogckqsomgsy;
        gayuaogckqsomgsy:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cuyoyqcisqywkqaa;
        kyqsamceokgyseks:
        if ($post) {
            goto wymmeymakykomoeg;
        }
        goto saoqimsoqwweysso;
        ykmkawakkqkuuaym:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\157\155\155\145\x6e\x74\x5f\x5f\x69\156" => $aokagokqyuysuksm]));
        goto omoiwieaiucgikse;
        swekqaeccossoigy:
        $ywmkwiwkosakssii["\x73\x74\x61\164\165\163"] = "\x61\x70\160\x72\x6f\x76\145";
        goto omommciksgmosmku;
        cwwusaokqsuisggk:
        goto ksqaeuyiiiuuouoi;
        goto osiqkqkuswkomaui;
        cuyoyqcisqywkqaa:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto gcwcoaasoisikiis;
        symooqoecgcicomq:
        if (!$kmiooagcykmqaiac) {
            goto ioagaggwicqesuyq;
        }
        goto ekywgoqskwiummes;
        cymiymiigkyegwqq:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\x73\x65\x61\162\x63\x68", false);
        goto umqcguqgqygqossy;
        meywqiioyoucokow:
        ioagaggwicqesuyq:
        goto gcmeeeyemkqeacws;
        gcwcoaasoisikiis:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto oiwgeqquqqoougyk;
        cuqiuaqqmiwysuss:
        cwoocwkqsoosaqkm:
        goto symooqoecgcicomq;
        ekywgoqskwiummes:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto iuueumuwsooouiao;
        }
        goto qacikuseouqsqmwq;
        sgwymesyqucmwwkw:
        iuueumuwsooouiao:
        goto meywqiioyoucokow;
        umqcguqgqygqossy:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\x61\x72\153\x75\160", false);
        goto kciusguyocmsuaeu;
        akkyiomimkeoskos:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto cuqiuaqqmiwysuss;
        oiwgeqquqqoougyk:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto ikcmyyecwuoacqyg;
        gcmeeeyemkqeacws:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto jsageqqwqkykweig;
        eiqaaeeseksuaoso:
        if (!is_string($ywmkwiwkosakssii)) {
            goto cwoocwkqsoosaqkm;
        }
        goto akkyiomimkeoskos;
        agsmckaiamicsmku:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\151\164\145\x6d\163", null);
        goto cymiymiigkyegwqq;
        kciusguyocmsuaeu:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\x65\x6d\x70\x6c\141\x74\x65\x5f\164\171\160\145", "\x69\x6e\144\x65\x78");
        goto eiqaaeeseksuaoso;
        ikcmyyecwuoacqyg:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\x61\162\147\163", "\173\x7d");
        goto agsmckaiamicsmku;
        qacikuseouqsqmwq:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto sgwymesyqucmwwkw;
        jsageqqwqkykweig:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\x64\141\164\141" => ["\x63\x6f\x6e\164\145\x6e\x74" => $ewgwqamkygiqaawc], "\x74\145\170\164" => $cmwygeyygwqaemaq, "\x76\141\x6c\x75\145" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto weyeyookuqayoakq;
        mogeeqsawaqyeaaa:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto qosuyiciqgmakegs;
        ycsockioamocssqc:
        $keccaugmemegoimu = ["\x71\145\x69\141\153\x79\157\143\165\147\x67\x69\143\x77\x73\x79" => $qeiakyocuggicwsy, "\x6d\x6f\162\145\x5f\162\x65\x73\165\x6c\x74\x73" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto mcgskyeeqqsyswam;
        mcgskyeeqqsyswam:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aiecqsmqwwceuigs;
        ysukiaoekgcswucm:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto ycsockioamocssqc;
        weyeyookuqayoakq:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\141\147\x65", 1));
        goto mogeeqsawaqyeaaa;
        qosuyiciqgmakegs:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ysukiaoekgcswucm;
        aiecqsmqwwceuigs:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto aogemgkeckkmuyus;
        iugkiwiucuaueycm:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\x49\x44";
        goto gagmssewkqoakmic;
        imycaqewmusocike:
        yugiaygagouuesgo:
        goto yoowqwwqgyoqusam;
        aogemgkeckkmuyus:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\x70\x72\145\x66\x65\x72", "\111\104");
        goto iugkiwiucuaueycm;
        qmwcqkmogmmseeaa:
        oyogcgssysygmeam:
        goto imycaqewmusocike;
        gagmssewkqoakmic:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\x75\162\154":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto yugiaygagouuesgo;
            case "\164\x69\164\154\x65":
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
        qccqwqewgsuaassw:
    }
}
