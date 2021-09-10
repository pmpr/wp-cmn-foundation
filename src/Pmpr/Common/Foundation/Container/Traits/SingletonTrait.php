<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        auusomqggyqoeows:
        kwmacaaskumakkmi:
        goto nosacyaasaucscou;
        kgmuuggwcomgisoq:
        $this->gyqeoeemeemicgqi();
        goto auusomqggyqoeows;
        wiwyqiiuqiecaagq:
        if (!$this->kwyscakayqgsqosc()) {
            goto kwmacaaskumakkmi;
        }
        goto kgmuuggwcomgisoq;
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
        wweogomakqeumaem:
        $this->filesystem = Filesystem::symcgieuakksimmu();
        goto qqiyoegsyuioeckw;
        qkgquayemucsyyuk:
        return $this->filesystem;
        goto ckigcgskuimkcaqw;
        qqiyoegsyuioeckw:
        sqigskysuqcqamsw:
        goto qkgquayemucsyyuk;
        ckigcgskuimkcaqw:
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        goto uogkyukgkuagagce;
        kaekwemuauqsseee:
        gcumkowycakiggag:
        goto wcegwageayaaskqu;
        uogkyukgkuagagce:
        if ($this->assetManager) {
            goto gcumkowycakiggag;
        }
        goto umgugakmykkciguc;
        mkmusqguaqaoiiie:
        gicwyacksgiucaem:
        goto kaekwemuauqsseee;
        wcegwageayaaskqu:
        return $this->assetManager;
        goto asmkomwmsmsoiwwk;
        akcswkssaqkqmuai:
        if (!$wksoawcgagcgoask) {
            goto gicwyacksgiucaem;
        }
        goto akewkwcuoimqkaqw;
        umgugakmykkciguc:
        $wksoawcgagcgoask = self::couwksyewgyeooqe();
        goto akcswkssaqkqmuai;
        akewkwcuoimqkaqw:
        $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
        goto mkmusqguaqaoiiie;
        asmkomwmsmsoiwwk:
    }
    public final function gyqeoeemeemicgqi()
    {
        goto ugackekcsissoose;
        ugackekcsissoose:
        $this->wigskegsqequoeks();
        goto omoswqiiaeoowuqi;
        osmmgskussmswsaa:
        $this->kgewmaycsoykyaso();
        goto auweucmeckcesaqa;
        wmmsikmaoayoqgoy:
        $this->eogyyugasomygcma();
        goto osmmgskussmswsaa;
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
        eyueqyuwqskeaukw:
        return $ueeagokqmgisgauy;
        goto qcygaeqosmmkcyiy;
        ecakskaumocsocya:
        
        $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        goto ewueeegiikwuouac;
        yquqammaasiiqwqs:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto iiocswwmeucywyag;
        }
        goto ecakskaumocsocya;
        muaogywawgisgwmc:
        $ueeagokqmgisgauy = [];
        goto yquqammaasiiqwqs;
        ewueeegiikwuouac:
        iiocswwmeucywyag:
        goto eyueqyuwqskeaukw;
        qcygaeqosmmkcyiy:
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        goto ciqssmeisowigooa;
        kisysggyoousaysy:
        kcyoameekmymmgsc:
        goto ikggquuegwqcoqcg;
        sswqekggikugcowi:
        if (!$wamcomkuwysqgwgk) {
            goto gqskauqwasscayus;
        }
        goto ysssiamakaswaooy;
        ciqssmeisowigooa:
        if (!$iswcokucwmiosiaq instanceof WP_Error) {
            goto kcyoameekmymmgsc;
        }
        goto kgcauquceasaaoqs;
        yaioqmceccgsckuy:
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
        goto jkkyqgueaogqecqc;
        ysssiamakaswaooy:
        $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        goto omgsioiwgsagmwcm;
        omgsioiwgsagmwcm:
        gqskauqwasscayus:
        goto yaioqmceccgsckuy;
        ikggquuegwqcoqcg:
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        goto sswqekggikugcowi;
        kgcauquceasaaoqs:
        $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        goto kisysggyoousaysy;
        jkkyqgueaogqecqc:
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        goto agsswcsmsugomcao;
        yugggoyoqaaacaem:
        
        $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        goto ucmumgeqkewmqkqe;
        ucmumgeqkewmqkqe:
        yacgswmqesusicsi:
        goto yaacseqwycoiwscq;
        agsswcsmsugomcao:
        $uamcoiueqaamsqma = '';
        goto yqwegoiemuiassgc;
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
