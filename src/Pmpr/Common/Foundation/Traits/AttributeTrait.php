<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        ycmkeyowaosmeqcq:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto swymgyikwmgeocwc;
        qcococyiuemmqkyy:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto cycegeagomyaqcyk;
        cycegeagomyaqcyk:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yaagosqmegoeuayu;
        }
        goto ycmkeyowaosmeqcq;
        swymgyikwmgeocwc:
        yaagosqmegoeuayu:
        goto umkuoceaqoiucmim;
        iyuykukkmuayayya:
        $ymkomoccmymcoiea = null;
        goto qcococyiuemmqkyy;
        umkuoceaqoiucmim:
        return $ymkomoccmymcoiea;
        goto iaawguyeskggqumi;
        iaawguyeskggqumi:
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
        goto oiksuciayusgwsua;
        yommcseewkuckumw:
        cmewqmeamawkiigk:
        goto sesewseggywgeamc;
        oiksuciayusgwsua:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            owcacaiiayyowwaq:
        }
        goto yommcseewkuckumw;
        sesewseggywgeamc:
        return $this;
        goto qmcwuyogkcugmqss;
        qmcwuyogkcugmqss:
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu("\143\154\x61\163\x73", $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga("\x63\154\141\163\x73", $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        goto gewsiguqiwckayiu;
        mgkogwayioiuqgcm:
        $ymkomoccmymcoiea = explode("\40", $ymkomoccmymcoiea);
        goto yykoqaegsqocwkuo;
        eoigswoesmsgwcsu:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto iyakugyowcmiuqoi;
        iqiigaoyqmcsiyqu:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto ukumogccwqyimwyc;
        ukumogccwqyimwyc:
        yocsqgeyaqesswcm:
        goto skwewwiigkwyigwe;
        oqikuaaakmwakkwi:
        if (is_array($ymkomoccmymcoiea)) {
            goto giscewmyyoyggqoc;
        }
        goto mgkogwayioiuqgcm;
        magceccaecooikmi:
        return $umuecysoywoumgwo;
        goto qsgwasmoumcwkekq;
        skwewwiigkwyigwe:
        cqywgmagckmkauqi:
        goto magceccaecooikmi;
        sgsasqyooquayyss:
        if (!$uusmaiomayssaecw) {
            goto cqywgmagckmkauqi;
        }
        goto eoigswoesmsgwcsu;
        yykoqaegsqocwkuo:
        giscewmyyoyggqoc:
        goto iqiigaoyqmcsiyqu;
        gewsiguqiwckayiu:
        $umuecysoywoumgwo = false;
        goto sgsasqyooquayyss;
        ouemywaioiewaukw:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto yguywoyayoeuakim;
        iyakugyowcmiuqoi:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto auuoioqaimmmwqaw;
        }
        goto ouemywaioiewaukw;
        aeumaioaccqqsuog:
        auuoioqaimmmwqaw:
        goto oqikuaaakmwakkwi;
        yguywoyayoeuakim:
        goto yocsqgeyaqesswcm;
        goto aeumaioaccqqsuog;
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
        rookcyisouekusai:
        igqqmukoqiuewgam:
        goto aaeggsysesayskwc;
        aaeggsysesayskwc:
        return $this;
        goto kqqqeieaswiuykys;
        kqqqeieaswiuykys:
    }
    
    public function eycskusaeseuwiyc(array $siquossayskcwkea) : self
    {
        goto wcyikusayywiuiia;
        wcyikusayywiuiia:
        foreach ($siquossayskcwkea as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            $this->qcgocuceocquqcuw($uusmaiomayssaecw, $eqgoocgaqwqcimie);
            qsogsookkesyksee:
        }
        goto weiswmsaqamyisoo;
        iggysouawgiwywau:
        return $this;
        goto qyyoqyesekyggyua;
        weiswmsaqamyisoo:
        ucmqwkqykgagwyim:
        goto iggysouawgiwywau;
        qyyoqyesekyggyua:
    }
}
