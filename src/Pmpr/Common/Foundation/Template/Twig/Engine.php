<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\x74\145\155\x70\x6c\x61\x74\x65\x2f\164\x77\x69\x67";
        goto wuiecqogyoemkmyo;
        wuiecqogyoemkmyo:
        try {
            goto rkqioecyciickiga;
            ygasycygmaumayys:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto cwcegeayeuuqccgs;
            mkqikqqsikqoqgwy:
            goto deigmocesygywwwq;
            goto omusesiokggskasg;
            egcsgekkgiikcmsc:
            $ksaameoqigiaoigg = true;
            goto somiowsyicsqgggg;
            egukkoceuuaqqwqu:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto mkqikqqsikqoqgwy;
            hkcqsqgccmogcyim:
            if ($this->loader) {
                goto kgkuyiqwqsyqques;
            }
            goto egukkoceuuaqqwqu;
            cwcegeayeuuqccgs:
            deigmocesygywwwq:
            goto egcsgekkgiikcmsc;
            omusesiokggskasg:
            kgkuyiqwqsyqques:
            goto ygasycygmaumayys;
            rkqioecyciickiga:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto awcawqaigquqqywo;
            }
            goto hkcqsqgccmogcyim;
            somiowsyicsqgggg:
            awcawqaigquqqywo:
            goto aoyasgammyaegmqk;
            aoyasgammyaegmqk:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto nmkyycyeioimqmcc;
        nmkyycyeioimqmcc:
        return $ksaameoqigiaoigg;
        goto yoggkcicgggcyesq;
        wwagacmausicisuq:
        $ksaameoqigiaoigg = false;
        goto omgqccwciyuekagc;
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
            macuoqyigoeqkkwa:
            if (!$esoowymaimwcuecq) {
                goto cmkiiseesikwqgou;
            }
            goto asgweagmgkwuaeey;
            ecoikiciouuikmgs:
            uqucqgwcgoqomyuk:
            goto yawqcawaywkgqkkq;
            cskuqsmksmimaewq:
            $this->environment = new Environment($this->loader, ["\x63\x61\143\x68\145" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\57\164\x77\151\x67", "\144\x65\x62\165\147" => $esoowymaimwcuecq]);
            goto macuoqyigoeqkkwa;
            yawqcawaywkgqkkq:
            igkaiscayyickgkg:
            goto cskuqsmksmimaewq;
            yauywgkiwqgwmoge:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto igkaiscayyickgkg;
            }
            goto aaiwsawyuaucyeas;
            kwyiqscekoommuog:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto geuasysqogwouqaa;
            esyqewcegauewswi:
            
            $this->environment->addExtension(new Extension());
            goto keyoygyawmmuiysi;
            awqyqyqeqkciygcg:
            
            $this->environment->enableAutoReload();
            goto eakqkewcgqyewkee;
            geuasysqogwouqaa:
            $esoowymaimwcuecq = true;
            goto uwoyauwaiqakumuy;
            aaiwsawyuaucyeas:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                eacucucugqmmwees:
            }
            goto ecoikiciouuikmgs;
            uwoyauwaiqakumuy:
            
            $this->loader = new FilesystemLoader();
            goto yauywgkiwqgwmoge;
            ggmkcyyawgwomqmo:
            cmkiiseesikwqgou:
            goto esyqewcegauewswi;
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
        uccmgkcygwcoqqmc:
        muamuiocsyikcmou:
        goto wwuiqmaaemswyeas;
        ikaeueycwmsyseia:
        $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya);
        goto waukqcouoysuesec;
        waukqcouoysuesec:
        if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) {
            goto eyeayegkquuoikii;
        }
        goto caeakwsemagcwswc;
        wqeeammwsuusmyum:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto gsikauqawyoasewq;
        omwseuoiosmmksik:
        $mkomwsiykqigmqca = '';
        goto ikaeueycwmsyseia;
        kwywuqumeioqgcme:
        return $mkomwsiykqigmqca;
        goto ueuqqoamggagceok;
        wwuoaqqiaaguyyiu:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\x2f{$aiieyweysaukqemc}";
        goto uccmgkcygwcoqqmc;
        gsikauqawyoasewq:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto wwuoaqqiaaguyyiu;
        qouwgawyockmkiqw:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\153\167\165\171\x61\x79\153\x75\153\143\155\x61\161\147\x67\147"], $aiieyweysaukqemc);
        goto wqeeammwsuusmyum;
        qwcmwosyocyqyomq:
        if (!$wksoawcgagcgoask) {
            goto muamuiocsyikcmou;
        }
        goto qouwgawyockmkiqw;
        caeakwsemagcwswc:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto qwcmwosyocyqyomq;
        wwuiqmaaemswyeas:
        eyeayegkquuoikii:
        goto kwywuqumeioqgcme;
        ueuqqoamggagceok:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto wwswgqyqcewsqkek;
            qcsiiiieegyokook:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\147\x5f\x72\145\156\144\x65\162\x5f\x70\141\162\141\x6d\145\164\145\x72\163"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto iaeuoauagoisyium;
            wwswgqyqcewsqkek:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\167\x69\x67\x5f\162\x65\x6e\x64\x65\x72\137\146\151\x6c\x65\x6e\141\155\x65"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto qcsiiiieegyokook;
            iaeuoauagoisyium:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cyiwyicwqagqigyw;
            cyiwyicwqagqigyw:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\x3a{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
