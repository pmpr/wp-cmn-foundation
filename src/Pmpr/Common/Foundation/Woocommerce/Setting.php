<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const WOOCOMMERCE_ = "\167\157\x6f\143\157\155\155\x65\162\143\x65\x5f";
    const STORED_ADDRESS = "\163\164\157\x72\145\x64\137\x61\144\x64\x72\145\163\x73";
    const CATALOG_OPTIONS = "\x63\141\x74\141\x6c\157\147\137\157\160\164\151\x6f\x6e\x73";
    const GENERAL_OPTIONS = "\x67\x65\x6e\x65\162\141\154\x5f\157\x70\164\151\x6f\x6e\x73";
    const PRICING_OPTIONS = "\x70\162\151\143\x69\156\x67\x5f\157\160\164\151\x6f\156\x73";
    const PRODUCT_RATING_OPTIONS = "\160\x72\157\x64\165\143\x74\137\162\141\x74\151\x6e\147\137\x6f\160\164\x69\157\156\163";
    const DIGITAL_DOWNLOAD_OPTIONS = "\x64\x69\147\151\164\141\154\137\x64\x6f\167\156\154\157\x61\x64\137\157\160\164\x69\157\x6e\163";
    const PRODUCT_INVENTORY_OPTIONS = "\160\162\157\x64\x75\143\x74\137\x69\156\166\x65\x6e\164\157\x72\x79\137\x6f\x70\x74\151\157\156\163";
    const PRODUCT_MEASUREMENT_OPTIONS = "\x70\162\157\144\165\x63\164\137\x6d\x65\x61\x73\x75\162\145\155\x65\156\x74\137\157\160\164\151\x6f\x6e\163";
    public function kgquecmsgcouyaya()
    {
        goto kkowueuygsqqgogc;
        wiikygmkoykkkgyw:
        msmiaayuagocuswc:
        goto imyemkiyouuuequq;
        qccawiseummsemsk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto gqaecycgekomqqgu;
            gkyuckeugacsewka:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto kmykwuqougkwauiy;
            }
            goto caeucwusaisgqaoe;
            cygqsmeoqscsscqm:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto ukmkcwicoqcoyqog;
            yesymsikkwmuikuc:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto yukcsywomcgeqoiq;
            }
            goto gessacesaaekqkws;
            siuaqaksaumkaeui:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto gkyuckeugacsewka;
            gessacesaaekqkws:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto wsksakoqeqwkigoq;
                wsksakoqeqwkigoq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\x5f\x73\145\x63\x74\x69\x6f\156\x5f{$awcmekyiwwkeyisq}");
                goto auiaaeeakqkocmqu;
                wsiysogusuimayic:
                $this->cecaguuoecmccuse("\x77\x6f\x6f\143\157\x6d\155\145\x72\x63\145\x5f\x73\x65\x74\164\x69\156\147\x73\137{$awcmekyiwwkeyisq}\137\145\x6e\x64", [$this, $oqeqeekoomwgugqi]);
                goto iyuiasiuowggciss;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\x77\157\x6f\143\157\155\155\x65\162\143\x65\137\x73\145\x74\164\151\x6e\147\x73\x5f{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto eugoueaksseemowq;
                qisaayswqcmucoqg:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto sucekaeksayiwooe;
                }
                goto ewecikeyyqmewkgy;
                mioseimsuqaqiqae:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\x6e\144";
                goto qisaayswqcmucoqg;
                auiaaeeakqkocmqu:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\x53\x74\141\162\164";
                goto mioseimsuqaqiqae;
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
                iyuiasiuowggciss:
                scykswkumgcoqgcc:
                goto yquwqeooeyyociqm;
                mowimwgkwoymuoae:
            }
            goto yyyuemkeyacsssye;
            gqaecycgekomqqgu:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto akkecgwmiimmeqmy;
            }
            goto cygqsmeoqscsscqm;
            muaokgycwsoimmaw:
            ugwysoaqswaocsuu:
            goto komymyuaekmkkiko;
            yyyuemkeyacsssye:
            qeieqkqcyuasgqqk:
            goto eqeosomseicwmwqu;
            eqeosomseicwmwqu:
            yukcsywomcgeqoiq:
            goto muaokgycwsoimmaw;
            ukmkcwicoqcoyqog:
            akkecgwmiimmeqmy:
            goto siuaqaksaumkaeui;
            caeucwusaisgqaoe:
            $this->cecaguuoecmccuse("\167\157\157\x63\157\155\x6d\145\x72\x63\x65\137{$cciauwuwuqaywgce}\137\x73\x65\164\x74\151\x6e\147\163", [$this, $ekiuyucoiagmscgy]);
            goto cgksasyqkkiiowyg;
            cgksasyqkkiiowyg:
            kmykwuqougkwauiy:
            goto yesymsikkwmuikuc;
            komymyuaekmkkiko:
        }
        goto wiikygmkoykkkgyw;
        kkowueuygsqqgogc:
        $ywoucyskcquysiwc = ["\x67\145\x6e\145\x72\141\154" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\x73\x68\151\160\160\151\156\147", "\x69\156\166\145\156\x74\x6f\162\171" => [self::PRODUCT_INVENTORY_OPTIONS], "\x70\x72\x6f\144\165\143\164\163\x5f\x67\x65\x6e\145\162\x61\154" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\144\157\167\x6e\154\157\141\144\141\x62\154\x65\137\160\x72\x6f\x64\165\x63\x74\163" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\x61\143\143\x6f\165\x6e\x74\x5f\162\145\x67\x69\163\x74\x72\141\164\x69\157\156\x5f\x6f\x70\164\x69\x6f\156\x73"];
        goto qccawiseummsemsk;
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
        ccccywcecqgsswqk:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ogcysuekkcyswiku;
        okmuocsmgiyuiggc:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto cceqaegwsqgaqges;
        }
        goto umkugowakqmaakky;
        umkugowakqmaakky:
        if ($qmeuaeiseuacgiqc) {
            goto uewomuwyiswwamwg;
        }
        goto ggyguomagomqcmkq;
        ogcysuekkcyswiku:
        cceqaegwsqgaqges:
        goto koeyooaqusayoskm;
        gcqeuqmciwqwqisq:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto okmuocsmgiyuiggc;
        sgkiwwkeeuyuyqwg:
        mukmkmiwaaowwymu:
        goto gcqeuqmciwqwqisq;
        ggyguomagomqcmkq:
        $awcmekyiwwkeyisq++;
        goto wuuqakiyccsuwswc;
        koeyooaqusayoskm:
        return $ikgwqyuyckaewsow;
        goto coukkakgwkwmoyou;
        wuuqakiyccsuwswc:
        uewomuwyiswwamwg:
        goto ccccywcecqgsswqk;
        wyscaumqgyqycymq:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto egamkewimgoayiwc;
            imwggkqiceiqwwyw:
            kmqgwuksekimwosw:
            goto yoummmmsocscggua;
            oqoksuwkayakeyco:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ueikeuosueikmmqy;
            egamkewimgoayiwc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto oqoksuwkayakeyco;
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
        qwqaqqqqiksaqkss:
        mqmqcqqgqcmiqeyu:
        goto wkosyweqgikaakak;
        cwkowmwgwyakkmki:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto myiuoyiycqukwuus;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = self::TITLE;
            goto gmqqsceqqmkeuwsg;
            imoksosqowqmimoc:
            sqkqeueggemiwaqi:
            goto omscsmekaceaeico;
            mmoceucgeiaguqsm:
            aiggskceoswousgw:
            goto sgyysmcsyuaucmau;
            myiuoyiycqukwuus:
            if ($qmeuaeiseuacgiqc) {
                goto aiggskceoswousgw;
            }
            goto oqckmkkyuymqomww;
            gmqqsceqqmkeuwsg:
            goto yuyamyuwcskywmgg;
            goto mmoceucgeiaguqsm;
            ueiewmqseyuugaum:
            wmyggsuagwosceiu:
            goto imoksosqowqmimoc;
            gakocaasskoagogo:
            goto mqmqcqqgqcmiqeyu;
            goto ueiewmqseyuugaum;
            sgyysmcsyuaucmau:
            $ccamueccusigaaio = "\163\x65\x63\x74\151\x6f\x6e\x65\x6e\x64";
            goto yauqaiisowsgmsau;
            yauqaiisowsgmsau:
            yuyamyuwcskywmgg:
            goto oasuqwiwsowakwam;
            oasuqwiwsowakwam:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto akcmkmaymmcekecu;
            akcmkmaymmcekecu:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto qcogmismkiigwkcy;
            qcogmismkiigwkcy:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto wmyggsuagwosceiu;
            }
            goto wuaogegqaecwwkyo;
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
        kyieaymowioesowa:
        eoamsouwygskswie:
        goto wiawkskyaqysiqsq;
        wiawkskyaqysiqsq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto qkmimisossgioguq;
        agckeekgsueysiac:
        $yuwymayicwwqiske = '';
        goto kyieaymowioesowa;
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
        kgwwccucyguacyku:
        goto qwaewmyemsgqgkwg;
        goto wmimosiokccysyuo;
        wsmymasiyaoyaaww:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto osiyyuaaukmsugso;
        }
        goto wkcuekwsymskwwcy;
        wmimosiokccysyuo:
        cskqgasmygooeiki:
        goto yqiwyqiseaywuiyk;
        usgiwsguoqiaguiu:
        qwaewmyemsgqgkwg:
        goto ukgkawqgeqswmywc;
        qquuscuqaaeemooq:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto kgwwccucyguacyku;
        wwmkccqcyqkskosu:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto mckcswqwkwukogqy;
        yqiwyqiseaywuiyk:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        wgmcumeeyosmwqgi:
        osiyyuaaukmsugso:
        goto usgiwsguoqiaguiu;
        mckcswqwkwukogqy:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto cskqgasmygooeiki;
        }
        goto qquuscuqaaeemooq;
        wkcuekwsymskwwcy:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto wgmcumeeyosmwqgi;
        qoqyqgqoqkaeuyoi:
        $oammesyieqmwuwyi = [];
        goto wsmymasiyaoyaaww;
        ukgkawqgeqswmywc:
        return $oammesyieqmwuwyi;
        goto smuaquguuyqakyyk;
        smuaquguuyqakyyk:
    }
}
