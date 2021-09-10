<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        wuiecqogyoemkmyo:
        try {
            goto rkqioecyciickiga;
            somiowsyicsqgggg:
            awcawqaigquqqywo:
            goto aoyasgammyaegmqk;
            rkqioecyciickiga:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto awcawqaigquqqywo;
            }
            goto hkcqsqgccmogcyim;
            egcsgekkgiikcmsc:
            $ksaameoqigiaoigg = true;
            goto somiowsyicsqgggg;
            egukkoceuuaqqwqu:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto mkqikqqsikqoqgwy;
            mkqikqqsikqoqgwy:
            goto deigmocesygywwwq;
            goto omusesiokggskasg;
            omusesiokggskasg:
            kgkuyiqwqsyqques:
            goto ygasycygmaumayys;
            hkcqsqgccmogcyim:
            if ($this->loader) {
                goto kgkuyiqwqsyqques;
            }
            goto egukkoceuuaqqwqu;
            ygasycygmaumayys:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto cwcegeayeuuqccgs;
            cwcegeayeuuqccgs:
            deigmocesygywwwq:
            goto egcsgekkgiikcmsc;
            aoyasgammyaegmqk:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto nmkyycyeioimqmcc;
        wwagacmausicisuq:
        $ksaameoqigiaoigg = false;
        goto omgqccwciyuekagc;
        omgqccwciyuekagc:
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\164\145\x6d\160\x6c\x61\x74\x65\57\164\167\x69\147";
        goto wuiecqogyoemkmyo;
        nmkyycyeioimqmcc:
        return $ksaameoqigiaoigg;
        goto yoggkcicgggcyesq;
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
            geuasysqogwouqaa:
            $esoowymaimwcuecq = true;
            goto uwoyauwaiqakumuy;
            ecoikiciouuikmgs:
            uqucqgwcgoqomyuk:
            goto yawqcawaywkgqkkq;
            yauywgkiwqgwmoge:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto igkaiscayyickgkg;
            }
            goto aaiwsawyuaucyeas;
            uwoyauwaiqakumuy:
            
            $this->loader = new FilesystemLoader();
            goto yauywgkiwqgwmoge;
            ggmkcyyawgwomqmo:
            cmkiiseesikwqgou:
            goto esyqewcegauewswi;
            macuoqyigoeqkkwa:
            if (!$esoowymaimwcuecq) {
                goto cmkiiseesikwqgou;
            }
            goto asgweagmgkwuaeey;
            awqyqyqeqkciygcg:
            
            $this->environment->enableAutoReload();
            goto eakqkewcgqyewkee;
            cskuqsmksmimaewq:
            $this->environment = new Environment($this->loader, ["\x63\x61\x63\x68\x65" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\57\x74\167\151\x67", "\144\x65\x62\x75\x67" => $esoowymaimwcuecq]);
            goto macuoqyigoeqkkwa;
            asgweagmgkwuaeey:
            
            $this->environment->enableDebug();
            goto awqyqyqeqkciygcg;
            esyqewcegauewswi:
            
            $this->environment->addExtension(new Extension());
            goto keyoygyawmmuiysi;
            yawqcawaywkgqkkq:
            igkaiscayyickgkg:
            goto cskuqsmksmimaewq;
            kwyiqscekoommuog:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto geuasysqogwouqaa;
            aaiwsawyuaucyeas:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                eacucucugqmmwees:
            }
            goto ecoikiciouuikmgs;
            eakqkewcgqyewkee:
            
            $this->environment->addExtension(new DebugExtension());
            goto ggmkcyyawgwomqmo;
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
        waukqcouoysuesec:
        if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) {
            goto eyeayegkquuoikii;
        }
        goto caeakwsemagcwswc;
        qwcmwosyocyqyomq:
        if (!$wksoawcgagcgoask) {
            goto muamuiocsyikcmou;
        }
        goto qouwgawyockmkiqw;
        omwseuoiosmmksik:
        $mkomwsiykqigmqca = '';
        goto ikaeueycwmsyseia;
        wqeeammwsuusmyum:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto gsikauqawyoasewq;
        wwuiqmaaemswyeas:
        eyeayegkquuoikii:
        goto kwywuqumeioqgcme;
        caeakwsemagcwswc:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto qwcmwosyocyqyomq;
        gsikauqawyoasewq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto wwuoaqqiaaguyyiu;
        uccmgkcygwcoqqmc:
        muamuiocsyikcmou:
        goto wwuiqmaaemswyeas;
        ikaeueycwmsyseia:
        $aiieyweysaukqemc = explode("\x5c", $egkyssmuqcwaciya);
        goto waukqcouoysuesec;
        qouwgawyockmkiqw:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\x63\141\155\x65\x6c\x32\x73\x6e\141\153\x65"], $aiieyweysaukqemc);
        goto wqeeammwsuusmyum;
        kwywuqumeioqgcme:
        return $mkomwsiykqigmqca;
        goto ueuqqoamggagceok;
        wwuoaqqiaaguyyiu:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}";
        goto uccmgkcygwcoqqmc;
        ueuqqoamggagceok:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwswgqyqcewsqkek;
            wwswgqyqcewsqkek:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\x77\151\147\137\x72\145\156\x64\145\162\137\x66\151\x6c\x65\156\141\155\145"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto qcsiiiieegyokook;
            iaeuoauagoisyium:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cyiwyicwqagqigyw;
            qcsiiiieegyokook:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\167\151\147\x5f\x72\145\x6e\x64\145\162\x5f\160\141\x72\x61\x6d\145\x74\x65\x72\x73"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto iaeuoauagoisyium;
            cyiwyicwqagqigyw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\x3a{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
