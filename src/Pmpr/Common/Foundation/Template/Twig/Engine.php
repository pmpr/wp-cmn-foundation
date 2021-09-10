<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Twig;

use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Template\Twig\Extension\Extension;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Pmpr\Common\Foundation\Template\Engine as BaseClass;

class Engine extends BaseClass
{
    
    protected bool $isDebug = false;
    
    protected ?string $currentTemplate = null;
    
    protected ?Environment $environment = null;
    
    protected ?FilesystemLoader $loader = null;
    
    public function esoowymaimwcuecq() : bool
    {
        return $this->isDebug;
    }
    
    public function aocowmgiyociuoyw(?string $wiiouykwoeyyscci) : self
    {
        $this->currentTemplate = $wiiouykwoeyyscci;
        return $this;
    }
    
    public function yyewsaiwmyggmumg() : ?string
    {
        return $this->currentTemplate;
    }
    
    public function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool
    {
        $ksaameoqigiaoigg = false;
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . '/template/twig';
        try {
            if ($this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                if ($this->loader) {
                    
                    $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
                } else {
                    $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
                }
                $ksaameoqigiaoigg = true;
            }
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        return $ksaameoqigiaoigg;
    }
    
    public function exists($qqscaoyqikuyeoaw) : bool
    {
        
        return $this->loader->exists($qqscaoyqikuyeoaw);
    }
    public function load()
    {
        try {
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            $esoowymaimwcuecq = true;
            
            $this->loader = new FilesystemLoader();
            if ($oegoegssokkyiqam && is_array($oegoegssokkyiqam)) {
                foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                    
                    $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                    sockeswygwcskeuq:
                }
                uaukmuiwskcemcsw:
            }
            $this->environment = new Environment($this->loader, ['cache' => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . '/twig', 'debug' => $esoowymaimwcuecq]);
            if ($esoowymaimwcuecq) {
                
                $this->environment->enableDebug();
                
                $this->environment->enableAutoReload();
                
                $this->environment->addExtension(new DebugExtension());
            }
            
            $this->environment->addExtension(new Extension());
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die($this->kyacickkomkioeyu($wgaoewqkwgomoaai));
        }
    }
    
    public function kgaogakmeumeqaew($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self
    {
        
        $this->environment->addFilter(new TwigFilter($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue));
        return $this;
    }
    
    public function kmmegqceukkkawme($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue = []) : self
    {
        
        $this->environment->addFunction(new TwigFunction($ymqmyyeuycgmigyo, $ekiuyucoiagmscgy, $qiouiwasaauyaaue));
        return $this;
    }
    
    public function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string
    {
        $mkomwsiykqigmqca = '';
        $aiieyweysaukqemc = explode('\\', $egkyssmuqcwaciya);
        if (is_array($aiieyweysaukqemc) && $aiieyweysaukqemc) {
            $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
            if ($wksoawcgagcgoask) {
                $uomewyckeuqoqocu = array_map([ManipulateString::class, 'kwuyaykukcmaqggg'], $aiieyweysaukqemc);
                
                $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
                $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
                $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}/{$aiieyweysaukqemc}";
            }
        }
        return $mkomwsiykqigmqca;
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('twig_render_filename'), $uccgemuemkaygecm, $qookweymeqawmcwo);
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw('twig_render_parameters'), $qookweymeqawmcwo, $uccgemuemkaygecm);
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}:{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
