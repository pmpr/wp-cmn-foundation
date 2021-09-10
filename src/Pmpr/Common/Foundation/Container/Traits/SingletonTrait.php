<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        if ($this->kwyscakayqgsqosc()) {
            $this->gyqeoeemeemicgqi();
        }
    }
    
    public function kwyscakayqgsqosc() : bool
    {
        return $this->canRunSetup;
    }
    
    public function kcciqwskewsuaemk() : ?Filesystem
    {
        if (!$this->filesystem) {
            $this->filesystem = Filesystem::symcgieuakksimmu();
        }
        return $this->filesystem;
    }
    
    public function miocmcoykayoyyau() : ?Manager
    {
        if (!$this->assetManager) {
            $wksoawcgagcgoask = self::couwksyewgyeooqe();
            if ($wksoawcgagcgoask) {
                $this->assetManager = Manager::ocmycskcuiawkecq($wksoawcgagcgoask->aakmagwggmkoiiyu(), $wksoawcgagcgoask);
            }
        }
        return $this->assetManager;
    }
    public final function gyqeoeemeemicgqi()
    {
        $this->wigskegsqequoeks();
        $this->kgquecmsgcouyaya();
        $this->eogyyugasomygcma();
        $this->kgewmaycsoykyaso();
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
        $ueeagokqmgisgauy = [];
        if ($iswcokucwmiosiaq instanceof WP_Error) {
            
            $ueeagokqmgisgauy = $iswcokucwmiosiaq->get_error_messages();
        }
        return $ueeagokqmgisgauy;
    }
    
    public function uocccyeugiykcmes($iswcokucwmiosiaq, $wamcomkuwysqgwgk = null)
    {
        if ($iswcokucwmiosiaq instanceof WP_Error) {
            $iswcokucwmiosiaq = $this->wsmkmgikcacikiwe($iswcokucwmiosiaq);
        }
        $uamcoiueqaamsqma = implode(PHP_EOL, $iswcokucwmiosiaq);
        if ($wamcomkuwysqgwgk) {
            $uamcoiueqaamsqma = sprintf($wamcomkuwysqgwgk, $uamcoiueqaamsqma);
        }
        $this->yqkwsouguwgoywcw($uamcoiueqaamsqma);
    }
    
    public function kyacickkomkioeyu($wgaoewqkwgomoaai) : ?string
    {
        $uamcoiueqaamsqma = '';
        if ($wgaoewqkwgomoaai instanceof Exception) {
            
            $uamcoiueqaamsqma = $wgaoewqkwgomoaai->getMessage();
        }
        return $uamcoiueqaamsqma;
    }
    
    public function yqkwsouguwgoywcw($uamcoiueqaamsqma, $ymacoouqwcqwwagu = 0, $awqociesscimyymk = null)
    {
        throw new Exception($uamcoiueqaamsqma, $ymacoouqwcqwwagu, $awqociesscimyymk);
    }
}
