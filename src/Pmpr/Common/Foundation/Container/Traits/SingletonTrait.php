<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Container\Traits;

use Exception;
use Pmpr\Common\Foundation\Asset\Manager;
use Pmpr\Common\Foundation\Container\Storage;
use Pmpr\Common\Foundation\Filesystem;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WP_Error;
use WP_REST_Response;

trait SingletonTrait
{
    
    protected bool $canRunSetup = true;
    
    protected ?Manager $assetManager = null;
    
    protected ?Filesystem $filesystem = null;
    public function __construct()
    {
        goto yscgikeomcgkgygk;
        amswymymkwieuckw:
        gewawgqiuyosuaqq:
        goto oqcwmocuwuwokgya;
        yyymqggqawumumog:
        $this->gyqeoeemeemicgqi();
        goto amswymymkwieuckw;
        yscgikeomcgkgygk:
        if (!$this->kwyscakayqgsqosc()) {
            goto gewawgqiuyosuaqq;
        }
        goto yyymqggqawumumog;
        oqcwmocuwuwokgya:
    }
    
    public function kwyscakayqgsqosc() : bool
    {
        return $this->canRunSetup;
    }
    
    public function kcciqwskewsuaemk() : ?Filesystem
    {
        goto muqaocsweeyqsoye;
        qeiqyiumsmkicqyu:
        iusaewegkoiieeom:
        goto uqkgswsusamuccyw;
        muqaocsweeyqsoye:
        if ($this->filesystem) {
            goto iusaewegkoiieeom;
        }
        goto kiiyeeekyiusoeui;
        uqkgswsusamuccyw:
        return $this->filesystem;
        goto cgmagkeoskmgaiyg;
        kiiyeeekyiusoeui:
        $this->filesystem = Filesystem::symcgieuakksimmu();
        goto qeiqyiumsmkicqyu;
        cgmagkeoskmgaiyg:
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        goto kewyowoakiiuamsa;
        kewyowoakiiuamsa:
        if ($this->assetManager) {
            goto ekyosowqimyqcaaq;
        }
        goto yeuaaqmioucasaks;
        wuwuiwwcqmgsmisy:
        ekyosowqimyqcaaq:
        goto aykmumaieiueyeqa;
        ysasyyiaseeqkmko:
        if (!$wksoawcgagcgoask) {
            goto agocucmwccwemeyq;
        }
        goto imigcaguiisikmak;
        imigcaguiisikmak:
        $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
        goto aiaismsmsiymqumq;
        aiaismsmsiymqumq:
        agocucmwccwemeyq:
        goto wuwuiwwcqmgsmisy;
        yeuaaqmioucasaks:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ysasyyiaseeqkmko;
        aykmumaieiueyeqa:
        return $this->assetManager;
        goto iyogykmmqkqysuek;
        iyogykmmqkqysuek:
    }
    public final function gyqeoeemeemicgqi()
    {
        goto mosmuugeqcsacskc;
        yqqmsaceyaqyiecq:
        $this->kgewmaycsoykyaso();
        goto wogcuyasysqqwuwg;
        mosmuugeqcsacskc:
        $this->wigskegsqequoeks();
        goto uiocmycaouiessgs;
        uiocmycaouiessgs:
        $this->kgquecmsgcouyaya();
        goto tsmssqcisaauygqo;
        tsmssqcisaauygqo:
        $this->eogyyugasomygcma();
        goto yqqmsaceyaqyiecq;
        wogcuyasysqqwuwg:
    }
    public function wigskegsqequoeks()
    {
    }
    public function kgquecmsgcouyaya()
    {
    }
    public function kgewmaycsoykyaso()
    {
    }
    public function eogyyugasomygcma()
    {
    }
    public static function ugwmakayykcmcmqa()
    {
        return ManipulateString::mkwcwqkqeqkqyggc(self::uqggkiomyiceyooa());
    }
    
