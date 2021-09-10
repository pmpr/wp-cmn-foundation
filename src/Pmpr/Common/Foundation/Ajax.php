<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\151\144", "\x74\x69\x74\154\145", "\165\162\154"];
    const ADMIN_GET_ = "\x61\144\155\151\x6e\137\147\145\x74\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\x69\143\157\x6e\163";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\160\x6f\163\x74\x73";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\164\x65\162\x6d\x73";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\x75\x73\x65\x72\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\x6f\144\x65\x6c\163";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\x63\157\155\x6d\145\156\x74\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\x61\x64\x6d\x69\x6e\137\x61\x64\x64\x5f\156\145\x77\x5f\x74\x65\162\x6d";
    const FRONT_GET_NONCE_ACTION = "\x66\162\x6f\156\x74\137\x67\145\164\137\156\x6f\x6e\143\145";
    const FRONT_ACTIONS = ["\147\145\x74\x5f\x6e\157\156\x63\145" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\144\144\137\164\145\162\x6d" => self::ADMIN_ADD_NEW_TERM_ACTION, "\147\x65\164\x5f\151\143\x6f\x6e\x73" => self::ADMIN_GET_ICONS_ACTION, "\x67\x65\164\x5f\160\157\163\164\163" => self::ADMIN_GET_POSTS_ACTION, "\x67\x65\164\x5f\164\x65\162\x6d\x73" => self::ADMIN_GET_TERMS_ACTION, "\147\x65\x74\x5f\165\x73\145\x72\163" => self::ADMIN_GET_USERS_ACTION, "\x67\145\164\137\155\x6f\144\145\154\163" => self::ADMIN_GET_MODELS_ACTION, "\x67\x65\x74\x5f\143\157\x6d\155\x65\156\164\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\x65\156\161\x75\145\x75\145"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\147\x67\x73\x75\x65\171\165\171\x71\x65\161\x65\165\x73\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\x69\171\x73\x73\147\x6f\x69\167\x67\167\x79\147\x65\x61\143\x67"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\x6b\167\x61\x67\153\145\155\x67\141\167\x75\x6f\x61\x63\167\x79"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\167\145\145\x73\x63\167\x77\147\161\147\x69\171\x75\155\x79\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\155\145\x6d\x75\165\153\x77\x73\x6d\157\171\161\x75\163\165\141"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\x75\171\151\167\147\155\145\161\155\157\x63\x67\x79\x71\x67\153"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\167\141\157\x65\151\x67\167\151\x67\x6b\163\157\151\153\147\x75"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\x6f\x73\145\x79\x79\165\x75\x79\x75\153\x63\167\151\x63\141\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\x61\x6a\141\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\141\x6a\x61\170", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto gkggmkmswikmmmki;
        kegoyegkioysaaai:
        $sogksuscggsicmac = ["\151\x74\145\155" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\154\x65\143\164" => $iiueagsqmqqkiiwm];
        goto yowqeciqwemaysog;
        uowyqyiqscmccsei:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\41\40\123\x6f\x6d\145\x74\x68\151\x6e\147\x20\x69\163\40\x77\x72\x6f\156\x67\x2e\40\101\x72\145\40\171\157\165\x20\150\x61\x63\153\151\156\x67\x3f\x21\40\72\50", PR__CMN__FOUNDATION), "\145\162\162\157\162");
        goto ysemiouayuuqimyg;
        uauggckimussuumk:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto emgwikaikyywkmwm;
        ysemiouayuuqimyg:
        goto qomigguamoeqekky;
        goto yqssyeyuimcmauao;
        ykseokcqemaqqyae:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto eyymwewkeseeaggc;
        emgwikaikyywkmwm:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto kmcccsgokysskgqg;
        }
        goto uowyqyiqscmccsei;
        dgawqiokqseygyqe:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\117\x70\x73\x21\40\x53\x6f\155\145\x74\x68\151\x6e\x67\40\151\x73\x20\167\162\157\x6e\x67\56\40\x41\162\145\x20\x79\157\x75\40\164\162\x79\x20\x74\157\x20\141\144\144\x20\145\x78\151\163\164\40\166\x61\154\165\145\77\x21", PR__CMN__FOUNDATION), "\x65\162\x72\x6f\x72");
        goto kksgsgiywgosikqa;
        mmmyemwwkkmsomoq:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\160\x61\162\x65\x6e\x74" => ManipulateArray::get($icwicymcioeyeyek, "\160\x61\x72\145\156\164", -1)]);
        goto akakuqyqwwuquiia;
        acqkeymqakmcumko:
        keqaggeoasegyigg:
        goto cysugoacwakoqwiu;
        immogeiuaiqwkcgy:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto kegoyegkioysaaai;
        yowqeciqwemaysog:
        kyuseiceyycyoqiy:
        goto kgeyoegiqceocosu;
        cysugoacwakoqwiu:
        $occymigcemkqucuw = true;
        goto cukuyoqwmyggamgu;
        kgeyoegiqceocosu:
        qomigguamoeqekky:
        goto ykseokcqemaqqyae;
        gyiiogoieoicewae:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto uauggckimussuumk;
        yucyeouoieoqgqos:
        $occymigcemkqucuw = false;
        goto saiwskyicecogocg;
        saiwskyicecogocg:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto gyiiogoieoicewae;
        gkggmkmswikmmmki:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto yucyeouoieoqgqos;
        cukuyoqwmyggamgu:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto immogeiuaiqwkcgy;
        kksgsgiywgosikqa:
        goto kyuseiceyycyoqiy;
        goto acqkeymqakmcumko;
        yqssyeyuimcmauao:
        kmcccsgokysskgqg:
        goto mmmyemwwkkmsomoq;
        akakuqyqwwuquiia:
        if (is_array($sogksuscggsicmac)) {
            goto keqaggeoasegyigg;
        }
        goto dgawqiokqseygyqe;
        eyymwewkeseeaggc:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto ikiqwekimqmyuuis;
        aaiwsiciesymiaok:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\x61\143\x74\x69\x6f\x6e", self::AJAX_NONCE);
        goto sskkqugewogogagg;
        oekqegamyyuuqcoy:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto ggskywuesswiqwqw;
        ikiqwekimqmyuuis:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\x6e\141\x6d\x65", self::AJAX_NONCE_KEY);
        goto aaiwsiciesymiaok;
        sskkqugewogogagg:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto oekqegamyyuuqcoy;
        ggskywuesswiqwqw:
    }
    public function kwagkemgawuoacwy()
    {
        goto igumwqkcasocmuui;
        sigsaocukiawcgqe:
        if ($aokagokqyuysuksm) {
            goto kqgsykaimimimyae;
        }
        goto owswawakaekmsckk;
        uswycqewimcuqmua:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto wakyowemmceeeqiy;
            wuiciowuskgmysck:
            iiomwaiuuemuygkq:
            goto kamgygkuikoaigyw;
            wsqoesokcweweiga:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto akysqyaywkiwwoog;
            wakyowemmceeeqiy:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto qscwycyimmeagyim;
            moykkkgogaygokus:
            mgukweouugammoui:
            goto wuiciowuskgmysck;
            qscwycyimmeagyim:
            if (!$eqgoocgaqwqcimie) {
                goto mgukweouugammoui;
            }
            goto wsqoesokcweweiga;
            akysqyaywkiwwoog:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto moykkkgogaygokus;
            kamgygkuikoaigyw:
        }
        goto uosiwiemuswkisyq;
        osyceoeiwaucwgci:
        $ykiyyumywksqcisg = [];
        goto sumqgcmuacwikauo;
        uosiwiemuswkisyq:
        cmaoqqqqaqwqsaii:
        goto iissqgqwyqmmqugg;
        wsogoeqsmeucowak:
        if (!$ykiyyumywksqcisg) {
            goto goaqoeqygekuaywo;
        }
        goto ooggyokmmcmwygwk;
        iissqgqwyqmmqugg:
        goaqoeqygekuaywo:
        goto woemukewigiwuyis;
        keaoumygogemaeek:
        mimueoiwogkckmei:
        goto osyceoeiwaucwgci;
        woemukewigiwuyis:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto ymkmgwqugkeoeyas;
        akcygikyemoocswm:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto segwckgisqwkowcc;
        mkaiiiimcywymqgk:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto asgouseqowywicmy;
        }
        goto qqoyaewmawgkcmqo;
        sigumeougskmckcy:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\57\x5c\x62{$qwcmueausqgiwigy}\x5c\x62\x2f\151", $gygawogosumsgmme);
        });
        goto akcygikyemoocswm;
        uaqsosmwikwoqioa:
        cuyskuymgaukqaey:
        goto wsogoeqsmeucowak;
        sumqgcmuacwikauo:
        $sogksuscggsicmac = [];
        goto sigsaocukiawcgqe;
        ooggyokmmcmwygwk:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto uswycqewimcuqmua;
        igumwqkcasocmuui:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto iswssqmsymsiqygm;
        iswssqmsymsiqygm:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto giiymwkcouoegqgo;
        sqsggomiyygwoumi:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto yckuogqwcayqumoq;
        yuauuacmomcmgggi:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto yuwoskumkgymgauq;
            yuwoskumkgymgauq:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto wuucaoemqqoomiey;
            wuucaoemqqoomiey:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto gwyuiugysgmueoik;
            gwyuiugysgmueoik:
            wyyqkqigmomsqsmi:
            goto cakayowsqeqayweo;
            cakayowsqeqayweo:
        }
        goto keaoumygogemaeek;
        uiskasyyiewuwmmk:
        kqgsykaimimimyae:
        goto mkaiiiimcywymqgk;
        yckuogqwcayqumoq:
        asgouseqowywicmy:
        goto uaqsosmwikwoqioa;
        giiymwkcouoegqgo:
        $wmgwaquemmoicmas = [];
        goto yuauuacmomcmgggi;
        owswawakaekmsckk:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto sigumeougskmckcy;
        qqoyaewmawgkcmqo:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto sqsggomiyygwoumi;
        segwckgisqwkowcc:
        goto cuyskuymgaukqaey;
        goto uiskasyyiewuwmmk;
        ymkmgwqugkeoeyas:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto yaaggqiuogwiyeia;
        ooqymioycsgcoqiy:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\137\160\157\x73\164\x73\137\x61\162\x67\163"), $ywmkwiwkosakssii);
        goto uemuasgumguyeaye;
        wywcgacaomkaesmw:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto akwkqauksyquwkqc;
            omoomgsaackaseqm:
            $gskuwmeemyeuwogc = '';
            goto myouqgwqoegsyseg;
            uqyqsmgeeiyiaqck:
            kgyiqgaemwaqwome:
            goto uwkaosmauksiukco;
            myouqgwqoegsyseg:
            if (!$qmwikaeuqeyuaoiy) {
                goto kgyiqgaemwaqwome;
            }
            goto ygkwwkuaqoemuaqq;
            uwkaosmauksiukco:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto qgkuoayqesmgmcmq;
            akwkqauksyquwkqc:
            if (!$post instanceof WP_Post) {
                goto kuuickoqgquuqwci;
            }
            goto wqyiquqemcueoogs;
            qgkuoayqesmgmcmq:
            kuuickoqgquuqwci:
            goto iggkoiikmckimmmw;
            wqyiquqemcueoogs:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto omoomgsaackaseqm;
            iggkoiikmckimmmw:
            cciyuigcccggekmc:
            goto ueoywqkaiwqoeakw;
            ygkwwkuaqoemuaqq:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x70\157\163\164\57{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\x64\141\x74\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\x69\164\x6c\145" => ManipulatePost::qcgakseyaikigqco($post), "\x61\x75\x74\150\x6f\x72" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\150\x61\x73\x5f\x69\155\x61\147\145" => ManipulateArray::get($ywmkwiwkosakssii, "\x68\x61\x73\x5f\151\x6d\x61\x67\145", false), "\160\157\x73\164\137\164\171\160\145" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto uqyqsmgeeiyiaqck;
            ueoywqkaiwqoeakw:
        }
        goto sycmikycociqswka;
        seemkiyosiscigms:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\157\x73\164\137\x73\x74\141\x74\165\x73" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto oqikoeeugogqkaim;
        wyisakyowacouyqk:
        if ($aokagokqyuysuksm) {
            goto qqewqsyyogoieaqc;
        }
        goto gmyoyegggggmymes;
        gmyoyegggggmymes:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\x73\x74\137\x73\164\141\x74\x75\163" => $qisccquumwewokoy]);
        goto ooqymioycsgcoqiy;
        oqikoeeugogqkaim:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\164\x5f\160\157\163\x74\163\x5f\141\x72\147\163"), $ywmkwiwkosakssii);
        goto okaacoqueimcowme;
        saigyoyoqauaqsuu:
        keygmsycouauqmqc:
        goto wywcgacaomkaesmw;
        ckuegykmyekmewco:
        if ($oammesyieqmwuwyi) {
            goto iaouysocayacmusu;
        }
        goto yqucaaqoyswiskeg;
        uemuasgumguyeaye:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto mscqweuqwsqywggy;
        yqucaaqoyswiskeg:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto aossaeoauaeuoywc;
        icccqacuqseakkew:
        ogoaaswoyusgsycg:
        goto wyisakyowacouyqk;
        umasciaeyewkkuuw:
        qqewqsyyogoieaqc:
        goto seemkiyosiscigms;
        ieggkeomcusisuoo:
        if (!($oammesyieqmwuwyi == "\141\x74\x74\x61\143\150\155\145\x6e\164" || is_array($oammesyieqmwuwyi) && in_array("\x61\x74\164\x61\143\150\x6d\145\x6e\164", $oammesyieqmwuwyi))) {
            goto ogoaaswoyusgsycg;
        }
        goto weqkywkusswmawim;
        aossaeoauaeuoywc:
        iaouysocayacmusu:
        goto ieggkeomcusisuoo;
        yoqkmcigwewgykya:
        $qisccquumwewokoy = ["\x70\x75\x62\x6c\151\163\150"];
        goto smekigasqcyykywe;
        mscqweuqwsqywggy:
        goto keygmsycouauqmqc;
        goto umasciaeyewkkuuw;
        ymoaemsamquwomcs:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto yiemweuwugqwcooa;
        smekigasqcyykywe:
        $qeiakyocuggicwsy = [];
        goto ckuegykmyekmewco;
        weqkywkusswmawim:
        $qisccquumwewokoy[] = "\x69\156\x68\x65\162\151\x74";
        goto icccqacuqseakkew;
        okaacoqueimcowme:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto saigyoyoqauaqsuu;
        yaaggqiuogwiyeia:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto yoqkmcigwewgykya;
        sycmikycociqswka:
        mygwgowqguameswo:
        goto ymoaemsamquwomcs;
        yiemweuwugqwcooa:
    }
    public function weescwwgqgiyumyw()
    {
        goto uyowaccwwyusqkuc;
        saikcqqkyoeikuyo:
        akcksasayaumouky:
        goto acgausemsusqaeas;
        uyowaccwwyusqkuc:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto usimgkkmqgmqiqug;
        iuiuisqqeosykycg:
        asmiwssgmoaaoswm:
        goto giqwqyiaiemgguye;
        ackamyewsisqcmia:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto yaiiekwggusgygac;
            wsymmqucieigkeac:
            $gskuwmeemyeuwogc = '';
            goto yciwiygwyqaeoqwo;
            yciwiygwyqaeoqwo:
            if (!$qmwikaeuqeyuaoiy) {
                goto uwkammcmgokwweew;
            }
            goto kmokokcqewwcwyws;
            cqgwyoacewoaecik:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto gkcakkuoeioaieee;
            gmmeasywcygwkugq:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto eiumaaaqmcqiuqgs;
            mwqsmcweqikkcksk:
            uwkammcmgokwweew:
            goto cqgwyoacewoaecik;
            cwcwemecykowqwui:
            uackuyqecwisyieg:
            goto sacesysuwmcykeuo;
            gkcakkuoeioaieee:
            qmgcgicaaqquoicw:
            goto cwcwemecykowqwui;
            kmokokcqewwcwyws:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\164\x65\162\155\x2f{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\x74\x69\164\154\145" => $ymqmyyeuycgmigyo, "\x74\141\170\x6f\x6e\x6f\155\171" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto mwqsmcweqikkcksk;
            yaiiekwggusgygac:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto qmgcgicaaqquoicw;
            }
            goto gmmeasywcygwkugq;
            eiumaaaqmcqiuqgs:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto wsymmqucieigkeac;
            sacesysuwmcykeuo:
        }
        goto guqgkmaoggceoumc;
        usimgkkmqgmqiqug:
        $qeiakyocuggicwsy = [];
        goto sesyqeyukqeuwckk;
        sesyqeyukqeuwckk:
        if (!$kesssewsiegssiya) {
            goto ycisoqiyiiyqqwwm;
        }
        goto cyyaquqmmceukggi;
        acgausemsusqaeas:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto ackamyewsisqcmia;
        ogyiiuogeeaywkic:
        $ggauoeuaesiymgee = ["\156\141\x6d\x65\137\137\x6c\151\153\x65" => $qwcmueausqgiwigy, "\x68\x69\x64\x65\137\145\155\160\164\171" => 0, "\156\165\155\142\145\x72" => ''];
        goto scmoqmqikogqcuew;
        scmoqmqikogqcuew:
        goto akcksasayaumouky;
        goto iuiuisqqeosykycg;
        giqwqyiaiemgguye:
        $ggauoeuaesiymgee = ["\151\x6e\x63\x6c\x75\x64\145" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\150\151\x64\x65\137\145\x6d\160\x74\x79" => 0];
        goto saikcqqkyoeikuyo;
        cyyaquqmmceukggi:
        if ($aokagokqyuysuksm) {
            goto asmiwssgmoaaoswm;
        }
        goto ogyiiuogeeaywkic;
        cumykwakewgamugu:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto ecsskqmyqyuamyym;
        guqgkmaoggceoumc:
        qswoscmyiawaeaek:
        goto mkeogqemimomcgsm;
        mkeogqemimomcgsm:
        ycisoqiyiiyqqwwm:
        goto cumykwakewgamugu;
        ecsskqmyqyuamyym:
    }
    public function memuukwsmoyqusua()
    {
        goto qakaoeiwgeuckeka;
        gacweccyqemocmky:
        if ($aokagokqyuysuksm) {
            goto giyaooswwsuyuema;
        }
        goto gwqyuyucgguaisyg;
        saekawmmwcmsyyaq:
        goto oieimyigeaywmmco;
        goto gocmieowkqeqwcks;
        qqaecgmomioggcyu:
        oieimyigeaywmmco:
        goto iwaausiukycagkau;
        iwaausiukycagkau:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto wimcauwoukmwgcwc;
            gyayocggoaickkqq:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto ucoeooiewkkwwyuy;
            ooiysqkgmiqmkgeq:
            $gskuwmeemyeuwogc = '';
            goto ismooqwiqgmegcue;
            ucoeooiewkkwwyuy:
            syekaumywgekyoca:
            goto iuwaekscacmamkeu;
            cqsiewasswyayuyk:
            sgcuekgueuimciki:
            goto gyayocggoaickkqq;
            akqwmskmmcamuwkm:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x75\163\145\x72\x2f{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\156\141\x6d\145" => sprintf(__("\x4e\141\155\145\72\x20\x25\x73", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\x6d\141\151\x6c" => sprintf(__("\x45\x6d\x61\151\154\x3a\x20\45\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\162\x6f\x6c\145\163" => sprintf(__("\x52\x6f\154\x65\x73\72\x20\x25\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\163\145\x72\x6e\x61\x6d\145" => sprintf(__("\125\163\145\x72\x6e\141\x6d\x65\72\40\45\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto cqsiewasswyayuyk;
            wwkekusquqscgmsm:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto ooiysqkgmiqmkgeq;
            iuwaekscacmamkeu:
            cmqkuqqmciawcqaq:
            goto sewcwygikycqyqmu;
            wimcauwoukmwgcwc:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto syekaumywgekyoca;
            }
            goto qwaqsogsaaegoiko;
            ismooqwiqgmegcue:
            if (!$qmwikaeuqeyuaoiy) {
                goto sgcuekgueuimciki;
            }
            goto akqwmskmmcamuwkm;
            qwaqsogsaaegoiko:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto wwkekusquqscgmsm;
            sewcwygikycqyqmu:
        }
        goto eqakckaqmkweciao;
        simsoqkqsiqmwsaa:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x72\x6f\154\145" => $uagwmwoawiwkycao, "\x73\145\141\162\143\x68" => "\52{$qwcmueausqgiwigy}\x2a", "\x73\145\x61\x72\x63\150\x5f\x63\x6f\x6c\165\155\156\x73" => ["\x75\x73\x65\162\x5f\x75\162\x6c", "\x75\163\x65\162\137\x6c\x6f\x67\x69\x6e", "\x75\163\x65\162\137\x65\155\141\x69\x6c", "\x64\x69\163\160\x6c\x61\171\x5f\x6e\141\x6d\145", "\165\x73\145\x72\x5f\x6e\151\x63\x65\x6e\141\x6d\x65"], "\155\145\x74\x61\x5f\161\x75\145\162\171" => ["\162\145\154\141\164\x69\x6f\156" => "\x4f\122", ["\x6b\145\171" => "\x66\151\162\163\x74\x5f\x6e\x61\155\145", "\166\x61\154\165\145" => $qwcmueausqgiwigy, "\x63\x6f\x6d\x70\x61\x72\x65" => "\x4c\x49\x4b\105"], ["\153\x65\x79" => "\x6c\x61\x73\x74\137\156\x61\x6d\145", "\x76\141\x6c\x75\145" => $qwcmueausqgiwigy, "\x63\x6f\155\x70\x61\162\145" => "\114\x49\x4b\105"]]]));
        goto saekawmmwcmsyyaq;
        gocmieowkqeqwcks:
        giyaooswwsuyuema:
        goto ucaocaceeuqiggso;
        gwqyuyucgguaisyg:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto simsoqkqsiqmwsaa;
        qakaoeiwgeuckeka:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto qyowkusecoyawauc;
        qyowkusecoyawauc:
        $qeiakyocuggicwsy = [];
        goto gacweccyqemocmky;
        oagkkuowwccmeaoc:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto wymmeymakykomoeg;
        eqakckaqmkweciao:
        wwwcacoscyqesksm:
        goto oagkkuowwccmeaoc;
        ucaocaceeuqiggso:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\x69\156\143\x6c\x75\x64\145" => $aokagokqyuysuksm]);
        goto qqaecgmomioggcyu;
        wymmeymakykomoeg:
    }
    public function waoeigwigksoikgu()
    {
        goto mywoocikqmgcqsog;
        osiqkqkuswkomaui:
        goto oqsykugcsggakmoy;
        goto sescoamicygaiooy;
        mywoocikqmgcqsog:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto swekqaeccossoigy;
        quysmmuogiamswey:
        oqsykugcsggakmoy:
        goto wgmwswuwumgsyomo;
        saoqimsoqwweysso:
        if ($post) {
            goto ksqaeuyiiiuuouoi;
        }
        goto cwwusaokqsuisggk;
        cscgqokcugoeacek:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto quysmmuogiamswey;
        cuyoyqcisqywkqaa:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto cwoocwkqsoosaqkm;
        ekeiwcgqeikqiyks:
        gwaiikaaqgaoigay:
        goto aqwugymawgissagm;
        kyqsamceokgyseks:
        if ($aokagokqyuysuksm) {
            goto oekessmycksmemam;
        }
        goto saoqimsoqwweysso;
        omommciksgmosmku:
        $ywmkwiwkosakssii["\163\x74\x61\164\x75\x73"] = "\141\x70\160\162\x6f\166\x65";
        goto kyqsamceokgyseks;
        gayuaogckqsomgsy:
        kmccaesicogsgcmk:
        goto cuyoyqcisqywkqaa;
        aqwugymawgissagm:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto iayicqkseeycaaqk;
            iayicqkseeycaaqk:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto ioawiemsmsyyssyu;
            }
            goto mcqegwkqsoygamey;
            uyeqsmcyogggskye:
            $gskuwmeemyeuwogc = '';
            goto cayayuqimskqkayc;
            csgcicsyauawamqw:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto uyeqsmcyogggskye;
            cayayuqimskqkayc:
            if (!$qmwikaeuqeyuaoiy) {
                goto ayayswaesiscymcw;
            }
            goto qgcicekcucaauaka;
            eoasqcamsowcwweq:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto osysmqqcyasqyscm;
            qgcicekcucaauaka:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\143\157\x6d\x6d\x65\156\x74\57{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\x74\x69\164\x6c\145" => $pkyyagewkiyckmwy, "\x74\x61\170\157\x6e\x6f\155\171" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto cqcskimegccygqym;
            cqcskimegccygqym:
            ayayswaesiscymcw:
            goto eoasqcamsowcwweq;
            osysmqqcyasqyscm:
            ioawiemsmsyyssyu:
            goto aoooaekesimaisms;
            mcqegwkqsoygamey:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto csgcicsyauawamqw;
            aoooaekesimaisms:
            ewucaygocgykeweg:
            goto yosaemoyeeiykeai;
            yosaemoyeeiykeai:
        }
        goto gayuaogckqsomgsy;
        wgmwswuwumgsyomo:
        goto gwaiikaaqgaoigay;
        goto ykmkawakkqkuuaym;
        omoiwieaiucgikse:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x63\157\x6d\x6d\145\156\x74\x5f\x5f\151\x6e" => $aokagokqyuysuksm]));
        goto ekeiwcgqeikqiyks;
        ykmkawakkqkuuaym:
        oekessmycksmemam:
        goto omoiwieaiucgikse;
        sescoamicygaiooy:
        ksqaeuyiiiuuouoi:
        goto cscgqokcugoeacek;
        swekqaeccossoigy:
        $qeiakyocuggicwsy = [];
        goto omommciksgmosmku;
        cwwusaokqsuisggk:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x73\x65\141\x72\x63\150" => $qwcmueausqgiwigy]));
        goto osiqkqkuswkomaui;
        cwoocwkqsoosaqkm:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto oiwgeqquqqoougyk;
        oiwgeqquqqoougyk:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto ikcmyyecwuoacqyg;
        qacikuseouqsqmwq:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto ioagaggwicqesuyq;
        }
        goto sgwymesyqucmwwkw;
        meywqiioyoucokow:
        ioagaggwicqesuyq:
        goto gcmeeeyemkqeacws;
        agsmckaiamicsmku:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\141\162\147\163", "\173\x7d");
        goto cymiymiigkyegwqq;
        ikcmyyecwuoacqyg:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto agsmckaiamicsmku;
        kciusguyocmsuaeu:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\141\162\x6b\x75\x70", false);
        goto eiqaaeeseksuaoso;
        cuqiuaqqmiwysuss:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto symooqoecgcicomq;
        akkyiomimkeoskos:
        if (!is_string($ywmkwiwkosakssii)) {
            goto iuueumuwsooouiao;
        }
        goto cuqiuaqqmiwysuss;
        symooqoecgcicomq:
        iuueumuwsooouiao:
        goto ekywgoqskwiummes;
        ekywgoqskwiummes:
        if (!$kmiooagcykmqaiac) {
            goto gcwcoaasoisikiis;
        }
        goto qacikuseouqsqmwq;
        umqcguqgqygqossy:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\x65\x61\x72\143\x68", false);
        goto kciusguyocmsuaeu;
        cymiymiigkyegwqq:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\151\x74\x65\x6d\x73", null);
        goto umqcguqgqygqossy;
        gcmeeeyemkqeacws:
        gcwcoaasoisikiis:
        goto jsageqqwqkykweig;
        eiqaaeeseksuaoso:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\x65\155\160\154\x61\164\145\137\164\x79\160\145", "\151\156\144\145\x78");
        goto akkyiomimkeoskos;
        jsageqqwqkykweig:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto weyeyookuqayoakq;
        sgwymesyqucmwwkw:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto meywqiioyoucokow;
        weyeyookuqayoakq:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\144\x61\x74\141" => ["\x63\x6f\x6e\x74\145\156\164" => $ewgwqamkygiqaawc], "\164\x65\x78\164" => $cmwygeyygwqaemaq, "\x76\x61\154\165\x65" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto mogeeqsawaqyeaaa;
        qosuyiciqgmakegs:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto ysukiaoekgcswucm;
        mogeeqsawaqyeaaa:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\x70\141\147\145", 1));
        goto qosuyiciqgmakegs;
        ysukiaoekgcswucm:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto ycsockioamocssqc;
        ycsockioamocssqc:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto mcgskyeeqqsyswam;
        mcgskyeeqqsyswam:
        $keccaugmemegoimu = ["\x71\145\151\x61\153\171\x6f\x63\x75\147\147\151\143\x77\163\171" => $qeiakyocuggicwsy, "\155\157\162\145\137\162\x65\x73\165\x6c\x74\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto aiecqsmqwwceuigs;
        aiecqsmqwwceuigs:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto yugiaygagouuesgo;
        yugiaygagouuesgo:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto iugkiwiucuaueycm;
        qmwcqkmogmmseeaa:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\165\162\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto oyogcgssysygmeam;
            case "\x74\x69\x74\154\x65":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto oyogcgssysygmeam;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto oyogcgssysygmeam;
        }
        goto imycaqewmusocike;
        imycaqewmusocike:
        aogemgkeckkmuyus:
        goto yoowqwwqgyoqusam;
        qccqwqewgsuaassw:
        return $eqgoocgaqwqcimie;
        goto hisossycecaayukk;
        gagmssewkqoakmic:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\111\104";
        goto qmwcqkmogmmseeaa;
        iugkiwiucuaueycm:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\x70\x72\145\146\145\162", "\111\x44");
        goto gagmssewkqoakmic;
        yoowqwwqgyoqusam:
        oyogcgssysygmeam:
        goto qccqwqewgsuaassw;
        hisossycecaayukk:
    }
}
