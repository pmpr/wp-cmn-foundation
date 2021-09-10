<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\164\x65\x6d\160\154\x61\x74\145\57\x74\x77\151\x67";
        goto wuiecqogyoemkmyo;
        wwagacmausicisuq:
        $ksaameoqigiaoigg = false;
        goto omgqccwciyuekagc;
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
            hkcqsqgccmogcyim:
            if ($this->loader) {
                goto kgkuyiqwqsyqques;
            }
            goto egukkoceuuaqqwqu;
            somiowsyicsqgggg:
            awcawqaigquqqywo:
            goto aoyasgammyaegmqk;
            egukkoceuuaqqwqu:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto mkqikqqsikqoqgwy;
            rkqioecyciickiga:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto awcawqaigquqqywo;
            }
            goto hkcqsqgccmogcyim;
            mkqikqqsikqoqgwy:
            goto deigmocesygywwwq;
            goto omusesiokggskasg;
            egcsgekkgiikcmsc:
            $ksaameoqigiaoigg = true;
            goto somiowsyicsqgggg;
            aoyasgammyaegmqk:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto nmkyycyeioimqmcc;
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
            macuoqyigoeqkkwa:
            if (!$esoowymaimwcuecq) {
                goto cmkiiseesikwqgou;
            }
            goto asgweagmgkwuaeey;
            kwyiqscekoommuog:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto geuasysqogwouqaa;
            geuasysqogwouqaa:
            $esoowymaimwcuecq = true;
            goto uwoyauwaiqakumuy;
            ggmkcyyawgwomqmo:
            cmkiiseesikwqgou:
            goto esyqewcegauewswi;
            yauywgkiwqgwmoge:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto igkaiscayyickgkg;
            }
            goto aaiwsawyuaucyeas;
            ecoikiciouuikmgs:
            uqucqgwcgoqomyuk:
            goto yawqcawaywkgqkkq;
            eakqkewcgqyewkee:
            
            $this->environment->addExtension(new DebugExtension());
            goto ggmkcyyawgwomqmo;
            uwoyauwaiqakumuy:
            
            $this->loader = new FilesystemLoader();
            goto yauywgkiwqgwmoge;
            cskuqsmksmimaewq:
            $this->environment = new Environment($this->loader, ["\143\x61\143\x68\145" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\57\x74\167\x69\147", "\144\x65\142\x75\147" => $esoowymaimwcuecq]);
            goto macuoqyigoeqkkwa;
            asgweagmgkwuaeey:
            
            $this->environment->enableDebug();
            goto awqyqyqeqkciygcg;
            aaiwsawyuaucyeas:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                eacucucugqmmwees:
            }
            goto ecoikiciouuikmgs;
            esyqewcegauewswi:
            
            $this->environment->addExtension(new Extension());
            goto keyoygyawmmuiysi;
            yawqcawaywkgqkkq:
            igkaiscayyickgkg:
            goto cskuqsmksmimaewq;
            awqyqyqeqkciygcg:
            
            $this->environment->enableAutoReload();
            goto eakqkewcgqyewkee;
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
        uccmgkcygwcoqqmc:
        muamuiocsyikcmou:
        goto wwuiqmaaemswyeas;
        ikaeueycwmsyseia:
        $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya);
        goto waukqcouoysuesec;
        caeakwsemagcwswc:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto qwcmwosyocyqyomq;
        omwseuoiosmmksik:
        $mkomwsiykqigmqca = '';
        goto ikaeueycwmsyseia;
        wqeeammwsuusmyum:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto gsikauqawyoasewq;
        wwuoaqqiaaguyyiu:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}";
        goto uccmgkcygwcoqqmc;
        wwuiqmaaemswyeas:
        eyeayegkquuoikii:
        goto kwywuqumeioqgcme;
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
        qouwgawyockmkiqw:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\143\141\x6d\145\x6c\x32\163\156\x61\x6b\145"], $aiieyweysaukqemc);
        goto wqeeammwsuusmyum;
        kwywuqumeioqgcme:
        return $mkomwsiykqigmqca;
        goto ueuqqoamggagceok;
        gsikauqawyoasewq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto wwuoaqqiaaguyyiu;
        ueuqqoamggagceok:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwswgqyqcewsqkek;
            wwswgqyqcewsqkek:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\147\x5f\162\x65\x6e\144\145\162\137\x66\x69\154\145\x6e\x61\155\x65"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto qcsiiiieegyokook;
            iaeuoauagoisyium:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cyiwyicwqagqigyw;
            qcsiiiieegyokook:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\x67\137\162\x65\156\144\x65\162\x5f\x70\x61\162\141\155\x65\x74\145\x72\163"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto iaeuoauagoisyium;
            cyiwyicwqagqigyw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\72{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
