<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
    const BROWSER_UNKNOWN = 'unknown';
    const VERSION_UNKNOWN = 'unknown';
    const BROWSER_OPERA = 'Opera';
    
    const BROWSER_OPERA_MINI = 'Opera Mini';
    
    const BROWSER_WEBTV = 'WebTV';
    
    const BROWSER_EDGE = 'Edge';
    
    const BROWSER_IE = 'Internet Explorer';
    
    const BROWSER_POCKET_IE = 'Pocket Internet Explorer';
    
    const BROWSER_KONQUEROR = 'Konqueror';
    
    const BROWSER_ICAB = 'iCab';
    
    const BROWSER_OMNIWEB = 'OmniWeb';
    
    const BROWSER_FIREBIRD = 'Firebird';
    
    const BROWSER_FIREFOX = 'Firefox';
    
    const BROWSER_BRAVE = 'Brave';
    
    const BROWSER_PALEMOON = 'Palemoon';
    
    const BROWSER_ICEWEASEL = 'Iceweasel';
    
    const BROWSER_SHIRETOKO = 'Shiretoko';
    
    const BROWSER_MOZILLA = 'Mozilla';
    
    const BROWSER_AMAYA = 'Amaya';
    
    const BROWSER_LYNX = 'Lynx';
    
    const BROWSER_SAFARI = 'Safari';
    
    const BROWSER_IPHONE = 'iPhone';
    
    const BROWSER_IPOD = 'iPod';
    
    const BROWSER_IPAD = 'iPad';
    
    const BROWSER_CHROME = 'Chrome';
    
    const BROWSER_ANDROID = 'Android';
    
    const BROWSER_GOOGLEBOT = 'GoogleBot';
    
    const BROWSER_CURL = 'cURL';
    
    const BROWSER_WGET = 'Wget';
    
    const BROWSER_UCBROWSER = 'UCBrowser';
    
    const BROWSER_YANDEXBOT = 'YandexBot';
    
    const BROWSER_YANDEXIMAGERESIZER_BOT = 'YandexImageResizer';
    
    const BROWSER_YANDEXIMAGES_BOT = 'YandexImages';
    
    const BROWSER_YANDEXVIDEO_BOT = 'YandexVideo';
    
    const BROWSER_YANDEXMEDIA_BOT = 'YandexMedia';
    
    const BROWSER_YANDEXBLOGS_BOT = 'YandexBlogs';
    
    const BROWSER_YANDEXFAVICONS_BOT = 'YandexFavicons';
    
    const BROWSER_YANDEXWEBMASTER_BOT = 'YandexWebmaster';
    
    const BROWSER_YANDEXDIRECT_BOT = 'YandexDirect';
    
    const BROWSER_YANDEXMETRIKA_BOT = 'YandexMetrika';
    
    const BROWSER_YANDEXNEWS_BOT = 'YandexNews';
    
    const BROWSER_YANDEXCATALOG_BOT = 'YandexCatalog';
    
    const BROWSER_SLURP = 'Yahoo! Slurp';
    
    const BROWSER_W3CVALIDATOR = 'W3C Validator';
    
    const BROWSER_BLACKBERRY = 'BlackBerry';
    
    const BROWSER_ICECAT = 'IceCat';
    
    const BROWSER_NOKIA_S60 = 'Nokia S60 OSS Browser';
    
    const BROWSER_NOKIA = 'Nokia Browser';
    
    const BROWSER_MSN = 'MSN Browser';
    
    const BROWSER_MSNBOT = 'MSN Bot';
    
    const BROWSER_BINGBOT = 'Bing Bot';
    
    const BROWSER_VIVALDI = 'Vivaldi';
    
    const BROWSER_YANDEX = 'Yandex';
    
    const BROWSER_NETSCAPE_NAVIGATOR = 'Netscape Navigator';
    
    const BROWSER_GALEON = 'Galeon';
    
    const BROWSER_NETPOSITIVE = 'NetPositive';
    
    const BROWSER_PHOENIX = 'Phoenix';
    
    const BROWSER_PLAYSTATION = "PlayStation";
    const BROWSER_SAMSUNG = "SamsungBrowser";
    const BROWSER_SILK = "Silk";
    const BROWSER_I_FRAME = "Iframely";
    const BROWSER_COCOA = "CocoaRestClient";
    const PLATFORM_UNKNOWN = 'unknown';
    const PLATFORM_WINDOWS = 'Windows';
    const PLATFORM_WINDOWS_CE = 'Windows CE';
    const PLATFORM_APPLE = 'Apple';
    const PLATFORM_LINUX = 'Linux';
    const PLATFORM_OS2 = 'OS/2';
    const PLATFORM_BEOS = 'BeOS';
    const PLATFORM_IPHONE = 'iPhone';
    const PLATFORM_IPOD = 'iPod';
    const PLATFORM_IPAD = 'iPad';
    const PLATFORM_BLACKBERRY = 'BlackBerry';
    const PLATFORM_NOKIA = 'Nokia';
    const PLATFORM_FREEBSD = 'FreeBSD';
    const PLATFORM_OPENBSD = 'OpenBSD';
    const PLATFORM_NETBSD = 'NetBSD';
    const PLATFORM_SUNOS = 'SunOS';
    const PLATFORM_OPENSOLARIS = 'OpenSolaris';
    const PLATFORM_ANDROID = 'Android';
    const PLATFORM_PLAYSTATION = "Sony PlayStation";
    const PLATFORM_ROKU = "Roku";
    const PLATFORM_APPLE_TV = "Apple TV";
    const PLATFORM_TERMINAL = "Terminal";
    const PLATFORM_FIRE_OS = "Fire OS";
    const PLATFORM_SMART_TV = "SMART-TV";
    const PLATFORM_CHROME_OS = "Chrome OS";
    const PLATFORM_JAVA_ANDROID = "Java/Android";
    const PLATFORM_POSTMAN = "Postman";
    const PLATFORM_I_FRAME = "Iframely";
    const OPERATING_SYSTEM_UNKNOWN = 'unknown';
    
    public function __construct($uowwycywwssskuys = '')
    {
        $this->runSetup = false;
        if ($uowwycywwssskuys != '') {
            $this->iaoqckywsogqyiio($uowwycywwssskuys);
        } else {
            $this->reset();
            $this->qeqwswckeiieossq();
        }
        parent::__construct();
    }
    
    public function reset()
    {
        $this->os = self::OPERATING_SYSTEM_UNKNOWN;
        $this->name = self::BROWSER_UNKNOWN;
        $this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $this->isAol = false;
        $this->isRobot = false;
        $this->version = self::VERSION_UNKNOWN;
        $this->platform = self::PLATFORM_UNKNOWN;
        $this->isTablet = false;
        $this->isMobile = false;
        $this->isFacebook = false;
        $this->aolVersion = self::VERSION_UNKNOWN;
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
        $this->version = preg_replace('/[^0-9,.,a-z,A-Z-]/', '', $kqagasmwymmuiksq);
    }
    
    public function wguymammuskciise()
    {
        return $this->aolVersion;
    }
    
    public function qkeiegqwsgiwwkik(?string $kqagasmwymmuiksq)
    {
        $this->aolVersion = preg_replace('/[^0-9,.,a-z,A-Z]/', '', $kqagasmwymmuiksq);
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
        $this->reset();
        $this->agent = $agent_string;
        $this->qeqwswckeiieossq();
    }
    
    public function uwkecmsuikoyuymq()
    {
        return strpos($this->agent, "chromeframe") !== false;
    }
    
    public function __toString()
    {
        return "<strong>Browser Name:</strong> {$this->aagmmewiwysmgseq()}<br/>\n" . "<strong>Browser Version:</strong> {$this->gikwwgqmwccescgy()}<br/>\n" . "<strong>Browser User Agent String:</strong> {$this->ckaoiscoyuuosace()}<br/>\n" . "<strong>Platform:</strong> {$this->kqeiosksqeuksyqu()}<br/>";
    }
    
    protected function qeqwswckeiieossq()
    {
        $this->acmmsiuwaekasogs();
        $this->iggocwysumewuquw();
        $this->caqkscqcyqeciamc();
    }
    
    protected function iggocwysumewuquw()
    {
        return $this->maowoygwywiawwyc() || $this->gggwayigqkokeigi() || $this->sukgiyywqmoigmom() || $this->makyeuicweuowumi() || $this->cgequousmqakcios() || $this->eqqcucwcgwqiogik() || $this->usswyskeuiskccki() || $this->aweyeayscomouegw() || $this->mgaiuyuciiueqyge() || $this->syeogeymkuiqsoec() || $this->eqkuicmgoaougagi() || $this->qsseiqmmssqiuomm() || $this->oomiyiuwesyuegws() || $this->uockauwugkqgqkce() || $this->oomuqgqyykuccewm() || $this->ciawmegkaaacmoew() || $this->cysskoyaouegkmky() || $this->iaacgcgmmegamkiu() || $this->uumayumieageyiuy() || $this->qcqikaemyysumcsu() || $this->siwcougwagmcauoi() || $this->aeywoaukuwaeegku() || $this->qaigygakimuucuki() || $this->cimegwusqouswgao() || $this->oumugceeiaceqieo() || $this->wmcqkeiuewqameek() || $this->eccwcswcuggacgua() || $this->mwoogugykmiymmgy() || $this->qceuceikgwagccsq() || $this->uuyiswoewekeauaw() || $this->sqawuqckmasomwiq() || $this->aaseiwemciwamqqm() || $this->ksumscewmeyaocyy() || $this->qsemkkquagiaoioc() || $this->bgkmykkkkksumwea() || $this->ugaiaiamygwcwemg() || $this->ksikmmeqsuycsqck() || $this->yswggmyigakcackc() || $this->uiwkymoksesuumwe() || $this->qcswwmqaioswesoq() || $this->momgeesgauwmqaks() || $this->gewsuekegcksgkai() || $this->ecocgoqgymuacegg() || $this->wacucmcykeakeeou() || $this->qaweacwkwmmuqqam() || $this->usemqkymaguiocgy() || $this->mqsiuucsqqyuwcuw() || $this->mmyqoqguasigekck() || $this->noeygigqkeciickm() || $this->akwueocamkykcwyy() || $this->ykyiqmysgemoaakw() || $this->qiqsouwkwmwmqeem() || $this->wiqieuoqysguameu() || $this->gqwuksqaksqcemam() || $this->cgqcukygysieeqko() || $this->ccaaioyauuuuyikg() || $this->aowooqokikgeegkm();
    }
    
    protected function uumayumieageyiuy()
    {
        if (stripos($this->agent, 'blackberry') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, "BlackBerry"));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->name = self::BROWSER_BLACKBERRY;
                $this->eywockmuswoykooc(true);
                return true;
            }
        }
        return false;
    }
    
    protected function caqkscqcyqeciamc()
    {
        $this->igmimcweskyugiqm(false);
        $this->qkeiegqwsgiwwkik(self::VERSION_UNKNOWN);
        if (stripos($this->agent, 'aol') !== false) {
            $quiguswioiaaywey = explode(' ', stristr($this->agent, 'AOL'));
            if (isset($quiguswioiaaywey[1])) {
                $this->igmimcweskyugiqm(true);
                $this->qkeiegqwsgiwwkik(preg_replace('/[^0-9\\.a-z]/i', '', $quiguswioiaaywey[1]));
                return true;
            }
        }
        return false;
    }
    
    protected function siwcougwagmcauoi()
    {
        if (stripos($this->agent, 'googlebot') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'googlebot'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_GOOGLEBOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function oumugceeiaceqieo()
    {
        if (stripos($this->agent, 'YandexBot') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexBot'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXBOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function wmcqkeiuewqameek()
    {
        if (stripos($this->agent, 'YandexImageResizer') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexImageResizer'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXIMAGERESIZER_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function mwoogugykmiymmgy()
    {
        if (stripos($this->agent, 'YandexCatalog') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexCatalog'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXCATALOG_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function qsemkkquagiaoioc()
    {
        if (stripos($this->agent, 'YandexNews') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexNews'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXNEWS_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function ksumscewmeyaocyy()
    {
        if (stripos($this->agent, 'YandexMetrika') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexMetrika'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXMETRIKA_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function qceuceikgwagccsq()
    {
        if (stripos($this->agent, 'YandexDirect') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexDirect'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXDIRECT_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function ugaiaiamygwcwemg()
    {
        if (stripos($this->agent, 'YandexWebmaster') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexWebmaster'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXWEBMASTER_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function uuyiswoewekeauaw()
    {
        if (stripos($this->agent, 'YandexFavicons') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexFavicons'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXFAVICONS_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function eccwcswcuggacgua()
    {
        if (stripos($this->agent, 'YandexBlogs') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexBlogs'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXBLOGS_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function aaseiwemciwamqqm()
    {
        if (stripos($this->agent, 'YandexMedia') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexMedia'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXMEDIA_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function bgkmykkkkksumwea()
    {
        if (stripos($this->agent, 'YandexVideo') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexVideo'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXVIDEO_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function sqawuqckmasomwiq()
    {
        if (stripos($this->agent, 'YandexImages') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YandexImages'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(';', '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_YANDEXIMAGES_BOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function aeywoaukuwaeegku()
    {
        if (stripos($this->agent, "msnbot") !== false) {
            $yikciqwsimweauyg = explode("/", stristr($this->agent, "msnbot"));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(" ", $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(";", '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_MSNBOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function qaigygakimuucuki()
    {
        if (stripos($this->agent, "bingbot") !== false) {
            $yikciqwsimweauyg = explode("/", stristr($this->agent, "bingbot"));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(" ", $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(";", '', $quiguswioiaaywey[0]));
                $this->name = self::BROWSER_BINGBOT;
                $this->aasmeayouwmacaow(true);
                return true;
            }
        }
        return false;
    }
    
    protected function ykyiqmysgemoaakw()
    {
        if (stripos($this->agent, 'W3C-checklink') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'W3C-checklink'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->name = self::BROWSER_W3CVALIDATOR;
                return true;
            }
        } elseif (stripos($this->agent, 'W3C_Validator') !== false) {
            
            $eaogoiscgwgmugsq = str_replace("W3C_Validator ", "W3C_Validator/", $this->agent);
            $yikciqwsimweauyg = explode('/', stristr($eaogoiscgwgmugsq, 'W3C_Validator'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->name = self::BROWSER_W3CVALIDATOR;
                return true;
            }
        } elseif (stripos($this->agent, 'W3C-mobileOK') !== false) {
            $this->name = self::BROWSER_W3CVALIDATOR;
            $this->eywockmuswoykooc(true);
            return true;
        }
        return false;
    }
    
    protected function cimegwusqouswgao()
    {
        if (stripos($this->agent, 'slurp') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Slurp'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->name = self::BROWSER_SLURP;
                $this->aasmeayouwmacaow(true);
                $this->eywockmuswoykooc(false);
                return true;
            }
        }
        return false;
    }
    
    protected function gggwayigqkokeigi()
    {
        if (stripos($this->agent, 'Brave/') !== false) {
            $uuygmciickwewegw = explode('/', stristr($this->agent, 'Brave'));
            if (isset($uuygmciickwewegw[1])) {
                $quiguswioiaaywey = explode(' ', $uuygmciickwewegw[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
                return true;
            }
        } elseif (stripos($this->agent, ' Brave ') !== false) {
            $this->ikciowomiysyewgc(self::BROWSER_BRAVE);
            
            
            $this->aasasueowyemuyoc('');
            return true;
        }
        return false;
    }
    
    protected function makyeuicweuowumi()
    {
        if (stripos($this->agent, 'Edge/') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Edge'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_EDGE);
                if (stripos($this->agent, 'Windows Phone') !== false || stripos($this->agent, 'Android') !== false) {
                    $this->eywockmuswoykooc(true);
                }
                return true;
            }
        }
        return false;
    }
    
    protected function cgequousmqakcios()
    {
        
        if (stripos($this->agent, 'Trident/7.0; rv:11.0') !== false) {
            $this->ikciowomiysyewgc(self::BROWSER_IE);
            $this->aasasueowyemuyoc('11.0');
            return true;
        } elseif (stripos($this->agent, 'microsoft internet explorer') !== false) {
            $this->ikciowomiysyewgc(self::BROWSER_IE);
            $this->aasasueowyemuyoc('1.0');
            $yikciqwsimweauyg = stristr($this->agent, '/');
            if (preg_match('/308|425|426|474|0b1/i', $yikciqwsimweauyg)) {
                $this->aasasueowyemuyoc('1.5');
            }
            return true;
        } elseif (stripos($this->agent, 'msie') !== false && stripos($this->agent, 'opera') === false) {
            
            if (stripos($this->agent, 'msnb') !== false) {
                $yikciqwsimweauyg = explode(' ', stristr(str_replace(';', '; ', $this->agent), 'MSN'));
                if (isset($yikciqwsimweauyg[1])) {
                    $this->ikciowomiysyewgc(self::BROWSER_MSN);
                    $this->aasasueowyemuyoc(str_replace(['(', ')', ';'], '', $yikciqwsimweauyg[1]));
                    return true;
                }
            }
            $yikciqwsimweauyg = explode(' ', stristr(str_replace(';', '; ', $this->agent), 'msie'));
            if (isset($yikciqwsimweauyg[1])) {
                $this->ikciowomiysyewgc(self::BROWSER_IE);
                $this->aasasueowyemuyoc(str_replace(['(', ')', ';'], '', $yikciqwsimweauyg[1]));
                if (stripos($this->agent, 'IEMobile') !== false) {
                    $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
                    $this->eywockmuswoykooc(true);
                }
                return true;
            }
        } elseif (stripos($this->agent, 'trident') !== false) {
            $this->ikciowomiysyewgc(self::BROWSER_IE);
            $sogksuscggsicmac = explode('rv:', $this->agent);
            if (isset($sogksuscggsicmac[1])) {
                $this->aasasueowyemuyoc(preg_replace('/[^0-9.]+/', '', $sogksuscggsicmac[1]));
                $this->agent = str_replace(["Mozilla", "Gecko"], "MSIE", $this->agent);
            }
        } elseif (stripos($this->agent, 'mspie') !== false || stripos($this->agent, 'pocket') !== false) {
            $yikciqwsimweauyg = explode(' ', stristr($this->agent, 'mspie'));
            if (isset($yikciqwsimweauyg[1])) {
                $this->skgoeccmwgyoiusu(self::PLATFORM_WINDOWS_CE);
                $this->ikciowomiysyewgc(self::BROWSER_POCKET_IE);
                $this->eywockmuswoykooc(true);
                if (stripos($this->agent, 'mspie') !== false) {
                    $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
                } else {
                    $quiguswioiaaywey = explode('/', $this->agent);
                    if (isset($quiguswioiaaywey[1])) {
                        $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                    }
                }
                return true;
            }
        }
        return false;
    }
    
    protected function eqqcucwcgwqiogik()
    {
        if (stripos($this->agent, 'opera mini') !== false) {
            $cgkyugweawsewkuu = stristr($this->agent, 'opera mini');
            if (preg_match('/\\//', $cgkyugweawsewkuu)) {
                $yikciqwsimweauyg = explode('/', $cgkyugweawsewkuu);
                if (isset($yikciqwsimweauyg[1])) {
                    $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                    $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                }
            } else {
                $quiguswioiaaywey = explode(' ', stristr($cgkyugweawsewkuu, 'opera mini'));
                if (isset($quiguswioiaaywey[1])) {
                    $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                }
            }
            $this->name = self::BROWSER_OPERA_MINI;
            $this->eywockmuswoykooc(true);
            return true;
        } elseif (stripos($this->agent, 'opera') !== false) {
            $cgkyugweawsewkuu = stristr($this->agent, 'opera');
            if (preg_match('/Version\\/(1*.*)$/', $cgkyugweawsewkuu, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            } elseif (preg_match('/\\//', $cgkyugweawsewkuu)) {
                $yikciqwsimweauyg = explode('/', str_replace("(", " ", $cgkyugweawsewkuu));
                if (isset($yikciqwsimweauyg[1])) {
                    $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                    $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                }
            } else {
                $quiguswioiaaywey = explode(' ', stristr($cgkyugweawsewkuu, 'opera'));
                $this->aasasueowyemuyoc(isset($quiguswioiaaywey[1]) ? $quiguswioiaaywey[1] : '');
            }
            if (stripos($this->agent, 'Opera Mobi') !== false) {
                $this->eywockmuswoykooc(true);
            }
            $this->name = self::BROWSER_OPERA;
            return true;
        } elseif (stripos($this->agent, 'OPR') !== false) {
            $cgkyugweawsewkuu = stristr($this->agent, 'OPR');
            if (preg_match('/\\//', $cgkyugweawsewkuu)) {
                $yikciqwsimweauyg = explode('/', str_replace("(", " ", $cgkyugweawsewkuu));
                if (isset($yikciqwsimweauyg[1])) {
                    $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                    $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                }
            }
            if (stripos($this->agent, 'Mobile') !== false) {
                $this->eywockmuswoykooc(true);
            }
            $this->name = self::BROWSER_OPERA;
            return true;
        }
        return false;
    }
    
    protected function oomiyiuwesyuegws()
    {
        if (stripos($this->agent, 'Chrome') !== false) {
            $yikciqwsimweauyg = preg_split('/[\\/;]+/', stristr($this->agent, 'Chrome'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_CHROME);
                
                if (stripos($this->agent, 'Android') !== false) {
                    if (stripos($this->agent, 'Mobile') !== false) {
                        $this->eywockmuswoykooc(true);
                    } else {
                        $this->icigyueiiwsukmsu(true);
                    }
                }
                return true;
            }
        }
        return false;
    }
    
    protected function maowoygwywiawwyc()
    {
        if (stripos($this->agent, 'webtv') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'webtv'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_WEBTV);
                return true;
            }
        }
        return false;
    }
    
    protected function momgeesgauwmqaks()
    {
        if (stripos($this->agent, 'NetPositive') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'NetPositive'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc(str_replace(['(', ')', ';'], '', $quiguswioiaaywey[0]));
                $this->ikciowomiysyewgc(self::BROWSER_NETPOSITIVE);
                return true;
            }
        }
        return false;
    }
    
    protected function usswyskeuiskccki()
    {
        if (stripos($this->agent, 'galeon') !== false) {
            $yikciqwsimweauyg = explode(' ', stristr($this->agent, 'galeon'));
            $quiguswioiaaywey = explode('/', $yikciqwsimweauyg[0]);
            if (isset($quiguswioiaaywey[1])) {
                $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                $this->ikciowomiysyewgc(self::BROWSER_GALEON);
                return true;
            }
        }
        return false;
    }
    
    protected function ecocgoqgymuacegg()
    {
        if (stripos($this->agent, 'Konqueror') !== false) {
            $yikciqwsimweauyg = explode(' ', stristr($this->agent, 'Konqueror'));
            $quiguswioiaaywey = explode('/', $yikciqwsimweauyg[0]);
            if (isset($quiguswioiaaywey[1])) {
                $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                $this->ikciowomiysyewgc(self::BROWSER_KONQUEROR);
                return true;
            }
        }
        return false;
    }
    
    protected function wacucmcykeakeeou()
    {
        if (stripos($this->agent, 'icab') !== false) {
            $quiguswioiaaywey = explode(' ', stristr(str_replace('/', ' ', $this->agent), 'icab'));
            if (isset($quiguswioiaaywey[1])) {
                $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                $this->ikciowomiysyewgc(self::BROWSER_ICAB);
                return true;
            }
        }
        return false;
    }
    
    protected function uockauwugkqgqkce()
    {
        if (stripos($this->agent, 'omniweb') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'omniweb'));
            $quiguswioiaaywey = explode(' ', isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
            $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            $this->ikciowomiysyewgc(self::BROWSER_OMNIWEB);
            return true;
        }
        return false;
    }
    
    protected function qaweacwkwmmuqqam()
    {
        if (stripos($this->agent, 'Phoenix') !== false) {
            $quiguswioiaaywey = explode('/', stristr($this->agent, 'Phoenix'));
            if (isset($quiguswioiaaywey[1])) {
                $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                $this->ikciowomiysyewgc(self::BROWSER_PHOENIX);
                return true;
            }
        }
        return false;
    }
    
    protected function gewsuekegcksgkai()
    {
        if (stripos($this->agent, 'Firebird') !== false) {
            $quiguswioiaaywey = explode('/', stristr($this->agent, 'Firebird'));
            if (isset($quiguswioiaaywey[1])) {
                $this->aasasueowyemuyoc($quiguswioiaaywey[1]);
                $this->ikciowomiysyewgc(self::BROWSER_FIREBIRD);
                return true;
            }
        }
        return false;
    }
    
    protected function aweyeayscomouegw()
    {
        if (stripos($this->agent, 'Firefox') !== false && preg_match('/Navigator\\/([^ ]*)/i', $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
            return true;
        } elseif (stripos($this->agent, 'Firefox') === false && preg_match('/Netscape6?\\/([^ ]*)/i', $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_NETSCAPE_NAVIGATOR);
            return true;
        }
        return false;
    }
    
    protected function mmyqoqguasigekck()
    {
        if (stripos($this->agent, 'Mozilla') !== false && preg_match('/Shiretoko\\/([^ ]*)/i', $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_SHIRETOKO);
            return true;
        }
        return false;
    }
    
    protected function noeygigqkeciickm()
    {
        if (stripos($this->agent, 'Mozilla') !== false && preg_match('/IceCat\\/([^ ]*)/i', $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_ICECAT);
            return true;
        }
        return false;
    }
    
    protected function qcqikaemyysumcsu()
    {
        if (preg_match("/Nokia([^\\/]+)\\/([^ SP]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[2]);
            if (stripos($this->agent, 'Series60') !== false || strpos($this->agent, 'S60') !== false) {
                $this->ikciowomiysyewgc(self::BROWSER_NOKIA_S60);
            } else {
                $this->ikciowomiysyewgc(self::BROWSER_NOKIA);
            }
            $this->eywockmuswoykooc(true);
            return true;
        }
        return false;
    }
    
    protected function eqkuicmgoaougagi()
    {
        if (stripos($this->agent, 'safari') === false) {
            if (preg_match("/Palemoon[\\/ \\(]([^ ;\\)]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
                $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
                return true;
            } elseif (preg_match("/Palemoon([0-9a-zA-Z\\.]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
                $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
                return true;
            } elseif (preg_match("/Palemoon/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc('');
                $this->ikciowomiysyewgc(self::BROWSER_PALEMOON);
                return true;
            }
        }
        return false;
    }
    
    protected function sukgiyywqmoigmom()
    {
        if (preg_match('/UC ?Browser\\/?([\\d\\.]+)/', $this->agent, $meyiiwcswqmuggyg)) {
            if (isset($meyiiwcswqmuggyg[1])) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            }
            if (stripos($this->agent, 'Mobile') !== false) {
                $this->eywockmuswoykooc(true);
            } else {
                $this->icigyueiiwsukmsu(true);
            }
            $this->ikciowomiysyewgc(self::BROWSER_UCBROWSER);
            return true;
        }
        return false;
    }
    
    protected function qsseiqmmssqiuomm()
    {
        if (stripos($this->agent, 'safari') === false) {
            if (preg_match("/Firefox[\\/ \\(]([^ ;\\)]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
                $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
                
                if (stripos($this->agent, 'Android') !== false || stripos($this->agent, 'iPhone') !== false) {
                    if (stripos($this->agent, 'Mobile') !== false || stripos($this->agent, 'Tablet') !== false) {
                        $this->eywockmuswoykooc(true);
                    } else {
                        $this->icigyueiiwsukmsu(true);
                    }
                }
                return true;
            } elseif (preg_match("/Firefox([0-9a-zA-Z\\.]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
                $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
                return true;
            } elseif (preg_match("/Firefox\$/i", $this->agent, $meyiiwcswqmuggyg)) {
                $this->aasasueowyemuyoc('');
                $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
                return true;
            }
        } elseif (preg_match("/FxiOS[\\/ \\(]([^ ;\\)]+)/i", $this->agent, $meyiiwcswqmuggyg)) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_FIREFOX);
            
            if (stripos($this->agent, 'Android') !== false || stripos($this->agent, 'iPhone') !== false) {
                if (stripos($this->agent, 'Mobile') !== false || stripos($this->agent, 'Tablet') !== false) {
                    $this->eywockmuswoykooc(true);
                } else {
                    $this->icigyueiiwsukmsu(true);
                }
            }
            return true;
        }
        return false;
    }
    
    protected function akwueocamkykcwyy()
    {
        if (stripos($this->agent, 'Iceweasel') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Iceweasel'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_ICEWEASEL);
                return true;
            }
        }
        return false;
    }
    
    protected function aowooqokikgeegkm()
    {
        if (stripos($this->agent, 'mozilla') !== false && preg_match('/rv:[0-9].[0-9][a-b]?/i', $this->agent) && stripos($this->agent, 'netscape') === false) {
            $quiguswioiaaywey = explode(' ', stristr($this->agent, 'rv:'));
            preg_match('/rv:[0-9].[0-9][a-b]?/i', $this->agent, $quiguswioiaaywey);
            $this->aasasueowyemuyoc(str_replace('rv:', '', $quiguswioiaaywey[0]));
            $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
            return true;
        } elseif (stripos($this->agent, 'mozilla') !== false && preg_match('/rv:[0-9]\\.[0-9]/i', $this->agent) && stripos($this->agent, 'netscape') === false) {
            $quiguswioiaaywey = explode('', stristr($this->agent, 'rv:'));
            $this->aasasueowyemuyoc(str_replace('rv:', '', $quiguswioiaaywey[0]));
            $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
            return true;
        } elseif (stripos($this->agent, 'mozilla') !== false && preg_match('/mozilla\\/([^ ]*)/i', $this->agent, $meyiiwcswqmuggyg) && stripos($this->agent, 'netscape') === false) {
            $this->aasasueowyemuyoc($meyiiwcswqmuggyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_MOZILLA);
            return true;
        }
        return false;
    }
    
    protected function mqsiuucsqqyuwcuw()
    {
        if (stripos($this->agent, 'lynx') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Lynx'));
            $quiguswioiaaywey = explode(' ', isset($yikciqwsimweauyg[1]) ? $yikciqwsimweauyg[1] : '');
            $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            $this->ikciowomiysyewgc(self::BROWSER_LYNX);
            return true;
        }
        return false;
    }
    
    protected function usemqkymaguiocgy()
    {
        if (stripos($this->agent, 'amaya') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Amaya'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_AMAYA);
                return true;
            }
        }
        return false;
    }
    
    protected function qcswwmqaioswesoq()
    {
        if (stripos($this->agent, 'Safari') !== false && stripos($this->agent, 'iPhone') === false && stripos($this->agent, 'iPod') === false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Version'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            $this->ikciowomiysyewgc(self::BROWSER_SAFARI);
            return true;
        }
        return false;
    }
    protected function yswggmyigakcackc()
    {
        if (stripos($this->agent, 'SamsungBrowser') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'SamsungBrowser'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            $this->ikciowomiysyewgc(self::BROWSER_SAMSUNG);
            return true;
        }
        return false;
    }
    protected function uiwkymoksesuumwe()
    {
        if (stripos($this->agent, 'Silk') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Silk'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            $this->ikciowomiysyewgc(self::BROWSER_SILK);
            return true;
        }
        return false;
    }
    protected function cgqcukygysieeqko()
    {
        if (stripos($this->agent, 'Iframely') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Iframely'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            $this->ikciowomiysyewgc(self::BROWSER_I_FRAME);
            return true;
        }
        return false;
    }
    protected function ccaaioyauuuuyikg()
    {
        if (stripos($this->agent, 'CocoaRestClient') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'CocoaRestClient'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            $this->ikciowomiysyewgc(self::BROWSER_COCOA);
            return true;
        }
        return false;
    }
    
    protected function ksikmmeqsuycsqck()
    {
        if (stristr($this->agent, 'FacebookExternalHit')) {
            $this->aasmeayouwmacaow(true);
            $this->oqgqmcogeugkakss(true);
            return true;
        }
        return false;
    }
    
    protected function ssquiwqwwcgcqiic()
    {
        if (stristr($this->agent, 'FBIOS')) {
            $this->oqgqmcogeugkakss(true);
            return true;
        }
        return false;
    }
    
    protected function uewoqoqkekmsyoeo()
    {
        $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Version'));
        if (isset($yikciqwsimweauyg[1])) {
            $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
            $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            return true;
        }
        return false;
    }
    
    protected function iqsiguacookiqwcs()
    {
        $yikciqwsimweauyg = explode('/', stristr($this->agent, 'CriOS'));
        if (isset($yikciqwsimweauyg[1])) {
            $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
            $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            $this->ikciowomiysyewgc(self::BROWSER_CHROME);
            return true;
        }
        return false;
    }
    
    protected function iaacgcgmmegamkiu()
    {
        if (stripos($this->agent, 'iPhone') !== false) {
            $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            $this->ikciowomiysyewgc(self::BROWSER_IPHONE);
            $this->uewoqoqkekmsyoeo();
            $this->iqsiguacookiqwcs();
            $this->ssquiwqwwcgcqiic();
            $this->eywockmuswoykooc(true);
            return true;
        }
        return false;
    }
    
    protected function ciawmegkaaacmoew()
    {
        if (stripos($this->agent, 'iPad') !== false) {
            $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            $this->ikciowomiysyewgc(self::BROWSER_IPAD);
            $this->uewoqoqkekmsyoeo();
            $this->iqsiguacookiqwcs();
            $this->ssquiwqwwcgcqiic();
            $this->icigyueiiwsukmsu(true);
            return true;
        }
        return false;
    }
    
    protected function cysskoyaouegkmky()
    {
        if (stripos($this->agent, 'iPod') !== false) {
            $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            $this->ikciowomiysyewgc(self::BROWSER_IPOD);
            $this->uewoqoqkekmsyoeo();
            $this->iqsiguacookiqwcs();
            $this->ssquiwqwwcgcqiic();
            $this->eywockmuswoykooc(true);
            return true;
        }
        return false;
    }
    
    protected function oomuqgqyykuccewm()
    {
        if (stripos($this->agent, 'Android') !== false) {
            $yikciqwsimweauyg = explode(' ', stristr($this->agent, 'Android'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
            } else {
                $this->aasasueowyemuyoc(self::VERSION_UNKNOWN);
            }
            if (stripos($this->agent, 'Mobile') !== false) {
                $this->eywockmuswoykooc(true);
            } else {
                $this->icigyueiiwsukmsu(true);
            }
            $this->ikciowomiysyewgc(self::BROWSER_ANDROID);
            return true;
        }
        return false;
    }
    
    protected function mgaiuyuciiueqyge()
    {
        if (stripos($this->agent, 'Vivaldi') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'Vivaldi'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_VIVALDI);
                return true;
            }
        }
        return false;
    }
    
    protected function syeogeymkuiqsoec()
    {
        if (stripos($this->agent, 'YaBrowser') !== false) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'YaBrowser'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_YANDEX);
                if (stripos($this->agent, 'iPad') !== false) {
                    $this->icigyueiiwsukmsu(true);
                } elseif (stripos($this->agent, 'Mobile') !== false) {
                    $this->eywockmuswoykooc(true);
                } elseif (stripos($this->agent, 'Android') !== false) {
                    $this->icigyueiiwsukmsu(true);
                }
                return true;
            }
        }
        return false;
    }
    
    protected function gqwuksqaksqcemam()
    {
        if (stripos($this->agent, 'PlayStation ') !== false) {
            $yikciqwsimweauyg = explode(' ', stristr($this->agent, 'PlayStation '));
            $this->ikciowomiysyewgc(self::BROWSER_PLAYSTATION);
            if (isset($yikciqwsimweauyg[0])) {
                $quiguswioiaaywey = explode(')', $yikciqwsimweauyg[2]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                if (stripos($this->agent, 'Portable)') !== false || stripos($this->agent, 'Vita') !== false) {
                    $this->eywockmuswoykooc(true);
                }
                return true;
            }
        }
        return false;
    }
    
    protected function wiqieuoqysguameu()
    {
        if (preg_match("!^Wget/([^ ]+)!i", $this->agent, $yikciqwsimweauyg)) {
            $this->aasasueowyemuyoc($yikciqwsimweauyg[1]);
            $this->ikciowomiysyewgc(self::BROWSER_WGET);
            return true;
        }
        return false;
    }
    
    protected function qiqsouwkwmwmqeem()
    {
        if (strpos($this->agent, 'curl') === 0) {
            $yikciqwsimweauyg = explode('/', stristr($this->agent, 'curl'));
            if (isset($yikciqwsimweauyg[1])) {
                $quiguswioiaaywey = explode(' ', $yikciqwsimweauyg[1]);
                $this->aasasueowyemuyoc($quiguswioiaaywey[0]);
                $this->ikciowomiysyewgc(self::BROWSER_CURL);
                return true;
            }
        }
        return false;
    }
    
    protected function acmmsiuwaekasogs()
    {
        if (stripos($this->agent, 'windows') !== false) {
            $this->platform = self::PLATFORM_WINDOWS;
        } elseif (stripos($this->agent, 'iPad') !== false) {
            $this->platform = self::PLATFORM_IPAD;
        } elseif (stripos($this->agent, 'iPod') !== false) {
            $this->platform = self::PLATFORM_IPOD;
        } elseif (stripos($this->agent, 'iPhone') !== false) {
            $this->platform = self::PLATFORM_IPHONE;
        } elseif (stripos($this->agent, 'mac') !== false) {
            $this->platform = self::PLATFORM_APPLE;
        } elseif (stripos($this->agent, 'android') !== false) {
            $this->platform = self::PLATFORM_ANDROID;
        } elseif (stripos($this->agent, 'Silk') !== false) {
            $this->platform = self::PLATFORM_FIRE_OS;
        } elseif (stripos($this->agent, 'linux') !== false && stripos($this->agent, 'SMART-TV') !== false) {
            $this->platform = self::PLATFORM_LINUX . '/' . self::PLATFORM_SMART_TV;
        } elseif (stripos($this->agent, 'linux') !== false) {
            $this->platform = self::PLATFORM_LINUX;
        } elseif (stripos($this->agent, 'Nokia') !== false) {
            $this->platform = self::PLATFORM_NOKIA;
        } elseif (stripos($this->agent, 'BlackBerry') !== false) {
            $this->platform = self::PLATFORM_BLACKBERRY;
        } elseif (stripos($this->agent, 'FreeBSD') !== false) {
            $this->platform = self::PLATFORM_FREEBSD;
        } elseif (stripos($this->agent, 'OpenBSD') !== false) {
            $this->platform = self::PLATFORM_OPENBSD;
        } elseif (stripos($this->agent, 'NetBSD') !== false) {
            $this->platform = self::PLATFORM_NETBSD;
        } elseif (stripos($this->agent, 'OpenSolaris') !== false) {
            $this->platform = self::PLATFORM_OPENSOLARIS;
        } elseif (stripos($this->agent, 'SunOS') !== false) {
            $this->platform = self::PLATFORM_SUNOS;
        } elseif (stripos($this->agent, 'OS\\/2') !== false) {
            $this->platform = self::PLATFORM_OS2;
        } elseif (stripos($this->agent, 'BeOS') !== false) {
            $this->platform = self::PLATFORM_BEOS;
        } elseif (stripos($this->agent, 'win') !== false) {
            $this->platform = self::PLATFORM_WINDOWS;
        } elseif (stripos($this->agent, 'Playstation') !== false) {
            $this->platform = self::PLATFORM_PLAYSTATION;
        } elseif (stripos($this->agent, 'Roku') !== false) {
            $this->platform = self::PLATFORM_ROKU;
        } elseif (stripos($this->agent, 'iOS') !== false) {
            $this->platform = self::PLATFORM_IPHONE . '/' . self::PLATFORM_IPAD;
        } elseif (stripos($this->agent, 'tvOS') !== false) {
            $this->platform = self::PLATFORM_APPLE_TV;
        } elseif (stripos($this->agent, 'curl') !== false) {
            $this->platform = self::PLATFORM_TERMINAL;
        } elseif (stripos($this->agent, 'CrOS') !== false) {
            $this->platform = self::PLATFORM_CHROME_OS;
        } elseif (stripos($this->agent, 'okhttp') !== false) {
            $this->platform = self::PLATFORM_JAVA_ANDROID;
        } elseif (stripos($this->agent, 'PostmanRuntime') !== false) {
            $this->platform = self::PLATFORM_POSTMAN;
        } elseif (stripos($this->agent, 'Iframely') !== false) {
            $this->platform = self::PLATFORM_I_FRAME;
        }
    }
}
