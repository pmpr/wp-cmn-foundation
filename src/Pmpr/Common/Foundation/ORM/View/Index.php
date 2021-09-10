<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        hoeeyiowekaeemko:
        return $this->listTable;
        goto kymkucucyeoeikim;
        iekumemscwieugqw:
        eeqesooyqagwawae:
        goto hoeeyiowekaeemko;
        oqugqwcyomiaaoqu:
        if ($this->listTable) {
            goto eeqesooyqagwawae;
        }
        goto foeeqckqsyockkak;
        foeeqckqsyockkak:
        $this->listTable = new ListTable($this->mgogaykgkoogasim());
        goto iekumemscwieugqw;
        kymkucucyeoeikim:
    }
    public function wigskegsqequoeks()
    {
        goto usquiuuyiyqaeyiu;
        qicwaskssogcokgm:
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, "\165\x6f\145\145\155\x6f\153\145\x6f\167\141\x69\145\x63\143\157"]);
        goto uguigkcmukuouway;
        uguigkcmukuouway:
        parent::wigskegsqequoeks();
        goto uqqaiagaeqgqgaiy;
        usquiuuyiyqaeyiu:
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\147\145\x74\x5f{$this->aakmagwggmkoiiyu()}\x5f\x6c\151\163\164\x5f\x74\141\142\154\145");
        goto qicwaskssogcokgm;
        uqqaiagaeqgqgaiy:
    }
    public function render()
    {
        goto esuiysskoweawsue;
        esuiysskoweawsue:
        parent::render();
        goto gaomwagkcciesyqy;
        aegysmeecgcgayyw:
        $oyeykykuuckycumg = $this->waeasakssissiuqg();
        goto suqkuqygkkgwyaie;
        soaccwqimeksgwiw:
        echo $this->iuygowkemiiwqmiw("\151\x6e\144\145\x78", ["\x6e\141\155\x65" => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), "\164\x69\164\x6c\145" => $this->mmqossqsksemasay("\160\x6c\165\x72\141\x6c\137\x6e\x61\x6d\145"), "\164\x61\x62\x6c\145" => $this->waeasakssissiuqg(), "\x69\x74\145\x6d\163" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\163\x65\x61\x72\x63\150\137\151\x74\145\x6d\x73"), "\x61\143\164\x69\157\156\163" => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), "\146\151\x6c\164\x65\162\137\156\141\155\145" => $meywaqqsugaoeyys->aakiaoueckoiyoew(), "\x66\x69\x6c\x74\x65\x72\x5f\166\x61\x6c\165\145" => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
        goto wiysogeqqwgioyka;
        gaomwagkcciesyqy:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aegysmeecgcgayyw;
        suqkuqygkkgwyaie:
        $oyeykykuuckycumg->prepare_items();
        goto soaccwqimeksgwiw;
        wiysogeqqwgioyka:
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        goto wmywuusgukmmaams;
        egyyiccaeeiooaua:
        if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\x64\145\x6c\x65\x74\145\x5f\x69\164\x65\x6d", $aokagokqyuysuksm)) {
            goto cgiscsqwwgqqaeqi;
        }
        goto scisgsyemmsekgos;
        omqiayeucoioqoao:
        $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
        goto ugqaaewwmkocwwgy;
        qmuwoecuacmkwgem:
        goto cmegwsegsosyqcai;
        goto owmuceyswmgueasi;
        ueigkucgaucgeimc:
        syiqkaasoueowwui:
        goto sggawugoykqcmsug;
        wmywuusgukmmaams:
        $ksaameoqigiaoigg = false;
        goto gkyawqqcmigqgaiq;
        wakmayaoqoskekqy:
        Notice::kigowwqauiumummw(__("\x49\x74\145\x6d\x20\163\165\x63\143\145\x73\163\x66\165\x6c\154\171\40\x64\x65\x6c\145\x74\145\144\56", PR__CMN__FOUNDATION), "\x6f\162\x6d\55\x6e\157\164\151\143\x65");
        goto qmuwoecuacmkwgem;
        eogwckcymuugikuy:
        return $ksaameoqigiaoigg;
        goto msemumccgceyugmg;
        eeauyscekuckoues:
        cmegwsegsosyqcai:
        goto eogwckcymuugikuy;
        wkeuuycukmuqiaom:
        if ($uamcoiueqaamsqma) {
            goto ewymsmkkiksgwysk;
        }
        goto wakmayaoqoskekqy;
        wgewmqieuamsoayy:
        $uamcoiueqaamsqma = __("\105\x72\x72\157\162\40\151\156\40\144\145\x6c\x65\164\x69\x6e\x67\56", PR__CMN__FOUNDATION);
        goto kqgcyoscsusgoaqi;
        ooeausyowguqicuo:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto giaacoqqqsekcayy;
        }
        goto egyyiccaeeiooaua;
        owmuceyswmgueasi:
        ewymsmkkiksgwysk:
        goto mwsmsguqqkcwiiuk;
        gkyawqqcmigqgaiq:
        $uamcoiueqaamsqma = '';
        goto ooeausyowguqicuo;
        igooksugieceoege:
        cgiscsqwwgqqaeqi:
        goto omqiayeucoioqoao;
        sggawugoykqcmsug:
        giaacoqqqsekcayy:
        goto wkeuuycukmuqiaom;
        ugqaaewwmkocwwgy:
        if ($ksaameoqigiaoigg) {
            goto skkamseieeusycye;
        }
        goto wgewmqieuamsoayy;
        mwsmsguqqkcwiiuk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\157\x72\155\x2d\156\x6f\x74\151\x63\x65");
        goto eeauyscekuckoues;
        kqgcyoscsusgoaqi:
        skkamseieeusycye:
        goto ueigkucgaucgeimc;
        cewmoqyysgsmuiya:
        goto syiqkaasoueowwui;
        goto igooksugieceoege;
        scisgsyemmsekgos:
        $uamcoiueqaamsqma = __("\x53\157\x72\x72\x79\54\x20\171\157\165\40\141\162\145\x20\156\157\x74\40\141\x6c\x6c\157\x77\145\x64\x20\x74\x6f\x20\144\x65\x6c\x65\x74\145\40\x69\164\145\155\x73\x20\157\x66\x20\164\150\x69\x73\40\164\171\160\145\x2e", PR__CMN__FOUNDATION);
        goto cewmoqyysgsmuiya;
        msemumccgceyugmg:
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        goto aomysykcgikegiau;
        uiosisocuwokwkie:
        goto ikqqskkqqwmwssoo;
        goto cuumeogeomowqisc;
        gcckqucukawcasgk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\x6f\162\x6d\55\141\143\164\x69\157\x6e");
        goto qmkaeeomgkwggoyo;
        cuumeogeomowqisc:
        iwekmyyccgiyuecc:
        goto gcckqucukawcasgk;
        ogqmesokykywseys:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto ogsaaqsaogcqiouy;
        }
        goto ykomgumacooyomsk;
        kosaqwikueyksqmw:
        ogsaaqsaogcqiouy:
        goto gicyayswqyuoekcq;
        csammceowmqwaamq:
        return $ksaameoqigiaoigg;
        goto ocaguquugeamqckq;
        mqkmcysgoiaouiwm:
        wagqgeqymeqoeuyi:
        goto kosaqwikueyksqmw;
        awoaooyoeoyeeqee:
        $uamcoiueqaamsqma = '';
        goto ogqmesokykywseys;
        aomysykcgikegiau:
        $ksaameoqigiaoigg = false;
        goto cwwmimggaaecmucw;
        gicyayswqyuoekcq:
        if ($uamcoiueqaamsqma) {
            goto iwekmyyccgiyuecc;
        }
        goto iikiiioqiyegyaak;
        cwwmimggaaecmucw:
        $meisgakuwcmwosms = 0;
        goto awoaooyoeoyeeqee;
        ykomgumacooyomsk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto ciykoyeioqgyaeqo;
            miweggwqeiaeweia:
            asiqwuoswmigcaki:
            goto kqqiegkuqagcqsya;
            kqqiegkuqagcqsya:
            qoqskyuuwueqkquk:
            goto ousiuuwgwkiyikyq;
            acsqgiuageaasiyy:
            $uamcoiueqaamsqma = __("\105\x72\162\157\x72\40\x69\156\x20\144\x65\154\145\164\151\x6e\147\56", PR__CMN__FOUNDATION);
            goto oomguqikqokqwgku;
            samwkqgwouggsguc:
            goto wagqgeqymeqoeuyi;
            goto wyuemgggaqogsmsq;
            mugqyyeayeyggqqk:
            if ($this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                goto iwsuawwqomaowuii;
            }
            goto acsqgiuageaasiyy;
            oomguqikqokqwgku:
            $ksaameoqigiaoigg = false;
            goto samwkqgwouggsguc;
            mqicocmqegwukkwg:
            $uamcoiueqaamsqma = __("\x53\157\x72\162\171\54\40\171\x6f\165\40\x61\162\145\x20\x6e\157\164\x20\x61\x6c\154\157\167\145\144\x20\164\157\40\144\145\x6c\x65\x74\x65\40\x69\x74\x65\155\163\x20\157\x66\x20\x74\x68\151\163\40\x74\x79\x70\x65\56", PR__CMN__FOUNDATION);
            goto qgeugwymkkiacwoc;
            ouamogymawucwswu:
            wcugqegqsuuuwqao:
            goto mugqyyeayeyggqqk;
            guykyqecgswcsmws:
            $meisgakuwcmwosms++;
            goto kkumywowcoycymeo;
            wyuemgggaqogsmsq:
            iwsuawwqomaowuii:
            goto guykyqecgswcsmws;
            qgeugwymkkiacwoc:
            goto wagqgeqymeqoeuyi;
            goto emmsycooskoqmgeg;
            emmsycooskoqmgeg:
            goto asiqwuoswmigcaki;
            goto ouamogymawucwswu;
            ciykoyeioqgyaeqo:
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\145\154\x65\x74\145\x5f\151\x74\145\155", $aokagokqyuysuksm)) {
                goto wcugqegqsuuuwqao;
            }
            goto mqicocmqegwukkwg;
            kkumywowcoycymeo:
            $ksaameoqigiaoigg = true;
            goto miweggwqeiaeweia;
            ousiuuwgwkiyikyq:
        }
        goto mqkmcysgoiaouiwm;
        iikiiioqiyegyaak:
        Notice::kigowwqauiumummw(__("\x52\x65\x71\165\x65\x73\x74\x65\144\x20\x69\164\x65\155\163\40\144\145\x6c\145\164\x65\x64\x2e", PR__CMN__FOUNDATION), "\157\162\x6d\55\x6e\157\x74\151\x63\x65");
        goto uiosisocuwokwkie;
        qmkaeeomgkwggoyo:
        ikqqskkqqwmwssoo:
        goto csammceowmqwaamq;
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
        uaukmuiwskcemcsw:
        if (!($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq())) {
            goto cogywoqcqummsyus;
        }
        goto sockeswygwcskeuq;
        mkwkkmkgiqiamacc:
        $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
        goto uaqackioaiqwcocy;
        gmwykkouysyaqwqm:
        parent::mqyuagguukgcoeka();
        goto ugqwuugsweqgmywk;
        sockeswygwcskeuq:
        $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
        goto mkwkkmkgiqiamacc;
        mggeqkcksyaymcsa:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
        goto uegouoiuyoqkcscg;
        uegouoiuyoqkcscg:
        $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
        goto cgyakcqgugqgkqiw;
        isgwkwacoyimiauk:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
        goto mggeqkcksyaymcsa;
        kqswcsysqawkcgye:
        cogywoqcqummsyus:
        goto wusciwkkckmqigms;
        uaqackioaiqwcocy:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto cscusseysqygsoiy;
        ewscugeuicukkycc:
        exit;
        goto kqswcsysqawkcgye;
        eeyyskqsmquyquqw:
        wp_redirect($igscmsiuisqaqwkk);
        goto ewscugeuicukkycc;
        ugqwuugsweqgmywk:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uaukmuiwskcemcsw;
        cgyakcqgugqgkqiw:
        eekcoeikaeaaeyii:
        goto eeyyskqsmquyquqw;
        wusciwkkckmqigms:
    }
    
    public function ycogikomoygcmimg() : bool
    {
        goto ukkcmocamwgiqayu;
        gygwewcqsmwqismo:
        $this->myyqwyswweswiuwu($aiamqeawckcsuaou);
        goto uougwgeyiokewkkm;
        amgsueumgaguceaa:
        if (!$aiamqeawckcsuaou) {
            goto iiiccouaaqsyikae;
        }
        goto gygwewcqsmwqismo;
        mwysseaekcsiesmm:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\164\x69\157\x6e");
        goto amgsueumgaguceaa;
        ukqocwewouckikso:
        return $ksaameoqigiaoigg;
        goto ucqmumuygcywwqma;
        ukkcmocamwgiqayu:
        $ksaameoqigiaoigg = false;
        goto mwysseaekcsiesmm;
        uougwgeyiokewkkm:
        $ksaameoqigiaoigg = true;
        goto gommacygsykyussk;
        gommacygsykyussk:
        iiiccouaaqsyikae:
        goto ukqocwewouckikso;
        ucqmumuygcywwqma:
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou)
    {
        goto kocqqoyymosmuksu;
        iesekaeqeomeuaui:
        uimeeckqksqeekqq:
        goto wsesqmcqoiyyqkqi;
        sioekkmekwygemyc:
        $oysoyeaucuawyaky = array_map("\151\x6e\x74\166\x61\x6c", $igqsaukqcqscimok);
        goto yiowgigkkwsoqcci;
        kocqqoyymosmuksu:
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey("\x69\x74\x65\x6d", []);
        goto uqokiksoqcwwqgio;
        qukocuwgakemmyga:
        if (!$igqsaukqcqscimok) {
            goto uykousayyomcaeaa;
        }
        goto sioekkmekwygemyc;
        ieqesiiageaauiuw:
        if (!($aiamqeawckcsuaou && $oysoyeaucuawyaky)) {
            goto iuuuususuuuaieem;
        }
        goto gamqcwuwkikwqoay;
        oyeyomcgkmgymogq:
        $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
        goto iesekaeqeomeuaui;
        yiowgigkkwsoqcci:
        uykousayyomcaeaa:
        goto ieqesiiageaauiuw;
        mscyggqcesgqqksu:
        if (!($aiamqeawckcsuaou == "\x64\145\154\x65\164\145")) {
            goto uimeeckqksqeekqq;
        }
        goto oyeyomcgkmgymogq;
        wsesqmcqoiyyqkqi:
        iuuuususuuuaieem:
        goto mogkoocsoeuyoqqa;
        gamqcwuwkikwqoay:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x64\x6f\137\142\165\154\x6b\x5f\141\143\x74\x69\x6f\156"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
        goto mscyggqcesgqqksu;
        uqokiksoqcwwqgio:
        $oysoyeaucuawyaky = [];
        goto qukocuwgakemmyga;
        mogkoocsoeuyoqqa:
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        goto oimkeqocuguqqsqk;
        oimkeqocuguqqsqk:
        $ksaameoqigiaoigg = false;
        goto oeocukauoyosicso;
        yykqaowwsqgqysmq:
        $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
        goto kwiggogcgciwuwqk;
        suqceasgacskcmkc:
        if (!$aiamqeawckcsuaou) {
            goto wkwamkgkwykeqkec;
        }
        goto yykqaowwsqgqysmq;
        uckewycoogsogwiy:
        wkwamkgkwykeqkec:
        goto ikuuiauwouuqawuw;
        ikuuiauwouuqawuw:
        return $ksaameoqigiaoigg;
        goto yoqakewookqoqacm;
        kwiggogcgciwuwqk:
        $ksaameoqigiaoigg = true;
        goto uckewycoogsogwiy;
        oeocukauoyosicso:
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, "\x6f\162\155\55\x61\143\x74\151\x6f\x6e", false);
        goto suqceasgacskcmkc;
        yoqakewookqoqacm:
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        goto ocywegekakimmwcq;
        okkmcocqokkskasy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\144\157\137\x73\x69\x6e\147\154\x65\137\141\x63\164\x69\157\156"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
        goto qiiigwkqeoewsuwm;
        iwsmmkqaoksmocok:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto esikeyqyuikmaiek;
        mscgewkcqcoowweg:
        yuimwyoywaiiqacs:
        goto suqcsgaosywaauuu;
        qiiigwkqeoewsuwm:
        if (!($aiamqeawckcsuaou === "\x64\145\154\x65\x74\x65")) {
            goto gswcoeiisamakwii;
        }
        goto esaqcqqwuussiiwo;
        ocywegekakimmwcq:
        if (!($aiamqeawckcsuaou == "\144\145\x6c\x65\164\x65")) {
            goto yuimwyoywaiiqacs;
        }
        goto emqswoaawgeyosmi;
        esaqcqqwuussiiwo:
        $this->delete($aokagokqyuysuksm);
        goto ikqeeaysmqgcgawq;
        esikeyqyuikmaiek:
        $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
        goto okkmcocqokkskasy;
        emqswoaawgeyosmi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iwsmmkqaoksmocok;
        ikqeeaysmqgcgawq:
        gswcoeiisamakwii:
        goto mscgewkcqcoowweg;
        suqcsgaosywaauuu:
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu("\x70\x65\x72\x5f\160\x61\147\145", ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        goto wwukgaquuyoissgy;
        usymasgsyqgsuocg:
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
        goto aiccyaswigkaycqk;
        wwukgaquuyoissgy:
        $icwicymcioeyeyek = $_POST;
        goto gsygwgsiawgmqiyi;
        eucqomyqykgoiuge:
        $keccaugmemegoimu = ob_get_clean();
        goto usymasgsyqgsuocg;
        yqagomygmeoecwey:
        ob_start();
        goto qikaewekoecykeou;
        qikaewekoecykeou:
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        goto eucqomyqykgoiuge;
        qsgqwyqaqiowkmco:
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, "\160\141\x67\x65\144", 1), ManipulateArray::get($icwicymcioeyeyek, "\160\145\162\x5f\160\x61\147\x65", 20));
        goto yqagomygmeoecwey;
        gsygwgsiawgmqiyi:
        ManipulateSetting::wwckmeoskuagomki("\106\117\x55\x4e\104\x41\x54\x49\x4f\x4e\x5f\117\122\115\x5f\x41\112\101\130\137\x4c\x49\x53\124\x5f\x54\101\102\114\105", true);
        goto qsgqwyqaqiowkmco;
        aiccyaswigkaycqk:
    }
    public function qiekckyaeisgcmok()
    {
        goto zayqqeqgcwkekwws;
        aueaceeyommgkicu:
        $omkysikckkcieckq = str_replace("\x2d", "\137", "\145\144\151\164\137{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\160\145\x72\x5f\x70\x61\147\145");
        goto mysueeoswqgccmui;
        egmayaiikwsskgmy:
        if (!($weyoqgcesqgeusiu < 1)) {
            goto sqyokemumceysegy;
        }
        goto ucuoeymyqeokgsya;
        zayqqeqgcwkekwws:
        if (!$this->sooksiiooeywkyaq()) {
            goto oqousikwiiqagoyw;
        }
        goto aueaceeyommgkicu;
        mysueeoswqgccmui:
        $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
        goto egmayaiikwsskgmy;
        syuaummumssgwwee:
        oqousikwiiqagoyw:
        goto oocuemosmeeekgas;
        ucuoeymyqeokgsya:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto yuuyikiacmmueosu;
        agkmiayuawacakau:
        echo $this->iuygowkemiiwqmiw("\157\x70\x74\151\157\156\163", ["\160\145\162\x5f\160\x61\147\145" => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), "\154\141\142\145\x6c" => __("\x4e\165\x6d\x62\x65\x72\40\157\x66\x20\151\x74\x65\155\x73\x20\160\x65\162\40\x70\x61\x67\145\72", PR__CMN__FOUNDATION)]);
        goto syuaummumssgwwee;
        yuuyikiacmmueosu:
        sqyokemumceysegy:
        goto sguskaeaaqcagqgc;
        sguskaeaaqcagqgc:
        
        $this->cecaguuoecmccuse("\x73\143\x72\145\145\x6e\137\157\160\x74\151\157\x6e\x73\137\163\x68\157\x77\x5f\163\x75\142\x6d\151\x74", "\x5f\137\x72\145\164\x75\x72\156\x5f\164\x72\x75\145");
        goto agkmiayuawacakau;
        oocuemosmeeekgas:
    }
    public function wsockamcwmiaooya()
    {
        goto oyiuemaaykgkqqam;
        wkgskiuiukiuyque:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto qiaimmucomukkeka;
            aoquoewagkseayug:
            $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}\x2d\x68\x69\x64\145";
            goto osuscoaaomwcqkew;
            cgmgqucewwssmicq:
            uoeasoimegouymka:
            goto mkomygccqkmkumsi;
            ciucewqgyoiouesq:
            egsycocugqyyswsi:
            goto cgmgqucewwssmicq;
            osuscoaaomwcqkew:
            $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq("\154\141\x62\x65\x6c", [], [ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\165\164", ["\x69\144" => $aokagokqyuysuksm, "\156\x61\x6d\145" => $aokagokqyuysuksm, "\143\154\141\x73\x73" => "\x68\151\x64\145\x2d\x63\x6f\x6c\x75\x6d\156\55\x74\157\147", "\x74\x79\x70\x65" => "\x63\150\x65\x63\x6b\142\157\x78", "\x76\141\154\x75\145" => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
            goto ciucewqgyoiouesq;
            qiaimmucomukkeka:
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto egsycocugqyyswsi;
            }
            goto aoquoewagkseayug;
            mkomygccqkmkumsi:
        }
        goto oyiuyywyeoskckuw;
        siecswkggyikqkga:
        ussceseaimqywuiy:
        goto qkuiwoqksgayqqmg;
        ceiwqkyquikcemmo:
        $ikgwqyuyckaewsow = '';
        goto ukomuiwukymcoaso;
        oyiuyywyeoskckuw:
        qkcsykuocwuyaice:
        goto goqmywuiicciasyk;
        oyiuemaaykgkqqam:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto gqmewagyagamokok;
        gqmewagyagamokok:
        $qqkyekmackggcick = get_hidden_columns($this->mgogaykgkoogasim()->miwqiiqeegeqcwis());
        goto sqmoqymckwsogsqg;
        ukomuiwukymcoaso:
        $yemgmmgogcwccuky = ["\x5f\164\151\x74\154\145", "\x63\x62"];
        goto wkgskiuiukiuyque;
        sqmoqymckwsogsqg:
        if (!$wkkweuacukumqmya) {
            goto ussceseaimqywuiy;
        }
        goto uycesqqkoeamocgm;
        goqmywuiicciasyk:
        ManipulateHTML::awwqwouuoioauoaw("\x66\x69\x65\154\144\x73\x65\164", ["\x63\x6c\x61\163\163" => "\155\145\x74\141\142\x6f\170\x2d\x70\162\x65\146\163"], true, [ManipulateHTML::uuccukgasskgimsq("\x6c\145\x67\145\156\x64", [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        goto siecswkggyikqkga;
        uycesqqkoeamocgm:
        $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, "\x5f\164\151\x74\154\145", __("\103\x6f\x6c\165\155\x6e\163", PR__CMN__FOUNDATION));
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
        qmoocweoekqueuyy:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto sgiwoiscywusgmmm;
        smcguieygyqcaqgs:
        ecouwqosmoyyqmkw:
        goto mgcuiguaomoqwwwm;
        mqiiqkuaoekeuswo:
        $oowiawssoycsoiku = [str_replace("\55", "\x5f", "\x65\x64\151\x74\x5f{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\160\x65\162\137\160\141\x67\x65")];
        goto qmoocweoekqueuyy;
        sgiwoiscywusgmmm:
        $yemgmmgogcwccuky = ["\x5f\164\151\x74\154\145", "\x63\x62"];
        goto skuqigsokaguscas;
        skuqigsokaguscas:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto smiemmcqqukyguuu;
            yoagcooekomeokwg:
            yuqgwwmqwqiuwmaw:
            goto eckcqesiokgwkkiw;
            smiemmcqqukyguuu:
            
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto quaqmuusokiyqgqe;
            }
            goto iksewmsaugayqaqq;
            iksewmsaugayqaqq:
            $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}\55\x68\x69\x64\145";
            goto yamyagayiooyeekg;
            yamyagayiooyeekg:
            quaqmuusokiyqgqe:
            goto yoagcooekomeokwg;
            eckcqesiokgwkkiw:
        }
        goto quyogmwugsyoaaiu;
        wmumywgyyeagqoeq:
        $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        goto smcguieygyqcaqgs;
        quyogmwugsyoaaiu:
        easqmyamcmeesgya:
        goto mmgmqogugasaqkgg;
        mmgmqogugasaqkgg:
        
        if (!in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            goto ecouwqosmoyyqmkw;
        }
        goto wmumywgyyeagqoeq;
        mgcuiguaomoqwwwm:
        return $wsayskqwkoauuyks;
        goto eoyiumycaigawmmc;
        eoyiumycaigawmmc:
    }
}
