<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        cycegeagomyaqcyk:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yaagosqmegoeuayu;
        }
        goto ycmkeyowaosmeqcq;
        swymgyikwmgeocwc:
        yaagosqmegoeuayu:
        goto umkuoceaqoiucmim;
        qcococyiuemmqkyy:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto cycegeagomyaqcyk;
        ycmkeyowaosmeqcq:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto swymgyikwmgeocwc;
        iaawguyeskggqumi:
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy("\x63\154\141\x73\x73", $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        goto oiksuciayusgwsua;
        yommcseewkuckumw:
        cmewqmeamawkiigk:
        goto sesewseggywgeamc;
        sesewseggywgeamc:
        return $this;
        goto qmcwuyogkcugmqss;
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
        return $this->ogaeogwycyqqckeu("\143\154\141\163\163", $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga("\x63\154\x61\163\x73", $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        goto gewsiguqiwckayiu;
        eoigswoesmsgwcsu:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto iyakugyowcmiuqoi;
        sgsasqyooquayyss:
        if (!$uusmaiomayssaecw) {
            goto cqywgmagckmkauqi;
        }
        goto eoigswoesmsgwcsu;
        ukumogccwqyimwyc:
        yocsqgeyaqesswcm:
        goto skwewwiigkwyigwe;
        oqikuaaakmwakkwi:
        if (is_array($ymkomoccmymcoiea)) {
            goto giscewmyyoyggqoc;
        }
        goto mgkogwayioiuqgcm;
        gewsiguqiwckayiu:
        $umuecysoywoumgwo = false;
        goto sgsasqyooquayyss;
        aeumaioaccqqsuog:
        auuoioqaimmmwqaw:
        goto oqikuaaakmwakkwi;
        iyakugyowcmiuqoi:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto auuoioqaimmmwqaw;
        }
        goto ouemywaioiewaukw;
        mgkogwayioiuqgcm:
        $ymkomoccmymcoiea = explode("\40", $ymkomoccmymcoiea);
        goto yykoqaegsqocwkuo;
        yguywoyayoeuakim:
        goto yocsqgeyaqesswcm;
        goto aeumaioaccqqsuog;
        iqiigaoyqmcsiyqu:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto ukumogccwqyimwyc;
        yykoqaegsqocwkuo:
        giscewmyyoyggqoc:
        goto iqiigaoyqmcsiyqu;
        ouemywaioiewaukw:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto yguywoyayoeuakim;
        skwewwiigkwyigwe:
        cqywgmagckmkauqi:
        goto magceccaecooikmi;
        magceccaecooikmi:
        return $umuecysoywoumgwo;
        goto qsgwasmoumcwkekq;
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
        aaeggsysesayskwc:
        return $this;
        goto kqqqeieaswiuykys;
        rookcyisouekusai:
        igqqmukoqiuewgam:
        goto aaeggsysesayskwc;
        mickaeggaoagsocg:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            wyaigkaacmyogusc:
        }
        goto rookcyisouekusai;
        kqqqeieaswiuykys:
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        goto wcyikusayywiuiia;
        iggysouawgiwywau:
        return $this;
        goto qyyoqyesekyggyua;
        weiswmsaqamyisoo:
        ucmqwkqykgagwyim:
        goto iggysouawgiwywau;
        wcyikusayywiuiia:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            qsogsookkesyksee:
        }
        goto weiswmsaqamyisoo;
        qyyoqyesekyggyua:
    }
}
