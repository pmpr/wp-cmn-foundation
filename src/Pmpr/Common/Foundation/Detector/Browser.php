<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const BROWSER_UNKNOWN = "\165\x6e\153\x6e\x6f\x77\156";
    const VERSION_UNKNOWN = "\x75\156\x6b\x6e\x6f\x77\x6e";
    const BROWSER_OPERA = "\117\160\x65\162\x61";
    
    const BROWSER_OPERA_MINI = "\117\x70\x65\162\x61\40\115\x69\x6e\151";
    
    const BROWSER_WEBTV = "\127\145\x62\x54\126";
    
    const BROWSER_EDGE = "\x45\144\x67\145";
    
    const BROWSER_IE = "\x49\x6e\164\145\x72\156\145\x74\40\105\170\160\x6c\157\162\145\x72";
    
    const BROWSER_POCKET_IE = "\120\157\x63\153\145\164\40\111\x6e\x74\145\162\x6e\145\x74\x20\105\170\160\154\157\162\145\162";
    
    const BROWSER_KONQUEROR = "\x4b\157\x6e\161\165\x65\162\x6f\162";
    
    const BROWSER_ICAB = "\151\103\x61\x62";
    
    const BROWSER_OMNIWEB = "\x4f\155\156\x69\x57\145\142";
    
    const BROWSER_FIREBIRD = "\106\151\x72\145\x62\x69\162\x64";
    
    const BROWSER_FIREFOX = "\106\x69\x72\x65\x66\157\170";
    
    const BROWSER_BRAVE = "\x42\162\x61\166\x65";
    
    const BROWSER_PALEMOON = "\x50\x61\154\x65\x6d\157\x6f\x6e";
    
    const BROWSER_ICEWEASEL = "\111\x63\x65\167\x65\x61\163\145\154";
    
    const BROWSER_SHIRETOKO = "\x53\x68\x69\162\x65\x74\157\x6b\157";
    
    const BROWSER_MOZILLA = "\x4d\x6f\172\151\x6c\x6c\141";
    
    const BROWSER_AMAYA = "\101\x6d\x61\171\141";
    
    const BROWSER_LYNX = "\114\x79\x6e\170";
    
    const BROWSER_SAFARI = "\123\141\146\x61\x72\x69";
    
    const BROWSER_IPHONE = "\151\x50\150\x6f\x6e\145";
    
    const BROWSER_IPOD = "\151\120\157\x64";
    
    const BROWSER_IPAD = "\x69\x50\141\x64";
    
    const BROWSER_CHROME = "\103\150\x72\x6f\x6d\145";
    
    const BROWSER_ANDROID = "\101\x6e\x64\x72\x6f\x69\x64";
    
    const BROWSER_GOOGLEBOT = "\107\157\157\147\x6c\145\102\x6f\164";
    
    const BROWSER_CURL = "\143\x55\122\114";
    
    const BROWSER_WGET = "\127\147\x65\164";
    
    const BROWSER_UCBROWSER = "\x55\x43\x42\162\157\x77\163\x65\162";
    
    const BROWSER_YANDEXBOT = "\x59\141\x6e\144\x65\170\102\157\x74";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\141\156\x64\x65\x78\x49\x6d\141\147\145\x52\145\x73\151\172\145\x72";
    
    const BROWSER_YANDEXIMAGES_BOT = "\x59\x61\x6e\144\x65\170\111\x6d\141\147\145\163";
    
    const BROWSER_YANDEXVIDEO_BOT = "\x59\x61\156\x64\x65\170\126\x69\144\x65\x6f";
    
    const BROWSER_YANDEXMEDIA_BOT = "\131\141\x6e\144\x65\x78\115\x65\x64\x69\141";
    
    const BROWSER_YANDEXBLOGS_BOT = "\131\x61\156\144\x65\x78\102\x6c\157\x67\163";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\131\x61\x6e\x64\145\x78\106\x61\166\151\143\x6f\156\163";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\131\141\x6e\x64\145\170\127\145\x62\155\x61\163\x74\145\162";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\141\x6e\x64\145\170\x44\151\x72\145\143\x74";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\131\141\x6e\x64\x65\170\115\145\x74\x72\151\153\141";
    
    const BROWSER_YANDEXNEWS_BOT = "\x59\x61\156\144\x65\x78\116\145\x77\x73";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\141\x6e\x64\145\170\x43\141\164\141\154\157\x67";
    
    const BROWSER_SLURP = "\x59\141\150\157\157\x21\x20\123\x6c\x75\x72\x70";
    
    const BROWSER_W3CVALIDATOR = "\127\63\103\40\x56\x61\x6c\x69\x64\141\164\157\x72";
    
    const BROWSER_BLACKBERRY = "\x42\154\141\x63\153\x42\145\162\x72\x79";
    
    const BROWSER_ICECAT = "\111\x63\145\x43\141\164";
    
    const BROWSER_NOKIA_S60 = "\116\x6f\x6b\151\x61\40\123\66\x30\x20\x4f\123\123\x20\102\x72\x6f\167\163\145\x72";
    
    const BROWSER_NOKIA = "\x4e\157\x6b\151\141\x20\102\162\x6f\x77\x73\145\x72";
    
    const BROWSER_MSN = "\x4d\x53\116\x20\x42\x72\x6f\x77\x73\145\x72";
    
    const BROWSER_MSNBOT = "\115\x53\x4e\x20\x42\157\x74";
    
    const BROWSER_BINGBOT = "\102\x69\x6e\147\x20\102\x6f\x74";
    
    const BROWSER_VIVALDI = "\x56\151\166\141\154\x64\x69";
    
    const BROWSER_YANDEX = "\x59\x61\x6e\144\145\x78";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\116\x65\x74\x73\143\x61\160\145\x20\x4e\x61\x76\151\147\141\x74\x6f\x72";
    
    const BROWSER_GALEON = "\x47\141\x6c\145\x6f\156";
    
    const BROWSER_NETPOSITIVE = "\x4e\145\164\120\157\x73\151\x74\151\x76\145";
    
    const BROWSER_PHOENIX = "\x50\150\157\x65\x6e\151\170";
    
    const BROWSER_PLAYSTATION = "\x50\154\x61\x79\123\164\141\x74\151\x6f\x6e";
    const BROWSER_SAMSUNG = "\x53\x61\x6d\x73\x75\156\x67\102\x72\157\x77\163\x65\162";
    const BROWSER_SILK = "\123\151\154\153";
    const BROWSER_I_FRAME = "\x49\146\x72\141\155\x65\154\x79";
    const BROWSER_COCOA = "\103\x6f\x63\157\x61\122\x65\x73\164\x43\154\151\145\x6e\x74";
    const PLATFORM_UNKNOWN = "\165\156\x6b\x6e\x6f\167\x6e";
    const PLATFORM_WINDOWS = "\x57\151\x6e\x64\x6f\167\163";
    const PLATFORM_WINDOWS_CE = "\127\151\156\144\x6f\167\163\x20\103\105";
    const PLATFORM_APPLE = "\101\x70\160\154\x65";
    const PLATFORM_LINUX = "\114\x69\156\165\x78";
    const PLATFORM_OS2 = "\x4f\123\x2f\62";
    const PLATFORM_BEOS = "\x42\145\117\123";
    const PLATFORM_IPHONE = "\x69\120\150\x6f\156\145";
    const PLATFORM_IPOD = "\x69\x50\x6f\x64";
    const PLATFORM_IPAD = "\x69\120\x61\x64";
    const PLATFORM_BLACKBERRY = "\x42\x6c\x61\x63\153\102\x65\x72\162\171";
    const PLATFORM_NOKIA = "\116\x6f\153\x69\x61";
    const PLATFORM_FREEBSD = "\106\x72\x65\x65\x42\123\x44";
    const PLATFORM_OPENBSD = "\x4f\x70\145\156\x42\x53\104";
    const PLATFORM_NETBSD = "\116\145\164\x42\x53\x44";
    const PLATFORM_SUNOS = "\123\x75\x6e\x4f\123";
    const PLATFORM_OPENSOLARIS = "\117\x70\145\x6e\x53\157\x6c\x61\x72\151\x73";
    const PLATFORM_ANDROID = "\101\x6e\x64\x72\x6f\x69\144";
    const PLATFORM_PLAYSTATION = "\123\x6f\x6e\x79\x20\x50\x6c\x61\171\x53\x74\x61\164\x69\157\156";
    const PLATFORM_ROKU = "\122\157\153\x75";
    const PLATFORM_APPLE_TV = "\x41\x70\160\154\145\40\124\126";
    const PLATFORM_TERMINAL = "\x54\x65\162\x6d\x69\156\141\x6c";
    const PLATFORM_FIRE_OS = "\x46\151\162\x65\40\117\123";
    const PLATFORM_SMART_TV = "\123\115\x41\122\x54\x2d\x54\x56";
    const PLATFORM_CHROME_OS = "\103\x68\162\157\x6d\x65\x20\x4f\123";
    const PLATFORM_JAVA_ANDROID = "\x4a\141\166\x61\57\101\156\x64\162\x6f\151\144";
    const PLATFORM_POSTMAN = "\120\157\x73\x74\155\x61\x6e";
    const PLATFORM_I_FRAME = "\111\146\x72\141\x6d\x65\154\171";
    const OPERATING_SYSTEM_UNKNOWN = "\165\x6e\x6b\x6e\x6f\167\x6e";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto cgewwoksiyocyiga;
        uwowyggggqcqiuao:
        $this->reset();
        goto oagaqukqswwgeqsa;
        qocgiimiggeksoky:
        if ($uowwycywwssskuys != '') {
            goto mickaocycsqkssoi;
        }
        goto uwowyggggqcqiuao;
        cmkiwqcgsmwyuggk:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto eqwkmqasacseyecw;
        oagaqukqswwgeqsa:
        $this->qeqwswckeiieossq();
        goto ewuugiguuowassgm;
        cgewwoksiyocyiga:
        $this->runSetup = false;
        goto qocgiimiggeksoky;
        wywgewmwqwqsysig:
        parent::__construct();
        goto ggkyameswcsquisg;
        ewuugiguuowassgm:
        goto eeegygkcwmqmqyes;
        goto usukksgaqiqwqeys;
        eqwkmqasacseyecw:
        eeegygkcwmqmqyes:
        goto wywgewmwqwqsysig;
        usukksgaqiqwqeys:
        mickaocycsqkssoi:
        goto cmkiwqcgsmwyuggk;
        ggkyameswcsquisg:
    }
    
    public function reset()
    {
        goto mwwimgssiegweqes;
        omkuusmocycoywqq:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto ycuossoamymsusws;
        ggaemwcyouewkgcm:
        $this->isMobile = false;
        goto cicagciwwymgewcm;
        comoigwsemiiwoks:
        $this->isAol = false;
        goto uioqqaiayukmemcg;
        uqwoeksekoweiwke:
        $this->name = self::BROWSER_UNKNOWN;
        goto ykqeemyaewkmowyu;
        cicagciwwymgewcm:
        $this->isFacebook = false;
        goto omkuusmocycoywqq;
        mwwimgssiegweqes:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto uqwoeksekoweiwke;
        ygyacaeuykeookuw:
        $this->isTablet = false;
        goto ggaemwcyouewkgcm;
        ceycsuymgwmceuew:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto ygyacaeuykeookuw;
        ykqeemyaewkmowyu:
        $this->agent = isset($_SERVER["\110\124\124\x50\x5f\125\123\105\122\137\x41\107\x45\x4e\124"]) ? $_SERVER["\110\x54\x54\x50\137\x55\123\105\x52\x5f\x41\x47\x45\x4e\124"] : '';
        goto comoigwsemiiwoks;
        seimmqskqimoouui:
        $this->version = self::VERSION_UNKNOWN;
        goto ceycsuymgwmceuew;
        uioqqaiayukmemcg:
        $this->isRobot = false;
        goto seimmqskqimoouui;
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
        $this->version = preg_replace("\x2f\x5b\x5e\x30\x2d\71\x2c\56\x2c\141\x2d\172\x2c\x41\x2d\x5a\x2d\135\57", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\x2f\x5b\x5e\60\55\x39\x2c\x2e\x2c\x61\x2d\172\54\x41\x2d\x5a\135\57", '', $kqagasmwymmuiksq);
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
        egsqiegeesaowyyo:
        $this->reset();
        goto oouoqmemwouuymam;
        kmokgyokoacsqkcg:
        $this->qeqwswckeiieossq();
        goto mkummeawiecmouws;
        oouoqmemwouuymam:
        $this->agent = $agent_string;
        goto kmokgyokoacsqkcg;
        mkummeawiecmouws:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\143\x68\x72\157\155\145\146\x72\x61\x6d\x65") !== false;
    }
    
    public function __toString()
    {
        return "\x3c\x73\164\x72\157\156\147\x3e\102\x72\x6f\x77\x73\x65\162\x20\116\x61\x6d\145\x3a\x3c\x2f\x73\164\x72\x6f\156\147\76\x20{$this->aagmmewiwysmgseq()}\74\x62\162\x2f\76\12" . "\x3c\163\x74\x72\157\x6e\147\x3e\102\x72\157\x77\x73\x65\x72\x20\126\145\x72\x73\x69\x6f\x6e\x3a\x3c\x2f\x73\164\x72\157\x6e\x67\x3e\40{$this->gikwwgqmwccescgy()}\74\142\162\x2f\76\12" . "\x3c\163\164\162\157\x6e\x67\76\x42\162\157\x77\163\x65\162\40\x55\x73\145\x72\40\101\x67\x65\x6e\164\40\123\x74\x72\x69\x6e\x67\x3a\x3c\x2f\163\x74\162\x6f\x6e\147\x3e\40{$this->ckaoiscoyuuosace()}\74\142\162\57\76\xa" . "\x3c\x73\164\x72\157\156\x67\x3e\x50\x6c\141\164\x66\157\x72\x6d\x3a\74\x2f\163\x74\x72\x6f\156\x67\76\40{$this->kqeiosksqeuksyqu()}\74\142\x72\57\76";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto segicigoioeuyass;
        segicigoioeuyass:
        $this->acmmsiuwaekasogs();
        goto uqqiokcseqswsgia;
        yyacgikiikmoesek:
        $this->caqkscqcyqeciamc();
        goto syumssoiimkseoum;
        uqqiokcseqswsgia:
        $this->iggocwysumewuquw();
        goto yyacgikiikmoesek;
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
        koiysaseasuyieym:
        return true;
        goto emiksyiouuqsigmq;
        aqysowuwkoqgsoku:
        if (!(stripos($this->agent, "\142\x6c\x61\x63\x6b\x62\145\x72\162\x79") !== false)) {
            goto iiswiwucogikyuse;
        }
        goto muwsmoccecigsoqc;
        muwsmoccecigsoqc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x42\154\141\143\x6b\x42\145\162\x72\x79"));
        goto aykkageemggigccw;
        wwskqqaskwicmaay:
        $this->eywockmuswoykooc(true);
        goto koiysaseasuyieym;
        emiksyiouuqsigmq:
        kmcewougmoaciyky:
        goto awasoqakauqikkya;
        ssayikwmgomomkkq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cemqmygogskcoygo;
        ikwcwqmomksisice:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ssayikwmgomomkkq;
        cemqmygogskcoygo:
        $this->name = self::BROWSER_BLACKBERRY;
        goto wwskqqaskwicmaay;
        aykkageemggigccw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kmcewougmoaciyky;
        }
        goto ikwcwqmomksisice;
        sqimcsougcukocky:
        return false;
        goto eykuqgakcouscsks;
        eykuqgakcouscsks:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wyeguiaumcoesuiy;
        wyeguiaumcoesuiy:
        $this->igmimcweskyugiqm(false);
        goto auomkekgcqwsmgqu;
        kcakqaaesggwiooc:
        ggiqousqgowseosg:
        goto cwykioaoamgqueey;
        eicmoywsowuqoaou:
        if (!isset($quiguswioiaaywey[1])) {
            goto yeequkyciegceoeo;
        }
        goto wokayyqugqaoewiy;
        wokayyqugqaoewiy:
        $this->igmimcweskyugiqm(true);
        goto kgskcgusosyauysg;
        auomkekgcqwsmgqu:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto yymkyucwwqwymsse;
        kicewoesgqwaasem:
        yeequkyciegceoeo:
        goto kcakqaaesggwiooc;
        kgskcgusosyauysg:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\x5b\x5e\60\55\71\x5c\56\141\55\x7a\135\57\x69", '', $quiguswioiaaywey[1]));
        goto wagiyaqsgwiqyaie;
        wagiyaqsgwiqyaie:
        return true;
        goto kicewoesgqwaasem;
        cwykioaoamgqueey:
        return false;
        goto uwiyeosqocyekygy;
        yymkyucwwqwymsse:
        if (!(stripos($this->agent, "\141\x6f\x6c") !== false)) {
            goto ggiqousqgowseosg;
        }
        goto mscskuyuseuoqaqm;
        mscskuyuseuoqaqm:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\x41\x4f\114"));
        goto eicmoywsowuqoaou;
        uwiyeosqocyekygy:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto cwygwqacakmoesuw;
        cwygwqacakmoesuw:
        if (!(stripos($this->agent, "\x67\x6f\157\x67\x6c\145\x62\157\164") !== false)) {
            goto ackciywssqaumgac;
        }
        goto cgiakccyuqqwmomc;
        comcaymsaykamcgi:
        return false;
        goto yagmcusocgoqkewa;
        eyyiqqumygsogaoq:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto iskggyooogqgowys;
        iuumaowkqqsoicgy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qwimoyomwmmwkucy;
        }
        goto awwiackkekswgamo;
        ousiwuqmksykqcec:
        qwimoyomwmmwkucy:
        goto kiqcuyecmyaegims;
        cgiakccyuqqwmomc:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x67\x6f\x6f\x67\154\x65\x62\157\x74"));
        goto iuumaowkqqsoicgy;
        qaiaymokiyasqmic:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto eyyiqqumygsogaoq;
        iskggyooogqgowys:
        $this->aasmeayouwmacaow(true);
        goto skqkiegmwieyweww;
        skqkiegmwieyweww:
        return true;
        goto ousiwuqmksykqcec;
        kiqcuyecmyaegims:
        ackciywssqaumgac:
        goto comcaymsaykamcgi;
        awwiackkekswgamo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qaiaymokiyasqmic;
        yagmcusocgoqkewa:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto caegiamkkykaqmqu;
        caegiamkkykaqmqu:
        if (!(stripos($this->agent, "\131\x61\156\144\145\x78\102\157\164") !== false)) {
            goto aoeeywugooqmewcc;
        }
        goto wykyuuuooigicwgs;
        eseawwcgusiywyge:
        $this->aasmeayouwmacaow(true);
        goto soeiamgkkekwcoss;
        yugqeemimuuqeucm:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kuemgcgokyyggkoi;
        wykyuuuooigicwgs:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\x64\145\170\102\157\x74"));
        goto skomukgmucsuaggq;
        qimcgqssayewaygw:
        return false;
        goto suugmuecwqaakaoc;
        gugywasieysgmmyw:
        wesewyeqgccwmaos:
        goto uaamscmwcmumgasy;
        skomukgmucsuaggq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wesewyeqgccwmaos;
        }
        goto essswiygiqegaayw;
        soeiamgkkekwcoss:
        return true;
        goto gugywasieysgmmyw;
        kuemgcgokyyggkoi:
        $this->name = self::BROWSER_YANDEXBOT;
        goto eseawwcgusiywyge;
        uaamscmwcmumgasy:
        aoeeywugooqmewcc:
        goto qimcgqssayewaygw;
        essswiygiqegaayw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yugqeemimuuqeucm;
        suugmuecwqaakaoc:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto kiaawmeeisegyugk;
        akeoiekwqqqgqamo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uewgegcascsimmaq;
        }
        goto sqqqyyimyskaygea;
        qysommommieagsuw:
        $this->aasmeayouwmacaow(true);
        goto aekaikwiqmuwwqia;
        aekaikwiqmuwwqia:
        return true;
        goto ikmicisyykkwmeso;
        cyqyggywyykwqyak:
        gcgwykikiomgmgqa:
        goto osumgoskasckcieg;
        kiaawmeeisegyugk:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\x65\170\x49\x6d\x61\x67\x65\x52\x65\x73\x69\x7a\145\x72") !== false)) {
            goto gcgwykikiomgmgqa;
        }
        goto wysmsmaeqiucoycu;
        gwokcyciswoaygie:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto squqowgmqgocyqmi;
        osumgoskasckcieg:
        return false;
        goto mkcsckwgisqasmao;
        wysmsmaeqiucoycu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\x6e\144\145\170\x49\x6d\141\147\145\x52\x65\163\x69\172\145\x72"));
        goto akeoiekwqqqgqamo;
        sqqqyyimyskaygea:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto gwokcyciswoaygie;
        squqowgmqgocyqmi:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto qysommommieagsuw;
        ikmicisyykkwmeso:
        uewgegcascsimmaq:
        goto cyqyggywyykwqyak;
        mkcsckwgisqasmao:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto mygsucymimsqmqky;
        qigcoauseeigksyc:
        return true;
        goto yakmisgikescmgoo;
        gwqqoewaikqqueoe:
        return false;
        goto muyymwciiieqymqw;
        eosuykwimywegmse:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto swuywmmasggeiqou;
        ieycgksaoqioisky:
        $this->aasmeayouwmacaow(true);
        goto qigcoauseeigksyc;
        swuywmmasggeiqou:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ceugiycaewioseoe;
        uwemyeqsgcieyymm:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\156\x64\x65\170\103\x61\164\x61\154\x6f\147"));
        goto lhsckqwkqqauiqwy;
        ceugiycaewioseoe:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto ieycgksaoqioisky;
        yakmisgikescmgoo:
        woikwmiiusqmoygy:
        goto aacosyksiacoaeig;
        lhsckqwkqqauiqwy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto woikwmiiusqmoygy;
        }
        goto eosuykwimywegmse;
        aacosyksiacoaeig:
        imsysaygciegsqok:
        goto gwqqoewaikqqueoe;
        mygsucymimsqmqky:
        if (!(stripos($this->agent, "\131\141\156\144\x65\170\103\141\164\x61\154\x6f\147") !== false)) {
            goto imsysaygciegsqok;
        }
        goto uwemyeqsgcieyymm;
        muyymwciiieqymqw:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto iycocuaeccqgyoia;
        imkwmsokcecosyse:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto osuskyuuggamicou;
        kqmkicwuyqakoika:
        return false;
        goto suagmomycmooyggu;
        eqqaouecoaseisgq:
        sigosycgcicoiuuc:
        goto kqmkicwuyqakoika;
        omccwaywmcmqksmq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto imkwmsokcecosyse;
        iycocuaeccqgyoia:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\145\x78\x4e\145\167\163") !== false)) {
            goto sigosycgcicoiuuc;
        }
        goto ycyyicuqwqcyqeig;
        osuskyuuggamicou:
        $this->aasmeayouwmacaow(true);
        goto uaaiysoikgsuscqw;
        kccciwsgesamyyau:
        if (!isset($yikciqwsimweauyg[1])) {
            goto dqcamiqqkwiowaag;
        }
        goto oameuaooiigaiucg;
        uaaiysoikgsuscqw:
        return true;
        goto naiguckqsyeaesek;
        naiguckqsyeaesek:
        dqcamiqqkwiowaag:
        goto eqqaouecoaseisgq;
        ycyyicuqwqcyqeig:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\x6e\x64\x65\170\116\x65\x77\163"));
        goto kccciwsgesamyyau;
        oameuaooiigaiucg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto omccwaywmcmqksmq;
        suagmomycmooyggu:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto skqmieiumikceamg;
        swusyoymaokumies:
        umsckeuyiggsewac:
        goto xwymaakqyeoqaams;
        qaqmwuwwqycmqkyg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto eyogsqkuigcksouq;
        eiswwscyoaqoggge:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kmayccieqkkiqicw;
        }
        goto qaqmwuwwqycmqkyg;
        ukeksoegcoqokeik:
        return true;
        goto iigucumgucicccac;
        aikqumiqkkqaqgee:
        $this->aasmeayouwmacaow(true);
        goto ukeksoegcoqokeik;
        gwkeoekmeeqmmwgy:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto aikqumiqkkqaqgee;
        xwymaakqyeoqaams:
        return false;
        goto amcsamiamksyqmuq;
        eyogsqkuigcksouq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto gwkeoekmeeqmmwgy;
        iymeugimwgcywusq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\144\145\170\x4d\x65\164\162\x69\x6b\141"));
        goto eiswwscyoaqoggge;
        skqmieiumikceamg:
        if (!(stripos($this->agent, "\x59\x61\156\x64\145\170\115\x65\x74\x72\151\153\141") !== false)) {
            goto umsckeuyiggsewac;
        }
        goto iymeugimwgcywusq;
        iigucumgucicccac:
        kmayccieqkkiqicw:
        goto swusyoymaokumies;
        amcsamiamksyqmuq:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto egemeuggwgwuayoi;
        giuuqwcsockoiqem:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto smqoegcueykkkiiq;
        qcwaessgikigogay:
        $this->aasmeayouwmacaow(true);
        goto uegccyuaemgmocgu;
        uegccyuaemgmocgu:
        return true;
        goto iouecsmwqgaiycoq;
        egemeuggwgwuayoi:
        if (!(stripos($this->agent, "\x59\x61\x6e\x64\x65\170\104\151\x72\x65\143\164") !== false)) {
            goto cyckkcksiwwqasio;
        }
        goto qqusymyoygwwueco;
        iuoiiwaosgqoeask:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cmasgwmooaiccewo;
        }
        goto giuuqwcsockoiqem;
        smqoegcueykkkiiq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto wsqgykwqkgiwaksw;
        iouecsmwqgaiycoq:
        cmasgwmooaiccewo:
        goto qqyasyisimsuyiiw;
        qqyasyisimsuyiiw:
        cyckkcksiwwqasio:
        goto geqcuwsuqymcqiou;
        qqusymyoygwwueco:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\156\x64\x65\170\x44\x69\x72\145\143\x74"));
        goto iuoiiwaosgqoeask;
        wsqgykwqkgiwaksw:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto qcwaessgikigogay;
        geqcuwsuqymcqiou:
        return false;
        goto yeywuuiugmgeuygm;
        yeywuuiugmgeuygm:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto gswsuaquqikkycwi;
        iawccecmgeaocqmg:
        gmgemamkswqeskmo:
        goto heakaosaewwowmcu;
        eemgwkicuicwskms:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\156\144\x65\170\127\x65\x62\x6d\x61\163\x74\145\x72"));
        goto kyemcamscwoeeoiy;
        qomyesuacseysugi:
        return true;
        goto wsiqkesiecagcykw;
        kyemcamscwoeeoiy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ywiyqcgyoweomkqg;
        }
        goto ggawqqciikeiqiau;
        mucqymyysqeiaqwk:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto eeqgkcgywkwgmiyg;
        cumwowkcomuigeag:
        $this->aasmeayouwmacaow(true);
        goto qomyesuacseysugi;
        wsiqkesiecagcykw:
        ywiyqcgyoweomkqg:
        goto iawccecmgeaocqmg;
        ggawqqciikeiqiau:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mucqymyysqeiaqwk;
        eeqgkcgywkwgmiyg:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto cumwowkcomuigeag;
        heakaosaewwowmcu:
        return false;
        goto euyooyocyuucmmmc;
        gswsuaquqikkycwi:
        if (!(stripos($this->agent, "\131\x61\156\144\145\170\127\x65\x62\x6d\x61\163\164\x65\x72") !== false)) {
            goto gmgemamkswqeskmo;
        }
        goto eemgwkicuicwskms;
        euyooyocyuucmmmc:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto cyoymqqkgiumuegy;
        aekwmmmciucegyys:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto quaugcgaccqksmmk;
        quaugcgaccqksmmk:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto oyqaeioosuiwoacw;
        yksumiuqcoggugea:
        return false;
        goto aisgmewqismsouqm;
        wuqswaumkwuciiqi:
        return true;
        goto wmkoscqgkmsoasms;
        oyqaeioosuiwoacw:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto omeekeuouqiieacw;
        cecqqwuqeiccmmos:
        saaioyiceykemgas:
        goto yksumiuqcoggugea;
        aucqaemoukqogokc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iskwcciiywiaamos;
        }
        goto aekwmmmciucegyys;
        wmkoscqgkmsoasms:
        iskwcciiywiaamos:
        goto cecqqwuqeiccmmos;
        omeekeuouqiieacw:
        $this->aasmeayouwmacaow(true);
        goto wuqswaumkwuciiqi;
        cyoymqqkgiumuegy:
        if (!(stripos($this->agent, "\131\x61\156\x64\145\170\x46\141\166\x69\x63\157\x6e\x73") !== false)) {
            goto saaioyiceykemgas;
        }
        goto fkcemcakyseoskmc;
        fkcemcakyseoskmc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\x64\145\170\106\x61\166\151\x63\x6f\156\x73"));
        goto aucqaemoukqogokc;
        aisgmewqismsouqm:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto wsgcyguocqmgccks;
        isowmaawkwmkcgmo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto mywassaguwommoyg;
        }
        goto caumawwwskkoekcw;
        wsgcyguocqmgccks:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\170\x42\x6c\x6f\147\163") !== false)) {
            goto mgsyyameesskqgsk;
        }
        goto cwmwkkauqqusccgs;
        ggyweqemgcmwwwgu:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto oasoyuckmqumgwwy;
        oasoyuckmqumgwwy:
        $this->aasmeayouwmacaow(true);
        goto ucugysauicuskega;
        kaiekqyukykoqiwa:
        mywassaguwommoyg:
        goto eayemqoaewmasoos;
        gciueqsqsgcekwae:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ggyweqemgcmwwwgu;
        cwmwkkauqqusccgs:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x6e\144\145\170\x42\154\157\x67\163"));
        goto isowmaawkwmkcgmo;
        caumawwwskkoekcw:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gciueqsqsgcekwae;
        ucugysauicuskega:
        return true;
        goto kaiekqyukykoqiwa;
        wimcmomumakqcikc:
        return false;
        goto gccyyceaqackqsec;
        eayemqoaewmasoos:
        mgsyyameesskqgsk:
        goto wimcmomumakqcikc;
        gccyyceaqackqsec:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto qacccgcuwysswgqk;
        mwoaykewsqmiikum:
        gukkaysgawyusckc:
        goto iammckaiicmaeweq;
        syoagkqccoyegkac:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cuaueyackcccuamq;
        ucgecsiyweweymqw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\141\x6e\x64\x65\170\x4d\145\144\x69\x61"));
        goto ucwwsimgkkgymqwm;
        qacccgcuwysswgqk:
        if (!(stripos($this->agent, "\x59\141\156\144\145\170\x4d\145\x64\151\x61") !== false)) {
            goto gukkaysgawyusckc;
        }
        goto ucgecsiyweweymqw;
        iammckaiicmaeweq:
        return false;
        goto eiuwyaccguegyckc;
        gyswaoawqisgeiac:
        return true;
        goto aayyiwqgkqkkckeg;
        ucwwsimgkkgymqwm:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qquioqqwmiuemaaw;
        }
        goto syoagkqccoyegkac;
        oaaqgeqiwsykukeg:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto wyqswauigsseskum;
        aayyiwqgkqkkckeg:
        qquioqqwmiuemaaw:
        goto mwoaykewsqmiikum;
        cuaueyackcccuamq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto oaaqgeqiwsykukeg;
        wyqswauigsseskum:
        $this->aasmeayouwmacaow(true);
        goto gyswaoawqisgeiac;
        eiuwyaccguegyckc:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto ygagqkmcasesqcui;
        wmigsokoiegiocys:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mieyqmckqkqaoygo;
        eikeicmemcaswgaq:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\144\145\170\x56\151\x64\145\157"));
        goto wisaskaqkeaqaymk;
        gogqmaoyqeoscico:
        wkaeeqagowygkuya:
        goto kmawaeioomkgqkqe;
        kwkeisysqagyioig:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto mecmyqgsmiuesukw;
        ygagqkmcasesqcui:
        if (!(stripos($this->agent, "\131\141\x6e\144\145\x78\x56\x69\x64\145\x6f") !== false)) {
            goto wuasiiywuycmkusq;
        }
        goto eikeicmemcaswgaq;
        mieyqmckqkqaoygo:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto kwkeisysqagyioig;
        kmawaeioomkgqkqe:
        wuasiiywuycmkusq:
        goto ngkomagwskmkmcuc;
        ouaywweeyqecagmc:
        return true;
        goto gogqmaoyqeoscico;
        ngkomagwskmkmcuc:
        return false;
        goto kuimcqawqqqgcoqs;
        wisaskaqkeaqaymk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wkaeeqagowygkuya;
        }
        goto wmigsokoiegiocys;
        mecmyqgsmiuesukw:
        $this->aasmeayouwmacaow(true);
        goto ouaywweeyqecagmc;
        kuimcqawqqqgcoqs:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto yeyoqmmeeuqucmky;
        suaeioykcscoamsi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ukoqoieuoigccaoi;
        gggsgesuicesmqya:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto mksgaooiuiymkkac;
        yeyoqmmeeuqucmky:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\145\x78\111\x6d\141\147\145\163") !== false)) {
            goto wqcseegakwamkcca;
        }
        goto wmquwikmuiskcucm;
        cqmkeoyaqqoykcyu:
        return true;
        goto ueyiaawciiimcmia;
        ukoqoieuoigccaoi:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto gggsgesuicesmqya;
        ymmgwsqqoskmaags:
        if (!isset($yikciqwsimweauyg[1])) {
            goto osyoqauakmkoaigc;
        }
        goto suaeioykcscoamsi;
        ueyiaawciiimcmia:
        osyoqauakmkoaigc:
        goto yuueeqwwgggeycog;
        qccmiyoiqguwmqug:
        return false;
        goto kiqkwuaswsmkigok;
        mksgaooiuiymkkac:
        $this->aasmeayouwmacaow(true);
        goto cqmkeoyaqqoykcyu;
        wmquwikmuiskcucm:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\x61\156\x64\145\170\x49\155\141\x67\145\x73"));
        goto ymmgwsqqoskmaags;
        yuueeqwwgggeycog:
        wqcseegakwamkcca:
        goto qccmiyoiqguwmqug;
        kiqkwuaswsmkigok:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto wqwqukkyascugisy;
        egsiwgciqqkwecuy:
        return false;
        goto escsoaemgioqgqso;
        wqgwmgkmeiewmwsm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cugwcccamcyuksgk;
        sieeqakumiscuwmy:
        $this->aasmeayouwmacaow(true);
        goto yuosayyyyemookmi;
        okyykeecayqaccik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yieciwkqiqgceuya;
        }
        goto wqgwmgkmeiewmwsm;
        cugwcccamcyuksgk:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto yqswiyiomsgeayiw;
        gqogwsuwyiouywcy:
        yieciwkqiqgceuya:
        goto aouymgmkkcaaymky;
        wqwqukkyascugisy:
        if (!(stripos($this->agent, "\x6d\163\156\142\157\164") !== false)) {
            goto waauqgswsiesowse;
        }
        goto ecyoakcmqwaksmms;
        ecyoakcmqwaksmms:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\155\x73\156\x62\157\x74"));
        goto okyykeecayqaccik;
        aouymgmkkcaaymky:
        waauqgswsiesowse:
        goto egsiwgciqqkwecuy;
        yuosayyyyemookmi:
        return true;
        goto gqogwsuwyiouywcy;
        yqswiyiomsgeayiw:
        $this->name = self::BROWSER_MSNBOT;
        goto sieeqakumiscuwmy;
        escsoaemgioqgqso:
    }
    
    protected function qaigygakimuucuki()
    {
        goto ywwgsgiqkuwwuwas;
        ikqqmyoegaeocwqw:
        egaiuisgeekasiow:
        goto hiuqggmuisuaaksw;
        oqkyykockmuiaycc:
        $this->name = self::BROWSER_BINGBOT;
        goto uugykecieoomuygs;
        uugykecieoomuygs:
        $this->aasmeayouwmacaow(true);
        goto aygyqqwyyugyoakg;
        aygyqqwyyugyoakg:
        return true;
        goto egeecgiwycoqsgqm;
        ywwgsgiqkuwwuwas:
        if (!(stripos($this->agent, "\x62\x69\x6e\x67\142\x6f\x74") !== false)) {
            goto egaiuisgeekasiow;
        }
        goto ayikwkmouqocqoya;
        ymmyqwqggkuwimiw:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto oqkyykockmuiaycc;
        egeecgiwycoqsgqm:
        gumousymsmeugmsm:
        goto ikqqmyoegaeocwqw;
        hiuqggmuisuaaksw:
        return false;
        goto uiyscqcowgeaeoco;
        oemaagemmycueycs:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ymmyqwqggkuwimiw;
        wsuauiewqimocoes:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gumousymsmeugmsm;
        }
        goto oemaagemmycueycs;
        ayikwkmouqocqoya:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x62\151\x6e\x67\142\157\x74"));
        goto wsuauiewqimocoes;
        uiyscqcowgeaeoco:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto wwaoocgeiyswqwow;
        oeiiuoikyagkmyqa:
        return true;
        goto iamckkumoomyeoum;
        eewmcuekysqqkeey:
        
        $eaogoiscgwgmugsq = str_replace("\x57\x33\103\x5f\126\x61\x6c\151\x64\x61\x74\x6f\x72\x20", "\x57\x33\103\x5f\x56\141\154\151\144\x61\164\157\x72\57", $this->agent);
        goto gggamqmqusyimaky;
        mcuiomgoamywqgya:
        if (stripos($this->agent, "\127\63\x43\137\x56\141\x6c\x69\144\141\164\x6f\162") !== false) {
            goto wmuqesieiugiquks;
        }
        goto sioosmeyiqmscmkc;
        oscemsgoyimocqei:
        weygkwekqawoowyq:
        goto imiuwwuwwyqigmou;
        sioosmeyiqmscmkc:
        if (stripos($this->agent, "\127\63\x43\55\155\x6f\142\x69\x6c\145\x4f\113") !== false) {
            goto weygkwekqawoowyq;
        }
        goto iicgycsecmaeqqcg;
        imiuwwuwwyqigmou:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto iqgasessakaoieuw;
        sqcqqsocqymmgwcq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto segewkgiakaqsgoc;
        iqugwmioumykkagm:
        goto acsqgoigqaiqiwaw;
        goto fkuiuosooquwmkoi;
        wwaoocgeiyswqwow:
        if (stripos($this->agent, "\127\x33\x43\55\x63\150\x65\x63\x6b\154\151\x6e\153") !== false) {
            goto aoueegmsgkeokaoq;
        }
        goto mcuiomgoamywqgya;
        meqqkyuusamyauyc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gqmiumskekekmaks;
        }
        goto mqigmosuikyaaamk;
        yiiaqacikommoaoy:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\127\x33\x43\x2d\x63\x68\145\x63\x6b\x6c\x69\x6e\153"));
        goto icmmwweaumcckgam;
        weuwgyoweusiaweq:
        return true;
        goto ykoqgweokgwkcawk;
        segewkgiakaqsgoc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto oeiiuoikyagkmyqa;
        sykosugesqqqqyey:
        return true;
        goto okicguwqeyiuywos;
        aisaywmsiigsegso:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wssaokwkycsqqumw;
        okicguwqeyiuywos:
        acsqgoigqaiqiwaw:
        goto osewecweiaekeoou;
        wssaokwkycsqqumw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iuiusomcwkaiksyq;
        iicgycsecmaeqqcg:
        goto acsqgoigqaiqiwaw;
        goto uomswgeawseimkou;
        iamckkumoomyeoum:
        gqmiumskekekmaks:
        goto ucuiqegmmogyasmw;
        ucuiqegmmogyasmw:
        goto acsqgoigqaiqiwaw;
        goto oscemsgoyimocqei;
        mqigmosuikyaaamk:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto sqcqqsocqymmgwcq;
        iqgasessakaoieuw:
        $this->eywockmuswoykooc(true);
        goto sykosugesqqqqyey;
        gggamqmqusyimaky:
        $yikciqwsimweauyg = explode("\57", stristr($eaogoiscgwgmugsq, "\127\x33\103\x5f\x56\x61\x6c\151\x64\x61\x74\157\162"));
        goto meqqkyuusamyauyc;
        uomswgeawseimkou:
        aoueegmsgkeokaoq:
        goto yiiaqacikommoaoy;
        fkuiuosooquwmkoi:
        wmuqesieiugiquks:
        goto eewmcuekysqqkeey;
        osewecweiaekeoou:
        return false;
        goto oqkkssoawygysqmq;
        iuiusomcwkaiksyq:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto weuwgyoweusiaweq;
        icmmwweaumcckgam:
        if (!isset($yikciqwsimweauyg[1])) {
            goto soiguuywuqqisowg;
        }
        goto aisaywmsiigsegso;
        ykoqgweokgwkcawk:
        soiguuywuqqisowg:
        goto iqugwmioumykkagm;
        oqkkssoawygysqmq:
    }
    
    protected function cimegwusqouswgao()
    {
        goto oiksgywwsqweoeai;
        ckmosuuwagciuwmw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x53\154\x75\162\x70"));
        goto iuiyyuwauoowkgeg;
        myksiemsskucuyac:
        $this->eywockmuswoykooc(false);
        goto gygwagcmmmaioikw;
        oawogoiagossceii:
        return false;
        goto ouecqyewekugmwkm;
        mkimssyoqguuowky:
        yioasqegwkugoqag:
        goto aqcqeucsaaeuiwqa;
        iuiyyuwauoowkgeg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yioasqegwkugoqag;
        }
        goto ogeakuasmaemuwga;
        kwumsouwywsqkmci:
        $this->name = self::BROWSER_SLURP;
        goto qmckmkykmyucosyq;
        aqcqeucsaaeuiwqa:
        waqsamacggacoaye:
        goto oawogoiagossceii;
        wiawimwuykuugcwi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kwumsouwywsqkmci;
        oiksgywwsqweoeai:
        if (!(stripos($this->agent, "\163\154\x75\x72\160") !== false)) {
            goto waqsamacggacoaye;
        }
        goto ckmosuuwagciuwmw;
        qmckmkykmyucosyq:
        $this->aasmeayouwmacaow(true);
        goto myksiemsskucuyac;
        gygwagcmmmaioikw:
        return true;
        goto mkimssyoqguuowky;
        ogeakuasmaemuwga:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wiawimwuykuugcwi;
        ouecqyewekugmwkm:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto csecmagoocuukewm;
        sqikwaiakyissigo:
        return false;
        goto yeagcqwaoeskgqmg;
        owcekoqmukawoeao:
        goto aecsciyiseuamymy;
        goto ymgeisswqiucoaas;
        sosikmkcuygeukyo:
        qeimskmimouyssgu:
        goto kwgkaeyusoekmway;
        ymgeisswqiucoaas:
        guiqaqkuywsmqcoc:
        goto wucmiaeomamqgqes;
        kwgkaeyusoekmway:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto uckgesmigkiyqyck;
        gsuacqigwaigyaia:
        ecuoemaqoeosiase:
        goto ciymuigaugeiouic;
        asoiigkaqcguaioi:
        if (!isset($uuygmciickwewegw[1])) {
            goto ecuoemaqoeosiase;
        }
        goto wuismmmeeqkiowua;
        ggakkmokkykkqawi:
        if (stripos($this->agent, "\x20\x42\x72\141\166\x65\x20") !== false) {
            goto qeimskmimouyssgu;
        }
        goto owcekoqmukawoeao;
        gaccwqquykeauumg:
        aecsciyiseuamymy:
        goto sqikwaiakyissigo;
        iaiewssiomowoyas:
        return true;
        goto gsuacqigwaigyaia;
        csecmagoocuukewm:
        if (stripos($this->agent, "\x42\162\x61\x76\x65\57") !== false) {
            goto guiqaqkuywsmqcoc;
        }
        goto ggakkmokkykkqawi;
        gkgwqoquqekiayus:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto iaiewssiomowoyas;
        gikcoemsgecyasqe:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gkgwqoquqekiayus;
        uckgesmigkiyqyck:
        
        
        $this->aasasueowyemuyoc('');
        goto pwgwmqwuoqysukeo;
        pwgwmqwuoqysukeo:
        return true;
        goto gaccwqquykeauumg;
        wuismmmeeqkiowua:
        $quiguswioiaaywey = explode("\40", $uuygmciickwewegw[1]);
        goto gikcoemsgecyasqe;
        wucmiaeomamqgqes:
        $uuygmciickwewegw = explode("\57", stristr($this->agent, "\x42\162\x61\x76\145"));
        goto asoiigkaqcguaioi;
        ciymuigaugeiouic:
        goto aecsciyiseuamymy;
        goto sosikmkcuygeukyo;
        yeagcqwaoeskgqmg:
    }
    
    protected function makyeuicweuowumi()
    {
        goto wwckusqkukciicei;
        oyykmqismqsyaaus:
        $this->eywockmuswoykooc(true);
        goto sgwwscoqkcuoqqsg;
        oqymsqskimoyuyye:
        if (!(stripos($this->agent, "\127\x69\156\144\x6f\167\x73\x20\x50\x68\x6f\156\x65") !== false || stripos($this->agent, "\x41\156\x64\162\x6f\x69\144") !== false)) {
            goto ocsoakwgmmwsekyi;
        }
        goto oyykmqismqsyaaus;
        wwckusqkukciicei:
        if (!(stripos($this->agent, "\x45\x64\147\x65\x2f") !== false)) {
            goto qsqgkiyigokqcioe;
        }
        goto cmcisgcoaouauymu;
        yukycgouyuqkmaok:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto megqkiykgiamgmsk;
        cmcisgcoaouauymu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\105\144\x67\x65"));
        goto camscswqceqycmke;
        ccyiuskguauimqee:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto oqymsqskimoyuyye;
        megqkiykgiamgmsk:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ccyiuskguauimqee;
        camscswqceqycmke:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qmywsksagymugcou;
        }
        goto yukycgouyuqkmaok;
        sgwwscoqkcuoqqsg:
        ocsoakwgmmwsekyi:
        goto kigaqwsiuygysecu;
        kigaqwsiuygysecu:
        return true;
        goto qgagcuckouyuyuss;
        qmkkwkqieggiyamm:
        qsqgkiyigokqcioe:
        goto eamumkggcmyaosco;
        eamumkggcmyaosco:
        return false;
        goto gmiyusqaiqaaakkk;
        qgagcuckouyuyuss:
        qmywsksagymugcou:
        goto qmkkwkqieggiyamm;
        gmiyusqaiqaaakkk:
    }
    
    protected function cgequousmqakcios()
    {
        goto ycsqoemcioqgscik;
        qsaiiuqwimiqiwyc:
        $yikciqwsimweauyg = explode("\40", stristr(str_replace("\73", "\73\x20", $this->agent), "\x4d\x53\x4e"));
        goto wkgugqyackgiowas;
        mgsmmaqqkusaaqew:
        $this->agent = str_replace(["\x4d\x6f\172\x69\x6c\x6c\x61", "\107\x65\x63\x6b\x6f"], "\x4d\x53\111\105", $this->agent);
        goto kwemswkcueagmssu;
        usycoqawsmoaqewm:
        $this->aasasueowyemuyoc("\61\56\60");
        goto igesuquikuwmsywg;
        ckiggmwimwykqyee:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto usycoqawsmoaqewm;
        kqggyaomgmqyicmc:
        $quiguswioiaaywey = explode("\57", $this->agent);
        goto agasiekywmaokckg;
        sqicocysoqwcgasq:
        qymmimiisagiymuy:
        goto awiqeeiewssogaaq;
        ieysgookkakiiuoo:
        ycsuqaygaisskkeq:
        goto aykuikogcgweeoio;
        coeaoweyqagqsoqq:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto goowmysscaoakuma;
        qousyksekeougumo:
        uoyuiiauquiwgasu:
        goto micqaoiiquokaqmw;
        iuiickwiuccmyiey:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto yiomssmosemcckmc;
        ouqiiwuqeoegciso:
        wskkwyoiugucwwua:
        goto sckcaoikwggaoiqm;
        wkgugqyackgiowas:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ysamigeqeyqgiwcs;
        }
        goto goiegscqgcukimys;
        zkoqiugkkemmwqeq:
        if (stripos($this->agent, "\155\x73\x69\145") !== false && stripos($this->agent, "\x6f\x70\x65\162\x61") === false) {
            goto ycsuqaygaisskkeq;
        }
        goto soacqquaasiggock;
        syawcymwokyaqeck:
        qkmucouuqggkwssg:
        goto qskwqqamoqekaqum;
        uasakawygcqkquuy:
        return false;
        goto myymisiqiwiqymuu;
        iseeayqyeoawwmwc:
        if (stripos($this->agent, "\x6d\x73\160\151\145") !== false || stripos($this->agent, "\x70\x6f\x63\153\145\x74") !== false) {
            goto qkmucouuqggkwssg;
        }
        goto cyikciomyweygykm;
        igesuquikuwmsywg:
        $yikciqwsimweauyg = stristr($this->agent, "\57");
        goto iqkkuesiuysywyag;
        akmiwammkswkmyio:
        umimoqmwoeecysqi:
        goto eqiygsagygouqkyy;
        kwaiiaowwykksgcw:
        mwauqumigegcywiw:
        goto oesqmiaisaqseigm;
        qwwigmoeocgyqyuy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto oeeccicqsoiyqcig;
        aykuikogcgweeoio:
        
        if (!(stripos($this->agent, "\155\163\156\x62") !== false)) {
            goto sggyugwiuggaaqyo;
        }
        goto qsaiiuqwimiqiwyc;
        eoeoikgkiuewagwg:
        $this->aasasueowyemuyoc(preg_replace("\57\133\x5e\x30\x2d\x39\56\135\x2b\57", '', $sogksuscggsicmac[1]));
        goto mgsmmaqqkusaaqew;
        gcasowsewwisgqwc:
        goto ewasqwuscwkeuuyi;
        goto ieysgookkakiiuoo;
        sckcaoikwggaoiqm:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto aaumqogegyqosuiq;
        yygugwkyoeackami:
        $this->eywockmuswoykooc(true);
        goto kwaiiaowwykksgcw;
        kmyoqookuiyomeec:
        omeswwygqyeqyqmw:
        goto omggicgmwyakocik;
        wysmuiaeuqqaycig:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto qousyksekeougumo;
        swasyyuiyouasyqy:
        $this->aasasueowyemuyoc("\x31\56\x35");
        goto akmiwammkswkmyio;
        agasiekywmaokckg:
        if (!isset($quiguswioiaaywey[1])) {
            goto gyqcauemgkuwquua;
        }
        goto qwwigmoeocgyqyuy;
        kkumemicscqeqawi:
        ysamigeqeyqgiwcs:
        goto msccquimgomummck;
        sooawcagkoismuqa:
        if (!isset($sogksuscggsicmac[1])) {
            goto uecqmukyqqgyoegy;
        }
        goto eoeoikgkiuewagwg;
        ieuewgsuqywiuuki:
        kwyiuyoeysqeywmm:
        goto wysmuiaeuqqaycig;
        kekkyamkouwoiyyi:
        ewasqwuscwkeuuyi:
        goto uasakawygcqkquuy;
        oeeccicqsoiyqcig:
        gyqcauemgkuwquua:
        goto uksaceogcmuacumi;
        isucaqumoqgykqig:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto iuiickwiuccmyiey;
        micqaoiiquokaqmw:
        return true;
        goto wyagecywqcysyyae;
        awiqeeiewssogaaq:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto eismimkcoiokucom;
        gocgaeomskmyyuaq:
        owgoagmssqsysiyq:
        goto ckiggmwimwykqyee;
        msccquimgomummck:
        sggyugwiuggaaqyo:
        goto kmmsoqcgiyougqqy;
        occyqeeyumwaygik:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\73"], '', $yikciqwsimweauyg[1]));
        goto yaeowwmkcuqmesau;
        iqkkuesiuysywyag:
        if (!preg_match("\57\x33\x30\x38\x7c\64\x32\x35\x7c\64\62\x36\174\64\67\64\174\60\142\61\57\x69", $yikciqwsimweauyg)) {
            goto umimoqmwoeecysqi;
        }
        goto swasyyuiyouasyqy;
        ygqkqwkyoosgomug:
        if (!isset($yikciqwsimweauyg[1])) {
            goto omeswwygqyeqyqmw;
        }
        goto coeaoweyqagqsoqq;
        goiegscqgcukimys:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto occyqeeyumwaygik;
        ygwwwwcgiwmcakmi:
        if (!(stripos($this->agent, "\111\x45\x4d\157\142\x69\154\145") !== false)) {
            goto mwauqumigegcywiw;
        }
        goto uuiioegocmmcqgwq;
        soacqquaasiggock:
        if (stripos($this->agent, "\x74\162\x69\144\x65\156\164") !== false) {
            goto qymmimiisagiymuy;
        }
        goto iseeayqyeoawwmwc;
        uuiioegocmmcqgwq:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto yygugwkyoeackami;
        yueaaaoockqicmwq:
        goto ewasqwuscwkeuuyi;
        goto gocgaeomskmyyuaq;
        eismimkcoiokucom:
        $sogksuscggsicmac = explode("\x72\166\x3a", $this->agent);
        goto sooawcagkoismuqa;
        ameqasmessgyycqq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto muaiioeaoiqiogie;
        }
        goto isucaqumoqgykqig;
        cyikciomyweygykm:
        goto ewasqwuscwkeuuyi;
        goto ouqiiwuqeoegciso;
        umaimowkyaemisiq:
        return true;
        goto yueaaaoockqicmwq;
        oesqmiaisaqseigm:
        return true;
        goto kmyoqookuiyomeec;
        aaumqogegyqosuiq:
        $this->aasasueowyemuyoc("\61\61\56\60");
        goto umaimowkyaemisiq;
        ycsqoemcioqgscik:
        if (stripos($this->agent, "\x54\162\x69\x64\x65\x6e\164\57\x37\56\x30\73\40\x72\x76\x3a\x31\x31\x2e\x30") !== false) {
            goto wskkwyoiugucwwua;
        }
        goto usoiismiikooagme;
        usoiismiikooagme:
        if (stripos($this->agent, "\x6d\151\x63\162\x6f\x73\x6f\146\x74\40\151\156\164\x65\x72\156\145\164\x20\145\170\x70\154\x6f\162\145\162") !== false) {
            goto owgoagmssqsysiyq;
        }
        goto zkoqiugkkemmwqeq;
        wyagecywqcysyyae:
        muaiioeaoiqiogie:
        goto kekkyamkouwoiyyi;
        uksaceogcmuacumi:
        goto uoyuiiauquiwgasu;
        goto ieuewgsuqywiuuki;
        eqiygsagygouqkyy:
        return true;
        goto gcasowsewwisgqwc;
        yiomssmosemcckmc:
        $this->eywockmuswoykooc(true);
        goto uuamswicsoyuguug;
        goowmysscaoakuma:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\73"], '', $yikciqwsimweauyg[1]));
        goto ygwwwwcgiwmcakmi;
        yaeowwmkcuqmesau:
        return true;
        goto kkumemicscqeqawi;
        uuamswicsoyuguug:
        if (stripos($this->agent, "\x6d\163\x70\x69\x65") !== false) {
            goto kwyiuyoeysqeywmm;
        }
        goto kqggyaomgmqyicmc;
        kmmsoqcgiyougqqy:
        $yikciqwsimweauyg = explode("\40", stristr(str_replace("\73", "\73\40", $this->agent), "\155\163\151\145"));
        goto ygqkqwkyoosgomug;
        mayucqimkiskmcms:
        goto ewasqwuscwkeuuyi;
        goto syawcymwokyaqeck;
        omggicgmwyakocik:
        goto ewasqwuscwkeuuyi;
        goto sqicocysoqwcgasq;
        kwemswkcueagmssu:
        uecqmukyqqgyoegy:
        goto mayucqimkiskmcms;
        qskwqqamoqekaqum:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\155\163\160\151\145"));
        goto ameqasmessgyycqq;
        myymisiqiwiqymuu:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto isgqqmaauckagsao;
        mmowusaeqemsisiq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto wskewcieqoqiuoui;
        gmgwsqeqwquucyoo:
        $this->eywockmuswoykooc(true);
        goto csuemgeukskicmmi;
        ckgikcyggaegucyk:
        aqwaemcyooumguou:
        goto coyegiuygcqwmaqc;
        uggmmsuyiiyuaeic:
        amecoaswmoqigiku:
        goto cyaaugsakiugouae;
        quucsamwocuceyae:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto emoscekqieoummww;
        ukkkmakiisiqkacm:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\x6f\160\145\162\x61"));
        goto mukwaeyamkyacewo;
        yscyooysgqsyuayo:
        $this->name = self::BROWSER_OPERA_MINI;
        goto ssoogugiigiqooce;
        ieeieiuoeqquyaka:
        sackmgaomiwgeqca:
        goto qakmsceesmcwecmo;
        qwiwywqwmmciwiea:
        if (stripos($this->agent, "\x4f\120\x52") !== false) {
            goto smsuqgcummiyucsc;
        }
        goto oucqmskiygmmsmye;
        aiaaaesgesgwsuck:
        asgwqocgsuugguse:
        goto yscyooysgqsyuayo;
        coyegiuygcqwmaqc:
        $yikciqwsimweauyg = explode("\x2f", $cgkyugweawsewkuu);
        goto eukqocmusiasmewe;
        csoomgiiyysqmeku:
        if (preg_match("\x2f\134\57\x2f", $cgkyugweawsewkuu)) {
            goto fwqikeoyaewusiym;
        }
        goto ukkkmakiisiqkacm;
        cyucgakoiiemocie:
        eoueymmeawwwswwq:
        goto yeayeuiggqoigwag;
        scimuugawiiuemki:
        $quiguswioiaaywey = explode("\40", stristr($cgkyugweawsewkuu, "\x6f\160\145\162\141\x20\x6d\151\x6e\x69"));
        goto wmcauamwimsyiauk;
        uyeiymmkkiyccakm:
        if (preg_match("\57\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto aqwaemcyooumguou;
        }
        goto scimuugawiiuemki;
        swkkeqmaqugwiysy:
        if (preg_match("\57\x56\145\162\163\x69\157\x6e\134\x2f\x28\x31\x2a\x2e\x2a\x29\44\x2f", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto amecoaswmoqigiku;
        }
        goto csoomgiiyysqmeku;
        ccaqsekgkcqqayyg:
        return true;
        goto iegksyacuckwoyiw;
        ssoogugiigiqooce:
        $this->eywockmuswoykooc(true);
        goto mseowikguuikkiys;
        cemwkemiwicagmou:
        goto cuyagmoysmwoceks;
        goto uowyeayyimmqogge;
        eyuieiqqgyowoocu:
        if (!(stripos($this->agent, "\117\160\145\x72\x61\x20\115\x6f\x62\151") !== false)) {
            goto csguwgocosyisgyq;
        }
        goto gmgwsqeqwquucyoo;
        yeayeuiggqoigwag:
        cqcomacmwgougkai:
        goto iqwiyiisyasiwsiu;
        oucqmskiygmmsmye:
        goto iggqqqegoegigyii;
        goto ieeieiuoeqquyaka;
        mseowikguuikkiys:
        return true;
        goto ageemsqieiqyqwag;
        uccocwouuuisiage:
        iggqqqegoegigyii:
        goto uukmwmiaqigsqaug;
        ikuoukwawkkyaacy:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\x28", "\40", $cgkyugweawsewkuu));
        goto omcmaswaawciiaui;
        kwsuumgiqsskggqy:
        uqsmiiqigeisoyse:
        goto yiyksucyuaosekey;
        qakmsceesmcwecmo:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\x70\x65\162\x61\x20\x6d\x69\156\151");
        goto uyeiymmkkiyccakm;
        uqqaaeqoykgcakec:
        if (stripos($this->agent, "\157\160\x65\x72\141") !== false) {
            goto uiuyiuiocgycwaae;
        }
        goto qwiwywqwmmciwiea;
        gouyqmyakowooiyw:
        cuyagmoysmwoceks:
        goto eyuieiqqgyowoocu;
        usmucisyagswyysu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wawimucmukumkuca;
        gocmokqaeqkqcmma:
        goto cuyagmoysmwoceks;
        goto uggmmsuyiiyuaeic;
        isgqqmaauckagsao:
        if (stripos($this->agent, "\x6f\160\145\162\x61\40\155\x69\156\x69") !== false) {
            goto sackmgaomiwgeqca;
        }
        goto uqqaaeqoykgcakec;
        ycaooqesseeagoka:
        $this->name = self::BROWSER_OPERA;
        goto ccaqsekgkcqqayyg;
        ageemsqieiqyqwag:
        goto iggqqqegoegigyii;
        goto eiosgmsukekekyou;
        omusyecyksyowysk:
        $this->eywockmuswoykooc(true);
        goto kwsuumgiqsskggqy;
        csuemgeukskicmmi:
        csguwgocosyisgyq:
        goto ycaooqesseeagoka;
        iqwiyiisyasiwsiu:
        if (!(stripos($this->agent, "\x4d\x6f\x62\151\154\145") !== false)) {
            goto uqsmiiqigeisoyse;
        }
        goto omusyecyksyowysk;
        omcmaswaawciiaui:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eoueymmeawwwswwq;
        }
        goto quucsamwocuceyae;
        yiyksucyuaosekey:
        $this->name = self::BROWSER_OPERA;
        goto msywkyeikecaomgo;
        aekskqewqmeauaug:
        if (!preg_match("\x2f\134\57\x2f", $cgkyugweawsewkuu)) {
            goto cqcomacmwgougkai;
        }
        goto ikuoukwawkkyaacy;
        cyaaugsakiugouae:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto cemwkemiwicagmou;
        eukqocmusiasmewe:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eaicyuessygcyuqu;
        }
        goto usmucisyagswyysu;
        eiosgmsukekekyou:
        uiuyiuiocgycwaae:
        goto kywqmsqusiysywqe;
        emoscekqieoummww:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cyucgakoiiemocie;
        msywkyeikecaomgo:
        return true;
        goto uccocwouuuisiage;
        wkasucgiaeogugcw:
        $yikciqwsimweauyg = explode("\57", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto ocisosooggaaueii;
        oqyumeoumucciuao:
        kiykgaeecsuoegei:
        goto gouyqmyakowooiyw;
        ggaoikewqkecamgs:
        smsuqgcummiyucsc:
        goto qwgicaiskacusqka;
        iegksyacuckwoyiw:
        goto iggqqqegoegigyii;
        goto ggaoikewqkecamgs;
        mukwaeyamkyacewo:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto gocmokqaeqkqcmma;
        qwgicaiskacusqka:
        $cgkyugweawsewkuu = stristr($this->agent, "\117\120\x52");
        goto aekskqewqmeauaug;
        ocisosooggaaueii:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kiykgaeecsuoegei;
        }
        goto uuimoqmwywkkaygo;
        akmiwuwwkeokegkq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oqyumeoumucciuao;
        uukmwmiaqigsqaug:
        return false;
        goto myemqwquecqwakyq;
        uowyeayyimmqogge:
        fwqikeoyaewusiym:
        goto wkasucgiaeogugcw;
        kywqmsqusiysywqe:
        $cgkyugweawsewkuu = stristr($this->agent, "\x6f\160\x65\x72\x61");
        goto swkkeqmaqugwiysy;
        wawimucmukumkuca:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto sciiwomqgcamicqs;
        wmcauamwimsyiauk:
        if (!isset($quiguswioiaaywey[1])) {
            goto sikkakqouqeckesc;
        }
        goto mmowusaeqemsisiq;
        sciiwomqgcamicqs:
        eaicyuessygcyuqu:
        goto aiaaaesgesgwsuck;
        wskewcieqoqiuoui:
        sikkakqouqeckesc:
        goto ggiacqackmguiiki;
        ggiacqackmguiiki:
        goto asgwqocgsuugguse;
        goto ckgikcyggaegucyk;
        uuimoqmwywkkaygo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto akmiwuwwkeokegkq;
        myemqwquecqwakyq:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto qkmqkcwgskmyeoyq;
        qoigmymamwikqkce:
        mwcysigeamkwiwku:
        goto gsuqomaoosusiqew;
        syuakiekoaowmoyy:
        uyuugesysqaueywi:
        goto symsqqgwwimugwue;
        wikueqyuegggkqoi:
        ugmggeiwogwcgcqy:
        goto qoigmymamwikqkce;
        gsuqomaoosusiqew:
        return true;
        goto ymyqsgymeusoakyi;
        oymcieacieeqwses:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto cggwmqyuewwisqsu;
        awukkyueuqcaywks:
        goto ugmggeiwogwcgcqy;
        goto akgyaaawgcecyoqc;
        akgyaaawgcecyoqc:
        ksmacqoqogyoookk:
        goto ceskkigeaqcaasqs;
        gygkmqwkaiskgwws:
        $this->icigyueiiwsukmsu(true);
        goto awukkyueuqcaywks;
        ceskkigeaqcaasqs:
        $this->eywockmuswoykooc(true);
        goto wikueqyuegggkqoi;
        oikasesimicoysmu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kicmwgigiciiuqaw;
        symsqqgwwimugwue:
        return false;
        goto qymyaksieaiemaam;
        ymkqceigmmuokugy:
        if (stripos($this->agent, "\115\x6f\142\151\154\145") !== false) {
            goto ksmacqoqogyoookk;
        }
        goto gygkmqwkaiskgwws;
        kicmwgigiciiuqaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oymcieacieeqwses;
        ymyqsgymeusoakyi:
        ywukigwwwumwuicy:
        goto syuakiekoaowmoyy;
        somyyugyumgeukik:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ywukigwwwumwuicy;
        }
        goto oikasesimicoysmu;
        cggwmqyuewwisqsu:
        
        if (!(stripos($this->agent, "\101\x6e\x64\x72\157\x69\144") !== false)) {
            goto mwcysigeamkwiwku;
        }
        goto ymkqceigmmuokugy;
        qkmqkcwgskmyeoyq:
        if (!(stripos($this->agent, "\103\x68\x72\x6f\155\145") !== false)) {
            goto uyuugesysqaueywi;
        }
        goto gqaoecysyaaccyyy;
        gqaoecysyaaccyyy:
        $yikciqwsimweauyg = preg_split("\x2f\x5b\134\x2f\73\x5d\x2b\x2f", stristr($this->agent, "\x43\x68\x72\x6f\x6d\x65"));
        goto somyyugyumgeukik;
        qymyaksieaiemaam:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto acmqaeyciymmsgua;
        ewswyuykwuaigiyo:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x77\x65\142\x74\166"));
        goto owuqwmsqouswswau;
        acmqaeyciymmsgua:
        if (!(stripos($this->agent, "\167\x65\x62\164\166") !== false)) {
            goto kkaqamsuqkgkwowo;
        }
        goto ewswyuykwuaigiyo;
        skawosaecygmqmsq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iugcwummaqmgiqgm;
        iugcwummaqmgiqgm:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto cqmwuwoaqiumaogi;
        cqmwuwoaqiumaogi:
        return true;
        goto aecesusucigikyqs;
        owaomgiwykiiesqs:
        return false;
        goto wkeoacqqekmaqogk;
        owuqwmsqouswswau:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ygeweomowkiskgec;
        }
        goto iawosyeimcucqgky;
        aecesusucigikyqs:
        ygeweomowkiskgec:
        goto caomeykgioesgswg;
        iawosyeimcucqgky:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto skawosaecygmqmsq;
        caomeykgioesgswg:
        kkaqamsuqkgkwowo:
        goto owaomgiwykiiesqs;
        wkeoacqqekmaqogk:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto ueimcmmgwiommwwg;
        eqgyoucqmyyqqagc:
        return true;
        goto qomaksiaaooygwsg;
        asmgcmegmekauiqm:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4e\145\x74\x50\x6f\163\151\164\151\166\145"));
        goto quqkggiycuoeaysg;
        kgeeikakwgkukkke:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cyscaaaicmkkqies;
        wgmeusuigqsowace:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto eqgyoucqmyyqqagc;
        seekksssaiokokyq:
        return false;
        goto vkcgsyecgukweyki;
        sqkqqasyecqeysww:
        bkmiygiccoagsyck:
        goto seekksssaiokokyq;
        qomaksiaaooygwsg:
        iaewosqywiqiqmqs:
        goto sqkqqasyecqeysww;
        ueimcmmgwiommwwg:
        if (!(stripos($this->agent, "\x4e\x65\164\120\x6f\x73\151\x74\151\166\x65") !== false)) {
            goto bkmiygiccoagsyck;
        }
        goto asmgcmegmekauiqm;
        quqkggiycuoeaysg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iaewosqywiqiqmqs;
        }
        goto kgeeikakwgkukkke;
        cyscaaaicmkkqies:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\x3b"], '', $quiguswioiaaywey[0]));
        goto wgmeusuigqsowace;
        vkcgsyecgukweyki:
    }
    
    protected function usswyskeuiskccki()
    {
        goto aiugcqaaymaasikk;
        iiksoosqisyggaks:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto kkmwiocaqecosykg;
        mqieeoagcesmykuy:
        return true;
        goto asmgcueacgcuokak;
        ceguiykycywoocuu:
        return false;
        goto xwsiauqamwogkwmo;
        kqmsyeoyemocoiqs:
        if (!isset($quiguswioiaaywey[1])) {
            goto aiawyogcusykcgem;
        }
        goto iiksoosqisyggaks;
        siycmwciwoewsooi:
        ocegwkgcsegowucu:
        goto ceguiykycywoocuu;
        gosqawkmwoukawsa:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto kqmsyeoyemocoiqs;
        cmmgaceguouaicok:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\147\141\154\145\x6f\x6e"));
        goto gosqawkmwoukawsa;
        kkmwiocaqecosykg:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto mqieeoagcesmykuy;
        aiugcqaaymaasikk:
        if (!(stripos($this->agent, "\x67\141\x6c\145\x6f\156") !== false)) {
            goto ocegwkgcsegowucu;
        }
        goto cmmgaceguouaicok;
        asmgcueacgcuokak:
        aiawyogcusykcgem:
        goto siycmwciwoewsooi;
        xwsiauqamwogkwmo:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto mksgqgcoeeksaiqe;
        keqsgkcumkusgygg:
        return false;
        goto eqsqecmiugakueqm;
        yasusgwwwekossyy:
        csskywiguyamicyu:
        goto isygymaiseqgeiau;
        isygymaiseqgeiau:
        uceyoakcoqqgkmka:
        goto keqsgkcumkusgygg;
        imaukawsimqgmauc:
        if (!isset($quiguswioiaaywey[1])) {
            goto csskywiguyamicyu;
        }
        goto ogcasmoaumciscii;
        owkecwacqesgqcaq:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x4b\x6f\156\x71\x75\145\162\x6f\x72"));
        goto gggcyumymmmiuaeu;
        mksgqgcoeeksaiqe:
        if (!(stripos($this->agent, "\x4b\157\x6e\x71\165\145\x72\157\162") !== false)) {
            goto uceyoakcoqqgkmka;
        }
        goto owkecwacqesgqcaq;
        ogcasmoaumciscii:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ymykisoiiyyqeqim;
        ymykisoiiyyqeqim:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto mcqqawkmqiiyecey;
        mcqqawkmqiiyecey:
        return true;
        goto yasusgwwwekossyy;
        gggcyumymmmiuaeu:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto imaukawsimqgmauc;
        eqsqecmiugakueqm:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto ecmeeksmaqyumykg;
        eacseogmmqokmogu:
        return true;
        goto oswqmcgsewiscugq;
        ycmiqcakcweakeaa:
        return false;
        goto koakuemcskwaoesy;
        guukcysyaquuekek:
        cmwigsaskaamoema:
        goto ycmiqcakcweakeaa;
        ecmeeksmaqyumykg:
        if (!(stripos($this->agent, "\x69\x63\x61\x62") !== false)) {
            goto cmwigsaskaamoema;
        }
        goto iyoukgscwmcoweqa;
        yagoyoogqkomucci:
        if (!isset($quiguswioiaaywey[1])) {
            goto ymqcqiyawcogwgym;
        }
        goto kegmcwesswsaamum;
        kegmcwesswsaamum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto swuqimcsmiwqaaom;
        iyoukgscwmcoweqa:
        $quiguswioiaaywey = explode("\40", stristr(str_replace("\x2f", "\40", $this->agent), "\x69\x63\x61\x62"));
        goto yagoyoogqkomucci;
        oswqmcgsewiscugq:
        ymqcqiyawcogwgym:
        goto guukcysyaquuekek;
        swuqimcsmiwqaaom:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto eacseogmmqokmogu;
        koakuemcskwaoesy:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto ssewsumymwocqyyc;
        gsguoieaewagyogs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qskksaagcgukausc;
        ocesuggkygmwyoqu:
        return true;
        goto amwwumeqoscyamoc;
        qskksaagcgukausc:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto ocesuggkygmwyoqu;
        amwwumeqoscyamoc:
        cwyqqgwwmesmkiam:
        goto iimagwawmcgmaoga;
        iimagwawmcgmaoga:
        return false;
        goto aaqekekaoaqgkiio;
        qgoyesykieqauwqi:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6f\x6d\x6e\x69\167\x65\x62"));
        goto aesqewckgocaowoi;
        aesqewckgocaowoi:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto gsguoieaewagyogs;
        ssewsumymwocqyyc:
        if (!(stripos($this->agent, "\x6f\x6d\x6e\151\167\145\142") !== false)) {
            goto cwyqqgwwmesmkiam;
        }
        goto qgoyesykieqauwqi;
        aaqekekaoaqgkiio:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto sgyogmewgaymcogg;
        kuimgaokwkqogaqk:
        return false;
        goto iuumwocuuoyceaks;
        eiwccayegouiekwk:
        return true;
        goto acasskokyagwkumy;
        ksqsiosguewggcya:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto eiwccayegouiekwk;
        sgyogmewgaymcogg:
        if (!(stripos($this->agent, "\x50\x68\x6f\145\156\151\170") !== false)) {
            goto aomicoqgwkaiosso;
        }
        goto omagiuciweiemoik;
        osoyyysskuckoocc:
        aomicoqgwkaiosso:
        goto kuimgaokwkqogaqk;
        uemcayqyeweiosqw:
        if (!isset($quiguswioiaaywey[1])) {
            goto ogoiksimykeiuekg;
        }
        goto wusygegyegamyioq;
        omagiuciweiemoik:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\x50\150\157\145\156\151\x78"));
        goto uemcayqyeweiosqw;
        wusygegyegamyioq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto ksqsiosguewggcya;
        acasskokyagwkumy:
        ogoiksimykeiuekg:
        goto osoyyysskuckoocc;
        iuumwocuuoyceaks:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto ukeaeogwsoackkas;
        sqgomkiuekmaykyw:
        if (!isset($quiguswioiaaywey[1])) {
            goto oewqywyeaueuiyes;
        }
        goto ouseosmqaaykkaaw;
        kigsuwkmaacmwgsq:
        ssoogecumeaeekcs:
        goto qkymmwmmiemiauyg;
        qkymmwmmiemiauyg:
        return false;
        goto ykceeqicyiqgssye;
        ouseosmqaaykkaaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto mimmumuekmyyyaug;
        ukeaeogwsoackkas:
        if (!(stripos($this->agent, "\x46\151\162\145\x62\x69\162\144") !== false)) {
            goto ssoogecumeaeekcs;
        }
        goto auaaassweykwwsge;
        mimmumuekmyyyaug:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto awyuyuuiayqoekkc;
        awyuyuuiayqoekkc:
        return true;
        goto eoemqkmecwqsagce;
        eoemqkmecwqsagce:
        oewqywyeaueuiyes:
        goto kigsuwkmaacmwgsq;
        auaaassweykwwsge:
        $quiguswioiaaywey = explode("\57", stristr($this->agent, "\x46\x69\x72\145\142\x69\x72\x64"));
        goto sqgomkiuekmaykyw;
        ykceeqicyiqgssye:
    }
    
    protected function aweyeayscomouegw()
    {
        goto icmgwgoywmewyeii;
        ccokywiouwwmiwse:
        ycaskcwiywemgmay:
        goto ysmckuskoqmsyaca;
        aegamiyqqcwuqcyk:
        csgyceiomssoweek:
        goto ecsuogeauwascies;
        icmgwgoywmewyeii:
        if (stripos($this->agent, "\x46\151\162\145\146\157\170") !== false && preg_match("\57\x4e\141\x76\151\147\x61\164\x6f\x72\134\57\50\133\136\x20\135\52\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto csgyceiomssoweek;
        }
        goto mocwcekscogegcwa;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        yuaommqaoiseeice:
        return false;
        goto cciuyoceqiauqsic;
        qgeeiygkaaeqeaua:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto qkmiokuccayckwiy;
        mgqmswesaekqqwiu:
        qwmuiakauycoowya:
        goto yuaommqaoiseeice;
        ecsuogeauwascies:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aoasogsaqgewacum;
        kyisocwmmwaiwayk:
        return true;
        goto mogugiawmaoukmak;
        aoasogsaqgewacum:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto kyisocwmmwaiwayk;
        qkmiokuccayckwiy:
        return true;
        goto mgqmswesaekqqwiu;
        aqewaqaseausoewg:
        goto qwmuiakauycoowya;
        goto aegamiyqqcwuqcyk;
        mocwcekscogegcwa:
        if (stripos($this->agent, "\x46\151\x72\145\x66\157\170") === false && preg_match("\x2f\116\145\x74\x73\x63\141\160\145\66\77\x5c\x2f\x28\x5b\136\40\135\52\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto ycaskcwiywemgmay;
        }
        goto aqewaqaseausoewg;
        mogugiawmaoukmak:
        goto qwmuiakauycoowya;
        goto ccokywiouwwmiwse;
        cciuyoceqiauqsic:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto ikcmeaikkuekumye;
        weekemioaaygmggw:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto ycgokycmgosuamok;
        ikcmeaikkuekumye:
        if (!(stripos($this->agent, "\x4d\x6f\172\151\154\x6c\141") !== false && preg_match("\57\123\150\151\x72\145\164\x6f\153\x6f\x5c\x2f\50\133\136\40\135\x2a\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto oekaqqseuemcgeqe;
        }
        goto uuskeoeuumiigues;
        meamoqcwwsqiyoqc:
        return false;
        goto wsmwmwswqaoeaquq;
        ycgokycmgosuamok:
        return true;
        goto mqweugciiyyukymg;
        uuskeoeuumiigues:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto weekemioaaygmggw;
        mqweugciiyyukymg:
        oekaqqseuemcgeqe:
        goto meamoqcwwsqiyoqc;
        wsmwmwswqaoeaquq:
    }
    
    protected function noeygigqkeciickm()
    {
        goto gmcieuucmgkcoyii;
        waqwkysqcskykuum:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto yuqemymykuasskoy;
        yuqemymykuasskoy:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto mmeumymqusiaiugs;
        gmcieuucmgkcoyii:
        if (!(stripos($this->agent, "\x4d\x6f\x7a\151\x6c\154\141") !== false && preg_match("\57\x49\x63\145\103\x61\164\x5c\57\x28\133\136\x20\135\52\51\57\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto aeecqkykiqyuqmyg;
        }
        goto waqwkysqcskykuum;
        mmeumymqusiaiugs:
        return true;
        goto qcqqieuakcakkwem;
        qcqqieuakcakkwem:
        aeecqkykiqyuqmyg:
        goto kscocsoaygkcaocq;
        kscocsoaygkcaocq:
        return false;
        goto akqgwckwiiugwiay;
        akqgwckwiiugwiay:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto qmssaeiomssoycas;
        myycwmecoyeekeus:
        swusuwwawauqqqae:
        goto aaymugikaeaqsaos;
        uqsgmacmweuuwqgy:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto qogciqauggmmigia;
        wamigcygcsucigmi:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto qmcmakumyemsuoaa;
        qmcmakumyemsuoaa:
        if (stripos($this->agent, "\123\x65\x72\x69\145\x73\66\x30") !== false || strpos($this->agent, "\x53\66\x30") !== false) {
            goto qgocscwqkuyemmcw;
        }
        goto kgwewosygiuoiigk;
        semoayicskccgemw:
        $this->eywockmuswoykooc(true);
        goto ouigaoeeokmqaqoe;
        qogciqauggmmigia:
        oiuiwkywiekacygs:
        goto semoayicskccgemw;
        aaymugikaeaqsaos:
        return false;
        goto ewoywsgmimyigwai;
        mqqqqeiimsgyacaw:
        goto oiuiwkywiekacygs;
        goto iaumckssomaweakk;
        kgwewosygiuoiigk:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto mqqqqeiimsgyacaw;
        ouigaoeeokmqaqoe:
        return true;
        goto myycwmecoyeekeus;
        iaumckssomaweakk:
        qgocscwqkuyemmcw:
        goto uqsgmacmweuuwqgy;
        qmssaeiomssoycas:
        if (!preg_match("\57\x4e\x6f\153\x69\x61\50\x5b\x5e\x5c\x2f\135\x2b\x29\134\x2f\x28\133\x5e\x20\123\x50\x5d\x2b\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto swusuwwawauqqqae;
        }
        goto wamigcygcsucigmi;
        ewoywsgmimyigwai:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto koiuecgmeyuiwqkk;
        giiusoakskiciase:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto wkeeueuiysyiqaoq;
        qegwssscaomyoekg:
        uioaeuugwsakiykw:
        goto yysucuowuoiskkui;
        yseakuykcykcomwg:
        if (preg_match("\x2f\120\141\154\145\x6d\x6f\x6f\x6e\x28\x5b\x30\x2d\x39\141\x2d\172\x41\x2d\132\x5c\x2e\135\x2b\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto euoqiuygwwssoqou;
        }
        goto uiskkgkcyssegigy;
        gsiigogemgmesycs:
        goto smyugaykeesyuakw;
        goto oqqooygakaagaiqw;
        wcosggqmokuwgomy:
        goto smyugaykeesyuakw;
        goto koomcmawyuomqmii;
        qaqckwcumcykqcay:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto giiusoakskiciase;
        oakyyiqquqsccuks:
        euoqiuygwwssoqou:
        goto cwoaoecuqyiccwcw;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc('');
        goto osioeeokiykiemau;
        koomcmawyuomqmii:
        yseikqceqguugaee:
        goto smeqeomcqisgssau;
        wqmeugomsqagioak:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto iwmsiaqgccqqkgcc;
        cwoaoecuqyiccwcw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wqmeugomsqagioak;
        iwmsiaqgccqqkgcc:
        return true;
        goto wcosggqmokuwgomy;
        mkyoiqgumggcsakq:
        goto smyugaykeesyuakw;
        goto oakyyiqquqsccuks;
        ywimuqyysmaggeum:
        return true;
        goto iaksmguwicewykey;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto ywimuqyysmaggeum;
        oqqooygakaagaiqw:
        uqemmmykkceucwum:
        goto qaqckwcumcykqcay;
        koiuecgmeyuiwqkk:
        if (!(stripos($this->agent, "\163\141\146\141\x72\x69") === false)) {
            goto uioaeuugwsakiykw;
        }
        goto rkaswcmccyqqioqs;
        rkaswcmccyqqioqs:
        if (preg_match("\x2f\x50\x61\154\x65\x6d\157\x6f\x6e\x5b\x5c\x2f\40\134\x28\135\50\133\x5e\x20\x3b\x5c\x29\x5d\x2b\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto uqemmmykkceucwum;
        }
        goto yseakuykcykcomwg;
        wkeeueuiysyiqaoq:
        return true;
        goto mkyoiqgumggcsakq;
        iaksmguwicewykey:
        smyugaykeesyuakw:
        goto qegwssscaomyoekg;
        yysucuowuoiskkui:
        return false;
        goto wguwcgascccyeasu;
        uiskkgkcyssegigy:
        if (preg_match("\x2f\120\x61\x6c\x65\x6d\x6f\157\156\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto yseikqceqguugaee;
        }
        goto gsiigogemgmesycs;
        wguwcgascccyeasu:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto iksugmewgigsiaec;
        miwaaaueiacyqequ:
        imimwegqkykucuia:
        goto baqgcseewusocmom;
        seyoowocwsqsekqi:
        $this->eywockmuswoykooc(true);
        goto yoqwqkuekiauqsuc;
        baqgcseewusocmom:
        return false;
        goto akkuysmcasqukkug;
        ywgwuqyisimkacqe:
        aomoesqmwqcyueoa:
        goto iioueceaesegmgyi;
        wwamkekgkkiogiiu:
        return true;
        goto miwaaaueiacyqequ;
        ewqooaykuauegwio:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto aomoesqmwqcyueoa;
        }
        goto jimwweuekesuemiy;
        uwcawmmgcaecgyqm:
        yggwmccmmiemueou:
        goto seyoowocwsqsekqi;
        wousqisikkiooewi:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto wwamkekgkkiogiiu;
        gouiskmmqywoscgm:
        goto cqouacqmcegmykuu;
        goto uwcawmmgcaecgyqm;
        yoqwqkuekiauqsuc:
        cqouacqmcegmykuu:
        goto wousqisikkiooewi;
        jimwweuekesuemiy:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ywgwuqyisimkacqe;
        iioueceaesegmgyi:
        if (stripos($this->agent, "\115\x6f\x62\151\154\145") !== false) {
            goto yggwmccmmiemueou;
        }
        goto omygyywamgusigko;
        iksugmewgigsiaec:
        if (!preg_match("\57\x55\103\40\x3f\x42\x72\x6f\x77\163\145\x72\x5c\x2f\77\x28\133\134\x64\134\56\x5d\53\51\57", $this->agent, $meyiiwcswqmuggyg)) {
            goto imimwegqkykucuia;
        }
        goto ewqooaykuauegwio;
        omygyywamgusigko:
        $this->icigyueiiwsukmsu(true);
        goto gouiskmmqywoscgm;
        akkuysmcasqukkug:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto escuksewiugekayq;
        qwwscygkwwsiocok:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wggeuckgywqucase;
        guwmgkcgaoysewyw:
        sqsgeccoawoeukws:
        goto ciimuiiegyeaggya;
        qyogimcocyqgyyee:
        goto yqyyssciomuwwisa;
        goto aksacseyuwyiseay;
        aqcucyeikgmemsoq:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wgsqeuaooemcuqqu;
        sgaqioqcecwgyikg:
        $this->aasasueowyemuyoc('');
        goto usaooeqiaewcmyog;
        iammommmgkimyyaa:
        amcioyyyuiigekuo:
        goto cwycmkkoscmgcecg;
        wwqoywoqcyikouca:
        return true;
        goto qyogimcocyqgyyee;
        aksacseyuwyiseay:
        coyskeyoikeaqoek:
        goto sgaqioqcecwgyikg;
        aoosuewasqmmyqoi:
        goto qagasowcequukwoc;
        goto kwuakeywaocokwig;
        uaigiceqkuiguogo:
        goto mmomogyaswcsgwwy;
        goto gseqciagemceawam;
        gqaiguosioisccwm:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qwwscygkwwsiocok;
        ygoomqwcsggeiuge:
        if (preg_match("\x2f\106\x69\x72\x65\x66\x6f\170\x28\133\60\55\71\141\x2d\172\x41\x2d\x5a\134\x2e\x5d\53\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto sgwiageicumuqwke;
        }
        goto qkqwgsoymmqsqeim;
        ikiegwiqykqwuykk:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qmycieyiysuesagy;
        kuegskyiyugiuosa:
        yqyyssciomuwwisa:
        goto uaigiceqkuiguogo;
        wowiaueqaaqckwqq:
        $this->eywockmuswoykooc(true);
        goto yewmigswwuewyqki;
        kiqiskyesywkwkos:
        kmwseockoawqkoao:
        goto ksogiaquuskeygaq;
        wgcmsygycukiqmui:
        if (preg_match("\x2f\x46\170\151\x4f\123\x5b\x5c\57\x20\x5c\x28\135\x28\133\x5e\40\x3b\x5c\x29\x5d\x2b\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto wwmqgecmsimuecam;
        }
        goto kaycawgquiieeaiw;
        qkqwgsoymmqsqeim:
        if (preg_match("\57\x46\151\162\x65\x66\x6f\x78\44\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto coyskeyoikeaqoek;
        }
        goto amksqwmicsmyocyw;
        kiocmmsiuwcuemyg:
        mmomogyaswcsgwwy:
        goto cguuomiqwuicsgwa;
        seggycoceaokwcsa:
        if (stripos($this->agent, "\x4d\x6f\142\x69\154\145") !== false || stripos($this->agent, "\x54\141\142\154\x65\164") !== false) {
            goto gaqigeacswyyikkk;
        }
        goto iqmgswgoooqkkigo;
        yewmigswwuewyqki:
        qagasowcequukwoc:
        goto guwmgkcgaoysewyw;
        ngeuswkcwioygkku:
        qwyameqoseiywwus:
        goto oymsgiwgeiqguuyy;
        ksogiaquuskeygaq:
        usmieesmayeskkmk:
        goto aygkuykcicgceciq;
        wggeuckgywqucase:
        
        if (!(stripos($this->agent, "\101\x6e\x64\x72\x6f\151\x64") !== false || stripos($this->agent, "\151\x50\150\157\156\x65") !== false)) {
            goto sqsgeccoawoeukws;
        }
        goto seggycoceaokwcsa;
        cguuomiqwuicsgwa:
        return false;
        goto yqggmewmakemgkui;
        ciimuiiegyeaggya:
        return true;
        goto gokkyeisqkoccqis;
        iqmgswgoooqkkigo:
        $this->icigyueiiwsukmsu(true);
        goto aoosuewasqmmyqoi;
        wcaiuquuswsqacgg:
        cskgiyqesqqawuwo:
        goto gqaiguosioisccwm;
        gokkyeisqkoccqis:
        goto yqyyssciomuwwisa;
        goto ymmqwacaoayoyiei;
        ymmqwacaoayoyiei:
        sgwiageicumuqwke:
        goto aqcucyeikgmemsoq;
        agiiusmyqqkgqymk:
        goto kmwseockoawqkoao;
        goto iammommmgkimyyaa;
        kaycawgquiieeaiw:
        goto mmomogyaswcsgwwy;
        goto ngeuswkcwioygkku;
        wgiwseywikgwumwe:
        
        if (!(stripos($this->agent, "\101\156\x64\162\x6f\x69\x64") !== false || stripos($this->agent, "\151\120\150\x6f\x6e\145") !== false)) {
            goto usmieesmayeskkmk;
        }
        goto rkoyiagmcaycmwmg;
        oymsgiwgeiqguuyy:
        if (preg_match("\x2f\106\x69\162\x65\146\157\170\x5b\134\57\40\x5c\x28\135\x28\x5b\x5e\40\73\x5c\51\135\x2b\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto cskgiyqesqqawuwo;
        }
        goto ygoomqwcsggeiuge;
        kwuakeywaocokwig:
        gaqigeacswyyikkk:
        goto wowiaueqaaqckwqq;
        cwycmkkoscmgcecg:
        $this->eywockmuswoykooc(true);
        goto kiqiskyesywkwkos;
        rkoyiagmcaycmwmg:
        if (stripos($this->agent, "\x4d\157\x62\x69\x6c\x65") !== false || stripos($this->agent, "\124\x61\x62\x6c\145\164") !== false) {
            goto amcioyyyuiigekuo;
        }
        goto egqqigmomgaaamqc;
        aygkuykcicgceciq:
        return true;
        goto kiocmmsiuwcuemyg;
        amksqwmicsmyocyw:
        goto yqyyssciomuwwisa;
        goto wcaiuquuswsqacgg;
        escuksewiugekayq:
        if (stripos($this->agent, "\163\141\146\x61\x72\151") === false) {
            goto qwyameqoseiywwus;
        }
        goto wgcmsygycukiqmui;
        wgsqeuaooemcuqqu:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wwqoywoqcyikouca;
        gseqciagemceawam:
        wwmqgecmsimuecam:
        goto ikiegwiqykqwuykk;
        kmagwqsioegswiqk:
        return true;
        goto kuegskyiyugiuosa;
        usaooeqiaewcmyog:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto kmagwqsioegswiqk;
        egqqigmomgaaamqc:
        $this->icigyueiiwsukmsu(true);
        goto agiiusmyqqkgqymk;
        qmycieyiysuesagy:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wgiwseywikgwumwe;
        yqggmewmakemgkui:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto igsmwamoyswayqiy;
        qqaeaoygygacuuos:
        return true;
        goto wasmuqumoqqcmgys;
        mgqockcuascmkosg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qiocyqceaiyiakii;
        mokuaeasioyuisqs:
        eowkmiqqmqyeayci:
        goto umacsiiqmwygcycu;
        igsmwamoyswayqiy:
        if (!(stripos($this->agent, "\111\143\x65\x77\x65\141\163\145\x6c") !== false)) {
            goto eowkmiqqmqyeayci;
        }
        goto gyomccegicuoyguk;
        wasmuqumoqqcmgys:
        qoguisoimaueiaoo:
        goto mokuaeasioyuisqs;
        qiocyqceaiyiakii:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto qqaeaoygygacuuos;
        coosgwiiekamiyug:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mgqockcuascmkosg;
        mquksyyawiwsakwy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qoguisoimaueiaoo;
        }
        goto coosgwiiekamiyug;
        umacsiiqmwygcycu:
        return false;
        goto agsoqikgikksqkom;
        gyomccegicuoyguk:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\111\143\145\167\x65\141\x73\145\154"));
        goto mquksyyawiwsakwy;
        agsoqikgikksqkom:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto qscgsguyqggkagoe;
        uciuogooymiyqyao:
        return false;
        goto msmouyoaqcwsasuw;
        ameeyqiguwmykwai:
        goto iscqcsqyqkmkgkag;
        goto eswswyigkwqaaasy;
        kwkcmwgyiwyacywi:
        uogoykaeoysgmism:
        goto siyeyakoauowwose;
        siyeyakoauowwose:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\x76\72"));
        goto eaawsaueyyoiqoao;
        uieyawsyauemyqgy:
        iscqcsqyqkmkgkag:
        goto uciuogooymiyqyao;
        eoeoqacqgmumwcuk:
        return true;
        goto wmssuwyesuyeiows;
        eaawsaueyyoiqoao:
        $this->aasasueowyemuyoc(str_replace("\x72\x76\x3a", '', $quiguswioiaaywey[0]));
        goto eyimkecocwsicyge;
        usaokwsyegousimg:
        preg_match("\x2f\x72\166\x3a\133\x30\55\x39\x5d\56\x5b\60\55\x39\x5d\x5b\141\55\x62\x5d\77\x2f\x69", $this->agent, $quiguswioiaaywey);
        goto ckgoiwueekyamwcu;
        wmssuwyesuyeiows:
        goto iscqcsqyqkmkgkag;
        goto kwkcmwgyiwyacywi;
        eyimkecocwsicyge:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto ooswoacocwcgoagc;
        yaowkqscayqikmck:
        return true;
        goto uieyawsyauemyqgy;
        mcukkaquiosmsguy:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\162\166\x3a"));
        goto usaokwsyegousimg;
        kyqewaqymicucwuc:
        goto iscqcsqyqkmkgkag;
        goto gwigmqemwuqewiae;
        iyqmmwymomwqiqaw:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto yaowkqscayqikmck;
        gwigmqemwuqewiae:
        eoewsuaewaeueaks:
        goto kkweuygueeaqsksg;
        eswswyigkwqaaasy:
        skkmiiyukuqmiimc:
        goto mcukkaquiosmsguy;
        ooswoacocwcgoagc:
        return true;
        goto kyqewaqymicucwuc;
        gmeiquwcawwmowwm:
        if (stripos($this->agent, "\155\157\x7a\151\154\154\x61") !== false && preg_match("\57\155\x6f\172\151\x6c\x6c\141\x5c\57\x28\133\136\x20\135\52\51\x2f\151", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\156\145\164\163\x63\141\160\145") === false) {
            goto eoewsuaewaeueaks;
        }
        goto ameeyqiguwmykwai;
        kkweuygueeaqsksg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iyqmmwymomwqiqaw;
        awceesgmgquwakuu:
        if (stripos($this->agent, "\x6d\157\172\151\154\x6c\141") !== false && preg_match("\57\162\x76\x3a\133\60\x2d\71\135\134\x2e\133\x30\x2d\x39\135\57\x69", $this->agent) && stripos($this->agent, "\x6e\145\164\163\x63\141\160\x65") === false) {
            goto uogoykaeoysgmism;
        }
        goto gmeiquwcawwmowwm;
        ckgoiwueekyamwcu:
        $this->aasasueowyemuyoc(str_replace("\162\166\x3a", '', $quiguswioiaaywey[0]));
        goto uusaeowyacskgumg;
        uusaeowyacskgumg:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto eoeoqacqgmumwcuk;
        qscgsguyqggkagoe:
        if (stripos($this->agent, "\155\x6f\x7a\x69\154\x6c\141") !== false && preg_match("\x2f\162\166\72\133\x30\x2d\x39\135\x2e\x5b\60\55\71\x5d\x5b\141\55\142\135\x3f\x2f\151", $this->agent) && stripos($this->agent, "\156\x65\x74\x73\143\141\160\x65") === false) {
            goto skkmiiyukuqmiimc;
        }
        goto awceesgmgquwakuu;
        msmouyoaqcwsasuw:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto oayqqymykwwugkwe;
        wwwqiimkicqiuwui:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x4c\171\x6e\x78"));
        goto qewckkocqykmeywg;
        cmowiicqgqiakqem:
        ymqwkscegcogqqwy:
        goto qsqskaukgysseokg;
        qewckkocqykmeywg:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto ugsumemcqucesssg;
        cqayoeygyqqamquk:
        return true;
        goto cmowiicqgqiakqem;
        oayqqymykwwugkwe:
        if (!(stripos($this->agent, "\154\171\x6e\170") !== false)) {
            goto ymqwkscegcogqqwy;
        }
        goto wwwqiimkicqiuwui;
        ugsumemcqucesssg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gyoiekqiqwwquomc;
        gyoiekqiqwwquomc:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto cqayoeygyqqamquk;
        qsqskaukgysseokg:
        return false;
        goto seswyksiukyeqkqc;
        seswyksiukyeqkqc:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto sgwucycigkyieoea;
        mksgcawyikcceiqa:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto gkaykeoacgugeumu;
        yksmaaesmwecwoak:
        return false;
        goto sgsaqgwgakicwckk;
        ukiiyimwmgiqisca:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto ocoaeuqqauqewyig;
        qsoukmmoqeuqsoee:
        if (!isset($yikciqwsimweauyg[1])) {
            goto iieeiugaeeqyaqok;
        }
        goto ukiiyimwmgiqisca;
        wwyeoccuqgcgcuuc:
        eiiemassiceeqmeq:
        goto yksmaaesmwecwoak;
        ksswuscweggkeiko:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x41\155\x61\x79\141"));
        goto qsoukmmoqeuqsoee;
        ocoaeuqqauqewyig:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mksgcawyikcceiqa;
        sgwucycigkyieoea:
        if (!(stripos($this->agent, "\141\x6d\141\x79\x61") !== false)) {
            goto eiiemassiceeqmeq;
        }
        goto ksswuscweggkeiko;
        gkaykeoacgugeumu:
        return true;
        goto uuqskowyckcgagkc;
        uuqskowyckcgagkc:
        iieeiugaeeqyaqok:
        goto wwyeoccuqgcgcuuc;
        sgsaqgwgakicwckk:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto iaiekaygcqmocmee;
        kewymgqeemiuewca:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto scooeumumiwmgowm;
        yieeukyoaeioqock:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto jawaweyeoaoueooa;
        wayscwykqcwqgqyi:
        wekysuykykiweqms:
        goto ccsysoygswagacce;
        qkgkkwcagegkwkwi:
        return false;
        goto oioqgywuoiaisyuu;
        scooeumumiwmgowm:
        goto wekysuykykiweqms;
        goto eyowigugugmmkeiw;
        kgecmyesgkacyyqm:
        return true;
        goto kycikakmkwkieqwk;
        ggwywcekieoyeuya:
        if (isset($yikciqwsimweauyg[1])) {
            goto eiqmqaiyewsgyois;
        }
        goto kewymgqeemiuewca;
        jawaweyeoaoueooa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wayscwykqcwqgqyi;
        kycikakmkwkieqwk:
        kacseggomkeowiqm:
        goto qkgkkwcagegkwkwi;
        wguukissuqyuqeku:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\145\162\x73\x69\157\156"));
        goto ggwywcekieoyeuya;
        eyowigugugmmkeiw:
        eiqmqaiyewsgyois:
        goto yieeukyoaeioqock;
        iaiekaygcqmocmee:
        if (!(stripos($this->agent, "\123\x61\x66\x61\162\x69") !== false && stripos($this->agent, "\x69\x50\x68\157\x6e\145") === false && stripos($this->agent, "\x69\x50\157\144") === false)) {
            goto kacseggomkeowiqm;
        }
        goto wguukissuqyuqeku;
        ccsysoygswagacce:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto kgecmyesgkacyyqm;
        oioqgywuoiaisyuu:
    }
    protected function yswggmyigakcackc()
    {
        goto yiamqaqsueaiqwuq;
        moyywqqiasmyoscc:
        essqemwiweimukwe:
        goto aiyqwwuiayikques;
        aiyqwwuiayikques:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto swgqwkyuwoqeyeyu;
        cwcuamqicskkmuyg:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qugekewwywkuiqyk;
        mceeomsqguaacseg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x53\x61\x6d\x73\x75\x6e\147\102\x72\x6f\x77\x73\x65\x72"));
        goto mkumickumqmmkiqc;
        iieymwaigukwymsc:
        return false;
        goto mcqygaykwaaseack;
        swgqwkyuwoqeyeyu:
        return true;
        goto ggqwsgmqqyaicosm;
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
        gsyquwaygesygkiq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto keyciqmuisymkgcw;
        ggqwsgmqqyaicosm:
        uuqaakyqgqwiiwom:
        goto iieymwaigukwymsc;
        keyciqmuisymkgcw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto moyywqqiasmyoscc;
        yiamqaqsueaiqwuq:
        if (!(stripos($this->agent, "\123\x61\155\x73\165\x6e\x67\102\162\157\x77\163\145\162") !== false)) {
            goto uuqaakyqgqwiiwom;
        }
        goto mceeomsqguaacseg;
        mcqygaykwaaseack:
    }
    protected function uiwkymoksesuumwe()
    {
        goto kcckgokmwuywmaiw;
        kcckgokmwuywmaiw:
        if (!(stripos($this->agent, "\123\151\x6c\x6b") !== false)) {
            goto ascewisaoqauaymk;
        }
        goto iwoquisgaegiocss;
        oakguomioocmeiia:
        aukkqqimoumiiccy:
        goto yuyccgsguyaaygmu;
        eiissuweooqsaauy:
        raigmgqaksaqoosc:
        goto kakgceiyakaueuww;
        wqswcaeeyeaqieom:
        goto raigmgqaksaqoosc;
        goto oakguomioocmeiia;
        uqieceoogswuggos:
        return true;
        goto mmuomyiooicyqscg;
        iwoquisgaegiocss:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\x69\154\153"));
        goto yccweyyksqycwuqi;
        yuyccgsguyaaygmu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto smagqkegqiooysya;
        mmuomyiooicyqscg:
        ascewisaoqauaymk:
        goto yegcwkkemkycyuua;
        smagqkegqiooysya:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eiissuweooqsaauy;
        yegcwkkemkycyuua:
        return false;
        goto wuoaeksukwwaycoi;
        kakgceiyakaueuww:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto uqieceoogswuggos;
        qoamoegiiwismakk:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wqswcaeeyeaqieom;
        yccweyyksqycwuqi:
        if (isset($yikciqwsimweauyg[1])) {
            goto aukkqqimoumiiccy;
        }
        goto qoamoegiiwismakk;
        wuoaeksukwwaycoi:
    }
    protected function cgqcukygysieeqko()
    {
        goto emaeckumgkmgcaew;
        ysoiwegyoqymuuek:
        eusmcuqiciwcooss:
        goto cucsooyoayssmcas;
        wacgcmsgismsomma:
        dwyqyusgqwqwomqk:
        goto ckguemuwukmeycag;
        qyskykugeiqkauce:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto cguckckouuwacmow;
        akqsaiecouuqacks:
        goto gamusuoqieekieka;
        goto ysoiwegyoqymuuek;
        iiwmmqqaqckwwiqe:
        if (isset($yikciqwsimweauyg[1])) {
            goto eusmcuqiciwcooss;
        }
        goto oqqscigyquseosya;
        mkywwqusckeeisiy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qskoquwmkkgkkmuy;
        ckguemuwukmeycag:
        return false;
        goto ayqocaaesmkygque;
        wiamyucsaoosmoei:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\111\146\162\x61\x6d\145\154\171"));
        goto iiwmmqqaqckwwiqe;
        oqqscigyquseosya:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto akqsaiecouuqacks;
        qskoquwmkkgkkmuy:
        gamusuoqieekieka:
        goto qyskykugeiqkauce;
        cucsooyoayssmcas:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mkywwqusckeeisiy;
        emaeckumgkmgcaew:
        if (!(stripos($this->agent, "\111\146\162\141\155\145\154\171") !== false)) {
            goto dwyqyusgqwqwomqk;
        }
        goto wiamyucsaoosmoei;
        cguckckouuwacmow:
        return true;
        goto wacgcmsgismsomma;
        ayqocaaesmkygque:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto qkeuasieckwuqseq;
        wygcwcywyeosuemq:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto ymcqcaygueguiuig;
        auaukkuskuciowkq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto osygawsacakgggko;
        iwwouqosmwummgsi:
        muouqwckwywsgiwg:
        goto wygcwcywyeosuemq;
        ymcqcaygueguiuig:
        return true;
        goto eiwuwemqmigskwoe;
        osygawsacakgggko:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto iwwouqosmwummgsi;
        eeqsuowcmyeyuoqw:
        usaseckaaaugcygu:
        goto auaukkuskuciowkq;
        ikcsgymqsagymgco:
        goto muouqwckwywsgiwg;
        goto eeqsuowcmyeyuoqw;
        eiwuwemqmigskwoe:
        qquimmcqqiyegcym:
        goto wwiysyawwqeuikcc;
        qkeuasieckwuqseq:
        if (!(stripos($this->agent, "\x43\x6f\143\x6f\141\x52\x65\163\x74\x43\x6c\x69\145\x6e\164") !== false)) {
            goto qquimmcqqiyegcym;
        }
        goto ouaokeyacuscccyu;
        wwiysyawwqeuikcc:
        return false;
        goto soqmkkwmmkqiweau;
        ouaokeyacuscccyu:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\103\x6f\143\157\x61\x52\x65\163\164\103\x6c\151\x65\x6e\x74"));
        goto iywyeuaaoaeymmag;
        iywyeuaaoaeymmag:
        if (isset($yikciqwsimweauyg[1])) {
            goto usaseckaaaugcygu;
        }
        goto wsiggqyeiueeyqyu;
        wsiggqyeiueeyqyu:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ikcsgymqsagymgco;
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
        kuqeksgikkymkyeo:
        $this->oqgqmcogeugkakss(true);
        goto aogimqgcygkugqoc;
        gkkogauyaimaaoky:
        return false;
        goto akocagcmqwymsqqw;
        kggwwgeqkgwyoseq:
        $this->aasmeayouwmacaow(true);
        goto kuqeksgikkymkyeo;
        oqoyyooooyegowuk:
        if (!stristr($this->agent, "\x46\x61\x63\145\x62\x6f\157\x6b\x45\x78\164\x65\x72\x6e\x61\x6c\x48\151\x74")) {
            goto sqwwkouiqayeqeyo;
        }
        goto kggwwgeqkgwyoseq;
        akocagcmqwymsqqw:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto qioeweaouoiyoayy;
        qioeweaouoiyoayy:
        if (!stristr($this->agent, "\x46\102\111\x4f\123")) {
            goto ckyyyqokcocsmium;
        }
        goto ssyeoucmcqaewkws;
        ssyeoucmcqaewkws:
        $this->oqgqmcogeugkakss(true);
        goto gukuouumaoiiugiw;
        gukuouumaoiiugiw:
        return true;
        goto ayyeoeyyawiuiukq;
        soyeimgmemqugquc:
        return false;
        goto gosqmqqycwquosse;
        ayyeoeyyawiuiukq:
        ckyyyqokcocsmium:
        goto soyeimgmemqugquc;
        gosqmqqycwquosse:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto kekiekeeqkowaiga;
        iuugeqgkacqmuais:
        cwgiecqggoksyuko:
        goto eqocwcasskyqeauu;
        eqocwcasskyqeauu:
        return false;
        goto kkiiykemaoeswsay;
        kekiekeeqkowaiga:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\145\x72\163\x69\x6f\156"));
        goto wscoawgsgqekweuq;
        wscoawgsgqekweuq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cwgiecqggoksyuko;
        }
        goto ysuyamauyegkceea;
        wqmmaiwyoumwmiyi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oaoaskeocoucoaes;
        ysuyamauyegkceea:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto wqmmaiwyoumwmiyi;
        oaoaskeocoucoaes:
        return true;
        goto iuugeqgkacqmuais;
        kkiiykemaoeswsay:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto oyswaymeoiouuaoo;
        ssciauiqmswaugss:
        return true;
        goto aykkiwwmmckueiak;
        gqsmmaqkuciiwwki:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yuokckkqcuumcmua;
        ycagakkcsskiqweu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uiseoyicaoyaokum;
        }
        goto gqsmmaqkuciiwwki;
        aykkiwwmmckueiak:
        uiseoyicaoyaokum:
        goto gmiywscmoiqcceks;
        oyswaymeoiouuaoo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x43\162\x69\x4f\123"));
        goto ycagakkcsskiqweu;
        imumueocakucecam:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto ssciauiqmswaugss;
        gmiywscmoiqcceks:
        return false;
        goto ikumyeymcsyyuauw;
        yuokckkqcuumcmua:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto imumueocakucecam;
        ikumyeymcsyyuauw:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto uywiwaiokksgwuqm;
        cwmsekismgywawai:
        keuamggsqkcwyoqi:
        goto aooeicywwyscawue;
        yyagogoiskcuomuq:
        return true;
        goto cwmsekismgywawai;
        messwieuimiowsag:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto gousoguwcwieyseq;
        ykqeyymweawywsia:
        $this->ssquiwqwwcgcqiic();
        goto awoyakoygoouaqgi;
        awoyakoygoouaqgi:
        $this->eywockmuswoykooc(true);
        goto yyagogoiskcuomuq;
        uywiwaiokksgwuqm:
        if (!(stripos($this->agent, "\x69\x50\x68\x6f\156\145") !== false)) {
            goto keuamggsqkcwyoqi;
        }
        goto messwieuimiowsag;
        gousoguwcwieyseq:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto wouosmamsmggekic;
        wouosmamsmggekic:
        $this->uewoqoqkekmsyoeo();
        goto yisqaaicegsokeuk;
        aooeicywwyscawue:
        return false;
        goto qemqoaymwywkewmy;
        yisqaaicegsokeuk:
        $this->iqsiguacookiqwcs();
        goto ykqeyymweawywsia;
        qemqoaymwywkewmy:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto emsgawiqsesiiccg;
        emsgawiqsesiiccg:
        if (!(stripos($this->agent, "\151\x50\141\x64") !== false)) {
            goto lwaoqwcmyiqkkouw;
        }
        goto eekkyoakqmykcqec;
        sokqsksiecasgugs:
        return false;
        goto qyaiyoskqmqyyuos;
        qwscyqgokmkeqwuq:
        $this->ssquiwqwwcgcqiic();
        goto syosmkmiyacocysi;
        secssyuygoycmiqa:
        $this->iqsiguacookiqwcs();
        goto qwscyqgokmkeqwuq;
        syosmkmiyacocysi:
        $this->icigyueiiwsukmsu(true);
        goto soiuksqqwmsqwyeq;
        eekkyoakqmykcqec:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto ismcyiwkmqaaygge;
        wugyaiqayoamwacg:
        $this->uewoqoqkekmsyoeo();
        goto secssyuygoycmiqa;
        kiauseesqiwimyue:
        lwaoqwcmyiqkkouw:
        goto sokqsksiecasgugs;
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
        wskgeycusaokeymw:
        $this->uewoqoqkekmsyoeo();
        goto kmwwukmymssqakuk;
        uguwgicugawycckm:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto wskgeycusaokeymw;
        okmmkcokmyiqkceg:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto uguwgicugawycckm;
        wyqemyugccycgaso:
        return false;
        goto okgoksuuouqmmqog;
        qiayswmiyoqisyac:
        return true;
        goto sgkeayimkgeyaqic;
        kmwwukmymssqakuk:
        $this->iqsiguacookiqwcs();
        goto guuowemmmmcgukow;
        guuowemmmmcgukow:
        $this->ssquiwqwwcgcqiic();
        goto yycskqumwcimyyye;
        usscqwyeesggymse:
        if (!(stripos($this->agent, "\x69\120\x6f\x64") !== false)) {
            goto syookwiaqwmsaoem;
        }
        goto okmmkcokmyiqkceg;
        yycskqumwcimyyye:
        $this->eywockmuswoykooc(true);
        goto qiayswmiyoqisyac;
        sgkeayimkgeyaqic:
        syookwiaqwmsaoem:
        goto wyqemyugccycgaso;
        okgoksuuouqmmqog:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto gssmokgwcmqesyao;
        iuaaiqsmgoqiscio:
        goto wcuqqmycwwoqwwga;
        goto yqiyiacommmwsuce;
        yqiyiacommmwsuce:
        kgmwwkoiqwyscmys:
        goto kweqeekeouiqocqw;
        kweqeekeouiqocqw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ikkseymmmeooqmcm;
        ckkwwiuyquomkcku:
        woiqioceiyccoyyi:
        goto yemgimowqwsuqegu;
        yecageyyqwumqoca:
        if (isset($yikciqwsimweauyg[1])) {
            goto kgmwwkoiqwyscmys;
        }
        goto aqcwmswmgmgqokmu;
        gssmokgwcmqesyao:
        if (!(stripos($this->agent, "\x41\x6e\144\162\x6f\151\144") !== false)) {
            goto kmggqcwmkwwcuioa;
        }
        goto agwcwemswacqgqyk;
        aqcwmswmgmgqokmu:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto iuaaiqsmgoqiscio;
        sskqokueeqgsuumq:
        kqaemkmmqkyeweye:
        goto ysuagggqaicqyguk;
        soqyakgcqemouuko:
        if (stripos($this->agent, "\115\x6f\142\x69\x6c\x65") !== false) {
            goto woiqioceiyccoyyi;
        }
        goto squaugeowuwyumqu;
        wiuyqgeaacmksuqq:
        kmggqcwmkwwcuioa:
        goto msasquyamakaamys;
        msasquyamakaamys:
        return false;
        goto yymscyccyaauqiaa;
        womwoaskosgsauog:
        return true;
        goto wiuyqgeaacmksuqq;
        yemgimowqwsuqegu:
        $this->eywockmuswoykooc(true);
        goto sskqokueeqgsuumq;
        agwcwemswacqgqyk:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x41\156\144\162\157\151\144"));
        goto yecageyyqwumqoca;
        kumioksgmqmsaeqy:
        goto kqaemkmmqkyeweye;
        goto ckkwwiuyquomkcku;
        squaugeowuwyumqu:
        $this->icigyueiiwsukmsu(true);
        goto kumioksgmqmsaeqy;
        cimakcokyqkmyiau:
        wcuqqmycwwoqwwga:
        goto soqyakgcqemouuko;
        ikkseymmmeooqmcm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto cimakcokyqkmyiau;
        ysuagggqaicqyguk:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto womwoaskosgsauog;
        yymscyccyaauqiaa:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto yammukygywskcuey;
        ewgqscsiomaciyew:
        return false;
        goto iewuyuigwmkcmcas;
        umyuckgysaegimue:
        sisuqeisegegcsiy:
        goto ewgqscsiomaciyew;
        gquuqqacuqsgsyqc:
        if (!isset($yikciqwsimweauyg[1])) {
            goto owayquiaceqooaiq;
        }
        goto qysqqycgiwmucggw;
        ceiseomqooekseuo:
        return true;
        goto siaqsogicwwmayco;
        yusmiciysquiqayq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\151\x76\x61\154\x64\151"));
        goto gquuqqacuqsgsyqc;
        qysqqycgiwmucggw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto okacoggoqgoomuyc;
        siaqsogicwwmayco:
        owayquiaceqooaiq:
        goto umyuckgysaegimue;
        yammukygywskcuey:
        if (!(stripos($this->agent, "\126\151\x76\x61\x6c\x64\x69") !== false)) {
            goto sisuqeisegegcsiy;
        }
        goto yusmiciysquiqayq;
        okacoggoqgoomuyc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto qikuwygeoaimcukg;
        qikuwygeoaimcukg:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto ceiseomqooekseuo;
        iewuyuigwmkcmcas:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto mioiqgkakcguokqa;
        aeycoymkqiwogwag:
        return true;
        goto cgqqkkwugmiqyiow;
        yyimqwkqigowmcco:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ugkesgkkcqcasmoq;
        ysoeqwagkauquwme:
        if (stripos($this->agent, "\x4d\157\142\x69\154\x65") !== false) {
            goto sccmgumeswegawyk;
        }
        goto uwkiseisiuqsoqsa;
        eicqsqkmeaimooii:
        csuikuskoecgsymk:
        goto giawgsomaouqgiyc;
        wyimgokwakggwuoi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eeieacyyeywwyewo;
        }
        goto scqaokckckemicqi;
        gcgyqiaawwccgqaw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\102\x72\x6f\167\x73\x65\162"));
        goto wyimgokwakggwuoi;
        qqsiimkqkguqkeag:
        goto qekesyoouukaciyy;
        goto eicqsqkmeaimooii;
        yymiwwumowysiagy:
        return false;
        goto qsacucessyquaame;
        mquyowqsoawycyok:
        qekesyoouukaciyy:
        goto aeycoymkqiwogwag;
        suessqeuiasoqioi:
        $this->icigyueiiwsukmsu(true);
        goto oymuyuskiqyacysw;
        gaomwgqgumkcqawg:
        if (stripos($this->agent, "\x69\120\x61\x64") !== false) {
            goto sesgwayockkaakwm;
        }
        goto ysoeqwagkauquwme;
        kuyowuyquoioeqoc:
        sesgwayockkaakwm:
        goto suessqeuiasoqioi;
        yikaomgieukoawws:
        goto qekesyoouukaciyy;
        goto kuyowuyquoioeqoc;
        giawgsomaouqgiyc:
        $this->icigyueiiwsukmsu(true);
        goto mquyowqsoawycyok;
        oymuyuskiqyacysw:
        goto qekesyoouukaciyy;
        goto koceigseyecoyoia;
        ykwmoaqmwggiqmsk:
        wwaocaooaayqamsu:
        goto yymiwwumowysiagy;
        aucmemccqucmicwm:
        $this->eywockmuswoykooc(true);
        goto qqsiimkqkguqkeag;
        scqaokckckemicqi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yyimqwkqigowmcco;
        uwkiseisiuqsoqsa:
        if (stripos($this->agent, "\101\156\x64\162\157\x69\144") !== false) {
            goto csuikuskoecgsymk;
        }
        goto yikaomgieukoawws;
        cgqqkkwugmiqyiow:
        eeieacyyeywwyewo:
        goto ykwmoaqmwggiqmsk;
        mioiqgkakcguokqa:
        if (!(stripos($this->agent, "\131\141\102\x72\x6f\167\x73\x65\x72") !== false)) {
            goto wwaocaooaayqamsu;
        }
        goto gcgyqiaawwccgqaw;
        koceigseyecoyoia:
        sccmgumeswegawyk:
        goto aucmemccqucmicwm;
        ugkesgkkcqcasmoq:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto gaomwgqgumkcqawg;
        qsacucessyquaame:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto umkyqiyguqoauyek;
        ccmmogiaggiuewmu:
        miayoysigsgumwyi:
        goto syqgqkeomqsysaey;
        syqgqkeomqsysaey:
        msqmyqgiaeeeoeco:
        goto qmisymqoqmqocwoe;
        eceqcqseqcswkywu:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\120\154\141\x79\123\164\x61\164\151\157\156\40"));
        goto uuweusyuygicyoik;
        uwwiiwscccuowuoq:
        if (!(stripos($this->agent, "\x50\157\x72\x74\141\142\x6c\145\51") !== false || stripos($this->agent, "\x56\151\164\141") !== false)) {
            goto ommoqequygggywyi;
        }
        goto uyymyaogieaawaig;
        eyekywukwqucywcm:
        $quiguswioiaaywey = explode("\51", $yikciqwsimweauyg[2]);
        goto ciewwguuyumcisme;
        umkyqiyguqoauyek:
        if (!(stripos($this->agent, "\120\154\141\171\123\164\141\x74\151\157\x6e\x20") !== false)) {
            goto msqmyqgiaeeeoeco;
        }
        goto eceqcqseqcswkywu;
        iwgksuqmosckeqys:
        ommoqequygggywyi:
        goto sayicwyqgigeswug;
        qmisymqoqmqocwoe:
        return false;
        goto mcygcucugmyqswys;
        uuweusyuygicyoik:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto qugmeamkemckgqwo;
        ciewwguuyumcisme:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto uwwiiwscccuowuoq;
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
        mcygcucugmyqswys:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto gqomqwuiesioaaaq;
        gqomqwuiesioaaaq:
        if (!preg_match("\41\x5e\x57\147\x65\x74\x2f\x28\x5b\x5e\40\135\53\x29\x21\x69", $this->agent, $yikciqwsimweauyg)) {
            goto sieaoicuiusscywg;
        }
        goto ywuwweugeccmeuqk;
        wkmmaysiigyuyimk:
        return true;
        goto igcukieyogyaqwyo;
        iwacoiqoegwuaoqo:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto wkmmaysiigyuyimk;
        igcukieyogyaqwyo:
        sieaoicuiusscywg:
        goto imgwqyoiweuiwiec;
        ywuwweugeccmeuqk:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto iwacoiqoegwuaoqo;
        imgwqyoiweuiwiec:
        return false;
        goto kwsagikwoqogqecc;
        kwsagikwoqogqecc:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto ggqeyyoscwueysku;
        iyqcgqusyeiiaiai:
        wicaemaewwoooiuq:
        goto sukiqmyemewakiao;
        wsgkqgogymcgueag:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto eimqoqgqmsiokyeq;
        qqsmygoumegcogay:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\143\x75\x72\x6c"));
        goto qykkceysyessasey;
        ggqeyyoscwueysku:
        if (!(strpos($this->agent, "\143\x75\162\154") === 0)) {
            goto qmqsccegugoiyaiu;
        }
        goto qqsmygoumegcogay;
        qykkceysyessasey:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wicaemaewwoooiuq;
        }
        goto iwyoaksegwaksmsu;
        yeqmmgegmqgwyaea:
        return false;
        goto mkycqgqaawooaaeu;
        eimqoqgqmsiokyeq:
        return true;
        goto iyqcgqusyeiiaiai;
        sukiqmyemewakiao:
        qmqsccegugoiyaiu:
        goto yeqmmgegmqgwyaea;
        iwyoaksegwaksmsu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto sucmgqcacggcucec;
        sucmgqcacggcucec:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wsgkqgogymcgueag;
        mkycqgqaawooaaeu:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto ymyoskqgyeykqmom;
        gooiuuagswggewoq:
        gqcyummwsikcccom:
        goto ukmeggiqssyyyuku;
        aoemyociekskwmke:
        $this->platform = self::PLATFORM_SUNOS;
        goto cyqeeaiwumyekkce;
        wksuqaqsicwqekuy:
        goto uyiaqakwuswweqme;
        goto gusogiqwmwgywamm;
        esscoiyogsoqoquc:
        muicsociwumgosaw:
        goto gciescsgqiuoqkim;
        wyokgowugcsiigum:
        goto uyiaqakwuswweqme;
        goto uiqoeooowosqagsw;
        acmaiqeukwiqqyms:
        syqyosyywqwgoeoo:
        goto esqckkawqugyqimw;
        cmooymowqeusayua:
        $this->platform = self::PLATFORM_WINDOWS;
        goto aceouusygqicksgk;
        icyocwacicqauogu:
        if (stripos($this->agent, "\102\x6c\x61\x63\153\102\x65\162\162\x79") !== false) {
            goto acuiieocsgiyakia;
        }
        goto esqqqokyeaoauoou;
        eweqcaymckiwaccw:
        goto uyiaqakwuswweqme;
        goto maokeqaksuookoao;
        ugeyyoekkekmiqcw:
        if (stripos($this->agent, "\x4f\123\134\x2f\62") !== false) {
            goto oyioakacwwceegie;
        }
        goto kgweiqeqkukguqui;
        wmkiqcsuycsieuga:
        if (stripos($this->agent, "\x4f\x70\x65\x6e\123\157\154\141\162\x69\x73") !== false) {
            goto eequuumweyqioygw;
        }
        goto sgkmocmkaomwusik;
        iiyysuksmomyyuye:
        cguaokskycyggqym:
        goto cugaeomiskasooic;
        mokkeuemqauoaskk:
        oesgciyeoewgouki:
        goto emeoasammuwaesws;
        cekocgmmwuacyckg:
        $this->platform = self::PLATFORM_WINDOWS;
        goto awumcmmeumuaiocw;
        aaecacwqmsoowcsi:
        $this->platform = self::PLATFORM_NETBSD;
        goto guquqeyggoqqkgkm;
        yysewcsossqsackg:
        gawseeswkisqiwoe:
        goto qycwawiicimecwsq;
        qcaqeqscugwwgyci:
        $this->platform = self::PLATFORM_I_FRAME;
        goto qsikciasasogymew;
        ukmcukgkakisecyk:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto cyaomwaqoaiiqqes;
        oguaeaawigyoscii:
        okqmcygoiwaesmis:
        goto mougyosiwyugsymo;
        wmcckwsaaemkqweg:
        $this->platform = self::PLATFORM_BEOS;
        goto iqucsoqomgkeuyco;
        qsikciasasogymew:
        uyiaqakwuswweqme:
        goto mcqoyigqsewkkwgc;
        awiomycussysmike:
        acuiieocsgiyakia:
        goto ukmcukgkakisecyk;
        ggcmqkuwqkkkmcgu:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto gyawuaoseweeioce;
        sgkmocmkaomwusik:
        if (stripos($this->agent, "\123\165\156\x4f\123") !== false) {
            goto kmgqqgsuiwcyccak;
        }
        goto ugeyyoekkekmiqcw;
        oakqgwgaaakkecgm:
        if (stripos($this->agent, "\157\x6b\x68\164\x74\160") !== false) {
            goto gqwemyquuwgqcaic;
        }
        goto wyioqosyqawqkoyi;
        cyqeeaiwumyekkce:
        goto uyiaqakwuswweqme;
        goto asksckakmysykiue;
        maokeqaksuookoao:
        kycoymqmaukeekum:
        goto emooiegicmmqkwsg;
        imwweegoasykooim:
        uwegawkagcagoeiw:
        goto yukieguwkeesieiy;
        sgssyyueamgacywm:
        coakwcyymiqcmwug:
        goto myiogoqascwcikcc;
        qcqgakkooouyiooi:
        goto uyiaqakwuswweqme;
        goto mokkeuemqauoaskk;
        cyaomwaqoaiiqqes:
        goto uyiaqakwuswweqme;
        goto acmaiqeukwiqqyms;
        ewiyakwgaasssqmq:
        if (stripos($this->agent, "\116\145\164\102\x53\104") !== false) {
            goto aacemqiqgqoyokmi;
        }
        goto wmkiqcsuycsieuga;
        eccgyquwkmumeyea:
        goto uyiaqakwuswweqme;
        goto awiomycussysmike;
        ogugiciyicewkyue:
        aycyoqqqwmyciise:
        goto ciwyuyksieuuqiee;
        gwoqyokuiqqwugsk:
        if (stripos($this->agent, "\151\120\x61\144") !== false) {
            goto okqmcygoiwaesmis;
        }
        goto acysyqkmkgaoewci;
        kyqkigouggegscsi:
        goto uyiaqakwuswweqme;
        goto igiuieggauocicsg;
        gkcqueouksaqceqw:
        aacemqiqgqoyokmi:
        goto aaecacwqmsoowcsi;
        auuogsqacsimiksi:
        kwewaoocuqgaseoa:
        goto cmooymowqeusayua;
        kqmqqomaqawisweo:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto wyokgowugcsiigum;
        wyioqosyqawqkoyi:
        if (stripos($this->agent, "\120\157\x73\x74\x6d\141\x6e\122\x75\x6e\x74\151\x6d\145") !== false) {
            goto coakwcyymiqcmwug;
        }
        goto qwkcgqyyygyasgqw;
        ymyoskqgyeykqmom:
        if (stripos($this->agent, "\167\x69\156\x64\x6f\167\163") !== false) {
            goto ecusscoueakqaqsu;
        }
        goto gwoqyokuiqqwugsk;
        cakiqwoseiyqqqkk:
        if (stripos($this->agent, "\154\151\156\x75\170") !== false) {
            goto muicsociwumgosaw;
        }
        goto yicuqsmuiueiuwos;
        mougyosiwyugsymo:
        $this->platform = self::PLATFORM_IPAD;
        goto iouagkwueekusiwi;
        meiykooeimaqqico:
        if (stripos($this->agent, "\103\x72\117\x53") !== false) {
            goto ugccoisuygekiaae;
        }
        goto oakqgwgaaakkecgm;
        eiskwkcoggkikmcc:
        goto uyiaqakwuswweqme;
        goto hsuemysceewomeuc;
        yyckaiasyqokgsyy:
        if (stripos($this->agent, "\x52\157\153\x75") !== false) {
            goto kycoymqmaukeekum;
        }
        goto ewumqgcwgeqqsoao;
        aeeiacomeyceesoe:
        goto uyiaqakwuswweqme;
        goto seeosigigeuueiqy;
        aaaaikyksmgkyygi:
        if (stripos($this->agent, "\164\166\x4f\123") !== false) {
            goto seaqqywowweasaoa;
        }
        goto wioukmwequaosqsu;
        qoyywwueqcmomgio:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto akayacsmoiwoaeqm;
        aceouusygqicksgk:
        goto uyiaqakwuswweqme;
        goto yysewcsossqsackg;
        ymucyiowcaqucyom:
        goto uyiaqakwuswweqme;
        goto gooiuuagswggewoq;
        siaweewywmuayyks:
        goto uyiaqakwuswweqme;
        goto iiyysuksmomyyuye;
        uiqoeooowosqagsw:
        gqwemyquuwgqcaic:
        goto syiwqmwwoemuyeou;
        kgwaccmcscsusase:
        goto uyiaqakwuswweqme;
        goto msqycwkyqqeyqoka;
        emiuesoeeiqysuay:
        seaqqywowweasaoa:
        goto qoyywwueqcmomgio;
        eouqmgocqewmwgik:
        $this->platform = self::PLATFORM_IPOD;
        goto ymucyiowcaqucyom;
        guquqeyggoqqkgkm:
        goto uyiaqakwuswweqme;
        goto smmqcueceqkiggkm;
        ciwyuyksieuuqiee:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto eayyeuwawewcqcom;
        ycskcusgcyeowagm:
        if (stripos($this->agent, "\x6d\141\x63") !== false) {
            goto miqaocyiuwmyyycc;
        }
        goto owkougkyymiwoaqu;
        yeigmocusoouscsa:
        $this->platform = self::PLATFORM_OS2;
        goto ksqmykkeymqwoacg;
        syiwqmwwoemuyeou:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto cgqiesaeskmuwwcy;
        umgsqowiqmesssay:
        if (stripos($this->agent, "\x6c\x69\x6e\x75\170") !== false && stripos($this->agent, "\x53\x4d\x41\122\x54\x2d\x54\x56") !== false) {
            goto aycyoqqqwmyciise;
        }
        goto cakiqwoseiyqqqkk;
        asksckakmysykiue:
        oyioakacwwceegie:
        goto yeigmocusoouscsa;
        ewumqgcwgeqqsoao:
        if (stripos($this->agent, "\151\x4f\123") !== false) {
            goto oesgciyeoewgouki;
        }
        goto aaaaikyksmgkyygi;
        oaoummcgooyceayi:
        $this->platform = self::PLATFORM_APPLE;
        goto siaweewywmuayyks;
        myiogoqascwcikcc:
        $this->platform = self::PLATFORM_POSTMAN;
        goto mkeuwsqceweiacum;
        imagekgwsuqccwgo:
        kkecucquwauqqyku:
        goto eouqmgocqewmwgik;
        acysyqkmkgaoewci:
        if (stripos($this->agent, "\151\x50\157\144") !== false) {
            goto kkecucquwauqqyku;
        }
        goto woqqukymqiuyququ;
        ueqauuccggkgcyqo:
        scoouaqeoeicswwu:
        goto mmqioecsyukkcgoo;
        yeeicocmyyaeksys:
        goto uyiaqakwuswweqme;
        goto imwweegoasykooim;
        yicuqsmuiueiuwos:
        if (stripos($this->agent, "\116\157\153\x69\x61") !== false) {
            goto yioawsqawmqagueg;
        }
        goto icyocwacicqauogu;
        acwuukokiwgoswuc:
        if (stripos($this->agent, "\167\151\156") !== false) {
            goto kwewaoocuqgaseoa;
        }
        goto yqaikoeaiuauikcw;
        eayyeuwawewcqcom:
        goto uyiaqakwuswweqme;
        goto esscoiyogsoqoquc;
        seeosigigeuueiqy:
        ecusscoueakqaqsu:
        goto cekocgmmwuacyckg;
        gusogiqwmwgywamm:
        sskkqsmyqmgyewue:
        goto muycacscoqikyasc;
        emeoasammuwaesws:
        $this->platform = self::PLATFORM_IPHONE . "\57" . self::PLATFORM_IPAD;
        goto mqmowgywwygssysy;
        uyauemouyweqqkwu:
        goto uyiaqakwuswweqme;
        goto gkcqueouksaqceqw;
        cwceosugiiyyauqi:
        goto uyiaqakwuswweqme;
        goto ogugiciyicewkyue;
        imyycasecqwmeuew:
        gsyegqcsyscyycic:
        goto wmcckwsaaemkqweg;
        hsuemysceewomeuc:
        ugccoisuygekiaae:
        goto kqmqqomaqawisweo;
        omeoqgskaoomewqa:
        if (stripos($this->agent, "\x4f\160\145\156\x42\123\104") !== false) {
            goto sskkqsmyqmgyewue;
        }
        goto ewiyakwgaasssqmq;
        akayacsmoiwoaeqm:
        goto uyiaqakwuswweqme;
        goto ueqauuccggkgcyqo;
        muiouqmomamguoce:
        if (stripos($this->agent, "\123\x69\154\x6b") !== false) {
            goto uwegawkagcagoeiw;
        }
        goto umgsqowiqmesssay;
        gciescsgqiuoqkim:
        $this->platform = self::PLATFORM_LINUX;
        goto kgwaccmcscsusase;
        iqucsoqomgkeuyco:
        goto uyiaqakwuswweqme;
        goto auuogsqacsimiksi;
        smmqcueceqkiggkm:
        eequuumweyqioygw:
        goto ggcmqkuwqkkkmcgu;
        qycwawiicimecwsq:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto eweqcaymckiwaccw;
        msqycwkyqqeyqoka:
        yioawsqawmqagueg:
        goto wgcyyuswcmkwyaky;
        emooiegicmmqkwsg:
        $this->platform = self::PLATFORM_ROKU;
        goto qcqgakkooouyiooi;
        awumcmmeumuaiocw:
        goto uyiaqakwuswweqme;
        goto oguaeaawigyoscii;
        woqqukymqiuyququ:
        if (stripos($this->agent, "\x69\x50\x68\x6f\156\x65") !== false) {
            goto gqcyummwsikcccom;
        }
        goto ycskcusgcyeowagm;
        yukieguwkeesieiy:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto cwceosugiiyyauqi;
        cugaeomiskasooic:
        $this->platform = self::PLATFORM_ANDROID;
        goto yeeicocmyyaeksys;
        yqaikoeaiuauikcw:
        if (stripos($this->agent, "\x50\154\x61\171\x73\164\141\x74\151\157\156") !== false) {
            goto gawseeswkisqiwoe;
        }
        goto yyckaiasyqokgsyy;
        wioukmwequaosqsu:
        if (stripos($this->agent, "\143\165\x72\x6c") !== false) {
            goto scoouaqeoeicswwu;
        }
        goto meiykooeimaqqico;
        iouagkwueekusiwi:
        goto uyiaqakwuswweqme;
        goto imagekgwsuqccwgo;
        qwkcgqyyygyasgqw:
        if (stripos($this->agent, "\x49\x66\162\141\x6d\x65\x6c\x79") !== false) {
            goto iacwiwmoggwseqsa;
        }
        goto aeeiacomeyceesoe;
        mqmowgywwygssysy:
        goto uyiaqakwuswweqme;
        goto emiuesoeeiqysuay;
        igiuieggauocicsg:
        miqaocyiuwmyyycc:
        goto oaoummcgooyceayi;
        kgweiqeqkukguqui:
        if (stripos($this->agent, "\x42\145\117\x53") !== false) {
            goto gsyegqcsyscyycic;
        }
        goto acwuukokiwgoswuc;
        cgqiesaeskmuwwcy:
        goto uyiaqakwuswweqme;
        goto sgssyyueamgacywm;
        wgcyyuswcmkwyaky:
        $this->platform = self::PLATFORM_NOKIA;
        goto eccgyquwkmumeyea;
        owkougkyymiwoaqu:
        if (stripos($this->agent, "\x61\x6e\x64\x72\x6f\x69\144") !== false) {
            goto cguaokskycyggqym;
        }
        goto muiouqmomamguoce;
        esqckkawqugyqimw:
        $this->platform = self::PLATFORM_FREEBSD;
        goto wksuqaqsicwqekuy;
        kouowucggykwmwgw:
        kmgqqgsuiwcyccak:
        goto aoemyociekskwmke;
        esqqqokyeaoauoou:
        if (stripos($this->agent, "\x46\162\x65\145\x42\x53\x44") !== false) {
            goto syqyosyywqwgoeoo;
        }
        goto omeoqgskaoomewqa;
        mkeuwsqceweiacum:
        goto uyiaqakwuswweqme;
        goto icoqeuawskkosskw;
        icoqeuawskkosskw:
        iacwiwmoggwseqsa:
        goto qcaqeqscugwwgyci;
        gyawuaoseweeioce:
        goto uyiaqakwuswweqme;
        goto kouowucggykwmwgw;
        muycacscoqikyasc:
        $this->platform = self::PLATFORM_OPENBSD;
        goto uyauemouyweqqkwu;
        ksqmykkeymqwoacg:
        goto uyiaqakwuswweqme;
        goto imyycasecqwmeuew;
        ukmeggiqssyyyuku:
        $this->platform = self::PLATFORM_IPHONE;
        goto kyqkigouggegscsi;
        mmqioecsyukkcgoo:
        $this->platform = self::PLATFORM_TERMINAL;
        goto eiskwkcoggkikmcc;
        mcqoyigqsewkkwgc:
    }
}
