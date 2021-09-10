<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        uguigkcmukuouway:
        parent::wigskegsqequoeks();
        goto uqqaiagaeqgqgaiy;
        qicwaskssogcokgm:
        $this->koaegcswmcqsiykq($iaakskwmyqceoscy, [$this, "\x75\x6f\x65\x65\x6d\x6f\x6b\145\157\x77\x61\x69\x65\x63\143\157"]);
        goto uguigkcmukuouway;
        usquiuuyiyqaeyiu:
        $iaakskwmyqceoscy = $this->ygyygikyocoymgaw("\x67\145\x74\137{$this->aakmagwggmkoiiyu()}\137\x6c\x69\163\x74\137\x74\x61\x62\154\x65");
        goto qicwaskssogcokgm;
        uqqaiagaeqgqgaiy:
    }
    public function render()
    {
        goto esuiysskoweawsue;
        soaccwqimeksgwiw:
        echo $this->iuygowkemiiwqmiw("\151\x6e\144\x65\170", ["\x6e\x61\155\145" => $meywaqqsugaoeyys->miwqiiqeegeqcwis(), "\x74\151\164\x6c\x65" => $this->mmqossqsksemasay("\160\154\165\x72\141\x6c\137\156\x61\x6d\x65"), "\x74\x61\x62\x6c\145" => $this->waeasakssissiuqg(), "\x69\x74\x65\155\163" => $this->oyeskqayoscwciem()->uikgwcuascgeissw("\x73\x65\x61\162\143\x68\137\x69\x74\145\x6d\x73"), "\141\x63\164\x69\x6f\x6e\x73" => $meywaqqsugaoeyys->easkmgsoqaqeyayo(), "\x66\x69\154\164\145\162\x5f\156\141\x6d\145" => $meywaqqsugaoeyys->aakiaoueckoiyoew(), "\146\151\154\164\145\162\137\166\x61\x6c\x75\145" => $oyeykykuuckycumg->umaeoegyykkkqmia()]);
        goto wiysogeqqwgioyka;
        aegysmeecgcgayyw:
        $oyeykykuuckycumg = $this->waeasakssissiuqg();
        goto suqkuqygkkgwyaie;
        gaomwagkcciesyqy:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto aegysmeecgcgayyw;
        suqkuqygkkgwyaie:
        $oyeykykuuckycumg->prepare_items();
        goto soaccwqimeksgwiw;
        esuiysskoweawsue:
        parent::render();
        goto gaomwagkcciesyqy;
        wiysogeqqwgioyka:
    }
    
    public function delete($aokagokqyuysuksm) : bool
    {
        goto wmywuusgukmmaams;
        wgewmqieuamsoayy:
        $uamcoiueqaamsqma = __("\105\x72\162\x6f\x72\x20\x69\x6e\40\144\145\x6c\145\x74\x69\x6e\x67\x2e", PR__CMN__FOUNDATION);
        goto kqgcyoscsusgoaqi;
        kqgcyoscsusgoaqi:
        skkamseieeusycye:
        goto ueigkucgaucgeimc;
        cewmoqyysgsmuiya:
        goto syiqkaasoueowwui;
        goto igooksugieceoege;
        eogwckcymuugikuy:
        return $ksaameoqigiaoigg;
        goto msemumccgceyugmg;
        qmuwoecuacmkwgem:
        goto cmegwsegsosyqcai;
        goto owmuceyswmgueasi;
        eeauyscekuckoues:
        cmegwsegsosyqcai:
        goto eogwckcymuugikuy;
        egyyiccaeeiooaua:
        if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\x64\x65\x6c\145\x74\x65\137\x69\x74\145\155", $aokagokqyuysuksm)) {
            goto cgiscsqwwgqqaeqi;
        }
        goto scisgsyemmsekgos;
        scisgsyemmsekgos:
        $uamcoiueqaamsqma = __("\x53\157\162\x72\x79\54\40\171\x6f\x75\40\x61\x72\145\40\156\157\x74\40\x61\x6c\154\157\x77\145\x64\x20\x74\x6f\x20\x64\145\x6c\x65\x74\145\40\151\164\x65\155\x73\40\x6f\146\40\164\x68\x69\x73\x20\x74\171\x70\145\56", PR__CMN__FOUNDATION);
        goto cewmoqyysgsmuiya;
        owmuceyswmgueasi:
        ewymsmkkiksgwysk:
        goto mwsmsguqqkcwiiuk;
        igooksugieceoege:
        cgiscsqwwgqqaeqi:
        goto omqiayeucoioqoao;
        gkyawqqcmigqgaiq:
        $uamcoiueqaamsqma = '';
        goto ooeausyowguqicuo;
        omqiayeucoioqoao:
        $ksaameoqigiaoigg = (bool) $this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm);
        goto ugqaaewwmkocwwgy;
        ugqaaewwmkocwwgy:
        if ($ksaameoqigiaoigg) {
            goto skkamseieeusycye;
        }
        goto wgewmqieuamsoayy;
        wkeuuycukmuqiaom:
        if ($uamcoiueqaamsqma) {
            goto ewymsmkkiksgwysk;
        }
        goto wakmayaoqoskekqy;
        mwsmsguqqkcwiiuk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\157\162\155\55\x6e\x6f\164\151\143\145");
        goto eeauyscekuckoues;
        sggawugoykqcmsug:
        giaacoqqqsekcayy:
        goto wkeuuycukmuqiaom;
        wakmayaoqoskekqy:
        Notice::kigowwqauiumummw(__("\111\164\145\x6d\x20\163\165\x63\x63\x65\x73\x73\x66\165\x6c\154\x79\x20\144\145\154\x65\164\145\x64\x2e", PR__CMN__FOUNDATION), "\x6f\x72\x6d\x2d\x6e\157\164\151\143\145");
        goto qmuwoecuacmkwgem;
        ooeausyowguqicuo:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto giaacoqqqsekcayy;
        }
        goto egyyiccaeeiooaua;
        ueigkucgaucgeimc:
        syiqkaasoueowwui:
        goto sggawugoykqcmsug;
        wmywuusgukmmaams:
        $ksaameoqigiaoigg = false;
        goto gkyawqqcmigqgaiq;
        msemumccgceyugmg:
    }
    
    public function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool
    {
        goto aomysykcgikegiau;
        gcckqucukawcasgk:
        Notice::eumukgqciqgksuiq($uamcoiueqaamsqma, "\x6f\162\155\x2d\x61\143\x74\x69\x6f\x6e");
        goto qmkaeeomgkwggoyo;
        awoaooyoeoyeeqee:
        $uamcoiueqaamsqma = '';
        goto ogqmesokykywseys;
        cuumeogeomowqisc:
        iwekmyyccgiyuecc:
        goto gcckqucukawcasgk;
        iikiiioqiyegyaak:
        Notice::kigowwqauiumummw(__("\122\x65\x71\165\145\x73\x74\x65\144\40\151\164\145\x6d\163\x20\x64\145\154\x65\164\x65\x64\56", PR__CMN__FOUNDATION), "\x6f\162\155\55\156\157\164\x69\143\x65");
        goto uiosisocuwokwkie;
        gicyayswqyuoekcq:
        if ($uamcoiueqaamsqma) {
            goto iwekmyyccgiyuecc;
        }
        goto iikiiioqiyegyaak;
        kosaqwikueyksqmw:
        ogsaaqsaogcqiouy:
        goto gicyayswqyuoekcq;
        uiosisocuwokwkie:
        goto ikqqskkqqwmwssoo;
        goto cuumeogeomowqisc;
        mqkmcysgoiaouiwm:
        wagqgeqymeqoeuyi:
        goto kosaqwikueyksqmw;
        ogqmesokykywseys:
        if (!$this->oyeskqayoscwciem()->uwaascqoguwkwiaw()) {
            goto ogsaaqsaogcqiouy;
        }
        goto ykomgumacooyomsk;
        aomysykcgikegiau:
        $ksaameoqigiaoigg = false;
        goto cwwmimggaaecmucw;
        qmkaeeomgkwggoyo:
        ikqqskkqqwmwssoo:
        goto csammceowmqwaamq;
        ykomgumacooyomsk:
        foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) {
            goto ciykoyeioqgyaeqo;
            qgeugwymkkiacwoc:
            goto wagqgeqymeqoeuyi;
            goto emmsycooskoqmgeg;
            kkumywowcoycymeo:
            $ksaameoqigiaoigg = true;
            goto miweggwqeiaeweia;
            oomguqikqokqwgku:
            $ksaameoqigiaoigg = false;
            goto samwkqgwouggsguc;
            ciykoyeioqgyaeqo:
            if ($aokagokqyuysuksm && DecoratorUser::scmcyesmmikkucie("\x64\x65\154\x65\164\x65\x5f\x69\164\145\x6d", $aokagokqyuysuksm)) {
                goto wcugqegqsuuuwqao;
            }
            goto mqicocmqegwukkwg;
            guykyqecgswcsmws:
            $meisgakuwcmwosms++;
            goto kkumywowcoycymeo;
            wyuemgggaqogsmsq:
            iwsuawwqomaowuii:
            goto guykyqecgswcsmws;
            acsqgiuageaasiyy:
            $uamcoiueqaamsqma = __("\x45\x72\x72\157\162\40\x69\156\40\x64\x65\x6c\145\x74\x69\156\x67\56", PR__CMN__FOUNDATION);
            goto oomguqikqokqwgku;
            samwkqgwouggsguc:
            goto wagqgeqymeqoeuyi;
            goto wyuemgggaqogsmsq;
            kqqiegkuqagcqsya:
            qoqskyuuwueqkquk:
            goto ousiuuwgwkiyikyq;
            emmsycooskoqmgeg:
            goto asiqwuoswmigcaki;
            goto ouamogymawucwswu;
            mugqyyeayeyggqqk:
            if ($this->mgogaykgkoogasim()->sgcuwcowgwimgsgk($aokagokqyuysuksm)) {
                goto iwsuawwqomaowuii;
            }
            goto acsqgiuageaasiyy;
            miweggwqeiaeweia:
            asiqwuoswmigcaki:
            goto kqqiegkuqagcqsya;
            mqicocmqegwukkwg:
            $uamcoiueqaamsqma = __("\x53\157\162\162\x79\x2c\40\171\x6f\165\x20\x61\162\145\40\156\157\x74\x20\x61\154\154\x6f\167\x65\x64\40\x74\157\40\x64\x65\x6c\x65\164\145\x20\151\164\145\155\163\x20\157\146\x20\164\150\151\163\x20\x74\171\160\145\x2e", PR__CMN__FOUNDATION);
            goto qgeugwymkkiacwoc;
            ouamogymawucwswu:
            wcugqegqsuuuwqao:
            goto mugqyyeayeyggqqk;
            ousiuuwgwkiyikyq:
        }
        goto mqkmcysgoiaouiwm;
        cwwmimggaaecmucw:
        $meisgakuwcmwosms = 0;
        goto awoaooyoeoyeeqee;
        csammceowmqwaamq:
        return $ksaameoqigiaoigg;
        goto ocaguquugeamqckq;
        ocaguquugeamqckq:
    }
    public function mqyuagguukgcoeka()
    {
        goto gmwykkouysyaqwqm;
        mkwkkmkgiqiamacc:
        $eqgoocgaqwqcimie = $this->waeasakssissiuqg()->umaeoegyykkkqmia();
        goto uaqackioaiqwcocy;
        isgwkwacoyimiauk:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_BY] = $tsuauommsquiesmk;
        goto mggeqkcksyaymcsa;
        ewscugeuicukkycc:
        exit;
        goto kqswcsysqawkcgye;
        cgyakcqgugqgkqiw:
        eekcoeikaeaaeyii:
        goto eeyyskqsmquyquqw;
        ugqwuugsweqgmywk:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto uaukmuiwskcemcsw;
        kqswcsysqawkcgye:
        cogywoqcqummsyus:
        goto wusciwkkckmqigms;
        uaqackioaiqwcocy:
        $tsuauommsquiesmk = $meywaqqsugaoeyys->aakiaoueckoiyoew();
        goto cscusseysqygsoiy;
        eeyyskqsmquyquqw:
        wp_redirect($igscmsiuisqaqwkk);
        goto ewscugeuicukkycc;
        sockeswygwcskeuq:
        $igscmsiuisqaqwkk = $this->qmgcisuuikgmqcsu();
        goto mkwkkmkgiqiamacc;
        mggeqkcksyaymcsa:
        $ywmkwiwkosakssii[$meywaqqsugaoeyys::ORM_FILTER_VALUE] = $eqgoocgaqwqcimie;
        goto uegouoiuyoqkcscg;
        uaukmuiwskcemcsw:
        if (!($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq())) {
            goto cogywoqcqummsyus;
        }
        goto sockeswygwcskeuq;
        cscusseysqygsoiy:
        if (!($tsuauommsquiesmk && $eqgoocgaqwqcimie)) {
            goto eekcoeikaeaaeyii;
        }
        goto isgwkwacoyimiauk;
        uegouoiuyoqkcscg:
        $igscmsiuisqaqwkk = DecoratorQuery::yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk);
        goto cgyakcqgugqgkqiw;
        gmwykkouysyaqwqm:
        parent::mqyuagguukgcoeka();
        goto ugqwuugsweqgmywk;
        wusciwkkckmqigms:
    }
    
    public function ycogikomoygcmimg() : bool
    {
        goto ukkcmocamwgiqayu;
        ukqocwewouckikso:
        return $ksaameoqigiaoigg;
        goto ucqmumuygcywwqma;
        amgsueumgaguceaa:
        if (!$aiamqeawckcsuaou) {
            goto iiiccouaaqsyikae;
        }
        goto gygwewcqsmwqismo;
        gommacygsykyussk:
        iiiccouaaqsyikae:
        goto ukqocwewouckikso;
        uougwgeyiokewkkm:
        $ksaameoqigiaoigg = true;
        goto gommacygsykyussk;
        ukkcmocamwgiqayu:
        $ksaameoqigiaoigg = false;
        goto mwysseaekcsiesmm;
        gygwewcqsmwqismo:
        $this->myyqwyswweswiuwu($aiamqeawckcsuaou);
        goto uougwgeyiokewkkm;
        mwysseaekcsiesmm:
        $aiamqeawckcsuaou = ManipulateServer::get("\141\x63\164\x69\x6f\156");
        goto amgsueumgaguceaa;
        ucqmumuygcywwqma:
    }
    
    public function myyqwyswweswiuwu($aiamqeawckcsuaou)
    {
        goto kocqqoyymosmuksu;
        kocqqoyymosmuksu:
        $igqsaukqcqscimok = ManipulateServer::yyqgamuwwakgciey("\151\164\145\x6d", []);
        goto uqokiksoqcwwqgio;
        wsesqmcqoiyyqkqi:
        iuuuususuuuaieem:
        goto mogkoocsoeuyoqqa;
        yiowgigkkwsoqcci:
        uykousayyomcaeaa:
        goto ieqesiiageaauiuw;
        oyeyomcgkmgymogq:
        $this->ugqgmscsqmycecio($oysoyeaucuawyaky);
        goto iesekaeqeomeuaui;
        ieqesiiageaauiuw:
        if (!($aiamqeawckcsuaou && $oysoyeaucuawyaky)) {
            goto iuuuususuuuaieem;
        }
        goto gamqcwuwkikwqoay;
        uqokiksoqcwwqgio:
        $oysoyeaucuawyaky = [];
        goto qukocuwgakemmyga;
        iesekaeqeomeuaui:
        uimeeckqksqeekqq:
        goto wsesqmcqoiyyqkqi;
        gamqcwuwkikwqoay:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\x64\157\x5f\x62\165\154\153\x5f\141\143\x74\151\157\156"), $aiamqeawckcsuaou, $oysoyeaucuawyaky);
        goto mscyggqcesgqqksu;
        mscyggqcesgqqksu:
        if (!($aiamqeawckcsuaou == "\x64\x65\x6c\145\164\145")) {
            goto uimeeckqksqeekqq;
        }
        goto oyeyomcgkmgymogq;
        qukocuwgakemmyga:
        if (!$igqsaukqcqscimok) {
            goto uykousayyomcaeaa;
        }
        goto sioekkmekwygemyc;
        sioekkmekwygemyc:
        $oysoyeaucuawyaky = array_map("\151\156\x74\166\x61\x6c", $igqsaukqcqscimok);
        goto yiowgigkkwsoqcci;
        mogkoocsoeuyoqqa:
    }
    
    public function uuwyiucwgmsoycmq() : bool
    {
        goto oimkeqocuguqqsqk;
        oeocukauoyosicso:
        $aiamqeawckcsuaou = ManipulateArray::get($_GET, "\157\162\x6d\x2d\x61\143\164\x69\157\x6e", false);
        goto suqceasgacskcmkc;
        yykqaowwsqgqysmq:
        $this->kosoaouogkeaomwo($aiamqeawckcsuaou);
        goto kwiggogcgciwuwqk;
        uckewycoogsogwiy:
        wkwamkgkwykeqkec:
        goto ikuuiauwouuqawuw;
        oimkeqocuguqqsqk:
        $ksaameoqigiaoigg = false;
        goto oeocukauoyosicso;
        kwiggogcgciwuwqk:
        $ksaameoqigiaoigg = true;
        goto uckewycoogsogwiy;
        suqceasgacskcmkc:
        if (!$aiamqeawckcsuaou) {
            goto wkwamkgkwykeqkec;
        }
        goto yykqaowwsqgqysmq;
        ikuuiauwouuqawuw:
        return $ksaameoqigiaoigg;
        goto yoqakewookqoqacm;
        yoqakewookqoqacm:
    }
    
    public function kosoaouogkeaomwo($aiamqeawckcsuaou)
    {
        goto ocywegekakimmwcq;
        esaqcqqwuussiiwo:
        $this->delete($aokagokqyuysuksm);
        goto ikqeeaysmqgcgawq;
        mscgewkcqcoowweg:
        yuimwyoywaiiqacs:
        goto suqcsgaosywaauuu;
        ocywegekakimmwcq:
        if (!($aiamqeawckcsuaou == "\x64\145\154\x65\164\x65")) {
            goto yuimwyoywaiiqacs;
        }
        goto emqswoaawgeyosmi;
        ikqeeaysmqgcgawq:
        gswcoeiisamakwii:
        goto mscgewkcqcoowweg;
        emqswoaawgeyosmi:
        $meywaqqsugaoeyys = $this->mgogaykgkoogasim();
        goto iwsmmkqaoksmocok;
        iwsmmkqaoksmocok:
        $ceiwsaacewygcsqg = $meywaqqsugaoeyys->kumuygiiqswoyasy();
        goto esikeyqyuikmaiek;
        qiiigwkqeoewsuwm:
        if (!($aiamqeawckcsuaou === "\x64\x65\x6c\145\164\145")) {
            goto gswcoeiisamakwii;
        }
        goto esaqcqqwuussiiwo;
        okkmcocqokkskasy:
        $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\x5f\144\x6f\x5f\x73\x69\156\x67\x6c\145\137\141\x63\x74\151\x6f\x6e"), $aiamqeawckcsuaou, $aokagokqyuysuksm);
        goto qiiigwkqeoewsuwm;
        esikeyqyuikmaiek:
        $aokagokqyuysuksm = ManipulateArray::get($_GET, $ceiwsaacewygcsqg, false);
        goto okkmcocqokkskasy;
        suqcsgaosywaauuu:
    }
    
    public function sooksiiooeywkyaq() : ?int
    {
        return $this->imkyoqyocosuqasu("\160\145\x72\x5f\160\x61\147\x65", ManipulateSetting::omkaowmygoqwsywq(20));
    }
    public function uoeemokeowaiecco()
    {
        goto wwukgaquuyoissgy;
        qsgqwyqaqiowkmco:
        $this->waeasakssissiuqg()->prepare_items(ManipulateArray::get($icwicymcioeyeyek, "\160\141\147\145\144", 1), ManipulateArray::get($icwicymcioeyeyek, "\160\x65\162\x5f\x70\x61\147\145", 20));
        goto yqagomygmeoecwey;
        gsygwgsiawgmqiyi:
        ManipulateSetting::wwckmeoskuagomki("\x46\117\125\116\x44\101\124\x49\117\116\x5f\x4f\122\x4d\x5f\101\x4a\101\130\x5f\114\x49\123\x54\137\x54\x41\x42\114\105", true);
        goto qsgqwyqaqiowkmco;
        qikaewekoecykeou:
        $this->waeasakssissiuqg()->kugsomueokogcawo();
        goto eucqomyqykgoiuge;
        eucqomyqykgoiuge:
        $keccaugmemegoimu = ob_get_clean();
        goto usymasgsyqgsuocg;
        wwukgaquuyoissgy:
        $icwicymcioeyeyek = $_POST;
        goto gsygwgsiawgmqiyi;
        usymasgsyqgsuocg:
        ManipulateAjax::imkyucqsciqykkee($keccaugmemegoimu, true);
        goto aiccyaswigkaycqk;
        yqagomygmeoecwey:
        ob_start();
        goto qikaewekoecykeou;
        aiccyaswigkaycqk:
    }
    public function qiekckyaeisgcmok()
    {
        goto zayqqeqgcwkekwws;
        zayqqeqgcwkekwws:
        if (!$this->sooksiiooeywkyaq()) {
            goto oqousikwiiqagoyw;
        }
        goto aueaceeyommgkicu;
        yuuyikiacmmueosu:
        sqyokemumceysegy:
        goto sguskaeaaqcagqgc;
        syuaummumssgwwee:
        oqousikwiiqagoyw:
        goto oocuemosmeeekgas;
        sguskaeaaqcagqgc:
        
        $this->cecaguuoecmccuse("\x73\x63\162\x65\x65\156\x5f\x6f\160\x74\x69\157\x6e\x73\x5f\163\150\x6f\x77\137\163\x75\x62\x6d\151\x74", "\x5f\x5f\162\145\x74\x75\162\156\137\x74\162\x75\145");
        goto agkmiayuawacakau;
        agkmiayuawacakau:
        echo $this->iuygowkemiiwqmiw("\157\x70\x74\151\x6f\x6e\163", ["\160\x65\x72\x5f\160\x61\x67\145" => $this->sscegwueamckwmcy($omkysikckkcieckq, $weyoqgcesqgeusiu), "\154\141\x62\145\154" => __("\116\x75\155\142\145\162\x20\x6f\x66\x20\151\x74\145\x6d\x73\40\x70\145\162\40\160\x61\147\x65\72", PR__CMN__FOUNDATION)]);
        goto syuaummumssgwwee;
        mysueeoswqgccmui:
        $weyoqgcesqgeusiu = (int) DecoratorUser::giiuwsmyumqwwiyq($omkysikckkcieckq);
        goto egmayaiikwsskgmy;
        egmayaiikwsskgmy:
        if (!($weyoqgcesqgeusiu < 1)) {
            goto sqyokemumceysegy;
        }
        goto ucuoeymyqeokgsya;
        ucuoeymyqeokgsya:
        $weyoqgcesqgeusiu = $this->sooksiiooeywkyaq();
        goto yuuyikiacmmueosu;
        aueaceeyommgkicu:
        $omkysikckkcieckq = str_replace("\x2d", "\137", "\145\x64\x69\x74\137{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\160\145\x72\x5f\x70\x61\x67\145");
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
        oyiuyywyeoskckuw:
        qkcsykuocwuyaice:
        goto goqmywuiicciasyk;
        siecswkggyikqkga:
        ussceseaimqywuiy:
        goto qkuiwoqksgayqqmg;
        goqmywuiicciasyk:
        ManipulateHTML::awwqwouuoioauoaw("\x66\x69\145\154\x64\163\145\x74", ["\143\x6c\141\x73\163" => "\x6d\145\164\x61\142\x6f\170\55\x70\x72\145\x66\163"], true, [ManipulateHTML::uuccukgasskgimsq("\154\145\x67\145\156\x64", [], $muquwygwyggueyeq), $ikgwqyuyckaewsow]);
        goto siecswkggyikqkga;
        uycesqqkoeamocgm:
        $muquwygwyggueyeq = ManipulateArray::get($wkkweuacukumqmya, "\x5f\x74\151\164\154\x65", __("\103\157\154\165\x6d\156\x73", PR__CMN__FOUNDATION));
        goto ceiwqkyquikcemmo;
        oyiuemaaykgkqqam:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto gqmewagyagamokok;
        gqmewagyagamokok:
        $qqkyekmackggcick = get_hidden_columns($this->mgogaykgkoogasim()->miwqiiqeegeqcwis());
        goto sqmoqymckwsogsqg;
        wkgskiuiukiuyque:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto qiaimmucomukkeka;
            osuscoaaomwcqkew:
            $ikgwqyuyckaewsow .= ManipulateHTML::uuccukgasskgimsq("\154\x61\x62\x65\x6c", [], [ManipulateHTML::qgsekwygcgawekeq("\151\156\x70\x75\164", ["\x69\144" => $aokagokqyuysuksm, "\x6e\x61\x6d\x65" => $aokagokqyuysuksm, "\x63\x6c\141\163\x73" => "\x68\151\144\145\x2d\x63\x6f\x6c\x75\155\x6e\55\x74\157\x67", "\x74\x79\x70\x65" => "\143\150\145\143\153\x62\x6f\170", "\x76\x61\154\165\145" => $qgoqiacsiccwoawi, checked(!in_array($qgoqiacsiccwoawi, $qqkyekmackggcick), true, false)]), $meqocwsecsywiiqs]);
            goto ciucewqgyoiouesq;
            cgmgqucewwssmicq:
            uoeasoimegouymka:
            goto mkomygccqkmkumsi;
            qiaimmucomukkeka:
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto egsycocugqyyswsi;
            }
            goto aoquoewagkseayug;
            ciucewqgyoiouesq:
            egsycocugqyyswsi:
            goto cgmgqucewwssmicq;
            aoquoewagkseayug:
            $aokagokqyuysuksm = "{$qgoqiacsiccwoawi}\55\x68\151\144\145";
            goto osuscoaaomwcqkew;
            mkomygccqkmkumsi:
        }
        goto oyiuyywyeoskckuw;
        ukomuiwukymcoaso:
        $yemgmmgogcwccuky = ["\137\164\151\164\x6c\145", "\x63\142"];
        goto wkgskiuiukiuyque;
        ceiwqkyquikcemmo:
        $ikgwqyuyckaewsow = '';
        goto ukomuiwukymcoaso;
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
        mqiiqkuaoekeuswo:
        $oowiawssoycsoiku = [str_replace("\55", "\137", "\145\x64\151\164\x5f{$this->mgogaykgkoogasim()->miwqiiqeegeqcwis()}\137\160\145\162\x5f\x70\x61\147\x65")];
        goto qmoocweoekqueuyy;
        qmoocweoekqueuyy:
        
        $wkkweuacukumqmya = $this->waeasakssissiuqg()->get_columns();
        goto sgiwoiscywusgmmm;
        mmgmqogugasaqkgg:
        
        if (!in_array($omkysikckkcieckq, $oowiawssoycsoiku)) {
            goto ecouwqosmoyyqmkw;
        }
        goto wmumywgyyeagqoeq;
        sgiwoiscywusgmmm:
        $yemgmmgogcwccuky = ["\137\x74\x69\164\154\145", "\x63\x62"];
        goto skuqigsokaguscas;
        wmumywgyyeagqoeq:
        $wsayskqwkoauuyks = $eqgoocgaqwqcimie;
        goto smcguieygyqcaqgs;
        mgcuiguaomoqwwwm:
        return $wsayskqwkoauuyks;
        goto eoyiumycaigawmmc;
        quyogmwugsyoaaiu:
        easqmyamcmeesgya:
        goto mmgmqogugasaqkgg;
        skuqigsokaguscas:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi => $meqocwsecsywiiqs) {
            goto smiemmcqqukyguuu;
            iksewmsaugayqaqq:
            $oowiawssoycsoiku[] = "{$qgoqiacsiccwoawi}\x2d\150\x69\x64\x65";
            goto yamyagayiooyeekg;
            yamyagayiooyeekg:
            quaqmuusokiyqgqe:
            goto yoagcooekomeokwg;
            yoagcooekomeokwg:
            yuqgwwmqwqiuwmaw:
            goto eckcqesiokgwkkiw;
            smiemmcqqukyguuu:
            
            if (!(!in_array($qgoqiacsiccwoawi, $yemgmmgogcwccuky) && $meqocwsecsywiiqs)) {
                goto quaqmuusokiyqgqe;
            }
            goto iksewmsaugayqaqq;
            eckcqesiokgwkkiw:
        }
        goto quyogmwugsyoaaiu;
        smcguieygyqcaqgs:
        ecouwqosmoyyqmkw:
        goto mgcuiguaomoqwwwm;
        eoyiumycaigawmmc:
    }
}
