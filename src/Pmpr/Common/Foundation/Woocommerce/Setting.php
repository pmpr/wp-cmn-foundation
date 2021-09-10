<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const WOOCOMMERCE_ = "\x77\157\x6f\x63\157\x6d\x6d\145\x72\x63\145\137";
    const STORED_ADDRESS = "\x73\x74\x6f\x72\145\144\x5f\141\x64\x64\x72\x65\x73\x73";
    const CATALOG_OPTIONS = "\x63\141\164\141\154\157\147\137\x6f\160\164\151\157\x6e\163";
    const GENERAL_OPTIONS = "\x67\x65\156\x65\162\x61\x6c\137\157\x70\164\151\157\156\163";
    const PRICING_OPTIONS = "\x70\162\x69\143\151\156\147\137\x6f\160\x74\x69\157\156\163";
    const PRODUCT_RATING_OPTIONS = "\160\x72\157\144\x75\x63\x74\137\x72\x61\164\x69\x6e\147\137\x6f\160\164\151\x6f\x6e\x73";
    const DIGITAL_DOWNLOAD_OPTIONS = "\144\151\147\151\x74\x61\x6c\137\144\157\x77\156\x6c\x6f\141\x64\x5f\157\x70\x74\x69\157\x6e\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\x70\162\x6f\x64\165\x63\164\137\x69\x6e\166\x65\156\x74\157\162\171\x5f\157\160\x74\x69\x6f\x6e\x73";
    const PRODUCT_MEASUREMENT_OPTIONS = "\x70\x72\157\x64\x75\143\x74\x5f\155\145\x61\x73\165\162\x65\x6d\145\x6e\164\137\x6f\160\x74\151\157\156\163";
    public function kgquecmsgcouyaya()
    {
        goto kkowueuygsqqgogc;
        imyemkiyouuuequq:
        parent::kgquecmsgcouyaya();
        goto awgeaewuaksssysc;
        kkowueuygsqqgogc:
        $ywoucyskcquysiwc = ["\x67\145\156\145\162\141\x6c" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\x73\x68\x69\x70\x70\151\156\x67", "\151\x6e\166\145\156\x74\157\162\x79" => [self::PRODUCT_INVENTORY_OPTIONS], "\x70\x72\157\x64\x75\143\x74\163\137\147\x65\156\x65\162\x61\154" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\144\157\167\x6e\154\x6f\141\144\x61\142\154\x65\137\x70\162\157\x64\165\143\x74\163" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\141\x63\x63\157\x75\156\164\137\162\x65\x67\x69\163\164\x72\141\x74\151\157\156\x5f\157\160\x74\x69\157\156\x73"];
        goto qccawiseummsemsk;
        qccawiseummsemsk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto gqaecycgekomqqgu;
            gessacesaaekqkws:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto wsksakoqeqwkigoq;
                yquwqeooeyyociqm:
                uysqwomcuuccagkq:
                goto mowimwgkwoymuoae;
                eugoueaksseemowq:
                sucekaeksayiwooe:
                goto awsqsasmmamcskkk;
                awsqsasmmamcskkk:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto scykswkumgcoqgcc;
                }
                goto wsiysogusuimayic;
                mioseimsuqaqiqae:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\x6e\x64";
                goto qisaayswqcmucoqg;
                qisaayswqcmucoqg:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto sucekaeksayiwooe;
                }
                goto ewecikeyyqmewkgy;
                wsiysogusuimayic:
                $this->cecaguuoecmccuse("\x77\157\x6f\x63\157\155\x6d\x65\162\x63\145\137\x73\145\x74\164\x69\x6e\x67\163\137{$awcmekyiwwkeyisq}\x5f\145\156\x64", [$this, $oqeqeekoomwgugqi]);
                goto iyuiasiuowggciss;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\167\157\x6f\143\x6f\x6d\x6d\x65\x72\x63\145\137\x73\145\x74\x74\151\156\147\x73\137{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto eugoueaksseemowq;
                iyuiasiuowggciss:
                scykswkumgcoqgcc:
                goto yquwqeooeyyociqm;
                auiaaeeakqkocmqu:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\x53\164\x61\162\164";
                goto mioseimsuqaqiqae;
                wsksakoqeqwkigoq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\x5f\x73\x65\143\x74\x69\x6f\156\x5f{$awcmekyiwwkeyisq}");
                goto auiaaeeakqkocmqu;
                mowimwgkwoymuoae:
            }
            goto yyyuemkeyacsssye;
            muaokgycwsoimmaw:
            ugwysoaqswaocsuu:
            goto komymyuaekmkkiko;
            cgksasyqkkiiowyg:
            kmykwuqougkwauiy:
            goto yesymsikkwmuikuc;
            gkyuckeugacsewka:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto kmykwuqougkwauiy;
            }
            goto caeucwusaisgqaoe;
            ukmkcwicoqcoyqog:
            akkecgwmiimmeqmy:
            goto siuaqaksaumkaeui;
            gqaecycgekomqqgu:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto akkecgwmiimmeqmy;
            }
            goto cygqsmeoqscsscqm;
            eqeosomseicwmwqu:
            yukcsywomcgeqoiq:
            goto muaokgycwsoimmaw;
            yesymsikkwmuikuc:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto yukcsywomcgeqoiq;
            }
            goto gessacesaaekqkws;
            cygqsmeoqscsscqm:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto ukmkcwicoqcoyqog;
            siuaqaksaumkaeui:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto gkyuckeugacsewka;
            yyyuemkeyacsssye:
            qeieqkqcyuasgqqk:
            goto eqeosomseicwmwqu;
            caeucwusaisgqaoe:
            $this->cecaguuoecmccuse("\167\157\157\x63\x6f\x6d\155\145\162\143\145\137{$cciauwuwuqaywgce}\137\x73\x65\164\x74\x69\156\x67\x73", [$this, $ekiuyucoiagmscgy]);
            goto cgksasyqkkiiowyg;
            komymyuaekmkkiko:
        }
        goto wiikygmkoykkkgyw;
        wiikygmkoykkkgyw:
        msmiaayuagocuswc:
        goto imyemkiyouuuequq;
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
        gcqeuqmciwqwqisq:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto okmuocsmgiyuiggc;
        koeyooaqusayoskm:
        return $ikgwqyuyckaewsow;
        goto coukkakgwkwmoyou;
        ggyguomagomqcmkq:
        $awcmekyiwwkeyisq++;
        goto wuuqakiyccsuwswc;
        umkugowakqmaakky:
        if ($qmeuaeiseuacgiqc) {
            goto uewomuwyiswwamwg;
        }
        goto ggyguomagomqcmkq;
        wuuqakiyccsuwswc:
        uewomuwyiswwamwg:
        goto ccccywcecqgsswqk;
        sgkiwwkeeuyuyqwg:
        mukmkmiwaaowwymu:
        goto gcqeuqmciwqwqisq;
        ogcysuekkcyswiku:
        cceqaegwsqgaqges:
        goto koeyooaqusayoskm;
        ccccywcecqgsswqk:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ogcysuekkcyswiku;
        okmuocsmgiyuiggc:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto cceqaegwsqgaqges;
        }
        goto umkugowakqmaakky;
        wyscaumqgyqycymq:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto egamkewimgoayiwc;
            oqoksuwkayakeyco:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ueikeuosueikmmqy;
            egamkewimgoayiwc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto oqoksuwkayakeyco;
            imwggkqiceiqwwyw:
            kmqgwuksekimwosw:
            goto yoummmmsocscggua;
            ueikeuosueikmmqy:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto imwggkqiceiqwwyw;
            yoummmmsocscggua:
        }
        goto sgkiwwkeeuyuyqwg;
        coukkakgwkwmoyou:
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        goto cwkowmwgwyakkmki;
        wkosyweqgikaakak:
        return $awcmekyiwwkeyisq;
        goto aeqakycgmcyiisae;
        qwqaqqqqiksaqkss:
        mqmqcqqgqcmiqeyu:
        goto wkosyweqgikaakak;
        cwkowmwgwyakkmki:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto myiuoyiycqukwuus;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = self::TITLE;
            goto gmqqsceqqmkeuwsg;
            ueiewmqseyuugaum:
            wmyggsuagwosceiu:
            goto imoksosqowqmimoc;
            akcmkmaymmcekecu:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto qcogmismkiigwkcy;
            gakocaasskoagogo:
            goto mqmqcqqgqcmiqeyu;
            goto ueiewmqseyuugaum;
            myiuoyiycqukwuus:
            if ($qmeuaeiseuacgiqc) {
                goto aiggskceoswousgw;
            }
            goto oqckmkkyuymqomww;
            imoksosqowqmimoc:
            sqkqeueggemiwaqi:
            goto omscsmekaceaeico;
            sgyysmcsyuaucmau:
            $ccamueccusigaaio = "\x73\x65\143\x74\151\x6f\x6e\x65\156\x64";
            goto yauqaiisowsgmsau;
            wuaogegqaecwwkyo:
            $awcmekyiwwkeyisq = $momcykaoccoymeig;
            goto gakocaasskoagogo;
            yauqaiisowsgmsau:
            yuyamyuwcskywmgg:
            goto oasuqwiwsowakwam;
            mmoceucgeiaguqsm:
            aiggskceoswousgw:
            goto sgyysmcsyuaucmau;
            gmqqsceqqmkeuwsg:
            goto yuyamyuwcskywmgg;
            goto mmoceucgeiaguqsm;
            oasuqwiwsowakwam:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto akcmkmaymmcekecu;
            qcogmismkiigwkcy:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto wmyggsuagwosceiu;
            }
            goto wuaogegqaecwwkyo;
            omscsmekaceaeico:
        }
        goto qwqaqqqqiksaqkss;
        aeqakycgmcyiisae:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        goto gowiwcysiyeummgy;
        kyieaymowioesowa:
        eoamsouwygskswie:
        goto wiawkskyaqysiqsq;
        agckeekgsueysiac:
        $yuwymayicwwqiske = '';
        goto kyieaymowioesowa;
        wiawkskyaqysiqsq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto qkmimisossgioguq;
        gowiwcysiyeummgy:
        if (!($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske)) {
            goto eoamsouwygskswie;
        }
        goto agckeekgsueysiac;
        qkmimisossgioguq:
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        goto wwmkccqcyqkskosu;
        wwmkccqcyqkskosu:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto mckcswqwkwukogqy;
        usgiwsguoqiaguiu:
        qwaewmyemsgqgkwg:
        goto ukgkawqgeqswmywc;
        qoqyqgqoqkaeuyoi:
        $oammesyieqmwuwyi = [];
        goto wsmymasiyaoyaaww;
        yqiwyqiseaywuiyk:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        qquuscuqaaeemooq:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto kgwwccucyguacyku;
        mckcswqwkwukogqy:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto cskqgasmygooeiki;
        }
        goto qquuscuqaaeemooq;
        kgwwccucyguacyku:
        goto qwaewmyemsgqgkwg;
        goto wmimosiokccysyuo;
        wsmymasiyaoyaaww:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto osiyyuaaukmsugso;
        }
        goto wkcuekwsymskwwcy;
        wgmcumeeyosmwqgi:
        osiyyuaaukmsugso:
        goto usgiwsguoqiaguiu;
        ukgkawqgeqswmywc:
        return $oammesyieqmwuwyi;
        goto smuaquguuyqakyyk;
        wmimosiokccysyuo:
        cskqgasmygooeiki:
        goto yqiwyqiseaywuiyk;
        wkcuekwsymskwwcy:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto wgmcumeeyosmwqgi;
        smuaquguuyqakyyk:
    }
}
