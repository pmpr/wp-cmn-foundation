<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Detector;


class Browser extends Common
{
    
    protected ?string $os = '';
    
    protected ?string $name = '';
    
    protected ?string $agent = '';
    
    protected bool $isAol = false;
    
    protected bool $isRobot = false;
    
    protected ?string $version = '';
    
    protected bool $isMobile = false;
    
    protected bool $isTablet = false;
    
    protected ?string $platform = '';
    
    protected bool $isFacebook = false;
    
    protected ?string $aolVersion = '';
    const BROWSER_UNKNOWN = "\165\156\153\x6e\x6f\167\x6e";
    const VERSION_UNKNOWN = "\x75\x6e\x6b\156\x6f\x77\156";
    const BROWSER_OPERA = "\x4f\x70\x65\x72\141";
    
    const BROWSER_OPERA_MINI = "\x4f\x70\145\x72\141\40\115\151\156\151";
    
    const BROWSER_WEBTV = "\127\x65\x62\124\126";
    
    const BROWSER_EDGE = "\x45\x64\147\145";
    
    const BROWSER_IE = "\x49\156\x74\x65\162\x6e\145\164\x20\x45\170\x70\154\157\x72\145\x72";
    
    const BROWSER_POCKET_IE = "\x50\157\143\153\145\x74\x20\x49\x6e\x74\145\x72\156\145\x74\40\x45\x78\160\x6c\157\162\x65\x72";
    
    const BROWSER_KONQUEROR = "\113\x6f\156\161\165\145\162\x6f\x72";
    
    const BROWSER_ICAB = "\x69\x43\141\x62";
    
    const BROWSER_OMNIWEB = "\x4f\x6d\x6e\151\127\145\x62";
    
    const BROWSER_FIREBIRD = "\106\151\162\x65\142\151\162\x64";
    
    const BROWSER_FIREFOX = "\x46\x69\162\x65\x66\x6f\170";
    
    const BROWSER_BRAVE = "\x42\x72\141\166\x65";
    
    const BROWSER_PALEMOON = "\x50\x61\x6c\x65\x6d\157\x6f\156";
    
    const BROWSER_ICEWEASEL = "\x49\143\145\167\145\x61\x73\x65\154";
    
    const BROWSER_SHIRETOKO = "\123\x68\x69\x72\x65\164\157\x6b\x6f";
    
    const BROWSER_MOZILLA = "\115\157\172\x69\154\154\141";
    
    const BROWSER_AMAYA = "\101\x6d\141\x79\141";
    
    const BROWSER_LYNX = "\114\171\x6e\170";
    
    const BROWSER_SAFARI = "\x53\x61\146\141\x72\x69";
    
    const BROWSER_IPHONE = "\151\120\150\x6f\x6e\145";
    
    const BROWSER_IPOD = "\151\x50\157\144";
    
    const BROWSER_IPAD = "\151\x50\141\144";
    
    const BROWSER_CHROME = "\103\150\162\157\155\145";
    
    const BROWSER_ANDROID = "\101\156\144\162\157\151\144";
    
    const BROWSER_GOOGLEBOT = "\x47\x6f\157\x67\154\x65\x42\157\164";
    
    const BROWSER_CURL = "\143\x55\122\x4c";
    
    const BROWSER_WGET = "\127\x67\x65\x74";
    
    const BROWSER_UCBROWSER = "\x55\103\102\162\x6f\x77\163\x65\162";
    
    const BROWSER_YANDEXBOT = "\131\x61\x6e\144\x65\170\102\157\x74";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\x59\141\x6e\x64\x65\170\111\155\141\x67\x65\122\145\163\x69\x7a\145\x72";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\141\156\144\145\170\111\155\141\147\145\x73";
    
    const BROWSER_YANDEXVIDEO_BOT = "\x59\141\156\x64\145\170\x56\151\x64\x65\157";
    
    const BROWSER_YANDEXMEDIA_BOT = "\131\141\156\144\x65\x78\115\x65\144\x69\141";
    
    const BROWSER_YANDEXBLOGS_BOT = "\131\x61\156\144\x65\x78\102\x6c\157\147\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\131\141\156\144\x65\170\x46\x61\x76\x69\143\157\156\x73";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\x59\x61\x6e\144\x65\170\x57\x65\x62\x6d\x61\x73\164\x65\x72";
    
    const BROWSER_YANDEXDIRECT_BOT = "\x59\141\156\x64\145\x78\104\x69\162\x65\143\x74";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\x59\141\156\144\x65\x78\x4d\x65\x74\162\151\x6b\x61";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\141\x6e\144\x65\x78\x4e\145\x77\x73";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\x61\x6e\x64\x65\170\x43\141\x74\141\x6c\x6f\147";
    
    const BROWSER_SLURP = "\131\x61\x68\157\x6f\x21\40\123\x6c\x75\162\160";
    
    const BROWSER_W3CVALIDATOR = "\127\63\x43\x20\126\x61\x6c\151\x64\x61\164\157\162";
    
    const BROWSER_BLACKBERRY = "\102\154\x61\x63\x6b\x42\145\x72\162\171";
    
    const BROWSER_ICECAT = "\x49\143\145\x43\141\164";
    
    const BROWSER_NOKIA_S60 = "\116\x6f\153\x69\141\x20\x53\x36\x30\x20\x4f\123\123\40\102\x72\x6f\167\163\145\162";
    
    const BROWSER_NOKIA = "\116\157\153\151\x61\x20\x42\x72\x6f\167\x73\145\162";
    
    const BROWSER_MSN = "\115\123\x4e\x20\x42\162\x6f\167\163\145\162";
    
    const BROWSER_MSNBOT = "\x4d\123\116\40\x42\157\164";
    
    const BROWSER_BINGBOT = "\x42\151\156\147\40\x42\x6f\x74";
    
    const BROWSER_VIVALDI = "\126\151\x76\141\x6c\144\x69";
    
    const BROWSER_YANDEX = "\x59\141\x6e\x64\145\170";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\x65\x74\163\x63\x61\160\x65\x20\116\141\x76\x69\147\x61\x74\157\x72";
    
    const BROWSER_GALEON = "\x47\x61\154\145\157\x6e";
    
    const BROWSER_NETPOSITIVE = "\116\x65\x74\120\157\163\x69\x74\x69\166\x65";
    
    const BROWSER_PHOENIX = "\120\150\157\x65\156\x69\170";
    