    public static function symcgieuakksimmu(...$ywmkwiwkosakssii) : self
    {
        return Storage::get(self::uqggkiomyiceyooa(), null, ...$ywmkwiwkosakssii);
    }
    
    public static function quiqwmkiyigesygc() : ?bool
    {
        return (bool) Storage::umuecysoywoumgwo(self::uqggkiomyiceyooa());
    }
    
    public static function mcgwwosyemioouem(?string $aokagokqyuysuksm = null) : self
    {
        return Storage::remove(self::uqggkiomyiceyooa(), $aokagokqyuysuksm);
    }
    
    public static function ocmycskcuiawkecq(?string $aokagokqyuysuksm = null, ...$ywmkwiwkosakssii) : self
    {
        return Storage::get(self::uqggkiomyiceyooa(), $aokagokqyuysuksm, ...$ywmkwiwkosakssii);
    }
    
    public function oemauiimmycumcsk(string $uamcoiueqaamsqma, int $ymacoouqwcqwwagu = 403, array $icwicymcioeyeyek = []) : WP_Error
    {
        $icwicymcioeyeyek = ManipulateFormat::omaawkkwwyesqwcc($icwicymcioeyeyek, [self::CODE => $ymacoouqwcqwwagu, self::STATUS => ManipulateServer::sgsoakksyayeoggw($ymacoouqwcqwwagu)]);
        return new WP_Error($ymacoouqwcqwwagu, $uamcoiueqaamsqma, $icwicymcioeyeyek);
    }
    
    public function wsmkmgikcacikiwe($iswcokucwmiosiaq) : array
    {
        goto seaaqqowyeuqcqey;
        caqgwosawyuskgcc:
        qkwgugwgiygosuwi:
        goto xemcmmyyisyyiyic;
        ewkyyscmssywguiy:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto qkwgugwgiygosuwi;
        }
        goto syeogeciaieosmuy;
        xemcmmyyisyyiyic:
        return $ueeagokqmgisgauy;
        goto ygwskmakekcueimm;
        seaaqqowyeuqcqey:
        $ueeagokqmgisgauy = [];
        goto ewkyyscmssywguiy;
        syeogeciaieosmuy:
        
        $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        goto caqgwosawyuskgcc;
        ygwskmakekcueimm:
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        goto akkugkigcmogsmwa;
        aemeckuaowuyyawg:
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
        goto ckuakqwqukkeusky;
        iqcawkmieemgmuws:
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        goto qqugmskikeggcqck;
        iwqeuawaeyysmyke:
        $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        goto acykcoioqsgegycc;
        acykcoioqsgegycc:
        qegkkwokuemqqaca:
        goto iqcawkmieemgmuws;
        meacoqqokoucyoga:
        yauqyiqcegcissma:
        goto aemeckuaowuyyawg;
        qqugmskikeggcqck:
        if (!$wamcomkuwysqgwgk) {
            goto yauqyiqcegcissma;
        }
        goto ymkcomygiuasmiqu;
        akkugkigcmogsmwa:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto qegkkwokuemqqaca;
        }
        goto iwqeuawaeyysmyke;
        ymkcomygiuasmiqu:
        $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        goto meacoqqokoucyoga;
        ckuakqwqukkeusky:
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        goto yseuseagkkcgcqii;
        gmyqkugayogcoouy:
        kykiiewgwquaksgc:
        goto ymyicceouqmquskc;
        ymyicceouqmquskc:
        return $uamcoiueqaamsqma;
        goto mwowmiqewakiqokm;
        yssmcumiaiqoiqoi:
        
        $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        goto gmyqkugayogcoouy;
        ayqggsigamwsowka:
        if (!$wgaoewqkwgomoaai instanceof Exception) {
            goto kykiiewgwquaksgc;
        }
        goto yssmcumiaiqoiqoi;
        yseuseagkkcgcqii:
        $uamcoiueqaamsqma = '';
        goto ayqggsigamwsowka;
        mwowmiqewakiqokm:
    }
    
    public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null)
    {
        throw new Exception($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk);
    }
}
