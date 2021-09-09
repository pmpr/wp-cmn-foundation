<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\Register\RegisterPost;

class Register extends RegisterPost
{
    
    protected array $views = [];
    
    protected array $schema = [];
    
    protected array $notSchema = [];
    
    protected bool $isGlobal = false;
    
    protected ?string $prefix = null;
    
    protected ?bool $mapMetaCap = null;
    
    public function aeosueemgsygqese() : ?array
    {
        return $this->schema;
    }
    
    public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Field
    {
        return ManipulateArray::get($this->aeosueemgsygqese(), $uusmaiomayssaecw);
    }
    
    public function cquokmemekqqywgi(Field $aiowsaccomcoikus) : self
    {
        $this->schema[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self
    {
        goto usoomsyiqkwkgeyi;
        geeosccccmmucqce:
        oiammieoqaouyioy:
        goto emeaagoguiuyieui;
        usoomsyiqkwkgeyi:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto oymoieyokuscmgok;
            wckuumkmmocsciqo:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto camiekmccsgqswwo;
            camiekmccsgqswwo:
            eqskkyagygyigacm:
            goto iokskucgaqiqycmm;
            iokskucgaqiqycmm:
            qcwcskcquoyuesge:
            goto sggkkgmeigoqaoky;
            oymoieyokuscmgok:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto eqskkyagygyigacm;
            }
            goto wckuumkmmocsciqo;
            sggkkgmeigoqaoky:
        }
        goto geeosccccmmucqce;
        emeaagoguiuyieui:
        return $this;
        goto yecueayusueayyoc;
        yecueayusueayyoc:
    }
    
    public function iegyckmmougkucya() : array
    {
        return $this->notSchema;
    }
    
    public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self
    {
        $this->notSchema[] = $uusmaiomayssaecw;
        return $this;
    }
    
