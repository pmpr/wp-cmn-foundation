<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const WOOCOMMERCE_ = "\167\157\x6f\143\x6f\x6d\155\x65\162\x63\x65\x5f";
    const STORED_ADDRESS = "\163\164\157\162\145\144\137\x61\144\x64\162\145\x73\x73";
    const CATALOG_OPTIONS = "\x63\141\x74\141\x6c\157\147\137\157\160\x74\151\157\x6e\x73";
    const GENERAL_OPTIONS = "\x67\x65\x6e\145\162\x61\154\x5f\157\160\x74\x69\157\156\163";
    const PRICING_OPTIONS = "\x70\x72\151\x63\151\x6e\x67\x5f\x6f\x70\x74\x69\157\x6e\x73";
    const PRODUCT_RATING_OPTIONS = "\160\x72\x6f\x64\x75\143\x74\137\x72\141\164\x69\x6e\x67\x5f\x6f\x70\x74\x69\157\156\163";
    const DIGITAL_DOWNLOAD_OPTIONS = "\144\151\147\151\164\141\x6c\137\x64\157\x77\x6e\x6c\157\141\x64\137\157\x70\164\x69\x6f\x6e\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\160\162\157\144\x75\143\x74\x5f\151\156\166\145\156\164\157\162\x79\x5f\x6f\160\x74\151\x6f\x6e\163";
    const PRODUCT_MEASUREMENT_OPTIONS = "\160\x72\157\144\x75\143\164\x5f\x6d\145\x61\x73\x75\x72\x65\155\x65\x6e\164\137\157\x70\164\x69\x6f\156\x73";
    public function kgquecmsgcouyaya()
    {
        goto kkowueuygsqqgogc;
        wiikygmkoykkkgyw:
        msmiaayuagocuswc:
        goto imyemkiyouuuequq;
        kkowueuygsqqgogc:
        $ywoucyskcquysiwc = ["\147\x65\156\145\x72\141\154" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\x73\x68\x69\x70\160\151\x6e\x67", "\x69\x6e\x76\145\x6e\164\x6f\162\x79" => [self::PRODUCT_INVENTORY_OPTIONS], "\x70\162\157\x64\165\143\x74\163\137\147\145\156\x65\162\141\x6c" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\x64\x6f\x77\x6e\x6c\157\x61\144\141\x62\154\x65\x5f\160\162\x6f\144\165\x63\164\163" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\x61\143\143\x6f\165\156\x74\137\162\145\x67\151\x73\164\x72\x61\164\151\x6f\x6e\x5f\157\x70\164\151\x6f\156\x73"];
        goto qccawiseummsemsk;
        imyemkiyouuuequq:
        parent::kgquecmsgcouyaya();
        goto awgeaewuaksssysc;
        qccawiseummsemsk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto gqaecycgekomqqgu;
            gessacesaaekqkws:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto wsksakoqeqwkigoq;
                eugoueaksseemowq:
                sucekaeksayiwooe:
                goto awsqsasmmamcskkk;
                iyuiasiuowggciss:
                scykswkumgcoqgcc:
                goto yquwqeooeyyociqm;
                wsksakoqeqwkigoq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\137\163\145\143\x74\x69\x6f\156\x5f{$awcmekyiwwkeyisq}");
                goto auiaaeeakqkocmqu;
                awsqsasmmamcskkk:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto scykswkumgcoqgcc;
                }
                goto wsiysogusuimayic;
                yquwqeooeyyociqm:
                uysqwomcuuccagkq:
                goto mowimwgkwoymuoae;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\167\x6f\x6f\143\157\155\155\x65\x72\143\145\x5f\x73\x65\164\164\151\156\147\163\x5f{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto eugoueaksseemowq;
                mioseimsuqaqiqae:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\105\156\144";
                goto qisaayswqcmucoqg;
                wsiysogusuimayic:
                $this->cecaguuoecmccuse("\x77\157\157\x63\157\x6d\155\145\x72\x63\x65\137\163\x65\x74\x74\x69\156\x67\x73\x5f{$awcmekyiwwkeyisq}\x5f\x65\156\144", [$this, $oqeqeekoomwgugqi]);
                goto iyuiasiuowggciss;
                auiaaeeakqkocmqu:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\x53\x74\141\x72\164";
                goto mioseimsuqaqiqae;
                qisaayswqcmucoqg:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto sucekaeksayiwooe;
                }
                goto ewecikeyyqmewkgy;
                mowimwgkwoymuoae:
            }
            goto yyyuemkeyacsssye;
            siuaqaksaumkaeui:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto gkyuckeugacsewka;
            cygqsmeoqscsscqm:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto ukmkcwicoqcoyqog;
            gqaecycgekomqqgu:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto akkecgwmiimmeqmy;
            }
            goto cygqsmeoqscsscqm;
            caeucwusaisgqaoe:
            $this->cecaguuoecmccuse("\x77\157\157\x63\157\x6d\155\x65\162\143\145\x5f{$cciauwuwuqaywgce}\x5f\163\145\164\x74\x69\156\147\x73", [$this, $ekiuyucoiagmscgy]);
            goto cgksasyqkkiiowyg;
            gkyuckeugacsewka:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto kmykwuqougkwauiy;
            }
            goto caeucwusaisgqaoe;
            eqeosomseicwmwqu:
            yukcsywomcgeqoiq:
            goto muaokgycwsoimmaw;
            cgksasyqkkiiowyg:
            kmykwuqougkwauiy:
            goto yesymsikkwmuikuc;
            ukmkcwicoqcoyqog:
            akkecgwmiimmeqmy:
            goto siuaqaksaumkaeui;
            muaokgycwsoimmaw:
            ugwysoaqswaocsuu:
            goto komymyuaekmkkiko;
            yesymsikkwmuikuc:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto yukcsywomcgeqoiq;
            }
            goto gessacesaaekqkws;
            yyyuemkeyacsssye:
            qeieqkqcyuasgqqk:
            goto eqeosomseicwmwqu;
            komymyuaekmkkiko:
        }
        goto wiikygmkoykkkgyw;
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
        okmuocsmgiyuiggc:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto cceqaegwsqgaqges;
        }
        goto umkugowakqmaakky;
        sgkiwwkeeuyuyqwg:
        mukmkmiwaaowwymu:
        goto gcqeuqmciwqwqisq;
        koeyooaqusayoskm:
        return $ikgwqyuyckaewsow;
        goto coukkakgwkwmoyou;
        ccccywcecqgsswqk:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ogcysuekkcyswiku;
        umkugowakqmaakky:
        if ($qmeuaeiseuacgiqc) {
            goto uewomuwyiswwamwg;
        }
        goto ggyguomagomqcmkq;
        wyscaumqgyqycymq:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto egamkewimgoayiwc;
            egamkewimgoayiwc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto oqoksuwkayakeyco;
            imwggkqiceiqwwyw:
            kmqgwuksekimwosw:
            goto yoummmmsocscggua;
            oqoksuwkayakeyco:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ueikeuosueikmmqy;
            ueikeuosueikmmqy:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto imwggkqiceiqwwyw;
            yoummmmsocscggua:
        }
        goto sgkiwwkeeuyuyqwg;
        ggyguomagomqcmkq:
        $awcmekyiwwkeyisq++;
        goto wuuqakiyccsuwswc;
        ogcysuekkcyswiku:
        cceqaegwsqgaqges:
        goto koeyooaqusayoskm;
        wuuqakiyccsuwswc:
        uewomuwyiswwamwg:
        goto ccccywcecqgsswqk;
        coukkakgwkwmoyou:
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        goto cwkowmwgwyakkmki;
        qwqaqqqqiksaqkss:
        mqmqcqqgqcmiqeyu:
        goto wkosyweqgikaakak;
        cwkowmwgwyakkmki:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto myiuoyiycqukwuus;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = self::TITLE;
            goto gmqqsceqqmkeuwsg;
            gmqqsceqqmkeuwsg:
            goto yuyamyuwcskywmgg;
            goto mmoceucgeiaguqsm;
            yauqaiisowsgmsau:
            yuyamyuwcskywmgg:
            goto oasuqwiwsowakwam;
            myiuoyiycqukwuus:
            if ($qmeuaeiseuacgiqc) {
                goto aiggskceoswousgw;
            }
            goto oqckmkkyuymqomww;
            imoksosqowqmimoc:
            sqkqeueggemiwaqi:
            goto omscsmekaceaeico;
            ueiewmqseyuugaum:
            wmyggsuagwosceiu:
            goto imoksosqowqmimoc;
            akcmkmaymmcekecu:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto qcogmismkiigwkcy;
            mmoceucgeiaguqsm:
            aiggskceoswousgw:
            goto sgyysmcsyuaucmau;
            gakocaasskoagogo:
            goto mqmqcqqgqcmiqeyu;
            goto ueiewmqseyuugaum;
            sgyysmcsyuaucmau:
            $ccamueccusigaaio = "\x73\x65\x63\x74\151\x6f\x6e\145\x6e\x64";
            goto yauqaiisowsgmsau;
            qcogmismkiigwkcy:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto wmyggsuagwosceiu;
            }
            goto wuaogegqaecwwkyo;
            oasuqwiwsowakwam:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto akcmkmaymmcekecu;
            wuaogegqaecwwkyo:
            $awcmekyiwwkeyisq = $momcykaoccoymeig;
            goto gakocaasskoagogo;
            omscsmekaceaeico:
        }
        goto qwqaqqqqiksaqkss;
        wkosyweqgikaakak:
        return $awcmekyiwwkeyisq;
        goto aeqakycgmcyiisae;
        aeqakycgmcyiisae:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        goto gowiwcysiyeummgy;
        agckeekgsueysiac:
        $yuwymayicwwqiske = '';
        goto kyieaymowioesowa;
        gowiwcysiyeummgy:
        if (!($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske)) {
            goto eoamsouwygskswie;
        }
        goto agckeekgsueysiac;
        kyieaymowioesowa:
        eoamsouwygskswie:
        goto wiawkskyaqysiqsq;
        wiawkskyaqysiqsq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto qkmimisossgioguq;
        qkmimisossgioguq:
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        goto wwmkccqcyqkskosu;
        qquuscuqaaeemooq:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto kgwwccucyguacyku;
        mckcswqwkwukogqy:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto cskqgasmygooeiki;
        }
        goto qquuscuqaaeemooq;
        wgmcumeeyosmwqgi:
        osiyyuaaukmsugso:
        goto usgiwsguoqiaguiu;
        usgiwsguoqiaguiu:
        qwaewmyemsgqgkwg:
        goto ukgkawqgeqswmywc;
        wwmkccqcyqkskosu:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto mckcswqwkwukogqy;
        kgwwccucyguacyku:
        goto qwaewmyemsgqgkwg;
        goto wmimosiokccysyuo;
        wmimosiokccysyuo:
        cskqgasmygooeiki:
        goto yqiwyqiseaywuiyk;
        yqiwyqiseaywuiyk:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        wsmymasiyaoyaaww:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto osiyyuaaukmsugso;
        }
        goto wkcuekwsymskwwcy;
        ukgkawqgeqswmywc:
        return $oammesyieqmwuwyi;
        goto smuaquguuyqakyyk;
        qoqyqgqoqkaeuyoi:
        $oammesyieqmwuwyi = [];
        goto wsmymasiyaoyaaww;
        wkcuekwsymskwwcy:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto wgmcumeeyosmwqgi;
        smuaquguuyqakyyk:
    }
}
