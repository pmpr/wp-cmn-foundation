<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
    const BROWSER_UNKNOWN = "\165\156\153\x6e\157\167\x6e";
    const VERSION_UNKNOWN = "\165\156\153\156\x6f\167\156";
    const BROWSER_OPERA = "\x4f\160\145\x72\141";
    
    const BROWSER_OPERA_MINI = "\x4f\x70\145\x72\x61\x20\x4d\151\156\x69";
    
    const BROWSER_WEBTV = "\127\x65\142\124\126";
    
    const BROWSER_EDGE = "\x45\x64\147\145";
    
    const BROWSER_IE = "\x49\x6e\164\145\162\x6e\145\164\40\105\170\160\154\157\x72\x65\162";
    
    const BROWSER_POCKET_IE = "\x50\x6f\x63\x6b\145\164\40\x49\x6e\164\x65\x72\156\x65\x74\40\x45\x78\x70\154\x6f\162\145\162";
    
    const BROWSER_KONQUEROR = "\113\157\156\x71\x75\x65\162\157\162";
    
    const BROWSER_ICAB = "\x69\103\141\142";
    
    const BROWSER_OMNIWEB = "\x4f\155\156\x69\127\145\x62";
    
    const BROWSER_FIREBIRD = "\x46\x69\162\145\142\x69\x72\x64";
    
    const BROWSER_FIREFOX = "\x46\x69\x72\145\x66\x6f\170";
    
    const BROWSER_BRAVE = "\x42\x72\141\166\145";
    
    const BROWSER_PALEMOON = "\120\141\x6c\145\155\157\x6f\x6e";
    
    const BROWSER_ICEWEASEL = "\111\x63\145\167\145\x61\x73\x65\154";
    
    const BROWSER_SHIRETOKO = "\x53\150\151\162\x65\x74\x6f\x6b\x6f";
    
    const BROWSER_MOZILLA = "\115\157\172\x69\154\154\x61";
    
    const BROWSER_AMAYA = "\101\155\141\x79\x61";
    
    const BROWSER_LYNX = "\114\171\x6e\170";
    
    const BROWSER_SAFARI = "\x53\x61\x66\141\x72\151";
    
    const BROWSER_IPHONE = "\151\120\x68\157\x6e\145";
    
    const BROWSER_IPOD = "\x69\x50\x6f\x64";
    
    const BROWSER_IPAD = "\x69\120\141\144";
    
    const BROWSER_CHROME = "\x43\150\162\x6f\155\x65";
    
    const BROWSER_ANDROID = "\x41\156\144\162\157\x69\144";
    
    const BROWSER_GOOGLEBOT = "\x47\x6f\157\x67\x6c\x65\x42\157\x74";
    
    const BROWSER_CURL = "\x63\x55\122\114";
    
    const BROWSER_WGET = "\127\147\x65\x74";
    
    const BROWSER_UCBROWSER = "\x55\x43\x42\162\x6f\167\163\x65\x72";
    
    const BROWSER_YANDEXBOT = "\x59\x61\x6e\144\x65\170\102\157\x74";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\x59\141\x6e\x64\x65\170\111\x6d\141\x67\145\122\145\x73\x69\172\145\162";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\x61\x6e\x64\x65\170\111\x6d\141\x67\x65\163";
    
    const BROWSER_YANDEXVIDEO_BOT = "\131\x61\156\144\145\x78\x56\151\x64\145\157";
    
    const BROWSER_YANDEXMEDIA_BOT = "\x59\x61\156\x64\x65\170\115\x65\x64\x69\141";
    
    const BROWSER_YANDEXBLOGS_BOT = "\x59\141\156\x64\145\x78\x42\154\157\147\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\131\141\156\x64\x65\170\106\141\166\151\143\157\156\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\x59\x61\156\x64\x65\x78\x57\x65\142\x6d\x61\163\x74\145\162";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\141\156\x64\145\170\104\x69\162\x65\143\164";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\131\141\x6e\x64\x65\170\115\145\164\162\x69\x6b\141";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\x61\156\x64\145\170\116\x65\x77\163";
    
    const BROWSER_YANDEXCATALOG_BOT = "\131\141\156\144\145\170\x43\141\164\x61\x6c\157\147";
    
    const BROWSER_SLURP = "\131\x61\150\157\157\x21\40\123\154\x75\162\x70";
    
    const BROWSER_W3CVALIDATOR = "\127\63\x43\40\x56\x61\154\151\x64\141\x74\157\x72";
    
    const BROWSER_BLACKBERRY = "\102\154\x61\143\153\102\x65\162\162\171";
    
    const BROWSER_ICECAT = "\111\143\x65\x43\x61\x74";
    
    const BROWSER_NOKIA_S60 = "\116\157\x6b\151\141\x20\123\x36\x30\40\x4f\123\123\x20\102\162\x6f\167\x73\x65\162";
    
    const BROWSER_NOKIA = "\x4e\x6f\x6b\151\x61\x20\x42\162\157\167\x73\x65\162";
    
    const BROWSER_MSN = "\x4d\123\x4e\x20\102\x72\157\x77\x73\145\x72";
    
    const BROWSER_MSNBOT = "\115\123\116\x20\x42\157\164";
    
    const BROWSER_BINGBOT = "\102\x69\x6e\147\x20\x42\x6f\164";
    
    const BROWSER_VIVALDI = "\x56\151\166\x61\x6c\x64\151";
    
    const BROWSER_YANDEX = "\x59\x61\x6e\144\145\170";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\x65\x74\x73\x63\x61\x70\145\40\x4e\x61\x76\151\147\141\x74\x6f\162";
    
    const BROWSER_GALEON = "\x47\141\154\x65\157\x6e";
    
    const BROWSER_NETPOSITIVE = "\x4e\145\x74\120\x6f\163\x69\164\151\166\x65";
    
    const BROWSER_PHOENIX = "\x50\x68\x6f\145\x6e\x69\170";
    
    const BROWSER_PLAYSTATION = "\120\x6c\x61\171\123\164\141\x74\151\157\x6e";
    const BROWSER_SAMSUNG = "\123\141\x6d\x73\165\156\147\x42\x72\x6f\167\163\x65\x72";
    const BROWSER_SILK = "\x53\x69\154\153";
    const BROWSER_I_FRAME = "\x49\x66\x72\141\155\x65\x6c\x79";
    const BROWSER_COCOA = "\103\x6f\143\x6f\141\x52\x65\163\x74\x43\154\151\x65\156\x74";
    const PLATFORM_UNKNOWN = "\165\156\153\x6e\157\167\156";
    const PLATFORM_WINDOWS = "\127\151\156\x64\157\167\x73";
    const PLATFORM_WINDOWS_CE = "\127\151\156\144\x6f\167\163\40\x43\105";
    const PLATFORM_APPLE = "\101\160\x70\x6c\145";
    const PLATFORM_LINUX = "\x4c\x69\x6e\165\x78";
    const PLATFORM_OS2 = "\117\123\x2f\62";
    const PLATFORM_BEOS = "\x42\145\117\x53";
    const PLATFORM_IPHONE = "\151\120\150\157\x6e\145";
    const PLATFORM_IPOD = "\151\x50\x6f\144";
    const PLATFORM_IPAD = "\x69\x50\141\144";
    const PLATFORM_BLACKBERRY = "\x42\x6c\141\143\153\x42\x65\162\x72\x79";
    const PLATFORM_NOKIA = "\x4e\157\x6b\151\141";
    const PLATFORM_FREEBSD = "\106\162\x65\x65\102\123\x44";
    const PLATFORM_OPENBSD = "\x4f\x70\145\x6e\102\123\x44";
    const PLATFORM_NETBSD = "\116\145\x74\x42\x53\104";
    const PLATFORM_SUNOS = "\123\x75\156\117\x53";
    const PLATFORM_OPENSOLARIS = "\117\x70\145\x6e\123\x6f\154\141\162\x69\163";
    const PLATFORM_ANDROID = "\101\156\144\x72\x6f\x69\x64";
    const PLATFORM_PLAYSTATION = "\x53\x6f\156\171\x20\x50\154\141\171\x53\164\x61\x74\x69\x6f\156";
    const PLATFORM_ROKU = "\122\157\x6b\165";
    const PLATFORM_APPLE_TV = "\x41\x70\160\154\x65\x20\124\x56";
    const PLATFORM_TERMINAL = "\x54\x65\x72\x6d\151\x6e\x61\x6c";
    const PLATFORM_FIRE_OS = "\106\151\162\x65\x20\117\123";
    const PLATFORM_SMART_TV = "\123\115\x41\x52\x54\x2d\124\126";
    const PLATFORM_CHROME_OS = "\x43\150\162\157\155\x65\40\x4f\x53";
    const PLATFORM_JAVA_ANDROID = "\x4a\141\166\x61\57\x41\x6e\144\162\x6f\151\144";
    const PLATFORM_POSTMAN = "\120\x6f\163\164\x6d\141\x6e";
    const PLATFORM_I_FRAME = "\111\x66\x72\141\155\x65\x6c\x79";
    const OPERATING_SYSTEM_UNKNOWN = "\x75\156\x6b\156\x6f\167\156";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto usukksgaqiqwqeys;
        uqwoeksekoweiwke:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto ykqeemyaewkmowyu;
        wywgewmwqwqsysig:
        $this->qeqwswckeiieossq();
        goto ggkyameswcsquisg;
        usukksgaqiqwqeys:
        $this->runSetup = false;
        goto cmkiwqcgsmwyuggk;
        ykqeemyaewkmowyu:
        ewuugiguuowassgm:
        goto comoigwsemiiwoks;
        mwwimgssiegweqes:
        oagaqukqswwgeqsa:
        goto uqwoeksekoweiwke;
        eqwkmqasacseyecw:
        $this->reset();
        goto wywgewmwqwqsysig;
        cmkiwqcgsmwyuggk:
        if ($uowwycywwssskuys != '') {
            goto oagaqukqswwgeqsa;
        }
        goto eqwkmqasacseyecw;
        comoigwsemiiwoks:
        parent::__construct();
        goto uioqqaiayukmemcg;
        ggkyameswcsquisg:
        goto ewuugiguuowassgm;
        goto mwwimgssiegweqes;
        uioqqaiayukmemcg:
    }
    
    public function reset()
    {
        goto seimmqskqimoouui;
        ygyacaeuykeookuw:
        $this->agent = isset($_SERVER["\110\x54\x54\x50\137\x55\123\x45\x52\137\101\107\x45\x4e\124"]) ? $_SERVER["\110\124\124\120\137\x55\123\x45\x52\137\101\107\105\116\124"] : '';
        goto ggaemwcyouewkgcm;
        cicagciwwymgewcm:
        $this->isRobot = false;
        goto omkuusmocycoywqq;
        ggaemwcyouewkgcm:
        $this->isAol = false;
        goto cicagciwwymgewcm;
        seimmqskqimoouui:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto ceycsuymgwmceuew;
        oouoqmemwouuymam:
        $this->isMobile = false;
        goto kmokgyokoacsqkcg;
        kmokgyokoacsqkcg:
        $this->isFacebook = false;
        goto mkummeawiecmouws;
        omkuusmocycoywqq:
        $this->version = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
        egsqiegeesaowyyo:
        $this->isTablet = false;
        goto oouoqmemwouuymam;
        ceycsuymgwmceuew:
        $this->name = self::BROWSER_UNKNOWN;
        goto ygyacaeuykeookuw;
        mkummeawiecmouws:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto segicigoioeuyass;
        ycuossoamymsusws:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto egsqiegeesaowyyo;
        segicigoioeuyass:
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
        $this->version = preg_replace("\57\x5b\x5e\x30\x2d\71\x2c\56\54\x61\55\x7a\x2c\101\x2d\x5a\x2d\135\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\x2f\133\136\60\x2d\71\54\56\x2c\141\55\172\x2c\101\x2d\x5a\135\57", '', $kqagasmwymmuiksq);
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
        goto uqqiokcseqswsgia;
        yyacgikiikmoesek:
        $this->agent = $agent_string;
        goto syumssoiimkseoum;
        syumssoiimkseoum:
        $this->qeqwswckeiieossq();
        goto kmcewougmoaciyky;
        uqqiokcseqswsgia:
        $this->reset();
        goto yyacgikiikmoesek;
        kmcewougmoaciyky:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\143\x68\162\157\x6d\x65\146\x72\141\x6d\145") !== false;
    }
    
    public function __toString()
    {
        return "\74\163\x74\162\157\x6e\x67\x3e\102\x72\157\x77\163\x65\x72\40\116\141\x6d\x65\x3a\74\57\x73\x74\x72\157\156\147\x3e\40{$this->aagmmewiwysmgseq()}\x3c\142\x72\57\76\xa" . "\74\163\164\162\157\156\x67\x3e\102\x72\x6f\x77\x73\145\162\40\126\x65\162\163\151\157\x6e\72\74\x2f\x73\x74\162\x6f\x6e\147\x3e\40{$this->gikwwgqmwccescgy()}\74\142\x72\x2f\x3e\12" . "\74\x73\x74\x72\157\x6e\x67\76\x42\162\x6f\x77\163\145\x72\x20\125\163\x65\162\x20\101\147\x65\156\x74\x20\123\x74\162\151\x6e\147\72\74\x2f\x73\164\162\x6f\156\x67\76\40{$this->ckaoiscoyuuosace()}\74\x62\x72\x2f\x3e\xa" . "\74\x73\164\x72\157\x6e\147\x3e\x50\x6c\141\164\146\x6f\162\155\72\x3c\57\163\x74\x72\157\156\x67\x3e\40{$this->kqeiosksqeuksyqu()}\x3c\x62\162\x2f\76";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto iiswiwucogikyuse;
        aqysowuwkoqgsoku:
        $this->iggocwysumewuquw();
        goto muwsmoccecigsoqc;
        iiswiwucogikyuse:
        $this->acmmsiuwaekasogs();
        goto aqysowuwkoqgsoku;
        muwsmoccecigsoqc:
        $this->caqkscqcyqeciamc();
        goto aykkageemggigccw;
        aykkageemggigccw:
    }
    
    protected function iggocwysumewuquw()
    {
        return $this->maowoygwywiawwyc() || $this->gggwayigqkokeigi() || $this->sukgiyywqmoigmom() || $this->makyeuicweuowumi() || $this->cgequousmqakcios() || $this->eqqcucwcgwqiogik() || $this->usswyskeuiskccki() || $this->aweyeayscomouegw() || $this->mgaiuyuciiueqyge() || $this->syeogeymkuiqsoec() || $this->eqkuicmgoaougagi() || $this->qsseiqmmssqiuomm() || $this->oomiyiuwesyuegws() || $this->uockauwugkqgqkce() || $this->oomuqgqyykuccewm() || $this->ciawmegkaaacmoew() || $this->cysskoyaouegkmky() || $this->iaacgcgmmegamkiu() || $this->uumayumieageyiuy() || $this->qcqikaemyysumcsu() || $this->siwcougwagmcauoi() || $this->aeywoaukuwaeegku() || $this->qaigygakimuucuki() || $this->cimegwusqouswgao() || $this->oumugceeiaceqieo() || $this->wmcqkeiuewqameek() || $this->eccwcswcuggacgua() || $this->mwoogugykmiymmgy() || $this->qceuceikgwagccsq() || $this->uuyiswoewekeauaw() || $this->sqawuqckmasomwiq() || $this->aaseiwemciwamqqm() || $this->ksumscewmeyaocyy() || $this->qsemkkquagiaoioc() || $this->bgkmykkkkksumwea() || $this->ugaiaiamygwcwemg() || $this->ksikmmeqsuycsqck() || $this->yswggmyigakcackc() || $this->uiwkymoksesuumwe() || $this->qcswwmqaioswesoq() || $this->momgeesgauwmqaks() || $this->gewsuekegcksgkai() || $this->ecocgoqgymuacegg() || $this->wacucmcykeakeeou() || $this->qaweacwkwmmuqqam() || $this->usemqkymaguiocgy() || $this->mqsiuucsqqyuwcuw() || $this->mmyqoqguasigekck() || $this->noeygigqkeciickm() || $this->akwueocamkykcwyy() || $this->ykyiqmysgemoaakw() || $this->qiqsouwkwmwmqeem() || $this->wiqieuoqysguameu() || $this->gqwuksqaksqcemam() || $this->cgqcukygysieeqko() || $this->ccaaioyauuuuyikg() || $this->aowooqokikgeegkm();
    }
    
    protected function uumayumieageyiuy()
    {
        goto cemqmygogskcoygo;
        koiysaseasuyieym:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ikwcwqmomksisice;
        }
        goto emiksyiouuqsigmq;
        auomkekgcqwsmgqu:
        return false;
        goto yymkyucwwqwymsse;
        cemqmygogskcoygo:
        if (!(stripos($this->agent, "\x62\154\x61\143\x6b\142\x65\162\x72\x79") !== false)) {
            goto ssayikwmgomomkkq;
        }
        goto wwskqqaskwicmaay;
        yeequkyciegceoeo:
        return true;
        goto ggiqousqgowseosg;
        awasoqakauqikkya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sqimcsougcukocky;
        wyeguiaumcoesuiy:
        ssayikwmgomomkkq:
        goto auomkekgcqwsmgqu;
        wwskqqaskwicmaay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x42\154\141\143\153\x42\145\162\162\171"));
        goto koiysaseasuyieym;
        sqimcsougcukocky:
        $this->name = self::BROWSER_BLACKBERRY;
        goto eykuqgakcouscsks;
        eykuqgakcouscsks:
        $this->eywockmuswoykooc(true);
        goto yeequkyciegceoeo;
        ggiqousqgowseosg:
        ikwcwqmomksisice:
        goto wyeguiaumcoesuiy;
        emiksyiouuqsigmq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto awasoqakauqikkya;
        yymkyucwwqwymsse:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wokayyqugqaoewiy;
        kicewoesgqwaasem:
        $quiguswioiaaywey = explode("\x20", stristr($this->agent, "\x41\x4f\114"));
        goto kcakqaaesggwiooc;
        ackciywssqaumgac:
        mscskuyuseuoqaqm:
        goto cwygwqacakmoesuw;
        uwiyeosqocyekygy:
        $this->qkeiegqwsgiwwkik(preg_replace("\x2f\x5b\136\x30\55\71\134\56\x61\55\x7a\135\x2f\x69", '', $quiguswioiaaywey[1]));
        goto qwimoyomwmmwkucy;
        wagiyaqsgwiqyaie:
        if (!(stripos($this->agent, "\x61\157\x6c") !== false)) {
            goto eicmoywsowuqoaou;
        }
        goto kicewoesgqwaasem;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto wagiyaqsgwiqyaie;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(false);
        goto kgskcgusosyauysg;
        cwygwqacakmoesuw:
        eicmoywsowuqoaou:
        goto cgiakccyuqqwmomc;
        cwykioaoamgqueey:
        $this->igmimcweskyugiqm(true);
        goto uwiyeosqocyekygy;
        cgiakccyuqqwmomc:
        return false;
        goto iuumaowkqqsoicgy;
        qwimoyomwmmwkucy:
        return true;
        goto ackciywssqaumgac;
        kcakqaaesggwiooc:
        if (!isset($quiguswioiaaywey[1])) {
            goto mscskuyuseuoqaqm;
        }
        goto cwykioaoamgqueey;
        iuumaowkqqsoicgy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto eyyiqqumygsogaoq;
        yagmcusocgoqkewa:
        $this->aasmeayouwmacaow(true);
        goto wesewyeqgccwmaos;
        wykyuuuooigicwgs:
        return false;
        goto skomukgmucsuaggq;
        eyyiqqumygsogaoq:
        if (!(stripos($this->agent, "\147\157\x6f\147\x6c\x65\x62\x6f\164") !== false)) {
            goto qaiaymokiyasqmic;
        }
        goto iskggyooogqgowys;
        caegiamkkykaqmqu:
        qaiaymokiyasqmic:
        goto wykyuuuooigicwgs;
        aoeeywugooqmewcc:
        awwiackkekswgamo:
        goto caegiamkkykaqmqu;
        comcaymsaykamcgi:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto yagmcusocgoqkewa;
        iskggyooogqgowys:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\147\157\x6f\147\x6c\x65\x62\x6f\164"));
        goto skqkiegmwieyweww;
        ousiwuqmksykqcec:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kiqcuyecmyaegims;
        skqkiegmwieyweww:
        if (!isset($yikciqwsimweauyg[1])) {
            goto awwiackkekswgamo;
        }
        goto ousiwuqmksykqcec;
        kiqcuyecmyaegims:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto comcaymsaykamcgi;
        wesewyeqgccwmaos:
        return true;
        goto aoeeywugooqmewcc;
        skomukgmucsuaggq:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto kuemgcgokyyggkoi;
        gcgwykikiomgmgqa:
        essswiygiqegaayw:
        goto kiaawmeeisegyugk;
        eseawwcgusiywyge:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\144\x65\x78\102\157\x74"));
        goto soeiamgkkekwcoss;
        uewgegcascsimmaq:
        return true;
        goto gcgwykikiomgmgqa;
        kuemgcgokyyggkoi:
        if (!(stripos($this->agent, "\x59\141\x6e\144\x65\170\x42\157\x74") !== false)) {
            goto yugqeemimuuqeucm;
        }
        goto eseawwcgusiywyge;
        soeiamgkkekwcoss:
        if (!isset($yikciqwsimweauyg[1])) {
            goto essswiygiqegaayw;
        }
        goto gugywasieysgmmyw;
        qimcgqssayewaygw:
        $this->name = self::BROWSER_YANDEXBOT;
        goto suugmuecwqaakaoc;
        suugmuecwqaakaoc:
        $this->aasmeayouwmacaow(true);
        goto uewgegcascsimmaq;
        uaamscmwcmumgasy:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qimcgqssayewaygw;
        wysmsmaeqiucoycu:
        return false;
        goto akeoiekwqqqgqamo;
        gugywasieysgmmyw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto uaamscmwcmumgasy;
        kiaawmeeisegyugk:
        yugqeemimuuqeucm:
        goto wysmsmaeqiucoycu;
        akeoiekwqqqgqamo:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto squqowgmqgocyqmi;
        woikwmiiusqmoygy:
        return true;
        goto imsysaygciegsqok;
        cyqyggywyykwqyak:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto osumgoskasckcieg;
        aekaikwiqmuwwqia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sqqqyyimyskaygea;
        }
        goto ikmicisyykkwmeso;
        uwemyeqsgcieyymm:
        return false;
        goto lhsckqwkqqauiqwy;
        imsysaygciegsqok:
        sqqqyyimyskaygea:
        goto mygsucymimsqmqky;
        mkcsckwgisqasmao:
        $this->aasmeayouwmacaow(true);
        goto woikwmiiusqmoygy;
        squqowgmqgocyqmi:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\x65\x78\111\x6d\x61\147\145\x52\145\163\151\x7a\x65\162") !== false)) {
            goto gwokcyciswoaygie;
        }
        goto qysommommieagsuw;
        osumgoskasckcieg:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto mkcsckwgisqasmao;
        mygsucymimsqmqky:
        gwokcyciswoaygie:
        goto uwemyeqsgcieyymm;
        ikmicisyykkwmeso:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cyqyggywyykwqyak;
        qysommommieagsuw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\x64\x65\x78\111\155\141\147\x65\122\x65\x73\151\x7a\145\162"));
        goto aekaikwiqmuwwqia;
        lhsckqwkqqauiqwy:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto ceugiycaewioseoe;
        qigcoauseeigksyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eosuykwimywegmse;
        }
        goto yakmisgikescmgoo;
        muyymwciiieqymqw:
        $this->aasmeayouwmacaow(true);
        goto dqcamiqqkwiowaag;
        ieycgksaoqioisky:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\145\x78\x43\141\x74\141\x6c\157\147"));
        goto qigcoauseeigksyc;
        gwqqoewaikqqueoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto muyymwciiieqymqw;
        yakmisgikescmgoo:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aacosyksiacoaeig;
        sigosycgcicoiuuc:
        eosuykwimywegmse:
        goto iycocuaeccqgyoia;
        iycocuaeccqgyoia:
        swuywmmasggeiqou:
        goto ycyyicuqwqcyqeig;
        ceugiycaewioseoe:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\145\170\x43\141\164\x61\154\157\147") !== false)) {
            goto swuywmmasggeiqou;
        }
        goto ieycgksaoqioisky;
        aacosyksiacoaeig:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto gwqqoewaikqqueoe;
        dqcamiqqkwiowaag:
        return true;
        goto sigosycgcicoiuuc;
        ycyyicuqwqcyqeig:
        return false;
        goto kccciwsgesamyyau;
        kccciwsgesamyyau:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto imkwmsokcecosyse;
        kmayccieqkkiqicw:
        return true;
        goto umsckeuyiggsewac;
        imkwmsokcecosyse:
        if (!(stripos($this->agent, "\131\141\x6e\x64\x65\170\116\145\167\x73") !== false)) {
            goto omccwaywmcmqksmq;
        }
        goto osuskyuuggamicou;
        eqqaouecoaseisgq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto kqmkicwuyqakoika;
        skqmieiumikceamg:
        omccwaywmcmqksmq:
        goto iymeugimwgcywusq;
        iymeugimwgcywusq:
        return false;
        goto eiswwscyoaqoggge;
        uaaiysoikgsuscqw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oameuaooiigaiucg;
        }
        goto naiguckqsyeaesek;
        umsckeuyiggsewac:
        oameuaooiigaiucg:
        goto skqmieiumikceamg;
        naiguckqsyeaesek:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto eqqaouecoaseisgq;
        suagmomycmooyggu:
        $this->aasmeayouwmacaow(true);
        goto kmayccieqkkiqicw;
        osuskyuuggamicou:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\144\145\170\x4e\145\167\x73"));
        goto uaaiysoikgsuscqw;
        kqmkicwuyqakoika:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto suagmomycmooyggu;
        eiswwscyoaqoggge:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto gwkeoekmeeqmmwgy;
        xwymaakqyeoqaams:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto amcsamiamksyqmuq;
        qqusymyoygwwueco:
        return false;
        goto iuoiiwaosgqoeask;
        iigucumgucicccac:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto swusyoymaokumies;
        ukeksoegcoqokeik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qaqmwuwwqycmqkyg;
        }
        goto iigucumgucicccac;
        aikqumiqkkqaqgee:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\156\x64\x65\170\115\x65\164\162\151\x6b\x61"));
        goto ukeksoegcoqokeik;
        swusyoymaokumies:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto xwymaakqyeoqaams;
        gwkeoekmeeqmmwgy:
        if (!(stripos($this->agent, "\x59\x61\156\144\145\170\x4d\x65\x74\162\x69\x6b\141") !== false)) {
            goto eyogsqkuigcksouq;
        }
        goto aikqumiqkkqaqgee;
        amcsamiamksyqmuq:
        $this->aasmeayouwmacaow(true);
        goto cmasgwmooaiccewo;
        cmasgwmooaiccewo:
        return true;
        goto cyckkcksiwwqasio;
        cyckkcksiwwqasio:
        qaqmwuwwqycmqkyg:
        goto egemeuggwgwuayoi;
        egemeuggwgwuayoi:
        eyogsqkuigcksouq:
        goto qqusymyoygwwueco;
        iuoiiwaosgqoeask:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto wsqgykwqkgiwaksw;
        eemgwkicuicwskms:
        return false;
        goto kyemcamscwoeeoiy;
        qcwaessgikigogay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\x65\170\104\x69\x72\x65\x63\164"));
        goto uegccyuaemgmocgu;
        iouecsmwqgaiycoq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qqyasyisimsuyiiw;
        ywiyqcgyoweomkqg:
        return true;
        goto gmgemamkswqeskmo;
        geqcuwsuqymcqiou:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto yeywuuiugmgeuygm;
        yeywuuiugmgeuygm:
        $this->aasmeayouwmacaow(true);
        goto ywiyqcgyoweomkqg;
        gswsuaquqikkycwi:
        smqoegcueykkkiiq:
        goto eemgwkicuicwskms;
        qqyasyisimsuyiiw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto geqcuwsuqymcqiou;
        uegccyuaemgmocgu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto giuuqwcsockoiqem;
        }
        goto iouecsmwqgaiycoq;
        gmgemamkswqeskmo:
        giuuqwcsockoiqem:
        goto gswsuaquqikkycwi;
        wsqgykwqkgiwaksw:
        if (!(stripos($this->agent, "\131\141\156\144\x65\x78\x44\x69\x72\x65\x63\164") !== false)) {
            goto smqoegcueykkkiiq;
        }
        goto qcwaessgikigogay;
        kyemcamscwoeeoiy:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto eeqgkcgywkwgmiyg;
        cumwowkcomuigeag:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\145\x78\127\x65\x62\155\141\x73\x74\x65\162"));
        goto qomyesuacseysugi;
        euyooyocyuucmmmc:
        $this->aasmeayouwmacaow(true);
        goto iskwcciiywiaamos;
        fkcemcakyseoskmc:
        return false;
        goto aucqaemoukqogokc;
        saaioyiceykemgas:
        ggawqqciikeiqiau:
        goto cyoymqqkgiumuegy;
        wsiqkesiecagcykw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iawccecmgeaocqmg;
        heakaosaewwowmcu:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto euyooyocyuucmmmc;
        cyoymqqkgiumuegy:
        mucqymyysqeiaqwk:
        goto fkcemcakyseoskmc;
        qomyesuacseysugi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ggawqqciikeiqiau;
        }
        goto wsiqkesiecagcykw;
        iskwcciiywiaamos:
        return true;
        goto saaioyiceykemgas;
        eeqgkcgywkwgmiyg:
        if (!(stripos($this->agent, "\131\x61\156\144\x65\170\x57\145\x62\155\141\x73\x74\x65\162") !== false)) {
            goto mucqymyysqeiaqwk;
        }
        goto cumwowkcomuigeag;
        iawccecmgeaocqmg:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto heakaosaewwowmcu;
        aucqaemoukqogokc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto oyqaeioosuiwoacw;
        yksumiuqcoggugea:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto aisgmewqismsouqm;
        aisgmewqismsouqm:
        $this->aasmeayouwmacaow(true);
        goto mywassaguwommoyg;
        wmkoscqgkmsoasms:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cecqqwuqeiccmmos;
        oyqaeioosuiwoacw:
        if (!(stripos($this->agent, "\131\141\156\144\145\x78\106\x61\x76\x69\143\x6f\156\x73") !== false)) {
            goto quaugcgaccqksmmk;
        }
        goto omeekeuouqiieacw;
        wsgcyguocqmgccks:
        quaugcgaccqksmmk:
        goto cwmwkkauqqusccgs;
        omeekeuouqiieacw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\x65\170\x46\141\166\x69\143\157\x6e\163"));
        goto wuqswaumkwuciiqi;
        mywassaguwommoyg:
        return true;
        goto mgsyyameesskqgsk;
        cecqqwuqeiccmmos:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto yksumiuqcoggugea;
        cwmwkkauqqusccgs:
        return false;
        goto isowmaawkwmkcgmo;
        mgsyyameesskqgsk:
        aekwmmmciucegyys:
        goto wsgcyguocqmgccks;
        wuqswaumkwuciiqi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aekwmmmciucegyys;
        }
        goto wmkoscqgkmsoasms;
        isowmaawkwmkcgmo:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto ggyweqemgcmwwwgu;
        qquioqqwmiuemaaw:
        return true;
        goto gukkaysgawyusckc;
        eayemqoaewmasoos:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto wimcmomumakqcikc;
        kaiekqyukykoqiwa:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto eayemqoaewmasoos;
        wimcmomumakqcikc:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto gccyyceaqackqsec;
        oasoyuckmqumgwwy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\145\x78\x42\154\157\147\x73"));
        goto ucugysauicuskega;
        gukkaysgawyusckc:
        caumawwwskkoekcw:
        goto qacccgcuwysswgqk;
        ggyweqemgcmwwwgu:
        if (!(stripos($this->agent, "\x59\x61\x6e\144\145\170\102\154\x6f\x67\163") !== false)) {
            goto gciueqsqsgcekwae;
        }
        goto oasoyuckmqumgwwy;
        qacccgcuwysswgqk:
        gciueqsqsgcekwae:
        goto ucgecsiyweweymqw;
        ucugysauicuskega:
        if (!isset($yikciqwsimweauyg[1])) {
            goto caumawwwskkoekcw;
        }
        goto kaiekqyukykoqiwa;
        gccyyceaqackqsec:
        $this->aasmeayouwmacaow(true);
        goto qquioqqwmiuemaaw;
        ucgecsiyweweymqw:
        return false;
        goto ucwwsimgkkgymqwm;
        ucwwsimgkkgymqwm:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto oaaqgeqiwsykukeg;
        wyqswauigsseskum:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\x65\170\x4d\145\x64\x69\141"));
        goto gyswaoawqisgeiac;
        gyswaoawqisgeiac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto syoagkqccoyegkac;
        }
        goto aayyiwqgkqkkckeg;
        mwoaykewsqmiikum:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto iammckaiicmaeweq;
        eikeicmemcaswgaq:
        return false;
        goto wisaskaqkeaqaymk;
        eiuwyaccguegyckc:
        $this->aasmeayouwmacaow(true);
        goto wkaeeqagowygkuya;
        oaaqgeqiwsykukeg:
        if (!(stripos($this->agent, "\131\141\156\144\145\170\x4d\145\144\x69\x61") !== false)) {
            goto cuaueyackcccuamq;
        }
        goto wyqswauigsseskum;
        ygagqkmcasesqcui:
        cuaueyackcccuamq:
        goto eikeicmemcaswgaq;
        wkaeeqagowygkuya:
        return true;
        goto wuasiiywuycmkusq;
        aayyiwqgkqkkckeg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mwoaykewsqmiikum;
        iammckaiicmaeweq:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto eiuwyaccguegyckc;
        wuasiiywuycmkusq:
        syoagkqccoyegkac:
        goto ygagqkmcasesqcui;
        wisaskaqkeaqaymk:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto kwkeisysqagyioig;
        kwkeisysqagyioig:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\x65\170\126\151\x64\145\x6f") !== false)) {
            goto mieyqmckqkqaoygo;
        }
        goto mecmyqgsmiuesukw;
        kuimcqawqqqgcoqs:
        $this->aasmeayouwmacaow(true);
        goto osyoqauakmkoaigc;
        kmawaeioomkgqkqe:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ngkomagwskmkmcuc;
        wqcseegakwamkcca:
        wmigsokoiegiocys:
        goto yeyoqmmeeuqucmky;
        mecmyqgsmiuesukw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\144\145\170\x56\151\144\x65\157"));
        goto ouaywweeyqecagmc;
        yeyoqmmeeuqucmky:
        mieyqmckqkqaoygo:
        goto wmquwikmuiskcucm;
        osyoqauakmkoaigc:
        return true;
        goto wqcseegakwamkcca;
        ouaywweeyqecagmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wmigsokoiegiocys;
        }
        goto gogqmaoyqeoscico;
        wmquwikmuiskcucm:
        return false;
        goto ymmgwsqqoskmaags;
        ngkomagwskmkmcuc:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto kuimcqawqqqgcoqs;
        gogqmaoyqeoscico:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kmawaeioomkgqkqe;
        ymmgwsqqoskmaags:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto gggsgesuicesmqya;
        mksgaooiuiymkkac:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\x65\x78\x49\155\141\147\x65\163"));
        goto cqmkeoyaqqoykcyu;
        ueyiaawciiimcmia:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yuueeqwwgggeycog;
        qccmiyoiqguwmqug:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto kiqkwuaswsmkigok;
        waauqgswsiesowse:
        suaeioykcscoamsi:
        goto wqwqukkyascugisy;
        wqwqukkyascugisy:
        ukoqoieuoigccaoi:
        goto ecyoakcmqwaksmms;
        yuueeqwwgggeycog:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto qccmiyoiqguwmqug;
        cqmkeoyaqqoykcyu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto suaeioykcscoamsi;
        }
        goto ueyiaawciiimcmia;
        gggsgesuicesmqya:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\x49\x6d\141\x67\x65\x73") !== false)) {
            goto ukoqoieuoigccaoi;
        }
        goto mksgaooiuiymkkac;
        yieciwkqiqgceuya:
        return true;
        goto waauqgswsiesowse;
        kiqkwuaswsmkigok:
        $this->aasmeayouwmacaow(true);
        goto yieciwkqiqgceuya;
        ecyoakcmqwaksmms:
        return false;
        goto okyykeecayqaccik;
        okyykeecayqaccik:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto yqswiyiomsgeayiw;
        yuosayyyyemookmi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wqgwmgkmeiewmwsm;
        }
        goto gqogwsuwyiouywcy;
        ywwgsgiqkuwwuwas:
        cugwcccamcyuksgk:
        goto ayikwkmouqocqoya;
        egaiuisgeekasiow:
        wqgwmgkmeiewmwsm:
        goto ywwgsgiqkuwwuwas;
        escsoaemgioqgqso:
        $this->aasmeayouwmacaow(true);
        goto gumousymsmeugmsm;
        gqogwsuwyiouywcy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aouymgmkkcaaymky;
        sieeqakumiscuwmy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6d\x73\156\x62\x6f\x74"));
        goto yuosayyyyemookmi;
        aouymgmkkcaaymky:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto egsiwgciqqkwecuy;
        gumousymsmeugmsm:
        return true;
        goto egaiuisgeekasiow;
        egsiwgciqqkwecuy:
        $this->name = self::BROWSER_MSNBOT;
        goto escsoaemgioqgqso;
        yqswiyiomsgeayiw:
        if (!(stripos($this->agent, "\155\163\156\142\x6f\164") !== false)) {
            goto cugwcccamcyuksgk;
        }
        goto sieeqakumiscuwmy;
        ayikwkmouqocqoya:
        return false;
        goto wsuauiewqimocoes;
        wsuauiewqimocoes:
    }
    
    protected function qaigygakimuucuki()
    {
        goto oqkyykockmuiaycc;
        acsqgoigqaiqiwaw:
        ymmyqwqggkuwimiw:
        goto aoueegmsgkeokaoq;
        oqkyykockmuiaycc:
        if (!(stripos($this->agent, "\x62\151\x6e\x67\x62\157\x74") !== false)) {
            goto ymmyqwqggkuwimiw;
        }
        goto uugykecieoomuygs;
        gqmiumskekekmaks:
        oemaagemmycueycs:
        goto acsqgoigqaiqiwaw;
        uugykecieoomuygs:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x62\151\156\x67\142\x6f\x74"));
        goto aygyqqwyyugyoakg;
        hiuqggmuisuaaksw:
        $this->name = self::BROWSER_BINGBOT;
        goto uiyscqcowgeaeoco;
        aygyqqwyyugyoakg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oemaagemmycueycs;
        }
        goto egeecgiwycoqsgqm;
        uiyscqcowgeaeoco:
        $this->aasmeayouwmacaow(true);
        goto soiguuywuqqisowg;
        aoueegmsgkeokaoq:
        return false;
        goto wmuqesieiugiquks;
        ikqqmyoegaeocwqw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto hiuqggmuisuaaksw;
        egeecgiwycoqsgqm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikqqmyoegaeocwqw;
        soiguuywuqqisowg:
        return true;
        goto gqmiumskekekmaks;
        wmuqesieiugiquks:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto yiiaqacikommoaoy;
        sqcqqsocqymmgwcq:
        iicgycsecmaeqqcg:
        goto segewkgiakaqsgoc;
        oeiiuoikyagkmyqa:
        $yikciqwsimweauyg = explode("\x2f", stristr($eaogoiscgwgmugsq, "\127\x33\x43\137\x56\x61\x6c\x69\144\x61\x74\157\x72"));
        goto iamckkumoomyeoum;
        ucuiqegmmogyasmw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto oscemsgoyimocqei;
        eewmcuekysqqkeey:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto gggamqmqusyimaky;
        fkuiuosooquwmkoi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eewmcuekysqqkeey;
        wssaokwkycsqqumw:
        goto mcuiomgoamywqgya;
        goto iuiusomcwkaiksyq;
        iuiusomcwkaiksyq:
        sioosmeyiqmscmkc:
        goto weuwgyoweusiaweq;
        oiksgywwsqweoeai:
        mcuiomgoamywqgya:
        goto ckmosuuwagciuwmw;
        waqsamacggacoaye:
        return true;
        goto oiksgywwsqweoeai;
        weuwgyoweusiaweq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x57\63\103\x2d\x63\150\145\143\x6b\154\151\x6e\x6b"));
        goto ykoqgweokgwkcawk;
        sykosugesqqqqyey:
        wwaoocgeiyswqwow:
        goto okicguwqeyiuywos;
        yioasqegwkugoqag:
        $this->eywockmuswoykooc(true);
        goto waqsamacggacoaye;
        iqgasessakaoieuw:
        return true;
        goto sykosugesqqqqyey;
        iqugwmioumykkagm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto fkuiuosooquwmkoi;
        oqkkssoawygysqmq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto yioasqegwkugoqag;
        ykoqgweokgwkcawk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto weygkwekqawoowyq;
        }
        goto iqugwmioumykkagm;
        meqqkyuusamyauyc:
        weygkwekqawoowyq:
        goto mqigmosuikyaaamk;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        okicguwqeyiuywos:
        goto mcuiomgoamywqgya;
        goto osewecweiaekeoou;
        mqigmosuikyaaamk:
        goto mcuiomgoamywqgya;
        goto sqcqqsocqymmgwcq;
        segewkgiakaqsgoc:
        
        $eaogoiscgwgmugsq = str_replace("\x57\x33\103\x5f\x56\141\154\151\144\141\164\x6f\x72\40", "\127\x33\x43\x5f\126\x61\x6c\x69\144\141\x74\x6f\162\57", $this->agent);
        goto oeiiuoikyagkmyqa;
        aisaywmsiigsegso:
        if (stripos($this->agent, "\127\x33\103\x2d\x6d\157\x62\151\154\145\x4f\x4b") !== false) {
            goto uomswgeawseimkou;
        }
        goto wssaokwkycsqqumw;
        gggamqmqusyimaky:
        return true;
        goto meqqkyuusamyauyc;
        yiiaqacikommoaoy:
        if (stripos($this->agent, "\x57\63\103\x2d\x63\x68\145\x63\x6b\154\151\x6e\153") !== false) {
            goto sioosmeyiqmscmkc;
        }
        goto icmmwweaumcckgam;
        iamckkumoomyeoum:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wwaoocgeiyswqwow;
        }
        goto ucuiqegmmogyasmw;
        icmmwweaumcckgam:
        if (stripos($this->agent, "\127\x33\x43\x5f\126\141\x6c\151\144\141\164\157\x72") !== false) {
            goto iicgycsecmaeqqcg;
        }
        goto aisaywmsiigsegso;
        oscemsgoyimocqei:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imiuwwuwwyqigmou;
        osewecweiaekeoou:
        uomswgeawseimkou:
        goto oqkkssoawygysqmq;
        ckmosuuwagciuwmw:
        return false;
        goto iuiyyuwauoowkgeg;
        iuiyyuwauoowkgeg:
    }
    
    protected function cimegwusqouswgao()
    {
        goto kwumsouwywsqkmci;
        kwumsouwywsqkmci:
        if (!(stripos($this->agent, "\x73\154\x75\x72\160") !== false)) {
            goto wiawimwuykuugcwi;
        }
        goto qmckmkykmyucosyq;
        myksiemsskucuyac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ogeakuasmaemuwga;
        }
        goto gygwagcmmmaioikw;
        guiqaqkuywsmqcoc:
        wiawimwuykuugcwi:
        goto qeimskmimouyssgu;
        gygwagcmmmaioikw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mkimssyoqguuowky;
        mkimssyoqguuowky:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto aqcqeucsaaeuiwqa;
        ecuoemaqoeosiase:
        return true;
        goto aecsciyiseuamymy;
        aecsciyiseuamymy:
        ogeakuasmaemuwga:
        goto guiqaqkuywsmqcoc;
        ouecqyewekugmwkm:
        $this->eywockmuswoykooc(false);
        goto ecuoemaqoeosiase;
        qeimskmimouyssgu:
        return false;
        goto csecmagoocuukewm;
        qmckmkykmyucosyq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\154\x75\x72\x70"));
        goto myksiemsskucuyac;
        aqcqeucsaaeuiwqa:
        $this->name = self::BROWSER_SLURP;
        goto oawogoiagossceii;
        oawogoiagossceii:
        $this->aasmeayouwmacaow(true);
        goto ouecqyewekugmwkm;
        csecmagoocuukewm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto asoiigkaqcguaioi;
        qsqgkiyigokqcioe:
        owcekoqmukawoeao:
        goto wwckusqkukciicei;
        wuismmmeeqkiowua:
        if (stripos($this->agent, "\40\x42\x72\141\166\145\x20") !== false) {
            goto wucmiaeomamqgqes;
        }
        goto gikcoemsgecyasqe;
        qmywsksagymugcou:
        return true;
        goto qsqgkiyigokqcioe;
        wwckusqkukciicei:
        return false;
        goto cmcisgcoaouauymu;
        yeagcqwaoeskgqmg:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ocsoakwgmmwsekyi;
        gsuacqigwaigyaia:
        if (!isset($uuygmciickwewegw[1])) {
            goto ggakkmokkykkqawi;
        }
        goto ciymuigaugeiouic;
        ciymuigaugeiouic:
        $quiguswioiaaywey = explode("\40", $uuygmciickwewegw[1]);
        goto sosikmkcuygeukyo;
        iaiewssiomowoyas:
        $uuygmciickwewegw = explode("\57", stristr($this->agent, "\x42\x72\x61\x76\x65"));
        goto gsuacqigwaigyaia;
        sosikmkcuygeukyo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwgkaeyusoekmway;
        gikcoemsgecyasqe:
        goto owcekoqmukawoeao;
        goto gkgwqoquqekiayus;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        gaccwqquykeauumg:
        goto owcekoqmukawoeao;
        goto sqikwaiakyissigo;
        asoiigkaqcguaioi:
        if (stripos($this->agent, "\102\162\x61\x76\145\57") !== false) {
            goto ymgeisswqiucoaas;
        }
        goto wuismmmeeqkiowua;
        sqikwaiakyissigo:
        wucmiaeomamqgqes:
        goto yeagcqwaoeskgqmg;
        ocsoakwgmmwsekyi:
        
        
        $this->aasasueowyemuyoc('');
        goto qmywsksagymugcou;
        pwgwmqwuoqysukeo:
        ggakkmokkykkqawi:
        goto gaccwqquykeauumg;
        uckgesmigkiyqyck:
        return true;
        goto pwgwmqwuoqysukeo;
        gkgwqoquqekiayus:
        ymgeisswqiucoaas:
        goto iaiewssiomowoyas;
        cmcisgcoaouauymu:
    }
    
    protected function makyeuicweuowumi()
    {
        goto ccyiuskguauimqee;
        ysamigeqeyqgiwcs:
        yukycgouyuqkmaok:
        goto sggyugwiuggaaqyo;
        umimoqmwoeecysqi:
        return true;
        goto ysamigeqeyqgiwcs;
        oqymsqskimoyuyye:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x45\144\x67\x65"));
        goto oyykmqismqsyaaus;
        qgagcuckouyuyuss:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto qmkkwkqieggiyamm;
        sggyugwiuggaaqyo:
        megqkiykgiamgmsk:
        goto mwauqumigegcywiw;
        mwauqumigegcywiw:
        return false;
        goto omeswwygqyeqyqmw;
        sgwwscoqkcuoqqsg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kigaqwsiuygysecu;
        gmiyusqaiqaaakkk:
        camscswqceqycmke:
        goto umimoqmwoeecysqi;
        eamumkggcmyaosco:
        $this->eywockmuswoykooc(true);
        goto gmiyusqaiqaaakkk;
        qmkkwkqieggiyamm:
        if (!(stripos($this->agent, "\x57\x69\x6e\x64\157\x77\163\x20\120\x68\x6f\x6e\x65") !== false || stripos($this->agent, "\101\156\144\162\157\151\x64") !== false)) {
            goto camscswqceqycmke;
        }
        goto eamumkggcmyaosco;
        oyykmqismqsyaaus:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yukycgouyuqkmaok;
        }
        goto sgwwscoqkcuoqqsg;
        kigaqwsiuygysecu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qgagcuckouyuyuss;
        ccyiuskguauimqee:
        if (!(stripos($this->agent, "\x45\144\x67\145\57") !== false)) {
            goto megqkiykgiamgmsk;
        }
        goto oqymsqskimoyuyye;
        omeswwygqyeqyqmw:
    }
    
    protected function cgequousmqakcios()
    {
        goto cyikciomyweygykm;
        qsaiiuqwimiqiwyc:
        uecqmukyqqgyoegy:
        goto wkgugqyackgiowas;
        coeaoweyqagqsoqq:
        return true;
        goto goowmysscaoakuma;
        qskwqqamoqekaqum:
        $this->aasasueowyemuyoc(preg_replace("\x2f\x5b\136\x30\55\x39\x2e\x5d\53\57", '', $sogksuscggsicmac[1]));
        goto ameqasmessgyycqq;
        yueaaaoockqicmwq:
        goto qkmucouuqggkwssg;
        goto gocgaeomskmyyuaq;
        oesqmiaisaqseigm:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto kmyoqookuiyomeec;
        akmiwammkswkmyio:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eqiygsagygouqkyy;
        kwemswkcueagmssu:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto mayucqimkiskmcms;
        agasiekywmaokckg:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qwwigmoeocgyqyuy;
        yaeowwmkcuqmesau:
        
        if (!(stripos($this->agent, "\155\x73\156\142") !== false)) {
            goto kwyiuyoeysqeywmm;
        }
        goto kkumemicscqeqawi;
        kekkyamkouwoiyyi:
        owgoagmssqsysiyq:
        goto uasakawygcqkquuy;
        goiegscqgcukimys:
        goto qkmucouuqggkwssg;
        goto occyqeeyumwaygik;
        sqicocysoqwcgasq:
        $this->eywockmuswoykooc(true);
        goto awiqeeiewssogaaq;
        aykuikogcgweeoio:
        $this->aasasueowyemuyoc("\x31\x2e\65");
        goto qsaiiuqwimiqiwyc;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        gocgaeomskmyyuaq:
        ycsqoemcioqgscik:
        goto ckiggmwimwykqyee;
        mgsmmaqqkusaaqew:
        soacqquaasiggock:
        goto kwemswkcueagmssu;
        oeeccicqsoiyqcig:
        $this->eywockmuswoykooc(true);
        goto uksaceogcmuacumi;
        kwaiiaowwykksgcw:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto oesqmiaisaqseigm;
        omggicgmwyakocik:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto sqicocysoqwcgasq;
        gcasowsewwisgqwc:
        $yikciqwsimweauyg = stristr($this->agent, "\57");
        goto ieysgookkakiiuoo;
        cyikciomyweygykm:
        if (stripos($this->agent, "\x54\162\151\144\x65\156\164\x2f\x37\x2e\x30\73\40\162\166\x3a\61\x31\56\x30") !== false) {
            goto ycsqoemcioqgscik;
        }
        goto ouqiiwuqeoegciso;
        sckcaoikwggaoiqm:
        if (stripos($this->agent, "\155\x73\x69\x65") !== false && stripos($this->agent, "\157\160\145\162\x61") === false) {
            goto zkoqiugkkemmwqeq;
        }
        goto aaumqogegyqosuiq;
        uuiioegocmmcqgwq:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\73", "\x3b\x20", $this->agent), "\x6d\x73\x69\145"));
        goto yygugwkyoeackami;
        eaicyuessygcyuqu:
        return true;
        goto sikkakqouqeckesc;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\x31\x2e\x30");
        goto igesuquikuwmsywg;
        ygwwwwcgiwmcakmi:
        kwyiuyoeysqeywmm:
        goto uuiioegocmmcqgwq;
        kmmsoqcgiyougqqy:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto ygqkqwkyoosgomug;
        qwwigmoeocgyqyuy:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto oeeccicqsoiyqcig;
        micqaoiiquokaqmw:
        wskkwyoiugucwwua:
        goto wyagecywqcysyyae;
        uksaceogcmuacumi:
        if (stripos($this->agent, "\x6d\x73\160\151\x65") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto ieuewgsuqywiuuki;
        msccquimgomummck:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gyqcauemgkuwquua;
        }
        goto kmmsoqcgiyougqqy;
        sooawcagkoismuqa:
        muaiioeaoiqiogie:
        goto eoeoikgkiuewagwg;
        kmyoqookuiyomeec:
        if (!(stripos($this->agent, "\x49\105\115\157\x62\151\154\145") !== false)) {
            goto uoyuiiauquiwgasu;
        }
        goto omggicgmwyakocik;
        igesuquikuwmsywg:
        return true;
        goto iqkkuesiuysywyag;
        ameqasmessgyycqq:
        $this->agent = str_replace(["\115\157\x7a\151\x6c\154\141", "\107\145\x63\153\157"], "\115\x53\111\x45", $this->agent);
        goto isucaqumoqgykqig;
        sikkakqouqeckesc:
        qymmimiisagiymuy:
        goto aqwaemcyooumguou;
        yiomssmosemcckmc:
        iseeayqyeoawwmwc:
        goto uuamswicsoyuguug;
        eqiygsagygouqkyy:
        $this->aasasueowyemuyoc("\61\56\60");
        goto gcasowsewwisgqwc;
        wyagecywqcysyyae:
        goto ycsuqaygaisskkeq;
        goto kekkyamkouwoiyyi;
        myymisiqiwiqymuu:
        ycsuqaygaisskkeq:
        goto eaicyuessygcyuqu;
        occyqeeyumwaygik:
        zkoqiugkkemmwqeq:
        goto yaeowwmkcuqmesau;
        iuiickwiuccmyiey:
        goto qkmucouuqggkwssg;
        goto yiomssmosemcckmc;
        asgwqocgsuugguse:
        return false;
        goto kiykgaeecsuoegei;
        kqggyaomgmqyicmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qymmimiisagiymuy;
        }
        goto agasiekywmaokckg;
        aaumqogegyqosuiq:
        if (stripos($this->agent, "\164\x72\151\x64\x65\156\x74") !== false) {
            goto soacqquaasiggock;
        }
        goto umaimowkyaemisiq;
        eoeoikgkiuewagwg:
        goto qkmucouuqggkwssg;
        goto mgsmmaqqkusaaqew;
        syawcymwokyaqeck:
        if (!isset($sogksuscggsicmac[1])) {
            goto ewasqwuscwkeuuyi;
        }
        goto qskwqqamoqekaqum;
        uuamswicsoyuguug:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\155\163\160\x69\x65"));
        goto kqggyaomgmqyicmc;
        mayucqimkiskmcms:
        $sogksuscggsicmac = explode("\162\166\72", $this->agent);
        goto syawcymwokyaqeck;
        ieuewgsuqywiuuki:
        $quiguswioiaaywey = explode("\x2f", $this->agent);
        goto wysmuiaeuqqaycig;
        umaimowkyaemisiq:
        if (stripos($this->agent, "\x6d\163\x70\151\x65") !== false || stripos($this->agent, "\160\157\143\x6b\145\x74") !== false) {
            goto iseeayqyeoawwmwc;
        }
        goto yueaaaoockqicmwq;
        awiqeeiewssogaaq:
        uoyuiiauquiwgasu:
        goto eismimkcoiokucom;
        ieysgookkakiiuoo:
        if (!preg_match("\57\x33\x30\70\x7c\x34\62\65\174\x34\62\66\x7c\x34\x37\x34\x7c\x30\x62\x31\57\x69", $yikciqwsimweauyg)) {
            goto uecqmukyqqgyoegy;
        }
        goto aykuikogcgweeoio;
        uasakawygcqkquuy:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto myymisiqiwiqymuu;
        eismimkcoiokucom:
        return true;
        goto sooawcagkoismuqa;
        ouqiiwuqeoegciso:
        if (stripos($this->agent, "\155\151\143\162\x6f\163\x6f\146\164\x20\151\x6e\164\145\162\156\145\164\40\x65\170\x70\154\x6f\x72\x65\x72") !== false) {
            goto usoiismiikooagme;
        }
        goto sckcaoikwggaoiqm;
        swasyyuiyouasyqy:
        usoiismiikooagme:
        goto akmiwammkswkmyio;
        wkgugqyackgiowas:
        return true;
        goto goiegscqgcukimys;
        goowmysscaoakuma:
        gyqcauemgkuwquua:
        goto ygwwwwcgiwmcakmi;
        iqkkuesiuysywyag:
        goto qkmucouuqggkwssg;
        goto swasyyuiyouasyqy;
        kkumemicscqeqawi:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\x3b\40", $this->agent), "\x4d\x53\x4e"));
        goto msccquimgomummck;
        ygqkqwkyoosgomug:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto coeaoweyqagqsoqq;
        wysmuiaeuqqaycig:
        if (!isset($quiguswioiaaywey[1])) {
            goto wskkwyoiugucwwua;
        }
        goto qousyksekeougumo;
        qousyksekeougumo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto micqaoiiquokaqmw;
        isucaqumoqgykqig:
        ewasqwuscwkeuuyi:
        goto iuiickwiuccmyiey;
        aqwaemcyooumguou:
        qkmucouuqggkwssg:
        goto asgwqocgsuugguse;
        yygugwkyoeackami:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto kwaiiaowwykksgcw;
        kiykgaeecsuoegei:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto qakmsceesmcwecmo;
        emoscekqieoummww:
        $cgkyugweawsewkuu = stristr($this->agent, "\x4f\120\122");
        goto cyucgakoiiemocie;
        ggiacqackmguiiki:
        if (preg_match("\57\x5c\x2f\x2f", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ckgikcyggaegucyk;
        mwcysigeamkwiwku:
        uqqaaeqoykgcakec:
        goto ywukigwwwumwuicy;
        mukwaeyamkyacewo:
        oucqmskiygmmsmye:
        goto gocmokqaeqkqcmma;
        msywkyeikecaomgo:
        smsuqgcummiyucsc:
        goto uccocwouuuisiage;
        uyeiymmkkiyccakm:
        if (stripos($this->agent, "\x6f\160\x65\162\141") !== false) {
            goto oucqmskiygmmsmye;
        }
        goto scimuugawiiuemki;
        kywqmsqusiysywqe:
        $this->name = self::BROWSER_OPERA_MINI;
        goto swkkeqmaqugwiysy;
        uuimoqmwywkkaygo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto akmiwuwwkeokegkq;
        yscyooysgqsyuayo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cuyagmoysmwoceks;
        }
        goto ssoogugiigiqooce;
        ksmacqoqogyoookk:
        $this->name = self::BROWSER_OPERA;
        goto ugmggeiwogwcgcqy;
        ssoogugiigiqooce:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mseowikguuikkiys;
        quucsamwocuceyae:
        ieeieiuoeqquyaka:
        goto emoscekqieoummww;
        omcmaswaawciiaui:
        goto uqqaaeqoykgcakec;
        goto quucsamwocuceyae;
        myemqwquecqwakyq:
        isgqqmaauckagsao:
        goto ksmacqoqogyoookk;
        oqyumeoumucciuao:
        iggqqqegoegigyii:
        goto gouyqmyakowooiyw;
        swkkeqmaqugwiysy:
        $this->eywockmuswoykooc(true);
        goto csoomgiiyysqmeku;
        csuemgeukskicmmi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ycaooqesseeagoka;
        yiyksucyuaosekey:
        uiuyiuiocgycwaae:
        goto msywkyeikecaomgo;
        aekskqewqmeauaug:
        $this->name = self::BROWSER_OPERA;
        goto ikuoukwawkkyaacy;
        akmiwuwwkeokegkq:
        goto cqcomacmwgougkai;
        goto oqyumeoumucciuao;
        iqwiyiisyasiwsiu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiuyiuiocgycwaae;
        }
        goto omusyecyksyowysk;
        eiosgmsukekekyou:
        csguwgocosyisgyq:
        goto kywqmsqusiysywqe;
        kwsuumgiqsskggqy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yiyksucyuaosekey;
        ycaooqesseeagoka:
        eoueymmeawwwswwq:
        goto ccaqsekgkcqqayyg;
        wmcauamwimsyiauk:
        goto uqqaaeqoykgcakec;
        goto mmowusaeqemsisiq;
        cyucgakoiiemocie:
        if (!preg_match("\57\x5c\x2f\x2f", $cgkyugweawsewkuu)) {
            goto smsuqgcummiyucsc;
        }
        goto yeayeuiggqoigwag;
        eyuieiqqgyowoocu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eoueymmeawwwswwq;
        }
        goto gmgwsqeqwquucyoo;
        coyegiuygcqwmaqc:
        if (!isset($quiguswioiaaywey[1])) {
            goto amecoaswmoqigiku;
        }
        goto eukqocmusiasmewe;
        mmowusaeqemsisiq:
        qwiwywqwmmciwiea:
        goto wskewcieqoqiuoui;
        uukmwmiaqigsqaug:
        $this->eywockmuswoykooc(true);
        goto myemqwquecqwakyq;
        iegksyacuckwoyiw:
        if (!(stripos($this->agent, "\117\160\x65\162\x61\x20\x4d\157\x62\x69") !== false)) {
            goto sackmgaomiwgeqca;
        }
        goto ggaoikewqkecamgs;
        uccocwouuuisiage:
        if (!(stripos($this->agent, "\x4d\157\142\151\x6c\145") !== false)) {
            goto isgqqmaauckagsao;
        }
        goto uukmwmiaqigsqaug;
        ckgikcyggaegucyk:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\x6f\160\145\x72\x61\40\x6d\151\x6e\x69"));
        goto coyegiuygcqwmaqc;
        yeayeuiggqoigwag:
        $yikciqwsimweauyg = explode("\57", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto iqwiyiisyasiwsiu;
        ageemsqieiqyqwag:
        cuyagmoysmwoceks:
        goto eiosgmsukekekyou;
        qwgicaiskacusqka:
        sackmgaomiwgeqca:
        goto aekskqewqmeauaug;
        gmgwsqeqwquucyoo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto csuemgeukskicmmi;
        eukqocmusiasmewe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto usmucisyagswyysu;
        ggaoikewqkecamgs:
        $this->eywockmuswoykooc(true);
        goto qwgicaiskacusqka;
        aiaaaesgesgwsuck:
        $yikciqwsimweauyg = explode("\57", $cgkyugweawsewkuu);
        goto yscyooysgqsyuayo;
        gocmokqaeqkqcmma:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\145\162\x61");
        goto uggmmsuyiiyuaeic;
        uggmmsuyiiyuaeic:
        if (preg_match("\x2f\x56\145\162\x73\x69\x6f\156\134\x2f\x28\61\52\x2e\52\51\x24\57", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto uqsmiiqigeisoyse;
        }
        goto cyaaugsakiugouae;
        ocisosooggaaueii:
        uqsmiiqigeisoyse:
        goto uuimoqmwywkkaygo;
        ukkkmakiisiqkacm:
        goto uqqaaeqoykgcakec;
        goto mukwaeyamkyacewo;
        ccaqsekgkcqqayyg:
        cqcomacmwgougkai:
        goto iegksyacuckwoyiw;
        mseowikguuikkiys:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ageemsqieiqyqwag;
        omusyecyksyowysk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kwsuumgiqsskggqy;
        qakmsceesmcwecmo:
        if (stripos($this->agent, "\157\160\145\162\x61\40\x6d\x69\x6e\x69") !== false) {
            goto qwiwywqwmmciwiea;
        }
        goto uyeiymmkkiyccakm;
        sciiwomqgcamicqs:
        fwqikeoyaewusiym:
        goto aiaaaesgesgwsuck;
        wkasucgiaeogugcw:
        goto cqcomacmwgougkai;
        goto ocisosooggaaueii;
        ikuoukwawkkyaacy:
        return true;
        goto omcmaswaawciiaui;
        ywukigwwwumwuicy:
        return false;
        goto uyuugesysqaueywi;
        wawimucmukumkuca:
        goto csguwgocosyisgyq;
        goto sciiwomqgcamicqs;
        cemwkemiwicagmou:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\157\x70\x65\x72\141"));
        goto uowyeayyimmqogge;
        cyaaugsakiugouae:
        if (preg_match("\57\x5c\x2f\x2f", $cgkyugweawsewkuu)) {
            goto iggqqqegoegigyii;
        }
        goto cemwkemiwicagmou;
        usmucisyagswyysu:
        amecoaswmoqigiku:
        goto wawimucmukumkuca;
        scimuugawiiuemki:
        if (stripos($this->agent, "\117\x50\122") !== false) {
            goto ieeieiuoeqquyaka;
        }
        goto wmcauamwimsyiauk;
        gouyqmyakowooiyw:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto eyuieiqqgyowoocu;
        uowyeayyimmqogge:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto wkasucgiaeogugcw;
        wskewcieqoqiuoui:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\x65\162\x61\x20\x6d\151\x6e\151");
        goto ggiacqackmguiiki;
        ugmggeiwogwcgcqy:
        return true;
        goto mwcysigeamkwiwku;
        csoomgiiyysqmeku:
        return true;
        goto ukkkmakiisiqkacm;
        uyuugesysqaueywi:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto oymcieacieeqwses;
        oymcieacieeqwses:
        if (!(stripos($this->agent, "\103\150\x72\157\155\x65") !== false)) {
            goto kicmwgigiciiuqaw;
        }
        goto cggwmqyuewwisqsu;
        syuakiekoaowmoyy:
        $this->eywockmuswoykooc(true);
        goto symsqqgwwimugwue;
        acmqaeyciymmsgua:
        kicmwgigiciiuqaw:
        goto ewswyuykwuaigiyo;
        cggwmqyuewwisqsu:
        $yikciqwsimweauyg = preg_split("\57\133\134\57\73\135\x2b\57", stristr($this->agent, "\103\150\162\157\x6d\145"));
        goto ymkqceigmmuokugy;
        ceskkigeaqcaasqs:
        
        if (!(stripos($this->agent, "\x41\156\144\x72\157\x69\x64") !== false)) {
            goto somyyugyumgeukik;
        }
        goto wikueqyuegggkqoi;
        ymyqsgymeusoakyi:
        qkmqkcwgskmyeoyq:
        goto syuakiekoaowmoyy;
        awukkyueuqcaywks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto akgyaaawgcecyoqc;
        ygeweomowkiskgec:
        return true;
        goto kkaqamsuqkgkwowo;
        gsuqomaoosusiqew:
        goto gqaoecysyaaccyyy;
        goto ymyqsgymeusoakyi;
        wikueqyuegggkqoi:
        if (stripos($this->agent, "\115\157\142\151\154\145") !== false) {
            goto qkmqkcwgskmyeoyq;
        }
        goto qoigmymamwikqkce;
        ewswyuykwuaigiyo:
        return false;
        goto owuqwmsqouswswau;
        qoigmymamwikqkce:
        $this->icigyueiiwsukmsu(true);
        goto gsuqomaoosusiqew;
        ymkqceigmmuokugy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oikasesimicoysmu;
        }
        goto gygkmqwkaiskgwws;
        kkaqamsuqkgkwowo:
        oikasesimicoysmu:
        goto acmqaeyciymmsgua;
        symsqqgwwimugwue:
        gqaoecysyaaccyyy:
        goto qymyaksieaiemaam;
        akgyaaawgcecyoqc:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ceskkigeaqcaasqs;
        qymyaksieaiemaam:
        somyyugyumgeukik:
        goto ygeweomowkiskgec;
        gygkmqwkaiskgwws:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto awukkyueuqcaywks;
        owuqwmsqouswswau:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto iugcwummaqmgiqgm;
        ueimcmmgwiommwwg:
        skawosaecygmqmsq:
        goto asmgcmegmekauiqm;
        bkmiygiccoagsyck:
        iawosyeimcucqgky:
        goto ueimcmmgwiommwwg;
        asmgcmegmekauiqm:
        return false;
        goto quqkggiycuoeaysg;
        aecesusucigikyqs:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iawosyeimcucqgky;
        }
        goto caomeykgioesgswg;
        iaewosqywiqiqmqs:
        return true;
        goto bkmiygiccoagsyck;
        wkeoacqqekmaqogk:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto iaewosqywiqiqmqs;
        cqmwuwoaqiumaogi:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x77\x65\142\164\x76"));
        goto aecesusucigikyqs;
        owaomgiwykiiesqs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wkeoacqqekmaqogk;
        iugcwummaqmgiqgm:
        if (!(stripos($this->agent, "\167\x65\x62\164\x76") !== false)) {
            goto skawosaecygmqmsq;
        }
        goto cqmwuwoaqiumaogi;
        caomeykgioesgswg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto owaomgiwykiiesqs;
        quqkggiycuoeaysg:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto wgmeusuigqsowace;
        wgmeusuigqsowace:
        if (!(stripos($this->agent, "\x4e\x65\164\120\x6f\163\x69\164\151\x76\145") !== false)) {
            goto cyscaaaicmkkqies;
        }
        goto eqgyoucqmyyqqagc;
        eqgyoucqmyyqqagc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\116\x65\164\120\157\x73\x69\164\x69\166\x65"));
        goto qomaksiaaooygwsg;
        aiugcqaaymaasikk:
        cyscaaaicmkkqies:
        goto cmmgaceguouaicok;
        cmmgaceguouaicok:
        return false;
        goto gosqawkmwoukawsa;
        ocegwkgcsegowucu:
        kgeeikakwgkukkke:
        goto aiugcqaaymaasikk;
        qomaksiaaooygwsg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kgeeikakwgkukkke;
        }
        goto sqkqqasyecqeysww;
        vkcgsyecgukweyki:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto aiawyogcusykcgem;
        seekksssaiokokyq:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\x3b"], '', $quiguswioiaaywey[0]));
        goto vkcgsyecgukweyki;
        sqkqqasyecqeysww:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto seekksssaiokokyq;
        aiawyogcusykcgem:
        return true;
        goto ocegwkgcsegowucu;
        gosqawkmwoukawsa:
    }
    
    protected function usswyskeuiskccki()
    {
        goto kkmwiocaqecosykg;
        csskywiguyamicyu:
        return true;
        goto uceyoakcoqqgkmka;
        owkecwacqesgqcaq:
        return false;
        goto gggcyumymmmiuaeu;
        mksgqgcoeeksaiqe:
        iiksoosqisyggaks:
        goto owkecwacqesgqcaq;
        uceyoakcoqqgkmka:
        kqmsyeoyemocoiqs:
        goto mksgqgcoeeksaiqe;
        asmgcueacgcuokak:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto siycmwciwoewsooi;
        mqieeoagcesmykuy:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x67\x61\x6c\x65\x6f\x6e"));
        goto asmgcueacgcuokak;
        siycmwciwoewsooi:
        if (!isset($quiguswioiaaywey[1])) {
            goto kqmsyeoyemocoiqs;
        }
        goto ceguiykycywoocuu;
        ceguiykycywoocuu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto xwsiauqamwogkwmo;
        xwsiauqamwogkwmo:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto csskywiguyamicyu;
        kkmwiocaqecosykg:
        if (!(stripos($this->agent, "\x67\141\154\x65\157\x6e") !== false)) {
            goto iiksoosqisyggaks;
        }
        goto mqieeoagcesmykuy;
        gggcyumymmmiuaeu:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto ymykisoiiyyqeqim;
        iyoukgscwmcoweqa:
        return false;
        goto yagoyoogqkomucci;
        isygymaiseqgeiau:
        if (!isset($quiguswioiaaywey[1])) {
            goto imaukawsimqgmauc;
        }
        goto keqsgkcumkusgygg;
        mcqqawkmqiiyecey:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\113\x6f\156\161\x75\145\x72\157\162"));
        goto yasusgwwwekossyy;
        yasusgwwwekossyy:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto isygymaiseqgeiau;
        eqsqecmiugakueqm:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto ymqcqiyawcogwgym;
        ymqcqiyawcogwgym:
        return true;
        goto cmwigsaskaamoema;
        ecmeeksmaqyumykg:
        ogcasmoaumciscii:
        goto iyoukgscwmcoweqa;
        ymykisoiiyyqeqim:
        if (!(stripos($this->agent, "\x4b\157\x6e\161\x75\x65\x72\x6f\x72") !== false)) {
            goto ogcasmoaumciscii;
        }
        goto mcqqawkmqiiyecey;
        cmwigsaskaamoema:
        imaukawsimqgmauc:
        goto ecmeeksmaqyumykg;
        keqsgkcumkusgygg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto eqsqecmiugakueqm;
        yagoyoogqkomucci:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto eacseogmmqokmogu;
        koakuemcskwaoesy:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto cwyqqgwwmesmkiam;
        eacseogmmqokmogu:
        if (!(stripos($this->agent, "\151\143\141\142") !== false)) {
            goto swuqimcsmiwqaaom;
        }
        goto oswqmcgsewiscugq;
        cwyqqgwwmesmkiam:
        return true;
        goto ssewsumymwocqyyc;
        ycmiqcakcweakeaa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto koakuemcskwaoesy;
        qgoyesykieqauwqi:
        swuqimcsmiwqaaom:
        goto aesqewckgocaowoi;
        aesqewckgocaowoi:
        return false;
        goto gsguoieaewagyogs;
        oswqmcgsewiscugq:
        $quiguswioiaaywey = explode("\40", stristr(str_replace("\57", "\x20", $this->agent), "\151\x63\x61\142"));
        goto guukcysyaquuekek;
        ssewsumymwocqyyc:
        kegmcwesswsaamum:
        goto qgoyesykieqauwqi;
        guukcysyaquuekek:
        if (!isset($quiguswioiaaywey[1])) {
            goto kegmcwesswsaamum;
        }
        goto ycmiqcakcweakeaa;
        gsguoieaewagyogs:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ocesuggkygmwyoqu;
        amwwumeqoscyamoc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6f\x6d\x6e\151\167\x65\142"));
        goto iimagwawmcgmaoga;
        ocesuggkygmwyoqu:
        if (!(stripos($this->agent, "\x6f\x6d\x6e\151\x77\145\x62") !== false)) {
            goto qskksaagcgukausc;
        }
        goto amwwumeqoscyamoc;
        omagiuciweiemoik:
        return false;
        goto uemcayqyeweiosqw;
        iimagwawmcgmaoga:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto aaqekekaoaqgkiio;
        sgyogmewgaymcogg:
        qskksaagcgukausc:
        goto omagiuciweiemoik;
        aaqekekaoaqgkiio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ogoiksimykeiuekg;
        ogoiksimykeiuekg:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto aomicoqgwkaiosso;
        aomicoqgwkaiosso:
        return true;
        goto sgyogmewgaymcogg;
        uemcayqyeweiosqw:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto eiwccayegouiekwk;
        iuumwocuuoyceaks:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto oewqywyeaueuiyes;
        ssoogecumeaeekcs:
        wusygegyegamyioq:
        goto ukeaeogwsoackkas;
        oewqywyeaueuiyes:
        return true;
        goto ssoogecumeaeekcs;
        acasskokyagwkumy:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\x50\x68\x6f\145\156\x69\170"));
        goto osoyyysskuckoocc;
        ukeaeogwsoackkas:
        ksqsiosguewggcya:
        goto auaaassweykwwsge;
        eiwccayegouiekwk:
        if (!(stripos($this->agent, "\x50\150\x6f\x65\x6e\x69\170") !== false)) {
            goto ksqsiosguewggcya;
        }
        goto acasskokyagwkumy;
        osoyyysskuckoocc:
        if (!isset($quiguswioiaaywey[1])) {
            goto wusygegyegamyioq;
        }
        goto kuimgaokwkqogaqk;
        auaaassweykwwsge:
        return false;
        goto sqgomkiuekmaykyw;
        kuimgaokwkqogaqk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto iuumwocuuoyceaks;
        sqgomkiuekmaykyw:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto awyuyuuiayqoekkc;
        awyuyuuiayqoekkc:
        if (!(stripos($this->agent, "\106\x69\x72\x65\x62\151\162\144") !== false)) {
            goto mimmumuekmyyyaug;
        }
        goto eoemqkmecwqsagce;
        eoemqkmecwqsagce:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\106\x69\162\145\x62\151\162\x64"));
        goto kigsuwkmaacmwgsq;
        csgyceiomssoweek:
        ouseosmqaaykkaaw:
        goto ycaskcwiywemgmay;
        qwmuiakauycoowya:
        return true;
        goto csgyceiomssoweek;
        ycaskcwiywemgmay:
        mimmumuekmyyyaug:
        goto icmgwgoywmewyeii;
        qkymmwmmiemiauyg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ykceeqicyiqgssye;
        icmgwgoywmewyeii:
        return false;
        goto mocwcekscogegcwa;
        kigsuwkmaacmwgsq:
        if (!isset($quiguswioiaaywey[1])) {
            goto ouseosmqaaykkaaw;
        }
        goto qkymmwmmiemiauyg;
        ykceeqicyiqgssye:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto qwmuiakauycoowya;
        mocwcekscogegcwa:
    }
    
    protected function aweyeayscomouegw()
    {
        goto aoasogsaqgewacum;
        yuaommqaoiseeice:
        ecsuogeauwascies:
        goto cciuyoceqiauqsic;
        oekaqqseuemcgeqe:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto ikcmeaikkuekumye;
        aoasogsaqgewacum:
        if (stripos($this->agent, "\x46\x69\162\x65\x66\x6f\170") !== false && preg_match("\x2f\116\141\x76\x69\x67\x61\164\157\162\x5c\57\x28\x5b\x5e\40\135\52\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto aegamiyqqcwuqcyk;
        }
        goto kyisocwmmwaiwayk;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        mgqmswesaekqqwiu:
        goto aqewaqaseausoewg;
        goto yuaommqaoiseeice;
        weekemioaaygmggw:
        return false;
        goto ycgokycmgosuamok;
        mogugiawmaoukmak:
        goto aqewaqaseausoewg;
        goto ccokywiouwwmiwse;
        kyisocwmmwaiwayk:
        if (stripos($this->agent, "\106\151\x72\x65\146\157\170") === false && preg_match("\57\x4e\145\x74\x73\x63\x61\x70\145\x36\77\134\57\50\133\x5e\x20\x5d\52\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ecsuogeauwascies;
        }
        goto mogugiawmaoukmak;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        ikcmeaikkuekumye:
        return true;
        goto uuskeoeuumiigues;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        cciuyoceqiauqsic:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto oekaqqseuemcgeqe;
        ccokywiouwwmiwse:
        aegamiyqqcwuqcyk:
        goto ysmckuskoqmsyaca;
        uuskeoeuumiigues:
        aqewaqaseausoewg:
        goto weekemioaaygmggw;
        ycgokycmgosuamok:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto meamoqcwwsqiyoqc;
        aeecqkykiqyuqmyg:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto gmcieuucmgkcoyii;
        meamoqcwwsqiyoqc:
        if (!(stripos($this->agent, "\115\157\x7a\151\x6c\x6c\141") !== false && preg_match("\57\123\150\x69\162\145\164\157\x6b\x6f\134\57\x28\x5b\136\40\x5d\52\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto mqweugciiyyukymg;
        }
        goto wsmwmwswqaoeaquq;
        wsmwmwswqaoeaquq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aeecqkykiqyuqmyg;
        yuqemymykuasskoy:
        return false;
        goto mmeumymqusiaiugs;
        gmcieuucmgkcoyii:
        return true;
        goto waqwkysqcskykuum;
        waqwkysqcskykuum:
        mqweugciiyyukymg:
        goto yuqemymykuasskoy;
        mmeumymqusiaiugs:
    }
    
    protected function noeygigqkeciickm()
    {
        goto kscocsoaygkcaocq;
        qgocscwqkuyemmcw:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto oiuiwkywiekacygs;
        swusuwwawauqqqae:
        qcqqieuakcakkwem:
        goto qmssaeiomssoycas;
        kscocsoaygkcaocq:
        if (!(stripos($this->agent, "\x4d\x6f\172\x69\x6c\154\x61") !== false && preg_match("\57\111\143\x65\x43\x61\164\134\57\x28\133\136\40\x5d\x2a\51\57\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto qcqqieuakcakkwem;
        }
        goto akqgwckwiiugwiay;
        akqgwckwiiugwiay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgocscwqkuyemmcw;
        oiuiwkywiekacygs:
        return true;
        goto swusuwwawauqqqae;
        qmssaeiomssoycas:
        return false;
        goto wamigcygcsucigmi;
        wamigcygcsucigmi:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto iaumckssomaweakk;
        myycwmecoyeekeus:
        qmcmakumyemsuoaa:
        goto aaymugikaeaqsaos;
        euoqiuygwwssoqou:
        mqqqqeiimsgyacaw:
        goto yseikqceqguugaee;
        yseikqceqguugaee:
        return false;
        goto uioaeuugwsakiykw;
        uqsgmacmweuuwqgy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qogciqauggmmigia;
        aaymugikaeaqsaos:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto ewoywsgmimyigwai;
        semoayicskccgemw:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto ouigaoeeokmqaqoe;
        ouigaoeeokmqaqoe:
        goto kgwewosygiuoiigk;
        goto myycwmecoyeekeus;
        smyugaykeesyuakw:
        $this->eywockmuswoykooc(true);
        goto uqemmmykkceucwum;
        uqemmmykkceucwum:
        return true;
        goto euoqiuygwwssoqou;
        ewoywsgmimyigwai:
        kgwewosygiuoiigk:
        goto smyugaykeesyuakw;
        iaumckssomaweakk:
        if (!preg_match("\x2f\x4e\157\x6b\x69\141\50\x5b\136\x5c\x2f\x5d\53\51\134\57\50\133\136\40\x53\x50\x5d\x2b\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mqqqqeiimsgyacaw;
        }
        goto uqsgmacmweuuwqgy;
        qogciqauggmmigia:
        if (stripos($this->agent, "\123\x65\x72\151\x65\x73\66\x30") !== false || strpos($this->agent, "\123\66\60") !== false) {
            goto qmcmakumyemsuoaa;
        }
        goto semoayicskccgemw;
        uioaeuugwsakiykw:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto oqqooygakaagaiqw;
        yggwmccmmiemueou:
        koiuecgmeyuiwqkk:
        goto cqouacqmcegmykuu;
        wcosggqmokuwgomy:
        goto koiuecgmeyuiwqkk;
        goto koomcmawyuomqmii;
        giiusoakskiciase:
        if (preg_match("\x2f\x50\141\154\x65\155\x6f\x6f\156\50\133\x30\x2d\71\x61\x2d\x7a\101\55\x5a\134\56\x5d\x2b\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseakuykcykcomwg;
        }
        goto wkeeueuiysyiqaoq;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        iaksmguwicewykey:
        goto koiuecgmeyuiwqkk;
        goto qegwssscaomyoekg;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto osioeeokiykiemau;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        oqqooygakaagaiqw:
        if (!(stripos($this->agent, "\x73\x61\x66\141\x72\x69") === false)) {
            goto gsiigogemgmesycs;
        }
        goto qaqckwcumcykqcay;
        cqouacqmcegmykuu:
        gsiigogemgmesycs:
        goto imimwegqkykucuia;
        imimwegqkykucuia:
        return false;
        goto iksugmewgigsiaec;
        yysucuowuoiskkui:
        $this->aasasueowyemuyoc('');
        goto wguwcgascccyeasu;
        oakyyiqquqsccuks:
        rkaswcmccyqqioqs:
        goto cwoaoecuqyiccwcw;
        koomcmawyuomqmii:
        yseakuykcykcomwg:
        goto smeqeomcqisgssau;
        wguwcgascccyeasu:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto aomoesqmwqcyueoa;
        qegwssscaomyoekg:
        uiskkgkcyssegigy:
        goto yysucuowuoiskkui;
        wkeeueuiysyiqaoq:
        if (preg_match("\57\x50\x61\154\145\x6d\x6f\157\x6e\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto uiskkgkcyssegigy;
        }
        goto mkyoiqgumggcsakq;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        mkyoiqgumggcsakq:
        goto koiuecgmeyuiwqkk;
        goto oakyyiqquqsccuks;
        qaqckwcumcykqcay:
        if (preg_match("\57\x50\141\x6c\145\x6d\x6f\x6f\156\133\134\x2f\x20\x5c\50\x5d\x28\133\136\40\x3b\x5c\x29\135\x2b\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto rkaswcmccyqqioqs;
        }
        goto giiusoakskiciase;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        aomoesqmwqcyueoa:
        return true;
        goto yggwmccmmiemueou;
        iksugmewgigsiaec:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto omygyywamgusigko;
        yqyyssciomuwwisa:
        return false;
        goto cskgiyqesqqawuwo;
        miwaaaueiacyqequ:
        jimwweuekesuemiy:
        goto baqgcseewusocmom;
        seyoowocwsqsekqi:
        ewqooaykuauegwio:
        goto yoqwqkuekiauqsuc;
        gouiskmmqywoscgm:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto ewqooaykuauegwio;
        }
        goto uwcawmmgcaecgyqm;
        baqgcseewusocmom:
        $this->eywockmuswoykooc(true);
        goto akkuysmcasqukkug;
        omygyywamgusigko:
        if (!preg_match("\57\x55\103\x20\x3f\x42\162\157\167\163\145\162\x5c\57\x3f\50\x5b\x5c\144\134\x2e\x5d\x2b\51\x2f", $this->agent, $meyiiwcswqmuggyg)) {
            goto iioueceaesegmgyi;
        }
        goto gouiskmmqywoscgm;
        sqsgeccoawoeukws:
        iioueceaesegmgyi:
        goto yqyyssciomuwwisa;
        uwcawmmgcaecgyqm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto seyoowocwsqsekqi;
        akkuysmcasqukkug:
        ywgwuqyisimkacqe:
        goto gaqigeacswyyikkk;
        qagasowcequukwoc:
        return true;
        goto sqsgeccoawoeukws;
        gaqigeacswyyikkk:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto qagasowcequukwoc;
        wousqisikkiooewi:
        $this->icigyueiiwsukmsu(true);
        goto wwamkekgkkiogiiu;
        wwamkekgkkiogiiu:
        goto ywgwuqyisimkacqe;
        goto miwaaaueiacyqequ;
        yoqwqkuekiauqsuc:
        if (stripos($this->agent, "\x4d\x6f\x62\x69\154\145") !== false) {
            goto jimwweuekesuemiy;
        }
        goto wousqisikkiooewi;
        cskgiyqesqqawuwo:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto ygoomqwcsggeiuge;
        amksqwmicsmyocyw:
        goto kaycawgquiieeaiw;
        goto wcaiuquuswsqacgg;
        guwmgkcgaoysewyw:
        $this->icigyueiiwsukmsu(true);
        goto ciimuiiegyeaggya;
        qyogimcocyqgyyee:
        goto kmwseockoawqkoao;
        goto aksacseyuwyiseay;
        qwwscygkwwsiocok:
        if (preg_match("\x2f\106\151\x72\x65\x66\x6f\170\x28\133\60\55\71\141\55\x7a\101\55\x5a\x5c\x2e\x5d\53\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mmomogyaswcsgwwy;
        }
        goto wggeuckgywqucase;
        aygkuykcicgceciq:
        goto escuksewiugekayq;
        goto kiocmmsiuwcuemyg;
        kiocmmsiuwcuemyg:
        wwmqgecmsimuecam:
        goto cguuomiqwuicsgwa;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        cwycmkkoscmgcecg:
        
        if (!(stripos($this->agent, "\x41\156\x64\162\x6f\x69\144") !== false || stripos($this->agent, "\x69\120\x68\x6f\x6e\145") !== false)) {
            goto wgcmsygycukiqmui;
        }
        goto kiqiskyesywkwkos;
        qkqwgsoymmqsqeim:
        if (preg_match("\57\x46\x78\151\117\123\133\134\x2f\x20\x5c\50\135\x28\x5b\x5e\x20\x3b\134\51\135\53\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto oymsgiwgeiqguuyy;
        }
        goto amksqwmicsmyocyw;
        gokkyeisqkoccqis:
        sgwiageicumuqwke:
        goto ymmqwacaoayoyiei;
        kuegskyiyugiuosa:
        goto kmwseockoawqkoao;
        goto uaigiceqkuiguogo;
        gqaiguosioisccwm:
        if (preg_match("\57\x46\x69\x72\145\146\157\x78\133\x5c\x2f\x20\x5c\x28\135\x28\133\x5e\x20\x3b\134\51\x5d\53\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto usmieesmayeskkmk;
        }
        goto qwwscygkwwsiocok;
        agiiusmyqqkgqymk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iammommmgkimyyaa;
        yewmigswwuewyqki:
        if (stripos($this->agent, "\115\x6f\142\x69\154\x65") !== false || stripos($this->agent, "\124\x61\142\154\x65\x74") !== false) {
            goto sgwiageicumuqwke;
        }
        goto guwmgkcgaoysewyw;
        eowkmiqqmqyeayci:
        return true;
        goto igsmwamoyswayqiy;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        wgsqeuaooemcuqqu:
        amcioyyyuiigekuo:
        goto wwqoywoqcyikouca;
        kiqiskyesywkwkos:
        if (stripos($this->agent, "\x4d\157\142\x69\154\145") !== false || stripos($this->agent, "\x54\141\x62\x6c\145\164") !== false) {
            goto wwmqgecmsimuecam;
        }
        goto ksogiaquuskeygaq;
        rkoyiagmcaycmwmg:
        goto kaycawgquiieeaiw;
        goto egqqigmomgaaamqc;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto usaooeqiaewcmyog;
        aksacseyuwyiseay:
        mmomogyaswcsgwwy:
        goto sgaqioqcecwgyikg;
        ygoomqwcsggeiuge:
        if (stripos($this->agent, "\163\x61\146\141\x72\151") === false) {
            goto ngeuswkcwioygkku;
        }
        goto qkqwgsoymmqsqeim;
        gseqciagemceawam:
        $this->aasasueowyemuyoc('');
        goto ikiegwiqykqwuykk;
        wcaiuquuswsqacgg:
        ngeuswkcwioygkku:
        goto gqaiguosioisccwm;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        qmycieyiysuesagy:
        return true;
        goto wgiwseywikgwumwe;
        seggycoceaokwcsa:
        goto kmwseockoawqkoao;
        goto iqmgswgoooqkkigo;
        wggeuckgywqucase:
        if (preg_match("\x2f\106\151\162\x65\x66\x6f\170\x24\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qwyameqoseiywwus;
        }
        goto seggycoceaokwcsa;
        gyomccegicuoyguk:
        return false;
        goto mquksyyawiwsakwy;
        ikiegwiqykqwuykk:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto qmycieyiysuesagy;
        iqmgswgoooqkkigo:
        usmieesmayeskkmk:
        goto aoosuewasqmmyqoi;
        wgiwseywikgwumwe:
        kmwseockoawqkoao:
        goto rkoyiagmcaycmwmg;
        uaigiceqkuiguogo:
        qwyameqoseiywwus:
        goto gseqciagemceawam;
        egqqigmomgaaamqc:
        oymsgiwgeiqguuyy:
        goto agiiusmyqqkgqymk;
        yqggmewmakemgkui:
        escuksewiugekayq:
        goto qoguisoimaueiaoo;
        igsmwamoyswayqiy:
        kaycawgquiieeaiw:
        goto gyomccegicuoyguk;
        ksogiaquuskeygaq:
        $this->icigyueiiwsukmsu(true);
        goto aygkuykcicgceciq;
        ciimuiiegyeaggya:
        goto coyskeyoikeaqoek;
        goto gokkyeisqkoccqis;
        ymmqwacaoayoyiei:
        $this->eywockmuswoykooc(true);
        goto aqcucyeikgmemsoq;
        iammommmgkimyyaa:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto cwycmkkoscmgcecg;
        wowiaueqaaqckwqq:
        
        if (!(stripos($this->agent, "\101\156\x64\162\157\151\144") !== false || stripos($this->agent, "\151\x50\150\157\156\x65") !== false)) {
            goto amcioyyyuiigekuo;
        }
        goto yewmigswwuewyqki;
        aoosuewasqmmyqoi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto kwuakeywaocokwig;
        qoguisoimaueiaoo:
        wgcmsygycukiqmui:
        goto eowkmiqqmqyeayci;
        cguuomiqwuicsgwa:
        $this->eywockmuswoykooc(true);
        goto yqggmewmakemgkui;
        kwuakeywaocokwig:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wowiaueqaaqckwqq;
        aqcucyeikgmemsoq:
        coyskeyoikeaqoek:
        goto wgsqeuaooemcuqqu;
        mquksyyawiwsakwy:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto qiocyqceaiyiakii;
        umacsiiqmwygcycu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto agsoqikgikksqkom;
        agsoqikgikksqkom:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto iscqcsqyqkmkgkag;
        eoewsuaewaeueaks:
        return false;
        goto qscgsguyqggkagoe;
        skkmiiyukuqmiimc:
        coosgwiiekamiyug:
        goto uogoykaeoysgmism;
        uogoykaeoysgmism:
        mgqockcuascmkosg:
        goto eoewsuaewaeueaks;
        qqaeaoygygacuuos:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x49\x63\x65\167\145\x61\163\145\154"));
        goto wasmuqumoqqcmgys;
        iscqcsqyqkmkgkag:
        return true;
        goto skkmiiyukuqmiimc;
        mokuaeasioyuisqs:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto umacsiiqmwygcycu;
        qiocyqceaiyiakii:
        if (!(stripos($this->agent, "\111\143\145\x77\x65\141\163\x65\154") !== false)) {
            goto mgqockcuascmkosg;
        }
        goto qqaeaoygygacuuos;
        wasmuqumoqqcmgys:
        if (!isset($yikciqwsimweauyg[1])) {
            goto coosgwiiekamiyug;
        }
        goto mokuaeasioyuisqs;
        qscgsguyqggkagoe:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto mcukkaquiosmsguy;
        mcukkaquiosmsguy:
        if (stripos($this->agent, "\155\157\x7a\151\x6c\154\141") !== false && preg_match("\57\x72\166\72\x5b\60\55\x39\135\x2e\x5b\x30\55\71\x5d\x5b\141\55\142\x5d\x3f\57\x69", $this->agent) && stripos($this->agent, "\x6e\x65\164\x73\143\x61\x70\145") === false) {
            goto gmeiquwcawwmowwm;
        }
        goto usaokwsyegousimg;
        usaokwsyegousimg:
        if (stripos($this->agent, "\155\x6f\172\151\154\x6c\141") !== false && preg_match("\57\162\x76\72\133\x30\x2d\x39\135\134\56\133\x30\55\71\135\x2f\151", $this->agent) && stripos($this->agent, "\156\x65\164\x73\143\141\160\x65") === false) {
            goto ameeyqiguwmykwai;
        }
        goto ckgoiwueekyamwcu;
        wwwqiimkicqiuwui:
        awceesgmgquwakuu:
        goto qewckkocqykmeywg;
        uusaeowyacskgumg:
        goto awceesgmgquwakuu;
        goto eoeoqacqgmumwcuk;
        wmssuwyesuyeiows:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\x72\166\x3a"));
        goto kwkcmwgyiwyacywi;
        uieyawsyauemyqgy:
        goto awceesgmgquwakuu;
        goto uciuogooymiyqyao;
        ckgoiwueekyamwcu:
        if (stripos($this->agent, "\155\157\x7a\x69\154\154\141") !== false && preg_match("\57\155\157\x7a\x69\154\154\141\134\57\x28\133\x5e\40\135\x2a\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\156\x65\x74\x73\143\141\x70\145") === false) {
            goto eswswyigkwqaaasy;
        }
        goto uusaeowyacskgumg;
        eoeoqacqgmumwcuk:
        gmeiquwcawwmowwm:
        goto wmssuwyesuyeiows;
        oayqqymykwwugkwe:
        return true;
        goto wwwqiimkicqiuwui;
        msmouyoaqcwsasuw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ymqwkscegcogqqwy;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        kwkcmwgyiwyacywi:
        preg_match("\x2f\162\x76\x3a\x5b\60\55\x39\135\56\133\x30\55\71\x5d\133\x61\55\142\135\77\x2f\151", $this->agent, $quiguswioiaaywey);
        goto siyeyakoauowwose;
        uciuogooymiyqyao:
        eswswyigkwqaaasy:
        goto msmouyoaqcwsasuw;
        ymqwkscegcogqqwy:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto oayqqymykwwugkwe;
        kyqewaqymicucwuc:
        ameeyqiguwmykwai:
        goto gwigmqemwuqewiae;
        siyeyakoauowwose:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto eaawsaueyyoiqoao;
        ooswoacocwcgoagc:
        goto awceesgmgquwakuu;
        goto kyqewaqymicucwuc;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto iyqmmwymomwqiqaw;
        gwigmqemwuqewiae:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\166\72"));
        goto kkweuygueeaqsksg;
        eyimkecocwsicyge:
        return true;
        goto ooswoacocwcgoagc;
        qewckkocqykmeywg:
        return false;
        goto ugsumemcqucesssg;
        eaawsaueyyoiqoao:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eyimkecocwsicyge;
        ugsumemcqucesssg:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto cqayoeygyqqamquk;
        ksswuscweggkeiko:
        return false;
        goto qsoukmmoqeuqsoee;
        seswyksiukyeqkqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iieeiugaeeqyaqok;
        qsqskaukgysseokg:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto seswyksiukyeqkqc;
        iieeiugaeeqyaqok:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto eiiemassiceeqmeq;
        cmowiicqgqiakqem:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4c\171\156\170"));
        goto qsqskaukgysseokg;
        eiiemassiceeqmeq:
        return true;
        goto sgwucycigkyieoea;
        cqayoeygyqqamquk:
        if (!(stripos($this->agent, "\x6c\x79\156\170") !== false)) {
            goto gyoiekqiqwwquomc;
        }
        goto cmowiicqgqiakqem;
        sgwucycigkyieoea:
        gyoiekqiqwwquomc:
        goto ksswuscweggkeiko;
        qsoukmmoqeuqsoee:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto mksgcawyikcceiqa;
        wekysuykykiweqms:
        ukiiyimwmgiqisca:
        goto kacseggomkeowiqm;
        mksgcawyikcceiqa:
        if (!(stripos($this->agent, "\x61\x6d\141\171\141") !== false)) {
            goto ocoaeuqqauqewyig;
        }
        goto gkaykeoacgugeumu;
        iaiekaygcqmocmee:
        return false;
        goto wguukissuqyuqeku;
        uuqskowyckcgagkc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ukiiyimwmgiqisca;
        }
        goto wwyeoccuqgcgcuuc;
        sgsaqgwgakicwckk:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto eiqmqaiyewsgyois;
        kacseggomkeowiqm:
        ocoaeuqqauqewyig:
        goto iaiekaygcqmocmee;
        yksmaaesmwecwoak:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sgsaqgwgakicwckk;
        gkaykeoacgugeumu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x41\155\x61\x79\141"));
        goto uuqskowyckcgagkc;
        eiqmqaiyewsgyois:
        return true;
        goto wekysuykykiweqms;
        wwyeoccuqgcgcuuc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yksmaaesmwecwoak;
        wguukissuqyuqeku:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto eyowigugugmmkeiw;
        essqemwiweimukwe:
        return true;
        goto uuqaakyqgqwiiwom;
        jawaweyeoaoueooa:
        if (isset($yikciqwsimweauyg[1])) {
            goto ggwywcekieoyeuya;
        }
        goto wayscwykqcwqgqyi;
        iqymaeimsmwkkkie:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto essqemwiweimukwe;
        kgecmyesgkacyyqm:
        ggwywcekieoyeuya:
        goto kycikakmkwkieqwk;
        qkgkkwcagegkwkwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oioqgywuoiaisyuu;
        yieeukyoaeioqock:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\126\145\x72\x73\151\x6f\x6e"));
        goto jawaweyeoaoueooa;
        eyowigugugmmkeiw:
        if (!(stripos($this->agent, "\123\141\x66\141\x72\151") !== false && stripos($this->agent, "\151\x50\150\157\x6e\x65") === false && stripos($this->agent, "\151\x50\157\x64") === false)) {
            goto scooeumumiwmgowm;
        }
        goto yieeukyoaeioqock;
        wayscwykqcwqgqyi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ccsysoygswagacce;
        ccsysoygswagacce:
        goto kewymgqeemiuewca;
        goto kgecmyesgkacyyqm;
        uuqaakyqgqwiiwom:
        scooeumumiwmgowm:
        goto yiamqaqsueaiqwuq;
        oioqgywuoiaisyuu:
        kewymgqeemiuewca:
        goto iqymaeimsmwkkkie;
        yiamqaqsueaiqwuq:
        return false;
        goto mceeomsqguaacseg;
        kycikakmkwkieqwk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qkgkkwcagegkwkwi;
        mceeomsqguaacseg:
    }
    protected function yswggmyigakcackc()
    {
        goto qwmyieguwoysqegw;
        mcqygaykwaaseack:
        cwcuamqicskkmuyg:
        goto aukkqqimoumiiccy;
        qwmyieguwoysqegw:
        if (!(stripos($this->agent, "\123\141\155\x73\165\156\x67\102\x72\x6f\167\x73\145\x72") !== false)) {
            goto qugekewwywkuiqyk;
        }
        goto gsyquwaygesygkiq;
        gsyquwaygesygkiq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x53\141\155\x73\x75\156\x67\x42\162\x6f\167\163\x65\x72"));
        goto keyciqmuisymkgcw;
        swgqwkyuwoqeyeyu:
        mkumickumqmmkiqc:
        goto ggqwsgmqqyaicosm;
        aukkqqimoumiiccy:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto raigmgqaksaqoosc;
        ascewisaoqauaymk:
        qugekewwywkuiqyk:
        goto kcckgokmwuywmaiw;
        keyciqmuisymkgcw:
        if (isset($yikciqwsimweauyg[1])) {
            goto mkumickumqmmkiqc;
        }
        goto moyywqqiasmyoscc;
        iieymwaigukwymsc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mcqygaykwaaseack;
        aiyqwwuiayikques:
        goto cwcuamqicskkmuyg;
        goto swgqwkyuwoqeyeyu;
        kcckgokmwuywmaiw:
        return false;
        goto iwoquisgaegiocss;
        ggqwsgmqqyaicosm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iieymwaigukwymsc;
        raigmgqaksaqoosc:
        return true;
        goto ascewisaoqauaymk;
        moyywqqiasmyoscc:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto aiyqwwuiayikques;
        iwoquisgaegiocss:
    }
    protected function uiwkymoksesuumwe()
    {
        goto oakguomioocmeiia;
        yuyccgsguyaaygmu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\151\154\153"));
        goto smagqkegqiooysya;
        wuoaeksukwwaycoi:
        qoamoegiiwismakk:
        goto eusmcuqiciwcooss;
        yegcwkkemkycyuua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wuoaeksukwwaycoi;
        mmuomyiooicyqscg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yegcwkkemkycyuua;
        eusmcuqiciwcooss:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto gamusuoqieekieka;
        oakguomioocmeiia:
        if (!(stripos($this->agent, "\123\x69\x6c\153") !== false)) {
            goto wqswcaeeyeaqieom;
        }
        goto yuyccgsguyaaygmu;
        gamusuoqieekieka:
        return true;
        goto dwyqyusgqwqwomqk;
        dwyqyusgqwqwomqk:
        wqswcaeeyeaqieom:
        goto emaeckumgkmgcaew;
        uqieceoogswuggos:
        yccweyyksqycwuqi:
        goto mmuomyiooicyqscg;
        eiissuweooqsaauy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto kakgceiyakaueuww;
        emaeckumgkmgcaew:
        return false;
        goto wiamyucsaoosmoei;
        kakgceiyakaueuww:
        goto qoamoegiiwismakk;
        goto uqieceoogswuggos;
        smagqkegqiooysya:
        if (isset($yikciqwsimweauyg[1])) {
            goto yccweyyksqycwuqi;
        }
        goto eiissuweooqsaauy;
        wiamyucsaoosmoei:
    }
    protected function cgqcukygysieeqko()
    {
        goto ysoiwegyoqymuuek;
        muouqwckwywsgiwg:
        return true;
        goto qquimmcqqiyegcym;
        usaseckaaaugcygu:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto muouqwckwywsgiwg;
        ayqocaaesmkygque:
        oqqscigyquseosya:
        goto usaseckaaaugcygu;
        qquimmcqqiyegcym:
        akqsaiecouuqacks:
        goto qkeuasieckwuqseq;
        ysoiwegyoqymuuek:
        if (!(stripos($this->agent, "\x49\146\x72\x61\155\145\x6c\x79") !== false)) {
            goto akqsaiecouuqacks;
        }
        goto cucsooyoayssmcas;
        cucsooyoayssmcas:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x49\146\x72\x61\155\x65\154\171"));
        goto mkywwqusckeeisiy;
        wacgcmsgismsomma:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ckguemuwukmeycag;
        mkywwqusckeeisiy:
        if (isset($yikciqwsimweauyg[1])) {
            goto iiwmmqqaqckwwiqe;
        }
        goto qskoquwmkkgkkmuy;
        qkeuasieckwuqseq:
        return false;
        goto ouaokeyacuscccyu;
        cguckckouuwacmow:
        iiwmmqqaqckwwiqe:
        goto wacgcmsgismsomma;
        qskoquwmkkgkkmuy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qyskykugeiqkauce;
        ckguemuwukmeycag:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ayqocaaesmkygque;
        qyskykugeiqkauce:
        goto oqqscigyquseosya;
        goto cguckckouuwacmow;
        ouaokeyacuscccyu:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto eeqsuowcmyeyuoqw;
        eiwuwemqmigskwoe:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wwiysyawwqeuikcc;
        wwiysyawwqeuikcc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto soqmkkwmmkqiweau;
        osygawsacakgggko:
        if (isset($yikciqwsimweauyg[1])) {
            goto iywyeuaaoaeymmag;
        }
        goto iwwouqosmwummgsi;
        auaukkuskuciowkq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\103\x6f\x63\157\x61\x52\145\x73\x74\x43\x6c\x69\145\156\164"));
        goto osygawsacakgggko;
        ymcqcaygueguiuig:
        iywyeuaaoaeymmag:
        goto eiwuwemqmigskwoe;
        eeqsuowcmyeyuoqw:
        if (!(stripos($this->agent, "\103\x6f\x63\x6f\141\122\145\163\x74\103\x6c\151\145\x6e\x74") !== false)) {
            goto ikcsgymqsagymgco;
        }
        goto auaukkuskuciowkq;
        wygcwcywyeosuemq:
        goto wsiggqyeiueeyqyu;
        goto ymcqcaygueguiuig;
        iwwouqosmwummgsi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wygcwcywyeosuemq;
        oqoyyooooyegowuk:
        return true;
        goto kggwwgeqkgwyoseq;
        soqmkkwmmkqiweau:
        wsiggqyeiueeyqyu:
        goto sqwwkouiqayeqeyo;
        sqwwkouiqayeqeyo:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto oqoyyooooyegowuk;
        kuqeksgikkymkyeo:
        return false;
        goto aogimqgcygkugqoc;
        kggwwgeqkgwyoseq:
        ikcsgymqsagymgco:
        goto kuqeksgikkymkyeo;
        aogimqgcygkugqoc:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto gkkogauyaimaaoky;
        ssyeoucmcqaewkws:
        kwmkgoegswsseyia:
        goto gukuouumaoiiugiw;
        qioeweaouoiyoayy:
        return true;
        goto ssyeoucmcqaewkws;
        gkkogauyaimaaoky:
        if (!stristr($this->agent, "\106\x61\x63\x65\x62\x6f\157\153\105\x78\164\145\x72\x6e\x61\x6c\x48\x69\x74")) {
            goto kwmkgoegswsseyia;
        }
        goto akocagcmqwymsqqw;
        akocagcmqwymsqqw:
        $this->aasmeayouwmacaow(true);
        goto ckyyyqokcocsmium;
        gukuouumaoiiugiw:
        return false;
        goto ayyeoeyyawiuiukq;
        ckyyyqokcocsmium:
        $this->oqgqmcogeugkakss(true);
        goto qioeweaouoiyoayy;
        ayyeoeyyawiuiukq:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto gosqmqqycwquosse;
        cwgiecqggoksyuko:
        $this->oqgqmcogeugkakss(true);
        goto kekiekeeqkowaiga;
        ysuyamauyegkceea:
        return false;
        goto wqmmaiwyoumwmiyi;
        wscoawgsgqekweuq:
        soyeimgmemqugquc:
        goto ysuyamauyegkceea;
        kekiekeeqkowaiga:
        return true;
        goto wscoawgsgqekweuq;
        gosqmqqycwquosse:
        if (!stristr($this->agent, "\106\102\x49\117\x53")) {
            goto soyeimgmemqugquc;
        }
        goto cwgiecqggoksyuko;
        wqmmaiwyoumwmiyi:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto iuugeqgkacqmuais;
        gqsmmaqkuciiwwki:
        return false;
        goto yuokckkqcuumcmua;
        eqocwcasskyqeauu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oaoaskeocoucoaes;
        }
        goto kkiiykemaoeswsay;
        uiseoyicaoyaokum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oyswaymeoiouuaoo;
        iuugeqgkacqmuais:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\x65\x72\163\151\x6f\156"));
        goto eqocwcasskyqeauu;
        kkiiykemaoeswsay:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto uiseoyicaoyaokum;
        oyswaymeoiouuaoo:
        return true;
        goto ycagakkcsskiqweu;
        ycagakkcsskiqweu:
        oaoaskeocoucoaes:
        goto gqsmmaqkuciiwwki;
        yuokckkqcuumcmua:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto ssciauiqmswaugss;
        aykkiwwmmckueiak:
        if (!isset($yikciqwsimweauyg[1])) {
            goto imumueocakucecam;
        }
        goto gmiywscmoiqcceks;
        gousoguwcwieyseq:
        return false;
        goto wouosmamsmggekic;
        uywiwaiokksgwuqm:
        return true;
        goto messwieuimiowsag;
        ikumyeymcsyyuauw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto keuamggsqkcwyoqi;
        keuamggsqkcwyoqi:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto uywiwaiokksgwuqm;
        gmiywscmoiqcceks:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikumyeymcsyyuauw;
        ssciauiqmswaugss:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\103\x72\151\x4f\x53"));
        goto aykkiwwmmckueiak;
        messwieuimiowsag:
        imumueocakucecam:
        goto gousoguwcwieyseq;
        wouosmamsmggekic:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto ykqeyymweawywsia;
        emsgawiqsesiiccg:
        return true;
        goto eekkyoakqmykcqec;
        yyagogoiskcuomuq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto cwmsekismgywawai;
        eekkyoakqmykcqec:
        yisqaaicegsokeuk:
        goto ismcyiwkmqaaygge;
        qemqoaymwywkewmy:
        $this->ssquiwqwwcgcqiic();
        goto lwaoqwcmyiqkkouw;
        ismcyiwkmqaaygge:
        return false;
        goto wugyaiqayoamwacg;
        lwaoqwcmyiqkkouw:
        $this->eywockmuswoykooc(true);
        goto emsgawiqsesiiccg;
        ykqeyymweawywsia:
        if (!(stripos($this->agent, "\x69\120\x68\157\x6e\145") !== false)) {
            goto yisqaaicegsokeuk;
        }
        goto awoyakoygoouaqgi;
        awoyakoygoouaqgi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto yyagogoiskcuomuq;
        cwmsekismgywawai:
        $this->uewoqoqkekmsyoeo();
        goto aooeicywwyscawue;
        aooeicywwyscawue:
        $this->iqsiguacookiqwcs();
        goto qemqoaymwywkewmy;
        wugyaiqayoamwacg:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto qwscyqgokmkeqwuq;
        kiauseesqiwimyue:
        $this->uewoqoqkekmsyoeo();
        goto sokqsksiecasgugs;
        syosmkmiyacocysi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soiuksqqwmsqwyeq;
        syookwiaqwmsaoem:
        $this->icigyueiiwsukmsu(true);
        goto usscqwyeesggymse;
        qyaiyoskqmqyyuos:
        $this->ssquiwqwwcgcqiic();
        goto syookwiaqwmsaoem;
        usscqwyeesggymse:
        return true;
        goto okmmkcokmyiqkceg;
        okmmkcokmyiqkceg:
        secssyuygoycmiqa:
        goto uguwgicugawycckm;
        sokqsksiecasgugs:
        $this->iqsiguacookiqwcs();
        goto qyaiyoskqmqyyuos;
        uguwgicugawycckm:
        return false;
        goto wskgeycusaokeymw;
        qwscyqgokmkeqwuq:
        if (!(stripos($this->agent, "\x69\120\x61\x64") !== false)) {
            goto secssyuygoycmiqa;
        }
        goto syosmkmiyacocysi;
        soiuksqqwmsqwyeq:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto kiauseesqiwimyue;
        wskgeycusaokeymw:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto guuowemmmmcgukow;
        wcuqqmycwwoqwwga:
        return true;
        goto woiqioceiyccoyyi;
        sgkeayimkgeyaqic:
        $this->uewoqoqkekmsyoeo();
        goto wyqemyugccycgaso;
        qiayswmiyoqisyac:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto sgkeayimkgeyaqic;
        kqaemkmmqkyeweye:
        return false;
        goto kmggqcwmkwwcuioa;
        yycskqumwcimyyye:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qiayswmiyoqisyac;
        kgmwwkoiqwyscmys:
        $this->eywockmuswoykooc(true);
        goto wcuqqmycwwoqwwga;
        wyqemyugccycgaso:
        $this->iqsiguacookiqwcs();
        goto okgoksuuouqmmqog;
        okgoksuuouqmmqog:
        $this->ssquiwqwwcgcqiic();
        goto kgmwwkoiqwyscmys;
        guuowemmmmcgukow:
        if (!(stripos($this->agent, "\x69\x50\x6f\x64") !== false)) {
            goto kmwwukmymssqakuk;
        }
        goto yycskqumwcimyyye;
        woiqioceiyccoyyi:
        kmwwukmymssqakuk:
        goto kqaemkmmqkyeweye;
        kmggqcwmkwwcuioa:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto yqiyiacommmwsuce;
        yqiyiacommmwsuce:
        if (!(stripos($this->agent, "\101\x6e\x64\x72\x6f\x69\144") !== false)) {
            goto iuaaiqsmgoqiscio;
        }
        goto kweqeekeouiqocqw;
        cimakcokyqkmyiau:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soqyakgcqemouuko;
        yemgimowqwsuqegu:
        agwcwemswacqgqyk:
        goto sskqokueeqgsuumq;
        yusmiciysquiqayq:
        return false;
        goto gquuqqacuqsgsyqc;
        sskqokueeqgsuumq:
        if (stripos($this->agent, "\x4d\x6f\142\151\x6c\x65") !== false) {
            goto yecageyyqwumqoca;
        }
        goto ysuagggqaicqyguk;
        owayquiaceqooaiq:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto sisuqeisegegcsiy;
        ysuagggqaicqyguk:
        $this->icigyueiiwsukmsu(true);
        goto womwoaskosgsauog;
        msasquyamakaamys:
        $this->eywockmuswoykooc(true);
        goto yymscyccyaauqiaa;
        soqyakgcqemouuko:
        goto agwcwemswacqgqyk;
        goto squaugeowuwyumqu;
        kweqeekeouiqocqw:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\101\x6e\144\x72\x6f\x69\144"));
        goto ikkseymmmeooqmcm;
        yammukygywskcuey:
        iuaaiqsmgoqiscio:
        goto yusmiciysquiqayq;
        kumioksgmqmsaeqy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ckkwwiuyquomkcku;
        womwoaskosgsauog:
        goto aqcwmswmgmgqokmu;
        goto wiuyqgeaacmksuqq;
        squaugeowuwyumqu:
        gssmokgwcmqesyao:
        goto kumioksgmqmsaeqy;
        yymscyccyaauqiaa:
        aqcwmswmgmgqokmu:
        goto owayquiaceqooaiq;
        wiuyqgeaacmksuqq:
        yecageyyqwumqoca:
        goto msasquyamakaamys;
        sisuqeisegegcsiy:
        return true;
        goto yammukygywskcuey;
        ikkseymmmeooqmcm:
        if (isset($yikciqwsimweauyg[1])) {
            goto gssmokgwcmqesyao;
        }
        goto cimakcokyqkmyiau;
        ckkwwiuyquomkcku:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yemgimowqwsuqegu;
        gquuqqacuqsgsyqc:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto qikuwygeoaimcukg;
        ewgqscsiomaciyew:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iewuyuigwmkcmcas;
        qikuwygeoaimcukg:
        if (!(stripos($this->agent, "\126\151\x76\141\x6c\144\151") !== false)) {
            goto okacoggoqgoomuyc;
        }
        goto ceiseomqooekseuo;
        sesgwayockkaakwm:
        qysqqycgiwmucggw:
        goto sccmgumeswegawyk;
        sccmgumeswegawyk:
        okacoggoqgoomuyc:
        goto csuikuskoecgsymk;
        siaqsogicwwmayco:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qysqqycgiwmucggw;
        }
        goto umyuckgysaegimue;
        umyuckgysaegimue:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ewgqscsiomaciyew;
        csuikuskoecgsymk:
        return false;
        goto eeieacyyeywwyewo;
        iewuyuigwmkcmcas:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto qekesyoouukaciyy;
        qekesyoouukaciyy:
        return true;
        goto sesgwayockkaakwm;
        ceiseomqooekseuo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\126\151\x76\141\x6c\144\x69"));
        goto siaqsogicwwmayco;
        eeieacyyeywwyewo:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto ugkesgkkcqcasmoq;
        uwkiseisiuqsoqsa:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yikaomgieukoawws;
        ugkesgkkcqcasmoq:
        if (!(stripos($this->agent, "\x59\x61\102\162\x6f\x77\x73\x65\162") !== false)) {
            goto yyimqwkqigowmcco;
        }
        goto gaomwgqgumkcqawg;
        ommoqequygggywyi:
        return true;
        goto miayoysigsgumwyi;
        umkyqiyguqoauyek:
        return false;
        goto eceqcqseqcswkywu;
        oymuyuskiqyacysw:
        if (stripos($this->agent, "\115\x6f\142\151\154\x65") !== false) {
            goto gcgyqiaawwccgqaw;
        }
        goto koceigseyecoyoia;
        giawgsomaouqgiyc:
        goto wwaocaooaayqamsu;
        goto mquyowqsoawycyok;
        msqmyqgiaeeeoeco:
        yyimqwkqigowmcco:
        goto umkyqiyguqoauyek;
        kuyowuyquoioeqoc:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto suessqeuiasoqioi;
        yymiwwumowysiagy:
        $this->icigyueiiwsukmsu(true);
        goto qsacucessyquaame;
        suessqeuiasoqioi:
        if (stripos($this->agent, "\x69\120\x61\144") !== false) {
            goto mioiqgkakcguokqa;
        }
        goto oymuyuskiqyacysw;
        koceigseyecoyoia:
        if (stripos($this->agent, "\x41\x6e\144\162\x6f\151\144") !== false) {
            goto wyimgokwakggwuoi;
        }
        goto aucmemccqucmicwm;
        miayoysigsgumwyi:
        scqaokckckemicqi:
        goto msqmyqgiaeeeoeco;
        aucmemccqucmicwm:
        goto wwaocaooaayqamsu;
        goto qqsiimkqkguqkeag;
        qqsiimkqkguqkeag:
        mioiqgkakcguokqa:
        goto eicqsqkmeaimooii;
        qsacucessyquaame:
        wwaocaooaayqamsu:
        goto ommoqequygggywyi;
        ysoeqwagkauquwme:
        if (!isset($yikciqwsimweauyg[1])) {
            goto scqaokckckemicqi;
        }
        goto uwkiseisiuqsoqsa;
        gaomwgqgumkcqawg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x42\x72\x6f\167\163\x65\162"));
        goto ysoeqwagkauquwme;
        eicqsqkmeaimooii:
        $this->icigyueiiwsukmsu(true);
        goto giawgsomaouqgiyc;
        yikaomgieukoawws:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kuyowuyquoioeqoc;
        aeycoymkqiwogwag:
        $this->eywockmuswoykooc(true);
        goto cgqqkkwugmiqyiow;
        cgqqkkwugmiqyiow:
        goto wwaocaooaayqamsu;
        goto ykwmoaqmwggiqmsk;
        mquyowqsoawycyok:
        gcgyqiaawwccgqaw:
        goto aeycoymkqiwogwag;
        ykwmoaqmwggiqmsk:
        wyimgokwakggwuoi:
        goto yymiwwumowysiagy;
        eceqcqseqcswkywu:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto ciewwguuyumcisme;
        ccmmogiaggiuewmu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto syqgqkeomqsysaey;
        uwwiiwscccuowuoq:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x50\x6c\x61\171\x53\x74\141\164\x69\x6f\156\x20"));
        goto uyymyaogieaawaig;
        gqomqwuiesioaaaq:
        qugmeamkemckgqwo:
        goto ywuwweugeccmeuqk;
        mcygcucugmyqswys:
        uuweusyuygicyoik:
        goto sieaoicuiusscywg;
        iwgksuqmosckeqys:
        if (!isset($yikciqwsimweauyg[0])) {
            goto qugmeamkemckgqwo;
        }
        goto sayicwyqgigeswug;
        uyymyaogieaawaig:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto iwgksuqmosckeqys;
        syqgqkeomqsysaey:
        if (!(stripos($this->agent, "\x50\157\162\164\x61\142\x6c\145\x29") !== false || stripos($this->agent, "\126\x69\164\x61") !== false)) {
            goto uuweusyuygicyoik;
        }
        goto qmisymqoqmqocwoe;
        sayicwyqgigeswug:
        $quiguswioiaaywey = explode("\x29", $yikciqwsimweauyg[2]);
        goto ccmmogiaggiuewmu;
        qmisymqoqmqocwoe:
        $this->eywockmuswoykooc(true);
        goto mcygcucugmyqswys;
        ciewwguuyumcisme:
        if (!(stripos($this->agent, "\x50\154\x61\171\123\x74\141\164\x69\157\156\x20") !== false)) {
            goto eyekywukwqucywcm;
        }
        goto uwwiiwscccuowuoq;
        sieaoicuiusscywg:
        return true;
        goto gqomqwuiesioaaaq;
        iwacoiqoegwuaoqo:
        return false;
        goto wkmmaysiigyuyimk;
        ywuwweugeccmeuqk:
        eyekywukwqucywcm:
        goto iwacoiqoegwuaoqo;
        wkmmaysiigyuyimk:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto imgwqyoiweuiwiec;
        kwsagikwoqogqecc:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto wicaemaewwoooiuq;
        imgwqyoiweuiwiec:
        if (!preg_match("\41\136\127\147\x65\164\x2f\x28\x5b\x5e\x20\x5d\x2b\51\x21\151", $this->agent, $yikciqwsimweauyg)) {
            goto igcukieyogyaqwyo;
        }
        goto kwsagikwoqogqecc;
        qqsmygoumegcogay:
        return false;
        goto qykkceysyessasey;
        ggqeyyoscwueysku:
        igcukieyogyaqwyo:
        goto qqsmygoumegcogay;
        qmqsccegugoiyaiu:
        return true;
        goto ggqeyyoscwueysku;
        wicaemaewwoooiuq:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto qmqsccegugoiyaiu;
        qykkceysyessasey:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto wsgkqgogymcgueag;
        mkycqgqaawooaaeu:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto uyiaqakwuswweqme;
        sukiqmyemewakiao:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yeqmmgegmqgwyaea;
        kkecucquwauqqyku:
        return false;
        goto gqcyummwsikcccom;
        uyiaqakwuswweqme:
        return true;
        goto ecusscoueakqaqsu;
        eimqoqgqmsiokyeq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\143\x75\x72\154"));
        goto iyqcgqusyeiiaiai;
        okqmcygoiwaesmis:
        sucmgqcacggcucec:
        goto kkecucquwauqqyku;
        ecusscoueakqaqsu:
        iwyoaksegwaksmsu:
        goto okqmcygoiwaesmis;
        wsgkqgogymcgueag:
        if (!(strpos($this->agent, "\143\x75\162\x6c") === 0)) {
            goto sucmgqcacggcucec;
        }
        goto eimqoqgqmsiokyeq;
        yeqmmgegmqgwyaea:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mkycqgqaawooaaeu;
        iyqcgqusyeiiaiai:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iwyoaksegwaksmsu;
        }
        goto sukiqmyemewakiao;
        gqcyummwsikcccom:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto owkougkyymiwoaqu;
        cwceosugiiyyauqi:
        acuiieocsgiyakia:
        goto ogugiciyicewkyue;
        muiouqmomamguoce:
        if (stripos($this->agent, "\x69\120\x61\144") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        eouqmgocqewmwgik:
        goto miqaocyiuwmyyycc;
        goto ymucyiowcaqucyom;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\164\166\x4f\123") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\167\x69\x6e\144\x6f\x77\x73") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        mqmowgywwygssysy:
        gqwemyquuwgqcaic:
        goto emiuesoeeiqysuay;
        cgqiesaeskmuwwcy:
        gwoqyokuiqqwugsk:
        goto sgssyyueamgacywm;
        cekocgmmwuacyckg:
        if (stripos($this->agent, "\157\153\150\164\164\x70") !== false) {
            goto acysyqkmkgaoewci;
        }
        goto awumcmmeumuaiocw;
        wksuqaqsicwqekuy:
        kmgqqgsuiwcyccak:
        goto gusogiqwmwgywamm;
        gkcqueouksaqceqw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto aaecacwqmsoowcsi;
        esqckkawqugyqimw:
        goto miqaocyiuwmyyycc;
        goto wksuqaqsicwqekuy;
        eiskwkcoggkikmcc:
        iacwiwmoggwseqsa:
        goto hsuemysceewomeuc;
        gyawuaoseweeioce:
        kwewaoocuqgaseoa:
        goto kouowucggykwmwgw;
        smmqcueceqkiggkm:
        $this->platform = self::PLATFORM_OPENBSD;
        goto ggcmqkuwqkkkmcgu;
        ggcmqkuwqkkkmcgu:
        goto miqaocyiuwmyyycc;
        goto gyawuaoseweeioce;
        yeeicocmyyaeksys:
        yioawsqawmqagueg:
        goto imwweegoasykooim;
        mokkeuemqauoaskk:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto emeoasammuwaesws;
        oguaeaawigyoscii:
        if (stripos($this->agent, "\111\146\x72\x61\x6d\145\x6c\x79") !== false) {
            goto ycskcusgcyeowagm;
        }
        goto mougyosiwyugsymo;
        eweqcaymckiwaccw:
        scoouaqeoeicswwu:
        goto maokeqaksuookoao;
        aaecacwqmsoowcsi:
        goto miqaocyiuwmyyycc;
        goto guquqeyggoqqkgkm;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\116\145\x74\x42\x53\x44") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        imagekgwsuqccwgo:
        $this->platform = self::PLATFORM_WINDOWS;
        goto eouqmgocqewmwgik;
        gooiuuagswggewoq:
        $this->platform = self::PLATFORM_IPAD;
        goto ukmeggiqssyyyuku;
        iiyysuksmomyyuye:
        $this->platform = self::PLATFORM_IPHONE;
        goto cugaeomiskasooic;
        cyqeeaiwumyekkce:
        gawseeswkisqiwoe:
        goto asksckakmysykiue;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\x4f\x70\x65\x6e\102\x53\104") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        myiogoqascwcikcc:
        goto miqaocyiuwmyyycc;
        goto mkeuwsqceweiacum;
        imyycasecqwmeuew:
        $this->platform = self::PLATFORM_SUNOS;
        goto wmcckwsaaemkqweg;
        esscoiyogsoqoquc:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto gciescsgqiuoqkim;
        yaaisamcwuuowiua:
        miqaocyiuwmyyycc:
        goto acoqamisuacwkqyo;
        oaoummcgooyceayi:
        goto miqaocyiuwmyyycc;
        goto siaweewywmuayyks;
        maokeqaksuookoao:
        $this->platform = self::PLATFORM_WINDOWS;
        goto emooiegicmmqkwsg;
        syiwqmwwoemuyeou:
        goto miqaocyiuwmyyycc;
        goto cgqiesaeskmuwwcy;
        ueqauuccggkgcyqo:
        $this->platform = self::PLATFORM_IPHONE . "\57" . self::PLATFORM_IPAD;
        goto mmqioecsyukkcgoo;
        yysewcsossqsackg:
        $this->platform = self::PLATFORM_BEOS;
        goto qycwawiicimecwsq;
        ukmcukgkakisecyk:
        goto miqaocyiuwmyyycc;
        goto cyaomwaqoaiiqqes;
        uiqoeooowosqagsw:
        $this->platform = self::PLATFORM_TERMINAL;
        goto syiwqmwwoemuyeou;
        ukmeggiqssyyyuku:
        goto miqaocyiuwmyyycc;
        goto kyqkigouggegscsi;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\117\x70\145\x6e\x53\157\154\x61\x72\151\163") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\x42\145\117\x53") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\116\157\x6b\x69\141") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        guquqeyggoqqkgkm:
        gsyegqcsyscyycic:
        goto smmqcueceqkiggkm;
        ciwyuyksieuuqiee:
        goto miqaocyiuwmyyycc;
        goto eayyeuwawewcqcom;
        kqmqqomaqawisweo:
        goto miqaocyiuwmyyycc;
        goto wyokgowugcsiigum;
        iqucsoqomgkeuyco:
        oesgciyeoewgouki:
        goto auuogsqacsimiksi;
        yeigmocusoouscsa:
        goto miqaocyiuwmyyycc;
        goto ksqmykkeymqwoacg;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\123\x75\156\117\x53") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\x6c\151\x6e\x75\170") !== false && stripos($this->agent, "\123\x4d\x41\122\124\55\x54\126") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\x6d\141\x63") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        auuogsqacsimiksi:
        $this->platform = self::PLATFORM_OS2;
        goto cmooymowqeusayua;
        icyocwacicqauogu:
        if (stripos($this->agent, "\141\156\x64\x72\157\x69\x64") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        cyaomwaqoaiiqqes:
        eequuumweyqioygw:
        goto acmaiqeukwiqqyms;
        awumcmmeumuaiocw:
        if (stripos($this->agent, "\120\157\x73\164\x6d\x61\x6e\122\165\156\x74\151\x6d\145") !== false) {
            goto woqqukymqiuyququ;
        }
        goto oguaeaawigyoscii;
        emiuesoeeiqysuay:
        $this->platform = self::PLATFORM_ROKU;
        goto qoyywwueqcmomgio;
        eccymasqomswiwug:
        $this->platform = self::PLATFORM_I_FRAME;
        goto yaaisamcwuuowiua;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\x69\120\x68\x6f\x6e\x65") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        wyokgowugcsiigum:
        ymyoskqgyeykqmom:
        goto uiqoeooowosqagsw;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\102\154\141\143\153\102\x65\x72\162\x79") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        asksckakmysykiue:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto yeigmocusoouscsa;
        mcqoyigqsewkkwgc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto eiguqiumekikicuw;
        hsuemysceewomeuc:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto kqmqqomaqawisweo;
        gusogiqwmwgywamm:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto muycacscoqikyasc;
        aceouusygqicksgk:
        seaqqywowweasaoa:
        goto yysewcsossqsackg;
        kouowucggykwmwgw:
        $this->platform = self::PLATFORM_NETBSD;
        goto aoemyociekskwmke;
        icoqeuawskkosskw:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto qcaqeqscugwwgyci;
        siaweewywmuayyks:
        muicsociwumgosaw:
        goto iiyysuksmomyyuye;
        wmcckwsaaemkqweg:
        goto miqaocyiuwmyyycc;
        goto iqucsoqomgkeuyco;
        yukieguwkeesieiy:
        goto miqaocyiuwmyyycc;
        goto cwceosugiiyyauqi;
        sgssyyueamgacywm:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto myiogoqascwcikcc;
        akayacsmoiwoaeqm:
        coakwcyymiqcmwug:
        goto ueqauuccggkgcyqo;
        aoemyociekskwmke:
        goto miqaocyiuwmyyycc;
        goto cyqeeaiwumyekkce;
        imwweegoasykooim:
        $this->platform = self::PLATFORM_APPLE;
        goto yukieguwkeesieiy;
        eccgyquwkmumeyea:
        aacemqiqgqoyokmi:
        goto awiomycussysmike;
        emooiegicmmqkwsg:
        goto miqaocyiuwmyyycc;
        goto qcqgakkooouyiooi;
        ksqmykkeymqwoacg:
        kycoymqmaukeekum:
        goto imyycasecqwmeuew;
        mmqioecsyukkcgoo:
        goto miqaocyiuwmyyycc;
        goto eiskwkcoggkikmcc;
        ogugiciyicewkyue:
        $this->platform = self::PLATFORM_ANDROID;
        goto ciwyuyksieuuqiee;
        kyqkigouggegscsi:
        aycyoqqqwmyciise:
        goto igiuieggauocicsg;
        mkeuwsqceweiacum:
        acysyqkmkgaoewci:
        goto icoqeuawskkosskw;
        qcqgakkooouyiooi:
        ugccoisuygekiaae:
        goto mokkeuemqauoaskk;
        msqycwkyqqeyqoka:
        $this->platform = self::PLATFORM_LINUX . "\x2f" . self::PLATFORM_SMART_TV;
        goto wgcyyuswcmkwyaky;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\123\151\x6c\x6b") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        eiguqiumekikicuw:
        goto miqaocyiuwmyyycc;
        goto wwauaucuwsokocmm;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\x52\x6f\x6b\165") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        meiykooeimaqqico:
        if (stripos($this->agent, "\x50\x6c\141\171\163\x74\x61\x74\151\x6f\x6e") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        seeosigigeuueiqy:
        if (stripos($this->agent, "\x43\x72\x4f\x53") !== false) {
            goto gwoqyokuiqqwugsk;
        }
        goto cekocgmmwuacyckg;
        qcaqeqscugwwgyci:
        goto miqaocyiuwmyyycc;
        goto qsikciasasogymew;
        emeoasammuwaesws:
        goto miqaocyiuwmyyycc;
        goto mqmowgywwygssysy;
        eayyeuwawewcqcom:
        syqyosyywqwgoeoo:
        goto esscoiyogsoqoquc;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\117\123\x5c\x2f\62") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        qsikciasasogymew:
        woqqukymqiuyququ:
        goto mcqoyigqsewkkwgc;
        acmaiqeukwiqqyms:
        $this->platform = self::PLATFORM_NOKIA;
        goto esqckkawqugyqimw;
        aeeiacomeyceesoe:
        if (stripos($this->agent, "\x63\x75\162\154") !== false) {
            goto ymyoskqgyeykqmom;
        }
        goto seeosigigeuueiqy;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\x69\117\123") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        qoyywwueqcmomgio:
        goto miqaocyiuwmyyycc;
        goto akayacsmoiwoaeqm;
        igiuieggauocicsg:
        $this->platform = self::PLATFORM_IPOD;
        goto oaoummcgooyceayi;
        ymucyiowcaqucyom:
        uwegawkagcagoeiw:
        goto gooiuuagswggewoq;
        iouagkwueekusiwi:
        cguaokskycyggqym:
        goto imagekgwsuqccwgo;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\151\x50\157\x64") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        kgwaccmcscsusase:
        sskkqsmyqmgyewue:
        goto msqycwkyqqeyqoka;
        uyauemouyweqqkwu:
        oyioakacwwceegie:
        goto gkcqueouksaqceqw;
        qycwawiicimecwsq:
        goto miqaocyiuwmyyycc;
        goto eweqcaymckiwaccw;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\167\151\156") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        awiomycussysmike:
        $this->platform = self::PLATFORM_LINUX;
        goto ukmcukgkakisecyk;
        mougyosiwyugsymo:
        goto miqaocyiuwmyyycc;
        goto iouagkwueekusiwi;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\106\x72\145\145\102\x53\x44") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        cmooymowqeusayua:
        goto miqaocyiuwmyyycc;
        goto aceouusygqicksgk;
        wgcyyuswcmkwyaky:
        goto miqaocyiuwmyyycc;
        goto eccgyquwkmumeyea;
        gciescsgqiuoqkim:
        goto miqaocyiuwmyyycc;
        goto kgwaccmcscsusase;
        cugaeomiskasooic:
        goto miqaocyiuwmyyycc;
        goto yeeicocmyyaeksys;
        muycacscoqikyasc:
        goto miqaocyiuwmyyycc;
        goto uyauemouyweqqkwu;
        wwauaucuwsokocmm:
        ycskcusgcyeowagm:
        goto eccymasqomswiwug;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\x6c\151\156\x75\170") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        acoqamisuacwkqyo:
    }
}
