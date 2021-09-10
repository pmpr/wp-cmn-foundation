<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
    const WOOCOMMERCE_ = "\x77\x6f\x6f\x63\x6f\x6d\x6d\x65\x72\143\145\137";
    const STORED_ADDRESS = "\x73\164\157\162\x65\144\137\141\x64\x64\x72\x65\x73\x73";
    const CATALOG_OPTIONS = "\143\141\164\x61\x6c\x6f\x67\x5f\157\x70\164\151\157\x6e\x73";
    const GENERAL_OPTIONS = "\147\145\156\x65\162\141\154\x5f\x6f\x70\164\151\x6f\x6e\163";
    const PRICING_OPTIONS = "\x70\x72\151\x63\x69\156\x67\137\x6f\160\x74\x69\157\x6e\163";
    const PRODUCT_RATING_OPTIONS = "\160\162\157\x64\165\143\x74\137\x72\x61\164\x69\x6e\147\x5f\157\160\x74\x69\157\x6e\163";
    const DIGITAL_DOWNLOAD_OPTIONS = "\144\x69\x67\151\x74\x61\154\x5f\144\x6f\167\156\154\x6f\141\144\x5f\x6f\x70\164\151\x6f\x6e\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\x70\x72\157\x64\165\143\x74\137\151\156\x76\145\156\164\x6f\162\171\x5f\x6f\160\164\151\157\x6e\x73";
    const PRODUCT_MEASUREMENT_OPTIONS = "\160\x72\x6f\144\x75\x63\164\x5f\155\145\x61\163\165\x72\145\155\145\x6e\x74\x5f\157\160\164\151\157\156\x73";
    public function kgquecmsgcouyaya()
    {
        goto eqeosomseicwmwqu;
        kkowueuygsqqgogc:
        parent::kgquecmsgcouyaya();
        goto qccawiseummsemsk;
        eqeosomseicwmwqu:
        $ywoucyskcquysiwc = ["\x67\x65\x6e\145\x72\x61\154" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\x73\x68\151\160\x70\151\x6e\147", "\x69\x6e\x76\x65\x6e\164\x6f\162\171" => [self::PRODUCT_INVENTORY_OPTIONS], "\160\162\x6f\144\165\143\x74\x73\x5f\147\145\156\x65\162\141\x6c" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\x64\x6f\167\156\154\157\x61\x64\141\142\x6c\x65\x5f\160\x72\x6f\x64\165\143\164\x73" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\141\143\x63\157\x75\x6e\x74\x5f\x72\145\x67\151\x73\164\162\141\164\x69\157\x6e\137\x6f\160\164\151\x6f\156\163"];
        goto muaokgycwsoimmaw;
        komymyuaekmkkiko:
        kuwecmygikeyisuq:
        goto kkowueuygsqqgogc;
        muaokgycwsoimmaw:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto yquwqeooeyyociqm;
            yquwqeooeyyociqm:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto kmkoiwuimosekikq;
            }
            goto mowimwgkwoymuoae;
            gqaecycgekomqqgu:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto cygqsmeoqscsscqm;
            gessacesaaekqkws:
            augwgqgcukgkywiw:
            goto yyyuemkeyacsssye;
            mowimwgkwoymuoae:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto yukcsywomcgeqoiq;
            cgksasyqkkiiowyg:
            ugwysoaqswaocsuu:
            goto yesymsikkwmuikuc;
            caeucwusaisgqaoe:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto uysqwomcuuccagkq;
                awsqsasmmamcskkk:
                akkecgwmiimmeqmy:
                goto wsiysogusuimayic;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\167\157\157\x63\x6f\155\x6d\x65\162\x63\x65\137\163\x65\x74\x74\151\x6e\x67\163\137{$awcmekyiwwkeyisq}\137\x65\x6e\x64", [$this, $oqeqeekoomwgugqi]);
                goto eugoueaksseemowq;
                qisaayswqcmucoqg:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto qeieqkqcyuasgqqk;
                }
                goto ewecikeyyqmewkgy;
                scykswkumgcoqgcc:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\156\144";
                goto wsksakoqeqwkigoq;
                uysqwomcuuccagkq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\137\163\x65\143\164\151\157\x6e\x5f{$awcmekyiwwkeyisq}");
                goto sucekaeksayiwooe;
                eugoueaksseemowq:
                qeieqkqcyuasgqqk:
                goto awsqsasmmamcskkk;
                auiaaeeakqkocmqu:
                $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\157\x6d\x6d\145\162\x63\x65\137\x73\x65\x74\164\x69\156\147\x73\137{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto mioseimsuqaqiqae;
                sucekaeksayiwooe:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\123\x74\x61\162\x74";
                goto scykswkumgcoqgcc;
                wsksakoqeqwkigoq:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto kmykwuqougkwauiy;
                }
                goto auiaaeeakqkocmqu;
                mioseimsuqaqiqae:
                kmykwuqougkwauiy:
                goto qisaayswqcmucoqg;
                wsiysogusuimayic:
            }
            goto cgksasyqkkiiowyg;
            ukmkcwicoqcoyqog:
            $this->cecaguuoecmccuse("\167\x6f\157\143\157\x6d\x6d\145\162\x63\145\x5f{$cciauwuwuqaywgce}\x5f\163\145\164\x74\x69\x6e\147\x73", [$this, $ekiuyucoiagmscgy]);
            goto siuaqaksaumkaeui;
            gkyuckeugacsewka:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto iyuiasiuowggciss;
            }
            goto caeucwusaisgqaoe;
            siuaqaksaumkaeui:
            msmiaayuagocuswc:
            goto gkyuckeugacsewka;
            cygqsmeoqscsscqm:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto msmiaayuagocuswc;
            }
            goto ukmkcwicoqcoyqog;
            yesymsikkwmuikuc:
            iyuiasiuowggciss:
            goto gessacesaaekqkws;
            yukcsywomcgeqoiq:
            kmkoiwuimosekikq:
            goto gqaecycgekomqqgu;
            yyyuemkeyacsssye:
        }
        goto komymyuaekmkkiko;
        qccawiseummsemsk:
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
        goto yoummmmsocscggua;
        wuuqakiyccsuwswc:
        return $ikgwqyuyckaewsow;
        goto ccccywcecqgsswqk;
        wyscaumqgyqycymq:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto imwggkqiceiqwwyw;
        }
        goto sgkiwwkeeuyuyqwg;
        uewomuwyiswwamwg:
        wiikygmkoykkkgyw:
        goto cceqaegwsqgaqges;
        gcqeuqmciwqwqisq:
        $awcmekyiwwkeyisq++;
        goto okmuocsmgiyuiggc;
        sgkiwwkeeuyuyqwg:
        if ($qmeuaeiseuacgiqc) {
            goto ueikeuosueikmmqy;
        }
        goto gcqeuqmciwqwqisq;
        okmuocsmgiyuiggc:
        ueikeuosueikmmqy:
        goto umkugowakqmaakky;
        ggyguomagomqcmkq:
        imwggkqiceiqwwyw:
        goto wuuqakiyccsuwswc;
        yoummmmsocscggua:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto awgeaewuaksssysc;
            awgeaewuaksssysc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto mukmkmiwaaowwymu;
            egamkewimgoayiwc:
            imyemkiyouuuequq:
            goto oqoksuwkayakeyco;
            kmqgwuksekimwosw:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto egamkewimgoayiwc;
            mukmkmiwaaowwymu:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto kmqgwuksekimwosw;
            oqoksuwkayakeyco:
        }
        goto uewomuwyiswwamwg;
        cceqaegwsqgaqges:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto wyscaumqgyqycymq;
        umkugowakqmaakky:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ggyguomagomqcmkq;
        ccccywcecqgsswqk:
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        goto ueiewmqseyuugaum;
        imoksosqowqmimoc:
        ogcysuekkcyswiku:
        goto omscsmekaceaeico;
        ueiewmqseyuugaum:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto aiggskceoswousgw;
            myiuoyiycqukwuus:
            coukkakgwkwmoyou:
            goto oqckmkkyuymqomww;
            aiggskceoswousgw:
            if ($qmeuaeiseuacgiqc) {
                goto coukkakgwkwmoyou;
            }
            goto yuyamyuwcskywmgg;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = "\163\145\143\164\x69\x6f\x6e\145\x6e\x64";
            goto gmqqsceqqmkeuwsg;
            mmoceucgeiaguqsm:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto sgyysmcsyuaucmau;
            wuaogegqaecwwkyo:
            koeyooaqusayoskm:
            goto gakocaasskoagogo;
            yuyamyuwcskywmgg:
            $ccamueccusigaaio = self::TITLE;
            goto wmyggsuagwosceiu;
            sgyysmcsyuaucmau:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto yauqaiisowsgmsau;
            wmyggsuagwosceiu:
            goto mqmqcqqgqcmiqeyu;
            goto myiuoyiycqukwuus;
            akcmkmaymmcekecu:
            goto ogcysuekkcyswiku;
            goto qcogmismkiigwkcy;
            gmqqsceqqmkeuwsg:
            mqmqcqqgqcmiqeyu:
            goto mmoceucgeiaguqsm;
            yauqaiisowsgmsau:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto sqkqeueggemiwaqi;
            }
            goto oasuqwiwsowakwam;
            oasuqwiwsowakwam:
            $awcmekyiwwkeyisq = $momcykaoccoymeig;
            goto akcmkmaymmcekecu;
            qcogmismkiigwkcy:
            sqkqeueggemiwaqi:
            goto wuaogegqaecwwkyo;
            gakocaasskoagogo:
        }
        goto imoksosqowqmimoc;
        omscsmekaceaeico:
        return $awcmekyiwwkeyisq;
        goto cwkowmwgwyakkmki;
        cwkowmwgwyakkmki:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        goto wkosyweqgikaakak;
        wkosyweqgikaakak:
        if (!($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske)) {
            goto qwqaqqqqiksaqkss;
        }
        goto aeqakycgmcyiisae;
        eoamsouwygskswie:
        qwqaqqqqiksaqkss:
        goto gowiwcysiyeummgy;
        gowiwcysiyeummgy:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto agckeekgsueysiac;
        aeqakycgmcyiisae:
        $yuwymayicwwqiske = '';
        goto eoamsouwygskswie;
        agckeekgsueysiac:
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        goto osiyyuaaukmsugso;
        kgwwccucyguacyku:
        $oammesyieqmwuwyi = [];
        goto wmimosiokccysyuo;
        wwmkccqcyqkskosu:
        goto qkmimisossgioguq;
        goto mckcswqwkwukogqy;
        cskqgasmygooeiki:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto wiawkskyaqysiqsq;
        }
        goto qwaewmyemsgqgkwg;
        wmimosiokccysyuo:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto kyieaymowioesowa;
        }
        goto yqiwyqiseaywuiyk;
        wkcuekwsymskwwcy:
        return $oammesyieqmwuwyi;
        goto wgmcumeeyosmwqgi;
        qquuscuqaaeemooq:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto kgwwccucyguacyku;
        qoqyqgqoqkaeuyoi:
        kyieaymowioesowa:
        goto wsmymasiyaoyaaww;
        qwaewmyemsgqgkwg:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto wwmkccqcyqkskosu;
        yqiwyqiseaywuiyk:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        osiyyuaaukmsugso:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto cskqgasmygooeiki;
        wsmymasiyaoyaaww:
        qkmimisossgioguq:
        goto wkcuekwsymskwwcy;
        mckcswqwkwukogqy:
        wiawkskyaqysiqsq:
        goto qquuscuqaaeemooq;
        wgmcumeeyosmwqgi:
    }
}
