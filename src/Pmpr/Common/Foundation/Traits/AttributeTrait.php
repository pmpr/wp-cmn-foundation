<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Traits;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

trait AttributeTrait
{
    
    protected ?array $attributes = [];
    
    public function ccekeuwwqqoiwuwy() : ?array
    {
        return $this->attributes;
    }
    
    public function waecsyqmwascmqoa($uusmaiomayssaecw) : ?string
    {
        goto somsmcmoyaiiwuyk;
        somsmcmoyaiiwuyk:
        $ymkomoccmymcoiea = null;
        goto msqmakqaiawgqeau;
        msqmakqaiawgqeau:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto iuukukcykqykisaa;
        qamicqyikayyacok:
        return $ymkomoccmymcoiea;
        goto oasqosiqcsiyyaye;
        wugqaoggyqusmaoa:
        qmukeceewgmekoae:
        goto qamicqyikayyacok;
        iuukukcykqykisaa:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto qmukeceewgmekoae;
        }
        goto aaoekkysuimcamyu;
        aaoekkysuimcamyu:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto wugqaoggyqusmaoa;
        oasqosiqcsiyyaye:
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy("\x63\x6c\x61\163\x73", $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        goto kuusyaqguycoyiia;
        ggiiuoqggyauekgs:
        return $this;
        goto yyeiqoiuweqikyyq;
        kuusyaqguycoyiia:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            kuwwysummgiakgwo:
        }
        goto imiqucuaiyoaeaka;
        imiqucuaiyoaeaka:
        oaymmkagwocukmyq:
        goto ggiiuoqggyauekgs;
        yyeiqoiuweqikyyq:
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu("\x63\x6c\x61\x73\163", $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga("\x63\x6c\141\x73\x73", $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        goto ikqwewkaooqqcwmw;
        ymcwgkmiysmukacs:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto myccwweewiwguqaa;
        }
        goto auycewyimycgsusg;
        auycewyimycgsusg:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto eukmaswisycyiwik;
        ikqwewkaooqqcwmw:
        $umuecysoywoumgwo = false;
        goto oyqwymwomuameswa;
        ecyuccaigwwcquoq:
        qqyqygkmkeeuaiss:
        goto oesgammmiwwkggki;
        iwsckisegswykacc:
        cqokwokkmcecokwi:
        goto aawsuekkqeecmsuu;
        wiakkcgyggaeaeoa:
        $ymkomoccmymcoiea = explode("\x20", $ymkomoccmymcoiea);
        goto ecyuccaigwwcquoq;
        uqckgkumgouqgcus:
        return $umuecysoywoumgwo;
        goto sgiyakiusoqeesgi;
        oesgammmiwwkggki:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto iwsckisegswykacc;
        eukmaswisycyiwik:
        goto cqokwokkmcecokwi;
        goto ysgkwckuuwmeqmim;
        aawsuekkqeecmsuu:
        qgaoikokgokgqaqi:
        goto uqckgkumgouqgcus;
        oyqwymwomuameswa:
        if (!$uusmaiomayssaecw) {
            goto qgaoikokgokgqaqi;
        }
        goto ogmogeeogucogway;
        ysgkwckuuwmeqmim:
        myccwweewiwguqaa:
        goto mokwmqowycmwwkem;
        mokwmqowycmwwkem:
        if (is_array($ymkomoccmymcoiea)) {
            goto qqyqygkmkeeuaiss;
        }
        goto wiakkcgyggaeaeoa;
        ogmogeeogucogway:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto ymcwgkmiysmukacs;
        sgiyakiusoqeesgi:
    }
    
    public function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self
    {
        goto suigamkkgmwiaakg;
        egekcweywqwukqwq:
        mmkoaqwkqwweiuco:
        goto sgkksaaokaceycie;
        sgkksaaokaceycie:
        return $this;
        goto ouaaoissmeyugeye;
        suigamkkgmwiaakg:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            wwwyuwogyaymawes:
        }
        goto egekcweywqwukqwq;
        ouaaoissmeyugeye:
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        goto iieiwkmcwkocasiq;
        ucasywwoeiooacwk:
        uyagiwoqkikiygme:
        goto gkmoqsgamgwkwsas;
        gkmoqsgamgwkwsas:
        return $this;
        goto kscecowaeuymysgo;
        iieiwkmcwkocasiq:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            kogcmeyqyokimaqo:
        }
        goto ucasywwoeiooacwk;
        kscecowaeuymysgo:
    }
}
