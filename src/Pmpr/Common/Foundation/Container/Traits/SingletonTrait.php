<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto kgyqyegwmomouqws;
        kgyqyegwmomouqws:
        if (!$this->kwyscakayqgsqosc()) {
            goto meookcgmmeqeumim;
        }
        goto aqeiyioooucwqgmg;
        mswywuwysiwmewwg:
        meookcgmmeqeumim:
        goto oaaguckuyyqiuysg;
        aqeiyioooucwqgmg:
        $this->gyqeoeemeemicgqi();
        goto mswywuwysiwmewwg;
        oaaguckuyyqiuysg:
    }
    
    public function kwyscakayqgsqosc() : bool
    {
        return $this->canRunSetup;
    }
    
    public function kcciqwskewsuaemk() : ?Filesystem
    {
        goto wiwyqiiuqiecaagq;
        kgmuuggwcomgisoq:
        $this->filesystem = Filesystem::symcgieuakksimmu();
        goto auusomqggyqoeows;
        auusomqggyqoeows:
        kwmacaaskumakkmi:
        goto nosacyaasaucscou;
        wiwyqiiuqiecaagq:
        if ($this->filesystem) {
            goto kwmacaaskumakkmi;
        }
        goto kgmuuggwcomgisoq;
        nosacyaasaucscou:
        return $this->filesystem;
        goto sqigskysuqcqamsw;
        sqigskysuqcqamsw:
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        goto qqiyoegsyuioeckw;
        gcumkowycakiggag:
        kgoiamsswecauwkw:
        goto uogkyukgkuagagce;
        gicwyacksgiucaem:
        $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
        goto gcumkowycakiggag;
        ckigcgskuimkcaqw:
        if (!$wksoawcgagcgoask) {
            goto kgoiamsswecauwkw;
        }
        goto gicwyacksgiucaem;
        qkgquayemucsyyuk:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto ckigcgskuimkcaqw;
        umgugakmykkciguc:
        return $this->assetManager;
        goto akcswkssaqkqmuai;
        qqiyoegsyuioeckw:
        if ($this->assetManager) {
            goto wweogomakqeumaem;
        }
        goto qkgquayemucsyyuk;
        uogkyukgkuagagce:
        wweogomakqeumaem:
        goto umgugakmykkciguc;
        akcswkssaqkqmuai:
    }
    public final function gyqeoeemeemicgqi()
    {
        goto akewkwcuoimqkaqw;
        wcegwageayaaskqu:
        $this->kgewmaycsoykyaso();
        goto asmkomwmsmsoiwwk;
        mkmusqguaqaoiiie:
        $this->kgquecmsgcouyaya();
        goto kaekwemuauqsseee;
        akewkwcuoimqkaqw:
        $this->wigskegsqequoeks();
        goto mkmusqguaqaoiiie;
        kaekwemuauqsseee:
        $this->eogyyugasomygcma();
        goto wcegwageayaaskqu;
        asmkomwmsmsoiwwk:
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
        goto omoswqiiaeoowuqi;
        wmmsikmaoayoqgoy:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto ugackekcsissoose;
        }
        goto osmmgskussmswsaa;
        omoswqiiaeoowuqi:
        $ueeagokqmgisgauy = [];
        goto wmmsikmaoayoqgoy;
        osmmgskussmswsaa:
        
        $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        goto auweucmeckcesaqa;
        iiocswwmeucywyag:
        return $ueeagokqmgisgauy;
        goto muaogywawgisgwmc;
        auweucmeckcesaqa:
        ugackekcsissoose:
        goto iiocswwmeucywyag;
        muaogywawgisgwmc:
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        goto ewueeegiikwuouac;
        ciqssmeisowigooa:
        $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        goto kgcauquceasaaoqs;
        kisysggyoousaysy:
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
        goto ikggquuegwqcoqcg;
        ewueeegiikwuouac:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto yquqammaasiiqwqs;
        }
        goto eyueqyuwqskeaukw;
        eyueqyuwqskeaukw:
        $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        goto qcygaeqosmmkcyiy;
        gqskauqwasscayus:
        if (!$wamcomkuwysqgwgk) {
            goto ecakskaumocsocya;
        }
        goto ciqssmeisowigooa;
        qcygaeqosmmkcyiy:
        yquqammaasiiqwqs:
        goto kcyoameekmymmgsc;
        kgcauquceasaaoqs:
        ecakskaumocsocya:
        goto kisysggyoousaysy;
        kcyoameekmymmgsc:
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        goto gqskauqwasscayus;
        ikggquuegwqcoqcg:
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        goto ysssiamakaswaooy;
        omgsioiwgsagmwcm:
        if (!$wgaoewqkwgomoaai instanceof Exception) {
            goto sswqekggikugcowi;
        }
        goto yaioqmceccgsckuy;
        yaioqmceccgsckuy:
        
        $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        goto jkkyqgueaogqecqc;
        jkkyqgueaogqecqc:
        sswqekggikugcowi:
        goto yacgswmqesusicsi;
        yacgswmqesusicsi:
        return $uamcoiueqaamsqma;
        goto agsswcsmsugomcao;
        ysssiamakaswaooy:
        $uamcoiueqaamsqma = '';
        goto omgsioiwgsagmwcm;
        agsswcsmsugomcao:
    }
    
    public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null)
    {
        throw new Exception($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk);
    }
}
