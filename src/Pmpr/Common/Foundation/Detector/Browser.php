<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const BROWSER_UNKNOWN = "\x75\x6e\x6b\156\x6f\x77\x6e";
    const VERSION_UNKNOWN = "\x75\x6e\x6b\156\157\167\156";
    const BROWSER_OPERA = "\117\x70\x65\162\x61";
    
    const BROWSER_OPERA_MINI = "\117\x70\145\162\141\x20\115\151\x6e\x69";
    
    const BROWSER_WEBTV = "\127\x65\142\x54\126";
    
    const BROWSER_EDGE = "\x45\144\x67\x65";
    
    const BROWSER_IE = "\x49\x6e\164\x65\162\x6e\x65\x74\40\x45\170\160\154\157\162\145\x72";
    
    const BROWSER_POCKET_IE = "\120\x6f\x63\x6b\145\164\x20\111\156\x74\145\162\x6e\x65\164\40\x45\170\x70\154\x6f\162\145\x72";
    
    const BROWSER_KONQUEROR = "\x4b\x6f\x6e\x71\x75\x65\162\x6f\x72";
    
    const BROWSER_ICAB = "\x69\103\x61\x62";
    
    const BROWSER_OMNIWEB = "\117\x6d\x6e\x69\x57\x65\x62";
    
    const BROWSER_FIREBIRD = "\x46\151\162\145\x62\x69\162\144";
    
    const BROWSER_FIREFOX = "\106\151\x72\145\146\157\170";
    
    const BROWSER_BRAVE = "\x42\162\x61\166\x65";
    
    const BROWSER_PALEMOON = "\120\x61\x6c\145\x6d\157\x6f\156";
    
    const BROWSER_ICEWEASEL = "\x49\143\x65\167\x65\x61\163\x65\x6c";
    
    const BROWSER_SHIRETOKO = "\x53\150\151\162\145\x74\x6f\153\157";
    
    const BROWSER_MOZILLA = "\x4d\157\172\x69\x6c\154\141";
    
    const BROWSER_AMAYA = "\x41\155\141\171\x61";
    
    const BROWSER_LYNX = "\x4c\x79\x6e\170";
    
    const BROWSER_SAFARI = "\x53\x61\x66\141\162\151";
    
    const BROWSER_IPHONE = "\151\x50\x68\x6f\x6e\145";
    
    const BROWSER_IPOD = "\151\x50\x6f\x64";
    
    const BROWSER_IPAD = "\x69\x50\141\144";
    
    const BROWSER_CHROME = "\x43\x68\x72\x6f\x6d\145";
    
    const BROWSER_ANDROID = "\101\x6e\x64\x72\x6f\151\x64";
    
    const BROWSER_GOOGLEBOT = "\107\x6f\x6f\147\x6c\x65\x42\157\164";
    
    const BROWSER_CURL = "\x63\x55\x52\x4c";
    
    const BROWSER_WGET = "\x57\x67\x65\164";
    
    const BROWSER_UCBROWSER = "\125\x43\102\162\x6f\x77\163\145\162";
    
    const BROWSER_YANDEXBOT = "\131\x61\156\x64\145\x78\x42\157\x74";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\x61\x6e\144\x65\x78\x49\155\141\x67\145\x52\x65\x73\151\x7a\145\x72";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\141\156\144\x65\170\111\155\141\147\x65\163";
    
    const BROWSER_YANDEXVIDEO_BOT = "\x59\141\x6e\x64\145\x78\x56\x69\144\145\157";
    
    const BROWSER_YANDEXMEDIA_BOT = "\x59\x61\x6e\144\145\x78\115\145\144\x69\141";
    
    const BROWSER_YANDEXBLOGS_BOT = "\131\141\x6e\144\145\x78\102\154\x6f\x67\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\x59\141\156\144\145\170\106\x61\166\x69\143\x6f\x6e\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\131\141\156\x64\145\170\127\x65\x62\155\141\163\164\x65\x72";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\141\x6e\x64\x65\x78\x44\151\162\x65\143\164";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\x59\141\x6e\x64\145\170\x4d\x65\x74\x72\x69\x6b\x61";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\141\156\x64\x65\x78\116\x65\167\x73";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\x61\156\144\145\x78\x43\141\164\141\154\x6f\147";
    
    const BROWSER_SLURP = "\131\141\150\157\x6f\41\x20\x53\154\x75\x72\160";
    
    const BROWSER_W3CVALIDATOR = "\127\x33\103\x20\126\141\154\x69\x64\141\x74\157\162";
    
    const BROWSER_BLACKBERRY = "\x42\154\x61\x63\x6b\102\145\x72\x72\171";
    
    const BROWSER_ICECAT = "\x49\x63\x65\x43\x61\x74";
    
    const BROWSER_NOKIA_S60 = "\116\x6f\x6b\x69\x61\x20\x53\x36\x30\40\117\x53\123\40\x42\162\x6f\167\163\145\162";
    
    const BROWSER_NOKIA = "\116\157\153\151\x61\40\x42\x72\157\x77\163\x65\x72";
    
    const BROWSER_MSN = "\x4d\x53\116\40\x42\162\x6f\167\163\145\x72";
    
    const BROWSER_MSNBOT = "\115\x53\x4e\40\102\157\x74";
    
    const BROWSER_BINGBOT = "\x42\151\156\147\x20\102\157\x74";
    
    const BROWSER_VIVALDI = "\x56\151\x76\x61\x6c\144\151";
    
    const BROWSER_YANDEX = "\x59\x61\x6e\144\x65\x78";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\116\x65\164\163\x63\x61\160\145\x20\x4e\x61\x76\x69\x67\x61\164\x6f\162";
    
    const BROWSER_GALEON = "\x47\x61\x6c\145\157\x6e";
    
    const BROWSER_NETPOSITIVE = "\x4e\x65\164\120\x6f\x73\151\x74\x69\x76\145";
    
    const BROWSER_PHOENIX = "\x50\x68\157\145\156\151\170";
    
    const BROWSER_PLAYSTATION = "\x50\154\x61\171\123\x74\141\x74\x69\x6f\156";
    const BROWSER_SAMSUNG = "\x53\x61\x6d\x73\x75\x6e\x67\102\x72\x6f\167\x73\145\x72";
    const BROWSER_SILK = "\123\151\154\153";
    const BROWSER_I_FRAME = "\111\x66\x72\x61\155\x65\154\171";
    const BROWSER_COCOA = "\x43\x6f\143\157\141\122\145\163\x74\103\154\151\x65\156\x74";
    const PLATFORM_UNKNOWN = "\x75\156\x6b\156\157\167\x6e";
    const PLATFORM_WINDOWS = "\x57\151\x6e\x64\157\167\x73";
    const PLATFORM_WINDOWS_CE = "\x57\151\156\144\157\x77\x73\x20\x43\x45";
    const PLATFORM_APPLE = "\x41\160\x70\154\145";
    const PLATFORM_LINUX = "\x4c\151\156\x75\x78";
    const PLATFORM_OS2 = "\117\x53\57\62";
    const PLATFORM_BEOS = "\x42\x65\x4f\x53";
    const PLATFORM_IPHONE = "\x69\x50\150\157\156\145";
    const PLATFORM_IPOD = "\x69\120\x6f\x64";
    const PLATFORM_IPAD = "\x69\120\x61\144";
    const PLATFORM_BLACKBERRY = "\x42\154\141\143\x6b\102\145\x72\x72\171";
    const PLATFORM_NOKIA = "\x4e\157\x6b\x69\141";
    const PLATFORM_FREEBSD = "\106\162\x65\x65\102\x53\x44";
    const PLATFORM_OPENBSD = "\x4f\x70\x65\x6e\x42\123\x44";
    const PLATFORM_NETBSD = "\116\x65\x74\102\123\x44";
    const PLATFORM_SUNOS = "\123\165\156\117\123";
    const PLATFORM_OPENSOLARIS = "\117\160\145\x6e\123\x6f\x6c\x61\162\151\163";
    const PLATFORM_ANDROID = "\101\156\x64\x72\157\x69\x64";
    const PLATFORM_PLAYSTATION = "\x53\x6f\156\x79\40\120\x6c\x61\x79\x53\164\x61\x74\151\157\156";
    const PLATFORM_ROKU = "\122\x6f\153\x75";
    const PLATFORM_APPLE_TV = "\x41\x70\160\x6c\x65\40\x54\126";
    const PLATFORM_TERMINAL = "\124\x65\162\x6d\x69\x6e\x61\154";
    const PLATFORM_FIRE_OS = "\106\x69\162\x65\40\x4f\x53";
    const PLATFORM_SMART_TV = "\123\115\101\x52\x54\55\124\x56";
    const PLATFORM_CHROME_OS = "\x43\x68\x72\157\x6d\x65\40\x4f\123";
    const PLATFORM_JAVA_ANDROID = "\x4a\x61\x76\x61\57\101\156\144\x72\x6f\x69\144";
    const PLATFORM_POSTMAN = "\x50\x6f\x73\x74\155\141\156";
    const PLATFORM_I_FRAME = "\111\146\162\141\x6d\145\154\x79";
    const OPERATING_SYSTEM_UNKNOWN = "\165\156\153\x6e\157\x77\x6e";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto usukksgaqiqwqeys;
        ykqeemyaewkmowyu:
        ewuugiguuowassgm:
        goto comoigwsemiiwoks;
        wywgewmwqwqsysig:
        $this->qeqwswckeiieossq();
        goto ggkyameswcsquisg;
        uqwoeksekoweiwke:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto ykqeemyaewkmowyu;
        eqwkmqasacseyecw:
        $this->reset();
        goto wywgewmwqwqsysig;
        comoigwsemiiwoks:
        parent::__construct();
        goto uioqqaiayukmemcg;
        cmkiwqcgsmwyuggk:
        if ($uowwycywwssskuys != '') {
            goto oagaqukqswwgeqsa;
        }
        goto eqwkmqasacseyecw;
        usukksgaqiqwqeys:
        $this->runSetup = false;
        goto cmkiwqcgsmwyuggk;
        ggkyameswcsquisg:
        goto ewuugiguuowassgm;
        goto mwwimgssiegweqes;
        mwwimgssiegweqes:
        oagaqukqswwgeqsa:
        goto uqwoeksekoweiwke;
        uioqqaiayukmemcg:
    }
    
    public function reset()
    {
        goto seimmqskqimoouui;
        egsqiegeesaowyyo:
        $this->isTablet = false;
        goto oouoqmemwouuymam;
        ggaemwcyouewkgcm:
        $this->isAol = false;
        goto cicagciwwymgewcm;
        seimmqskqimoouui:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto ceycsuymgwmceuew;
        ycuossoamymsusws:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto egsqiegeesaowyyo;
        oouoqmemwouuymam:
        $this->isMobile = false;
        goto kmokgyokoacsqkcg;
        ceycsuymgwmceuew:
        $this->name = self::BROWSER_UNKNOWN;
        goto ygyacaeuykeookuw;
        cicagciwwymgewcm:
        $this->isRobot = false;
        goto omkuusmocycoywqq;
        omkuusmocycoywqq:
        $this->version = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
        kmokgyokoacsqkcg:
        $this->isFacebook = false;
        goto mkummeawiecmouws;
        ygyacaeuykeookuw:
        $this->agent = isset($_SERVER["\110\124\x54\x50\x5f\125\123\x45\122\137\x41\x47\105\x4e\124"]) ? $_SERVER["\x48\x54\x54\120\137\x55\x53\105\122\137\x41\107\105\x4e\124"] : '';
        goto ggaemwcyouewkgcm;
        mkummeawiecmouws:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto segicigoioeuyass;
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
        $this->version = preg_replace("\57\x5b\x5e\60\x2d\71\54\x2e\x2c\x61\55\172\54\101\x2d\x5a\55\x5d\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\57\133\136\x30\x2d\71\x2c\56\x2c\141\x2d\x7a\x2c\101\55\x5a\x5d\57", '', $kqagasmwymmuiksq);
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
        uqqiokcseqswsgia:
        $this->reset();
        goto yyacgikiikmoesek;
        syumssoiimkseoum:
        $this->qeqwswckeiieossq();
        goto kmcewougmoaciyky;
        kmcewougmoaciyky:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\143\150\162\x6f\155\x65\146\162\141\155\145") !== false;
    }
    
    public function __toString()
    {
        return "\74\x73\x74\x72\x6f\x6e\x67\76\102\162\x6f\167\163\x65\x72\40\x4e\x61\155\145\x3a\74\x2f\163\x74\x72\157\156\x67\76\x20{$this->aagmmewiwysmgseq()}\x3c\x62\x72\x2f\x3e\xa" . "\74\x73\164\x72\157\x6e\147\76\x42\162\157\167\163\145\x72\40\126\x65\162\163\x69\157\156\72\74\x2f\x73\164\x72\157\x6e\147\76\x20{$this->gikwwgqmwccescgy()}\x3c\142\x72\57\x3e\xa" . "\x3c\163\x74\x72\x6f\x6e\147\76\102\x72\157\167\x73\x65\x72\40\x55\x73\x65\x72\x20\x41\147\145\x6e\164\40\123\x74\162\151\156\147\x3a\74\x2f\163\x74\162\x6f\156\x67\x3e\40{$this->ckaoiscoyuuosace()}\74\x62\x72\57\76\xa" . "\74\163\x74\162\x6f\156\x67\76\x50\154\x61\164\x66\x6f\x72\x6d\72\x3c\x2f\x73\164\x72\157\156\147\76\40{$this->kqeiosksqeuksyqu()}\74\x62\162\x2f\x3e";
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
        ggiqousqgowseosg:
        ikwcwqmomksisice:
        goto wyeguiaumcoesuiy;
        emiksyiouuqsigmq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto awasoqakauqikkya;
        wyeguiaumcoesuiy:
        ssayikwmgomomkkq:
        goto auomkekgcqwsmgqu;
        awasoqakauqikkya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sqimcsougcukocky;
        sqimcsougcukocky:
        $this->name = self::BROWSER_BLACKBERRY;
        goto eykuqgakcouscsks;
        wwskqqaskwicmaay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\102\x6c\141\x63\x6b\x42\x65\162\162\171"));
        goto koiysaseasuyieym;
        cemqmygogskcoygo:
        if (!(stripos($this->agent, "\x62\x6c\x61\143\x6b\142\x65\162\x72\171") !== false)) {
            goto ssayikwmgomomkkq;
        }
        goto wwskqqaskwicmaay;
        yeequkyciegceoeo:
        return true;
        goto ggiqousqgowseosg;
        auomkekgcqwsmgqu:
        return false;
        goto yymkyucwwqwymsse;
        eykuqgakcouscsks:
        $this->eywockmuswoykooc(true);
        goto yeequkyciegceoeo;
        yymkyucwwqwymsse:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wokayyqugqaoewiy;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(false);
        goto kgskcgusosyauysg;
        kcakqaaesggwiooc:
        if (!isset($quiguswioiaaywey[1])) {
            goto mscskuyuseuoqaqm;
        }
        goto cwykioaoamgqueey;
        ackciywssqaumgac:
        mscskuyuseuoqaqm:
        goto cwygwqacakmoesuw;
        cwykioaoamgqueey:
        $this->igmimcweskyugiqm(true);
        goto uwiyeosqocyekygy;
        kicewoesgqwaasem:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\101\x4f\114"));
        goto kcakqaaesggwiooc;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto wagiyaqsgwiqyaie;
        cwygwqacakmoesuw:
        eicmoywsowuqoaou:
        goto cgiakccyuqqwmomc;
        qwimoyomwmmwkucy:
        return true;
        goto ackciywssqaumgac;
        uwiyeosqocyekygy:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\133\x5e\x30\55\71\x5c\x2e\x61\55\x7a\135\x2f\x69", '', $quiguswioiaaywey[1]));
        goto qwimoyomwmmwkucy;
        wagiyaqsgwiqyaie:
        if (!(stripos($this->agent, "\141\157\154") !== false)) {
            goto eicmoywsowuqoaou;
        }
        goto kicewoesgqwaasem;
        cgiakccyuqqwmomc:
        return false;
        goto iuumaowkqqsoicgy;
        iuumaowkqqsoicgy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto eyyiqqumygsogaoq;
        iskggyooogqgowys:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\147\157\157\147\154\145\142\157\164"));
        goto skqkiegmwieyweww;
        comcaymsaykamcgi:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto yagmcusocgoqkewa;
        aoeeywugooqmewcc:
        awwiackkekswgamo:
        goto caegiamkkykaqmqu;
        ousiwuqmksykqcec:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kiqcuyecmyaegims;
        caegiamkkykaqmqu:
        qaiaymokiyasqmic:
        goto wykyuuuooigicwgs;
        wesewyeqgccwmaos:
        return true;
        goto aoeeywugooqmewcc;
        eyyiqqumygsogaoq:
        if (!(stripos($this->agent, "\x67\x6f\157\x67\x6c\x65\142\x6f\x74") !== false)) {
            goto qaiaymokiyasqmic;
        }
        goto iskggyooogqgowys;
        skqkiegmwieyweww:
        if (!isset($yikciqwsimweauyg[1])) {
            goto awwiackkekswgamo;
        }
        goto ousiwuqmksykqcec;
        wykyuuuooigicwgs:
        return false;
        goto skomukgmucsuaggq;
        kiqcuyecmyaegims:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto comcaymsaykamcgi;
        yagmcusocgoqkewa:
        $this->aasmeayouwmacaow(true);
        goto wesewyeqgccwmaos;
        skomukgmucsuaggq:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto kuemgcgokyyggkoi;
        uaamscmwcmumgasy:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto qimcgqssayewaygw;
        soeiamgkkekwcoss:
        if (!isset($yikciqwsimweauyg[1])) {
            goto essswiygiqegaayw;
        }
        goto gugywasieysgmmyw;
        uewgegcascsimmaq:
        return true;
        goto gcgwykikiomgmgqa;
        kiaawmeeisegyugk:
        yugqeemimuuqeucm:
        goto wysmsmaeqiucoycu;
        qimcgqssayewaygw:
        $this->name = self::BROWSER_YANDEXBOT;
        goto suugmuecwqaakaoc;
        kuemgcgokyyggkoi:
        if (!(stripos($this->agent, "\131\141\x6e\x64\145\170\x42\157\164") !== false)) {
            goto yugqeemimuuqeucm;
        }
        goto eseawwcgusiywyge;
        wysmsmaeqiucoycu:
        return false;
        goto akeoiekwqqqgqamo;
        suugmuecwqaakaoc:
        $this->aasmeayouwmacaow(true);
        goto uewgegcascsimmaq;
        gugywasieysgmmyw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto uaamscmwcmumgasy;
        eseawwcgusiywyge:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\144\145\170\x42\x6f\x74"));
        goto soeiamgkkekwcoss;
        gcgwykikiomgmgqa:
        essswiygiqegaayw:
        goto kiaawmeeisegyugk;
        akeoiekwqqqgqamo:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto squqowgmqgocyqmi;
        uwemyeqsgcieyymm:
        return false;
        goto lhsckqwkqqauiqwy;
        mkcsckwgisqasmao:
        $this->aasmeayouwmacaow(true);
        goto woikwmiiusqmoygy;
        squqowgmqgocyqmi:
        if (!(stripos($this->agent, "\131\x61\x6e\144\145\170\111\x6d\141\147\145\x52\x65\x73\x69\172\x65\162") !== false)) {
            goto gwokcyciswoaygie;
        }
        goto qysommommieagsuw;
        woikwmiiusqmoygy:
        return true;
        goto imsysaygciegsqok;
        cyqyggywyykwqyak:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto osumgoskasckcieg;
        mygsucymimsqmqky:
        gwokcyciswoaygie:
        goto uwemyeqsgcieyymm;
        qysommommieagsuw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x6e\x64\145\x78\x49\155\141\147\x65\122\x65\x73\151\172\145\162"));
        goto aekaikwiqmuwwqia;
        ikmicisyykkwmeso:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cyqyggywyykwqyak;
        osumgoskasckcieg:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto mkcsckwgisqasmao;
        imsysaygciegsqok:
        sqqqyyimyskaygea:
        goto mygsucymimsqmqky;
        aekaikwiqmuwwqia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sqqqyyimyskaygea;
        }
        goto ikmicisyykkwmeso;
        lhsckqwkqqauiqwy:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto ceugiycaewioseoe;
        ceugiycaewioseoe:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\170\103\141\164\141\x6c\x6f\147") !== false)) {
            goto swuywmmasggeiqou;
        }
        goto ieycgksaoqioisky;
        aacosyksiacoaeig:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto gwqqoewaikqqueoe;
        gwqqoewaikqqueoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto muyymwciiieqymqw;
        yakmisgikescmgoo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto aacosyksiacoaeig;
        muyymwciiieqymqw:
        $this->aasmeayouwmacaow(true);
        goto dqcamiqqkwiowaag;
        dqcamiqqkwiowaag:
        return true;
        goto sigosycgcicoiuuc;
        ycyyicuqwqcyqeig:
        return false;
        goto kccciwsgesamyyau;
        ieycgksaoqioisky:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\145\170\103\141\x74\141\154\157\x67"));
        goto qigcoauseeigksyc;
        iycocuaeccqgyoia:
        swuywmmasggeiqou:
        goto ycyyicuqwqcyqeig;
        sigosycgcicoiuuc:
        eosuykwimywegmse:
        goto iycocuaeccqgyoia;
        qigcoauseeigksyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eosuykwimywegmse;
        }
        goto yakmisgikescmgoo;
        kccciwsgesamyyau:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto imkwmsokcecosyse;
        kmayccieqkkiqicw:
        return true;
        goto umsckeuyiggsewac;
        naiguckqsyeaesek:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eqqaouecoaseisgq;
        iymeugimwgcywusq:
        return false;
        goto eiswwscyoaqoggge;
        suagmomycmooyggu:
        $this->aasmeayouwmacaow(true);
        goto kmayccieqkkiqicw;
        umsckeuyiggsewac:
        oameuaooiigaiucg:
        goto skqmieiumikceamg;
        osuskyuuggamicou:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\x64\x65\x78\x4e\x65\x77\163"));
        goto uaaiysoikgsuscqw;
        eqqaouecoaseisgq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto kqmkicwuyqakoika;
        kqmkicwuyqakoika:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto suagmomycmooyggu;
        imkwmsokcecosyse:
        if (!(stripos($this->agent, "\131\141\x6e\x64\145\x78\116\x65\x77\163") !== false)) {
            goto omccwaywmcmqksmq;
        }
        goto osuskyuuggamicou;
        uaaiysoikgsuscqw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oameuaooiigaiucg;
        }
        goto naiguckqsyeaesek;
        skqmieiumikceamg:
        omccwaywmcmqksmq:
        goto iymeugimwgcywusq;
        eiswwscyoaqoggge:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto gwkeoekmeeqmmwgy;
        iigucumgucicccac:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto swusyoymaokumies;
        xwymaakqyeoqaams:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto amcsamiamksyqmuq;
        swusyoymaokumies:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto xwymaakqyeoqaams;
        aikqumiqkkqaqgee:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\156\144\145\x78\115\x65\164\x72\x69\x6b\141"));
        goto ukeksoegcoqokeik;
        qqusymyoygwwueco:
        return false;
        goto iuoiiwaosgqoeask;
        cmasgwmooaiccewo:
        return true;
        goto cyckkcksiwwqasio;
        ukeksoegcoqokeik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qaqmwuwwqycmqkyg;
        }
        goto iigucumgucicccac;
        cyckkcksiwwqasio:
        qaqmwuwwqycmqkyg:
        goto egemeuggwgwuayoi;
        gwkeoekmeeqmmwgy:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\170\x4d\x65\x74\x72\151\153\x61") !== false)) {
            goto eyogsqkuigcksouq;
        }
        goto aikqumiqkkqaqgee;
        egemeuggwgwuayoi:
        eyogsqkuigcksouq:
        goto qqusymyoygwwueco;
        amcsamiamksyqmuq:
        $this->aasmeayouwmacaow(true);
        goto cmasgwmooaiccewo;
        iuoiiwaosgqoeask:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto wsqgykwqkgiwaksw;
        gmgemamkswqeskmo:
        giuuqwcsockoiqem:
        goto gswsuaquqikkycwi;
        yeywuuiugmgeuygm:
        $this->aasmeayouwmacaow(true);
        goto ywiyqcgyoweomkqg;
        ywiyqcgyoweomkqg:
        return true;
        goto gmgemamkswqeskmo;
        qcwaessgikigogay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\144\145\x78\x44\151\x72\145\x63\164"));
        goto uegccyuaemgmocgu;
        wsqgykwqkgiwaksw:
        if (!(stripos($this->agent, "\x59\x61\156\x64\145\x78\x44\151\162\145\143\x74") !== false)) {
            goto smqoegcueykkkiiq;
        }
        goto qcwaessgikigogay;
        geqcuwsuqymcqiou:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto yeywuuiugmgeuygm;
        qqyasyisimsuyiiw:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto geqcuwsuqymcqiou;
        eemgwkicuicwskms:
        return false;
        goto kyemcamscwoeeoiy;
        gswsuaquqikkycwi:
        smqoegcueykkkiiq:
        goto eemgwkicuicwskms;
        uegccyuaemgmocgu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto giuuqwcsockoiqem;
        }
        goto iouecsmwqgaiycoq;
        iouecsmwqgaiycoq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qqyasyisimsuyiiw;
        kyemcamscwoeeoiy:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto eeqgkcgywkwgmiyg;
        eeqgkcgywkwgmiyg:
        if (!(stripos($this->agent, "\131\x61\156\144\x65\x78\x57\145\142\x6d\141\x73\164\x65\x72") !== false)) {
            goto mucqymyysqeiaqwk;
        }
        goto cumwowkcomuigeag;
        cumwowkcomuigeag:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\144\145\170\x57\145\x62\155\141\x73\164\145\162"));
        goto qomyesuacseysugi;
        fkcemcakyseoskmc:
        return false;
        goto aucqaemoukqogokc;
        wsiqkesiecagcykw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iawccecmgeaocqmg;
        cyoymqqkgiumuegy:
        mucqymyysqeiaqwk:
        goto fkcemcakyseoskmc;
        qomyesuacseysugi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ggawqqciikeiqiau;
        }
        goto wsiqkesiecagcykw;
        heakaosaewwowmcu:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto euyooyocyuucmmmc;
        saaioyiceykemgas:
        ggawqqciikeiqiau:
        goto cyoymqqkgiumuegy;
        euyooyocyuucmmmc:
        $this->aasmeayouwmacaow(true);
        goto iskwcciiywiaamos;
        iskwcciiywiaamos:
        return true;
        goto saaioyiceykemgas;
        iawccecmgeaocqmg:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto heakaosaewwowmcu;
        aucqaemoukqogokc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto oyqaeioosuiwoacw;
        wuqswaumkwuciiqi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aekwmmmciucegyys;
        }
        goto wmkoscqgkmsoasms;
        cwmwkkauqqusccgs:
        return false;
        goto isowmaawkwmkcgmo;
        yksumiuqcoggugea:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto aisgmewqismsouqm;
        cecqqwuqeiccmmos:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto yksumiuqcoggugea;
        mywassaguwommoyg:
        return true;
        goto mgsyyameesskqgsk;
        omeekeuouqiieacw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\x6e\x64\x65\x78\106\141\166\x69\143\157\156\163"));
        goto wuqswaumkwuciiqi;
        wsgcyguocqmgccks:
        quaugcgaccqksmmk:
        goto cwmwkkauqqusccgs;
        aisgmewqismsouqm:
        $this->aasmeayouwmacaow(true);
        goto mywassaguwommoyg;
        oyqaeioosuiwoacw:
        if (!(stripos($this->agent, "\131\x61\156\x64\145\170\106\x61\x76\x69\x63\157\156\163") !== false)) {
            goto quaugcgaccqksmmk;
        }
        goto omeekeuouqiieacw;
        mgsyyameesskqgsk:
        aekwmmmciucegyys:
        goto wsgcyguocqmgccks;
        wmkoscqgkmsoasms:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cecqqwuqeiccmmos;
        isowmaawkwmkcgmo:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto ggyweqemgcmwwwgu;
        eayemqoaewmasoos:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto wimcmomumakqcikc;
        qacccgcuwysswgqk:
        gciueqsqsgcekwae:
        goto ucgecsiyweweymqw;
        qquioqqwmiuemaaw:
        return true;
        goto gukkaysgawyusckc;
        gccyyceaqackqsec:
        $this->aasmeayouwmacaow(true);
        goto qquioqqwmiuemaaw;
        ggyweqemgcmwwwgu:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\x78\x42\154\x6f\x67\x73") !== false)) {
            goto gciueqsqsgcekwae;
        }
        goto oasoyuckmqumgwwy;
        gukkaysgawyusckc:
        caumawwwskkoekcw:
        goto qacccgcuwysswgqk;
        wimcmomumakqcikc:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto gccyyceaqackqsec;
        ucugysauicuskega:
        if (!isset($yikciqwsimweauyg[1])) {
            goto caumawwwskkoekcw;
        }
        goto kaiekqyukykoqiwa;
        ucgecsiyweweymqw:
        return false;
        goto ucwwsimgkkgymqwm;
        kaiekqyukykoqiwa:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto eayemqoaewmasoos;
        oasoyuckmqumgwwy:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\x65\x78\x42\154\157\147\163"));
        goto ucugysauicuskega;
        ucwwsimgkkgymqwm:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto oaaqgeqiwsykukeg;
        oaaqgeqiwsykukeg:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\x4d\x65\144\151\141") !== false)) {
            goto cuaueyackcccuamq;
        }
        goto wyqswauigsseskum;
        wkaeeqagowygkuya:
        return true;
        goto wuasiiywuycmkusq;
        gyswaoawqisgeiac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto syoagkqccoyegkac;
        }
        goto aayyiwqgkqkkckeg;
        eikeicmemcaswgaq:
        return false;
        goto wisaskaqkeaqaymk;
        aayyiwqgkqkkckeg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mwoaykewsqmiikum;
        eiuwyaccguegyckc:
        $this->aasmeayouwmacaow(true);
        goto wkaeeqagowygkuya;
        wyqswauigsseskum:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\144\x65\x78\x4d\145\x64\151\141"));
        goto gyswaoawqisgeiac;
        mwoaykewsqmiikum:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto iammckaiicmaeweq;
        ygagqkmcasesqcui:
        cuaueyackcccuamq:
        goto eikeicmemcaswgaq;
        wuasiiywuycmkusq:
        syoagkqccoyegkac:
        goto ygagqkmcasesqcui;
        iammckaiicmaeweq:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto eiuwyaccguegyckc;
        wisaskaqkeaqaymk:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto kwkeisysqagyioig;
        wmquwikmuiskcucm:
        return false;
        goto ymmgwsqqoskmaags;
        kuimcqawqqqgcoqs:
        $this->aasmeayouwmacaow(true);
        goto osyoqauakmkoaigc;
        ouaywweeyqecagmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wmigsokoiegiocys;
        }
        goto gogqmaoyqeoscico;
        kwkeisysqagyioig:
        if (!(stripos($this->agent, "\131\141\x6e\144\x65\x78\x56\x69\x64\x65\x6f") !== false)) {
            goto mieyqmckqkqaoygo;
        }
        goto mecmyqgsmiuesukw;
        ngkomagwskmkmcuc:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto kuimcqawqqqgcoqs;
        yeyoqmmeeuqucmky:
        mieyqmckqkqaoygo:
        goto wmquwikmuiskcucm;
        osyoqauakmkoaigc:
        return true;
        goto wqcseegakwamkcca;
        gogqmaoyqeoscico:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kmawaeioomkgqkqe;
        wqcseegakwamkcca:
        wmigsokoiegiocys:
        goto yeyoqmmeeuqucmky;
        mecmyqgsmiuesukw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\x64\x65\170\x56\151\144\x65\x6f"));
        goto ouaywweeyqecagmc;
        kmawaeioomkgqkqe:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ngkomagwskmkmcuc;
        ymmgwsqqoskmaags:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto gggsgesuicesmqya;
        ueyiaawciiimcmia:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yuueeqwwgggeycog;
        cqmkeoyaqqoykcyu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto suaeioykcscoamsi;
        }
        goto ueyiaawciiimcmia;
        yieciwkqiqgceuya:
        return true;
        goto waauqgswsiesowse;
        mksgaooiuiymkkac:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\x65\170\111\x6d\x61\x67\145\x73"));
        goto cqmkeoyaqqoykcyu;
        yuueeqwwgggeycog:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qccmiyoiqguwmqug;
        ecyoakcmqwaksmms:
        return false;
        goto okyykeecayqaccik;
        gggsgesuicesmqya:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\x78\111\x6d\141\147\145\x73") !== false)) {
            goto ukoqoieuoigccaoi;
        }
        goto mksgaooiuiymkkac;
        kiqkwuaswsmkigok:
        $this->aasmeayouwmacaow(true);
        goto yieciwkqiqgceuya;
        qccmiyoiqguwmqug:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto kiqkwuaswsmkigok;
        wqwqukkyascugisy:
        ukoqoieuoigccaoi:
        goto ecyoakcmqwaksmms;
        waauqgswsiesowse:
        suaeioykcscoamsi:
        goto wqwqukkyascugisy;
        okyykeecayqaccik:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto yqswiyiomsgeayiw;
        aouymgmkkcaaymky:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto egsiwgciqqkwecuy;
        escsoaemgioqgqso:
        $this->aasmeayouwmacaow(true);
        goto gumousymsmeugmsm;
        ywwgsgiqkuwwuwas:
        cugwcccamcyuksgk:
        goto ayikwkmouqocqoya;
        gqogwsuwyiouywcy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto aouymgmkkcaaymky;
        sieeqakumiscuwmy:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x6d\x73\x6e\142\157\x74"));
        goto yuosayyyyemookmi;
        egsiwgciqqkwecuy:
        $this->name = self::BROWSER_MSNBOT;
        goto escsoaemgioqgqso;
        ayikwkmouqocqoya:
        return false;
        goto wsuauiewqimocoes;
        yqswiyiomsgeayiw:
        if (!(stripos($this->agent, "\155\x73\x6e\142\157\164") !== false)) {
            goto cugwcccamcyuksgk;
        }
        goto sieeqakumiscuwmy;
        gumousymsmeugmsm:
        return true;
        goto egaiuisgeekasiow;
        egaiuisgeekasiow:
        wqgwmgkmeiewmwsm:
        goto ywwgsgiqkuwwuwas;
        yuosayyyyemookmi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wqgwmgkmeiewmwsm;
        }
        goto gqogwsuwyiouywcy;
        wsuauiewqimocoes:
    }
    
    protected function qaigygakimuucuki()
    {
        goto oqkyykockmuiaycc;
        uugykecieoomuygs:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\142\151\156\147\142\x6f\x74"));
        goto aygyqqwyyugyoakg;
        uiyscqcowgeaeoco:
        $this->aasmeayouwmacaow(true);
        goto soiguuywuqqisowg;
        soiguuywuqqisowg:
        return true;
        goto gqmiumskekekmaks;
        oqkyykockmuiaycc:
        if (!(stripos($this->agent, "\x62\x69\156\147\142\157\164") !== false)) {
            goto ymmyqwqggkuwimiw;
        }
        goto uugykecieoomuygs;
        aygyqqwyyugyoakg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oemaagemmycueycs;
        }
        goto egeecgiwycoqsgqm;
        gqmiumskekekmaks:
        oemaagemmycueycs:
        goto acsqgoigqaiqiwaw;
        aoueegmsgkeokaoq:
        return false;
        goto wmuqesieiugiquks;
        ikqqmyoegaeocwqw:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto hiuqggmuisuaaksw;
        egeecgiwycoqsgqm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikqqmyoegaeocwqw;
        hiuqggmuisuaaksw:
        $this->name = self::BROWSER_BINGBOT;
        goto uiyscqcowgeaeoco;
        acsqgoigqaiqiwaw:
        ymmyqwqggkuwimiw:
        goto aoueegmsgkeokaoq;
        wmuqesieiugiquks:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto yiiaqacikommoaoy;
        aisaywmsiigsegso:
        if (stripos($this->agent, "\x57\x33\x43\55\155\x6f\142\x69\154\x65\117\x4b") !== false) {
            goto uomswgeawseimkou;
        }
        goto wssaokwkycsqqumw;
        iqugwmioumykkagm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto fkuiuosooquwmkoi;
        sykosugesqqqqyey:
        wwaoocgeiyswqwow:
        goto okicguwqeyiuywos;
        fkuiuosooquwmkoi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eewmcuekysqqkeey;
        sqcqqsocqymmgwcq:
        iicgycsecmaeqqcg:
        goto segewkgiakaqsgoc;
        gggamqmqusyimaky:
        return true;
        goto meqqkyuusamyauyc;
        wssaokwkycsqqumw:
        goto mcuiomgoamywqgya;
        goto iuiusomcwkaiksyq;
        waqsamacggacoaye:
        return true;
        goto oiksgywwsqweoeai;
        oscemsgoyimocqei:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imiuwwuwwyqigmou;
        mqigmosuikyaaamk:
        goto mcuiomgoamywqgya;
        goto sqcqqsocqymmgwcq;
        icmmwweaumcckgam:
        if (stripos($this->agent, "\x57\63\103\x5f\126\x61\154\x69\x64\141\x74\x6f\x72") !== false) {
            goto iicgycsecmaeqqcg;
        }
        goto aisaywmsiigsegso;
        weuwgyoweusiaweq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\127\63\x43\55\143\150\145\143\153\x6c\x69\x6e\153"));
        goto ykoqgweokgwkcawk;
        ucuiqegmmogyasmw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto oscemsgoyimocqei;
        iuiusomcwkaiksyq:
        sioosmeyiqmscmkc:
        goto weuwgyoweusiaweq;
        oqkkssoawygysqmq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto yioasqegwkugoqag;
        ykoqgweokgwkcawk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto weygkwekqawoowyq;
        }
        goto iqugwmioumykkagm;
        iamckkumoomyeoum:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wwaoocgeiyswqwow;
        }
        goto ucuiqegmmogyasmw;
        segewkgiakaqsgoc:
        
        $eaogoiscgwgmugsq = str_replace("\127\63\103\137\126\141\x6c\x69\144\x61\164\157\162\x20", "\127\x33\103\x5f\126\x61\x6c\x69\144\141\x74\157\x72\57", $this->agent);
        goto oeiiuoikyagkmyqa;
        osewecweiaekeoou:
        uomswgeawseimkou:
        goto oqkkssoawygysqmq;
        oeiiuoikyagkmyqa:
        $yikciqwsimweauyg = explode("\x2f", stristr($eaogoiscgwgmugsq, "\x57\x33\103\x5f\x56\141\x6c\151\x64\x61\x74\x6f\162"));
        goto iamckkumoomyeoum;
        oiksgywwsqweoeai:
        mcuiomgoamywqgya:
        goto ckmosuuwagciuwmw;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        yiiaqacikommoaoy:
        if (stripos($this->agent, "\x57\63\103\x2d\x63\150\x65\x63\153\154\151\156\x6b") !== false) {
            goto sioosmeyiqmscmkc;
        }
        goto icmmwweaumcckgam;
        yioasqegwkugoqag:
        $this->eywockmuswoykooc(true);
        goto waqsamacggacoaye;
        ckmosuuwagciuwmw:
        return false;
        goto iuiyyuwauoowkgeg;
        eewmcuekysqqkeey:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto gggamqmqusyimaky;
        meqqkyuusamyauyc:
        weygkwekqawoowyq:
        goto mqigmosuikyaaamk;
        iqgasessakaoieuw:
        return true;
        goto sykosugesqqqqyey;
        okicguwqeyiuywos:
        goto mcuiomgoamywqgya;
        goto osewecweiaekeoou;
        iuiyyuwauoowkgeg:
    }
    
    protected function cimegwusqouswgao()
    {
        goto kwumsouwywsqkmci;
        qmckmkykmyucosyq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\x6c\165\x72\160"));
        goto myksiemsskucuyac;
        oawogoiagossceii:
        $this->aasmeayouwmacaow(true);
        goto ouecqyewekugmwkm;
        mkimssyoqguuowky:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto aqcqeucsaaeuiwqa;
        gygwagcmmmaioikw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mkimssyoqguuowky;
        qeimskmimouyssgu:
        return false;
        goto csecmagoocuukewm;
        aqcqeucsaaeuiwqa:
        $this->name = self::BROWSER_SLURP;
        goto oawogoiagossceii;
        myksiemsskucuyac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ogeakuasmaemuwga;
        }
        goto gygwagcmmmaioikw;
        ouecqyewekugmwkm:
        $this->eywockmuswoykooc(false);
        goto ecuoemaqoeosiase;
        guiqaqkuywsmqcoc:
        wiawimwuykuugcwi:
        goto qeimskmimouyssgu;
        kwumsouwywsqkmci:
        if (!(stripos($this->agent, "\x73\x6c\x75\x72\160") !== false)) {
            goto wiawimwuykuugcwi;
        }
        goto qmckmkykmyucosyq;
        aecsciyiseuamymy:
        ogeakuasmaemuwga:
        goto guiqaqkuywsmqcoc;
        ecuoemaqoeosiase:
        return true;
        goto aecsciyiseuamymy;
        csecmagoocuukewm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto asoiigkaqcguaioi;
        qsqgkiyigokqcioe:
        owcekoqmukawoeao:
        goto wwckusqkukciicei;
        gaccwqquykeauumg:
        goto owcekoqmukawoeao;
        goto sqikwaiakyissigo;
        uckgesmigkiyqyck:
        return true;
        goto pwgwmqwuoqysukeo;
        asoiigkaqcguaioi:
        if (stripos($this->agent, "\102\x72\141\166\145\57") !== false) {
            goto ymgeisswqiucoaas;
        }
        goto wuismmmeeqkiowua;
        wwckusqkukciicei:
        return false;
        goto cmcisgcoaouauymu;
        qmywsksagymugcou:
        return true;
        goto qsqgkiyigokqcioe;
        gsuacqigwaigyaia:
        if (!isset($uuygmciickwewegw[1])) {
            goto ggakkmokkykkqawi;
        }
        goto ciymuigaugeiouic;
        yeagcqwaoeskgqmg:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ocsoakwgmmwsekyi;
        pwgwmqwuoqysukeo:
        ggakkmokkykkqawi:
        goto gaccwqquykeauumg;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        sosikmkcuygeukyo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwgkaeyusoekmway;
        ocsoakwgmmwsekyi:
        
        
        $this->aasasueowyemuyoc('');
        goto qmywsksagymugcou;
        gikcoemsgecyasqe:
        goto owcekoqmukawoeao;
        goto gkgwqoquqekiayus;
        gkgwqoquqekiayus:
        ymgeisswqiucoaas:
        goto iaiewssiomowoyas;
        iaiewssiomowoyas:
        $uuygmciickwewegw = explode("\57", stristr($this->agent, "\x42\162\141\166\x65"));
        goto gsuacqigwaigyaia;
        ciymuigaugeiouic:
        $quiguswioiaaywey = explode("\x20", $uuygmciickwewegw[1]);
        goto sosikmkcuygeukyo;
        wuismmmeeqkiowua:
        if (stripos($this->agent, "\x20\102\x72\x61\x76\x65\40") !== false) {
            goto wucmiaeomamqgqes;
        }
        goto gikcoemsgecyasqe;
        sqikwaiakyissigo:
        wucmiaeomamqgqes:
        goto yeagcqwaoeskgqmg;
        cmcisgcoaouauymu:
    }
    
    protected function makyeuicweuowumi()
    {
        goto ccyiuskguauimqee;
        sggyugwiuggaaqyo:
        megqkiykgiamgmsk:
        goto mwauqumigegcywiw;
        qmkkwkqieggiyamm:
        if (!(stripos($this->agent, "\127\151\x6e\x64\157\167\x73\40\120\x68\x6f\x6e\145") !== false || stripos($this->agent, "\x41\x6e\144\162\x6f\151\144") !== false)) {
            goto camscswqceqycmke;
        }
        goto eamumkggcmyaosco;
        qgagcuckouyuyuss:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto qmkkwkqieggiyamm;
        mwauqumigegcywiw:
        return false;
        goto omeswwygqyeqyqmw;
        oyykmqismqsyaaus:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yukycgouyuqkmaok;
        }
        goto sgwwscoqkcuoqqsg;
        umimoqmwoeecysqi:
        return true;
        goto ysamigeqeyqgiwcs;
        gmiyusqaiqaaakkk:
        camscswqceqycmke:
        goto umimoqmwoeecysqi;
        kigaqwsiuygysecu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qgagcuckouyuyuss;
        sgwwscoqkcuoqqsg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kigaqwsiuygysecu;
        eamumkggcmyaosco:
        $this->eywockmuswoykooc(true);
        goto gmiyusqaiqaaakkk;
        oqymsqskimoyuyye:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\105\144\147\x65"));
        goto oyykmqismqsyaaus;
        ysamigeqeyqgiwcs:
        yukycgouyuqkmaok:
        goto sggyugwiuggaaqyo;
        ccyiuskguauimqee:
        if (!(stripos($this->agent, "\105\x64\147\x65\x2f") !== false)) {
            goto megqkiykgiamgmsk;
        }
        goto oqymsqskimoyuyye;
        omeswwygqyeqyqmw:
    }
    
    protected function cgequousmqakcios()
    {
        goto cyikciomyweygykm;
        umaimowkyaemisiq:
        if (stripos($this->agent, "\155\x73\160\x69\145") !== false || stripos($this->agent, "\x70\x6f\x63\x6b\x65\164") !== false) {
            goto iseeayqyeoawwmwc;
        }
        goto yueaaaoockqicmwq;
        kwaiiaowwykksgcw:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto oesqmiaisaqseigm;
        kekkyamkouwoiyyi:
        owgoagmssqsysiyq:
        goto uasakawygcqkquuy;
        cyikciomyweygykm:
        if (stripos($this->agent, "\124\162\151\144\145\156\x74\57\67\x2e\x30\x3b\x20\162\166\72\x31\x31\x2e\x30") !== false) {
            goto ycsqoemcioqgscik;
        }
        goto ouqiiwuqeoegciso;
        kkumemicscqeqawi:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\x3b\x20", $this->agent), "\115\x53\116"));
        goto msccquimgomummck;
        coeaoweyqagqsoqq:
        return true;
        goto goowmysscaoakuma;
        eismimkcoiokucom:
        return true;
        goto sooawcagkoismuqa;
        msccquimgomummck:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gyqcauemgkuwquua;
        }
        goto kmmsoqcgiyougqqy;
        wysmuiaeuqqaycig:
        if (!isset($quiguswioiaaywey[1])) {
            goto wskkwyoiugucwwua;
        }
        goto qousyksekeougumo;
        kmmsoqcgiyougqqy:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto ygqkqwkyoosgomug;
        gocgaeomskmyyuaq:
        ycsqoemcioqgscik:
        goto ckiggmwimwykqyee;
        ieuewgsuqywiuuki:
        $quiguswioiaaywey = explode("\57", $this->agent);
        goto wysmuiaeuqqaycig;
        sikkakqouqeckesc:
        qymmimiisagiymuy:
        goto aqwaemcyooumguou;
        qwwigmoeocgyqyuy:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto oeeccicqsoiyqcig;
        yueaaaoockqicmwq:
        goto qkmucouuqggkwssg;
        goto gocgaeomskmyyuaq;
        occyqeeyumwaygik:
        zkoqiugkkemmwqeq:
        goto yaeowwmkcuqmesau;
        goiegscqgcukimys:
        goto qkmucouuqggkwssg;
        goto occyqeeyumwaygik;
        ieysgookkakiiuoo:
        if (!preg_match("\57\x33\60\x38\x7c\64\62\65\x7c\x34\62\x36\x7c\x34\x37\x34\x7c\60\142\x31\57\151", $yikciqwsimweauyg)) {
            goto uecqmukyqqgyoegy;
        }
        goto aykuikogcgweeoio;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        gcasowsewwisgqwc:
        $yikciqwsimweauyg = stristr($this->agent, "\x2f");
        goto ieysgookkakiiuoo;
        eqiygsagygouqkyy:
        $this->aasasueowyemuyoc("\x31\56\x30");
        goto gcasowsewwisgqwc;
        sckcaoikwggaoiqm:
        if (stripos($this->agent, "\x6d\163\x69\x65") !== false && stripos($this->agent, "\x6f\160\x65\x72\x61") === false) {
            goto zkoqiugkkemmwqeq;
        }
        goto aaumqogegyqosuiq;
        qsaiiuqwimiqiwyc:
        uecqmukyqqgyoegy:
        goto wkgugqyackgiowas;
        asgwqocgsuugguse:
        return false;
        goto kiykgaeecsuoegei;
        qskwqqamoqekaqum:
        $this->aasasueowyemuyoc(preg_replace("\x2f\x5b\136\x30\55\x39\56\135\53\57", '', $sogksuscggsicmac[1]));
        goto ameqasmessgyycqq;
        yygugwkyoeackami:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto kwaiiaowwykksgcw;
        wyagecywqcysyyae:
        goto ycsuqaygaisskkeq;
        goto kekkyamkouwoiyyi;
        kmyoqookuiyomeec:
        if (!(stripos($this->agent, "\x49\105\x4d\157\x62\x69\x6c\x65") !== false)) {
            goto uoyuiiauquiwgasu;
        }
        goto omggicgmwyakocik;
        aykuikogcgweeoio:
        $this->aasasueowyemuyoc("\x31\x2e\65");
        goto qsaiiuqwimiqiwyc;
        mgsmmaqqkusaaqew:
        soacqquaasiggock:
        goto kwemswkcueagmssu;
        goowmysscaoakuma:
        gyqcauemgkuwquua:
        goto ygwwwwcgiwmcakmi;
        swasyyuiyouasyqy:
        usoiismiikooagme:
        goto akmiwammkswkmyio;
        aqwaemcyooumguou:
        qkmucouuqggkwssg:
        goto asgwqocgsuugguse;
        ygwwwwcgiwmcakmi:
        kwyiuyoeysqeywmm:
        goto uuiioegocmmcqgwq;
        eaicyuessygcyuqu:
        return true;
        goto sikkakqouqeckesc;
        uuiioegocmmcqgwq:
        $yikciqwsimweauyg = explode("\40", stristr(str_replace("\73", "\x3b\40", $this->agent), "\x6d\x73\x69\x65"));
        goto yygugwkyoeackami;
        ameqasmessgyycqq:
        $this->agent = str_replace(["\x4d\x6f\172\151\154\x6c\141", "\107\x65\x63\153\157"], "\115\x53\111\x45", $this->agent);
        goto isucaqumoqgykqig;
        mayucqimkiskmcms:
        $sogksuscggsicmac = explode("\162\166\72", $this->agent);
        goto syawcymwokyaqeck;
        isucaqumoqgykqig:
        ewasqwuscwkeuuyi:
        goto iuiickwiuccmyiey;
        ouqiiwuqeoegciso:
        if (stripos($this->agent, "\155\151\x63\x72\x6f\x73\157\146\164\x20\x69\156\x74\x65\x72\x6e\145\x74\40\145\170\160\154\x6f\x72\x65\162") !== false) {
            goto usoiismiikooagme;
        }
        goto sckcaoikwggaoiqm;
        agasiekywmaokckg:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qwwigmoeocgyqyuy;
        oesqmiaisaqseigm:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\51", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto kmyoqookuiyomeec;
        iuiickwiuccmyiey:
        goto qkmucouuqggkwssg;
        goto yiomssmosemcckmc;
        igesuquikuwmsywg:
        return true;
        goto iqkkuesiuysywyag;
        kwemswkcueagmssu:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto mayucqimkiskmcms;
        wkgugqyackgiowas:
        return true;
        goto goiegscqgcukimys;
        kqggyaomgmqyicmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qymmimiisagiymuy;
        }
        goto agasiekywmaokckg;
        awiqeeiewssogaaq:
        uoyuiiauquiwgasu:
        goto eismimkcoiokucom;
        eoeoikgkiuewagwg:
        goto qkmucouuqggkwssg;
        goto mgsmmaqqkusaaqew;
        akmiwammkswkmyio:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eqiygsagygouqkyy;
        uasakawygcqkquuy:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto myymisiqiwiqymuu;
        syawcymwokyaqeck:
        if (!isset($sogksuscggsicmac[1])) {
            goto ewasqwuscwkeuuyi;
        }
        goto qskwqqamoqekaqum;
        micqaoiiquokaqmw:
        wskkwyoiugucwwua:
        goto wyagecywqcysyyae;
        myymisiqiwiqymuu:
        ycsuqaygaisskkeq:
        goto eaicyuessygcyuqu;
        uuamswicsoyuguug:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x6d\163\160\x69\145"));
        goto kqggyaomgmqyicmc;
        yaeowwmkcuqmesau:
        
        if (!(stripos($this->agent, "\x6d\x73\156\142") !== false)) {
            goto kwyiuyoeysqeywmm;
        }
        goto kkumemicscqeqawi;
        aaumqogegyqosuiq:
        if (stripos($this->agent, "\x74\x72\151\x64\x65\156\164") !== false) {
            goto soacqquaasiggock;
        }
        goto umaimowkyaemisiq;
        iqkkuesiuysywyag:
        goto qkmucouuqggkwssg;
        goto swasyyuiyouasyqy;
        omggicgmwyakocik:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto sqicocysoqwcgasq;
        uksaceogcmuacumi:
        if (stripos($this->agent, "\x6d\x73\160\x69\145") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto ieuewgsuqywiuuki;
        oeeccicqsoiyqcig:
        $this->eywockmuswoykooc(true);
        goto uksaceogcmuacumi;
        sooawcagkoismuqa:
        muaiioeaoiqiogie:
        goto eoeoikgkiuewagwg;
        yiomssmosemcckmc:
        iseeayqyeoawwmwc:
        goto uuamswicsoyuguug;
        qousyksekeougumo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto micqaoiiquokaqmw;
        sqicocysoqwcgasq:
        $this->eywockmuswoykooc(true);
        goto awiqeeiewssogaaq;
        ygqkqwkyoosgomug:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto coeaoweyqagqsoqq;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\x31\56\x30");
        goto igesuquikuwmsywg;
        kiykgaeecsuoegei:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto qakmsceesmcwecmo;
        yeayeuiggqoigwag:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\x28", "\x20", $cgkyugweawsewkuu));
        goto iqwiyiisyasiwsiu;
        uowyeayyimmqogge:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto wkasucgiaeogugcw;
        qwgicaiskacusqka:
        sackmgaomiwgeqca:
        goto aekskqewqmeauaug;
        kwsuumgiqsskggqy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yiyksucyuaosekey;
        wmcauamwimsyiauk:
        goto uqqaaeqoykgcakec;
        goto mmowusaeqemsisiq;
        sciiwomqgcamicqs:
        fwqikeoyaewusiym:
        goto aiaaaesgesgwsuck;
        omusyecyksyowysk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kwsuumgiqsskggqy;
        gouyqmyakowooiyw:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto eyuieiqqgyowoocu;
        mmowusaeqemsisiq:
        qwiwywqwmmciwiea:
        goto wskewcieqoqiuoui;
        uyeiymmkkiyccakm:
        if (stripos($this->agent, "\x6f\160\x65\162\x61") !== false) {
            goto oucqmskiygmmsmye;
        }
        goto scimuugawiiuemki;
        ggiacqackmguiiki:
        if (preg_match("\x2f\134\x2f\x2f", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ckgikcyggaegucyk;
        qakmsceesmcwecmo:
        if (stripos($this->agent, "\x6f\x70\145\x72\x61\40\x6d\x69\156\x69") !== false) {
            goto qwiwywqwmmciwiea;
        }
        goto uyeiymmkkiyccakm;
        mwcysigeamkwiwku:
        uqqaaeqoykgcakec:
        goto ywukigwwwumwuicy;
        gocmokqaeqkqcmma:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\145\162\141");
        goto uggmmsuyiiyuaeic;
        ywukigwwwumwuicy:
        return false;
        goto uyuugesysqaueywi;
        ageemsqieiqyqwag:
        cuyagmoysmwoceks:
        goto eiosgmsukekekyou;
        aekskqewqmeauaug:
        $this->name = self::BROWSER_OPERA;
        goto ikuoukwawkkyaacy;
        aiaaaesgesgwsuck:
        $yikciqwsimweauyg = explode("\x2f", $cgkyugweawsewkuu);
        goto yscyooysgqsyuayo;
        ssoogugiigiqooce:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mseowikguuikkiys;
        uukmwmiaqigsqaug:
        $this->eywockmuswoykooc(true);
        goto myemqwquecqwakyq;
        scimuugawiiuemki:
        if (stripos($this->agent, "\117\x50\122") !== false) {
            goto ieeieiuoeqquyaka;
        }
        goto wmcauamwimsyiauk;
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
        kywqmsqusiysywqe:
        $this->name = self::BROWSER_OPERA_MINI;
        goto swkkeqmaqugwiysy;
        ukkkmakiisiqkacm:
        goto uqqaaeqoykgcakec;
        goto mukwaeyamkyacewo;
        gmgwsqeqwquucyoo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto csuemgeukskicmmi;
        akmiwuwwkeokegkq:
        goto cqcomacmwgougkai;
        goto oqyumeoumucciuao;
        yscyooysgqsyuayo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cuyagmoysmwoceks;
        }
        goto ssoogugiigiqooce;
        uccocwouuuisiage:
        if (!(stripos($this->agent, "\115\157\142\151\154\x65") !== false)) {
            goto isgqqmaauckagsao;
        }
        goto uukmwmiaqigsqaug;
        yiyksucyuaosekey:
        uiuyiuiocgycwaae:
        goto msywkyeikecaomgo;
        csoomgiiyysqmeku:
        return true;
        goto ukkkmakiisiqkacm;
        eukqocmusiasmewe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto usmucisyagswyysu;
        wkasucgiaeogugcw:
        goto cqcomacmwgougkai;
        goto ocisosooggaaueii;
        quucsamwocuceyae:
        ieeieiuoeqquyaka:
        goto emoscekqieoummww;
        eiosgmsukekekyou:
        csguwgocosyisgyq:
        goto kywqmsqusiysywqe;
        myemqwquecqwakyq:
        isgqqmaauckagsao:
        goto ksmacqoqogyoookk;
        csuemgeukskicmmi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ycaooqesseeagoka;
        usmucisyagswyysu:
        amecoaswmoqigiku:
        goto wawimucmukumkuca;
        ggaoikewqkecamgs:
        $this->eywockmuswoykooc(true);
        goto qwgicaiskacusqka;
        msywkyeikecaomgo:
        smsuqgcummiyucsc:
        goto uccocwouuuisiage;
        iqwiyiisyasiwsiu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiuyiuiocgycwaae;
        }
        goto omusyecyksyowysk;
        mukwaeyamkyacewo:
        oucqmskiygmmsmye:
        goto gocmokqaeqkqcmma;
        ccaqsekgkcqqayyg:
        cqcomacmwgougkai:
        goto iegksyacuckwoyiw;
        wawimucmukumkuca:
        goto csguwgocosyisgyq;
        goto sciiwomqgcamicqs;
        ycaooqesseeagoka:
        eoueymmeawwwswwq:
        goto ccaqsekgkcqqayyg;
        ksmacqoqogyoookk:
        $this->name = self::BROWSER_OPERA;
        goto ugmggeiwogwcgcqy;
        uggmmsuyiiyuaeic:
        if (preg_match("\x2f\x56\x65\x72\163\151\x6f\x6e\134\x2f\x28\x31\x2a\56\x2a\x29\44\x2f", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto uqsmiiqigeisoyse;
        }
        goto cyaaugsakiugouae;
        ocisosooggaaueii:
        uqsmiiqigeisoyse:
        goto uuimoqmwywkkaygo;
        oqyumeoumucciuao:
        iggqqqegoegigyii:
        goto gouyqmyakowooiyw;
        swkkeqmaqugwiysy:
        $this->eywockmuswoykooc(true);
        goto csoomgiiyysqmeku;
        cyaaugsakiugouae:
        if (preg_match("\57\x5c\x2f\x2f", $cgkyugweawsewkuu)) {
            goto iggqqqegoegigyii;
        }
        goto cemwkemiwicagmou;
        mseowikguuikkiys:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ageemsqieiqyqwag;
        uuimoqmwywkkaygo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto akmiwuwwkeokegkq;
        cemwkemiwicagmou:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\x70\145\x72\x61"));
        goto uowyeayyimmqogge;
        cyucgakoiiemocie:
        if (!preg_match("\57\134\57\57", $cgkyugweawsewkuu)) {
            goto smsuqgcummiyucsc;
        }
        goto yeayeuiggqoigwag;
        ugmggeiwogwcgcqy:
        return true;
        goto mwcysigeamkwiwku;
        ckgikcyggaegucyk:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\x6f\160\x65\x72\141\40\155\x69\x6e\151"));
        goto coyegiuygcqwmaqc;
        emoscekqieoummww:
        $cgkyugweawsewkuu = stristr($this->agent, "\x4f\120\122");
        goto cyucgakoiiemocie;
        ikuoukwawkkyaacy:
        return true;
        goto omcmaswaawciiaui;
        omcmaswaawciiaui:
        goto uqqaaeqoykgcakec;
        goto quucsamwocuceyae;
        iegksyacuckwoyiw:
        if (!(stripos($this->agent, "\x4f\160\x65\x72\x61\x20\x4d\157\x62\x69") !== false)) {
            goto sackmgaomiwgeqca;
        }
        goto ggaoikewqkecamgs;
        wskewcieqoqiuoui:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\160\x65\x72\x61\40\155\151\156\151");
        goto ggiacqackmguiiki;
        uyuugesysqaueywi:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto oymcieacieeqwses;
        syuakiekoaowmoyy:
        $this->eywockmuswoykooc(true);
        goto symsqqgwwimugwue;
        ymkqceigmmuokugy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oikasesimicoysmu;
        }
        goto gygkmqwkaiskgwws;
        ygeweomowkiskgec:
        return true;
        goto kkaqamsuqkgkwowo;
        oymcieacieeqwses:
        if (!(stripos($this->agent, "\103\x68\x72\157\155\145") !== false)) {
            goto kicmwgigiciiuqaw;
        }
        goto cggwmqyuewwisqsu;
        acmqaeyciymmsgua:
        kicmwgigiciiuqaw:
        goto ewswyuykwuaigiyo;
        kkaqamsuqkgkwowo:
        oikasesimicoysmu:
        goto acmqaeyciymmsgua;
        ewswyuykwuaigiyo:
        return false;
        goto owuqwmsqouswswau;
        gsuqomaoosusiqew:
        goto gqaoecysyaaccyyy;
        goto ymyqsgymeusoakyi;
        ceskkigeaqcaasqs:
        
        if (!(stripos($this->agent, "\x41\x6e\144\x72\x6f\x69\x64") !== false)) {
            goto somyyugyumgeukik;
        }
        goto wikueqyuegggkqoi;
        wikueqyuegggkqoi:
        if (stripos($this->agent, "\115\x6f\x62\151\154\145") !== false) {
            goto qkmqkcwgskmyeoyq;
        }
        goto qoigmymamwikqkce;
        qymyaksieaiemaam:
        somyyugyumgeukik:
        goto ygeweomowkiskgec;
        gygkmqwkaiskgwws:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto awukkyueuqcaywks;
        akgyaaawgcecyoqc:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ceskkigeaqcaasqs;
        qoigmymamwikqkce:
        $this->icigyueiiwsukmsu(true);
        goto gsuqomaoosusiqew;
        awukkyueuqcaywks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto akgyaaawgcecyoqc;
        ymyqsgymeusoakyi:
        qkmqkcwgskmyeoyq:
        goto syuakiekoaowmoyy;
        cggwmqyuewwisqsu:
        $yikciqwsimweauyg = preg_split("\x2f\x5b\x5c\x2f\x3b\x5d\x2b\57", stristr($this->agent, "\103\150\162\157\x6d\145"));
        goto ymkqceigmmuokugy;
        symsqqgwwimugwue:
        gqaoecysyaaccyyy:
        goto qymyaksieaiemaam;
        owuqwmsqouswswau:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto iugcwummaqmgiqgm;
        bkmiygiccoagsyck:
        iawosyeimcucqgky:
        goto ueimcmmgwiommwwg;
        iaewosqywiqiqmqs:
        return true;
        goto bkmiygiccoagsyck;
        owaomgiwykiiesqs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wkeoacqqekmaqogk;
        ueimcmmgwiommwwg:
        skawosaecygmqmsq:
        goto asmgcmegmekauiqm;
        wkeoacqqekmaqogk:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto iaewosqywiqiqmqs;
        aecesusucigikyqs:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iawosyeimcucqgky;
        }
        goto caomeykgioesgswg;
        asmgcmegmekauiqm:
        return false;
        goto quqkggiycuoeaysg;
        caomeykgioesgswg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto owaomgiwykiiesqs;
        cqmwuwoaqiumaogi:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x77\145\142\164\166"));
        goto aecesusucigikyqs;
        iugcwummaqmgiqgm:
        if (!(stripos($this->agent, "\x77\145\x62\x74\x76") !== false)) {
            goto skawosaecygmqmsq;
        }
        goto cqmwuwoaqiumaogi;
        quqkggiycuoeaysg:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto wgmeusuigqsowace;
        sqkqqasyecqeysww:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto seekksssaiokokyq;
        vkcgsyecgukweyki:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto aiawyogcusykcgem;
        wgmeusuigqsowace:
        if (!(stripos($this->agent, "\116\145\164\x50\x6f\163\x69\164\x69\x76\145") !== false)) {
            goto cyscaaaicmkkqies;
        }
        goto eqgyoucqmyyqqagc;
        ocegwkgcsegowucu:
        kgeeikakwgkukkke:
        goto aiugcqaaymaasikk;
        eqgyoucqmyyqqagc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x4e\x65\x74\x50\x6f\163\x69\164\x69\166\145"));
        goto qomaksiaaooygwsg;
        aiawyogcusykcgem:
        return true;
        goto ocegwkgcsegowucu;
        cmmgaceguouaicok:
        return false;
        goto gosqawkmwoukawsa;
        qomaksiaaooygwsg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kgeeikakwgkukkke;
        }
        goto sqkqqasyecqeysww;
        aiugcqaaymaasikk:
        cyscaaaicmkkqies:
        goto cmmgaceguouaicok;
        seekksssaiokokyq:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\73"], '', $quiguswioiaaywey[0]));
        goto vkcgsyecgukweyki;
        gosqawkmwoukawsa:
    }
    
    protected function usswyskeuiskccki()
    {
        goto kkmwiocaqecosykg;
        kkmwiocaqecosykg:
        if (!(stripos($this->agent, "\147\x61\154\x65\157\156") !== false)) {
            goto iiksoosqisyggaks;
        }
        goto mqieeoagcesmykuy;
        siycmwciwoewsooi:
        if (!isset($quiguswioiaaywey[1])) {
            goto kqmsyeoyemocoiqs;
        }
        goto ceguiykycywoocuu;
        asmgcueacgcuokak:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto siycmwciwoewsooi;
        ceguiykycywoocuu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto xwsiauqamwogkwmo;
        csskywiguyamicyu:
        return true;
        goto uceyoakcoqqgkmka;
        xwsiauqamwogkwmo:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto csskywiguyamicyu;
        owkecwacqesgqcaq:
        return false;
        goto gggcyumymmmiuaeu;
        uceyoakcoqqgkmka:
        kqmsyeoyemocoiqs:
        goto mksgqgcoeeksaiqe;
        mksgqgcoeeksaiqe:
        iiksoosqisyggaks:
        goto owkecwacqesgqcaq;
        mqieeoagcesmykuy:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x67\141\x6c\145\x6f\x6e"));
        goto asmgcueacgcuokak;
        gggcyumymmmiuaeu:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto ymykisoiiyyqeqim;
        iyoukgscwmcoweqa:
        return false;
        goto yagoyoogqkomucci;
        ecmeeksmaqyumykg:
        ogcasmoaumciscii:
        goto iyoukgscwmcoweqa;
        ymykisoiiyyqeqim:
        if (!(stripos($this->agent, "\x4b\x6f\156\161\165\x65\162\157\x72") !== false)) {
            goto ogcasmoaumciscii;
        }
        goto mcqqawkmqiiyecey;
        ymqcqiyawcogwgym:
        return true;
        goto cmwigsaskaamoema;
        cmwigsaskaamoema:
        imaukawsimqgmauc:
        goto ecmeeksmaqyumykg;
        keqsgkcumkusgygg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto eqsqecmiugakueqm;
        isygymaiseqgeiau:
        if (!isset($quiguswioiaaywey[1])) {
            goto imaukawsimqgmauc;
        }
        goto keqsgkcumkusgygg;
        mcqqawkmqiiyecey:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\113\157\156\161\165\145\x72\x6f\x72"));
        goto yasusgwwwekossyy;
        yasusgwwwekossyy:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto isygymaiseqgeiau;
        eqsqecmiugakueqm:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto ymqcqiyawcogwgym;
        yagoyoogqkomucci:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto eacseogmmqokmogu;
        aesqewckgocaowoi:
        return false;
        goto gsguoieaewagyogs;
        guukcysyaquuekek:
        if (!isset($quiguswioiaaywey[1])) {
            goto kegmcwesswsaamum;
        }
        goto ycmiqcakcweakeaa;
        qgoyesykieqauwqi:
        swuqimcsmiwqaaom:
        goto aesqewckgocaowoi;
        cwyqqgwwmesmkiam:
        return true;
        goto ssewsumymwocqyyc;
        ssewsumymwocqyyc:
        kegmcwesswsaamum:
        goto qgoyesykieqauwqi;
        ycmiqcakcweakeaa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto koakuemcskwaoesy;
        oswqmcgsewiscugq:
        $quiguswioiaaywey = explode("\x20", stristr(str_replace("\57", "\40", $this->agent), "\151\143\x61\x62"));
        goto guukcysyaquuekek;
        eacseogmmqokmogu:
        if (!(stripos($this->agent, "\151\x63\141\x62") !== false)) {
            goto swuqimcsmiwqaaom;
        }
        goto oswqmcgsewiscugq;
        koakuemcskwaoesy:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto cwyqqgwwmesmkiam;
        gsguoieaewagyogs:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ocesuggkygmwyoqu;
        iimagwawmcgmaoga:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto aaqekekaoaqgkiio;
        ocesuggkygmwyoqu:
        if (!(stripos($this->agent, "\x6f\155\156\x69\x77\x65\142") !== false)) {
            goto qskksaagcgukausc;
        }
        goto amwwumeqoscyamoc;
        amwwumeqoscyamoc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\157\155\x6e\x69\x77\x65\142"));
        goto iimagwawmcgmaoga;
        aomicoqgwkaiosso:
        return true;
        goto sgyogmewgaymcogg;
        ogoiksimykeiuekg:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto aomicoqgwkaiosso;
        aaqekekaoaqgkiio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ogoiksimykeiuekg;
        omagiuciweiemoik:
        return false;
        goto uemcayqyeweiosqw;
        sgyogmewgaymcogg:
        qskksaagcgukausc:
        goto omagiuciweiemoik;
        uemcayqyeweiosqw:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto eiwccayegouiekwk;
        iuumwocuuoyceaks:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto oewqywyeaueuiyes;
        kuimgaokwkqogaqk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto iuumwocuuoyceaks;
        eiwccayegouiekwk:
        if (!(stripos($this->agent, "\120\x68\157\145\156\x69\x78") !== false)) {
            goto ksqsiosguewggcya;
        }
        goto acasskokyagwkumy;
        oewqywyeaueuiyes:
        return true;
        goto ssoogecumeaeekcs;
        ssoogecumeaeekcs:
        wusygegyegamyioq:
        goto ukeaeogwsoackkas;
        osoyyysskuckoocc:
        if (!isset($quiguswioiaaywey[1])) {
            goto wusygegyegamyioq;
        }
        goto kuimgaokwkqogaqk;
        ukeaeogwsoackkas:
        ksqsiosguewggcya:
        goto auaaassweykwwsge;
        auaaassweykwwsge:
        return false;
        goto sqgomkiuekmaykyw;
        acasskokyagwkumy:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\120\150\x6f\145\x6e\151\x78"));
        goto osoyyysskuckoocc;
        sqgomkiuekmaykyw:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto awyuyuuiayqoekkc;
        ykceeqicyiqgssye:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto qwmuiakauycoowya;
        ycaskcwiywemgmay:
        mimmumuekmyyyaug:
        goto icmgwgoywmewyeii;
        awyuyuuiayqoekkc:
        if (!(stripos($this->agent, "\x46\x69\x72\x65\142\151\162\144") !== false)) {
            goto mimmumuekmyyyaug;
        }
        goto eoemqkmecwqsagce;
        icmgwgoywmewyeii:
        return false;
        goto mocwcekscogegcwa;
        eoemqkmecwqsagce:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\106\x69\162\145\142\151\162\144"));
        goto kigsuwkmaacmwgsq;
        qkymmwmmiemiauyg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ykceeqicyiqgssye;
        csgyceiomssoweek:
        ouseosmqaaykkaaw:
        goto ycaskcwiywemgmay;
        kigsuwkmaacmwgsq:
        if (!isset($quiguswioiaaywey[1])) {
            goto ouseosmqaaykkaaw;
        }
        goto qkymmwmmiemiauyg;
        qwmuiakauycoowya:
        return true;
        goto csgyceiomssoweek;
        mocwcekscogegcwa:
    }
    
    protected function aweyeayscomouegw()
    {
        goto aoasogsaqgewacum;
        mogugiawmaoukmak:
        goto aqewaqaseausoewg;
        goto ccokywiouwwmiwse;
        oekaqqseuemcgeqe:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto ikcmeaikkuekumye;
        cciuyoceqiauqsic:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto oekaqqseuemcgeqe;
        weekemioaaygmggw:
        return false;
        goto ycgokycmgosuamok;
        yuaommqaoiseeice:
        ecsuogeauwascies:
        goto cciuyoceqiauqsic;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        ccokywiouwwmiwse:
        aegamiyqqcwuqcyk:
        goto ysmckuskoqmsyaca;
        kyisocwmmwaiwayk:
        if (stripos($this->agent, "\106\x69\162\x65\146\x6f\170") === false && preg_match("\x2f\x4e\x65\164\163\x63\x61\160\145\x36\x3f\134\57\50\x5b\136\x20\x5d\52\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ecsuogeauwascies;
        }
        goto mogugiawmaoukmak;
        uuskeoeuumiigues:
        aqewaqaseausoewg:
        goto weekemioaaygmggw;
        aoasogsaqgewacum:
        if (stripos($this->agent, "\x46\x69\162\x65\146\x6f\170") !== false && preg_match("\x2f\116\x61\x76\x69\x67\141\164\x6f\x72\x5c\57\50\x5b\x5e\40\135\52\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto aegamiyqqcwuqcyk;
        }
        goto kyisocwmmwaiwayk;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        mgqmswesaekqqwiu:
        goto aqewaqaseausoewg;
        goto yuaommqaoiseeice;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        ikcmeaikkuekumye:
        return true;
        goto uuskeoeuumiigues;
        ycgokycmgosuamok:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto meamoqcwwsqiyoqc;
        gmcieuucmgkcoyii:
        return true;
        goto waqwkysqcskykuum;
        waqwkysqcskykuum:
        mqweugciiyyukymg:
        goto yuqemymykuasskoy;
        yuqemymykuasskoy:
        return false;
        goto mmeumymqusiaiugs;
        meamoqcwwsqiyoqc:
        if (!(stripos($this->agent, "\115\157\x7a\151\x6c\154\x61") !== false && preg_match("\x2f\123\150\x69\162\x65\x74\157\x6b\157\134\57\x28\x5b\x5e\40\135\x2a\x29\57\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto mqweugciiyyukymg;
        }
        goto wsmwmwswqaoeaquq;
        aeecqkykiqyuqmyg:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto gmcieuucmgkcoyii;
        wsmwmwswqaoeaquq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aeecqkykiqyuqmyg;
        mmeumymqusiaiugs:
    }
    
    protected function noeygigqkeciickm()
    {
        goto kscocsoaygkcaocq;
        kscocsoaygkcaocq:
        if (!(stripos($this->agent, "\x4d\x6f\x7a\x69\x6c\154\x61") !== false && preg_match("\57\111\x63\145\x43\x61\x74\134\57\x28\x5b\136\40\135\x2a\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto qcqqieuakcakkwem;
        }
        goto akqgwckwiiugwiay;
        qgocscwqkuyemmcw:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto oiuiwkywiekacygs;
        oiuiwkywiekacygs:
        return true;
        goto swusuwwawauqqqae;
        akqgwckwiiugwiay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgocscwqkuyemmcw;
        qmssaeiomssoycas:
        return false;
        goto wamigcygcsucigmi;
        swusuwwawauqqqae:
        qcqqieuakcakkwem:
        goto qmssaeiomssoycas;
        wamigcygcsucigmi:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto iaumckssomaweakk;
        iaumckssomaweakk:
        if (!preg_match("\57\116\x6f\x6b\x69\141\50\133\136\134\x2f\x5d\53\x29\x5c\x2f\50\133\x5e\40\x53\120\x5d\x2b\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto mqqqqeiimsgyacaw;
        }
        goto uqsgmacmweuuwqgy;
        yseikqceqguugaee:
        return false;
        goto uioaeuugwsakiykw;
        smyugaykeesyuakw:
        $this->eywockmuswoykooc(true);
        goto uqemmmykkceucwum;
        uqsgmacmweuuwqgy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qogciqauggmmigia;
        semoayicskccgemw:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto ouigaoeeokmqaqoe;
        ewoywsgmimyigwai:
        kgwewosygiuoiigk:
        goto smyugaykeesyuakw;
        uqemmmykkceucwum:
        return true;
        goto euoqiuygwwssoqou;
        euoqiuygwwssoqou:
        mqqqqeiimsgyacaw:
        goto yseikqceqguugaee;
        myycwmecoyeekeus:
        qmcmakumyemsuoaa:
        goto aaymugikaeaqsaos;
        aaymugikaeaqsaos:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto ewoywsgmimyigwai;
        ouigaoeeokmqaqoe:
        goto kgwewosygiuoiigk;
        goto myycwmecoyeekeus;
        qogciqauggmmigia:
        if (stripos($this->agent, "\x53\x65\162\151\145\163\66\x30") !== false || strpos($this->agent, "\123\66\60") !== false) {
            goto qmcmakumyemsuoaa;
        }
        goto semoayicskccgemw;
        uioaeuugwsakiykw:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto oqqooygakaagaiqw;
        oqqooygakaagaiqw:
        if (!(stripos($this->agent, "\x73\141\x66\141\162\x69") === false)) {
            goto gsiigogemgmesycs;
        }
        goto qaqckwcumcykqcay;
        mkyoiqgumggcsakq:
        goto koiuecgmeyuiwqkk;
        goto oakyyiqquqsccuks;
        qaqckwcumcykqcay:
        if (preg_match("\x2f\120\x61\154\145\155\x6f\157\156\133\x5c\x2f\40\134\50\135\x28\133\136\x20\x3b\x5c\x29\x5d\53\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto rkaswcmccyqqioqs;
        }
        goto giiusoakskiciase;
        yggwmccmmiemueou:
        koiuecgmeyuiwqkk:
        goto cqouacqmcegmykuu;
        koomcmawyuomqmii:
        yseakuykcykcomwg:
        goto smeqeomcqisgssau;
        oakyyiqquqsccuks:
        rkaswcmccyqqioqs:
        goto cwoaoecuqyiccwcw;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        yysucuowuoiskkui:
        $this->aasasueowyemuyoc('');
        goto wguwcgascccyeasu;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto osioeeokiykiemau;
        wkeeueuiysyiqaoq:
        if (preg_match("\57\120\x61\x6c\x65\x6d\x6f\x6f\x6e\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto uiskkgkcyssegigy;
        }
        goto mkyoiqgumggcsakq;
        wcosggqmokuwgomy:
        goto koiuecgmeyuiwqkk;
        goto koomcmawyuomqmii;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        iaksmguwicewykey:
        goto koiuecgmeyuiwqkk;
        goto qegwssscaomyoekg;
        qegwssscaomyoekg:
        uiskkgkcyssegigy:
        goto yysucuowuoiskkui;
        giiusoakskiciase:
        if (preg_match("\57\120\141\154\x65\155\157\157\x6e\x28\133\60\x2d\71\x61\55\172\x41\x2d\132\134\x2e\135\53\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseakuykcykcomwg;
        }
        goto wkeeueuiysyiqaoq;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        aomoesqmwqcyueoa:
        return true;
        goto yggwmccmmiemueou;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        wguwcgascccyeasu:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto aomoesqmwqcyueoa;
        imimwegqkykucuia:
        return false;
        goto iksugmewgigsiaec;
        cqouacqmcegmykuu:
        gsiigogemgmesycs:
        goto imimwegqkykucuia;
        iksugmewgigsiaec:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto omygyywamgusigko;
        gaqigeacswyyikkk:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto qagasowcequukwoc;
        yoqwqkuekiauqsuc:
        if (stripos($this->agent, "\x4d\x6f\x62\151\154\x65") !== false) {
            goto jimwweuekesuemiy;
        }
        goto wousqisikkiooewi;
        wwamkekgkkiogiiu:
        goto ywgwuqyisimkacqe;
        goto miwaaaueiacyqequ;
        sqsgeccoawoeukws:
        iioueceaesegmgyi:
        goto yqyyssciomuwwisa;
        omygyywamgusigko:
        if (!preg_match("\57\x55\x43\40\x3f\x42\x72\157\x77\x73\145\x72\134\x2f\x3f\x28\x5b\134\x64\134\x2e\135\x2b\51\57", $this->agent, $meyiiwcswqmuggyg)) {
            goto iioueceaesegmgyi;
        }
        goto gouiskmmqywoscgm;
        yqyyssciomuwwisa:
        return false;
        goto cskgiyqesqqawuwo;
        baqgcseewusocmom:
        $this->eywockmuswoykooc(true);
        goto akkuysmcasqukkug;
        gouiskmmqywoscgm:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto ewqooaykuauegwio;
        }
        goto uwcawmmgcaecgyqm;
        wousqisikkiooewi:
        $this->icigyueiiwsukmsu(true);
        goto wwamkekgkkiogiiu;
        akkuysmcasqukkug:
        ywgwuqyisimkacqe:
        goto gaqigeacswyyikkk;
        uwcawmmgcaecgyqm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto seyoowocwsqsekqi;
        qagasowcequukwoc:
        return true;
        goto sqsgeccoawoeukws;
        seyoowocwsqsekqi:
        ewqooaykuauegwio:
        goto yoqwqkuekiauqsuc;
        miwaaaueiacyqequ:
        jimwweuekesuemiy:
        goto baqgcseewusocmom;
        cskgiyqesqqawuwo:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto ygoomqwcsggeiuge;
        qoguisoimaueiaoo:
        wgcmsygycukiqmui:
        goto eowkmiqqmqyeayci;
        wcaiuquuswsqacgg:
        ngeuswkcwioygkku:
        goto gqaiguosioisccwm;
        cwycmkkoscmgcecg:
        
        if (!(stripos($this->agent, "\101\156\144\162\157\151\x64") !== false || stripos($this->agent, "\151\120\x68\157\x6e\x65") !== false)) {
            goto wgcmsygycukiqmui;
        }
        goto kiqiskyesywkwkos;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        aksacseyuwyiseay:
        mmomogyaswcsgwwy:
        goto sgaqioqcecwgyikg;
        wgsqeuaooemcuqqu:
        amcioyyyuiigekuo:
        goto wwqoywoqcyikouca;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        cguuomiqwuicsgwa:
        $this->eywockmuswoykooc(true);
        goto yqggmewmakemgkui;
        yqggmewmakemgkui:
        escuksewiugekayq:
        goto qoguisoimaueiaoo;
        kiocmmsiuwcuemyg:
        wwmqgecmsimuecam:
        goto cguuomiqwuicsgwa;
        kiqiskyesywkwkos:
        if (stripos($this->agent, "\x4d\157\x62\151\x6c\145") !== false || stripos($this->agent, "\x54\141\x62\x6c\145\164") !== false) {
            goto wwmqgecmsimuecam;
        }
        goto ksogiaquuskeygaq;
        iammommmgkimyyaa:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto cwycmkkoscmgcecg;
        egqqigmomgaaamqc:
        oymsgiwgeiqguuyy:
        goto agiiusmyqqkgqymk;
        uaigiceqkuiguogo:
        qwyameqoseiywwus:
        goto gseqciagemceawam;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto usaooeqiaewcmyog;
        ygoomqwcsggeiuge:
        if (stripos($this->agent, "\x73\x61\x66\x61\162\x69") === false) {
            goto ngeuswkcwioygkku;
        }
        goto qkqwgsoymmqsqeim;
        aygkuykcicgceciq:
        goto escuksewiugekayq;
        goto kiocmmsiuwcuemyg;
        igsmwamoyswayqiy:
        kaycawgquiieeaiw:
        goto gyomccegicuoyguk;
        qyogimcocyqgyyee:
        goto kmwseockoawqkoao;
        goto aksacseyuwyiseay;
        iqmgswgoooqkkigo:
        usmieesmayeskkmk:
        goto aoosuewasqmmyqoi;
        ksogiaquuskeygaq:
        $this->icigyueiiwsukmsu(true);
        goto aygkuykcicgceciq;
        seggycoceaokwcsa:
        goto kmwseockoawqkoao;
        goto iqmgswgoooqkkigo;
        ymmqwacaoayoyiei:
        $this->eywockmuswoykooc(true);
        goto aqcucyeikgmemsoq;
        wowiaueqaaqckwqq:
        
        if (!(stripos($this->agent, "\101\x6e\144\162\x6f\x69\144") !== false || stripos($this->agent, "\151\120\150\x6f\156\145") !== false)) {
            goto amcioyyyuiigekuo;
        }
        goto yewmigswwuewyqki;
        aoosuewasqmmyqoi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto kwuakeywaocokwig;
        amksqwmicsmyocyw:
        goto kaycawgquiieeaiw;
        goto wcaiuquuswsqacgg;
        gqaiguosioisccwm:
        if (preg_match("\57\106\151\x72\145\x66\157\x78\x5b\x5c\x2f\x20\x5c\x28\x5d\x28\133\x5e\40\73\x5c\51\x5d\53\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto usmieesmayeskkmk;
        }
        goto qwwscygkwwsiocok;
        yewmigswwuewyqki:
        if (stripos($this->agent, "\115\157\x62\x69\154\x65") !== false || stripos($this->agent, "\124\x61\x62\x6c\145\164") !== false) {
            goto sgwiageicumuqwke;
        }
        goto guwmgkcgaoysewyw;
        wggeuckgywqucase:
        if (preg_match("\57\x46\x69\x72\145\x66\157\x78\x24\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto qwyameqoseiywwus;
        }
        goto seggycoceaokwcsa;
        qmycieyiysuesagy:
        return true;
        goto wgiwseywikgwumwe;
        kwuakeywaocokwig:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wowiaueqaaqckwqq;
        aqcucyeikgmemsoq:
        coyskeyoikeaqoek:
        goto wgsqeuaooemcuqqu;
        ciimuiiegyeaggya:
        goto coyskeyoikeaqoek;
        goto gokkyeisqkoccqis;
        qwwscygkwwsiocok:
        if (preg_match("\x2f\106\151\x72\x65\146\157\170\50\x5b\60\x2d\x39\x61\55\x7a\x41\55\132\x5c\56\x5d\53\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mmomogyaswcsgwwy;
        }
        goto wggeuckgywqucase;
        agiiusmyqqkgqymk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iammommmgkimyyaa;
        gseqciagemceawam:
        $this->aasasueowyemuyoc('');
        goto ikiegwiqykqwuykk;
        guwmgkcgaoysewyw:
        $this->icigyueiiwsukmsu(true);
        goto ciimuiiegyeaggya;
        rkoyiagmcaycmwmg:
        goto kaycawgquiieeaiw;
        goto egqqigmomgaaamqc;
        gokkyeisqkoccqis:
        sgwiageicumuqwke:
        goto ymmqwacaoayoyiei;
        ikiegwiqykqwuykk:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto qmycieyiysuesagy;
        kuegskyiyugiuosa:
        goto kmwseockoawqkoao;
        goto uaigiceqkuiguogo;
        eowkmiqqmqyeayci:
        return true;
        goto igsmwamoyswayqiy;
        wgiwseywikgwumwe:
        kmwseockoawqkoao:
        goto rkoyiagmcaycmwmg;
        gyomccegicuoyguk:
        return false;
        goto mquksyyawiwsakwy;
        qkqwgsoymmqsqeim:
        if (preg_match("\57\106\x78\x69\x4f\x53\133\134\57\x20\134\50\x5d\x28\133\136\40\73\134\x29\x5d\x2b\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto oymsgiwgeiqguuyy;
        }
        goto amksqwmicsmyocyw;
        mquksyyawiwsakwy:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto qiocyqceaiyiakii;
        eoewsuaewaeueaks:
        return false;
        goto qscgsguyqggkagoe;
        umacsiiqmwygcycu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto agsoqikgikksqkom;
        qiocyqceaiyiakii:
        if (!(stripos($this->agent, "\111\x63\x65\167\x65\141\163\145\x6c") !== false)) {
            goto mgqockcuascmkosg;
        }
        goto qqaeaoygygacuuos;
        mokuaeasioyuisqs:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto umacsiiqmwygcycu;
        skkmiiyukuqmiimc:
        coosgwiiekamiyug:
        goto uogoykaeoysgmism;
        agsoqikgikksqkom:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto iscqcsqyqkmkgkag;
        qqaeaoygygacuuos:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x49\143\145\x77\145\x61\163\x65\154"));
        goto wasmuqumoqqcmgys;
        uogoykaeoysgmism:
        mgqockcuascmkosg:
        goto eoewsuaewaeueaks;
        iscqcsqyqkmkgkag:
        return true;
        goto skkmiiyukuqmiimc;
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
        kyqewaqymicucwuc:
        ameeyqiguwmykwai:
        goto gwigmqemwuqewiae;
        eoeoqacqgmumwcuk:
        gmeiquwcawwmowwm:
        goto wmssuwyesuyeiows;
        kwkcmwgyiwyacywi:
        preg_match("\57\x72\x76\x3a\x5b\x30\x2d\x39\135\x2e\x5b\60\x2d\71\135\133\x61\55\x62\135\x3f\x2f\151", $this->agent, $quiguswioiaaywey);
        goto siyeyakoauowwose;
        wwwqiimkicqiuwui:
        awceesgmgquwakuu:
        goto qewckkocqykmeywg;
        eyimkecocwsicyge:
        return true;
        goto ooswoacocwcgoagc;
        gwigmqemwuqewiae:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\166\72"));
        goto kkweuygueeaqsksg;
        uciuogooymiyqyao:
        eswswyigkwqaaasy:
        goto msmouyoaqcwsasuw;
        wmssuwyesuyeiows:
        $quiguswioiaaywey = explode("\x20", stristr($this->agent, "\162\x76\72"));
        goto kwkcmwgyiwyacywi;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        oayqqymykwwugkwe:
        return true;
        goto wwwqiimkicqiuwui;
        ymqwkscegcogqqwy:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto oayqqymykwwugkwe;
        eaawsaueyyoiqoao:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eyimkecocwsicyge;
        qewckkocqykmeywg:
        return false;
        goto ugsumemcqucesssg;
        uieyawsyauemyqgy:
        goto awceesgmgquwakuu;
        goto uciuogooymiyqyao;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto iyqmmwymomwqiqaw;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        usaokwsyegousimg:
        if (stripos($this->agent, "\155\x6f\172\151\x6c\x6c\141") !== false && preg_match("\x2f\x72\166\x3a\x5b\60\x2d\71\135\x5c\56\133\60\x2d\71\x5d\x2f\x69", $this->agent) && stripos($this->agent, "\x6e\x65\164\x73\x63\x61\160\x65") === false) {
            goto ameeyqiguwmykwai;
        }
        goto ckgoiwueekyamwcu;
        siyeyakoauowwose:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\72", '', $quiguswioiaaywey[0]));
        goto eaawsaueyyoiqoao;
        msmouyoaqcwsasuw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ymqwkscegcogqqwy;
        uusaeowyacskgumg:
        goto awceesgmgquwakuu;
        goto eoeoqacqgmumwcuk;
        ckgoiwueekyamwcu:
        if (stripos($this->agent, "\x6d\x6f\x7a\x69\x6c\154\x61") !== false && preg_match("\x2f\155\x6f\x7a\151\154\154\x61\x5c\57\50\133\136\40\135\52\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\x6e\145\164\163\143\141\x70\x65") === false) {
            goto eswswyigkwqaaasy;
        }
        goto uusaeowyacskgumg;
        mcukkaquiosmsguy:
        if (stripos($this->agent, "\x6d\x6f\172\x69\x6c\x6c\x61") !== false && preg_match("\x2f\x72\x76\72\133\60\x2d\x39\x5d\x2e\133\x30\x2d\x39\135\133\x61\x2d\142\x5d\x3f\x2f\x69", $this->agent) && stripos($this->agent, "\x6e\145\164\163\x63\x61\160\145") === false) {
            goto gmeiquwcawwmowwm;
        }
        goto usaokwsyegousimg;
        ooswoacocwcgoagc:
        goto awceesgmgquwakuu;
        goto kyqewaqymicucwuc;
        ugsumemcqucesssg:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto cqayoeygyqqamquk;
        cqayoeygyqqamquk:
        if (!(stripos($this->agent, "\x6c\171\x6e\x78") !== false)) {
            goto gyoiekqiqwwquomc;
        }
        goto cmowiicqgqiakqem;
        seswyksiukyeqkqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iieeiugaeeqyaqok;
        qsqskaukgysseokg:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto seswyksiukyeqkqc;
        iieeiugaeeqyaqok:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto eiiemassiceeqmeq;
        cmowiicqgqiakqem:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\114\x79\156\170"));
        goto qsqskaukgysseokg;
        sgwucycigkyieoea:
        gyoiekqiqwwquomc:
        goto ksswuscweggkeiko;
        eiiemassiceeqmeq:
        return true;
        goto sgwucycigkyieoea;
        ksswuscweggkeiko:
        return false;
        goto qsoukmmoqeuqsoee;
        qsoukmmoqeuqsoee:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto mksgcawyikcceiqa;
        eiqmqaiyewsgyois:
        return true;
        goto wekysuykykiweqms;
        gkaykeoacgugeumu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x41\155\141\x79\x61"));
        goto uuqskowyckcgagkc;
        uuqskowyckcgagkc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ukiiyimwmgiqisca;
        }
        goto wwyeoccuqgcgcuuc;
        wekysuykykiweqms:
        ukiiyimwmgiqisca:
        goto kacseggomkeowiqm;
        mksgcawyikcceiqa:
        if (!(stripos($this->agent, "\x61\155\141\x79\141") !== false)) {
            goto ocoaeuqqauqewyig;
        }
        goto gkaykeoacgugeumu;
        iaiekaygcqmocmee:
        return false;
        goto wguukissuqyuqeku;
        yksmaaesmwecwoak:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sgsaqgwgakicwckk;
        sgsaqgwgakicwckk:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto eiqmqaiyewsgyois;
        wwyeoccuqgcgcuuc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yksmaaesmwecwoak;
        kacseggomkeowiqm:
        ocoaeuqqauqewyig:
        goto iaiekaygcqmocmee;
        wguukissuqyuqeku:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto eyowigugugmmkeiw;
        essqemwiweimukwe:
        return true;
        goto uuqaakyqgqwiiwom;
        uuqaakyqgqwiiwom:
        scooeumumiwmgowm:
        goto yiamqaqsueaiqwuq;
        ccsysoygswagacce:
        goto kewymgqeemiuewca;
        goto kgecmyesgkacyyqm;
        yieeukyoaeioqock:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\x65\162\x73\151\157\x6e"));
        goto jawaweyeoaoueooa;
        kgecmyesgkacyyqm:
        ggwywcekieoyeuya:
        goto kycikakmkwkieqwk;
        qkgkkwcagegkwkwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oioqgywuoiaisyuu;
        wayscwykqcwqgqyi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ccsysoygswagacce;
        eyowigugugmmkeiw:
        if (!(stripos($this->agent, "\123\x61\146\141\x72\151") !== false && stripos($this->agent, "\x69\120\x68\157\x6e\x65") === false && stripos($this->agent, "\x69\x50\x6f\x64") === false)) {
            goto scooeumumiwmgowm;
        }
        goto yieeukyoaeioqock;
        jawaweyeoaoueooa:
        if (isset($yikciqwsimweauyg[1])) {
            goto ggwywcekieoyeuya;
        }
        goto wayscwykqcwqgqyi;
        iqymaeimsmwkkkie:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto essqemwiweimukwe;
        yiamqaqsueaiqwuq:
        return false;
        goto mceeomsqguaacseg;
        oioqgywuoiaisyuu:
        kewymgqeemiuewca:
        goto iqymaeimsmwkkkie;
        kycikakmkwkieqwk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qkgkkwcagegkwkwi;
        mceeomsqguaacseg:
    }
    protected function yswggmyigakcackc()
    {
        goto qwmyieguwoysqegw;
        moyywqqiasmyoscc:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto aiyqwwuiayikques;
        gsyquwaygesygkiq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x53\141\x6d\x73\x75\x6e\x67\102\162\157\x77\163\145\x72"));
        goto keyciqmuisymkgcw;
        mcqygaykwaaseack:
        cwcuamqicskkmuyg:
        goto aukkqqimoumiiccy;
        qwmyieguwoysqegw:
        if (!(stripos($this->agent, "\x53\x61\x6d\x73\165\x6e\147\102\x72\x6f\167\x73\x65\162") !== false)) {
            goto qugekewwywkuiqyk;
        }
        goto gsyquwaygesygkiq;
        ascewisaoqauaymk:
        qugekewwywkuiqyk:
        goto kcckgokmwuywmaiw;
        swgqwkyuwoqeyeyu:
        mkumickumqmmkiqc:
        goto ggqwsgmqqyaicosm;
        aiyqwwuiayikques:
        goto cwcuamqicskkmuyg;
        goto swgqwkyuwoqeyeyu;
        ggqwsgmqqyaicosm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iieymwaigukwymsc;
        aukkqqimoumiiccy:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto raigmgqaksaqoosc;
        iieymwaigukwymsc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mcqygaykwaaseack;
        kcckgokmwuywmaiw:
        return false;
        goto iwoquisgaegiocss;
        raigmgqaksaqoosc:
        return true;
        goto ascewisaoqauaymk;
        keyciqmuisymkgcw:
        if (isset($yikciqwsimweauyg[1])) {
            goto mkumickumqmmkiqc;
        }
        goto moyywqqiasmyoscc;
        iwoquisgaegiocss:
    }
    protected function uiwkymoksesuumwe()
    {
        goto oakguomioocmeiia;
        uqieceoogswuggos:
        yccweyyksqycwuqi:
        goto mmuomyiooicyqscg;
        kakgceiyakaueuww:
        goto qoamoegiiwismakk;
        goto uqieceoogswuggos;
        wuoaeksukwwaycoi:
        qoamoegiiwismakk:
        goto eusmcuqiciwcooss;
        oakguomioocmeiia:
        if (!(stripos($this->agent, "\x53\x69\x6c\153") !== false)) {
            goto wqswcaeeyeaqieom;
        }
        goto yuyccgsguyaaygmu;
        emaeckumgkmgcaew:
        return false;
        goto wiamyucsaoosmoei;
        eiissuweooqsaauy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto kakgceiyakaueuww;
        smagqkegqiooysya:
        if (isset($yikciqwsimweauyg[1])) {
            goto yccweyyksqycwuqi;
        }
        goto eiissuweooqsaauy;
        eusmcuqiciwcooss:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto gamusuoqieekieka;
        mmuomyiooicyqscg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yegcwkkemkycyuua;
        yegcwkkemkycyuua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wuoaeksukwwaycoi;
        dwyqyusgqwqwomqk:
        wqswcaeeyeaqieom:
        goto emaeckumgkmgcaew;
        gamusuoqieekieka:
        return true;
        goto dwyqyusgqwqwomqk;
        yuyccgsguyaaygmu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\x69\x6c\x6b"));
        goto smagqkegqiooysya;
        wiamyucsaoosmoei:
    }
    protected function cgqcukygysieeqko()
    {
        goto ysoiwegyoqymuuek;
        wacgcmsgismsomma:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckguemuwukmeycag;
        qquimmcqqiyegcym:
        akqsaiecouuqacks:
        goto qkeuasieckwuqseq;
        cucsooyoayssmcas:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x49\x66\162\x61\155\145\x6c\171"));
        goto mkywwqusckeeisiy;
        qskoquwmkkgkkmuy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qyskykugeiqkauce;
        qkeuasieckwuqseq:
        return false;
        goto ouaokeyacuscccyu;
        muouqwckwywsgiwg:
        return true;
        goto qquimmcqqiyegcym;
        ysoiwegyoqymuuek:
        if (!(stripos($this->agent, "\111\x66\162\x61\155\145\154\x79") !== false)) {
            goto akqsaiecouuqacks;
        }
        goto cucsooyoayssmcas;
        qyskykugeiqkauce:
        goto oqqscigyquseosya;
        goto cguckckouuwacmow;
        cguckckouuwacmow:
        iiwmmqqaqckwwiqe:
        goto wacgcmsgismsomma;
        ayqocaaesmkygque:
        oqqscigyquseosya:
        goto usaseckaaaugcygu;
        mkywwqusckeeisiy:
        if (isset($yikciqwsimweauyg[1])) {
            goto iiwmmqqaqckwwiqe;
        }
        goto qskoquwmkkgkkmuy;
        usaseckaaaugcygu:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto muouqwckwywsgiwg;
        ckguemuwukmeycag:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ayqocaaesmkygque;
        ouaokeyacuscccyu:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto eeqsuowcmyeyuoqw;
        kggwwgeqkgwyoseq:
        ikcsgymqsagymgco:
        goto kuqeksgikkymkyeo;
        wwiysyawwqeuikcc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto soqmkkwmmkqiweau;
        ymcqcaygueguiuig:
        iywyeuaaoaeymmag:
        goto eiwuwemqmigskwoe;
        eeqsuowcmyeyuoqw:
        if (!(stripos($this->agent, "\x43\x6f\143\157\141\x52\145\x73\164\x43\154\x69\x65\x6e\164") !== false)) {
            goto ikcsgymqsagymgco;
        }
        goto auaukkuskuciowkq;
        wygcwcywyeosuemq:
        goto wsiggqyeiueeyqyu;
        goto ymcqcaygueguiuig;
        eiwuwemqmigskwoe:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wwiysyawwqeuikcc;
        auaukkuskuciowkq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x43\x6f\143\157\x61\122\145\163\164\103\154\x69\x65\x6e\x74"));
        goto osygawsacakgggko;
        soqmkkwmmkqiweau:
        wsiggqyeiueeyqyu:
        goto sqwwkouiqayeqeyo;
        sqwwkouiqayeqeyo:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto oqoyyooooyegowuk;
        kuqeksgikkymkyeo:
        return false;
        goto aogimqgcygkugqoc;
        oqoyyooooyegowuk:
        return true;
        goto kggwwgeqkgwyoseq;
        osygawsacakgggko:
        if (isset($yikciqwsimweauyg[1])) {
            goto iywyeuaaoaeymmag;
        }
        goto iwwouqosmwummgsi;
        iwwouqosmwummgsi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wygcwcywyeosuemq;
        aogimqgcygkugqoc:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto gkkogauyaimaaoky;
        qioeweaouoiyoayy:
        return true;
        goto ssyeoucmcqaewkws;
        ckyyyqokcocsmium:
        $this->oqgqmcogeugkakss(true);
        goto qioeweaouoiyoayy;
        gkkogauyaimaaoky:
        if (!stristr($this->agent, "\x46\141\x63\145\x62\157\x6f\153\x45\170\x74\x65\x72\x6e\x61\154\110\151\x74")) {
            goto kwmkgoegswsseyia;
        }
        goto akocagcmqwymsqqw;
        ssyeoucmcqaewkws:
        kwmkgoegswsseyia:
        goto gukuouumaoiiugiw;
        gukuouumaoiiugiw:
        return false;
        goto ayyeoeyyawiuiukq;
        akocagcmqwymsqqw:
        $this->aasmeayouwmacaow(true);
        goto ckyyyqokcocsmium;
        ayyeoeyyawiuiukq:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto gosqmqqycwquosse;
        gosqmqqycwquosse:
        if (!stristr($this->agent, "\x46\102\x49\x4f\x53")) {
            goto soyeimgmemqugquc;
        }
        goto cwgiecqggoksyuko;
        cwgiecqggoksyuko:
        $this->oqgqmcogeugkakss(true);
        goto kekiekeeqkowaiga;
        kekiekeeqkowaiga:
        return true;
        goto wscoawgsgqekweuq;
        wscoawgsgqekweuq:
        soyeimgmemqugquc:
        goto ysuyamauyegkceea;
        ysuyamauyegkceea:
        return false;
        goto wqmmaiwyoumwmiyi;
        wqmmaiwyoumwmiyi:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto iuugeqgkacqmuais;
        iuugeqgkacqmuais:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\x65\x72\x73\x69\157\156"));
        goto eqocwcasskyqeauu;
        kkiiykemaoeswsay:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto uiseoyicaoyaokum;
        uiseoyicaoyaokum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oyswaymeoiouuaoo;
        gqsmmaqkuciiwwki:
        return false;
        goto yuokckkqcuumcmua;
        eqocwcasskyqeauu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oaoaskeocoucoaes;
        }
        goto kkiiykemaoeswsay;
        ycagakkcsskiqweu:
        oaoaskeocoucoaes:
        goto gqsmmaqkuciiwwki;
        oyswaymeoiouuaoo:
        return true;
        goto ycagakkcsskiqweu;
        yuokckkqcuumcmua:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto ssciauiqmswaugss;
        gousoguwcwieyseq:
        return false;
        goto wouosmamsmggekic;
        keuamggsqkcwyoqi:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto uywiwaiokksgwuqm;
        ikumyeymcsyyuauw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto keuamggsqkcwyoqi;
        messwieuimiowsag:
        imumueocakucecam:
        goto gousoguwcwieyseq;
        ssciauiqmswaugss:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x43\x72\x69\117\x53"));
        goto aykkiwwmmckueiak;
        uywiwaiokksgwuqm:
        return true;
        goto messwieuimiowsag;
        gmiywscmoiqcceks:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikumyeymcsyyuauw;
        aykkiwwmmckueiak:
        if (!isset($yikciqwsimweauyg[1])) {
            goto imumueocakucecam;
        }
        goto gmiywscmoiqcceks;
        wouosmamsmggekic:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto ykqeyymweawywsia;
        aooeicywwyscawue:
        $this->iqsiguacookiqwcs();
        goto qemqoaymwywkewmy;
        eekkyoakqmykcqec:
        yisqaaicegsokeuk:
        goto ismcyiwkmqaaygge;
        emsgawiqsesiiccg:
        return true;
        goto eekkyoakqmykcqec;
        qemqoaymwywkewmy:
        $this->ssquiwqwwcgcqiic();
        goto lwaoqwcmyiqkkouw;
        yyagogoiskcuomuq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto cwmsekismgywawai;
        ismcyiwkmqaaygge:
        return false;
        goto wugyaiqayoamwacg;
        lwaoqwcmyiqkkouw:
        $this->eywockmuswoykooc(true);
        goto emsgawiqsesiiccg;
        cwmsekismgywawai:
        $this->uewoqoqkekmsyoeo();
        goto aooeicywwyscawue;
        ykqeyymweawywsia:
        if (!(stripos($this->agent, "\151\x50\150\157\156\145") !== false)) {
            goto yisqaaicegsokeuk;
        }
        goto awoyakoygoouaqgi;
        awoyakoygoouaqgi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto yyagogoiskcuomuq;
        wugyaiqayoamwacg:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto qwscyqgokmkeqwuq;
        soiuksqqwmsqwyeq:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto kiauseesqiwimyue;
        qwscyqgokmkeqwuq:
        if (!(stripos($this->agent, "\151\120\x61\x64") !== false)) {
            goto secssyuygoycmiqa;
        }
        goto syosmkmiyacocysi;
        usscqwyeesggymse:
        return true;
        goto okmmkcokmyiqkceg;
        qyaiyoskqmqyyuos:
        $this->ssquiwqwwcgcqiic();
        goto syookwiaqwmsaoem;
        kiauseesqiwimyue:
        $this->uewoqoqkekmsyoeo();
        goto sokqsksiecasgugs;
        okmmkcokmyiqkceg:
        secssyuygoycmiqa:
        goto uguwgicugawycckm;
        sokqsksiecasgugs:
        $this->iqsiguacookiqwcs();
        goto qyaiyoskqmqyyuos;
        uguwgicugawycckm:
        return false;
        goto wskgeycusaokeymw;
        syosmkmiyacocysi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soiuksqqwmsqwyeq;
        syookwiaqwmsaoem:
        $this->icigyueiiwsukmsu(true);
        goto usscqwyeesggymse;
        wskgeycusaokeymw:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto guuowemmmmcgukow;
        kgmwwkoiqwyscmys:
        $this->eywockmuswoykooc(true);
        goto wcuqqmycwwoqwwga;
        wcuqqmycwwoqwwga:
        return true;
        goto woiqioceiyccoyyi;
        woiqioceiyccoyyi:
        kmwwukmymssqakuk:
        goto kqaemkmmqkyeweye;
        okgoksuuouqmmqog:
        $this->ssquiwqwwcgcqiic();
        goto kgmwwkoiqwyscmys;
        sgkeayimkgeyaqic:
        $this->uewoqoqkekmsyoeo();
        goto wyqemyugccycgaso;
        wyqemyugccycgaso:
        $this->iqsiguacookiqwcs();
        goto okgoksuuouqmmqog;
        guuowemmmmcgukow:
        if (!(stripos($this->agent, "\151\120\x6f\144") !== false)) {
            goto kmwwukmymssqakuk;
        }
        goto yycskqumwcimyyye;
        yycskqumwcimyyye:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qiayswmiyoqisyac;
        kqaemkmmqkyeweye:
        return false;
        goto kmggqcwmkwwcuioa;
        qiayswmiyoqisyac:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto sgkeayimkgeyaqic;
        kmggqcwmkwwcuioa:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto yqiyiacommmwsuce;
        womwoaskosgsauog:
        goto aqcwmswmgmgqokmu;
        goto wiuyqgeaacmksuqq;
        sisuqeisegegcsiy:
        return true;
        goto yammukygywskcuey;
        yammukygywskcuey:
        iuaaiqsmgoqiscio:
        goto yusmiciysquiqayq;
        yymscyccyaauqiaa:
        aqcwmswmgmgqokmu:
        goto owayquiaceqooaiq;
        squaugeowuwyumqu:
        gssmokgwcmqesyao:
        goto kumioksgmqmsaeqy;
        owayquiaceqooaiq:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto sisuqeisegegcsiy;
        sskqokueeqgsuumq:
        if (stripos($this->agent, "\115\x6f\142\151\x6c\x65") !== false) {
            goto yecageyyqwumqoca;
        }
        goto ysuagggqaicqyguk;
        ikkseymmmeooqmcm:
        if (isset($yikciqwsimweauyg[1])) {
            goto gssmokgwcmqesyao;
        }
        goto cimakcokyqkmyiau;
        msasquyamakaamys:
        $this->eywockmuswoykooc(true);
        goto yymscyccyaauqiaa;
        ysuagggqaicqyguk:
        $this->icigyueiiwsukmsu(true);
        goto womwoaskosgsauog;
        kumioksgmqmsaeqy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckkwwiuyquomkcku;
        yqiyiacommmwsuce:
        if (!(stripos($this->agent, "\x41\156\144\162\x6f\x69\x64") !== false)) {
            goto iuaaiqsmgoqiscio;
        }
        goto kweqeekeouiqocqw;
        soqyakgcqemouuko:
        goto agwcwemswacqgqyk;
        goto squaugeowuwyumqu;
        yemgimowqwsuqegu:
        agwcwemswacqgqyk:
        goto sskqokueeqgsuumq;
        wiuyqgeaacmksuqq:
        yecageyyqwumqoca:
        goto msasquyamakaamys;
        yusmiciysquiqayq:
        return false;
        goto gquuqqacuqsgsyqc;
        ckkwwiuyquomkcku:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yemgimowqwsuqegu;
        cimakcokyqkmyiau:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soqyakgcqemouuko;
        kweqeekeouiqocqw:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x41\x6e\144\x72\157\x69\x64"));
        goto ikkseymmmeooqmcm;
        gquuqqacuqsgsyqc:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto qikuwygeoaimcukg;
        ceiseomqooekseuo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\151\166\x61\x6c\x64\x69"));
        goto siaqsogicwwmayco;
        csuikuskoecgsymk:
        return false;
        goto eeieacyyeywwyewo;
        iewuyuigwmkcmcas:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto qekesyoouukaciyy;
        siaqsogicwwmayco:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qysqqycgiwmucggw;
        }
        goto umyuckgysaegimue;
        ewgqscsiomaciyew:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iewuyuigwmkcmcas;
        sccmgumeswegawyk:
        okacoggoqgoomuyc:
        goto csuikuskoecgsymk;
        sesgwayockkaakwm:
        qysqqycgiwmucggw:
        goto sccmgumeswegawyk;
        qikuwygeoaimcukg:
        if (!(stripos($this->agent, "\x56\x69\x76\141\154\144\x69") !== false)) {
            goto okacoggoqgoomuyc;
        }
        goto ceiseomqooekseuo;
        qekesyoouukaciyy:
        return true;
        goto sesgwayockkaakwm;
        umyuckgysaegimue:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ewgqscsiomaciyew;
        eeieacyyeywwyewo:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto ugkesgkkcqcasmoq;
        qqsiimkqkguqkeag:
        mioiqgkakcguokqa:
        goto eicqsqkmeaimooii;
        giawgsomaouqgiyc:
        goto wwaocaooaayqamsu;
        goto mquyowqsoawycyok;
        yikaomgieukoawws:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kuyowuyquoioeqoc;
        gaomwgqgumkcqawg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\102\x72\157\167\163\x65\162"));
        goto ysoeqwagkauquwme;
        ykwmoaqmwggiqmsk:
        wyimgokwakggwuoi:
        goto yymiwwumowysiagy;
        mquyowqsoawycyok:
        gcgyqiaawwccgqaw:
        goto aeycoymkqiwogwag;
        cgqqkkwugmiqyiow:
        goto wwaocaooaayqamsu;
        goto ykwmoaqmwggiqmsk;
        umkyqiyguqoauyek:
        return false;
        goto eceqcqseqcswkywu;
        ommoqequygggywyi:
        return true;
        goto miayoysigsgumwyi;
        oymuyuskiqyacysw:
        if (stripos($this->agent, "\x4d\157\x62\151\154\x65") !== false) {
            goto gcgyqiaawwccgqaw;
        }
        goto koceigseyecoyoia;
        eicqsqkmeaimooii:
        $this->icigyueiiwsukmsu(true);
        goto giawgsomaouqgiyc;
        uwkiseisiuqsoqsa:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yikaomgieukoawws;
        msqmyqgiaeeeoeco:
        yyimqwkqigowmcco:
        goto umkyqiyguqoauyek;
        yymiwwumowysiagy:
        $this->icigyueiiwsukmsu(true);
        goto qsacucessyquaame;
        aucmemccqucmicwm:
        goto wwaocaooaayqamsu;
        goto qqsiimkqkguqkeag;
        koceigseyecoyoia:
        if (stripos($this->agent, "\101\156\144\x72\157\x69\x64") !== false) {
            goto wyimgokwakggwuoi;
        }
        goto aucmemccqucmicwm;
        kuyowuyquoioeqoc:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto suessqeuiasoqioi;
        suessqeuiasoqioi:
        if (stripos($this->agent, "\151\x50\x61\x64") !== false) {
            goto mioiqgkakcguokqa;
        }
        goto oymuyuskiqyacysw;
        ugkesgkkcqcasmoq:
        if (!(stripos($this->agent, "\x59\x61\102\162\157\x77\163\145\162") !== false)) {
            goto yyimqwkqigowmcco;
        }
        goto gaomwgqgumkcqawg;
        miayoysigsgumwyi:
        scqaokckckemicqi:
        goto msqmyqgiaeeeoeco;
        aeycoymkqiwogwag:
        $this->eywockmuswoykooc(true);
        goto cgqqkkwugmiqyiow;
        ysoeqwagkauquwme:
        if (!isset($yikciqwsimweauyg[1])) {
            goto scqaokckckemicqi;
        }
        goto uwkiseisiuqsoqsa;
        qsacucessyquaame:
        wwaocaooaayqamsu:
        goto ommoqequygggywyi;
        eceqcqseqcswkywu:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto ciewwguuyumcisme;
        ywuwweugeccmeuqk:
        eyekywukwqucywcm:
        goto iwacoiqoegwuaoqo;
        iwgksuqmosckeqys:
        if (!isset($yikciqwsimweauyg[0])) {
            goto qugmeamkemckgqwo;
        }
        goto sayicwyqgigeswug;
        uwwiiwscccuowuoq:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\120\154\141\x79\123\x74\141\x74\151\157\x6e\x20"));
        goto uyymyaogieaawaig;
        qmisymqoqmqocwoe:
        $this->eywockmuswoykooc(true);
        goto mcygcucugmyqswys;
        iwacoiqoegwuaoqo:
        return false;
        goto wkmmaysiigyuyimk;
        gqomqwuiesioaaaq:
        qugmeamkemckgqwo:
        goto ywuwweugeccmeuqk;
        mcygcucugmyqswys:
        uuweusyuygicyoik:
        goto sieaoicuiusscywg;
        sayicwyqgigeswug:
        $quiguswioiaaywey = explode("\x29", $yikciqwsimweauyg[2]);
        goto ccmmogiaggiuewmu;
        ccmmogiaggiuewmu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto syqgqkeomqsysaey;
        sieaoicuiusscywg:
        return true;
        goto gqomqwuiesioaaaq;
        uyymyaogieaawaig:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto iwgksuqmosckeqys;
        ciewwguuyumcisme:
        if (!(stripos($this->agent, "\x50\x6c\x61\x79\123\x74\141\x74\x69\x6f\156\40") !== false)) {
            goto eyekywukwqucywcm;
        }
        goto uwwiiwscccuowuoq;
        syqgqkeomqsysaey:
        if (!(stripos($this->agent, "\x50\x6f\x72\164\x61\142\154\145\x29") !== false || stripos($this->agent, "\x56\151\164\x61") !== false)) {
            goto uuweusyuygicyoik;
        }
        goto qmisymqoqmqocwoe;
        wkmmaysiigyuyimk:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto imgwqyoiweuiwiec;
        imgwqyoiweuiwiec:
        if (!preg_match("\x21\x5e\127\147\145\x74\x2f\x28\x5b\x5e\40\135\x2b\51\x21\151", $this->agent, $yikciqwsimweauyg)) {
            goto igcukieyogyaqwyo;
        }
        goto kwsagikwoqogqecc;
        qmqsccegugoiyaiu:
        return true;
        goto ggqeyyoscwueysku;
        ggqeyyoscwueysku:
        igcukieyogyaqwyo:
        goto qqsmygoumegcogay;
        wicaemaewwoooiuq:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto qmqsccegugoiyaiu;
        kwsagikwoqogqecc:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto wicaemaewwoooiuq;
        qqsmygoumegcogay:
        return false;
        goto qykkceysyessasey;
        qykkceysyessasey:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto wsgkqgogymcgueag;
        iyqcgqusyeiiaiai:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iwyoaksegwaksmsu;
        }
        goto sukiqmyemewakiao;
        yeqmmgegmqgwyaea:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mkycqgqaawooaaeu;
        okqmcygoiwaesmis:
        sucmgqcacggcucec:
        goto kkecucquwauqqyku;
        kkecucquwauqqyku:
        return false;
        goto gqcyummwsikcccom;
        uyiaqakwuswweqme:
        return true;
        goto ecusscoueakqaqsu;
        wsgkqgogymcgueag:
        if (!(strpos($this->agent, "\x63\165\x72\x6c") === 0)) {
            goto sucmgqcacggcucec;
        }
        goto eimqoqgqmsiokyeq;
        mkycqgqaawooaaeu:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto uyiaqakwuswweqme;
        ecusscoueakqaqsu:
        iwyoaksegwaksmsu:
        goto okqmcygoiwaesmis;
        eimqoqgqmsiokyeq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\143\165\x72\154"));
        goto iyqcgqusyeiiaiai;
        sukiqmyemewakiao:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yeqmmgegmqgwyaea;
        gqcyummwsikcccom:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto owkougkyymiwoaqu;
        esscoiyogsoqoquc:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto gciescsgqiuoqkim;
        cugaeomiskasooic:
        goto miqaocyiuwmyyycc;
        goto yeeicocmyyaeksys;
        yysewcsossqsackg:
        $this->platform = self::PLATFORM_BEOS;
        goto qycwawiicimecwsq;
        yeeicocmyyaeksys:
        yioawsqawmqagueg:
        goto imwweegoasykooim;
        ymucyiowcaqucyom:
        uwegawkagcagoeiw:
        goto gooiuuagswggewoq;
        icyocwacicqauogu:
        if (stripos($this->agent, "\x61\x6e\144\162\x6f\151\x64") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\x74\166\x4f\123") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        smmqcueceqkiggkm:
        $this->platform = self::PLATFORM_OPENBSD;
        goto ggcmqkuwqkkkmcgu;
        maokeqaksuookoao:
        $this->platform = self::PLATFORM_WINDOWS;
        goto emooiegicmmqkwsg;
        mcqoyigqsewkkwgc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto eiguqiumekikicuw;
        asksckakmysykiue:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto yeigmocusoouscsa;
        yaaisamcwuuowiua:
        miqaocyiuwmyyycc:
        goto acoqamisuacwkqyo;
        qycwawiicimecwsq:
        goto miqaocyiuwmyyycc;
        goto eweqcaymckiwaccw;
        eccymasqomswiwug:
        $this->platform = self::PLATFORM_I_FRAME;
        goto yaaisamcwuuowiua;
        eayyeuwawewcqcom:
        syqyosyywqwgoeoo:
        goto esscoiyogsoqoquc;
        uyauemouyweqqkwu:
        oyioakacwwceegie:
        goto gkcqueouksaqceqw;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\102\154\x61\x63\153\x42\145\x72\x72\171") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\151\x50\157\x64") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        esqckkawqugyqimw:
        goto miqaocyiuwmyyycc;
        goto wksuqaqsicwqekuy;
        aceouusygqicksgk:
        seaqqywowweasaoa:
        goto yysewcsossqsackg;
        awumcmmeumuaiocw:
        if (stripos($this->agent, "\x50\x6f\163\x74\155\x61\x6e\122\165\x6e\164\x69\155\x65") !== false) {
            goto woqqukymqiuyququ;
        }
        goto oguaeaawigyoscii;
        wksuqaqsicwqekuy:
        kmgqqgsuiwcyccak:
        goto gusogiqwmwgywamm;
        aoemyociekskwmke:
        goto miqaocyiuwmyyycc;
        goto cyqeeaiwumyekkce;
        myiogoqascwcikcc:
        goto miqaocyiuwmyyycc;
        goto mkeuwsqceweiacum;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\x4e\145\164\102\123\104") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        siaweewywmuayyks:
        muicsociwumgosaw:
        goto iiyysuksmomyyuye;
        ogugiciyicewkyue:
        $this->platform = self::PLATFORM_ANDROID;
        goto ciwyuyksieuuqiee;
        yukieguwkeesieiy:
        goto miqaocyiuwmyyycc;
        goto cwceosugiiyyauqi;
        cekocgmmwuacyckg:
        if (stripos($this->agent, "\157\153\x68\164\164\160") !== false) {
            goto acysyqkmkgaoewci;
        }
        goto awumcmmeumuaiocw;
        iiyysuksmomyyuye:
        $this->platform = self::PLATFORM_IPHONE;
        goto cugaeomiskasooic;
        muycacscoqikyasc:
        goto miqaocyiuwmyyycc;
        goto uyauemouyweqqkwu;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\102\x65\117\x53") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\167\151\x6e") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\117\123\134\x2f\62") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        mokkeuemqauoaskk:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto emeoasammuwaesws;
        meiykooeimaqqico:
        if (stripos($this->agent, "\120\154\x61\171\163\x74\x61\164\151\157\156") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        eweqcaymckiwaccw:
        scoouaqeoeicswwu:
        goto maokeqaksuookoao;
        gooiuuagswggewoq:
        $this->platform = self::PLATFORM_IPAD;
        goto ukmeggiqssyyyuku;
        icoqeuawskkosskw:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto qcaqeqscugwwgyci;
        msqycwkyqqeyqoka:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto wgcyyuswcmkwyaky;
        mkeuwsqceweiacum:
        acysyqkmkgaoewci:
        goto icoqeuawskkosskw;
        aeeiacomeyceesoe:
        if (stripos($this->agent, "\143\165\162\x6c") !== false) {
            goto ymyoskqgyeykqmom;
        }
        goto seeosigigeuueiqy;
        eccgyquwkmumeyea:
        aacemqiqgqoyokmi:
        goto awiomycussysmike;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\154\x69\156\x75\x78") !== false && stripos($this->agent, "\123\115\x41\122\x54\55\x54\126") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        ueqauuccggkgcyqo:
        $this->platform = self::PLATFORM_IPHONE . "\x2f" . self::PLATFORM_IPAD;
        goto mmqioecsyukkcgoo;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\x77\151\156\144\157\167\x73") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        oaoummcgooyceayi:
        goto miqaocyiuwmyyycc;
        goto siaweewywmuayyks;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\123\x69\x6c\153") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\106\x72\x65\145\x42\123\x44") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        ksqmykkeymqwoacg:
        kycoymqmaukeekum:
        goto imyycasecqwmeuew;
        kyqkigouggegscsi:
        aycyoqqqwmyciise:
        goto igiuieggauocicsg;
        eiguqiumekikicuw:
        goto miqaocyiuwmyyycc;
        goto wwauaucuwsokocmm;
        muiouqmomamguoce:
        if (stripos($this->agent, "\151\x50\x61\144") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        gkcqueouksaqceqw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto aaecacwqmsoowcsi;
        gusogiqwmwgywamm:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto muycacscoqikyasc;
        kqmqqomaqawisweo:
        goto miqaocyiuwmyyycc;
        goto wyokgowugcsiigum;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\122\157\x6b\x75") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        ukmcukgkakisecyk:
        goto miqaocyiuwmyyycc;
        goto cyaomwaqoaiiqqes;
        imyycasecqwmeuew:
        $this->platform = self::PLATFORM_SUNOS;
        goto wmcckwsaaemkqweg;
        awiomycussysmike:
        $this->platform = self::PLATFORM_LINUX;
        goto ukmcukgkakisecyk;
        emooiegicmmqkwsg:
        goto miqaocyiuwmyyycc;
        goto qcqgakkooouyiooi;
        oguaeaawigyoscii:
        if (stripos($this->agent, "\111\146\162\x61\155\x65\154\171") !== false) {
            goto ycskcusgcyeowagm;
        }
        goto mougyosiwyugsymo;
        wyokgowugcsiigum:
        ymyoskqgyeykqmom:
        goto uiqoeooowosqagsw;
        mmqioecsyukkcgoo:
        goto miqaocyiuwmyyycc;
        goto eiskwkcoggkikmcc;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\x53\165\156\x4f\123") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        akayacsmoiwoaeqm:
        coakwcyymiqcmwug:
        goto ueqauuccggkgcyqo;
        qcqgakkooouyiooi:
        ugccoisuygekiaae:
        goto mokkeuemqauoaskk;
        yeigmocusoouscsa:
        goto miqaocyiuwmyyycc;
        goto ksqmykkeymqwoacg;
        guquqeyggoqqkgkm:
        gsyegqcsyscyycic:
        goto smmqcueceqkiggkm;
        ukmeggiqssyyyuku:
        goto miqaocyiuwmyyycc;
        goto kyqkigouggegscsi;
        ciwyuyksieuuqiee:
        goto miqaocyiuwmyyycc;
        goto eayyeuwawewcqcom;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\x4f\160\145\x6e\123\x6f\x6c\x61\162\151\x73") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        syiwqmwwoemuyeou:
        goto miqaocyiuwmyyycc;
        goto cgqiesaeskmuwwcy;
        gyawuaoseweeioce:
        kwewaoocuqgaseoa:
        goto kouowucggykwmwgw;
        emeoasammuwaesws:
        goto miqaocyiuwmyyycc;
        goto mqmowgywwygssysy;
        cmooymowqeusayua:
        goto miqaocyiuwmyyycc;
        goto aceouusygqicksgk;
        cgqiesaeskmuwwcy:
        gwoqyokuiqqwugsk:
        goto sgssyyueamgacywm;
        aaecacwqmsoowcsi:
        goto miqaocyiuwmyyycc;
        goto guquqeyggoqqkgkm;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\x6d\x61\x63") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        wgcyyuswcmkwyaky:
        goto miqaocyiuwmyyycc;
        goto eccgyquwkmumeyea;
        cyaomwaqoaiiqqes:
        eequuumweyqioygw:
        goto acmaiqeukwiqqyms;
        imagekgwsuqccwgo:
        $this->platform = self::PLATFORM_WINDOWS;
        goto eouqmgocqewmwgik;
        wmcckwsaaemkqweg:
        goto miqaocyiuwmyyycc;
        goto iqucsoqomgkeuyco;
        kouowucggykwmwgw:
        $this->platform = self::PLATFORM_NETBSD;
        goto aoemyociekskwmke;
        eouqmgocqewmwgik:
        goto miqaocyiuwmyyycc;
        goto ymucyiowcaqucyom;
        qcaqeqscugwwgyci:
        goto miqaocyiuwmyyycc;
        goto qsikciasasogymew;
        acmaiqeukwiqqyms:
        $this->platform = self::PLATFORM_NOKIA;
        goto esqckkawqugyqimw;
        qsikciasasogymew:
        woqqukymqiuyququ:
        goto mcqoyigqsewkkwgc;
        mougyosiwyugsymo:
        goto miqaocyiuwmyyycc;
        goto iouagkwueekusiwi;
        seeosigigeuueiqy:
        if (stripos($this->agent, "\x43\x72\x4f\123") !== false) {
            goto gwoqyokuiqqwugsk;
        }
        goto cekocgmmwuacyckg;
        hsuemysceewomeuc:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto kqmqqomaqawisweo;
        cyqeeaiwumyekkce:
        gawseeswkisqiwoe:
        goto asksckakmysykiue;
        kgwaccmcscsusase:
        sskkqsmyqmgyewue:
        goto msqycwkyqqeyqoka;
        emiuesoeeiqysuay:
        $this->platform = self::PLATFORM_ROKU;
        goto qoyywwueqcmomgio;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\151\x50\150\x6f\156\x65") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        cwceosugiiyyauqi:
        acuiieocsgiyakia:
        goto ogugiciyicewkyue;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\154\151\x6e\x75\170") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        ggcmqkuwqkkkmcgu:
        goto miqaocyiuwmyyycc;
        goto gyawuaoseweeioce;
        sgssyyueamgacywm:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto myiogoqascwcikcc;
        qoyywwueqcmomgio:
        goto miqaocyiuwmyyycc;
        goto akayacsmoiwoaeqm;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\x69\117\123") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\116\157\153\x69\x61") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        iqucsoqomgkeuyco:
        oesgciyeoewgouki:
        goto auuogsqacsimiksi;
        igiuieggauocicsg:
        $this->platform = self::PLATFORM_IPOD;
        goto oaoummcgooyceayi;
        uiqoeooowosqagsw:
        $this->platform = self::PLATFORM_TERMINAL;
        goto syiwqmwwoemuyeou;
        auuogsqacsimiksi:
        $this->platform = self::PLATFORM_OS2;
        goto cmooymowqeusayua;
        wwauaucuwsokocmm:
        ycskcusgcyeowagm:
        goto eccymasqomswiwug;
        gciescsgqiuoqkim:
        goto miqaocyiuwmyyycc;
        goto kgwaccmcscsusase;
        imwweegoasykooim:
        $this->platform = self::PLATFORM_APPLE;
        goto yukieguwkeesieiy;
        eiskwkcoggkikmcc:
        iacwiwmoggwseqsa:
        goto hsuemysceewomeuc;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\117\160\145\156\x42\123\104") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        iouagkwueekusiwi:
        cguaokskycyggqym:
        goto imagekgwsuqccwgo;
        mqmowgywwygssysy:
        gqwemyquuwgqcaic:
        goto emiuesoeeiqysuay;
        acoqamisuacwkqyo:
    }
}