    const BROWSER_PLAYSTATION = "\x50\154\x61\x79\x53\164\141\x74\151\x6f\x6e";
    const BROWSER_SAMSUNG = "\123\x61\x6d\x73\165\156\x67\x42\x72\x6f\x77\x73\145\162";
    const BROWSER_SILK = "\123\151\154\x6b";
    const BROWSER_I_FRAME = "\111\146\162\x61\155\145\x6c\x79";
    const BROWSER_COCOA = "\x43\157\143\x6f\x61\x52\145\x73\164\103\154\151\x65\156\x74";
    const PLATFORM_UNKNOWN = "\165\x6e\x6b\156\157\x77\x6e";
    const PLATFORM_WINDOWS = "\127\151\156\x64\157\167\163";
    const PLATFORM_WINDOWS_CE = "\127\151\156\x64\157\x77\163\40\103\x45";
    const PLATFORM_APPLE = "\101\160\x70\154\x65";
    const PLATFORM_LINUX = "\114\x69\x6e\x75\x78";
    const PLATFORM_OS2 = "\x4f\x53\57\x32";
    const PLATFORM_BEOS = "\x42\145\117\x53";
    const PLATFORM_IPHONE = "\151\120\150\x6f\156\145";
    const PLATFORM_IPOD = "\x69\x50\x6f\144";
    const PLATFORM_IPAD = "\x69\x50\x61\x64";
    const PLATFORM_BLACKBERRY = "\102\154\141\143\153\102\145\162\x72\171";
    const PLATFORM_NOKIA = "\116\x6f\153\151\x61";
    const PLATFORM_FREEBSD = "\106\x72\145\145\102\x53\x44";
    const PLATFORM_OPENBSD = "\117\x70\x65\x6e\102\x53\x44";
    const PLATFORM_NETBSD = "\116\x65\164\102\x53\104";
    const PLATFORM_SUNOS = "\123\165\x6e\x4f\x53";
    const PLATFORM_OPENSOLARIS = "\x4f\x70\x65\x6e\123\x6f\x6c\141\x72\151\163";
    const PLATFORM_ANDROID = "\101\x6e\144\x72\157\151\x64";
    const PLATFORM_PLAYSTATION = "\123\157\156\171\40\x50\x6c\x61\171\x53\164\141\164\151\157\156";
    const PLATFORM_ROKU = "\x52\157\x6b\x75";
    const PLATFORM_APPLE_TV = "\101\x70\160\x6c\x65\x20\124\126";
    const PLATFORM_TERMINAL = "\x54\145\x72\x6d\x69\x6e\x61\154";
    const PLATFORM_FIRE_OS = "\x46\151\162\x65\x20\x4f\x53";
    const PLATFORM_SMART_TV = "\123\x4d\x41\x52\124\55\x54\x56";
    const PLATFORM_CHROME_OS = "\103\150\162\x6f\155\x65\x20\117\x53";
    const PLATFORM_JAVA_ANDROID = "\x4a\141\166\x61\57\101\x6e\x64\162\157\x69\x64";
    const PLATFORM_POSTMAN = "\x50\157\163\164\155\x61\156";
    const PLATFORM_I_FRAME = "\x49\x66\162\141\x6d\x65\154\171";
    const OPERATING_SYSTEM_UNKNOWN = "\x75\156\153\x6e\x6f\167\156";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto soqqgkywqwwiuymo;
        mickaocycsqkssoi:
        if ($uowwycywwssskuys != '') {
            goto ecsieaukkkskmiye;
        }
        goto eeegygkcwmqmqyes;
        usukksgaqiqwqeys:
        parent::__construct();
        goto cmkiwqcgsmwyuggk;
        uwowyggggqcqiuao:
        ecsieaukkkskmiye:
        goto oagaqukqswwgeqsa;
        cgewwoksiyocyiga:
        $this->qeqwswckeiieossq();
        goto qocgiimiggeksoky;
        oagaqukqswwgeqsa:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto ewuugiguuowassgm;
        eeegygkcwmqmqyes:
        $this->reset();
        goto cgewwoksiyocyiga;
        ewuugiguuowassgm:
        iqoqyuokokywiqsg:
        goto usukksgaqiqwqeys;
        soqqgkywqwwiuymo:
        $this->runSetup = false;
        goto mickaocycsqkssoi;
        qocgiimiggeksoky:
        goto iqoqyuokokywiqsg;
        goto uwowyggggqcqiuao;
        cmkiwqcgsmwyuggk:
    }
    
    public function reset()
    {
        goto eqwkmqasacseyecw;
        ygyacaeuykeookuw:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto ggaemwcyouewkgcm;
        wywgewmwqwqsysig:
        $this->name = self::BROWSER_UNKNOWN;
        goto ggkyameswcsquisg;
        uioqqaiayukmemcg:
        $this->isTablet = false;
        goto seimmqskqimoouui;
        ykqeemyaewkmowyu:
        $this->version = self::VERSION_UNKNOWN;
        goto comoigwsemiiwoks;
        ceycsuymgwmceuew:
        $this->isFacebook = false;
        goto ygyacaeuykeookuw;
        ggkyameswcsquisg:
        $this->agent = isset($_SERVER["\x48\x54\124\120\x5f\x55\x53\105\122\x5f\101\107\105\116\124"]) ? $_SERVER["\x48\x54\x54\120\137\125\123\105\122\137\x41\107\x45\116\x54"] : '';
        goto mwwimgssiegweqes;
        uqwoeksekoweiwke:
        $this->isRobot = false;
        goto ykqeemyaewkmowyu;
        seimmqskqimoouui:
        $this->isMobile = false;
        goto ceycsuymgwmceuew;
        comoigwsemiiwoks:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto uioqqaiayukmemcg;
        mwwimgssiegweqes:
        $this->isAol = false;
        goto uqwoeksekoweiwke;
        eqwkmqasacseyecw:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto wywgewmwqwqsysig;
        ggaemwcyouewkgcm:
    }
    
    function uuiwksyaomacmeqm(?string $qwgmkicgcaksayya)
    {
        return 0 == strcasecmp($this->name, trim($qwgmkicgcaksayya));
    }
    
    public function aagmmewiwysmgseq()
    {
        return $this->name;
    }
    
    public function ikciowomiysyewgc(?string $quckouuiqiiowoei)
    {
        $this->name = $quckouuiqiiowoei;
    }
    
    public function kqeiosksqeuksyqu()
    {
        return $this->platform;
    }
    
    public function skgoeccmwgyoiusu(?string $cqoiisuwooysmeyi)
    {
        $this->platform = $cqoiisuwooysmeyi;
    }
    
    public function gikwwgqmwccescgy()
    {
        return $this->version;
    }
    
    public function aasasueowyemuyoc(?string $kqagasmwymmuiksq)
    {
        $this->version = preg_replace("\57\x5b\x5e\60\55\x39\54\x2e\54\141\55\x7a\x2c\x41\x2d\132\55\135\x2f", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\57\x5b\x5e\60\55\71\54\x2e\54\x61\x2d\172\54\x41\x2d\132\x5d\57", '', $kqagasmwymmuiksq);
    }
    
    public function ekkycoyiksmuegcg()
    {
        return $this->isAol;
    }
    
    public function qawecuimqqcqwgsw()
    {
        return $this->isMobile;
    }
    
    public function gsuucswsiuggysyw()
    {
        return $this->isTablet;
    }
    
    public function iquiuqgoysikecce()
    {
        return $this->isRobot;
    }
    
    public function jwuckkwosioqkeeg()
    {
        return $this->isFacebook;
    }
    
    public function igmimcweskyugiqm($ekkycoyiksmuegcg)
    {
        $this->isAol = $ekkycoyiksmuegcg;
    }
    
    protected function eywockmuswoykooc($eqgoocgaqwqcimie = true)
    {
        $this->isMobile = $eqgoocgaqwqcimie;
    }
    
    protected function icigyueiiwsukmsu($eqgoocgaqwqcimie = true)
    {
        $this->isTablet = $eqgoocgaqwqcimie;
    }
    
    protected function aasmeayouwmacaow($eqgoocgaqwqcimie = true)
    {
        $this->isRobot = $eqgoocgaqwqcimie;
    }
    
    protected function oqgqmcogeugkakss($eqgoocgaqwqcimie = true)
    {
        $this->isFacebook = $eqgoocgaqwqcimie;
    }
    
    public function ckaoiscoyuuosace()
    {
        return $this->agent;
    }
    
    public function iaoqckywsogqyiio($agent_string)
    {
        goto cicagciwwymgewcm;
        ycuossoamymsusws:
        $this->qeqwswckeiieossq();
        goto egsqiegeesaowyyo;
        cicagciwwymgewcm:
        $this->reset();
        goto omkuusmocycoywqq;
        omkuusmocycoywqq:
        $this->agent = $agent_string;
        goto ycuossoamymsusws;
        egsqiegeesaowyyo:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\x63\150\x72\x6f\x6d\x65\x66\162\x61\x6d\145") !== false;
    }
    
    public function __toString()
    {
        return "\74\x73\164\162\157\156\147\76\102\162\x6f\x77\x73\x65\162\40\116\141\x6d\145\x3a\74\57\x73\164\162\157\156\147\x3e\x20{$this->aagmmewiwysmgseq()}\74\142\x72\57\x3e\xa" . "\x3c\163\x74\x72\157\156\x67\x3e\x42\x72\157\167\x73\145\162\x20\x56\x65\x72\x73\x69\157\156\72\74\57\x73\x74\162\157\156\147\76\x20{$this->gikwwgqmwccescgy()}\74\142\x72\57\x3e\12" . "\74\163\x74\162\x6f\x6e\x67\76\102\x72\x6f\x77\163\x65\162\x20\125\163\x65\162\x20\x41\147\145\156\164\40\123\x74\x72\151\156\147\72\x3c\x2f\163\164\x72\x6f\x6e\147\76\40{$this->ckaoiscoyuuosace()}\74\142\x72\x2f\x3e\xa" . "\x3c\163\164\x72\x6f\156\x67\x3e\120\154\x61\x74\x66\x6f\162\x6d\x3a\x3c\57\x73\x74\x72\157\156\x67\76\x20{$this->kqeiosksqeuksyqu()}\74\142\x72\57\76";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto oouoqmemwouuymam;
        oouoqmemwouuymam:
        $this->acmmsiuwaekasogs();
        goto kmokgyokoacsqkcg;
        kmokgyokoacsqkcg:
        $this->iggocwysumewuquw();
        goto mkummeawiecmouws;
        mkummeawiecmouws:
        $this->caqkscqcyqeciamc();
        goto segicigoioeuyass;
        segicigoioeuyass:
    }
    
    protected function iggocwysumewuquw()
    {
        return $this->maowoygwywiawwyc() || $this->gggwayigqkokeigi() || $this->sukgiyywqmoigmom() || $this->makyeuicweuowumi() || $this->cgequousmqakcios() || $this->eqqcucwcgwqiogik() || $this->usswyskeuiskccki() || $this->aweyeayscomouegw() || $this->mgaiuyuciiueqyge() || $this->syeogeymkuiqsoec() || $this->eqkuicmgoaougagi() || $this->qsseiqmmssqiuomm() || $this->oomiyiuwesyuegws() || $this->uockauwugkqgqkce() || $this->oomuqgqyykuccewm() || $this->ciawmegkaaacmoew() || $this->cysskoyaouegkmky() || $this->iaacgcgmmegamkiu() || $this->uumayumieageyiuy() || $this->qcqikaemyysumcsu() || $this->siwcougwagmcauoi() || $this->aeywoaukuwaeegku() || $this->qaigygakimuucuki() || $this->cimegwusqouswgao() || $this->oumugceeiaceqieo() || $this->wmcqkeiuewqameek() || $this->eccwcswcuggacgua() || $this->mwoogugykmiymmgy() || $this->qceuceikgwagccsq() || $this->uuyiswoewekeauaw() || $this->sqawuqckmasomwiq() || $this->aaseiwemciwamqqm() || $this->ksumscewmeyaocyy() || $this->qsemkkquagiaoioc() || $this->bgkmykkkkksumwea() || $this->ugaiaiamygwcwemg() || $this->ksikmmeqsuycsqck() || $this->yswggmyigakcackc() || $this->uiwkymoksesuumwe() || $this->qcswwmqaioswesoq() || $this->momgeesgauwmqaks() || $this->gewsuekegcksgkai() || $this->ecocgoqgymuacegg() || $this->wacucmcykeakeeou() || $this->qaweacwkwmmuqqam() || $this->usemqkymaguiocgy() || $this->mqsiuucsqqyuwcuw() || $this->mmyqoqguasigekck() || $this->noeygigqkeciickm() || $this->akwueocamkykcwyy() || $this->ykyiqmysgemoaakw() || $this->qiqsouwkwmwmqeem() || $this->wiqieuoqysguameu() || $this->gqwuksqaksqcemam() || $this->cgqcukygysieeqko() || $this->ccaaioyauuuuyikg() || $this->aowooqokikgeegkm();
    }
    
    protected function uumayumieageyiuy()
    {
        goto syumssoiimkseoum;
        ikwcwqmomksisice:
        $this->eywockmuswoykooc(true);
        goto ssayikwmgomomkkq;
        syumssoiimkseoum:
        if (!(stripos($this->agent, "\x62\x6c\141\143\153\x62\145\x72\162\171") !== false)) {
            goto yyacgikiikmoesek;
        }
        goto kmcewougmoaciyky;
        wwskqqaskwicmaay:
        yyacgikiikmoesek:
        goto koiysaseasuyieym;
        aykkageemggigccw:
        $this->name = self::BROWSER_BLACKBERRY;
        goto ikwcwqmomksisice;
        kmcewougmoaciyky:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\102\x6c\141\x63\x6b\102\145\x72\162\171"));
        goto iiswiwucogikyuse;
        aqysowuwkoqgsoku:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto muwsmoccecigsoqc;
        iiswiwucogikyuse:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uqqiokcseqswsgia;
        }
        goto aqysowuwkoqgsoku;
        ssayikwmgomomkkq:
        return true;
        goto cemqmygogskcoygo;
        koiysaseasuyieym:
        return false;
        goto emiksyiouuqsigmq;
        cemqmygogskcoygo:
        uqqiokcseqswsgia:
        goto wwskqqaskwicmaay;
        muwsmoccecigsoqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto aykkageemggigccw;
        emiksyiouuqsigmq:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto eykuqgakcouscsks;
        kgskcgusosyauysg:
        sqimcsougcukocky:
        goto wagiyaqsgwiqyaie;
        wyeguiaumcoesuiy:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\101\117\114"));
        goto auomkekgcqwsmgqu;
        auomkekgcqwsmgqu:
        if (!isset($quiguswioiaaywey[1])) {
            goto awasoqakauqikkya;
        }
        goto yymkyucwwqwymsse;
        wagiyaqsgwiqyaie:
        return false;
        goto kicewoesgqwaasem;
        eicmoywsowuqoaou:
        return true;
        goto wokayyqugqaoewiy;
        ggiqousqgowseosg:
        if (!(stripos($this->agent, "\x61\157\x6c") !== false)) {
            goto sqimcsougcukocky;
        }
        goto wyeguiaumcoesuiy;
        mscskuyuseuoqaqm:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\x5b\x5e\60\55\71\x5c\56\141\x2d\172\135\57\x69", '', $quiguswioiaaywey[1]));
        goto eicmoywsowuqoaou;
        yymkyucwwqwymsse:
        $this->igmimcweskyugiqm(true);
        goto mscskuyuseuoqaqm;
        wokayyqugqaoewiy:
        awasoqakauqikkya:
        goto kgskcgusosyauysg;
        yeequkyciegceoeo:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto ggiqousqgowseosg;
        eykuqgakcouscsks:
        $this->igmimcweskyugiqm(false);
        goto yeequkyciegceoeo;
        kicewoesgqwaasem:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto uwiyeosqocyekygy;
        iuumaowkqqsoicgy:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto awwiackkekswgamo;
        cwygwqacakmoesuw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cgiakccyuqqwmomc;
        skqkiegmwieyweww:
        return false;
        goto ousiwuqmksykqcec;
        eyyiqqumygsogaoq:
        kcakqaaesggwiooc:
        goto iskggyooogqgowys;
        iskggyooogqgowys:
        cwykioaoamgqueey:
        goto skqkiegmwieyweww;
        qwimoyomwmmwkucy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x67\x6f\x6f\147\x6c\x65\x62\157\x74"));
        goto ackciywssqaumgac;
        awwiackkekswgamo:
        $this->aasmeayouwmacaow(true);
        goto qaiaymokiyasqmic;
        uwiyeosqocyekygy:
        if (!(stripos($this->agent, "\147\x6f\x6f\x67\154\x65\142\x6f\164") !== false)) {
            goto cwykioaoamgqueey;
        }
        goto qwimoyomwmmwkucy;
        qaiaymokiyasqmic:
        return true;
        goto eyyiqqumygsogaoq;
        ackciywssqaumgac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kcakqaaesggwiooc;
        }
        goto cwygwqacakmoesuw;
        cgiakccyuqqwmomc:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto iuumaowkqqsoicgy;
        ousiwuqmksykqcec:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto yagmcusocgoqkewa;
        caegiamkkykaqmqu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wykyuuuooigicwgs;
        soeiamgkkekwcoss:
        return false;
        goto gugywasieysgmmyw;
        yugqeemimuuqeucm:
        return true;
        goto kuemgcgokyyggkoi;
        skomukgmucsuaggq:
        $this->name = self::BROWSER_YANDEXBOT;
        goto essswiygiqegaayw;
        kuemgcgokyyggkoi:
        kiqcuyecmyaegims:
        goto eseawwcgusiywyge;
        eseawwcgusiywyge:
        comcaymsaykamcgi:
        goto soeiamgkkekwcoss;
        yagmcusocgoqkewa:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\x42\157\164") !== false)) {
            goto comcaymsaykamcgi;
        }
        goto wesewyeqgccwmaos;
        aoeeywugooqmewcc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kiqcuyecmyaegims;
        }
        goto caegiamkkykaqmqu;
        wesewyeqgccwmaos:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\x64\x65\x78\102\x6f\164"));
        goto aoeeywugooqmewcc;
        essswiygiqegaayw:
        $this->aasmeayouwmacaow(true);
        goto yugqeemimuuqeucm;
        wykyuuuooigicwgs:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto skomukgmucsuaggq;
        gugywasieysgmmyw:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto suugmuecwqaakaoc;
        kiaawmeeisegyugk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wysmsmaeqiucoycu;
        suugmuecwqaakaoc:
        if (!(stripos($this->agent, "\x59\x61\156\144\145\x78\x49\x6d\x61\x67\x65\x52\145\x73\151\x7a\x65\162") !== false)) {
            goto qimcgqssayewaygw;
        }
        goto uewgegcascsimmaq;
        aekaikwiqmuwwqia:
        return false;
        goto ikmicisyykkwmeso;
        sqqqyyimyskaygea:
        $this->aasmeayouwmacaow(true);
        goto gwokcyciswoaygie;
        gwokcyciswoaygie:
        return true;
        goto squqowgmqgocyqmi;
        gcgwykikiomgmgqa:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uaamscmwcmumgasy;
        }
        goto kiaawmeeisegyugk;
        akeoiekwqqqgqamo:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto sqqqyyimyskaygea;
        qysommommieagsuw:
        qimcgqssayewaygw:
        goto aekaikwiqmuwwqia;
        squqowgmqgocyqmi:
        uaamscmwcmumgasy:
        goto qysommommieagsuw;
        wysmsmaeqiucoycu:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto akeoiekwqqqgqamo;
        uewgegcascsimmaq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\145\170\x49\155\x61\147\145\122\145\x73\x69\x7a\145\x72"));
        goto gcgwykikiomgmgqa;
        ikmicisyykkwmeso:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto mkcsckwgisqasmao;
        ceugiycaewioseoe:
        cyqyggywyykwqyak:
        goto ieycgksaoqioisky;
        lhsckqwkqqauiqwy:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto eosuykwimywegmse;
        mkcsckwgisqasmao:
        if (!(stripos($this->agent, "\131\141\x6e\144\145\170\x43\141\164\x61\154\157\147") !== false)) {
            goto osumgoskasckcieg;
        }
        goto woikwmiiusqmoygy;
        eosuykwimywegmse:
        $this->aasmeayouwmacaow(true);
        goto swuywmmasggeiqou;
        qigcoauseeigksyc:
        return false;
        goto yakmisgikescmgoo;
        uwemyeqsgcieyymm:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto lhsckqwkqqauiqwy;
        swuywmmasggeiqou:
        return true;
        goto ceugiycaewioseoe;
        ieycgksaoqioisky:
        osumgoskasckcieg:
        goto qigcoauseeigksyc;
        woikwmiiusqmoygy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\x65\x78\103\x61\164\141\154\x6f\x67"));
        goto imsysaygciegsqok;
        mygsucymimsqmqky:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto uwemyeqsgcieyymm;
        imsysaygciegsqok:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cyqyggywyykwqyak;
        }
        goto mygsucymimsqmqky;
        yakmisgikescmgoo:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto muyymwciiieqymqw;
        kccciwsgesamyyau:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto oameuaooiigaiucg;
        iycocuaeccqgyoia:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ycyyicuqwqcyqeig;
        osuskyuuggamicou:
        gwqqoewaikqqueoe:
        goto uaaiysoikgsuscqw;
        ycyyicuqwqcyqeig:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kccciwsgesamyyau;
        uaaiysoikgsuscqw:
        return false;
        goto naiguckqsyeaesek;
        imkwmsokcecosyse:
        aacosyksiacoaeig:
        goto osuskyuuggamicou;
        muyymwciiieqymqw:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\x4e\x65\167\163") !== false)) {
            goto gwqqoewaikqqueoe;
        }
        goto dqcamiqqkwiowaag;
        omccwaywmcmqksmq:
        return true;
        goto imkwmsokcecosyse;
        dqcamiqqkwiowaag:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\x64\x65\x78\x4e\x65\167\163"));
        goto sigosycgcicoiuuc;
        oameuaooiigaiucg:
        $this->aasmeayouwmacaow(true);
        goto omccwaywmcmqksmq;
        sigosycgcicoiuuc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aacosyksiacoaeig;
        }
        goto iycocuaeccqgyoia;
        naiguckqsyeaesek:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto suagmomycmooyggu;
        umsckeuyiggsewac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eqqaouecoaseisgq;
        }
        goto skqmieiumikceamg;
        eyogsqkuigcksouq:
        return true;
        goto gwkeoekmeeqmmwgy;
        kmayccieqkkiqicw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\x64\145\170\115\145\x74\x72\x69\x6b\141"));
        goto umsckeuyiggsewac;
        ukeksoegcoqokeik:
        return false;
        goto iigucumgucicccac;
        gwkeoekmeeqmmwgy:
        eqqaouecoaseisgq:
        goto aikqumiqkkqaqgee;
        aikqumiqkkqaqgee:
        kqmkicwuyqakoika:
        goto ukeksoegcoqokeik;
        iymeugimwgcywusq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto eiswwscyoaqoggge;
        eiswwscyoaqoggge:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto qaqmwuwwqycmqkyg;
        suagmomycmooyggu:
        if (!(stripos($this->agent, "\131\x61\x6e\x64\145\170\x4d\x65\164\162\151\x6b\x61") !== false)) {
            goto kqmkicwuyqakoika;
        }
        goto kmayccieqkkiqicw;
        qaqmwuwwqycmqkyg:
        $this->aasmeayouwmacaow(true);
        goto eyogsqkuigcksouq;
        skqmieiumikceamg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iymeugimwgcywusq;
        iigucumgucicccac:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto amcsamiamksyqmuq;
        wsqgykwqkgiwaksw:
        swusyoymaokumies:
        goto qcwaessgikigogay;
        egemeuggwgwuayoi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qqusymyoygwwueco;
        amcsamiamksyqmuq:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\x78\104\x69\162\x65\143\x74") !== false)) {
            goto xwymaakqyeoqaams;
        }
        goto cmasgwmooaiccewo;
        qqusymyoygwwueco:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto iuoiiwaosgqoeask;
        cyckkcksiwwqasio:
        if (!isset($yikciqwsimweauyg[1])) {
            goto swusyoymaokumies;
        }
        goto egemeuggwgwuayoi;
        uegccyuaemgmocgu:
        return false;
        goto iouecsmwqgaiycoq;
        giuuqwcsockoiqem:
        $this->aasmeayouwmacaow(true);
        goto smqoegcueykkkiiq;
        iuoiiwaosgqoeask:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto giuuqwcsockoiqem;
        qcwaessgikigogay:
        xwymaakqyeoqaams:
        goto uegccyuaemgmocgu;
        smqoegcueykkkiiq:
        return true;
        goto wsqgykwqkgiwaksw;
        cmasgwmooaiccewo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\x65\170\x44\151\162\145\143\164"));
        goto cyckkcksiwwqasio;
        iouecsmwqgaiycoq:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto yeywuuiugmgeuygm;
        cumwowkcomuigeag:
        geqcuwsuqymcqiou:
        goto qomyesuacseysugi;
        qomyesuacseysugi:
        return false;
        goto wsiqkesiecagcykw;
        ywiyqcgyoweomkqg:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\x64\x65\x78\127\x65\x62\155\x61\163\164\145\x72"));
        goto gmgemamkswqeskmo;
        gswsuaquqikkycwi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eemgwkicuicwskms;
        kyemcamscwoeeoiy:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto ggawqqciikeiqiau;
        eemgwkicuicwskms:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kyemcamscwoeeoiy;
        ggawqqciikeiqiau:
        $this->aasmeayouwmacaow(true);
        goto mucqymyysqeiaqwk;
        mucqymyysqeiaqwk:
        return true;
        goto eeqgkcgywkwgmiyg;
        yeywuuiugmgeuygm:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\145\x78\127\145\x62\155\x61\163\x74\145\x72") !== false)) {
            goto geqcuwsuqymcqiou;
        }
        goto ywiyqcgyoweomkqg;
        gmgemamkswqeskmo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qqyasyisimsuyiiw;
        }
        goto gswsuaquqikkycwi;
        eeqgkcgywkwgmiyg:
        qqyasyisimsuyiiw:
        goto cumwowkcomuigeag;
        wsiqkesiecagcykw:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto euyooyocyuucmmmc;
        omeekeuouqiieacw:
        heakaosaewwowmcu:
        goto wuqswaumkwuciiqi;
        aekwmmmciucegyys:
        $this->aasmeayouwmacaow(true);
        goto quaugcgaccqksmmk;
        euyooyocyuucmmmc:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\145\x78\106\x61\166\151\143\157\156\x73") !== false)) {
            goto heakaosaewwowmcu;
        }
        goto iskwcciiywiaamos;
        saaioyiceykemgas:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iawccecmgeaocqmg;
        }
        goto cyoymqqkgiumuegy;
        wuqswaumkwuciiqi:
        return false;
        goto wmkoscqgkmsoasms;
        oyqaeioosuiwoacw:
        iawccecmgeaocqmg:
        goto omeekeuouqiieacw;
        quaugcgaccqksmmk:
        return true;
        goto oyqaeioosuiwoacw;
        fkcemcakyseoskmc:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto aucqaemoukqogokc;
        iskwcciiywiaamos:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\x64\145\170\x46\141\x76\x69\143\x6f\x6e\x73"));
        goto saaioyiceykemgas;
        aucqaemoukqogokc:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto aekwmmmciucegyys;
        cyoymqqkgiumuegy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto fkcemcakyseoskmc;
        wmkoscqgkmsoasms:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto aisgmewqismsouqm;
        caumawwwskkoekcw:
        $this->aasmeayouwmacaow(true);
        goto gciueqsqsgcekwae;
        oasoyuckmqumgwwy:
        yksumiuqcoggugea:
        goto ucugysauicuskega;
        cwmwkkauqqusccgs:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto isowmaawkwmkcgmo;
        ggyweqemgcmwwwgu:
        cecqqwuqeiccmmos:
        goto oasoyuckmqumgwwy;
        aisgmewqismsouqm:
        if (!(stripos($this->agent, "\x59\141\x6e\144\145\x78\x42\x6c\x6f\147\163") !== false)) {
            goto yksumiuqcoggugea;
        }
        goto mywassaguwommoyg;
        gciueqsqsgcekwae:
        return true;
        goto ggyweqemgcmwwwgu;
        mywassaguwommoyg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x6e\144\145\170\x42\154\157\147\163"));
        goto mgsyyameesskqgsk;
        mgsyyameesskqgsk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cecqqwuqeiccmmos;
        }
        goto wsgcyguocqmgccks;
        wsgcyguocqmgccks:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cwmwkkauqqusccgs;
        ucugysauicuskega:
        return false;
        goto kaiekqyukykoqiwa;
        isowmaawkwmkcgmo:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto caumawwwskkoekcw;
        kaiekqyukykoqiwa:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto gccyyceaqackqsec;
        gccyyceaqackqsec:
        if (!(stripos($this->agent, "\x59\x61\156\x64\145\x78\115\145\x64\151\141") !== false)) {
            goto wimcmomumakqcikc;
        }
        goto qquioqqwmiuemaaw;
        cuaueyackcccuamq:
        return true;
        goto oaaqgeqiwsykukeg;
        gukkaysgawyusckc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eayemqoaewmasoos;
        }
        goto qacccgcuwysswgqk;
        syoagkqccoyegkac:
        $this->aasmeayouwmacaow(true);
        goto cuaueyackcccuamq;
        ucwwsimgkkgymqwm:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto syoagkqccoyegkac;
        oaaqgeqiwsykukeg:
        eayemqoaewmasoos:
        goto wyqswauigsseskum;
        qquioqqwmiuemaaw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\x6e\144\x65\170\115\145\x64\151\141"));
        goto gukkaysgawyusckc;
        gyswaoawqisgeiac:
        return false;
        goto aayyiwqgkqkkckeg;
        wyqswauigsseskum:
        wimcmomumakqcikc:
        goto gyswaoawqisgeiac;
        qacccgcuwysswgqk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ucgecsiyweweymqw;
        ucgecsiyweweymqw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ucwwsimgkkgymqwm;
        aayyiwqgkqkkckeg:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto eiuwyaccguegyckc;
        wkaeeqagowygkuya:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\156\144\145\x78\126\x69\x64\x65\x6f"));
        goto wuasiiywuycmkusq;
        wuasiiywuycmkusq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto mwoaykewsqmiikum;
        }
        goto ygagqkmcasesqcui;
        mieyqmckqkqaoygo:
        return true;
        goto kwkeisysqagyioig;
        eikeicmemcaswgaq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto wisaskaqkeaqaymk;
        eiuwyaccguegyckc:
        if (!(stripos($this->agent, "\x59\x61\156\144\145\x78\x56\x69\144\x65\157") !== false)) {
            goto iammckaiicmaeweq;
        }
        goto wkaeeqagowygkuya;
        ygagqkmcasesqcui:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto eikeicmemcaswgaq;
        wisaskaqkeaqaymk:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto wmigsokoiegiocys;
        wmigsokoiegiocys:
        $this->aasmeayouwmacaow(true);
        goto mieyqmckqkqaoygo;
        kwkeisysqagyioig:
        mwoaykewsqmiikum:
        goto mecmyqgsmiuesukw;
        ouaywweeyqecagmc:
        return false;
        goto gogqmaoyqeoscico;
        mecmyqgsmiuesukw:
        iammckaiicmaeweq:
        goto ouaywweeyqecagmc;
        gogqmaoyqeoscico:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto kuimcqawqqqgcoqs;
        yeyoqmmeeuqucmky:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wmquwikmuiskcucm;
        cqmkeoyaqqoykcyu:
        return false;
        goto ueyiaawciiimcmia;
        gggsgesuicesmqya:
        kmawaeioomkgqkqe:
        goto mksgaooiuiymkkac;
        kuimcqawqqqgcoqs:
        if (!(stripos($this->agent, "\131\x61\156\x64\145\170\x49\155\141\147\145\163") !== false)) {
            goto ngkomagwskmkmcuc;
        }
        goto osyoqauakmkoaigc;
        mksgaooiuiymkkac:
        ngkomagwskmkmcuc:
        goto cqmkeoyaqqoykcyu;
        wmquwikmuiskcucm:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ymmgwsqqoskmaags;
        wqcseegakwamkcca:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kmawaeioomkgqkqe;
        }
        goto yeyoqmmeeuqucmky;
        suaeioykcscoamsi:
        $this->aasmeayouwmacaow(true);
        goto ukoqoieuoigccaoi;
        osyoqauakmkoaigc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\144\145\x78\111\155\x61\x67\x65\x73"));
        goto wqcseegakwamkcca;
        ukoqoieuoigccaoi:
        return true;
        goto gggsgesuicesmqya;
        ymmgwsqqoskmaags:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto suaeioykcscoamsi;
        ueyiaawciiimcmia:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto kiqkwuaswsmkigok;
        sieeqakumiscuwmy:
        qccmiyoiqguwmqug:
        goto yuosayyyyemookmi;
        wqgwmgkmeiewmwsm:
        $this->aasmeayouwmacaow(true);
        goto cugwcccamcyuksgk;
        yieciwkqiqgceuya:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\155\163\156\142\x6f\x74"));
        goto waauqgswsiesowse;
        yuosayyyyemookmi:
        return false;
        goto gqogwsuwyiouywcy;
        wqwqukkyascugisy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ecyoakcmqwaksmms;
        waauqgswsiesowse:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yuueeqwwgggeycog;
        }
        goto wqwqukkyascugisy;
        okyykeecayqaccik:
        $this->name = self::BROWSER_MSNBOT;
        goto wqgwmgkmeiewmwsm;
        ecyoakcmqwaksmms:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto okyykeecayqaccik;
        cugwcccamcyuksgk:
        return true;
        goto yqswiyiomsgeayiw;
        kiqkwuaswsmkigok:
        if (!(stripos($this->agent, "\155\163\156\142\157\164") !== false)) {
            goto qccmiyoiqguwmqug;
        }
        goto yieciwkqiqgceuya;
        yqswiyiomsgeayiw:
        yuueeqwwgggeycog:
        goto sieeqakumiscuwmy;
        gqogwsuwyiouywcy:
    }
    
    protected function qaigygakimuucuki()
    {
        goto escsoaemgioqgqso;
        oemaagemmycueycs:
        $this->aasmeayouwmacaow(true);
        goto ymmyqwqggkuwimiw;
        ymmyqwqggkuwimiw:
        return true;
        goto oqkyykockmuiaycc;
        ayikwkmouqocqoya:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto wsuauiewqimocoes;
        aygyqqwyyugyoakg:
        return false;
        goto egeecgiwycoqsgqm;
        egaiuisgeekasiow:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aouymgmkkcaaymky;
        }
        goto ywwgsgiqkuwwuwas;
        escsoaemgioqgqso:
        if (!(stripos($this->agent, "\142\151\x6e\x67\x62\157\164") !== false)) {
            goto egsiwgciqqkwecuy;
        }
        goto gumousymsmeugmsm;
        uugykecieoomuygs:
        egsiwgciqqkwecuy:
        goto aygyqqwyyugyoakg;
        oqkyykockmuiaycc:
        aouymgmkkcaaymky:
        goto uugykecieoomuygs;
        wsuauiewqimocoes:
        $this->name = self::BROWSER_BINGBOT;
        goto oemaagemmycueycs;
        ywwgsgiqkuwwuwas:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ayikwkmouqocqoya;
        gumousymsmeugmsm:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x62\x69\156\x67\x62\157\x74"));
        goto egaiuisgeekasiow;
        egeecgiwycoqsgqm:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto aoueegmsgkeokaoq;
        wmuqesieiugiquks:
        if (stripos($this->agent, "\127\63\x43\x5f\126\x61\x6c\x69\144\141\x74\x6f\162") !== false) {
            goto gqmiumskekekmaks;
        }
        goto weygkwekqawoowyq;
        aisaywmsiigsegso:
        return true;
        goto wssaokwkycsqqumw;
        wwaoocgeiyswqwow:
        goto uiyscqcowgeaeoco;
        goto mcuiomgoamywqgya;
        sqcqqsocqymmgwcq:
        hiuqggmuisuaaksw:
        goto segewkgiakaqsgoc;
        imiuwwuwwyqigmou:
        uiyscqcowgeaeoco:
        goto iqgasessakaoieuw;
        wssaokwkycsqqumw:
        ikqqmyoegaeocwqw:
        goto iuiusomcwkaiksyq;
        gggamqmqusyimaky:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto meqqkyuusamyauyc;
        icmmwweaumcckgam:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto aisaywmsiigsegso;
        ykoqgweokgwkcawk:
        
        $eaogoiscgwgmugsq = str_replace("\127\63\x43\x5f\126\x61\x6c\151\x64\141\164\x6f\x72\x20", "\127\63\103\x5f\x56\x61\x6c\x69\144\141\164\x6f\162\57", $this->agent);
        goto iqugwmioumykkagm;
        iqgasessakaoieuw:
        return false;
        goto sykosugesqqqqyey;
        fkuiuosooquwmkoi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto hiuqggmuisuaaksw;
        }
        goto eewmcuekysqqkeey;
        segewkgiakaqsgoc:
        goto uiyscqcowgeaeoco;
        goto oeiiuoikyagkmyqa;
        yiiaqacikommoaoy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto icmmwweaumcckgam;
        meqqkyuusamyauyc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto mqigmosuikyaaamk;
        iicgycsecmaeqqcg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ikqqmyoegaeocwqw;
        }
        goto uomswgeawseimkou;
        iqugwmioumykkagm:
        $yikciqwsimweauyg = explode("\57", stristr($eaogoiscgwgmugsq, "\127\x33\x43\137\126\141\154\151\144\x61\164\157\162"));
        goto fkuiuosooquwmkoi;
        sioosmeyiqmscmkc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\127\x33\103\x2d\143\x68\x65\143\153\x6c\x69\x6e\153"));
        goto iicgycsecmaeqqcg;
        oscemsgoyimocqei:
        return true;
        goto imiuwwuwwyqigmou;
        mcuiomgoamywqgya:
        soiguuywuqqisowg:
        goto sioosmeyiqmscmkc;
        weygkwekqawoowyq:
        if (stripos($this->agent, "\x57\63\x43\55\155\x6f\x62\x69\154\x65\117\x4b") !== false) {
            goto acsqgoigqaiqiwaw;
        }
        goto wwaoocgeiyswqwow;
        mqigmosuikyaaamk:
        return true;
        goto sqcqqsocqymmgwcq;
        uomswgeawseimkou:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yiiaqacikommoaoy;
        weuwgyoweusiaweq:
        gqmiumskekekmaks:
        goto ykoqgweokgwkcawk;
        ucuiqegmmogyasmw:
        $this->eywockmuswoykooc(true);
        goto oscemsgoyimocqei;
        eewmcuekysqqkeey:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gggamqmqusyimaky;
        aoueegmsgkeokaoq:
        if (stripos($this->agent, "\127\x33\103\x2d\143\150\145\x63\x6b\x6c\x69\156\153") !== false) {
            goto soiguuywuqqisowg;
        }
        goto wmuqesieiugiquks;
        oeiiuoikyagkmyqa:
        acsqgoigqaiqiwaw:
        goto iamckkumoomyeoum;
        iuiusomcwkaiksyq:
        goto uiyscqcowgeaeoco;
        goto weuwgyoweusiaweq;
        iamckkumoomyeoum:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto ucuiqegmmogyasmw;
        sykosugesqqqqyey:
    }
    
    protected function cimegwusqouswgao()
    {
        goto oqkkssoawygysqmq;
        gygwagcmmmaioikw:
        return false;
        goto mkimssyoqguuowky;
        myksiemsskucuyac:
        osewecweiaekeoou:
        goto gygwagcmmmaioikw;
        ckmosuuwagciuwmw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iuiyyuwauoowkgeg;
        kwumsouwywsqkmci:
        return true;
        goto qmckmkykmyucosyq;
        oqkkssoawygysqmq:
        if (!(stripos($this->agent, "\163\x6c\165\x72\160") !== false)) {
            goto osewecweiaekeoou;
        }
        goto yioasqegwkugoqag;
        yioasqegwkugoqag:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\x6c\165\x72\160"));
        goto waqsamacggacoaye;
        waqsamacggacoaye:
        if (!isset($yikciqwsimweauyg[1])) {
            goto okicguwqeyiuywos;
        }
        goto oiksgywwsqweoeai;
        oiksgywwsqweoeai:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckmosuuwagciuwmw;
        iuiyyuwauoowkgeg:
        $this->name = self::BROWSER_SLURP;
        goto ogeakuasmaemuwga;
        ogeakuasmaemuwga:
        $this->aasmeayouwmacaow(true);
        goto wiawimwuykuugcwi;
        qmckmkykmyucosyq:
        okicguwqeyiuywos:
        goto myksiemsskucuyac;
        wiawimwuykuugcwi:
        $this->eywockmuswoykooc(false);
        goto kwumsouwywsqkmci;
        mkimssyoqguuowky:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto aecsciyiseuamymy;
        wucmiaeomamqgqes:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto asoiigkaqcguaioi;
        asoiigkaqcguaioi:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto wuismmmeeqkiowua;
        wuismmmeeqkiowua:
        return true;
        goto gikcoemsgecyasqe;
        aecsciyiseuamymy:
        if (stripos($this->agent, "\x42\162\141\x76\145\x2f") !== false) {
            goto ouecqyewekugmwkm;
        }
        goto guiqaqkuywsmqcoc;
        sosikmkcuygeukyo:
        return true;
        goto kwgkaeyusoekmway;
        gkgwqoquqekiayus:
        goto oawogoiagossceii;
        goto iaiewssiomowoyas;
        kwgkaeyusoekmway:
        oawogoiagossceii:
        goto uckgesmigkiyqyck;
        guiqaqkuywsmqcoc:
        if (stripos($this->agent, "\40\x42\x72\x61\x76\x65\40") !== false) {
            goto ecuoemaqoeosiase;
        }
        goto qeimskmimouyssgu;
        ymgeisswqiucoaas:
        $quiguswioiaaywey = explode("\40", $uuygmciickwewegw[1]);
        goto wucmiaeomamqgqes;
        gikcoemsgecyasqe:
        aqcqeucsaaeuiwqa:
        goto gkgwqoquqekiayus;
        qeimskmimouyssgu:
        goto oawogoiagossceii;
        goto csecmagoocuukewm;
        ggakkmokkykkqawi:
        $uuygmciickwewegw = explode("\57", stristr($this->agent, "\x42\x72\x61\166\x65"));
        goto owcekoqmukawoeao;
        csecmagoocuukewm:
        ouecqyewekugmwkm:
        goto ggakkmokkykkqawi;
        ciymuigaugeiouic:
        
        
        $this->aasasueowyemuyoc('');
        goto sosikmkcuygeukyo;
        iaiewssiomowoyas:
        ecuoemaqoeosiase:
        goto gsuacqigwaigyaia;
        uckgesmigkiyqyck:
        return false;
        goto pwgwmqwuoqysukeo;
        gsuacqigwaigyaia:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ciymuigaugeiouic;
        owcekoqmukawoeao:
        if (!isset($uuygmciickwewegw[1])) {
            goto aqcqeucsaaeuiwqa;
        }
        goto ymgeisswqiucoaas;
        pwgwmqwuoqysukeo:
    }
    
    protected function makyeuicweuowumi()
    {
        goto ocsoakwgmmwsekyi;
        ccyiuskguauimqee:
        gaccwqquykeauumg:
        goto oqymsqskimoyuyye;
        wwckusqkukciicei:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cmcisgcoaouauymu;
        sgwwscoqkcuoqqsg:
        yeagcqwaoeskgqmg:
        goto kigaqwsiuygysecu;
        qmywsksagymugcou:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x45\144\x67\x65"));
        goto qsqgkiyigokqcioe;
        qsqgkiyigokqcioe:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sqikwaiakyissigo;
        }
        goto wwckusqkukciicei;
        yukycgouyuqkmaok:
        if (!(stripos($this->agent, "\127\x69\x6e\x64\x6f\167\x73\x20\x50\x68\157\x6e\x65") !== false || stripos($this->agent, "\101\x6e\x64\162\157\151\x64") !== false)) {
            goto gaccwqquykeauumg;
        }
        goto megqkiykgiamgmsk;
        kigaqwsiuygysecu:
        return false;
        goto qgagcuckouyuyuss;
        ocsoakwgmmwsekyi:
        if (!(stripos($this->agent, "\105\144\x67\145\57") !== false)) {
            goto yeagcqwaoeskgqmg;
        }
        goto qmywsksagymugcou;
        oqymsqskimoyuyye:
        return true;
        goto oyykmqismqsyaaus;
        cmcisgcoaouauymu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto camscswqceqycmke;
        oyykmqismqsyaaus:
        sqikwaiakyissigo:
        goto sgwwscoqkcuoqqsg;
        camscswqceqycmke:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto yukycgouyuqkmaok;
        megqkiykgiamgmsk:
        $this->eywockmuswoykooc(true);
        goto ccyiuskguauimqee;
        qgagcuckouyuyuss:
    }
    
    protected function cgequousmqakcios()
    {
        goto ycsuqaygaisskkeq;
        kwemswkcueagmssu:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x6d\163\x70\151\145"));
        goto mayucqimkiskmcms;
        isucaqumoqgykqig:
        if (stripos($this->agent, "\x6d\x73\160\x69\x65") !== false) {
            goto omeswwygqyeqyqmw;
        }
        goto iuiickwiuccmyiey;
        coeaoweyqagqsoqq:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto goowmysscaoakuma;
        occyqeeyumwaygik:
        gmiyusqaiqaaakkk:
        goto yaeowwmkcuqmesau;
        akmiwammkswkmyio:
        ewasqwuscwkeuuyi:
        goto eqiygsagygouqkyy;
        usoiismiikooagme:
        if (stripos($this->agent, "\155\x73\160\x69\x65") !== false || stripos($this->agent, "\160\x6f\143\x6b\x65\x74") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto zkoqiugkkemmwqeq;
        sckcaoikwggaoiqm:
        goto kwyiuyoeysqeywmm;
        goto aaumqogegyqosuiq;
        gocgaeomskmyyuaq:
        $yikciqwsimweauyg = stristr($this->agent, "\x2f");
        goto ckiggmwimwykqyee;
        ouqiiwuqeoegciso:
        return true;
        goto sckcaoikwggaoiqm;
        eqiygsagygouqkyy:
        
        if (!(stripos($this->agent, "\155\163\156\x62") !== false)) {
            goto gmiyusqaiqaaakkk;
        }
        goto gcasowsewwisgqwc;
        aaumqogegyqosuiq:
        muaiioeaoiqiogie:
        goto umaimowkyaemisiq;
        qkmucouuqggkwssg:
        if (stripos($this->agent, "\155\x73\x69\145") !== false && stripos($this->agent, "\x6f\x70\x65\162\141") === false) {
            goto ewasqwuscwkeuuyi;
        }
        goto ycsqoemcioqgscik;
        umaimowkyaemisiq:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto yueaaaoockqicmwq;
        syawcymwokyaqeck:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qskwqqamoqekaqum;
        goiegscqgcukimys:
        eamumkggcmyaosco:
        goto occyqeeyumwaygik;
        wysmuiaeuqqaycig:
        gyqcauemgkuwquua:
        goto qousyksekeougumo;
        cyikciomyweygykm:
        $this->aasasueowyemuyoc("\61\61\56\60");
        goto ouqiiwuqeoegciso;
        awiqeeiewssogaaq:
        $this->aasasueowyemuyoc(preg_replace("\x2f\133\x5e\60\55\x39\56\x5d\x2b\x2f", '', $sogksuscggsicmac[1]));
        goto eismimkcoiokucom;
        ygqkqwkyoosgomug:
        if (!(stripos($this->agent, "\x49\105\x4d\x6f\x62\x69\154\x65") !== false)) {
            goto umimoqmwoeecysqi;
        }
        goto coeaoweyqagqsoqq;
        oeeccicqsoiyqcig:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto uksaceogcmuacumi;
        swasyyuiyouasyqy:
        goto kwyiuyoeysqeywmm;
        goto akmiwammkswkmyio;
        yiomssmosemcckmc:
        if (!isset($quiguswioiaaywey[1])) {
            goto mwauqumigegcywiw;
        }
        goto uuamswicsoyuguug;
        gcasowsewwisgqwc:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\73\40", $this->agent), "\x4d\x53\116"));
        goto ieysgookkakiiuoo;
        ycsqoemcioqgscik:
        if (stripos($this->agent, "\x74\162\151\144\x65\x6e\164") !== false) {
            goto wskkwyoiugucwwua;
        }
        goto usoiismiikooagme;
        kmyoqookuiyomeec:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto omggicgmwyakocik;
        uksaceogcmuacumi:
        uecqmukyqqgyoegy:
        goto ieuewgsuqywiuuki;
        yueaaaoockqicmwq:
        $this->aasasueowyemuyoc("\61\56\60");
        goto gocgaeomskmyyuaq;
        oesqmiaisaqseigm:
        wskkwyoiugucwwua:
        goto kmyoqookuiyomeec;
        agasiekywmaokckg:
        goto uecqmukyqqgyoegy;
        goto qwwigmoeocgyqyuy;
        ycsuqaygaisskkeq:
        if (stripos($this->agent, "\x54\x72\151\x64\x65\156\x74\x2f\67\56\x30\x3b\x20\x72\166\72\x31\x31\56\x30") !== false) {
            goto uoyuiiauquiwgasu;
        }
        goto qymmimiisagiymuy;
        soacqquaasiggock:
        uoyuiiauquiwgasu:
        goto iseeayqyeoawwmwc;
        iuiickwiuccmyiey:
        $quiguswioiaaywey = explode("\x2f", $this->agent);
        goto yiomssmosemcckmc;
        qymmimiisagiymuy:
        if (stripos($this->agent, "\x6d\151\143\x72\x6f\x73\x6f\146\164\x20\x69\x6e\x74\x65\162\x6e\145\x74\40\145\x78\160\x6c\157\x72\x65\162") !== false) {
            goto muaiioeaoiqiogie;
        }
        goto qkmucouuqggkwssg;
        ieysgookkakiiuoo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eamumkggcmyaosco;
        }
        goto aykuikogcgweeoio;
        eismimkcoiokucom:
        $this->agent = str_replace(["\x4d\157\x7a\151\154\154\x61", "\107\145\x63\153\x6f"], "\x4d\123\111\x45", $this->agent);
        goto sooawcagkoismuqa;
        ckiggmwimwykqyee:
        if (!preg_match("\x2f\63\x30\x38\x7c\64\62\65\174\64\62\66\174\x34\x37\x34\x7c\x30\x62\61\x2f\151", $yikciqwsimweauyg)) {
            goto qmkkwkqieggiyamm;
        }
        goto usycoqawsmoaqewm;
        kwaiiaowwykksgcw:
        goto kwyiuyoeysqeywmm;
        goto oesqmiaisaqseigm;
        qousyksekeougumo:
        kwyiuyoeysqeywmm:
        goto micqaoiiquokaqmw;
        wkgugqyackgiowas:
        return true;
        goto goiegscqgcukimys;
        iseeayqyeoawwmwc:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto cyikciomyweygykm;
        kqggyaomgmqyicmc:
        mwauqumigegcywiw:
        goto agasiekywmaokckg;
        ameqasmessgyycqq:
        $this->eywockmuswoykooc(true);
        goto isucaqumoqgykqig;
        qskwqqamoqekaqum:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto ameqasmessgyycqq;
        aykuikogcgweeoio:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto qsaiiuqwimiqiwyc;
        mayucqimkiskmcms:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gyqcauemgkuwquua;
        }
        goto syawcymwokyaqeck;
        ygwwwwcgiwmcakmi:
        umimoqmwoeecysqi:
        goto uuiioegocmmcqgwq;
        sqicocysoqwcgasq:
        if (!isset($sogksuscggsicmac[1])) {
            goto sggyugwiuggaaqyo;
        }
        goto awiqeeiewssogaaq;
        iqkkuesiuysywyag:
        return true;
        goto swasyyuiyouasyqy;
        uuamswicsoyuguug:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto kqggyaomgmqyicmc;
        kkumemicscqeqawi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ysamigeqeyqgiwcs;
        }
        goto msccquimgomummck;
        goowmysscaoakuma:
        $this->eywockmuswoykooc(true);
        goto ygwwwwcgiwmcakmi;
        kmmsoqcgiyougqqy:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\73"], '', $yikciqwsimweauyg[1]));
        goto ygqkqwkyoosgomug;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\56\65");
        goto igesuquikuwmsywg;
        ieuewgsuqywiuuki:
        return true;
        goto wysmuiaeuqqaycig;
        mgsmmaqqkusaaqew:
        owgoagmssqsysiyq:
        goto kwemswkcueagmssu;
        yaeowwmkcuqmesau:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\73", "\x3b\40", $this->agent), "\x6d\x73\x69\x65"));
        goto kkumemicscqeqawi;
        uuiioegocmmcqgwq:
        return true;
        goto yygugwkyoeackami;
        micqaoiiquokaqmw:
        return false;
        goto wyagecywqcysyyae;
        zkoqiugkkemmwqeq:
        goto kwyiuyoeysqeywmm;
        goto soacqquaasiggock;
        qwwigmoeocgyqyuy:
        omeswwygqyeqyqmw:
        goto oeeccicqsoiyqcig;
        sooawcagkoismuqa:
        sggyugwiuggaaqyo:
        goto eoeoikgkiuewagwg;
        eoeoikgkiuewagwg:
        goto kwyiuyoeysqeywmm;
        goto mgsmmaqqkusaaqew;
        msccquimgomummck:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto kmmsoqcgiyougqqy;
        igesuquikuwmsywg:
        qmkkwkqieggiyamm:
        goto iqkkuesiuysywyag;
        qsaiiuqwimiqiwyc:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto wkgugqyackgiowas;
        omggicgmwyakocik:
        $sogksuscggsicmac = explode("\x72\166\x3a", $this->agent);
        goto sqicocysoqwcgasq;
        yygugwkyoeackami:
        ysamigeqeyqgiwcs:
        goto kwaiiaowwykksgcw;
        wyagecywqcysyyae:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto sackmgaomiwgeqca;
        scimuugawiiuemki:
        uasakawygcqkquuy:
        goto wmcauamwimsyiauk;
        eukqocmusiasmewe:
        kekkyamkouwoiyyi:
        goto usmucisyagswyysu;
        swkkeqmaqugwiysy:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto csoomgiiyysqmeku;
        mseowikguuikkiys:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\x70\145\x72\x61");
        goto ageemsqieiqyqwag;
        isgqqmaauckagsao:
        goto eoueymmeawwwswwq;
        goto uqqaaeqoykgcakec;
        coyegiuygcqwmaqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eukqocmusiasmewe;
        yeayeuiggqoigwag:
        csguwgocosyisgyq:
        goto iqwiyiisyasiwsiu;
        uuimoqmwywkkaygo:
        aqwaemcyooumguou:
        goto akmiwuwwkeokegkq;
        wskewcieqoqiuoui:
        $yikciqwsimweauyg = explode("\57", $cgkyugweawsewkuu);
        goto ggiacqackmguiiki;
        sciiwomqgcamicqs:
        $this->eywockmuswoykooc(true);
        goto aiaaaesgesgwsuck;
        ycaooqesseeagoka:
        iggqqqegoegigyii:
        goto ccaqsekgkcqqayyg;
        ccaqsekgkcqqayyg:
        $cgkyugweawsewkuu = stristr($this->agent, "\x4f\x50\x52");
        goto iegksyacuckwoyiw;
        oucqmskiygmmsmye:
        if (preg_match("\57\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto myymisiqiwiqymuu;
        }
        goto ieeieiuoeqquyaka;
        omusyecyksyowysk:
        return true;
        goto kwsuumgiqsskggqy;
        uyeiymmkkiyccakm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto scimuugawiiuemki;
        akmiwuwwkeokegkq:
        if (!(stripos($this->agent, "\117\x70\x65\x72\141\x20\115\x6f\142\151") !== false)) {
            goto cuyagmoysmwoceks;
        }
        goto oqyumeoumucciuao;
        ikuoukwawkkyaacy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto omcmaswaawciiaui;
        quucsamwocuceyae:
        fwqikeoyaewusiym:
        goto emoscekqieoummww;
        uowyeayyimmqogge:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wkasucgiaeogugcw;
        yscyooysgqsyuayo:
        goto eoueymmeawwwswwq;
        goto ssoogugiigiqooce;
        iegksyacuckwoyiw:
        if (!preg_match("\x2f\x5c\57\x2f", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ggaoikewqkecamgs;
        yiyksucyuaosekey:
        return false;
        goto msywkyeikecaomgo;
        uqqaaeqoykgcakec:
        cqcomacmwgougkai:
        goto qwiwywqwmmciwiea;
        ocisosooggaaueii:
        sikkakqouqeckesc:
        goto uuimoqmwywkkaygo;
        uiuyiuiocgycwaae:
        if (stripos($this->agent, "\157\x70\x65\162\x61") !== false) {
            goto uqsmiiqigeisoyse;
        }
        goto smsuqgcummiyucsc;
        ggiacqackmguiiki:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kekkyamkouwoiyyi;
        }
        goto ckgikcyggaegucyk;
        cyucgakoiiemocie:
        $this->eywockmuswoykooc(true);
        goto yeayeuiggqoigwag;
        kywqmsqusiysywqe:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\x70\x65\x72\x61"));
        goto swkkeqmaqugwiysy;
        qakmsceesmcwecmo:
        if (!isset($quiguswioiaaywey[1])) {
            goto uasakawygcqkquuy;
        }
        goto uyeiymmkkiyccakm;
        eiosgmsukekekyou:
        if (preg_match("\x2f\134\57\57", $cgkyugweawsewkuu)) {
            goto kiykgaeecsuoegei;
        }
        goto kywqmsqusiysywqe;
        wkasucgiaeogugcw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ocisosooggaaueii;
        mmowusaeqemsisiq:
        myymisiqiwiqymuu:
        goto wskewcieqoqiuoui;
        emoscekqieoummww:
        if (!(stripos($this->agent, "\115\x6f\142\151\x6c\145") !== false)) {
            goto csguwgocosyisgyq;
        }
        goto cyucgakoiiemocie;
        aiaaaesgesgwsuck:
        return true;
        goto yscyooysgqsyuayo;
        uggmmsuyiiyuaeic:
        kiykgaeecsuoegei:
        goto cyaaugsakiugouae;
        csoomgiiyysqmeku:
        goto aqwaemcyooumguou;
        goto ukkkmakiisiqkacm;
        gocmokqaeqkqcmma:
        goto aqwaemcyooumguou;
        goto uggmmsuyiiyuaeic;
        kwsuumgiqsskggqy:
        eoueymmeawwwswwq:
        goto yiyksucyuaosekey;
        cemwkemiwicagmou:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sikkakqouqeckesc;
        }
        goto uowyeayyimmqogge;
        wmcauamwimsyiauk:
        goto eaicyuessygcyuqu;
        goto mmowusaeqemsisiq;
        iqwiyiisyasiwsiu:
        $this->name = self::BROWSER_OPERA;
        goto omusyecyksyowysk;
        gouyqmyakowooiyw:
        cuyagmoysmwoceks:
        goto eyuieiqqgyowoocu;
        eyuieiqqgyowoocu:
        $this->name = self::BROWSER_OPERA;
        goto gmgwsqeqwquucyoo;
        gmgwsqeqwquucyoo:
        return true;
        goto csuemgeukskicmmi;
        qwiwywqwmmciwiea:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\x65\162\141\40\155\151\156\151");
        goto oucqmskiygmmsmye;
        aekskqewqmeauaug:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ikuoukwawkkyaacy;
        ageemsqieiqyqwag:
        if (preg_match("\x2f\126\145\162\x73\151\157\156\x5c\x2f\x28\x31\52\56\x2a\51\44\57", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto asgwqocgsuugguse;
        }
        goto eiosgmsukekekyou;
        usmucisyagswyysu:
        eaicyuessygcyuqu:
        goto wawimucmukumkuca;
        ukkkmakiisiqkacm:
        asgwqocgsuugguse:
        goto mukwaeyamkyacewo;
        cyaaugsakiugouae:
        $yikciqwsimweauyg = explode("\57", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto cemwkemiwicagmou;
        ssoogugiigiqooce:
        uqsmiiqigeisoyse:
        goto mseowikguuikkiys;
        omcmaswaawciiaui:
        amecoaswmoqigiku:
        goto quucsamwocuceyae;
        sackmgaomiwgeqca:
        if (stripos($this->agent, "\x6f\160\x65\162\141\40\155\x69\156\x69") !== false) {
            goto cqcomacmwgougkai;
        }
        goto uiuyiuiocgycwaae;
        mukwaeyamkyacewo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto gocmokqaeqkqcmma;
        qwgicaiskacusqka:
        if (!isset($yikciqwsimweauyg[1])) {
            goto amecoaswmoqigiku;
        }
        goto aekskqewqmeauaug;
        csuemgeukskicmmi:
        goto eoueymmeawwwswwq;
        goto ycaooqesseeagoka;
        ieeieiuoeqquyaka:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\157\160\145\x72\141\40\x6d\x69\156\x69"));
        goto qakmsceesmcwecmo;
        smsuqgcummiyucsc:
        if (stripos($this->agent, "\117\120\x52") !== false) {
            goto iggqqqegoegigyii;
        }
        goto isgqqmaauckagsao;
        wawimucmukumkuca:
        $this->name = self::BROWSER_OPERA_MINI;
        goto sciiwomqgcamicqs;
        oqyumeoumucciuao:
        $this->eywockmuswoykooc(true);
        goto gouyqmyakowooiyw;
        ggaoikewqkecamgs:
        $yikciqwsimweauyg = explode("\57", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto qwgicaiskacusqka;
        ckgikcyggaegucyk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto coyegiuygcqwmaqc;
        msywkyeikecaomgo:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto mwcysigeamkwiwku;
        oikasesimicoysmu:
        
        if (!(stripos($this->agent, "\101\156\144\x72\157\151\x64") !== false)) {
            goto myemqwquecqwakyq;
        }
        goto kicmwgigiciiuqaw;
        mwcysigeamkwiwku:
        if (!(stripos($this->agent, "\x43\150\x72\x6f\155\x65") !== false)) {
            goto ugmggeiwogwcgcqy;
        }
        goto ywukigwwwumwuicy;
        gqaoecysyaaccyyy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto somyyugyumgeukik;
        akgyaaawgcecyoqc:
        myemqwquecqwakyq:
        goto ceskkigeaqcaasqs;
        gygkmqwkaiskgwws:
        $this->eywockmuswoykooc(true);
        goto awukkyueuqcaywks;
        cggwmqyuewwisqsu:
        goto uukmwmiaqigsqaug;
        goto ymkqceigmmuokugy;
        gsuqomaoosusiqew:
        return false;
        goto ymyqsgymeusoakyi;
        ceskkigeaqcaasqs:
        return true;
        goto wikueqyuegggkqoi;
        ywukigwwwumwuicy:
        $yikciqwsimweauyg = preg_split("\x2f\133\134\57\73\x5d\53\x2f", stristr($this->agent, "\x43\x68\162\157\x6d\145"));
        goto uyuugesysqaueywi;
        wikueqyuegggkqoi:
        ksmacqoqogyoookk:
        goto qoigmymamwikqkce;
        somyyugyumgeukik:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto oikasesimicoysmu;
        qoigmymamwikqkce:
        ugmggeiwogwcgcqy:
        goto gsuqomaoosusiqew;
        kicmwgigiciiuqaw:
        if (stripos($this->agent, "\x4d\157\x62\x69\154\145") !== false) {
            goto uccocwouuuisiage;
        }
        goto oymcieacieeqwses;
        uyuugesysqaueywi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ksmacqoqogyoookk;
        }
        goto qkmqkcwgskmyeoyq;
        oymcieacieeqwses:
        $this->icigyueiiwsukmsu(true);
        goto cggwmqyuewwisqsu;
        ymkqceigmmuokugy:
        uccocwouuuisiage:
        goto gygkmqwkaiskgwws;
        awukkyueuqcaywks:
        uukmwmiaqigsqaug:
        goto akgyaaawgcecyoqc;
        qkmqkcwgskmyeoyq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gqaoecysyaaccyyy;
        ymyqsgymeusoakyi:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto qymyaksieaiemaam;
        iugcwummaqmgiqgm:
        symsqqgwwimugwue:
        goto cqmwuwoaqiumaogi;
        ygeweomowkiskgec:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\167\x65\142\x74\x76"));
        goto kkaqamsuqkgkwowo;
        skawosaecygmqmsq:
        syuakiekoaowmoyy:
        goto iugcwummaqmgiqgm;
        owuqwmsqouswswau:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto iawosyeimcucqgky;
        kkaqamsuqkgkwowo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto syuakiekoaowmoyy;
        }
        goto acmqaeyciymmsgua;
        cqmwuwoaqiumaogi:
        return false;
        goto aecesusucigikyqs;
        acmqaeyciymmsgua:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ewswyuykwuaigiyo;
        qymyaksieaiemaam:
        if (!(stripos($this->agent, "\x77\145\x62\164\166") !== false)) {
            goto symsqqgwwimugwue;
        }
        goto ygeweomowkiskgec;
        ewswyuykwuaigiyo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto owuqwmsqouswswau;
        iawosyeimcucqgky:
        return true;
        goto skawosaecygmqmsq;
        aecesusucigikyqs:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto wkeoacqqekmaqogk;
        ueimcmmgwiommwwg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto asmgcmegmekauiqm;
        eqgyoucqmyyqqagc:
        return false;
        goto qomaksiaaooygwsg;
        wkeoacqqekmaqogk:
        if (!(stripos($this->agent, "\116\x65\x74\x50\x6f\x73\x69\164\x69\x76\x65") !== false)) {
            goto owaomgiwykiiesqs;
        }
        goto iaewosqywiqiqmqs;
        kgeeikakwgkukkke:
        return true;
        goto cyscaaaicmkkqies;
        iaewosqywiqiqmqs:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\116\145\164\x50\x6f\163\x69\164\151\166\145"));
        goto bkmiygiccoagsyck;
        quqkggiycuoeaysg:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto kgeeikakwgkukkke;
        wgmeusuigqsowace:
        owaomgiwykiiesqs:
        goto eqgyoucqmyyqqagc;
        asmgcmegmekauiqm:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\51", "\x3b"], '', $quiguswioiaaywey[0]));
        goto quqkggiycuoeaysg;
        bkmiygiccoagsyck:
        if (!isset($yikciqwsimweauyg[1])) {
            goto caomeykgioesgswg;
        }
        goto ueimcmmgwiommwwg;
        cyscaaaicmkkqies:
        caomeykgioesgswg:
        goto wgmeusuigqsowace;
        qomaksiaaooygwsg:
    }
    
    protected function usswyskeuiskccki()
    {
        goto vkcgsyecgukweyki;
        gosqawkmwoukawsa:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto kqmsyeoyemocoiqs;
        ocegwkgcsegowucu:
        $quiguswioiaaywey = explode("\x2f", $yikciqwsimweauyg[0]);
        goto aiugcqaaymaasikk;
        kkmwiocaqecosykg:
        seekksssaiokokyq:
        goto mqieeoagcesmykuy;
        mqieeoagcesmykuy:
        return false;
        goto asmgcueacgcuokak;
        cmmgaceguouaicok:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto gosqawkmwoukawsa;
        vkcgsyecgukweyki:
        if (!(stripos($this->agent, "\x67\141\x6c\145\157\x6e") !== false)) {
            goto seekksssaiokokyq;
        }
        goto aiawyogcusykcgem;
        aiugcqaaymaasikk:
        if (!isset($quiguswioiaaywey[1])) {
            goto sqkqqasyecqeysww;
        }
        goto cmmgaceguouaicok;
        kqmsyeoyemocoiqs:
        return true;
        goto iiksoosqisyggaks;
        aiawyogcusykcgem:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\147\x61\x6c\x65\x6f\156"));
        goto ocegwkgcsegowucu;
        iiksoosqisyggaks:
        sqkqqasyecqeysww:
        goto kkmwiocaqecosykg;
        asmgcueacgcuokak:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto xwsiauqamwogkwmo;
        owkecwacqesgqcaq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto gggcyumymmmiuaeu;
        imaukawsimqgmauc:
        return true;
        goto ogcasmoaumciscii;
        uceyoakcoqqgkmka:
        $quiguswioiaaywey = explode("\x2f", $yikciqwsimweauyg[0]);
        goto mksgqgcoeeksaiqe;
        gggcyumymmmiuaeu:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto imaukawsimqgmauc;
        xwsiauqamwogkwmo:
        if (!(stripos($this->agent, "\113\157\156\161\165\x65\162\157\x72") !== false)) {
            goto ceguiykycywoocuu;
        }
        goto csskywiguyamicyu;
        ymykisoiiyyqeqim:
        ceguiykycywoocuu:
        goto mcqqawkmqiiyecey;
        mcqqawkmqiiyecey:
        return false;
        goto yasusgwwwekossyy;
        ogcasmoaumciscii:
        siycmwciwoewsooi:
        goto ymykisoiiyyqeqim;
        mksgqgcoeeksaiqe:
        if (!isset($quiguswioiaaywey[1])) {
            goto siycmwciwoewsooi;
        }
        goto owkecwacqesgqcaq;
        csskywiguyamicyu:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\113\x6f\x6e\161\165\x65\x72\x6f\162"));
        goto uceyoakcoqqgkmka;
        yasusgwwwekossyy:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto eqsqecmiugakueqm;
        cmwigsaskaamoema:
        if (!isset($quiguswioiaaywey[1])) {
            goto isygymaiseqgeiau;
        }
        goto ecmeeksmaqyumykg;
        swuqimcsmiwqaaom:
        keqsgkcumkusgygg:
        goto eacseogmmqokmogu;
        yagoyoogqkomucci:
        return true;
        goto kegmcwesswsaamum;
        eqsqecmiugakueqm:
        if (!(stripos($this->agent, "\x69\x63\x61\x62") !== false)) {
            goto keqsgkcumkusgygg;
        }
        goto ymqcqiyawcogwgym;
        eacseogmmqokmogu:
        return false;
        goto oswqmcgsewiscugq;
        ecmeeksmaqyumykg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto iyoukgscwmcoweqa;
        iyoukgscwmcoweqa:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto yagoyoogqkomucci;
        kegmcwesswsaamum:
        isygymaiseqgeiau:
        goto swuqimcsmiwqaaom;
        ymqcqiyawcogwgym:
        $quiguswioiaaywey = explode("\x20", stristr(str_replace("\57", "\40", $this->agent), "\151\x63\x61\142"));
        goto cmwigsaskaamoema;
        oswqmcgsewiscugq:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ycmiqcakcweakeaa;
        koakuemcskwaoesy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6f\x6d\x6e\x69\x77\145\x62"));
        goto cwyqqgwwmesmkiam;
        aesqewckgocaowoi:
        return true;
        goto gsguoieaewagyogs;
        cwyqqgwwmesmkiam:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto ssewsumymwocqyyc;
        qskksaagcgukausc:
        return false;
        goto ocesuggkygmwyoqu;
        ycmiqcakcweakeaa:
        if (!(stripos($this->agent, "\x6f\x6d\x6e\151\167\145\142") !== false)) {
            goto guukcysyaquuekek;
        }
        goto koakuemcskwaoesy;
        qgoyesykieqauwqi:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto aesqewckgocaowoi;
        gsguoieaewagyogs:
        guukcysyaquuekek:
        goto qskksaagcgukausc;
        ssewsumymwocqyyc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qgoyesykieqauwqi;
        ocesuggkygmwyoqu:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto aaqekekaoaqgkiio;
        eiwccayegouiekwk:
        return false;
        goto acasskokyagwkumy;
        sgyogmewgaymcogg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto omagiuciweiemoik;
        ogoiksimykeiuekg:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\120\x68\157\145\156\x69\x78"));
        goto aomicoqgwkaiosso;
        omagiuciweiemoik:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto uemcayqyeweiosqw;
        ksqsiosguewggcya:
        iimagwawmcgmaoga:
        goto eiwccayegouiekwk;
        aomicoqgwkaiosso:
        if (!isset($quiguswioiaaywey[1])) {
            goto amwwumeqoscyamoc;
        }
        goto sgyogmewgaymcogg;
        aaqekekaoaqgkiio:
        if (!(stripos($this->agent, "\120\150\x6f\x65\156\151\170") !== false)) {
            goto iimagwawmcgmaoga;
        }
        goto ogoiksimykeiuekg;
        uemcayqyeweiosqw:
        return true;
        goto wusygegyegamyioq;
        wusygegyegamyioq:
        amwwumeqoscyamoc:
        goto ksqsiosguewggcya;
        acasskokyagwkumy:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto iuumwocuuoyceaks;
        ssoogecumeaeekcs:
        if (!isset($quiguswioiaaywey[1])) {
            goto osoyyysskuckoocc;
        }
        goto ukeaeogwsoackkas;
        iuumwocuuoyceaks:
        if (!(stripos($this->agent, "\x46\151\162\x65\142\x69\162\x64") !== false)) {
            goto kuimgaokwkqogaqk;
        }
        goto oewqywyeaueuiyes;
        ukeaeogwsoackkas:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto auaaassweykwwsge;
        ouseosmqaaykkaaw:
        osoyyysskuckoocc:
        goto mimmumuekmyyyaug;
        awyuyuuiayqoekkc:
        return false;
        goto eoemqkmecwqsagce;
        mimmumuekmyyyaug:
        kuimgaokwkqogaqk:
        goto awyuyuuiayqoekkc;
        auaaassweykwwsge:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto sqgomkiuekmaykyw;
        oewqywyeaueuiyes:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\x46\x69\162\145\142\x69\162\x64"));
        goto ssoogecumeaeekcs;
        sqgomkiuekmaykyw:
        return true;
        goto ouseosmqaaykkaaw;
        eoemqkmecwqsagce:
    }
    
    protected function aweyeayscomouegw()
    {
        goto qwmuiakauycoowya;
        aoasogsaqgewacum:
        ykceeqicyiqgssye:
        goto kyisocwmmwaiwayk;
        icmgwgoywmewyeii:
        qkymmwmmiemiauyg:
        goto mocwcekscogegcwa;
        aqewaqaseausoewg:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto aegamiyqqcwuqcyk;
        aegamiyqqcwuqcyk:
        return true;
        goto ecsuogeauwascies;
        mogugiawmaoukmak:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto ccokywiouwwmiwse;
        ccokywiouwwmiwse:
        return true;
        goto ysmckuskoqmsyaca;
        ysmckuskoqmsyaca:
        kigsuwkmaacmwgsq:
        goto qgeeiygkaaeqeaua;
        kyisocwmmwaiwayk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto mogugiawmaoukmak;
        csgyceiomssoweek:
        if (stripos($this->agent, "\x46\151\162\145\x66\157\x78") === false && preg_match("\x2f\x4e\145\x74\163\143\141\160\x65\x36\x3f\x5c\x2f\x28\x5b\136\40\x5d\x2a\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto ykceeqicyiqgssye;
        }
        goto ycaskcwiywemgmay;
        ycaskcwiywemgmay:
        goto kigsuwkmaacmwgsq;
        goto icmgwgoywmewyeii;
        ecsuogeauwascies:
        goto kigsuwkmaacmwgsq;
        goto aoasogsaqgewacum;
        mocwcekscogegcwa:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aqewaqaseausoewg;
        qwmuiakauycoowya:
        if (stripos($this->agent, "\106\151\162\145\x66\157\x78") !== false && preg_match("\x2f\116\141\166\x69\147\x61\x74\x6f\x72\134\x2f\50\133\x5e\40\135\52\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qkymmwmmiemiauyg;
        }
        goto csgyceiomssoweek;
        qgeeiygkaaeqeaua:
        return false;
        goto qkmiokuccayckwiy;
        qkmiokuccayckwiy:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto yuaommqaoiseeice;
        yuaommqaoiseeice:
        if (!(stripos($this->agent, "\115\157\172\x69\x6c\x6c\141") !== false && preg_match("\57\x53\150\x69\162\145\x74\x6f\153\x6f\134\57\x28\x5b\136\40\135\x2a\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto mgqmswesaekqqwiu;
        }
        goto cciuyoceqiauqsic;
        cciuyoceqiauqsic:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto oekaqqseuemcgeqe;
        ikcmeaikkuekumye:
        return true;
        goto uuskeoeuumiigues;
        oekaqqseuemcgeqe:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto ikcmeaikkuekumye;
        weekemioaaygmggw:
        return false;
        goto ycgokycmgosuamok;
        uuskeoeuumiigues:
        mgqmswesaekqqwiu:
        goto weekemioaaygmggw;
        ycgokycmgosuamok:
    }
    
    protected function noeygigqkeciickm()
    {
        goto meamoqcwwsqiyoqc;
        meamoqcwwsqiyoqc:
        if (!(stripos($this->agent, "\x4d\157\172\x69\154\x6c\141") !== false && preg_match("\x2f\x49\x63\145\x43\141\164\134\x2f\x28\x5b\x5e\x20\x5d\52\51\x2f\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto mqweugciiyyukymg;
        }
        goto wsmwmwswqaoeaquq;
        wsmwmwswqaoeaquq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aeecqkykiqyuqmyg;
        aeecqkykiqyuqmyg:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto gmcieuucmgkcoyii;
        gmcieuucmgkcoyii:
        return true;
        goto waqwkysqcskykuum;
        yuqemymykuasskoy:
        return false;
        goto mmeumymqusiaiugs;
        waqwkysqcskykuum:
        mqweugciiyyukymg:
        goto yuqemymykuasskoy;
        mmeumymqusiaiugs:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto qgocscwqkuyemmcw;
        qgocscwqkuyemmcw:
        if (!preg_match("\57\x4e\x6f\153\x69\141\50\x5b\x5e\x5c\x2f\x5d\53\51\134\57\x28\x5b\136\x20\123\x50\x5d\x2b\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto akqgwckwiiugwiay;
        }
        goto oiuiwkywiekacygs;
        mqqqqeiimsgyacaw:
        kscocsoaygkcaocq:
        goto iaumckssomaweakk;
        iaumckssomaweakk:
        $this->eywockmuswoykooc(true);
        goto uqsgmacmweuuwqgy;
        qmssaeiomssoycas:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto wamigcygcsucigmi;
        uqsgmacmweuuwqgy:
        return true;
        goto qogciqauggmmigia;
        swusuwwawauqqqae:
        if (stripos($this->agent, "\123\145\162\151\145\x73\66\x30") !== false || strpos($this->agent, "\x53\66\60") !== false) {
            goto qcqqieuakcakkwem;
        }
        goto qmssaeiomssoycas;
        qogciqauggmmigia:
        akqgwckwiiugwiay:
        goto semoayicskccgemw;
        qmcmakumyemsuoaa:
        qcqqieuakcakkwem:
        goto kgwewosygiuoiigk;
        kgwewosygiuoiigk:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto mqqqqeiimsgyacaw;
        semoayicskccgemw:
        return false;
        goto ouigaoeeokmqaqoe;
        wamigcygcsucigmi:
        goto kscocsoaygkcaocq;
        goto qmcmakumyemsuoaa;
        oiuiwkywiekacygs:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto swusuwwawauqqqae;
        ouigaoeeokmqaqoe:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto euoqiuygwwssoqou;
        koomcmawyuomqmii:
        return true;
        goto smeqeomcqisgssau;
        wqmeugomsqagioak:
        smyugaykeesyuakw:
        goto iwmsiaqgccqqkgcc;
        rkaswcmccyqqioqs:
        goto myycwmecoyeekeus;
        goto yseakuykcykcomwg;
        gsiigogemgmesycs:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto oqqooygakaagaiqw;
        qaqckwcumcykqcay:
        goto myycwmecoyeekeus;
        goto giiusoakskiciase;
        ywimuqyysmaggeum:
        return false;
        goto iaksmguwicewykey;
        euoqiuygwwssoqou:
        if (!(stripos($this->agent, "\163\141\146\x61\162\x69") === false)) {
            goto uqemmmykkceucwum;
        }
        goto yseikqceqguugaee;
        wcosggqmokuwgomy:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto koomcmawyuomqmii;
        cwoaoecuqyiccwcw:
        goto myycwmecoyeekeus;
        goto wqmeugomsqagioak;
        smeqeomcqisgssau:
        myycwmecoyeekeus:
        goto osioeeokiykiemau;
        osioeeokiykiemau:
        uqemmmykkceucwum:
        goto ywimuqyysmaggeum;
        uioaeuugwsakiykw:
        if (preg_match("\57\120\141\154\145\155\157\x6f\x6e\x28\133\x30\55\71\141\55\172\101\55\132\134\56\x5d\x2b\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto ewoywsgmimyigwai;
        }
        goto koiuecgmeyuiwqkk;
        oakyyiqquqsccuks:
        return true;
        goto cwoaoecuqyiccwcw;
        yseikqceqguugaee:
        if (preg_match("\57\x50\x61\154\x65\x6d\x6f\x6f\x6e\133\134\x2f\x20\134\50\x5d\50\133\x5e\40\73\x5c\x29\135\53\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto aaymugikaeaqsaos;
        }
        goto uioaeuugwsakiykw;
        oqqooygakaagaiqw:
        return true;
        goto qaqckwcumcykqcay;
        mkyoiqgumggcsakq:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto oakyyiqquqsccuks;
        yseakuykcykcomwg:
        aaymugikaeaqsaos:
        goto uiskkgkcyssegigy;
        uiskkgkcyssegigy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto gsiigogemgmesycs;
        giiusoakskiciase:
        ewoywsgmimyigwai:
        goto wkeeueuiysyiqaoq;
        koiuecgmeyuiwqkk:
        if (preg_match("\57\120\x61\x6c\145\155\157\157\x6e\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto smyugaykeesyuakw;
        }
        goto rkaswcmccyqqioqs;
        wkeeueuiysyiqaoq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto mkyoiqgumggcsakq;
        iwmsiaqgccqqkgcc:
        $this->aasasueowyemuyoc('');
        goto wcosggqmokuwgomy;
        iaksmguwicewykey:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto yggwmccmmiemueou;
        ywgwuqyisimkacqe:
        goto wguwcgascccyeasu;
        goto iioueceaesegmgyi;
        yggwmccmmiemueou:
        if (!preg_match("\57\125\x43\x20\x3f\x42\162\157\167\x73\145\162\134\57\x3f\x28\x5b\134\x64\134\56\135\53\51\57", $this->agent, $meyiiwcswqmuggyg)) {
            goto aomoesqmwqcyueoa;
        }
        goto cqouacqmcegmykuu;
        yoqwqkuekiauqsuc:
        aomoesqmwqcyueoa:
        goto wousqisikkiooewi;
        uwcawmmgcaecgyqm:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto seyoowocwsqsekqi;
        seyoowocwsqsekqi:
        return true;
        goto yoqwqkuekiauqsuc;
        cqouacqmcegmykuu:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto qegwssscaomyoekg;
        }
        goto imimwegqkykucuia;
        jimwweuekesuemiy:
        $this->icigyueiiwsukmsu(true);
        goto ywgwuqyisimkacqe;
        iksugmewgigsiaec:
        qegwssscaomyoekg:
        goto ewqooaykuauegwio;
        ewqooaykuauegwio:
        if (stripos($this->agent, "\115\157\x62\x69\x6c\145") !== false) {
            goto yysucuowuoiskkui;
        }
        goto jimwweuekesuemiy;
        wousqisikkiooewi:
        return false;
        goto wwamkekgkkiogiiu;
        gouiskmmqywoscgm:
        wguwcgascccyeasu:
        goto uwcawmmgcaecgyqm;
        iioueceaesegmgyi:
        yysucuowuoiskkui:
        goto omygyywamgusigko;
        omygyywamgusigko:
        $this->eywockmuswoykooc(true);
        goto gouiskmmqywoscgm;
        imimwegqkykucuia:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iksugmewgigsiaec;
        wwamkekgkkiogiiu:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto mmomogyaswcsgwwy;
        aqcucyeikgmemsoq:
        goto gaqigeacswyyikkk;
        goto wgsqeuaooemcuqqu;
        iammommmgkimyyaa:
        coyskeyoikeaqoek:
        goto cwycmkkoscmgcecg;
        cwycmkkoscmgcecg:
        return true;
        goto kiqiskyesywkwkos;
        wcaiuquuswsqacgg:
        
        if (!(stripos($this->agent, "\101\x6e\x64\162\157\x69\x64") !== false || stripos($this->agent, "\151\120\x68\157\156\145") !== false)) {
            goto akkuysmcasqukkug;
        }
        goto gqaiguosioisccwm;
        aoosuewasqmmyqoi:
        baqgcseewusocmom:
        goto kwuakeywaocokwig;
        qyogimcocyqgyyee:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto aksacseyuwyiseay;
        aksacseyuwyiseay:
        return true;
        goto sgaqioqcecwgyikg;
        kuegskyiyugiuosa:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto uaigiceqkuiguogo;
        wgiwseywikgwumwe:
        goto sgwiageicumuqwke;
        goto rkoyiagmcaycmwmg;
        wgsqeuaooemcuqqu:
        yqyyssciomuwwisa:
        goto wwqoywoqcyikouca;
        rkoyiagmcaycmwmg:
        cskgiyqesqqawuwo:
        goto egqqigmomgaaamqc;
        wggeuckgywqucase:
        goto baqgcseewusocmom;
        goto seggycoceaokwcsa;
        wwqoywoqcyikouca:
        $this->aasasueowyemuyoc('');
        goto qyogimcocyqgyyee;
        gokkyeisqkoccqis:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto ymmqwacaoayoyiei;
        yewmigswwuewyqki:
        goto gaqigeacswyyikkk;
        goto guwmgkcgaoysewyw;
        kiqiskyesywkwkos:
        amcioyyyuiigekuo:
        goto ksogiaquuskeygaq;
        agiiusmyqqkgqymk:
        sgwiageicumuqwke:
        goto iammommmgkimyyaa;
        wowiaueqaaqckwqq:
        return true;
        goto yewmigswwuewyqki;
        kaycawgquiieeaiw:
        if (preg_match("\x2f\106\x69\162\x65\146\x6f\x78\x28\x5b\60\x2d\71\141\55\172\x41\x2d\132\x5c\x2e\x5d\x2b\x29\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto sqsgeccoawoeukws;
        }
        goto ngeuswkcwioygkku;
        amksqwmicsmyocyw:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wcaiuquuswsqacgg;
        sgaqioqcecwgyikg:
        gaqigeacswyyikkk:
        goto usaooeqiaewcmyog;
        escuksewiugekayq:
        kmwseockoawqkoao:
        goto wgcmsygycukiqmui;
        seggycoceaokwcsa:
        miwaaaueiacyqequ:
        goto iqmgswgoooqkkigo;
        qwwscygkwwsiocok:
        $this->icigyueiiwsukmsu(true);
        goto wggeuckgywqucase;
        ymmqwacaoayoyiei:
        return true;
        goto aqcucyeikgmemsoq;
        kmagwqsioegswiqk:
        usmieesmayeskkmk:
        goto kuegskyiyugiuosa;
        iqmgswgoooqkkigo:
        $this->eywockmuswoykooc(true);
        goto aoosuewasqmmyqoi;
        ngeuswkcwioygkku:
        if (preg_match("\x2f\106\151\162\145\146\157\x78\x24\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto yqyyssciomuwwisa;
        }
        goto oymsgiwgeiqguuyy;
        ygoomqwcsggeiuge:
        qagasowcequukwoc:
        goto qkqwgsoymmqsqeim;
        usaooeqiaewcmyog:
        goto amcioyyyuiigekuo;
        goto kmagwqsioegswiqk;
        mmomogyaswcsgwwy:
        if (stripos($this->agent, "\163\x61\146\141\x72\151") === false) {
            goto kmwseockoawqkoao;
        }
        goto qwyameqoseiywwus;
        guwmgkcgaoysewyw:
        sqsgeccoawoeukws:
        goto ciimuiiegyeaggya;
        ksogiaquuskeygaq:
        return false;
        goto aygkuykcicgceciq;
        egqqigmomgaaamqc:
        $this->eywockmuswoykooc(true);
        goto agiiusmyqqkgqymk;
        ikiegwiqykqwuykk:
        if (stripos($this->agent, "\x4d\157\142\151\x6c\145") !== false || stripos($this->agent, "\x54\x61\142\154\x65\164") !== false) {
            goto cskgiyqesqqawuwo;
        }
        goto qmycieyiysuesagy;
        ciimuiiegyeaggya:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto gokkyeisqkoccqis;
        qmycieyiysuesagy:
        $this->icigyueiiwsukmsu(true);
        goto wgiwseywikgwumwe;
        wwmqgecmsimuecam:
        goto amcioyyyuiigekuo;
        goto escuksewiugekayq;
        kwuakeywaocokwig:
        akkuysmcasqukkug:
        goto wowiaueqaaqckwqq;
        gseqciagemceawam:
        
        if (!(stripos($this->agent, "\101\156\144\x72\x6f\151\x64") !== false || stripos($this->agent, "\151\120\150\157\x6e\x65") !== false)) {
            goto coyskeyoikeaqoek;
        }
        goto ikiegwiqykqwuykk;
        uaigiceqkuiguogo:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto gseqciagemceawam;
        wgcmsygycukiqmui:
        if (preg_match("\x2f\x46\x69\162\145\146\x6f\x78\133\x5c\57\x20\134\50\135\50\133\136\40\73\134\51\x5d\x2b\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qagasowcequukwoc;
        }
        goto kaycawgquiieeaiw;
        qwyameqoseiywwus:
        if (preg_match("\x2f\x46\x78\x69\117\123\x5b\134\57\x20\x5c\50\x5d\x28\x5b\x5e\x20\73\134\51\x5d\x2b\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto usmieesmayeskkmk;
        }
        goto wwmqgecmsimuecam;
        qkqwgsoymmqsqeim:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto amksqwmicsmyocyw;
        gqaiguosioisccwm:
        if (stripos($this->agent, "\115\157\x62\x69\x6c\x65") !== false || stripos($this->agent, "\x54\141\142\x6c\145\164") !== false) {
            goto miwaaaueiacyqequ;
        }
        goto qwwscygkwwsiocok;
        oymsgiwgeiqguuyy:
        goto gaqigeacswyyikkk;
        goto ygoomqwcsggeiuge;
        aygkuykcicgceciq:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto yqggmewmakemgkui;
        coosgwiiekamiyug:
        return true;
        goto mgqockcuascmkosg;
        qoguisoimaueiaoo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\143\x65\167\x65\141\x73\145\154"));
        goto eowkmiqqmqyeayci;
        qqaeaoygygacuuos:
        return false;
        goto wasmuqumoqqcmgys;
        mgqockcuascmkosg:
        kiocmmsiuwcuemyg:
        goto qiocyqceaiyiakii;
        igsmwamoyswayqiy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto gyomccegicuoyguk;
        gyomccegicuoyguk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mquksyyawiwsakwy;
        qiocyqceaiyiakii:
        cguuomiqwuicsgwa:
        goto qqaeaoygygacuuos;
        yqggmewmakemgkui:
        if (!(stripos($this->agent, "\111\143\x65\x77\x65\141\x73\x65\x6c") !== false)) {
            goto cguuomiqwuicsgwa;
        }
        goto qoguisoimaueiaoo;
        mquksyyawiwsakwy:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto coosgwiiekamiyug;
        eowkmiqqmqyeayci:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kiocmmsiuwcuemyg;
        }
        goto igsmwamoyswayqiy;
        wasmuqumoqqcmgys:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto skkmiiyukuqmiimc;
        wmssuwyesuyeiows:
        $this->aasasueowyemuyoc(str_replace("\x72\166\72", '', $quiguswioiaaywey[0]));
        goto kwkcmwgyiwyacywi;
        uogoykaeoysgmism:
        if (stripos($this->agent, "\x6d\x6f\172\151\154\154\141") !== false && preg_match("\57\x72\x76\x3a\133\60\55\x39\135\134\56\x5b\x30\55\71\x5d\x2f\x69", $this->agent) && stripos($this->agent, "\156\x65\x74\163\143\141\x70\145") === false) {
            goto agsoqikgikksqkom;
        }
        goto eoewsuaewaeueaks;
        eswswyigkwqaaasy:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto mcukkaquiosmsguy;
        eaawsaueyyoiqoao:
        goto mokuaeasioyuisqs;
        goto eyimkecocwsicyge;
        gwigmqemwuqewiae:
        return true;
        goto kkweuygueeaqsksg;
        kwkcmwgyiwyacywi:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto siyeyakoauowwose;
        skkmiiyukuqmiimc:
        if (stripos($this->agent, "\155\x6f\x7a\x69\154\154\x61") !== false && preg_match("\x2f\x72\x76\72\x5b\x30\x2d\71\x5d\x2e\133\x30\55\x39\135\x5b\x61\x2d\x62\135\77\x2f\151", $this->agent) && stripos($this->agent, "\156\145\164\163\143\141\x70\x65") === false) {
            goto umacsiiqmwygcycu;
        }
        goto uogoykaeoysgmism;
        eoeoqacqgmumwcuk:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\x76\x3a"));
        goto wmssuwyesuyeiows;
        eyimkecocwsicyge:
        iscqcsqyqkmkgkag:
        goto ooswoacocwcgoagc;
        uusaeowyacskgumg:
        agsoqikgikksqkom:
        goto eoeoqacqgmumwcuk;
        usaokwsyegousimg:
        return true;
        goto ckgoiwueekyamwcu;
        ameeyqiguwmykwai:
        preg_match("\x2f\162\166\x3a\x5b\x30\x2d\x39\x5d\56\x5b\x30\55\71\135\133\141\x2d\x62\135\x3f\57\151", $this->agent, $quiguswioiaaywey);
        goto eswswyigkwqaaasy;
        kyqewaqymicucwuc:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto gwigmqemwuqewiae;
        eoewsuaewaeueaks:
        if (stripos($this->agent, "\155\157\172\151\x6c\154\141") !== false && preg_match("\57\155\x6f\x7a\x69\x6c\x6c\141\134\x2f\50\x5b\136\40\135\x2a\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\156\x65\x74\163\x63\x61\160\x65") === false) {
            goto iscqcsqyqkmkgkag;
        }
        goto qscgsguyqggkagoe;
        ckgoiwueekyamwcu:
        goto mokuaeasioyuisqs;
        goto uusaeowyacskgumg;
        siyeyakoauowwose:
        return true;
        goto eaawsaueyyoiqoao;
        mcukkaquiosmsguy:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto usaokwsyegousimg;
        gmeiquwcawwmowwm:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\162\166\72"));
        goto ameeyqiguwmykwai;
        iyqmmwymomwqiqaw:
        return false;
        goto yaowkqscayqikmck;
        kkweuygueeaqsksg:
        mokuaeasioyuisqs:
        goto iyqmmwymomwqiqaw;
        qscgsguyqggkagoe:
        goto mokuaeasioyuisqs;
        goto awceesgmgquwakuu;
        ooswoacocwcgoagc:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto kyqewaqymicucwuc;
        awceesgmgquwakuu:
        umacsiiqmwygcycu:
        goto gmeiquwcawwmowwm;
        yaowkqscayqikmck:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto uciuogooymiyqyao;
        uciuogooymiyqyao:
        if (!(stripos($this->agent, "\154\x79\x6e\x78") !== false)) {
            goto uieyawsyauemyqgy;
        }
        goto msmouyoaqcwsasuw;
        qewckkocqykmeywg:
        return true;
        goto ugsumemcqucesssg;
        oayqqymykwwugkwe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wwwqiimkicqiuwui;
        gyoiekqiqwwquomc:
        return false;
        goto cqayoeygyqqamquk;
        wwwqiimkicqiuwui:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto qewckkocqykmeywg;
        ugsumemcqucesssg:
        uieyawsyauemyqgy:
        goto gyoiekqiqwwquomc;
        msmouyoaqcwsasuw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4c\171\x6e\170"));
        goto ymqwkscegcogqqwy;
        ymqwkscegcogqqwy:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto oayqqymykwwugkwe;
        cqayoeygyqqamquk:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto seswyksiukyeqkqc;
        ocoaeuqqauqewyig:
        cmowiicqgqiakqem:
        goto mksgcawyikcceiqa;
        eiiemassiceeqmeq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cmowiicqgqiakqem;
        }
        goto sgwucycigkyieoea;
        iieeiugaeeqyaqok:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\101\x6d\141\171\141"));
        goto eiiemassiceeqmeq;
        mksgcawyikcceiqa:
        qsqskaukgysseokg:
        goto gkaykeoacgugeumu;
        seswyksiukyeqkqc:
        if (!(stripos($this->agent, "\x61\155\141\x79\x61") !== false)) {
            goto qsqskaukgysseokg;
        }
        goto iieeiugaeeqyaqok;
        ksswuscweggkeiko:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qsoukmmoqeuqsoee;
        ukiiyimwmgiqisca:
        return true;
        goto ocoaeuqqauqewyig;
        sgwucycigkyieoea:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ksswuscweggkeiko;
        gkaykeoacgugeumu:
        return false;
        goto uuqskowyckcgagkc;
        qsoukmmoqeuqsoee:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto ukiiyimwmgiqisca;
        uuqskowyckcgagkc:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto eiqmqaiyewsgyois;
        scooeumumiwmgowm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eyowigugugmmkeiw;
        kewymgqeemiuewca:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto scooeumumiwmgowm;
        eyowigugugmmkeiw:
        yksmaaesmwecwoak:
        goto yieeukyoaeioqock;
        yieeukyoaeioqock:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto jawaweyeoaoueooa;
        wguukissuqyuqeku:
        goto yksmaaesmwecwoak;
        goto ggwywcekieoyeuya;
        ggwywcekieoyeuya:
        wwyeoccuqgcgcuuc:
        goto kewymgqeemiuewca;
        ccsysoygswagacce:
        return false;
        goto kgecmyesgkacyyqm;
        eiqmqaiyewsgyois:
        if (!(stripos($this->agent, "\x53\x61\146\141\162\x69") !== false && stripos($this->agent, "\151\120\x68\x6f\x6e\145") === false && stripos($this->agent, "\151\120\157\x64") === false)) {
            goto sgsaqgwgakicwckk;
        }
        goto wekysuykykiweqms;
        wayscwykqcwqgqyi:
        sgsaqgwgakicwckk:
        goto ccsysoygswagacce;
        jawaweyeoaoueooa:
        return true;
        goto wayscwykqcwqgqyi;
        wekysuykykiweqms:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\x65\x72\x73\x69\x6f\x6e"));
        goto kacseggomkeowiqm;
        iaiekaygcqmocmee:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wguukissuqyuqeku;
        kacseggomkeowiqm:
        if (isset($yikciqwsimweauyg[1])) {
            goto wwyeoccuqgcgcuuc;
        }
        goto iaiekaygcqmocmee;
        kgecmyesgkacyyqm:
    }
    protected function yswggmyigakcackc()
    {
        goto iqymaeimsmwkkkie;
        yiamqaqsueaiqwuq:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto mceeomsqguaacseg;
        essqemwiweimukwe:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\x61\x6d\x73\165\156\147\102\162\x6f\x77\x73\x65\162"));
        goto uuqaakyqgqwiiwom;
        cwcuamqicskkmuyg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qugekewwywkuiqyk;
        mceeomsqguaacseg:
        goto qkgkkwcagegkwkwi;
        goto mkumickumqmmkiqc;
        moyywqqiasmyoscc:
        oioqgywuoiaisyuu:
        goto aiyqwwuiayikques;
        keyciqmuisymkgcw:
        return true;
        goto moyywqqiasmyoscc;
        iqymaeimsmwkkkie:
        if (!(stripos($this->agent, "\x53\141\155\x73\165\156\x67\102\x72\x6f\x77\x73\x65\162") !== false)) {
            goto oioqgywuoiaisyuu;
        }
        goto essqemwiweimukwe;
        aiyqwwuiayikques:
        return false;
        goto swgqwkyuwoqeyeyu;
        qugekewwywkuiqyk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qwmyieguwoysqegw;
        uuqaakyqgqwiiwom:
        if (isset($yikciqwsimweauyg[1])) {
            goto kycikakmkwkieqwk;
        }
        goto yiamqaqsueaiqwuq;
        mkumickumqmmkiqc:
        kycikakmkwkieqwk:
        goto cwcuamqicskkmuyg;
        qwmyieguwoysqegw:
        qkgkkwcagegkwkwi:
        goto gsyquwaygesygkiq;
        gsyquwaygesygkiq:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto keyciqmuisymkgcw;
        swgqwkyuwoqeyeyu:
    }
    protected function uiwkymoksesuumwe()
    {
        goto aukkqqimoumiiccy;
        ascewisaoqauaymk:
        if (isset($yikciqwsimweauyg[1])) {
            goto ggqwsgmqqyaicosm;
        }
        goto kcckgokmwuywmaiw;
        aukkqqimoumiiccy:
        if (!(stripos($this->agent, "\123\x69\154\153") !== false)) {
            goto mcqygaykwaaseack;
        }
        goto raigmgqaksaqoosc;
        iwoquisgaegiocss:
        goto iieymwaigukwymsc;
        goto yccweyyksqycwuqi;
        raigmgqaksaqoosc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\x69\x6c\x6b"));
        goto ascewisaoqauaymk;
        kakgceiyakaueuww:
        return false;
        goto uqieceoogswuggos;
        qoamoegiiwismakk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wqswcaeeyeaqieom;
        eiissuweooqsaauy:
        mcqygaykwaaseack:
        goto kakgceiyakaueuww;
        yuyccgsguyaaygmu:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto smagqkegqiooysya;
        kcckgokmwuywmaiw:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto iwoquisgaegiocss;
        oakguomioocmeiia:
        iieymwaigukwymsc:
        goto yuyccgsguyaaygmu;
        wqswcaeeyeaqieom:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oakguomioocmeiia;
        yccweyyksqycwuqi:
        ggqwsgmqqyaicosm:
        goto qoamoegiiwismakk;
        smagqkegqiooysya:
        return true;
        goto eiissuweooqsaauy;
        uqieceoogswuggos:
    }
    protected function cgqcukygysieeqko()
    {
        goto eusmcuqiciwcooss;
        gamusuoqieekieka:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\146\x72\141\x6d\x65\x6c\x79"));
        goto dwyqyusgqwqwomqk;
        qskoquwmkkgkkmuy:
        wuoaeksukwwaycoi:
        goto qyskykugeiqkauce;
        wiamyucsaoosmoei:
        goto yegcwkkemkycyuua;
        goto iiwmmqqaqckwwiqe;
        dwyqyusgqwqwomqk:
        if (isset($yikciqwsimweauyg[1])) {
            goto mmuomyiooicyqscg;
        }
        goto emaeckumgkmgcaew;
        emaeckumgkmgcaew:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wiamyucsaoosmoei;
        eusmcuqiciwcooss:
        if (!(stripos($this->agent, "\x49\146\x72\x61\x6d\x65\x6c\171") !== false)) {
            goto wuoaeksukwwaycoi;
        }
        goto gamusuoqieekieka;
        qyskykugeiqkauce:
        return false;
        goto cguckckouuwacmow;
        mkywwqusckeeisiy:
        return true;
        goto qskoquwmkkgkkmuy;
        cucsooyoayssmcas:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto mkywwqusckeeisiy;
        iiwmmqqaqckwwiqe:
        mmuomyiooicyqscg:
        goto oqqscigyquseosya;
        akqsaiecouuqacks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ysoiwegyoqymuuek;
        ysoiwegyoqymuuek:
        yegcwkkemkycyuua:
        goto cucsooyoayssmcas;
        oqqscigyquseosya:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto akqsaiecouuqacks;
        cguckckouuwacmow:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto usaseckaaaugcygu;
        iywyeuaaoaeymmag:
        wacgcmsgismsomma:
        goto wsiggqyeiueeyqyu;
        osygawsacakgggko:
        return true;
        goto iwwouqosmwummgsi;
        wsiggqyeiueeyqyu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ikcsgymqsagymgco;
        usaseckaaaugcygu:
        if (!(stripos($this->agent, "\103\157\x63\157\x61\x52\x65\163\164\x43\x6c\x69\x65\156\164") !== false)) {
            goto ayqocaaesmkygque;
        }
        goto muouqwckwywsgiwg;
        auaukkuskuciowkq:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto osygawsacakgggko;
        iwwouqosmwummgsi:
        ayqocaaesmkygque:
        goto wygcwcywyeosuemq;
        ikcsgymqsagymgco:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eeqsuowcmyeyuoqw;
        muouqwckwywsgiwg:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x43\x6f\143\157\x61\x52\x65\x73\164\x43\x6c\151\145\x6e\164"));
        goto qquimmcqqiyegcym;
        wygcwcywyeosuemq:
        return false;
        goto ymcqcaygueguiuig;
        ouaokeyacuscccyu:
        goto ckguemuwukmeycag;
        goto iywyeuaaoaeymmag;
        qquimmcqqiyegcym:
        if (isset($yikciqwsimweauyg[1])) {
            goto wacgcmsgismsomma;
        }
        goto qkeuasieckwuqseq;
        qkeuasieckwuqseq:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ouaokeyacuscccyu;
        eeqsuowcmyeyuoqw:
        ckguemuwukmeycag:
        goto auaukkuskuciowkq;
        ymcqcaygueguiuig:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto wwiysyawwqeuikcc;
        sqwwkouiqayeqeyo:
        $this->oqgqmcogeugkakss(true);
        goto oqoyyooooyegowuk;
        soqmkkwmmkqiweau:
        $this->aasmeayouwmacaow(true);
        goto sqwwkouiqayeqeyo;
        oqoyyooooyegowuk:
        return true;
        goto kggwwgeqkgwyoseq;
        kuqeksgikkymkyeo:
        return false;
        goto aogimqgcygkugqoc;
        kggwwgeqkgwyoseq:
        eiwuwemqmigskwoe:
        goto kuqeksgikkymkyeo;
        wwiysyawwqeuikcc:
        if (!stristr($this->agent, "\106\141\x63\x65\142\x6f\x6f\x6b\105\170\x74\x65\162\x6e\x61\x6c\x48\x69\x74")) {
            goto eiwuwemqmigskwoe;
        }
        goto soqmkkwmmkqiweau;
        aogimqgcygkugqoc:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto gkkogauyaimaaoky;
        akocagcmqwymsqqw:
        $this->oqgqmcogeugkakss(true);
        goto ckyyyqokcocsmium;
        gkkogauyaimaaoky:
        if (!stristr($this->agent, "\x46\x42\x49\117\x53")) {
            goto kwmkgoegswsseyia;
        }
        goto akocagcmqwymsqqw;
        ckyyyqokcocsmium:
        return true;
        goto qioeweaouoiyoayy;
        ssyeoucmcqaewkws:
        return false;
        goto gukuouumaoiiugiw;
        qioeweaouoiyoayy:
        kwmkgoegswsseyia:
        goto ssyeoucmcqaewkws;
        gukuouumaoiiugiw:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto soyeimgmemqugquc;
        cwgiecqggoksyuko:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kekiekeeqkowaiga;
        soyeimgmemqugquc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\126\145\162\163\x69\157\x6e"));
        goto gosqmqqycwquosse;
        kekiekeeqkowaiga:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wscoawgsgqekweuq;
        gosqmqqycwquosse:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ayyeoeyyawiuiukq;
        }
        goto cwgiecqggoksyuko;
        wscoawgsgqekweuq:
        return true;
        goto ysuyamauyegkceea;
        wqmmaiwyoumwmiyi:
        return false;
        goto oaoaskeocoucoaes;
        ysuyamauyegkceea:
        ayyeoeyyawiuiukq:
        goto wqmmaiwyoumwmiyi;
        oaoaskeocoucoaes:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto eqocwcasskyqeauu;
        uiseoyicaoyaokum:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto oyswaymeoiouuaoo;
        eqocwcasskyqeauu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x43\x72\x69\x4f\123"));
        goto kkiiykemaoeswsay;
        yuokckkqcuumcmua:
        iuugeqgkacqmuais:
        goto imumueocakucecam;
        gqsmmaqkuciiwwki:
        return true;
        goto yuokckkqcuumcmua;
        kkiiykemaoeswsay:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iuugeqgkacqmuais;
        }
        goto uiseoyicaoyaokum;
        oyswaymeoiouuaoo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ycagakkcsskiqweu;
        imumueocakucecam:
        return false;
        goto ssciauiqmswaugss;
        ycagakkcsskiqweu:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto gqsmmaqkuciiwwki;
        ssciauiqmswaugss:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto gmiywscmoiqcceks;
        gmiywscmoiqcceks:
        if (!(stripos($this->agent, "\x69\120\150\x6f\x6e\x65") !== false)) {
            goto aykkiwwmmckueiak;
        }
        goto ikumyeymcsyyuauw;
        wouosmamsmggekic:
        $this->eywockmuswoykooc(true);
        goto yisqaaicegsokeuk;
        keuamggsqkcwyoqi:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto uywiwaiokksgwuqm;
        ykqeyymweawywsia:
        aykkiwwmmckueiak:
        goto awoyakoygoouaqgi;
        awoyakoygoouaqgi:
        return false;
        goto yyagogoiskcuomuq;
        ikumyeymcsyyuauw:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto keuamggsqkcwyoqi;
        messwieuimiowsag:
        $this->iqsiguacookiqwcs();
        goto gousoguwcwieyseq;
        yisqaaicegsokeuk:
        return true;
        goto ykqeyymweawywsia;
        gousoguwcwieyseq:
        $this->ssquiwqwwcgcqiic();
        goto wouosmamsmggekic;
        uywiwaiokksgwuqm:
        $this->uewoqoqkekmsyoeo();
        goto messwieuimiowsag;
        yyagogoiskcuomuq:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto aooeicywwyscawue;
        syosmkmiyacocysi:
        return false;
        goto soiuksqqwmsqwyeq;
        wugyaiqayoamwacg:
        $this->icigyueiiwsukmsu(true);
        goto secssyuygoycmiqa;
        qwscyqgokmkeqwuq:
        cwmsekismgywawai:
        goto syosmkmiyacocysi;
        ismcyiwkmqaaygge:
        $this->ssquiwqwwcgcqiic();
        goto wugyaiqayoamwacg;
        aooeicywwyscawue:
        if (!(stripos($this->agent, "\151\120\x61\144") !== false)) {
            goto cwmsekismgywawai;
        }
        goto qemqoaymwywkewmy;
        emsgawiqsesiiccg:
        $this->uewoqoqkekmsyoeo();
        goto eekkyoakqmykcqec;
        eekkyoakqmykcqec:
        $this->iqsiguacookiqwcs();
        goto ismcyiwkmqaaygge;
        lwaoqwcmyiqkkouw:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto emsgawiqsesiiccg;
        secssyuygoycmiqa:
        return true;
        goto qwscyqgokmkeqwuq;
        qemqoaymwywkewmy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto lwaoqwcmyiqkkouw;
        soiuksqqwmsqwyeq:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto sokqsksiecasgugs;
        syookwiaqwmsaoem:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto usscqwyeesggymse;
        wskgeycusaokeymw:
        $this->eywockmuswoykooc(true);
        goto kmwwukmymssqakuk;
        uguwgicugawycckm:
        $this->ssquiwqwwcgcqiic();
        goto wskgeycusaokeymw;
        okmmkcokmyiqkceg:
        $this->iqsiguacookiqwcs();
        goto uguwgicugawycckm;
        qyaiyoskqmqyyuos:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto syookwiaqwmsaoem;
        sokqsksiecasgugs:
        if (!(stripos($this->agent, "\x69\x50\x6f\x64") !== false)) {
            goto kiauseesqiwimyue;
        }
        goto qyaiyoskqmqyyuos;
        guuowemmmmcgukow:
        kiauseesqiwimyue:
        goto yycskqumwcimyyye;
        yycskqumwcimyyye:
        return false;
        goto qiayswmiyoqisyac;
        usscqwyeesggymse:
        $this->uewoqoqkekmsyoeo();
        goto okmmkcokmyiqkceg;
        kmwwukmymssqakuk:
        return true;
        goto guuowemmmmcgukow;
        qiayswmiyoqisyac:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto woiqioceiyccoyyi;
        yqiyiacommmwsuce:
        wyqemyugccycgaso:
        goto kweqeekeouiqocqw;
        kumioksgmqmsaeqy:
        kgmwwkoiqwyscmys:
        goto ckkwwiuyquomkcku;
        ysuagggqaicqyguk:
        return false;
        goto womwoaskosgsauog;
        soqyakgcqemouuko:
        okgoksuuouqmmqog:
        goto squaugeowuwyumqu;
        kweqeekeouiqocqw:
        if (stripos($this->agent, "\x4d\157\142\x69\154\145") !== false) {
            goto okgoksuuouqmmqog;
        }
        goto ikkseymmmeooqmcm;
        squaugeowuwyumqu:
        $this->eywockmuswoykooc(true);
        goto kumioksgmqmsaeqy;
        gssmokgwcmqesyao:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto agwcwemswacqgqyk;
        ikkseymmmeooqmcm:
        $this->icigyueiiwsukmsu(true);
        goto cimakcokyqkmyiau;
        woiqioceiyccoyyi:
        if (!(stripos($this->agent, "\x41\x6e\144\162\x6f\151\144") !== false)) {
            goto wcuqqmycwwoqwwga;
        }
        goto kqaemkmmqkyeweye;
        agwcwemswacqgqyk:
        goto wyqemyugccycgaso;
        goto yecageyyqwumqoca;
        kmggqcwmkwwcuioa:
        if (isset($yikciqwsimweauyg[1])) {
            goto sgkeayimkgeyaqic;
        }
        goto gssmokgwcmqesyao;
        aqcwmswmgmgqokmu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iuaaiqsmgoqiscio;
        yemgimowqwsuqegu:
        return true;
        goto sskqokueeqgsuumq;
        ckkwwiuyquomkcku:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto yemgimowqwsuqegu;
        iuaaiqsmgoqiscio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yqiyiacommmwsuce;
        cimakcokyqkmyiau:
        goto kgmwwkoiqwyscmys;
        goto soqyakgcqemouuko;
        yecageyyqwumqoca:
        sgkeayimkgeyaqic:
        goto aqcwmswmgmgqokmu;
        sskqokueeqgsuumq:
        wcuqqmycwwoqwwga:
        goto ysuagggqaicqyguk;
        kqaemkmmqkyeweye:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x41\156\x64\x72\x6f\151\x64"));
        goto kmggqcwmkwwcuioa;
        womwoaskosgsauog:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto yymscyccyaauqiaa;
        qysqqycgiwmucggw:
        return true;
        goto okacoggoqgoomuyc;
        okacoggoqgoomuyc:
        wiuyqgeaacmksuqq:
        goto qikuwygeoaimcukg;
        yammukygywskcuey:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yusmiciysquiqayq;
        ceiseomqooekseuo:
        return false;
        goto siaqsogicwwmayco;
        owayquiaceqooaiq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\x69\x76\141\x6c\x64\x69"));
        goto sisuqeisegegcsiy;
        gquuqqacuqsgsyqc:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto qysqqycgiwmucggw;
        qikuwygeoaimcukg:
        msasquyamakaamys:
        goto ceiseomqooekseuo;
        sisuqeisegegcsiy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wiuyqgeaacmksuqq;
        }
        goto yammukygywskcuey;
        yymscyccyaauqiaa:
        if (!(stripos($this->agent, "\126\x69\166\141\x6c\144\x69") !== false)) {
            goto msasquyamakaamys;
        }
        goto owayquiaceqooaiq;
        yusmiciysquiqayq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gquuqqacuqsgsyqc;
        siaqsogicwwmayco:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto csuikuskoecgsymk;
        yyimqwkqigowmcco:
        if (stripos($this->agent, "\x4d\157\142\x69\154\145") !== false) {
            goto iewuyuigwmkcmcas;
        }
        goto ugkesgkkcqcasmoq;
        gaomwgqgumkcqawg:
        goto umyuckgysaegimue;
        goto ysoeqwagkauquwme;
        uwkiseisiuqsoqsa:
        $this->icigyueiiwsukmsu(true);
        goto yikaomgieukoawws;
        kuyowuyquoioeqoc:
        iewuyuigwmkcmcas:
        goto suessqeuiasoqioi;
        csuikuskoecgsymk:
        if (!(stripos($this->agent, "\x59\141\102\x72\x6f\x77\x73\x65\162") !== false)) {
            goto sccmgumeswegawyk;
        }
        goto eeieacyyeywwyewo;
        mioiqgkakcguokqa:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gcgyqiaawwccgqaw;
        giawgsomaouqgiyc:
        sesgwayockkaakwm:
        goto mquyowqsoawycyok;
        gcgyqiaawwccgqaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wyimgokwakggwuoi;
        eicqsqkmeaimooii:
        return true;
        goto giawgsomaouqgiyc;
        ugkesgkkcqcasmoq:
        if (stripos($this->agent, "\101\x6e\144\x72\x6f\x69\x64") !== false) {
            goto qekesyoouukaciyy;
        }
        goto gaomwgqgumkcqawg;
        aucmemccqucmicwm:
        $this->icigyueiiwsukmsu(true);
        goto qqsiimkqkguqkeag;
        koceigseyecoyoia:
        qekesyoouukaciyy:
        goto aucmemccqucmicwm;
        aeycoymkqiwogwag:
        return false;
        goto cgqqkkwugmiqyiow;
        oymuyuskiqyacysw:
        goto umyuckgysaegimue;
        goto koceigseyecoyoia;
        yikaomgieukoawws:
        goto umyuckgysaegimue;
        goto kuyowuyquoioeqoc;
        mquyowqsoawycyok:
        sccmgumeswegawyk:
        goto aeycoymkqiwogwag;
        ysoeqwagkauquwme:
        ewgqscsiomaciyew:
        goto uwkiseisiuqsoqsa;
        wwaocaooaayqamsu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sesgwayockkaakwm;
        }
        goto mioiqgkakcguokqa;
        suessqeuiasoqioi:
        $this->eywockmuswoykooc(true);
        goto oymuyuskiqyacysw;
        qqsiimkqkguqkeag:
        umyuckgysaegimue:
        goto eicqsqkmeaimooii;
        scqaokckckemicqi:
        if (stripos($this->agent, "\x69\120\x61\x64") !== false) {
            goto ewgqscsiomaciyew;
        }
        goto yyimqwkqigowmcco;
        wyimgokwakggwuoi:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto scqaokckckemicqi;
        eeieacyyeywwyewo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\102\x72\x6f\167\163\145\x72"));
        goto wwaocaooaayqamsu;
        cgqqkkwugmiqyiow:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto ommoqequygggywyi;
        eyekywukwqucywcm:
        $this->eywockmuswoykooc(true);
        goto ciewwguuyumcisme;
        qugmeamkemckgqwo:
        if (!(stripos($this->agent, "\120\157\162\x74\141\142\154\145\x29") !== false || stripos($this->agent, "\126\151\x74\141") !== false)) {
            goto ykwmoaqmwggiqmsk;
        }
        goto eyekywukwqucywcm;
        uwwiiwscccuowuoq:
        return true;
        goto uyymyaogieaawaig;
        iwgksuqmosckeqys:
        qsacucessyquaame:
        goto sayicwyqgigeswug;
        ommoqequygggywyi:
        if (!(stripos($this->agent, "\120\x6c\141\x79\x53\x74\141\164\x69\x6f\156\x20") !== false)) {
            goto qsacucessyquaame;
        }
        goto miayoysigsgumwyi;
        uuweusyuygicyoik:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qugmeamkemckgqwo;
        uyymyaogieaawaig:
        yymiwwumowysiagy:
        goto iwgksuqmosckeqys;
        msqmyqgiaeeeoeco:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto umkyqiyguqoauyek;
        miayoysigsgumwyi:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\120\154\141\x79\x53\x74\x61\164\151\157\x6e\40"));
        goto msqmyqgiaeeeoeco;
        sayicwyqgigeswug:
        return false;
        goto ccmmogiaggiuewmu;
        umkyqiyguqoauyek:
        if (!isset($yikciqwsimweauyg[0])) {
            goto yymiwwumowysiagy;
        }
        goto eceqcqseqcswkywu;
        eceqcqseqcswkywu:
        $quiguswioiaaywey = explode("\51", $yikciqwsimweauyg[2]);
        goto uuweusyuygicyoik;
        ciewwguuyumcisme:
        ykwmoaqmwggiqmsk:
        goto uwwiiwscccuowuoq;
        ccmmogiaggiuewmu:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto qmisymqoqmqocwoe;
        qmisymqoqmqocwoe:
        if (!preg_match("\41\x5e\127\x67\145\164\57\x28\133\x5e\40\135\x2b\51\41\x69", $this->agent, $yikciqwsimweauyg)) {
            goto syqgqkeomqsysaey;
        }
        goto mcygcucugmyqswys;
        ywuwweugeccmeuqk:
        syqgqkeomqsysaey:
        goto iwacoiqoegwuaoqo;
        mcygcucugmyqswys:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto sieaoicuiusscywg;
        gqomqwuiesioaaaq:
        return true;
        goto ywuwweugeccmeuqk;
        sieaoicuiusscywg:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto gqomqwuiesioaaaq;
        iwacoiqoegwuaoqo:
        return false;
        goto wkmmaysiigyuyimk;
        wkmmaysiigyuyimk:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto kwsagikwoqogqecc;
        wicaemaewwoooiuq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\143\x75\x72\x6c"));
        goto qmqsccegugoiyaiu;
        qmqsccegugoiyaiu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto igcukieyogyaqwyo;
        }
        goto ggqeyyoscwueysku;
        qykkceysyessasey:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto iwyoaksegwaksmsu;
        ggqeyyoscwueysku:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qqsmygoumegcogay;
        wsgkqgogymcgueag:
        imgwqyoiweuiwiec:
        goto eimqoqgqmsiokyeq;
        qqsmygoumegcogay:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qykkceysyessasey;
        sucmgqcacggcucec:
        igcukieyogyaqwyo:
        goto wsgkqgogymcgueag;
        iwyoaksegwaksmsu:
        return true;
        goto sucmgqcacggcucec;
        eimqoqgqmsiokyeq:
        return false;
        goto iyqcgqusyeiiaiai;
        kwsagikwoqogqecc:
        if (!(strpos($this->agent, "\x63\x75\x72\x6c") === 0)) {
            goto imgwqyoiweuiwiec;
        }
        goto wicaemaewwoooiuq;
        iyqcgqusyeiiaiai:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto gqwemyquuwgqcaic;
        emiuesoeeiqysuay:
        kycoymqmaukeekum:
        goto qoyywwueqcmomgio;
        syiwqmwwoemuyeou:
        $this->platform = self::PLATFORM_POSTMAN;
        goto cgqiesaeskmuwwcy;
        guquqeyggoqqkgkm:
        goto sukiqmyemewakiao;
        goto smmqcueceqkiggkm;
        aeeiacomeyceesoe:
        goto sukiqmyemewakiao;
        goto seeosigigeuueiqy;
        cgqiesaeskmuwwcy:
        goto sukiqmyemewakiao;
        goto sgssyyueamgacywm;
        wyokgowugcsiigum:
        goto sukiqmyemewakiao;
        goto uiqoeooowosqagsw;
        hsuemysceewomeuc:
        seaqqywowweasaoa:
        goto kqmqqomaqawisweo;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\x63\x75\162\154") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        imyycasecqwmeuew:
        kmgqqgsuiwcyccak:
        goto wmcckwsaaemkqweg;
        yysewcsossqsackg:
        gsyegqcsyscyycic:
        goto qycwawiicimecwsq;
        seeosigigeuueiqy:
        mkycqgqaawooaaeu:
        goto cekocgmmwuacyckg;
        qycwawiicimecwsq:
        $this->platform = self::PLATFORM_ROKU;
        goto eweqcaymckiwaccw;
        uyauemouyweqqkwu:
        goto sukiqmyemewakiao;
        goto gkcqueouksaqceqw;
        acmaiqeukwiqqyms:
        yioawsqawmqagueg:
        goto esqckkawqugyqimw;
        aoemyociekskwmke:
        $this->platform = self::PLATFORM_OS2;
        goto cyqeeaiwumyekkce;
        qwkcgqyyygyasgqw:
        $this->platform = self::PLATFORM_WINDOWS;
        goto aeeiacomeyceesoe;
        mqmowgywwygssysy:
        goto sukiqmyemewakiao;
        goto emiuesoeeiqysuay;
        icyocwacicqauogu:
        if (stripos($this->agent, "\x4e\145\x74\102\x53\x44") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        gkcqueouksaqceqw:
        syqyosyywqwgoeoo:
        goto aaecacwqmsoowcsi;
        coakwcyymiqcmwug:
        if (stripos($this->agent, "\x69\120\x61\144") !== false) {
            goto mkycqgqaawooaaeu;
        }
        goto iacwiwmoggwseqsa;
        esqckkawqugyqimw:
        $this->platform = self::PLATFORM_OPENBSD;
        goto wksuqaqsicwqekuy;
        emeoasammuwaesws:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto mqmowgywwygssysy;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\x6f\153\x68\x74\x74\x70") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        wyioqosyqawqkoyi:
        yeqmmgegmqgwyaea:
        goto qwkcgqyyygyasgqw;
        wgcyyuswcmkwyaky:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto eccgyquwkmumeyea;
        muiouqmomamguoce:
        if (stripos($this->agent, "\x4e\x6f\153\151\141") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        imwweegoasykooim:
        miqaocyiuwmyyycc:
        goto yukieguwkeesieiy;
        aceouusygqicksgk:
        goto sukiqmyemewakiao;
        goto yysewcsossqsackg;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\117\160\145\156\x53\157\x6c\141\x72\x69\163") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        smmqcueceqkiggkm:
        sskkqsmyqmgyewue:
        goto ggcmqkuwqkkkmcgu;
        cwceosugiiyyauqi:
        goto sukiqmyemewakiao;
        goto ogugiciyicewkyue;
        eccgyquwkmumeyea:
        goto sukiqmyemewakiao;
        goto awiomycussysmike;
        iiyysuksmomyyuye:
        gqcyummwsikcccom:
        goto cugaeomiskasooic;
        ggcmqkuwqkkkmcgu:
        $this->platform = self::PLATFORM_SUNOS;
        goto gyawuaoseweeioce;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\154\x69\156\165\x78") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        kqmqqomaqawisweo:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto wyokgowugcsiigum;
        meiykooeimaqqico:
        if (stripos($this->agent, "\111\146\x72\141\155\x65\154\x79") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        ueqauuccggkgcyqo:
        oesgciyeoewgouki:
        goto mmqioecsyukkcgoo;
        cugaeomiskasooic:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto yeeicocmyyaeksys;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\x50\x6c\141\171\x73\x74\141\164\x69\157\156") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        msqycwkyqqeyqoka:
        aycyoqqqwmyciise:
        goto wgcyyuswcmkwyaky;
        acysyqkmkgaoewci:
        if (stripos($this->agent, "\x61\156\x64\x72\157\151\144") !== false) {
            goto kkecucquwauqqyku;
        }
        goto woqqukymqiuyququ;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\x42\154\x61\143\153\102\x65\x72\x72\171") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\x46\x72\x65\145\x42\123\104") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        ymucyiowcaqucyom:
        goto sukiqmyemewakiao;
        goto gooiuuagswggewoq;
        oakqgwgaaakkecgm:
        goto sukiqmyemewakiao;
        goto wyioqosyqawqkoyi;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\x42\145\x4f\123") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        muycacscoqikyasc:
        $this->platform = self::PLATFORM_NETBSD;
        goto uyauemouyweqqkwu;
        akayacsmoiwoaeqm:
        goto sukiqmyemewakiao;
        goto ueqauuccggkgcyqo;
        ogugiciyicewkyue:
        cguaokskycyggqym:
        goto ciwyuyksieuuqiee;
        igiuieggauocicsg:
        kkecucquwauqqyku:
        goto oaoummcgooyceayi;
        eiskwkcoggkikmcc:
        goto sukiqmyemewakiao;
        goto hsuemysceewomeuc;
        kouowucggykwmwgw:
        aacemqiqgqoyokmi:
        goto aoemyociekskwmke;
        esscoiyogsoqoquc:
        uwegawkagcagoeiw:
        goto gciescsgqiuoqkim;
        kgwaccmcscsusase:
        goto sukiqmyemewakiao;
        goto msqycwkyqqeyqoka;
        imagekgwsuqccwgo:
        ecusscoueakqaqsu:
        goto eouqmgocqewmwgik;
        ymyoskqgyeykqmom:
        if (stripos($this->agent, "\151\x50\x68\x6f\156\145") !== false) {
            goto ecusscoueakqaqsu;
        }
        goto gwoqyokuiqqwugsk;
        yeeicocmyyaeksys:
        goto sukiqmyemewakiao;
        goto imwweegoasykooim;
        ciwyuyksieuuqiee:
        $this->platform = self::PLATFORM_LINUX;
        goto eayyeuwawewcqcom;
        uiqoeooowosqagsw:
        scoouaqeoeicswwu:
        goto syiwqmwwoemuyeou;
        ukmeggiqssyyyuku:
        $this->platform = self::PLATFORM_APPLE;
        goto kyqkigouggegscsi;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\x4f\x53\x5c\57\62") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        sgssyyueamgacywm:
        ugccoisuygekiaae:
        goto myiogoqascwcikcc;
        eweqcaymckiwaccw:
        goto sukiqmyemewakiao;
        goto maokeqaksuookoao;
        myiogoqascwcikcc:
        $this->platform = self::PLATFORM_I_FRAME;
        goto mkeuwsqceweiacum;
        gciescsgqiuoqkim:
        $this->platform = self::PLATFORM_NOKIA;
        goto kgwaccmcscsusase;
        mkeuwsqceweiacum:
        sukiqmyemewakiao:
        goto icoqeuawskkosskw;
        qoyywwueqcmomgio:
        $this->platform = self::PLATFORM_TERMINAL;
        goto akayacsmoiwoaeqm;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\x4f\160\x65\156\102\x53\104") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        auuogsqacsimiksi:
        oyioakacwwceegie:
        goto cmooymowqeusayua;
        yukieguwkeesieiy:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto cwceosugiiyyauqi;
        eayyeuwawewcqcom:
        goto sukiqmyemewakiao;
        goto esscoiyogsoqoquc;
        iqucsoqomgkeuyco:
        goto sukiqmyemewakiao;
        goto auuogsqacsimiksi;
        asksckakmysykiue:
        eequuumweyqioygw:
        goto yeigmocusoouscsa;
        awumcmmeumuaiocw:
        goto sukiqmyemewakiao;
        goto oguaeaawigyoscii;
        siaweewywmuayyks:
        goto sukiqmyemewakiao;
        goto iiyysuksmomyyuye;
        gqwemyquuwgqcaic:
        if (stripos($this->agent, "\x77\151\156\x64\x6f\x77\x73") !== false) {
            goto yeqmmgegmqgwyaea;
        }
        goto coakwcyymiqcmwug;
        wmcckwsaaemkqweg:
        $this->platform = self::PLATFORM_WINDOWS;
        goto iqucsoqomgkeuyco;
        oaoummcgooyceayi:
        $this->platform = self::PLATFORM_ANDROID;
        goto siaweewywmuayyks;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\x53\x75\156\117\x53") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        kyqkigouggegscsi:
        goto sukiqmyemewakiao;
        goto igiuieggauocicsg;
        mougyosiwyugsymo:
        $this->platform = self::PLATFORM_IPOD;
        goto iouagkwueekusiwi;
        gwoqyokuiqqwugsk:
        if (stripos($this->agent, "\155\141\x63") !== false) {
            goto okqmcygoiwaesmis;
        }
        goto acysyqkmkgaoewci;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\120\157\163\x74\x6d\141\x6e\122\x75\x6e\164\x69\155\145") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        woqqukymqiuyququ:
        if (stripos($this->agent, "\x53\151\x6c\x6b") !== false) {
            goto gqcyummwsikcccom;
        }
        goto ycskcusgcyeowagm;
        mokkeuemqauoaskk:
        gawseeswkisqiwoe:
        goto emeoasammuwaesws;
        mmqioecsyukkcgoo:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto eiskwkcoggkikmcc;
        qcqgakkooouyiooi:
        goto sukiqmyemewakiao;
        goto mokkeuemqauoaskk;
        eouqmgocqewmwgik:
        $this->platform = self::PLATFORM_IPHONE;
        goto ymucyiowcaqucyom;
        yeigmocusoouscsa:
        $this->platform = self::PLATFORM_BEOS;
        goto ksqmykkeymqwoacg;
        cyqeeaiwumyekkce:
        goto sukiqmyemewakiao;
        goto asksckakmysykiue;
        ycskcusgcyeowagm:
        if (stripos($this->agent, "\154\x69\156\165\x78") !== false && stripos($this->agent, "\123\x4d\101\122\124\55\124\126") !== false) {
            goto miqaocyiuwmyyycc;
        }
        goto owkougkyymiwoaqu;
        ksqmykkeymqwoacg:
        goto sukiqmyemewakiao;
        goto imyycasecqwmeuew;
        emooiegicmmqkwsg:
        $this->platform = self::PLATFORM_IPHONE . "\x2f" . self::PLATFORM_IPAD;
        goto qcqgakkooouyiooi;
        gusogiqwmwgywamm:
        acuiieocsgiyakia:
        goto muycacscoqikyasc;
        cmooymowqeusayua:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto aceouusygqicksgk;
        iouagkwueekusiwi:
        goto sukiqmyemewakiao;
        goto imagekgwsuqccwgo;
        gyawuaoseweeioce:
        goto sukiqmyemewakiao;
        goto kouowucggykwmwgw;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\167\x69\x6e") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        maokeqaksuookoao:
        kwewaoocuqgaseoa:
        goto emooiegicmmqkwsg;
        aaecacwqmsoowcsi:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto guquqeyggoqqkgkm;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\x43\162\117\x53") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        wksuqaqsicwqekuy:
        goto sukiqmyemewakiao;
        goto gusogiqwmwgywamm;
        cyaomwaqoaiiqqes:
        goto sukiqmyemewakiao;
        goto acmaiqeukwiqqyms;
        oguaeaawigyoscii:
        uyiaqakwuswweqme:
        goto mougyosiwyugsymo;
        iacwiwmoggwseqsa:
        if (stripos($this->agent, "\151\x50\157\x64") !== false) {
            goto uyiaqakwuswweqme;
        }
        goto ymyoskqgyeykqmom;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\122\157\153\x75") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        awiomycussysmike:
        muicsociwumgosaw:
        goto ukmcukgkakisecyk;
        gooiuuagswggewoq:
        okqmcygoiwaesmis:
        goto ukmeggiqssyyyuku;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\x69\x4f\123") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        cekocgmmwuacyckg:
        $this->platform = self::PLATFORM_IPAD;
        goto awumcmmeumuaiocw;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\x74\x76\x4f\123") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        ukmcukgkakisecyk:
        $this->platform = self::PLATFORM_FREEBSD;
        goto cyaomwaqoaiiqqes;
        icoqeuawskkosskw:
    }
}
