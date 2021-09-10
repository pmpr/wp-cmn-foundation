<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce;

use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Admin_Settings;

abstract class Setting extends Common
{
    const WOOCOMMERCE_ = "\167\x6f\157\x63\x6f\x6d\155\145\162\x63\x65\137";
    const STORED_ADDRESS = "\x73\x74\157\162\x65\144\137\x61\x64\144\x72\145\x73\x73";
    const CATALOG_OPTIONS = "\143\141\x74\141\x6c\157\147\x5f\x6f\160\164\x69\157\x6e\163";
    const GENERAL_OPTIONS = "\x67\x65\x6e\145\x72\x61\154\137\x6f\160\164\x69\157\x6e\163";
    const PRICING_OPTIONS = "\160\x72\151\x63\x69\x6e\x67\x5f\x6f\160\x74\151\157\156\x73";
    const PRODUCT_RATING_OPTIONS = "\160\162\157\x64\x75\143\x74\137\162\141\164\151\156\x67\x5f\x6f\160\x74\x69\x6f\156\x73";
    const DIGITAL_DOWNLOAD_OPTIONS = "\x64\x69\x67\151\x74\141\154\137\x64\157\x77\x6e\x6c\157\141\x64\137\157\x70\164\x69\157\156\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\160\162\x6f\144\165\143\164\x5f\x69\156\166\x65\156\164\157\x72\x79\137\157\160\x74\x69\157\156\x73";
    const PRODUCT_MEASUREMENT_OPTIONS = "\160\162\x6f\x64\x75\143\164\x5f\x6d\145\x61\163\165\x72\x65\155\x65\156\164\137\157\x70\x74\x69\157\x6e\163";
    public function kgquecmsgcouyaya()
    {
        goto kkowueuygsqqgogc;
        kkowueuygsqqgogc:
        $ywoucyskcquysiwc = ["\x67\x65\156\x65\x72\x61\x6c" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\163\x68\x69\160\160\x69\x6e\x67", "\151\156\x76\145\156\x74\157\x72\x79" => [self::PRODUCT_INVENTORY_OPTIONS], "\x70\x72\157\144\165\x63\x74\x73\x5f\147\145\156\x65\x72\141\x6c" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\x64\x6f\167\x6e\154\x6f\141\144\141\142\x6c\x65\137\160\162\x6f\x64\x75\143\x74\163" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\141\143\143\x6f\165\x6e\x74\x5f\162\x65\147\x69\163\164\162\141\x74\x69\x6f\x6e\x5f\157\x70\x74\151\x6f\x6e\163"];
        goto qccawiseummsemsk;
        wiikygmkoykkkgyw:
        msmiaayuagocuswc:
        goto imyemkiyouuuequq;
        qccawiseummsemsk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto gqaecycgekomqqgu;
            caeucwusaisgqaoe:
            $this->cecaguuoecmccuse("\167\x6f\157\143\157\155\x6d\145\x72\143\145\x5f{$cciauwuwuqaywgce}\x5f\163\145\164\164\x69\x6e\147\163", [$this, $ekiuyucoiagmscgy]);
            goto cgksasyqkkiiowyg;
            gkyuckeugacsewka:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto kmykwuqougkwauiy;
            }
            goto caeucwusaisgqaoe;
            gqaecycgekomqqgu:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto akkecgwmiimmeqmy;
            }
            goto cygqsmeoqscsscqm;
            gessacesaaekqkws:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto wsksakoqeqwkigoq;
                awsqsasmmamcskkk:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto scykswkumgcoqgcc;
                }
                goto wsiysogusuimayic;
                mioseimsuqaqiqae:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\x6e\x64";
                goto qisaayswqcmucoqg;
                eugoueaksseemowq:
                sucekaeksayiwooe:
                goto awsqsasmmamcskkk;
                auiaaeeakqkocmqu:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\123\x74\141\162\164";
                goto mioseimsuqaqiqae;
                yquwqeooeyyociqm:
                uysqwomcuuccagkq:
                goto mowimwgkwoymuoae;
                wsiysogusuimayic:
                $this->cecaguuoecmccuse("\x77\x6f\157\x63\x6f\155\155\145\162\143\x65\x5f\x73\145\x74\164\x69\156\x67\x73\x5f{$awcmekyiwwkeyisq}\137\145\156\144", [$this, $oqeqeekoomwgugqi]);
                goto iyuiasiuowggciss;
                qisaayswqcmucoqg:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto sucekaeksayiwooe;
                }
                goto ewecikeyyqmewkgy;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\x77\x6f\157\x63\157\155\x6d\x65\x72\x63\x65\137\x73\145\164\164\x69\x6e\x67\x73\x5f{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto eugoueaksseemowq;
                iyuiasiuowggciss:
                scykswkumgcoqgcc:
                goto yquwqeooeyyociqm;
                wsksakoqeqwkigoq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\137\x73\145\143\x74\151\157\156\137{$awcmekyiwwkeyisq}");
                goto auiaaeeakqkocmqu;
                mowimwgkwoymuoae:
            }
            goto yyyuemkeyacsssye;
            cygqsmeoqscsscqm:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto ukmkcwicoqcoyqog;
            ukmkcwicoqcoyqog:
            akkecgwmiimmeqmy:
            goto siuaqaksaumkaeui;
            eqeosomseicwmwqu:
            yukcsywomcgeqoiq:
            goto muaokgycwsoimmaw;
            cgksasyqkkiiowyg:
            kmykwuqougkwauiy:
            goto yesymsikkwmuikuc;
            yesymsikkwmuikuc:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto yukcsywomcgeqoiq;
            }
            goto gessacesaaekqkws;
            siuaqaksaumkaeui:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto gkyuckeugacsewka;
            yyyuemkeyacsssye:
            qeieqkqcyuasgqqk:
            goto eqeosomseicwmwqu;
            muaokgycwsoimmaw:
            ugwysoaqswaocsuu:
            goto komymyuaekmkkiko;
            komymyuaekmkkiko:
        }
        goto wiikygmkoykkkgyw;
        imyemkiyouuuequq:
        parent::kgquecmsgcouyaya();
        goto awgeaewuaksssysc;
        awgeaewuaksssysc:
    }
    
    public final function iuaucuookgoqiiio($ikgwqyuyckaewsow = [])
    {
        WC_Admin_Settings::output_fields($ikgwqyuyckaewsow);
    }
    
    public final function qkauysqeioauswys($aiowsaccomcoikus)
    {
        $this->iuaucuookgoqiiio([$aiowsaccomcoikus]);
    }
    
    public final function gmqowegieyawsgau($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true)
    {
        return $this->ucgocwsamgumcyiq([$uwomkgseoiegeume], $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
    }
    
    public function ucgocwsamgumcyiq($uwomkgseoiegeume, $ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true)
    {
        goto wyscaumqgyqycymq;
        umkugowakqmaakky:
        if ($qmeuaeiseuacgiqc) {
            goto uewomuwyiswwamwg;
        }
        goto ggyguomagomqcmkq;
        ggyguomagomqcmkq:
        $awcmekyiwwkeyisq++;
        goto wuuqakiyccsuwswc;
        koeyooaqusayoskm:
        return $ikgwqyuyckaewsow;
        goto coukkakgwkwmoyou;
        ogcysuekkcyswiku:
        cceqaegwsqgaqges:
        goto koeyooaqusayoskm;
        sgkiwwkeeuyuyqwg:
        mukmkmiwaaowwymu:
        goto gcqeuqmciwqwqisq;
        ccccywcecqgsswqk:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ogcysuekkcyswiku;
        okmuocsmgiyuiggc:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto cceqaegwsqgaqges;
        }
        goto umkugowakqmaakky;
        wuuqakiyccsuwswc:
        uewomuwyiswwamwg:
        goto ccccywcecqgsswqk;
        wyscaumqgyqycymq:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto egamkewimgoayiwc;
            imwggkqiceiqwwyw:
            kmqgwuksekimwosw:
            goto yoummmmsocscggua;
            ueikeuosueikmmqy:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto imwggkqiceiqwwyw;
            egamkewimgoayiwc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto oqoksuwkayakeyco;
            oqoksuwkayakeyco:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ueikeuosueikmmqy;
            yoummmmsocscggua:
        }
        goto sgkiwwkeeuyuyqwg;
        gcqeuqmciwqwqisq:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto okmuocsmgiyuiggc;
        coukkakgwkwmoyou:
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        goto cwkowmwgwyakkmki;
        qwqaqqqqiksaqkss:
        mqmqcqqgqcmiqeyu:
        goto wkosyweqgikaakak;
        wkosyweqgikaakak:
        return $awcmekyiwwkeyisq;
        goto aeqakycgmcyiisae;
        cwkowmwgwyakkmki:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto myiuoyiycqukwuus;
            gakocaasskoagogo:
            goto mqmqcqqgqcmiqeyu;
            goto ueiewmqseyuugaum;
            myiuoyiycqukwuus:
            if ($qmeuaeiseuacgiqc) {
                goto aiggskceoswousgw;
            }
            goto oqckmkkyuymqomww;
            sgyysmcsyuaucmau:
            $ccamueccusigaaio = "\163\145\x63\x74\x69\157\x6e\145\156\144";
            goto yauqaiisowsgmsau;
            yauqaiisowsgmsau:
            yuyamyuwcskywmgg:
            goto oasuqwiwsowakwam;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = self::TITLE;
            goto gmqqsceqqmkeuwsg;
            oasuqwiwsowakwam:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto akcmkmaymmcekecu;
            ueiewmqseyuugaum:
            wmyggsuagwosceiu:
            goto imoksosqowqmimoc;
            wuaogegqaecwwkyo:
            $awcmekyiwwkeyisq = $momcykaoccoymeig;
            goto gakocaasskoagogo;
            gmqqsceqqmkeuwsg:
            goto yuyamyuwcskywmgg;
            goto mmoceucgeiaguqsm;
            qcogmismkiigwkcy:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto wmyggsuagwosceiu;
            }
            goto wuaogegqaecwwkyo;
            akcmkmaymmcekecu:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto qcogmismkiigwkcy;
            mmoceucgeiaguqsm:
            aiggskceoswousgw:
            goto sgyysmcsyuaucmau;
            imoksosqowqmimoc:
            sqkqeueggemiwaqi:
            goto omscsmekaceaeico;
            omscsmekaceaeico:
        }
        goto qwqaqqqqiksaqkss;
        aeqakycgmcyiisae:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        goto gowiwcysiyeummgy;
        gowiwcysiyeummgy:
        if (!($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske)) {
            goto eoamsouwygskswie;
        }
        goto agckeekgsueysiac;
        wiawkskyaqysiqsq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto qkmimisossgioguq;
        agckeekgsueysiac:
        $yuwymayicwwqiske = '';
        goto kyieaymowioesowa;
        kyieaymowioesowa:
        eoamsouwygskswie:
        goto wiawkskyaqysiqsq;
        qkmimisossgioguq:
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        goto wwmkccqcyqkskosu;
        wgmcumeeyosmwqgi:
        osiyyuaaukmsugso:
        goto usgiwsguoqiaguiu;
        qquuscuqaaeemooq:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto kgwwccucyguacyku;
        usgiwsguoqiaguiu:
        qwaewmyemsgqgkwg:
        goto ukgkawqgeqswmywc;
        yqiwyqiseaywuiyk:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        wmimosiokccysyuo:
        cskqgasmygooeiki:
        goto yqiwyqiseaywuiyk;
        wsmymasiyaoyaaww:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto osiyyuaaukmsugso;
        }
        goto wkcuekwsymskwwcy;
        wwmkccqcyqkskosu:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto mckcswqwkwukogqy;
        ukgkawqgeqswmywc:
        return $oammesyieqmwuwyi;
        goto smuaquguuyqakyyk;
        wkcuekwsymskwwcy:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto wgmcumeeyosmwqgi;
        qoqyqgqoqkaeuyoi:
        $oammesyieqmwuwyi = [];
        goto wsmymasiyaoyaaww;
        kgwwccucyguacyku:
        goto qwaewmyemsgqgkwg;
        goto wmimosiokccysyuo;
        mckcswqwkwukogqy:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto cskqgasmygooeiki;
        }
        goto qquuscuqaaeemooq;
        smuaquguuyqakyyk:
    }
}
