<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto qkuyaaweimgsaqww;
        iyuykukkmuayayya:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto qcococyiuemmqkyy;
        qcococyiuemmqkyy:
        mwuaakaqmuaoceee:
        goto cycegeagomyaqcyk;
        yaagosqmegoeuayu:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto mwuaakaqmuaoceee;
        }
        goto iyuykukkmuayayya;
        cycegeagomyaqcyk:
        return $ymkomoccmymcoiea;
        goto ycmkeyowaosmeqcq;
        aykqwyescqmocguo:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto yaagosqmegoeuayu;
        qkuyaaweimgsaqww:
        $ymkomoccmymcoiea = null;
        goto aykqwyescqmocguo;
        ycmkeyowaosmeqcq:
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy("\x63\x6c\x61\x73\x73", $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        goto iaawguyeskggqumi;
        cmewqmeamawkiigk:
        swymgyikwmgeocwc:
        goto owcacaiiayyowwaq;
        iaawguyeskggqumi:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            umkuoceaqoiucmim:
        }
        goto cmewqmeamawkiigk;
        owcacaiiayyowwaq:
        return $this;
        goto oiksuciayusgwsua;
        oiksuciayusgwsua:
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu("\143\154\x61\163\163", $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga("\x63\x6c\x61\x73\163", $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        goto auuoioqaimmmwqaw;
        iqiigaoyqmcsiyqu:
        return $umuecysoywoumgwo;
        goto ukumogccwqyimwyc;
        gewsiguqiwckayiu:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto sesewseggywgeamc;
        }
        goto sgsasqyooquayyss;
        auuoioqaimmmwqaw:
        $umuecysoywoumgwo = false;
        goto yocsqgeyaqesswcm;
        yykoqaegsqocwkuo:
        giscewmyyoyggqoc:
        goto iqiigaoyqmcsiyqu;
        ouemywaioiewaukw:
        if (is_array($ymkomoccmymcoiea)) {
            goto yommcseewkuckumw;
        }
        goto yguywoyayoeuakim;
        oqikuaaakmwakkwi:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto mgkogwayioiuqgcm;
        sgsasqyooquayyss:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto eoigswoesmsgwcsu;
        aeumaioaccqqsuog:
        yommcseewkuckumw:
        goto oqikuaaakmwakkwi;
        yocsqgeyaqesswcm:
        if (!$uusmaiomayssaecw) {
            goto giscewmyyoyggqoc;
        }
        goto cqywgmagckmkauqi;
        mgkogwayioiuqgcm:
        qmcwuyogkcugmqss:
        goto yykoqaegsqocwkuo;
        cqywgmagckmkauqi:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto gewsiguqiwckayiu;
        eoigswoesmsgwcsu:
        goto qmcwuyogkcugmqss;
        goto iyakugyowcmiuqoi;
        yguywoyayoeuakim:
        $ymkomoccmymcoiea = explode("\x20", $ymkomoccmymcoiea);
        goto aeumaioaccqqsuog;
        iyakugyowcmiuqoi:
        sesewseggywgeamc:
        goto ouemywaioiewaukw;
        ukumogccwqyimwyc:
    }
    
    public function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self
    {
        goto qsgwasmoumcwkekq;
        igqqmukoqiuewgam:
        skwewwiigkwyigwe:
        goto wyaigkaacmyogusc;
        wyaigkaacmyogusc:
        return $this;
        goto mickaeggaoagsocg;
        qsgwasmoumcwkekq:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            magceccaecooikmi:
        }
        goto igqqmukoqiuewgam;
        mickaeggaoagsocg:
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        goto kqqqeieaswiuykys;
        qsogsookkesyksee:
        return $this;
        goto wcyikusayywiuiia;
        kqqqeieaswiuykys:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            aaeggsysesayskwc:
        }
        goto ucmqwkqykgagwyim;
        ucmqwkqykgagwyim:
        rookcyisouekusai:
        goto qsogsookkesyksee;
        wcyikusayywiuiia:
    }
}
