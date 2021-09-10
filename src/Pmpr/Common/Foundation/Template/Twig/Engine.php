<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        omgqccwciyuekagc:
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\x2f\164\145\x6d\x70\x6c\x61\164\145\57\164\x77\151\x67";
        goto wuiecqogyoemkmyo;
        wuiecqogyoemkmyo:
        try {
            goto rkqioecyciickiga;
            ygasycygmaumayys:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto cwcegeayeuuqccgs;
            omusesiokggskasg:
            kgkuyiqwqsyqques:
            goto ygasycygmaumayys;
            cwcegeayeuuqccgs:
            deigmocesygywwwq:
            goto egcsgekkgiikcmsc;
            egukkoceuuaqqwqu:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto mkqikqqsikqoqgwy;
            egcsgekkgiikcmsc:
            $ksaameoqigiaoigg = true;
            goto somiowsyicsqgggg;
            rkqioecyciickiga:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto awcawqaigquqqywo;
            }
            goto hkcqsqgccmogcyim;
            mkqikqqsikqoqgwy:
            goto deigmocesygywwwq;
            goto omusesiokggskasg;
            hkcqsqgccmogcyim:
            if ($this->loader) {
                goto kgkuyiqwqsyqques;
            }
            goto egukkoceuuaqqwqu;
            somiowsyicsqgggg:
            awcawqaigquqqywo:
            goto aoyasgammyaegmqk;
            aoyasgammyaegmqk:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto nmkyycyeioimqmcc;
        wwagacmausicisuq:
        $ksaameoqigiaoigg = false;
        goto omgqccwciyuekagc;
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
            yawqcawaywkgqkkq:
            igkaiscayyickgkg:
            goto cskuqsmksmimaewq;
            eakqkewcgqyewkee:
            
            $this->environment->addExtension(new DebugExtension());
            goto ggmkcyyawgwomqmo;
            awqyqyqeqkciygcg:
            
            $this->environment->enableAutoReload();
            goto eakqkewcgqyewkee;
            cskuqsmksmimaewq:
            $this->environment = new Environment($this->loader, ["\143\x61\x63\x68\145" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\x2f\x74\x77\151\147", "\144\145\142\165\147" => $esoowymaimwcuecq]);
            goto macuoqyigoeqkkwa;
            geuasysqogwouqaa:
            $esoowymaimwcuecq = true;
            goto uwoyauwaiqakumuy;
            esyqewcegauewswi:
            
            $this->environment->addExtension(new Extension());
            goto keyoygyawmmuiysi;
            macuoqyigoeqkkwa:
            if (!$esoowymaimwcuecq) {
                goto cmkiiseesikwqgou;
            }
            goto asgweagmgkwuaeey;
            asgweagmgkwuaeey:
            
            $this->environment->enableDebug();
            goto awqyqyqeqkciygcg;
            uwoyauwaiqakumuy:
            
            $this->loader = new FilesystemLoader();
            goto yauywgkiwqgwmoge;
            kwyiqscekoommuog:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto geuasysqogwouqaa;
            ecoikiciouuikmgs:
            uqucqgwcgoqomyuk:
            goto yawqcawaywkgqkkq;
            ggmkcyyawgwomqmo:
            cmkiiseesikwqgou:
            goto esyqewcegauewswi;
            yauywgkiwqgwmoge:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto igkaiscayyickgkg;
            }
            goto aaiwsawyuaucyeas;
            aaiwsawyuaucyeas:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                eacucucugqmmwees:
            }
            goto ecoikiciouuikmgs;
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
        wwuiqmaaemswyeas:
        eyeayegkquuoikii:
        goto kwywuqumeioqgcme;
        uccmgkcygwcoqqmc:
        muamuiocsyikcmou:
        goto wwuiqmaaemswyeas;
        kwywuqumeioqgcme:
        return $mkomwsiykqigmqca;
        goto ueuqqoamggagceok;
        caeakwsemagcwswc:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto qwcmwosyocyqyomq;
        qwcmwosyocyqyomq:
        if (!$wksoawcgagcgoask) {
            goto muamuiocsyikcmou;
        }
        goto qouwgawyockmkiqw;
        gsikauqawyoasewq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto wwuoaqqiaaguyyiu;
        omwseuoiosmmksik:
        $mkomwsiykqigmqca = '';
        goto ikaeueycwmsyseia;
        qouwgawyockmkiqw:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\143\x61\155\145\x6c\x32\163\x6e\x61\x6b\145"], $aiieyweysaukqemc);
        goto wqeeammwsuusmyum;
        wqeeammwsuusmyum:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto gsikauqawyoasewq;
        wwuoaqqiaaguyyiu:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}";
        goto uccmgkcygwcoqqmc;
        ikaeueycwmsyseia:
        $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya);
        goto waukqcouoysuesec;
        ueuqqoamggagceok:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwswgqyqcewsqkek;
            qcsiiiieegyokook:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\x77\151\147\x5f\162\145\156\x64\x65\x72\x5f\x70\141\x72\x61\x6d\145\x74\145\162\163"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto iaeuoauagoisyium;
            iaeuoauagoisyium:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cyiwyicwqagqigyw;
            wwswgqyqcewsqkek:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\x77\x69\x67\x5f\162\145\x6e\x64\x65\162\x5f\146\x69\154\145\x6e\x61\x6d\x65"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto qcsiiiieegyokook;
            cyiwyicwqagqigyw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\72{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
