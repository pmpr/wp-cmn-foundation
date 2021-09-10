<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto wwagacmausicisuq;
        nmkyycyeioimqmcc:
        return $ksaameoqigiaoigg;
        goto yoggkcicgggcyesq;
        wwagacmausicisuq:
        $ksaameoqigiaoigg = false;
        goto omgqccwciyuekagc;
        wuiecqogyoemkmyo:
        try {
            goto rkqioecyciickiga;
            omusesiokggskasg:
            kgkuyiqwqsyqques:
            goto ygasycygmaumayys;
            somiowsyicsqgggg:
            awcawqaigquqqywo:
            goto aoyasgammyaegmqk;
            hkcqsqgccmogcyim:
            if ($this->loader) {
                goto kgkuyiqwqsyqques;
            }
            goto egukkoceuuaqqwqu;
            egcsgekkgiikcmsc:
            $ksaameoqigiaoigg = true;
            goto somiowsyicsqgggg;
            cwcegeayeuuqccgs:
            deigmocesygywwwq:
            goto egcsgekkgiikcmsc;
            ygasycygmaumayys:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto cwcegeayeuuqccgs;
            mkqikqqsikqoqgwy:
            goto deigmocesygywwwq;
            goto omusesiokggskasg;
            rkqioecyciickiga:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto awcawqaigquqqywo;
            }
            goto hkcqsqgccmogcyim;
            egukkoceuuaqqwqu:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto mkqikqqsikqoqgwy;
            aoyasgammyaegmqk:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto nmkyycyeioimqmcc;
        omgqccwciyuekagc:
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\164\145\x6d\160\154\141\164\145\57\x74\167\151\x67";
        goto wuiecqogyoemkmyo;
        yoggkcicgggcyesq:
    }
    
    public function exists($qqscaoyqikuyeoaw) : bool
    {
        
        return $this->loader->exists($qqscaoyqikuyeoaw);
    }
    public function load()
    {
        try {
            goto kwyiqscekoommuog;
            asgweagmgkwuaeey:
            
            $this->environment->enableDebug();
            goto awqyqyqeqkciygcg;
            uwoyauwaiqakumuy:
            
            $this->loader = new FilesystemLoader();
            goto yauywgkiwqgwmoge;
            cskuqsmksmimaewq:
            $this->environment = new Environment($this->loader, ["\x63\x61\143\150\x65" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\x2f\x74\x77\151\147", "\x64\145\x62\165\x67" => $esoowymaimwcuecq]);
            goto macuoqyigoeqkkwa;
            aaiwsawyuaucyeas:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                eacucucugqmmwees:
            }
            goto ecoikiciouuikmgs;
            kwyiqscekoommuog:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto geuasysqogwouqaa;
            yauywgkiwqgwmoge:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto igkaiscayyickgkg;
            }
            goto aaiwsawyuaucyeas;
            ggmkcyyawgwomqmo:
            cmkiiseesikwqgou:
            goto esyqewcegauewswi;
            eakqkewcgqyewkee:
            
            $this->environment->addExtension(new DebugExtension());
            goto ggmkcyyawgwomqmo;
            awqyqyqeqkciygcg:
            
            $this->environment->enableAutoReload();
            goto eakqkewcgqyewkee;
            esyqewcegauewswi:
            
            $this->environment->addExtension(new Extension());
            goto keyoygyawmmuiysi;
            geuasysqogwouqaa:
            $esoowymaimwcuecq = true;
            goto uwoyauwaiqakumuy;
            ecoikiciouuikmgs:
            uqucqgwcgoqomyuk:
            goto yawqcawaywkgqkkq;
            macuoqyigoeqkkwa:
            if (!$esoowymaimwcuecq) {
                goto cmkiiseesikwqgou;
            }
            goto asgweagmgkwuaeey;
            yawqcawaywkgqkkq:
            igkaiscayyickgkg:
            goto cskuqsmksmimaewq;
            keyoygyawmmuiysi:
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
        goto omwseuoiosmmksik;
        wwuoaqqiaaguyyiu:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}";
        goto uccmgkcygwcoqqmc;
        uccmgkcygwcoqqmc:
        muamuiocsyikcmou:
        goto wwuiqmaaemswyeas;
        caeakwsemagcwswc:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto qwcmwosyocyqyomq;
        wqeeammwsuusmyum:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto gsikauqawyoasewq;
        qouwgawyockmkiqw:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\143\x61\x6d\145\154\62\x73\156\141\x6b\145"], $aiieyweysaukqemc);
        goto wqeeammwsuusmyum;
        qwcmwosyocyqyomq:
        if (!$wksoawcgagcgoask) {
            goto muamuiocsyikcmou;
        }
        goto qouwgawyockmkiqw;
        omwseuoiosmmksik:
        $mkomwsiykqigmqca = '';
        goto ikaeueycwmsyseia;
        kwywuqumeioqgcme:
        return $mkomwsiykqigmqca;
        goto ueuqqoamggagceok;
        wwuiqmaaemswyeas:
        eyeayegkquuoikii:
        goto kwywuqumeioqgcme;
        ikaeueycwmsyseia:
        $aiieyweysaukqemc = explode("\x5c", $egkyssmuqcwaciya);
        goto waukqcouoysuesec;
        gsikauqawyoasewq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto wwuoaqqiaaguyyiu;
        waukqcouoysuesec:
        if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) {
            goto eyeayegkquuoikii;
        }
        goto caeakwsemagcwswc;
        ueuqqoamggagceok:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwswgqyqcewsqkek;
            iaeuoauagoisyium:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cyiwyicwqagqigyw;
            qcsiiiieegyokook:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\x67\137\162\145\x6e\x64\145\162\137\160\141\x72\141\155\x65\164\145\x72\x73"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto iaeuoauagoisyium;
            wwswgqyqcewsqkek:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\x77\x69\x67\137\162\x65\x6e\144\x65\x72\x5f\146\151\x6c\145\156\x61\x6d\x65"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto qcsiiiieegyokook;
            cyiwyicwqagqigyw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\72{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
