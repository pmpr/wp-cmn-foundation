<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\View;

use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\DecoratorUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Notice;

class Index extends View
{
    
    protected int $perPage = 20;
    
    protected ?ListTable $listTable = null;
    
    public function waeasakssissiuqg() : ListTable
    {
        goto oqugqwcyomiaaoqu;
        iekumemscwieugqw:
        eeqesooyqagwawae:
        goto hoeeyiowekaeemko;
        foeeqckqsyockkak:
        $this->listTable = new ListTable($this->mgogaykgkoogasim());
        goto iekumemscwieugqw;
        hoeeyiowekaeemko:
        return $this->listTable;
        goto kymkucucyeoeikim;
        oqugqwcyomiaaoqu:
        if ($this->listTable) {
            goto eeqesooyqagwawae;
        }
        goto foeeqckqsyockkak;
        kymkucucyeoeikim:
    }
    public function wigskegsqequoeks()
    {
        goto usquiuuyiyqaeyiu;
        qicwaskssogcokgm:
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, "\x75\x6f\x65\x65\155\157\x6b\x65\x6f\167\141\151\x65\143\143\157"]);
        goto uguigkcmukuouway;
        uguigkcmukuouway:
        parent::wigskegsqequoeks();
        goto uqqaiagaeqgqgaiy;
        usquiuuyiyqaeyiu:
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x67\145\164\x5f{$this->aakmagwggmkoiiyu()}\137\x6c\151\x73\x74\x5f\164\141\142\x6c\145");
        goto qicwaskssogcokgm;
        uqqaiagaeqgqgaiy:
    }
    public function render()
    {
        goto esuiysskoweawsue;
        esuiysskoweawsue:
        parent::render();
        goto gaomwagkcciesyqy;
        gaomwagkcciesyqy:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aegysmeecgcgayyw;
        aegysmeecgcgayyw:
        $oyeykykuuckycumg = $this->waeasakssissiuqg();
        goto suqkuqygkkgwyaie;
        suqkuqygkkgwyaie:
        $oyeykykuuckycumg->prepare_items();
        goto soaccwqimeksgwiw;
        soaccwqimeksgwiw:
        echo $this->iuygowkemiiwqmiw("\151\156\144\145\170", ["\x6e\x61\x6d\145" => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), "\164\x69\164\154\x65" => $this->mmqossqsksemasay("\160\x6c\165\162\x61\154\x5f\x6e\x61\x6d\x65"), "\x74\x61\142\x6c\145" => $this->waeasakssissiuqg(), "\151\x74\145\155\x73" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\163\x65\141\x72\143\x68\x5f\x69\x74\145\155\163"), "\x61\143\164\151\157\156\163" => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), "\146\151\x6c\x74\145\162\137\x6e\x61\155\145" => $meywaqqsugaoeyys->aakiaoueckoiyoew(), "\146\x69\154\x74\x65\x72\x5f\166\x61\x6c\x75\145" => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
        goto wiysogeqqwgioyka;
        wiysogeqqwgioyka:
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        goto wmywuusgukmmaams;
        owmuceyswmgueasi:
        ewymsmkkiksgwysk:
        goto mwsmsguqqkcwiiuk;
        wgewmqieuamsoayy:
        $uamcoiueqaamsqma = __("\x45\x72\x72\157\x72\40\x69\x6e\x20\144\145\154\x65\x74\151\x6e\x67\x2e", PR__CMN__FOUNDATION);
        goto kqgcyoscsusgoaqi;
        sggawugoykqcmsug:
        giaacoqqqsekcayy:
        goto wkeuuycukmuqiaom;
        egyyiccaeeiooaua:
        if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\x65\x6c\x65\164\145\x5f\151\164\145\155", $aokagokqyuysuksm)) {
            goto cgiscsqwwgqqaeqi;
        }
        goto scisgsyemmsekgos;
        eeauyscekuckoues:
        cmegwsegsosyqcai:
        goto eogwckcymuugikuy;
        ooeausyowguqicuo:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto giaacoqqqsekcayy;
        }
        goto egyyiccaeeiooaua;
        wkeuuycukmuqiaom:
        if ($uamcoiueqaamsqma) {
            goto ewymsmkkiksgwysk;
        }
        goto wakmayaoqoskekqy;
        eogwckcymuugikuy:
        return $ksaameoqigiaoigg;
        goto msemumccgceyugmg;
        qmuwoecuacmkwgem:
        goto cmegwsegsosyqcai;
        goto owmuceyswmgueasi;
        kqgcyoscsusgoaqi:
        skkamseieeusycye:
        goto ueigkucgaucgeimc;
        wakmayaoqoskekqy:
        Notice::kigowwqauiumummw(__("\x49\164\145\x6d\x20\x73\x75\143\x63\x65\163\x73\x66\165\x6c\154\171\x20\144\145\154\145\x74\x65\x64\x2e", PR__CMN__FOUNDATION), "\157\x72\x6d\55\x6e\x6f\164\x69\x63\x65");
        goto qmuwoecuacmkwgem;
        wmywuusgukmmaams:
        $ksaameoqigiaoigg = false;
        goto gkyawqqcmigqgaiq;
        mwsmsguqqkcwiiuk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\157\x72\x6d\55\156\157\164\x69\x63\x65");
        goto eeauyscekuckoues;
        ueigkucgaucgeimc:
        syiqkaasoueowwui:
        goto sggawugoykqcmsug;
        scisgsyemmsekgos:
        $uamcoiueqaamsqma = __("\x53\x6f\x72\162\x79\x2c\40\171\157\165\40\141\x72\x65\40\x6e\x6f\x74\x20\x61\x6c\154\157\x77\145\x64\40\x74\157\x20\144\145\154\x65\x74\145\40\151\x74\x65\x6d\163\40\157\x66\x20\164\150\151\163\40\x74\171\x70\145\56", PR__CMN__FOUNDATION);
        goto cewmoqyysgsmuiya;
        cewmoqyysgsmuiya:
        goto syiqkaasoueowwui;
        goto igooksugieceoege;
        gkyawqqcmigqgaiq:
        $uamcoiueqaamsqma = '';
        goto ooeausyowguqicuo;
        ugqaaewwmkocwwgy:
        if ($ksaameoqigiaoigg) {
            goto skkamseieeusycye;
        }
        goto wgewmqieuamsoayy;
        omqiayeucoioqoao:
        $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
        goto ugqaaewwmkocwwgy;
        igooksugieceoege:
        cgiscsqwwgqqaeqi:
        goto omqiayeucoioqoao;
        msemumccgceyugmg:
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        goto aomysykcgikegiau;
        awoaooyoeoyeeqee:
        $uamcoiueqaamsqma = '';
        goto ogqmesokykywseys;
        cuumeogeomowqisc:
        iwekmyyccgiyuecc:
        goto gcckqucukawcasgk;
        qmkaeeomgkwggoyo:
        ikqqskkqqwmwssoo:
        goto csammceowmqwaamq;
        ykomgumacooyomsk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto ciykoyeioqgyaeqo;
            ouamogymawucwswu:
            wcugqegqsuuuwqao:
            goto mugqyyeayeyggqqk;
            miweggwqeiaeweia:
            asiqwuoswmigcaki:
            goto kqqiegkuqagcqsya;
            guykyqecgswcsmws:
            $meisgakuwcmwosms++;
            goto kkumywowcoycymeo;
            ciykoyeioqgyaeqo:
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\x65\x6c\x65\164\x65\x5f\x69\x74\145\155", $aokagokqyuysuksm)) {
                goto wcugqegqsuuuwqao;
            }
            goto mqicocmqegwukkwg;
            kkumywowcoycymeo:
            $ksaameoqigiaoigg = true;
            goto miweggwqeiaeweia;
            wyuemgggaqogsmsq:
            iwsuawwqomaowuii:
            goto guykyqecgswcsmws;
            mugqyyeayeyggqqk:
            if ($this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                goto iwsuawwqomaowuii;
            }
            goto acsqgiuageaasiyy;
            qgeugwymkkiacwoc:
            goto wagqgeqymeqoeuyi;
            goto emmsycooskoqmgeg;
            emmsycooskoqmgeg:
            goto asiqwuoswmigcaki;
            goto ouamogymawucwswu;
            mqicocmqegwukkwg:
            $uamcoiueqaamsqma = __("\123\x6f\162\x72\x79\x2c\x20\171\157\165\x20\141\162\x65\40\x6e\x6f\x74\40\141\154\x6c\157\167\x65\x64\40\x74\157\x20\144\145\x6c\x65\164\x65\40\151\x74\x65\155\x73\x20\x6f\146\x20\164\x68\151\x73\x20\164\171\x70\145\56", PR__CMN__FOUNDATION);
            goto qgeugwymkkiacwoc;
            acsqgiuageaasiyy:
            $uamcoiueqaamsqma = __("\105\162\x72\157\x72\x20\151\x6e\40\144\x65\154\145\164\151\x6e\x67\x2e", PR__CMN__FOUNDATION);
            goto oomguqikqokqwgku;
            kqqiegkuqagcqsya:
            qoqskyuuwueqkquk:
            goto ousiuuwgwkiyikyq;
            oomguqikqokqwgku:
            $ksaameoqigiaoigg = false;
            goto samwkqgwouggsguc;
            samwkqgwouggsguc:
            goto wagqgeqymeqoeuyi;
            goto wyuemgggaqogsmsq;
            ousiuuwgwkiyikyq:
        }
        goto mqkmcysgoiaouiwm;
        gcckqucukawcasgk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\157\x72\155\55\x61\x63\x74\x69\x6f\156");
        goto qmkaeeomgkwggoyo;
        ogqmesokykywseys:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto ogsaaqsaogcqiouy;
        }
        goto ykomgumacooyomsk;
        csammceowmqwaamq:
        return $ksaameoqigiaoigg;
        goto ocaguquugeamqckq;
        cwwmimggaaecmucw:
        $meisgakuwcmwosms = 0;
        goto awoaooyoeoyeeqee;
        uiosisocuwokwkie:
        goto ikqqskkqqwmwssoo;
        goto cuumeogeomowqisc;
        kosaqwikueyksqmw:
        ogsaaqsaogcqiouy:
        goto gicyayswqyuoekcq;
        aomysykcgikegiau:
        $ksaameoqigiaoigg = false;
        goto cwwmimggaaecmucw;
        mqkmcysgoiaouiwm:
        wagqgeqymeqoeuyi:
        goto kosaqwikueyksqmw;
        iikiiioqiyegyaak:
        Notice::kigowwqauiumummw(__("\122\145\161\x75\145\163\164\145\144\40\151\164\145\155\163\x20\144\x65\154\x65\x74\x65\x64\x2e", PR__CMN__FOUNDATION), "\157\x72\x6d\55\x6e\x6f\x74\151\x63\145");
        goto uiosisocuwokwkie;
        gicyayswqyuoekcq:
        if ($uamcoiueqaamsqma) {
            goto iwekmyyccgiyuecc;
        }
        goto iikiiioqiyegyaak;
        ocaguquugeamqckq:
    }
    public function mqyuagguukgcoeka()
    {
        goto gmwykkouysyaqwqm;
        cscusseysqygsoiy:
        if (!($tsuauommsquiesmk && $eqgoocgaqwqcimie)) {
            goto eekcoeikaeaaeyii;
        }
        goto isgwkwacoyimiauk;
        sockeswygwcskeuq:
        $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
        goto mkwkkmkgiqiamacc;
        mggeqkcksyaymcsa:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
        goto uegouoiuyoqkcscg;
        gmwykkouysyaqwqm:
        parent::mqyuagguukgcoeka();
        goto ugqwuugsweqgmywk;
        ugqwuugsweqgmywk:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uaukmuiwskcemcsw;
        uaqackioaiqwcocy:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto cscusseysqygsoiy;
        kqswcsysqawkcgye:
        cogywoqcqummsyus:
        goto wusciwkkckmqigms;
        isgwkwacoyimiauk:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
        goto mggeqkcksyaymcsa;
        cgyakcqgugqgkqiw:
        eekcoeikaeaaeyii:
        goto eeyyskqsmquyquqw;
        uaukmuiwskcemcsw:
        if (!($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq())) {
            goto cogywoqcqummsyus;
        }
        goto sockeswygwcskeuq;
        uegouoiuyoqkcscg:
        $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
        goto cgyakcqgugqgkqiw;
        eeyyskqsmquyquqw:
        wp_redirect($igscmsiuisqaqwkk);
        goto ewscugeuicukkycc;
        mkwkkmkgiqiamacc:
        $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
        goto uaqackioaiqwcocy;
        ewscugeuicukkycc:
        exit;
        goto kqswcsysqawkcgye;
        wusciwkkckmqigms:
    }
    
    public function ycogikomoygcmimg() : bool
    {
        goto ukkcmocamwgiqayu;
        gommacygsykyussk:
        iiiccouaaqsyikae:
        goto ukqocwewouckikso;
        ukqocwewouckikso:
        return $ksaameoqigiaoigg;
        goto ucqmumuygcywwqma;
        uougwgeyiokewkkm:
        $ksaameoqigiaoigg = true;
        goto gommacygsykyussk;
        mwysseaekcsiesmm:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\164\151\x6f\156");
        goto amgsueumgaguceaa;
        amgsueumgaguceaa:
        if (!$aiamqeawckcsuaou) {
            goto iiiccouaaqsyikae;
        }
        goto gygwewcqsmwqismo;
        gygwewcqsmwqismo:
        $this->myyqwyswweswiuwu($aiamqeawckcsuaou);
        goto uougwgeyiokewkkm;
        ukkcmocamwgiqayu:
        $ksaameoqigiaoigg = false;
        goto mwysseaekcsiesmm;
        ucqmumuygcywwqma:
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou)
    {
        goto kocqqoyymosmuksu;
        ieqesiiageaauiuw:
        if (!($aiamqeawckcsuaou && $oysoyeaucuawyaky)) {
            goto iuuuususuuuaieem;
        }
        goto gamqcwuwkikwqoay;
        oyeyomcgkmgymogq:
        $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
        goto iesekaeqeomeuaui;
        kocqqoyymosmuksu:
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey("\x69\164\145\x6d", []);
        goto uqokiksoqcwwqgio;
        iesekaeqeomeuaui:
        uimeeckqksqeekqq:
        goto wsesqmcqoiyyqkqi;
        qukocuwgakemmyga:
        if (!$igqsaukqcqscimok) {
            goto uykousayyomcaeaa;
        }
        goto sioekkmekwygemyc;
        uqokiksoqcwwqgio:
        $oysoyeaucuawyaky = [];
        goto qukocuwgakemmyga;
        wsesqmcqoiyyqkqi:
        iuuuususuuuaieem:
        goto mogkoocsoeuyoqqa;
        sioekkmekwygemyc:
        $oysoyeaucuawyaky = array_map("\x69\156\x74\x76\141\x6c", $igqsaukqcqscimok);
        goto yiowgigkkwsoqcci;
        yiowgigkkwsoqcci:
        uykousayyomcaeaa:
        goto ieqesiiageaauiuw;
        gamqcwuwkikwqoay:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x64\157\x5f\x62\165\x6c\x6b\x5f\x61\143\164\151\157\x6e"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
        goto mscyggqcesgqqksu;
        mscyggqcesgqqksu:
        if (!($aiamqeawckcsuaou == "\144\x65\154\x65\x74\x65")) {
            goto uimeeckqksqeekqq;
        }
        goto oyeyomcgkmgymogq;
        mogkoocsoeuyoqqa:
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        goto oimkeqocuguqqsqk;
        suqceasgacskcmkc:
        if (!$aiamqeawckcsuaou) {
            goto wkwamkgkwykeqkec;
        }
        goto yykqaowwsqgqysmq;
        oimkeqocuguqqsqk:
        $ksaameoqigiaoigg = false;
        goto oeocukauoyosicso;
        yykqaowwsqgqysmq:
        $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
        goto kwiggogcgciwuwqk;
        oeocukauoyosicso:
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, "\x6f\x72\155\55\141\143\164\x69\x6f\x6e", false);
        goto suqceasgacskcmkc;
        ikuuiauwouuqawuw:
        return $ksaameoqigiaoigg;
        goto yoqakewookqoqacm;
        kwiggogcgciwuwqk:
        $ksaameoqigiaoigg = true;
        goto uckewycoogsogwiy;
        uckewycoogsogwiy:
        wkwamkgkwykeqkec:
        goto ikuuiauwouuqawuw;
        yoqakewookqoqacm:
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        goto ocywegekakimmwcq;
        iwsmmkqaoksmocok:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto esikeyqyuikmaiek;
        okkmcocqokkskasy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x64\x6f\x5f\x73\151\x6e\x67\154\145\x5f\141\x63\164\151\157\x6e"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
        goto qiiigwkqeoewsuwm;
        mscgewkcqcoowweg:
        yuimwyoywaiiqacs:
        goto suqcsgaosywaauuu;
        emqswoaawgeyosmi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iwsmmkqaoksmocok;
        qiiigwkqeoewsuwm:
        if (!($aiamqeawckcsuaou === "\x64\x65\x6c\x65\164\145")) {
            goto gswcoeiisamakwii;
        }
        goto esaqcqqwuussiiwo;
        ocywegekakimmwcq:
        if (!($aiamqeawckcsuaou == "\144\x65\x6c\x65\164\145")) {
            goto yuimwyoywaiiqacs;
        }
        goto emqswoaawgeyosmi;
        esikeyqyuikmaiek:
        $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
        goto okkmcocqokkskasy;
        esaqcqqwuussiiwo:
        $this->delete($aokagokqyuysuksm);
        goto ikqeeaysmqgcgawq;
        ikqeeaysmqgcgawq:
        gswcoeiisamakwii:
        goto mscgewkcqcoowweg;
        suqcsgaosywaauuu:
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu("\160\x65\x72\x5f\160\x61\147\x65", ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        goto wwukgaquuyoissgy;
        qikaewekoecykeou:
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        goto eucqomyqykgoiuge;
        wwukgaquuyoissgy:
        $icwicymcioeyeyek = $_POST;
        goto gsygwgsiawgmqiyi;
        yqagomygmeoecwey:
        ob_start();
        goto qikaewekoecykeou;
        gsygwgsiawgmqiyi:
        ManipulateSetting::wwckmeoskuagomki("\106\x4f\x55\x4e\104\x41\124\x49\117\x4e\x5f\x4f\x52\x4d\137\x41\112\x41\x58\137\114\x49\123\x54\x5f\124\x41\102\114\105", true);
        goto qsgqwyqaqiowkmco;
        qsgqwyqaqiowkmco:
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, "\160\x61\147\x65\144", 1), ManipulateArray::get($icwicymcioeyeyek, "\160\145\162\x5f\160\x61\147\x65", 20));
        goto yqagomygmeoecwey;
        usymasgsyqgsuocg:
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
        goto aiccyaswigkaycqk;
        eucqomyqykgoiuge:
        $keccaugmemegoimu = ob_get_clean();
        goto usymasgsyqgsuocg;
        aiccyaswigkaycqk:
    }
    public function qiekckyaeisgcmok()
    {
        goto zayqqeqgcwkekwws;
        ucuoeymyqeokgsya:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto yuuyikiacmmueosu;
        egmayaiikwsskgmy:
        if (!($weyoqgcesqgeusiu < 1)) {
            goto sqyokemumceysegy;
        }
        goto ucuoeymyqeokgsya;
        aueaceeyommgkicu:
        $omkysikckkcieckq = str_replace("\x2d", "\137", "\x65\144\x69\164\x5f{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\160\145\x72\x5f\160\141\x67\x65");
        goto mysueeoswqgccmui;
        zayqqeqgcwkekwws:
        if (!$this->sooksiiooeywkyaq()) {
            goto oqousikwiiqagoyw;
        }
        goto aueaceeyommgkicu;
        agkmiayuawacakau:
        echo $this->iuygowkemiiwqmiw("\157\x70\164\x69\157\156\163", ["\160\x65\162\137\x70\141\147\145" => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), "\154\x61\x62\145\154" => __("\x4e\165\155\x62\145\x72\40\x6f\146\x20\151\164\145\155\x73\40\160\x65\162\40\160\141\147\145\x3a", PR__CMN__FOUNDATION)]);
        goto syuaummumssgwwee;
        syuaummumssgwwee:
        oqousikwiiqagoyw:
        goto oocuemosmeeekgas;
        mysueeoswqgccmui:
        $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
        goto egmayaiikwsskgmy;
        yuuyikiacmmueosu:
        sqyokemumceysegy:
        goto sguskaeaaqcagqgc;
        sguskaeaaqcagqgc:
        
        $this->cecaguuoecmccuse("\163\x63\162\x65\145\x6e\137\x6f\160\164\151\157\156\163\137\163\x68\x6f\167\137\x73\165\x62\155\x69\x74", "\x5f\137\162\145\164\x75\x72\x6e\x5f\164\162\165\145");
        goto agkmiayuawacakau;
        oocuemosmeeekgas:
    }
    public function wsockamcwmiaooya()
    {
        goto oyiuemaaykgkqqam;
        gqmewagyagamokok:
        $qqkyekmackggcick = get_hidden_columns($this->mgogaykgkoogasim()->miwqiiqeegeqcwis());
        goto sqmoqymckwsogsqg;
        siecswkggyikqkga:
        ussceseaimqywuiy:
        goto qkuiwoqksgayqqmg;
        goqmywuiicciasyk:
        ManipulateHTML::awwqwouuoioauoaw("\146\x69\x65\154\x64\x73\x65\164", ["\x63\154\x61\163\x73" => "\155\x65\164\141\x62\x6f\x78\55\x70\x72\145\x66\163"], true, [ManipulateHTML::uuccukgasskgimsq("\x6c\145\x67\x65\x6e\x64", [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        goto siecswkggyikqkga;
        sqmoqymckwsogsqg:
        if (!$wkkweuacukumqmya) {
            goto ussceseaimqywuiy;
        }
        goto uycesqqkoeamocgm;
        oyiuyywyeoskckuw:
        qkcsykuocwuyaice:
        goto goqmywuiicciasyk;
        ceiwqkyquikcemmo:
        $ikgwqyuyckaewsow = '';
        goto ukomuiwukymcoaso;
        ukomuiwukymcoaso:
        $yemgmmgogcwccuky = ["\137\164\151\x74\154\145", "\x63\x62"];
        goto wkgskiuiukiuyque;
        wkgskiuiukiuyque:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto qiaimmucomukkeka;
            cgmgqucewwssmicq:
            uoeasoimegouymka:
            goto mkomygccqkmkumsi;
            qiaimmucomukkeka:
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto egsycocugqyyswsi;
            }
            goto aoquoewagkseayug;
            osuscoaaomwcqkew:
            $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq("\x6c\141\x62\145\x6c", [], [ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\165\164", ["\151\x64" => $aokagokqyuysuksm, "\156\x61\155\145" => $aokagokqyuysuksm, "\x63\x6c\x61\x73\x73" => "\x68\x69\144\x65\55\x63\157\154\165\x6d\156\x2d\x74\157\147", "\x74\171\x70\145" => "\x63\150\x65\143\153\x62\x6f\170", "\166\x61\x6c\x75\145" => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
            goto ciucewqgyoiouesq;
            aoquoewagkseayug:
            $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}\55\150\151\144\x65";
            goto osuscoaaomwcqkew;
            ciucewqgyoiouesq:
            egsycocugqyyswsi:
            goto cgmgqucewwssmicq;
            mkomygccqkmkumsi:
        }
        goto oyiuyywyeoskckuw;
        oyiuemaaykgkqqam:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto gqmewagyagamokok;
        uycesqqkoeamocgm:
        $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, "\137\164\151\164\154\x65", __("\x43\157\x6c\165\155\156\163", PR__CMN__FOUNDATION));
        goto ceiwqkyquikcemmo;
        qkuiwoqksgayqqmg:
    }
    
    public function kkooswakmamasmyg($qeqooyuoiasweuck, $gcgsqcoqciockquc)
    {
        $this->wsockamcwmiaooya();
        $this->qiekckyaeisgcmok();
    }
    
    public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie)
    {
        goto mqiiqkuaoekeuswo;
        smcguieygyqcaqgs:
        ecouwqosmoyyqmkw:
        goto mgcuiguaomoqwwwm;
        skuqigsokaguscas:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto smiemmcqqukyguuu;
            yamyagayiooyeekg:
            quaqmuusokiyqgqe:
            goto yoagcooekomeokwg;
            smiemmcqqukyguuu:
            
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto quaqmuusokiyqgqe;
            }
            goto iksewmsaugayqaqq;
            iksewmsaugayqaqq:
            $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}\x2d\150\151\144\x65";
            goto yamyagayiooyeekg;
            yoagcooekomeokwg:
            yuqgwwmqwqiuwmaw:
            goto eckcqesiokgwkkiw;
            eckcqesiokgwkkiw:
        }
        goto quyogmwugsyoaaiu;
        mgcuiguaomoqwwwm:
        return $wsayskqwkoauuyks;
        goto eoyiumycaigawmmc;
        quyogmwugsyoaaiu:
        easqmyamcmeesgya:
        goto mmgmqogugasaqkgg;
        mmgmqogugasaqkgg:
        
        if (!in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            goto ecouwqosmoyyqmkw;
        }
        goto wmumywgyyeagqoeq;
        sgiwoiscywusgmmm:
        $yemgmmgogcwccuky = ["\137\x74\151\164\x6c\x65", "\143\x62"];
        goto skuqigsokaguscas;
        qmoocweoekqueuyy:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto sgiwoiscywusgmmm;
        wmumywgyyeagqoeq:
        $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        goto smcguieygyqcaqgs;
        mqiiqkuaoekeuswo:
        $oowiawssoycsoiku = [str_replace("\x2d", "\137", "\x65\x64\151\x74\137{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\160\145\162\137\x70\x61\147\x65")];
        goto qmoocweoekqueuyy;
        eoyiumycaigawmmc:
    }
}
