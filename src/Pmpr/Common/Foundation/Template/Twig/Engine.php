<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto wcyikusayywiuiia;
        weiswmsaqamyisoo:
        $mkomwsiykqigmqca = untrailingslashit($mkomwsiykqigmqca) . "\57\x74\145\155\160\154\x61\x74\145\x2f\164\167\151\147";
        goto iggysouawgiwywau;
        qyyoqyesekyggyua:
        return $ksaameoqigiaoigg;
        goto gouiyyuwcgwgsyis;
        iggysouawgiwywau:
        try {
            goto magceccaecooikmi;
            wyaigkaacmyogusc:
            goto ukumogccwqyimwyc;
            goto mickaeggaoagsocg;
            mickaeggaoagsocg:
            iqiigaoyqmcsiyqu:
            goto rookcyisouekusai;
            rookcyisouekusai:
            
            $this->loader->addPath($mkomwsiykqigmqca, $aiieyweysaukqemc);
            goto aaeggsysesayskwc;
            magceccaecooikmi:
            if (!$this->kcciqwskewsuaemk()->exists($mkomwsiykqigmqca)) {
                goto skwewwiigkwyigwe;
            }
            goto qsgwasmoumcwkekq;
            ucmqwkqykgagwyim:
            skwewwiigkwyigwe:
            goto qsogsookkesyksee;
            qsgwasmoumcwkekq:
            if ($this->loader) {
                goto iqiigaoyqmcsiyqu;
            }
            goto igqqmukoqiuewgam;
            igqqmukoqiuewgam:
            $this->paths[$aiieyweysaukqemc] = $mkomwsiykqigmqca;
            goto wyaigkaacmyogusc;
            aaeggsysesayskwc:
            ukumogccwqyimwyc:
            goto kqqqeieaswiuykys;
            kqqqeieaswiuykys:
            $ksaameoqigiaoigg = true;
            goto ucmqwkqykgagwyim;
            qsogsookkesyksee:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
        goto qyyoqyesekyggyua;
        wcyikusayywiuiia:
        $ksaameoqigiaoigg = false;
        goto weiswmsaqamyisoo;
        gouiyyuwcgwgsyis:
    }
    
    public function exists($qqscaoyqikuyeoaw) : bool
    {
        
        return $this->loader->exists($qqscaoyqikuyeoaw);
    }
    public function load()
    {
        try {
            goto ygwykwccoweycoci;
            ikseiooeakoewqqu:
            
            $this->environment->addExtension(new Extension());
            goto uqqqaqwamieuwuky;
            eucqcsogwusgkuim:
            essyuyoweqekagsi:
            goto qesewiceagyggaia;
            ugasccoeokgqkses:
            
            $this->environment->enableAutoReload();
            goto mmkooaugaqyqgyww;
            ikqmqsquoimqecsy:
            if (!($oegoegssokkyiqam && is_array($oegoegssokkyiqam))) {
                goto essyuyoweqekagsi;
            }
            goto igasikoyeqekomeq;
            mmkooaugaqyqgyww:
            
            $this->environment->addExtension(new DebugExtension());
            goto aeesioaqmuoeyoga;
            smmwkkeukemsueco:
            
            $this->loader = new FilesystemLoader();
            goto ikqmqsquoimqecsy;
            qesewiceagyggaia:
            $this->environment = new Environment($this->loader, ["\143\141\x63\150\145" => ManipulateFile::cmaecekuqkwmemms(self::PR__CACHE__PATH) . "\57\164\167\x69\147", "\144\x65\x62\x75\147" => $esoowymaimwcuecq]);
            goto oismsssqukkqkyai;
            oismsssqukkqkyai:
            if (!$esoowymaimwcuecq) {
                goto ogwiccocwuiuyyqk;
            }
            goto yuiowkeqksugiksa;
            miocsiqemcsmkmwe:
            egmkgyusyyyaqcyu:
            goto eucqcsogwusgkuim;
            aeesioaqmuoeyoga:
            ogwiccocwuiuyyqk:
            goto ikseiooeakoewqqu;
            ygwykwccoweycoci:
            $oegoegssokkyiqam = $this->iwqysmawycmsmces();
            goto gsskeqkeaaoqcqua;
            igasikoyeqekomeq:
            foreach ($oegoegssokkyiqam as $aiieyweysaukqemc => $skacuygeqykiwiwy) {
                
                $this->loader->addPath($skacuygeqykiwiwy, $aiieyweysaukqemc);
                ossuaoyigeyoisgo:
            }
            goto miocsiqemcsmkmwe;
            yuiowkeqksugiksa:
            
            $this->environment->enableDebug();
            goto ugasccoeokgqkses;
            gsskeqkeaaoqcqua:
            $esoowymaimwcuecq = true;
            goto smmwkkeukemsueco;
            uqqqaqwamieuwuky:
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
        goto kayygiukegykiwas;
        umisqysaiumusiew:
        $wksoawcgagcgoask = $this::couwksyewgyeooqe($egkyssmuqcwaciya);
        goto ogsasqwsmasgymkq;
        ikwqycaoqgesokkm:
        mmkssgccamceekkq:
        goto eauwuykuucsasmyi;
        ogsasqwsmasgymkq:
        if (!$wksoawcgagcgoask) {
            goto geaucesekwmkgusc;
        }
        goto yauaumyywgiiweue;
        kayygiukegykiwas:
        $mkomwsiykqigmqca = '';
        goto uqqwyiemackamkca;
        agqoooycekqkcygs:
        $aiieyweysaukqemc = implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
        goto mummysomwguemsmw;
        eauwuykuucsasmyi:
        return $mkomwsiykqigmqca;
        goto iqyocsmgummccuso;
        mummysomwguemsmw:
        $mkomwsiykqigmqca = "{$wksoawcgagcgoask->aqkmwawoaaigkoyq()}\57{$aiieyweysaukqemc}";
        goto qwcgeuyaymqioiue;
        uqqwyiemackamkca:
        $aiieyweysaukqemc = explode("\134", $egkyssmuqcwaciya);
        goto miumuoummqkyeeom;
        qwcgeuyaymqioiue:
        geaucesekwmkgusc:
        goto ikwqycaoqgesokkm;
        yauaumyywgiiweue:
        $uomewyckeuqoqocu = array_map([ManipulateString::class, "\143\x61\155\x65\x6c\62\x73\156\141\x6b\145"], $aiieyweysaukqemc);
        goto mcoqyaoecgqswook;
        mcoqyaoecgqswook:
        
        $uomewyckeuqoqocu = array_slice($uomewyckeuqoqocu, 3);
        goto agqoooycekqkcygs;
        miumuoummqkyeeom:
        if (!(is_array($aiieyweysaukqemc) && $aiieyweysaukqemc)) {
            goto mmkssgccamceekkq;
        }
        goto umisqysaiumusiew;
        iqyocsmgummccuso:
    }
    
    public function render(string $uccgemuemkaygecm, array $qookweymeqawmcwo = []) : string
    {
        try {
            goto ckkceskqiksqckms;
            ckkceskqiksqckms:
            $uccgemuemkaygecm = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x74\167\151\147\x5f\x72\145\x6e\x64\x65\x72\x5f\146\x69\x6c\x65\156\x61\155\145"), $uccgemuemkaygecm, $qookweymeqawmcwo);
            goto cqssqgewmeeiyqss;
            cqssqgewmeeiyqss:
            $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\164\167\x69\147\x5f\x72\145\x6e\x64\145\162\137\x70\141\162\141\155\145\164\145\162\x73"), $qookweymeqawmcwo, $uccgemuemkaygecm);
            goto yuuqgqawgsycgggg;
            yuuqgqawgsycgggg:
            
            $nsmgceoqaqogqmuw = $this->environment->render($uccgemuemkaygecm, $qookweymeqawmcwo);
            goto kmsoucccawegguwq;
            kmsoucccawegguwq:
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = "{$uccgemuemkaygecm}\72{$this->kyacickkomkioeyu($wgaoewqkwgomoaai)}";
        }
        return $nsmgceoqaqogqmuw;
    }
}
