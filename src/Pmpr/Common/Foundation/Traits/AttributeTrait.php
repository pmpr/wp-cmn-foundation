<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        swymgyikwmgeocwc:
        yaagosqmegoeuayu:
        goto umkuoceaqoiucmim;
        iyuykukkmuayayya:
        $ymkomoccmymcoiea = null;
        goto qcococyiuemmqkyy;
        qcococyiuemmqkyy:
        $siquossayskcwkea = $this->ccekeuwwqqoiwuwy();
        goto cycegeagomyaqcyk;
        cycegeagomyaqcyk:
        if (!isset($siquossayskcwkea[$uusmaiomayssaecw])) {
            goto yaagosqmegoeuayu;
        }
        goto ycmkeyowaosmeqcq;
        ycmkeyowaosmeqcq:
        $ymkomoccmymcoiea = $siquossayskcwkea[$uusmaiomayssaecw];
        goto swymgyikwmgeocwc;
        umkuoceaqoiucmim:
        return $ymkomoccmymcoiea;
        goto iaawguyeskggqumi;
        iaawguyeskggqumi:
    }
    
    public function qigsyyqgewgskemg(?string $egkyssmuqcwaciya) : self
    {
        return $this->igmaewykumgwoaoy("\143\x6c\x61\x73\x73", $egkyssmuqcwaciya);
    }
    
    public function igmaewykumgwoaoy($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::igmaewykumgwoaoy($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, esc_attr($eqgoocgaqwqcimie));
        return $this;
    }
    
    public function gagmgeyoeegieuso(array $cmkqisoeyioisqaw) : self
    {
        goto oiksuciayusgwsua;
        oiksuciayusgwsua:
        foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) {
            $this->qigsyyqgewgskemg($egkyssmuqcwaciya);
            owcacaiiayyowwaq:
        }
        goto yommcseewkuckumw;
        sesewseggywgeamc:
        return $this;
        goto qmcwuyogkcugmqss;
        yommcseewkuckumw:
        cmewqmeamawkiigk:
        goto sesewseggywgeamc;
        qmcwuyogkcugmqss:
    }
    
    public function mykogkuaqwmycgog(string $egkyssmuqcwaciya) : self
    {
        return $this->ogaeogwycyqqckeu("\143\154\141\x73\163", $egkyssmuqcwaciya);
    }
    
    public function aeiayqcuemyeackg(string $egkyssmuqcwaciya) : bool
    {
        return $this->seeegkogcamaigga("\143\154\x61\x73\x73", $egkyssmuqcwaciya);
    }
    
    public function ogaeogwycyqqckeu($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->attributes = ManipulateHTML::ogaeogwycyqqckeu($this->ccekeuwwqqoiwuwy(), $uusmaiomayssaecw, $eqgoocgaqwqcimie);
        return $this;
    }
    
    public function seeegkogcamaigga($uusmaiomayssaecw, $eqgoocgaqwqcimie = '') : bool
    {
        goto gewsiguqiwckayiu;
        skwewwiigkwyigwe:
        cqywgmagckmkauqi:
        goto magceccaecooikmi;
        aeumaioaccqqsuog:
        auuoioqaimmmwqaw:
        goto oqikuaaakmwakkwi;
        mgkogwayioiuqgcm:
        $ymkomoccmymcoiea = explode("\40", $ymkomoccmymcoiea);
        goto yykoqaegsqocwkuo;
        gewsiguqiwckayiu:
        $umuecysoywoumgwo = false;
        goto sgsasqyooquayyss;
        yykoqaegsqocwkuo:
        giscewmyyoyggqoc:
        goto iqiigaoyqmcsiyqu;
        ukumogccwqyimwyc:
        yocsqgeyaqesswcm:
        goto skwewwiigkwyigwe;
        eoigswoesmsgwcsu:
        $ymkomoccmymcoiea = $this->waecsyqmwascmqoa($uusmaiomayssaecw);
        goto iyakugyowcmiuqoi;
        yguywoyayoeuakim:
        goto yocsqgeyaqesswcm;
        goto aeumaioaccqqsuog;
        iyakugyowcmiuqoi:
        if ($eqgoocgaqwqcimie && $ymkomoccmymcoiea) {
            goto auuoioqaimmmwqaw;
        }
        goto ouemywaioiewaukw;
        sgsasqyooquayyss:
        if (!$uusmaiomayssaecw) {
            goto cqywgmagckmkauqi;
        }
        goto eoigswoesmsgwcsu;
        iqiigaoyqmcsiyqu:
        $umuecysoywoumgwo = in_array($eqgoocgaqwqcimie, $ymkomoccmymcoiea);
        goto ukumogccwqyimwyc;
        ouemywaioiewaukw:
        $umuecysoywoumgwo = !empty($ymkomoccmymcoiea);
        goto yguywoyayoeuakim;
        magceccaecooikmi:
        return $umuecysoywoumgwo;
        goto qsgwasmoumcwkekq;
        oqikuaaakmwakkwi:
        if (is_array($ymkomoccmymcoiea)) {
            goto giscewmyyoyggqoc;
        }
        goto mgkogwayioiuqgcm;
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
        rookcyisouekusai:
        igqqmukoqiuewgam:
        goto aaeggsysesayskwc;
        aaeggsysesayskwc:
        return $this;
        goto kqqqeieaswiuykys;
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
