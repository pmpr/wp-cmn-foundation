<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto egcsgekkgiikcmsc;
        egcsgekkgiikcmsc:
        $ksaameoqigiaoigg = false;
        goto somiowsyicsqgggg;
        wwagacmausicisuq:
        return $ksaameoqigiaoigg;
        goto omgqccwciyuekagc;
        somiowsyicsqgggg:
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\x74\145\155\x70\x6c\x61\x74\145\57\x74\167\x69\147";
        goto aoyasgammyaegmqk;
        aoyasgammyaegmqk:
        try {
            goto kgkuyiqwqsyqques;
            deigmocesygywwwq:
            if ($this->loader) {
                goto aakuioygmuqkiueu;
            }
            goto awcawqaigquqqywo;
            mkqikqqsikqoqgwy:
            sceaocsemeoiyuge:
            goto omusesiokggskasg;
            awcawqaigquqqywo:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto rkqioecyciickiga;
            omusesiokggskasg:
            $ksaameoqigiaoigg = true;
            goto ygasycygmaumayys;
            hkcqsqgccmogcyim:
            aakuioygmuqkiueu:
            goto egukkoceuuaqqwqu;
            rkqioecyciickiga:
            goto sceaocsemeoiyuge;
            goto hkcqsqgccmogcyim;
            egukkoceuuaqqwqu:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto mkqikqqsikqoqgwy;
            ygasycygmaumayys:
            sugmesswcyyuwame:
            goto cwcegeayeuuqccgs;
            kgkuyiqwqsyqques:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto sugmesswcyyuwame;
            }
            goto deigmocesygywwwq;
            cwcegeayeuuqccgs:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto wwagacmausicisuq;
        omgqccwciyuekagc:
    }
    
    public function exists($qqscaoyqikuyeoaw) : bool
    {
        
        return $this->loader->exists($qqscaoyqikuyeoaw);
    }
    public function load()
    {
        try {
            goto eacucucugqmmwees;
            awqyqyqeqkciygcg:
            
            $this->environment->addExtension(new Extension());
            goto eakqkewcgqyewkee;
            asgweagmgkwuaeey:
            uqucqgwcgoqomyuk:
            goto awqyqyqeqkciygcg;
            cmkiiseesikwqgou:
            
            $this->loader = new FilesystemLoader();
            goto kwyiqscekoommuog;
            macuoqyigoeqkkwa:
            
            $this->environment->addExtension(new DebugExtension());
            goto asgweagmgkwuaeey;
            igkaiscayyickgkg:
            $esoowymaimwcuecq = true;
            goto cmkiiseesikwqgou;
            eacucucugqmmwees:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto igkaiscayyickgkg;
            ecoikiciouuikmgs:
            if (!$esoowymaimwcuecq) {
                goto uqucqgwcgoqomyuk;
            }
            goto yawqcawaywkgqkkq;
            geuasysqogwouqaa:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                nmkyycyeioimqmcc:
            }
            goto uwoyauwaiqakumuy;
            yauywgkiwqgwmoge:
            yoggkcicgggcyesq:
            goto aaiwsawyuaucyeas;
            kwyiqscekoommuog:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto yoggkcicgggcyesq;
            }
            goto geuasysqogwouqaa;
            cskuqsmksmimaewq:
            
            $this->environment->enableAutoReload();
            goto macuoqyigoeqkkwa;
            aaiwsawyuaucyeas:
            $this->environment = new Environment($this->loader, ["\143\x61\143\x68\x65" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\57\164\x77\151\x67", "\x64\145\142\x75\147" => $esoowymaimwcuecq]);
            goto ecoikiciouuikmgs;
            uwoyauwaiqakumuy:
            wuiecqogyoemkmyo:
            goto yauywgkiwqgwmoge;
            yawqcawaywkgqkkq:
            
            $this->environment->enableDebug();
            goto cskuqsmksmimaewq;
            eakqkewcgqyewkee:
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
        goto keyoygyawmmuiysi;
        ikaeueycwmsyseia:
        if (!$wksoawcgagcgoask) {
            goto ggmkcyyawgwomqmo;
        }
        goto waukqcouoysuesec;
        wqeeammwsuusmyum:
        ggmkcyyawgwomqmo:
        goto gsikauqawyoasewq;
        omwseuoiosmmksik:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto ikaeueycwmsyseia;
        muamuiocsyikcmou:
        $aiieyweysaukqemc = explode("\x5c", $egkyssmuqcwaciya);
        goto eyeayegkquuoikii;
        waukqcouoysuesec:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\x63\x61\x6d\145\x6c\x32\x73\x6e\141\x6b\145"], $aiieyweysaukqemc);
        goto caeakwsemagcwswc;
        gsikauqawyoasewq:
        esyqewcegauewswi:
        goto wwuoaqqiaaguyyiu;
        qwcmwosyocyqyomq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto qouwgawyockmkiqw;
        caeakwsemagcwswc:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto qwcmwosyocyqyomq;
        keyoygyawmmuiysi:
        $mkomwsiykqigmqca = '';
        goto muamuiocsyikcmou;
        eyeayegkquuoikii:
        if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) {
            goto esyqewcegauewswi;
        }
        goto omwseuoiosmmksik;
        qouwgawyockmkiqw:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}";
        goto wqeeammwsuusmyum;
        wwuoaqqiaaguyyiu:
        return $mkomwsiykqigmqca;
        goto uccmgkcygwcoqqmc;
        uccmgkcygwcoqqmc:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwuiqmaaemswyeas;
            ueuqqoamggagceok:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto wwswgqyqcewsqkek;
            kwywuqumeioqgcme:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\147\137\x72\x65\x6e\x64\x65\162\137\x70\141\x72\x61\155\145\164\145\162\163"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto ueuqqoamggagceok;
            wwuiqmaaemswyeas:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\x77\151\x67\x5f\x72\145\156\x64\145\x72\137\x66\x69\154\x65\156\141\x6d\145"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto kwywuqumeioqgcme;
            wwswgqyqcewsqkek:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\72{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