    public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self
    {
        goto wkgawikcioiuyqme;
        gkiwcciigiaeamyi:
        mkckgwkgugmguwkm:
        goto esaioouuwmeaqiim;
        esaioouuwmeaqiim:
        uiuseyqqmuguyckm:
        goto akuowkgaiuksqwgc;
        akuowkgaiuksqwgc:
        return $this;
        goto koioogicyyqwawsy;
        coeqgweisigocqim:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            qqcwksosioimeaqq:
        }
        goto gkiwcciigiaeamyi;
        wkgawikcioiuyqme:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto uiuseyqqmuguyckm;
        }
        goto coeqgweisigocqim;
        koioogicyyqwawsy:
    }
    
    public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self
    {
        $this->prefix = $yuwymayicwwqiske;
        return $this;
    }
    
    public function iemucaoqaisiwise()
    {
        return $this->mapMetaCap;
    }
    
    public function aioqieywgykaaoec() : ?array
    {
        return $this->views;
    }
    
    public function cgswceaawqgeskua($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->aioqieywgykaaoec(), $uusmaiomayssaecw);
    }
    
    public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self
    {
        goto ywowkgmqwokusske;
        oogqmueeykigemom:
        uyoscwugeomiciwq:
        goto yaskeauwgsusisom;
        ywowkgmqwokusske:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto eaeokigkusweawki;
        }
        goto gwoqkkyaeieummsw;
        gwoqkkyaeieummsw:
        $ggauoeuaesiymgee = ["\x74\x79\x70\x65" => $uusmaiomayssaecw, "\x70\x6f\x73\x69\164\x69\157\156" => 0, "\x6d\145\x6e\x75\x5f\x73\154\165\x67" => $this->aakmagwggmkoiiyu(), "\x70\x61\x67\x65\137\x74\x69\164\154\145" => $this->qeeuwmmksmqiuywg(), "\155\x65\156\165\137\x74\x69\x74\x6c\x65" => $this->uikgwcuascgeissw("\141\x6c\154\137\x69\164\x65\155\163"), "\x73\150\157\x77\137\151\156\x5f\x6d\145\156\x75" => $this->egockcwgmeocqeqc()];
        goto yosikwkgwwawmmeu;
        yaskeauwgsusisom:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto guoeosgiowqqmswg;
        auywcaygigcsqoek:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto oogqmueeykigemom;
        gyqiqmsmeisgcyys:
        return $this;
        goto emuyygwqumgmmqei;
        guoeosgiowqqmswg:
        eaeokigkusweawki:
        goto gyqiqmsmeisgcyys;
        yosikwkgwwawmmeu:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto uyoscwugeomiciwq;
        }
        goto auywcaygigcsqoek;
        emuyygwqumgmmqei:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\145\x72\x5f\x70\x61\147\145" => ManipulateSetting::omkaowmygoqwsywq(), "\143\157\x6c\x75\155\156\x73" => []]);
        return $this->ecmiqywsauuoccwo("\x69\x6e\x64\x65\x78", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\162\x65\x6e\x74\x5f\163\x6c\x75\147" => $this->aakmagwggmkoiiyu(), "\155\x65\x6e\x75\x5f\163\x6c\165\x67" => "\145\144\151\164\137" . $this->aakmagwggmkoiiyu(), "\143\157\x6c\x75\x6d\x6e\x73" => 2]);
        return $this->ecmiqywsauuoccwo("\145\144\151\164", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x61\x72\145\x6e\x74\x5f\x73\154\x75\x67" => $this->aakmagwggmkoiiyu(), "\x6d\x65\x6e\165\137\x73\x6c\x75\x67" => "\141\x64\144\137" . $this->aakmagwggmkoiiyu(), "\x63\x6f\154\x75\155\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\141\144\x64", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\x72\x65\156\164\137\163\x6c\x75\147" => $this->aakmagwggmkoiiyu(), "\155\x65\156\165\x5f\163\154\x75\147" => "\x73\150\157\x77\137" . $this->aakmagwggmkoiiyu(), "\x63\x6f\x6c\165\x6d\156\163" => []]);
        return $this->ecmiqywsauuoccwo("\x73\x68\157\167", $ywmkwiwkosakssii);
    }
    
    public function cykmceoageywgkqs() : bool
    {
        return $this->isGlobal;
    }
    
    public function iukgqamaqiamuosa() : self
    {
        $this->isGlobal = true;
        return $this;
    }
    
    public function ogqgmqymcwsqikme() : ?string
    {
        goto omkwqeiacwosgskq;
        ccgoagogukekkeks:
        $yuwymayicwwqiske .= "\x5f";
        goto oegoygwicucyeses;
        kimusawigieceeai:
        if (!$yuwymayicwwqiske) {
            goto kgumycouuweoycwe;
        }
        goto ccgoagogukekkeks;
        omkwqeiacwosgskq:
        $yuwymayicwwqiske = $this->prefix;
        goto kimusawigieceeai;
        gswyigyemukicika:
        return $yuwymayicwwqiske;
        goto mmyiieeusyagswii;
        oegoygwicucyeses:
        kgumycouuweoycwe:
        goto gswyigyemukicika;
        mmyiieeusyagswii:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}";
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->name;
    }
    
    public function masyeqmaiuqwosei() : bool
    {
        return !empty($this->name);
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto agewumsacuussmoc;
        uqcuqaucosyymciy:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto gcwuuuasqqocoics;
        agemwyemooogsiyc:
        cggukoegykqeekww:
        goto assaqeukweemagcm;
        esumwomoiqskweoc:
        $yygmoeguaqyumuui = array_map("\163\164\x72\154\145\156", array_keys($aaqqkgyougeiueyq));
        goto uqcuqaucosyymciy;
        cymiwscoawuyaugi:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\x63\x68\145\155\x61", []);
        goto goiacugaoueamwyk;
        mgcimqiiwsciocoy:
        scwsaugwsiimogui:
        goto eowgoimkqygwiock;
        gcwuuuasqqocoics:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto iaywwiisqiumgcma;
            iaywwiisqiumgcma:
            if (!$ymaogssqccumcyqa instanceof Field) {
                goto mayckwaigqsiwmem;
            }
            goto cekkcogkuwsqqyes;
            eieikkycsmsqumuu:
            cyeqsmcuiukikium:
            goto akuwuwcyqewysmym;
            yoyeqyywuskoamic:
            mayckwaigqsiwmem:
            goto eieikkycsmsqumuu;
            cekkcogkuwsqqyes:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto yoyeqyywuskoamic;
            akuwuwcyqewysmym:
        }
        goto mgcimqiiwsciocoy;
        eowgoimkqygwiock:
        $kkeqqkkkqwkocsyu["\x73\143\150\145\155\x61"] = $aaqqkgyougeiueyq;
        goto agemwyemooogsiyc;
        goiacugaoueamwyk:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto cggukoegykqeekww;
        }
        goto esumwomoiqskweoc;
        assaqeukweemagcm:
        return $kkeqqkkkqwkocsyu;
        goto mgkikasuaseesumm;
        agewumsacuussmoc:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\x6e\157\x74\137\x73\x63\150\x65\155\x61");
        goto cymiwscoawuyaugi;
        mgkikasuaseesumm:
    }
}
