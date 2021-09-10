<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        foeeqckqsyockkak:
        $this->listTable = new ListTable($this->mgogaykgkoogasim());
        goto iekumemscwieugqw;
        iekumemscwieugqw:
        eeqesooyqagwawae:
        goto hoeeyiowekaeemko;
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
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, "\x75\157\x65\145\x6d\157\x6b\x65\157\167\x61\x69\x65\x63\x63\157"]);
        goto uguigkcmukuouway;
        usquiuuyiyqaeyiu:
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\147\145\x74\x5f{$this->aakmagwggmkoiiyu()}\137\154\x69\x73\x74\x5f\164\x61\x62\x6c\x65");
        goto qicwaskssogcokgm;
        uguigkcmukuouway:
        parent::wigskegsqequoeks();
        goto uqqaiagaeqgqgaiy;
        uqqaiagaeqgqgaiy:
    }
    public function render()
    {
        goto esuiysskoweawsue;
        suqkuqygkkgwyaie:
        $oyeykykuuckycumg->prepare_items();
        goto soaccwqimeksgwiw;
        gaomwagkcciesyqy:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aegysmeecgcgayyw;
        esuiysskoweawsue:
        parent::render();
        goto gaomwagkcciesyqy;
        soaccwqimeksgwiw:
        echo $this->iuygowkemiiwqmiw("\151\156\144\145\170", ["\x6e\141\x6d\x65" => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), "\x74\151\x74\x6c\145" => $this->mmqossqsksemasay("\x70\154\x75\x72\x61\x6c\137\x6e\x61\x6d\x65"), "\x74\x61\x62\154\145" => $this->waeasakssissiuqg(), "\151\164\145\155\x73" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\163\145\x61\x72\x63\x68\137\x69\x74\x65\155\x73"), "\x61\x63\164\x69\157\156\163" => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), "\146\151\154\x74\145\x72\x5f\x6e\x61\x6d\145" => $meywaqqsugaoeyys->aakiaoueckoiyoew(), "\146\151\154\x74\145\162\137\x76\141\x6c\165\145" => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
        goto wiysogeqqwgioyka;
        aegysmeecgcgayyw:
        $oyeykykuuckycumg = $this->waeasakssissiuqg();
        goto suqkuqygkkgwyaie;
        wiysogeqqwgioyka:
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        goto wmywuusgukmmaams;
        scisgsyemmsekgos:
        $uamcoiueqaamsqma = __("\x53\x6f\x72\x72\171\x2c\x20\x79\157\165\40\x61\x72\x65\40\x6e\x6f\x74\40\x61\154\154\157\167\x65\144\40\164\157\x20\144\145\154\145\164\145\x20\151\x74\x65\155\x73\40\x6f\x66\x20\x74\x68\x69\x73\x20\x74\x79\x70\145\x2e", PR__CMN__FOUNDATION);
        goto cewmoqyysgsmuiya;
        wkeuuycukmuqiaom:
        if ($uamcoiueqaamsqma) {
            goto ewymsmkkiksgwysk;
        }
        goto wakmayaoqoskekqy;
        omqiayeucoioqoao:
        $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
        goto ugqaaewwmkocwwgy;
        wgewmqieuamsoayy:
        $uamcoiueqaamsqma = __("\x45\x72\162\157\162\40\151\156\40\144\145\x6c\145\164\x69\156\x67\x2e", PR__CMN__FOUNDATION);
        goto kqgcyoscsusgoaqi;
        ueigkucgaucgeimc:
        syiqkaasoueowwui:
        goto sggawugoykqcmsug;
        egyyiccaeeiooaua:
        if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\145\x6c\145\164\145\x5f\151\164\x65\155", $aokagokqyuysuksm)) {
            goto cgiscsqwwgqqaeqi;
        }
        goto scisgsyemmsekgos;
        wakmayaoqoskekqy:
        Notice::kigowwqauiumummw(__("\111\164\145\155\40\x73\x75\143\143\x65\x73\x73\x66\165\154\x6c\171\40\144\145\154\x65\x74\145\144\56", PR__CMN__FOUNDATION), "\157\x72\x6d\x2d\x6e\157\x74\151\x63\x65");
        goto qmuwoecuacmkwgem;
        eeauyscekuckoues:
        cmegwsegsosyqcai:
        goto eogwckcymuugikuy;
        kqgcyoscsusgoaqi:
        skkamseieeusycye:
        goto ueigkucgaucgeimc;
        eogwckcymuugikuy:
        return $ksaameoqigiaoigg;
        goto msemumccgceyugmg;
        wmywuusgukmmaams:
        $ksaameoqigiaoigg = false;
        goto gkyawqqcmigqgaiq;
        cewmoqyysgsmuiya:
        goto syiqkaasoueowwui;
        goto igooksugieceoege;
        owmuceyswmgueasi:
        ewymsmkkiksgwysk:
        goto mwsmsguqqkcwiiuk;
        ooeausyowguqicuo:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto giaacoqqqsekcayy;
        }
        goto egyyiccaeeiooaua;
        qmuwoecuacmkwgem:
        goto cmegwsegsosyqcai;
        goto owmuceyswmgueasi;
        ugqaaewwmkocwwgy:
        if ($ksaameoqigiaoigg) {
            goto skkamseieeusycye;
        }
        goto wgewmqieuamsoayy;
        mwsmsguqqkcwiiuk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\x6f\162\155\55\156\x6f\164\151\143\145");
        goto eeauyscekuckoues;
        igooksugieceoege:
        cgiscsqwwgqqaeqi:
        goto omqiayeucoioqoao;
        sggawugoykqcmsug:
        giaacoqqqsekcayy:
        goto wkeuuycukmuqiaom;
        gkyawqqcmigqgaiq:
        $uamcoiueqaamsqma = '';
        goto ooeausyowguqicuo;
        msemumccgceyugmg:
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        goto aomysykcgikegiau;
        iikiiioqiyegyaak:
        Notice::kigowwqauiumummw(__("\122\x65\161\165\x65\x73\x74\x65\144\x20\151\164\145\155\x73\x20\x64\x65\x6c\145\164\145\144\56", PR__CMN__FOUNDATION), "\x6f\x72\x6d\55\x6e\157\x74\151\143\x65");
        goto uiosisocuwokwkie;
        ogqmesokykywseys:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto ogsaaqsaogcqiouy;
        }
        goto ykomgumacooyomsk;
        aomysykcgikegiau:
        $ksaameoqigiaoigg = false;
        goto cwwmimggaaecmucw;
        ykomgumacooyomsk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto ciykoyeioqgyaeqo;
            guykyqecgswcsmws:
            $meisgakuwcmwosms++;
            goto kkumywowcoycymeo;
            oomguqikqokqwgku:
            $ksaameoqigiaoigg = false;
            goto samwkqgwouggsguc;
            ciykoyeioqgyaeqo:
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\x65\x6c\145\164\x65\x5f\151\x74\145\155", $aokagokqyuysuksm)) {
                goto wcugqegqsuuuwqao;
            }
            goto mqicocmqegwukkwg;
            ouamogymawucwswu:
            wcugqegqsuuuwqao:
            goto mugqyyeayeyggqqk;
            wyuemgggaqogsmsq:
            iwsuawwqomaowuii:
            goto guykyqecgswcsmws;
            miweggwqeiaeweia:
            asiqwuoswmigcaki:
            goto kqqiegkuqagcqsya;
            emmsycooskoqmgeg:
            goto asiqwuoswmigcaki;
            goto ouamogymawucwswu;
            mugqyyeayeyggqqk:
            if ($this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                goto iwsuawwqomaowuii;
            }
            goto acsqgiuageaasiyy;
            acsqgiuageaasiyy:
            $uamcoiueqaamsqma = __("\105\x72\162\x6f\162\x20\x69\156\40\144\145\x6c\145\x74\151\x6e\x67\x2e", PR__CMN__FOUNDATION);
            goto oomguqikqokqwgku;
            kkumywowcoycymeo:
            $ksaameoqigiaoigg = true;
            goto miweggwqeiaeweia;
            kqqiegkuqagcqsya:
            qoqskyuuwueqkquk:
            goto ousiuuwgwkiyikyq;
            samwkqgwouggsguc:
            goto wagqgeqymeqoeuyi;
            goto wyuemgggaqogsmsq;
            mqicocmqegwukkwg:
            $uamcoiueqaamsqma = __("\x53\157\x72\x72\171\54\40\171\157\x75\x20\141\162\145\40\x6e\157\x74\40\141\154\154\157\x77\x65\x64\x20\x74\157\x20\x64\x65\154\145\x74\x65\40\151\x74\145\x6d\x73\40\157\x66\40\164\x68\151\x73\x20\164\x79\x70\145\56", PR__CMN__FOUNDATION);
            goto qgeugwymkkiacwoc;
            qgeugwymkkiacwoc:
            goto wagqgeqymeqoeuyi;
            goto emmsycooskoqmgeg;
            ousiuuwgwkiyikyq:
        }
        goto mqkmcysgoiaouiwm;
        cwwmimggaaecmucw:
        $meisgakuwcmwosms = 0;
        goto awoaooyoeoyeeqee;
        qmkaeeomgkwggoyo:
        ikqqskkqqwmwssoo:
        goto csammceowmqwaamq;
        awoaooyoeoyeeqee:
        $uamcoiueqaamsqma = '';
        goto ogqmesokykywseys;
        gicyayswqyuoekcq:
        if ($uamcoiueqaamsqma) {
            goto iwekmyyccgiyuecc;
        }
        goto iikiiioqiyegyaak;
        mqkmcysgoiaouiwm:
        wagqgeqymeqoeuyi:
        goto kosaqwikueyksqmw;
        csammceowmqwaamq:
        return $ksaameoqigiaoigg;
        goto ocaguquugeamqckq;
        gcckqucukawcasgk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\157\162\x6d\55\141\x63\164\x69\x6f\x6e");
        goto qmkaeeomgkwggoyo;
        cuumeogeomowqisc:
        iwekmyyccgiyuecc:
        goto gcckqucukawcasgk;
        uiosisocuwokwkie:
        goto ikqqskkqqwmwssoo;
        goto cuumeogeomowqisc;
        kosaqwikueyksqmw:
        ogsaaqsaogcqiouy:
        goto gicyayswqyuoekcq;
        ocaguquugeamqckq:
    }
    public function mqyuagguukgcoeka()
    {
        goto gmwykkouysyaqwqm;
        uaqackioaiqwcocy:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto cscusseysqygsoiy;
        ugqwuugsweqgmywk:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uaukmuiwskcemcsw;
        isgwkwacoyimiauk:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
        goto mggeqkcksyaymcsa;
        mkwkkmkgiqiamacc:
        $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
        goto uaqackioaiqwcocy;
        mggeqkcksyaymcsa:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
        goto uegouoiuyoqkcscg;
        eeyyskqsmquyquqw:
        wp_redirect($igscmsiuisqaqwkk);
        goto ewscugeuicukkycc;
        uaukmuiwskcemcsw:
        if (!($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq())) {
            goto cogywoqcqummsyus;
        }
        goto sockeswygwcskeuq;
        kqswcsysqawkcgye:
        cogywoqcqummsyus:
        goto wusciwkkckmqigms;
        sockeswygwcskeuq:
        $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
        goto mkwkkmkgiqiamacc;
        gmwykkouysyaqwqm:
        parent::mqyuagguukgcoeka();
        goto ugqwuugsweqgmywk;
        ewscugeuicukkycc:
        exit;
        goto kqswcsysqawkcgye;
        uegouoiuyoqkcscg:
        $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
        goto cgyakcqgugqgkqiw;
        cscusseysqygsoiy:
        if (!($tsuauommsquiesmk && $eqgoocgaqwqcimie)) {
            goto eekcoeikaeaaeyii;
        }
        goto isgwkwacoyimiauk;
        cgyakcqgugqgkqiw:
        eekcoeikaeaaeyii:
        goto eeyyskqsmquyquqw;
        wusciwkkckmqigms:
    }
    
    public function ycogikomoygcmimg() : bool
    {
        goto ukkcmocamwgiqayu;
        mwysseaekcsiesmm:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\x74\151\x6f\x6e");
        goto amgsueumgaguceaa;
        amgsueumgaguceaa:
        if (!$aiamqeawckcsuaou) {
            goto iiiccouaaqsyikae;
        }
        goto gygwewcqsmwqismo;
        ukkcmocamwgiqayu:
        $ksaameoqigiaoigg = false;
        goto mwysseaekcsiesmm;
        ukqocwewouckikso:
        return $ksaameoqigiaoigg;
        goto ucqmumuygcywwqma;
        uougwgeyiokewkkm:
        $ksaameoqigiaoigg = true;
        goto gommacygsykyussk;
        gommacygsykyussk:
        iiiccouaaqsyikae:
        goto ukqocwewouckikso;
        gygwewcqsmwqismo:
        $this->myyqwyswweswiuwu($aiamqeawckcsuaou);
        goto uougwgeyiokewkkm;
        ucqmumuygcywwqma:
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou)
    {
        goto kocqqoyymosmuksu;
        qukocuwgakemmyga:
        if (!$igqsaukqcqscimok) {
            goto uykousayyomcaeaa;
        }
        goto sioekkmekwygemyc;
        sioekkmekwygemyc:
        $oysoyeaucuawyaky = array_map("\x69\156\164\x76\141\154", $igqsaukqcqscimok);
        goto yiowgigkkwsoqcci;
        iesekaeqeomeuaui:
        uimeeckqksqeekqq:
        goto wsesqmcqoiyyqkqi;
        oyeyomcgkmgymogq:
        $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
        goto iesekaeqeomeuaui;
        kocqqoyymosmuksu:
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey("\151\x74\145\155", []);
        goto uqokiksoqcwwqgio;
        yiowgigkkwsoqcci:
        uykousayyomcaeaa:
        goto ieqesiiageaauiuw;
        mscyggqcesgqqksu:
        if (!($aiamqeawckcsuaou == "\144\x65\x6c\145\x74\145")) {
            goto uimeeckqksqeekqq;
        }
        goto oyeyomcgkmgymogq;
        gamqcwuwkikwqoay:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\144\x6f\137\x62\165\154\153\x5f\141\x63\x74\x69\x6f\x6e"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
        goto mscyggqcesgqqksu;
        ieqesiiageaauiuw:
        if (!($aiamqeawckcsuaou && $oysoyeaucuawyaky)) {
            goto iuuuususuuuaieem;
        }
        goto gamqcwuwkikwqoay;
        uqokiksoqcwwqgio:
        $oysoyeaucuawyaky = [];
        goto qukocuwgakemmyga;
        wsesqmcqoiyyqkqi:
        iuuuususuuuaieem:
        goto mogkoocsoeuyoqqa;
        mogkoocsoeuyoqqa:
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        goto oimkeqocuguqqsqk;
        oimkeqocuguqqsqk:
        $ksaameoqigiaoigg = false;
        goto oeocukauoyosicso;
        ikuuiauwouuqawuw:
        return $ksaameoqigiaoigg;
        goto yoqakewookqoqacm;
        suqceasgacskcmkc:
        if (!$aiamqeawckcsuaou) {
            goto wkwamkgkwykeqkec;
        }
        goto yykqaowwsqgqysmq;
        uckewycoogsogwiy:
        wkwamkgkwykeqkec:
        goto ikuuiauwouuqawuw;
        kwiggogcgciwuwqk:
        $ksaameoqigiaoigg = true;
        goto uckewycoogsogwiy;
        yykqaowwsqgqysmq:
        $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
        goto kwiggogcgciwuwqk;
        oeocukauoyosicso:
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, "\157\162\x6d\x2d\x61\143\164\x69\157\x6e", false);
        goto suqceasgacskcmkc;
        yoqakewookqoqacm:
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        goto ocywegekakimmwcq;
        okkmcocqokkskasy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\144\x6f\x5f\163\151\x6e\147\154\x65\x5f\x61\x63\164\x69\x6f\156"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
        goto qiiigwkqeoewsuwm;
        esaqcqqwuussiiwo:
        $this->delete($aokagokqyuysuksm);
        goto ikqeeaysmqgcgawq;
        ocywegekakimmwcq:
        if (!($aiamqeawckcsuaou == "\x64\x65\x6c\145\x74\145")) {
            goto yuimwyoywaiiqacs;
        }
        goto emqswoaawgeyosmi;
        qiiigwkqeoewsuwm:
        if (!($aiamqeawckcsuaou === "\x64\145\154\x65\164\145")) {
            goto gswcoeiisamakwii;
        }
        goto esaqcqqwuussiiwo;
        esikeyqyuikmaiek:
        $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
        goto okkmcocqokkskasy;
        emqswoaawgeyosmi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iwsmmkqaoksmocok;
        iwsmmkqaoksmocok:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto esikeyqyuikmaiek;
        ikqeeaysmqgcgawq:
        gswcoeiisamakwii:
        goto mscgewkcqcoowweg;
        mscgewkcqcoowweg:
        yuimwyoywaiiqacs:
        goto suqcsgaosywaauuu;
        suqcsgaosywaauuu:
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu("\x70\x65\x72\137\160\x61\147\145", ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        goto wwukgaquuyoissgy;
        gsygwgsiawgmqiyi:
        ManipulateSetting::wwckmeoskuagomki("\x46\117\x55\x4e\104\x41\124\x49\117\x4e\137\x4f\x52\115\137\101\112\101\130\x5f\114\x49\x53\x54\x5f\x54\x41\x42\114\x45", true);
        goto qsgqwyqaqiowkmco;
        wwukgaquuyoissgy:
        $icwicymcioeyeyek = $_POST;
        goto gsygwgsiawgmqiyi;
        eucqomyqykgoiuge:
        $keccaugmemegoimu = ob_get_clean();
        goto usymasgsyqgsuocg;
        qsgqwyqaqiowkmco:
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, "\x70\x61\147\145\144", 1), ManipulateArray::get($icwicymcioeyeyek, "\x70\145\162\137\x70\x61\147\x65", 20));
        goto yqagomygmeoecwey;
        usymasgsyqgsuocg:
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
        goto aiccyaswigkaycqk;
        yqagomygmeoecwey:
        ob_start();
        goto qikaewekoecykeou;
        qikaewekoecykeou:
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        goto eucqomyqykgoiuge;
        aiccyaswigkaycqk:
    }
    public function qiekckyaeisgcmok()
    {
        goto zayqqeqgcwkekwws;
        syuaummumssgwwee:
        oqousikwiiqagoyw:
        goto oocuemosmeeekgas;
        ucuoeymyqeokgsya:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto yuuyikiacmmueosu;
        zayqqeqgcwkekwws:
        if (!$this->sooksiiooeywkyaq()) {
            goto oqousikwiiqagoyw;
        }
        goto aueaceeyommgkicu;
        egmayaiikwsskgmy:
        if (!($weyoqgcesqgeusiu < 1)) {
            goto sqyokemumceysegy;
        }
        goto ucuoeymyqeokgsya;
        sguskaeaaqcagqgc:
        
        $this->cecaguuoecmccuse("\x73\143\162\145\x65\156\137\157\x70\164\151\x6f\x6e\163\137\163\x68\157\x77\137\163\x75\142\x6d\151\x74", "\x5f\x5f\162\x65\x74\x75\162\156\137\164\162\165\x65");
        goto agkmiayuawacakau;
        agkmiayuawacakau:
        echo $this->iuygowkemiiwqmiw("\157\x70\x74\x69\x6f\x6e\x73", ["\160\145\x72\x5f\x70\141\x67\145" => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), "\x6c\x61\142\145\x6c" => __("\x4e\165\x6d\x62\x65\x72\x20\x6f\x66\x20\x69\164\145\155\163\40\x70\x65\x72\40\160\141\147\x65\x3a", PR__CMN__FOUNDATION)]);
        goto syuaummumssgwwee;
        mysueeoswqgccmui:
        $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
        goto egmayaiikwsskgmy;
        yuuyikiacmmueosu:
        sqyokemumceysegy:
        goto sguskaeaaqcagqgc;
        aueaceeyommgkicu:
        $omkysikckkcieckq = str_replace("\x2d", "\137", "\145\144\x69\164\137{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x70\x65\162\137\x70\x61\147\145");
        goto mysueeoswqgccmui;
        oocuemosmeeekgas:
    }
    public function wsockamcwmiaooya()
    {
        goto oyiuemaaykgkqqam;
        sqmoqymckwsogsqg:
        if (!$wkkweuacukumqmya) {
            goto ussceseaimqywuiy;
        }
        goto uycesqqkoeamocgm;
        wkgskiuiukiuyque:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto qiaimmucomukkeka;
            aoquoewagkseayug:
            $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}\55\150\x69\144\x65";
            goto osuscoaaomwcqkew;
            osuscoaaomwcqkew:
            $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\x65\154", [], [ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\x74", ["\151\144" => $aokagokqyuysuksm, "\x6e\141\155\x65" => $aokagokqyuysuksm, "\143\x6c\141\163\x73" => "\150\151\144\x65\55\143\x6f\154\165\155\156\55\x74\157\147", "\164\171\160\145" => "\x63\x68\x65\x63\x6b\x62\x6f\x78", "\166\141\154\x75\x65" => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
            goto ciucewqgyoiouesq;
            qiaimmucomukkeka:
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto egsycocugqyyswsi;
            }
            goto aoquoewagkseayug;
            ciucewqgyoiouesq:
            egsycocugqyyswsi:
            goto cgmgqucewwssmicq;
            cgmgqucewwssmicq:
            uoeasoimegouymka:
            goto mkomygccqkmkumsi;
            mkomygccqkmkumsi:
        }
        goto oyiuyywyeoskckuw;
        uycesqqkoeamocgm:
        $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, "\x5f\x74\x69\164\154\x65", __("\x43\157\154\165\x6d\x6e\163", PR__CMN__FOUNDATION));
        goto ceiwqkyquikcemmo;
        goqmywuiicciasyk:
        ManipulateHTML::awwqwouuoioauoaw("\x66\x69\145\x6c\x64\x73\x65\164", ["\143\x6c\x61\163\163" => "\155\145\x74\141\142\157\x78\x2d\160\162\145\x66\163"], true, [ManipulateHTML::uuccukgasskgimsq("\x6c\x65\147\145\156\x64", [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        goto siecswkggyikqkga;
        oyiuyywyeoskckuw:
        qkcsykuocwuyaice:
        goto goqmywuiicciasyk;
        ukomuiwukymcoaso:
        $yemgmmgogcwccuky = ["\x5f\x74\x69\x74\154\x65", "\143\142"];
        goto wkgskiuiukiuyque;
        oyiuemaaykgkqqam:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto gqmewagyagamokok;
        ceiwqkyquikcemmo:
        $ikgwqyuyckaewsow = '';
        goto ukomuiwukymcoaso;
        siecswkggyikqkga:
        ussceseaimqywuiy:
        goto qkuiwoqksgayqqmg;
        gqmewagyagamokok:
        $qqkyekmackggcick = get_hidden_columns($this->mgogaykgkoogasim()->miwqiiqeegeqcwis());
        goto sqmoqymckwsogsqg;
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
        wmumywgyyeagqoeq:
        $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        goto smcguieygyqcaqgs;
        skuqigsokaguscas:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto smiemmcqqukyguuu;
            smiemmcqqukyguuu:
            
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto quaqmuusokiyqgqe;
            }
            goto iksewmsaugayqaqq;
            iksewmsaugayqaqq:
            $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}\x2d\x68\x69\x64\x65";
            goto yamyagayiooyeekg;
            yamyagayiooyeekg:
            quaqmuusokiyqgqe:
            goto yoagcooekomeokwg;
            yoagcooekomeokwg:
            yuqgwwmqwqiuwmaw:
            goto eckcqesiokgwkkiw;
            eckcqesiokgwkkiw:
        }
        goto quyogmwugsyoaaiu;
        quyogmwugsyoaaiu:
        easqmyamcmeesgya:
        goto mmgmqogugasaqkgg;
        mqiiqkuaoekeuswo:
        $oowiawssoycsoiku = [str_replace("\55", "\137", "\x65\144\151\164\x5f{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\160\145\162\137\x70\x61\x67\x65")];
        goto qmoocweoekqueuyy;
        mmgmqogugasaqkgg:
        
        if (!in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            goto ecouwqosmoyyqmkw;
        }
        goto wmumywgyyeagqoeq;
        qmoocweoekqueuyy:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto sgiwoiscywusgmmm;
        smcguieygyqcaqgs:
        ecouwqosmoyyqmkw:
        goto mgcuiguaomoqwwwm;
        sgiwoiscywusgmmm:
        $yemgmmgogcwccuky = ["\x5f\164\x69\164\154\145", "\x63\x62"];
        goto skuqigsokaguscas;
        mgcuiguaomoqwwwm:
        return $wsayskqwkoauuyks;
        goto eoyiumycaigawmmc;
        eoyiumycaigawmmc:
    }
}
