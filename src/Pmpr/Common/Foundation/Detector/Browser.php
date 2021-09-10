<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const BROWSER_UNKNOWN = "\x75\x6e\x6b\x6e\157\x77\x6e";
    const VERSION_UNKNOWN = "\165\156\x6b\x6e\x6f\x77\x6e";
    const BROWSER_OPERA = "\x4f\160\145\x72\141";
    
    const BROWSER_OPERA_MINI = "\117\x70\145\162\141\x20\x4d\151\156\151";
    
    const BROWSER_WEBTV = "\127\x65\x62\124\126";
    
    const BROWSER_EDGE = "\105\144\x67\145";
    
    const BROWSER_IE = "\x49\156\164\x65\x72\x6e\145\164\40\105\x78\x70\x6c\157\x72\145\162";
    
    const BROWSER_POCKET_IE = "\120\157\x63\153\145\164\x20\x49\156\x74\x65\x72\156\x65\164\40\x45\x78\x70\154\157\x72\x65\162";
    
    const BROWSER_KONQUEROR = "\x4b\x6f\x6e\x71\x75\x65\162\157\x72";
    
    const BROWSER_ICAB = "\151\x43\x61\x62";
    
    const BROWSER_OMNIWEB = "\117\155\156\x69\x57\x65\x62";
    
    const BROWSER_FIREBIRD = "\x46\x69\162\x65\x62\151\x72\x64";
    
    const BROWSER_FIREFOX = "\106\151\162\x65\146\x6f\170";
    
    const BROWSER_BRAVE = "\102\162\141\166\145";
    
    const BROWSER_PALEMOON = "\120\x61\154\x65\x6d\157\x6f\156";
    
    const BROWSER_ICEWEASEL = "\x49\143\145\x77\145\141\x73\145\154";
    
    const BROWSER_SHIRETOKO = "\123\x68\x69\162\x65\x74\157\153\x6f";
    
    const BROWSER_MOZILLA = "\115\x6f\x7a\x69\154\154\141";
    
    const BROWSER_AMAYA = "\x41\x6d\141\x79\141";
    
    const BROWSER_LYNX = "\x4c\x79\x6e\170";
    
    const BROWSER_SAFARI = "\123\x61\146\x61\x72\151";
    
    const BROWSER_IPHONE = "\151\120\x68\157\156\x65";
    
    const BROWSER_IPOD = "\x69\120\x6f\x64";
    
    const BROWSER_IPAD = "\x69\120\x61\x64";
    
    const BROWSER_CHROME = "\103\150\x72\157\155\x65";
    
    const BROWSER_ANDROID = "\x41\156\144\x72\x6f\151\x64";
    
    const BROWSER_GOOGLEBOT = "\x47\x6f\157\147\x6c\x65\x42\x6f\x74";
    
    const BROWSER_CURL = "\143\125\x52\114";
    
    const BROWSER_WGET = "\x57\147\145\164";
    
    const BROWSER_UCBROWSER = "\x55\x43\102\162\157\x77\163\x65\x72";
    
    const BROWSER_YANDEXBOT = "\131\141\x6e\144\x65\x78\x42\x6f\x74";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\x61\156\x64\145\170\x49\x6d\x61\x67\145\122\x65\163\x69\x7a\x65\x72";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\x61\156\144\x65\170\111\155\x61\147\145\x73";
    
    const BROWSER_YANDEXVIDEO_BOT = "\131\141\156\x64\x65\x78\x56\x69\144\x65\157";
    
    const BROWSER_YANDEXMEDIA_BOT = "\x59\x61\x6e\x64\x65\170\115\145\144\x69\x61";
    
    const BROWSER_YANDEXBLOGS_BOT = "\131\x61\x6e\x64\145\x78\x42\154\x6f\x67\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\131\x61\156\144\x65\x78\x46\x61\x76\151\143\157\x6e\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\x59\141\156\144\x65\170\x57\x65\x62\x6d\141\x73\164\x65\162";
    
    const BROWSER_YANDEXDIRECT_BOT = "\x59\x61\x6e\x64\145\170\104\x69\x72\x65\143\164";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\131\141\156\144\145\x78\115\145\164\x72\151\x6b\x61";
    
    const BROWSER_YANDEXNEWS_BOT = "\131\x61\x6e\144\x65\x78\116\x65\167\x73";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\x61\156\144\145\170\103\x61\164\141\x6c\x6f\x67";
    
    const BROWSER_SLURP = "\x59\141\150\157\157\x21\40\123\x6c\165\x72\160";
    
    const BROWSER_W3CVALIDATOR = "\x57\x33\103\40\126\141\x6c\151\x64\141\x74\157\162";
    
    const BROWSER_BLACKBERRY = "\102\x6c\141\x63\153\x42\145\162\162\171";
    
    const BROWSER_ICECAT = "\x49\x63\145\x43\141\164";
    
    const BROWSER_NOKIA_S60 = "\x4e\157\153\x69\141\x20\x53\66\x30\x20\x4f\123\x53\x20\102\162\x6f\167\163\x65\x72";
    
    const BROWSER_NOKIA = "\x4e\157\x6b\151\x61\x20\102\162\157\167\163\x65\162";
    
    const BROWSER_MSN = "\x4d\x53\116\40\x42\x72\157\167\163\x65\x72";
    
    const BROWSER_MSNBOT = "\x4d\123\116\x20\102\157\x74";
    
    const BROWSER_BINGBOT = "\x42\x69\x6e\x67\x20\x42\157\x74";
    
    const BROWSER_VIVALDI = "\x56\151\x76\141\x6c\x64\151";
    
    const BROWSER_YANDEX = "\131\141\x6e\x64\145\x78";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\x65\x74\163\143\141\160\145\x20\116\141\x76\x69\x67\141\164\157\162";
    
    const BROWSER_GALEON = "\x47\141\154\145\157\156";
    
    const BROWSER_NETPOSITIVE = "\116\145\x74\x50\x6f\x73\x69\x74\151\166\x65";
    
    const BROWSER_PHOENIX = "\120\150\x6f\145\x6e\151\170";
    
    const BROWSER_PLAYSTATION = "\x50\154\141\x79\x53\164\141\164\x69\x6f\x6e";
    const BROWSER_SAMSUNG = "\x53\141\x6d\163\165\x6e\147\102\x72\x6f\167\x73\x65\x72";
    const BROWSER_SILK = "\123\x69\154\153";
    const BROWSER_I_FRAME = "\x49\146\162\141\155\145\154\x79";
    const BROWSER_COCOA = "\x43\x6f\x63\157\x61\x52\x65\x73\164\103\x6c\151\145\x6e\x74";
    const PLATFORM_UNKNOWN = "\x75\x6e\153\x6e\x6f\x77\x6e";
    const PLATFORM_WINDOWS = "\127\151\x6e\144\x6f\167\x73";
    const PLATFORM_WINDOWS_CE = "\x57\x69\156\144\157\x77\x73\x20\103\105";
    const PLATFORM_APPLE = "\x41\160\x70\154\x65";
    const PLATFORM_LINUX = "\114\x69\x6e\165\x78";
    const PLATFORM_OS2 = "\117\123\x2f\x32";
    const PLATFORM_BEOS = "\x42\x65\117\123";
    const PLATFORM_IPHONE = "\x69\120\x68\157\156\x65";
    const PLATFORM_IPOD = "\x69\120\157\x64";
    const PLATFORM_IPAD = "\x69\x50\141\144";
    const PLATFORM_BLACKBERRY = "\102\154\x61\143\153\x42\x65\162\x72\x79";
    const PLATFORM_NOKIA = "\x4e\157\x6b\x69\x61";
    const PLATFORM_FREEBSD = "\x46\x72\145\x65\x42\123\104";
    const PLATFORM_OPENBSD = "\x4f\160\x65\156\102\x53\x44";
    const PLATFORM_NETBSD = "\x4e\145\164\x42\x53\x44";
    const PLATFORM_SUNOS = "\x53\165\156\x4f\x53";
    const PLATFORM_OPENSOLARIS = "\x4f\x70\145\156\123\x6f\x6c\x61\162\x69\163";
    const PLATFORM_ANDROID = "\101\156\x64\162\x6f\x69\x64";
    const PLATFORM_PLAYSTATION = "\x53\157\156\x79\40\120\x6c\x61\171\x53\164\x61\164\151\157\x6e";
    const PLATFORM_ROKU = "\122\x6f\153\165";
    const PLATFORM_APPLE_TV = "\101\x70\160\154\x65\x20\x54\126";
    const PLATFORM_TERMINAL = "\x54\x65\x72\x6d\151\x6e\141\154";
    const PLATFORM_FIRE_OS = "\x46\x69\x72\x65\40\117\123";
    const PLATFORM_SMART_TV = "\x53\115\101\x52\x54\55\124\x56";
    const PLATFORM_CHROME_OS = "\x43\x68\162\x6f\x6d\145\x20\x4f\x53";
    const PLATFORM_JAVA_ANDROID = "\112\x61\x76\141\x2f\101\x6e\144\162\157\x69\x64";
    const PLATFORM_POSTMAN = "\120\x6f\x73\164\x6d\141\156";
    const PLATFORM_I_FRAME = "\111\x66\x72\141\155\145\154\x79";
    const OPERATING_SYSTEM_UNKNOWN = "\x75\156\x6b\156\x6f\167\x6e";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto usukksgaqiqwqeys;
        eqwkmqasacseyecw:
        $this->reset();
        goto wywgewmwqwqsysig;
        comoigwsemiiwoks:
        parent::__construct();
        goto uioqqaiayukmemcg;
        wywgewmwqwqsysig:
        $this->qeqwswckeiieossq();
        goto ggkyameswcsquisg;
        ggkyameswcsquisg:
        goto ewuugiguuowassgm;
        goto mwwimgssiegweqes;
        uqwoeksekoweiwke:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto ykqeemyaewkmowyu;
        cmkiwqcgsmwyuggk:
        if ($uowwycywwssskuys != '') {
            goto oagaqukqswwgeqsa;
        }
        goto eqwkmqasacseyecw;
        ykqeemyaewkmowyu:
        ewuugiguuowassgm:
        goto comoigwsemiiwoks;
        usukksgaqiqwqeys:
        $this->runSetup = false;
        goto cmkiwqcgsmwyuggk;
        mwwimgssiegweqes:
        oagaqukqswwgeqsa:
        goto uqwoeksekoweiwke;
        uioqqaiayukmemcg:
    }
    
    public function reset()
    {
        goto seimmqskqimoouui;
        ygyacaeuykeookuw:
        $this->agent = isset($_SERVER["\x48\x54\x54\120\137\125\123\105\122\137\x41\x47\105\x4e\124"]) ? $_SERVER["\x48\x54\x54\x50\x5f\x55\x53\105\122\137\101\107\105\x4e\124"] : '';
        goto ggaemwcyouewkgcm;
        omkuusmocycoywqq:
        $this->version = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
        cicagciwwymgewcm:
        $this->isRobot = false;
        goto omkuusmocycoywqq;
        ceycsuymgwmceuew:
        $this->name = self::BROWSER_UNKNOWN;
        goto ygyacaeuykeookuw;
        ggaemwcyouewkgcm:
        $this->isAol = false;
        goto cicagciwwymgewcm;
        kmokgyokoacsqkcg:
        $this->isFacebook = false;
        goto mkummeawiecmouws;
        seimmqskqimoouui:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto ceycsuymgwmceuew;
        egsqiegeesaowyyo:
        $this->isTablet = false;
        goto oouoqmemwouuymam;
        oouoqmemwouuymam:
        $this->isMobile = false;
        goto kmokgyokoacsqkcg;
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
        $this->version = preg_replace("\57\133\136\60\x2d\x39\x2c\x2e\54\141\x2d\x7a\x2c\101\55\132\55\135\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\57\133\x5e\60\55\x39\54\56\54\141\x2d\x7a\54\x41\x2d\x5a\135\57", '', $kqagasmwymmuiksq);
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
        syumssoiimkseoum:
        $this->qeqwswckeiieossq();
        goto kmcewougmoaciyky;
        uqqiokcseqswsgia:
        $this->reset();
        goto yyacgikiikmoesek;
        yyacgikiikmoesek:
        $this->agent = $agent_string;
        goto syumssoiimkseoum;
        kmcewougmoaciyky:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\x63\x68\162\157\155\145\146\x72\x61\155\x65") !== false;
    }
    
    public function __toString()
    {
        return "\74\163\x74\x72\x6f\156\x67\76\102\x72\x6f\167\x73\145\162\40\x4e\x61\155\x65\72\x3c\x2f\163\x74\x72\x6f\x6e\x67\x3e\x20{$this->aagmmewiwysmgseq()}\74\142\162\x2f\76\xa" . "\x3c\163\164\162\157\x6e\147\76\x42\162\x6f\167\163\145\x72\40\126\145\162\x73\151\157\156\x3a\74\57\x73\164\x72\157\156\x67\76\x20{$this->gikwwgqmwccescgy()}\74\x62\x72\57\x3e\12" . "\74\x73\x74\x72\157\x6e\x67\76\x42\162\157\167\x73\x65\x72\x20\125\x73\145\x72\40\x41\147\x65\156\164\40\123\164\162\151\x6e\147\72\74\57\x73\164\x72\x6f\x6e\147\76\x20{$this->ckaoiscoyuuosace()}\x3c\142\x72\57\x3e\12" . "\x3c\x73\x74\x72\157\156\x67\x3e\x50\x6c\x61\164\146\157\x72\155\x3a\74\57\x73\164\x72\157\x6e\x67\76\x20{$this->kqeiosksqeuksyqu()}\74\142\162\x2f\76";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto iiswiwucogikyuse;
        iiswiwucogikyuse:
        $this->acmmsiuwaekasogs();
        goto aqysowuwkoqgsoku;
        aqysowuwkoqgsoku:
        $this->iggocwysumewuquw();
        goto muwsmoccecigsoqc;
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
        emiksyiouuqsigmq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto awasoqakauqikkya;
        yeequkyciegceoeo:
        return true;
        goto ggiqousqgowseosg;
        sqimcsougcukocky:
        $this->name = self::BROWSER_BLACKBERRY;
        goto eykuqgakcouscsks;
        eykuqgakcouscsks:
        $this->eywockmuswoykooc(true);
        goto yeequkyciegceoeo;
        ggiqousqgowseosg:
        ikwcwqmomksisice:
        goto wyeguiaumcoesuiy;
        koiysaseasuyieym:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ikwcwqmomksisice;
        }
        goto emiksyiouuqsigmq;
        auomkekgcqwsmgqu:
        return false;
        goto yymkyucwwqwymsse;
        wwskqqaskwicmaay:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\102\x6c\x61\x63\x6b\x42\145\x72\x72\x79"));
        goto koiysaseasuyieym;
        awasoqakauqikkya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sqimcsougcukocky;
        cemqmygogskcoygo:
        if (!(stripos($this->agent, "\x62\154\x61\143\153\x62\x65\x72\x72\x79") !== false)) {
            goto ssayikwmgomomkkq;
        }
        goto wwskqqaskwicmaay;
        wyeguiaumcoesuiy:
        ssayikwmgomomkkq:
        goto auomkekgcqwsmgqu;
        yymkyucwwqwymsse:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wokayyqugqaoewiy;
        cgiakccyuqqwmomc:
        return false;
        goto iuumaowkqqsoicgy;
        cwygwqacakmoesuw:
        eicmoywsowuqoaou:
        goto cgiakccyuqqwmomc;
        kcakqaaesggwiooc:
        if (!isset($quiguswioiaaywey[1])) {
            goto mscskuyuseuoqaqm;
        }
        goto cwykioaoamgqueey;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto wagiyaqsgwiqyaie;
        uwiyeosqocyekygy:
        $this->qkeiegqwsgiwwkik(preg_replace("\x2f\133\136\x30\x2d\71\134\x2e\x61\x2d\172\135\x2f\151", '', $quiguswioiaaywey[1]));
        goto qwimoyomwmmwkucy;
        kicewoesgqwaasem:
        $quiguswioiaaywey = explode("\x20", stristr($this->agent, "\101\x4f\114"));
        goto kcakqaaesggwiooc;
        wagiyaqsgwiqyaie:
        if (!(stripos($this->agent, "\x61\x6f\154") !== false)) {
            goto eicmoywsowuqoaou;
        }
        goto kicewoesgqwaasem;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(false);
        goto kgskcgusosyauysg;
        qwimoyomwmmwkucy:
        return true;
        goto ackciywssqaumgac;
        ackciywssqaumgac:
        mscskuyuseuoqaqm:
        goto cwygwqacakmoesuw;
        cwykioaoamgqueey:
        $this->igmimcweskyugiqm(true);
        goto uwiyeosqocyekygy;
        iuumaowkqqsoicgy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto eyyiqqumygsogaoq;
        skqkiegmwieyweww:
        if (!isset($yikciqwsimweauyg[1])) {
            goto awwiackkekswgamo;
        }
        goto ousiwuqmksykqcec;
        eyyiqqumygsogaoq:
        if (!(stripos($this->agent, "\x67\157\157\x67\x6c\x65\142\157\x74") !== false)) {
            goto qaiaymokiyasqmic;
        }
        goto iskggyooogqgowys;
        aoeeywugooqmewcc:
        awwiackkekswgamo:
        goto caegiamkkykaqmqu;
        wykyuuuooigicwgs:
        return false;
        goto skomukgmucsuaggq;
        wesewyeqgccwmaos:
        return true;
        goto aoeeywugooqmewcc;
        iskggyooogqgowys:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x67\x6f\x6f\147\154\145\142\157\x74"));
        goto skqkiegmwieyweww;
        yagmcusocgoqkewa:
        $this->aasmeayouwmacaow(true);
        goto wesewyeqgccwmaos;
        comcaymsaykamcgi:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto yagmcusocgoqkewa;
        caegiamkkykaqmqu:
        qaiaymokiyasqmic:
        goto wykyuuuooigicwgs;
        ousiwuqmksykqcec:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kiqcuyecmyaegims;
        kiqcuyecmyaegims:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto comcaymsaykamcgi;
        skomukgmucsuaggq:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto kuemgcgokyyggkoi;
        soeiamgkkekwcoss:
        if (!isset($yikciqwsimweauyg[1])) {
            goto essswiygiqegaayw;
        }
        goto gugywasieysgmmyw;
        wysmsmaeqiucoycu:
        return false;
        goto akeoiekwqqqgqamo;
        eseawwcgusiywyge:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x6e\x64\x65\x78\102\157\x74"));
        goto soeiamgkkekwcoss;
        gcgwykikiomgmgqa:
        essswiygiqegaayw:
        goto kiaawmeeisegyugk;
        gugywasieysgmmyw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto uaamscmwcmumgasy;
        kuemgcgokyyggkoi:
        if (!(stripos($this->agent, "\x59\141\156\x64\x65\170\x42\157\164") !== false)) {
            goto yugqeemimuuqeucm;
        }
        goto eseawwcgusiywyge;
        uewgegcascsimmaq:
        return true;
        goto gcgwykikiomgmgqa;
        uaamscmwcmumgasy:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qimcgqssayewaygw;
        qimcgqssayewaygw:
        $this->name = self::BROWSER_YANDEXBOT;
        goto suugmuecwqaakaoc;
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
        mygsucymimsqmqky:
        gwokcyciswoaygie:
        goto uwemyeqsgcieyymm;
        cyqyggywyykwqyak:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto osumgoskasckcieg;
        woikwmiiusqmoygy:
        return true;
        goto imsysaygciegsqok;
        mkcsckwgisqasmao:
        $this->aasmeayouwmacaow(true);
        goto woikwmiiusqmoygy;
        qysommommieagsuw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\144\x65\x78\111\x6d\141\x67\145\122\x65\163\x69\172\145\x72"));
        goto aekaikwiqmuwwqia;
        imsysaygciegsqok:
        sqqqyyimyskaygea:
        goto mygsucymimsqmqky;
        ikmicisyykkwmeso:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cyqyggywyykwqyak;
        osumgoskasckcieg:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto mkcsckwgisqasmao;
        squqowgmqgocyqmi:
        if (!(stripos($this->agent, "\131\141\x6e\x64\x65\x78\x49\x6d\x61\x67\x65\122\x65\163\151\172\145\162") !== false)) {
            goto gwokcyciswoaygie;
        }
        goto qysommommieagsuw;
        uwemyeqsgcieyymm:
        return false;
        goto lhsckqwkqqauiqwy;
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
        muyymwciiieqymqw:
        $this->aasmeayouwmacaow(true);
        goto dqcamiqqkwiowaag;
        gwqqoewaikqqueoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto muyymwciiieqymqw;
        iycocuaeccqgyoia:
        swuywmmasggeiqou:
        goto ycyyicuqwqcyqeig;
        yakmisgikescmgoo:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aacosyksiacoaeig;
        ieycgksaoqioisky:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\x64\145\x78\x43\141\x74\141\154\157\147"));
        goto qigcoauseeigksyc;
        dqcamiqqkwiowaag:
        return true;
        goto sigosycgcicoiuuc;
        aacosyksiacoaeig:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto gwqqoewaikqqueoe;
        qigcoauseeigksyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eosuykwimywegmse;
        }
        goto yakmisgikescmgoo;
        ceugiycaewioseoe:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\x65\x78\103\x61\164\141\154\x6f\x67") !== false)) {
            goto swuywmmasggeiqou;
        }
        goto ieycgksaoqioisky;
        ycyyicuqwqcyqeig:
        return false;
        goto kccciwsgesamyyau;
        sigosycgcicoiuuc:
        eosuykwimywegmse:
        goto iycocuaeccqgyoia;
        kccciwsgesamyyau:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto imkwmsokcecosyse;
        skqmieiumikceamg:
        omccwaywmcmqksmq:
        goto iymeugimwgcywusq;
        eqqaouecoaseisgq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kqmkicwuyqakoika;
        imkwmsokcecosyse:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\145\170\116\x65\x77\x73") !== false)) {
            goto omccwaywmcmqksmq;
        }
        goto osuskyuuggamicou;
        osuskyuuggamicou:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\x6e\x64\x65\170\116\145\167\x73"));
        goto uaaiysoikgsuscqw;
        umsckeuyiggsewac:
        oameuaooiigaiucg:
        goto skqmieiumikceamg;
        kqmkicwuyqakoika:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto suagmomycmooyggu;
        naiguckqsyeaesek:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eqqaouecoaseisgq;
        iymeugimwgcywusq:
        return false;
        goto eiswwscyoaqoggge;
        suagmomycmooyggu:
        $this->aasmeayouwmacaow(true);
        goto kmayccieqkkiqicw;
        uaaiysoikgsuscqw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oameuaooiigaiucg;
        }
        goto naiguckqsyeaesek;
        kmayccieqkkiqicw:
        return true;
        goto umsckeuyiggsewac;
        eiswwscyoaqoggge:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto gwkeoekmeeqmmwgy;
        gwkeoekmeeqmmwgy:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\145\x78\x4d\x65\164\162\151\x6b\x61") !== false)) {
            goto eyogsqkuigcksouq;
        }
        goto aikqumiqkkqaqgee;
        swusyoymaokumies:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto xwymaakqyeoqaams;
        aikqumiqkkqaqgee:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\x65\170\x4d\x65\164\x72\151\153\141"));
        goto ukeksoegcoqokeik;
        cmasgwmooaiccewo:
        return true;
        goto cyckkcksiwwqasio;
        xwymaakqyeoqaams:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto amcsamiamksyqmuq;
        cyckkcksiwwqasio:
        qaqmwuwwqycmqkyg:
        goto egemeuggwgwuayoi;
        iigucumgucicccac:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto swusyoymaokumies;
        amcsamiamksyqmuq:
        $this->aasmeayouwmacaow(true);
        goto cmasgwmooaiccewo;
        egemeuggwgwuayoi:
        eyogsqkuigcksouq:
        goto qqusymyoygwwueco;
        ukeksoegcoqokeik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qaqmwuwwqycmqkyg;
        }
        goto iigucumgucicccac;
        qqusymyoygwwueco:
        return false;
        goto iuoiiwaosgqoeask;
        iuoiiwaosgqoeask:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto wsqgykwqkgiwaksw;
        yeywuuiugmgeuygm:
        $this->aasmeayouwmacaow(true);
        goto ywiyqcgyoweomkqg;
        uegccyuaemgmocgu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto giuuqwcsockoiqem;
        }
        goto iouecsmwqgaiycoq;
        ywiyqcgyoweomkqg:
        return true;
        goto gmgemamkswqeskmo;
        qcwaessgikigogay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\145\170\104\x69\x72\x65\143\164"));
        goto uegccyuaemgmocgu;
        iouecsmwqgaiycoq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qqyasyisimsuyiiw;
        qqyasyisimsuyiiw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto geqcuwsuqymcqiou;
        gswsuaquqikkycwi:
        smqoegcueykkkiiq:
        goto eemgwkicuicwskms;
        geqcuwsuqymcqiou:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto yeywuuiugmgeuygm;
        gmgemamkswqeskmo:
        giuuqwcsockoiqem:
        goto gswsuaquqikkycwi;
        wsqgykwqkgiwaksw:
        if (!(stripos($this->agent, "\131\x61\x6e\x64\145\170\104\x69\x72\x65\x63\x74") !== false)) {
            goto smqoegcueykkkiiq;
        }
        goto qcwaessgikigogay;
        eemgwkicuicwskms:
        return false;
        goto kyemcamscwoeeoiy;
        kyemcamscwoeeoiy:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto eeqgkcgywkwgmiyg;
        saaioyiceykemgas:
        ggawqqciikeiqiau:
        goto cyoymqqkgiumuegy;
        euyooyocyuucmmmc:
        $this->aasmeayouwmacaow(true);
        goto iskwcciiywiaamos;
        qomyesuacseysugi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ggawqqciikeiqiau;
        }
        goto wsiqkesiecagcykw;
        wsiqkesiecagcykw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iawccecmgeaocqmg;
        fkcemcakyseoskmc:
        return false;
        goto aucqaemoukqogokc;
        cumwowkcomuigeag:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\144\x65\170\127\x65\142\155\141\163\164\x65\162"));
        goto qomyesuacseysugi;
        heakaosaewwowmcu:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto euyooyocyuucmmmc;
        iawccecmgeaocqmg:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto heakaosaewwowmcu;
        iskwcciiywiaamos:
        return true;
        goto saaioyiceykemgas;
        eeqgkcgywkwgmiyg:
        if (!(stripos($this->agent, "\131\141\156\x64\x65\x78\127\145\x62\x6d\x61\163\164\145\x72") !== false)) {
            goto mucqymyysqeiaqwk;
        }
        goto cumwowkcomuigeag;
        cyoymqqkgiumuegy:
        mucqymyysqeiaqwk:
        goto fkcemcakyseoskmc;
        aucqaemoukqogokc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto oyqaeioosuiwoacw;
        cwmwkkauqqusccgs:
        return false;
        goto isowmaawkwmkcgmo;
        yksumiuqcoggugea:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto aisgmewqismsouqm;
        wsgcyguocqmgccks:
        quaugcgaccqksmmk:
        goto cwmwkkauqqusccgs;
        aisgmewqismsouqm:
        $this->aasmeayouwmacaow(true);
        goto mywassaguwommoyg;
        mgsyyameesskqgsk:
        aekwmmmciucegyys:
        goto wsgcyguocqmgccks;
        wmkoscqgkmsoasms:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cecqqwuqeiccmmos;
        omeekeuouqiieacw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\144\145\170\106\x61\x76\151\143\x6f\x6e\x73"));
        goto wuqswaumkwuciiqi;
        wuqswaumkwuciiqi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aekwmmmciucegyys;
        }
        goto wmkoscqgkmsoasms;
        oyqaeioosuiwoacw:
        if (!(stripos($this->agent, "\131\141\156\x64\x65\170\x46\x61\166\x69\x63\157\x6e\163") !== false)) {
            goto quaugcgaccqksmmk;
        }
        goto omeekeuouqiieacw;
        mywassaguwommoyg:
        return true;
        goto mgsyyameesskqgsk;
        cecqqwuqeiccmmos:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto yksumiuqcoggugea;
        isowmaawkwmkcgmo:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto ggyweqemgcmwwwgu;
        ucugysauicuskega:
        if (!isset($yikciqwsimweauyg[1])) {
            goto caumawwwskkoekcw;
        }
        goto kaiekqyukykoqiwa;
        gukkaysgawyusckc:
        caumawwwskkoekcw:
        goto qacccgcuwysswgqk;
        kaiekqyukykoqiwa:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eayemqoaewmasoos;
        qquioqqwmiuemaaw:
        return true;
        goto gukkaysgawyusckc;
        ucgecsiyweweymqw:
        return false;
        goto ucwwsimgkkgymqwm;
        gccyyceaqackqsec:
        $this->aasmeayouwmacaow(true);
        goto qquioqqwmiuemaaw;
        wimcmomumakqcikc:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto gccyyceaqackqsec;
        qacccgcuwysswgqk:
        gciueqsqsgcekwae:
        goto ucgecsiyweweymqw;
        eayemqoaewmasoos:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto wimcmomumakqcikc;
        ggyweqemgcmwwwgu:
        if (!(stripos($this->agent, "\131\x61\156\x64\x65\x78\x42\154\157\x67\x73") !== false)) {
            goto gciueqsqsgcekwae;
        }
        goto oasoyuckmqumgwwy;
        oasoyuckmqumgwwy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\x64\x65\170\102\x6c\x6f\x67\x73"));
        goto ucugysauicuskega;
        ucwwsimgkkgymqwm:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto oaaqgeqiwsykukeg;
        eikeicmemcaswgaq:
        return false;
        goto wisaskaqkeaqaymk;
        aayyiwqgkqkkckeg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mwoaykewsqmiikum;
        ygagqkmcasesqcui:
        cuaueyackcccuamq:
        goto eikeicmemcaswgaq;
        oaaqgeqiwsykukeg:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\170\x4d\x65\x64\x69\141") !== false)) {
            goto cuaueyackcccuamq;
        }
        goto wyqswauigsseskum;
        iammckaiicmaeweq:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto eiuwyaccguegyckc;
        wuasiiywuycmkusq:
        syoagkqccoyegkac:
        goto ygagqkmcasesqcui;
        wyqswauigsseskum:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\145\x78\x4d\145\x64\x69\141"));
        goto gyswaoawqisgeiac;
        wkaeeqagowygkuya:
        return true;
        goto wuasiiywuycmkusq;
        eiuwyaccguegyckc:
        $this->aasmeayouwmacaow(true);
        goto wkaeeqagowygkuya;
        mwoaykewsqmiikum:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto iammckaiicmaeweq;
        gyswaoawqisgeiac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto syoagkqccoyegkac;
        }
        goto aayyiwqgkqkkckeg;
        wisaskaqkeaqaymk:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto kwkeisysqagyioig;
        wqcseegakwamkcca:
        wmigsokoiegiocys:
        goto yeyoqmmeeuqucmky;
        mecmyqgsmiuesukw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\144\145\170\126\151\x64\145\x6f"));
        goto ouaywweeyqecagmc;
        wmquwikmuiskcucm:
        return false;
        goto ymmgwsqqoskmaags;
        kmawaeioomkgqkqe:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ngkomagwskmkmcuc;
        ouaywweeyqecagmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wmigsokoiegiocys;
        }
        goto gogqmaoyqeoscico;
        gogqmaoyqeoscico:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kmawaeioomkgqkqe;
        osyoqauakmkoaigc:
        return true;
        goto wqcseegakwamkcca;
        kwkeisysqagyioig:
        if (!(stripos($this->agent, "\131\x61\156\144\145\170\126\x69\x64\145\157") !== false)) {
            goto mieyqmckqkqaoygo;
        }
        goto mecmyqgsmiuesukw;
        ngkomagwskmkmcuc:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto kuimcqawqqqgcoqs;
        yeyoqmmeeuqucmky:
        mieyqmckqkqaoygo:
        goto wmquwikmuiskcucm;
        kuimcqawqqqgcoqs:
        $this->aasmeayouwmacaow(true);
        goto osyoqauakmkoaigc;
        ymmgwsqqoskmaags:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto gggsgesuicesmqya;
        yuueeqwwgggeycog:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qccmiyoiqguwmqug;
        cqmkeoyaqqoykcyu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto suaeioykcscoamsi;
        }
        goto ueyiaawciiimcmia;
        yieciwkqiqgceuya:
        return true;
        goto waauqgswsiesowse;
        kiqkwuaswsmkigok:
        $this->aasmeayouwmacaow(true);
        goto yieciwkqiqgceuya;
        waauqgswsiesowse:
        suaeioykcscoamsi:
        goto wqwqukkyascugisy;
        ueyiaawciiimcmia:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yuueeqwwgggeycog;
        gggsgesuicesmqya:
        if (!(stripos($this->agent, "\131\141\156\x64\x65\170\x49\155\141\147\145\163") !== false)) {
            goto ukoqoieuoigccaoi;
        }
        goto mksgaooiuiymkkac;
        mksgaooiuiymkkac:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\144\x65\x78\x49\x6d\141\x67\145\x73"));
        goto cqmkeoyaqqoykcyu;
        qccmiyoiqguwmqug:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto kiqkwuaswsmkigok;
        wqwqukkyascugisy:
        ukoqoieuoigccaoi:
        goto ecyoakcmqwaksmms;
        ecyoakcmqwaksmms:
        return false;
        goto okyykeecayqaccik;
        okyykeecayqaccik:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto yqswiyiomsgeayiw;
        egsiwgciqqkwecuy:
        $this->name = self::BROWSER_MSNBOT;
        goto escsoaemgioqgqso;
        ywwgsgiqkuwwuwas:
        cugwcccamcyuksgk:
        goto ayikwkmouqocqoya;
        gqogwsuwyiouywcy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto aouymgmkkcaaymky;
        yuosayyyyemookmi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wqgwmgkmeiewmwsm;
        }
        goto gqogwsuwyiouywcy;
        egaiuisgeekasiow:
        wqgwmgkmeiewmwsm:
        goto ywwgsgiqkuwwuwas;
        yqswiyiomsgeayiw:
        if (!(stripos($this->agent, "\x6d\163\x6e\142\x6f\164") !== false)) {
            goto cugwcccamcyuksgk;
        }
        goto sieeqakumiscuwmy;
        ayikwkmouqocqoya:
        return false;
        goto wsuauiewqimocoes;
        sieeqakumiscuwmy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6d\163\156\x62\157\164"));
        goto yuosayyyyemookmi;
        escsoaemgioqgqso:
        $this->aasmeayouwmacaow(true);
        goto gumousymsmeugmsm;
        gumousymsmeugmsm:
        return true;
        goto egaiuisgeekasiow;
        aouymgmkkcaaymky:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto egsiwgciqqkwecuy;
        wsuauiewqimocoes:
    }
    
    protected function qaigygakimuucuki()
    {
        goto oqkyykockmuiaycc;
        gqmiumskekekmaks:
        oemaagemmycueycs:
        goto acsqgoigqaiqiwaw;
        ikqqmyoegaeocwqw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto hiuqggmuisuaaksw;
        oqkyykockmuiaycc:
        if (!(stripos($this->agent, "\x62\x69\x6e\147\142\157\164") !== false)) {
            goto ymmyqwqggkuwimiw;
        }
        goto uugykecieoomuygs;
        hiuqggmuisuaaksw:
        $this->name = self::BROWSER_BINGBOT;
        goto uiyscqcowgeaeoco;
        egeecgiwycoqsgqm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikqqmyoegaeocwqw;
        soiguuywuqqisowg:
        return true;
        goto gqmiumskekekmaks;
        uugykecieoomuygs:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\142\x69\x6e\147\142\157\x74"));
        goto aygyqqwyyugyoakg;
        acsqgoigqaiqiwaw:
        ymmyqwqggkuwimiw:
        goto aoueegmsgkeokaoq;
        uiyscqcowgeaeoco:
        $this->aasmeayouwmacaow(true);
        goto soiguuywuqqisowg;
        aygyqqwyyugyoakg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oemaagemmycueycs;
        }
        goto egeecgiwycoqsgqm;
        aoueegmsgkeokaoq:
        return false;
        goto wmuqesieiugiquks;
        wmuqesieiugiquks:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto yiiaqacikommoaoy;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        waqsamacggacoaye:
        return true;
        goto oiksgywwsqweoeai;
        yioasqegwkugoqag:
        $this->eywockmuswoykooc(true);
        goto waqsamacggacoaye;
        ucuiqegmmogyasmw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto oscemsgoyimocqei;
        iuiusomcwkaiksyq:
        sioosmeyiqmscmkc:
        goto weuwgyoweusiaweq;
        meqqkyuusamyauyc:
        weygkwekqawoowyq:
        goto mqigmosuikyaaamk;
        gggamqmqusyimaky:
        return true;
        goto meqqkyuusamyauyc;
        icmmwweaumcckgam:
        if (stripos($this->agent, "\127\63\x43\137\x56\x61\x6c\151\x64\x61\164\157\162") !== false) {
            goto iicgycsecmaeqqcg;
        }
        goto aisaywmsiigsegso;
        ckmosuuwagciuwmw:
        return false;
        goto iuiyyuwauoowkgeg;
        oscemsgoyimocqei:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imiuwwuwwyqigmou;
        segewkgiakaqsgoc:
        
        $eaogoiscgwgmugsq = str_replace("\x57\x33\x43\137\x56\141\x6c\x69\x64\x61\164\x6f\x72\x20", "\x57\63\x43\137\x56\x61\154\151\x64\141\164\157\x72\57", $this->agent);
        goto oeiiuoikyagkmyqa;
        weuwgyoweusiaweq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x57\63\x43\55\143\x68\145\x63\x6b\x6c\x69\x6e\x6b"));
        goto ykoqgweokgwkcawk;
        osewecweiaekeoou:
        uomswgeawseimkou:
        goto oqkkssoawygysqmq;
        oeiiuoikyagkmyqa:
        $yikciqwsimweauyg = explode("\x2f", stristr($eaogoiscgwgmugsq, "\127\x33\x43\137\126\141\x6c\x69\x64\141\164\157\x72"));
        goto iamckkumoomyeoum;
        yiiaqacikommoaoy:
        if (stripos($this->agent, "\127\63\103\55\x63\150\145\x63\153\x6c\151\x6e\153") !== false) {
            goto sioosmeyiqmscmkc;
        }
        goto icmmwweaumcckgam;
        aisaywmsiigsegso:
        if (stripos($this->agent, "\x57\63\103\x2d\x6d\x6f\142\151\154\145\117\113") !== false) {
            goto uomswgeawseimkou;
        }
        goto wssaokwkycsqqumw;
        oqkkssoawygysqmq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto yioasqegwkugoqag;
        fkuiuosooquwmkoi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eewmcuekysqqkeey;
        sqcqqsocqymmgwcq:
        iicgycsecmaeqqcg:
        goto segewkgiakaqsgoc;
        iqgasessakaoieuw:
        return true;
        goto sykosugesqqqqyey;
        mqigmosuikyaaamk:
        goto mcuiomgoamywqgya;
        goto sqcqqsocqymmgwcq;
        eewmcuekysqqkeey:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto gggamqmqusyimaky;
        ykoqgweokgwkcawk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto weygkwekqawoowyq;
        }
        goto iqugwmioumykkagm;
        wssaokwkycsqqumw:
        goto mcuiomgoamywqgya;
        goto iuiusomcwkaiksyq;
        iamckkumoomyeoum:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wwaoocgeiyswqwow;
        }
        goto ucuiqegmmogyasmw;
        oiksgywwsqweoeai:
        mcuiomgoamywqgya:
        goto ckmosuuwagciuwmw;
        okicguwqeyiuywos:
        goto mcuiomgoamywqgya;
        goto osewecweiaekeoou;
        iqugwmioumykkagm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto fkuiuosooquwmkoi;
        sykosugesqqqqyey:
        wwaoocgeiyswqwow:
        goto okicguwqeyiuywos;
        iuiyyuwauoowkgeg:
    }
    
    protected function cimegwusqouswgao()
    {
        goto kwumsouwywsqkmci;
        kwumsouwywsqkmci:
        if (!(stripos($this->agent, "\163\154\x75\162\x70") !== false)) {
            goto wiawimwuykuugcwi;
        }
        goto qmckmkykmyucosyq;
        gygwagcmmmaioikw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mkimssyoqguuowky;
        aqcqeucsaaeuiwqa:
        $this->name = self::BROWSER_SLURP;
        goto oawogoiagossceii;
        ouecqyewekugmwkm:
        $this->eywockmuswoykooc(false);
        goto ecuoemaqoeosiase;
        myksiemsskucuyac:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ogeakuasmaemuwga;
        }
        goto gygwagcmmmaioikw;
        qeimskmimouyssgu:
        return false;
        goto csecmagoocuukewm;
        qmckmkykmyucosyq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\154\x75\x72\160"));
        goto myksiemsskucuyac;
        mkimssyoqguuowky:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto aqcqeucsaaeuiwqa;
        ecuoemaqoeosiase:
        return true;
        goto aecsciyiseuamymy;
        guiqaqkuywsmqcoc:
        wiawimwuykuugcwi:
        goto qeimskmimouyssgu;
        aecsciyiseuamymy:
        ogeakuasmaemuwga:
        goto guiqaqkuywsmqcoc;
        oawogoiagossceii:
        $this->aasmeayouwmacaow(true);
        goto ouecqyewekugmwkm;
        csecmagoocuukewm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto asoiigkaqcguaioi;
        sosikmkcuygeukyo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwgkaeyusoekmway;
        qsqgkiyigokqcioe:
        owcekoqmukawoeao:
        goto wwckusqkukciicei;
        wwckusqkukciicei:
        return false;
        goto cmcisgcoaouauymu;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        sqikwaiakyissigo:
        wucmiaeomamqgqes:
        goto yeagcqwaoeskgqmg;
        ocsoakwgmmwsekyi:
        
        
        $this->aasasueowyemuyoc('');
        goto qmywsksagymugcou;
        gkgwqoquqekiayus:
        ymgeisswqiucoaas:
        goto iaiewssiomowoyas;
        qmywsksagymugcou:
        return true;
        goto qsqgkiyigokqcioe;
        asoiigkaqcguaioi:
        if (stripos($this->agent, "\x42\162\x61\x76\x65\x2f") !== false) {
            goto ymgeisswqiucoaas;
        }
        goto wuismmmeeqkiowua;
        gaccwqquykeauumg:
        goto owcekoqmukawoeao;
        goto sqikwaiakyissigo;
        uckgesmigkiyqyck:
        return true;
        goto pwgwmqwuoqysukeo;
        gikcoemsgecyasqe:
        goto owcekoqmukawoeao;
        goto gkgwqoquqekiayus;
        gsuacqigwaigyaia:
        if (!isset($uuygmciickwewegw[1])) {
            goto ggakkmokkykkqawi;
        }
        goto ciymuigaugeiouic;
        wuismmmeeqkiowua:
        if (stripos($this->agent, "\40\x42\162\141\166\145\x20") !== false) {
            goto wucmiaeomamqgqes;
        }
        goto gikcoemsgecyasqe;
        iaiewssiomowoyas:
        $uuygmciickwewegw = explode("\x2f", stristr($this->agent, "\102\162\141\x76\x65"));
        goto gsuacqigwaigyaia;
        ciymuigaugeiouic:
        $quiguswioiaaywey = explode("\40", $uuygmciickwewegw[1]);
        goto sosikmkcuygeukyo;
        yeagcqwaoeskgqmg:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ocsoakwgmmwsekyi;
        pwgwmqwuoqysukeo:
        ggakkmokkykkqawi:
        goto gaccwqquykeauumg;
        cmcisgcoaouauymu:
    }
    
    protected function makyeuicweuowumi()
    {
        goto ccyiuskguauimqee;
        oqymsqskimoyuyye:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\105\x64\147\x65"));
        goto oyykmqismqsyaaus;
        gmiyusqaiqaaakkk:
        camscswqceqycmke:
        goto umimoqmwoeecysqi;
        ysamigeqeyqgiwcs:
        yukycgouyuqkmaok:
        goto sggyugwiuggaaqyo;
        sgwwscoqkcuoqqsg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kigaqwsiuygysecu;
        eamumkggcmyaosco:
        $this->eywockmuswoykooc(true);
        goto gmiyusqaiqaaakkk;
        ccyiuskguauimqee:
        if (!(stripos($this->agent, "\105\x64\147\145\x2f") !== false)) {
            goto megqkiykgiamgmsk;
        }
        goto oqymsqskimoyuyye;
        umimoqmwoeecysqi:
        return true;
        goto ysamigeqeyqgiwcs;
        oyykmqismqsyaaus:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yukycgouyuqkmaok;
        }
        goto sgwwscoqkcuoqqsg;
        kigaqwsiuygysecu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qgagcuckouyuyuss;
        mwauqumigegcywiw:
        return false;
        goto omeswwygqyeqyqmw;
        qgagcuckouyuyuss:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto qmkkwkqieggiyamm;
        sggyugwiuggaaqyo:
        megqkiykgiamgmsk:
        goto mwauqumigegcywiw;
        qmkkwkqieggiyamm:
        if (!(stripos($this->agent, "\x57\x69\x6e\x64\x6f\x77\x73\40\120\x68\x6f\156\145") !== false || stripos($this->agent, "\x41\x6e\144\162\x6f\x69\x64") !== false)) {
            goto camscswqceqycmke;
        }
        goto eamumkggcmyaosco;
        omeswwygqyeqyqmw:
    }
    
    protected function cgequousmqakcios()
    {
        goto cyikciomyweygykm;
        ygqkqwkyoosgomug:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto coeaoweyqagqsoqq;
        ameqasmessgyycqq:
        $this->agent = str_replace(["\x4d\x6f\x7a\x69\154\154\141", "\x47\145\x63\x6b\157"], "\x4d\123\111\105", $this->agent);
        goto isucaqumoqgykqig;
        iuiickwiuccmyiey:
        goto qkmucouuqggkwssg;
        goto yiomssmosemcckmc;
        qskwqqamoqekaqum:
        $this->aasasueowyemuyoc(preg_replace("\57\133\136\60\x2d\71\56\135\53\x2f", '', $sogksuscggsicmac[1]));
        goto ameqasmessgyycqq;
        oeeccicqsoiyqcig:
        $this->eywockmuswoykooc(true);
        goto uksaceogcmuacumi;
        swasyyuiyouasyqy:
        usoiismiikooagme:
        goto akmiwammkswkmyio;
        micqaoiiquokaqmw:
        wskkwyoiugucwwua:
        goto wyagecywqcysyyae;
        uasakawygcqkquuy:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto myymisiqiwiqymuu;
        eismimkcoiokucom:
        return true;
        goto sooawcagkoismuqa;
        occyqeeyumwaygik:
        zkoqiugkkemmwqeq:
        goto yaeowwmkcuqmesau;
        wysmuiaeuqqaycig:
        if (!isset($quiguswioiaaywey[1])) {
            goto wskkwyoiugucwwua;
        }
        goto qousyksekeougumo;
        isucaqumoqgykqig:
        ewasqwuscwkeuuyi:
        goto iuiickwiuccmyiey;
        aaumqogegyqosuiq:
        if (stripos($this->agent, "\x74\162\x69\x64\x65\156\164") !== false) {
            goto soacqquaasiggock;
        }
        goto umaimowkyaemisiq;
        msccquimgomummck:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gyqcauemgkuwquua;
        }
        goto kmmsoqcgiyougqqy;
        agasiekywmaokckg:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qwwigmoeocgyqyuy;
        qsaiiuqwimiqiwyc:
        uecqmukyqqgyoegy:
        goto wkgugqyackgiowas;
        awiqeeiewssogaaq:
        uoyuiiauquiwgasu:
        goto eismimkcoiokucom;
        omggicgmwyakocik:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto sqicocysoqwcgasq;
        sooawcagkoismuqa:
        muaiioeaoiqiogie:
        goto eoeoikgkiuewagwg;
        gocgaeomskmyyuaq:
        ycsqoemcioqgscik:
        goto ckiggmwimwykqyee;
        uuamswicsoyuguug:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\155\163\x70\x69\145"));
        goto kqggyaomgmqyicmc;
        kkumemicscqeqawi:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\x3b\40", $this->agent), "\115\x53\x4e"));
        goto msccquimgomummck;
        syawcymwokyaqeck:
        if (!isset($sogksuscggsicmac[1])) {
            goto ewasqwuscwkeuuyi;
        }
        goto qskwqqamoqekaqum;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        sqicocysoqwcgasq:
        $this->eywockmuswoykooc(true);
        goto awiqeeiewssogaaq;
        mgsmmaqqkusaaqew:
        soacqquaasiggock:
        goto kwemswkcueagmssu;
        eaicyuessygcyuqu:
        return true;
        goto sikkakqouqeckesc;
        kmyoqookuiyomeec:
        if (!(stripos($this->agent, "\x49\105\115\x6f\142\151\154\x65") !== false)) {
            goto uoyuiiauquiwgasu;
        }
        goto omggicgmwyakocik;
        ygwwwwcgiwmcakmi:
        kwyiuyoeysqeywmm:
        goto uuiioegocmmcqgwq;
        gcasowsewwisgqwc:
        $yikciqwsimweauyg = stristr($this->agent, "\57");
        goto ieysgookkakiiuoo;
        ouqiiwuqeoegciso:
        if (stripos($this->agent, "\x6d\151\143\x72\x6f\x73\x6f\x66\x74\40\151\156\164\145\162\x6e\x65\x74\x20\x65\x78\160\x6c\157\162\145\162") !== false) {
            goto usoiismiikooagme;
        }
        goto sckcaoikwggaoiqm;
        kwemswkcueagmssu:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto mayucqimkiskmcms;
        yygugwkyoeackami:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto kwaiiaowwykksgcw;
        kqggyaomgmqyicmc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qymmimiisagiymuy;
        }
        goto agasiekywmaokckg;
        goowmysscaoakuma:
        gyqcauemgkuwquua:
        goto ygwwwwcgiwmcakmi;
        eoeoikgkiuewagwg:
        goto qkmucouuqggkwssg;
        goto mgsmmaqqkusaaqew;
        mayucqimkiskmcms:
        $sogksuscggsicmac = explode("\162\166\x3a", $this->agent);
        goto syawcymwokyaqeck;
        qwwigmoeocgyqyuy:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto oeeccicqsoiyqcig;
        umaimowkyaemisiq:
        if (stripos($this->agent, "\155\163\160\x69\145") !== false || stripos($this->agent, "\160\x6f\x63\153\x65\164") !== false) {
            goto iseeayqyeoawwmwc;
        }
        goto yueaaaoockqicmwq;
        yiomssmosemcckmc:
        iseeayqyeoawwmwc:
        goto uuamswicsoyuguug;
        goiegscqgcukimys:
        goto qkmucouuqggkwssg;
        goto occyqeeyumwaygik;
        kwaiiaowwykksgcw:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto oesqmiaisaqseigm;
        wyagecywqcysyyae:
        goto ycsuqaygaisskkeq;
        goto kekkyamkouwoiyyi;
        qousyksekeougumo:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto micqaoiiquokaqmw;
        sckcaoikwggaoiqm:
        if (stripos($this->agent, "\x6d\x73\151\145") !== false && stripos($this->agent, "\x6f\160\145\x72\141") === false) {
            goto zkoqiugkkemmwqeq;
        }
        goto aaumqogegyqosuiq;
        kmmsoqcgiyougqqy:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto ygqkqwkyoosgomug;
        aqwaemcyooumguou:
        qkmucouuqggkwssg:
        goto asgwqocgsuugguse;
        uuiioegocmmcqgwq:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\x3b\x20", $this->agent), "\x6d\x73\x69\x65"));
        goto yygugwkyoeackami;
        sikkakqouqeckesc:
        qymmimiisagiymuy:
        goto aqwaemcyooumguou;
        uksaceogcmuacumi:
        if (stripos($this->agent, "\155\163\x70\151\x65") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto ieuewgsuqywiuuki;
        akmiwammkswkmyio:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eqiygsagygouqkyy;
        ieysgookkakiiuoo:
        if (!preg_match("\57\x33\x30\70\174\64\62\65\174\x34\x32\66\x7c\64\x37\64\x7c\60\x62\61\x2f\151", $yikciqwsimweauyg)) {
            goto uecqmukyqqgyoegy;
        }
        goto aykuikogcgweeoio;
        iqkkuesiuysywyag:
        goto qkmucouuqggkwssg;
        goto swasyyuiyouasyqy;
        eqiygsagygouqkyy:
        $this->aasasueowyemuyoc("\61\56\x30");
        goto gcasowsewwisgqwc;
        cyikciomyweygykm:
        if (stripos($this->agent, "\124\x72\151\x64\145\156\164\57\67\56\60\x3b\x20\162\166\72\61\61\x2e\60") !== false) {
            goto ycsqoemcioqgscik;
        }
        goto ouqiiwuqeoegciso;
        coeaoweyqagqsoqq:
        return true;
        goto goowmysscaoakuma;
        igesuquikuwmsywg:
        return true;
        goto iqkkuesiuysywyag;
        myymisiqiwiqymuu:
        ycsuqaygaisskkeq:
        goto eaicyuessygcyuqu;
        ieuewgsuqywiuuki:
        $quiguswioiaaywey = explode("\x2f", $this->agent);
        goto wysmuiaeuqqaycig;
        kekkyamkouwoiyyi:
        owgoagmssqsysiyq:
        goto uasakawygcqkquuy;
        asgwqocgsuugguse:
        return false;
        goto kiykgaeecsuoegei;
        wkgugqyackgiowas:
        return true;
        goto goiegscqgcukimys;
        yaeowwmkcuqmesau:
        
        if (!(stripos($this->agent, "\155\163\x6e\x62") !== false)) {
            goto kwyiuyoeysqeywmm;
        }
        goto kkumemicscqeqawi;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\x31\56\60");
        goto igesuquikuwmsywg;
        yueaaaoockqicmwq:
        goto qkmucouuqggkwssg;
        goto gocgaeomskmyyuaq;
        aykuikogcgweeoio:
        $this->aasasueowyemuyoc("\x31\x2e\x35");
        goto qsaiiuqwimiqiwyc;
        oesqmiaisaqseigm:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\x3b"], '', $yikciqwsimweauyg[1]));
        goto kmyoqookuiyomeec;
        kiykgaeecsuoegei:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto qakmsceesmcwecmo;
        sciiwomqgcamicqs:
        fwqikeoyaewusiym:
        goto aiaaaesgesgwsuck;
        ocisosooggaaueii:
        uqsmiiqigeisoyse:
        goto uuimoqmwywkkaygo;
        gmgwsqeqwquucyoo:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto csuemgeukskicmmi;
        ugmggeiwogwcgcqy:
        return true;
        goto mwcysigeamkwiwku;
        usmucisyagswyysu:
        amecoaswmoqigiku:
        goto wawimucmukumkuca;
        scimuugawiiuemki:
        if (stripos($this->agent, "\117\120\122") !== false) {
            goto ieeieiuoeqquyaka;
        }
        goto wmcauamwimsyiauk;
        uggmmsuyiiyuaeic:
        if (preg_match("\x2f\126\145\x72\x73\x69\157\x6e\134\57\50\61\x2a\x2e\x2a\51\x24\57", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto uqsmiiqigeisoyse;
        }
        goto cyaaugsakiugouae;
        ggaoikewqkecamgs:
        $this->eywockmuswoykooc(true);
        goto qwgicaiskacusqka;
        ssoogugiigiqooce:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mseowikguuikkiys;
        ywukigwwwumwuicy:
        return false;
        goto uyuugesysqaueywi;
        cyaaugsakiugouae:
        if (preg_match("\57\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto iggqqqegoegigyii;
        }
        goto cemwkemiwicagmou;
        ccaqsekgkcqqayyg:
        cqcomacmwgougkai:
        goto iegksyacuckwoyiw;
        mmowusaeqemsisiq:
        qwiwywqwmmciwiea:
        goto wskewcieqoqiuoui;
        uyeiymmkkiyccakm:
        if (stripos($this->agent, "\157\x70\x65\x72\141") !== false) {
            goto oucqmskiygmmsmye;
        }
        goto scimuugawiiuemki;
        wmcauamwimsyiauk:
        goto uqqaaeqoykgcakec;
        goto mmowusaeqemsisiq;
        eukqocmusiasmewe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto usmucisyagswyysu;
        uuimoqmwywkkaygo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto akmiwuwwkeokegkq;
        coyegiuygcqwmaqc:
        if (!isset($quiguswioiaaywey[1])) {
            goto amecoaswmoqigiku;
        }
        goto eukqocmusiasmewe;
        wskewcieqoqiuoui:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\160\145\x72\141\40\x6d\151\156\151");
        goto ggiacqackmguiiki;
        qwgicaiskacusqka:
        sackmgaomiwgeqca:
        goto aekskqewqmeauaug;
        mukwaeyamkyacewo:
        oucqmskiygmmsmye:
        goto gocmokqaeqkqcmma;
        omcmaswaawciiaui:
        goto uqqaaeqoykgcakec;
        goto quucsamwocuceyae;
        swkkeqmaqugwiysy:
        $this->eywockmuswoykooc(true);
        goto csoomgiiyysqmeku;
        ikuoukwawkkyaacy:
        return true;
        goto omcmaswaawciiaui;
        eyuieiqqgyowoocu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eoueymmeawwwswwq;
        }
        goto gmgwsqeqwquucyoo;
        omusyecyksyowysk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kwsuumgiqsskggqy;
        cemwkemiwicagmou:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\157\x70\145\x72\141"));
        goto uowyeayyimmqogge;
        ukkkmakiisiqkacm:
        goto uqqaaeqoykgcakec;
        goto mukwaeyamkyacewo;
        ycaooqesseeagoka:
        eoueymmeawwwswwq:
        goto ccaqsekgkcqqayyg;
        oqyumeoumucciuao:
        iggqqqegoegigyii:
        goto gouyqmyakowooiyw;
        gocmokqaeqkqcmma:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\x70\x65\162\141");
        goto uggmmsuyiiyuaeic;
        uukmwmiaqigsqaug:
        $this->eywockmuswoykooc(true);
        goto myemqwquecqwakyq;
        msywkyeikecaomgo:
        smsuqgcummiyucsc:
        goto uccocwouuuisiage;
        uccocwouuuisiage:
        if (!(stripos($this->agent, "\115\x6f\x62\x69\154\145") !== false)) {
            goto isgqqmaauckagsao;
        }
        goto uukmwmiaqigsqaug;
        aiaaaesgesgwsuck:
        $yikciqwsimweauyg = explode("\57", $cgkyugweawsewkuu);
        goto yscyooysgqsyuayo;
        emoscekqieoummww:
        $cgkyugweawsewkuu = stristr($this->agent, "\x4f\x50\122");
        goto cyucgakoiiemocie;
        myemqwquecqwakyq:
        isgqqmaauckagsao:
        goto ksmacqoqogyoookk;
        iegksyacuckwoyiw:
        if (!(stripos($this->agent, "\117\x70\145\162\x61\x20\x4d\x6f\x62\x69") !== false)) {
            goto sackmgaomiwgeqca;
        }
        goto ggaoikewqkecamgs;
        aekskqewqmeauaug:
        $this->name = self::BROWSER_OPERA;
        goto ikuoukwawkkyaacy;
        ageemsqieiqyqwag:
        cuyagmoysmwoceks:
        goto eiosgmsukekekyou;
        eiosgmsukekekyou:
        csguwgocosyisgyq:
        goto kywqmsqusiysywqe;
        kywqmsqusiysywqe:
        $this->name = self::BROWSER_OPERA_MINI;
        goto swkkeqmaqugwiysy;
        csuemgeukskicmmi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ycaooqesseeagoka;
        kwsuumgiqsskggqy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yiyksucyuaosekey;
        iqwiyiisyasiwsiu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiuyiuiocgycwaae;
        }
        goto omusyecyksyowysk;
        ggiacqackmguiiki:
        if (preg_match("\57\x5c\57\x2f", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ckgikcyggaegucyk;
        ksmacqoqogyoookk:
        $this->name = self::BROWSER_OPERA;
        goto ugmggeiwogwcgcqy;
        yiyksucyuaosekey:
        uiuyiuiocgycwaae:
        goto msywkyeikecaomgo;
        akmiwuwwkeokegkq:
        goto cqcomacmwgougkai;
        goto oqyumeoumucciuao;
        csoomgiiyysqmeku:
        return true;
        goto ukkkmakiisiqkacm;
        ckgikcyggaegucyk:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\x70\145\162\141\x20\x6d\151\156\151"));
        goto coyegiuygcqwmaqc;
        quucsamwocuceyae:
        ieeieiuoeqquyaka:
        goto emoscekqieoummww;
        wawimucmukumkuca:
        goto csguwgocosyisgyq;
        goto sciiwomqgcamicqs;
        mseowikguuikkiys:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ageemsqieiqyqwag;
        wkasucgiaeogugcw:
        goto cqcomacmwgougkai;
        goto ocisosooggaaueii;
        cyucgakoiiemocie:
        if (!preg_match("\x2f\134\x2f\57", $cgkyugweawsewkuu)) {
            goto smsuqgcummiyucsc;
        }
        goto yeayeuiggqoigwag;
        gouyqmyakowooiyw:
        $yikciqwsimweauyg = explode("\57", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto eyuieiqqgyowoocu;
        qakmsceesmcwecmo:
        if (stripos($this->agent, "\157\x70\145\162\141\x20\155\151\x6e\x69") !== false) {
            goto qwiwywqwmmciwiea;
        }
        goto uyeiymmkkiyccakm;
        yscyooysgqsyuayo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cuyagmoysmwoceks;
        }
        goto ssoogugiigiqooce;
        yeayeuiggqoigwag:
        $yikciqwsimweauyg = explode("\57", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto iqwiyiisyasiwsiu;
        uowyeayyimmqogge:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto wkasucgiaeogugcw;
        mwcysigeamkwiwku:
        uqqaaeqoykgcakec:
        goto ywukigwwwumwuicy;
        uyuugesysqaueywi:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto oymcieacieeqwses;
        oymcieacieeqwses:
        if (!(stripos($this->agent, "\x43\150\x72\157\x6d\x65") !== false)) {
            goto kicmwgigiciiuqaw;
        }
        goto cggwmqyuewwisqsu;
        ewswyuykwuaigiyo:
        return false;
        goto owuqwmsqouswswau;
        acmqaeyciymmsgua:
        kicmwgigiciiuqaw:
        goto ewswyuykwuaigiyo;
        akgyaaawgcecyoqc:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ceskkigeaqcaasqs;
        gsuqomaoosusiqew:
        goto gqaoecysyaaccyyy;
        goto ymyqsgymeusoakyi;
        cggwmqyuewwisqsu:
        $yikciqwsimweauyg = preg_split("\57\133\134\57\73\135\53\x2f", stristr($this->agent, "\103\150\162\157\155\x65"));
        goto ymkqceigmmuokugy;
        awukkyueuqcaywks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto akgyaaawgcecyoqc;
        syuakiekoaowmoyy:
        $this->eywockmuswoykooc(true);
        goto symsqqgwwimugwue;
        ymyqsgymeusoakyi:
        qkmqkcwgskmyeoyq:
        goto syuakiekoaowmoyy;
        gygkmqwkaiskgwws:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto awukkyueuqcaywks;
        ceskkigeaqcaasqs:
        
        if (!(stripos($this->agent, "\x41\x6e\x64\x72\x6f\x69\x64") !== false)) {
            goto somyyugyumgeukik;
        }
        goto wikueqyuegggkqoi;
        symsqqgwwimugwue:
        gqaoecysyaaccyyy:
        goto qymyaksieaiemaam;
        kkaqamsuqkgkwowo:
        oikasesimicoysmu:
        goto acmqaeyciymmsgua;
        wikueqyuegggkqoi:
        if (stripos($this->agent, "\x4d\157\142\x69\x6c\145") !== false) {
            goto qkmqkcwgskmyeoyq;
        }
        goto qoigmymamwikqkce;
        qoigmymamwikqkce:
        $this->icigyueiiwsukmsu(true);
        goto gsuqomaoosusiqew;
        qymyaksieaiemaam:
        somyyugyumgeukik:
        goto ygeweomowkiskgec;
        ymkqceigmmuokugy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto oikasesimicoysmu;
        }
        goto gygkmqwkaiskgwws;
        ygeweomowkiskgec:
        return true;
        goto kkaqamsuqkgkwowo;
        owuqwmsqouswswau:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto iugcwummaqmgiqgm;
        asmgcmegmekauiqm:
        return false;
        goto quqkggiycuoeaysg;
        iugcwummaqmgiqgm:
        if (!(stripos($this->agent, "\167\145\142\164\166") !== false)) {
            goto skawosaecygmqmsq;
        }
        goto cqmwuwoaqiumaogi;
        ueimcmmgwiommwwg:
        skawosaecygmqmsq:
        goto asmgcmegmekauiqm;
        owaomgiwykiiesqs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wkeoacqqekmaqogk;
        cqmwuwoaqiumaogi:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x77\x65\x62\x74\x76"));
        goto aecesusucigikyqs;
        caomeykgioesgswg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto owaomgiwykiiesqs;
        aecesusucigikyqs:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iawosyeimcucqgky;
        }
        goto caomeykgioesgswg;
        wkeoacqqekmaqogk:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto iaewosqywiqiqmqs;
        iaewosqywiqiqmqs:
        return true;
        goto bkmiygiccoagsyck;
        bkmiygiccoagsyck:
        iawosyeimcucqgky:
        goto ueimcmmgwiommwwg;
        quqkggiycuoeaysg:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto wgmeusuigqsowace;
        cmmgaceguouaicok:
        return false;
        goto gosqawkmwoukawsa;
        aiawyogcusykcgem:
        return true;
        goto ocegwkgcsegowucu;
        qomaksiaaooygwsg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kgeeikakwgkukkke;
        }
        goto sqkqqasyecqeysww;
        eqgyoucqmyyqqagc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x4e\145\164\x50\x6f\x73\151\x74\x69\x76\x65"));
        goto qomaksiaaooygwsg;
        vkcgsyecgukweyki:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto aiawyogcusykcgem;
        aiugcqaaymaasikk:
        cyscaaaicmkkqies:
        goto cmmgaceguouaicok;
        seekksssaiokokyq:
        $this->aasasueowyemuyoc(str_replace(["\50", "\51", "\73"], '', $quiguswioiaaywey[0]));
        goto vkcgsyecgukweyki;
        sqkqqasyecqeysww:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto seekksssaiokokyq;
        ocegwkgcsegowucu:
        kgeeikakwgkukkke:
        goto aiugcqaaymaasikk;
        wgmeusuigqsowace:
        if (!(stripos($this->agent, "\116\x65\x74\x50\157\x73\151\x74\151\x76\145") !== false)) {
            goto cyscaaaicmkkqies;
        }
        goto eqgyoucqmyyqqagc;
        gosqawkmwoukawsa:
    }
    
    protected function usswyskeuiskccki()
    {
        goto kkmwiocaqecosykg;
        asmgcueacgcuokak:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto siycmwciwoewsooi;
        kkmwiocaqecosykg:
        if (!(stripos($this->agent, "\x67\141\x6c\x65\157\x6e") !== false)) {
            goto iiksoosqisyggaks;
        }
        goto mqieeoagcesmykuy;
        mqieeoagcesmykuy:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\147\141\x6c\145\x6f\x6e"));
        goto asmgcueacgcuokak;
        csskywiguyamicyu:
        return true;
        goto uceyoakcoqqgkmka;
        siycmwciwoewsooi:
        if (!isset($quiguswioiaaywey[1])) {
            goto kqmsyeoyemocoiqs;
        }
        goto ceguiykycywoocuu;
        owkecwacqesgqcaq:
        return false;
        goto gggcyumymmmiuaeu;
        mksgqgcoeeksaiqe:
        iiksoosqisyggaks:
        goto owkecwacqesgqcaq;
        ceguiykycywoocuu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto xwsiauqamwogkwmo;
        uceyoakcoqqgkmka:
        kqmsyeoyemocoiqs:
        goto mksgqgcoeeksaiqe;
        xwsiauqamwogkwmo:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto csskywiguyamicyu;
        gggcyumymmmiuaeu:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto ymykisoiiyyqeqim;
        ymqcqiyawcogwgym:
        return true;
        goto cmwigsaskaamoema;
        iyoukgscwmcoweqa:
        return false;
        goto yagoyoogqkomucci;
        yasusgwwwekossyy:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto isygymaiseqgeiau;
        keqsgkcumkusgygg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto eqsqecmiugakueqm;
        ymykisoiiyyqeqim:
        if (!(stripos($this->agent, "\113\157\156\x71\165\x65\162\x6f\x72") !== false)) {
            goto ogcasmoaumciscii;
        }
        goto mcqqawkmqiiyecey;
        cmwigsaskaamoema:
        imaukawsimqgmauc:
        goto ecmeeksmaqyumykg;
        isygymaiseqgeiau:
        if (!isset($quiguswioiaaywey[1])) {
            goto imaukawsimqgmauc;
        }
        goto keqsgkcumkusgygg;
        mcqqawkmqiiyecey:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\113\x6f\x6e\161\165\145\x72\157\162"));
        goto yasusgwwwekossyy;
        ecmeeksmaqyumykg:
        ogcasmoaumciscii:
        goto iyoukgscwmcoweqa;
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
        oswqmcgsewiscugq:
        $quiguswioiaaywey = explode("\x20", stristr(str_replace("\x2f", "\40", $this->agent), "\x69\x63\x61\x62"));
        goto guukcysyaquuekek;
        ssewsumymwocqyyc:
        kegmcwesswsaamum:
        goto qgoyesykieqauwqi;
        eacseogmmqokmogu:
        if (!(stripos($this->agent, "\151\143\141\142") !== false)) {
            goto swuqimcsmiwqaaom;
        }
        goto oswqmcgsewiscugq;
        ycmiqcakcweakeaa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto koakuemcskwaoesy;
        koakuemcskwaoesy:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto cwyqqgwwmesmkiam;
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
        gsguoieaewagyogs:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ocesuggkygmwyoqu;
        aomicoqgwkaiosso:
        return true;
        goto sgyogmewgaymcogg;
        ocesuggkygmwyoqu:
        if (!(stripos($this->agent, "\x6f\155\156\151\x77\x65\142") !== false)) {
            goto qskksaagcgukausc;
        }
        goto amwwumeqoscyamoc;
        omagiuciweiemoik:
        return false;
        goto uemcayqyeweiosqw;
        sgyogmewgaymcogg:
        qskksaagcgukausc:
        goto omagiuciweiemoik;
        ogoiksimykeiuekg:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto aomicoqgwkaiosso;
        iimagwawmcgmaoga:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto aaqekekaoaqgkiio;
        aaqekekaoaqgkiio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ogoiksimykeiuekg;
        amwwumeqoscyamoc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x6f\155\x6e\151\x77\x65\142"));
        goto iimagwawmcgmaoga;
        uemcayqyeweiosqw:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto eiwccayegouiekwk;
        osoyyysskuckoocc:
        if (!isset($quiguswioiaaywey[1])) {
            goto wusygegyegamyioq;
        }
        goto kuimgaokwkqogaqk;
        eiwccayegouiekwk:
        if (!(stripos($this->agent, "\120\x68\x6f\x65\156\151\170") !== false)) {
            goto ksqsiosguewggcya;
        }
        goto acasskokyagwkumy;
        ukeaeogwsoackkas:
        ksqsiosguewggcya:
        goto auaaassweykwwsge;
        acasskokyagwkumy:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\120\150\x6f\145\x6e\x69\x78"));
        goto osoyyysskuckoocc;
        kuimgaokwkqogaqk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto iuumwocuuoyceaks;
        iuumwocuuoyceaks:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto oewqywyeaueuiyes;
        ssoogecumeaeekcs:
        wusygegyegamyioq:
        goto ukeaeogwsoackkas;
        oewqywyeaueuiyes:
        return true;
        goto ssoogecumeaeekcs;
        auaaassweykwwsge:
        return false;
        goto sqgomkiuekmaykyw;
        sqgomkiuekmaykyw:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto awyuyuuiayqoekkc;
        awyuyuuiayqoekkc:
        if (!(stripos($this->agent, "\106\x69\x72\145\142\x69\x72\x64") !== false)) {
            goto mimmumuekmyyyaug;
        }
        goto eoemqkmecwqsagce;
        icmgwgoywmewyeii:
        return false;
        goto mocwcekscogegcwa;
        ycaskcwiywemgmay:
        mimmumuekmyyyaug:
        goto icmgwgoywmewyeii;
        qwmuiakauycoowya:
        return true;
        goto csgyceiomssoweek;
        kigsuwkmaacmwgsq:
        if (!isset($quiguswioiaaywey[1])) {
            goto ouseosmqaaykkaaw;
        }
        goto qkymmwmmiemiauyg;
        csgyceiomssoweek:
        ouseosmqaaykkaaw:
        goto ycaskcwiywemgmay;
        qkymmwmmiemiauyg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ykceeqicyiqgssye;
        eoemqkmecwqsagce:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\106\x69\x72\x65\142\151\162\144"));
        goto kigsuwkmaacmwgsq;
        ykceeqicyiqgssye:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto qwmuiakauycoowya;
        mocwcekscogegcwa:
    }
    
    protected function aweyeayscomouegw()
    {
        goto aoasogsaqgewacum;
        cciuyoceqiauqsic:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto oekaqqseuemcgeqe;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        aoasogsaqgewacum:
        if (stripos($this->agent, "\106\x69\162\x65\146\157\x78") !== false && preg_match("\x2f\116\141\x76\151\x67\x61\x74\157\x72\x5c\x2f\x28\133\x5e\40\x5d\x2a\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto aegamiyqqcwuqcyk;
        }
        goto kyisocwmmwaiwayk;
        yuaommqaoiseeice:
        ecsuogeauwascies:
        goto cciuyoceqiauqsic;
        weekemioaaygmggw:
        return false;
        goto ycgokycmgosuamok;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        oekaqqseuemcgeqe:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto ikcmeaikkuekumye;
        ikcmeaikkuekumye:
        return true;
        goto uuskeoeuumiigues;
        mogugiawmaoukmak:
        goto aqewaqaseausoewg;
        goto ccokywiouwwmiwse;
        uuskeoeuumiigues:
        aqewaqaseausoewg:
        goto weekemioaaygmggw;
        ccokywiouwwmiwse:
        aegamiyqqcwuqcyk:
        goto ysmckuskoqmsyaca;
        mgqmswesaekqqwiu:
        goto aqewaqaseausoewg;
        goto yuaommqaoiseeice;
        kyisocwmmwaiwayk:
        if (stripos($this->agent, "\106\151\162\x65\x66\x6f\x78") === false && preg_match("\x2f\x4e\x65\x74\163\x63\141\160\x65\66\x3f\x5c\x2f\50\x5b\136\x20\135\x2a\51\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto ecsuogeauwascies;
        }
        goto mogugiawmaoukmak;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        ycgokycmgosuamok:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto meamoqcwwsqiyoqc;
        aeecqkykiqyuqmyg:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto gmcieuucmgkcoyii;
        gmcieuucmgkcoyii:
        return true;
        goto waqwkysqcskykuum;
        meamoqcwwsqiyoqc:
        if (!(stripos($this->agent, "\115\157\172\151\x6c\x6c\141") !== false && preg_match("\57\x53\x68\x69\x72\145\x74\x6f\x6b\x6f\134\57\x28\133\x5e\40\x5d\52\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto mqweugciiyyukymg;
        }
        goto wsmwmwswqaoeaquq;
        yuqemymykuasskoy:
        return false;
        goto mmeumymqusiaiugs;
        waqwkysqcskykuum:
        mqweugciiyyukymg:
        goto yuqemymykuasskoy;
        wsmwmwswqaoeaquq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aeecqkykiqyuqmyg;
        mmeumymqusiaiugs:
    }
    
    protected function noeygigqkeciickm()
    {
        goto kscocsoaygkcaocq;
        swusuwwawauqqqae:
        qcqqieuakcakkwem:
        goto qmssaeiomssoycas;
        kscocsoaygkcaocq:
        if (!(stripos($this->agent, "\x4d\157\x7a\x69\x6c\154\x61") !== false && preg_match("\57\x49\x63\145\x43\x61\164\x5c\x2f\50\x5b\136\x20\x5d\52\x29\57\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto qcqqieuakcakkwem;
        }
        goto akqgwckwiiugwiay;
        qgocscwqkuyemmcw:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto oiuiwkywiekacygs;
        akqgwckwiiugwiay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgocscwqkuyemmcw;
        qmssaeiomssoycas:
        return false;
        goto wamigcygcsucigmi;
        oiuiwkywiekacygs:
        return true;
        goto swusuwwawauqqqae;
        wamigcygcsucigmi:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto iaumckssomaweakk;
        semoayicskccgemw:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto ouigaoeeokmqaqoe;
        ouigaoeeokmqaqoe:
        goto kgwewosygiuoiigk;
        goto myycwmecoyeekeus;
        iaumckssomaweakk:
        if (!preg_match("\57\x4e\x6f\153\151\141\50\x5b\136\x5c\57\135\x2b\x29\x5c\57\x28\133\x5e\40\x53\120\x5d\53\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mqqqqeiimsgyacaw;
        }
        goto uqsgmacmweuuwqgy;
        uqsgmacmweuuwqgy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qogciqauggmmigia;
        euoqiuygwwssoqou:
        mqqqqeiimsgyacaw:
        goto yseikqceqguugaee;
        yseikqceqguugaee:
        return false;
        goto uioaeuugwsakiykw;
        ewoywsgmimyigwai:
        kgwewosygiuoiigk:
        goto smyugaykeesyuakw;
        qogciqauggmmigia:
        if (stripos($this->agent, "\123\145\162\x69\x65\x73\66\60") !== false || strpos($this->agent, "\x53\x36\60") !== false) {
            goto qmcmakumyemsuoaa;
        }
        goto semoayicskccgemw;
        myycwmecoyeekeus:
        qmcmakumyemsuoaa:
        goto aaymugikaeaqsaos;
        aaymugikaeaqsaos:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto ewoywsgmimyigwai;
        uqemmmykkceucwum:
        return true;
        goto euoqiuygwwssoqou;
        smyugaykeesyuakw:
        $this->eywockmuswoykooc(true);
        goto uqemmmykkceucwum;
        uioaeuugwsakiykw:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto oqqooygakaagaiqw;
        mkyoiqgumggcsakq:
        goto koiuecgmeyuiwqkk;
        goto oakyyiqquqsccuks;
        oakyyiqquqsccuks:
        rkaswcmccyqqioqs:
        goto cwoaoecuqyiccwcw;
        giiusoakskiciase:
        if (preg_match("\x2f\120\141\x6c\x65\155\x6f\x6f\x6e\50\133\60\x2d\71\x61\x2d\x7a\101\55\x5a\134\56\135\x2b\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseakuykcykcomwg;
        }
        goto wkeeueuiysyiqaoq;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto osioeeokiykiemau;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        imimwegqkykucuia:
        return false;
        goto iksugmewgigsiaec;
        iaksmguwicewykey:
        goto koiuecgmeyuiwqkk;
        goto qegwssscaomyoekg;
        oqqooygakaagaiqw:
        if (!(stripos($this->agent, "\x73\141\x66\x61\x72\x69") === false)) {
            goto gsiigogemgmesycs;
        }
        goto qaqckwcumcykqcay;
        yysucuowuoiskkui:
        $this->aasasueowyemuyoc('');
        goto wguwcgascccyeasu;
        wkeeueuiysyiqaoq:
        if (preg_match("\57\x50\x61\154\145\x6d\157\x6f\156\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto uiskkgkcyssegigy;
        }
        goto mkyoiqgumggcsakq;
        koomcmawyuomqmii:
        yseakuykcykcomwg:
        goto smeqeomcqisgssau;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        aomoesqmwqcyueoa:
        return true;
        goto yggwmccmmiemueou;
        wcosggqmokuwgomy:
        goto koiuecgmeyuiwqkk;
        goto koomcmawyuomqmii;
        qaqckwcumcykqcay:
        if (preg_match("\57\120\x61\154\x65\x6d\157\x6f\156\133\134\x2f\x20\134\x28\135\50\133\x5e\x20\x3b\134\51\x5d\53\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto rkaswcmccyqqioqs;
        }
        goto giiusoakskiciase;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        qegwssscaomyoekg:
        uiskkgkcyssegigy:
        goto yysucuowuoiskkui;
        wguwcgascccyeasu:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto aomoesqmwqcyueoa;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        yggwmccmmiemueou:
        koiuecgmeyuiwqkk:
        goto cqouacqmcegmykuu;
        cqouacqmcegmykuu:
        gsiigogemgmesycs:
        goto imimwegqkykucuia;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        iksugmewgigsiaec:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto omygyywamgusigko;
        omygyywamgusigko:
        if (!preg_match("\x2f\125\x43\40\x3f\102\162\157\167\x73\145\x72\134\57\77\50\133\134\144\x5c\56\135\53\x29\57", $this->agent, $meyiiwcswqmuggyg)) {
            goto iioueceaesegmgyi;
        }
        goto gouiskmmqywoscgm;
        yoqwqkuekiauqsuc:
        if (stripos($this->agent, "\115\157\142\151\154\145") !== false) {
            goto jimwweuekesuemiy;
        }
        goto wousqisikkiooewi;
        yqyyssciomuwwisa:
        return false;
        goto cskgiyqesqqawuwo;
        seyoowocwsqsekqi:
        ewqooaykuauegwio:
        goto yoqwqkuekiauqsuc;
        qagasowcequukwoc:
        return true;
        goto sqsgeccoawoeukws;
        gaqigeacswyyikkk:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto qagasowcequukwoc;
        sqsgeccoawoeukws:
        iioueceaesegmgyi:
        goto yqyyssciomuwwisa;
        baqgcseewusocmom:
        $this->eywockmuswoykooc(true);
        goto akkuysmcasqukkug;
        wousqisikkiooewi:
        $this->icigyueiiwsukmsu(true);
        goto wwamkekgkkiogiiu;
        gouiskmmqywoscgm:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto ewqooaykuauegwio;
        }
        goto uwcawmmgcaecgyqm;
        uwcawmmgcaecgyqm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto seyoowocwsqsekqi;
        miwaaaueiacyqequ:
        jimwweuekesuemiy:
        goto baqgcseewusocmom;
        akkuysmcasqukkug:
        ywgwuqyisimkacqe:
        goto gaqigeacswyyikkk;
        wwamkekgkkiogiiu:
        goto ywgwuqyisimkacqe;
        goto miwaaaueiacyqequ;
        cskgiyqesqqawuwo:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto ygoomqwcsggeiuge;
        wgsqeuaooemcuqqu:
        amcioyyyuiigekuo:
        goto wwqoywoqcyikouca;
        gokkyeisqkoccqis:
        sgwiageicumuqwke:
        goto ymmqwacaoayoyiei;
        wggeuckgywqucase:
        if (preg_match("\57\106\x69\x72\145\x66\157\170\x24\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qwyameqoseiywwus;
        }
        goto seggycoceaokwcsa;
        egqqigmomgaaamqc:
        oymsgiwgeiqguuyy:
        goto agiiusmyqqkgqymk;
        aksacseyuwyiseay:
        mmomogyaswcsgwwy:
        goto sgaqioqcecwgyikg;
        cwycmkkoscmgcecg:
        
        if (!(stripos($this->agent, "\x41\x6e\144\x72\x6f\x69\144") !== false || stripos($this->agent, "\151\120\x68\x6f\156\x65") !== false)) {
            goto wgcmsygycukiqmui;
        }
        goto kiqiskyesywkwkos;
        wowiaueqaaqckwqq:
        
        if (!(stripos($this->agent, "\x41\156\x64\162\x6f\x69\x64") !== false || stripos($this->agent, "\151\120\x68\157\x6e\145") !== false)) {
            goto amcioyyyuiigekuo;
        }
        goto yewmigswwuewyqki;
        wgiwseywikgwumwe:
        kmwseockoawqkoao:
        goto rkoyiagmcaycmwmg;
        agiiusmyqqkgqymk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iammommmgkimyyaa;
        ymmqwacaoayoyiei:
        $this->eywockmuswoykooc(true);
        goto aqcucyeikgmemsoq;
        qmycieyiysuesagy:
        return true;
        goto wgiwseywikgwumwe;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto usaooeqiaewcmyog;
        ikiegwiqykqwuykk:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto qmycieyiysuesagy;
        iqmgswgoooqkkigo:
        usmieesmayeskkmk:
        goto aoosuewasqmmyqoi;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        ksogiaquuskeygaq:
        $this->icigyueiiwsukmsu(true);
        goto aygkuykcicgceciq;
        aoosuewasqmmyqoi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto kwuakeywaocokwig;
        gyomccegicuoyguk:
        return false;
        goto mquksyyawiwsakwy;
        yqggmewmakemgkui:
        escuksewiugekayq:
        goto qoguisoimaueiaoo;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        gseqciagemceawam:
        $this->aasasueowyemuyoc('');
        goto ikiegwiqykqwuykk;
        kiocmmsiuwcuemyg:
        wwmqgecmsimuecam:
        goto cguuomiqwuicsgwa;
        kuegskyiyugiuosa:
        goto kmwseockoawqkoao;
        goto uaigiceqkuiguogo;
        guwmgkcgaoysewyw:
        $this->icigyueiiwsukmsu(true);
        goto ciimuiiegyeaggya;
        gqaiguosioisccwm:
        if (preg_match("\57\106\151\162\145\x66\157\170\133\x5c\x2f\x20\134\x28\135\x28\133\136\40\x3b\x5c\51\135\53\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto usmieesmayeskkmk;
        }
        goto qwwscygkwwsiocok;
        seggycoceaokwcsa:
        goto kmwseockoawqkoao;
        goto iqmgswgoooqkkigo;
        wcaiuquuswsqacgg:
        ngeuswkcwioygkku:
        goto gqaiguosioisccwm;
        uaigiceqkuiguogo:
        qwyameqoseiywwus:
        goto gseqciagemceawam;
        rkoyiagmcaycmwmg:
        goto kaycawgquiieeaiw;
        goto egqqigmomgaaamqc;
        eowkmiqqmqyeayci:
        return true;
        goto igsmwamoyswayqiy;
        qyogimcocyqgyyee:
        goto kmwseockoawqkoao;
        goto aksacseyuwyiseay;
        iammommmgkimyyaa:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto cwycmkkoscmgcecg;
        aygkuykcicgceciq:
        goto escuksewiugekayq;
        goto kiocmmsiuwcuemyg;
        kiqiskyesywkwkos:
        if (stripos($this->agent, "\115\157\x62\x69\154\145") !== false || stripos($this->agent, "\124\141\x62\x6c\x65\x74") !== false) {
            goto wwmqgecmsimuecam;
        }
        goto ksogiaquuskeygaq;
        ciimuiiegyeaggya:
        goto coyskeyoikeaqoek;
        goto gokkyeisqkoccqis;
        amksqwmicsmyocyw:
        goto kaycawgquiieeaiw;
        goto wcaiuquuswsqacgg;
        kwuakeywaocokwig:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wowiaueqaaqckwqq;
        ygoomqwcsggeiuge:
        if (stripos($this->agent, "\x73\x61\146\141\x72\151") === false) {
            goto ngeuswkcwioygkku;
        }
        goto qkqwgsoymmqsqeim;
        qoguisoimaueiaoo:
        wgcmsygycukiqmui:
        goto eowkmiqqmqyeayci;
        qkqwgsoymmqsqeim:
        if (preg_match("\x2f\106\170\151\x4f\x53\x5b\134\x2f\x20\x5c\x28\x5d\50\x5b\x5e\x20\73\x5c\x29\x5d\53\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto oymsgiwgeiqguuyy;
        }
        goto amksqwmicsmyocyw;
        qwwscygkwwsiocok:
        if (preg_match("\x2f\106\x69\x72\145\x66\157\x78\x28\133\60\55\71\x61\55\x7a\x41\x2d\132\134\x2e\x5d\53\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mmomogyaswcsgwwy;
        }
        goto wggeuckgywqucase;
        igsmwamoyswayqiy:
        kaycawgquiieeaiw:
        goto gyomccegicuoyguk;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        cguuomiqwuicsgwa:
        $this->eywockmuswoykooc(true);
        goto yqggmewmakemgkui;
        aqcucyeikgmemsoq:
        coyskeyoikeaqoek:
        goto wgsqeuaooemcuqqu;
        yewmigswwuewyqki:
        if (stripos($this->agent, "\115\x6f\x62\151\x6c\x65") !== false || stripos($this->agent, "\x54\141\142\154\x65\x74") !== false) {
            goto sgwiageicumuqwke;
        }
        goto guwmgkcgaoysewyw;
        mquksyyawiwsakwy:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto qiocyqceaiyiakii;
        skkmiiyukuqmiimc:
        coosgwiiekamiyug:
        goto uogoykaeoysgmism;
        qqaeaoygygacuuos:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\143\x65\167\145\141\x73\x65\154"));
        goto wasmuqumoqqcmgys;
        agsoqikgikksqkom:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto iscqcsqyqkmkgkag;
        uogoykaeoysgmism:
        mgqockcuascmkosg:
        goto eoewsuaewaeueaks;
        iscqcsqyqkmkgkag:
        return true;
        goto skkmiiyukuqmiimc;
        mokuaeasioyuisqs:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto umacsiiqmwygcycu;
        eoewsuaewaeueaks:
        return false;
        goto qscgsguyqggkagoe;
        umacsiiqmwygcycu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto agsoqikgikksqkom;
        qiocyqceaiyiakii:
        if (!(stripos($this->agent, "\x49\143\145\167\145\x61\163\145\154") !== false)) {
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
        msmouyoaqcwsasuw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ymqwkscegcogqqwy;
        eoeoqacqgmumwcuk:
        gmeiquwcawwmowwm:
        goto wmssuwyesuyeiows;
        gwigmqemwuqewiae:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\x76\72"));
        goto kkweuygueeaqsksg;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\72", '', $quiguswioiaaywey[0]));
        goto iyqmmwymomwqiqaw;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        mcukkaquiosmsguy:
        if (stripos($this->agent, "\155\x6f\172\151\154\x6c\141") !== false && preg_match("\57\162\x76\x3a\x5b\x30\55\x39\x5d\x2e\133\x30\55\x39\135\x5b\141\x2d\142\135\x3f\x2f\x69", $this->agent) && stripos($this->agent, "\156\145\x74\163\x63\x61\160\145") === false) {
            goto gmeiquwcawwmowwm;
        }
        goto usaokwsyegousimg;
        oayqqymykwwugkwe:
        return true;
        goto wwwqiimkicqiuwui;
        ymqwkscegcogqqwy:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto oayqqymykwwugkwe;
        kwkcmwgyiwyacywi:
        preg_match("\57\162\166\72\x5b\x30\x2d\71\x5d\56\133\x30\55\71\135\133\x61\x2d\x62\x5d\x3f\57\x69", $this->agent, $quiguswioiaaywey);
        goto siyeyakoauowwose;
        wwwqiimkicqiuwui:
        awceesgmgquwakuu:
        goto qewckkocqykmeywg;
        uusaeowyacskgumg:
        goto awceesgmgquwakuu;
        goto eoeoqacqgmumwcuk;
        uieyawsyauemyqgy:
        goto awceesgmgquwakuu;
        goto uciuogooymiyqyao;
        eyimkecocwsicyge:
        return true;
        goto ooswoacocwcgoagc;
        uciuogooymiyqyao:
        eswswyigkwqaaasy:
        goto msmouyoaqcwsasuw;
        wmssuwyesuyeiows:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\162\x76\x3a"));
        goto kwkcmwgyiwyacywi;
        eaawsaueyyoiqoao:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eyimkecocwsicyge;
        usaokwsyegousimg:
        if (stripos($this->agent, "\x6d\x6f\x7a\151\154\154\x61") !== false && preg_match("\57\162\166\72\x5b\60\x2d\x39\x5d\x5c\x2e\133\60\x2d\x39\135\57\x69", $this->agent) && stripos($this->agent, "\x6e\x65\164\x73\x63\x61\x70\x65") === false) {
            goto ameeyqiguwmykwai;
        }
        goto ckgoiwueekyamwcu;
        ooswoacocwcgoagc:
        goto awceesgmgquwakuu;
        goto kyqewaqymicucwuc;
        kyqewaqymicucwuc:
        ameeyqiguwmykwai:
        goto gwigmqemwuqewiae;
        siyeyakoauowwose:
        $this->aasasueowyemuyoc(str_replace("\x72\166\x3a", '', $quiguswioiaaywey[0]));
        goto eaawsaueyyoiqoao;
        qewckkocqykmeywg:
        return false;
        goto ugsumemcqucesssg;
        ckgoiwueekyamwcu:
        if (stripos($this->agent, "\x6d\157\172\151\x6c\x6c\x61") !== false && preg_match("\57\155\x6f\172\x69\154\x6c\141\134\57\x28\133\x5e\x20\x5d\52\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\156\x65\x74\163\143\x61\160\x65") === false) {
            goto eswswyigkwqaaasy;
        }
        goto uusaeowyacskgumg;
        ugsumemcqucesssg:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto cqayoeygyqqamquk;
        iieeiugaeeqyaqok:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto eiiemassiceeqmeq;
        eiiemassiceeqmeq:
        return true;
        goto sgwucycigkyieoea;
        cqayoeygyqqamquk:
        if (!(stripos($this->agent, "\154\171\156\x78") !== false)) {
            goto gyoiekqiqwwquomc;
        }
        goto cmowiicqgqiakqem;
        ksswuscweggkeiko:
        return false;
        goto qsoukmmoqeuqsoee;
        seswyksiukyeqkqc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iieeiugaeeqyaqok;
        qsqskaukgysseokg:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto seswyksiukyeqkqc;
        cmowiicqgqiakqem:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4c\x79\156\x78"));
        goto qsqskaukgysseokg;
        sgwucycigkyieoea:
        gyoiekqiqwwquomc:
        goto ksswuscweggkeiko;
        qsoukmmoqeuqsoee:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto mksgcawyikcceiqa;
        gkaykeoacgugeumu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\101\155\141\x79\x61"));
        goto uuqskowyckcgagkc;
        eiqmqaiyewsgyois:
        return true;
        goto wekysuykykiweqms;
        mksgcawyikcceiqa:
        if (!(stripos($this->agent, "\141\155\x61\x79\141") !== false)) {
            goto ocoaeuqqauqewyig;
        }
        goto gkaykeoacgugeumu;
        wekysuykykiweqms:
        ukiiyimwmgiqisca:
        goto kacseggomkeowiqm;
        iaiekaygcqmocmee:
        return false;
        goto wguukissuqyuqeku;
        kacseggomkeowiqm:
        ocoaeuqqauqewyig:
        goto iaiekaygcqmocmee;
        wwyeoccuqgcgcuuc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yksmaaesmwecwoak;
        yksmaaesmwecwoak:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sgsaqgwgakicwckk;
        sgsaqgwgakicwckk:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto eiqmqaiyewsgyois;
        uuqskowyckcgagkc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ukiiyimwmgiqisca;
        }
        goto wwyeoccuqgcgcuuc;
        wguukissuqyuqeku:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto eyowigugugmmkeiw;
        iqymaeimsmwkkkie:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto essqemwiweimukwe;
        essqemwiweimukwe:
        return true;
        goto uuqaakyqgqwiiwom;
        kycikakmkwkieqwk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qkgkkwcagegkwkwi;
        yieeukyoaeioqock:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\x65\162\x73\151\x6f\x6e"));
        goto jawaweyeoaoueooa;
        wayscwykqcwqgqyi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ccsysoygswagacce;
        eyowigugugmmkeiw:
        if (!(stripos($this->agent, "\123\x61\x66\141\x72\x69") !== false && stripos($this->agent, "\x69\120\150\157\156\145") === false && stripos($this->agent, "\151\120\157\144") === false)) {
            goto scooeumumiwmgowm;
        }
        goto yieeukyoaeioqock;
        jawaweyeoaoueooa:
        if (isset($yikciqwsimweauyg[1])) {
            goto ggwywcekieoyeuya;
        }
        goto wayscwykqcwqgqyi;
        uuqaakyqgqwiiwom:
        scooeumumiwmgowm:
        goto yiamqaqsueaiqwuq;
        yiamqaqsueaiqwuq:
        return false;
        goto mceeomsqguaacseg;
        oioqgywuoiaisyuu:
        kewymgqeemiuewca:
        goto iqymaeimsmwkkkie;
        kgecmyesgkacyyqm:
        ggwywcekieoyeuya:
        goto kycikakmkwkieqwk;
        qkgkkwcagegkwkwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oioqgywuoiaisyuu;
        ccsysoygswagacce:
        goto kewymgqeemiuewca;
        goto kgecmyesgkacyyqm;
        mceeomsqguaacseg:
    }
    protected function yswggmyigakcackc()
    {
        goto qwmyieguwoysqegw;
        mcqygaykwaaseack:
        cwcuamqicskkmuyg:
        goto aukkqqimoumiiccy;
        keyciqmuisymkgcw:
        if (isset($yikciqwsimweauyg[1])) {
            goto mkumickumqmmkiqc;
        }
        goto moyywqqiasmyoscc;
        ggqwsgmqqyaicosm:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iieymwaigukwymsc;
        moyywqqiasmyoscc:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto aiyqwwuiayikques;
        kcckgokmwuywmaiw:
        return false;
        goto iwoquisgaegiocss;
        aukkqqimoumiiccy:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto raigmgqaksaqoosc;
        ascewisaoqauaymk:
        qugekewwywkuiqyk:
        goto kcckgokmwuywmaiw;
        aiyqwwuiayikques:
        goto cwcuamqicskkmuyg;
        goto swgqwkyuwoqeyeyu;
        qwmyieguwoysqegw:
        if (!(stripos($this->agent, "\x53\x61\155\x73\x75\156\147\102\x72\157\x77\163\x65\x72") !== false)) {
            goto qugekewwywkuiqyk;
        }
        goto gsyquwaygesygkiq;
        iieymwaigukwymsc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mcqygaykwaaseack;
        swgqwkyuwoqeyeyu:
        mkumickumqmmkiqc:
        goto ggqwsgmqqyaicosm;
        gsyquwaygesygkiq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\x61\x6d\163\x75\156\x67\x42\x72\x6f\x77\x73\145\162"));
        goto keyciqmuisymkgcw;
        raigmgqaksaqoosc:
        return true;
        goto ascewisaoqauaymk;
        iwoquisgaegiocss:
    }
    protected function uiwkymoksesuumwe()
    {
        goto oakguomioocmeiia;
        mmuomyiooicyqscg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yegcwkkemkycyuua;
        eiissuweooqsaauy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto kakgceiyakaueuww;
        yegcwkkemkycyuua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wuoaeksukwwaycoi;
        uqieceoogswuggos:
        yccweyyksqycwuqi:
        goto mmuomyiooicyqscg;
        smagqkegqiooysya:
        if (isset($yikciqwsimweauyg[1])) {
            goto yccweyyksqycwuqi;
        }
        goto eiissuweooqsaauy;
        yuyccgsguyaaygmu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\x69\154\153"));
        goto smagqkegqiooysya;
        gamusuoqieekieka:
        return true;
        goto dwyqyusgqwqwomqk;
        oakguomioocmeiia:
        if (!(stripos($this->agent, "\123\x69\154\153") !== false)) {
            goto wqswcaeeyeaqieom;
        }
        goto yuyccgsguyaaygmu;
        kakgceiyakaueuww:
        goto qoamoegiiwismakk;
        goto uqieceoogswuggos;
        emaeckumgkmgcaew:
        return false;
        goto wiamyucsaoosmoei;
        eusmcuqiciwcooss:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto gamusuoqieekieka;
        dwyqyusgqwqwomqk:
        wqswcaeeyeaqieom:
        goto emaeckumgkmgcaew;
        wuoaeksukwwaycoi:
        qoamoegiiwismakk:
        goto eusmcuqiciwcooss;
        wiamyucsaoosmoei:
    }
    protected function cgqcukygysieeqko()
    {
        goto ysoiwegyoqymuuek;
        mkywwqusckeeisiy:
        if (isset($yikciqwsimweauyg[1])) {
            goto iiwmmqqaqckwwiqe;
        }
        goto qskoquwmkkgkkmuy;
        ysoiwegyoqymuuek:
        if (!(stripos($this->agent, "\111\x66\162\141\155\145\154\x79") !== false)) {
            goto akqsaiecouuqacks;
        }
        goto cucsooyoayssmcas;
        muouqwckwywsgiwg:
        return true;
        goto qquimmcqqiyegcym;
        wacgcmsgismsomma:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckguemuwukmeycag;
        ayqocaaesmkygque:
        oqqscigyquseosya:
        goto usaseckaaaugcygu;
        ckguemuwukmeycag:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ayqocaaesmkygque;
        qkeuasieckwuqseq:
        return false;
        goto ouaokeyacuscccyu;
        qyskykugeiqkauce:
        goto oqqscigyquseosya;
        goto cguckckouuwacmow;
        qquimmcqqiyegcym:
        akqsaiecouuqacks:
        goto qkeuasieckwuqseq;
        usaseckaaaugcygu:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto muouqwckwywsgiwg;
        cguckckouuwacmow:
        iiwmmqqaqckwwiqe:
        goto wacgcmsgismsomma;
        qskoquwmkkgkkmuy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qyskykugeiqkauce;
        cucsooyoayssmcas:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\x66\x72\141\155\x65\x6c\171"));
        goto mkywwqusckeeisiy;
        ouaokeyacuscccyu:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto eeqsuowcmyeyuoqw;
        osygawsacakgggko:
        if (isset($yikciqwsimweauyg[1])) {
            goto iywyeuaaoaeymmag;
        }
        goto iwwouqosmwummgsi;
        kuqeksgikkymkyeo:
        return false;
        goto aogimqgcygkugqoc;
        soqmkkwmmkqiweau:
        wsiggqyeiueeyqyu:
        goto sqwwkouiqayeqeyo;
        wwiysyawwqeuikcc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto soqmkkwmmkqiweau;
        wygcwcywyeosuemq:
        goto wsiggqyeiueeyqyu;
        goto ymcqcaygueguiuig;
        eeqsuowcmyeyuoqw:
        if (!(stripos($this->agent, "\x43\157\x63\x6f\x61\x52\145\163\164\x43\x6c\x69\x65\156\x74") !== false)) {
            goto ikcsgymqsagymgco;
        }
        goto auaukkuskuciowkq;
        ymcqcaygueguiuig:
        iywyeuaaoaeymmag:
        goto eiwuwemqmigskwoe;
        eiwuwemqmigskwoe:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wwiysyawwqeuikcc;
        kggwwgeqkgwyoseq:
        ikcsgymqsagymgco:
        goto kuqeksgikkymkyeo;
        iwwouqosmwummgsi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wygcwcywyeosuemq;
        auaukkuskuciowkq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x43\x6f\x63\x6f\141\x52\x65\163\164\103\x6c\x69\x65\156\x74"));
        goto osygawsacakgggko;
        oqoyyooooyegowuk:
        return true;
        goto kggwwgeqkgwyoseq;
        sqwwkouiqayeqeyo:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto oqoyyooooyegowuk;
        aogimqgcygkugqoc:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto gkkogauyaimaaoky;
        qioeweaouoiyoayy:
        return true;
        goto ssyeoucmcqaewkws;
        ssyeoucmcqaewkws:
        kwmkgoegswsseyia:
        goto gukuouumaoiiugiw;
        gukuouumaoiiugiw:
        return false;
        goto ayyeoeyyawiuiukq;
        gkkogauyaimaaoky:
        if (!stristr($this->agent, "\x46\141\143\145\142\157\157\x6b\x45\x78\x74\x65\x72\156\x61\x6c\110\x69\164")) {
            goto kwmkgoegswsseyia;
        }
        goto akocagcmqwymsqqw;
        ckyyyqokcocsmium:
        $this->oqgqmcogeugkakss(true);
        goto qioeweaouoiyoayy;
        akocagcmqwymsqqw:
        $this->aasmeayouwmacaow(true);
        goto ckyyyqokcocsmium;
        ayyeoeyyawiuiukq:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto gosqmqqycwquosse;
        ysuyamauyegkceea:
        return false;
        goto wqmmaiwyoumwmiyi;
        cwgiecqggoksyuko:
        $this->oqgqmcogeugkakss(true);
        goto kekiekeeqkowaiga;
        gosqmqqycwquosse:
        if (!stristr($this->agent, "\106\x42\111\x4f\x53")) {
            goto soyeimgmemqugquc;
        }
        goto cwgiecqggoksyuko;
        kekiekeeqkowaiga:
        return true;
        goto wscoawgsgqekweuq;
        wscoawgsgqekweuq:
        soyeimgmemqugquc:
        goto ysuyamauyegkceea;
        wqmmaiwyoumwmiyi:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto iuugeqgkacqmuais;
        kkiiykemaoeswsay:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto uiseoyicaoyaokum;
        gqsmmaqkuciiwwki:
        return false;
        goto yuokckkqcuumcmua;
        iuugeqgkacqmuais:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\145\162\x73\151\x6f\156"));
        goto eqocwcasskyqeauu;
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
        uiseoyicaoyaokum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oyswaymeoiouuaoo;
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
        uywiwaiokksgwuqm:
        return true;
        goto messwieuimiowsag;
        aykkiwwmmckueiak:
        if (!isset($yikciqwsimweauyg[1])) {
            goto imumueocakucecam;
        }
        goto gmiywscmoiqcceks;
        messwieuimiowsag:
        imumueocakucecam:
        goto gousoguwcwieyseq;
        ssciauiqmswaugss:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x43\162\151\117\x53"));
        goto aykkiwwmmckueiak;
        ikumyeymcsyyuauw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto keuamggsqkcwyoqi;
        gousoguwcwieyseq:
        return false;
        goto wouosmamsmggekic;
        wouosmamsmggekic:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto ykqeyymweawywsia;
        eekkyoakqmykcqec:
        yisqaaicegsokeuk:
        goto ismcyiwkmqaaygge;
        qemqoaymwywkewmy:
        $this->ssquiwqwwcgcqiic();
        goto lwaoqwcmyiqkkouw;
        emsgawiqsesiiccg:
        return true;
        goto eekkyoakqmykcqec;
        yyagogoiskcuomuq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto cwmsekismgywawai;
        cwmsekismgywawai:
        $this->uewoqoqkekmsyoeo();
        goto aooeicywwyscawue;
        awoyakoygoouaqgi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto yyagogoiskcuomuq;
        ykqeyymweawywsia:
        if (!(stripos($this->agent, "\x69\x50\x68\x6f\x6e\145") !== false)) {
            goto yisqaaicegsokeuk;
        }
        goto awoyakoygoouaqgi;
        aooeicywwyscawue:
        $this->iqsiguacookiqwcs();
        goto qemqoaymwywkewmy;
        ismcyiwkmqaaygge:
        return false;
        goto wugyaiqayoamwacg;
        lwaoqwcmyiqkkouw:
        $this->eywockmuswoykooc(true);
        goto emsgawiqsesiiccg;
        wugyaiqayoamwacg:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto qwscyqgokmkeqwuq;
        qwscyqgokmkeqwuq:
        if (!(stripos($this->agent, "\151\120\141\144") !== false)) {
            goto secssyuygoycmiqa;
        }
        goto syosmkmiyacocysi;
        qyaiyoskqmqyyuos:
        $this->ssquiwqwwcgcqiic();
        goto syookwiaqwmsaoem;
        soiuksqqwmsqwyeq:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto kiauseesqiwimyue;
        okmmkcokmyiqkceg:
        secssyuygoycmiqa:
        goto uguwgicugawycckm;
        syosmkmiyacocysi:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soiuksqqwmsqwyeq;
        sokqsksiecasgugs:
        $this->iqsiguacookiqwcs();
        goto qyaiyoskqmqyyuos;
        kiauseesqiwimyue:
        $this->uewoqoqkekmsyoeo();
        goto sokqsksiecasgugs;
        uguwgicugawycckm:
        return false;
        goto wskgeycusaokeymw;
        syookwiaqwmsaoem:
        $this->icigyueiiwsukmsu(true);
        goto usscqwyeesggymse;
        usscqwyeesggymse:
        return true;
        goto okmmkcokmyiqkceg;
        wskgeycusaokeymw:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto guuowemmmmcgukow;
        sgkeayimkgeyaqic:
        $this->uewoqoqkekmsyoeo();
        goto wyqemyugccycgaso;
        woiqioceiyccoyyi:
        kmwwukmymssqakuk:
        goto kqaemkmmqkyeweye;
        qiayswmiyoqisyac:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto sgkeayimkgeyaqic;
        guuowemmmmcgukow:
        if (!(stripos($this->agent, "\x69\x50\157\x64") !== false)) {
            goto kmwwukmymssqakuk;
        }
        goto yycskqumwcimyyye;
        yycskqumwcimyyye:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qiayswmiyoqisyac;
        okgoksuuouqmmqog:
        $this->ssquiwqwwcgcqiic();
        goto kgmwwkoiqwyscmys;
        wcuqqmycwwoqwwga:
        return true;
        goto woiqioceiyccoyyi;
        kgmwwkoiqwyscmys:
        $this->eywockmuswoykooc(true);
        goto wcuqqmycwwoqwwga;
        kqaemkmmqkyeweye:
        return false;
        goto kmggqcwmkwwcuioa;
        wyqemyugccycgaso:
        $this->iqsiguacookiqwcs();
        goto okgoksuuouqmmqog;
        kmggqcwmkwwcuioa:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto yqiyiacommmwsuce;
        owayquiaceqooaiq:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto sisuqeisegegcsiy;
        sskqokueeqgsuumq:
        if (stripos($this->agent, "\x4d\x6f\x62\151\x6c\145") !== false) {
            goto yecageyyqwumqoca;
        }
        goto ysuagggqaicqyguk;
        msasquyamakaamys:
        $this->eywockmuswoykooc(true);
        goto yymscyccyaauqiaa;
        wiuyqgeaacmksuqq:
        yecageyyqwumqoca:
        goto msasquyamakaamys;
        yemgimowqwsuqegu:
        agwcwemswacqgqyk:
        goto sskqokueeqgsuumq;
        womwoaskosgsauog:
        goto aqcwmswmgmgqokmu;
        goto wiuyqgeaacmksuqq;
        cimakcokyqkmyiau:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto soqyakgcqemouuko;
        ysuagggqaicqyguk:
        $this->icigyueiiwsukmsu(true);
        goto womwoaskosgsauog;
        ikkseymmmeooqmcm:
        if (isset($yikciqwsimweauyg[1])) {
            goto gssmokgwcmqesyao;
        }
        goto cimakcokyqkmyiau;
        sisuqeisegegcsiy:
        return true;
        goto yammukygywskcuey;
        kumioksgmqmsaeqy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ckkwwiuyquomkcku;
        yymscyccyaauqiaa:
        aqcwmswmgmgqokmu:
        goto owayquiaceqooaiq;
        yusmiciysquiqayq:
        return false;
        goto gquuqqacuqsgsyqc;
        kweqeekeouiqocqw:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\101\156\144\x72\x6f\151\x64"));
        goto ikkseymmmeooqmcm;
        soqyakgcqemouuko:
        goto agwcwemswacqgqyk;
        goto squaugeowuwyumqu;
        ckkwwiuyquomkcku:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yemgimowqwsuqegu;
        yammukygywskcuey:
        iuaaiqsmgoqiscio:
        goto yusmiciysquiqayq;
        squaugeowuwyumqu:
        gssmokgwcmqesyao:
        goto kumioksgmqmsaeqy;
        yqiyiacommmwsuce:
        if (!(stripos($this->agent, "\x41\156\144\x72\157\151\144") !== false)) {
            goto iuaaiqsmgoqiscio;
        }
        goto kweqeekeouiqocqw;
        gquuqqacuqsgsyqc:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto qikuwygeoaimcukg;
        csuikuskoecgsymk:
        return false;
        goto eeieacyyeywwyewo;
        umyuckgysaegimue:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ewgqscsiomaciyew;
        ceiseomqooekseuo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\151\x76\x61\x6c\x64\151"));
        goto siaqsogicwwmayco;
        iewuyuigwmkcmcas:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto qekesyoouukaciyy;
        sccmgumeswegawyk:
        okacoggoqgoomuyc:
        goto csuikuskoecgsymk;
        qekesyoouukaciyy:
        return true;
        goto sesgwayockkaakwm;
        qikuwygeoaimcukg:
        if (!(stripos($this->agent, "\x56\151\166\x61\154\x64\x69") !== false)) {
            goto okacoggoqgoomuyc;
        }
        goto ceiseomqooekseuo;
        ewgqscsiomaciyew:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iewuyuigwmkcmcas;
        sesgwayockkaakwm:
        qysqqycgiwmucggw:
        goto sccmgumeswegawyk;
        siaqsogicwwmayco:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qysqqycgiwmucggw;
        }
        goto umyuckgysaegimue;
        eeieacyyeywwyewo:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto ugkesgkkcqcasmoq;
        qsacucessyquaame:
        wwaocaooaayqamsu:
        goto ommoqequygggywyi;
        ommoqequygggywyi:
        return true;
        goto miayoysigsgumwyi;
        ykwmoaqmwggiqmsk:
        wyimgokwakggwuoi:
        goto yymiwwumowysiagy;
        cgqqkkwugmiqyiow:
        goto wwaocaooaayqamsu;
        goto ykwmoaqmwggiqmsk;
        msqmyqgiaeeeoeco:
        yyimqwkqigowmcco:
        goto umkyqiyguqoauyek;
        mquyowqsoawycyok:
        gcgyqiaawwccgqaw:
        goto aeycoymkqiwogwag;
        suessqeuiasoqioi:
        if (stripos($this->agent, "\151\x50\141\144") !== false) {
            goto mioiqgkakcguokqa;
        }
        goto oymuyuskiqyacysw;
        ysoeqwagkauquwme:
        if (!isset($yikciqwsimweauyg[1])) {
            goto scqaokckckemicqi;
        }
        goto uwkiseisiuqsoqsa;
        qqsiimkqkguqkeag:
        mioiqgkakcguokqa:
        goto eicqsqkmeaimooii;
        miayoysigsgumwyi:
        scqaokckckemicqi:
        goto msqmyqgiaeeeoeco;
        koceigseyecoyoia:
        if (stripos($this->agent, "\x41\156\x64\x72\x6f\x69\x64") !== false) {
            goto wyimgokwakggwuoi;
        }
        goto aucmemccqucmicwm;
        uwkiseisiuqsoqsa:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yikaomgieukoawws;
        giawgsomaouqgiyc:
        goto wwaocaooaayqamsu;
        goto mquyowqsoawycyok;
        eicqsqkmeaimooii:
        $this->icigyueiiwsukmsu(true);
        goto giawgsomaouqgiyc;
        kuyowuyquoioeqoc:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto suessqeuiasoqioi;
        yymiwwumowysiagy:
        $this->icigyueiiwsukmsu(true);
        goto qsacucessyquaame;
        aeycoymkqiwogwag:
        $this->eywockmuswoykooc(true);
        goto cgqqkkwugmiqyiow;
        ugkesgkkcqcasmoq:
        if (!(stripos($this->agent, "\x59\141\102\x72\157\167\x73\x65\162") !== false)) {
            goto yyimqwkqigowmcco;
        }
        goto gaomwgqgumkcqawg;
        umkyqiyguqoauyek:
        return false;
        goto eceqcqseqcswkywu;
        oymuyuskiqyacysw:
        if (stripos($this->agent, "\x4d\x6f\142\151\154\145") !== false) {
            goto gcgyqiaawwccgqaw;
        }
        goto koceigseyecoyoia;
        aucmemccqucmicwm:
        goto wwaocaooaayqamsu;
        goto qqsiimkqkguqkeag;
        gaomwgqgumkcqawg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\102\x72\157\x77\x73\x65\162"));
        goto ysoeqwagkauquwme;
        yikaomgieukoawws:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kuyowuyquoioeqoc;
        eceqcqseqcswkywu:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto ciewwguuyumcisme;
        iwgksuqmosckeqys:
        if (!isset($yikciqwsimweauyg[0])) {
            goto qugmeamkemckgqwo;
        }
        goto sayicwyqgigeswug;
        uwwiiwscccuowuoq:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x50\154\141\171\x53\x74\x61\164\151\x6f\x6e\x20"));
        goto uyymyaogieaawaig;
        mcygcucugmyqswys:
        uuweusyuygicyoik:
        goto sieaoicuiusscywg;
        ccmmogiaggiuewmu:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto syqgqkeomqsysaey;
        sayicwyqgigeswug:
        $quiguswioiaaywey = explode("\51", $yikciqwsimweauyg[2]);
        goto ccmmogiaggiuewmu;
        gqomqwuiesioaaaq:
        qugmeamkemckgqwo:
        goto ywuwweugeccmeuqk;
        qmisymqoqmqocwoe:
        $this->eywockmuswoykooc(true);
        goto mcygcucugmyqswys;
        syqgqkeomqsysaey:
        if (!(stripos($this->agent, "\120\157\x72\164\141\142\x6c\145\x29") !== false || stripos($this->agent, "\x56\151\164\141") !== false)) {
            goto uuweusyuygicyoik;
        }
        goto qmisymqoqmqocwoe;
        sieaoicuiusscywg:
        return true;
        goto gqomqwuiesioaaaq;
        ciewwguuyumcisme:
        if (!(stripos($this->agent, "\x50\154\x61\171\123\164\x61\164\151\157\x6e\40") !== false)) {
            goto eyekywukwqucywcm;
        }
        goto uwwiiwscccuowuoq;
        uyymyaogieaawaig:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto iwgksuqmosckeqys;
        ywuwweugeccmeuqk:
        eyekywukwqucywcm:
        goto iwacoiqoegwuaoqo;
        iwacoiqoegwuaoqo:
        return false;
        goto wkmmaysiigyuyimk;
        wkmmaysiigyuyimk:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto imgwqyoiweuiwiec;
        imgwqyoiweuiwiec:
        if (!preg_match("\41\x5e\127\147\145\164\57\x28\133\x5e\x20\135\x2b\x29\41\x69", $this->agent, $yikciqwsimweauyg)) {
            goto igcukieyogyaqwyo;
        }
        goto kwsagikwoqogqecc;
        ggqeyyoscwueysku:
        igcukieyogyaqwyo:
        goto qqsmygoumegcogay;
        wicaemaewwoooiuq:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto qmqsccegugoiyaiu;
        qmqsccegugoiyaiu:
        return true;
        goto ggqeyyoscwueysku;
        qqsmygoumegcogay:
        return false;
        goto qykkceysyessasey;
        kwsagikwoqogqecc:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto wicaemaewwoooiuq;
        qykkceysyessasey:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto wsgkqgogymcgueag;
        okqmcygoiwaesmis:
        sucmgqcacggcucec:
        goto kkecucquwauqqyku;
        yeqmmgegmqgwyaea:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mkycqgqaawooaaeu;
        sukiqmyemewakiao:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yeqmmgegmqgwyaea;
        wsgkqgogymcgueag:
        if (!(strpos($this->agent, "\x63\165\x72\154") === 0)) {
            goto sucmgqcacggcucec;
        }
        goto eimqoqgqmsiokyeq;
        eimqoqgqmsiokyeq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x63\165\162\154"));
        goto iyqcgqusyeiiaiai;
        mkycqgqaawooaaeu:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto uyiaqakwuswweqme;
        uyiaqakwuswweqme:
        return true;
        goto ecusscoueakqaqsu;
        iyqcgqusyeiiaiai:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iwyoaksegwaksmsu;
        }
        goto sukiqmyemewakiao;
        ecusscoueakqaqsu:
        iwyoaksegwaksmsu:
        goto okqmcygoiwaesmis;
        kkecucquwauqqyku:
        return false;
        goto gqcyummwsikcccom;
        gqcyummwsikcccom:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto owkougkyymiwoaqu;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\167\151\x6e") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        eouqmgocqewmwgik:
        goto miqaocyiuwmyyycc;
        goto ymucyiowcaqucyom;
        igiuieggauocicsg:
        $this->platform = self::PLATFORM_IPOD;
        goto oaoummcgooyceayi;
        aoemyociekskwmke:
        goto miqaocyiuwmyyycc;
        goto cyqeeaiwumyekkce;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\122\x6f\x6b\x75") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        yukieguwkeesieiy:
        goto miqaocyiuwmyyycc;
        goto cwceosugiiyyauqi;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\x53\151\154\153") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        wksuqaqsicwqekuy:
        kmgqqgsuiwcyccak:
        goto gusogiqwmwgywamm;
        aceouusygqicksgk:
        seaqqywowweasaoa:
        goto yysewcsossqsackg;
        iiyysuksmomyyuye:
        $this->platform = self::PLATFORM_IPHONE;
        goto cugaeomiskasooic;
        muycacscoqikyasc:
        goto miqaocyiuwmyyycc;
        goto uyauemouyweqqkwu;
        yysewcsossqsackg:
        $this->platform = self::PLATFORM_BEOS;
        goto qycwawiicimecwsq;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\116\x65\x74\x42\123\x44") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        akayacsmoiwoaeqm:
        coakwcyymiqcmwug:
        goto ueqauuccggkgcyqo;
        cekocgmmwuacyckg:
        if (stripos($this->agent, "\157\153\x68\164\x74\x70") !== false) {
            goto acysyqkmkgaoewci;
        }
        goto awumcmmeumuaiocw;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\x42\x6c\141\143\153\x42\x65\162\162\171") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        qsikciasasogymew:
        woqqukymqiuyququ:
        goto mcqoyigqsewkkwgc;
        emooiegicmmqkwsg:
        goto miqaocyiuwmyyycc;
        goto qcqgakkooouyiooi;
        esqckkawqugyqimw:
        goto miqaocyiuwmyyycc;
        goto wksuqaqsicwqekuy;
        icyocwacicqauogu:
        if (stripos($this->agent, "\x61\156\x64\x72\157\x69\x64") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\151\x4f\123") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        kyqkigouggegscsi:
        aycyoqqqwmyciise:
        goto igiuieggauocicsg;
        acmaiqeukwiqqyms:
        $this->platform = self::PLATFORM_NOKIA;
        goto esqckkawqugyqimw;
        syiwqmwwoemuyeou:
        goto miqaocyiuwmyyycc;
        goto cgqiesaeskmuwwcy;
        gkcqueouksaqceqw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto aaecacwqmsoowcsi;
        mougyosiwyugsymo:
        goto miqaocyiuwmyyycc;
        goto iouagkwueekusiwi;
        icoqeuawskkosskw:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto qcaqeqscugwwgyci;
        gciescsgqiuoqkim:
        goto miqaocyiuwmyyycc;
        goto kgwaccmcscsusase;
        wgcyyuswcmkwyaky:
        goto miqaocyiuwmyyycc;
        goto eccgyquwkmumeyea;
        awumcmmeumuaiocw:
        if (stripos($this->agent, "\120\x6f\x73\x74\x6d\x61\x6e\122\165\x6e\164\151\155\x65") !== false) {
            goto woqqukymqiuyququ;
        }
        goto oguaeaawigyoscii;
        oguaeaawigyoscii:
        if (stripos($this->agent, "\x49\146\x72\141\x6d\x65\x6c\171") !== false) {
            goto ycskcusgcyeowagm;
        }
        goto mougyosiwyugsymo;
        siaweewywmuayyks:
        muicsociwumgosaw:
        goto iiyysuksmomyyuye;
        emiuesoeeiqysuay:
        $this->platform = self::PLATFORM_ROKU;
        goto qoyywwueqcmomgio;
        ukmeggiqssyyyuku:
        goto miqaocyiuwmyyycc;
        goto kyqkigouggegscsi;
        mcqoyigqsewkkwgc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto eiguqiumekikicuw;
        gooiuuagswggewoq:
        $this->platform = self::PLATFORM_IPAD;
        goto ukmeggiqssyyyuku;
        wwauaucuwsokocmm:
        ycskcusgcyeowagm:
        goto eccymasqomswiwug;
        imagekgwsuqccwgo:
        $this->platform = self::PLATFORM_WINDOWS;
        goto eouqmgocqewmwgik;
        muiouqmomamguoce:
        if (stripos($this->agent, "\151\x50\x61\144") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\102\x65\x4f\123") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        ukmcukgkakisecyk:
        goto miqaocyiuwmyyycc;
        goto cyaomwaqoaiiqqes;
        gusogiqwmwgywamm:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto muycacscoqikyasc;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\164\x76\x4f\123") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        smmqcueceqkiggkm:
        $this->platform = self::PLATFORM_OPENBSD;
        goto ggcmqkuwqkkkmcgu;
        meiykooeimaqqico:
        if (stripos($this->agent, "\120\x6c\141\x79\163\x74\141\164\151\x6f\x6e") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        eiskwkcoggkikmcc:
        iacwiwmoggwseqsa:
        goto hsuemysceewomeuc;
        guquqeyggoqqkgkm:
        gsyegqcsyscyycic:
        goto smmqcueceqkiggkm;
        aeeiacomeyceesoe:
        if (stripos($this->agent, "\143\x75\162\x6c") !== false) {
            goto ymyoskqgyeykqmom;
        }
        goto seeosigigeuueiqy;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\x77\x69\x6e\144\x6f\x77\163") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        gyawuaoseweeioce:
        kwewaoocuqgaseoa:
        goto kouowucggykwmwgw;
        hsuemysceewomeuc:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto kqmqqomaqawisweo;
        imyycasecqwmeuew:
        $this->platform = self::PLATFORM_SUNOS;
        goto wmcckwsaaemkqweg;
        cwceosugiiyyauqi:
        acuiieocsgiyakia:
        goto ogugiciyicewkyue;
        iouagkwueekusiwi:
        cguaokskycyggqym:
        goto imagekgwsuqccwgo;
        qoyywwueqcmomgio:
        goto miqaocyiuwmyyycc;
        goto akayacsmoiwoaeqm;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\x69\120\150\157\156\145") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        emeoasammuwaesws:
        goto miqaocyiuwmyyycc;
        goto mqmowgywwygssysy;
        kouowucggykwmwgw:
        $this->platform = self::PLATFORM_NETBSD;
        goto aoemyociekskwmke;
        myiogoqascwcikcc:
        goto miqaocyiuwmyyycc;
        goto mkeuwsqceweiacum;
        ymucyiowcaqucyom:
        uwegawkagcagoeiw:
        goto gooiuuagswggewoq;
        cgqiesaeskmuwwcy:
        gwoqyokuiqqwugsk:
        goto sgssyyueamgacywm;
        ggcmqkuwqkkkmcgu:
        goto miqaocyiuwmyyycc;
        goto gyawuaoseweeioce;
        eccymasqomswiwug:
        $this->platform = self::PLATFORM_I_FRAME;
        goto yaaisamcwuuowiua;
        kqmqqomaqawisweo:
        goto miqaocyiuwmyyycc;
        goto wyokgowugcsiigum;
        yeeicocmyyaeksys:
        yioawsqawmqagueg:
        goto imwweegoasykooim;
        iqucsoqomgkeuyco:
        oesgciyeoewgouki:
        goto auuogsqacsimiksi;
        cmooymowqeusayua:
        goto miqaocyiuwmyyycc;
        goto aceouusygqicksgk;
        asksckakmysykiue:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto yeigmocusoouscsa;
        mqmowgywwygssysy:
        gqwemyquuwgqcaic:
        goto emiuesoeeiqysuay;
        qcqgakkooouyiooi:
        ugccoisuygekiaae:
        goto mokkeuemqauoaskk;
        cugaeomiskasooic:
        goto miqaocyiuwmyyycc;
        goto yeeicocmyyaeksys;
        maokeqaksuookoao:
        $this->platform = self::PLATFORM_WINDOWS;
        goto emooiegicmmqkwsg;
        uyauemouyweqqkwu:
        oyioakacwwceegie:
        goto gkcqueouksaqceqw;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\x69\x50\157\144") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        eayyeuwawewcqcom:
        syqyosyywqwgoeoo:
        goto esscoiyogsoqoquc;
        wyokgowugcsiigum:
        ymyoskqgyeykqmom:
        goto uiqoeooowosqagsw;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\x46\162\x65\x65\x42\123\104") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        sgssyyueamgacywm:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto myiogoqascwcikcc;
        ueqauuccggkgcyqo:
        $this->platform = self::PLATFORM_IPHONE . "\x2f" . self::PLATFORM_IPAD;
        goto mmqioecsyukkcgoo;
        msqycwkyqqeyqoka:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto wgcyyuswcmkwyaky;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\116\157\x6b\x69\141") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        awiomycussysmike:
        $this->platform = self::PLATFORM_LINUX;
        goto ukmcukgkakisecyk;
        seeosigigeuueiqy:
        if (stripos($this->agent, "\x43\162\117\123") !== false) {
            goto gwoqyokuiqqwugsk;
        }
        goto cekocgmmwuacyckg;
        qcaqeqscugwwgyci:
        goto miqaocyiuwmyyycc;
        goto qsikciasasogymew;
        eweqcaymckiwaccw:
        scoouaqeoeicswwu:
        goto maokeqaksuookoao;
        esscoiyogsoqoquc:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto gciescsgqiuoqkim;
        ksqmykkeymqwoacg:
        kycoymqmaukeekum:
        goto imyycasecqwmeuew;
        imwweegoasykooim:
        $this->platform = self::PLATFORM_APPLE;
        goto yukieguwkeesieiy;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\x4f\x70\145\x6e\x53\x6f\154\x61\x72\151\x73") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        auuogsqacsimiksi:
        $this->platform = self::PLATFORM_OS2;
        goto cmooymowqeusayua;
        cyqeeaiwumyekkce:
        gawseeswkisqiwoe:
        goto asksckakmysykiue;
        yeigmocusoouscsa:
        goto miqaocyiuwmyyycc;
        goto ksqmykkeymqwoacg;
        ogugiciyicewkyue:
        $this->platform = self::PLATFORM_ANDROID;
        goto ciwyuyksieuuqiee;
        ciwyuyksieuuqiee:
        goto miqaocyiuwmyyycc;
        goto eayyeuwawewcqcom;
        aaecacwqmsoowcsi:
        goto miqaocyiuwmyyycc;
        goto guquqeyggoqqkgkm;
        kgwaccmcscsusase:
        sskkqsmyqmgyewue:
        goto msqycwkyqqeyqoka;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\x6d\x61\x63") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\123\165\x6e\x4f\x53") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\117\123\134\57\x32") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\x6c\151\x6e\x75\170") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        oaoummcgooyceayi:
        goto miqaocyiuwmyyycc;
        goto siaweewywmuayyks;
        mmqioecsyukkcgoo:
        goto miqaocyiuwmyyycc;
        goto eiskwkcoggkikmcc;
        uiqoeooowosqagsw:
        $this->platform = self::PLATFORM_TERMINAL;
        goto syiwqmwwoemuyeou;
        yaaisamcwuuowiua:
        miqaocyiuwmyyycc:
        goto acoqamisuacwkqyo;
        cyaomwaqoaiiqqes:
        eequuumweyqioygw:
        goto acmaiqeukwiqqyms;
        wmcckwsaaemkqweg:
        goto miqaocyiuwmyyycc;
        goto iqucsoqomgkeuyco;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\154\151\156\165\x78") !== false && stripos($this->agent, "\x53\115\101\x52\124\55\x54\126") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\117\x70\145\156\x42\123\x44") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        eccgyquwkmumeyea:
        aacemqiqgqoyokmi:
        goto awiomycussysmike;
        eiguqiumekikicuw:
        goto miqaocyiuwmyyycc;
        goto wwauaucuwsokocmm;
        qycwawiicimecwsq:
        goto miqaocyiuwmyyycc;
        goto eweqcaymckiwaccw;
        mkeuwsqceweiacum:
        acysyqkmkgaoewci:
        goto icoqeuawskkosskw;
        mokkeuemqauoaskk:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto emeoasammuwaesws;
        acoqamisuacwkqyo:
    }
}
