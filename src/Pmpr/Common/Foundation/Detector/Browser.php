<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const BROWSER_UNKNOWN = "\x75\156\153\x6e\x6f\x77\x6e";
    const VERSION_UNKNOWN = "\x75\x6e\x6b\x6e\157\167\x6e";
    const BROWSER_OPERA = "\x4f\160\145\162\141";
    
    const BROWSER_OPERA_MINI = "\x4f\x70\x65\162\x61\40\x4d\x69\x6e\x69";
    
    const BROWSER_WEBTV = "\x57\x65\142\x54\x56";
    
    const BROWSER_EDGE = "\105\144\x67\x65";
    
    const BROWSER_IE = "\x49\156\164\x65\162\x6e\x65\164\x20\x45\x78\x70\154\x6f\162\x65\162";
    
    const BROWSER_POCKET_IE = "\120\157\x63\x6b\145\164\40\x49\x6e\x74\x65\162\x6e\145\x74\x20\x45\x78\x70\x6c\x6f\x72\x65\162";
    
    const BROWSER_KONQUEROR = "\113\x6f\156\x71\165\x65\162\157\x72";
    
    const BROWSER_ICAB = "\x69\103\141\142";
    
    const BROWSER_OMNIWEB = "\x4f\x6d\x6e\x69\127\145\142";
    
    const BROWSER_FIREBIRD = "\106\x69\x72\145\142\151\x72\144";
    
    const BROWSER_FIREFOX = "\106\151\x72\x65\146\157\170";
    
    const BROWSER_BRAVE = "\x42\x72\x61\166\x65";
    
    const BROWSER_PALEMOON = "\x50\x61\154\145\155\157\x6f\x6e";
    
    const BROWSER_ICEWEASEL = "\111\143\145\167\x65\x61\x73\x65\x6c";
    
    const BROWSER_SHIRETOKO = "\x53\150\x69\x72\145\164\x6f\x6b\157";
    
    const BROWSER_MOZILLA = "\115\157\172\x69\x6c\154\141";
    
    const BROWSER_AMAYA = "\x41\155\141\x79\141";
    
    const BROWSER_LYNX = "\x4c\x79\x6e\x78";
    
    const BROWSER_SAFARI = "\x53\141\x66\x61\162\x69";
    
    const BROWSER_IPHONE = "\x69\120\150\157\x6e\x65";
    
    const BROWSER_IPOD = "\151\120\157\x64";
    
    const BROWSER_IPAD = "\151\120\141\144";
    
    const BROWSER_CHROME = "\x43\150\162\x6f\155\x65";
    
    const BROWSER_ANDROID = "\x41\156\x64\x72\157\x69\x64";
    
    const BROWSER_GOOGLEBOT = "\x47\x6f\157\147\x6c\x65\x42\157\164";
    
    const BROWSER_CURL = "\143\x55\122\x4c";
    
    const BROWSER_WGET = "\x57\147\145\x74";
    
    const BROWSER_UCBROWSER = "\125\x43\x42\162\x6f\167\x73\x65\x72";
    
    const BROWSER_YANDEXBOT = "\x59\x61\156\144\x65\x78\x42\157\164";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\x61\156\x64\145\x78\111\x6d\141\147\x65\x52\145\163\x69\172\x65\x72";
    
    const BROWSER_YANDEXIMAGES_BOT = "\x59\x61\156\144\x65\x78\111\x6d\141\147\x65\163";
    
    const BROWSER_YANDEXVIDEO_BOT = "\x59\141\156\x64\145\x78\126\x69\144\x65\157";
    
    const BROWSER_YANDEXMEDIA_BOT = "\x59\141\x6e\144\x65\x78\x4d\x65\x64\x69\x61";
    
    const BROWSER_YANDEXBLOGS_BOT = "\x59\141\156\x64\x65\x78\x42\x6c\157\147\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\x59\x61\156\x64\x65\170\106\x61\166\x69\x63\x6f\156\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\x59\141\x6e\144\x65\170\x57\x65\142\155\141\x73\164\145\162";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\141\x6e\x64\145\x78\x44\151\162\x65\143\164";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\x59\141\x6e\x64\x65\x78\x4d\145\164\x72\151\153\x61";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\141\x6e\x64\x65\x78\116\145\167\x73";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\141\156\x64\x65\x78\103\x61\x74\x61\154\157\147";
    
    const BROWSER_SLURP = "\131\141\x68\157\x6f\41\40\123\x6c\x75\162\160";
    
    const BROWSER_W3CVALIDATOR = "\127\63\x43\x20\126\x61\x6c\x69\x64\141\164\x6f\162";
    
    const BROWSER_BLACKBERRY = "\102\x6c\141\143\153\102\145\x72\162\x79";
    
    const BROWSER_ICECAT = "\x49\x63\145\x43\141\164";
    
    const BROWSER_NOKIA_S60 = "\x4e\x6f\153\x69\141\40\x53\66\x30\40\x4f\x53\x53\x20\x42\x72\x6f\x77\x73\x65\x72";
    
    const BROWSER_NOKIA = "\116\x6f\153\x69\141\x20\102\162\x6f\x77\163\x65\x72";
    
    const BROWSER_MSN = "\115\x53\116\40\x42\x72\x6f\167\x73\x65\162";
    
    const BROWSER_MSNBOT = "\x4d\x53\x4e\x20\x42\x6f\164";
    
    const BROWSER_BINGBOT = "\x42\x69\156\147\40\102\157\164";
    
    const BROWSER_VIVALDI = "\126\x69\166\141\x6c\144\151";
    
    const BROWSER_YANDEX = "\x59\141\x6e\x64\x65\170";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\x65\164\163\x63\141\x70\x65\x20\x4e\x61\x76\151\x67\141\164\157\x72";
    
    const BROWSER_GALEON = "\x47\x61\154\145\x6f\156";
    
    const BROWSER_NETPOSITIVE = "\116\145\x74\120\x6f\x73\151\x74\151\x76\x65";
    
    const BROWSER_PHOENIX = "\x50\x68\x6f\x65\x6e\x69\170";
    
    const BROWSER_PLAYSTATION = "\x50\154\141\171\x53\164\141\164\x69\157\x6e";
    const BROWSER_SAMSUNG = "\123\141\x6d\163\165\x6e\x67\x42\x72\x6f\167\x73\145\162";
    const BROWSER_SILK = "\x53\151\154\153";
    const BROWSER_I_FRAME = "\111\x66\x72\141\x6d\145\154\x79";
    const BROWSER_COCOA = "\103\157\x63\x6f\141\x52\145\163\x74\x43\154\151\x65\156\x74";
    const PLATFORM_UNKNOWN = "\165\156\153\156\x6f\x77\x6e";
    const PLATFORM_WINDOWS = "\x57\151\156\144\x6f\167\x73";
    const PLATFORM_WINDOWS_CE = "\127\151\x6e\144\157\167\x73\x20\103\x45";
    const PLATFORM_APPLE = "\101\160\x70\154\145";
    const PLATFORM_LINUX = "\114\x69\x6e\165\170";
    const PLATFORM_OS2 = "\117\x53\x2f\x32";
    const PLATFORM_BEOS = "\102\x65\x4f\x53";
    const PLATFORM_IPHONE = "\x69\120\x68\157\x6e\145";
    const PLATFORM_IPOD = "\x69\120\157\x64";
    const PLATFORM_IPAD = "\x69\x50\141\x64";
    const PLATFORM_BLACKBERRY = "\x42\x6c\141\x63\153\102\x65\162\x72\x79";
    const PLATFORM_NOKIA = "\x4e\157\x6b\x69\141";
    const PLATFORM_FREEBSD = "\106\162\x65\145\x42\x53\104";
    const PLATFORM_OPENBSD = "\117\x70\145\156\102\123\x44";
    const PLATFORM_NETBSD = "\116\145\x74\x42\123\104";
    const PLATFORM_SUNOS = "\123\x75\x6e\117\123";
    const PLATFORM_OPENSOLARIS = "\117\x70\x65\x6e\123\157\x6c\x61\x72\x69\163";
    const PLATFORM_ANDROID = "\101\x6e\144\x72\x6f\151\x64";
    const PLATFORM_PLAYSTATION = "\x53\x6f\156\x79\40\120\x6c\x61\x79\123\x74\x61\x74\151\157\156";
    const PLATFORM_ROKU = "\x52\x6f\153\x75";
    const PLATFORM_APPLE_TV = "\x41\160\160\x6c\x65\x20\x54\126";
    const PLATFORM_TERMINAL = "\124\x65\162\155\151\x6e\141\x6c";
    const PLATFORM_FIRE_OS = "\x46\x69\162\x65\40\x4f\x53";
    const PLATFORM_SMART_TV = "\x53\x4d\x41\x52\124\55\x54\x56";
    const PLATFORM_CHROME_OS = "\103\150\162\x6f\x6d\145\x20\117\x53";
    const PLATFORM_JAVA_ANDROID = "\112\x61\166\x61\57\x41\x6e\x64\x72\x6f\151\144";
    const PLATFORM_POSTMAN = "\120\157\x73\164\155\141\x6e";
    const PLATFORM_I_FRAME = "\x49\146\162\141\x6d\x65\154\171";
    const OPERATING_SYSTEM_UNKNOWN = "\x75\x6e\x6b\x6e\x6f\167\156";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto usukksgaqiqwqeys;
        ggkyameswcsquisg:
        goto ewuugiguuowassgm;
        goto mwwimgssiegweqes;
        mwwimgssiegweqes:
        oagaqukqswwgeqsa:
        goto uqwoeksekoweiwke;
        usukksgaqiqwqeys:
        $this->runSetup = false;
        goto cmkiwqcgsmwyuggk;
        cmkiwqcgsmwyuggk:
        if ($uowwycywwssskuys != '') {
            goto oagaqukqswwgeqsa;
        }
        goto eqwkmqasacseyecw;
        eqwkmqasacseyecw:
        $this->reset();
        goto wywgewmwqwqsysig;
        wywgewmwqwqsysig:
        $this->qeqwswckeiieossq();
        goto ggkyameswcsquisg;
        ykqeemyaewkmowyu:
        ewuugiguuowassgm:
        goto comoigwsemiiwoks;
        comoigwsemiiwoks:
        parent::__construct();
        goto uioqqaiayukmemcg;
        uqwoeksekoweiwke:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto ykqeemyaewkmowyu;
        uioqqaiayukmemcg:
    }
    
    public function reset()
    {
        goto seimmqskqimoouui;
        kmokgyokoacsqkcg:
        $this->isFacebook = false;
        goto mkummeawiecmouws;
        ceycsuymgwmceuew:
        $this->name = self::BROWSER_UNKNOWN;
        goto ygyacaeuykeookuw;
        egsqiegeesaowyyo:
        $this->isTablet = false;
        goto oouoqmemwouuymam;
        seimmqskqimoouui:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto ceycsuymgwmceuew;
        ygyacaeuykeookuw:
        $this->agent = isset($_SERVER["\x48\x54\x54\120\137\x55\x53\105\x52\137\101\107\x45\x4e\x54"]) ? $_SERVER["\110\124\124\x50\137\x55\x53\105\x52\137\101\107\105\x4e\x54"] : '';
        goto ggaemwcyouewkgcm;
        ggaemwcyouewkgcm:
        $this->isAol = false;
        goto cicagciwwymgewcm;
        mkummeawiecmouws:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto segicigoioeuyass;
        oouoqmemwouuymam:
        $this->isMobile = false;
        goto kmokgyokoacsqkcg;
        ycuossoamymsusws:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto egsqiegeesaowyyo;
        cicagciwwymgewcm:
        $this->isRobot = false;
        goto omkuusmocycoywqq;
        omkuusmocycoywqq:
        $this->version = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
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
        $this->version = preg_replace("\57\x5b\x5e\x30\x2d\71\x2c\56\54\141\55\x7a\x2c\101\x2d\x5a\x2d\x5d\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\57\133\x5e\x30\55\x39\x2c\56\54\x61\55\172\54\x41\x2d\x5a\x5d\57", '', $kqagasmwymmuiksq);
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
        uqqiokcseqswsgia:
        $this->reset();
        goto yyacgikiikmoesek;
        syumssoiimkseoum:
        $this->qeqwswckeiieossq();
        goto kmcewougmoaciyky;
        yyacgikiikmoesek:
        $this->agent = $agent_string;
        goto syumssoiimkseoum;
        kmcewougmoaciyky:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\x63\150\x72\x6f\155\x65\146\x72\x61\x6d\x65") !== false;
    }
    
    public function __toString()
    {
        return "\x3c\163\x74\x72\157\156\x67\x3e\x42\162\x6f\x77\163\x65\162\40\116\141\x6d\145\x3a\74\57\163\x74\x72\157\x6e\147\x3e\x20{$this->aagmmewiwysmgseq()}\x3c\x62\162\57\x3e\xa" . "\x3c\x73\164\x72\x6f\156\147\76\102\162\157\x77\x73\x65\x72\40\x56\x65\162\163\151\157\x6e\72\x3c\57\x73\164\x72\157\x6e\147\x3e\x20{$this->gikwwgqmwccescgy()}\x3c\x62\x72\57\76\12" . "\74\x73\x74\162\157\156\147\x3e\102\x72\157\x77\x73\145\x72\x20\x55\x73\x65\162\40\101\147\x65\x6e\x74\40\x53\x74\x72\151\x6e\x67\72\x3c\x2f\163\x74\x72\x6f\156\x67\x3e\x20{$this->ckaoiscoyuuosace()}\x3c\x62\162\57\x3e\xa" . "\74\x73\x74\x72\x6f\156\147\x3e\x50\x6c\x61\164\146\x6f\162\155\x3a\x3c\x2f\x73\164\162\157\156\x67\76\x20{$this->kqeiosksqeuksyqu()}\x3c\142\x72\57\76";
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
        wyeguiaumcoesuiy:
        ssayikwmgomomkkq:
        goto auomkekgcqwsmgqu;
        eykuqgakcouscsks:
        $this->eywockmuswoykooc(true);
        goto yeequkyciegceoeo;
        wwskqqaskwicmaay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x42\154\x61\143\153\x42\145\162\x72\171"));
        goto koiysaseasuyieym;
        ggiqousqgowseosg:
        ikwcwqmomksisice:
        goto wyeguiaumcoesuiy;
        yeequkyciegceoeo:
        return true;
        goto ggiqousqgowseosg;
        koiysaseasuyieym:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ikwcwqmomksisice;
        }
        goto emiksyiouuqsigmq;
        sqimcsougcukocky:
        $this->name = self::BROWSER_BLACKBERRY;
        goto eykuqgakcouscsks;
        awasoqakauqikkya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sqimcsougcukocky;
        auomkekgcqwsmgqu:
        return false;
        goto yymkyucwwqwymsse;
        emiksyiouuqsigmq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto awasoqakauqikkya;
        cemqmygogskcoygo:
        if (!(stripos($this->agent, "\x62\x6c\141\143\x6b\x62\x65\162\x72\x79") !== false)) {
            goto ssayikwmgomomkkq;
        }
        goto wwskqqaskwicmaay;
        yymkyucwwqwymsse:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wokayyqugqaoewiy;
        kcakqaaesggwiooc:
        if (!isset($quiguswioiaaywey[1])) {
            goto mscskuyuseuoqaqm;
        }
        goto cwykioaoamgqueey;
        cwykioaoamgqueey:
        $this->igmimcweskyugiqm(true);
        goto uwiyeosqocyekygy;
        ackciywssqaumgac:
        mscskuyuseuoqaqm:
        goto cwygwqacakmoesuw;
        uwiyeosqocyekygy:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\133\x5e\x30\x2d\71\134\56\x61\55\x7a\x5d\57\x69", '', $quiguswioiaaywey[1]));
        goto qwimoyomwmmwkucy;
        cwygwqacakmoesuw:
        eicmoywsowuqoaou:
        goto cgiakccyuqqwmomc;
        kicewoesgqwaasem:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\x41\117\x4c"));
        goto kcakqaaesggwiooc;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto wagiyaqsgwiqyaie;
        qwimoyomwmmwkucy:
        return true;
        goto ackciywssqaumgac;
        wagiyaqsgwiqyaie:
        if (!(stripos($this->agent, "\x61\x6f\x6c") !== false)) {
            goto eicmoywsowuqoaou;
        }
        goto kicewoesgqwaasem;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(false);
        goto kgskcgusosyauysg;
        cgiakccyuqqwmomc:
        return false;
        goto iuumaowkqqsoicgy;
        iuumaowkqqsoicgy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto eyyiqqumygsogaoq;
        eyyiqqumygsogaoq:
        if (!(stripos($this->agent, "\147\x6f\157\x67\x6c\145\142\157\x74") !== false)) {
            goto qaiaymokiyasqmic;
        }
        goto iskggyooogqgowys;
        wesewyeqgccwmaos:
        return true;
        goto aoeeywugooqmewcc;
        iskggyooogqgowys:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x67\x6f\x6f\147\x6c\145\142\x6f\x74"));
        goto skqkiegmwieyweww;
        yagmcusocgoqkewa:
        $this->aasmeayouwmacaow(true);
        goto wesewyeqgccwmaos;
        caegiamkkykaqmqu:
        qaiaymokiyasqmic:
        goto wykyuuuooigicwgs;
        comcaymsaykamcgi:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto yagmcusocgoqkewa;
        kiqcuyecmyaegims:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto comcaymsaykamcgi;
        ousiwuqmksykqcec:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kiqcuyecmyaegims;
        wykyuuuooigicwgs:
        return false;
        goto skomukgmucsuaggq;
        aoeeywugooqmewcc:
        awwiackkekswgamo:
        goto caegiamkkykaqmqu;
        skqkiegmwieyweww:
        if (!isset($yikciqwsimweauyg[1])) {
            goto awwiackkekswgamo;
        }
        goto ousiwuqmksykqcec;
        skomukgmucsuaggq:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto kuemgcgokyyggkoi;
        gugywasieysgmmyw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto uaamscmwcmumgasy;
        gcgwykikiomgmgqa:
        essswiygiqegaayw:
        goto kiaawmeeisegyugk;
        qimcgqssayewaygw:
        $this->name = self::BROWSER_YANDEXBOT;
        goto suugmuecwqaakaoc;
        wysmsmaeqiucoycu:
        return false;
        goto akeoiekwqqqgqamo;
        soeiamgkkekwcoss:
        if (!isset($yikciqwsimweauyg[1])) {
            goto essswiygiqegaayw;
        }
        goto gugywasieysgmmyw;
        uewgegcascsimmaq:
        return true;
        goto gcgwykikiomgmgqa;
        kuemgcgokyyggkoi:
        if (!(stripos($this->agent, "\x59\141\x6e\144\x65\170\x42\157\x74") !== false)) {
            goto yugqeemimuuqeucm;
        }
        goto eseawwcgusiywyge;
        eseawwcgusiywyge:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\x6e\x64\x65\x78\102\157\164"));
        goto soeiamgkkekwcoss;
        uaamscmwcmumgasy:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qimcgqssayewaygw;
        kiaawmeeisegyugk:
        yugqeemimuuqeucm:
        goto wysmsmaeqiucoycu;
        suugmuecwqaakaoc:
        $this->aasmeayouwmacaow(true);
        goto uewgegcascsimmaq;
        akeoiekwqqqgqamo:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto squqowgmqgocyqmi;
        uwemyeqsgcieyymm:
        return false;
        goto lhsckqwkqqauiqwy;
        osumgoskasckcieg:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto mkcsckwgisqasmao;
        aekaikwiqmuwwqia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sqqqyyimyskaygea;
        }
        goto ikmicisyykkwmeso;
        imsysaygciegsqok:
        sqqqyyimyskaygea:
        goto mygsucymimsqmqky;
        ikmicisyykkwmeso:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cyqyggywyykwqyak;
        mygsucymimsqmqky:
        gwokcyciswoaygie:
        goto uwemyeqsgcieyymm;
        mkcsckwgisqasmao:
        $this->aasmeayouwmacaow(true);
        goto woikwmiiusqmoygy;
        qysommommieagsuw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\x65\170\111\155\141\147\145\x52\x65\163\151\x7a\x65\x72"));
        goto aekaikwiqmuwwqia;
        cyqyggywyykwqyak:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto osumgoskasckcieg;
        squqowgmqgocyqmi:
        if (!(stripos($this->agent, "\x59\141\156\x64\x65\x78\111\x6d\141\147\145\x52\145\x73\151\x7a\x65\x72") !== false)) {
            goto gwokcyciswoaygie;
        }
        goto qysommommieagsuw;
        woikwmiiusqmoygy:
        return true;
        goto imsysaygciegsqok;
        lhsckqwkqqauiqwy:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto ceugiycaewioseoe;
        iycocuaeccqgyoia:
        swuywmmasggeiqou:
        goto ycyyicuqwqcyqeig;
        yakmisgikescmgoo:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aacosyksiacoaeig;
        qigcoauseeigksyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eosuykwimywegmse;
        }
        goto yakmisgikescmgoo;
        dqcamiqqkwiowaag:
        return true;
        goto sigosycgcicoiuuc;
        muyymwciiieqymqw:
        $this->aasmeayouwmacaow(true);
        goto dqcamiqqkwiowaag;
        aacosyksiacoaeig:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto gwqqoewaikqqueoe;
        ieycgksaoqioisky:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\144\145\170\103\x61\164\141\x6c\157\x67"));
        goto qigcoauseeigksyc;
        sigosycgcicoiuuc:
        eosuykwimywegmse:
        goto iycocuaeccqgyoia;
        ceugiycaewioseoe:
        if (!(stripos($this->agent, "\131\x61\x6e\x64\x65\x78\103\141\x74\x61\x6c\157\147") !== false)) {
            goto swuywmmasggeiqou;
        }
        goto ieycgksaoqioisky;
        gwqqoewaikqqueoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto muyymwciiieqymqw;
        ycyyicuqwqcyqeig:
        return false;
        goto kccciwsgesamyyau;
        kccciwsgesamyyau:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto imkwmsokcecosyse;
        osuskyuuggamicou:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\145\x78\116\x65\x77\163"));
        goto uaaiysoikgsuscqw;
        skqmieiumikceamg:
        omccwaywmcmqksmq:
        goto iymeugimwgcywusq;
        kmayccieqkkiqicw:
        return true;
        goto umsckeuyiggsewac;
        iymeugimwgcywusq:
        return false;
        goto eiswwscyoaqoggge;
        umsckeuyiggsewac:
        oameuaooiigaiucg:
        goto skqmieiumikceamg;
        suagmomycmooyggu:
        $this->aasmeayouwmacaow(true);
        goto kmayccieqkkiqicw;
        uaaiysoikgsuscqw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oameuaooiigaiucg;
        }
        goto naiguckqsyeaesek;
        imkwmsokcecosyse:
        if (!(stripos($this->agent, "\x59\141\156\144\145\170\x4e\145\167\163") !== false)) {
            goto omccwaywmcmqksmq;
        }
        goto osuskyuuggamicou;
        naiguckqsyeaesek:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eqqaouecoaseisgq;
        kqmkicwuyqakoika:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto suagmomycmooyggu;
        eqqaouecoaseisgq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto kqmkicwuyqakoika;
        eiswwscyoaqoggge:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto gwkeoekmeeqmmwgy;
        gwkeoekmeeqmmwgy:
        if (!(stripos($this->agent, "\131\x61\156\144\145\x78\115\x65\x74\x72\x69\x6b\141") !== false)) {
            goto eyogsqkuigcksouq;
        }
        goto aikqumiqkkqaqgee;
        swusyoymaokumies:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto xwymaakqyeoqaams;
        xwymaakqyeoqaams:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto amcsamiamksyqmuq;
        aikqumiqkkqaqgee:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\x64\145\x78\x4d\x65\164\162\x69\153\x61"));
        goto ukeksoegcoqokeik;
        egemeuggwgwuayoi:
        eyogsqkuigcksouq:
        goto qqusymyoygwwueco;
        amcsamiamksyqmuq:
        $this->aasmeayouwmacaow(true);
        goto cmasgwmooaiccewo;
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
        iigucumgucicccac:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto swusyoymaokumies;
        cyckkcksiwwqasio:
        qaqmwuwwqycmqkyg:
        goto egemeuggwgwuayoi;
        iuoiiwaosgqoeask:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto wsqgykwqkgiwaksw;
        yeywuuiugmgeuygm:
        $this->aasmeayouwmacaow(true);
        goto ywiyqcgyoweomkqg;
        gmgemamkswqeskmo:
        giuuqwcsockoiqem:
        goto gswsuaquqikkycwi;
        geqcuwsuqymcqiou:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto yeywuuiugmgeuygm;
        eemgwkicuicwskms:
        return false;
        goto kyemcamscwoeeoiy;
        qcwaessgikigogay:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\144\x65\170\104\x69\162\x65\143\164"));
        goto uegccyuaemgmocgu;
        ywiyqcgyoweomkqg:
        return true;
        goto gmgemamkswqeskmo;
        qqyasyisimsuyiiw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto geqcuwsuqymcqiou;
        uegccyuaemgmocgu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto giuuqwcsockoiqem;
        }
        goto iouecsmwqgaiycoq;
        wsqgykwqkgiwaksw:
        if (!(stripos($this->agent, "\x59\x61\x6e\144\x65\x78\104\x69\162\x65\x63\x74") !== false)) {
            goto smqoegcueykkkiiq;
        }
        goto qcwaessgikigogay;
        iouecsmwqgaiycoq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qqyasyisimsuyiiw;
        gswsuaquqikkycwi:
        smqoegcueykkkiiq:
        goto eemgwkicuicwskms;
        kyemcamscwoeeoiy:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto eeqgkcgywkwgmiyg;
        iskwcciiywiaamos:
        return true;
        goto saaioyiceykemgas;
        heakaosaewwowmcu:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto euyooyocyuucmmmc;
        cyoymqqkgiumuegy:
        mucqymyysqeiaqwk:
        goto fkcemcakyseoskmc;
        cumwowkcomuigeag:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\156\144\x65\x78\x57\145\142\155\x61\163\164\x65\x72"));
        goto qomyesuacseysugi;
        saaioyiceykemgas:
        ggawqqciikeiqiau:
        goto cyoymqqkgiumuegy;
        wsiqkesiecagcykw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iawccecmgeaocqmg;
        iawccecmgeaocqmg:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto heakaosaewwowmcu;
        fkcemcakyseoskmc:
        return false;
        goto aucqaemoukqogokc;
        qomyesuacseysugi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ggawqqciikeiqiau;
        }
        goto wsiqkesiecagcykw;
        euyooyocyuucmmmc:
        $this->aasmeayouwmacaow(true);
        goto iskwcciiywiaamos;
        eeqgkcgywkwgmiyg:
        if (!(stripos($this->agent, "\131\141\156\x64\x65\170\x57\145\142\x6d\x61\163\164\145\x72") !== false)) {
            goto mucqymyysqeiaqwk;
        }
        goto cumwowkcomuigeag;
        aucqaemoukqogokc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto oyqaeioosuiwoacw;
        yksumiuqcoggugea:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto aisgmewqismsouqm;
        wmkoscqgkmsoasms:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cecqqwuqeiccmmos;
        mywassaguwommoyg:
        return true;
        goto mgsyyameesskqgsk;
        aisgmewqismsouqm:
        $this->aasmeayouwmacaow(true);
        goto mywassaguwommoyg;
        oyqaeioosuiwoacw:
        if (!(stripos($this->agent, "\131\141\x6e\x64\145\x78\106\141\x76\x69\143\x6f\x6e\163") !== false)) {
            goto quaugcgaccqksmmk;
        }
        goto omeekeuouqiieacw;
        omeekeuouqiieacw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\144\145\170\x46\x61\x76\x69\x63\157\156\x73"));
        goto wuqswaumkwuciiqi;
        mgsyyameesskqgsk:
        aekwmmmciucegyys:
        goto wsgcyguocqmgccks;
        wuqswaumkwuciiqi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aekwmmmciucegyys;
        }
        goto wmkoscqgkmsoasms;
        wsgcyguocqmgccks:
        quaugcgaccqksmmk:
        goto cwmwkkauqqusccgs;
        cwmwkkauqqusccgs:
        return false;
        goto isowmaawkwmkcgmo;
        cecqqwuqeiccmmos:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto yksumiuqcoggugea;
        isowmaawkwmkcgmo:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto ggyweqemgcmwwwgu;
        ggyweqemgcmwwwgu:
        if (!(stripos($this->agent, "\x59\x61\x6e\144\x65\x78\x42\154\157\147\x73") !== false)) {
            goto gciueqsqsgcekwae;
        }
        goto oasoyuckmqumgwwy;
        kaiekqyukykoqiwa:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eayemqoaewmasoos;
        qacccgcuwysswgqk:
        gciueqsqsgcekwae:
        goto ucgecsiyweweymqw;
        oasoyuckmqumgwwy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\145\170\102\154\157\147\163"));
        goto ucugysauicuskega;
        qquioqqwmiuemaaw:
        return true;
        goto gukkaysgawyusckc;
        gccyyceaqackqsec:
        $this->aasmeayouwmacaow(true);
        goto qquioqqwmiuemaaw;
        ucugysauicuskega:
        if (!isset($yikciqwsimweauyg[1])) {
            goto caumawwwskkoekcw;
        }
        goto kaiekqyukykoqiwa;
        eayemqoaewmasoos:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto wimcmomumakqcikc;
        wimcmomumakqcikc:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto gccyyceaqackqsec;
        ucgecsiyweweymqw:
        return false;
        goto ucwwsimgkkgymqwm;
        gukkaysgawyusckc:
        caumawwwskkoekcw:
        goto qacccgcuwysswgqk;
        ucwwsimgkkgymqwm:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto oaaqgeqiwsykukeg;
        wuasiiywuycmkusq:
        syoagkqccoyegkac:
        goto ygagqkmcasesqcui;
        iammckaiicmaeweq:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto eiuwyaccguegyckc;
        gyswaoawqisgeiac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto syoagkqccoyegkac;
        }
        goto aayyiwqgkqkkckeg;
        ygagqkmcasesqcui:
        cuaueyackcccuamq:
        goto eikeicmemcaswgaq;
        mwoaykewsqmiikum:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto iammckaiicmaeweq;
        wyqswauigsseskum:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\x64\x65\x78\x4d\145\144\151\141"));
        goto gyswaoawqisgeiac;
        eikeicmemcaswgaq:
        return false;
        goto wisaskaqkeaqaymk;
        aayyiwqgkqkkckeg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mwoaykewsqmiikum;
        eiuwyaccguegyckc:
        $this->aasmeayouwmacaow(true);
        goto wkaeeqagowygkuya;
        wkaeeqagowygkuya:
        return true;
        goto wuasiiywuycmkusq;
        oaaqgeqiwsykukeg:
        if (!(stripos($this->agent, "\x59\141\156\144\145\170\115\x65\144\151\x61") !== false)) {
            goto cuaueyackcccuamq;
        }
        goto wyqswauigsseskum;
        wisaskaqkeaqaymk:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto kwkeisysqagyioig;
        kmawaeioomkgqkqe:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ngkomagwskmkmcuc;
        kwkeisysqagyioig:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\170\126\x69\x64\145\157") !== false)) {
            goto mieyqmckqkqaoygo;
        }
        goto mecmyqgsmiuesukw;
        gogqmaoyqeoscico:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kmawaeioomkgqkqe;
        kuimcqawqqqgcoqs:
        $this->aasmeayouwmacaow(true);
        goto osyoqauakmkoaigc;
        osyoqauakmkoaigc:
        return true;
        goto wqcseegakwamkcca;
        mecmyqgsmiuesukw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\144\145\170\126\151\144\x65\x6f"));
        goto ouaywweeyqecagmc;
        ouaywweeyqecagmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wmigsokoiegiocys;
        }
        goto gogqmaoyqeoscico;
        ngkomagwskmkmcuc:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto kuimcqawqqqgcoqs;
        wmquwikmuiskcucm:
        return false;
        goto ymmgwsqqoskmaags;
        yeyoqmmeeuqucmky:
        mieyqmckqkqaoygo:
        goto wmquwikmuiskcucm;
        wqcseegakwamkcca:
        wmigsokoiegiocys:
        goto yeyoqmmeeuqucmky;
        ymmgwsqqoskmaags:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto gggsgesuicesmqya;
        yuueeqwwgggeycog:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto qccmiyoiqguwmqug;
        qccmiyoiqguwmqug:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto kiqkwuaswsmkigok;
        ueyiaawciiimcmia:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yuueeqwwgggeycog;
        cqmkeoyaqqoykcyu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto suaeioykcscoamsi;
        }
        goto ueyiaawciiimcmia;
        gggsgesuicesmqya:
        if (!(stripos($this->agent, "\x59\x61\156\x64\145\170\x49\x6d\x61\147\x65\x73") !== false)) {
            goto ukoqoieuoigccaoi;
        }
        goto mksgaooiuiymkkac;
        kiqkwuaswsmkigok:
        $this->aasmeayouwmacaow(true);
        goto yieciwkqiqgceuya;
        ecyoakcmqwaksmms:
        return false;
        goto okyykeecayqaccik;
        waauqgswsiesowse:
        suaeioykcscoamsi:
        goto wqwqukkyascugisy;
        mksgaooiuiymkkac:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\145\170\x49\x6d\x61\x67\x65\x73"));
        goto cqmkeoyaqqoykcyu;
        yieciwkqiqgceuya:
        return true;
        goto waauqgswsiesowse;
        wqwqukkyascugisy:
        ukoqoieuoigccaoi:
        goto ecyoakcmqwaksmms;
        okyykeecayqaccik:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto yqswiyiomsgeayiw;
        egsiwgciqqkwecuy:
        $this->name = self::BROWSER_MSNBOT;
        goto escsoaemgioqgqso;
        gqogwsuwyiouywcy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aouymgmkkcaaymky;
        egaiuisgeekasiow:
        wqgwmgkmeiewmwsm:
        goto ywwgsgiqkuwwuwas;
        escsoaemgioqgqso:
        $this->aasmeayouwmacaow(true);
        goto gumousymsmeugmsm;
        gumousymsmeugmsm:
        return true;
        goto egaiuisgeekasiow;
        yuosayyyyemookmi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wqgwmgkmeiewmwsm;
        }
        goto gqogwsuwyiouywcy;
        ywwgsgiqkuwwuwas:
        cugwcccamcyuksgk:
        goto ayikwkmouqocqoya;
        aouymgmkkcaaymky:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto egsiwgciqqkwecuy;
        ayikwkmouqocqoya:
        return false;
        goto wsuauiewqimocoes;
        yqswiyiomsgeayiw:
        if (!(stripos($this->agent, "\155\x73\156\142\x6f\x74") !== false)) {
            goto cugwcccamcyuksgk;
        }
        goto sieeqakumiscuwmy;
        sieeqakumiscuwmy:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\155\x73\x6e\142\157\x74"));
        goto yuosayyyyemookmi;
        wsuauiewqimocoes:
    }
    
    protected function qaigygakimuucuki()
    {
        goto oqkyykockmuiaycc;
        ikqqmyoegaeocwqw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto hiuqggmuisuaaksw;
        aoueegmsgkeokaoq:
        return false;
        goto wmuqesieiugiquks;
        hiuqggmuisuaaksw:
        $this->name = self::BROWSER_BINGBOT;
        goto uiyscqcowgeaeoco;
        oqkyykockmuiaycc:
        if (!(stripos($this->agent, "\x62\x69\x6e\x67\142\157\164") !== false)) {
            goto ymmyqwqggkuwimiw;
        }
        goto uugykecieoomuygs;
        soiguuywuqqisowg:
        return true;
        goto gqmiumskekekmaks;
        uugykecieoomuygs:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x62\x69\156\147\142\157\x74"));
        goto aygyqqwyyugyoakg;
        uiyscqcowgeaeoco:
        $this->aasmeayouwmacaow(true);
        goto soiguuywuqqisowg;
        acsqgoigqaiqiwaw:
        ymmyqwqggkuwimiw:
        goto aoueegmsgkeokaoq;
        aygyqqwyyugyoakg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oemaagemmycueycs;
        }
        goto egeecgiwycoqsgqm;
        egeecgiwycoqsgqm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ikqqmyoegaeocwqw;
        gqmiumskekekmaks:
        oemaagemmycueycs:
        goto acsqgoigqaiqiwaw;
        wmuqesieiugiquks:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto yiiaqacikommoaoy;
        gggamqmqusyimaky:
        return true;
        goto meqqkyuusamyauyc;
        mqigmosuikyaaamk:
        goto mcuiomgoamywqgya;
        goto sqcqqsocqymmgwcq;
        ckmosuuwagciuwmw:
        return false;
        goto iuiyyuwauoowkgeg;
        icmmwweaumcckgam:
        if (stripos($this->agent, "\x57\63\x43\137\x56\141\x6c\151\x64\141\x74\x6f\162") !== false) {
            goto iicgycsecmaeqqcg;
        }
        goto aisaywmsiigsegso;
        iuiusomcwkaiksyq:
        sioosmeyiqmscmkc:
        goto weuwgyoweusiaweq;
        segewkgiakaqsgoc:
        
        $eaogoiscgwgmugsq = str_replace("\127\63\103\137\126\141\x6c\x69\x64\x61\164\157\162\40", "\x57\x33\103\x5f\x56\141\x6c\151\x64\141\x74\157\162\x2f", $this->agent);
        goto oeiiuoikyagkmyqa;
        oiksgywwsqweoeai:
        mcuiomgoamywqgya:
        goto ckmosuuwagciuwmw;
        ucuiqegmmogyasmw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto oscemsgoyimocqei;
        oscemsgoyimocqei:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imiuwwuwwyqigmou;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        waqsamacggacoaye:
        return true;
        goto oiksgywwsqweoeai;
        iamckkumoomyeoum:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wwaoocgeiyswqwow;
        }
        goto ucuiqegmmogyasmw;
        osewecweiaekeoou:
        uomswgeawseimkou:
        goto oqkkssoawygysqmq;
        okicguwqeyiuywos:
        goto mcuiomgoamywqgya;
        goto osewecweiaekeoou;
        sykosugesqqqqyey:
        wwaoocgeiyswqwow:
        goto okicguwqeyiuywos;
        iqgasessakaoieuw:
        return true;
        goto sykosugesqqqqyey;
        ykoqgweokgwkcawk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto weygkwekqawoowyq;
        }
        goto iqugwmioumykkagm;
        oqkkssoawygysqmq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto yioasqegwkugoqag;
        sqcqqsocqymmgwcq:
        iicgycsecmaeqqcg:
        goto segewkgiakaqsgoc;
        weuwgyoweusiaweq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\127\63\x43\55\143\150\x65\x63\x6b\x6c\x69\156\153"));
        goto ykoqgweokgwkcawk;
        oeiiuoikyagkmyqa:
        $yikciqwsimweauyg = explode("\x2f", stristr($eaogoiscgwgmugsq, "\127\63\x43\137\x56\141\154\x69\x64\141\164\157\x72"));
        goto iamckkumoomyeoum;
        yiiaqacikommoaoy:
        if (stripos($this->agent, "\127\x33\103\x2d\x63\150\x65\143\153\154\x69\x6e\x6b") !== false) {
            goto sioosmeyiqmscmkc;
        }
        goto icmmwweaumcckgam;
        aisaywmsiigsegso:
        if (stripos($this->agent, "\127\63\103\55\x6d\157\x62\x69\154\145\x4f\x4b") !== false) {
            goto uomswgeawseimkou;
        }
        goto wssaokwkycsqqumw;
        fkuiuosooquwmkoi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eewmcuekysqqkeey;
        yioasqegwkugoqag:
        $this->eywockmuswoykooc(true);
        goto waqsamacggacoaye;
        iqugwmioumykkagm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto fkuiuosooquwmkoi;
        eewmcuekysqqkeey:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto gggamqmqusyimaky;
        meqqkyuusamyauyc:
        weygkwekqawoowyq:
        goto mqigmosuikyaaamk;
        wssaokwkycsqqumw:
        goto mcuiomgoamywqgya;
        goto iuiusomcwkaiksyq;
        iuiyyuwauoowkgeg:
    }
    
    protected function cimegwusqouswgao()
    {
        goto kwumsouwywsqkmci;
        mkimssyoqguuowky:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto aqcqeucsaaeuiwqa;
        ecuoemaqoeosiase:
        return true;
        goto aecsciyiseuamymy;
        myksiemsskucuyac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ogeakuasmaemuwga;
        }
        goto gygwagcmmmaioikw;
        guiqaqkuywsmqcoc:
        wiawimwuykuugcwi:
        goto qeimskmimouyssgu;
        qeimskmimouyssgu:
        return false;
        goto csecmagoocuukewm;
        ouecqyewekugmwkm:
        $this->eywockmuswoykooc(false);
        goto ecuoemaqoeosiase;
        aecsciyiseuamymy:
        ogeakuasmaemuwga:
        goto guiqaqkuywsmqcoc;
        oawogoiagossceii:
        $this->aasmeayouwmacaow(true);
        goto ouecqyewekugmwkm;
        aqcqeucsaaeuiwqa:
        $this->name = self::BROWSER_SLURP;
        goto oawogoiagossceii;
        gygwagcmmmaioikw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mkimssyoqguuowky;
        qmckmkykmyucosyq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\154\165\x72\x70"));
        goto myksiemsskucuyac;
        kwumsouwywsqkmci:
        if (!(stripos($this->agent, "\x73\154\x75\162\160") !== false)) {
            goto wiawimwuykuugcwi;
        }
        goto qmckmkykmyucosyq;
        csecmagoocuukewm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto asoiigkaqcguaioi;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        qsqgkiyigokqcioe:
        owcekoqmukawoeao:
        goto wwckusqkukciicei;
        gkgwqoquqekiayus:
        ymgeisswqiucoaas:
        goto iaiewssiomowoyas;
        gsuacqigwaigyaia:
        if (!isset($uuygmciickwewegw[1])) {
            goto ggakkmokkykkqawi;
        }
        goto ciymuigaugeiouic;
        ocsoakwgmmwsekyi:
        
        
        $this->aasasueowyemuyoc('');
        goto qmywsksagymugcou;
        gikcoemsgecyasqe:
        goto owcekoqmukawoeao;
        goto gkgwqoquqekiayus;
        gaccwqquykeauumg:
        goto owcekoqmukawoeao;
        goto sqikwaiakyissigo;
        ciymuigaugeiouic:
        $quiguswioiaaywey = explode("\x20", $uuygmciickwewegw[1]);
        goto sosikmkcuygeukyo;
        wwckusqkukciicei:
        return false;
        goto cmcisgcoaouauymu;
        yeagcqwaoeskgqmg:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ocsoakwgmmwsekyi;
        qmywsksagymugcou:
        return true;
        goto qsqgkiyigokqcioe;
        iaiewssiomowoyas:
        $uuygmciickwewegw = explode("\x2f", stristr($this->agent, "\102\162\141\166\145"));
        goto gsuacqigwaigyaia;
        asoiigkaqcguaioi:
        if (stripos($this->agent, "\x42\162\x61\x76\x65\57") !== false) {
            goto ymgeisswqiucoaas;
        }
        goto wuismmmeeqkiowua;
        pwgwmqwuoqysukeo:
        ggakkmokkykkqawi:
        goto gaccwqquykeauumg;
        wuismmmeeqkiowua:
        if (stripos($this->agent, "\40\x42\x72\141\x76\x65\40") !== false) {
            goto wucmiaeomamqgqes;
        }
        goto gikcoemsgecyasqe;
        sosikmkcuygeukyo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwgkaeyusoekmway;
        uckgesmigkiyqyck:
        return true;
        goto pwgwmqwuoqysukeo;
        sqikwaiakyissigo:
        wucmiaeomamqgqes:
        goto yeagcqwaoeskgqmg;
        cmcisgcoaouauymu:
    }
    
    protected function makyeuicweuowumi()
    {
        goto ccyiuskguauimqee;
        mwauqumigegcywiw:
        return false;
        goto omeswwygqyeqyqmw;
        sgwwscoqkcuoqqsg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kigaqwsiuygysecu;
        qgagcuckouyuyuss:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto qmkkwkqieggiyamm;
        ysamigeqeyqgiwcs:
        yukycgouyuqkmaok:
        goto sggyugwiuggaaqyo;
        eamumkggcmyaosco:
        $this->eywockmuswoykooc(true);
        goto gmiyusqaiqaaakkk;
        qmkkwkqieggiyamm:
        if (!(stripos($this->agent, "\x57\151\x6e\144\x6f\167\x73\40\120\x68\x6f\156\145") !== false || stripos($this->agent, "\x41\156\x64\x72\157\x69\x64") !== false)) {
            goto camscswqceqycmke;
        }
        goto eamumkggcmyaosco;
        umimoqmwoeecysqi:
        return true;
        goto ysamigeqeyqgiwcs;
        gmiyusqaiqaaakkk:
        camscswqceqycmke:
        goto umimoqmwoeecysqi;
        kigaqwsiuygysecu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qgagcuckouyuyuss;
        oqymsqskimoyuyye:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\105\x64\147\145"));
        goto oyykmqismqsyaaus;
        oyykmqismqsyaaus:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yukycgouyuqkmaok;
        }
        goto sgwwscoqkcuoqqsg;
        ccyiuskguauimqee:
        if (!(stripos($this->agent, "\105\x64\x67\x65\57") !== false)) {
            goto megqkiykgiamgmsk;
        }
        goto oqymsqskimoyuyye;
        sggyugwiuggaaqyo:
        megqkiykgiamgmsk:
        goto mwauqumigegcywiw;
        omeswwygqyeqyqmw:
    }
    
    protected function cgequousmqakcios()
    {
        goto cyikciomyweygykm;
        akmiwammkswkmyio:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eqiygsagygouqkyy;
        qousyksekeougumo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto micqaoiiquokaqmw;
        kkumemicscqeqawi:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\73", "\x3b\40", $this->agent), "\115\123\116"));
        goto msccquimgomummck;
        uuamswicsoyuguug:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\155\163\160\x69\x65"));
        goto kqggyaomgmqyicmc;
        gocgaeomskmyyuaq:
        ycsqoemcioqgscik:
        goto ckiggmwimwykqyee;
        kmyoqookuiyomeec:
        if (!(stripos($this->agent, "\111\x45\115\157\142\x69\x6c\x65") !== false)) {
            goto uoyuiiauquiwgasu;
        }
        goto omggicgmwyakocik;
        ieuewgsuqywiuuki:
        $quiguswioiaaywey = explode("\x2f", $this->agent);
        goto wysmuiaeuqqaycig;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        eoeoikgkiuewagwg:
        goto qkmucouuqggkwssg;
        goto mgsmmaqqkusaaqew;
        sckcaoikwggaoiqm:
        if (stripos($this->agent, "\x6d\x73\x69\145") !== false && stripos($this->agent, "\x6f\x70\145\162\141") === false) {
            goto zkoqiugkkemmwqeq;
        }
        goto aaumqogegyqosuiq;
        ygwwwwcgiwmcakmi:
        kwyiuyoeysqeywmm:
        goto uuiioegocmmcqgwq;
        qsaiiuqwimiqiwyc:
        uecqmukyqqgyoegy:
        goto wkgugqyackgiowas;
        oesqmiaisaqseigm:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto kmyoqookuiyomeec;
        uuiioegocmmcqgwq:
        $yikciqwsimweauyg = explode("\40", stristr(str_replace("\73", "\x3b\40", $this->agent), "\x6d\x73\x69\x65"));
        goto yygugwkyoeackami;
        occyqeeyumwaygik:
        zkoqiugkkemmwqeq:
        goto yaeowwmkcuqmesau;
        iuiickwiuccmyiey:
        goto qkmucouuqggkwssg;
        goto yiomssmosemcckmc;
        uasakawygcqkquuy:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto myymisiqiwiqymuu;
        sqicocysoqwcgasq:
        $this->eywockmuswoykooc(true);
        goto awiqeeiewssogaaq;
        eaicyuessygcyuqu:
        return true;
        goto sikkakqouqeckesc;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\x31\56\x30");
        goto igesuquikuwmsywg;
        msccquimgomummck:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gyqcauemgkuwquua;
        }
        goto kmmsoqcgiyougqqy;
        syawcymwokyaqeck:
        if (!isset($sogksuscggsicmac[1])) {
            goto ewasqwuscwkeuuyi;
        }
        goto qskwqqamoqekaqum;
        sikkakqouqeckesc:
        qymmimiisagiymuy:
        goto aqwaemcyooumguou;
        goiegscqgcukimys:
        goto qkmucouuqggkwssg;
        goto occyqeeyumwaygik;
        kekkyamkouwoiyyi:
        owgoagmssqsysiyq:
        goto uasakawygcqkquuy;
        ieysgookkakiiuoo:
        if (!preg_match("\57\x33\x30\x38\174\x34\62\x35\x7c\x34\x32\x36\174\x34\67\x34\x7c\x30\142\x31\57\x69", $yikciqwsimweauyg)) {
            goto uecqmukyqqgyoegy;
        }
        goto aykuikogcgweeoio;
        agasiekywmaokckg:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qwwigmoeocgyqyuy;
        kwemswkcueagmssu:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto mayucqimkiskmcms;
        yiomssmosemcckmc:
        iseeayqyeoawwmwc:
        goto uuamswicsoyuguug;
        kwaiiaowwykksgcw:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto oesqmiaisaqseigm;
        swasyyuiyouasyqy:
        usoiismiikooagme:
        goto akmiwammkswkmyio;
        asgwqocgsuugguse:
        return false;
        goto kiykgaeecsuoegei;
        eqiygsagygouqkyy:
        $this->aasasueowyemuyoc("\61\x2e\60");
        goto gcasowsewwisgqwc;
        ouqiiwuqeoegciso:
        if (stripos($this->agent, "\155\151\143\162\157\163\x6f\x66\x74\40\151\156\x74\x65\162\156\145\164\40\x65\x78\160\154\157\x72\145\x72") !== false) {
            goto usoiismiikooagme;
        }
        goto sckcaoikwggaoiqm;
        ygqkqwkyoosgomug:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto coeaoweyqagqsoqq;
        iqkkuesiuysywyag:
        goto qkmucouuqggkwssg;
        goto swasyyuiyouasyqy;
        isucaqumoqgykqig:
        ewasqwuscwkeuuyi:
        goto iuiickwiuccmyiey;
        qwwigmoeocgyqyuy:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto oeeccicqsoiyqcig;
        coeaoweyqagqsoqq:
        return true;
        goto goowmysscaoakuma;
        mgsmmaqqkusaaqew:
        soacqquaasiggock:
        goto kwemswkcueagmssu;
        micqaoiiquokaqmw:
        wskkwyoiugucwwua:
        goto wyagecywqcysyyae;
        aykuikogcgweeoio:
        $this->aasasueowyemuyoc("\x31\x2e\x35");
        goto qsaiiuqwimiqiwyc;
        qskwqqamoqekaqum:
        $this->aasasueowyemuyoc(preg_replace("\x2f\133\136\60\55\71\x2e\x5d\53\x2f", '', $sogksuscggsicmac[1]));
        goto ameqasmessgyycqq;
        aqwaemcyooumguou:
        qkmucouuqggkwssg:
        goto asgwqocgsuugguse;
        yaeowwmkcuqmesau:
        
        if (!(stripos($this->agent, "\155\x73\156\142") !== false)) {
            goto kwyiuyoeysqeywmm;
        }
        goto kkumemicscqeqawi;
        wyagecywqcysyyae:
        goto ycsuqaygaisskkeq;
        goto kekkyamkouwoiyyi;
        kmmsoqcgiyougqqy:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto ygqkqwkyoosgomug;
        oeeccicqsoiyqcig:
        $this->eywockmuswoykooc(true);
        goto uksaceogcmuacumi;
        mayucqimkiskmcms:
        $sogksuscggsicmac = explode("\162\x76\x3a", $this->agent);
        goto syawcymwokyaqeck;
        yygugwkyoeackami:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto kwaiiaowwykksgcw;
        sooawcagkoismuqa:
        muaiioeaoiqiogie:
        goto eoeoikgkiuewagwg;
        aaumqogegyqosuiq:
        if (stripos($this->agent, "\164\162\151\144\x65\156\x74") !== false) {
            goto soacqquaasiggock;
        }
        goto umaimowkyaemisiq;
        eismimkcoiokucom:
        return true;
        goto sooawcagkoismuqa;
        myymisiqiwiqymuu:
        ycsuqaygaisskkeq:
        goto eaicyuessygcyuqu;
        yueaaaoockqicmwq:
        goto qkmucouuqggkwssg;
        goto gocgaeomskmyyuaq;
        omggicgmwyakocik:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto sqicocysoqwcgasq;
        gcasowsewwisgqwc:
        $yikciqwsimweauyg = stristr($this->agent, "\x2f");
        goto ieysgookkakiiuoo;
        uksaceogcmuacumi:
        if (stripos($this->agent, "\x6d\x73\160\x69\145") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto ieuewgsuqywiuuki;
        kqggyaomgmqyicmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qymmimiisagiymuy;
        }
        goto agasiekywmaokckg;
        cyikciomyweygykm:
        if (stripos($this->agent, "\124\162\151\x64\145\x6e\164\57\67\x2e\60\x3b\40\162\166\72\x31\x31\x2e\60") !== false) {
            goto ycsqoemcioqgscik;
        }
        goto ouqiiwuqeoegciso;
        wkgugqyackgiowas:
        return true;
        goto goiegscqgcukimys;
        umaimowkyaemisiq:
        if (stripos($this->agent, "\x6d\163\x70\151\x65") !== false || stripos($this->agent, "\x70\157\x63\x6b\145\x74") !== false) {
            goto iseeayqyeoawwmwc;
        }
        goto yueaaaoockqicmwq;
        ameqasmessgyycqq:
        $this->agent = str_replace(["\x4d\x6f\x7a\x69\154\x6c\141", "\x47\x65\143\153\x6f"], "\115\123\x49\105", $this->agent);
        goto isucaqumoqgykqig;
        wysmuiaeuqqaycig:
        if (!isset($quiguswioiaaywey[1])) {
            goto wskkwyoiugucwwua;
        }
        goto qousyksekeougumo;
        goowmysscaoakuma:
        gyqcauemgkuwquua:
        goto ygwwwwcgiwmcakmi;
        awiqeeiewssogaaq:
        uoyuiiauquiwgasu:
        goto eismimkcoiokucom;
        igesuquikuwmsywg:
        return true;
        goto iqkkuesiuysywyag;
        kiykgaeecsuoegei:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto qakmsceesmcwecmo;
        yiyksucyuaosekey:
        uiuyiuiocgycwaae:
        goto msywkyeikecaomgo;
        cemwkemiwicagmou:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\x6f\x70\145\x72\141"));
        goto uowyeayyimmqogge;
        ocisosooggaaueii:
        uqsmiiqigeisoyse:
        goto uuimoqmwywkkaygo;
        yscyooysgqsyuayo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cuyagmoysmwoceks;
        }
        goto ssoogugiigiqooce;
        eiosgmsukekekyou:
        csguwgocosyisgyq:
        goto kywqmsqusiysywqe;
        uyeiymmkkiyccakm:
        if (stripos($this->agent, "\157\x70\145\x72\141") !== false) {
            goto oucqmskiygmmsmye;
        }
        goto scimuugawiiuemki;
        iegksyacuckwoyiw:
        if (!(stripos($this->agent, "\x4f\160\x65\x72\x61\x20\115\157\x62\151") !== false)) {
            goto sackmgaomiwgeqca;
        }
        goto ggaoikewqkecamgs;
        akmiwuwwkeokegkq:
        goto cqcomacmwgougkai;
        goto oqyumeoumucciuao;
        ksmacqoqogyoookk:
        $this->name = self::BROWSER_OPERA;
        goto ugmggeiwogwcgcqy;
        aiaaaesgesgwsuck:
        $yikciqwsimweauyg = explode("\57", $cgkyugweawsewkuu);
        goto yscyooysgqsyuayo;
        omusyecyksyowysk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kwsuumgiqsskggqy;
        aekskqewqmeauaug:
        $this->name = self::BROWSER_OPERA;
        goto ikuoukwawkkyaacy;
        cyaaugsakiugouae:
        if (preg_match("\57\x5c\57\57", $cgkyugweawsewkuu)) {
            goto iggqqqegoegigyii;
        }
        goto cemwkemiwicagmou;
        iqwiyiisyasiwsiu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiuyiuiocgycwaae;
        }
        goto omusyecyksyowysk;
        usmucisyagswyysu:
        amecoaswmoqigiku:
        goto wawimucmukumkuca;
        ikuoukwawkkyaacy:
        return true;
        goto omcmaswaawciiaui;
        wskewcieqoqiuoui:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\145\x72\141\x20\x6d\x69\156\151");
        goto ggiacqackmguiiki;
        msywkyeikecaomgo:
        smsuqgcummiyucsc:
        goto uccocwouuuisiage;
        quucsamwocuceyae:
        ieeieiuoeqquyaka:
        goto emoscekqieoummww;
        swkkeqmaqugwiysy:
        $this->eywockmuswoykooc(true);
        goto csoomgiiyysqmeku;
        omcmaswaawciiaui:
        goto uqqaaeqoykgcakec;
        goto quucsamwocuceyae;
        gmgwsqeqwquucyoo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto csuemgeukskicmmi;
        myemqwquecqwakyq:
        isgqqmaauckagsao:
        goto ksmacqoqogyoookk;
        eukqocmusiasmewe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto usmucisyagswyysu;
        qwgicaiskacusqka:
        sackmgaomiwgeqca:
        goto aekskqewqmeauaug;
        ggaoikewqkecamgs:
        $this->eywockmuswoykooc(true);
        goto qwgicaiskacusqka;
        oqyumeoumucciuao:
        iggqqqegoegigyii:
        goto gouyqmyakowooiyw;
        yeayeuiggqoigwag:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto iqwiyiisyasiwsiu;
        uggmmsuyiiyuaeic:
        if (preg_match("\x2f\x56\x65\162\x73\x69\157\x6e\x5c\57\x28\61\x2a\x2e\x2a\x29\44\x2f", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto uqsmiiqigeisoyse;
        }
        goto cyaaugsakiugouae;
        ccaqsekgkcqqayyg:
        cqcomacmwgougkai:
        goto iegksyacuckwoyiw;
        emoscekqieoummww:
        $cgkyugweawsewkuu = stristr($this->agent, "\x4f\120\x52");
        goto cyucgakoiiemocie;
        coyegiuygcqwmaqc:
        if (!isset($quiguswioiaaywey[1])) {
            goto amecoaswmoqigiku;
        }
        goto eukqocmusiasmewe;
        mwcysigeamkwiwku:
        uqqaaeqoykgcakec:
        goto ywukigwwwumwuicy;
        qakmsceesmcwecmo:
        if (stripos($this->agent, "\x6f\160\145\x72\141\40\155\151\156\x69") !== false) {
            goto qwiwywqwmmciwiea;
        }
        goto uyeiymmkkiyccakm;
        kwsuumgiqsskggqy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yiyksucyuaosekey;
        ckgikcyggaegucyk:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\157\x70\145\x72\141\x20\155\x69\156\151"));
        goto coyegiuygcqwmaqc;
        uuimoqmwywkkaygo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto akmiwuwwkeokegkq;
        csoomgiiyysqmeku:
        return true;
        goto ukkkmakiisiqkacm;
        uukmwmiaqigsqaug:
        $this->eywockmuswoykooc(true);
        goto myemqwquecqwakyq;
        ywukigwwwumwuicy:
        return false;
        goto uyuugesysqaueywi;
        ggiacqackmguiiki:
        if (preg_match("\57\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ckgikcyggaegucyk;
        gocmokqaeqkqcmma:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\145\x72\x61");
        goto uggmmsuyiiyuaeic;
        ugmggeiwogwcgcqy:
        return true;
        goto mwcysigeamkwiwku;
        uccocwouuuisiage:
        if (!(stripos($this->agent, "\115\157\142\151\x6c\145") !== false)) {
            goto isgqqmaauckagsao;
        }
        goto uukmwmiaqigsqaug;
        wkasucgiaeogugcw:
        goto cqcomacmwgougkai;
        goto ocisosooggaaueii;
        gouyqmyakowooiyw:
        $yikciqwsimweauyg = explode("\57", str_replace("\x28", "\x20", $cgkyugweawsewkuu));
        goto eyuieiqqgyowoocu;
        kywqmsqusiysywqe:
        $this->name = self::BROWSER_OPERA_MINI;
        goto swkkeqmaqugwiysy;
        mseowikguuikkiys:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ageemsqieiqyqwag;
        ageemsqieiqyqwag:
        cuyagmoysmwoceks:
        goto eiosgmsukekekyou;
        mukwaeyamkyacewo:
        oucqmskiygmmsmye:
        goto gocmokqaeqkqcmma;
        cyucgakoiiemocie:
        if (!preg_match("\57\x5c\57\x2f", $cgkyugweawsewkuu)) {
            goto smsuqgcummiyucsc;
        }
        goto yeayeuiggqoigwag;
        ukkkmakiisiqkacm:
        goto uqqaaeqoykgcakec;
        goto mukwaeyamkyacewo;
        csuemgeukskicmmi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ycaooqesseeagoka;
        mmowusaeqemsisiq:
        qwiwywqwmmciwiea:
        goto wskewcieqoqiuoui;
        wmcauamwimsyiauk:
        goto uqqaaeqoykgcakec;
        goto mmowusaeqemsisiq;
        ssoogugiigiqooce:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mseowikguuikkiys;
        scimuugawiiuemki:
        if (stripos($this->agent, "\x4f\120\x52") !== false) {
            goto ieeieiuoeqquyaka;
        }
        goto wmcauamwimsyiauk;
        uowyeayyimmqogge:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto wkasucgiaeogugcw;
        sciiwomqgcamicqs:
        fwqikeoyaewusiym:
        goto aiaaaesgesgwsuck;
        ycaooqesseeagoka:
        eoueymmeawwwswwq:
        goto ccaqsekgkcqqayyg;
        eyuieiqqgyowoocu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eoueymmeawwwswwq;
        }
        goto gmgwsqeqwquucyoo;
        wawimucmukumkuca:
        goto csguwgocosyisgyq;
        goto sciiwomqgcamicqs;
        uyuugesysqaueywi:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto oymcieacieeqwses;
        akgyaaawgcecyoqc:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ceskkigeaqcaasqs;
        ewswyuykwuaigiyo:
        return false;
        goto owuqwmsqouswswau;
        ymkqceigmmuokugy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oikasesimicoysmu;
        }
        goto gygkmqwkaiskgwws;
        symsqqgwwimugwue:
        gqaoecysyaaccyyy:
        goto qymyaksieaiemaam;
        acmqaeyciymmsgua:
        kicmwgigiciiuqaw:
        goto ewswyuykwuaigiyo;
        syuakiekoaowmoyy:
        $this->eywockmuswoykooc(true);
        goto symsqqgwwimugwue;
        ymyqsgymeusoakyi:
        qkmqkcwgskmyeoyq:
        goto syuakiekoaowmoyy;
        ygeweomowkiskgec:
        return true;
        goto kkaqamsuqkgkwowo;
        cggwmqyuewwisqsu:
        $yikciqwsimweauyg = preg_split("\x2f\x5b\x5c\57\x3b\135\x2b\57", stristr($this->agent, "\103\x68\x72\x6f\155\145"));
        goto ymkqceigmmuokugy;
        kkaqamsuqkgkwowo:
        oikasesimicoysmu:
        goto acmqaeyciymmsgua;
        oymcieacieeqwses:
        if (!(stripos($this->agent, "\103\x68\162\x6f\x6d\x65") !== false)) {
            goto kicmwgigiciiuqaw;
        }
        goto cggwmqyuewwisqsu;
        gsuqomaoosusiqew:
        goto gqaoecysyaaccyyy;
        goto ymyqsgymeusoakyi;
        ceskkigeaqcaasqs:
        
        if (!(stripos($this->agent, "\101\156\x64\x72\157\151\x64") !== false)) {
            goto somyyugyumgeukik;
        }
        goto wikueqyuegggkqoi;
        qymyaksieaiemaam:
        somyyugyumgeukik:
        goto ygeweomowkiskgec;
        wikueqyuegggkqoi:
        if (stripos($this->agent, "\115\157\142\151\x6c\x65") !== false) {
            goto qkmqkcwgskmyeoyq;
        }
        goto qoigmymamwikqkce;
        awukkyueuqcaywks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto akgyaaawgcecyoqc;
        qoigmymamwikqkce:
        $this->icigyueiiwsukmsu(true);
        goto gsuqomaoosusiqew;
        gygkmqwkaiskgwws:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto awukkyueuqcaywks;
        owuqwmsqouswswau:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto iugcwummaqmgiqgm;
        iaewosqywiqiqmqs:
        return true;
        goto bkmiygiccoagsyck;
        iugcwummaqmgiqgm:
        if (!(stripos($this->agent, "\167\145\x62\x74\x76") !== false)) {
            goto skawosaecygmqmsq;
        }
        goto cqmwuwoaqiumaogi;
        ueimcmmgwiommwwg:
        skawosaecygmqmsq:
        goto asmgcmegmekauiqm;
        bkmiygiccoagsyck:
        iawosyeimcucqgky:
        goto ueimcmmgwiommwwg;
        wkeoacqqekmaqogk:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto iaewosqywiqiqmqs;
        owaomgiwykiiesqs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wkeoacqqekmaqogk;
        asmgcmegmekauiqm:
        return false;
        goto quqkggiycuoeaysg;
        cqmwuwoaqiumaogi:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x77\145\x62\164\x76"));
        goto aecesusucigikyqs;
        aecesusucigikyqs:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iawosyeimcucqgky;
        }
        goto caomeykgioesgswg;
        caomeykgioesgswg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto owaomgiwykiiesqs;
        quqkggiycuoeaysg:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto wgmeusuigqsowace;
        wgmeusuigqsowace:
        if (!(stripos($this->agent, "\116\145\164\120\x6f\163\151\x74\x69\166\145") !== false)) {
            goto cyscaaaicmkkqies;
        }
        goto eqgyoucqmyyqqagc;
        eqgyoucqmyyqqagc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4e\x65\x74\x50\157\163\x69\x74\151\x76\145"));
        goto qomaksiaaooygwsg;
        seekksssaiokokyq:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\x3b"], '', $quiguswioiaaywey[0]));
        goto vkcgsyecgukweyki;
        aiawyogcusykcgem:
        return true;
        goto ocegwkgcsegowucu;
        aiugcqaaymaasikk:
        cyscaaaicmkkqies:
        goto cmmgaceguouaicok;
        sqkqqasyecqeysww:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto seekksssaiokokyq;
        ocegwkgcsegowucu:
        kgeeikakwgkukkke:
        goto aiugcqaaymaasikk;
        cmmgaceguouaicok:
        return false;
        goto gosqawkmwoukawsa;
        qomaksiaaooygwsg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kgeeikakwgkukkke;
        }
        goto sqkqqasyecqeysww;
        vkcgsyecgukweyki:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto aiawyogcusykcgem;
        gosqawkmwoukawsa:
    }
    
    protected function usswyskeuiskccki()
    {
        goto kkmwiocaqecosykg;
        siycmwciwoewsooi:
        if (!isset($quiguswioiaaywey[1])) {
            goto kqmsyeoyemocoiqs;
        }
        goto ceguiykycywoocuu;
        xwsiauqamwogkwmo:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto csskywiguyamicyu;
        owkecwacqesgqcaq:
        return false;
        goto gggcyumymmmiuaeu;
        mqieeoagcesmykuy:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\147\141\x6c\x65\157\156"));
        goto asmgcueacgcuokak;
        kkmwiocaqecosykg:
        if (!(stripos($this->agent, "\147\141\154\x65\x6f\x6e") !== false)) {
            goto iiksoosqisyggaks;
        }
        goto mqieeoagcesmykuy;
        uceyoakcoqqgkmka:
        kqmsyeoyemocoiqs:
        goto mksgqgcoeeksaiqe;
        mksgqgcoeeksaiqe:
        iiksoosqisyggaks:
        goto owkecwacqesgqcaq;
        csskywiguyamicyu:
        return true;
        goto uceyoakcoqqgkmka;
        ceguiykycywoocuu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto xwsiauqamwogkwmo;
        asmgcueacgcuokak:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto siycmwciwoewsooi;
        gggcyumymmmiuaeu:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto ymykisoiiyyqeqim;
        ymqcqiyawcogwgym:
        return true;
        goto cmwigsaskaamoema;
        mcqqawkmqiiyecey:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x4b\x6f\x6e\161\165\x65\x72\x6f\162"));
        goto yasusgwwwekossyy;
        iyoukgscwmcoweqa:
        return false;
        goto yagoyoogqkomucci;
        eqsqecmiugakueqm:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto ymqcqiyawcogwgym;
        ymykisoiiyyqeqim:
        if (!(stripos($this->agent, "\x4b\157\x6e\161\165\145\162\157\162") !== false)) {
            goto ogcasmoaumciscii;
        }
        goto mcqqawkmqiiyecey;
        yasusgwwwekossyy:
        $quiguswioiaaywey = explode("\x2f", $yikciqwsimweauyg[0]);
        goto isygymaiseqgeiau;
        ecmeeksmaqyumykg:
        ogcasmoaumciscii:
        goto iyoukgscwmcoweqa;
        isygymaiseqgeiau:
        if (!isset($quiguswioiaaywey[1])) {
            goto imaukawsimqgmauc;
        }
        goto keqsgkcumkusgygg;
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
        ycmiqcakcweakeaa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto koakuemcskwaoesy;
        guukcysyaquuekek:
        if (!isset($quiguswioiaaywey[1])) {
            goto kegmcwesswsaamum;
        }
        goto ycmiqcakcweakeaa;
        oswqmcgsewiscugq:
        $quiguswioiaaywey = explode("\x20", stristr(str_replace("\x2f", "\x20", $this->agent), "\x69\143\141\142"));
        goto guukcysyaquuekek;
        koakuemcskwaoesy:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto cwyqqgwwmesmkiam;
        qgoyesykieqauwqi:
        swuqimcsmiwqaaom:
        goto aesqewckgocaowoi;
        ssewsumymwocqyyc:
        kegmcwesswsaamum:
        goto qgoyesykieqauwqi;
        eacseogmmqokmogu:
        if (!(stripos($this->agent, "\x69\143\x61\142") !== false)) {
            goto swuqimcsmiwqaaom;
        }
        goto oswqmcgsewiscugq;
        aesqewckgocaowoi:
        return false;
        goto gsguoieaewagyogs;
        cwyqqgwwmesmkiam:
        return true;
        goto ssewsumymwocqyyc;
        gsguoieaewagyogs:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ocesuggkygmwyoqu;
        aomicoqgwkaiosso:
        return true;
        goto sgyogmewgaymcogg;
        ocesuggkygmwyoqu:
        if (!(stripos($this->agent, "\x6f\155\x6e\151\167\145\x62") !== false)) {
            goto qskksaagcgukausc;
        }
        goto amwwumeqoscyamoc;
        aaqekekaoaqgkiio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ogoiksimykeiuekg;
        omagiuciweiemoik:
        return false;
        goto uemcayqyeweiosqw;
        iimagwawmcgmaoga:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto aaqekekaoaqgkiio;
        ogoiksimykeiuekg:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto aomicoqgwkaiosso;
        amwwumeqoscyamoc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6f\155\x6e\x69\x77\x65\x62"));
        goto iimagwawmcgmaoga;
        sgyogmewgaymcogg:
        qskksaagcgukausc:
        goto omagiuciweiemoik;
        uemcayqyeweiosqw:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto eiwccayegouiekwk;
        ukeaeogwsoackkas:
        ksqsiosguewggcya:
        goto auaaassweykwwsge;
        iuumwocuuoyceaks:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto oewqywyeaueuiyes;
        oewqywyeaueuiyes:
        return true;
        goto ssoogecumeaeekcs;
        eiwccayegouiekwk:
        if (!(stripos($this->agent, "\120\150\x6f\x65\156\151\x78") !== false)) {
            goto ksqsiosguewggcya;
        }
        goto acasskokyagwkumy;
        ssoogecumeaeekcs:
        wusygegyegamyioq:
        goto ukeaeogwsoackkas;
        acasskokyagwkumy:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\120\150\157\145\x6e\151\x78"));
        goto osoyyysskuckoocc;
        osoyyysskuckoocc:
        if (!isset($quiguswioiaaywey[1])) {
            goto wusygegyegamyioq;
        }
        goto kuimgaokwkqogaqk;
        kuimgaokwkqogaqk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto iuumwocuuoyceaks;
        auaaassweykwwsge:
        return false;
        goto sqgomkiuekmaykyw;
        sqgomkiuekmaykyw:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto awyuyuuiayqoekkc;
        qwmuiakauycoowya:
        return true;
        goto csgyceiomssoweek;
        qkymmwmmiemiauyg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ykceeqicyiqgssye;
        eoemqkmecwqsagce:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\x46\x69\162\x65\x62\x69\x72\x64"));
        goto kigsuwkmaacmwgsq;
        icmgwgoywmewyeii:
        return false;
        goto mocwcekscogegcwa;
        ykceeqicyiqgssye:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto qwmuiakauycoowya;
        ycaskcwiywemgmay:
        mimmumuekmyyyaug:
        goto icmgwgoywmewyeii;
        awyuyuuiayqoekkc:
        if (!(stripos($this->agent, "\106\x69\x72\x65\x62\151\x72\144") !== false)) {
            goto mimmumuekmyyyaug;
        }
        goto eoemqkmecwqsagce;
        kigsuwkmaacmwgsq:
        if (!isset($quiguswioiaaywey[1])) {
            goto ouseosmqaaykkaaw;
        }
        goto qkymmwmmiemiauyg;
        csgyceiomssoweek:
        ouseosmqaaykkaaw:
        goto ycaskcwiywemgmay;
        mocwcekscogegcwa:
    }
    
    protected function aweyeayscomouegw()
    {
        goto aoasogsaqgewacum;
        kyisocwmmwaiwayk:
        if (stripos($this->agent, "\106\x69\162\x65\146\157\x78") === false && preg_match("\x2f\116\x65\164\163\x63\x61\x70\x65\x36\x3f\x5c\57\x28\133\136\x20\x5d\x2a\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ecsuogeauwascies;
        }
        goto mogugiawmaoukmak;
        weekemioaaygmggw:
        return false;
        goto ycgokycmgosuamok;
        mogugiawmaoukmak:
        goto aqewaqaseausoewg;
        goto ccokywiouwwmiwse;
        cciuyoceqiauqsic:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto oekaqqseuemcgeqe;
        oekaqqseuemcgeqe:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto ikcmeaikkuekumye;
        uuskeoeuumiigues:
        aqewaqaseausoewg:
        goto weekemioaaygmggw;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        mgqmswesaekqqwiu:
        goto aqewaqaseausoewg;
        goto yuaommqaoiseeice;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        ccokywiouwwmiwse:
        aegamiyqqcwuqcyk:
        goto ysmckuskoqmsyaca;
        yuaommqaoiseeice:
        ecsuogeauwascies:
        goto cciuyoceqiauqsic;
        aoasogsaqgewacum:
        if (stripos($this->agent, "\106\x69\162\145\146\157\170") !== false && preg_match("\x2f\116\141\x76\151\x67\141\x74\157\162\x5c\57\x28\x5b\x5e\x20\x5d\x2a\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto aegamiyqqcwuqcyk;
        }
        goto kyisocwmmwaiwayk;
        ikcmeaikkuekumye:
        return true;
        goto uuskeoeuumiigues;
        ycgokycmgosuamok:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto meamoqcwwsqiyoqc;
        wsmwmwswqaoeaquq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aeecqkykiqyuqmyg;
        waqwkysqcskykuum:
        mqweugciiyyukymg:
        goto yuqemymykuasskoy;
        aeecqkykiqyuqmyg:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto gmcieuucmgkcoyii;
        gmcieuucmgkcoyii:
        return true;
        goto waqwkysqcskykuum;
        meamoqcwwsqiyoqc:
        if (!(stripos($this->agent, "\115\x6f\x7a\x69\154\154\141") !== false && preg_match("\57\x53\150\x69\x72\145\x74\x6f\153\157\134\57\x28\133\x5e\x20\135\52\x29\57\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto mqweugciiyyukymg;
        }
        goto wsmwmwswqaoeaquq;
        yuqemymykuasskoy:
        return false;
        goto mmeumymqusiaiugs;
        mmeumymqusiaiugs:
    }
    
    protected function noeygigqkeciickm()
    {
        goto kscocsoaygkcaocq;
        kscocsoaygkcaocq:
        if (!(stripos($this->agent, "\115\157\x7a\x69\x6c\154\x61") !== false && preg_match("\x2f\111\x63\x65\x43\x61\x74\134\57\x28\x5b\136\40\135\52\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto qcqqieuakcakkwem;
        }
        goto akqgwckwiiugwiay;
        swusuwwawauqqqae:
        qcqqieuakcakkwem:
        goto qmssaeiomssoycas;
        qmssaeiomssoycas:
        return false;
        goto wamigcygcsucigmi;
        qgocscwqkuyemmcw:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto oiuiwkywiekacygs;
        oiuiwkywiekacygs:
        return true;
        goto swusuwwawauqqqae;
        akqgwckwiiugwiay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgocscwqkuyemmcw;
        wamigcygcsucigmi:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto iaumckssomaweakk;
        ouigaoeeokmqaqoe:
        goto kgwewosygiuoiigk;
        goto myycwmecoyeekeus;
        semoayicskccgemw:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto ouigaoeeokmqaqoe;
        qogciqauggmmigia:
        if (stripos($this->agent, "\x53\x65\162\x69\145\163\x36\x30") !== false || strpos($this->agent, "\123\66\60") !== false) {
            goto qmcmakumyemsuoaa;
        }
        goto semoayicskccgemw;
        ewoywsgmimyigwai:
        kgwewosygiuoiigk:
        goto smyugaykeesyuakw;
        uqemmmykkceucwum:
        return true;
        goto euoqiuygwwssoqou;
        myycwmecoyeekeus:
        qmcmakumyemsuoaa:
        goto aaymugikaeaqsaos;
        aaymugikaeaqsaos:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto ewoywsgmimyigwai;
        iaumckssomaweakk:
        if (!preg_match("\57\116\x6f\x6b\x69\x61\50\x5b\136\x5c\57\x5d\53\x29\x5c\57\50\x5b\136\x20\x53\120\135\x2b\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto mqqqqeiimsgyacaw;
        }
        goto uqsgmacmweuuwqgy;
        smyugaykeesyuakw:
        $this->eywockmuswoykooc(true);
        goto uqemmmykkceucwum;
        uqsgmacmweuuwqgy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qogciqauggmmigia;
        yseikqceqguugaee:
        return false;
        goto uioaeuugwsakiykw;
        euoqiuygwwssoqou:
        mqqqqeiimsgyacaw:
        goto yseikqceqguugaee;
        uioaeuugwsakiykw:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto oqqooygakaagaiqw;
        oqqooygakaagaiqw:
        if (!(stripos($this->agent, "\163\x61\146\x61\162\x69") === false)) {
            goto gsiigogemgmesycs;
        }
        goto qaqckwcumcykqcay;
        giiusoakskiciase:
        if (preg_match("\57\x50\x61\154\x65\x6d\x6f\157\156\x28\x5b\60\x2d\x39\x61\55\172\x41\x2d\132\134\x2e\135\x2b\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseakuykcykcomwg;
        }
        goto wkeeueuiysyiqaoq;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        oakyyiqquqsccuks:
        rkaswcmccyqqioqs:
        goto cwoaoecuqyiccwcw;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        aomoesqmwqcyueoa:
        return true;
        goto yggwmccmmiemueou;
        imimwegqkykucuia:
        return false;
        goto iksugmewgigsiaec;
        wcosggqmokuwgomy:
        goto koiuecgmeyuiwqkk;
        goto koomcmawyuomqmii;
        wguwcgascccyeasu:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto aomoesqmwqcyueoa;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto osioeeokiykiemau;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        iaksmguwicewykey:
        goto koiuecgmeyuiwqkk;
        goto qegwssscaomyoekg;
        qaqckwcumcykqcay:
        if (preg_match("\x2f\x50\141\x6c\x65\x6d\157\x6f\x6e\x5b\134\x2f\x20\x5c\x28\135\50\x5b\x5e\x20\73\134\51\x5d\53\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto rkaswcmccyqqioqs;
        }
        goto giiusoakskiciase;
        yysucuowuoiskkui:
        $this->aasasueowyemuyoc('');
        goto wguwcgascccyeasu;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        yggwmccmmiemueou:
        koiuecgmeyuiwqkk:
        goto cqouacqmcegmykuu;
        qegwssscaomyoekg:
        uiskkgkcyssegigy:
        goto yysucuowuoiskkui;
        mkyoiqgumggcsakq:
        goto koiuecgmeyuiwqkk;
        goto oakyyiqquqsccuks;
        wkeeueuiysyiqaoq:
        if (preg_match("\57\120\141\x6c\x65\x6d\157\157\156\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto uiskkgkcyssegigy;
        }
        goto mkyoiqgumggcsakq;
        cqouacqmcegmykuu:
        gsiigogemgmesycs:
        goto imimwegqkykucuia;
        koomcmawyuomqmii:
        yseakuykcykcomwg:
        goto smeqeomcqisgssau;
        iksugmewgigsiaec:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto omygyywamgusigko;
        seyoowocwsqsekqi:
        ewqooaykuauegwio:
        goto yoqwqkuekiauqsuc;
        baqgcseewusocmom:
        $this->eywockmuswoykooc(true);
        goto akkuysmcasqukkug;
        yoqwqkuekiauqsuc:
        if (stripos($this->agent, "\x4d\x6f\x62\x69\x6c\145") !== false) {
            goto jimwweuekesuemiy;
        }
        goto wousqisikkiooewi;
        omygyywamgusigko:
        if (!preg_match("\x2f\125\x43\40\x3f\x42\x72\157\167\163\x65\162\x5c\57\77\50\133\134\144\134\56\x5d\x2b\51\x2f", $this->agent, $meyiiwcswqmuggyg)) {
            goto iioueceaesegmgyi;
        }
        goto gouiskmmqywoscgm;
        sqsgeccoawoeukws:
        iioueceaesegmgyi:
        goto yqyyssciomuwwisa;
        wousqisikkiooewi:
        $this->icigyueiiwsukmsu(true);
        goto wwamkekgkkiogiiu;
        miwaaaueiacyqequ:
        jimwweuekesuemiy:
        goto baqgcseewusocmom;
        gaqigeacswyyikkk:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto qagasowcequukwoc;
        akkuysmcasqukkug:
        ywgwuqyisimkacqe:
        goto gaqigeacswyyikkk;
        qagasowcequukwoc:
        return true;
        goto sqsgeccoawoeukws;
        wwamkekgkkiogiiu:
        goto ywgwuqyisimkacqe;
        goto miwaaaueiacyqequ;
        uwcawmmgcaecgyqm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto seyoowocwsqsekqi;
        gouiskmmqywoscgm:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto ewqooaykuauegwio;
        }
        goto uwcawmmgcaecgyqm;
        yqyyssciomuwwisa:
        return false;
        goto cskgiyqesqqawuwo;
        cskgiyqesqqawuwo:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto ygoomqwcsggeiuge;
        ciimuiiegyeaggya:
        goto coyskeyoikeaqoek;
        goto gokkyeisqkoccqis;
        iqmgswgoooqkkigo:
        usmieesmayeskkmk:
        goto aoosuewasqmmyqoi;
        yewmigswwuewyqki:
        if (stripos($this->agent, "\x4d\157\x62\x69\154\x65") !== false || stripos($this->agent, "\124\x61\x62\x6c\x65\164") !== false) {
            goto sgwiageicumuqwke;
        }
        goto guwmgkcgaoysewyw;
        ymmqwacaoayoyiei:
        $this->eywockmuswoykooc(true);
        goto aqcucyeikgmemsoq;
        qmycieyiysuesagy:
        return true;
        goto wgiwseywikgwumwe;
        gqaiguosioisccwm:
        if (preg_match("\57\106\151\162\x65\146\157\170\x5b\134\x2f\x20\134\x28\135\x28\x5b\136\x20\73\134\51\x5d\x2b\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto usmieesmayeskkmk;
        }
        goto qwwscygkwwsiocok;
        qwwscygkwwsiocok:
        if (preg_match("\x2f\x46\x69\162\x65\146\157\x78\50\133\x30\x2d\71\x61\55\172\x41\55\x5a\x5c\56\135\53\x29\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto mmomogyaswcsgwwy;
        }
        goto wggeuckgywqucase;
        wgsqeuaooemcuqqu:
        amcioyyyuiigekuo:
        goto wwqoywoqcyikouca;
        gyomccegicuoyguk:
        return false;
        goto mquksyyawiwsakwy;
        guwmgkcgaoysewyw:
        $this->icigyueiiwsukmsu(true);
        goto ciimuiiegyeaggya;
        wgiwseywikgwumwe:
        kmwseockoawqkoao:
        goto rkoyiagmcaycmwmg;
        seggycoceaokwcsa:
        goto kmwseockoawqkoao;
        goto iqmgswgoooqkkigo;
        agiiusmyqqkgqymk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iammommmgkimyyaa;
        wcaiuquuswsqacgg:
        ngeuswkcwioygkku:
        goto gqaiguosioisccwm;
        cguuomiqwuicsgwa:
        $this->eywockmuswoykooc(true);
        goto yqggmewmakemgkui;
        aqcucyeikgmemsoq:
        coyskeyoikeaqoek:
        goto wgsqeuaooemcuqqu;
        ksogiaquuskeygaq:
        $this->icigyueiiwsukmsu(true);
        goto aygkuykcicgceciq;
        qkqwgsoymmqsqeim:
        if (preg_match("\x2f\x46\x78\x69\117\123\133\x5c\x2f\40\x5c\50\135\50\x5b\136\x20\73\134\x29\x5d\53\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto oymsgiwgeiqguuyy;
        }
        goto amksqwmicsmyocyw;
        aoosuewasqmmyqoi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto kwuakeywaocokwig;
        wowiaueqaaqckwqq:
        
        if (!(stripos($this->agent, "\x41\156\144\x72\157\x69\x64") !== false || stripos($this->agent, "\151\x50\x68\x6f\156\145") !== false)) {
            goto amcioyyyuiigekuo;
        }
        goto yewmigswwuewyqki;
        qoguisoimaueiaoo:
        wgcmsygycukiqmui:
        goto eowkmiqqmqyeayci;
        ygoomqwcsggeiuge:
        if (stripos($this->agent, "\163\x61\146\x61\162\151") === false) {
            goto ngeuswkcwioygkku;
        }
        goto qkqwgsoymmqsqeim;
        kwuakeywaocokwig:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wowiaueqaaqckwqq;
        gokkyeisqkoccqis:
        sgwiageicumuqwke:
        goto ymmqwacaoayoyiei;
        yqggmewmakemgkui:
        escuksewiugekayq:
        goto qoguisoimaueiaoo;
        egqqigmomgaaamqc:
        oymsgiwgeiqguuyy:
        goto agiiusmyqqkgqymk;
        eowkmiqqmqyeayci:
        return true;
        goto igsmwamoyswayqiy;
        wggeuckgywqucase:
        if (preg_match("\x2f\106\x69\162\145\x66\x6f\x78\44\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qwyameqoseiywwus;
        }
        goto seggycoceaokwcsa;
        kiqiskyesywkwkos:
        if (stripos($this->agent, "\115\x6f\142\x69\x6c\x65") !== false || stripos($this->agent, "\x54\141\x62\154\x65\164") !== false) {
            goto wwmqgecmsimuecam;
        }
        goto ksogiaquuskeygaq;
        rkoyiagmcaycmwmg:
        goto kaycawgquiieeaiw;
        goto egqqigmomgaaamqc;
        gseqciagemceawam:
        $this->aasasueowyemuyoc('');
        goto ikiegwiqykqwuykk;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        kuegskyiyugiuosa:
        goto kmwseockoawqkoao;
        goto uaigiceqkuiguogo;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        uaigiceqkuiguogo:
        qwyameqoseiywwus:
        goto gseqciagemceawam;
        aygkuykcicgceciq:
        goto escuksewiugekayq;
        goto kiocmmsiuwcuemyg;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto usaooeqiaewcmyog;
        qyogimcocyqgyyee:
        goto kmwseockoawqkoao;
        goto aksacseyuwyiseay;
        kiocmmsiuwcuemyg:
        wwmqgecmsimuecam:
        goto cguuomiqwuicsgwa;
        amksqwmicsmyocyw:
        goto kaycawgquiieeaiw;
        goto wcaiuquuswsqacgg;
        ikiegwiqykqwuykk:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto qmycieyiysuesagy;
        igsmwamoyswayqiy:
        kaycawgquiieeaiw:
        goto gyomccegicuoyguk;
        cwycmkkoscmgcecg:
        
        if (!(stripos($this->agent, "\x41\x6e\x64\x72\x6f\x69\x64") !== false || stripos($this->agent, "\x69\120\150\157\156\145") !== false)) {
            goto wgcmsygycukiqmui;
        }
        goto kiqiskyesywkwkos;
        aksacseyuwyiseay:
        mmomogyaswcsgwwy:
        goto sgaqioqcecwgyikg;
        iammommmgkimyyaa:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto cwycmkkoscmgcecg;
        mquksyyawiwsakwy:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto qiocyqceaiyiakii;
        iscqcsqyqkmkgkag:
        return true;
        goto skkmiiyukuqmiimc;
        qqaeaoygygacuuos:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\143\145\x77\x65\141\x73\145\154"));
        goto wasmuqumoqqcmgys;
        eoewsuaewaeueaks:
        return false;
        goto qscgsguyqggkagoe;
        agsoqikgikksqkom:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto iscqcsqyqkmkgkag;
        qiocyqceaiyiakii:
        if (!(stripos($this->agent, "\x49\x63\x65\x77\x65\x61\x73\x65\x6c") !== false)) {
            goto mgqockcuascmkosg;
        }
        goto qqaeaoygygacuuos;
        skkmiiyukuqmiimc:
        coosgwiiekamiyug:
        goto uogoykaeoysgmism;
        mokuaeasioyuisqs:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto umacsiiqmwygcycu;
        wasmuqumoqqcmgys:
        if (!isset($yikciqwsimweauyg[1])) {
            goto coosgwiiekamiyug;
        }
        goto mokuaeasioyuisqs;
        umacsiiqmwygcycu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto agsoqikgikksqkom;
        uogoykaeoysgmism:
        mgqockcuascmkosg:
        goto eoewsuaewaeueaks;
        qscgsguyqggkagoe:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto mcukkaquiosmsguy;
        ooswoacocwcgoagc:
        goto awceesgmgquwakuu;
        goto kyqewaqymicucwuc;
        eoeoqacqgmumwcuk:
        gmeiquwcawwmowwm:
        goto wmssuwyesuyeiows;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        siyeyakoauowwose:
        $this->aasasueowyemuyoc(str_replace("\162\x76\72", '', $quiguswioiaaywey[0]));
        goto eaawsaueyyoiqoao;
        uieyawsyauemyqgy:
        goto awceesgmgquwakuu;
        goto uciuogooymiyqyao;
        kwkcmwgyiwyacywi:
        preg_match("\57\162\166\72\133\x30\55\x39\135\56\x5b\60\x2d\x39\135\133\141\55\142\x5d\77\x2f\151", $this->agent, $quiguswioiaaywey);
        goto siyeyakoauowwose;
        gwigmqemwuqewiae:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\166\x3a"));
        goto kkweuygueeaqsksg;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        eyimkecocwsicyge:
        return true;
        goto ooswoacocwcgoagc;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc(str_replace("\162\166\72", '', $quiguswioiaaywey[0]));
        goto iyqmmwymomwqiqaw;
        eaawsaueyyoiqoao:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eyimkecocwsicyge;
        msmouyoaqcwsasuw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ymqwkscegcogqqwy;
        usaokwsyegousimg:
        if (stripos($this->agent, "\155\x6f\172\151\x6c\x6c\141") !== false && preg_match("\x2f\x72\x76\72\133\60\55\x39\135\134\56\133\x30\55\x39\135\57\x69", $this->agent) && stripos($this->agent, "\156\145\x74\x73\x63\x61\160\x65") === false) {
            goto ameeyqiguwmykwai;
        }
        goto ckgoiwueekyamwcu;
        ckgoiwueekyamwcu:
        if (stripos($this->agent, "\x6d\x6f\172\151\x6c\154\x61") !== false && preg_match("\57\155\x6f\172\x69\x6c\x6c\x61\x5c\57\50\133\x5e\x20\135\x2a\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\156\x65\164\163\x63\141\x70\145") === false) {
            goto eswswyigkwqaaasy;
        }
        goto uusaeowyacskgumg;
        oayqqymykwwugkwe:
        return true;
        goto wwwqiimkicqiuwui;
        wwwqiimkicqiuwui:
        awceesgmgquwakuu:
        goto qewckkocqykmeywg;
        uusaeowyacskgumg:
        goto awceesgmgquwakuu;
        goto eoeoqacqgmumwcuk;
        wmssuwyesuyeiows:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\162\x76\x3a"));
        goto kwkcmwgyiwyacywi;
        kyqewaqymicucwuc:
        ameeyqiguwmykwai:
        goto gwigmqemwuqewiae;
        qewckkocqykmeywg:
        return false;
        goto ugsumemcqucesssg;
        ymqwkscegcogqqwy:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto oayqqymykwwugkwe;
        mcukkaquiosmsguy:
        if (stripos($this->agent, "\x6d\x6f\x7a\151\154\154\x61") !== false && preg_match("\x2f\162\166\x3a\x5b\x30\55\71\135\x2e\133\60\55\x39\x5d\x5b\141\55\x62\135\77\x2f\151", $this->agent) && stripos($this->agent, "\156\145\164\x73\x63\x61\160\x65") === false) {
            goto gmeiquwcawwmowwm;
        }
        goto usaokwsyegousimg;
        uciuogooymiyqyao:
        eswswyigkwqaaasy:
        goto msmouyoaqcwsasuw;
        ugsumemcqucesssg:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto cqayoeygyqqamquk;
        sgwucycigkyieoea:
        gyoiekqiqwwquomc:
        goto ksswuscweggkeiko;
        ksswuscweggkeiko:
        return false;
        goto qsoukmmoqeuqsoee;
        cqayoeygyqqamquk:
        if (!(stripos($this->agent, "\154\x79\x6e\x78") !== false)) {
            goto gyoiekqiqwwquomc;
        }
        goto cmowiicqgqiakqem;
        qsqskaukgysseokg:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto seswyksiukyeqkqc;
        cmowiicqgqiakqem:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\114\x79\x6e\170"));
        goto qsqskaukgysseokg;
        seswyksiukyeqkqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iieeiugaeeqyaqok;
        iieeiugaeeqyaqok:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto eiiemassiceeqmeq;
        eiiemassiceeqmeq:
        return true;
        goto sgwucycigkyieoea;
        qsoukmmoqeuqsoee:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto mksgcawyikcceiqa;
        uuqskowyckcgagkc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ukiiyimwmgiqisca;
        }
        goto wwyeoccuqgcgcuuc;
        eiqmqaiyewsgyois:
        return true;
        goto wekysuykykiweqms;
        mksgcawyikcceiqa:
        if (!(stripos($this->agent, "\141\155\x61\171\141") !== false)) {
            goto ocoaeuqqauqewyig;
        }
        goto gkaykeoacgugeumu;
        kacseggomkeowiqm:
        ocoaeuqqauqewyig:
        goto iaiekaygcqmocmee;
        yksmaaesmwecwoak:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sgsaqgwgakicwckk;
        wwyeoccuqgcgcuuc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yksmaaesmwecwoak;
        sgsaqgwgakicwckk:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto eiqmqaiyewsgyois;
        gkaykeoacgugeumu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x41\155\141\x79\x61"));
        goto uuqskowyckcgagkc;
        wekysuykykiweqms:
        ukiiyimwmgiqisca:
        goto kacseggomkeowiqm;
        iaiekaygcqmocmee:
        return false;
        goto wguukissuqyuqeku;
        wguukissuqyuqeku:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto eyowigugugmmkeiw;
        yiamqaqsueaiqwuq:
        return false;
        goto mceeomsqguaacseg;
        qkgkkwcagegkwkwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oioqgywuoiaisyuu;
        kycikakmkwkieqwk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qkgkkwcagegkwkwi;
        oioqgywuoiaisyuu:
        kewymgqeemiuewca:
        goto iqymaeimsmwkkkie;
        kgecmyesgkacyyqm:
        ggwywcekieoyeuya:
        goto kycikakmkwkieqwk;
        ccsysoygswagacce:
        goto kewymgqeemiuewca;
        goto kgecmyesgkacyyqm;
        uuqaakyqgqwiiwom:
        scooeumumiwmgowm:
        goto yiamqaqsueaiqwuq;
        iqymaeimsmwkkkie:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto essqemwiweimukwe;
        jawaweyeoaoueooa:
        if (isset($yikciqwsimweauyg[1])) {
            goto ggwywcekieoyeuya;
        }
        goto wayscwykqcwqgqyi;
        yieeukyoaeioqock:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\x65\162\x73\151\x6f\156"));
        goto jawaweyeoaoueooa;
        eyowigugugmmkeiw:
        if (!(stripos($this->agent, "\x53\x61\146\141\162\x69") !== false && stripos($this->agent, "\x69\120\150\157\156\145") === false && stripos($this->agent, "\151\x50\157\144") === false)) {
            goto scooeumumiwmgowm;
        }
        goto yieeukyoaeioqock;
        essqemwiweimukwe:
        return true;
        goto uuqaakyqgqwiiwom;
        wayscwykqcwqgqyi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ccsysoygswagacce;
        mceeomsqguaacseg:
    }
    protected function yswggmyigakcackc()
    {
        goto qwmyieguwoysqegw;
        qwmyieguwoysqegw:
        if (!(stripos($this->agent, "\123\141\155\x73\x75\156\147\x42\162\157\167\163\145\162") !== false)) {
            goto qugekewwywkuiqyk;
        }
        goto gsyquwaygesygkiq;
        aiyqwwuiayikques:
        goto cwcuamqicskkmuyg;
        goto swgqwkyuwoqeyeyu;
        moyywqqiasmyoscc:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto aiyqwwuiayikques;
        ggqwsgmqqyaicosm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iieymwaigukwymsc;
        raigmgqaksaqoosc:
        return true;
        goto ascewisaoqauaymk;
        aukkqqimoumiiccy:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto raigmgqaksaqoosc;
        keyciqmuisymkgcw:
        if (isset($yikciqwsimweauyg[1])) {
            goto mkumickumqmmkiqc;
        }
        goto moyywqqiasmyoscc;
        kcckgokmwuywmaiw:
        return false;
        goto iwoquisgaegiocss;
        iieymwaigukwymsc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mcqygaykwaaseack;
        mcqygaykwaaseack:
        cwcuamqicskkmuyg:
        goto aukkqqimoumiiccy;
        swgqwkyuwoqeyeyu:
        mkumickumqmmkiqc:
        goto ggqwsgmqqyaicosm;
        ascewisaoqauaymk:
        qugekewwywkuiqyk:
        goto kcckgokmwuywmaiw;
        gsyquwaygesygkiq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\141\x6d\x73\165\x6e\x67\x42\162\x6f\x77\x73\145\x72"));
        goto keyciqmuisymkgcw;
        iwoquisgaegiocss:
    }
    protected function uiwkymoksesuumwe()
    {
        goto oakguomioocmeiia;
        dwyqyusgqwqwomqk:
        wqswcaeeyeaqieom:
        goto emaeckumgkmgcaew;
        wuoaeksukwwaycoi:
        qoamoegiiwismakk:
        goto eusmcuqiciwcooss;
        oakguomioocmeiia:
        if (!(stripos($this->agent, "\123\x69\154\153") !== false)) {
            goto wqswcaeeyeaqieom;
        }
        goto yuyccgsguyaaygmu;
        mmuomyiooicyqscg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yegcwkkemkycyuua;
        gamusuoqieekieka:
        return true;
        goto dwyqyusgqwqwomqk;
        eusmcuqiciwcooss:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto gamusuoqieekieka;
        uqieceoogswuggos:
        yccweyyksqycwuqi:
        goto mmuomyiooicyqscg;
        yegcwkkemkycyuua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wuoaeksukwwaycoi;
        emaeckumgkmgcaew:
        return false;
        goto wiamyucsaoosmoei;
        eiissuweooqsaauy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto kakgceiyakaueuww;
        kakgceiyakaueuww:
        goto qoamoegiiwismakk;
        goto uqieceoogswuggos;
        smagqkegqiooysya:
        if (isset($yikciqwsimweauyg[1])) {
            goto yccweyyksqycwuqi;
        }
        goto eiissuweooqsaauy;
        yuyccgsguyaaygmu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\151\x6c\153"));
        goto smagqkegqiooysya;
        wiamyucsaoosmoei:
    }
    protected function cgqcukygysieeqko()
    {
        goto ysoiwegyoqymuuek;
        ayqocaaesmkygque:
        oqqscigyquseosya:
        goto usaseckaaaugcygu;
        ysoiwegyoqymuuek:
        if (!(stripos($this->agent, "\111\146\162\x61\155\145\x6c\171") !== false)) {
            goto akqsaiecouuqacks;
        }
        goto cucsooyoayssmcas;
        qkeuasieckwuqseq:
        return false;
        goto ouaokeyacuscccyu;
        ckguemuwukmeycag:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ayqocaaesmkygque;
        qskoquwmkkgkkmuy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qyskykugeiqkauce;
        usaseckaaaugcygu:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto muouqwckwywsgiwg;
        qyskykugeiqkauce:
        goto oqqscigyquseosya;
        goto cguckckouuwacmow;
        mkywwqusckeeisiy:
        if (isset($yikciqwsimweauyg[1])) {
            goto iiwmmqqaqckwwiqe;
        }
        goto qskoquwmkkgkkmuy;
        qquimmcqqiyegcym:
        akqsaiecouuqacks:
        goto qkeuasieckwuqseq;
        cguckckouuwacmow:
        iiwmmqqaqckwwiqe:
        goto wacgcmsgismsomma;
        cucsooyoayssmcas:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x49\146\162\141\x6d\145\154\x79"));
        goto mkywwqusckeeisiy;
        wacgcmsgismsomma:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckguemuwukmeycag;
        muouqwckwywsgiwg:
        return true;
        goto qquimmcqqiyegcym;
        ouaokeyacuscccyu:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto eeqsuowcmyeyuoqw;
        wwiysyawwqeuikcc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto soqmkkwmmkqiweau;
        osygawsacakgggko:
        if (isset($yikciqwsimweauyg[1])) {
            goto iywyeuaaoaeymmag;
        }
        goto iwwouqosmwummgsi;
        ymcqcaygueguiuig:
        iywyeuaaoaeymmag:
        goto eiwuwemqmigskwoe;
        eiwuwemqmigskwoe:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wwiysyawwqeuikcc;
        sqwwkouiqayeqeyo:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto oqoyyooooyegowuk;
        iwwouqosmwummgsi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wygcwcywyeosuemq;
        soqmkkwmmkqiweau:
        wsiggqyeiueeyqyu:
        goto sqwwkouiqayeqeyo;
        kggwwgeqkgwyoseq:
        ikcsgymqsagymgco:
        goto kuqeksgikkymkyeo;
        auaukkuskuciowkq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\103\157\143\x6f\x61\x52\x65\163\164\x43\x6c\151\x65\156\x74"));
        goto osygawsacakgggko;
        oqoyyooooyegowuk:
        return true;
        goto kggwwgeqkgwyoseq;
        eeqsuowcmyeyuoqw:
        if (!(stripos($this->agent, "\103\157\x63\x6f\x61\x52\145\163\164\x43\x6c\151\145\x6e\164") !== false)) {
            goto ikcsgymqsagymgco;
        }
        goto auaukkuskuciowkq;
        wygcwcywyeosuemq:
        goto wsiggqyeiueeyqyu;
        goto ymcqcaygueguiuig;
        kuqeksgikkymkyeo:
        return false;
        goto aogimqgcygkugqoc;
        aogimqgcygkugqoc:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto gkkogauyaimaaoky;
        ckyyyqokcocsmium:
        $this->oqgqmcogeugkakss(true);
        goto qioeweaouoiyoayy;
        qioeweaouoiyoayy:
        return true;
        goto ssyeoucmcqaewkws;
        ssyeoucmcqaewkws:
        kwmkgoegswsseyia:
        goto gukuouumaoiiugiw;
        gkkogauyaimaaoky:
        if (!stristr($this->agent, "\106\141\x63\145\142\157\157\153\105\x78\x74\x65\x72\156\x61\x6c\x48\x69\164")) {
            goto kwmkgoegswsseyia;
        }
        goto akocagcmqwymsqqw;
        akocagcmqwymsqqw:
        $this->aasmeayouwmacaow(true);
        goto ckyyyqokcocsmium;
        gukuouumaoiiugiw:
        return false;
        goto ayyeoeyyawiuiukq;
        ayyeoeyyawiuiukq:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto gosqmqqycwquosse;
        kekiekeeqkowaiga:
        return true;
        goto wscoawgsgqekweuq;
        gosqmqqycwquosse:
        if (!stristr($this->agent, "\106\x42\111\117\123")) {
            goto soyeimgmemqugquc;
        }
        goto cwgiecqggoksyuko;
        wscoawgsgqekweuq:
        soyeimgmemqugquc:
        goto ysuyamauyegkceea;
        ysuyamauyegkceea:
        return false;
        goto wqmmaiwyoumwmiyi;
        cwgiecqggoksyuko:
        $this->oqgqmcogeugkakss(true);
        goto kekiekeeqkowaiga;
        wqmmaiwyoumwmiyi:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto iuugeqgkacqmuais;
        ycagakkcsskiqweu:
        oaoaskeocoucoaes:
        goto gqsmmaqkuciiwwki;
        iuugeqgkacqmuais:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\126\145\162\163\151\157\156"));
        goto eqocwcasskyqeauu;
        uiseoyicaoyaokum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oyswaymeoiouuaoo;
        gqsmmaqkuciiwwki:
        return false;
        goto yuokckkqcuumcmua;
        kkiiykemaoeswsay:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto uiseoyicaoyaokum;
        eqocwcasskyqeauu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oaoaskeocoucoaes;
        }
        goto kkiiykemaoeswsay;
        oyswaymeoiouuaoo:
        return true;
        goto ycagakkcsskiqweu;
        yuokckkqcuumcmua:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto ssciauiqmswaugss;
        gmiywscmoiqcceks:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikumyeymcsyyuauw;
        keuamggsqkcwyoqi:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto uywiwaiokksgwuqm;
        ikumyeymcsyyuauw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto keuamggsqkcwyoqi;
        gousoguwcwieyseq:
        return false;
        goto wouosmamsmggekic;
        messwieuimiowsag:
        imumueocakucecam:
        goto gousoguwcwieyseq;
        aykkiwwmmckueiak:
        if (!isset($yikciqwsimweauyg[1])) {
            goto imumueocakucecam;
        }
        goto gmiywscmoiqcceks;
        uywiwaiokksgwuqm:
        return true;
        goto messwieuimiowsag;
        ssciauiqmswaugss:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x43\162\151\x4f\x53"));
        goto aykkiwwmmckueiak;
        wouosmamsmggekic:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto ykqeyymweawywsia;
        yyagogoiskcuomuq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto cwmsekismgywawai;
        cwmsekismgywawai:
        $this->uewoqoqkekmsyoeo();
        goto aooeicywwyscawue;
        awoyakoygoouaqgi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto yyagogoiskcuomuq;
        lwaoqwcmyiqkkouw:
        $this->eywockmuswoykooc(true);
        goto emsgawiqsesiiccg;
        aooeicywwyscawue:
        $this->iqsiguacookiqwcs();
        goto qemqoaymwywkewmy;
        eekkyoakqmykcqec:
        yisqaaicegsokeuk:
        goto ismcyiwkmqaaygge;
        qemqoaymwywkewmy:
        $this->ssquiwqwwcgcqiic();
        goto lwaoqwcmyiqkkouw;
        ykqeyymweawywsia:
        if (!(stripos($this->agent, "\151\120\x68\157\x6e\x65") !== false)) {
            goto yisqaaicegsokeuk;
        }
        goto awoyakoygoouaqgi;
        ismcyiwkmqaaygge:
        return false;
        goto wugyaiqayoamwacg;
        emsgawiqsesiiccg:
        return true;
        goto eekkyoakqmykcqec;
        wugyaiqayoamwacg:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto qwscyqgokmkeqwuq;
        syookwiaqwmsaoem:
        $this->icigyueiiwsukmsu(true);
        goto usscqwyeesggymse;
        soiuksqqwmsqwyeq:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto kiauseesqiwimyue;
        syosmkmiyacocysi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soiuksqqwmsqwyeq;
        okmmkcokmyiqkceg:
        secssyuygoycmiqa:
        goto uguwgicugawycckm;
        uguwgicugawycckm:
        return false;
        goto wskgeycusaokeymw;
        sokqsksiecasgugs:
        $this->iqsiguacookiqwcs();
        goto qyaiyoskqmqyyuos;
        kiauseesqiwimyue:
        $this->uewoqoqkekmsyoeo();
        goto sokqsksiecasgugs;
        qyaiyoskqmqyyuos:
        $this->ssquiwqwwcgcqiic();
        goto syookwiaqwmsaoem;
        qwscyqgokmkeqwuq:
        if (!(stripos($this->agent, "\x69\120\x61\x64") !== false)) {
            goto secssyuygoycmiqa;
        }
        goto syosmkmiyacocysi;
        usscqwyeesggymse:
        return true;
        goto okmmkcokmyiqkceg;
        wskgeycusaokeymw:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto guuowemmmmcgukow;
        guuowemmmmcgukow:
        if (!(stripos($this->agent, "\x69\120\x6f\144") !== false)) {
            goto kmwwukmymssqakuk;
        }
        goto yycskqumwcimyyye;
        sgkeayimkgeyaqic:
        $this->uewoqoqkekmsyoeo();
        goto wyqemyugccycgaso;
        kgmwwkoiqwyscmys:
        $this->eywockmuswoykooc(true);
        goto wcuqqmycwwoqwwga;
        woiqioceiyccoyyi:
        kmwwukmymssqakuk:
        goto kqaemkmmqkyeweye;
        okgoksuuouqmmqog:
        $this->ssquiwqwwcgcqiic();
        goto kgmwwkoiqwyscmys;
        kqaemkmmqkyeweye:
        return false;
        goto kmggqcwmkwwcuioa;
        wyqemyugccycgaso:
        $this->iqsiguacookiqwcs();
        goto okgoksuuouqmmqog;
        wcuqqmycwwoqwwga:
        return true;
        goto woiqioceiyccoyyi;
        yycskqumwcimyyye:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qiayswmiyoqisyac;
        qiayswmiyoqisyac:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto sgkeayimkgeyaqic;
        kmggqcwmkwwcuioa:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto yqiyiacommmwsuce;
        sisuqeisegegcsiy:
        return true;
        goto yammukygywskcuey;
        yammukygywskcuey:
        iuaaiqsmgoqiscio:
        goto yusmiciysquiqayq;
        msasquyamakaamys:
        $this->eywockmuswoykooc(true);
        goto yymscyccyaauqiaa;
        womwoaskosgsauog:
        goto aqcwmswmgmgqokmu;
        goto wiuyqgeaacmksuqq;
        wiuyqgeaacmksuqq:
        yecageyyqwumqoca:
        goto msasquyamakaamys;
        yusmiciysquiqayq:
        return false;
        goto gquuqqacuqsgsyqc;
        ckkwwiuyquomkcku:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yemgimowqwsuqegu;
        soqyakgcqemouuko:
        goto agwcwemswacqgqyk;
        goto squaugeowuwyumqu;
        sskqokueeqgsuumq:
        if (stripos($this->agent, "\x4d\x6f\142\151\x6c\x65") !== false) {
            goto yecageyyqwumqoca;
        }
        goto ysuagggqaicqyguk;
        squaugeowuwyumqu:
        gssmokgwcmqesyao:
        goto kumioksgmqmsaeqy;
        owayquiaceqooaiq:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto sisuqeisegegcsiy;
        ikkseymmmeooqmcm:
        if (isset($yikciqwsimweauyg[1])) {
            goto gssmokgwcmqesyao;
        }
        goto cimakcokyqkmyiau;
        kumioksgmqmsaeqy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckkwwiuyquomkcku;
        kweqeekeouiqocqw:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\101\x6e\x64\x72\x6f\x69\144"));
        goto ikkseymmmeooqmcm;
        yemgimowqwsuqegu:
        agwcwemswacqgqyk:
        goto sskqokueeqgsuumq;
        yqiyiacommmwsuce:
        if (!(stripos($this->agent, "\101\x6e\x64\162\157\x69\x64") !== false)) {
            goto iuaaiqsmgoqiscio;
        }
        goto kweqeekeouiqocqw;
        ysuagggqaicqyguk:
        $this->icigyueiiwsukmsu(true);
        goto womwoaskosgsauog;
        cimakcokyqkmyiau:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soqyakgcqemouuko;
        yymscyccyaauqiaa:
        aqcwmswmgmgqokmu:
        goto owayquiaceqooaiq;
        gquuqqacuqsgsyqc:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto qikuwygeoaimcukg;
        ewgqscsiomaciyew:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iewuyuigwmkcmcas;
        qikuwygeoaimcukg:
        if (!(stripos($this->agent, "\x56\151\166\141\x6c\144\151") !== false)) {
            goto okacoggoqgoomuyc;
        }
        goto ceiseomqooekseuo;
        sccmgumeswegawyk:
        okacoggoqgoomuyc:
        goto csuikuskoecgsymk;
        iewuyuigwmkcmcas:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto qekesyoouukaciyy;
        qekesyoouukaciyy:
        return true;
        goto sesgwayockkaakwm;
        umyuckgysaegimue:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ewgqscsiomaciyew;
        siaqsogicwwmayco:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qysqqycgiwmucggw;
        }
        goto umyuckgysaegimue;
        ceiseomqooekseuo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\151\x76\141\x6c\x64\151"));
        goto siaqsogicwwmayco;
        sesgwayockkaakwm:
        qysqqycgiwmucggw:
        goto sccmgumeswegawyk;
        csuikuskoecgsymk:
        return false;
        goto eeieacyyeywwyewo;
        eeieacyyeywwyewo:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto ugkesgkkcqcasmoq;
        kuyowuyquoioeqoc:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto suessqeuiasoqioi;
        aeycoymkqiwogwag:
        $this->eywockmuswoykooc(true);
        goto cgqqkkwugmiqyiow;
        ykwmoaqmwggiqmsk:
        wyimgokwakggwuoi:
        goto yymiwwumowysiagy;
        ommoqequygggywyi:
        return true;
        goto miayoysigsgumwyi;
        qsacucessyquaame:
        wwaocaooaayqamsu:
        goto ommoqequygggywyi;
        miayoysigsgumwyi:
        scqaokckckemicqi:
        goto msqmyqgiaeeeoeco;
        oymuyuskiqyacysw:
        if (stripos($this->agent, "\115\157\x62\x69\154\145") !== false) {
            goto gcgyqiaawwccgqaw;
        }
        goto koceigseyecoyoia;
        aucmemccqucmicwm:
        goto wwaocaooaayqamsu;
        goto qqsiimkqkguqkeag;
        mquyowqsoawycyok:
        gcgyqiaawwccgqaw:
        goto aeycoymkqiwogwag;
        ugkesgkkcqcasmoq:
        if (!(stripos($this->agent, "\x59\141\102\162\x6f\x77\163\x65\x72") !== false)) {
            goto yyimqwkqigowmcco;
        }
        goto gaomwgqgumkcqawg;
        cgqqkkwugmiqyiow:
        goto wwaocaooaayqamsu;
        goto ykwmoaqmwggiqmsk;
        umkyqiyguqoauyek:
        return false;
        goto eceqcqseqcswkywu;
        eicqsqkmeaimooii:
        $this->icigyueiiwsukmsu(true);
        goto giawgsomaouqgiyc;
        msqmyqgiaeeeoeco:
        yyimqwkqigowmcco:
        goto umkyqiyguqoauyek;
        koceigseyecoyoia:
        if (stripos($this->agent, "\101\x6e\144\x72\157\151\144") !== false) {
            goto wyimgokwakggwuoi;
        }
        goto aucmemccqucmicwm;
        qqsiimkqkguqkeag:
        mioiqgkakcguokqa:
        goto eicqsqkmeaimooii;
        ysoeqwagkauquwme:
        if (!isset($yikciqwsimweauyg[1])) {
            goto scqaokckckemicqi;
        }
        goto uwkiseisiuqsoqsa;
        yikaomgieukoawws:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kuyowuyquoioeqoc;
        suessqeuiasoqioi:
        if (stripos($this->agent, "\x69\x50\x61\144") !== false) {
            goto mioiqgkakcguokqa;
        }
        goto oymuyuskiqyacysw;
        gaomwgqgumkcqawg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x42\162\157\167\x73\145\x72"));
        goto ysoeqwagkauquwme;
        yymiwwumowysiagy:
        $this->icigyueiiwsukmsu(true);
        goto qsacucessyquaame;
        giawgsomaouqgiyc:
        goto wwaocaooaayqamsu;
        goto mquyowqsoawycyok;
        uwkiseisiuqsoqsa:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yikaomgieukoawws;
        eceqcqseqcswkywu:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto ciewwguuyumcisme;
        sayicwyqgigeswug:
        $quiguswioiaaywey = explode("\51", $yikciqwsimweauyg[2]);
        goto ccmmogiaggiuewmu;
        qmisymqoqmqocwoe:
        $this->eywockmuswoykooc(true);
        goto mcygcucugmyqswys;
        ywuwweugeccmeuqk:
        eyekywukwqucywcm:
        goto iwacoiqoegwuaoqo;
        syqgqkeomqsysaey:
        if (!(stripos($this->agent, "\x50\157\x72\x74\x61\x62\x6c\145\51") !== false || stripos($this->agent, "\x56\x69\x74\x61") !== false)) {
            goto uuweusyuygicyoik;
        }
        goto qmisymqoqmqocwoe;
        uyymyaogieaawaig:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto iwgksuqmosckeqys;
        iwacoiqoegwuaoqo:
        return false;
        goto wkmmaysiigyuyimk;
        ciewwguuyumcisme:
        if (!(stripos($this->agent, "\x50\154\141\x79\123\x74\x61\x74\x69\157\156\x20") !== false)) {
            goto eyekywukwqucywcm;
        }
        goto uwwiiwscccuowuoq;
        gqomqwuiesioaaaq:
        qugmeamkemckgqwo:
        goto ywuwweugeccmeuqk;
        mcygcucugmyqswys:
        uuweusyuygicyoik:
        goto sieaoicuiusscywg;
        uwwiiwscccuowuoq:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x50\x6c\141\x79\123\164\141\x74\151\157\156\x20"));
        goto uyymyaogieaawaig;
        sieaoicuiusscywg:
        return true;
        goto gqomqwuiesioaaaq;
        ccmmogiaggiuewmu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto syqgqkeomqsysaey;
        iwgksuqmosckeqys:
        if (!isset($yikciqwsimweauyg[0])) {
            goto qugmeamkemckgqwo;
        }
        goto sayicwyqgigeswug;
        wkmmaysiigyuyimk:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto imgwqyoiweuiwiec;
        qqsmygoumegcogay:
        return false;
        goto qykkceysyessasey;
        kwsagikwoqogqecc:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto wicaemaewwoooiuq;
        wicaemaewwoooiuq:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto qmqsccegugoiyaiu;
        imgwqyoiweuiwiec:
        if (!preg_match("\x21\x5e\127\x67\145\164\57\x28\x5b\136\x20\x5d\x2b\51\41\x69", $this->agent, $yikciqwsimweauyg)) {
            goto igcukieyogyaqwyo;
        }
        goto kwsagikwoqogqecc;
        ggqeyyoscwueysku:
        igcukieyogyaqwyo:
        goto qqsmygoumegcogay;
        qmqsccegugoiyaiu:
        return true;
        goto ggqeyyoscwueysku;
        qykkceysyessasey:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto wsgkqgogymcgueag;
        sukiqmyemewakiao:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yeqmmgegmqgwyaea;
        yeqmmgegmqgwyaea:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mkycqgqaawooaaeu;
        wsgkqgogymcgueag:
        if (!(strpos($this->agent, "\143\x75\x72\x6c") === 0)) {
            goto sucmgqcacggcucec;
        }
        goto eimqoqgqmsiokyeq;
        okqmcygoiwaesmis:
        sucmgqcacggcucec:
        goto kkecucquwauqqyku;
        ecusscoueakqaqsu:
        iwyoaksegwaksmsu:
        goto okqmcygoiwaesmis;
        iyqcgqusyeiiaiai:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iwyoaksegwaksmsu;
        }
        goto sukiqmyemewakiao;
        eimqoqgqmsiokyeq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x63\165\x72\154"));
        goto iyqcgqusyeiiaiai;
        kkecucquwauqqyku:
        return false;
        goto gqcyummwsikcccom;
        uyiaqakwuswweqme:
        return true;
        goto ecusscoueakqaqsu;
        mkycqgqaawooaaeu:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto uyiaqakwuswweqme;
        gqcyummwsikcccom:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto owkougkyymiwoaqu;
        qsikciasasogymew:
        woqqukymqiuyququ:
        goto mcqoyigqsewkkwgc;
        iiyysuksmomyyuye:
        $this->platform = self::PLATFORM_IPHONE;
        goto cugaeomiskasooic;
        oguaeaawigyoscii:
        if (stripos($this->agent, "\111\146\162\141\x6d\x65\x6c\x79") !== false) {
            goto ycskcusgcyeowagm;
        }
        goto mougyosiwyugsymo;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\x53\x75\156\117\123") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        esqckkawqugyqimw:
        goto miqaocyiuwmyyycc;
        goto wksuqaqsicwqekuy;
        wyokgowugcsiigum:
        ymyoskqgyeykqmom:
        goto uiqoeooowosqagsw;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\116\145\164\x42\x53\x44") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        imwweegoasykooim:
        $this->platform = self::PLATFORM_APPLE;
        goto yukieguwkeesieiy;
        esscoiyogsoqoquc:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto gciescsgqiuoqkim;
        eccymasqomswiwug:
        $this->platform = self::PLATFORM_I_FRAME;
        goto yaaisamcwuuowiua;
        emooiegicmmqkwsg:
        goto miqaocyiuwmyyycc;
        goto qcqgakkooouyiooi;
        igiuieggauocicsg:
        $this->platform = self::PLATFORM_IPOD;
        goto oaoummcgooyceayi;
        wmcckwsaaemkqweg:
        goto miqaocyiuwmyyycc;
        goto iqucsoqomgkeuyco;
        eccgyquwkmumeyea:
        aacemqiqgqoyokmi:
        goto awiomycussysmike;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\x46\162\145\x65\x42\x53\x44") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\x4e\157\x6b\x69\141") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        acmaiqeukwiqqyms:
        $this->platform = self::PLATFORM_NOKIA;
        goto esqckkawqugyqimw;
        yysewcsossqsackg:
        $this->platform = self::PLATFORM_BEOS;
        goto qycwawiicimecwsq;
        msqycwkyqqeyqoka:
        $this->platform = self::PLATFORM_LINUX . "\x2f" . self::PLATFORM_SMART_TV;
        goto wgcyyuswcmkwyaky;
        cyaomwaqoaiiqqes:
        eequuumweyqioygw:
        goto acmaiqeukwiqqyms;
        mcqoyigqsewkkwgc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto eiguqiumekikicuw;
        aeeiacomeyceesoe:
        if (stripos($this->agent, "\143\x75\x72\x6c") !== false) {
            goto ymyoskqgyeykqmom;
        }
        goto seeosigigeuueiqy;
        hsuemysceewomeuc:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto kqmqqomaqawisweo;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\123\151\154\x6b") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        gooiuuagswggewoq:
        $this->platform = self::PLATFORM_IPAD;
        goto ukmeggiqssyyyuku;
        imyycasecqwmeuew:
        $this->platform = self::PLATFORM_SUNOS;
        goto wmcckwsaaemkqweg;
        aceouusygqicksgk:
        seaqqywowweasaoa:
        goto yysewcsossqsackg;
        auuogsqacsimiksi:
        $this->platform = self::PLATFORM_OS2;
        goto cmooymowqeusayua;
        meiykooeimaqqico:
        if (stripos($this->agent, "\x50\154\x61\171\x73\x74\x61\164\x69\x6f\x6e") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\117\x70\x65\x6e\x42\x53\104") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        guquqeyggoqqkgkm:
        gsyegqcsyscyycic:
        goto smmqcueceqkiggkm;
        oaoummcgooyceayi:
        goto miqaocyiuwmyyycc;
        goto siaweewywmuayyks;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\x69\120\x68\157\x6e\145") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        cmooymowqeusayua:
        goto miqaocyiuwmyyycc;
        goto aceouusygqicksgk;
        yeeicocmyyaeksys:
        yioawsqawmqagueg:
        goto imwweegoasykooim;
        myiogoqascwcikcc:
        goto miqaocyiuwmyyycc;
        goto mkeuwsqceweiacum;
        yeigmocusoouscsa:
        goto miqaocyiuwmyyycc;
        goto ksqmykkeymqwoacg;
        eweqcaymckiwaccw:
        scoouaqeoeicswwu:
        goto maokeqaksuookoao;
        cgqiesaeskmuwwcy:
        gwoqyokuiqqwugsk:
        goto sgssyyueamgacywm;
        ggcmqkuwqkkkmcgu:
        goto miqaocyiuwmyyycc;
        goto gyawuaoseweeioce;
        cyqeeaiwumyekkce:
        gawseeswkisqiwoe:
        goto asksckakmysykiue;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\x69\120\x6f\x64") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        awumcmmeumuaiocw:
        if (stripos($this->agent, "\120\157\x73\x74\x6d\141\156\122\165\156\164\151\x6d\145") !== false) {
            goto woqqukymqiuyququ;
        }
        goto oguaeaawigyoscii;
        mkeuwsqceweiacum:
        acysyqkmkgaoewci:
        goto icoqeuawskkosskw;
        seeosigigeuueiqy:
        if (stripos($this->agent, "\x43\162\x4f\x53") !== false) {
            goto gwoqyokuiqqwugsk;
        }
        goto cekocgmmwuacyckg;
        ukmcukgkakisecyk:
        goto miqaocyiuwmyyycc;
        goto cyaomwaqoaiiqqes;
        muycacscoqikyasc:
        goto miqaocyiuwmyyycc;
        goto uyauemouyweqqkwu;
        mqmowgywwygssysy:
        gqwemyquuwgqcaic:
        goto emiuesoeeiqysuay;
        cekocgmmwuacyckg:
        if (stripos($this->agent, "\157\x6b\150\x74\x74\x70") !== false) {
            goto acysyqkmkgaoewci;
        }
        goto awumcmmeumuaiocw;
        gyawuaoseweeioce:
        kwewaoocuqgaseoa:
        goto kouowucggykwmwgw;
        icoqeuawskkosskw:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto qcaqeqscugwwgyci;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\x42\x6c\x61\143\x6b\102\145\x72\x72\171") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        gkcqueouksaqceqw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto aaecacwqmsoowcsi;
        emeoasammuwaesws:
        goto miqaocyiuwmyyycc;
        goto mqmowgywwygssysy;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\154\x69\x6e\x75\170") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        mmqioecsyukkcgoo:
        goto miqaocyiuwmyyycc;
        goto eiskwkcoggkikmcc;
        kouowucggykwmwgw:
        $this->platform = self::PLATFORM_NETBSD;
        goto aoemyociekskwmke;
        akayacsmoiwoaeqm:
        coakwcyymiqcmwug:
        goto ueqauuccggkgcyqo;
        eayyeuwawewcqcom:
        syqyosyywqwgoeoo:
        goto esscoiyogsoqoquc;
        maokeqaksuookoao:
        $this->platform = self::PLATFORM_WINDOWS;
        goto emooiegicmmqkwsg;
        iqucsoqomgkeuyco:
        oesgciyeoewgouki:
        goto auuogsqacsimiksi;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\x77\151\x6e\144\x6f\x77\x73") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        ciwyuyksieuuqiee:
        goto miqaocyiuwmyyycc;
        goto eayyeuwawewcqcom;
        qcqgakkooouyiooi:
        ugccoisuygekiaae:
        goto mokkeuemqauoaskk;
        sgssyyueamgacywm:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto myiogoqascwcikcc;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\x4f\x53\x5c\x2f\62") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        eiskwkcoggkikmcc:
        iacwiwmoggwseqsa:
        goto hsuemysceewomeuc;
        aaecacwqmsoowcsi:
        goto miqaocyiuwmyyycc;
        goto guquqeyggoqqkgkm;
        muiouqmomamguoce:
        if (stripos($this->agent, "\151\x50\x61\x64") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\x77\151\x6e") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        cwceosugiiyyauqi:
        acuiieocsgiyakia:
        goto ogugiciyicewkyue;
        gciescsgqiuoqkim:
        goto miqaocyiuwmyyycc;
        goto kgwaccmcscsusase;
        wgcyyuswcmkwyaky:
        goto miqaocyiuwmyyycc;
        goto eccgyquwkmumeyea;
        smmqcueceqkiggkm:
        $this->platform = self::PLATFORM_OPENBSD;
        goto ggcmqkuwqkkkmcgu;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\122\x6f\x6b\x75") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        yukieguwkeesieiy:
        goto miqaocyiuwmyyycc;
        goto cwceosugiiyyauqi;
        emiuesoeeiqysuay:
        $this->platform = self::PLATFORM_ROKU;
        goto qoyywwueqcmomgio;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\151\117\x53") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        yaaisamcwuuowiua:
        miqaocyiuwmyyycc:
        goto acoqamisuacwkqyo;
        qycwawiicimecwsq:
        goto miqaocyiuwmyyycc;
        goto eweqcaymckiwaccw;
        mokkeuemqauoaskk:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto emeoasammuwaesws;
        ueqauuccggkgcyqo:
        $this->platform = self::PLATFORM_IPHONE . "\57" . self::PLATFORM_IPAD;
        goto mmqioecsyukkcgoo;
        awiomycussysmike:
        $this->platform = self::PLATFORM_LINUX;
        goto ukmcukgkakisecyk;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\155\141\x63") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        aoemyociekskwmke:
        goto miqaocyiuwmyyycc;
        goto cyqeeaiwumyekkce;
        iouagkwueekusiwi:
        cguaokskycyggqym:
        goto imagekgwsuqccwgo;
        ogugiciyicewkyue:
        $this->platform = self::PLATFORM_ANDROID;
        goto ciwyuyksieuuqiee;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\154\x69\x6e\165\x78") !== false && stripos($this->agent, "\x53\115\x41\122\x54\x2d\124\x56") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        qcaqeqscugwwgyci:
        goto miqaocyiuwmyyycc;
        goto qsikciasasogymew;
        syiwqmwwoemuyeou:
        goto miqaocyiuwmyyycc;
        goto cgqiesaeskmuwwcy;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\x74\x76\117\x53") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        kqmqqomaqawisweo:
        goto miqaocyiuwmyyycc;
        goto wyokgowugcsiigum;
        siaweewywmuayyks:
        muicsociwumgosaw:
        goto iiyysuksmomyyuye;
        gusogiqwmwgywamm:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto muycacscoqikyasc;
        kyqkigouggegscsi:
        aycyoqqqwmyciise:
        goto igiuieggauocicsg;
        kgwaccmcscsusase:
        sskkqsmyqmgyewue:
        goto msqycwkyqqeyqoka;
        uyauemouyweqqkwu:
        oyioakacwwceegie:
        goto gkcqueouksaqceqw;
        eouqmgocqewmwgik:
        goto miqaocyiuwmyyycc;
        goto ymucyiowcaqucyom;
        mougyosiwyugsymo:
        goto miqaocyiuwmyyycc;
        goto iouagkwueekusiwi;
        uiqoeooowosqagsw:
        $this->platform = self::PLATFORM_TERMINAL;
        goto syiwqmwwoemuyeou;
        cugaeomiskasooic:
        goto miqaocyiuwmyyycc;
        goto yeeicocmyyaeksys;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\102\x65\x4f\123") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        imagekgwsuqccwgo:
        $this->platform = self::PLATFORM_WINDOWS;
        goto eouqmgocqewmwgik;
        icyocwacicqauogu:
        if (stripos($this->agent, "\x61\x6e\x64\162\x6f\151\x64") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        ksqmykkeymqwoacg:
        kycoymqmaukeekum:
        goto imyycasecqwmeuew;
        ukmeggiqssyyyuku:
        goto miqaocyiuwmyyycc;
        goto kyqkigouggegscsi;
        ymucyiowcaqucyom:
        uwegawkagcagoeiw:
        goto gooiuuagswggewoq;
        wksuqaqsicwqekuy:
        kmgqqgsuiwcyccak:
        goto gusogiqwmwgywamm;
        eiguqiumekikicuw:
        goto miqaocyiuwmyyycc;
        goto wwauaucuwsokocmm;
        qoyywwueqcmomgio:
        goto miqaocyiuwmyyycc;
        goto akayacsmoiwoaeqm;
        asksckakmysykiue:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto yeigmocusoouscsa;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\117\x70\x65\x6e\x53\x6f\154\141\x72\x69\x73") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        wwauaucuwsokocmm:
        ycskcusgcyeowagm:
        goto eccymasqomswiwug;
        acoqamisuacwkqyo:
    }
}
