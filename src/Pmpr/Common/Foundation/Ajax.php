<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const VALID_REQUESTED_VALE_FOR_POST = ["\x69\x64", "\164\151\164\x6c\145", "\x75\162\x6c"];
    const ADMIN_GET_ = "\141\144\x6d\x69\156\x5f\x67\145\x74\137";
    const ADMIN_GET_ICONS_ACTION = self::ADMIN_GET_ . "\151\143\157\x6e\163";
    const ADMIN_GET_POSTS_ACTION = self::ADMIN_GET_ . "\x70\157\x73\164\x73";
    const ADMIN_GET_TERMS_ACTION = self::ADMIN_GET_ . "\x74\145\162\x6d\163";
    const ADMIN_GET_USERS_ACTION = self::ADMIN_GET_ . "\165\x73\x65\162\163";
    const ADMIN_GET_MODELS_ACTION = self::ADMIN_GET_ . "\x6d\x6f\144\x65\x6c\x73";
    const ADMIN_GET_COMMENTS_ACTION = self::ADMIN_GET_ . "\x63\157\155\155\145\156\164\163";
    const ADMIN_ADD_NEW_TERM_ACTION = "\141\x64\x6d\151\156\x5f\141\144\x64\x5f\156\x65\x77\x5f\164\145\x72\x6d";
    const FRONT_GET_NONCE_ACTION = "\x66\162\157\156\x74\x5f\147\x65\164\137\156\x6f\x6e\143\145";
    const FRONT_ACTIONS = ["\147\145\164\137\x6e\x6f\156\x63\x65" => self::FRONT_GET_NONCE_ACTION];
    const ADMIN_ACTIONS = ["\141\144\144\137\x74\145\x72\155" => self::ADMIN_ADD_NEW_TERM_ACTION, "\147\x65\x74\137\151\x63\x6f\x6e\163" => self::ADMIN_GET_ICONS_ACTION, "\x67\x65\164\137\x70\157\x73\164\163" => self::ADMIN_GET_POSTS_ACTION, "\x67\145\x74\137\164\x65\162\155\163" => self::ADMIN_GET_TERMS_ACTION, "\147\145\164\x5f\165\163\145\162\x73" => self::ADMIN_GET_USERS_ACTION, "\x67\145\x74\137\155\x6f\144\x65\154\x73" => self::ADMIN_GET_MODELS_ACTION, "\147\x65\164\x5f\x63\157\x6d\x6d\x65\156\x74\163" => self::ADMIN_GET_COMMENTS_ACTION];
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\x65\x6e\161\x75\145\x75\x65"])->iqkqummseggmikgo(self::FRONT_GET_NONCE_ACTION, [$this, "\153\147\147\163\x75\x65\171\x75\x79\161\145\x71\145\x75\163\x63"])->koaegcswmcqsiykq(self::ADMIN_GET_POSTS_ACTION, [$this, "\151\x79\163\163\147\x6f\x69\167\147\167\171\147\x65\x61\x63\147"])->koaegcswmcqsiykq(self::ADMIN_GET_ICONS_ACTION, [$this, "\153\x77\141\x67\153\145\155\147\141\167\x75\157\x61\x63\x77\171"])->koaegcswmcqsiykq(self::ADMIN_GET_TERMS_ACTION, [$this, "\x77\145\x65\163\x63\x77\x77\x67\161\x67\151\x79\x75\x6d\x79\167"])->koaegcswmcqsiykq(self::ADMIN_GET_USERS_ACTION, [$this, "\155\145\155\x75\x75\153\x77\x73\x6d\x6f\x79\161\x75\x73\165\x61"])->koaegcswmcqsiykq(self::ADMIN_ADD_NEW_TERM_ACTION, [$this, "\165\171\151\167\147\155\145\x71\x6d\x6f\143\147\x79\161\147\153"])->koaegcswmcqsiykq(self::ADMIN_GET_COMMENTS_ACTION, [$this, "\167\141\x6f\145\x69\147\167\151\147\x6b\163\x6f\x69\153\147\x75"])->koaegcswmcqsiykq(self::ADMIN_GET_MODELS_ACTION, [$this, "\x6f\x73\x65\171\x79\x75\165\x79\x75\x6b\x63\x77\x69\143\x61\161"]);
        parent::wigskegsqequoeks();
    }
    public function enqueue()
    {
        $this->miocmcoykayoyyau()->ieayqiyiuuguowyq("\141\152\x61\170", Ajax::FRONT_ACTIONS)->ikqyiskqaaymscgw("\x61\x6a\x61\x78", Ajax::ADMIN_ACTIONS);
    }
    public function uyiwgmeqmocgyqgk()
    {
        goto cqamkyuumwogqcas;
        aegcoomigmqwwaka:
        mqgywkmwkwqgsius:
        goto guqgcqqsyaacwsuk;
        sewqkgoqqeiogwgc:
        $occymigcemkqucuw = true;
        goto ewasskcgskcwkeyq;
        mkyomwyoeskcakyi:
        $kesssewsiegssiya = ManipulateArray::get($icwicymcioeyeyek, self::TAXONOMY);
        goto eiwwmuekkuasciug;
        geasmqwwokmeqayu:
        ewysmowcmmykqscm:
        goto sewqkgoqqeiogwgc;
        iomkccwaewyicouy:
        $sogksuscggsicmac = ["\151\164\x65\x6d" => ManipulateTerm::get(ManipulateTerm::mwikyscisascoeea($sogksuscggsicmac, true)), "\163\145\x6c\145\x63\164" => $iiueagsqmqqkiiwm];
        goto eemagcyswykuayai;
        gwyacasmwuiceqwi:
        goto sweokouicekqeyse;
        goto geasmqwwokmeqayu;
        cqamkyuumwogqcas:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto mqmquwuyocuoikae;
        tmyuuoeywociqseo:
        $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::VALUE);
        goto mkyomwyoeskcakyi;
        eemagcyswykuayai:
        sweokouicekqeyse:
        goto aegcoomigmqwwaka;
        mqssosgumiesimkw:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\x70\163\x21\x20\123\157\155\145\164\x68\x69\x6e\147\40\151\x73\x20\167\x72\157\x6e\x67\56\40\101\162\145\x20\171\x6f\165\40\164\x72\x79\40\164\157\x20\141\x64\144\x20\145\170\151\163\164\x20\x76\141\154\165\x65\x3f\x21", PR__CMN__FOUNDATION), "\x65\x72\x72\x6f\162");
        goto gwyacasmwuiceqwi;
        ocysawskymukqmeq:
        goto mqgywkmwkwqgsius;
        goto pamyaqouossmosoe;
        gswwomycucqmsywk:
        $post = ManipulateArray::get($icwicymcioeyeyek, self::POST);
        goto tmyuuoeywociqseo;
        oskymakeiqaoiukk:
        if (is_array($sogksuscggsicmac)) {
            goto ewysmowcmmykqscm;
        }
        goto mqssosgumiesimkw;
        isqacycsggwaoyqw:
        $iiueagsqmqqkiiwm = wp_dropdown_categories($ywmkwiwkosakssii);
        goto iomkccwaewyicouy;
        pamyaqouossmosoe:
        skyckeomciwscaso:
        goto eckeocwysskicowi;
        eckeocwysskicowi:
        $sogksuscggsicmac = wp_insert_term($eqgoocgaqwqcimie, $kesssewsiegssiya, ["\x70\141\162\x65\156\x74" => ManipulateArray::get($icwicymcioeyeyek, "\160\x61\x72\x65\156\164", -1)]);
        goto oskymakeiqaoiukk;
        guqgcqqsyaacwsuk:
        $this->uaggqsoeugksgooc($occymigcemkqucuw, $sogksuscggsicmac);
        goto eoqccooyeaocyegw;
        mqmquwuyocuoikae:
        $occymigcemkqucuw = false;
        goto gswwomycucqmsywk;
        ewasskcgskcwkeyq:
        $ywmkwiwkosakssii = Taxonomy::esqgqsacwywoakok($kesssewsiegssiya, false);
        goto isqacycsggwaoyqw;
        eiwwmuekkuasciug:
        if ($post && $eqgoocgaqwqcimie && $kesssewsiegssiya) {
            goto skyckeomciwscaso;
        }
        goto acmoisuwocsciyae;
        acmoisuwocsciyae:
        $sogksuscggsicmac = ManipulateHTML::oockkqiqsssakuug(__("\x4f\160\163\x21\40\123\157\155\x65\x74\x68\151\x6e\147\40\x69\x73\x20\167\x72\157\x6e\x67\x2e\40\101\162\145\x20\171\x6f\x75\40\150\x61\x63\153\151\x6e\147\x3f\41\40\x3a\x28", PR__CMN__FOUNDATION), "\x65\x72\162\157\162");
        goto ocysawskymukqmeq;
        eoqccooyeaocyegw:
    }
    
    public function kggsueyuyqeqeusc($ywmkwiwkosakssii = [])
    {
        goto wwqmyeqgkqmkoosk;
        eukeqiqsekiaqkyk:
        $keccaugmemegoimu = wp_nonce_field($aiamqeawckcsuaou, $ymqmyyeuycgmigyo, false, false);
        goto uyewsowgcymwsuwu;
        wwqmyeqgkqmkoosk:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, "\156\x61\155\145", self::AJAX_NONCE_KEY);
        goto sqygiwwewksqgica;
        uyewsowgcymwsuwu:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto aqqqwiuwoymusgey;
        sqygiwwewksqgica:
        $aiamqeawckcsuaou = ManipulateArray::get($ywmkwiwkosakssii, "\141\x63\x74\151\x6f\x6e", self::AJAX_NONCE);
        goto eukeqiqsekiaqkyk;
        aqqqwiuwoymusgey:
    }
    public function kwagkemgawuoacwy()
    {
        goto guyauwwommggyukw;
        akqwyoaqqkwiweke:
        foreach ($ykiyyumywksqcisg as $ymqmyyeuycgmigyo => $ewgwqamkygiqaawc) {
            goto ioscumsgeuoekyik;
            kymauouamycysiyy:
            $ewgwqamkygiqaawc = html_entity_decode($ewgwqamkygiqaawc);
            goto kumiqmuaqymmkyic;
            eusmmqcsiiyiogqg:
            if (!$eqgoocgaqwqcimie) {
                goto wecayusimwoiswuw;
            }
            goto kymauouamycysiyy;
            ioscumsgeuoekyik:
            $eqgoocgaqwqcimie = ManipulateArray::get($wmgwaquemmoicmas, $ymqmyyeuycgmigyo);
            goto eusmmqcsiiyiogqg;
            kumiqmuaqymmkyic:
            $sogksuscggsicmac[$eqgoocgaqwqcimie] = $this->eqawqeqeguyuiage('', $eqgoocgaqwqcimie, $ewgwqamkygiqaawc);
            goto iqecwuuaikqmkqyy;
            iqecwuuaikqmkqyy:
            wecayusimwoiswuw:
            goto wyiuscyymgoqkmws;
            wyiuscyymgoqkmws:
            aysoyukoimiemacc:
            goto wsymimooikcoeamc;
            wsymimooikcoeamc:
        }
        goto quuwumayckugywiy;
        akogicckgmsmmiag:
        $aqusecigwqocqyqc = [IconBankInterface::class, IconBrandInterface::class, IconFontawesomeInterface::class];
        goto qgwisswsyykiimuq;
        swwaaaeuyyocowgq:
        mqimqkqmmswccmew:
        goto wggceogiyyyaoqca;
        uckmiiogqewqoqyg:
        $this->iowaeiauaiawquqi($sogksuscggsicmac);
        goto rkguoumeeggoqums;
        wggceogiyyyaoqca:
        $ykiyyumywksqcisg = [];
        goto saicagwascmeamuk;
        ksukgeseassggeke:
        oeqekywmewqowkwg:
        goto wyiyueigwggemieu;
        wyiyueigwggemieu:
        if (!in_array($aokagokqyuysuksm, $wmgwaquemmoicmas)) {
            goto kmycyawgoewowaeq;
        }
        goto kkqcmwywuusgekmw;
        teeogqoaqaamycck:
        $qwcmueausqgiwigy = strtolower($qwcmueausqgiwigy);
        goto cuoeygmcaqgwuauk;
        wqykcwiyiawemsii:
        $ykiyyumywksqcisg = array_slice($meyiiwcswqmuggyg, 0, 50);
        goto sqcuywaguiesgqks;
        cksgmgyakmmkomoq:
        $ykiyyumywksqcisg = MetaBox::_getEscapedIcons($ykiyyumywksqcisg);
        goto akqwyoaqqkwiweke;
        cgewmgsswwywkoki:
        if ($aokagokqyuysuksm) {
            goto oeqekywmewqowkwg;
        }
        goto teeogqoaqaamycck;
        quuwumayckugywiy:
        soeueuyguemogamc:
        goto ueeuaosuuqakmouy;
        guyauwwommggyukw:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq(false);
        goto akogicckgmsmmiag;
        ueeuaosuuqakmouy:
        gmqcqaiwkusyiuey:
        goto uckmiiogqewqoqyg;
        qwiikwcawgeqkuwi:
        gseomoauqsuqccme:
        goto uayimmyaoyciogiq;
        sqcuywaguiesgqks:
        goto gseomoauqsuqccme;
        goto ksukgeseassggeke;
        maakkwkkckwawgqq:
        foreach ($aqusecigwqocqyqc as $oouysqigwayiqgkk) {
            goto uqogiiekomwssgee;
            uqogiiekomwssgee:
            $oqkmoekaagukcwia = new ReflectionClass($oouysqigwayiqgkk);
            goto soumiseyqqgqccym;
            soumiseyqqgqccym:
            $wmgwaquemmoicmas = array_merge($wmgwaquemmoicmas, $oqkmoekaagukcwia->uamsoaqoskqmyesm());
            goto wsgkyquaeocsaiqk;
            wsgkyquaeocsaiqk:
            oamigoywuyowgcow:
            goto kegeyiwiieqmocsk;
            kegeyiwiieqmocsk:
        }
        goto swwaaaeuyyocowgq;
        eusgmgmouwqgoomc:
        kmycyawgoewowaeq:
        goto qwiikwcawgeqkuwi;
        uayimmyaoyciogiq:
        if (!$ykiyyumywksqcisg) {
            goto gmqcqaiwkusyiuey;
        }
        goto cksgmgyakmmkomoq;
        cuoeygmcaqgwuauk:
        $meyiiwcswqmuggyg = array_filter($wmgwaquemmoicmas, function ($gygawogosumsgmme) use($qwcmueausqgiwigy) {
            return preg_match("\x2f\134\x62{$qwcmueausqgiwigy}\x5c\142\57\151", $gygawogosumsgmme);
        });
        goto wqykcwiyiawemsii;
        uukuqcowwaqgmgag:
        $ykiyyumywksqcisg = [$uusmaiomayssaecw => $wmgwaquemmoicmas[$uusmaiomayssaecw]];
        goto eusgmgmouwqgoomc;
        kkqcmwywuusgekmw:
        $uusmaiomayssaecw = array_search($aokagokqyuysuksm, $wmgwaquemmoicmas);
        goto uukuqcowwaqgmgag;
        qgwisswsyykiimuq:
        $wmgwaquemmoicmas = [];
        goto maakkwkkckwawgqq;
        saicagwascmeamuk:
        $sogksuscggsicmac = [];
        goto cgewmgsswwywkoki;
        rkguoumeeggoqums:
    }
    public function oseyyuuyukcwicaq()
    {
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
    }
    public function iyssgoiwgwygeacg()
    {
        goto okocmqiikuykcaqg;
        wqomsowsgcumucgm:
        foreach ($wyoiwuqokyeeuguk as $post) {
            goto agguamgmwsacekmq;
            iiseqqukqsuysmmc:
            $gskuwmeemyeuwogc = '';
            goto kumkykyegsquigkw;
            qaaqumsmuwkoykam:
            kmkuwkyoemikcice:
            goto iuwqyoikmeusiweg;
            qsaucowgmgqqwicy:
            $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($post);
            goto iiseqqukqsuysmmc;
            mksywokiwukaeyua:
            meymkkgksakewqqs:
            goto qeymeieqwmicycee;
            agguamgmwsacekmq:
            if (!$post instanceof WP_Post) {
                goto siemouciksuawwae;
            }
            goto qsaucowgmgqqwicy;
            iuwqyoikmeusiweg:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage(ManipulatePost::uikgwcuascgeissw($post), $this->cwqsecwssgggwiag($post), $gskuwmeemyeuwogc);
            goto ascaskisqyaysyoy;
            ascaskisqyaysyoy:
            siemouciksuawwae:
            goto mksywokiwukaeyua;
            kumkykyegsquigkw:
            if (!$qmwikaeuqeyuaoiy) {
                goto kmkuwkyoemikcice;
            }
            goto ouimacsoeokwcuwa;
            ouimacsoeokwcuwa:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\160\x6f\x73\x74\x2f{$qqscaoyqikuyeoaw}", ["\111\x44" => $aokagokqyuysuksm, "\x64\141\x74\x65" => ManipulatePost::squyiyimquqicqke(null, $post), "\x74\x69\164\x6c\145" => ManipulatePost::qcgakseyaikigqco($post), "\141\x75\164\150\x6f\x72" => ManipulatePost::ygwimyogyaqgumam($post->post_author), "\150\141\163\137\x69\155\141\147\x65" => ManipulateArray::get($ywmkwiwkosakssii, "\150\141\163\x5f\151\155\x61\147\x65", false), "\160\157\163\164\x5f\164\x79\x70\x65" => ManipulatePost::waaisqccqacqeium(ManipulatePost::gueasuouwqysmomu($post))->label]);
            goto qaaqumsmuwkoykam;
            qeymeieqwmicycee:
        }
        goto cykamcqoaeemeeak;
        aquuskeeeususkmw:
        $oammesyieqmwuwyi = ManipulatePost::mwoyqeeigwqoamiw();
        goto iegqiaoekkmuuqgo;
        uuqcwagaocukcqky:
        if ($oammesyieqmwuwyi) {
            goto koaowyckqwoeioea;
        }
        goto aquuskeeeususkmw;
        oswskykoomgqysqo:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto goqeumecwiwykkog;
        myeksmogkuwykamg:
        $wyoiwuqokyeeuguk = ManipulatePost::igkcwemyysqkwuuy($qwcmueausqgiwigy, $oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto kgakoeoomqmiuyou;
        iegqiaoekkmuuqgo:
        koaowyckqwoeioea:
        goto ksiaqmsuomessmmm;
        okocmqiikuykcaqg:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ewkqkysmqgeugeoy;
        ewkqkysmqgeugeoy:
        $qisccquumwewokoy = ["\160\165\142\154\151\x73\x68"];
        goto ccwuggocayogugme;
        tmoywiwaesgeqkau:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x70\157\x73\x74\163\137\x61\x72\147\x73"), $ywmkwiwkosakssii);
        goto myeksmogkuwykamg;
        aioymewmgwwgqiwu:
        sciawoykmqyoimsk:
        goto uyeukoyamsaakqik;
        kgakoeoomqmiuyou:
        goto eyggicmmeuqywwmm;
        goto iumwoegoeuimmqqc;
        yiiiyygiowkogagq:
        $qisccquumwewokoy[] = "\x69\156\150\145\x72\151\164";
        goto aioymewmgwwgqiwu;
        ccwuggocayogugme:
        $qeiakyocuggicwsy = [];
        goto uuqcwagaocukcqky;
        mymoaysqioskuqqw:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\157\x73\x74\x5f\163\x74\141\x74\x75\163" => $qisccquumwewokoy]);
        goto tmoywiwaesgeqkau;
        ksiaqmsuomessmmm:
        if (!($oammesyieqmwuwyi == "\x61\x74\x74\x61\143\x68\x6d\145\156\164" || is_array($oammesyieqmwuwyi) && in_array("\141\164\164\141\x63\x68\155\145\x6e\x74", $oammesyieqmwuwyi))) {
            goto sciawoykmqyoimsk;
        }
        goto yiiiyygiowkogagq;
        cwoescoukwcqeqey:
        $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\x5f\160\157\163\164\x73\x5f\141\162\x67\163"), $ywmkwiwkosakssii);
        goto qgskwweecckaecsy;
        qgskwweecckaecsy:
        $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($oammesyieqmwuwyi, $ywmkwiwkosakssii);
        goto qiuyeygsgwskkwoy;
        mcoyueciqyqiigcc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x6f\x73\164\137\x73\x74\141\x74\x75\x73" => $qisccquumwewokoy, self::POST__IN => $aokagokqyuysuksm]);
        goto cwoescoukwcqeqey;
        uyeukoyamsaakqik:
        if ($aokagokqyuysuksm) {
            goto cukokoemmuwiwqyq;
        }
        goto mymoaysqioskuqqw;
        iumwoegoeuimmqqc:
        cukokoemmuwiwqyq:
        goto mcoyueciqyqiigcc;
        qiuyeygsgwskkwoy:
        eyggicmmeuqywwmm:
        goto wqomsowsgcumucgm;
        cykamcqoaeemeeak:
        uoaccgmmgiwmamsk:
        goto oswskykoomgqysqo;
        goqeumecwiwykkog:
    }
    public function weescwwgqgiyumyw()
    {
        goto yksoqouokyaskqki;
        caykmykgamymycgk:
        if (!$kesssewsiegssiya) {
            goto ggqscaceqcsgksaq;
        }
        goto keqaggeoasegyigg;
        gyiiogoieoicewae:
        foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) {
            goto ayskeggsaioeeogy;
            iiyiequuscsgsqiq:
            qwqsokugksycwkom:
            goto kooeoiymgykqaycs;
            meicoiioyccqusio:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\164\145\162\x6d\57{$qqscaoyqikuyeoaw}", ["\111\104" => $aokagokqyuysuksm, "\x74\151\x74\x6c\145" => $ymqmyyeuycgmigyo, "\164\x61\x78\x6f\x6e\157\x6d\x79" => ManipulateTaxonomy::imgymusqgccqsqqq($iwewcwusemqaiggk)]);
            goto iiyiequuscsgsqiq;
            eqgeksiquqymuaca:
            cwckmmsiouyaucea:
            goto cyckueeyskywyumk;
            ayskeggsaioeeogy:
            if (!$iwewcwusemqaiggk instanceof WP_Term) {
                goto amuiigmiqoueiisi;
            }
            goto wggiaskwosqecsuy;
            gakcwmyakwyigswc:
            $ymqmyyeuycgmigyo = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk);
            goto gsgsosqeoemwguea;
            mgqogcswmqgcgmac:
            if (!$qmwikaeuqeyuaoiy) {
                goto qwqsokugksycwkom;
            }
            goto meicoiioyccqusio;
            kooeoiymgykqaycs:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto miuswwgqmgicyuaq;
            miuswwgqmgicyuaq:
            amuiigmiqoueiisi:
            goto eqgeksiquqymuaca;
            wggiaskwosqecsuy:
            $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk);
            goto gakcwmyakwyigswc;
            gsgsosqeoemwguea:
            $gskuwmeemyeuwogc = '';
            goto mgqogcswmqgcgmac;
            cyckueeyskywyumk:
        }
        goto uauggckimussuumk;
        uowyqyiqscmccsei:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto ysemiouayuuqimyg;
        qomigguamoeqekky:
        ickmakmomaakmmmc:
        goto gkggmkmswikmmmki;
        uauggckimussuumk:
        ckkkkwqaqcyuqweo:
        goto emgwikaikyywkmwm;
        umwasmakyyqqigyq:
        $qeiakyocuggicwsy = [];
        goto caykmykgamymycgk;
        saiwskyicecogocg:
        $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee));
        goto gyiiogoieoicewae;
        gkggmkmswikmmmki:
        $ggauoeuaesiymgee = ["\x69\156\143\x6c\x75\144\x65" => ConvertArray::comkeiiwgwaqmcwe($aokagokqyuysuksm), "\150\151\144\x65\x5f\x65\155\160\x74\171" => 0];
        goto yucyeouoieoqgqos;
        yucyeouoieoqgqos:
        immuwwqcgeeikcoc:
        goto saiwskyicecogocg;
        emgwikaikyywkmwm:
        ggqscaceqcsgksaq:
        goto uowyqyiqscmccsei;
        keqaggeoasegyigg:
        if ($aokagokqyuysuksm) {
            goto ickmakmomaakmmmc;
        }
        goto kyuseiceyycyoqiy;
        kyuseiceyycyoqiy:
        $ggauoeuaesiymgee = ["\156\x61\x6d\145\137\137\154\x69\x6b\x65" => $qwcmueausqgiwigy, "\150\151\x64\145\x5f\145\x6d\x70\x74\171" => 0, "\156\165\x6d\x62\x65\162" => ''];
        goto kmcccsgokysskgqg;
        yksoqouokyaskqki:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $kesssewsiegssiya, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto umwasmakyyqqigyq;
        kmcccsgokysskgqg:
        goto immuwwqcgeeikcoc;
        goto qomigguamoeqekky;
        ysemiouayuuqimyg:
    }
    public function memuukwsmoyqusua()
    {
        goto oekqegamyyuuqcoy;
        kqgsykaimimimyae:
        foreach ($kcugcsqiuqaomqom as $mkucggyaiaukqoce) {
            goto cysugoacwakoqwiu;
            ykseokcqemaqqyae:
            kksgsgiywgosikqa:
            goto eyymwewkeseeaggc;
            kegoyegkioysaaai:
            $gskuwmeemyeuwogc = '';
            goto yowqeciqwemaysog;
            cysugoacwakoqwiu:
            if (!$mkucggyaiaukqoce instanceof WP_User) {
                goto acqkeymqakmcumko;
            }
            goto cukuyoqwmyggamgu;
            eyymwewkeseeaggc:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($ymqmyyeuycgmigyo, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto ikiqwekimqmyuuis;
            aaiwsiciesymiaok:
            dgawqiokqseygyqe:
            goto sskkqugewogogagg;
            kgeyoegiqceocosu:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\165\x73\x65\x72\x2f{$qqscaoyqikuyeoaw}", ["\x49\x44" => $aokagokqyuysuksm, "\156\141\x6d\x65" => sprintf(__("\x4e\141\x6d\x65\72\x20\45\163", PR__CMN__FOUNDATION), $ymqmyyeuycgmigyo), "\x65\155\141\x69\x6c" => sprintf(__("\x45\x6d\x61\151\154\72\x20\45\x73", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_email), "\x72\157\154\x65\163" => sprintf(__("\x52\x6f\x6c\x65\163\x3a\40\45\163", PR__CMN__FOUNDATION), json_encode($mkucggyaiaukqoce->roles)), "\x75\163\145\162\156\141\155\145" => sprintf(__("\125\x73\145\x72\x6e\x61\155\145\x3a\x20\45\163", PR__CMN__FOUNDATION), $mkucggyaiaukqoce->user_login)]);
            goto ykseokcqemaqqyae;
            yowqeciqwemaysog:
            if (!$qmwikaeuqeyuaoiy) {
                goto kksgsgiywgosikqa;
            }
            goto kgeyoegiqceocosu;
            cukuyoqwmyggamgu:
            $aokagokqyuysuksm = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce);
            goto immogeiuaiqwkcgy;
            immogeiuaiqwkcgy:
            $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce);
            goto kegoyegkioysaaai;
            ikiqwekimqmyuuis:
            acqkeymqakmcumko:
            goto aaiwsiciesymiaok;
            sskkqugewogogagg:
        }
        goto cuyskuymgaukqaey;
        cuyskuymgaukqaey:
        akakuqyqwwuquiia:
        goto cmaoqqqqaqwqsaii;
        ggskywuesswiqwqw:
        $qeiakyocuggicwsy = [];
        goto mimueoiwogkckmei;
        oekqegamyyuuqcoy:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $uagwmwoawiwkycao, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto ggskywuesswiqwqw;
        wuucaoemqqoomiey:
        goto mmmyemwwkkmsomoq;
        goto gwyuiugysgmueoik;
        asgouseqowywicmy:
        mmmyemwwkkmsomoq:
        goto kqgsykaimimimyae;
        gwyuiugysgmueoik:
        yqssyeyuimcmauao:
        goto cakayowsqeqayweo;
        cakayowsqeqayweo:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(["\x69\x6e\143\154\165\144\145" => $aokagokqyuysuksm]);
        goto asgouseqowywicmy;
        wyyqkqigmomsqsmi:
        $qwcmueausqgiwigy = esc_attr(trim($qwcmueausqgiwigy));
        goto yuwoskumkgymgauq;
        mimueoiwogkckmei:
        if ($aokagokqyuysuksm) {
            goto yqssyeyuimcmauao;
        }
        goto wyyqkqigmomsqsmi;
        yuwoskumkgymgauq:
        $kcugcsqiuqaomqom = DecoratorUser::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\162\157\x6c\x65" => $uagwmwoawiwkycao, "\163\x65\141\x72\143\150" => "\52{$qwcmueausqgiwigy}\52", "\x73\x65\141\x72\x63\x68\x5f\143\157\154\165\155\156\x73" => ["\x75\x73\145\x72\137\165\162\x6c", "\165\x73\x65\x72\x5f\154\157\x67\x69\x6e", "\165\x73\x65\x72\137\145\155\x61\151\154", "\144\151\x73\x70\x6c\141\171\137\156\141\155\x65", "\165\x73\x65\x72\x5f\x6e\x69\143\x65\156\141\x6d\x65"], "\155\x65\x74\141\137\x71\x75\145\x72\x79" => ["\x72\x65\154\141\x74\x69\157\x6e" => "\x4f\122", ["\153\x65\171" => "\146\151\x72\x73\164\137\156\141\x6d\145", "\x76\x61\x6c\x75\145" => $qwcmueausqgiwigy, "\x63\157\155\160\x61\162\145" => "\114\x49\x4b\105"], ["\153\x65\171" => "\154\141\163\164\x5f\156\141\x6d\145", "\x76\x61\x6c\165\145" => $qwcmueausqgiwigy, "\143\157\155\x70\x61\162\145" => "\114\x49\x4b\105"]]]));
        goto wuucaoemqqoomiey;
        cmaoqqqqaqwqsaii:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto iiomwaiuuemuygkq;
        iiomwaiuuemuygkq:
    }
    public function waoeigwigksoikgu()
    {
        goto akcygikyemoocswm;
        uiskasyyiewuwmmk:
        $ywmkwiwkosakssii["\163\164\141\164\165\x73"] = "\141\160\x70\x72\157\x76\x65";
        goto mkaiiiimcywymqgk;
        uaqsosmwikwoqioa:
        mgukweouugammoui:
        goto wsogoeqsmeucowak;
        uswycqewimcuqmua:
        goto wsqoesokcweweiga;
        goto uosiwiemuswkisyq;
        woemukewigiwuyis:
        wsqoesokcweweiga:
        goto ymkmgwqugkeoeyas;
        ooggyokmmcmwygwk:
        wakyowemmceeeqiy:
        goto uswycqewimcuqmua;
        akcygikyemoocswm:
        [$aokagokqyuysuksm, $qwcmueausqgiwigy, $post, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw] = $this->seyyiqmgwymyumoq();
        goto segwckgisqwkowcc;
        iaouysocayacmusu:
        akysqyaywkiwwoog:
        goto ogoaaswoyusgsycg;
        uosiwiemuswkisyq:
        qscwycyimmeagyim:
        goto iissqgqwyqmmqugg;
        sqsggomiyygwoumi:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\163\x65\x61\162\143\x68" => $qwcmueausqgiwigy]));
        goto yckuogqwcayqumoq;
        segwckgisqwkowcc:
        $qeiakyocuggicwsy = [];
        goto uiskasyyiewuwmmk;
        iissqgqwyqmmqugg:
        $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x63\x6f\155\x6d\145\156\x74\x5f\137\151\x6e" => $aokagokqyuysuksm]));
        goto woemukewigiwuyis;
        mkaiiiimcywymqgk:
        if ($aokagokqyuysuksm) {
            goto qscwycyimmeagyim;
        }
        goto qqoyaewmawgkcmqo;
        qqoyaewmawgkcmqo:
        if ($post) {
            goto mgukweouugammoui;
        }
        goto sqsggomiyygwoumi;
        ymkmgwqugkeoeyas:
        foreach ($kcagcoeuiasswusq as $aqqmosqmsuueyaes) {
            goto goaqoeqygekuaywo;
            keaoumygogemaeek:
            $gskuwmeemyeuwogc = $this->iuygowkemiiwqmiw("\x63\157\x6d\155\145\156\x74\x2f{$qqscaoyqikuyeoaw}", ["\x49\104" => $aokagokqyuysuksm, "\164\x69\164\154\145" => $pkyyagewkiyckmwy, "\164\141\x78\157\156\x6f\x6d\x79" => ManipulateComment::get($aqqmosqmsuueyaes)]);
            goto osyceoeiwaucwgci;
            yuauuacmomcmgggi:
            if (!$qmwikaeuqeyuaoiy) {
                goto wuiciowuskgmysck;
            }
            goto keaoumygogemaeek;
            iswssqmsymsiqygm:
            $pkyyagewkiyckmwy = ManipulateComment::uikgwcuascgeissw($aqqmosqmsuueyaes);
            goto giiymwkcouoegqgo;
            giiymwkcouoegqgo:
            $gskuwmeemyeuwogc = '';
            goto yuauuacmomcmgggi;
            owswawakaekmsckk:
            moykkkgogaygokus:
            goto sigumeougskmckcy;
            osyceoeiwaucwgci:
            wuiciowuskgmysck:
            goto sumqgcmuacwikauo;
            sumqgcmuacwikauo:
            $qeiakyocuggicwsy[$aokagokqyuysuksm] = $this->eqawqeqeguyuiage($pkyyagewkiyckmwy, $aokagokqyuysuksm, $gskuwmeemyeuwogc);
            goto sigsaocukiawcgqe;
            igumwqkcasocmuui:
            $aokagokqyuysuksm = ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes);
            goto iswssqmsymsiqygm;
            sigsaocukiawcgqe:
            kamgygkuikoaigyw:
            goto owswawakaekmsckk;
            goaqoeqygekuaywo:
            if (!$aqqmosqmsuueyaes instanceof WP_Comment) {
                goto kamgygkuikoaigyw;
            }
            goto igumwqkcasocmuui;
            sigumeougskmckcy:
        }
        goto iaouysocayacmusu;
        wsogoeqsmeucowak:
        $kcagcoeuiasswusq = ManipulatePost::waoeigwigksoikgu($post, $ywmkwiwkosakssii);
        goto ooggyokmmcmwygwk;
        ogoaaswoyusgsycg:
        $this->iowaeiauaiawquqi($qeiakyocuggicwsy);
        goto qqewqsyyogoieaqc;
        yckuogqwcayqumoq:
        goto wakyowemmceeeqiy;
        goto uaqsosmwikwoqioa;
        qqewqsyyogoieaqc:
    }
    
    public function seyyiqmgwymyumoq($kmiooagcykmqaiac = true) : array
    {
        goto kgyiqgaemwaqwome;
        myouqgwqoegsyseg:
        $qmwikaeuqeyuaoiy = ManipulateArray::get($icwicymcioeyeyek, "\x6d\x61\x72\153\165\x70", false);
        goto ygkwwkuaqoemuaqq;
        yoqkmcigwewgykya:
        mygwgowqguameswo:
        goto smekigasqcyykywe;
        qgkuoayqesmgmcmq:
        keygmsycouauqmqc:
        goto iggkoiikmckimmmw;
        kuuickoqgquuqwci:
        $aokagokqyuysuksm = ManipulateArray::get($icwicymcioeyeyek, self::ID, false);
        goto akwkqauksyquwkqc;
        ckuegykmyekmewco:
        return [$aokagokqyuysuksm, $qwcmueausqgiwigy, $oammesyieqmwuwyi, $qmwikaeuqeyuaoiy, $ywmkwiwkosakssii, $qqscaoyqikuyeoaw];
        goto yqucaaqoyswiskeg;
        kgyiqgaemwaqwome:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto kuuickoqgquuqwci;
        iggkoiikmckimmmw:
        if (!$kmiooagcykmqaiac) {
            goto cciyuigcccggekmc;
        }
        goto ueoywqkaiwqoeakw;
        ygkwwkuaqoemuaqq:
        $qqscaoyqikuyeoaw = ManipulateArray::get($icwicymcioeyeyek, "\x74\x65\x6d\x70\154\141\164\145\x5f\164\171\160\145", "\x69\156\x64\145\170");
        goto uqyqsmgeeiyiaqck;
        yaaggqiuogwiyeia:
        $aokagokqyuysuksm = [$aokagokqyuysuksm];
        goto yoqkmcigwewgykya;
        wqyiquqemcueoogs:
        $oammesyieqmwuwyi = ManipulateArray::get($icwicymcioeyeyek, "\x69\x74\145\155\x73", null);
        goto omoomgsaackaseqm;
        akwkqauksyquwkqc:
        $ywmkwiwkosakssii = ManipulateArray::get($icwicymcioeyeyek, "\x61\x72\x67\163", "\173\x7d");
        goto wqyiquqemcueoogs;
        uwkaosmauksiukco:
        $ywmkwiwkosakssii = json_decode(wp_unslash($ywmkwiwkosakssii), true);
        goto qgkuoayqesmgmcmq;
        omoomgsaackaseqm:
        $qwcmueausqgiwigy = ManipulateArray::get($icwicymcioeyeyek, "\163\x65\141\162\143\x68", false);
        goto myouqgwqoegsyseg;
        ueoywqkaiwqoeakw:
        if (!(!is_array($aokagokqyuysuksm) && $aokagokqyuysuksm)) {
            goto mygwgowqguameswo;
        }
        goto yaaggqiuogwiyeia;
        uqyqsmgeeiyiaqck:
        if (!is_string($ywmkwiwkosakssii)) {
            goto keygmsycouauqmqc;
        }
        goto uwkaosmauksiukco;
        smekigasqcyykywe:
        cciyuigcccggekmc:
        goto ckuegykmyekmewco;
        yqucaaqoyswiskeg:
    }
    
    public function eqawqeqeguyuiage(?string $cmwygeyygwqaemaq, ?string $eqgoocgaqwqcimie, ?string $ewgwqamkygiqaawc = null) : array
    {
        return ["\144\141\164\x61" => ["\x63\x6f\156\x74\145\156\x74" => $ewgwqamkygiqaawc], "\x74\145\x78\x74" => $cmwygeyygwqaemaq, "\x76\x61\154\165\x65" => $eqgoocgaqwqcimie];
    }
    
    public function iowaeiauaiawquqi($qeiakyocuggicwsy)
    {
        goto aossaeoauaeuoywc;
        ieggkeomcusisuoo:
        $uuyoeicyoayimaoa = ManipulateSetting::omkaowmygoqwsywq();
        goto weqkywkusswmawim;
        aossaeoauaeuoywc:
        $suaemuyiacqyugsm = absint(ManipulateServer::ayueggmoqeeukqmq("\160\x61\x67\145", 1));
        goto ieggkeomcusisuoo;
        weqkywkusswmawim:
        $cokqymqsaguecmeq = $uuyoeicyoayimaoa * ($suaemuyiacqyugsm - 1);
        goto icccqacuqseakkew;
        gmyoyegggggmymes:
        $this->uaggqsoeugksgooc(true, $keccaugmemegoimu);
        goto ooqymioycsgcoqiy;
        wyisakyowacouyqk:
        $keccaugmemegoimu = ["\162\145\x73\165\154\164\163" => $qeiakyocuggicwsy, "\x6d\x6f\x72\145\x5f\x72\145\x73\165\x6c\164\163" => $gaeqamemwmwsyukm > $uuyoeicyoayimaoa && $gaeqamemwmwsyukm > $cokqymqsaguecmeq];
        goto gmyoyegggggmymes;
        icccqacuqseakkew:
        $gaeqamemwmwsyukm = count($qeiakyocuggicwsy);
        goto wyisakyowacouyqk;
        ooqymioycsgcoqiy:
    }
    
    public function cwqsecwssgggwiag($post)
    {
        goto umasciaeyewkkuuw;
        seemkiyosiscigms:
        $eaeiymaoeemmmqmu = in_array($eaeiymaoeemmmqmu, self::VALID_REQUESTED_VALE_FOR_POST) ? $eaeiymaoeemmmqmu : "\111\104";
        goto oqikoeeugogqkaim;
        okaacoqueimcowme:
        mscqweuqwsqywggy:
        goto saigyoyoqauaqsuu;
        saigyoyoqauaqsuu:
        uemuasgumguyeaye:
        goto wywcgacaomkaesmw;
        wywcgacaomkaesmw:
        return $eqgoocgaqwqcimie;
        goto sycmikycociqswka;
        oqikoeeugogqkaim:
        switch (strtolower($eaeiymaoeemmmqmu)) {
            case "\x75\162\x6c":
                $eqgoocgaqwqcimie = ManipulatePost::ycqquoiyyuesegsy($post);
                goto uemuasgumguyeaye;
            case "\164\151\x74\x6c\x65":
                $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post);
                goto uemuasgumguyeaye;
            default:
                $eqgoocgaqwqcimie = ManipulatePost::mwikyscisascoeea($post);
                goto uemuasgumguyeaye;
        }
        goto okaacoqueimcowme;
        umasciaeyewkkuuw:
        $eaeiymaoeemmmqmu = ManipulateServer::ayueggmoqeeukqmq("\160\162\x65\x66\x65\162", "\x49\x44");
        goto seemkiyosiscigms;
        sycmikycociqswka:
    }
}
