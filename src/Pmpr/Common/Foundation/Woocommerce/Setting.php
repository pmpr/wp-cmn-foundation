<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const WOOCOMMERCE_ = "\167\x6f\x6f\x63\x6f\x6d\x6d\x65\162\x63\145\x5f";
    const STORED_ADDRESS = "\x73\x74\157\162\x65\144\x5f\x61\144\x64\x72\x65\163\163";
    const CATALOG_OPTIONS = "\143\x61\164\141\x6c\157\147\x5f\157\x70\164\x69\x6f\156\x73";
    const GENERAL_OPTIONS = "\147\145\156\145\162\141\154\137\157\160\164\x69\x6f\x6e\163";
    const PRICING_OPTIONS = "\160\x72\151\x63\151\x6e\147\137\x6f\x70\x74\x69\x6f\x6e\163";
    const PRODUCT_RATING_OPTIONS = "\160\x72\x6f\x64\165\x63\164\137\x72\141\x74\151\x6e\x67\137\157\160\x74\x69\x6f\156\x73";
    const DIGITAL_DOWNLOAD_OPTIONS = "\x64\x69\147\151\x74\141\154\x5f\x64\x6f\167\x6e\x6c\157\141\x64\x5f\x6f\160\x74\151\x6f\x6e\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\x70\x72\x6f\144\165\x63\164\137\x69\156\166\x65\156\164\157\x72\171\137\157\x70\x74\151\157\156\163";
    const PRODUCT_MEASUREMENT_OPTIONS = "\x70\x72\157\x64\165\143\164\x5f\x6d\145\x61\x73\165\162\145\155\145\156\x74\x5f\x6f\160\x74\151\x6f\x6e\163";
    public function kgquecmsgcouyaya()
    {
        goto kkowueuygsqqgogc;
        imyemkiyouuuequq:
        parent::kgquecmsgcouyaya();
        goto awgeaewuaksssysc;
        kkowueuygsqqgogc:
        $ywoucyskcquysiwc = ["\147\x65\156\x65\162\x61\154" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\x73\x68\151\x70\x70\x69\156\147", "\151\156\166\x65\156\164\x6f\162\171" => [self::PRODUCT_INVENTORY_OPTIONS], "\x70\x72\157\x64\165\x63\x74\x73\137\x67\145\x6e\x65\x72\x61\154" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\x64\x6f\x77\x6e\x6c\x6f\141\x64\141\142\154\x65\137\x70\x72\157\144\165\x63\x74\x73" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\141\143\143\157\x75\x6e\164\137\x72\x65\147\x69\x73\164\162\x61\x74\151\x6f\x6e\x5f\x6f\160\164\x69\157\x6e\x73"];
        goto qccawiseummsemsk;
        wiikygmkoykkkgyw:
        msmiaayuagocuswc:
        goto imyemkiyouuuequq;
        qccawiseummsemsk:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto gqaecycgekomqqgu;
            eqeosomseicwmwqu:
            yukcsywomcgeqoiq:
            goto muaokgycwsoimmaw;
            gessacesaaekqkws:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto wsksakoqeqwkigoq;
                wsiysogusuimayic:
                $this->cecaguuoecmccuse("\167\x6f\157\x63\157\x6d\155\x65\x72\143\x65\x5f\163\x65\x74\164\151\156\x67\x73\x5f{$awcmekyiwwkeyisq}\x5f\145\x6e\144", [$this, $oqeqeekoomwgugqi]);
                goto iyuiasiuowggciss;
                ewecikeyyqmewkgy:
                $this->cecaguuoecmccuse("\167\157\157\x63\157\x6d\155\145\162\143\145\x5f\x73\145\x74\x74\151\x6e\147\163\137{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto eugoueaksseemowq;
                awsqsasmmamcskkk:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto scykswkumgcoqgcc;
                }
                goto wsiysogusuimayic;
                eugoueaksseemowq:
                sucekaeksayiwooe:
                goto awsqsasmmamcskkk;
                qisaayswqcmucoqg:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto sucekaeksayiwooe;
                }
                goto ewecikeyyqmewkgy;
                mioseimsuqaqiqae:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\156\144";
                goto qisaayswqcmucoqg;
                iyuiasiuowggciss:
                scykswkumgcoqgcc:
                goto yquwqeooeyyociqm;
                auiaaeeakqkocmqu:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\x53\164\141\162\164";
                goto mioseimsuqaqiqae;
                yquwqeooeyyociqm:
                uysqwomcuuccagkq:
                goto mowimwgkwoymuoae;
                wsksakoqeqwkigoq:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\x5f\163\x65\x63\164\151\157\156\137{$awcmekyiwwkeyisq}");
                goto auiaaeeakqkocmqu;
                mowimwgkwoymuoae:
            }
            goto yyyuemkeyacsssye;
            cgksasyqkkiiowyg:
            kmykwuqougkwauiy:
            goto yesymsikkwmuikuc;
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
            ukmkcwicoqcoyqog:
            akkecgwmiimmeqmy:
            goto siuaqaksaumkaeui;
            cygqsmeoqscsscqm:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto ukmkcwicoqcoyqog;
            muaokgycwsoimmaw:
            ugwysoaqswaocsuu:
            goto komymyuaekmkkiko;
            caeucwusaisgqaoe:
            $this->cecaguuoecmccuse("\x77\x6f\157\143\157\x6d\155\145\x72\143\x65\x5f{$cciauwuwuqaywgce}\137\x73\x65\x74\164\x69\x6e\147\163", [$this, $ekiuyucoiagmscgy]);
            goto cgksasyqkkiiowyg;
            yesymsikkwmuikuc:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto yukcsywomcgeqoiq;
            }
            goto gessacesaaekqkws;
            yyyuemkeyacsssye:
            qeieqkqcyuasgqqk:
            goto eqeosomseicwmwqu;
            siuaqaksaumkaeui:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto gkyuckeugacsewka;
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
        ogcysuekkcyswiku:
        cceqaegwsqgaqges:
        goto koeyooaqusayoskm;
        ggyguomagomqcmkq:
        $awcmekyiwwkeyisq++;
        goto wuuqakiyccsuwswc;
        wuuqakiyccsuwswc:
        uewomuwyiswwamwg:
        goto ccccywcecqgsswqk;
        gcqeuqmciwqwqisq:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto okmuocsmgiyuiggc;
        sgkiwwkeeuyuyqwg:
        mukmkmiwaaowwymu:
        goto gcqeuqmciwqwqisq;
        koeyooaqusayoskm:
        return $ikgwqyuyckaewsow;
        goto coukkakgwkwmoyou;
        okmuocsmgiyuiggc:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto cceqaegwsqgaqges;
        }
        goto umkugowakqmaakky;
        wyscaumqgyqycymq:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto egamkewimgoayiwc;
            ueikeuosueikmmqy:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto imwggkqiceiqwwyw;
            oqoksuwkayakeyco:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ueikeuosueikmmqy;
            imwggkqiceiqwwyw:
            kmqgwuksekimwosw:
            goto yoummmmsocscggua;
            egamkewimgoayiwc:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto oqoksuwkayakeyco;
            yoummmmsocscggua:
        }
        goto sgkiwwkeeuyuyqwg;
        umkugowakqmaakky:
        if ($qmeuaeiseuacgiqc) {
            goto uewomuwyiswwamwg;
        }
        goto ggyguomagomqcmkq;
        ccccywcecqgsswqk:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto ogcysuekkcyswiku;
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
            ueiewmqseyuugaum:
            wmyggsuagwosceiu:
            goto imoksosqowqmimoc;
            akcmkmaymmcekecu:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto qcogmismkiigwkcy;
            qcogmismkiigwkcy:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto wmyggsuagwosceiu;
            }
            goto wuaogegqaecwwkyo;
            oqckmkkyuymqomww:
            $ccamueccusigaaio = self::TITLE;
            goto gmqqsceqqmkeuwsg;
            myiuoyiycqukwuus:
            if ($qmeuaeiseuacgiqc) {
                goto aiggskceoswousgw;
            }
            goto oqckmkkyuymqomww;
            imoksosqowqmimoc:
            sqkqeueggemiwaqi:
            goto omscsmekaceaeico;
            oasuqwiwsowakwam:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto akcmkmaymmcekecu;
            yauqaiisowsgmsau:
            yuyamyuwcskywmgg:
            goto oasuqwiwsowakwam;
            mmoceucgeiaguqsm:
            aiggskceoswousgw:
            goto sgyysmcsyuaucmau;
            gakocaasskoagogo:
            goto mqmqcqqgqcmiqeyu;
            goto ueiewmqseyuugaum;
            gmqqsceqqmkeuwsg:
            goto yuyamyuwcskywmgg;
            goto mmoceucgeiaguqsm;
            sgyysmcsyuaucmau:
            $ccamueccusigaaio = "\163\x65\x63\164\x69\x6f\156\x65\156\144";
            goto yauqaiisowsgmsau;
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
        wiawkskyaqysiqsq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto qkmimisossgioguq;
        kyieaymowioesowa:
        eoamsouwygskswie:
        goto wiawkskyaqysiqsq;
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
        qoqyqgqoqkaeuyoi:
        $oammesyieqmwuwyi = [];
        goto wsmymasiyaoyaaww;
        wsmymasiyaoyaaww:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto osiyyuaaukmsugso;
        }
        goto wkcuekwsymskwwcy;
        wwmkccqcyqkskosu:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto mckcswqwkwukogqy;
        mckcswqwkwukogqy:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto cskqgasmygooeiki;
        }
        goto qquuscuqaaeemooq;
        qquuscuqaaeemooq:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto kgwwccucyguacyku;
        ukgkawqgeqswmywc:
        return $oammesyieqmwuwyi;
        goto smuaquguuyqakyyk;
        yqiwyqiseaywuiyk:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto qoqyqgqoqkaeuyoi;
        wmimosiokccysyuo:
        cskqgasmygooeiki:
        goto yqiwyqiseaywuiyk;
        wgmcumeeyosmwqgi:
        osiyyuaaukmsugso:
        goto usgiwsguoqiaguiu;
        usgiwsguoqiaguiu:
        qwaewmyemsgqgkwg:
        goto ukgkawqgeqswmywc;
        wkcuekwsymskwwcy:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto wgmcumeeyosmwqgi;
        smuaquguuyqakyyk:
    }
}
