<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const BROWSER_UNKNOWN = "\x75\156\x6b\156\157\167\x6e";
    const VERSION_UNKNOWN = "\165\156\153\x6e\157\x77\156";
    const BROWSER_OPERA = "\x4f\160\x65\162\141";
    
    const BROWSER_OPERA_MINI = "\x4f\x70\x65\x72\141\40\115\151\156\x69";
    
    const BROWSER_WEBTV = "\x57\x65\x62\124\126";
    
    const BROWSER_EDGE = "\105\144\x67\145";
    
    const BROWSER_IE = "\111\x6e\x74\145\x72\156\145\x74\40\105\170\x70\154\x6f\x72\145\162";
    
    const BROWSER_POCKET_IE = "\x50\157\x63\x6b\145\x74\40\x49\156\164\145\x72\156\145\x74\x20\105\x78\160\154\x6f\162\145\162";
    
    const BROWSER_KONQUEROR = "\x4b\157\156\x71\165\145\162\x6f\x72";
    
    const BROWSER_ICAB = "\151\103\141\x62";
    
    const BROWSER_OMNIWEB = "\117\155\x6e\151\127\145\x62";
    
    const BROWSER_FIREBIRD = "\106\151\162\145\142\x69\162\x64";
    
    const BROWSER_FIREFOX = "\106\151\162\x65\x66\x6f\x78";
    
    const BROWSER_BRAVE = "\102\x72\141\x76\x65";
    
    const BROWSER_PALEMOON = "\x50\141\154\x65\x6d\157\157\156";
    
    const BROWSER_ICEWEASEL = "\111\143\x65\x77\x65\141\x73\145\154";
    
    const BROWSER_SHIRETOKO = "\x53\150\x69\162\145\164\157\153\x6f";
    
    const BROWSER_MOZILLA = "\115\x6f\x7a\x69\154\x6c\141";
    
    const BROWSER_AMAYA = "\x41\x6d\141\x79\141";
    
    const BROWSER_LYNX = "\x4c\x79\156\x78";
    
    const BROWSER_SAFARI = "\123\x61\146\x61\x72\x69";
    
    const BROWSER_IPHONE = "\x69\x50\x68\x6f\156\x65";
    
    const BROWSER_IPOD = "\x69\x50\x6f\x64";
    
    const BROWSER_IPAD = "\x69\120\141\144";
    
    const BROWSER_CHROME = "\103\150\162\x6f\155\145";
    
    const BROWSER_ANDROID = "\x41\x6e\144\162\157\151\x64";
    
    const BROWSER_GOOGLEBOT = "\107\157\x6f\147\x6c\x65\x42\x6f\x74";
    
    const BROWSER_CURL = "\x63\125\122\114";
    
    const BROWSER_WGET = "\127\147\x65\x74";
    
    const BROWSER_UCBROWSER = "\125\x43\x42\162\157\x77\x73\x65\x72";
    
    const BROWSER_YANDEXBOT = "\131\141\156\144\x65\x78\102\x6f\164";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\141\x6e\144\145\170\111\155\141\x67\145\122\145\x73\151\172\x65\162";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\141\156\x64\x65\170\111\155\141\147\145\x73";
    
    const BROWSER_YANDEXVIDEO_BOT = "\x59\x61\156\144\x65\x78\126\x69\144\x65\x6f";
    
    const BROWSER_YANDEXMEDIA_BOT = "\x59\x61\156\144\145\170\115\x65\144\151\x61";
    
    const BROWSER_YANDEXBLOGS_BOT = "\131\141\156\144\x65\x78\x42\154\157\x67\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\x59\x61\x6e\144\145\x78\106\x61\166\151\x63\157\156\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\131\141\x6e\x64\145\x78\127\145\x62\x6d\141\163\164\145\x72";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\141\156\144\x65\x78\104\x69\x72\x65\x63\x74";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\131\x61\156\144\145\170\115\145\164\x72\151\153\141";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\x61\156\x64\x65\x78\116\x65\x77\163";
    
    const BROWSER_YANDEXCATALOG_BOT = "\131\x61\x6e\x64\x65\x78\x43\141\164\141\x6c\157\147";
    
    const BROWSER_SLURP = "\131\x61\x68\157\x6f\41\x20\123\154\x75\x72\x70";
    
    const BROWSER_W3CVALIDATOR = "\x57\63\103\x20\x56\141\x6c\151\x64\x61\x74\157\162";
    
    const BROWSER_BLACKBERRY = "\x42\154\x61\x63\x6b\x42\145\162\x72\x79";
    
    const BROWSER_ICECAT = "\x49\143\145\x43\x61\164";
    
    const BROWSER_NOKIA_S60 = "\116\x6f\x6b\151\141\40\x53\66\x30\40\x4f\123\123\x20\x42\162\157\167\163\x65\162";
    
    const BROWSER_NOKIA = "\116\x6f\x6b\x69\141\40\102\162\x6f\167\163\145\162";
    
    const BROWSER_MSN = "\115\x53\x4e\40\x42\x72\157\x77\163\x65\x72";
    
    const BROWSER_MSNBOT = "\115\x53\x4e\40\102\x6f\164";
    
    const BROWSER_BINGBOT = "\102\x69\x6e\x67\x20\x42\157\164";
    
    const BROWSER_VIVALDI = "\x56\151\x76\x61\154\144\151";
    
    const BROWSER_YANDEX = "\131\141\x6e\x64\145\x78";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\x65\x74\x73\x63\141\160\x65\40\116\141\x76\151\147\141\x74\157\x72";
    
    const BROWSER_GALEON = "\x47\x61\154\x65\157\156";
    
    const BROWSER_NETPOSITIVE = "\x4e\145\x74\x50\x6f\163\151\x74\151\x76\145";
    
    const BROWSER_PHOENIX = "\120\x68\157\145\156\151\x78";
    
    const BROWSER_PLAYSTATION = "\120\x6c\141\x79\123\164\141\x74\x69\x6f\x6e";
    const BROWSER_SAMSUNG = "\123\x61\x6d\163\x75\156\x67\x42\x72\157\167\163\145\x72";
    const BROWSER_SILK = "\x53\151\154\x6b";
    const BROWSER_I_FRAME = "\111\x66\x72\141\155\x65\x6c\x79";
    const BROWSER_COCOA = "\x43\157\143\x6f\141\x52\x65\x73\x74\103\154\x69\145\x6e\x74";
    const PLATFORM_UNKNOWN = "\165\156\x6b\156\157\x77\x6e";
    const PLATFORM_WINDOWS = "\127\x69\x6e\x64\157\x77\x73";
    const PLATFORM_WINDOWS_CE = "\x57\151\x6e\x64\x6f\x77\163\40\103\105";
    const PLATFORM_APPLE = "\101\x70\x70\x6c\x65";
    const PLATFORM_LINUX = "\x4c\x69\x6e\165\x78";
    const PLATFORM_OS2 = "\x4f\x53\57\62";
    const PLATFORM_BEOS = "\102\145\x4f\123";
    const PLATFORM_IPHONE = "\x69\120\x68\157\x6e\x65";
    const PLATFORM_IPOD = "\x69\120\157\144";
    const PLATFORM_IPAD = "\151\120\141\144";
    const PLATFORM_BLACKBERRY = "\102\154\141\143\153\x42\x65\x72\162\x79";
    const PLATFORM_NOKIA = "\x4e\x6f\x6b\151\x61";
    const PLATFORM_FREEBSD = "\x46\x72\x65\145\x42\x53\104";
    const PLATFORM_OPENBSD = "\117\160\145\x6e\x42\x53\104";
    const PLATFORM_NETBSD = "\x4e\145\164\x42\x53\x44";
    const PLATFORM_SUNOS = "\123\165\x6e\x4f\123";
    const PLATFORM_OPENSOLARIS = "\x4f\x70\x65\x6e\123\x6f\x6c\141\x72\x69\x73";
    const PLATFORM_ANDROID = "\x41\156\x64\x72\x6f\151\x64";
    const PLATFORM_PLAYSTATION = "\123\157\156\x79\x20\x50\x6c\x61\171\123\x74\141\x74\x69\x6f\x6e";
    const PLATFORM_ROKU = "\x52\157\x6b\x75";
    const PLATFORM_APPLE_TV = "\101\x70\160\x6c\145\x20\x54\126";
    const PLATFORM_TERMINAL = "\x54\x65\x72\x6d\151\x6e\141\154";
    const PLATFORM_FIRE_OS = "\106\x69\162\145\40\117\123";
    const PLATFORM_SMART_TV = "\123\115\101\122\x54\x2d\124\126";
    const PLATFORM_CHROME_OS = "\x43\x68\162\157\x6d\145\x20\117\123";
    const PLATFORM_JAVA_ANDROID = "\x4a\141\x76\x61\57\101\x6e\x64\162\x6f\x69\x64";
    const PLATFORM_POSTMAN = "\120\157\x73\x74\x6d\141\x6e";
    const PLATFORM_I_FRAME = "\111\146\162\141\155\x65\154\171";
    const OPERATING_SYSTEM_UNKNOWN = "\165\x6e\153\156\x6f\x77\x6e";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto cgewwoksiyocyiga;
        ewuugiguuowassgm:
        goto eeegygkcwmqmqyes;
        goto usukksgaqiqwqeys;
        qocgiimiggeksoky:
        if ($uowwycywwssskuys != '') {
            goto mickaocycsqkssoi;
        }
        goto uwowyggggqcqiuao;
        wywgewmwqwqsysig:
        parent::__construct();
        goto ggkyameswcsquisg;
        uwowyggggqcqiuao:
        $this->reset();
        goto oagaqukqswwgeqsa;
        cmkiwqcgsmwyuggk:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto eqwkmqasacseyecw;
        cgewwoksiyocyiga:
        $this->runSetup = false;
        goto qocgiimiggeksoky;
        usukksgaqiqwqeys:
        mickaocycsqkssoi:
        goto cmkiwqcgsmwyuggk;
        oagaqukqswwgeqsa:
        $this->qeqwswckeiieossq();
        goto ewuugiguuowassgm;
        eqwkmqasacseyecw:
        eeegygkcwmqmqyes:
        goto wywgewmwqwqsysig;
        ggkyameswcsquisg:
    }
    
    public function reset()
    {
        goto mwwimgssiegweqes;
        ggaemwcyouewkgcm:
        $this->isMobile = false;
        goto cicagciwwymgewcm;
        ceycsuymgwmceuew:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto ygyacaeuykeookuw;
        seimmqskqimoouui:
        $this->version = self::VERSION_UNKNOWN;
        goto ceycsuymgwmceuew;
        ykqeemyaewkmowyu:
        $this->agent = isset($_SERVER["\x48\124\x54\x50\x5f\125\123\x45\x52\x5f\x41\107\x45\x4e\124"]) ? $_SERVER["\110\x54\x54\120\137\125\123\x45\122\x5f\x41\107\105\x4e\124"] : '';
        goto comoigwsemiiwoks;
        uioqqaiayukmemcg:
        $this->isRobot = false;
        goto seimmqskqimoouui;
        cicagciwwymgewcm:
        $this->isFacebook = false;
        goto omkuusmocycoywqq;
        uqwoeksekoweiwke:
        $this->name = self::BROWSER_UNKNOWN;
        goto ykqeemyaewkmowyu;
        omkuusmocycoywqq:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
        mwwimgssiegweqes:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto uqwoeksekoweiwke;
        comoigwsemiiwoks:
        $this->isAol = false;
        goto uioqqaiayukmemcg;
        ygyacaeuykeookuw:
        $this->isTablet = false;
        goto ggaemwcyouewkgcm;
        ycuossoamymsusws:
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
        $this->version = preg_replace("\x2f\133\136\x30\55\71\54\56\x2c\141\x2d\172\54\101\55\x5a\55\x5d\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\x2f\133\x5e\60\x2d\71\54\x2e\x2c\141\55\172\x2c\x41\x2d\x5a\x5d\x2f", '', $kqagasmwymmuiksq);
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
        goto egsqiegeesaowyyo;
        oouoqmemwouuymam:
        $this->agent = $agent_string;
        goto kmokgyokoacsqkcg;
        kmokgyokoacsqkcg:
        $this->qeqwswckeiieossq();
        goto mkummeawiecmouws;
        egsqiegeesaowyyo:
        $this->reset();
        goto oouoqmemwouuymam;
        mkummeawiecmouws:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\x63\150\x72\x6f\155\145\x66\x72\141\x6d\x65") !== false;
    }
    
    public function __toString()
    {
        return "\74\163\x74\x72\x6f\x6e\x67\76\102\162\x6f\167\163\145\162\40\116\x61\x6d\x65\x3a\x3c\57\163\164\x72\157\156\x67\76\x20{$this->aagmmewiwysmgseq()}\74\x62\x72\57\x3e\xa" . "\74\163\x74\162\157\156\x67\x3e\102\x72\x6f\167\163\145\x72\x20\126\145\162\163\151\157\x6e\x3a\74\x2f\163\164\162\157\x6e\147\76\40{$this->gikwwgqmwccescgy()}\74\x62\162\57\76\12" . "\x3c\163\x74\x72\157\x6e\147\76\x42\x72\157\167\163\145\x72\40\x55\x73\x65\162\40\x41\x67\x65\x6e\164\x20\x53\164\x72\x69\156\147\72\74\x2f\163\164\162\157\156\x67\76\x20{$this->ckaoiscoyuuosace()}\74\x62\162\x2f\76\xa" . "\74\x73\164\162\x6f\156\x67\x3e\120\154\x61\x74\146\157\x72\x6d\72\74\x2f\163\164\162\157\156\x67\76\x20{$this->kqeiosksqeuksyqu()}\x3c\x62\x72\x2f\76";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto segicigoioeuyass;
        uqqiokcseqswsgia:
        $this->iggocwysumewuquw();
        goto yyacgikiikmoesek;
        yyacgikiikmoesek:
        $this->caqkscqcyqeciamc();
        goto syumssoiimkseoum;
        segicigoioeuyass:
        $this->acmmsiuwaekasogs();
        goto uqqiokcseqswsgia;
        syumssoiimkseoum:
    }
    
    protected function iggocwysumewuquw()
    {
        return $this->maowoygwywiawwyc() || $this->gggwayigqkokeigi() || $this->sukgiyywqmoigmom() || $this->makyeuicweuowumi() || $this->cgequousmqakcios() || $this->eqqcucwcgwqiogik() || $this->usswyskeuiskccki() || $this->aweyeayscomouegw() || $this->mgaiuyuciiueqyge() || $this->syeogeymkuiqsoec() || $this->eqkuicmgoaougagi() || $this->qsseiqmmssqiuomm() || $this->oomiyiuwesyuegws() || $this->uockauwugkqgqkce() || $this->oomuqgqyykuccewm() || $this->ciawmegkaaacmoew() || $this->cysskoyaouegkmky() || $this->iaacgcgmmegamkiu() || $this->uumayumieageyiuy() || $this->qcqikaemyysumcsu() || $this->siwcougwagmcauoi() || $this->aeywoaukuwaeegku() || $this->qaigygakimuucuki() || $this->cimegwusqouswgao() || $this->oumugceeiaceqieo() || $this->wmcqkeiuewqameek() || $this->eccwcswcuggacgua() || $this->mwoogugykmiymmgy() || $this->qceuceikgwagccsq() || $this->uuyiswoewekeauaw() || $this->sqawuqckmasomwiq() || $this->aaseiwemciwamqqm() || $this->ksumscewmeyaocyy() || $this->qsemkkquagiaoioc() || $this->bgkmykkkkksumwea() || $this->ugaiaiamygwcwemg() || $this->ksikmmeqsuycsqck() || $this->yswggmyigakcackc() || $this->uiwkymoksesuumwe() || $this->qcswwmqaioswesoq() || $this->momgeesgauwmqaks() || $this->gewsuekegcksgkai() || $this->ecocgoqgymuacegg() || $this->wacucmcykeakeeou() || $this->qaweacwkwmmuqqam() || $this->usemqkymaguiocgy() || $this->mqsiuucsqqyuwcuw() || $this->mmyqoqguasigekck() || $this->noeygigqkeciickm() || $this->akwueocamkykcwyy() || $this->ykyiqmysgemoaakw() || $this->qiqsouwkwmwmqeem() || $this->wiqieuoqysguameu() || $this->gqwuksqaksqcemam() || $this->cgqcukygysieeqko() || $this->ccaaioyauuuuyikg() || $this->aowooqokikgeegkm();
    }
    
    protected function uumayumieageyiuy()
    {
        goto aqysowuwkoqgsoku;
        awasoqakauqikkya:
        iiswiwucogikyuse:
        goto sqimcsougcukocky;
        wwskqqaskwicmaay:
        $this->eywockmuswoykooc(true);
        goto koiysaseasuyieym;
        ssayikwmgomomkkq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cemqmygogskcoygo;
        muwsmoccecigsoqc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\102\x6c\x61\143\x6b\x42\x65\x72\162\x79"));
        goto aykkageemggigccw;
        cemqmygogskcoygo:
        $this->name = self::BROWSER_BLACKBERRY;
        goto wwskqqaskwicmaay;
        aqysowuwkoqgsoku:
        if (!(stripos($this->agent, "\142\x6c\141\143\153\x62\x65\162\162\171") !== false)) {
            goto iiswiwucogikyuse;
        }
        goto muwsmoccecigsoqc;
        emiksyiouuqsigmq:
        kmcewougmoaciyky:
        goto awasoqakauqikkya;
        koiysaseasuyieym:
        return true;
        goto emiksyiouuqsigmq;
        aykkageemggigccw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kmcewougmoaciyky;
        }
        goto ikwcwqmomksisice;
        sqimcsougcukocky:
        return false;
        goto eykuqgakcouscsks;
        ikwcwqmomksisice:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ssayikwmgomomkkq;
        eykuqgakcouscsks:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wyeguiaumcoesuiy;
        auomkekgcqwsmgqu:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto yymkyucwwqwymsse;
        wagiyaqsgwiqyaie:
        return true;
        goto kicewoesgqwaasem;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(true);
        goto kgskcgusosyauysg;
        wyeguiaumcoesuiy:
        $this->igmimcweskyugiqm(false);
        goto auomkekgcqwsmgqu;
        cwykioaoamgqueey:
        return false;
        goto uwiyeosqocyekygy;
        yymkyucwwqwymsse:
        if (!(stripos($this->agent, "\141\x6f\154") !== false)) {
            goto ggiqousqgowseosg;
        }
        goto mscskuyuseuoqaqm;
        kcakqaaesggwiooc:
        ggiqousqgowseosg:
        goto cwykioaoamgqueey;
        kicewoesgqwaasem:
        yeequkyciegceoeo:
        goto kcakqaaesggwiooc;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\133\x5e\x30\55\x39\x5c\56\141\x2d\172\x5d\x2f\x69", '', $quiguswioiaaywey[1]));
        goto wagiyaqsgwiqyaie;
        mscskuyuseuoqaqm:
        $quiguswioiaaywey = explode("\x20", stristr($this->agent, "\x41\117\114"));
        goto eicmoywsowuqoaou;
        eicmoywsowuqoaou:
        if (!isset($quiguswioiaaywey[1])) {
            goto yeequkyciegceoeo;
        }
        goto wokayyqugqaoewiy;
        uwiyeosqocyekygy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto cwygwqacakmoesuw;
        awwiackkekswgamo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qaiaymokiyasqmic;
        skqkiegmwieyweww:
        return true;
        goto ousiwuqmksykqcec;
        ousiwuqmksykqcec:
        qwimoyomwmmwkucy:
        goto kiqcuyecmyaegims;
        qaiaymokiyasqmic:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto eyyiqqumygsogaoq;
        cwygwqacakmoesuw:
        if (!(stripos($this->agent, "\147\x6f\x6f\147\154\x65\142\x6f\164") !== false)) {
            goto ackciywssqaumgac;
        }
        goto cgiakccyuqqwmomc;
        eyyiqqumygsogaoq:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto iskggyooogqgowys;
        iskggyooogqgowys:
        $this->aasmeayouwmacaow(true);
        goto skqkiegmwieyweww;
        iuumaowkqqsoicgy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qwimoyomwmmwkucy;
        }
        goto awwiackkekswgamo;
        comcaymsaykamcgi:
        return false;
        goto yagmcusocgoqkewa;
        kiqcuyecmyaegims:
        ackciywssqaumgac:
        goto comcaymsaykamcgi;
        cgiakccyuqqwmomc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\147\157\x6f\x67\154\x65\x62\157\x74"));
        goto iuumaowkqqsoicgy;
        yagmcusocgoqkewa:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto caegiamkkykaqmqu;
        kuemgcgokyyggkoi:
        $this->name = self::BROWSER_YANDEXBOT;
        goto eseawwcgusiywyge;
        caegiamkkykaqmqu:
        if (!(stripos($this->agent, "\131\141\x6e\x64\x65\x78\x42\157\x74") !== false)) {
            goto aoeeywugooqmewcc;
        }
        goto wykyuuuooigicwgs;
        wykyuuuooigicwgs:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\x6e\144\145\x78\x42\157\x74"));
        goto skomukgmucsuaggq;
        skomukgmucsuaggq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wesewyeqgccwmaos;
        }
        goto essswiygiqegaayw;
        eseawwcgusiywyge:
        $this->aasmeayouwmacaow(true);
        goto soeiamgkkekwcoss;
        soeiamgkkekwcoss:
        return true;
        goto gugywasieysgmmyw;
        qimcgqssayewaygw:
        return false;
        goto suugmuecwqaakaoc;
        yugqeemimuuqeucm:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kuemgcgokyyggkoi;
        uaamscmwcmumgasy:
        aoeeywugooqmewcc:
        goto qimcgqssayewaygw;
        essswiygiqegaayw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yugqeemimuuqeucm;
        gugywasieysgmmyw:
        wesewyeqgccwmaos:
        goto uaamscmwcmumgasy;
        suugmuecwqaakaoc:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto kiaawmeeisegyugk;
        osumgoskasckcieg:
        return false;
        goto mkcsckwgisqasmao;
        wysmsmaeqiucoycu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\x64\145\x78\x49\x6d\141\x67\x65\x52\145\x73\151\172\x65\162"));
        goto akeoiekwqqqgqamo;
        akeoiekwqqqgqamo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uewgegcascsimmaq;
        }
        goto sqqqyyimyskaygea;
        squqowgmqgocyqmi:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto qysommommieagsuw;
        ikmicisyykkwmeso:
        uewgegcascsimmaq:
        goto cyqyggywyykwqyak;
        cyqyggywyykwqyak:
        gcgwykikiomgmgqa:
        goto osumgoskasckcieg;
        aekaikwiqmuwwqia:
        return true;
        goto ikmicisyykkwmeso;
        gwokcyciswoaygie:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto squqowgmqgocyqmi;
        qysommommieagsuw:
        $this->aasmeayouwmacaow(true);
        goto aekaikwiqmuwwqia;
        kiaawmeeisegyugk:
        if (!(stripos($this->agent, "\131\x61\x6e\144\x65\170\111\155\x61\147\x65\x52\145\163\151\x7a\x65\162") !== false)) {
            goto gcgwykikiomgmgqa;
        }
        goto wysmsmaeqiucoycu;
        sqqqyyimyskaygea:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gwokcyciswoaygie;
        mkcsckwgisqasmao:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto mygsucymimsqmqky;
        gwqqoewaikqqueoe:
        return false;
        goto muyymwciiieqymqw;
        ceugiycaewioseoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto ieycgksaoqioisky;
        qigcoauseeigksyc:
        return true;
        goto yakmisgikescmgoo;
        lhsckqwkqqauiqwy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto woikwmiiusqmoygy;
        }
        goto eosuykwimywegmse;
        yakmisgikescmgoo:
        woikwmiiusqmoygy:
        goto aacosyksiacoaeig;
        aacosyksiacoaeig:
        imsysaygciegsqok:
        goto gwqqoewaikqqueoe;
        mygsucymimsqmqky:
        if (!(stripos($this->agent, "\131\x61\156\x64\x65\170\x43\x61\x74\141\x6c\x6f\x67") !== false)) {
            goto imsysaygciegsqok;
        }
        goto uwemyeqsgcieyymm;
        swuywmmasggeiqou:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ceugiycaewioseoe;
        eosuykwimywegmse:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto swuywmmasggeiqou;
        uwemyeqsgcieyymm:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\x65\x78\x43\141\x74\141\154\x6f\x67"));
        goto lhsckqwkqqauiqwy;
        ieycgksaoqioisky:
        $this->aasmeayouwmacaow(true);
        goto qigcoauseeigksyc;
        muyymwciiieqymqw:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto iycocuaeccqgyoia;
        naiguckqsyeaesek:
        dqcamiqqkwiowaag:
        goto eqqaouecoaseisgq;
        uaaiysoikgsuscqw:
        return true;
        goto naiguckqsyeaesek;
        iycocuaeccqgyoia:
        if (!(stripos($this->agent, "\x59\141\156\x64\145\170\x4e\145\x77\163") !== false)) {
            goto sigosycgcicoiuuc;
        }
        goto ycyyicuqwqcyqeig;
        omccwaywmcmqksmq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto imkwmsokcecosyse;
        kqmkicwuyqakoika:
        return false;
        goto suagmomycmooyggu;
        imkwmsokcecosyse:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto osuskyuuggamicou;
        oameuaooiigaiucg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto omccwaywmcmqksmq;
        kccciwsgesamyyau:
        if (!isset($yikciqwsimweauyg[1])) {
            goto dqcamiqqkwiowaag;
        }
        goto oameuaooiigaiucg;
        eqqaouecoaseisgq:
        sigosycgcicoiuuc:
        goto kqmkicwuyqakoika;
        osuskyuuggamicou:
        $this->aasmeayouwmacaow(true);
        goto uaaiysoikgsuscqw;
        ycyyicuqwqcyqeig:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\145\170\x4e\x65\167\x73"));
        goto kccciwsgesamyyau;
        suagmomycmooyggu:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto skqmieiumikceamg;
        eiswwscyoaqoggge:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kmayccieqkkiqicw;
        }
        goto qaqmwuwwqycmqkyg;
        ukeksoegcoqokeik:
        return true;
        goto iigucumgucicccac;
        xwymaakqyeoqaams:
        return false;
        goto amcsamiamksyqmuq;
        swusyoymaokumies:
        umsckeuyiggsewac:
        goto xwymaakqyeoqaams;
        iymeugimwgcywusq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\156\144\x65\170\x4d\x65\x74\162\151\x6b\x61"));
        goto eiswwscyoaqoggge;
        skqmieiumikceamg:
        if (!(stripos($this->agent, "\131\x61\156\x64\145\x78\x4d\x65\x74\x72\151\x6b\141") !== false)) {
            goto umsckeuyiggsewac;
        }
        goto iymeugimwgcywusq;
        iigucumgucicccac:
        kmayccieqkkiqicw:
        goto swusyoymaokumies;
        gwkeoekmeeqmmwgy:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto aikqumiqkkqaqgee;
        qaqmwuwwqycmqkyg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eyogsqkuigcksouq;
        aikqumiqkkqaqgee:
        $this->aasmeayouwmacaow(true);
        goto ukeksoegcoqokeik;
        eyogsqkuigcksouq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto gwkeoekmeeqmmwgy;
        amcsamiamksyqmuq:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto egemeuggwgwuayoi;
        iuoiiwaosgqoeask:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cmasgwmooaiccewo;
        }
        goto giuuqwcsockoiqem;
        egemeuggwgwuayoi:
        if (!(stripos($this->agent, "\x59\x61\156\x64\145\x78\104\x69\x72\145\143\164") !== false)) {
            goto cyckkcksiwwqasio;
        }
        goto qqusymyoygwwueco;
        giuuqwcsockoiqem:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto smqoegcueykkkiiq;
        qcwaessgikigogay:
        $this->aasmeayouwmacaow(true);
        goto uegccyuaemgmocgu;
        qqyasyisimsuyiiw:
        cyckkcksiwwqasio:
        goto geqcuwsuqymcqiou;
        smqoegcueykkkiiq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto wsqgykwqkgiwaksw;
        wsqgykwqkgiwaksw:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto qcwaessgikigogay;
        geqcuwsuqymcqiou:
        return false;
        goto yeywuuiugmgeuygm;
        iouecsmwqgaiycoq:
        cmasgwmooaiccewo:
        goto qqyasyisimsuyiiw;
        uegccyuaemgmocgu:
        return true;
        goto iouecsmwqgaiycoq;
        qqusymyoygwwueco:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\144\x65\x78\104\x69\162\x65\x63\164"));
        goto iuoiiwaosgqoeask;
        yeywuuiugmgeuygm:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto gswsuaquqikkycwi;
        eeqgkcgywkwgmiyg:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto cumwowkcomuigeag;
        iawccecmgeaocqmg:
        gmgemamkswqeskmo:
        goto heakaosaewwowmcu;
        kyemcamscwoeeoiy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ywiyqcgyoweomkqg;
        }
        goto ggawqqciikeiqiau;
        qomyesuacseysugi:
        return true;
        goto wsiqkesiecagcykw;
        ggawqqciikeiqiau:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mucqymyysqeiaqwk;
        eemgwkicuicwskms:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\x64\145\x78\127\145\142\x6d\x61\163\164\x65\x72"));
        goto kyemcamscwoeeoiy;
        gswsuaquqikkycwi:
        if (!(stripos($this->agent, "\x59\x61\156\144\145\x78\x57\x65\x62\155\141\x73\164\145\x72") !== false)) {
            goto gmgemamkswqeskmo;
        }
        goto eemgwkicuicwskms;
        wsiqkesiecagcykw:
        ywiyqcgyoweomkqg:
        goto iawccecmgeaocqmg;
        cumwowkcomuigeag:
        $this->aasmeayouwmacaow(true);
        goto qomyesuacseysugi;
        mucqymyysqeiaqwk:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto eeqgkcgywkwgmiyg;
        heakaosaewwowmcu:
        return false;
        goto euyooyocyuucmmmc;
        euyooyocyuucmmmc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto cyoymqqkgiumuegy;
        cyoymqqkgiumuegy:
        if (!(stripos($this->agent, "\x59\141\156\x64\145\170\x46\x61\x76\151\x63\x6f\156\163") !== false)) {
            goto saaioyiceykemgas;
        }
        goto fkcemcakyseoskmc;
        aucqaemoukqogokc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iskwcciiywiaamos;
        }
        goto aekwmmmciucegyys;
        aekwmmmciucegyys:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto quaugcgaccqksmmk;
        cecqqwuqeiccmmos:
        saaioyiceykemgas:
        goto yksumiuqcoggugea;
        yksumiuqcoggugea:
        return false;
        goto aisgmewqismsouqm;
        oyqaeioosuiwoacw:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto omeekeuouqiieacw;
        quaugcgaccqksmmk:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto oyqaeioosuiwoacw;
        wuqswaumkwuciiqi:
        return true;
        goto wmkoscqgkmsoasms;
        fkcemcakyseoskmc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\x65\x78\x46\x61\166\x69\x63\157\x6e\163"));
        goto aucqaemoukqogokc;
        omeekeuouqiieacw:
        $this->aasmeayouwmacaow(true);
        goto wuqswaumkwuciiqi;
        wmkoscqgkmsoasms:
        iskwcciiywiaamos:
        goto cecqqwuqeiccmmos;
        aisgmewqismsouqm:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto wsgcyguocqmgccks;
        oasoyuckmqumgwwy:
        $this->aasmeayouwmacaow(true);
        goto ucugysauicuskega;
        wimcmomumakqcikc:
        return false;
        goto gccyyceaqackqsec;
        isowmaawkwmkcgmo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto mywassaguwommoyg;
        }
        goto caumawwwskkoekcw;
        eayemqoaewmasoos:
        mgsyyameesskqgsk:
        goto wimcmomumakqcikc;
        wsgcyguocqmgccks:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\x42\x6c\157\147\163") !== false)) {
            goto mgsyyameesskqgsk;
        }
        goto cwmwkkauqqusccgs;
        ucugysauicuskega:
        return true;
        goto kaiekqyukykoqiwa;
        kaiekqyukykoqiwa:
        mywassaguwommoyg:
        goto eayemqoaewmasoos;
        caumawwwskkoekcw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto gciueqsqsgcekwae;
        gciueqsqsgcekwae:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ggyweqemgcmwwwgu;
        ggyweqemgcmwwwgu:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto oasoyuckmqumgwwy;
        cwmwkkauqqusccgs:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\x65\170\102\154\x6f\x67\163"));
        goto isowmaawkwmkcgmo;
        gccyyceaqackqsec:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto qacccgcuwysswgqk;
        qacccgcuwysswgqk:
        if (!(stripos($this->agent, "\131\x61\x6e\x64\x65\x78\x4d\x65\144\x69\x61") !== false)) {
            goto gukkaysgawyusckc;
        }
        goto ucgecsiyweweymqw;
        cuaueyackcccuamq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto oaaqgeqiwsykukeg;
        gyswaoawqisgeiac:
        return true;
        goto aayyiwqgkqkkckeg;
        syoagkqccoyegkac:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cuaueyackcccuamq;
        iammckaiicmaeweq:
        return false;
        goto eiuwyaccguegyckc;
        mwoaykewsqmiikum:
        gukkaysgawyusckc:
        goto iammckaiicmaeweq;
        wyqswauigsseskum:
        $this->aasmeayouwmacaow(true);
        goto gyswaoawqisgeiac;
        aayyiwqgkqkkckeg:
        qquioqqwmiuemaaw:
        goto mwoaykewsqmiikum;
        oaaqgeqiwsykukeg:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto wyqswauigsseskum;
        ucgecsiyweweymqw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\x64\x65\x78\x4d\x65\144\151\x61"));
        goto ucwwsimgkkgymqwm;
        ucwwsimgkkgymqwm:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qquioqqwmiuemaaw;
        }
        goto syoagkqccoyegkac;
        eiuwyaccguegyckc:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto ygagqkmcasesqcui;
        ouaywweeyqecagmc:
        return true;
        goto gogqmaoyqeoscico;
        ygagqkmcasesqcui:
        if (!(stripos($this->agent, "\x59\x61\156\x64\x65\170\126\151\x64\x65\x6f") !== false)) {
            goto wuasiiywuycmkusq;
        }
        goto eikeicmemcaswgaq;
        kwkeisysqagyioig:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto mecmyqgsmiuesukw;
        mecmyqgsmiuesukw:
        $this->aasmeayouwmacaow(true);
        goto ouaywweeyqecagmc;
        ngkomagwskmkmcuc:
        return false;
        goto kuimcqawqqqgcoqs;
        wisaskaqkeaqaymk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wkaeeqagowygkuya;
        }
        goto wmigsokoiegiocys;
        kmawaeioomkgqkqe:
        wuasiiywuycmkusq:
        goto ngkomagwskmkmcuc;
        wmigsokoiegiocys:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mieyqmckqkqaoygo;
        eikeicmemcaswgaq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\x65\x78\x56\x69\x64\145\157"));
        goto wisaskaqkeaqaymk;
        gogqmaoyqeoscico:
        wkaeeqagowygkuya:
        goto kmawaeioomkgqkqe;
        mieyqmckqkqaoygo:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto kwkeisysqagyioig;
        kuimcqawqqqgcoqs:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto yeyoqmmeeuqucmky;
        yuueeqwwgggeycog:
        wqcseegakwamkcca:
        goto qccmiyoiqguwmqug;
        qccmiyoiqguwmqug:
        return false;
        goto kiqkwuaswsmkigok;
        yeyoqmmeeuqucmky:
        if (!(stripos($this->agent, "\131\x61\x6e\x64\145\170\x49\155\141\x67\145\163") !== false)) {
            goto wqcseegakwamkcca;
        }
        goto wmquwikmuiskcucm;
        ueyiaawciiimcmia:
        osyoqauakmkoaigc:
        goto yuueeqwwgggeycog;
        ymmgwsqqoskmaags:
        if (!isset($yikciqwsimweauyg[1])) {
            goto osyoqauakmkoaigc;
        }
        goto suaeioykcscoamsi;
        gggsgesuicesmqya:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto mksgaooiuiymkkac;
        cqmkeoyaqqoykcyu:
        return true;
        goto ueyiaawciiimcmia;
        mksgaooiuiymkkac:
        $this->aasmeayouwmacaow(true);
        goto cqmkeoyaqqoykcyu;
        ukoqoieuoigccaoi:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto gggsgesuicesmqya;
        suaeioykcscoamsi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ukoqoieuoigccaoi;
        wmquwikmuiskcucm:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\x65\x78\x49\155\141\x67\x65\163"));
        goto ymmgwsqqoskmaags;
        kiqkwuaswsmkigok:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto wqwqukkyascugisy;
        aouymgmkkcaaymky:
        waauqgswsiesowse:
        goto egsiwgciqqkwecuy;
        egsiwgciqqkwecuy:
        return false;
        goto escsoaemgioqgqso;
        gqogwsuwyiouywcy:
        yieciwkqiqgceuya:
        goto aouymgmkkcaaymky;
        yuosayyyyemookmi:
        return true;
        goto gqogwsuwyiouywcy;
        yqswiyiomsgeayiw:
        $this->name = self::BROWSER_MSNBOT;
        goto sieeqakumiscuwmy;
        sieeqakumiscuwmy:
        $this->aasmeayouwmacaow(true);
        goto yuosayyyyemookmi;
        wqwqukkyascugisy:
        if (!(stripos($this->agent, "\155\x73\156\x62\x6f\x74") !== false)) {
            goto waauqgswsiesowse;
        }
        goto ecyoakcmqwaksmms;
        cugwcccamcyuksgk:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto yqswiyiomsgeayiw;
        wqgwmgkmeiewmwsm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cugwcccamcyuksgk;
        ecyoakcmqwaksmms:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6d\163\x6e\x62\x6f\x74"));
        goto okyykeecayqaccik;
        okyykeecayqaccik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yieciwkqiqgceuya;
        }
        goto wqgwmgkmeiewmwsm;
        escsoaemgioqgqso:
    }
    
    protected function qaigygakimuucuki()
    {
        goto ywwgsgiqkuwwuwas;
        ymmyqwqggkuwimiw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto oqkyykockmuiaycc;
        egeecgiwycoqsgqm:
        gumousymsmeugmsm:
        goto ikqqmyoegaeocwqw;
        oemaagemmycueycs:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ymmyqwqggkuwimiw;
        uugykecieoomuygs:
        $this->aasmeayouwmacaow(true);
        goto aygyqqwyyugyoakg;
        aygyqqwyyugyoakg:
        return true;
        goto egeecgiwycoqsgqm;
        ikqqmyoegaeocwqw:
        egaiuisgeekasiow:
        goto hiuqggmuisuaaksw;
        ywwgsgiqkuwwuwas:
        if (!(stripos($this->agent, "\142\x69\x6e\x67\x62\x6f\x74") !== false)) {
            goto egaiuisgeekasiow;
        }
        goto ayikwkmouqocqoya;
        ayikwkmouqocqoya:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x62\151\156\x67\x62\157\164"));
        goto wsuauiewqimocoes;
        wsuauiewqimocoes:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gumousymsmeugmsm;
        }
        goto oemaagemmycueycs;
        hiuqggmuisuaaksw:
        return false;
        goto uiyscqcowgeaeoco;
        oqkyykockmuiaycc:
        $this->name = self::BROWSER_BINGBOT;
        goto uugykecieoomuygs;
        uiyscqcowgeaeoco:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto wwaoocgeiyswqwow;
        oscemsgoyimocqei:
        weygkwekqawoowyq:
        goto imiuwwuwwyqigmou;
        okicguwqeyiuywos:
        acsqgoigqaiqiwaw:
        goto osewecweiaekeoou;
        oeiiuoikyagkmyqa:
        return true;
        goto iamckkumoomyeoum;
        iqgasessakaoieuw:
        $this->eywockmuswoykooc(true);
        goto sykosugesqqqqyey;
        fkuiuosooquwmkoi:
        wmuqesieiugiquks:
        goto eewmcuekysqqkeey;
        weuwgyoweusiaweq:
        return true;
        goto ykoqgweokgwkcawk;
        sioosmeyiqmscmkc:
        if (stripos($this->agent, "\x57\63\103\55\x6d\x6f\142\151\154\145\x4f\x4b") !== false) {
            goto weygkwekqawoowyq;
        }
        goto iicgycsecmaeqqcg;
        aisaywmsiigsegso:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wssaokwkycsqqumw;
        iuiusomcwkaiksyq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto weuwgyoweusiaweq;
        yiiaqacikommoaoy:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x57\63\x43\x2d\143\150\145\143\x6b\x6c\151\156\x6b"));
        goto icmmwweaumcckgam;
        sqcqqsocqymmgwcq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto segewkgiakaqsgoc;
        mqigmosuikyaaamk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto sqcqqsocqymmgwcq;
        segewkgiakaqsgoc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto oeiiuoikyagkmyqa;
        sykosugesqqqqyey:
        return true;
        goto okicguwqeyiuywos;
        ykoqgweokgwkcawk:
        soiguuywuqqisowg:
        goto iqugwmioumykkagm;
        mcuiomgoamywqgya:
        if (stripos($this->agent, "\127\x33\103\137\x56\x61\154\x69\x64\141\164\x6f\162") !== false) {
            goto wmuqesieiugiquks;
        }
        goto sioosmeyiqmscmkc;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        eewmcuekysqqkeey:
        
        $eaogoiscgwgmugsq = str_replace("\x57\63\x43\137\126\x61\x6c\151\x64\141\x74\x6f\162\40", "\x57\63\103\137\x56\x61\154\x69\x64\141\164\157\162\x2f", $this->agent);
        goto gggamqmqusyimaky;
        meqqkyuusamyauyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gqmiumskekekmaks;
        }
        goto mqigmosuikyaaamk;
        iicgycsecmaeqqcg:
        goto acsqgoigqaiqiwaw;
        goto uomswgeawseimkou;
        icmmwweaumcckgam:
        if (!isset($yikciqwsimweauyg[1])) {
            goto soiguuywuqqisowg;
        }
        goto aisaywmsiigsegso;
        iamckkumoomyeoum:
        gqmiumskekekmaks:
        goto ucuiqegmmogyasmw;
        osewecweiaekeoou:
        return false;
        goto oqkkssoawygysqmq;
        gggamqmqusyimaky:
        $yikciqwsimweauyg = explode("\57", stristr($eaogoiscgwgmugsq, "\127\x33\103\137\126\141\154\x69\144\141\x74\x6f\162"));
        goto meqqkyuusamyauyc;
        ucuiqegmmogyasmw:
        goto acsqgoigqaiqiwaw;
        goto oscemsgoyimocqei;
        wssaokwkycsqqumw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iuiusomcwkaiksyq;
        iqugwmioumykkagm:
        goto acsqgoigqaiqiwaw;
        goto fkuiuosooquwmkoi;
        wwaoocgeiyswqwow:
        if (stripos($this->agent, "\x57\x33\x43\55\143\150\x65\143\153\154\x69\156\153") !== false) {
            goto aoueegmsgkeokaoq;
        }
        goto mcuiomgoamywqgya;
        uomswgeawseimkou:
        aoueegmsgkeokaoq:
        goto yiiaqacikommoaoy;
        oqkkssoawygysqmq:
    }
    
    protected function cimegwusqouswgao()
    {
        goto oiksgywwsqweoeai;
        myksiemsskucuyac:
        $this->eywockmuswoykooc(false);
        goto gygwagcmmmaioikw;
        kwumsouwywsqkmci:
        $this->name = self::BROWSER_SLURP;
        goto qmckmkykmyucosyq;
        oawogoiagossceii:
        return false;
        goto ouecqyewekugmwkm;
        iuiyyuwauoowkgeg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yioasqegwkugoqag;
        }
        goto ogeakuasmaemuwga;
        ckmosuuwagciuwmw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\x6c\165\x72\x70"));
        goto iuiyyuwauoowkgeg;
        gygwagcmmmaioikw:
        return true;
        goto mkimssyoqguuowky;
        qmckmkykmyucosyq:
        $this->aasmeayouwmacaow(true);
        goto myksiemsskucuyac;
        oiksgywwsqweoeai:
        if (!(stripos($this->agent, "\x73\x6c\165\x72\160") !== false)) {
            goto waqsamacggacoaye;
        }
        goto ckmosuuwagciuwmw;
        ogeakuasmaemuwga:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wiawimwuykuugcwi;
        wiawimwuykuugcwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwumsouwywsqkmci;
        mkimssyoqguuowky:
        yioasqegwkugoqag:
        goto aqcqeucsaaeuiwqa;
        aqcqeucsaaeuiwqa:
        waqsamacggacoaye:
        goto oawogoiagossceii;
        ouecqyewekugmwkm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto csecmagoocuukewm;
        csecmagoocuukewm:
        if (stripos($this->agent, "\x42\162\141\166\145\x2f") !== false) {
            goto guiqaqkuywsmqcoc;
        }
        goto ggakkmokkykkqawi;
        gaccwqquykeauumg:
        aecsciyiseuamymy:
        goto sqikwaiakyissigo;
        gikcoemsgecyasqe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gkgwqoquqekiayus;
        iaiewssiomowoyas:
        return true;
        goto gsuacqigwaigyaia;
        pwgwmqwuoqysukeo:
        return true;
        goto gaccwqquykeauumg;
        owcekoqmukawoeao:
        goto aecsciyiseuamymy;
        goto ymgeisswqiucoaas;
        wuismmmeeqkiowua:
        $quiguswioiaaywey = explode("\x20", $uuygmciickwewegw[1]);
        goto gikcoemsgecyasqe;
        gkgwqoquqekiayus:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto iaiewssiomowoyas;
        ggakkmokkykkqawi:
        if (stripos($this->agent, "\40\102\162\141\x76\x65\x20") !== false) {
            goto qeimskmimouyssgu;
        }
        goto owcekoqmukawoeao;
        sosikmkcuygeukyo:
        qeimskmimouyssgu:
        goto kwgkaeyusoekmway;
        ymgeisswqiucoaas:
        guiqaqkuywsmqcoc:
        goto wucmiaeomamqgqes;
        gsuacqigwaigyaia:
        ecuoemaqoeosiase:
        goto ciymuigaugeiouic;
        wucmiaeomamqgqes:
        $uuygmciickwewegw = explode("\x2f", stristr($this->agent, "\102\162\141\x76\x65"));
        goto asoiigkaqcguaioi;
        uckgesmigkiyqyck:
        
        
        $this->aasasueowyemuyoc('');
        goto pwgwmqwuoqysukeo;
        ciymuigaugeiouic:
        goto aecsciyiseuamymy;
        goto sosikmkcuygeukyo;
        asoiigkaqcguaioi:
        if (!isset($uuygmciickwewegw[1])) {
            goto ecuoemaqoeosiase;
        }
        goto wuismmmeeqkiowua;
        sqikwaiakyissigo:
        return false;
        goto yeagcqwaoeskgqmg;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        yeagcqwaoeskgqmg:
    }
    
    protected function makyeuicweuowumi()
    {
        goto wwckusqkukciicei;
        qgagcuckouyuyuss:
        qmywsksagymugcou:
        goto qmkkwkqieggiyamm;
        megqkiykgiamgmsk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ccyiuskguauimqee;
        cmcisgcoaouauymu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x45\144\x67\145"));
        goto camscswqceqycmke;
        oyykmqismqsyaaus:
        $this->eywockmuswoykooc(true);
        goto sgwwscoqkcuoqqsg;
        yukycgouyuqkmaok:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto megqkiykgiamgmsk;
        ccyiuskguauimqee:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto oqymsqskimoyuyye;
        sgwwscoqkcuoqqsg:
        ocsoakwgmmwsekyi:
        goto kigaqwsiuygysecu;
        qmkkwkqieggiyamm:
        qsqgkiyigokqcioe:
        goto eamumkggcmyaosco;
        eamumkggcmyaosco:
        return false;
        goto gmiyusqaiqaaakkk;
        camscswqceqycmke:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qmywsksagymugcou;
        }
        goto yukycgouyuqkmaok;
        wwckusqkukciicei:
        if (!(stripos($this->agent, "\105\144\x67\x65\x2f") !== false)) {
            goto qsqgkiyigokqcioe;
        }
        goto cmcisgcoaouauymu;
        oqymsqskimoyuyye:
        if (!(stripos($this->agent, "\x57\151\x6e\x64\x6f\x77\x73\40\120\150\157\156\x65") !== false || stripos($this->agent, "\x41\156\144\162\157\151\144") !== false)) {
            goto ocsoakwgmmwsekyi;
        }
        goto oyykmqismqsyaaus;
        kigaqwsiuygysecu:
        return true;
        goto qgagcuckouyuyuss;
        gmiyusqaiqaaakkk:
    }
    
    protected function cgequousmqakcios()
    {
        goto ycsqoemcioqgscik;
        kekkyamkouwoiyyi:
        ewasqwuscwkeuuyi:
        goto uasakawygcqkquuy;
        iseeayqyeoawwmwc:
        if (stripos($this->agent, "\x6d\163\x70\x69\x65") !== false || stripos($this->agent, "\x70\x6f\143\153\145\x74") !== false) {
            goto qkmucouuqggkwssg;
        }
        goto cyikciomyweygykm;
        uksaceogcmuacumi:
        goto uoyuiiauquiwgasu;
        goto ieuewgsuqywiuuki;
        yygugwkyoeackami:
        $this->eywockmuswoykooc(true);
        goto kwaiiaowwykksgcw;
        eqiygsagygouqkyy:
        return true;
        goto gcasowsewwisgqwc;
        akmiwammkswkmyio:
        umimoqmwoeecysqi:
        goto eqiygsagygouqkyy;
        oeeccicqsoiyqcig:
        gyqcauemgkuwquua:
        goto uksaceogcmuacumi;
        syawcymwokyaqeck:
        qkmucouuqggkwssg:
        goto qskwqqamoqekaqum;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\x31\56\60");
        goto igesuquikuwmsywg;
        qousyksekeougumo:
        uoyuiiauquiwgasu:
        goto micqaoiiquokaqmw;
        sckcaoikwggaoiqm:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto aaumqogegyqosuiq;
        goowmysscaoakuma:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto ygwwwwcgiwmcakmi;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        oesqmiaisaqseigm:
        return true;
        goto kmyoqookuiyomeec;
        umaimowkyaemisiq:
        return true;
        goto yueaaaoockqicmwq;
        qwwigmoeocgyqyuy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto oeeccicqsoiyqcig;
        eoeoikgkiuewagwg:
        $this->aasasueowyemuyoc(preg_replace("\57\133\x5e\x30\x2d\71\x2e\x5d\53\57", '', $sogksuscggsicmac[1]));
        goto mgsmmaqqkusaaqew;
        ygwwwwcgiwmcakmi:
        if (!(stripos($this->agent, "\111\105\115\157\x62\x69\x6c\x65") !== false)) {
            goto mwauqumigegcywiw;
        }
        goto uuiioegocmmcqgwq;
        ieuewgsuqywiuuki:
        kwyiuyoeysqeywmm:
        goto wysmuiaeuqqaycig;
        micqaoiiquokaqmw:
        return true;
        goto wyagecywqcysyyae;
        ouqiiwuqeoegciso:
        wskkwyoiugucwwua:
        goto sckcaoikwggaoiqm;
        kmmsoqcgiyougqqy:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\73\40", $this->agent), "\155\163\151\145"));
        goto ygqkqwkyoosgomug;
        wysmuiaeuqqaycig:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto qousyksekeougumo;
        qsaiiuqwimiqiwyc:
        $yikciqwsimweauyg = explode("\40", stristr(str_replace("\x3b", "\x3b\x20", $this->agent), "\x4d\x53\x4e"));
        goto wkgugqyackgiowas;
        msccquimgomummck:
        sggyugwiuggaaqyo:
        goto kmmsoqcgiyougqqy;
        sqicocysoqwcgasq:
        qymmimiisagiymuy:
        goto awiqeeiewssogaaq;
        igesuquikuwmsywg:
        $yikciqwsimweauyg = stristr($this->agent, "\57");
        goto iqkkuesiuysywyag;
        kwaiiaowwykksgcw:
        mwauqumigegcywiw:
        goto oesqmiaisaqseigm;
        ieysgookkakiiuoo:
        ycsuqaygaisskkeq:
        goto aykuikogcgweeoio;
        yiomssmosemcckmc:
        $this->eywockmuswoykooc(true);
        goto uuamswicsoyuguug;
        isucaqumoqgykqig:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto iuiickwiuccmyiey;
        kqggyaomgmqyicmc:
        $quiguswioiaaywey = explode("\57", $this->agent);
        goto agasiekywmaokckg;
        mgsmmaqqkusaaqew:
        $this->agent = str_replace(["\115\x6f\x7a\x69\154\154\141", "\x47\x65\x63\153\x6f"], "\115\x53\x49\105", $this->agent);
        goto kwemswkcueagmssu;
        awiqeeiewssogaaq:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eismimkcoiokucom;
        qskwqqamoqekaqum:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x6d\163\160\151\145"));
        goto ameqasmessgyycqq;
        gocgaeomskmyyuaq:
        owgoagmssqsysiyq:
        goto ckiggmwimwykqyee;
        kmyoqookuiyomeec:
        omeswwygqyeqyqmw:
        goto omggicgmwyakocik;
        wyagecywqcysyyae:
        muaiioeaoiqiogie:
        goto kekkyamkouwoiyyi;
        aaumqogegyqosuiq:
        $this->aasasueowyemuyoc("\x31\61\56\x30");
        goto umaimowkyaemisiq;
        omggicgmwyakocik:
        goto ewasqwuscwkeuuyi;
        goto sqicocysoqwcgasq;
        gcasowsewwisgqwc:
        goto ewasqwuscwkeuuyi;
        goto ieysgookkakiiuoo;
        wkgugqyackgiowas:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ysamigeqeyqgiwcs;
        }
        goto goiegscqgcukimys;
        yueaaaoockqicmwq:
        goto ewasqwuscwkeuuyi;
        goto gocgaeomskmyyuaq;
        swasyyuiyouasyqy:
        $this->aasasueowyemuyoc("\x31\56\65");
        goto akmiwammkswkmyio;
        iuiickwiuccmyiey:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto yiomssmosemcckmc;
        ameqasmessgyycqq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto isucaqumoqgykqig;
        ygqkqwkyoosgomug:
        if (!isset($yikciqwsimweauyg[1])) {
            goto omeswwygqyeqyqmw;
        }
        goto coeaoweyqagqsoqq;
        agasiekywmaokckg:
        if (!isset($quiguswioiaaywey[1])) {
            goto gyqcauemgkuwquua;
        }
        goto qwwigmoeocgyqyuy;
        zkoqiugkkemmwqeq:
        if (stripos($this->agent, "\x6d\163\151\145") !== false && stripos($this->agent, "\x6f\160\x65\162\x61") === false) {
            goto ycsuqaygaisskkeq;
        }
        goto soacqquaasiggock;
        sooawcagkoismuqa:
        if (!isset($sogksuscggsicmac[1])) {
            goto uecqmukyqqgyoegy;
        }
        goto eoeoikgkiuewagwg;
        yaeowwmkcuqmesau:
        return true;
        goto kkumemicscqeqawi;
        kkumemicscqeqawi:
        ysamigeqeyqgiwcs:
        goto msccquimgomummck;
        eismimkcoiokucom:
        $sogksuscggsicmac = explode("\x72\166\x3a", $this->agent);
        goto sooawcagkoismuqa;
        soacqquaasiggock:
        if (stripos($this->agent, "\164\x72\x69\144\145\x6e\164") !== false) {
            goto qymmimiisagiymuy;
        }
        goto iseeayqyeoawwmwc;
        goiegscqgcukimys:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto occyqeeyumwaygik;
        mayucqimkiskmcms:
        goto ewasqwuscwkeuuyi;
        goto syawcymwokyaqeck;
        cyikciomyweygykm:
        goto ewasqwuscwkeuuyi;
        goto ouqiiwuqeoegciso;
        usoiismiikooagme:
        if (stripos($this->agent, "\x6d\x69\x63\162\157\163\157\146\164\40\x69\x6e\x74\145\x72\156\145\x74\x20\x65\170\160\154\x6f\162\145\162") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto zkoqiugkkemmwqeq;
        occyqeeyumwaygik:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto yaeowwmkcuqmesau;
        uasakawygcqkquuy:
        return false;
        goto myymisiqiwiqymuu;
        uuamswicsoyuguug:
        if (stripos($this->agent, "\155\x73\x70\151\145") !== false) {
            goto kwyiuyoeysqeywmm;
        }
        goto kqggyaomgmqyicmc;
        aykuikogcgweeoio:
        
        if (!(stripos($this->agent, "\x6d\x73\x6e\x62") !== false)) {
            goto sggyugwiuggaaqyo;
        }
        goto qsaiiuqwimiqiwyc;
        kwemswkcueagmssu:
        uecqmukyqqgyoegy:
        goto mayucqimkiskmcms;
        uuiioegocmmcqgwq:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto yygugwkyoeackami;
        iqkkuesiuysywyag:
        if (!preg_match("\x2f\63\x30\70\174\x34\62\65\x7c\x34\62\x36\174\x34\x37\x34\174\60\142\x31\57\151", $yikciqwsimweauyg)) {
            goto umimoqmwoeecysqi;
        }
        goto swasyyuiyouasyqy;
        coeaoweyqagqsoqq:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto goowmysscaoakuma;
        ycsqoemcioqgscik:
        if (stripos($this->agent, "\x54\162\x69\x64\x65\x6e\x74\x2f\x37\56\x30\73\x20\162\x76\72\x31\61\56\x30") !== false) {
            goto wskkwyoiugucwwua;
        }
        goto usoiismiikooagme;
        myymisiqiwiqymuu:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto isgqqmaauckagsao;
        uowyeayyimmqogge:
        fwqikeoyaewusiym:
        goto wkasucgiaeogugcw;
        emoscekqieoummww:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cyucgakoiiemocie;
        mseowikguuikkiys:
        return true;
        goto ageemsqieiqyqwag;
        qwiwywqwmmciwiea:
        if (stripos($this->agent, "\x4f\120\x52") !== false) {
            goto smsuqgcummiyucsc;
        }
        goto oucqmskiygmmsmye;
        eyuieiqqgyowoocu:
        if (!(stripos($this->agent, "\x4f\160\145\162\141\40\x4d\x6f\142\151") !== false)) {
            goto csguwgocosyisgyq;
        }
        goto gmgwsqeqwquucyoo;
        cyucgakoiiemocie:
        eoueymmeawwwswwq:
        goto yeayeuiggqoigwag;
        wskewcieqoqiuoui:
        sikkakqouqeckesc:
        goto ggiacqackmguiiki;
        qakmsceesmcwecmo:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\x70\145\162\141\40\x6d\x69\x6e\x69");
        goto uyeiymmkkiyccakm;
        mukwaeyamkyacewo:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto gocmokqaeqkqcmma;
        mmowusaeqemsisiq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto wskewcieqoqiuoui;
        eukqocmusiasmewe:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eaicyuessygcyuqu;
        }
        goto usmucisyagswyysu;
        oqyumeoumucciuao:
        kiykgaeecsuoegei:
        goto gouyqmyakowooiyw;
        yiyksucyuaosekey:
        $this->name = self::BROWSER_OPERA;
        goto msywkyeikecaomgo;
        ageemsqieiqyqwag:
        goto iggqqqegoegigyii;
        goto eiosgmsukekekyou;
        msywkyeikecaomgo:
        return true;
        goto uccocwouuuisiage;
        ikuoukwawkkyaacy:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\50", "\x20", $cgkyugweawsewkuu));
        goto omcmaswaawciiaui;
        isgqqmaauckagsao:
        if (stripos($this->agent, "\157\x70\x65\x72\x61\40\x6d\151\x6e\151") !== false) {
            goto sackmgaomiwgeqca;
        }
        goto uqqaaeqoykgcakec;
        cemwkemiwicagmou:
        goto cuyagmoysmwoceks;
        goto uowyeayyimmqogge;
        gocmokqaeqkqcmma:
        goto cuyagmoysmwoceks;
        goto uggmmsuyiiyuaeic;
        quucsamwocuceyae:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto emoscekqieoummww;
        csoomgiiyysqmeku:
        if (preg_match("\57\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ukkkmakiisiqkacm;
        ocisosooggaaueii:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kiykgaeecsuoegei;
        }
        goto uuimoqmwywkkaygo;
        uuimoqmwywkkaygo:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto akmiwuwwkeokegkq;
        uggmmsuyiiyuaeic:
        amecoaswmoqigiku:
        goto cyaaugsakiugouae;
        usmucisyagswyysu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wawimucmukumkuca;
        wkasucgiaeogugcw:
        $yikciqwsimweauyg = explode("\57", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto ocisosooggaaueii;
        wawimucmukumkuca:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sciiwomqgcamicqs;
        kwsuumgiqsskggqy:
        uqsmiiqigeisoyse:
        goto yiyksucyuaosekey;
        ssoogugiigiqooce:
        $this->eywockmuswoykooc(true);
        goto mseowikguuikkiys;
        swkkeqmaqugwiysy:
        if (preg_match("\x2f\x56\145\x72\163\151\x6f\x6e\x5c\x2f\50\61\52\x2e\52\x29\44\57", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto amecoaswmoqigiku;
        }
        goto csoomgiiyysqmeku;
        uukmwmiaqigsqaug:
        return false;
        goto myemqwquecqwakyq;
        uqqaaeqoykgcakec:
        if (stripos($this->agent, "\157\x70\145\x72\141") !== false) {
            goto uiuyiuiocgycwaae;
        }
        goto qwiwywqwmmciwiea;
        omcmaswaawciiaui:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eoueymmeawwwswwq;
        }
        goto quucsamwocuceyae;
        uccocwouuuisiage:
        iggqqqegoegigyii:
        goto uukmwmiaqigsqaug;
        qwgicaiskacusqka:
        $cgkyugweawsewkuu = stristr($this->agent, "\117\x50\x52");
        goto aekskqewqmeauaug;
        gmgwsqeqwquucyoo:
        $this->eywockmuswoykooc(true);
        goto csuemgeukskicmmi;
        ckgikcyggaegucyk:
        aqwaemcyooumguou:
        goto coyegiuygcqwmaqc;
        ycaooqesseeagoka:
        $this->name = self::BROWSER_OPERA;
        goto ccaqsekgkcqqayyg;
        sciiwomqgcamicqs:
        eaicyuessygcyuqu:
        goto aiaaaesgesgwsuck;
        wmcauamwimsyiauk:
        if (!isset($quiguswioiaaywey[1])) {
            goto sikkakqouqeckesc;
        }
        goto mmowusaeqemsisiq;
        iegksyacuckwoyiw:
        goto iggqqqegoegigyii;
        goto ggaoikewqkecamgs;
        kywqmsqusiysywqe:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\x70\145\162\141");
        goto swkkeqmaqugwiysy;
        yscyooysgqsyuayo:
        $this->name = self::BROWSER_OPERA_MINI;
        goto ssoogugiigiqooce;
        ggaoikewqkecamgs:
        smsuqgcummiyucsc:
        goto qwgicaiskacusqka;
        gouyqmyakowooiyw:
        cuyagmoysmwoceks:
        goto eyuieiqqgyowoocu;
        omusyecyksyowysk:
        $this->eywockmuswoykooc(true);
        goto kwsuumgiqsskggqy;
        iqwiyiisyasiwsiu:
        if (!(stripos($this->agent, "\115\x6f\x62\151\x6c\145") !== false)) {
            goto uqsmiiqigeisoyse;
        }
        goto omusyecyksyowysk;
        cyaaugsakiugouae:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto cemwkemiwicagmou;
        ieeieiuoeqquyaka:
        sackmgaomiwgeqca:
        goto qakmsceesmcwecmo;
        uyeiymmkkiyccakm:
        if (preg_match("\57\134\57\57", $cgkyugweawsewkuu)) {
            goto aqwaemcyooumguou;
        }
        goto scimuugawiiuemki;
        ukkkmakiisiqkacm:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\160\145\162\141"));
        goto mukwaeyamkyacewo;
        csuemgeukskicmmi:
        csguwgocosyisgyq:
        goto ycaooqesseeagoka;
        oucqmskiygmmsmye:
        goto iggqqqegoegigyii;
        goto ieeieiuoeqquyaka;
        ccaqsekgkcqqayyg:
        return true;
        goto iegksyacuckwoyiw;
        eiosgmsukekekyou:
        uiuyiuiocgycwaae:
        goto kywqmsqusiysywqe;
        akmiwuwwkeokegkq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oqyumeoumucciuao;
        yeayeuiggqoigwag:
        cqcomacmwgougkai:
        goto iqwiyiisyasiwsiu;
        aiaaaesgesgwsuck:
        asgwqocgsuugguse:
        goto yscyooysgqsyuayo;
        scimuugawiiuemki:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\160\145\x72\x61\x20\155\151\156\x69"));
        goto wmcauamwimsyiauk;
        aekskqewqmeauaug:
        if (!preg_match("\57\x5c\57\x2f", $cgkyugweawsewkuu)) {
            goto cqcomacmwgougkai;
        }
        goto ikuoukwawkkyaacy;
        coyegiuygcqwmaqc:
        $yikciqwsimweauyg = explode("\57", $cgkyugweawsewkuu);
        goto eukqocmusiasmewe;
        ggiacqackmguiiki:
        goto asgwqocgsuugguse;
        goto ckgikcyggaegucyk;
        myemqwquecqwakyq:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto qkmqkcwgskmyeoyq;
        ceskkigeaqcaasqs:
        $this->eywockmuswoykooc(true);
        goto wikueqyuegggkqoi;
        qkmqkcwgskmyeoyq:
        if (!(stripos($this->agent, "\x43\x68\x72\x6f\x6d\x65") !== false)) {
            goto uyuugesysqaueywi;
        }
        goto gqaoecysyaaccyyy;
        syuakiekoaowmoyy:
        uyuugesysqaueywi:
        goto symsqqgwwimugwue;
        wikueqyuegggkqoi:
        ugmggeiwogwcgcqy:
        goto qoigmymamwikqkce;
        kicmwgigiciiuqaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oymcieacieeqwses;
        gygkmqwkaiskgwws:
        $this->icigyueiiwsukmsu(true);
        goto awukkyueuqcaywks;
        ymyqsgymeusoakyi:
        ywukigwwwumwuicy:
        goto syuakiekoaowmoyy;
        akgyaaawgcecyoqc:
        ksmacqoqogyoookk:
        goto ceskkigeaqcaasqs;
        awukkyueuqcaywks:
        goto ugmggeiwogwcgcqy;
        goto akgyaaawgcecyoqc;
        ymkqceigmmuokugy:
        if (stripos($this->agent, "\x4d\157\x62\x69\x6c\145") !== false) {
            goto ksmacqoqogyoookk;
        }
        goto gygkmqwkaiskgwws;
        somyyugyumgeukik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ywukigwwwumwuicy;
        }
        goto oikasesimicoysmu;
        gqaoecysyaaccyyy:
        $yikciqwsimweauyg = preg_split("\x2f\133\x5c\57\73\135\53\x2f", stristr($this->agent, "\x43\x68\162\157\x6d\145"));
        goto somyyugyumgeukik;
        gsuqomaoosusiqew:
        return true;
        goto ymyqsgymeusoakyi;
        cggwmqyuewwisqsu:
        
        if (!(stripos($this->agent, "\101\x6e\144\162\x6f\151\144") !== false)) {
            goto mwcysigeamkwiwku;
        }
        goto ymkqceigmmuokugy;
        oymcieacieeqwses:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto cggwmqyuewwisqsu;
        symsqqgwwimugwue:
        return false;
        goto qymyaksieaiemaam;
        qoigmymamwikqkce:
        mwcysigeamkwiwku:
        goto gsuqomaoosusiqew;
        oikasesimicoysmu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kicmwgigiciiuqaw;
        qymyaksieaiemaam:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto acmqaeyciymmsgua;
        acmqaeyciymmsgua:
        if (!(stripos($this->agent, "\x77\145\x62\x74\x76") !== false)) {
            goto kkaqamsuqkgkwowo;
        }
        goto ewswyuykwuaigiyo;
        skawosaecygmqmsq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iugcwummaqmgiqgm;
        owaomgiwykiiesqs:
        return false;
        goto wkeoacqqekmaqogk;
        caomeykgioesgswg:
        kkaqamsuqkgkwowo:
        goto owaomgiwykiiesqs;
        iawosyeimcucqgky:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto skawosaecygmqmsq;
        cqmwuwoaqiumaogi:
        return true;
        goto aecesusucigikyqs;
        iugcwummaqmgiqgm:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto cqmwuwoaqiumaogi;
        ewswyuykwuaigiyo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\167\145\x62\164\166"));
        goto owuqwmsqouswswau;
        owuqwmsqouswswau:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ygeweomowkiskgec;
        }
        goto iawosyeimcucqgky;
        aecesusucigikyqs:
        ygeweomowkiskgec:
        goto caomeykgioesgswg;
        wkeoacqqekmaqogk:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto ueimcmmgwiommwwg;
        eqgyoucqmyyqqagc:
        return true;
        goto qomaksiaaooygwsg;
        seekksssaiokokyq:
        return false;
        goto vkcgsyecgukweyki;
        cyscaaaicmkkqies:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $quiguswioiaaywey[0]));
        goto wgmeusuigqsowace;
        kgeeikakwgkukkke:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cyscaaaicmkkqies;
        quqkggiycuoeaysg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iaewosqywiqiqmqs;
        }
        goto kgeeikakwgkukkke;
        asmgcmegmekauiqm:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\116\145\164\x50\x6f\x73\x69\164\x69\x76\x65"));
        goto quqkggiycuoeaysg;
        sqkqqasyecqeysww:
        bkmiygiccoagsyck:
        goto seekksssaiokokyq;
        wgmeusuigqsowace:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto eqgyoucqmyyqqagc;
        qomaksiaaooygwsg:
        iaewosqywiqiqmqs:
        goto sqkqqasyecqeysww;
        ueimcmmgwiommwwg:
        if (!(stripos($this->agent, "\x4e\145\164\120\157\x73\x69\164\151\166\x65") !== false)) {
            goto bkmiygiccoagsyck;
        }
        goto asmgcmegmekauiqm;
        vkcgsyecgukweyki:
    }
    
    protected function usswyskeuiskccki()
    {
        goto aiugcqaaymaasikk;
        gosqawkmwoukawsa:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto kqmsyeoyemocoiqs;
        aiugcqaaymaasikk:
        if (!(stripos($this->agent, "\x67\141\154\x65\157\x6e") !== false)) {
            goto ocegwkgcsegowucu;
        }
        goto cmmgaceguouaicok;
        cmmgaceguouaicok:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x67\x61\x6c\x65\x6f\x6e"));
        goto gosqawkmwoukawsa;
        siycmwciwoewsooi:
        ocegwkgcsegowucu:
        goto ceguiykycywoocuu;
        mqieeoagcesmykuy:
        return true;
        goto asmgcueacgcuokak;
        kqmsyeoyemocoiqs:
        if (!isset($quiguswioiaaywey[1])) {
            goto aiawyogcusykcgem;
        }
        goto iiksoosqisyggaks;
        iiksoosqisyggaks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto kkmwiocaqecosykg;
        asmgcueacgcuokak:
        aiawyogcusykcgem:
        goto siycmwciwoewsooi;
        kkmwiocaqecosykg:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto mqieeoagcesmykuy;
        ceguiykycywoocuu:
        return false;
        goto xwsiauqamwogkwmo;
        xwsiauqamwogkwmo:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto mksgqgcoeeksaiqe;
        ymykisoiiyyqeqim:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto mcqqawkmqiiyecey;
        ogcasmoaumciscii:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ymykisoiiyyqeqim;
        keqsgkcumkusgygg:
        return false;
        goto eqsqecmiugakueqm;
        yasusgwwwekossyy:
        csskywiguyamicyu:
        goto isygymaiseqgeiau;
        mksgqgcoeeksaiqe:
        if (!(stripos($this->agent, "\x4b\157\156\x71\165\145\162\x6f\x72") !== false)) {
            goto uceyoakcoqqgkmka;
        }
        goto owkecwacqesgqcaq;
        gggcyumymmmiuaeu:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto imaukawsimqgmauc;
        mcqqawkmqiiyecey:
        return true;
        goto yasusgwwwekossyy;
        owkecwacqesgqcaq:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x4b\157\x6e\161\x75\x65\x72\x6f\162"));
        goto gggcyumymmmiuaeu;
        imaukawsimqgmauc:
        if (!isset($quiguswioiaaywey[1])) {
            goto csskywiguyamicyu;
        }
        goto ogcasmoaumciscii;
        isygymaiseqgeiau:
        uceyoakcoqqgkmka:
        goto keqsgkcumkusgygg;
        eqsqecmiugakueqm:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto ecmeeksmaqyumykg;
        oswqmcgsewiscugq:
        ymqcqiyawcogwgym:
        goto guukcysyaquuekek;
        iyoukgscwmcoweqa:
        $quiguswioiaaywey = explode("\40", stristr(str_replace("\x2f", "\40", $this->agent), "\x69\143\x61\x62"));
        goto yagoyoogqkomucci;
        guukcysyaquuekek:
        cmwigsaskaamoema:
        goto ycmiqcakcweakeaa;
        kegmcwesswsaamum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto swuqimcsmiwqaaom;
        swuqimcsmiwqaaom:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto eacseogmmqokmogu;
        eacseogmmqokmogu:
        return true;
        goto oswqmcgsewiscugq;
        ecmeeksmaqyumykg:
        if (!(stripos($this->agent, "\x69\143\141\142") !== false)) {
            goto cmwigsaskaamoema;
        }
        goto iyoukgscwmcoweqa;
        ycmiqcakcweakeaa:
        return false;
        goto koakuemcskwaoesy;
        yagoyoogqkomucci:
        if (!isset($quiguswioiaaywey[1])) {
            goto ymqcqiyawcogwgym;
        }
        goto kegmcwesswsaamum;
        koakuemcskwaoesy:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ssewsumymwocqyyc;
        aesqewckgocaowoi:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto gsguoieaewagyogs;
        iimagwawmcgmaoga:
        return false;
        goto aaqekekaoaqgkiio;
        gsguoieaewagyogs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qskksaagcgukausc;
        ocesuggkygmwyoqu:
        return true;
        goto amwwumeqoscyamoc;
        ssewsumymwocqyyc:
        if (!(stripos($this->agent, "\x6f\155\156\151\167\x65\x62") !== false)) {
            goto cwyqqgwwmesmkiam;
        }
        goto qgoyesykieqauwqi;
        qgoyesykieqauwqi:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x6f\155\156\x69\167\145\x62"));
        goto aesqewckgocaowoi;
        qskksaagcgukausc:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto ocesuggkygmwyoqu;
        amwwumeqoscyamoc:
        cwyqqgwwmesmkiam:
        goto iimagwawmcgmaoga;
        aaqekekaoaqgkiio:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto sgyogmewgaymcogg;
        osoyyysskuckoocc:
        aomicoqgwkaiosso:
        goto kuimgaokwkqogaqk;
        wusygegyegamyioq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ksqsiosguewggcya;
        sgyogmewgaymcogg:
        if (!(stripos($this->agent, "\120\150\x6f\x65\156\x69\x78") !== false)) {
            goto aomicoqgwkaiosso;
        }
        goto omagiuciweiemoik;
        kuimgaokwkqogaqk:
        return false;
        goto iuumwocuuoyceaks;
        acasskokyagwkumy:
        ogoiksimykeiuekg:
        goto osoyyysskuckoocc;
        omagiuciweiemoik:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\x50\x68\x6f\x65\x6e\x69\x78"));
        goto uemcayqyeweiosqw;
        eiwccayegouiekwk:
        return true;
        goto acasskokyagwkumy;
        uemcayqyeweiosqw:
        if (!isset($quiguswioiaaywey[1])) {
            goto ogoiksimykeiuekg;
        }
        goto wusygegyegamyioq;
        ksqsiosguewggcya:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto eiwccayegouiekwk;
        iuumwocuuoyceaks:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto ukeaeogwsoackkas;
        kigsuwkmaacmwgsq:
        ssoogecumeaeekcs:
        goto qkymmwmmiemiauyg;
        ouseosmqaaykkaaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto mimmumuekmyyyaug;
        awyuyuuiayqoekkc:
        return true;
        goto eoemqkmecwqsagce;
        ukeaeogwsoackkas:
        if (!(stripos($this->agent, "\106\151\162\x65\x62\151\162\144") !== false)) {
            goto ssoogecumeaeekcs;
        }
        goto auaaassweykwwsge;
        qkymmwmmiemiauyg:
        return false;
        goto ykceeqicyiqgssye;
        sqgomkiuekmaykyw:
        if (!isset($quiguswioiaaywey[1])) {
            goto oewqywyeaueuiyes;
        }
        goto ouseosmqaaykkaaw;
        eoemqkmecwqsagce:
        oewqywyeaueuiyes:
        goto kigsuwkmaacmwgsq;
        auaaassweykwwsge:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\106\x69\162\145\x62\151\162\x64"));
        goto sqgomkiuekmaykyw;
        mimmumuekmyyyaug:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto awyuyuuiayqoekkc;
        ykceeqicyiqgssye:
    }
    
    protected function aweyeayscomouegw()
    {
        goto icmgwgoywmewyeii;
        yuaommqaoiseeice:
        return false;
        goto cciuyoceqiauqsic;
        aoasogsaqgewacum:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto kyisocwmmwaiwayk;
        mocwcekscogegcwa:
        if (stripos($this->agent, "\106\151\x72\145\146\x6f\x78") === false && preg_match("\57\116\145\x74\x73\x63\141\x70\145\x36\x3f\134\57\50\133\136\x20\x5d\x2a\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ycaskcwiywemgmay;
        }
        goto aqewaqaseausoewg;
        ccokywiouwwmiwse:
        ycaskcwiywemgmay:
        goto ysmckuskoqmsyaca;
        mgqmswesaekqqwiu:
        qwmuiakauycoowya:
        goto yuaommqaoiseeice;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        icmgwgoywmewyeii:
        if (stripos($this->agent, "\x46\151\x72\x65\x66\x6f\x78") !== false && preg_match("\57\x4e\x61\x76\151\x67\141\x74\x6f\162\134\57\x28\x5b\136\x20\135\x2a\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto csgyceiomssoweek;
        }
        goto mocwcekscogegcwa;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        aegamiyqqcwuqcyk:
        csgyceiomssoweek:
        goto ecsuogeauwascies;
        mogugiawmaoukmak:
        goto qwmuiakauycoowya;
        goto ccokywiouwwmiwse;
        kyisocwmmwaiwayk:
        return true;
        goto mogugiawmaoukmak;
        ecsuogeauwascies:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aoasogsaqgewacum;
        aqewaqaseausoewg:
        goto qwmuiakauycoowya;
        goto aegamiyqqcwuqcyk;
        cciuyoceqiauqsic:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto ikcmeaikkuekumye;
        meamoqcwwsqiyoqc:
        return false;
        goto wsmwmwswqaoeaquq;
        uuskeoeuumiigues:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto weekemioaaygmggw;
        ycgokycmgosuamok:
        return true;
        goto mqweugciiyyukymg;
        ikcmeaikkuekumye:
        if (!(stripos($this->agent, "\115\x6f\x7a\151\x6c\x6c\x61") !== false && preg_match("\x2f\123\150\151\162\145\164\x6f\x6b\x6f\x5c\x2f\x28\x5b\136\x20\x5d\52\51\57\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto oekaqqseuemcgeqe;
        }
        goto uuskeoeuumiigues;
        mqweugciiyyukymg:
        oekaqqseuemcgeqe:
        goto meamoqcwwsqiyoqc;
        weekemioaaygmggw:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto ycgokycmgosuamok;
        wsmwmwswqaoeaquq:
    }
    
    protected function noeygigqkeciickm()
    {
        goto gmcieuucmgkcoyii;
        kscocsoaygkcaocq:
        return false;
        goto akqgwckwiiugwiay;
        gmcieuucmgkcoyii:
        if (!(stripos($this->agent, "\115\x6f\172\x69\x6c\154\141") !== false && preg_match("\x2f\111\x63\x65\x43\x61\x74\134\x2f\50\x5b\136\40\x5d\52\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto aeecqkykiqyuqmyg;
        }
        goto waqwkysqcskykuum;
        waqwkysqcskykuum:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto yuqemymykuasskoy;
        mmeumymqusiaiugs:
        return true;
        goto qcqqieuakcakkwem;
        qcqqieuakcakkwem:
        aeecqkykiqyuqmyg:
        goto kscocsoaygkcaocq;
        yuqemymykuasskoy:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto mmeumymqusiaiugs;
        akqgwckwiiugwiay:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto qmssaeiomssoycas;
        qmcmakumyemsuoaa:
        if (stripos($this->agent, "\123\x65\162\x69\x65\x73\66\x30") !== false || strpos($this->agent, "\x53\x36\60") !== false) {
            goto qgocscwqkuyemmcw;
        }
        goto kgwewosygiuoiigk;
        myycwmecoyeekeus:
        swusuwwawauqqqae:
        goto aaymugikaeaqsaos;
        qogciqauggmmigia:
        oiuiwkywiekacygs:
        goto semoayicskccgemw;
        qmssaeiomssoycas:
        if (!preg_match("\57\x4e\157\153\151\x61\50\x5b\x5e\134\57\135\53\51\x5c\x2f\50\133\136\x20\x53\x50\x5d\x2b\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto swusuwwawauqqqae;
        }
        goto wamigcygcsucigmi;
        semoayicskccgemw:
        $this->eywockmuswoykooc(true);
        goto ouigaoeeokmqaqoe;
        kgwewosygiuoiigk:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto mqqqqeiimsgyacaw;
        ouigaoeeokmqaqoe:
        return true;
        goto myycwmecoyeekeus;
        aaymugikaeaqsaos:
        return false;
        goto ewoywsgmimyigwai;
        iaumckssomaweakk:
        qgocscwqkuyemmcw:
        goto uqsgmacmweuuwqgy;
        wamigcygcsucigmi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qmcmakumyemsuoaa;
        uqsgmacmweuuwqgy:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto qogciqauggmmigia;
        mqqqqeiimsgyacaw:
        goto oiuiwkywiekacygs;
        goto iaumckssomaweakk;
        ewoywsgmimyigwai:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto koiuecgmeyuiwqkk;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        mkyoiqgumggcsakq:
        goto smyugaykeesyuakw;
        goto oakyyiqquqsccuks;
        yysucuowuoiskkui:
        return false;
        goto wguwcgascccyeasu;
        giiusoakskiciase:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto wkeeueuiysyiqaoq;
        oqqooygakaagaiqw:
        uqemmmykkceucwum:
        goto qaqckwcumcykqcay;
        iaksmguwicewykey:
        smyugaykeesyuakw:
        goto qegwssscaomyoekg;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        koiuecgmeyuiwqkk:
        if (!(stripos($this->agent, "\x73\141\146\x61\162\x69") === false)) {
            goto uioaeuugwsakiykw;
        }
        goto rkaswcmccyqqioqs;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        qaqckwcumcykqcay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto giiusoakskiciase;
        gsiigogemgmesycs:
        goto smyugaykeesyuakw;
        goto oqqooygakaagaiqw;
        oakyyiqquqsccuks:
        euoqiuygwwssoqou:
        goto cwoaoecuqyiccwcw;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc('');
        goto osioeeokiykiemau;
        rkaswcmccyqqioqs:
        if (preg_match("\x2f\120\141\154\x65\x6d\x6f\157\156\133\134\57\x20\134\50\x5d\x28\x5b\x5e\40\73\134\51\135\x2b\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto uqemmmykkceucwum;
        }
        goto yseakuykcykcomwg;
        koomcmawyuomqmii:
        yseikqceqguugaee:
        goto smeqeomcqisgssau;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        wkeeueuiysyiqaoq:
        return true;
        goto mkyoiqgumggcsakq;
        yseakuykcykcomwg:
        if (preg_match("\x2f\x50\x61\x6c\145\155\157\157\156\x28\133\60\x2d\71\x61\55\172\101\55\132\134\56\x5d\53\x29\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto euoqiuygwwssoqou;
        }
        goto uiskkgkcyssegigy;
        qegwssscaomyoekg:
        uioaeuugwsakiykw:
        goto yysucuowuoiskkui;
        uiskkgkcyssegigy:
        if (preg_match("\x2f\120\x61\x6c\x65\155\x6f\157\156\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseikqceqguugaee;
        }
        goto gsiigogemgmesycs;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        wcosggqmokuwgomy:
        goto smyugaykeesyuakw;
        goto koomcmawyuomqmii;
        wguwcgascccyeasu:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto iksugmewgigsiaec;
        ywgwuqyisimkacqe:
        aomoesqmwqcyueoa:
        goto iioueceaesegmgyi;
        miwaaaueiacyqequ:
        imimwegqkykucuia:
        goto baqgcseewusocmom;
        iksugmewgigsiaec:
        if (!preg_match("\57\x55\103\40\x3f\102\162\x6f\167\163\145\x72\134\x2f\77\x28\x5b\x5c\144\x5c\x2e\x5d\53\51\57", $this->agent, $meyiiwcswqmuggyg)) {
            goto imimwegqkykucuia;
        }
        goto ewqooaykuauegwio;
        omygyywamgusigko:
        $this->icigyueiiwsukmsu(true);
        goto gouiskmmqywoscgm;
        ewqooaykuauegwio:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto aomoesqmwqcyueoa;
        }
        goto jimwweuekesuemiy;
        wousqisikkiooewi:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto wwamkekgkkiogiiu;
        seyoowocwsqsekqi:
        $this->eywockmuswoykooc(true);
        goto yoqwqkuekiauqsuc;
        yoqwqkuekiauqsuc:
        cqouacqmcegmykuu:
        goto wousqisikkiooewi;
        gouiskmmqywoscgm:
        goto cqouacqmcegmykuu;
        goto uwcawmmgcaecgyqm;
        iioueceaesegmgyi:
        if (stripos($this->agent, "\115\157\x62\x69\x6c\145") !== false) {
            goto yggwmccmmiemueou;
        }
        goto omygyywamgusigko;
        baqgcseewusocmom:
        return false;
        goto akkuysmcasqukkug;
        uwcawmmgcaecgyqm:
        yggwmccmmiemueou:
        goto seyoowocwsqsekqi;
        jimwweuekesuemiy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ywgwuqyisimkacqe;
        wwamkekgkkiogiiu:
        return true;
        goto miwaaaueiacyqequ;
        akkuysmcasqukkug:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto escuksewiugekayq;
        uaigiceqkuiguogo:
        goto mmomogyaswcsgwwy;
        goto gseqciagemceawam;
        wgiwseywikgwumwe:
        
        if (!(stripos($this->agent, "\x41\156\144\x72\157\151\x64") !== false || stripos($this->agent, "\151\120\150\157\156\x65") !== false)) {
            goto usmieesmayeskkmk;
        }
        goto rkoyiagmcaycmwmg;
        qyogimcocyqgyyee:
        goto yqyyssciomuwwisa;
        goto aksacseyuwyiseay;
        ikiegwiqykqwuykk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qmycieyiysuesagy;
        iammommmgkimyyaa:
        amcioyyyuiigekuo:
        goto cwycmkkoscmgcecg;
        wggeuckgywqucase:
        
        if (!(stripos($this->agent, "\101\x6e\x64\x72\x6f\151\144") !== false || stripos($this->agent, "\151\x50\x68\157\x6e\x65") !== false)) {
            goto sqsgeccoawoeukws;
        }
        goto seggycoceaokwcsa;
        amksqwmicsmyocyw:
        goto yqyyssciomuwwisa;
        goto wcaiuquuswsqacgg;
        gqaiguosioisccwm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qwwscygkwwsiocok;
        kaycawgquiieeaiw:
        goto mmomogyaswcsgwwy;
        goto ngeuswkcwioygkku;
        aksacseyuwyiseay:
        coyskeyoikeaqoek:
        goto sgaqioqcecwgyikg;
        agiiusmyqqkgqymk:
        goto kmwseockoawqkoao;
        goto iammommmgkimyyaa;
        kwuakeywaocokwig:
        gaqigeacswyyikkk:
        goto wowiaueqaaqckwqq;
        yewmigswwuewyqki:
        qagasowcequukwoc:
        goto guwmgkcgaoysewyw;
        ciimuiiegyeaggya:
        return true;
        goto gokkyeisqkoccqis;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc('');
        goto usaooeqiaewcmyog;
        qwwscygkwwsiocok:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wggeuckgywqucase;
        oymsgiwgeiqguuyy:
        if (preg_match("\57\x46\151\x72\145\146\157\170\x5b\x5c\57\x20\134\50\135\x28\133\136\x20\73\134\x29\x5d\53\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto cskgiyqesqqawuwo;
        }
        goto ygoomqwcsggeiuge;
        aqcucyeikgmemsoq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wgsqeuaooemcuqqu;
        aygkuykcicgceciq:
        return true;
        goto kiocmmsiuwcuemyg;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        gokkyeisqkoccqis:
        goto yqyyssciomuwwisa;
        goto ymmqwacaoayoyiei;
        kiqiskyesywkwkos:
        kmwseockoawqkoao:
        goto ksogiaquuskeygaq;
        rkoyiagmcaycmwmg:
        if (stripos($this->agent, "\115\157\142\x69\x6c\145") !== false || stripos($this->agent, "\x54\x61\142\x6c\x65\x74") !== false) {
            goto amcioyyyuiigekuo;
        }
        goto egqqigmomgaaamqc;
        cwycmkkoscmgcecg:
        $this->eywockmuswoykooc(true);
        goto kiqiskyesywkwkos;
        qmycieyiysuesagy:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wgiwseywikgwumwe;
        guwmgkcgaoysewyw:
        sqsgeccoawoeukws:
        goto ciimuiiegyeaggya;
        ksogiaquuskeygaq:
        usmieesmayeskkmk:
        goto aygkuykcicgceciq;
        gseqciagemceawam:
        wwmqgecmsimuecam:
        goto ikiegwiqykqwuykk;
        kuegskyiyugiuosa:
        yqyyssciomuwwisa:
        goto uaigiceqkuiguogo;
        ygoomqwcsggeiuge:
        if (preg_match("\x2f\106\151\x72\145\146\x6f\170\x28\x5b\60\x2d\x39\x61\x2d\172\x41\x2d\x5a\134\x2e\135\x2b\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto sgwiageicumuqwke;
        }
        goto qkqwgsoymmqsqeim;
        wcaiuquuswsqacgg:
        cskgiyqesqqawuwo:
        goto gqaiguosioisccwm;
        wgsqeuaooemcuqqu:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wwqoywoqcyikouca;
        wowiaueqaaqckwqq:
        $this->eywockmuswoykooc(true);
        goto yewmigswwuewyqki;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        iqmgswgoooqkkigo:
        $this->icigyueiiwsukmsu(true);
        goto aoosuewasqmmyqoi;
        aoosuewasqmmyqoi:
        goto qagasowcequukwoc;
        goto kwuakeywaocokwig;
        egqqigmomgaaamqc:
        $this->icigyueiiwsukmsu(true);
        goto agiiusmyqqkgqymk;
        ymmqwacaoayoyiei:
        sgwiageicumuqwke:
        goto aqcucyeikgmemsoq;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        kiocmmsiuwcuemyg:
        mmomogyaswcsgwwy:
        goto cguuomiqwuicsgwa;
        wgcmsygycukiqmui:
        if (preg_match("\57\x46\170\151\117\x53\x5b\134\x2f\x20\134\50\135\50\133\136\40\x3b\x5c\51\x5d\53\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto wwmqgecmsimuecam;
        }
        goto kaycawgquiieeaiw;
        qkqwgsoymmqsqeim:
        if (preg_match("\57\x46\151\162\x65\146\157\170\x24\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto coyskeyoikeaqoek;
        }
        goto amksqwmicsmyocyw;
        ngeuswkcwioygkku:
        qwyameqoseiywwus:
        goto oymsgiwgeiqguuyy;
        escuksewiugekayq:
        if (stripos($this->agent, "\163\141\146\141\162\151") === false) {
            goto qwyameqoseiywwus;
        }
        goto wgcmsygycukiqmui;
        seggycoceaokwcsa:
        if (stripos($this->agent, "\115\x6f\x62\151\154\145") !== false || stripos($this->agent, "\x54\x61\x62\x6c\x65\x74") !== false) {
            goto gaqigeacswyyikkk;
        }
        goto iqmgswgoooqkkigo;
        cguuomiqwuicsgwa:
        return false;
        goto yqggmewmakemgkui;
        yqggmewmakemgkui:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto igsmwamoyswayqiy;
        mquksyyawiwsakwy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qoguisoimaueiaoo;
        }
        goto coosgwiiekamiyug;
        igsmwamoyswayqiy:
        if (!(stripos($this->agent, "\111\143\x65\167\145\141\163\x65\x6c") !== false)) {
            goto eowkmiqqmqyeayci;
        }
        goto gyomccegicuoyguk;
        mgqockcuascmkosg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qiocyqceaiyiakii;
        coosgwiiekamiyug:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mgqockcuascmkosg;
        umacsiiqmwygcycu:
        return false;
        goto agsoqikgikksqkom;
        wasmuqumoqqcmgys:
        qoguisoimaueiaoo:
        goto mokuaeasioyuisqs;
        gyomccegicuoyguk:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x49\143\145\x77\x65\x61\163\x65\154"));
        goto mquksyyawiwsakwy;
        qqaeaoygygacuuos:
        return true;
        goto wasmuqumoqqcmgys;
        mokuaeasioyuisqs:
        eowkmiqqmqyeayci:
        goto umacsiiqmwygcycu;
        qiocyqceaiyiakii:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto qqaeaoygygacuuos;
        agsoqikgikksqkom:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto qscgsguyqggkagoe;
        uieyawsyauemyqgy:
        iscqcsqyqkmkgkag:
        goto uciuogooymiyqyao;
        gwigmqemwuqewiae:
        eoewsuaewaeueaks:
        goto kkweuygueeaqsksg;
        gmeiquwcawwmowwm:
        if (stripos($this->agent, "\x6d\x6f\172\x69\x6c\x6c\141") !== false && preg_match("\57\155\157\172\x69\x6c\154\x61\134\57\50\133\x5e\x20\x5d\52\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\x6e\x65\164\x73\x63\141\160\x65") === false) {
            goto eoewsuaewaeueaks;
        }
        goto ameeyqiguwmykwai;
        eoeoqacqgmumwcuk:
        return true;
        goto wmssuwyesuyeiows;
        uciuogooymiyqyao:
        return false;
        goto msmouyoaqcwsasuw;
        uusaeowyacskgumg:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eoeoqacqgmumwcuk;
        usaokwsyegousimg:
        preg_match("\57\x72\x76\72\133\x30\x2d\x39\135\56\133\60\x2d\71\135\x5b\x61\55\142\135\77\x2f\x69", $this->agent, $quiguswioiaaywey);
        goto ckgoiwueekyamwcu;
        awceesgmgquwakuu:
        if (stripos($this->agent, "\x6d\157\172\x69\154\x6c\141") !== false && preg_match("\x2f\x72\x76\x3a\133\60\x2d\71\x5d\x5c\x2e\133\60\55\x39\x5d\57\151", $this->agent) && stripos($this->agent, "\156\145\x74\163\143\141\160\145") === false) {
            goto uogoykaeoysgmism;
        }
        goto gmeiquwcawwmowwm;
        eswswyigkwqaaasy:
        skkmiiyukuqmiimc:
        goto mcukkaquiosmsguy;
        eyimkecocwsicyge:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto ooswoacocwcgoagc;
        ckgoiwueekyamwcu:
        $this->aasasueowyemuyoc(str_replace("\162\166\72", '', $quiguswioiaaywey[0]));
        goto uusaeowyacskgumg;
        qscgsguyqggkagoe:
        if (stripos($this->agent, "\x6d\157\172\151\154\154\x61") !== false && preg_match("\x2f\x72\166\x3a\x5b\60\55\71\x5d\x2e\133\x30\55\71\135\133\141\55\142\x5d\x3f\x2f\x69", $this->agent) && stripos($this->agent, "\156\145\x74\163\x63\141\160\x65") === false) {
            goto skkmiiyukuqmiimc;
        }
        goto awceesgmgquwakuu;
        wmssuwyesuyeiows:
        goto iscqcsqyqkmkgkag;
        goto kwkcmwgyiwyacywi;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iyqmmwymomwqiqaw;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        kwkcmwgyiwyacywi:
        uogoykaeoysgmism:
        goto siyeyakoauowwose;
        ameeyqiguwmykwai:
        goto iscqcsqyqkmkgkag;
        goto eswswyigkwqaaasy;
        kyqewaqymicucwuc:
        goto iscqcsqyqkmkgkag;
        goto gwigmqemwuqewiae;
        ooswoacocwcgoagc:
        return true;
        goto kyqewaqymicucwuc;
        siyeyakoauowwose:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\166\72"));
        goto eaawsaueyyoiqoao;
        mcukkaquiosmsguy:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\x72\x76\72"));
        goto usaokwsyegousimg;
        eaawsaueyyoiqoao:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto eyimkecocwsicyge;
        msmouyoaqcwsasuw:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto oayqqymykwwugkwe;
        qsqskaukgysseokg:
        return false;
        goto seswyksiukyeqkqc;
        cqayoeygyqqamquk:
        return true;
        goto cmowiicqgqiakqem;
        oayqqymykwwugkwe:
        if (!(stripos($this->agent, "\154\x79\156\x78") !== false)) {
            goto ymqwkscegcogqqwy;
        }
        goto wwwqiimkicqiuwui;
        cmowiicqgqiakqem:
        ymqwkscegcogqqwy:
        goto qsqskaukgysseokg;
        gyoiekqiqwwquomc:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto cqayoeygyqqamquk;
        wwwqiimkicqiuwui:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x4c\x79\x6e\x78"));
        goto qewckkocqykmeywg;
        ugsumemcqucesssg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gyoiekqiqwwquomc;
        qewckkocqykmeywg:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto ugsumemcqucesssg;
        seswyksiukyeqkqc:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto sgwucycigkyieoea;
        sgwucycigkyieoea:
        if (!(stripos($this->agent, "\141\x6d\141\171\141") !== false)) {
            goto eiiemassiceeqmeq;
        }
        goto ksswuscweggkeiko;
        wwyeoccuqgcgcuuc:
        eiiemassiceeqmeq:
        goto yksmaaesmwecwoak;
        qsoukmmoqeuqsoee:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iieeiugaeeqyaqok;
        }
        goto ukiiyimwmgiqisca;
        mksgcawyikcceiqa:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto gkaykeoacgugeumu;
        gkaykeoacgugeumu:
        return true;
        goto uuqskowyckcgagkc;
        yksmaaesmwecwoak:
        return false;
        goto sgsaqgwgakicwckk;
        uuqskowyckcgagkc:
        iieeiugaeeqyaqok:
        goto wwyeoccuqgcgcuuc;
        ukiiyimwmgiqisca:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ocoaeuqqauqewyig;
        ksswuscweggkeiko:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x41\155\141\171\141"));
        goto qsoukmmoqeuqsoee;
        ocoaeuqqauqewyig:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mksgcawyikcceiqa;
        sgsaqgwgakicwckk:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto iaiekaygcqmocmee;
        wguukissuqyuqeku:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\x65\162\163\151\x6f\156"));
        goto ggwywcekieoyeuya;
        wayscwykqcwqgqyi:
        wekysuykykiweqms:
        goto ccsysoygswagacce;
        kycikakmkwkieqwk:
        kacseggomkeowiqm:
        goto qkgkkwcagegkwkwi;
        eyowigugugmmkeiw:
        eiqmqaiyewsgyois:
        goto yieeukyoaeioqock;
        ccsysoygswagacce:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto kgecmyesgkacyyqm;
        qkgkkwcagegkwkwi:
        return false;
        goto oioqgywuoiaisyuu;
        yieeukyoaeioqock:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto jawaweyeoaoueooa;
        jawaweyeoaoueooa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wayscwykqcwqgqyi;
        kewymgqeemiuewca:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto scooeumumiwmgowm;
        scooeumumiwmgowm:
        goto wekysuykykiweqms;
        goto eyowigugugmmkeiw;
        iaiekaygcqmocmee:
        if (!(stripos($this->agent, "\x53\141\x66\x61\162\151") !== false && stripos($this->agent, "\x69\x50\150\x6f\156\x65") === false && stripos($this->agent, "\151\x50\157\x64") === false)) {
            goto kacseggomkeowiqm;
        }
        goto wguukissuqyuqeku;
        ggwywcekieoyeuya:
        if (isset($yikciqwsimweauyg[1])) {
            goto eiqmqaiyewsgyois;
        }
        goto kewymgqeemiuewca;
        kgecmyesgkacyyqm:
        return true;
        goto kycikakmkwkieqwk;
        oioqgywuoiaisyuu:
    }
    protected function yswggmyigakcackc()
    {
        goto yiamqaqsueaiqwuq;
        keyciqmuisymkgcw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto moyywqqiasmyoscc;
        ggqwsgmqqyaicosm:
        uuqaakyqgqwiiwom:
        goto iieymwaigukwymsc;
        aiyqwwuiayikques:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto swgqwkyuwoqeyeyu;
        swgqwkyuwoqeyeyu:
        return true;
        goto ggqwsgmqqyaicosm;
        mceeomsqguaacseg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\141\x6d\163\165\x6e\147\x42\x72\157\167\x73\145\x72"));
        goto mkumickumqmmkiqc;
        gsyquwaygesygkiq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto keyciqmuisymkgcw;
        qugekewwywkuiqyk:
        goto essqemwiweimukwe;
        goto qwmyieguwoysqegw;
        qwmyieguwoysqegw:
        iqymaeimsmwkkkie:
        goto gsyquwaygesygkiq;
        mkumickumqmmkiqc:
        if (isset($yikciqwsimweauyg[1])) {
            goto iqymaeimsmwkkkie;
        }
        goto cwcuamqicskkmuyg;
        iieymwaigukwymsc:
        return false;
        goto mcqygaykwaaseack;
        yiamqaqsueaiqwuq:
        if (!(stripos($this->agent, "\123\x61\x6d\163\x75\156\x67\x42\x72\157\x77\x73\145\x72") !== false)) {
            goto uuqaakyqgqwiiwom;
        }
        goto mceeomsqguaacseg;
        moyywqqiasmyoscc:
        essqemwiweimukwe:
        goto aiyqwwuiayikques;
        cwcuamqicskkmuyg:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qugekewwywkuiqyk;
        mcqygaykwaaseack:
    }
    protected function uiwkymoksesuumwe()
    {
        goto kcckgokmwuywmaiw;
        yuyccgsguyaaygmu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto smagqkegqiooysya;
        qoamoegiiwismakk:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wqswcaeeyeaqieom;
        eiissuweooqsaauy:
        raigmgqaksaqoosc:
        goto kakgceiyakaueuww;
        yegcwkkemkycyuua:
        return false;
        goto wuoaeksukwwaycoi;
        yccweyyksqycwuqi:
        if (isset($yikciqwsimweauyg[1])) {
            goto aukkqqimoumiiccy;
        }
        goto qoamoegiiwismakk;
        wqswcaeeyeaqieom:
        goto raigmgqaksaqoosc;
        goto oakguomioocmeiia;
        kakgceiyakaueuww:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto uqieceoogswuggos;
        oakguomioocmeiia:
        aukkqqimoumiiccy:
        goto yuyccgsguyaaygmu;
        uqieceoogswuggos:
        return true;
        goto mmuomyiooicyqscg;
        kcckgokmwuywmaiw:
        if (!(stripos($this->agent, "\123\x69\154\x6b") !== false)) {
            goto ascewisaoqauaymk;
        }
        goto iwoquisgaegiocss;
        iwoquisgaegiocss:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\151\154\x6b"));
        goto yccweyyksqycwuqi;
        smagqkegqiooysya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eiissuweooqsaauy;
        mmuomyiooicyqscg:
        ascewisaoqauaymk:
        goto yegcwkkemkycyuua;
        wuoaeksukwwaycoi:
    }
    protected function cgqcukygysieeqko()
    {
        goto emaeckumgkmgcaew;
        mkywwqusckeeisiy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qskoquwmkkgkkmuy;
        cucsooyoayssmcas:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mkywwqusckeeisiy;
        ysoiwegyoqymuuek:
        eusmcuqiciwcooss:
        goto cucsooyoayssmcas;
        oqqscigyquseosya:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto akqsaiecouuqacks;
        emaeckumgkmgcaew:
        if (!(stripos($this->agent, "\111\146\x72\x61\x6d\x65\x6c\171") !== false)) {
            goto dwyqyusgqwqwomqk;
        }
        goto wiamyucsaoosmoei;
        iiwmmqqaqckwwiqe:
        if (isset($yikciqwsimweauyg[1])) {
            goto eusmcuqiciwcooss;
        }
        goto oqqscigyquseosya;
        akqsaiecouuqacks:
        goto gamusuoqieekieka;
        goto ysoiwegyoqymuuek;
        ckguemuwukmeycag:
        return false;
        goto ayqocaaesmkygque;
        wacgcmsgismsomma:
        dwyqyusgqwqwomqk:
        goto ckguemuwukmeycag;
        qskoquwmkkgkkmuy:
        gamusuoqieekieka:
        goto qyskykugeiqkauce;
        cguckckouuwacmow:
        return true;
        goto wacgcmsgismsomma;
        wiamyucsaoosmoei:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x49\146\x72\141\x6d\x65\154\171"));
        goto iiwmmqqaqckwwiqe;
        qyskykugeiqkauce:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto cguckckouuwacmow;
        ayqocaaesmkygque:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto qkeuasieckwuqseq;
        iywyeuaaoaeymmag:
        if (isset($yikciqwsimweauyg[1])) {
            goto usaseckaaaugcygu;
        }
        goto wsiggqyeiueeyqyu;
        qkeuasieckwuqseq:
        if (!(stripos($this->agent, "\103\157\143\157\141\122\x65\x73\x74\103\x6c\151\145\x6e\x74") !== false)) {
            goto qquimmcqqiyegcym;
        }
        goto ouaokeyacuscccyu;
        eeqsuowcmyeyuoqw:
        usaseckaaaugcygu:
        goto auaukkuskuciowkq;
        wsiggqyeiueeyqyu:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ikcsgymqsagymgco;
        wygcwcywyeosuemq:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto ymcqcaygueguiuig;
        ikcsgymqsagymgco:
        goto muouqwckwywsgiwg;
        goto eeqsuowcmyeyuoqw;
        iwwouqosmwummgsi:
        muouqwckwywsgiwg:
        goto wygcwcywyeosuemq;
        ouaokeyacuscccyu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x43\157\x63\x6f\141\122\x65\163\x74\x43\x6c\151\145\x6e\x74"));
        goto iywyeuaaoaeymmag;
        wwiysyawwqeuikcc:
        return false;
        goto soqmkkwmmkqiweau;
        eiwuwemqmigskwoe:
        qquimmcqqiyegcym:
        goto wwiysyawwqeuikcc;
        ymcqcaygueguiuig:
        return true;
        goto eiwuwemqmigskwoe;
        osygawsacakgggko:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iwwouqosmwummgsi;
        auaukkuskuciowkq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto osygawsacakgggko;
        soqmkkwmmkqiweau:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto oqoyyooooyegowuk;
        aogimqgcygkugqoc:
        return true;
        goto kwmkgoegswsseyia;
        kwmkgoegswsseyia:
        sqwwkouiqayeqeyo:
        goto gkkogauyaimaaoky;
        gkkogauyaimaaoky:
        return false;
        goto akocagcmqwymsqqw;
        kuqeksgikkymkyeo:
        $this->oqgqmcogeugkakss(true);
        goto aogimqgcygkugqoc;
        oqoyyooooyegowuk:
        if (!stristr($this->agent, "\x46\x61\x63\x65\142\x6f\157\153\105\x78\x74\x65\x72\x6e\x61\154\110\x69\164")) {
            goto sqwwkouiqayeqeyo;
        }
        goto kggwwgeqkgwyoseq;
        kggwwgeqkgwyoseq:
        $this->aasmeayouwmacaow(true);
        goto kuqeksgikkymkyeo;
        akocagcmqwymsqqw:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto qioeweaouoiyoayy;
        ssyeoucmcqaewkws:
        $this->oqgqmcogeugkakss(true);
        goto gukuouumaoiiugiw;
        soyeimgmemqugquc:
        return false;
        goto gosqmqqycwquosse;
        gukuouumaoiiugiw:
        return true;
        goto ayyeoeyyawiuiukq;
        ayyeoeyyawiuiukq:
        ckyyyqokcocsmium:
        goto soyeimgmemqugquc;
        qioeweaouoiyoayy:
        if (!stristr($this->agent, "\106\x42\x49\x4f\x53")) {
            goto ckyyyqokcocsmium;
        }
        goto ssyeoucmcqaewkws;
        gosqmqqycwquosse:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto kekiekeeqkowaiga;
        eqocwcasskyqeauu:
        return false;
        goto kkiiykemaoeswsay;
        iuugeqgkacqmuais:
        cwgiecqggoksyuko:
        goto eqocwcasskyqeauu;
        wscoawgsgqekweuq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cwgiecqggoksyuko;
        }
        goto ysuyamauyegkceea;
        oaoaskeocoucoaes:
        return true;
        goto iuugeqgkacqmuais;
        ysuyamauyegkceea:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wqmmaiwyoumwmiyi;
        kekiekeeqkowaiga:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\x65\162\163\x69\157\x6e"));
        goto wscoawgsgqekweuq;
        wqmmaiwyoumwmiyi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oaoaskeocoucoaes;
        kkiiykemaoeswsay:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto oyswaymeoiouuaoo;
        oyswaymeoiouuaoo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\103\x72\151\x4f\123"));
        goto ycagakkcsskiqweu;
        aykkiwwmmckueiak:
        uiseoyicaoyaokum:
        goto gmiywscmoiqcceks;
        imumueocakucecam:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ssciauiqmswaugss;
        yuokckkqcuumcmua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imumueocakucecam;
        ssciauiqmswaugss:
        return true;
        goto aykkiwwmmckueiak;
        gqsmmaqkuciiwwki:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yuokckkqcuumcmua;
        ycagakkcsskiqweu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiseoyicaoyaokum;
        }
        goto gqsmmaqkuciiwwki;
        gmiywscmoiqcceks:
        return false;
        goto ikumyeymcsyyuauw;
        ikumyeymcsyyuauw:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto uywiwaiokksgwuqm;
        ykqeyymweawywsia:
        $this->ssquiwqwwcgcqiic();
        goto awoyakoygoouaqgi;
        yyagogoiskcuomuq:
        return true;
        goto cwmsekismgywawai;
        yisqaaicegsokeuk:
        $this->iqsiguacookiqwcs();
        goto ykqeyymweawywsia;
        messwieuimiowsag:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto gousoguwcwieyseq;
        awoyakoygoouaqgi:
        $this->eywockmuswoykooc(true);
        goto yyagogoiskcuomuq;
        cwmsekismgywawai:
        keuamggsqkcwyoqi:
        goto aooeicywwyscawue;
        wouosmamsmggekic:
        $this->uewoqoqkekmsyoeo();
        goto yisqaaicegsokeuk;
        gousoguwcwieyseq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto wouosmamsmggekic;
        aooeicywwyscawue:
        return false;
        goto qemqoaymwywkewmy;
        uywiwaiokksgwuqm:
        if (!(stripos($this->agent, "\x69\x50\x68\157\156\x65") !== false)) {
            goto keuamggsqkcwyoqi;
        }
        goto messwieuimiowsag;
        qemqoaymwywkewmy:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto emsgawiqsesiiccg;
        eekkyoakqmykcqec:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ismcyiwkmqaaygge;
        emsgawiqsesiiccg:
        if (!(stripos($this->agent, "\151\x50\141\x64") !== false)) {
            goto lwaoqwcmyiqkkouw;
        }
        goto eekkyoakqmykcqec;
        wugyaiqayoamwacg:
        $this->uewoqoqkekmsyoeo();
        goto secssyuygoycmiqa;
        syosmkmiyacocysi:
        $this->icigyueiiwsukmsu(true);
        goto soiuksqqwmsqwyeq;
        sokqsksiecasgugs:
        return false;
        goto qyaiyoskqmqyyuos;
        qwscyqgokmkeqwuq:
        $this->ssquiwqwwcgcqiic();
        goto syosmkmiyacocysi;
        kiauseesqiwimyue:
        lwaoqwcmyiqkkouw:
        goto sokqsksiecasgugs;
        secssyuygoycmiqa:
        $this->iqsiguacookiqwcs();
        goto qwscyqgokmkeqwuq;
        soiuksqqwmsqwyeq:
        return true;
        goto kiauseesqiwimyue;
        ismcyiwkmqaaygge:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto wugyaiqayoamwacg;
        qyaiyoskqmqyyuos:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto usscqwyeesggymse;
        usscqwyeesggymse:
        if (!(stripos($this->agent, "\151\x50\x6f\x64") !== false)) {
            goto syookwiaqwmsaoem;
        }
        goto okmmkcokmyiqkceg;
        guuowemmmmcgukow:
        $this->ssquiwqwwcgcqiic();
        goto yycskqumwcimyyye;
        okmmkcokmyiqkceg:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto uguwgicugawycckm;
        qiayswmiyoqisyac:
        return true;
        goto sgkeayimkgeyaqic;
        wyqemyugccycgaso:
        return false;
        goto okgoksuuouqmmqog;
        kmwwukmymssqakuk:
        $this->iqsiguacookiqwcs();
        goto guuowemmmmcgukow;
        uguwgicugawycckm:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto wskgeycusaokeymw;
        yycskqumwcimyyye:
        $this->eywockmuswoykooc(true);
        goto qiayswmiyoqisyac;
        sgkeayimkgeyaqic:
        syookwiaqwmsaoem:
        goto wyqemyugccycgaso;
        wskgeycusaokeymw:
        $this->uewoqoqkekmsyoeo();
        goto kmwwukmymssqakuk;
        okgoksuuouqmmqog:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto gssmokgwcmqesyao;
        agwcwemswacqgqyk:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\101\156\144\162\157\151\144"));
        goto yecageyyqwumqoca;
        kumioksgmqmsaeqy:
        goto kqaemkmmqkyeweye;
        goto ckkwwiuyquomkcku;
        msasquyamakaamys:
        return false;
        goto yymscyccyaauqiaa;
        gssmokgwcmqesyao:
        if (!(stripos($this->agent, "\x41\x6e\144\x72\x6f\x69\144") !== false)) {
            goto kmggqcwmkwwcuioa;
        }
        goto agwcwemswacqgqyk;
        ysuagggqaicqyguk:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto womwoaskosgsauog;
        ckkwwiuyquomkcku:
        woiqioceiyccoyyi:
        goto yemgimowqwsuqegu;
        squaugeowuwyumqu:
        $this->icigyueiiwsukmsu(true);
        goto kumioksgmqmsaeqy;
        cimakcokyqkmyiau:
        wcuqqmycwwoqwwga:
        goto soqyakgcqemouuko;
        womwoaskosgsauog:
        return true;
        goto wiuyqgeaacmksuqq;
        sskqokueeqgsuumq:
        kqaemkmmqkyeweye:
        goto ysuagggqaicqyguk;
        iuaaiqsmgoqiscio:
        goto wcuqqmycwwoqwwga;
        goto yqiyiacommmwsuce;
        ikkseymmmeooqmcm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cimakcokyqkmyiau;
        yecageyyqwumqoca:
        if (isset($yikciqwsimweauyg[1])) {
            goto kgmwwkoiqwyscmys;
        }
        goto aqcwmswmgmgqokmu;
        soqyakgcqemouuko:
        if (stripos($this->agent, "\x4d\157\142\151\154\x65") !== false) {
            goto woiqioceiyccoyyi;
        }
        goto squaugeowuwyumqu;
        yemgimowqwsuqegu:
        $this->eywockmuswoykooc(true);
        goto sskqokueeqgsuumq;
        aqcwmswmgmgqokmu:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto iuaaiqsmgoqiscio;
        kweqeekeouiqocqw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ikkseymmmeooqmcm;
        yqiyiacommmwsuce:
        kgmwwkoiqwyscmys:
        goto kweqeekeouiqocqw;
        wiuyqgeaacmksuqq:
        kmggqcwmkwwcuioa:
        goto msasquyamakaamys;
        yymscyccyaauqiaa:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto yammukygywskcuey;
        qysqqycgiwmucggw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto okacoggoqgoomuyc;
        umyuckgysaegimue:
        sisuqeisegegcsiy:
        goto ewgqscsiomaciyew;
        okacoggoqgoomuyc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qikuwygeoaimcukg;
        ewgqscsiomaciyew:
        return false;
        goto iewuyuigwmkcmcas;
        yusmiciysquiqayq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\x69\166\x61\x6c\x64\151"));
        goto gquuqqacuqsgsyqc;
        gquuqqacuqsgsyqc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto owayquiaceqooaiq;
        }
        goto qysqqycgiwmucggw;
        yammukygywskcuey:
        if (!(stripos($this->agent, "\126\x69\x76\141\154\x64\151") !== false)) {
            goto sisuqeisegegcsiy;
        }
        goto yusmiciysquiqayq;
        ceiseomqooekseuo:
        return true;
        goto siaqsogicwwmayco;
        siaqsogicwwmayco:
        owayquiaceqooaiq:
        goto umyuckgysaegimue;
        qikuwygeoaimcukg:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto ceiseomqooekseuo;
        iewuyuigwmkcmcas:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto mioiqgkakcguokqa;
        qqsiimkqkguqkeag:
        goto qekesyoouukaciyy;
        goto eicqsqkmeaimooii;
        gcgyqiaawwccgqaw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x42\162\157\167\x73\x65\x72"));
        goto wyimgokwakggwuoi;
        yyimqwkqigowmcco:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ugkesgkkcqcasmoq;
        yymiwwumowysiagy:
        return false;
        goto qsacucessyquaame;
        cgqqkkwugmiqyiow:
        eeieacyyeywwyewo:
        goto ykwmoaqmwggiqmsk;
        ykwmoaqmwggiqmsk:
        wwaocaooaayqamsu:
        goto yymiwwumowysiagy;
        oymuyuskiqyacysw:
        goto qekesyoouukaciyy;
        goto koceigseyecoyoia;
        koceigseyecoyoia:
        sccmgumeswegawyk:
        goto aucmemccqucmicwm;
        ysoeqwagkauquwme:
        if (stripos($this->agent, "\x4d\157\142\151\x6c\145") !== false) {
            goto sccmgumeswegawyk;
        }
        goto uwkiseisiuqsoqsa;
        scqaokckckemicqi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yyimqwkqigowmcco;
        gaomwgqgumkcqawg:
        if (stripos($this->agent, "\151\120\x61\144") !== false) {
            goto sesgwayockkaakwm;
        }
        goto ysoeqwagkauquwme;
        kuyowuyquoioeqoc:
        sesgwayockkaakwm:
        goto suessqeuiasoqioi;
        eicqsqkmeaimooii:
        csuikuskoecgsymk:
        goto giawgsomaouqgiyc;
        mioiqgkakcguokqa:
        if (!(stripos($this->agent, "\131\141\x42\x72\157\x77\x73\x65\162") !== false)) {
            goto wwaocaooaayqamsu;
        }
        goto gcgyqiaawwccgqaw;
        giawgsomaouqgiyc:
        $this->icigyueiiwsukmsu(true);
        goto mquyowqsoawycyok;
        wyimgokwakggwuoi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eeieacyyeywwyewo;
        }
        goto scqaokckckemicqi;
        ugkesgkkcqcasmoq:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto gaomwgqgumkcqawg;
        suessqeuiasoqioi:
        $this->icigyueiiwsukmsu(true);
        goto oymuyuskiqyacysw;
        mquyowqsoawycyok:
        qekesyoouukaciyy:
        goto aeycoymkqiwogwag;
        aucmemccqucmicwm:
        $this->eywockmuswoykooc(true);
        goto qqsiimkqkguqkeag;
        uwkiseisiuqsoqsa:
        if (stripos($this->agent, "\x41\156\144\162\x6f\x69\x64") !== false) {
            goto csuikuskoecgsymk;
        }
        goto yikaomgieukoawws;
        yikaomgieukoawws:
        goto qekesyoouukaciyy;
        goto kuyowuyquoioeqoc;
        aeycoymkqiwogwag:
        return true;
        goto cgqqkkwugmiqyiow;
        qsacucessyquaame:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto umkyqiyguqoauyek;
        iwgksuqmosckeqys:
        ommoqequygggywyi:
        goto sayicwyqgigeswug;
        ccmmogiaggiuewmu:
        miayoysigsgumwyi:
        goto syqgqkeomqsysaey;
        umkyqiyguqoauyek:
        if (!(stripos($this->agent, "\x50\154\141\171\123\164\141\x74\151\x6f\x6e\x20") !== false)) {
            goto msqmyqgiaeeeoeco;
        }
        goto eceqcqseqcswkywu;
        uuweusyuygicyoik:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto qugmeamkemckgqwo;
        syqgqkeomqsysaey:
        msqmyqgiaeeeoeco:
        goto qmisymqoqmqocwoe;
        sayicwyqgigeswug:
        return true;
        goto ccmmogiaggiuewmu;
        qugmeamkemckgqwo:
        if (!isset($yikciqwsimweauyg[0])) {
            goto miayoysigsgumwyi;
        }
        goto eyekywukwqucywcm;
        uyymyaogieaawaig:
        $this->eywockmuswoykooc(true);
        goto iwgksuqmosckeqys;
        ciewwguuyumcisme:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto uwwiiwscccuowuoq;
        eyekywukwqucywcm:
        $quiguswioiaaywey = explode("\x29", $yikciqwsimweauyg[2]);
        goto ciewwguuyumcisme;
        uwwiiwscccuowuoq:
        if (!(stripos($this->agent, "\x50\x6f\x72\x74\141\x62\x6c\x65\51") !== false || stripos($this->agent, "\x56\151\164\x61") !== false)) {
            goto ommoqequygggywyi;
        }
        goto uyymyaogieaawaig;
        eceqcqseqcswkywu:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x50\x6c\141\x79\x53\164\x61\164\x69\157\x6e\x20"));
        goto uuweusyuygicyoik;
        qmisymqoqmqocwoe:
        return false;
        goto mcygcucugmyqswys;
        mcygcucugmyqswys:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto gqomqwuiesioaaaq;
        igcukieyogyaqwyo:
        sieaoicuiusscywg:
        goto imgwqyoiweuiwiec;
        iwacoiqoegwuaoqo:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto wkmmaysiigyuyimk;
        wkmmaysiigyuyimk:
        return true;
        goto igcukieyogyaqwyo;
        ywuwweugeccmeuqk:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto iwacoiqoegwuaoqo;
        imgwqyoiweuiwiec:
        return false;
        goto kwsagikwoqogqecc;
        gqomqwuiesioaaaq:
        if (!preg_match("\41\x5e\127\x67\145\164\x2f\x28\133\136\40\135\x2b\x29\41\151", $this->agent, $yikciqwsimweauyg)) {
            goto sieaoicuiusscywg;
        }
        goto ywuwweugeccmeuqk;
        kwsagikwoqogqecc:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto ggqeyyoscwueysku;
        wsgkqgogymcgueag:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto eimqoqgqmsiokyeq;
        sukiqmyemewakiao:
        qmqsccegugoiyaiu:
        goto yeqmmgegmqgwyaea;
        eimqoqgqmsiokyeq:
        return true;
        goto iyqcgqusyeiiaiai;
        yeqmmgegmqgwyaea:
        return false;
        goto mkycqgqaawooaaeu;
        qykkceysyessasey:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wicaemaewwoooiuq;
        }
        goto iwyoaksegwaksmsu;
        ggqeyyoscwueysku:
        if (!(strpos($this->agent, "\143\165\x72\x6c") === 0)) {
            goto qmqsccegugoiyaiu;
        }
        goto qqsmygoumegcogay;
        sucmgqcacggcucec:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wsgkqgogymcgueag;
        qqsmygoumegcogay:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x63\165\x72\x6c"));
        goto qykkceysyessasey;
        iyqcgqusyeiiaiai:
        wicaemaewwoooiuq:
        goto sukiqmyemewakiao;
        iwyoaksegwaksmsu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto sucmgqcacggcucec;
        mkycqgqaawooaaeu:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto ymyoskqgyeykqmom;
        seeosigigeuueiqy:
        ecusscoueakqaqsu:
        goto cekocgmmwuacyckg;
        yukieguwkeesieiy:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto cwceosugiiyyauqi;
        gooiuuagswggewoq:
        gqcyummwsikcccom:
        goto ukmeggiqssyyyuku;
        iouagkwueekusiwi:
        goto uyiaqakwuswweqme;
        goto imagekgwsuqccwgo;
        qsikciasasogymew:
        uyiaqakwuswweqme:
        goto mcqoyigqsewkkwgc;
        auuogsqacsimiksi:
        kwewaoocuqgaseoa:
        goto cmooymowqeusayua;
        ksqmykkeymqwoacg:
        goto uyiaqakwuswweqme;
        goto imyycasecqwmeuew;
        aceouusygqicksgk:
        goto uyiaqakwuswweqme;
        goto yysewcsossqsackg;
        imyycasecqwmeuew:
        gsyegqcsyscyycic:
        goto wmcckwsaaemkqweg;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\x4f\160\x65\156\x42\x53\x44") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\x4f\x70\145\156\123\157\154\x61\162\151\x73") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        cmooymowqeusayua:
        $this->platform = self::PLATFORM_WINDOWS;
        goto aceouusygqicksgk;
        aaecacwqmsoowcsi:
        $this->platform = self::PLATFORM_NETBSD;
        goto guquqeyggoqqkgkm;
        wksuqaqsicwqekuy:
        goto uyiaqakwuswweqme;
        goto gusogiqwmwgywamm;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\111\x66\162\141\155\x65\x6c\171") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        qycwawiicimecwsq:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto eweqcaymckiwaccw;
        akayacsmoiwoaeqm:
        goto uyiaqakwuswweqme;
        goto ueqauuccggkgcyqo;
        cekocgmmwuacyckg:
        $this->platform = self::PLATFORM_WINDOWS;
        goto awumcmmeumuaiocw;
        gwoqyokuiqqwugsk:
        if (stripos($this->agent, "\151\120\x61\144") !== false) {
            goto okqmcygoiwaesmis;
        }
        goto acysyqkmkgaoewci;
        wgcyyuswcmkwyaky:
        $this->platform = self::PLATFORM_NOKIA;
        goto eccgyquwkmumeyea;
        yysewcsossqsackg:
        gawseeswkisqiwoe:
        goto qycwawiicimecwsq;
        ukmeggiqssyyyuku:
        $this->platform = self::PLATFORM_IPHONE;
        goto kyqkigouggegscsi;
        gkcqueouksaqceqw:
        aacemqiqgqoyokmi:
        goto aaecacwqmsoowcsi;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\x6c\151\156\165\170") !== false && stripos($this->agent, "\123\115\101\x52\124\55\124\126") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        ymyoskqgyeykqmom:
        if (stripos($this->agent, "\167\151\x6e\144\x6f\167\163") !== false) {
            goto ecusscoueakqaqsu;
        }
        goto gwoqyokuiqqwugsk;
        ciwyuyksieuuqiee:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto eayyeuwawewcqcom;
        oaoummcgooyceayi:
        $this->platform = self::PLATFORM_APPLE;
        goto siaweewywmuayyks;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\x77\151\x6e") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        oguaeaawigyoscii:
        okqmcygoiwaesmis:
        goto mougyosiwyugsymo;
        acysyqkmkgaoewci:
        if (stripos($this->agent, "\151\x50\157\x64") !== false) {
            goto kkecucquwauqqyku;
        }
        goto woqqukymqiuyququ;
        ueqauuccggkgcyqo:
        scoouaqeoeicswwu:
        goto mmqioecsyukkcgoo;
        eiskwkcoggkikmcc:
        goto uyiaqakwuswweqme;
        goto hsuemysceewomeuc;
        asksckakmysykiue:
        oyioakacwwceegie:
        goto yeigmocusoouscsa;
        esqckkawqugyqimw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto wksuqaqsicwqekuy;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\x63\165\x72\154") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        kgwaccmcscsusase:
        goto uyiaqakwuswweqme;
        goto msqycwkyqqeyqoka;
        wmcckwsaaemkqweg:
        $this->platform = self::PLATFORM_BEOS;
        goto iqucsoqomgkeuyco;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\x4e\157\153\x69\141") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        cyaomwaqoaiiqqes:
        goto uyiaqakwuswweqme;
        goto acmaiqeukwiqqyms;
        ukmcukgkakisecyk:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto cyaomwaqoaiiqqes;
        mougyosiwyugsymo:
        $this->platform = self::PLATFORM_IPAD;
        goto iouagkwueekusiwi;
        esscoiyogsoqoquc:
        muicsociwumgosaw:
        goto gciescsgqiuoqkim;
        ggcmqkuwqkkkmcgu:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto gyawuaoseweeioce;
        cwceosugiiyyauqi:
        goto uyiaqakwuswweqme;
        goto ogugiciyicewkyue;
        mqmowgywwygssysy:
        goto uyiaqakwuswweqme;
        goto emiuesoeeiqysuay;
        emiuesoeeiqysuay:
        seaqqywowweasaoa:
        goto qoyywwueqcmomgio;
        eweqcaymckiwaccw:
        goto uyiaqakwuswweqme;
        goto maokeqaksuookoao;
        cgqiesaeskmuwwcy:
        goto uyiaqakwuswweqme;
        goto sgssyyueamgacywm;
        emooiegicmmqkwsg:
        $this->platform = self::PLATFORM_ROKU;
        goto qcqgakkooouyiooi;
        cugaeomiskasooic:
        $this->platform = self::PLATFORM_ANDROID;
        goto yeeicocmyyaeksys;
        wyokgowugcsiigum:
        goto uyiaqakwuswweqme;
        goto uiqoeooowosqagsw;
        ymucyiowcaqucyom:
        goto uyiaqakwuswweqme;
        goto gooiuuagswggewoq;
        qcaqeqscugwwgyci:
        $this->platform = self::PLATFORM_I_FRAME;
        goto qsikciasasogymew;
        myiogoqascwcikcc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto mkeuwsqceweiacum;
        uiqoeooowosqagsw:
        gqwemyquuwgqcaic:
        goto syiwqmwwoemuyeou;
        guquqeyggoqqkgkm:
        goto uyiaqakwuswweqme;
        goto smmqcueceqkiggkm;
        kqmqqomaqawisweo:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto wyokgowugcsiigum;
        yeigmocusoouscsa:
        $this->platform = self::PLATFORM_OS2;
        goto ksqmykkeymqwoacg;
        syiwqmwwoemuyeou:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto cgqiesaeskmuwwcy;
        imwweegoasykooim:
        uwegawkagcagoeiw:
        goto yukieguwkeesieiy;
        igiuieggauocicsg:
        miqaocyiuwmyyycc:
        goto oaoummcgooyceayi;
        iqucsoqomgkeuyco:
        goto uyiaqakwuswweqme;
        goto auuogsqacsimiksi;
        icyocwacicqauogu:
        if (stripos($this->agent, "\x42\154\x61\x63\153\x42\145\162\162\x79") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        mkeuwsqceweiacum:
        goto uyiaqakwuswweqme;
        goto icoqeuawskkosskw;
        woqqukymqiuyququ:
        if (stripos($this->agent, "\x69\x50\x68\157\x6e\145") !== false) {
            goto gqcyummwsikcccom;
        }
        goto ycskcusgcyeowagm;
        eayyeuwawewcqcom:
        goto uyiaqakwuswweqme;
        goto esscoiyogsoqoquc;
        gyawuaoseweeioce:
        goto uyiaqakwuswweqme;
        goto kouowucggykwmwgw;
        maokeqaksuookoao:
        kycoymqmaukeekum:
        goto emooiegicmmqkwsg;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\x74\x76\117\x53") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        kouowucggykwmwgw:
        kmgqqgsuiwcyccak:
        goto aoemyociekskwmke;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\x4e\x65\164\x42\123\104") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        icoqeuawskkosskw:
        iacwiwmoggwseqsa:
        goto qcaqeqscugwwgyci;
        iiyysuksmomyyuye:
        cguaokskycyggqym:
        goto cugaeomiskasooic;
        aeeiacomeyceesoe:
        goto uyiaqakwuswweqme;
        goto seeosigigeuueiqy;
        ogugiciyicewkyue:
        aycyoqqqwmyciise:
        goto ciwyuyksieuuqiee;
        muycacscoqikyasc:
        $this->platform = self::PLATFORM_OPENBSD;
        goto uyauemouyweqqkwu;
        gciescsgqiuoqkim:
        $this->platform = self::PLATFORM_LINUX;
        goto kgwaccmcscsusase;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\x50\157\x73\x74\x6d\x61\156\x52\x75\156\x74\151\155\x65") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        gusogiqwmwgywamm:
        sskkqsmyqmgyewue:
        goto muycacscoqikyasc;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\117\123\x5c\57\62") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        eccgyquwkmumeyea:
        goto uyiaqakwuswweqme;
        goto awiomycussysmike;
        mmqioecsyukkcgoo:
        $this->platform = self::PLATFORM_TERMINAL;
        goto eiskwkcoggkikmcc;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\151\x4f\x53") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        yeeicocmyyaeksys:
        goto uyiaqakwuswweqme;
        goto imwweegoasykooim;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\x42\145\x4f\123") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        imagekgwsuqccwgo:
        kkecucquwauqqyku:
        goto eouqmgocqewmwgik;
        emeoasammuwaesws:
        $this->platform = self::PLATFORM_IPHONE . "\57" . self::PLATFORM_IPAD;
        goto mqmowgywwygssysy;
        msqycwkyqqeyqoka:
        yioawsqawmqagueg:
        goto wgcyyuswcmkwyaky;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\122\157\x6b\x75") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\123\165\x6e\x4f\123") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\x46\162\x65\x65\x42\123\x44") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        mokkeuemqauoaskk:
        oesgciyeoewgouki:
        goto emeoasammuwaesws;
        sgssyyueamgacywm:
        coakwcyymiqcmwug:
        goto myiogoqascwcikcc;
        meiykooeimaqqico:
        if (stripos($this->agent, "\103\x72\x4f\x53") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        hsuemysceewomeuc:
        ugccoisuygekiaae:
        goto kqmqqomaqawisweo;
        siaweewywmuayyks:
        goto uyiaqakwuswweqme;
        goto iiyysuksmomyyuye;
        ycskcusgcyeowagm:
        if (stripos($this->agent, "\155\x61\x63") !== false) {
            goto miqaocyiuwmyyycc;
        }
        goto owkougkyymiwoaqu;
        acmaiqeukwiqqyms:
        syqyosyywqwgoeoo:
        goto esqckkawqugyqimw;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\x50\x6c\x61\x79\163\164\x61\x74\151\157\x6e") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        muiouqmomamguoce:
        if (stripos($this->agent, "\x53\151\x6c\x6b") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        uyauemouyweqqkwu:
        goto uyiaqakwuswweqme;
        goto gkcqueouksaqceqw;
        qcqgakkooouyiooi:
        goto uyiaqakwuswweqme;
        goto mokkeuemqauoaskk;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\x61\156\x64\162\157\x69\x64") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        kyqkigouggegscsi:
        goto uyiaqakwuswweqme;
        goto igiuieggauocicsg;
        awiomycussysmike:
        acuiieocsgiyakia:
        goto ukmcukgkakisecyk;
        awumcmmeumuaiocw:
        goto uyiaqakwuswweqme;
        goto oguaeaawigyoscii;
        eouqmgocqewmwgik:
        $this->platform = self::PLATFORM_IPOD;
        goto ymucyiowcaqucyom;
        cyqeeaiwumyekkce:
        goto uyiaqakwuswweqme;
        goto asksckakmysykiue;
        qoyywwueqcmomgio:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto akayacsmoiwoaeqm;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\x6c\x69\156\165\x78") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        aoemyociekskwmke:
        $this->platform = self::PLATFORM_SUNOS;
        goto cyqeeaiwumyekkce;
        smmqcueceqkiggkm:
        eequuumweyqioygw:
        goto ggcmqkuwqkkkmcgu;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\x6f\153\x68\164\x74\160") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        mcqoyigqsewkkwgc:
    }
}
