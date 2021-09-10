<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto iyuykukkmuayayya;
        umkuoceaqoiucmim:
        return $ymkomoccmymcoiea;
        goto iaawguyeskggqumi;
        iyuykukkmuayayya:
        $ymkomoccmymcoiea = null;
        goto qcococyiuemmqkyy;
        qcococyiuemmqkyy:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto cycegeagomyaqcyk;
        swymgyikwmgeocwc:
        yaagosqmegoeuayu:
        goto umkuoceaqoiucmim;
        cycegeagomyaqcyk:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yaagosqmegoeuayu;
        }
        goto ycmkeyowaosmeqcq;
        ycmkeyowaosmeqcq:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto swymgyikwmgeocwc;
        iaawguyeskggqumi:
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy("\x63\154\x61\x73\163", $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        goto oiksuciayusgwsua;
        sesewseggywgeamc:
        return $this;
        goto qmcwuyogkcugmqss;
        yommcseewkuckumw:
        cmewqmeamawkiigk:
        goto sesewseggywgeamc;
        oiksuciayusgwsua:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            owcacaiiayyowwaq:
        }
        goto yommcseewkuckumw;
        qmcwuyogkcugmqss:
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu("\143\154\141\163\x73", $egkyssmuqcwaciya);
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
        goto gewsiguqiwckayiu;
        ouemywaioiewaukw:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto yguywoyayoeuakim;
        mgkogwayioiuqgcm:
        $ymkomoccmymcoiea = explode("\x20", $ymkomoccmymcoiea);
        goto yykoqaegsqocwkuo;
        iyakugyowcmiuqoi:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto auuoioqaimmmwqaw;
        }
        goto ouemywaioiewaukw;
        magceccaecooikmi:
        return $umuecysoywoumgwo;
        goto qsgwasmoumcwkekq;
        sgsasqyooquayyss:
        if (!$uusmaiomayssaecw) {
            goto cqywgmagckmkauqi;
        }
        goto eoigswoesmsgwcsu;
        oqikuaaakmwakkwi:
        if (is_array($ymkomoccmymcoiea)) {
            goto giscewmyyoyggqoc;
        }
        goto mgkogwayioiuqgcm;
        iqiigaoyqmcsiyqu:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto ukumogccwqyimwyc;
        eoigswoesmsgwcsu:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto iyakugyowcmiuqoi;
        gewsiguqiwckayiu:
        $umuecysoywoumgwo = false;
        goto sgsasqyooquayyss;
        yykoqaegsqocwkuo:
        giscewmyyoyggqoc:
        goto iqiigaoyqmcsiyqu;
        skwewwiigkwyigwe:
        cqywgmagckmkauqi:
        goto magceccaecooikmi;
        aeumaioaccqqsuog:
        auuoioqaimmmwqaw:
        goto oqikuaaakmwakkwi;
        yguywoyayoeuakim:
        goto yocsqgeyaqesswcm;
        goto aeumaioaccqqsuog;
        ukumogccwqyimwyc:
        yocsqgeyaqesswcm:
        goto skwewwiigkwyigwe;
        qsgwasmoumcwkekq:
    }
    
    public function qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::qcgocuceocquqcuw($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function sueyawuweyoqyeaq(array $siquossayskcwkea) : self
    {
        goto mickaeggaoagsocg;
        mickaeggaoagsocg:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            wyaigkaacmyogusc:
        }
        goto rookcyisouekusai;
        aaeggsysesayskwc:
        return $this;
        goto kqqqeieaswiuykys;
        rookcyisouekusai:
        igqqmukoqiuewgam:
        goto aaeggsysesayskwc;
        kqqqeieaswiuykys:
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        goto wcyikusayywiuiia;
        weiswmsaqamyisoo:
        ucmqwkqykgagwyim:
        goto iggysouawgiwywau;
        iggysouawgiwywau:
        return $this;
        goto qyyoqyesekyggyua;
        wcyikusayywiuiia:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            qsogsookkesyksee:
        }
        goto weiswmsaqamyisoo;
        qyyoqyesekyggyua:
    }
}
