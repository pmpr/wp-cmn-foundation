<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto weyikuomgeyimyay;
        qywgyeaiwcumsouk:
        $this->gyqeoeemeemicgqi();
        goto meookcgmmeqeumim;
        weyikuomgeyimyay:
        if (!$this->kwyscakayqgsqosc()) {
            goto cccqicomasamemuq;
        }
        goto qywgyeaiwcumsouk;
        meookcgmmeqeumim:
        cccqicomasamemuq:
        goto kgyqyegwmomouqws;
        kgyqyegwmomouqws:
    }
    
    public function kwyscakayqgsqosc() : bool
    {
        return $this->canRunSetup;
    }
    
    public function kcciqwskewsuaemk() : ?Filesystem
    {
        goto mswywuwysiwmewwg;
        kwmacaaskumakkmi:
        aqeiyioooucwqgmg:
        goto wiwyqiiuqiecaagq;
        wiwyqiiuqiecaagq:
        return $this->filesystem;
        goto kgmuuggwcomgisoq;
        mswywuwysiwmewwg:
        if ($this->filesystem) {
            goto aqeiyioooucwqgmg;
        }
        goto oaaguckuyyqiuysg;
        oaaguckuyyqiuysg:
        $this->filesystem = Filesystem::symcgieuakksimmu();
        goto kwmacaaskumakkmi;
        kgmuuggwcomgisoq:
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        goto sqigskysuqcqamsw;
        qkgquayemucsyyuk:
        auusomqggyqoeows:
        goto ckigcgskuimkcaqw;
        kgoiamsswecauwkw:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto wweogomakqeumaem;
        gicwyacksgiucaem:
        return $this->assetManager;
        goto gcumkowycakiggag;
        ckigcgskuimkcaqw:
        nosacyaasaucscou:
        goto gicwyacksgiucaem;
        wweogomakqeumaem:
        if (!$wksoawcgagcgoask) {
            goto auusomqggyqoeows;
        }
        goto qqiyoegsyuioeckw;
        qqiyoegsyuioeckw:
        $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
        goto qkgquayemucsyyuk;
        sqigskysuqcqamsw:
        if ($this->assetManager) {
            goto nosacyaasaucscou;
        }
        goto kgoiamsswecauwkw;
        gcumkowycakiggag:
    }
    public final function gyqeoeemeemicgqi()
    {
        goto uogkyukgkuagagce;
        akewkwcuoimqkaqw:
        $this->kgewmaycsoykyaso();
        goto mkmusqguaqaoiiie;
        umgugakmykkciguc:
        $this->kgquecmsgcouyaya();
        goto akcswkssaqkqmuai;
        akcswkssaqkqmuai:
        $this->eogyyugasomygcma();
        goto akewkwcuoimqkaqw;
        uogkyukgkuagagce:
        $this->wigskegsqequoeks();
        goto umgugakmykkciguc;
        mkmusqguaqaoiiie:
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
        goto wcegwageayaaskqu;
        asmkomwmsmsoiwwk:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto kaekwemuauqsseee;
        }
        goto ugackekcsissoose;
        omoswqiiaeoowuqi:
        kaekwemuauqsseee:
        goto wmmsikmaoayoqgoy;
        wmmsikmaoayoqgoy:
        return $ueeagokqmgisgauy;
        goto osmmgskussmswsaa;
        wcegwageayaaskqu:
        $ueeagokqmgisgauy = [];
        goto asmkomwmsmsoiwwk;
        ugackekcsissoose:
        
        $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        goto omoswqiiaeoowuqi;
        osmmgskussmswsaa:
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        goto muaogywawgisgwmc;
        muaogywawgisgwmc:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto auweucmeckcesaqa;
        }
        goto yquqammaasiiqwqs;
        gqskauqwasscayus:
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
        goto ciqssmeisowigooa;
        ewueeegiikwuouac:
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        goto eyueqyuwqskeaukw;
        yquqammaasiiqwqs:
        $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        goto ecakskaumocsocya;
        kcyoameekmymmgsc:
        iiocswwmeucywyag:
        goto gqskauqwasscayus;
        ecakskaumocsocya:
        auweucmeckcesaqa:
        goto ewueeegiikwuouac;
        eyueqyuwqskeaukw:
        if (!$wamcomkuwysqgwgk) {
            goto iiocswwmeucywyag;
        }
        goto qcygaeqosmmkcyiy;
        qcygaeqosmmkcyiy:
        $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        goto kcyoameekmymmgsc;
        ciqssmeisowigooa:
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        goto kisysggyoousaysy;
        sswqekggikugcowi:
        
        $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        goto ysssiamakaswaooy;
        omgsioiwgsagmwcm:
        return $uamcoiueqaamsqma;
        goto yaioqmceccgsckuy;
        ysssiamakaswaooy:
        kgcauquceasaaoqs:
        goto omgsioiwgsagmwcm;
        ikggquuegwqcoqcg:
        if (!$wgaoewqkwgomoaai instanceof Exception) {
            goto kgcauquceasaaoqs;
        }
        goto sswqekggikugcowi;
        kisysggyoousaysy:
        $uamcoiueqaamsqma = '';
        goto ikggquuegwqcoqcg;
        yaioqmceccgsckuy:
    }
    
    public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null)
    {
        throw new Exception($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk);
    }
}
