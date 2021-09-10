<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        hoeeyiowekaeemko:
        return $this->listTable;
        goto kymkucucyeoeikim;
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
        usquiuuyiyqaeyiu:
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x67\x65\x74\x5f{$this->aakmagwggmkoiiyu()}\137\x6c\x69\163\164\137\164\141\x62\154\x65");
        goto qicwaskssogcokgm;
        qicwaskssogcokgm:
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, "\165\x6f\145\145\155\x6f\153\x65\157\167\x61\x69\145\143\x63\x6f"]);
        goto uguigkcmukuouway;
        uguigkcmukuouway:
        parent::wigskegsqequoeks();
        goto uqqaiagaeqgqgaiy;
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
        suqkuqygkkgwyaie:
        $oyeykykuuckycumg->prepare_items();
        goto soaccwqimeksgwiw;
        gaomwagkcciesyqy:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aegysmeecgcgayyw;
        soaccwqimeksgwiw:
        echo $this->iuygowkemiiwqmiw("\151\x6e\x64\x65\x78", ["\156\141\x6d\145" => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), "\x74\151\x74\154\145" => $this->mmqossqsksemasay("\x70\154\x75\162\x61\154\x5f\156\x61\155\x65"), "\x74\141\x62\154\145" => $this->waeasakssissiuqg(), "\x69\x74\145\x6d\x73" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x73\x65\x61\162\x63\x68\x5f\x69\164\145\x6d\x73"), "\x61\x63\164\x69\x6f\x6e\163" => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), "\146\151\x6c\164\x65\x72\137\156\x61\155\x65" => $meywaqqsugaoeyys->aakiaoueckoiyoew(), "\146\x69\x6c\x74\145\162\137\x76\141\x6c\165\145" => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
        goto wiysogeqqwgioyka;
        wiysogeqqwgioyka:
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        goto wmywuusgukmmaams;
        wakmayaoqoskekqy:
        Notice::kigowwqauiumummw(__("\x49\x74\145\x6d\40\163\x75\143\143\145\163\163\x66\165\x6c\x6c\x79\40\x64\x65\x6c\145\164\x65\x64\56", PR__CMN__FOUNDATION), "\157\162\x6d\x2d\156\157\164\x69\143\145");
        goto qmuwoecuacmkwgem;
        wkeuuycukmuqiaom:
        if ($uamcoiueqaamsqma) {
            goto ewymsmkkiksgwysk;
        }
        goto wakmayaoqoskekqy;
        scisgsyemmsekgos:
        $uamcoiueqaamsqma = __("\123\157\162\x72\171\54\x20\171\x6f\165\x20\x61\162\x65\x20\x6e\x6f\164\40\141\x6c\x6c\157\167\145\144\40\164\157\x20\144\145\154\145\164\x65\40\151\164\145\155\163\x20\157\146\x20\x74\150\151\x73\x20\164\171\160\145\x2e", PR__CMN__FOUNDATION);
        goto cewmoqyysgsmuiya;
        owmuceyswmgueasi:
        ewymsmkkiksgwysk:
        goto mwsmsguqqkcwiiuk;
        egyyiccaeeiooaua:
        if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\144\x65\154\x65\x74\x65\137\x69\164\145\155", $aokagokqyuysuksm)) {
            goto cgiscsqwwgqqaeqi;
        }
        goto scisgsyemmsekgos;
        igooksugieceoege:
        cgiscsqwwgqqaeqi:
        goto omqiayeucoioqoao;
        qmuwoecuacmkwgem:
        goto cmegwsegsosyqcai;
        goto owmuceyswmgueasi;
        eeauyscekuckoues:
        cmegwsegsosyqcai:
        goto eogwckcymuugikuy;
        sggawugoykqcmsug:
        giaacoqqqsekcayy:
        goto wkeuuycukmuqiaom;
        ueigkucgaucgeimc:
        syiqkaasoueowwui:
        goto sggawugoykqcmsug;
        ugqaaewwmkocwwgy:
        if ($ksaameoqigiaoigg) {
            goto skkamseieeusycye;
        }
        goto wgewmqieuamsoayy;
        eogwckcymuugikuy:
        return $ksaameoqigiaoigg;
        goto msemumccgceyugmg;
        cewmoqyysgsmuiya:
        goto syiqkaasoueowwui;
        goto igooksugieceoege;
        wmywuusgukmmaams:
        $ksaameoqigiaoigg = false;
        goto gkyawqqcmigqgaiq;
        ooeausyowguqicuo:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto giaacoqqqsekcayy;
        }
        goto egyyiccaeeiooaua;
        kqgcyoscsusgoaqi:
        skkamseieeusycye:
        goto ueigkucgaucgeimc;
        wgewmqieuamsoayy:
        $uamcoiueqaamsqma = __("\x45\162\162\157\162\x20\x69\156\40\x64\x65\x6c\145\x74\x69\x6e\147\x2e", PR__CMN__FOUNDATION);
        goto kqgcyoscsusgoaqi;
        gkyawqqcmigqgaiq:
        $uamcoiueqaamsqma = '';
        goto ooeausyowguqicuo;
        omqiayeucoioqoao:
        $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
        goto ugqaaewwmkocwwgy;
        mwsmsguqqkcwiiuk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\x6f\162\x6d\x2d\x6e\x6f\164\x69\143\145");
        goto eeauyscekuckoues;
        msemumccgceyugmg:
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        goto aomysykcgikegiau;
        gicyayswqyuoekcq:
        if ($uamcoiueqaamsqma) {
            goto iwekmyyccgiyuecc;
        }
        goto iikiiioqiyegyaak;
        awoaooyoeoyeeqee:
        $uamcoiueqaamsqma = '';
        goto ogqmesokykywseys;
        aomysykcgikegiau:
        $ksaameoqigiaoigg = false;
        goto cwwmimggaaecmucw;
        qmkaeeomgkwggoyo:
        ikqqskkqqwmwssoo:
        goto csammceowmqwaamq;
        kosaqwikueyksqmw:
        ogsaaqsaogcqiouy:
        goto gicyayswqyuoekcq;
        ykomgumacooyomsk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto ciykoyeioqgyaeqo;
            acsqgiuageaasiyy:
            $uamcoiueqaamsqma = __("\105\162\x72\157\162\x20\x69\156\x20\144\x65\154\x65\x74\151\x6e\147\56", PR__CMN__FOUNDATION);
            goto oomguqikqokqwgku;
            oomguqikqokqwgku:
            $ksaameoqigiaoigg = false;
            goto samwkqgwouggsguc;
            emmsycooskoqmgeg:
            goto asiqwuoswmigcaki;
            goto ouamogymawucwswu;
            qgeugwymkkiacwoc:
            goto wagqgeqymeqoeuyi;
            goto emmsycooskoqmgeg;
            wyuemgggaqogsmsq:
            iwsuawwqomaowuii:
            goto guykyqecgswcsmws;
            ciykoyeioqgyaeqo:
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\x64\145\154\x65\x74\x65\137\151\164\x65\x6d", $aokagokqyuysuksm)) {
                goto wcugqegqsuuuwqao;
            }
            goto mqicocmqegwukkwg;
            samwkqgwouggsguc:
            goto wagqgeqymeqoeuyi;
            goto wyuemgggaqogsmsq;
            miweggwqeiaeweia:
            asiqwuoswmigcaki:
            goto kqqiegkuqagcqsya;
            mugqyyeayeyggqqk:
            if ($this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                goto iwsuawwqomaowuii;
            }
            goto acsqgiuageaasiyy;
            guykyqecgswcsmws:
            $meisgakuwcmwosms++;
            goto kkumywowcoycymeo;
            kkumywowcoycymeo:
            $ksaameoqigiaoigg = true;
            goto miweggwqeiaeweia;
            mqicocmqegwukkwg:
            $uamcoiueqaamsqma = __("\123\157\162\x72\x79\x2c\40\171\157\x75\x20\141\162\145\40\x6e\157\x74\x20\x61\154\154\157\167\145\x64\x20\164\x6f\x20\144\x65\154\145\164\145\x20\151\164\145\x6d\x73\40\157\146\40\164\150\x69\163\40\164\171\x70\x65\56", PR__CMN__FOUNDATION);
            goto qgeugwymkkiacwoc;
            kqqiegkuqagcqsya:
            qoqskyuuwueqkquk:
            goto ousiuuwgwkiyikyq;
            ouamogymawucwswu:
            wcugqegqsuuuwqao:
            goto mugqyyeayeyggqqk;
            ousiuuwgwkiyikyq:
        }
        goto mqkmcysgoiaouiwm;
        cuumeogeomowqisc:
        iwekmyyccgiyuecc:
        goto gcckqucukawcasgk;
        uiosisocuwokwkie:
        goto ikqqskkqqwmwssoo;
        goto cuumeogeomowqisc;
        csammceowmqwaamq:
        return $ksaameoqigiaoigg;
        goto ocaguquugeamqckq;
        gcckqucukawcasgk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\x6f\x72\155\55\141\x63\164\x69\157\156");
        goto qmkaeeomgkwggoyo;
        cwwmimggaaecmucw:
        $meisgakuwcmwosms = 0;
        goto awoaooyoeoyeeqee;
        mqkmcysgoiaouiwm:
        wagqgeqymeqoeuyi:
        goto kosaqwikueyksqmw;
        ogqmesokykywseys:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto ogsaaqsaogcqiouy;
        }
        goto ykomgumacooyomsk;
        iikiiioqiyegyaak:
        Notice::kigowwqauiumummw(__("\x52\145\161\x75\145\x73\164\145\x64\40\x69\164\145\155\163\40\144\145\154\145\164\x65\x64\x2e", PR__CMN__FOUNDATION), "\157\162\155\55\156\157\164\151\143\x65");
        goto uiosisocuwokwkie;
        ocaguquugeamqckq:
    }
    public function mqyuagguukgcoeka()
    {
        goto gmwykkouysyaqwqm;
        mggeqkcksyaymcsa:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
        goto uegouoiuyoqkcscg;
        sockeswygwcskeuq:
        $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
        goto mkwkkmkgiqiamacc;
        eeyyskqsmquyquqw:
        wp_redirect($igscmsiuisqaqwkk);
        goto ewscugeuicukkycc;
        ewscugeuicukkycc:
        exit;
        goto kqswcsysqawkcgye;
        cscusseysqygsoiy:
        if (!($tsuauommsquiesmk && $eqgoocgaqwqcimie)) {
            goto eekcoeikaeaaeyii;
        }
        goto isgwkwacoyimiauk;
        mkwkkmkgiqiamacc:
        $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
        goto uaqackioaiqwcocy;
        cgyakcqgugqgkqiw:
        eekcoeikaeaaeyii:
        goto eeyyskqsmquyquqw;
        isgwkwacoyimiauk:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
        goto mggeqkcksyaymcsa;
        ugqwuugsweqgmywk:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uaukmuiwskcemcsw;
        uegouoiuyoqkcscg:
        $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
        goto cgyakcqgugqgkqiw;
        kqswcsysqawkcgye:
        cogywoqcqummsyus:
        goto wusciwkkckmqigms;
        uaukmuiwskcemcsw:
        if (!($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq())) {
            goto cogywoqcqummsyus;
        }
        goto sockeswygwcskeuq;
        gmwykkouysyaqwqm:
        parent::mqyuagguukgcoeka();
        goto ugqwuugsweqgmywk;
        uaqackioaiqwcocy:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto cscusseysqygsoiy;
        wusciwkkckmqigms:
    }
    
    public function ycogikomoygcmimg() : bool
    {
        goto ukkcmocamwgiqayu;
        ukkcmocamwgiqayu:
        $ksaameoqigiaoigg = false;
        goto mwysseaekcsiesmm;
        uougwgeyiokewkkm:
        $ksaameoqigiaoigg = true;
        goto gommacygsykyussk;
        amgsueumgaguceaa:
        if (!$aiamqeawckcsuaou) {
            goto iiiccouaaqsyikae;
        }
        goto gygwewcqsmwqismo;
        mwysseaekcsiesmm:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\x74\x69\157\x6e");
        goto amgsueumgaguceaa;
        ukqocwewouckikso:
        return $ksaameoqigiaoigg;
        goto ucqmumuygcywwqma;
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
        wsesqmcqoiyyqkqi:
        iuuuususuuuaieem:
        goto mogkoocsoeuyoqqa;
        sioekkmekwygemyc:
        $oysoyeaucuawyaky = array_map("\x69\x6e\x74\x76\x61\154", $igqsaukqcqscimok);
        goto yiowgigkkwsoqcci;
        gamqcwuwkikwqoay:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\x64\157\x5f\142\165\x6c\x6b\x5f\x61\143\164\x69\157\156"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
        goto mscyggqcesgqqksu;
        iesekaeqeomeuaui:
        uimeeckqksqeekqq:
        goto wsesqmcqoiyyqkqi;
        yiowgigkkwsoqcci:
        uykousayyomcaeaa:
        goto ieqesiiageaauiuw;
        kocqqoyymosmuksu:
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey("\x69\164\x65\x6d", []);
        goto uqokiksoqcwwqgio;
        uqokiksoqcwwqgio:
        $oysoyeaucuawyaky = [];
        goto qukocuwgakemmyga;
        qukocuwgakemmyga:
        if (!$igqsaukqcqscimok) {
            goto uykousayyomcaeaa;
        }
        goto sioekkmekwygemyc;
        mscyggqcesgqqksu:
        if (!($aiamqeawckcsuaou == "\x64\145\x6c\145\164\145")) {
            goto uimeeckqksqeekqq;
        }
        goto oyeyomcgkmgymogq;
        oyeyomcgkmgymogq:
        $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
        goto iesekaeqeomeuaui;
        ieqesiiageaauiuw:
        if (!($aiamqeawckcsuaou && $oysoyeaucuawyaky)) {
            goto iuuuususuuuaieem;
        }
        goto gamqcwuwkikwqoay;
        mogkoocsoeuyoqqa:
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        goto oimkeqocuguqqsqk;
        oimkeqocuguqqsqk:
        $ksaameoqigiaoigg = false;
        goto oeocukauoyosicso;
        suqceasgacskcmkc:
        if (!$aiamqeawckcsuaou) {
            goto wkwamkgkwykeqkec;
        }
        goto yykqaowwsqgqysmq;
        uckewycoogsogwiy:
        wkwamkgkwykeqkec:
        goto ikuuiauwouuqawuw;
        oeocukauoyosicso:
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, "\x6f\162\x6d\55\141\143\164\151\157\x6e", false);
        goto suqceasgacskcmkc;
        ikuuiauwouuqawuw:
        return $ksaameoqigiaoigg;
        goto yoqakewookqoqacm;
        kwiggogcgciwuwqk:
        $ksaameoqigiaoigg = true;
        goto uckewycoogsogwiy;
        yykqaowwsqgqysmq:
        $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
        goto kwiggogcgciwuwqk;
        yoqakewookqoqacm:
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        goto ocywegekakimmwcq;
        ikqeeaysmqgcgawq:
        gswcoeiisamakwii:
        goto mscgewkcqcoowweg;
        esikeyqyuikmaiek:
        $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
        goto okkmcocqokkskasy;
        okkmcocqokkskasy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x64\x6f\137\x73\x69\x6e\147\154\x65\137\x61\x63\164\x69\157\156"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
        goto qiiigwkqeoewsuwm;
        qiiigwkqeoewsuwm:
        if (!($aiamqeawckcsuaou === "\144\145\x6c\x65\164\x65")) {
            goto gswcoeiisamakwii;
        }
        goto esaqcqqwuussiiwo;
        esaqcqqwuussiiwo:
        $this->delete($aokagokqyuysuksm);
        goto ikqeeaysmqgcgawq;
        ocywegekakimmwcq:
        if (!($aiamqeawckcsuaou == "\x64\x65\x6c\145\x74\x65")) {
            goto yuimwyoywaiiqacs;
        }
        goto emqswoaawgeyosmi;
        iwsmmkqaoksmocok:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto esikeyqyuikmaiek;
        emqswoaawgeyosmi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iwsmmkqaoksmocok;
        mscgewkcqcoowweg:
        yuimwyoywaiiqacs:
        goto suqcsgaosywaauuu;
        suqcsgaosywaauuu:
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu("\160\145\162\x5f\x70\141\x67\x65", ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        goto wwukgaquuyoissgy;
        usymasgsyqgsuocg:
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
        goto aiccyaswigkaycqk;
        gsygwgsiawgmqiyi:
        ManipulateSetting::wwckmeoskuagomki("\106\x4f\125\x4e\104\101\124\x49\117\x4e\x5f\117\122\115\137\101\112\x41\130\137\114\111\x53\x54\x5f\x54\x41\102\114\x45", true);
        goto qsgqwyqaqiowkmco;
        qsgqwyqaqiowkmco:
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, "\160\x61\147\145\x64", 1), ManipulateArray::get($icwicymcioeyeyek, "\160\145\162\x5f\160\141\147\x65", 20));
        goto yqagomygmeoecwey;
        eucqomyqykgoiuge:
        $keccaugmemegoimu = ob_get_clean();
        goto usymasgsyqgsuocg;
        qikaewekoecykeou:
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        goto eucqomyqykgoiuge;
        wwukgaquuyoissgy:
        $icwicymcioeyeyek = $_POST;
        goto gsygwgsiawgmqiyi;
        yqagomygmeoecwey:
        ob_start();
        goto qikaewekoecykeou;
        aiccyaswigkaycqk:
    }
    public function qiekckyaeisgcmok()
    {
        goto zayqqeqgcwkekwws;
        mysueeoswqgccmui:
        $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
        goto egmayaiikwsskgmy;
        zayqqeqgcwkekwws:
        if (!$this->sooksiiooeywkyaq()) {
            goto oqousikwiiqagoyw;
        }
        goto aueaceeyommgkicu;
        syuaummumssgwwee:
        oqousikwiiqagoyw:
        goto oocuemosmeeekgas;
        yuuyikiacmmueosu:
        sqyokemumceysegy:
        goto sguskaeaaqcagqgc;
        ucuoeymyqeokgsya:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto yuuyikiacmmueosu;
        agkmiayuawacakau:
        echo $this->iuygowkemiiwqmiw("\x6f\160\164\x69\157\156\163", ["\160\x65\162\x5f\160\141\x67\145" => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), "\154\x61\x62\145\x6c" => __("\x4e\x75\155\x62\145\x72\x20\157\146\40\151\164\x65\x6d\163\40\x70\145\x72\x20\x70\141\x67\x65\72", PR__CMN__FOUNDATION)]);
        goto syuaummumssgwwee;
        egmayaiikwsskgmy:
        if (!($weyoqgcesqgeusiu < 1)) {
            goto sqyokemumceysegy;
        }
        goto ucuoeymyqeokgsya;
        sguskaeaaqcagqgc:
        
        $this->cecaguuoecmccuse("\163\x63\162\x65\x65\156\137\157\160\x74\151\x6f\x6e\x73\x5f\x73\150\157\167\137\163\x75\142\x6d\151\164", "\x5f\137\162\x65\x74\165\162\156\137\x74\x72\x75\145");
        goto agkmiayuawacakau;
        aueaceeyommgkicu:
        $omkysikckkcieckq = str_replace("\55", "\137", "\145\144\151\x74\x5f{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x70\x65\162\x5f\x70\x61\147\x65");
        goto mysueeoswqgccmui;
        oocuemosmeeekgas:
    }
    public function wsockamcwmiaooya()
    {
        goto oyiuemaaykgkqqam;
        siecswkggyikqkga:
        ussceseaimqywuiy:
        goto qkuiwoqksgayqqmg;
        uycesqqkoeamocgm:
        $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, "\137\164\x69\164\154\145", __("\103\x6f\154\165\x6d\156\x73", PR__CMN__FOUNDATION));
        goto ceiwqkyquikcemmo;
        oyiuyywyeoskckuw:
        qkcsykuocwuyaice:
        goto goqmywuiicciasyk;
        ceiwqkyquikcemmo:
        $ikgwqyuyckaewsow = '';
        goto ukomuiwukymcoaso;
        wkgskiuiukiuyque:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto qiaimmucomukkeka;
            cgmgqucewwssmicq:
            uoeasoimegouymka:
            goto mkomygccqkmkumsi;
            ciucewqgyoiouesq:
            egsycocugqyyswsi:
            goto cgmgqucewwssmicq;
            qiaimmucomukkeka:
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto egsycocugqyyswsi;
            }
            goto aoquoewagkseayug;
            aoquoewagkseayug:
            $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}\x2d\150\151\144\145";
            goto osuscoaaomwcqkew;
            osuscoaaomwcqkew:
            $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq("\x6c\x61\x62\x65\x6c", [], [ManipulateHTML::qgsekwygcgawekeq("\x69\156\160\x75\164", ["\151\144" => $aokagokqyuysuksm, "\156\141\x6d\x65" => $aokagokqyuysuksm, "\x63\x6c\141\x73\x73" => "\150\151\144\145\x2d\x63\x6f\x6c\x75\155\156\x2d\164\x6f\147", "\164\171\160\145" => "\143\150\x65\143\x6b\x62\157\170", "\x76\x61\154\165\x65" => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
            goto ciucewqgyoiouesq;
            mkomygccqkmkumsi:
        }
        goto oyiuyywyeoskckuw;
        oyiuemaaykgkqqam:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto gqmewagyagamokok;
        goqmywuiicciasyk:
        ManipulateHTML::awwqwouuoioauoaw("\146\151\x65\154\144\x73\145\x74", ["\143\x6c\141\163\163" => "\155\145\164\x61\142\157\x78\x2d\160\162\x65\x66\163"], true, [ManipulateHTML::uuccukgasskgimsq("\154\x65\147\x65\x6e\x64", [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        goto siecswkggyikqkga;
        ukomuiwukymcoaso:
        $yemgmmgogcwccuky = ["\x5f\164\151\x74\154\x65", "\143\142"];
        goto wkgskiuiukiuyque;
        sqmoqymckwsogsqg:
        if (!$wkkweuacukumqmya) {
            goto ussceseaimqywuiy;
        }
        goto uycesqqkoeamocgm;
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
        mmgmqogugasaqkgg:
        
        if (!in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            goto ecouwqosmoyyqmkw;
        }
        goto wmumywgyyeagqoeq;
        skuqigsokaguscas:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto smiemmcqqukyguuu;
            yoagcooekomeokwg:
            yuqgwwmqwqiuwmaw:
            goto eckcqesiokgwkkiw;
            iksewmsaugayqaqq:
            $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}\55\150\x69\144\x65";
            goto yamyagayiooyeekg;
            smiemmcqqukyguuu:
            
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto quaqmuusokiyqgqe;
            }
            goto iksewmsaugayqaqq;
            yamyagayiooyeekg:
            quaqmuusokiyqgqe:
            goto yoagcooekomeokwg;
            eckcqesiokgwkkiw:
        }
        goto quyogmwugsyoaaiu;
        smcguieygyqcaqgs:
        ecouwqosmoyyqmkw:
        goto mgcuiguaomoqwwwm;
        sgiwoiscywusgmmm:
        $yemgmmgogcwccuky = ["\x5f\164\151\164\x6c\145", "\x63\142"];
        goto skuqigsokaguscas;
        wmumywgyyeagqoeq:
        $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        goto smcguieygyqcaqgs;
        qmoocweoekqueuyy:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto sgiwoiscywusgmmm;
        mqiiqkuaoekeuswo:
        $oowiawssoycsoiku = [str_replace("\x2d", "\x5f", "\145\144\151\164\137{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\160\145\162\137\x70\x61\147\x65")];
        goto qmoocweoekqueuyy;
        quyogmwugsyoaaiu:
        easqmyamcmeesgya:
        goto mmgmqogugasaqkgg;
        mgcuiguaomoqwwwm:
        return $wsayskqwkoauuyks;
        goto eoyiumycaigawmmc;
        eoyiumycaigawmmc:
    }
}
