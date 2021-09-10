<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto wiwyqiiuqiecaagq;
        wiwyqiiuqiecaagq:
        if (!$this->kwyscakayqgsqosc()) {
            goto kwmacaaskumakkmi;
        }
        goto kgmuuggwcomgisoq;
        auusomqggyqoeows:
        kwmacaaskumakkmi:
        goto nosacyaasaucscou;
        kgmuuggwcomgisoq:
        $this->gyqeoeemeemicgqi();
        goto auusomqggyqoeows;
        nosacyaasaucscou:
    }
    
    public function kwyscakayqgsqosc() : bool
    {
        return $this->canRunSetup;
    }
    
    public function kcciqwskewsuaemk() : ?Filesystem
    {
        goto kgoiamsswecauwkw;
        kgoiamsswecauwkw:
        if ($this->filesystem) {
            goto sqigskysuqcqamsw;
        }
        goto wweogomakqeumaem;
        qqiyoegsyuioeckw:
        sqigskysuqcqamsw:
        goto qkgquayemucsyyuk;
        qkgquayemucsyyuk:
        return $this->filesystem;
        goto ckigcgskuimkcaqw;
        wweogomakqeumaem:
        $this->filesystem = Filesystem::symcgieuakksimmu();
        goto qqiyoegsyuioeckw;
        ckigcgskuimkcaqw:
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        goto uogkyukgkuagagce;
        mkmusqguaqaoiiie:
        gicwyacksgiucaem:
        goto kaekwemuauqsseee;
        akcswkssaqkqmuai:
        if (!$wksoawcgagcgoask) {
            goto gicwyacksgiucaem;
        }
        goto akewkwcuoimqkaqw;
        umgugakmykkciguc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto akcswkssaqkqmuai;
        kaekwemuauqsseee:
        gcumkowycakiggag:
        goto wcegwageayaaskqu;
        wcegwageayaaskqu:
        return $this->assetManager;
        goto asmkomwmsmsoiwwk;
        akewkwcuoimqkaqw:
        $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
        goto mkmusqguaqaoiiie;
        uogkyukgkuagagce:
        if ($this->assetManager) {
            goto gcumkowycakiggag;
        }
        goto umgugakmykkciguc;
        asmkomwmsmsoiwwk:
    }
    public final function gyqeoeemeemicgqi()
    {
        goto ugackekcsissoose;
        ugackekcsissoose:
        $this->wigskegsqequoeks();
        goto omoswqiiaeoowuqi;
        wmmsikmaoayoqgoy:
        $this->eogyyugasomygcma();
        goto osmmgskussmswsaa;
        osmmgskussmswsaa:
        $this->kgewmaycsoykyaso();
        goto auweucmeckcesaqa;
        omoswqiiaeoowuqi:
        $this->kgquecmsgcouyaya();
        goto wmmsikmaoayoqgoy;
        auweucmeckcesaqa:
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
        goto muaogywawgisgwmc;
        ecakskaumocsocya:
        
        $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        goto ewueeegiikwuouac;
        eyueqyuwqskeaukw:
        return $ueeagokqmgisgauy;
        goto qcygaeqosmmkcyiy;
        ewueeegiikwuouac:
        iiocswwmeucywyag:
        goto eyueqyuwqskeaukw;
        muaogywawgisgwmc:
        $ueeagokqmgisgauy = [];
        goto yquqammaasiiqwqs;
        yquqammaasiiqwqs:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto iiocswwmeucywyag;
        }
        goto ecakskaumocsocya;
        qcygaeqosmmkcyiy:
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        goto ciqssmeisowigooa;
        yaioqmceccgsckuy:
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
        goto jkkyqgueaogqecqc;
        kisysggyoousaysy:
        kcyoameekmymmgsc:
        goto ikggquuegwqcoqcg;
        ciqssmeisowigooa:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto kcyoameekmymmgsc;
        }
        goto kgcauquceasaaoqs;
        ikggquuegwqcoqcg:
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        goto sswqekggikugcowi;
        kgcauquceasaaoqs:
        $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        goto kisysggyoousaysy;
        sswqekggikugcowi:
        if (!$wamcomkuwysqgwgk) {
            goto gqskauqwasscayus;
        }
        goto ysssiamakaswaooy;
        ysssiamakaswaooy:
        $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        goto omgsioiwgsagmwcm;
        omgsioiwgsagmwcm:
        gqskauqwasscayus:
        goto yaioqmceccgsckuy;
        jkkyqgueaogqecqc:
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        goto agsswcsmsugomcao;
        agsswcsmsugomcao:
        $uamcoiueqaamsqma = '';
        goto yqwegoiemuiassgc;
        ucmumgeqkewmqkqe:
        yacgswmqesusicsi:
        goto yaacseqwycoiwscq;
        yugggoyoqaaacaem:
        
        $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        goto ucmumgeqkewmqkqe;
        yqwegoiemuiassgc:
        if (!$wgaoewqkwgomoaai instanceof Exception) {
            goto yacgswmqesusicsi;
        }
        goto yugggoyoqaaacaem;
        yaacseqwycoiwscq:
        return $uamcoiueqaamsqma;
        goto miisgaoyumayooye;
        miisgaoyumayooye:
    }
    
    public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null)
    {
        throw new Exception($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk);
    }
}
