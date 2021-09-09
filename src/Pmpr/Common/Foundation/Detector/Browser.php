<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const BROWSER_UNKNOWN = "\x75\x6e\x6b\156\x6f\x77\156";
    const VERSION_UNKNOWN = "\x75\156\153\x6e\157\x77\x6e";
    const BROWSER_OPERA = "\117\x70\145\x72\141";
    
    const BROWSER_OPERA_MINI = "\x4f\160\145\162\141\x20\115\x69\x6e\151";
    
    const BROWSER_WEBTV = "\x57\x65\x62\x54\x56";
    
    const BROWSER_EDGE = "\105\144\147\145";
    
    const BROWSER_IE = "\x49\x6e\164\145\x72\156\x65\164\x20\105\170\160\x6c\x6f\162\x65\x72";
    
    const BROWSER_POCKET_IE = "\120\157\143\x6b\x65\164\40\x49\156\164\145\162\x6e\x65\164\40\105\170\160\x6c\157\162\x65\162";
    
    const BROWSER_KONQUEROR = "\113\157\156\x71\x75\145\162\157\162";
    
    const BROWSER_ICAB = "\x69\x43\x61\142";
    
    const BROWSER_OMNIWEB = "\117\x6d\x6e\x69\x57\145\x62";
    
    const BROWSER_FIREBIRD = "\x46\151\x72\x65\142\x69\162\x64";
    
    const BROWSER_FIREFOX = "\106\x69\162\x65\x66\x6f\170";
    
    const BROWSER_BRAVE = "\x42\x72\x61\x76\x65";
    
    const BROWSER_PALEMOON = "\120\141\x6c\x65\x6d\x6f\157\x6e";
    
    const BROWSER_ICEWEASEL = "\111\143\145\x77\x65\141\163\145\x6c";
    
    const BROWSER_SHIRETOKO = "\123\x68\151\x72\x65\x74\157\153\157";
    
    const BROWSER_MOZILLA = "\115\157\x7a\x69\154\154\x61";
    
    const BROWSER_AMAYA = "\x41\155\141\171\141";
    
    const BROWSER_LYNX = "\x4c\171\x6e\x78";
    
    const BROWSER_SAFARI = "\123\x61\146\141\162\x69";
    
    const BROWSER_IPHONE = "\151\x50\x68\157\156\145";
    
    const BROWSER_IPOD = "\x69\x50\x6f\144";
    
    const BROWSER_IPAD = "\151\x50\141\144";
    
    const BROWSER_CHROME = "\x43\x68\162\x6f\x6d\x65";
    
    const BROWSER_ANDROID = "\x41\x6e\144\162\157\x69\144";
    
    const BROWSER_GOOGLEBOT = "\x47\157\x6f\147\154\145\x42\x6f\164";
    
    const BROWSER_CURL = "\143\125\122\114";
    
    const BROWSER_WGET = "\x57\147\145\164";
    
    const BROWSER_UCBROWSER = "\x55\x43\x42\162\157\167\x73\145\x72";
    
    const BROWSER_YANDEXBOT = "\131\141\156\144\145\x78\102\x6f\164";
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = "\131\141\156\x64\145\x78\x49\x6d\x61\147\x65\122\145\x73\151\x7a\145\162";
    
    const BROWSER_YANDEXIMAGES_BOT = "\131\x61\x6e\x64\145\x78\111\x6d\x61\x67\145\163";
    
    const BROWSER_YANDEXVIDEO_BOT = "\131\x61\156\x64\x65\x78\x56\x69\144\145\x6f";
    
    const BROWSER_YANDEXMEDIA_BOT = "\131\x61\x6e\x64\145\170\x4d\145\144\x69\141";
    
    const BROWSER_YANDEXBLOGS_BOT = "\x59\141\156\144\145\x78\x42\x6c\x6f\x67\x73";
    
    const BROWSER_YANDEXFAVICONS_BOT = "\131\x61\156\x64\145\x78\106\x61\x76\x69\x63\x6f\156\x73";
    
    const BROWSER_YANDEXWEBMASTER_BOT = "\131\x61\156\x64\x65\x78\127\145\x62\155\x61\x73\164\x65\x72";
    
    const BROWSER_YANDEXDIRECT_BOT = "\131\x61\156\x64\145\x78\104\151\162\145\143\x74";
    
    const BROWSER_YANDEXMETRIKA_BOT = "\131\141\156\144\145\x78\x4d\x65\x74\162\151\x6b\141";
    
    const BROWSER_YANDEXNEWS_BOT = "\x59\141\156\x64\145\x78\x4e\145\x77\163";
    
    const BROWSER_YANDEXCATALOG_BOT = "\x59\x61\x6e\144\145\x78\103\x61\164\141\x6c\157\147";
    
    const BROWSER_SLURP = "\x59\x61\150\157\157\x21\x20\123\x6c\x75\162\x70";
    
    const BROWSER_W3CVALIDATOR = "\x57\x33\x43\40\x56\x61\154\x69\x64\141\x74\157\162";
    
    const BROWSER_BLACKBERRY = "\102\154\141\x63\x6b\x42\x65\x72\x72\x79";
    
    const BROWSER_ICECAT = "\111\143\x65\x43\x61\164";
    
    const BROWSER_NOKIA_S60 = "\116\157\153\x69\141\x20\x53\x36\x30\40\x4f\123\123\x20\x42\162\x6f\x77\163\145\x72";
    
    const BROWSER_NOKIA = "\116\157\153\151\x61\40\102\162\x6f\167\163\145\x72";
    
    const BROWSER_MSN = "\115\123\116\x20\102\x72\157\x77\163\x65\x72";
    
    const BROWSER_MSNBOT = "\115\123\x4e\40\x42\x6f\x74";
    
    const BROWSER_BINGBOT = "\102\x69\156\147\40\x42\157\164";
    
    const BROWSER_VIVALDI = "\126\x69\166\x61\x6c\x64\151";
    
    const BROWSER_YANDEX = "\x59\x61\156\144\145\x78";
    
    const BROWSER_NETSCAPE_NAVIGATOR = "\x4e\145\164\x73\143\x61\160\145\x20\116\141\166\151\147\141\x74\x6f\x72";
    
    const BROWSER_GALEON = "\107\x61\x6c\145\x6f\156";
    
    const BROWSER_NETPOSITIVE = "\x4e\145\164\x50\x6f\x73\x69\x74\151\166\x65";
    
    const BROWSER_PHOENIX = "\120\150\157\145\x6e\151\170";
    
    const BROWSER_PLAYSTATION = "\120\154\x61\x79\x53\x74\x61\164\x69\157\x6e";
    const BROWSER_SAMSUNG = "\x53\x61\155\x73\165\156\147\x42\162\157\x77\163\145\x72";
    const BROWSER_SILK = "\x53\151\x6c\153";
    const BROWSER_I_FRAME = "\x49\x66\162\141\155\x65\154\x79";
    const BROWSER_COCOA = "\103\x6f\143\x6f\141\122\145\163\164\103\x6c\x69\x65\156\164";
    const PLATFORM_UNKNOWN = "\165\156\153\156\157\167\x6e";
    const PLATFORM_WINDOWS = "\127\x69\156\x64\x6f\167\163";
    const PLATFORM_WINDOWS_CE = "\x57\151\x6e\144\157\x77\163\40\103\x45";
    const PLATFORM_APPLE = "\101\160\160\154\x65";
    const PLATFORM_LINUX = "\x4c\151\156\165\170";
    const PLATFORM_OS2 = "\117\x53\x2f\62";
    const PLATFORM_BEOS = "\102\145\117\123";
    const PLATFORM_IPHONE = "\x69\x50\150\x6f\x6e\145";
    const PLATFORM_IPOD = "\151\120\x6f\x64";
    const PLATFORM_IPAD = "\x69\120\x61\144";
    const PLATFORM_BLACKBERRY = "\102\154\141\x63\153\102\145\162\x72\171";
    const PLATFORM_NOKIA = "\116\x6f\153\x69\x61";
    const PLATFORM_FREEBSD = "\x46\x72\x65\145\102\x53\104";
    const PLATFORM_OPENBSD = "\x4f\x70\145\x6e\x42\x53\104";
    const PLATFORM_NETBSD = "\x4e\x65\x74\x42\123\104";
    const PLATFORM_SUNOS = "\123\165\156\117\x53";
    const PLATFORM_OPENSOLARIS = "\x4f\160\x65\156\123\x6f\x6c\141\162\x69\x73";
    const PLATFORM_ANDROID = "\x41\156\x64\162\x6f\x69\x64";
    const PLATFORM_PLAYSTATION = "\123\157\156\171\x20\x50\154\141\171\x53\164\141\x74\151\x6f\156";
    const PLATFORM_ROKU = "\122\157\x6b\x75";
    const PLATFORM_APPLE_TV = "\101\160\160\154\x65\x20\124\x56";
    const PLATFORM_TERMINAL = "\x54\x65\x72\155\151\x6e\x61\154";
    const PLATFORM_FIRE_OS = "\x46\x69\x72\145\40\x4f\x53";
    const PLATFORM_SMART_TV = "\x53\115\x41\122\124\x2d\x54\x56";
    const PLATFORM_CHROME_OS = "\x43\150\x72\157\x6d\x65\40\x4f\x53";
    const PLATFORM_JAVA_ANDROID = "\112\141\x76\141\x2f\101\156\x64\x72\157\x69\x64";
    const PLATFORM_POSTMAN = "\x50\157\163\164\155\x61\156";
    const PLATFORM_I_FRAME = "\x49\x66\162\141\155\x65\x6c\171";
    const OPERATING_SYSTEM_UNKNOWN = "\165\156\153\156\157\x77\156";
    
    public function __construct($uowwycywwssskuys = '')
    {
        goto kymoeekcwkmosuqm;
        yyiuaymyqkoooyse:
        $this->iaoqckywsogqyiio($uowwycywwssskuys);
        goto iacsmyoeqsisuoqq;
        iyyskykwysmaiosq:
        $this->qeqwswckeiieossq();
        goto swuiymekcguiocgu;
        swuiymekcguiocgu:
        goto mqkaiyymkmeyewiw;
        goto hwcueuuaimkiawcg;
        oakqasoccyooqcqk:
        if ($uowwycywwssskuys != '') {
            goto csscwckocuaykoew;
        }
        goto eawommuykgayesso;
        iacsmyoeqsisuoqq:
        mqkaiyymkmeyewiw:
        goto wieuocqaikcuwsmg;
        kymoeekcwkmosuqm:
        $this->runSetup = false;
        goto oakqasoccyooqcqk;
        eawommuykgayesso:
        $this->reset();
        goto iyyskykwysmaiosq;
        wieuocqaikcuwsmg:
        parent::__construct();
        goto ywqaqwigqqqcsyos;
        hwcueuuaimkiawcg:
        csscwckocuaykoew:
        goto yyiuaymyqkoooyse;
        ywqaqwigqqqcsyos:
    }
    
    public function reset()
    {
        goto eussomccqmmumkoc;
        wmaqigaciaqiikcy:
        $this->isMobile = false;
        goto gosgumwgamwesssq;
        gosgumwgamwesssq:
        $this->isFacebook = false;
        goto makeckokeoicueia;
        ycoiwiguwggowsug:
        $this->isRobot = false;
        goto ykyuusouwcesskqe;
        ykyuusouwcesskqe:
        $this->version = self::VERSION_UNKNOWN;
        goto aiwaekeqciwyimwi;
        uquciwyocygmwaeq:
        $this->agent = isset($_SERVER["\x48\124\124\120\x5f\x55\123\105\122\137\x41\107\x45\116\124"]) ? $_SERVER["\110\x54\124\120\x5f\x55\123\105\122\x5f\101\107\105\x4e\x54"] : '';
        goto ukuqoksosmkiycci;
        eussomccqmmumkoc:
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        goto isiseiywogusquiy;
        makeckokeoicueia:
        $this->aolVersion = self::VERSION_UNKNOWN;
        goto kkckckioiqcwoukw;
        wqwmkcisgiyyoyam:
        $this->isTablet = false;
        goto wmaqigaciaqiikcy;
        isiseiywogusquiy:
        $this->name = self::BROWSER_UNKNOWN;
        goto uquciwyocygmwaeq;
        aiwaekeqciwyimwi:
        $this->platform = self::PLATFORM_UNKNOWN;
        goto wqwmkcisgiyyoyam;
        ukuqoksosmkiycci:
        $this->isAol = false;
        goto ycoiwiguwggowsug;
        kkckckioiqcwoukw:
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
        $this->version = preg_replace("\x2f\133\x5e\60\55\71\x2c\56\54\x61\x2d\172\54\x41\55\x5a\x2d\135\x2f", '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace("\x2f\133\136\60\x2d\x39\x2c\x2e\x2c\x61\x2d\x7a\x2c\x41\55\x5a\x5d\57", '', $kqagasmwymmuiksq);
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
        goto zocygeecusggsqgy;
        wmigqcwwousgyuqc:
        $this->qeqwswckeiieossq();
        goto kaycsosiqusqeiio;
        oewkyegysuioqeuy:
        $this->agent = $agent_string;
        goto wmigqcwwousgyuqc;
        zocygeecusggsqgy:
        $this->reset();
        goto oewkyegysuioqeuy;
        kaycsosiqusqeiio:
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "\x63\x68\x72\157\x6d\145\146\162\141\155\145") !== false;
    }
    
    public function __toString()
    {
        return "\74\163\164\x72\157\x6e\x67\76\x42\x72\157\167\163\145\x72\x20\116\141\155\145\x3a\74\57\163\x74\162\157\156\147\x3e\x20{$this->aagmmewiwysmgseq()}\x3c\x62\x72\57\76\12" . "\x3c\x73\164\x72\x6f\156\x67\x3e\x42\162\x6f\167\x73\145\x72\40\x56\145\162\163\x69\157\156\x3a\x3c\x2f\x73\x74\162\157\x6e\x67\x3e\x20{$this->gikwwgqmwccescgy()}\74\x62\162\57\x3e\12" . "\x3c\163\x74\x72\x6f\156\147\x3e\x42\162\157\167\x73\145\162\40\x55\x73\145\162\40\101\147\145\156\164\40\123\164\162\151\156\147\x3a\74\x2f\x73\164\162\157\x6e\147\x3e\40{$this->ckaoiscoyuuosace()}\74\x62\162\57\76\xa" . "\74\163\164\x72\x6f\x6e\x67\x3e\x50\154\x61\x74\146\x6f\162\155\x3a\x3c\x2f\x73\x74\x72\157\156\x67\x3e\x20{$this->kqeiosksqeuksyqu()}\x3c\142\162\57\x3e";
    }
    
    protected function qeqwswckeiieossq()
    {
        goto eqgwseukuesiwuuq;
        cyeauauawcaoqwsi:
        $this->iggocwysumewuquw();
        goto egkiiogswgakiack;
        egkiiogswgakiack:
        $this->caqkscqcyqeciamc();
        goto mgyqaewckasyuiie;
        eqgwseukuesiwuuq:
        $this->acmmsiuwaekasogs();
        goto cyeauauawcaoqwsi;
        mgyqaewckasyuiie:
    }
    
    protected function iggocwysumewuquw()
    {
        return $this->maowoygwywiawwyc() || $this->gggwayigqkokeigi() || $this->sukgiyywqmoigmom() || $this->makyeuicweuowumi() || $this->cgequousmqakcios() || $this->eqqcucwcgwqiogik() || $this->usswyskeuiskccki() || $this->aweyeayscomouegw() || $this->mgaiuyuciiueqyge() || $this->syeogeymkuiqsoec() || $this->eqkuicmgoaougagi() || $this->qsseiqmmssqiuomm() || $this->oomiyiuwesyuegws() || $this->uockauwugkqgqkce() || $this->oomuqgqyykuccewm() || $this->ciawmegkaaacmoew() || $this->cysskoyaouegkmky() || $this->iaacgcgmmegamkiu() || $this->uumayumieageyiuy() || $this->qcqikaemyysumcsu() || $this->siwcougwagmcauoi() || $this->aeywoaukuwaeegku() || $this->qaigygakimuucuki() || $this->cimegwusqouswgao() || $this->oumugceeiaceqieo() || $this->wmcqkeiuewqameek() || $this->eccwcswcuggacgua() || $this->mwoogugykmiymmgy() || $this->qceuceikgwagccsq() || $this->uuyiswoewekeauaw() || $this->sqawuqckmasomwiq() || $this->aaseiwemciwamqqm() || $this->ksumscewmeyaocyy() || $this->qsemkkquagiaoioc() || $this->bgkmykkkkksumwea() || $this->ugaiaiamygwcwemg() || $this->ksikmmeqsuycsqck() || $this->yswggmyigakcackc() || $this->uiwkymoksesuumwe() || $this->qcswwmqaioswesoq() || $this->momgeesgauwmqaks() || $this->gewsuekegcksgkai() || $this->ecocgoqgymuacegg() || $this->wacucmcykeakeeou() || $this->qaweacwkwmmuqqam() || $this->usemqkymaguiocgy() || $this->mqsiuucsqqyuwcuw() || $this->mmyqoqguasigekck() || $this->noeygigqkeciickm() || $this->akwueocamkykcwyy() || $this->ykyiqmysgemoaakw() || $this->qiqsouwkwmwmqeem() || $this->wiqieuoqysguameu() || $this->gqwuksqaksqcemam() || $this->cgqcukygysieeqko() || $this->ccaaioyauuuuyikg() || $this->aowooqokikgeegkm();
    }
    
    protected function uumayumieageyiuy()
    {
        goto ykkuoyukeqkaiamg;
        wiaauiiuyogwauum:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qweasgqgummkgesw;
        }
        goto amwiioosseiocuic;
        amwiioosseiocuic:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto cyueaiekggqumaic;
        squkoccwioggcaye:
        $this->eywockmuswoykooc(true);
        goto oocgwowiyomcosac;
        oocgwowiyomcosac:
        return true;
        goto ggywsksyyogoocie;
        ggywsksyyogoocie:
        qweasgqgummkgesw:
        goto mcacwiaagqysweem;
        cyueaiekggqumaic:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto owseqyqgagqaacmy;
        oqokmmqoikgwmsai:
        return false;
        goto yackuaqwsqcwciyo;
        ykkuoyukeqkaiamg:
        if (!(stripos($this->agent, "\142\154\141\143\153\142\x65\x72\162\171") !== false)) {
            goto skkkocayisgiuaoq;
        }
        goto womyiwaoigaequiw;
        owseqyqgagqaacmy:
        $this->name = self::BROWSER_BLACKBERRY;
        goto squkoccwioggcaye;
        mcacwiaagqysweem:
        skkkocayisgiuaoq:
        goto oqokmmqoikgwmsai;
        womyiwaoigaequiw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x42\x6c\141\143\153\x42\x65\162\162\x79"));
        goto wiaauiiuyogwauum;
        yackuaqwsqcwciyo:
    }
    
    protected function caqkscqcyqeciamc()
    {
        goto wuesuwyyyaesmkas;
        oscqsgwcimqawseu:
        yqiaqmigsoeqmgwo:
        goto ysqeawycwuosoawe;
        awiawgewcmmiugqm:
        if (!isset($quiguswioiaaywey[1])) {
            goto yqiaqmigsoeqmgwo;
        }
        goto meayoamiqaqouykk;
        meayoamiqaqouykk:
        $this->igmimcweskyugiqm(true);
        goto igsmkqcwksaogqaq;
        uoeogwamkogoqoow:
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        goto emyigiiocasusaea;
        ysqeawycwuosoawe:
        aiswkmkmkckuociu:
        goto omikseuuygmokqsw;
        iekwmuigmiooiugw:
        return true;
        goto oscqsgwcimqawseu;
        omikseuuygmokqsw:
        return false;
        goto sqackyqqakkykaus;
        igsmkqcwksaogqaq:
        $this->qkeiegqwsgiwwkik(preg_replace("\57\133\136\x30\x2d\71\x5c\x2e\141\55\172\x5d\57\x69", '', $quiguswioiaaywey[1]));
        goto iekwmuigmiooiugw;
        emyigiiocasusaea:
        if (!(stripos($this->agent, "\x61\x6f\x6c") !== false)) {
            goto aiswkmkmkckuociu;
        }
        goto qykicwksywyiiqkk;
        qykicwksywyiiqkk:
        $quiguswioiaaywey = explode("\40", stristr($this->agent, "\101\x4f\x4c"));
        goto awiawgewcmmiugqm;
        wuesuwyyyaesmkas:
        $this->igmimcweskyugiqm(false);
        goto uoeogwamkogoqoow;
        sqackyqqakkykaus:
    }
    
    protected function siwcougwagmcauoi()
    {
        goto ggkkqomssqyqiquq;
        ecsieaukkkskmiye:
        return true;
        goto iqoqyuokokywiqsg;
        mickaocycsqkssoi:
        return false;
        goto eeegygkcwmqmqyes;
        qemwkwgoywqqwscg:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto csmemsmogwosqkks;
        iuqoaqsqmamokiaa:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x67\157\x6f\147\x6c\145\x62\157\x74"));
        goto uquoikaaykqmayco;
        ggkkqomssqyqiquq:
        if (!(stripos($this->agent, "\147\157\x6f\x67\x6c\x65\x62\157\x74") !== false)) {
            goto sgykyaiuwiykyqqc;
        }
        goto iuqoaqsqmamokiaa;
        csmemsmogwosqkks:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto wiuqggsaqsscggyq;
        iqoqyuokokywiqsg:
        yiqceakcgqweqwkq:
        goto soqqgkywqwwiuymo;
        soqqgkywqwwiuymo:
        sgykyaiuwiykyqqc:
        goto mickaocycsqkssoi;
        uquoikaaykqmayco:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yiqceakcgqweqwkq;
        }
        goto qemwkwgoywqqwscg;
        muuoiakkusqamoia:
        $this->aasmeayouwmacaow(true);
        goto ecsieaukkkskmiye;
        wiuqggsaqsscggyq:
        $this->name = self::BROWSER_GOOGLEBOT;
        goto muuoiakkusqamoia;
        eeegygkcwmqmqyes:
    }
    
    protected function oumugceeiaceqieo()
    {
        goto uwowyggggqcqiuao;
        uqwoeksekoweiwke:
        qocgiimiggeksoky:
        goto ykqeemyaewkmowyu;
        cmkiwqcgsmwyuggk:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto eqwkmqasacseyecw;
        wywgewmwqwqsysig:
        $this->aasmeayouwmacaow(true);
        goto ggkyameswcsquisg;
        eqwkmqasacseyecw:
        $this->name = self::BROWSER_YANDEXBOT;
        goto wywgewmwqwqsysig;
        uwowyggggqcqiuao:
        if (!(stripos($this->agent, "\131\x61\156\144\x65\x78\x42\157\x74") !== false)) {
            goto qocgiimiggeksoky;
        }
        goto oagaqukqswwgeqsa;
        ggkyameswcsquisg:
        return true;
        goto mwwimgssiegweqes;
        ykqeemyaewkmowyu:
        return false;
        goto comoigwsemiiwoks;
        mwwimgssiegweqes:
        cgewwoksiyocyiga:
        goto uqwoeksekoweiwke;
        usukksgaqiqwqeys:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto cmkiwqcgsmwyuggk;
        oagaqukqswwgeqsa:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\x6e\144\x65\170\102\x6f\x74"));
        goto ewuugiguuowassgm;
        ewuugiguuowassgm:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cgewwoksiyocyiga;
        }
        goto usukksgaqiqwqeys;
        comoigwsemiiwoks:
    }
    
    protected function wmcqkeiuewqameek()
    {
        goto ceycsuymgwmceuew;
        oouoqmemwouuymam:
        return true;
        goto kmokgyokoacsqkcg;
        cicagciwwymgewcm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto omkuusmocycoywqq;
        omkuusmocycoywqq:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ycuossoamymsusws;
        egsqiegeesaowyyo:
        $this->aasmeayouwmacaow(true);
        goto oouoqmemwouuymam;
        mkummeawiecmouws:
        seimmqskqimoouui:
        goto segicigoioeuyass;
        kmokgyokoacsqkcg:
        uioqqaiayukmemcg:
        goto mkummeawiecmouws;
        segicigoioeuyass:
        return false;
        goto uqqiokcseqswsgia;
        ygyacaeuykeookuw:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\131\x61\156\144\145\170\111\155\x61\147\145\122\x65\163\x69\172\145\x72"));
        goto ggaemwcyouewkgcm;
        ceycsuymgwmceuew:
        if (!(stripos($this->agent, "\131\x61\156\x64\145\170\111\155\141\147\x65\x52\x65\163\151\172\145\162") !== false)) {
            goto seimmqskqimoouui;
        }
        goto ygyacaeuykeookuw;
        ggaemwcyouewkgcm:
        if (!isset($yikciqwsimweauyg[1])) {
            goto uioqqaiayukmemcg;
        }
        goto cicagciwwymgewcm;
        ycuossoamymsusws:
        $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
        goto egsqiegeesaowyyo;
        uqqiokcseqswsgia:
    }
    
    protected function mwoogugykmiymmgy()
    {
        goto kmcewougmoaciyky;
        emiksyiouuqsigmq:
        return false;
        goto awasoqakauqikkya;
        aykkageemggigccw:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto ikwcwqmomksisice;
        ikwcwqmomksisice:
        $this->name = self::BROWSER_YANDEXCATALOG_BOT;
        goto ssayikwmgomomkkq;
        muwsmoccecigsoqc:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto aykkageemggigccw;
        ssayikwmgomomkkq:
        $this->aasmeayouwmacaow(true);
        goto cemqmygogskcoygo;
        cemqmygogskcoygo:
        return true;
        goto wwskqqaskwicmaay;
        iiswiwucogikyuse:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\145\170\x43\x61\164\x61\x6c\x6f\x67"));
        goto aqysowuwkoqgsoku;
        kmcewougmoaciyky:
        if (!(stripos($this->agent, "\131\141\x6e\144\x65\170\103\141\x74\x61\154\x6f\147") !== false)) {
            goto syumssoiimkseoum;
        }
        goto iiswiwucogikyuse;
        wwskqqaskwicmaay:
        yyacgikiikmoesek:
        goto koiysaseasuyieym;
        koiysaseasuyieym:
        syumssoiimkseoum:
        goto emiksyiouuqsigmq;
        aqysowuwkoqgsoku:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yyacgikiikmoesek;
        }
        goto muwsmoccecigsoqc;
        awasoqakauqikkya:
    }
    
    protected function qsemkkquagiaoioc()
    {
        goto yeequkyciegceoeo;
        wagiyaqsgwiqyaie:
        eykuqgakcouscsks:
        goto kicewoesgqwaasem;
        eicmoywsowuqoaou:
        $this->aasmeayouwmacaow(true);
        goto wokayyqugqaoewiy;
        yymkyucwwqwymsse:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto mscskuyuseuoqaqm;
        kicewoesgqwaasem:
        return false;
        goto kcakqaaesggwiooc;
        auomkekgcqwsmgqu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yymkyucwwqwymsse;
        ggiqousqgowseosg:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\144\145\x78\116\x65\x77\x73"));
        goto wyeguiaumcoesuiy;
        wyeguiaumcoesuiy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto sqimcsougcukocky;
        }
        goto auomkekgcqwsmgqu;
        kgskcgusosyauysg:
        sqimcsougcukocky:
        goto wagiyaqsgwiqyaie;
        mscskuyuseuoqaqm:
        $this->name = self::BROWSER_YANDEXNEWS_BOT;
        goto eicmoywsowuqoaou;
        yeequkyciegceoeo:
        if (!(stripos($this->agent, "\x59\141\156\144\145\x78\116\x65\x77\163") !== false)) {
            goto eykuqgakcouscsks;
        }
        goto ggiqousqgowseosg;
        wokayyqugqaoewiy:
        return true;
        goto kgskcgusosyauysg;
        kcakqaaesggwiooc:
    }
    
    protected function ksumscewmeyaocyy()
    {
        goto qwimoyomwmmwkucy;
        ackciywssqaumgac:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x6e\x64\x65\170\x4d\x65\x74\162\151\x6b\x61"));
        goto cwygwqacakmoesuw;
        qaiaymokiyasqmic:
        $this->aasmeayouwmacaow(true);
        goto eyyiqqumygsogaoq;
        skqkiegmwieyweww:
        uwiyeosqocyekygy:
        goto ousiwuqmksykqcec;
        cgiakccyuqqwmomc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iuumaowkqqsoicgy;
        iuumaowkqqsoicgy:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto awwiackkekswgamo;
        cwygwqacakmoesuw:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cwykioaoamgqueey;
        }
        goto cgiakccyuqqwmomc;
        eyyiqqumygsogaoq:
        return true;
        goto iskggyooogqgowys;
        ousiwuqmksykqcec:
        return false;
        goto kiqcuyecmyaegims;
        qwimoyomwmmwkucy:
        if (!(stripos($this->agent, "\131\141\x6e\x64\x65\170\x4d\145\x74\x72\151\x6b\x61") !== false)) {
            goto uwiyeosqocyekygy;
        }
        goto ackciywssqaumgac;
        iskggyooogqgowys:
        cwykioaoamgqueey:
        goto skqkiegmwieyweww;
        awwiackkekswgamo:
        $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
        goto qaiaymokiyasqmic;
        kiqcuyecmyaegims:
    }
    
    protected function qceuceikgwagccsq()
    {
        goto wesewyeqgccwmaos;
        wesewyeqgccwmaos:
        if (!(stripos($this->agent, "\131\141\156\144\145\x78\104\151\162\145\143\x74") !== false)) {
            goto yagmcusocgoqkewa;
        }
        goto aoeeywugooqmewcc;
        kuemgcgokyyggkoi:
        return true;
        goto eseawwcgusiywyge;
        yugqeemimuuqeucm:
        $this->aasmeayouwmacaow(true);
        goto kuemgcgokyyggkoi;
        caegiamkkykaqmqu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto comcaymsaykamcgi;
        }
        goto wykyuuuooigicwgs;
        skomukgmucsuaggq:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto essswiygiqegaayw;
        soeiamgkkekwcoss:
        yagmcusocgoqkewa:
        goto gugywasieysgmmyw;
        wykyuuuooigicwgs:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto skomukgmucsuaggq;
        gugywasieysgmmyw:
        return false;
        goto uaamscmwcmumgasy;
        aoeeywugooqmewcc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\x65\170\104\x69\x72\x65\x63\x74"));
        goto caegiamkkykaqmqu;
        essswiygiqegaayw:
        $this->name = self::BROWSER_YANDEXDIRECT_BOT;
        goto yugqeemimuuqeucm;
        eseawwcgusiywyge:
        comcaymsaykamcgi:
        goto soeiamgkkekwcoss;
        uaamscmwcmumgasy:
    }
    
    protected function ugaiaiamygwcwemg()
    {
        goto uewgegcascsimmaq;
        akeoiekwqqqgqamo:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto sqqqyyimyskaygea;
        squqowgmqgocyqmi:
        return true;
        goto qysommommieagsuw;
        gwokcyciswoaygie:
        $this->aasmeayouwmacaow(true);
        goto squqowgmqgocyqmi;
        wysmsmaeqiucoycu:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto akeoiekwqqqgqamo;
        sqqqyyimyskaygea:
        $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
        goto gwokcyciswoaygie;
        ikmicisyykkwmeso:
        return false;
        goto cyqyggywyykwqyak;
        aekaikwiqmuwwqia:
        suugmuecwqaakaoc:
        goto ikmicisyykkwmeso;
        qysommommieagsuw:
        qimcgqssayewaygw:
        goto aekaikwiqmuwwqia;
        kiaawmeeisegyugk:
        if (!isset($yikciqwsimweauyg[1])) {
            goto qimcgqssayewaygw;
        }
        goto wysmsmaeqiucoycu;
        uewgegcascsimmaq:
        if (!(stripos($this->agent, "\131\141\x6e\x64\145\x78\x57\x65\x62\155\x61\163\x74\145\x72") !== false)) {
            goto suugmuecwqaakaoc;
        }
        goto gcgwykikiomgmgqa;
        gcgwykikiomgmgqa:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\x6e\144\x65\170\127\x65\x62\155\141\163\x74\x65\162"));
        goto kiaawmeeisegyugk;
        cyqyggywyykwqyak:
    }
    
    protected function uuyiswoewekeauaw()
    {
        goto woikwmiiusqmoygy;
        eosuykwimywegmse:
        $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
        goto swuywmmasggeiqou;
        yakmisgikescmgoo:
        return false;
        goto aacosyksiacoaeig;
        woikwmiiusqmoygy:
        if (!(stripos($this->agent, "\x59\x61\156\x64\x65\x78\x46\x61\x76\151\x63\157\156\163") !== false)) {
            goto mkcsckwgisqasmao;
        }
        goto imsysaygciegsqok;
        imsysaygciegsqok:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\144\x65\x78\106\x61\x76\x69\143\x6f\x6e\x73"));
        goto mygsucymimsqmqky;
        ieycgksaoqioisky:
        osumgoskasckcieg:
        goto qigcoauseeigksyc;
        swuywmmasggeiqou:
        $this->aasmeayouwmacaow(true);
        goto ceugiycaewioseoe;
        uwemyeqsgcieyymm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto lhsckqwkqqauiqwy;
        mygsucymimsqmqky:
        if (!isset($yikciqwsimweauyg[1])) {
            goto osumgoskasckcieg;
        }
        goto uwemyeqsgcieyymm;
        ceugiycaewioseoe:
        return true;
        goto ieycgksaoqioisky;
        lhsckqwkqqauiqwy:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto eosuykwimywegmse;
        qigcoauseeigksyc:
        mkcsckwgisqasmao:
        goto yakmisgikescmgoo;
        aacosyksiacoaeig:
    }
    
    protected function eccwcswcuggacgua()
    {
        goto dqcamiqqkwiowaag;
        oameuaooiigaiucg:
        $this->name = self::BROWSER_YANDEXBLOGS_BOT;
        goto omccwaywmcmqksmq;
        sigosycgcicoiuuc:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\131\141\156\x64\x65\x78\102\154\157\147\163"));
        goto iycocuaeccqgyoia;
        iycocuaeccqgyoia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gwqqoewaikqqueoe;
        }
        goto ycyyicuqwqcyqeig;
        uaaiysoikgsuscqw:
        muyymwciiieqymqw:
        goto naiguckqsyeaesek;
        ycyyicuqwqcyqeig:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kccciwsgesamyyau;
        omccwaywmcmqksmq:
        $this->aasmeayouwmacaow(true);
        goto imkwmsokcecosyse;
        kccciwsgesamyyau:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto oameuaooiigaiucg;
        osuskyuuggamicou:
        gwqqoewaikqqueoe:
        goto uaaiysoikgsuscqw;
        dqcamiqqkwiowaag:
        if (!(stripos($this->agent, "\x59\141\x6e\x64\145\170\x42\x6c\157\147\x73") !== false)) {
            goto muyymwciiieqymqw;
        }
        goto sigosycgcicoiuuc;
        naiguckqsyeaesek:
        return false;
        goto eqqaouecoaseisgq;
        imkwmsokcecosyse:
        return true;
        goto osuskyuuggamicou;
        eqqaouecoaseisgq:
    }
    
    protected function aaseiwemciwamqqm()
    {
        goto kmayccieqkkiqicw;
        eiswwscyoaqoggge:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto qaqmwuwwqycmqkyg;
        eyogsqkuigcksouq:
        $this->aasmeayouwmacaow(true);
        goto gwkeoekmeeqmmwgy;
        iymeugimwgcywusq:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto eiswwscyoaqoggge;
        ukeksoegcoqokeik:
        suagmomycmooyggu:
        goto iigucumgucicccac;
        aikqumiqkkqaqgee:
        kqmkicwuyqakoika:
        goto ukeksoegcoqokeik;
        skqmieiumikceamg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kqmkicwuyqakoika;
        }
        goto iymeugimwgcywusq;
        iigucumgucicccac:
        return false;
        goto swusyoymaokumies;
        qaqmwuwwqycmqkyg:
        $this->name = self::BROWSER_YANDEXMEDIA_BOT;
        goto eyogsqkuigcksouq;
        umsckeuyiggsewac:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\x61\156\x64\x65\x78\115\145\x64\x69\141"));
        goto skqmieiumikceamg;
        gwkeoekmeeqmmwgy:
        return true;
        goto aikqumiqkkqaqgee;
        kmayccieqkkiqicw:
        if (!(stripos($this->agent, "\131\141\156\x64\145\x78\x4d\x65\144\151\x61") !== false)) {
            goto suagmomycmooyggu;
        }
        goto umsckeuyiggsewac;
        swusyoymaokumies:
    }
    
    protected function bgkmykkkkksumwea()
    {
        goto cmasgwmooaiccewo;
        uegccyuaemgmocgu:
        amcsamiamksyqmuq:
        goto iouecsmwqgaiycoq;
        qcwaessgikigogay:
        xwymaakqyeoqaams:
        goto uegccyuaemgmocgu;
        egemeuggwgwuayoi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto xwymaakqyeoqaams;
        }
        goto qqusymyoygwwueco;
        cyckkcksiwwqasio:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\x61\x6e\x64\145\x78\x56\x69\144\x65\x6f"));
        goto egemeuggwgwuayoi;
        wsqgykwqkgiwaksw:
        return true;
        goto qcwaessgikigogay;
        qqusymyoygwwueco:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iuoiiwaosgqoeask;
        giuuqwcsockoiqem:
        $this->name = self::BROWSER_YANDEXVIDEO_BOT;
        goto smqoegcueykkkiiq;
        smqoegcueykkkiiq:
        $this->aasmeayouwmacaow(true);
        goto wsqgykwqkgiwaksw;
        iuoiiwaosgqoeask:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto giuuqwcsockoiqem;
        iouecsmwqgaiycoq:
        return false;
        goto qqyasyisimsuyiiw;
        cmasgwmooaiccewo:
        if (!(stripos($this->agent, "\x59\141\156\144\x65\170\x56\151\x64\145\x6f") !== false)) {
            goto amcsamiamksyqmuq;
        }
        goto cyckkcksiwwqasio;
        qqyasyisimsuyiiw:
    }
    
    protected function sqawuqckmasomwiq()
    {
        goto ywiyqcgyoweomkqg;
        eeqgkcgywkwgmiyg:
        return true;
        goto cumwowkcomuigeag;
        ggawqqciikeiqiau:
        $this->name = self::BROWSER_YANDEXIMAGES_BOT;
        goto mucqymyysqeiaqwk;
        kyemcamscwoeeoiy:
        $this->aasasueowyemuyoc(str_replace("\73", '', $quiguswioiaaywey[0]));
        goto ggawqqciikeiqiau;
        qomyesuacseysugi:
        yeywuuiugmgeuygm:
        goto wsiqkesiecagcykw;
        cumwowkcomuigeag:
        geqcuwsuqymcqiou:
        goto qomyesuacseysugi;
        wsiqkesiecagcykw:
        return false;
        goto iawccecmgeaocqmg;
        mucqymyysqeiaqwk:
        $this->aasmeayouwmacaow(true);
        goto eeqgkcgywkwgmiyg;
        ywiyqcgyoweomkqg:
        if (!(stripos($this->agent, "\131\141\156\144\x65\x78\111\x6d\x61\147\x65\163") !== false)) {
            goto yeywuuiugmgeuygm;
        }
        goto gmgemamkswqeskmo;
        gmgemamkswqeskmo:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x59\141\156\x64\x65\x78\111\155\x61\x67\145\163"));
        goto gswsuaquqikkycwi;
        gswsuaquqikkycwi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto geqcuwsuqymcqiou;
        }
        goto eemgwkicuicwskms;
        eemgwkicuicwskms:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto kyemcamscwoeeoiy;
        iawccecmgeaocqmg:
    }
    
    protected function aeywoaukuwaeegku()
    {
        goto iskwcciiywiaamos;
        cyoymqqkgiumuegy:
        if (!isset($yikciqwsimweauyg[1])) {
            goto heakaosaewwowmcu;
        }
        goto fkcemcakyseoskmc;
        iskwcciiywiaamos:
        if (!(stripos($this->agent, "\x6d\163\x6e\x62\157\164") !== false)) {
            goto euyooyocyuucmmmc;
        }
        goto saaioyiceykemgas;
        quaugcgaccqksmmk:
        $this->aasmeayouwmacaow(true);
        goto oyqaeioosuiwoacw;
        saaioyiceykemgas:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\155\163\156\142\x6f\164"));
        goto cyoymqqkgiumuegy;
        wuqswaumkwuciiqi:
        euyooyocyuucmmmc:
        goto wmkoscqgkmsoasms;
        aucqaemoukqogokc:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto aekwmmmciucegyys;
        oyqaeioosuiwoacw:
        return true;
        goto omeekeuouqiieacw;
        wmkoscqgkmsoasms:
        return false;
        goto cecqqwuqeiccmmos;
        fkcemcakyseoskmc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto aucqaemoukqogokc;
        omeekeuouqiieacw:
        heakaosaewwowmcu:
        goto wuqswaumkwuciiqi;
        aekwmmmciucegyys:
        $this->name = self::BROWSER_MSNBOT;
        goto quaugcgaccqksmmk;
        cecqqwuqeiccmmos:
    }
    
    protected function qaigygakimuucuki()
    {
        goto mywassaguwommoyg;
        mywassaguwommoyg:
        if (!(stripos($this->agent, "\142\x69\x6e\147\142\x6f\164") !== false)) {
            goto aisgmewqismsouqm;
        }
        goto mgsyyameesskqgsk;
        oasoyuckmqumgwwy:
        yksumiuqcoggugea:
        goto ucugysauicuskega;
        caumawwwskkoekcw:
        $this->name = self::BROWSER_BINGBOT;
        goto gciueqsqsgcekwae;
        ucugysauicuskega:
        aisgmewqismsouqm:
        goto kaiekqyukykoqiwa;
        cwmwkkauqqusccgs:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto isowmaawkwmkcgmo;
        gciueqsqsgcekwae:
        $this->aasmeayouwmacaow(true);
        goto ggyweqemgcmwwwgu;
        kaiekqyukykoqiwa:
        return false;
        goto eayemqoaewmasoos;
        mgsyyameesskqgsk:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x62\x69\x6e\x67\142\157\164"));
        goto wsgcyguocqmgccks;
        isowmaawkwmkcgmo:
        $this->aasasueowyemuyoc(str_replace("\x3b", '', $quiguswioiaaywey[0]));
        goto caumawwwskkoekcw;
        ggyweqemgcmwwwgu:
        return true;
        goto oasoyuckmqumgwwy;
        wsgcyguocqmgccks:
        if (!isset($yikciqwsimweauyg[1])) {
            goto yksumiuqcoggugea;
        }
        goto cwmwkkauqqusccgs;
        eayemqoaewmasoos:
    }
    
    protected function ykyiqmysgemoaakw()
    {
        goto ucwwsimgkkgymqwm;
        eikeicmemcaswgaq:
        qacccgcuwysswgqk:
        goto wisaskaqkeaqaymk;
        wisaskaqkeaqaymk:
        
        $eaogoiscgwgmugsq = str_replace("\127\x33\x43\137\126\141\154\x69\x64\x61\164\x6f\162\40", "\x57\63\103\x5f\126\x61\154\x69\x64\x61\x74\157\162\x2f", $this->agent);
        goto wmigsokoiegiocys;
        wmquwikmuiskcucm:
        qquioqqwmiuemaaw:
        goto ymmgwsqqoskmaags;
        wqcseegakwamkcca:
        $this->eywockmuswoykooc(true);
        goto yeyoqmmeeuqucmky;
        mecmyqgsmiuesukw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ouaywweeyqecagmc;
        aayyiwqgkqkkckeg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto wimcmomumakqcikc;
        }
        goto mwoaykewsqmiikum;
        gyswaoawqisgeiac:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\127\x33\103\55\x63\150\x65\x63\x6b\x6c\x69\156\153"));
        goto aayyiwqgkqkkckeg;
        mwoaykewsqmiikum:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iammckaiicmaeweq;
        yeyoqmmeeuqucmky:
        return true;
        goto wmquwikmuiskcucm;
        wuasiiywuycmkusq:
        wimcmomumakqcikc:
        goto ygagqkmcasesqcui;
        kuimcqawqqqgcoqs:
        ucgecsiyweweymqw:
        goto osyoqauakmkoaigc;
        mieyqmckqkqaoygo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto gccyyceaqackqsec;
        }
        goto kwkeisysqagyioig;
        wyqswauigsseskum:
        gukkaysgawyusckc:
        goto gyswaoawqisgeiac;
        kmawaeioomkgqkqe:
        gccyyceaqackqsec:
        goto ngkomagwskmkmcuc;
        cuaueyackcccuamq:
        if (stripos($this->agent, "\x57\x33\103\55\155\x6f\x62\151\x6c\145\x4f\x4b") !== false) {
            goto ucgecsiyweweymqw;
        }
        goto oaaqgeqiwsykukeg;
        wkaeeqagowygkuya:
        return true;
        goto wuasiiywuycmkusq;
        ygagqkmcasesqcui:
        goto qquioqqwmiuemaaw;
        goto eikeicmemcaswgaq;
        ymmgwsqqoskmaags:
        return false;
        goto suaeioykcscoamsi;
        kwkeisysqagyioig:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto mecmyqgsmiuesukw;
        iammckaiicmaeweq:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto eiuwyaccguegyckc;
        gogqmaoyqeoscico:
        return true;
        goto kmawaeioomkgqkqe;
        ngkomagwskmkmcuc:
        goto qquioqqwmiuemaaw;
        goto kuimcqawqqqgcoqs;
        ouaywweeyqecagmc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto gogqmaoyqeoscico;
        ucwwsimgkkgymqwm:
        if (stripos($this->agent, "\127\x33\x43\x2d\x63\150\145\143\153\x6c\x69\156\x6b") !== false) {
            goto gukkaysgawyusckc;
        }
        goto syoagkqccoyegkac;
        syoagkqccoyegkac:
        if (stripos($this->agent, "\x57\63\103\137\126\x61\x6c\x69\x64\141\164\157\162") !== false) {
            goto qacccgcuwysswgqk;
        }
        goto cuaueyackcccuamq;
        osyoqauakmkoaigc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto wqcseegakwamkcca;
        wmigsokoiegiocys:
        $yikciqwsimweauyg = explode("\x2f", stristr($eaogoiscgwgmugsq, "\127\x33\x43\137\x56\x61\x6c\151\144\141\164\157\x72"));
        goto mieyqmckqkqaoygo;
        eiuwyaccguegyckc:
        $this->name = self::BROWSER_W3CVALIDATOR;
        goto wkaeeqagowygkuya;
        oaaqgeqiwsykukeg:
        goto qquioqqwmiuemaaw;
        goto wyqswauigsseskum;
        suaeioykcscoamsi:
    }
    
    protected function cimegwusqouswgao()
    {
        goto mksgaooiuiymkkac;
        waauqgswsiesowse:
        $this->eywockmuswoykooc(false);
        goto wqwqukkyascugisy;
        yuueeqwwgggeycog:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto qccmiyoiqguwmqug;
        mksgaooiuiymkkac:
        if (!(stripos($this->agent, "\163\154\x75\x72\160") !== false)) {
            goto gggsgesuicesmqya;
        }
        goto cqmkeoyaqqoykcyu;
        wqwqukkyascugisy:
        return true;
        goto ecyoakcmqwaksmms;
        okyykeecayqaccik:
        gggsgesuicesmqya:
        goto wqgwmgkmeiewmwsm;
        wqgwmgkmeiewmwsm:
        return false;
        goto cugwcccamcyuksgk;
        ecyoakcmqwaksmms:
        ukoqoieuoigccaoi:
        goto okyykeecayqaccik;
        kiqkwuaswsmkigok:
        $this->name = self::BROWSER_SLURP;
        goto yieciwkqiqgceuya;
        qccmiyoiqguwmqug:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kiqkwuaswsmkigok;
        yieciwkqiqgceuya:
        $this->aasmeayouwmacaow(true);
        goto waauqgswsiesowse;
        ueyiaawciiimcmia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ukoqoieuoigccaoi;
        }
        goto yuueeqwwgggeycog;
        cqmkeoyaqqoykcyu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\154\x75\x72\x70"));
        goto ueyiaawciiimcmia;
        cugwcccamcyuksgk:
    }
    
    protected function gggwayigqkokeigi()
    {
        goto aouymgmkkcaaymky;
        egsiwgciqqkwecuy:
        if (stripos($this->agent, "\40\102\162\141\x76\145\x20") !== false) {
            goto gqogwsuwyiouywcy;
        }
        goto escsoaemgioqgqso;
        aouymgmkkcaaymky:
        if (stripos($this->agent, "\x42\162\x61\166\x65\x2f") !== false) {
            goto yuosayyyyemookmi;
        }
        goto egsiwgciqqkwecuy;
        soiguuywuqqisowg:
        return false;
        goto gqmiumskekekmaks;
        ymmyqwqggkuwimiw:
        return true;
        goto oqkyykockmuiaycc;
        hiuqggmuisuaaksw:
        return true;
        goto uiyscqcowgeaeoco;
        ayikwkmouqocqoya:
        $quiguswioiaaywey = explode("\x20", $uuygmciickwewegw[1]);
        goto wsuauiewqimocoes;
        uiyscqcowgeaeoco:
        sieeqakumiscuwmy:
        goto soiguuywuqqisowg;
        wsuauiewqimocoes:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oemaagemmycueycs;
        ikqqmyoegaeocwqw:
        
        
        $this->aasasueowyemuyoc('');
        goto hiuqggmuisuaaksw;
        egeecgiwycoqsgqm:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ikqqmyoegaeocwqw;
        aygyqqwyyugyoakg:
        gqogwsuwyiouywcy:
        goto egeecgiwycoqsgqm;
        ywwgsgiqkuwwuwas:
        if (!isset($uuygmciickwewegw[1])) {
            goto yqswiyiomsgeayiw;
        }
        goto ayikwkmouqocqoya;
        uugykecieoomuygs:
        goto sieeqakumiscuwmy;
        goto aygyqqwyyugyoakg;
        oqkyykockmuiaycc:
        yqswiyiomsgeayiw:
        goto uugykecieoomuygs;
        gumousymsmeugmsm:
        yuosayyyyemookmi:
        goto egaiuisgeekasiow;
        oemaagemmycueycs:
        $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
        goto ymmyqwqggkuwimiw;
        escsoaemgioqgqso:
        goto sieeqakumiscuwmy;
        goto gumousymsmeugmsm;
        egaiuisgeekasiow:
        $uuygmciickwewegw = explode("\57", stristr($this->agent, "\x42\162\141\166\145"));
        goto ywwgsgiqkuwwuwas;
        gqmiumskekekmaks:
    }
    
    protected function makyeuicweuowumi()
    {
        goto weygkwekqawoowyq;
        iuiusomcwkaiksyq:
        aoueegmsgkeokaoq:
        goto weuwgyoweusiaweq;
        ykoqgweokgwkcawk:
        return false;
        goto iqugwmioumykkagm;
        icmmwweaumcckgam:
        $this->eywockmuswoykooc(true);
        goto aisaywmsiigsegso;
        sioosmeyiqmscmkc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iicgycsecmaeqqcg;
        wwaoocgeiyswqwow:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x45\144\x67\x65"));
        goto mcuiomgoamywqgya;
        wssaokwkycsqqumw:
        return true;
        goto iuiusomcwkaiksyq;
        aisaywmsiigsegso:
        acsqgoigqaiqiwaw:
        goto wssaokwkycsqqumw;
        uomswgeawseimkou:
        $this->ikciowomiysyewgc(self::BROWSER_EDGE);
        goto yiiaqacikommoaoy;
        iicgycsecmaeqqcg:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto uomswgeawseimkou;
        yiiaqacikommoaoy:
        if (!(stripos($this->agent, "\127\x69\x6e\x64\x6f\167\x73\40\120\150\157\x6e\x65") !== false || stripos($this->agent, "\101\156\x64\162\x6f\x69\x64") !== false)) {
            goto acsqgoigqaiqiwaw;
        }
        goto icmmwweaumcckgam;
        weygkwekqawoowyq:
        if (!(stripos($this->agent, "\x45\x64\x67\145\x2f") !== false)) {
            goto wmuqesieiugiquks;
        }
        goto wwaoocgeiyswqwow;
        weuwgyoweusiaweq:
        wmuqesieiugiquks:
        goto ykoqgweokgwkcawk;
        mcuiomgoamywqgya:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aoueegmsgkeokaoq;
        }
        goto sioosmeyiqmscmkc;
        iqugwmioumykkagm:
    }
    
    protected function cgequousmqakcios()
    {
        goto oqkkssoawygysqmq;
        ciymuigaugeiouic:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto sosikmkcuygeukyo;
        qmkkwkqieggiyamm:
        $this->eywockmuswoykooc(true);
        goto eamumkggcmyaosco;
        ecuoemaqoeosiase:
        $this->aasasueowyemuyoc("\61\x2e\65");
        goto aecsciyiseuamymy;
        oqkkssoawygysqmq:
        if (stripos($this->agent, "\124\162\151\144\x65\x6e\x74\57\x37\x2e\x30\x3b\40\162\166\72\61\61\56\60") !== false) {
            goto imiuwwuwwyqigmou;
        }
        goto yioasqegwkugoqag;
        yioasqegwkugoqag:
        if (stripos($this->agent, "\x6d\x69\x63\x72\x6f\x73\157\x66\x74\x20\151\156\164\x65\x72\156\145\164\40\x65\170\x70\154\x6f\x72\145\162") !== false) {
            goto iqgasessakaoieuw;
        }
        goto waqsamacggacoaye;
        cmcisgcoaouauymu:
        if (!isset($sogksuscggsicmac[1])) {
            goto sqcqqsocqymmgwcq;
        }
        goto camscswqceqycmke;
        megqkiykgiamgmsk:
        sqcqqsocqymmgwcq:
        goto ccyiuskguauimqee;
        kigaqwsiuygysecu:
        $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
        goto qgagcuckouyuyuss;
        gygwagcmmmaioikw:
        iqgasessakaoieuw:
        goto mkimssyoqguuowky;
        kwumsouwywsqkmci:
        $this->aasasueowyemuyoc("\61\61\x2e\60");
        goto qmckmkykmyucosyq;
        qeimskmimouyssgu:
        goto oscemsgoyimocqei;
        goto csecmagoocuukewm;
        ogeakuasmaemuwga:
        imiuwwuwwyqigmou:
        goto wiawimwuykuugcwi;
        myksiemsskucuyac:
        goto oscemsgoyimocqei;
        goto gygwagcmmmaioikw;
        camscswqceqycmke:
        $this->aasasueowyemuyoc(preg_replace("\57\x5b\x5e\x30\x2d\x39\56\x5d\53\x2f", '', $sogksuscggsicmac[1]));
        goto yukycgouyuqkmaok;
        iaiewssiomowoyas:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\73", "\73\x20", $this->agent), "\x6d\x73\151\145"));
        goto gsuacqigwaigyaia;
        ewasqwuscwkeuuyi:
        return false;
        goto wskkwyoiugucwwua;
        sggyugwiuggaaqyo:
        segewkgiakaqsgoc:
        goto mwauqumigegcywiw;
        sgwwscoqkcuoqqsg:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ucuiqegmmogyasmw;
        }
        goto kigaqwsiuygysecu;
        ysamigeqeyqgiwcs:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto sggyugwiuggaaqyo;
        sosikmkcuygeukyo:
        $this->aasasueowyemuyoc(str_replace(["\50", "\x29", "\73"], '', $yikciqwsimweauyg[1]));
        goto kwgkaeyusoekmway;
        omeswwygqyeqyqmw:
        oeiiuoikyagkmyqa:
        goto uecqmukyqqgyoegy;
        yukycgouyuqkmaok:
        $this->agent = str_replace(["\115\x6f\x7a\151\154\154\x61", "\x47\145\143\153\x6f"], "\x4d\x53\111\105", $this->agent);
        goto megqkiykgiamgmsk;
        wiawimwuykuugcwi:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto kwumsouwywsqkmci;
        ckmosuuwagciuwmw:
        if (stripos($this->agent, "\x6d\x73\160\151\x65") !== false || stripos($this->agent, "\x70\x6f\x63\x6b\145\164") !== false) {
            goto osewecweiaekeoou;
        }
        goto iuiyyuwauoowkgeg;
        gmiyusqaiqaaakkk:
        $quiguswioiaaywey = explode("\x2f", $this->agent);
        goto umimoqmwoeecysqi;
        oyykmqismqsyaaus:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\x6d\x73\x70\x69\x65"));
        goto sgwwscoqkcuoqqsg;
        mkimssyoqguuowky:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto aqcqeucsaaeuiwqa;
        oiksgywwsqweoeai:
        if (stripos($this->agent, "\x74\162\x69\144\145\x6e\164") !== false) {
            goto okicguwqeyiuywos;
        }
        goto ckmosuuwagciuwmw;
        mwauqumigegcywiw:
        goto iamckkumoomyeoum;
        goto omeswwygqyeqyqmw;
        gikcoemsgecyasqe:
        eewmcuekysqqkeey:
        goto gkgwqoquqekiayus;
        kwyiuyoeysqeywmm:
        return true;
        goto uoyuiiauquiwgasu;
        oawogoiagossceii:
        $yikciqwsimweauyg = stristr($this->agent, "\x2f");
        goto ouecqyewekugmwkm;
        iuiyyuwauoowkgeg:
        goto oscemsgoyimocqei;
        goto ogeakuasmaemuwga;
        uecqmukyqqgyoegy:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto gyqcauemgkuwquua;
        csecmagoocuukewm:
        sykosugesqqqqyey:
        goto ggakkmokkykkqawi;
        aqcqeucsaaeuiwqa:
        $this->aasasueowyemuyoc("\x31\56\x30");
        goto oawogoiagossceii;
        uoyuiiauquiwgasu:
        ucuiqegmmogyasmw:
        goto muaiioeaoiqiogie;
        ocsoakwgmmwsekyi:
        goto oscemsgoyimocqei;
        goto qmywsksagymugcou;
        owcekoqmukawoeao:
        $yikciqwsimweauyg = explode("\x20", stristr(str_replace("\x3b", "\x3b\x20", $this->agent), "\115\123\x4e"));
        goto ymgeisswqiucoaas;
        qmywsksagymugcou:
        okicguwqeyiuywos:
        goto qsqgkiyigokqcioe;
        wwckusqkukciicei:
        $sogksuscggsicmac = explode("\x72\x76\x3a", $this->agent);
        goto cmcisgcoaouauymu;
        umimoqmwoeecysqi:
        if (!isset($quiguswioiaaywey[1])) {
            goto segewkgiakaqsgoc;
        }
        goto ysamigeqeyqgiwcs;
        oqymsqskimoyuyye:
        osewecweiaekeoou:
        goto oyykmqismqsyaaus;
        ouecqyewekugmwkm:
        if (!preg_match("\57\63\x30\70\174\x34\x32\65\x7c\64\x32\66\174\x34\67\x34\x7c\x30\142\61\x2f\151", $yikciqwsimweauyg)) {
            goto fkuiuosooquwmkoi;
        }
        goto ecuoemaqoeosiase;
        ymgeisswqiucoaas:
        if (!isset($yikciqwsimweauyg[1])) {
            goto eewmcuekysqqkeey;
        }
        goto wucmiaeomamqgqes;
        waqsamacggacoaye:
        if (stripos($this->agent, "\x6d\163\x69\x65") !== false && stripos($this->agent, "\157\x70\145\162\x61") === false) {
            goto sykosugesqqqqyey;
        }
        goto oiksgywwsqweoeai;
        qsqgkiyigokqcioe:
        $this->ikciowomiysyewgc(self::BROWSER_IE);
        goto wwckusqkukciicei;
        wuismmmeeqkiowua:
        return true;
        goto gikcoemsgecyasqe;
        qgagcuckouyuyuss:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto qmkkwkqieggiyamm;
        gsuacqigwaigyaia:
        if (!isset($yikciqwsimweauyg[1])) {
            goto mqigmosuikyaaamk;
        }
        goto ciymuigaugeiouic;
        asoiigkaqcguaioi:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\51", "\73"], '', $yikciqwsimweauyg[1]));
        goto wuismmmeeqkiowua;
        ccyiuskguauimqee:
        goto oscemsgoyimocqei;
        goto oqymsqskimoyuyye;
        muaiioeaoiqiogie:
        oscemsgoyimocqei:
        goto ewasqwuscwkeuuyi;
        gaccwqquykeauumg:
        meqqkyuusamyauyc:
        goto sqikwaiakyissigo;
        sqikwaiakyissigo:
        return true;
        goto yeagcqwaoeskgqmg;
        aecsciyiseuamymy:
        fkuiuosooquwmkoi:
        goto guiqaqkuywsmqcoc;
        eamumkggcmyaosco:
        if (stripos($this->agent, "\x6d\x73\160\151\145") !== false) {
            goto oeiiuoikyagkmyqa;
        }
        goto gmiyusqaiqaaakkk;
        uckgesmigkiyqyck:
        $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
        goto pwgwmqwuoqysukeo;
        wucmiaeomamqgqes:
        $this->ikciowomiysyewgc(self::BROWSER_MSN);
        goto asoiigkaqcguaioi;
        yeagcqwaoeskgqmg:
        mqigmosuikyaaamk:
        goto ocsoakwgmmwsekyi;
        gyqcauemgkuwquua:
        iamckkumoomyeoum:
        goto kwyiuyoeysqeywmm;
        guiqaqkuywsmqcoc:
        return true;
        goto qeimskmimouyssgu;
        ggakkmokkykkqawi:
        
        if (!(stripos($this->agent, "\155\x73\x6e\x62") !== false)) {
            goto gggamqmqusyimaky;
        }
        goto owcekoqmukawoeao;
        kwgkaeyusoekmway:
        if (!(stripos($this->agent, "\x49\105\x4d\x6f\x62\151\154\145") !== false)) {
            goto meqqkyuusamyauyc;
        }
        goto uckgesmigkiyqyck;
        qmckmkykmyucosyq:
        return true;
        goto myksiemsskucuyac;
        pwgwmqwuoqysukeo:
        $this->eywockmuswoykooc(true);
        goto gaccwqquykeauumg;
        gkgwqoquqekiayus:
        gggamqmqusyimaky:
        goto iaiewssiomowoyas;
        wskkwyoiugucwwua:
    }
    
    protected function eqqcucwcgwqiogik()
    {
        goto ckiggmwimwykqyee;
        myymisiqiwiqymuu:
        if (!(stripos($this->agent, "\x4d\157\x62\x69\154\x65") !== false)) {
            goto sckcaoikwggaoiqm;
        }
        goto eaicyuessygcyuqu;
        omggicgmwyakocik:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\160\145\162\141"));
        goto sqicocysoqwcgasq;
        wyagecywqcysyyae:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kekkyamkouwoiyyi;
        kmmsoqcgiyougqqy:
        owgoagmssqsysiyq:
        goto ygqkqwkyoosgomug;
        oesqmiaisaqseigm:
        if (preg_match("\x2f\126\145\x72\x73\151\x6f\x6e\134\57\50\61\x2a\56\52\x29\x24\57", $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
            goto zkoqiugkkemmwqeq;
        }
        goto kmyoqookuiyomeec;
        qwwigmoeocgyqyuy:
        goto aaumqogegyqosuiq;
        goto oeeccicqsoiyqcig;
        uksaceogcmuacumi:
        $cgkyugweawsewkuu = stristr($this->agent, "\117\120\x52");
        goto ieuewgsuqywiuuki;
        agasiekywmaokckg:
        return true;
        goto qwwigmoeocgyqyuy;
        sikkakqouqeckesc:
        sckcaoikwggaoiqm:
        goto aqwaemcyooumguou;
        kwemswkcueagmssu:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto mayucqimkiskmcms;
        yiomssmosemcckmc:
        $this->eywockmuswoykooc(true);
        goto uuamswicsoyuguug;
        syawcymwokyaqeck:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto qskwqqamoqekaqum;
        coeaoweyqagqsoqq:
        $this->name = self::BROWSER_OPERA_MINI;
        goto goowmysscaoakuma;
        iqkkuesiuysywyag:
        goto aaumqogegyqosuiq;
        goto swasyyuiyouasyqy;
        micqaoiiquokaqmw:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wyagecywqcysyyae;
        eaicyuessygcyuqu:
        $this->eywockmuswoykooc(true);
        goto sikkakqouqeckesc;
        kiykgaeecsuoegei:
        aaumqogegyqosuiq:
        goto cuyagmoysmwoceks;
        sqicocysoqwcgasq:
        $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
        goto awiqeeiewssogaaq;
        ygwwwwcgiwmcakmi:
        return true;
        goto uuiioegocmmcqgwq;
        usycoqawsmoaqewm:
        if (stripos($this->agent, "\157\160\145\162\x61") !== false) {
            goto yueaaaoockqicmwq;
        }
        goto igesuquikuwmsywg;
        yaeowwmkcuqmesau:
        if (!isset($yikciqwsimweauyg[1])) {
            goto owgoagmssqsysiyq;
        }
        goto kkumemicscqeqawi;
        oeeccicqsoiyqcig:
        gocgaeomskmyyuaq:
        goto uksaceogcmuacumi;
        uasakawygcqkquuy:
        ouqiiwuqeoegciso:
        goto myymisiqiwiqymuu;
        wkgugqyackgiowas:
        goto qkmucouuqggkwssg;
        goto goiegscqgcukimys;
        aqwaemcyooumguou:
        $this->name = self::BROWSER_OPERA;
        goto asgwqocgsuugguse;
        kwaiiaowwykksgcw:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\160\145\162\x61");
        goto oesqmiaisaqseigm;
        iuiickwiuccmyiey:
        if (!(stripos($this->agent, "\117\160\x65\162\x61\40\x4d\157\x62\x69") !== false)) {
            goto iseeayqyeoawwmwc;
        }
        goto yiomssmosemcckmc;
        asgwqocgsuugguse:
        return true;
        goto kiykgaeecsuoegei;
        qousyksekeougumo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cyikciomyweygykm;
        }
        goto micqaoiiquokaqmw;
        occyqeeyumwaygik:
        $yikciqwsimweauyg = explode("\x2f", $cgkyugweawsewkuu);
        goto yaeowwmkcuqmesau;
        eismimkcoiokucom:
        zkoqiugkkemmwqeq:
        goto sooawcagkoismuqa;
        msccquimgomummck:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto kmmsoqcgiyougqqy;
        kkumemicscqeqawi:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto msccquimgomummck;
        awiqeeiewssogaaq:
        goto usoiismiikooagme;
        goto eismimkcoiokucom;
        eqiygsagygouqkyy:
        if (preg_match("\x2f\x5c\x2f\57", $cgkyugweawsewkuu)) {
            goto qymmimiisagiymuy;
        }
        goto gcasowsewwisgqwc;
        igesuquikuwmsywg:
        if (stripos($this->agent, "\x4f\x50\122") !== false) {
            goto gocgaeomskmyyuaq;
        }
        goto iqkkuesiuysywyag;
        kqggyaomgmqyicmc:
        $this->name = self::BROWSER_OPERA;
        goto agasiekywmaokckg;
        qsaiiuqwimiqiwyc:
        ycsuqaygaisskkeq:
        goto wkgugqyackgiowas;
        mgsmmaqqkusaaqew:
        soacqquaasiggock:
        goto kwemswkcueagmssu;
        ckiggmwimwykqyee:
        if (stripos($this->agent, "\x6f\x70\145\162\141\x20\x6d\x69\156\x69") !== false) {
            goto umaimowkyaemisiq;
        }
        goto usycoqawsmoaqewm;
        gcasowsewwisgqwc:
        $quiguswioiaaywey = explode("\x20", stristr($cgkyugweawsewkuu, "\x6f\160\145\x72\x61\40\x6d\151\x6e\151"));
        goto ieysgookkakiiuoo;
        aykuikogcgweeoio:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto qsaiiuqwimiqiwyc;
        akmiwammkswkmyio:
        $cgkyugweawsewkuu = stristr($this->agent, "\157\160\145\x72\x61\40\155\x69\x6e\151");
        goto eqiygsagygouqkyy;
        ieysgookkakiiuoo:
        if (!isset($quiguswioiaaywey[1])) {
            goto ycsuqaygaisskkeq;
        }
        goto aykuikogcgweeoio;
        eoeoikgkiuewagwg:
        goto usoiismiikooagme;
        goto mgsmmaqqkusaaqew;
        kekkyamkouwoiyyi:
        cyikciomyweygykm:
        goto uasakawygcqkquuy;
        goiegscqgcukimys:
        qymmimiisagiymuy:
        goto occyqeeyumwaygik;
        sooawcagkoismuqa:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto eoeoikgkiuewagwg;
        ieuewgsuqywiuuki:
        if (!preg_match("\x2f\x5c\57\57", $cgkyugweawsewkuu)) {
            goto ouqiiwuqeoegciso;
        }
        goto wysmuiaeuqqaycig;
        ygqkqwkyoosgomug:
        qkmucouuqggkwssg:
        goto coeaoweyqagqsoqq;
        kmyoqookuiyomeec:
        if (preg_match("\57\134\x2f\57", $cgkyugweawsewkuu)) {
            goto soacqquaasiggock;
        }
        goto omggicgmwyakocik;
        swasyyuiyouasyqy:
        umaimowkyaemisiq:
        goto akmiwammkswkmyio;
        goowmysscaoakuma:
        $this->eywockmuswoykooc(true);
        goto ygwwwwcgiwmcakmi;
        uuamswicsoyuguug:
        iseeayqyeoawwmwc:
        goto kqggyaomgmqyicmc;
        qskwqqamoqekaqum:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ameqasmessgyycqq;
        mayucqimkiskmcms:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ycsqoemcioqgscik;
        }
        goto syawcymwokyaqeck;
        uuiioegocmmcqgwq:
        goto aaumqogegyqosuiq;
        goto yygugwkyoeackami;
        yygugwkyoeackami:
        yueaaaoockqicmwq:
        goto kwaiiaowwykksgcw;
        ameqasmessgyycqq:
        ycsqoemcioqgscik:
        goto isucaqumoqgykqig;
        isucaqumoqgykqig:
        usoiismiikooagme:
        goto iuiickwiuccmyiey;
        wysmuiaeuqqaycig:
        $yikciqwsimweauyg = explode("\x2f", str_replace("\50", "\40", $cgkyugweawsewkuu));
        goto qousyksekeougumo;
        cuyagmoysmwoceks:
        return false;
        goto amecoaswmoqigiku;
        amecoaswmoqigiku:
    }
    
    protected function oomiyiuwesyuegws()
    {
        goto iggqqqegoegigyii;
        ieeieiuoeqquyaka:
        $this->icigyueiiwsukmsu(true);
        goto qakmsceesmcwecmo;
        wmcauamwimsyiauk:
        csguwgocosyisgyq:
        goto mmowusaeqemsisiq;
        sackmgaomiwgeqca:
        $yikciqwsimweauyg = preg_split("\x2f\133\x5c\57\73\135\53\x2f", stristr($this->agent, "\103\x68\162\157\155\x65"));
        goto uiuyiuiocgycwaae;
        ckgikcyggaegucyk:
        uqsmiiqigeisoyse:
        goto coyegiuygcqwmaqc;
        wskewcieqoqiuoui:
        return true;
        goto ggiacqackmguiiki;
        qwiwywqwmmciwiea:
        
        if (!(stripos($this->agent, "\x41\156\144\162\x6f\151\144") !== false)) {
            goto eoueymmeawwwswwq;
        }
        goto oucqmskiygmmsmye;
        uqqaaeqoykgcakec:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto qwiwywqwmmciwiea;
        scimuugawiiuemki:
        $this->eywockmuswoykooc(true);
        goto wmcauamwimsyiauk;
        coyegiuygcqwmaqc:
        return false;
        goto eukqocmusiasmewe;
        oucqmskiygmmsmye:
        if (stripos($this->agent, "\115\157\x62\151\x6c\x65") !== false) {
            goto fwqikeoyaewusiym;
        }
        goto ieeieiuoeqquyaka;
        iggqqqegoegigyii:
        if (!(stripos($this->agent, "\103\x68\x72\x6f\x6d\145") !== false)) {
            goto uqsmiiqigeisoyse;
        }
        goto sackmgaomiwgeqca;
        isgqqmaauckagsao:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto uqqaaeqoykgcakec;
        uyeiymmkkiyccakm:
        fwqikeoyaewusiym:
        goto scimuugawiiuemki;
        smsuqgcummiyucsc:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto isgqqmaauckagsao;
        uiuyiuiocgycwaae:
        if (!isset($yikciqwsimweauyg[1])) {
            goto cqcomacmwgougkai;
        }
        goto smsuqgcummiyucsc;
        ggiacqackmguiiki:
        cqcomacmwgougkai:
        goto ckgikcyggaegucyk;
        mmowusaeqemsisiq:
        eoueymmeawwwswwq:
        goto wskewcieqoqiuoui;
        qakmsceesmcwecmo:
        goto csguwgocosyisgyq;
        goto uyeiymmkkiyccakm;
        eukqocmusiasmewe:
    }
    
    protected function maowoygwywiawwyc()
    {
        goto sciiwomqgcamicqs;
        kywqmsqusiysywqe:
        usmucisyagswyysu:
        goto swkkeqmaqugwiysy;
        yscyooysgqsyuayo:
        if (!isset($yikciqwsimweauyg[1])) {
            goto usmucisyagswyysu;
        }
        goto ssoogugiigiqooce;
        swkkeqmaqugwiysy:
        wawimucmukumkuca:
        goto csoomgiiyysqmeku;
        mseowikguuikkiys:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ageemsqieiqyqwag;
        eiosgmsukekekyou:
        return true;
        goto kywqmsqusiysywqe;
        ageemsqieiqyqwag:
        $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
        goto eiosgmsukekekyou;
        ssoogugiigiqooce:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto mseowikguuikkiys;
        sciiwomqgcamicqs:
        if (!(stripos($this->agent, "\x77\145\142\164\166") !== false)) {
            goto wawimucmukumkuca;
        }
        goto aiaaaesgesgwsuck;
        csoomgiiyysqmeku:
        return false;
        goto ukkkmakiisiqkacm;
        aiaaaesgesgwsuck:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\167\145\142\164\x76"));
        goto yscyooysgqsyuayo;
        ukkkmakiisiqkacm:
    }
    
    protected function momgeesgauwmqaks()
    {
        goto uggmmsuyiiyuaeic;
        akmiwuwwkeokegkq:
        mukwaeyamkyacewo:
        goto oqyumeoumucciuao;
        cemwkemiwicagmou:
        if (!isset($yikciqwsimweauyg[1])) {
            goto mukwaeyamkyacewo;
        }
        goto uowyeayyimmqogge;
        gouyqmyakowooiyw:
        return false;
        goto eyuieiqqgyowoocu;
        ocisosooggaaueii:
        $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
        goto uuimoqmwywkkaygo;
        uowyeayyimmqogge:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wkasucgiaeogugcw;
        wkasucgiaeogugcw:
        $this->aasasueowyemuyoc(str_replace(["\x28", "\x29", "\73"], '', $quiguswioiaaywey[0]));
        goto ocisosooggaaueii;
        cyaaugsakiugouae:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\116\145\164\120\157\x73\x69\x74\x69\166\145"));
        goto cemwkemiwicagmou;
        uuimoqmwywkkaygo:
        return true;
        goto akmiwuwwkeokegkq;
        uggmmsuyiiyuaeic:
        if (!(stripos($this->agent, "\x4e\x65\164\x50\x6f\163\x69\x74\151\166\x65") !== false)) {
            goto gocmokqaeqkqcmma;
        }
        goto cyaaugsakiugouae;
        oqyumeoumucciuao:
        gocmokqaeqkqcmma:
        goto gouyqmyakowooiyw;
        eyuieiqqgyowoocu:
    }
    
    protected function usswyskeuiskccki()
    {
        goto ycaooqesseeagoka;
        ggaoikewqkecamgs:
        if (!isset($quiguswioiaaywey[1])) {
            goto gmgwsqeqwquucyoo;
        }
        goto qwgicaiskacusqka;
        ikuoukwawkkyaacy:
        return true;
        goto omcmaswaawciiaui;
        ycaooqesseeagoka:
        if (!(stripos($this->agent, "\147\141\154\x65\x6f\x6e") !== false)) {
            goto csuemgeukskicmmi;
        }
        goto ccaqsekgkcqqayyg;
        quucsamwocuceyae:
        csuemgeukskicmmi:
        goto emoscekqieoummww;
        iegksyacuckwoyiw:
        $quiguswioiaaywey = explode("\57", $yikciqwsimweauyg[0]);
        goto ggaoikewqkecamgs;
        ccaqsekgkcqqayyg:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x67\141\x6c\145\x6f\x6e"));
        goto iegksyacuckwoyiw;
        aekskqewqmeauaug:
        $this->ikciowomiysyewgc(self::BROWSER_GALEON);
        goto ikuoukwawkkyaacy;
        omcmaswaawciiaui:
        gmgwsqeqwquucyoo:
        goto quucsamwocuceyae;
        emoscekqieoummww:
        return false;
        goto cyucgakoiiemocie;
        qwgicaiskacusqka:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto aekskqewqmeauaug;
        cyucgakoiiemocie:
    }
    
    protected function ecocgoqgymuacegg()
    {
        goto omusyecyksyowysk;
        myemqwquecqwakyq:
        return true;
        goto ksmacqoqogyoookk;
        ugmggeiwogwcgcqy:
        iqwiyiisyasiwsiu:
        goto mwcysigeamkwiwku;
        msywkyeikecaomgo:
        if (!isset($quiguswioiaaywey[1])) {
            goto yeayeuiggqoigwag;
        }
        goto uccocwouuuisiage;
        uukmwmiaqigsqaug:
        $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
        goto myemqwquecqwakyq;
        mwcysigeamkwiwku:
        return false;
        goto ywukigwwwumwuicy;
        kwsuumgiqsskggqy:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\113\x6f\x6e\161\x75\145\x72\x6f\x72"));
        goto yiyksucyuaosekey;
        ksmacqoqogyoookk:
        yeayeuiggqoigwag:
        goto ugmggeiwogwcgcqy;
        uccocwouuuisiage:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto uukmwmiaqigsqaug;
        omusyecyksyowysk:
        if (!(stripos($this->agent, "\x4b\x6f\156\161\165\145\x72\157\162") !== false)) {
            goto iqwiyiisyasiwsiu;
        }
        goto kwsuumgiqsskggqy;
        yiyksucyuaosekey:
        $quiguswioiaaywey = explode("\x2f", $yikciqwsimweauyg[0]);
        goto msywkyeikecaomgo;
        ywukigwwwumwuicy:
    }
    
    protected function wacucmcykeakeeou()
    {
        goto gqaoecysyaaccyyy;
        gqaoecysyaaccyyy:
        if (!(stripos($this->agent, "\151\x63\x61\142") !== false)) {
            goto qkmqkcwgskmyeoyq;
        }
        goto somyyugyumgeukik;
        oymcieacieeqwses:
        $this->ikciowomiysyewgc(self::BROWSER_ICAB);
        goto cggwmqyuewwisqsu;
        somyyugyumgeukik:
        $quiguswioiaaywey = explode("\40", stristr(str_replace("\57", "\40", $this->agent), "\x69\143\x61\x62"));
        goto oikasesimicoysmu;
        ymkqceigmmuokugy:
        uyuugesysqaueywi:
        goto gygkmqwkaiskgwws;
        gygkmqwkaiskgwws:
        qkmqkcwgskmyeoyq:
        goto awukkyueuqcaywks;
        cggwmqyuewwisqsu:
        return true;
        goto ymkqceigmmuokugy;
        oikasesimicoysmu:
        if (!isset($quiguswioiaaywey[1])) {
            goto uyuugesysqaueywi;
        }
        goto kicmwgigiciiuqaw;
        awukkyueuqcaywks:
        return false;
        goto akgyaaawgcecyoqc;
        kicmwgigiciiuqaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto oymcieacieeqwses;
        akgyaaawgcecyoqc:
    }
    
    protected function uockauwugkqgqkce()
    {
        goto wikueqyuegggkqoi;
        qymyaksieaiemaam:
        ceskkigeaqcaasqs:
        goto ygeweomowkiskgec;
        syuakiekoaowmoyy:
        $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
        goto symsqqgwwimugwue;
        gsuqomaoosusiqew:
        $quiguswioiaaywey = explode("\40", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto ymyqsgymeusoakyi;
        symsqqgwwimugwue:
        return true;
        goto qymyaksieaiemaam;
        ymyqsgymeusoakyi:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto syuakiekoaowmoyy;
        wikueqyuegggkqoi:
        if (!(stripos($this->agent, "\x6f\x6d\x6e\x69\167\145\142") !== false)) {
            goto ceskkigeaqcaasqs;
        }
        goto qoigmymamwikqkce;
        ygeweomowkiskgec:
        return false;
        goto kkaqamsuqkgkwowo;
        qoigmymamwikqkce:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x6f\155\x6e\x69\167\145\x62"));
        goto gsuqomaoosusiqew;
        kkaqamsuqkgkwowo:
    }
    
    protected function qaweacwkwmmuqqam()
    {
        goto owuqwmsqouswswau;
        iugcwummaqmgiqgm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto cqmwuwoaqiumaogi;
        caomeykgioesgswg:
        acmqaeyciymmsgua:
        goto owaomgiwykiiesqs;
        aecesusucigikyqs:
        return true;
        goto caomeykgioesgswg;
        skawosaecygmqmsq:
        if (!isset($quiguswioiaaywey[1])) {
            goto acmqaeyciymmsgua;
        }
        goto iugcwummaqmgiqgm;
        owaomgiwykiiesqs:
        ewswyuykwuaigiyo:
        goto wkeoacqqekmaqogk;
        cqmwuwoaqiumaogi:
        $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
        goto aecesusucigikyqs;
        iawosyeimcucqgky:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\120\150\157\145\156\x69\x78"));
        goto skawosaecygmqmsq;
        wkeoacqqekmaqogk:
        return false;
        goto iaewosqywiqiqmqs;
        owuqwmsqouswswau:
        if (!(stripos($this->agent, "\x50\150\157\x65\x6e\151\170") !== false)) {
            goto ewswyuykwuaigiyo;
        }
        goto iawosyeimcucqgky;
        iaewosqywiqiqmqs:
    }
    
    protected function gewsuekegcksgkai()
    {
        goto asmgcmegmekauiqm;
        sqkqqasyecqeysww:
        ueimcmmgwiommwwg:
        goto seekksssaiokokyq;
        eqgyoucqmyyqqagc:
        return true;
        goto qomaksiaaooygwsg;
        wgmeusuigqsowace:
        $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
        goto eqgyoucqmyyqqagc;
        seekksssaiokokyq:
        return false;
        goto vkcgsyecgukweyki;
        kgeeikakwgkukkke:
        if (!isset($quiguswioiaaywey[1])) {
            goto bkmiygiccoagsyck;
        }
        goto cyscaaaicmkkqies;
        quqkggiycuoeaysg:
        $quiguswioiaaywey = explode("\x2f", stristr($this->agent, "\x46\x69\x72\x65\142\151\162\144"));
        goto kgeeikakwgkukkke;
        asmgcmegmekauiqm:
        if (!(stripos($this->agent, "\106\151\162\145\142\151\162\x64") !== false)) {
            goto ueimcmmgwiommwwg;
        }
        goto quqkggiycuoeaysg;
        qomaksiaaooygwsg:
        bkmiygiccoagsyck:
        goto sqkqqasyecqeysww;
        cyscaaaicmkkqies:
        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
        goto wgmeusuigqsowace;
        vkcgsyecgukweyki:
    }
    
    protected function aweyeayscomouegw()
    {
        goto cmmgaceguouaicok;
        owkecwacqesgqcaq:
        return false;
        goto gggcyumymmmiuaeu;
        iiksoosqisyggaks:
        ocegwkgcsegowucu:
        goto kkmwiocaqecosykg;
        kqmsyeoyemocoiqs:
        goto aiawyogcusykcgem;
        goto iiksoosqisyggaks;
        uceyoakcoqqgkmka:
        return true;
        goto mksgqgcoeeksaiqe;
        gosqawkmwoukawsa:
        if (stripos($this->agent, "\x46\151\162\145\x66\x6f\170") === false && preg_match("\x2f\x4e\x65\x74\163\x63\x61\160\x65\66\77\134\x2f\x28\133\x5e\40\x5d\x2a\51\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto aiugcqaaymaasikk;
        }
        goto kqmsyeoyemocoiqs;
        xwsiauqamwogkwmo:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto csskywiguyamicyu;
        siycmwciwoewsooi:
        goto aiawyogcusykcgem;
        goto ceguiykycywoocuu;
        kkmwiocaqecosykg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto mqieeoagcesmykuy;
        asmgcueacgcuokak:
        return true;
        goto siycmwciwoewsooi;
        mqieeoagcesmykuy:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto asmgcueacgcuokak;
        mksgqgcoeeksaiqe:
        aiawyogcusykcgem:
        goto owkecwacqesgqcaq;
        csskywiguyamicyu:
        $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
        goto uceyoakcoqqgkmka;
        cmmgaceguouaicok:
        if (stripos($this->agent, "\x46\x69\162\145\x66\157\170") !== false && preg_match("\x2f\116\141\x76\151\147\x61\164\x6f\x72\x5c\x2f\x28\x5b\x5e\x20\x5d\x2a\x29\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ocegwkgcsegowucu;
        }
        goto gosqawkmwoukawsa;
        ceguiykycywoocuu:
        aiugcqaaymaasikk:
        goto xwsiauqamwogkwmo;
        gggcyumymmmiuaeu:
    }
    
    protected function mmyqoqguasigekck()
    {
        goto ogcasmoaumciscii;
        ymykisoiiyyqeqim:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto mcqqawkmqiiyecey;
        keqsgkcumkusgygg:
        return false;
        goto eqsqecmiugakueqm;
        ogcasmoaumciscii:
        if (!(stripos($this->agent, "\115\157\x7a\151\x6c\154\x61") !== false && preg_match("\x2f\x53\150\x69\x72\145\x74\157\x6b\157\134\57\50\x5b\136\40\135\x2a\x29\57\x69", $this->agent, $meyiiwcswqmuggyg))) {
            goto imaukawsimqgmauc;
        }
        goto ymykisoiiyyqeqim;
        yasusgwwwekossyy:
        return true;
        goto isygymaiseqgeiau;
        mcqqawkmqiiyecey:
        $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
        goto yasusgwwwekossyy;
        isygymaiseqgeiau:
        imaukawsimqgmauc:
        goto keqsgkcumkusgygg;
        eqsqecmiugakueqm:
    }
    
    protected function noeygigqkeciickm()
    {
        goto cmwigsaskaamoema;
        iyoukgscwmcoweqa:
        $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
        goto yagoyoogqkomucci;
        swuqimcsmiwqaaom:
        return false;
        goto eacseogmmqokmogu;
        cmwigsaskaamoema:
        if (!(stripos($this->agent, "\x4d\x6f\x7a\151\154\154\141") !== false && preg_match("\x2f\111\143\x65\x43\x61\164\x5c\57\50\x5b\x5e\x20\135\x2a\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg))) {
            goto ymqcqiyawcogwgym;
        }
        goto ecmeeksmaqyumykg;
        kegmcwesswsaamum:
        ymqcqiyawcogwgym:
        goto swuqimcsmiwqaaom;
        yagoyoogqkomucci:
        return true;
        goto kegmcwesswsaamum;
        ecmeeksmaqyumykg:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto iyoukgscwmcoweqa;
        eacseogmmqokmogu:
    }
    
    protected function qcqikaemyysumcsu()
    {
        goto koakuemcskwaoesy;
        cwyqqgwwmesmkiam:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
        goto ssewsumymwocqyyc;
        koakuemcskwaoesy:
        if (!preg_match("\x2f\x4e\157\153\x69\x61\x28\x5b\x5e\134\x2f\135\53\x29\134\x2f\50\133\136\x20\123\x50\x5d\53\x29\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto ycmiqcakcweakeaa;
        }
        goto cwyqqgwwmesmkiam;
        ssewsumymwocqyyc:
        if (stripos($this->agent, "\123\145\x72\x69\145\x73\66\x30") !== false || strpos($this->agent, "\x53\x36\x30") !== false) {
            goto oswqmcgsewiscugq;
        }
        goto qgoyesykieqauwqi;
        aaqekekaoaqgkiio:
        ycmiqcakcweakeaa:
        goto ogoiksimykeiuekg;
        aesqewckgocaowoi:
        goto guukcysyaquuekek;
        goto gsguoieaewagyogs;
        ocesuggkygmwyoqu:
        guukcysyaquuekek:
        goto amwwumeqoscyamoc;
        gsguoieaewagyogs:
        oswqmcgsewiscugq:
        goto qskksaagcgukausc;
        iimagwawmcgmaoga:
        return true;
        goto aaqekekaoaqgkiio;
        qgoyesykieqauwqi:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
        goto aesqewckgocaowoi;
        qskksaagcgukausc:
        $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
        goto ocesuggkygmwyoqu;
        amwwumeqoscyamoc:
        $this->eywockmuswoykooc(true);
        goto iimagwawmcgmaoga;
        ogoiksimykeiuekg:
        return false;
        goto aomicoqgwkaiosso;
        aomicoqgwkaiosso:
    }
    
    protected function eqkuicmgoaougagi()
    {
        goto eiwccayegouiekwk;
        ycaskcwiywemgmay:
        sgyogmewgaymcogg:
        goto icmgwgoywmewyeii;
        sqgomkiuekmaykyw:
        goto sgyogmewgaymcogg;
        goto ouseosmqaaykkaaw;
        csgyceiomssoweek:
        return true;
        goto ycaskcwiywemgmay;
        kuimgaokwkqogaqk:
        if (preg_match("\57\120\x61\154\x65\x6d\x6f\157\x6e\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto wusygegyegamyioq;
        }
        goto iuumwocuuoyceaks;
        auaaassweykwwsge:
        return true;
        goto sqgomkiuekmaykyw;
        qkymmwmmiemiauyg:
        wusygegyegamyioq:
        goto ykceeqicyiqgssye;
        eoemqkmecwqsagce:
        return true;
        goto kigsuwkmaacmwgsq;
        mimmumuekmyyyaug:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto awyuyuuiayqoekkc;
        kigsuwkmaacmwgsq:
        goto sgyogmewgaymcogg;
        goto qkymmwmmiemiauyg;
        icmgwgoywmewyeii:
        ksqsiosguewggcya:
        goto mocwcekscogegcwa;
        awyuyuuiayqoekkc:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto eoemqkmecwqsagce;
        acasskokyagwkumy:
        if (preg_match("\57\120\x61\x6c\145\155\157\157\156\x5b\x5c\57\40\134\50\x5d\50\133\x5e\40\73\x5c\51\x5d\x2b\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto omagiuciweiemoik;
        }
        goto osoyyysskuckoocc;
        osoyyysskuckoocc:
        if (preg_match("\x2f\120\x61\154\145\x6d\157\x6f\156\50\133\60\55\x39\x61\x2d\172\101\55\x5a\134\56\x5d\53\x29\x2f\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto uemcayqyeweiosqw;
        }
        goto kuimgaokwkqogaqk;
        ykceeqicyiqgssye:
        $this->aasasueowyemuyoc('');
        goto qwmuiakauycoowya;
        oewqywyeaueuiyes:
        omagiuciweiemoik:
        goto ssoogecumeaeekcs;
        iuumwocuuoyceaks:
        goto sgyogmewgaymcogg;
        goto oewqywyeaueuiyes;
        eiwccayegouiekwk:
        if (!(stripos($this->agent, "\163\141\146\141\x72\151") === false)) {
            goto ksqsiosguewggcya;
        }
        goto acasskokyagwkumy;
        ssoogecumeaeekcs:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto ukeaeogwsoackkas;
        qwmuiakauycoowya:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto csgyceiomssoweek;
        ouseosmqaaykkaaw:
        uemcayqyeweiosqw:
        goto mimmumuekmyyyaug;
        mocwcekscogegcwa:
        return false;
        goto aqewaqaseausoewg;
        ukeaeogwsoackkas:
        $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
        goto auaaassweykwwsge;
        aqewaqaseausoewg:
    }
    
    protected function sukgiyywqmoigmom()
    {
        goto mogugiawmaoukmak;
        weekemioaaygmggw:
        return true;
        goto ycgokycmgosuamok;
        mgqmswesaekqqwiu:
        $this->icigyueiiwsukmsu(true);
        goto yuaommqaoiseeice;
        ysmckuskoqmsyaca:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qgeeiygkaaeqeaua;
        cciuyoceqiauqsic:
        ecsuogeauwascies:
        goto oekaqqseuemcgeqe;
        uuskeoeuumiigues:
        $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
        goto weekemioaaygmggw;
        mogugiawmaoukmak:
        if (!preg_match("\x2f\125\103\x20\x3f\102\x72\x6f\x77\163\x65\162\134\57\x3f\50\x5b\x5c\x64\134\56\135\x2b\51\x2f", $this->agent, $meyiiwcswqmuggyg)) {
            goto kyisocwmmwaiwayk;
        }
        goto ccokywiouwwmiwse;
        qgeeiygkaaeqeaua:
        aegamiyqqcwuqcyk:
        goto qkmiokuccayckwiy;
        yuaommqaoiseeice:
        goto aoasogsaqgewacum;
        goto cciuyoceqiauqsic;
        qkmiokuccayckwiy:
        if (stripos($this->agent, "\x4d\x6f\142\x69\154\x65") !== false) {
            goto ecsuogeauwascies;
        }
        goto mgqmswesaekqqwiu;
        ycgokycmgosuamok:
        kyisocwmmwaiwayk:
        goto mqweugciiyyukymg;
        ccokywiouwwmiwse:
        if (!isset($meyiiwcswqmuggyg[1])) {
            goto aegamiyqqcwuqcyk;
        }
        goto ysmckuskoqmsyaca;
        mqweugciiyyukymg:
        return false;
        goto meamoqcwwsqiyoqc;
        oekaqqseuemcgeqe:
        $this->eywockmuswoykooc(true);
        goto ikcmeaikkuekumye;
        ikcmeaikkuekumye:
        aoasogsaqgewacum:
        goto uuskeoeuumiigues;
        meamoqcwwsqiyoqc:
    }
    
    protected function qsseiqmmssqiuomm()
    {
        goto wamigcygcsucigmi;
        mkyoiqgumggcsakq:
        qcqqieuakcakkwem:
        goto oakyyiqquqsccuks;
        rkaswcmccyqqioqs:
        gmcieuucmgkcoyii:
        goto yseakuykcykcomwg;
        yseikqceqguugaee:
        wsmwmwswqaoeaquq:
        goto uioaeuugwsakiykw;
        uqsgmacmweuuwqgy:
        if (preg_match("\x2f\x46\151\162\x65\x66\157\x78\50\x5b\60\55\71\x61\x2d\172\101\55\x5a\134\56\x5d\x2b\51\57\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto mmeumymqusiaiugs;
        }
        goto qogciqauggmmigia;
        ewoywsgmimyigwai:
        
        if (!(stripos($this->agent, "\x41\156\144\162\x6f\151\144") !== false || stripos($this->agent, "\x69\120\x68\x6f\x6e\145") !== false)) {
            goto gmcieuucmgkcoyii;
        }
        goto smyugaykeesyuakw;
        cwoaoecuqyiccwcw:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto wqmeugomsqagioak;
        yggwmccmmiemueou:
        akqgwckwiiugwiay:
        goto cqouacqmcegmykuu;
        imimwegqkykucuia:
        return true;
        goto iksugmewgigsiaec;
        qegwssscaomyoekg:
        $this->icigyueiiwsukmsu(true);
        goto yysucuowuoiskkui;
        wamigcygcsucigmi:
        if (stripos($this->agent, "\163\141\146\141\x72\x69") === false) {
            goto swusuwwawauqqqae;
        }
        goto qmcmakumyemsuoaa;
        koomcmawyuomqmii:
        qmssaeiomssoycas:
        goto smeqeomcqisgssau;
        smyugaykeesyuakw:
        if (stripos($this->agent, "\115\157\x62\151\154\x65") !== false || stripos($this->agent, "\x54\141\x62\x6c\x65\164") !== false) {
            goto wsmwmwswqaoeaquq;
        }
        goto uqemmmykkceucwum;
        smeqeomcqisgssau:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto osioeeokiykiemau;
        ywimuqyysmaggeum:
        
        if (!(stripos($this->agent, "\x41\156\144\x72\x6f\151\x64") !== false || stripos($this->agent, "\x69\120\x68\x6f\156\145") !== false)) {
            goto qgocscwqkuyemmcw;
        }
        goto iaksmguwicewykey;
        iaumckssomaweakk:
        if (preg_match("\57\x46\x69\x72\x65\146\x6f\170\x5b\x5c\57\x20\x5c\x28\135\x28\x5b\136\40\x3b\x5c\x29\x5d\53\51\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto yuqemymykuasskoy;
        }
        goto uqsgmacmweuuwqgy;
        yysucuowuoiskkui:
        goto akqgwckwiiugwiay;
        goto wguwcgascccyeasu;
        qmcmakumyemsuoaa:
        if (preg_match("\x2f\x46\170\x69\117\123\133\134\x2f\x20\134\x28\x5d\50\133\136\x20\x3b\134\51\135\53\x29\57\151", $this->agent, $meyiiwcswqmuggyg)) {
            goto qmssaeiomssoycas;
        }
        goto kgwewosygiuoiigk;
        iksugmewgigsiaec:
        oiuiwkywiekacygs:
        goto ewqooaykuauegwio;
        iwmsiaqgccqqkgcc:
        waqwkysqcskykuum:
        goto wcosggqmokuwgomy;
        aomoesqmwqcyueoa:
        $this->eywockmuswoykooc(true);
        goto yggwmccmmiemueou;
        osioeeokiykiemau:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto ywimuqyysmaggeum;
        gsiigogemgmesycs:
        mmeumymqusiaiugs:
        goto oqqooygakaagaiqw;
        iaksmguwicewykey:
        if (stripos($this->agent, "\115\157\142\x69\154\x65") !== false || stripos($this->agent, "\124\141\x62\x6c\x65\x74") !== false) {
            goto kscocsoaygkcaocq;
        }
        goto qegwssscaomyoekg;
        ewqooaykuauegwio:
        return false;
        goto jimwweuekesuemiy;
        wqmeugomsqagioak:
        return true;
        goto iwmsiaqgccqqkgcc;
        qaqckwcumcykqcay:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto giiusoakskiciase;
        oakyyiqquqsccuks:
        $this->aasasueowyemuyoc('');
        goto cwoaoecuqyiccwcw;
        giiusoakskiciase:
        return true;
        goto wkeeueuiysyiqaoq;
        qogciqauggmmigia:
        if (preg_match("\57\x46\151\162\145\146\x6f\170\44\x2f\x69", $this->agent, $meyiiwcswqmuggyg)) {
            goto qcqqieuakcakkwem;
        }
        goto semoayicskccgemw;
        koiuecgmeyuiwqkk:
        aeecqkykiqyuqmyg:
        goto rkaswcmccyqqioqs;
        uiskkgkcyssegigy:
        goto waqwkysqcskykuum;
        goto gsiigogemgmesycs;
        wkeeueuiysyiqaoq:
        goto waqwkysqcskykuum;
        goto mkyoiqgumggcsakq;
        mqqqqeiimsgyacaw:
        swusuwwawauqqqae:
        goto iaumckssomaweakk;
        oqqooygakaagaiqw:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto qaqckwcumcykqcay;
        aaymugikaeaqsaos:
        $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
        goto ewoywsgmimyigwai;
        ouigaoeeokmqaqoe:
        yuqemymykuasskoy:
        goto myycwmecoyeekeus;
        wguwcgascccyeasu:
        kscocsoaygkcaocq:
        goto aomoesqmwqcyueoa;
        wcosggqmokuwgomy:
        goto oiuiwkywiekacygs;
        goto koomcmawyuomqmii;
        cqouacqmcegmykuu:
        qgocscwqkuyemmcw:
        goto imimwegqkykucuia;
        uioaeuugwsakiykw:
        $this->eywockmuswoykooc(true);
        goto koiuecgmeyuiwqkk;
        myycwmecoyeekeus:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto aaymugikaeaqsaos;
        kgwewosygiuoiigk:
        goto oiuiwkywiekacygs;
        goto mqqqqeiimsgyacaw;
        euoqiuygwwssoqou:
        goto aeecqkykiqyuqmyg;
        goto yseikqceqguugaee;
        semoayicskccgemw:
        goto waqwkysqcskykuum;
        goto ouigaoeeokmqaqoe;
        uqemmmykkceucwum:
        $this->icigyueiiwsukmsu(true);
        goto euoqiuygwwssoqou;
        yseakuykcykcomwg:
        return true;
        goto uiskkgkcyssegigy;
        jimwweuekesuemiy:
    }
    
    protected function akwueocamkykcwyy()
    {
        goto omygyywamgusigko;
        akkuysmcasqukkug:
        return false;
        goto gaqigeacswyyikkk;
        seyoowocwsqsekqi:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto yoqwqkuekiauqsuc;
        miwaaaueiacyqequ:
        ywgwuqyisimkacqe:
        goto baqgcseewusocmom;
        gouiskmmqywoscgm:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\111\x63\x65\167\x65\x61\163\x65\x6c"));
        goto uwcawmmgcaecgyqm;
        yoqwqkuekiauqsuc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto wousqisikkiooewi;
        omygyywamgusigko:
        if (!(stripos($this->agent, "\111\x63\145\x77\x65\x61\x73\x65\154") !== false)) {
            goto iioueceaesegmgyi;
        }
        goto gouiskmmqywoscgm;
        uwcawmmgcaecgyqm:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ywgwuqyisimkacqe;
        }
        goto seyoowocwsqsekqi;
        wwamkekgkkiogiiu:
        return true;
        goto miwaaaueiacyqequ;
        baqgcseewusocmom:
        iioueceaesegmgyi:
        goto akkuysmcasqukkug;
        wousqisikkiooewi:
        $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
        goto wwamkekgkkiogiiu;
        gaqigeacswyyikkk:
    }
    
    protected function aowooqokikgeegkm()
    {
        goto sgwiageicumuqwke;
        qwyameqoseiywwus:
        preg_match("\x2f\x72\x76\x3a\133\60\55\x39\135\56\133\60\55\x39\x5d\133\141\55\142\x5d\x3f\57\x69", $this->agent, $quiguswioiaaywey);
        goto wwmqgecmsimuecam;
        gqaiguosioisccwm:
        cskgiyqesqqawuwo:
        goto qwwscygkwwsiocok;
        sgwiageicumuqwke:
        if (stripos($this->agent, "\x6d\157\172\x69\154\154\x61") !== false && preg_match("\x2f\162\x76\72\133\60\55\x39\x5d\56\133\x30\x2d\x39\x5d\x5b\x61\x2d\142\135\x3f\x2f\x69", $this->agent) && stripos($this->agent, "\x6e\145\x74\163\x63\x61\x70\x65") === false) {
            goto sqsgeccoawoeukws;
        }
        goto coyskeyoikeaqoek;
        ngeuswkcwioygkku:
        yqyyssciomuwwisa:
        goto oymsgiwgeiqguuyy;
        wgcmsygycukiqmui:
        return true;
        goto kaycawgquiieeaiw;
        mmomogyaswcsgwwy:
        $quiguswioiaaywey = explode("\x20", stristr($this->agent, "\x72\x76\x3a"));
        goto qwyameqoseiywwus;
        amksqwmicsmyocyw:
        return true;
        goto wcaiuquuswsqacgg;
        oymsgiwgeiqguuyy:
        $quiguswioiaaywey = explode('', stristr($this->agent, "\x72\x76\72"));
        goto ygoomqwcsggeiuge;
        amcioyyyuiigekuo:
        if (stripos($this->agent, "\x6d\157\172\151\x6c\x6c\x61") !== false && preg_match("\57\x6d\x6f\x7a\151\154\154\141\134\x2f\50\133\x5e\x20\x5d\x2a\x29\57\151", $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, "\x6e\145\x74\x73\143\x61\x70\145") === false) {
            goto cskgiyqesqqawuwo;
        }
        goto kmwseockoawqkoao;
        qwwscygkwwsiocok:
        $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
        goto wggeuckgywqucase;
        wcaiuquuswsqacgg:
        goto qagasowcequukwoc;
        goto gqaiguosioisccwm;
        ygoomqwcsggeiuge:
        $this->aasasueowyemuyoc(str_replace("\162\166\72", '', $quiguswioiaaywey[0]));
        goto qkqwgsoymmqsqeim;
        qkqwgsoymmqsqeim:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto amksqwmicsmyocyw;
        kaycawgquiieeaiw:
        goto qagasowcequukwoc;
        goto ngeuswkcwioygkku;
        usmieesmayeskkmk:
        sqsgeccoawoeukws:
        goto mmomogyaswcsgwwy;
        wggeuckgywqucase:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto seggycoceaokwcsa;
        seggycoceaokwcsa:
        return true;
        goto iqmgswgoooqkkigo;
        aoosuewasqmmyqoi:
        return false;
        goto kwuakeywaocokwig;
        wwmqgecmsimuecam:
        $this->aasasueowyemuyoc(str_replace("\x72\166\x3a", '', $quiguswioiaaywey[0]));
        goto escuksewiugekayq;
        coyskeyoikeaqoek:
        if (stripos($this->agent, "\x6d\x6f\x7a\151\x6c\154\x61") !== false && preg_match("\x2f\162\166\x3a\x5b\60\55\x39\135\x5c\56\x5b\x30\x2d\x39\135\x2f\151", $this->agent) && stripos($this->agent, "\156\x65\164\x73\143\x61\160\x65") === false) {
            goto yqyyssciomuwwisa;
        }
        goto amcioyyyuiigekuo;
        escuksewiugekayq:
        $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
        goto wgcmsygycukiqmui;
        kmwseockoawqkoao:
        goto qagasowcequukwoc;
        goto usmieesmayeskkmk;
        iqmgswgoooqkkigo:
        qagasowcequukwoc:
        goto aoosuewasqmmyqoi;
        kwuakeywaocokwig:
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        goto yewmigswwuewyqki;
        gokkyeisqkoccqis:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ymmqwacaoayoyiei;
        wgsqeuaooemcuqqu:
        wowiaueqaaqckwqq:
        goto wwqoywoqcyikouca;
        aqcucyeikgmemsoq:
        return true;
        goto wgsqeuaooemcuqqu;
        ciimuiiegyeaggya:
        $quiguswioiaaywey = explode("\x20", isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
        goto gokkyeisqkoccqis;
        guwmgkcgaoysewyw:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\114\171\156\x78"));
        goto ciimuiiegyeaggya;
        yewmigswwuewyqki:
        if (!(stripos($this->agent, "\154\x79\x6e\x78") !== false)) {
            goto wowiaueqaaqckwqq;
        }
        goto guwmgkcgaoysewyw;
        wwqoywoqcyikouca:
        return false;
        goto qyogimcocyqgyyee;
        ymmqwacaoayoyiei:
        $this->ikciowomiysyewgc(self::BROWSER_LYNX);
        goto aqcucyeikgmemsoq;
        qyogimcocyqgyyee:
    }
    
    protected function usemqkymaguiocgy()
    {
        goto usaooeqiaewcmyog;
        qmycieyiysuesagy:
        return true;
        goto wgiwseywikgwumwe;
        gseqciagemceawam:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ikiegwiqykqwuykk;
        kmagwqsioegswiqk:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\101\155\141\x79\x61"));
        goto kuegskyiyugiuosa;
        uaigiceqkuiguogo:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gseqciagemceawam;
        egqqigmomgaaamqc:
        return false;
        goto agiiusmyqqkgqymk;
        wgiwseywikgwumwe:
        aksacseyuwyiseay:
        goto rkoyiagmcaycmwmg;
        rkoyiagmcaycmwmg:
        sgaqioqcecwgyikg:
        goto egqqigmomgaaamqc;
        ikiegwiqykqwuykk:
        $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
        goto qmycieyiysuesagy;
        kuegskyiyugiuosa:
        if (!isset($yikciqwsimweauyg[1])) {
            goto aksacseyuwyiseay;
        }
        goto uaigiceqkuiguogo;
        usaooeqiaewcmyog:
        if (!(stripos($this->agent, "\x61\x6d\x61\x79\141") !== false)) {
            goto sgaqioqcecwgyikg;
        }
        goto kmagwqsioegswiqk;
        agiiusmyqqkgqymk:
    }
    
    protected function qcswwmqaioswesoq()
    {
        goto ksogiaquuskeygaq;
        igsmwamoyswayqiy:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gyomccegicuoyguk;
        aygkuykcicgceciq:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x56\145\162\x73\151\x6f\x6e"));
        goto kiocmmsiuwcuemyg;
        mgqockcuascmkosg:
        kiqiskyesywkwkos:
        goto qiocyqceaiyiakii;
        qiocyqceaiyiakii:
        return false;
        goto qqaeaoygygacuuos;
        gyomccegicuoyguk:
        cwycmkkoscmgcecg:
        goto mquksyyawiwsakwy;
        cguuomiqwuicsgwa:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto yqggmewmakemgkui;
        ksogiaquuskeygaq:
        if (!(stripos($this->agent, "\x53\141\x66\x61\x72\151") !== false && stripos($this->agent, "\x69\x50\150\x6f\x6e\x65") === false && stripos($this->agent, "\151\120\x6f\144") === false)) {
            goto kiqiskyesywkwkos;
        }
        goto aygkuykcicgceciq;
        coosgwiiekamiyug:
        return true;
        goto mgqockcuascmkosg;
        kiocmmsiuwcuemyg:
        if (isset($yikciqwsimweauyg[1])) {
            goto iammommmgkimyyaa;
        }
        goto cguuomiqwuicsgwa;
        yqggmewmakemgkui:
        goto cwycmkkoscmgcecg;
        goto qoguisoimaueiaoo;
        mquksyyawiwsakwy:
        $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
        goto coosgwiiekamiyug;
        eowkmiqqmqyeayci:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto igsmwamoyswayqiy;
        qoguisoimaueiaoo:
        iammommmgkimyyaa:
        goto eowkmiqqmqyeayci;
        qqaeaoygygacuuos:
    }
    protected function yswggmyigakcackc()
    {
        goto agsoqikgikksqkom;
        ameeyqiguwmykwai:
        mokuaeasioyuisqs:
        goto eswswyigkwqaaasy;
        gmeiquwcawwmowwm:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ameeyqiguwmykwai;
        uogoykaeoysgmism:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto eoewsuaewaeueaks;
        agsoqikgikksqkom:
        if (!(stripos($this->agent, "\123\x61\x6d\163\165\x6e\147\102\162\157\167\163\x65\x72") !== false)) {
            goto umacsiiqmwygcycu;
        }
        goto iscqcsqyqkmkgkag;
        ckgoiwueekyamwcu:
        return false;
        goto uusaeowyacskgumg;
        eswswyigkwqaaasy:
        $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
        goto mcukkaquiosmsguy;
        usaokwsyegousimg:
        umacsiiqmwygcycu:
        goto ckgoiwueekyamwcu;
        qscgsguyqggkagoe:
        wasmuqumoqqcmgys:
        goto awceesgmgquwakuu;
        skkmiiyukuqmiimc:
        if (isset($yikciqwsimweauyg[1])) {
            goto wasmuqumoqqcmgys;
        }
        goto uogoykaeoysgmism;
        mcukkaquiosmsguy:
        return true;
        goto usaokwsyegousimg;
        eoewsuaewaeueaks:
        goto mokuaeasioyuisqs;
        goto qscgsguyqggkagoe;
        awceesgmgquwakuu:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto gmeiquwcawwmowwm;
        iscqcsqyqkmkgkag:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\123\141\155\163\x75\x6e\147\102\162\157\x77\x73\145\162"));
        goto skkmiiyukuqmiimc;
        uusaeowyacskgumg:
    }
    protected function uiwkymoksesuumwe()
    {
        goto siyeyakoauowwose;
        kkweuygueeaqsksg:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto iyqmmwymomwqiqaw;
        iyqmmwymomwqiqaw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yaowkqscayqikmck;
        siyeyakoauowwose:
        if (!(stripos($this->agent, "\x53\151\154\153") !== false)) {
            goto kwkcmwgyiwyacywi;
        }
        goto eaawsaueyyoiqoao;
        ymqwkscegcogqqwy:
        return false;
        goto oayqqymykwwugkwe;
        gwigmqemwuqewiae:
        eoeoqacqgmumwcuk:
        goto kkweuygueeaqsksg;
        uieyawsyauemyqgy:
        $this->ikciowomiysyewgc(self::BROWSER_SILK);
        goto uciuogooymiyqyao;
        uciuogooymiyqyao:
        return true;
        goto msmouyoaqcwsasuw;
        yaowkqscayqikmck:
        wmssuwyesuyeiows:
        goto uieyawsyauemyqgy;
        eaawsaueyyoiqoao:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\123\151\x6c\x6b"));
        goto eyimkecocwsicyge;
        eyimkecocwsicyge:
        if (isset($yikciqwsimweauyg[1])) {
            goto eoeoqacqgmumwcuk;
        }
        goto ooswoacocwcgoagc;
        ooswoacocwcgoagc:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto kyqewaqymicucwuc;
        kyqewaqymicucwuc:
        goto wmssuwyesuyeiows;
        goto gwigmqemwuqewiae;
        msmouyoaqcwsasuw:
        kwkcmwgyiwyacywi:
        goto ymqwkscegcogqqwy;
        oayqqymykwwugkwe:
    }
    protected function cgqcukygysieeqko()
    {
        goto gyoiekqiqwwquomc;
        ocoaeuqqauqewyig:
        ugsumemcqucesssg:
        goto mksgcawyikcceiqa;
        gyoiekqiqwwquomc:
        if (!(stripos($this->agent, "\x49\146\162\141\155\x65\x6c\x79") !== false)) {
            goto ugsumemcqucesssg;
        }
        goto cqayoeygyqqamquk;
        mksgcawyikcceiqa:
        return false;
        goto gkaykeoacgugeumu;
        ksswuscweggkeiko:
        qewckkocqykmeywg:
        goto qsoukmmoqeuqsoee;
        eiiemassiceeqmeq:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto sgwucycigkyieoea;
        sgwucycigkyieoea:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ksswuscweggkeiko;
        iieeiugaeeqyaqok:
        wwwqiimkicqiuwui:
        goto eiiemassiceeqmeq;
        cqayoeygyqqamquk:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x49\x66\162\x61\155\x65\154\171"));
        goto cmowiicqgqiakqem;
        qsoukmmoqeuqsoee:
        $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
        goto ukiiyimwmgiqisca;
        qsqskaukgysseokg:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto seswyksiukyeqkqc;
        cmowiicqgqiakqem:
        if (isset($yikciqwsimweauyg[1])) {
            goto wwwqiimkicqiuwui;
        }
        goto qsqskaukgysseokg;
        seswyksiukyeqkqc:
        goto qewckkocqykmeywg;
        goto iieeiugaeeqyaqok;
        ukiiyimwmgiqisca:
        return true;
        goto ocoaeuqqauqewyig;
        gkaykeoacgugeumu:
    }
    protected function ccaaioyauuuuyikg()
    {
        goto sgsaqgwgakicwckk;
        eiqmqaiyewsgyois:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\103\x6f\143\157\141\x52\145\x73\164\x43\x6c\x69\x65\x6e\x74"));
        goto wekysuykykiweqms;
        jawaweyeoaoueooa:
        yksmaaesmwecwoak:
        goto wayscwykqcwqgqyi;
        yieeukyoaeioqock:
        return true;
        goto jawaweyeoaoueooa;
        kacseggomkeowiqm:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto iaiekaygcqmocmee;
        kewymgqeemiuewca:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto scooeumumiwmgowm;
        wekysuykykiweqms:
        if (isset($yikciqwsimweauyg[1])) {
            goto uuqskowyckcgagkc;
        }
        goto kacseggomkeowiqm;
        iaiekaygcqmocmee:
        goto wwyeoccuqgcgcuuc;
        goto wguukissuqyuqeku;
        wayscwykqcwqgqyi:
        return false;
        goto ccsysoygswagacce;
        scooeumumiwmgowm:
        wwyeoccuqgcgcuuc:
        goto eyowigugugmmkeiw;
        wguukissuqyuqeku:
        uuqskowyckcgagkc:
        goto ggwywcekieoyeuya;
        sgsaqgwgakicwckk:
        if (!(stripos($this->agent, "\103\157\143\x6f\141\122\145\163\x74\103\x6c\x69\x65\x6e\x74") !== false)) {
            goto yksmaaesmwecwoak;
        }
        goto eiqmqaiyewsgyois;
        ggwywcekieoyeuya:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto kewymgqeemiuewca;
        eyowigugugmmkeiw:
        $this->ikciowomiysyewgc(self::BROWSER_COCOA);
        goto yieeukyoaeioqock;
        ccsysoygswagacce:
    }
    
    protected function ksikmmeqsuycsqck()
    {
        goto kycikakmkwkieqwk;
        qkgkkwcagegkwkwi:
        $this->aasmeayouwmacaow(true);
        goto oioqgywuoiaisyuu;
        essqemwiweimukwe:
        kgecmyesgkacyyqm:
        goto uuqaakyqgqwiiwom;
        oioqgywuoiaisyuu:
        $this->oqgqmcogeugkakss(true);
        goto iqymaeimsmwkkkie;
        iqymaeimsmwkkkie:
        return true;
        goto essqemwiweimukwe;
        uuqaakyqgqwiiwom:
        return false;
        goto yiamqaqsueaiqwuq;
        kycikakmkwkieqwk:
        if (!stristr($this->agent, "\106\141\143\x65\x62\x6f\x6f\x6b\x45\170\164\x65\x72\156\x61\154\x48\151\164")) {
            goto kgecmyesgkacyyqm;
        }
        goto qkgkkwcagegkwkwi;
        yiamqaqsueaiqwuq:
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        goto mkumickumqmmkiqc;
        cwcuamqicskkmuyg:
        $this->oqgqmcogeugkakss(true);
        goto qugekewwywkuiqyk;
        gsyquwaygesygkiq:
        return false;
        goto keyciqmuisymkgcw;
        qwmyieguwoysqegw:
        mceeomsqguaacseg:
        goto gsyquwaygesygkiq;
        qugekewwywkuiqyk:
        return true;
        goto qwmyieguwoysqegw;
        mkumickumqmmkiqc:
        if (!stristr($this->agent, "\106\102\111\117\123")) {
            goto mceeomsqguaacseg;
        }
        goto cwcuamqicskkmuyg;
        keyciqmuisymkgcw:
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        goto aiyqwwuiayikques;
        ggqwsgmqqyaicosm:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto iieymwaigukwymsc;
        aiyqwwuiayikques:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x56\x65\162\x73\151\x6f\x6e"));
        goto swgqwkyuwoqeyeyu;
        mcqygaykwaaseack:
        return true;
        goto aukkqqimoumiiccy;
        iieymwaigukwymsc:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto mcqygaykwaaseack;
        swgqwkyuwoqeyeyu:
        if (!isset($yikciqwsimweauyg[1])) {
            goto moyywqqiasmyoscc;
        }
        goto ggqwsgmqqyaicosm;
        raigmgqaksaqoosc:
        return false;
        goto ascewisaoqauaymk;
        aukkqqimoumiiccy:
        moyywqqiasmyoscc:
        goto raigmgqaksaqoosc;
        ascewisaoqauaymk:
    }
    
    protected function iqsiguacookiqwcs()
    {
        goto iwoquisgaegiocss;
        yuyccgsguyaaygmu:
        return true;
        goto smagqkegqiooysya;
        yccweyyksqycwuqi:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kcckgokmwuywmaiw;
        }
        goto qoamoegiiwismakk;
        oakguomioocmeiia:
        $this->ikciowomiysyewgc(self::BROWSER_CHROME);
        goto yuyccgsguyaaygmu;
        wqswcaeeyeaqieom:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto oakguomioocmeiia;
        qoamoegiiwismakk:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto wqswcaeeyeaqieom;
        eiissuweooqsaauy:
        return false;
        goto kakgceiyakaueuww;
        smagqkegqiooysya:
        kcckgokmwuywmaiw:
        goto eiissuweooqsaauy;
        iwoquisgaegiocss:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\x43\162\x69\117\123"));
        goto yccweyyksqycwuqi;
        kakgceiyakaueuww:
    }
    
    protected function iaacgcgmmegamkiu()
    {
        goto mmuomyiooicyqscg;
        emaeckumgkmgcaew:
        $this->eywockmuswoykooc(true);
        goto wiamyucsaoosmoei;
        iiwmmqqaqckwwiqe:
        uqieceoogswuggos:
        goto oqqscigyquseosya;
        eusmcuqiciwcooss:
        $this->uewoqoqkekmsyoeo();
        goto gamusuoqieekieka;
        wiamyucsaoosmoei:
        return true;
        goto iiwmmqqaqckwwiqe;
        mmuomyiooicyqscg:
        if (!(stripos($this->agent, "\x69\120\x68\157\156\x65") !== false)) {
            goto uqieceoogswuggos;
        }
        goto yegcwkkemkycyuua;
        gamusuoqieekieka:
        $this->iqsiguacookiqwcs();
        goto dwyqyusgqwqwomqk;
        wuoaeksukwwaycoi:
        $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
        goto eusmcuqiciwcooss;
        dwyqyusgqwqwomqk:
        $this->ssquiwqwwcgcqiic();
        goto emaeckumgkmgcaew;
        oqqscigyquseosya:
        return false;
        goto akqsaiecouuqacks;
        yegcwkkemkycyuua:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wuoaeksukwwaycoi;
        akqsaiecouuqacks:
    }
    
    protected function ciawmegkaaacmoew()
    {
        goto cucsooyoayssmcas;
        ayqocaaesmkygque:
        return true;
        goto usaseckaaaugcygu;
        usaseckaaaugcygu:
        ysoiwegyoqymuuek:
        goto muouqwckwywsgiwg;
        ckguemuwukmeycag:
        $this->icigyueiiwsukmsu(true);
        goto ayqocaaesmkygque;
        qyskykugeiqkauce:
        $this->uewoqoqkekmsyoeo();
        goto cguckckouuwacmow;
        mkywwqusckeeisiy:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto qskoquwmkkgkkmuy;
        cucsooyoayssmcas:
        if (!(stripos($this->agent, "\x69\120\141\x64") !== false)) {
            goto ysoiwegyoqymuuek;
        }
        goto mkywwqusckeeisiy;
        cguckckouuwacmow:
        $this->iqsiguacookiqwcs();
        goto wacgcmsgismsomma;
        wacgcmsgismsomma:
        $this->ssquiwqwwcgcqiic();
        goto ckguemuwukmeycag;
        qskoquwmkkgkkmuy:
        $this->ikciowomiysyewgc(self::BROWSER_IPAD);
        goto qyskykugeiqkauce;
        muouqwckwywsgiwg:
        return false;
        goto qquimmcqqiyegcym;
        qquimmcqqiyegcym:
    }
    
    protected function cysskoyaouegkmky()
    {
        goto ouaokeyacuscccyu;
        ymcqcaygueguiuig:
        return false;
        goto eiwuwemqmigskwoe;
        iwwouqosmwummgsi:
        return true;
        goto wygcwcywyeosuemq;
        wsiggqyeiueeyqyu:
        $this->ikciowomiysyewgc(self::BROWSER_IPOD);
        goto ikcsgymqsagymgco;
        osygawsacakgggko:
        $this->eywockmuswoykooc(true);
        goto iwwouqosmwummgsi;
        eeqsuowcmyeyuoqw:
        $this->iqsiguacookiqwcs();
        goto auaukkuskuciowkq;
        auaukkuskuciowkq:
        $this->ssquiwqwwcgcqiic();
        goto osygawsacakgggko;
        iywyeuaaoaeymmag:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto wsiggqyeiueeyqyu;
        wygcwcywyeosuemq:
        qkeuasieckwuqseq:
        goto ymcqcaygueguiuig;
        ouaokeyacuscccyu:
        if (!(stripos($this->agent, "\x69\x50\157\144") !== false)) {
            goto qkeuasieckwuqseq;
        }
        goto iywyeuaaoaeymmag;
        ikcsgymqsagymgco:
        $this->uewoqoqkekmsyoeo();
        goto eeqsuowcmyeyuoqw;
        eiwuwemqmigskwoe:
    }
    
    protected function oomuqgqyykuccewm()
    {
        goto kuqeksgikkymkyeo;
        gosqmqqycwquosse:
        goto oqoyyooooyegowuk;
        goto cwgiecqggoksyuko;
        gkkogauyaimaaoky:
        $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
        goto akocagcmqwymsqqw;
        kuqeksgikkymkyeo:
        if (!(stripos($this->agent, "\101\156\x64\x72\157\151\x64") !== false)) {
            goto kggwwgeqkgwyoseq;
        }
        goto aogimqgcygkugqoc;
        kekiekeeqkowaiga:
        $this->eywockmuswoykooc(true);
        goto wscoawgsgqekweuq;
        wqmmaiwyoumwmiyi:
        return true;
        goto oaoaskeocoucoaes;
        akocagcmqwymsqqw:
        goto soqmkkwmmkqiweau;
        goto ckyyyqokcocsmium;
        aogimqgcygkugqoc:
        $yikciqwsimweauyg = explode("\40", stristr($this->agent, "\x41\x6e\144\x72\157\x69\144"));
        goto kwmkgoegswsseyia;
        ckyyyqokcocsmium:
        wwiysyawwqeuikcc:
        goto qioeweaouoiyoayy;
        soyeimgmemqugquc:
        $this->icigyueiiwsukmsu(true);
        goto gosqmqqycwquosse;
        cwgiecqggoksyuko:
        sqwwkouiqayeqeyo:
        goto kekiekeeqkowaiga;
        qioeweaouoiyoayy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto ssyeoucmcqaewkws;
        iuugeqgkacqmuais:
        return false;
        goto eqocwcasskyqeauu;
        ssyeoucmcqaewkws:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gukuouumaoiiugiw;
        ayyeoeyyawiuiukq:
        if (stripos($this->agent, "\115\157\x62\x69\154\x65") !== false) {
            goto sqwwkouiqayeqeyo;
        }
        goto soyeimgmemqugquc;
        gukuouumaoiiugiw:
        soqmkkwmmkqiweau:
        goto ayyeoeyyawiuiukq;
        ysuyamauyegkceea:
        $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
        goto wqmmaiwyoumwmiyi;
        kwmkgoegswsseyia:
        if (isset($yikciqwsimweauyg[1])) {
            goto wwiysyawwqeuikcc;
        }
        goto gkkogauyaimaaoky;
        wscoawgsgqekweuq:
        oqoyyooooyegowuk:
        goto ysuyamauyegkceea;
        oaoaskeocoucoaes:
        kggwwgeqkgwyoseq:
        goto iuugeqgkacqmuais;
        eqocwcasskyqeauu:
    }
    
    protected function mgaiuyuciiueqyge()
    {
        goto oyswaymeoiouuaoo;
        keuamggsqkcwyoqi:
        return false;
        goto uywiwaiokksgwuqm;
        aykkiwwmmckueiak:
        return true;
        goto gmiywscmoiqcceks;
        gmiywscmoiqcceks:
        kkiiykemaoeswsay:
        goto ikumyeymcsyyuauw;
        ikumyeymcsyyuauw:
        uiseoyicaoyaokum:
        goto keuamggsqkcwyoqi;
        imumueocakucecam:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto ssciauiqmswaugss;
        gqsmmaqkuciiwwki:
        if (!isset($yikciqwsimweauyg[1])) {
            goto kkiiykemaoeswsay;
        }
        goto yuokckkqcuumcmua;
        oyswaymeoiouuaoo:
        if (!(stripos($this->agent, "\x56\151\166\x61\154\144\151") !== false)) {
            goto uiseoyicaoyaokum;
        }
        goto ycagakkcsskiqweu;
        ycagakkcsskiqweu:
        $yikciqwsimweauyg = explode("\57", stristr($this->agent, "\126\151\x76\x61\x6c\x64\x69"));
        goto gqsmmaqkuciiwwki;
        ssciauiqmswaugss:
        $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
        goto aykkiwwmmckueiak;
        yuokckkqcuumcmua:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto imumueocakucecam;
        uywiwaiokksgwuqm:
    }
    
    protected function syeogeymkuiqsoec()
    {
        goto yyagogoiskcuomuq;
        qwscyqgokmkeqwuq:
        gousoguwcwieyseq:
        goto syosmkmiyacocysi;
        cwmsekismgywawai:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x59\141\x42\x72\157\167\163\x65\x72"));
        goto aooeicywwyscawue;
        syosmkmiyacocysi:
        $this->icigyueiiwsukmsu(true);
        goto soiuksqqwmsqwyeq;
        lwaoqwcmyiqkkouw:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto emsgawiqsesiiccg;
        aooeicywwyscawue:
        if (!isset($yikciqwsimweauyg[1])) {
            goto ykqeyymweawywsia;
        }
        goto qemqoaymwywkewmy;
        uguwgicugawycckm:
        return true;
        goto wskgeycusaokeymw;
        wugyaiqayoamwacg:
        if (stripos($this->agent, "\101\x6e\x64\162\157\151\x64") !== false) {
            goto yisqaaicegsokeuk;
        }
        goto secssyuygoycmiqa;
        emsgawiqsesiiccg:
        $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
        goto eekkyoakqmykcqec;
        kiauseesqiwimyue:
        wouosmamsmggekic:
        goto sokqsksiecasgugs;
        wskgeycusaokeymw:
        ykqeyymweawywsia:
        goto kmwwukmymssqakuk;
        guuowemmmmcgukow:
        return false;
        goto yycskqumwcimyyye;
        sokqsksiecasgugs:
        $this->eywockmuswoykooc(true);
        goto qyaiyoskqmqyyuos;
        yyagogoiskcuomuq:
        if (!(stripos($this->agent, "\131\141\x42\x72\x6f\167\163\x65\162") !== false)) {
            goto awoyakoygoouaqgi;
        }
        goto cwmsekismgywawai;
        syookwiaqwmsaoem:
        yisqaaicegsokeuk:
        goto usscqwyeesggymse;
        kmwwukmymssqakuk:
        awoyakoygoouaqgi:
        goto guuowemmmmcgukow;
        ismcyiwkmqaaygge:
        if (stripos($this->agent, "\115\x6f\x62\151\x6c\145") !== false) {
            goto wouosmamsmggekic;
        }
        goto wugyaiqayoamwacg;
        qemqoaymwywkewmy:
        $quiguswioiaaywey = explode("\x20", $yikciqwsimweauyg[1]);
        goto lwaoqwcmyiqkkouw;
        usscqwyeesggymse:
        $this->icigyueiiwsukmsu(true);
        goto okmmkcokmyiqkceg;
        okmmkcokmyiqkceg:
        messwieuimiowsag:
        goto uguwgicugawycckm;
        secssyuygoycmiqa:
        goto messwieuimiowsag;
        goto qwscyqgokmkeqwuq;
        qyaiyoskqmqyyuos:
        goto messwieuimiowsag;
        goto syookwiaqwmsaoem;
        soiuksqqwmsqwyeq:
        goto messwieuimiowsag;
        goto kiauseesqiwimyue;
        eekkyoakqmykcqec:
        if (stripos($this->agent, "\x69\x50\141\144") !== false) {
            goto gousoguwcwieyseq;
        }
        goto ismcyiwkmqaaygge;
        yycskqumwcimyyye:
    }
    
    protected function gqwuksqaksqcemam()
    {
        goto okgoksuuouqmmqog;
        yqiyiacommmwsuce:
        wyqemyugccycgaso:
        goto kweqeekeouiqocqw;
        kmggqcwmkwwcuioa:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto gssmokgwcmqesyao;
        yecageyyqwumqoca:
        qiayswmiyoqisyac:
        goto aqcwmswmgmgqokmu;
        aqcwmswmgmgqokmu:
        return true;
        goto iuaaiqsmgoqiscio;
        gssmokgwcmqesyao:
        if (!(stripos($this->agent, "\120\x6f\x72\x74\x61\x62\154\x65\51") !== false || stripos($this->agent, "\x56\151\x74\x61") !== false)) {
            goto qiayswmiyoqisyac;
        }
        goto agwcwemswacqgqyk;
        kqaemkmmqkyeweye:
        $quiguswioiaaywey = explode("\x29", $yikciqwsimweauyg[2]);
        goto kmggqcwmkwwcuioa;
        iuaaiqsmgoqiscio:
        sgkeayimkgeyaqic:
        goto yqiyiacommmwsuce;
        wcuqqmycwwoqwwga:
        $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
        goto woiqioceiyccoyyi;
        agwcwemswacqgqyk:
        $this->eywockmuswoykooc(true);
        goto yecageyyqwumqoca;
        kweqeekeouiqocqw:
        return false;
        goto ikkseymmmeooqmcm;
        woiqioceiyccoyyi:
        if (!isset($yikciqwsimweauyg[0])) {
            goto sgkeayimkgeyaqic;
        }
        goto kqaemkmmqkyeweye;
        okgoksuuouqmmqog:
        if (!(stripos($this->agent, "\120\x6c\x61\x79\x53\164\141\164\151\x6f\156\x20") !== false)) {
            goto wyqemyugccycgaso;
        }
        goto kgmwwkoiqwyscmys;
        kgmwwkoiqwyscmys:
        $yikciqwsimweauyg = explode("\x20", stristr($this->agent, "\120\154\x61\x79\x53\164\141\164\x69\157\x6e\40"));
        goto wcuqqmycwwoqwwga;
        ikkseymmmeooqmcm:
    }
    
    protected function wiqieuoqysguameu()
    {
        goto soqyakgcqemouuko;
        kumioksgmqmsaeqy:
        $this->ikciowomiysyewgc(self::BROWSER_WGET);
        goto ckkwwiuyquomkcku;
        ckkwwiuyquomkcku:
        return true;
        goto yemgimowqwsuqegu;
        squaugeowuwyumqu:
        $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
        goto kumioksgmqmsaeqy;
        yemgimowqwsuqegu:
        cimakcokyqkmyiau:
        goto sskqokueeqgsuumq;
        sskqokueeqgsuumq:
        return false;
        goto ysuagggqaicqyguk;
        soqyakgcqemouuko:
        if (!preg_match("\x21\x5e\127\x67\145\x74\57\50\x5b\x5e\x20\135\x2b\x29\41\x69", $this->agent, $yikciqwsimweauyg)) {
            goto cimakcokyqkmyiau;
        }
        goto squaugeowuwyumqu;
        ysuagggqaicqyguk:
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        goto msasquyamakaamys;
        qikuwygeoaimcukg:
        return false;
        goto ceiseomqooekseuo;
        okacoggoqgoomuyc:
        wiuyqgeaacmksuqq:
        goto qikuwygeoaimcukg;
        yammukygywskcuey:
        $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
        goto yusmiciysquiqayq;
        yymscyccyaauqiaa:
        $yikciqwsimweauyg = explode("\x2f", stristr($this->agent, "\x63\165\162\154"));
        goto owayquiaceqooaiq;
        sisuqeisegegcsiy:
        $quiguswioiaaywey = explode("\40", $yikciqwsimweauyg[1]);
        goto yammukygywskcuey;
        yusmiciysquiqayq:
        $this->ikciowomiysyewgc(self::BROWSER_CURL);
        goto gquuqqacuqsgsyqc;
        owayquiaceqooaiq:
        if (!isset($yikciqwsimweauyg[1])) {
            goto womwoaskosgsauog;
        }
        goto sisuqeisegegcsiy;
        msasquyamakaamys:
        if (!(strpos($this->agent, "\143\165\162\x6c") === 0)) {
            goto wiuyqgeaacmksuqq;
        }
        goto yymscyccyaauqiaa;
        gquuqqacuqsgsyqc:
        return true;
        goto qysqqycgiwmucggw;
        qysqqycgiwmucggw:
        womwoaskosgsauog:
        goto okacoggoqgoomuyc;
        ceiseomqooekseuo:
    }
    
    protected function acmmsiuwaekasogs()
    {
        goto aeycoymkqiwogwag;
        kgweiqeqkukguqui:
        suessqeuiasoqioi:
        goto acwuukokiwgoswuc;
        miqaocyiuwmyyycc:
        $this->platform = self::PLATFORM_FIRE_OS;
        goto cguaokskycyggqym;
        cakiqwoseiyqqqkk:
        uwkiseisiuqsoqsa:
        goto yicuqsmuiueiuwos;
        qmisymqoqmqocwoe:
        if (stripos($this->agent, "\122\157\x6b\165") !== false) {
            goto suessqeuiasoqioi;
        }
        goto mcygcucugmyqswys;
        qykkceysyessasey:
        goto siaqsogicwwmayco;
        goto iwyoaksegwaksmsu;
        awumcmmeumuaiocw:
        goto siaqsogicwwmayco;
        goto oguaeaawigyoscii;
        ymyoskqgyeykqmom:
        $this->platform = self::PLATFORM_OPENSOLARIS;
        goto gwoqyokuiqqwugsk;
        ugeyyoekkekmiqcw:
        goto siaqsogicwwmayco;
        goto kgweiqeqkukguqui;
        seaqqywowweasaoa:
        $this->platform = self::PLATFORM_OPENBSD;
        goto scoouaqeoeicswwu;
        eouqmgocqewmwgik:
        $this->platform = self::PLATFORM_POSTMAN;
        goto ymucyiowcaqucyom;
        oguaeaawigyoscii:
        eicqsqkmeaimooii:
        goto mougyosiwyugsymo;
        iyqcgqusyeiiaiai:
        $this->platform = self::PLATFORM_IPHONE;
        goto sukiqmyemewakiao;
        uyiaqakwuswweqme:
        goto siaqsogicwwmayco;
        goto ecusscoueakqaqsu;
        gawseeswkisqiwoe:
        $this->platform = self::PLATFORM_FREEBSD;
        goto kycoymqmaukeekum;
        coakwcyymiqcmwug:
        goto siaqsogicwwmayco;
        goto iacwiwmoggwseqsa;
        iouagkwueekusiwi:
        goto siaqsogicwwmayco;
        goto imagekgwsuqccwgo;
        ciewwguuyumcisme:
        if (stripos($this->agent, "\116\145\164\102\x53\x44") !== false) {
            goto yyimqwkqigowmcco;
        }
        goto uwwiiwscccuowuoq;
        ggqeyyoscwueysku:
        ewgqscsiomaciyew:
        goto qqsmygoumegcogay;
        ycskcusgcyeowagm:
        goto siaqsogicwwmayco;
        goto owkougkyymiwoaqu;
        eyekywukwqucywcm:
        if (stripos($this->agent, "\117\160\145\156\x42\123\x44") !== false) {
            goto scqaokckckemicqi;
        }
        goto ciewwguuyumcisme;
        qqsmygoumegcogay:
        $this->platform = self::PLATFORM_IPAD;
        goto qykkceysyessasey;
        umgsqowiqmesssay:
        goto siaqsogicwwmayco;
        goto cakiqwoseiyqqqkk;
        wmkiqcsuycsieuga:
        kuyowuyquoioeqoc:
        goto sgkmocmkaomwusik;
        igcukieyogyaqwyo:
        if (stripos($this->agent, "\x49\146\x72\141\155\x65\x6c\171") !== false) {
            goto mquyowqsoawycyok;
        }
        goto imgwqyoiweuiwiec;
        yeqmmgegmqgwyaea:
        sesgwayockkaakwm:
        goto mkycqgqaawooaaeu;
        qmqsccegugoiyaiu:
        goto siaqsogicwwmayco;
        goto ggqeyyoscwueysku;
        aaaaikyksmgkyygi:
        goto siaqsogicwwmayco;
        goto wioukmwequaosqsu;
        yioawsqawmqagueg:
        wwaocaooaayqamsu:
        goto acuiieocsgiyakia;
        ecusscoueakqaqsu:
        sccmgumeswegawyk:
        goto okqmcygoiwaesmis;
        gqomqwuiesioaaaq:
        if (stripos($this->agent, "\x63\165\162\154") !== false) {
            goto aucmemccqucmicwm;
        }
        goto ywuwweugeccmeuqk;
        icyocwacicqauogu:
        goto siaqsogicwwmayco;
        goto esqqqokyeaoauoou;
        sieaoicuiusscywg:
        if (stripos($this->agent, "\x74\166\x4f\123") !== false) {
            goto koceigseyecoyoia;
        }
        goto gqomqwuiesioaaaq;
        ugccoisuygekiaae:
        yyimqwkqigowmcco:
        goto gqwemyquuwgqcaic;
        omeoqgskaoomewqa:
        $this->platform = self::PLATFORM_WINDOWS;
        goto ewiyakwgaasssqmq;
        umkyqiyguqoauyek:
        if (stripos($this->agent, "\154\x69\156\x75\170") !== false) {
            goto wwaocaooaayqamsu;
        }
        goto eceqcqseqcswkywu;
        eceqcqseqcswkywu:
        if (stripos($this->agent, "\116\x6f\153\151\x61") !== false) {
            goto mioiqgkakcguokqa;
        }
        goto uuweusyuygicyoik;
        kwsagikwoqogqecc:
        umyuckgysaegimue:
        goto wicaemaewwoooiuq;
        imagekgwsuqccwgo:
        giawgsomaouqgiyc:
        goto eouqmgocqewmwgik;
        aeeiacomeyceesoe:
        goto siaqsogicwwmayco;
        goto seeosigigeuueiqy;
        oakqgwgaaakkecgm:
        goto siaqsogicwwmayco;
        goto wyioqosyqawqkoyi;
        uwwiiwscccuowuoq:
        if (stripos($this->agent, "\117\160\145\156\123\157\x6c\x61\x72\x69\163") !== false) {
            goto ugkesgkkcqcasmoq;
        }
        goto uyymyaogieaawaig;
        meiykooeimaqqico:
        $this->platform = self::PLATFORM_APPLE_TV;
        goto oakqgwgaaakkecgm;
        sskkqsmyqmgyewue:
        mioiqgkakcguokqa:
        goto aacemqiqgqoyokmi;
        msqmyqgiaeeeoeco:
        if (stripos($this->agent, "\154\151\x6e\x75\170") !== false && stripos($this->agent, "\123\115\101\x52\x54\x2d\124\x56") !== false) {
            goto eeieacyyeywwyewo;
        }
        goto umkyqiyguqoauyek;
        ccmmogiaggiuewmu:
        if (stripos($this->agent, "\167\151\156") !== false) {
            goto yikaomgieukoawws;
        }
        goto syqgqkeomqsysaey;
        woqqukymqiuyququ:
        $this->platform = self::PLATFORM_SUNOS;
        goto ycskcusgcyeowagm;
        mcygcucugmyqswys:
        if (stripos($this->agent, "\x69\117\123") !== false) {
            goto oymuyuskiqyacysw;
        }
        goto sieaoicuiusscywg;
        uuweusyuygicyoik:
        if (stripos($this->agent, "\102\x6c\x61\x63\153\102\145\162\162\171") !== false) {
            goto gcgyqiaawwccgqaw;
        }
        goto qugmeamkemckgqwo;
        uwegawkagcagoeiw:
        eeieacyyeywwyewo:
        goto aycyoqqqwmyciise;
        iacwiwmoggwseqsa:
        ugkesgkkcqcasmoq:
        goto ymyoskqgyeykqmom;
        qwkcgqyyygyasgqw:
        $this->platform = self::PLATFORM_TERMINAL;
        goto aeeiacomeyceesoe;
        ykwmoaqmwggiqmsk:
        if (stripos($this->agent, "\x69\x50\x6f\144") !== false) {
            goto iewuyuigwmkcmcas;
        }
        goto yymiwwumowysiagy;
        gqwemyquuwgqcaic:
        $this->platform = self::PLATFORM_NETBSD;
        goto coakwcyymiqcmwug;
        yqaikoeaiuauikcw:
        goto siaqsogicwwmayco;
        goto yyckaiasyqokgsyy;
        muicsociwumgosaw:
        goto siaqsogicwwmayco;
        goto yioawsqawmqagueg;
        ywuwweugeccmeuqk:
        if (stripos($this->agent, "\x43\x72\x4f\123") !== false) {
            goto qqsiimkqkguqkeag;
        }
        goto iwacoiqoegwuaoqo;
        scoouaqeoeicswwu:
        goto siaqsogicwwmayco;
        goto ugccoisuygekiaae;
        kyqkigouggegscsi:
        siaqsogicwwmayco:
        goto igiuieggauocicsg;
        esqqqokyeaoauoou:
        yikaomgieukoawws:
        goto omeoqgskaoomewqa;
        cgqqkkwugmiqyiow:
        if (stripos($this->agent, "\151\x50\141\144") !== false) {
            goto ewgqscsiomaciyew;
        }
        goto ykwmoaqmwggiqmsk;
        muiouqmomamguoce:
        $this->platform = self::PLATFORM_OS2;
        goto umgsqowiqmesssay;
        ukmeggiqssyyyuku:
        $this->platform = self::PLATFORM_I_FRAME;
        goto kyqkigouggegscsi;
        oyioakacwwceegie:
        $this->platform = self::PLATFORM_BLACKBERRY;
        goto gsyegqcsyscyycic;
        uyymyaogieaawaig:
        if (stripos($this->agent, "\123\165\156\x4f\x53") !== false) {
            goto gaomwgqgumkcqawg;
        }
        goto iwgksuqmosckeqys;
        aacemqiqgqoyokmi:
        $this->platform = self::PLATFORM_NOKIA;
        goto eequuumweyqioygw;
        yyckaiasyqokgsyy:
        oymuyuskiqyacysw:
        goto ewumqgcwgeqqsoao;
        sgkmocmkaomwusik:
        $this->platform = self::PLATFORM_PLAYSTATION;
        goto ugeyyoekkekmiqcw;
        sayicwyqgigeswug:
        if (stripos($this->agent, "\102\x65\117\123") !== false) {
            goto uwkiseisiuqsoqsa;
        }
        goto ccmmogiaggiuewmu;
        gooiuuagswggewoq:
        mquyowqsoawycyok:
        goto ukmeggiqssyyyuku;
        gqcyummwsikcccom:
        csuikuskoecgsymk:
        goto miqaocyiuwmyyycc;
        acuiieocsgiyakia:
        $this->platform = self::PLATFORM_LINUX;
        goto syqyosyywqwgoeoo;
        sukiqmyemewakiao:
        goto siaqsogicwwmayco;
        goto yeqmmgegmqgwyaea;
        miayoysigsgumwyi:
        if (stripos($this->agent, "\x53\151\154\153") !== false) {
            goto csuikuskoecgsymk;
        }
        goto msqmyqgiaeeeoeco;
        iwgksuqmosckeqys:
        if (stripos($this->agent, "\117\123\134\57\62") !== false) {
            goto ysoeqwagkauquwme;
        }
        goto sayicwyqgigeswug;
        wicaemaewwoooiuq:
        $this->platform = self::PLATFORM_WINDOWS;
        goto qmqsccegugoiyaiu;
        ewumqgcwgeqqsoao:
        $this->platform = self::PLATFORM_IPHONE . "\57" . self::PLATFORM_IPAD;
        goto aaaaikyksmgkyygi;
        yymiwwumowysiagy:
        if (stripos($this->agent, "\x69\x50\x68\x6f\156\x65") !== false) {
            goto qekesyoouukaciyy;
        }
        goto qsacucessyquaame;
        yicuqsmuiueiuwos:
        $this->platform = self::PLATFORM_BEOS;
        goto icyocwacicqauogu;
        kycoymqmaukeekum:
        goto siaqsogicwwmayco;
        goto oesgciyeoewgouki;
        sucmgqcacggcucec:
        $this->platform = self::PLATFORM_IPOD;
        goto wsgkqgogymcgueag;
        iwyoaksegwaksmsu:
        iewuyuigwmkcmcas:
        goto sucmgqcacggcucec;
        iwacoiqoegwuaoqo:
        if (stripos($this->agent, "\x6f\153\150\164\x74\160") !== false) {
            goto eicqsqkmeaimooii;
        }
        goto wkmmaysiigyuyimk;
        eequuumweyqioygw:
        goto siaqsogicwwmayco;
        goto kmgqqgsuiwcyccak;
        seeosigigeuueiqy:
        qqsiimkqkguqkeag:
        goto cekocgmmwuacyckg;
        acwuukokiwgoswuc:
        $this->platform = self::PLATFORM_ROKU;
        goto yqaikoeaiuauikcw;
        eimqoqgqmsiokyeq:
        qekesyoouukaciyy:
        goto iyqcgqusyeiiaiai;
        imgwqyoiweuiwiec:
        goto siaqsogicwwmayco;
        goto kwsagikwoqogqecc;
        gsyegqcsyscyycic:
        goto siaqsogicwwmayco;
        goto kwewaoocuqgaseoa;
        cguaokskycyggqym:
        goto siaqsogicwwmayco;
        goto uwegawkagcagoeiw;
        mougyosiwyugsymo:
        $this->platform = self::PLATFORM_JAVA_ANDROID;
        goto iouagkwueekusiwi;
        wyioqosyqawqkoyi:
        aucmemccqucmicwm:
        goto qwkcgqyyygyasgqw;
        cekocgmmwuacyckg:
        $this->platform = self::PLATFORM_CHROME_OS;
        goto awumcmmeumuaiocw;
        ewiyakwgaasssqmq:
        goto siaqsogicwwmayco;
        goto wmkiqcsuycsieuga;
        aeycoymkqiwogwag:
        if (stripos($this->agent, "\167\x69\x6e\144\157\167\163") !== false) {
            goto umyuckgysaegimue;
        }
        goto cgqqkkwugmiqyiow;
        kwewaoocuqgaseoa:
        wyimgokwakggwuoi:
        goto gawseeswkisqiwoe;
        syqgqkeomqsysaey:
        if (stripos($this->agent, "\x50\x6c\141\171\163\x74\141\164\151\157\x6e") !== false) {
            goto kuyowuyquoioeqoc;
        }
        goto qmisymqoqmqocwoe;
        oesgciyeoewgouki:
        scqaokckckemicqi:
        goto seaqqywowweasaoa;
        qsacucessyquaame:
        if (stripos($this->agent, "\155\141\x63") !== false) {
            goto sesgwayockkaakwm;
        }
        goto ommoqequygggywyi;
        acysyqkmkgaoewci:
        gaomwgqgumkcqawg:
        goto woqqukymqiuyququ;
        owkougkyymiwoaqu:
        ysoeqwagkauquwme:
        goto muiouqmomamguoce;
        aycyoqqqwmyciise:
        $this->platform = self::PLATFORM_LINUX . "\57" . self::PLATFORM_SMART_TV;
        goto muicsociwumgosaw;
        wkmmaysiigyuyimk:
        if (stripos($this->agent, "\120\157\x73\164\155\x61\x6e\122\165\156\x74\x69\x6d\x65") !== false) {
            goto giawgsomaouqgiyc;
        }
        goto igcukieyogyaqwyo;
        wsgkqgogymcgueag:
        goto siaqsogicwwmayco;
        goto eimqoqgqmsiokyeq;
        qugmeamkemckgqwo:
        if (stripos($this->agent, "\106\x72\x65\145\102\123\104") !== false) {
            goto wyimgokwakggwuoi;
        }
        goto eyekywukwqucywcm;
        mkycqgqaawooaaeu:
        $this->platform = self::PLATFORM_APPLE;
        goto uyiaqakwuswweqme;
        wioukmwequaosqsu:
        koceigseyecoyoia:
        goto meiykooeimaqqico;
        ommoqequygggywyi:
        if (stripos($this->agent, "\x61\156\x64\x72\x6f\151\144") !== false) {
            goto sccmgumeswegawyk;
        }
        goto miayoysigsgumwyi;
        okqmcygoiwaesmis:
        $this->platform = self::PLATFORM_ANDROID;
        goto kkecucquwauqqyku;
        kmgqqgsuiwcyccak:
        gcgyqiaawwccgqaw:
        goto oyioakacwwceegie;
        gwoqyokuiqqwugsk:
        goto siaqsogicwwmayco;
        goto acysyqkmkgaoewci;
        syqyosyywqwgoeoo:
        goto siaqsogicwwmayco;
        goto sskkqsmyqmgyewue;
        kkecucquwauqqyku:
        goto siaqsogicwwmayco;
        goto gqcyummwsikcccom;
        ymucyiowcaqucyom:
        goto siaqsogicwwmayco;
        goto gooiuuagswggewoq;
        igiuieggauocicsg:
    }
}
