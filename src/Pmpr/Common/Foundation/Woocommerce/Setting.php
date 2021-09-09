<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
    const WOOCOMMERCE_ = "\167\157\157\x63\x6f\x6d\155\x65\162\143\x65\137";
    const STORED_ADDRESS = "\163\x74\157\162\x65\x64\x5f\141\144\x64\x72\x65\x73\163";
    const CATALOG_OPTIONS = "\143\x61\x74\141\x6c\x6f\147\137\x6f\x70\x74\x69\x6f\156\163";
    const GENERAL_OPTIONS = "\147\145\x6e\x65\162\141\x6c\137\157\160\164\x69\157\x6e\x73";
    const PRICING_OPTIONS = "\x70\162\x69\x63\x69\x6e\147\x5f\x6f\x70\x74\151\x6f\156\163";
    const PRODUCT_RATING_OPTIONS = "\160\162\x6f\x64\165\143\x74\x5f\x72\x61\164\151\x6e\x67\137\157\160\164\151\157\156\x73";
    const DIGITAL_DOWNLOAD_OPTIONS = "\x64\x69\147\151\164\141\x6c\137\x64\x6f\167\x6e\154\157\x61\x64\137\x6f\160\x74\151\x6f\x6e\x73";
    const PRODUCT_INVENTORY_OPTIONS = "\160\162\x6f\144\x75\143\164\137\151\156\x76\145\x6e\x74\157\162\x79\x5f\x6f\x70\x74\151\x6f\x6e\163";
    const PRODUCT_MEASUREMENT_OPTIONS = "\160\162\x6f\144\x75\143\164\x5f\x6d\x65\141\x73\x75\x72\145\155\145\156\164\137\x6f\160\164\x69\x6f\x6e\163";
    public function kgquecmsgcouyaya()
    {
        goto mkskmcusskkouyyi;
        mkskmcusskkouyyi:
        $ywoucyskcquysiwc = ["\147\x65\156\x65\x72\141\x6c" => [self::STORED_ADDRESS, self::GENERAL_OPTIONS, self::PRICING_OPTIONS], "\163\150\x69\160\160\x69\156\x67", "\151\156\x76\145\x6e\164\x6f\162\171" => [self::PRODUCT_INVENTORY_OPTIONS], "\160\162\157\x64\x75\x63\x74\163\x5f\147\145\x6e\x65\x72\141\x6c" => [self::CATALOG_OPTIONS, self::PRODUCT_RATING_OPTIONS, self::PRODUCT_MEASUREMENT_OPTIONS], "\144\157\167\156\154\x6f\x61\x64\141\x62\154\x65\137\160\x72\x6f\x64\165\143\164\x73" => [self::DIGITAL_DOWNLOAD_OPTIONS], "\x61\x63\x63\x6f\x75\x6e\x74\x5f\162\x65\147\151\163\x74\x72\x61\164\151\157\x6e\x5f\157\x70\164\151\157\156\x73"];
        goto swuomeuwkcgwekss;
        scmkeeaewmeqguac:
        parent::kgquecmsgcouyaya();
        goto qqeiuucaguymmsws;
        swuomeuwkcgwekss:
        foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce => $mgiqqesweuqmsymo) {
            goto cukkwcqimawsesga;
            eseyuoaaskemwycm:
            if (!is_array($mgiqqesweuqmsymo)) {
                goto ymygyumokgcugqco;
            }
            goto akccmuykyisokmqm;
            cumkyeqakeicycqy:
            $cciauwuwuqaywgce = $mgiqqesweuqmsymo;
            goto smecgcsaskaiyqwg;
            ouakugqyqismmmwq:
            aaoueeomccwsoycq:
            goto eseyuoaaskemwycm;
            qmeuekyqssiomcyy:
            wggkwquawceyksmk:
            goto eyimcucoicmimiao;
            smecgcsaskaiyqwg:
            mmyckscscsmqsqwo:
            goto kwqqookuogugoeoc;
            kwqqookuogugoeoc:
            $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa($cciauwuwuqaywgce);
            goto iwcqqisaagoyaoyq;
            cukkwcqimawsesga:
            if (!is_numeric($cciauwuwuqaywgce)) {
                goto mmyckscscsmqsqwo;
            }
            goto cumkyeqakeicycqy;
            eyimcucoicmimiao:
            ymygyumokgcugqco:
            goto eaeowkksqokeigsq;
            yeyuwakqagwqqmuc:
            $this->cecaguuoecmccuse("\167\x6f\x6f\143\x6f\x6d\155\x65\x72\143\145\137{$cciauwuwuqaywgce}\x5f\x73\145\164\164\x69\156\147\163", [$this, $ekiuyucoiagmscgy]);
            goto ouakugqyqismmmwq;
            akccmuykyisokmqm:
            foreach ($mgiqqesweuqmsymo as $awcmekyiwwkeyisq) {
                goto ikqqueokumaakwmk;
                oysgkcoiouaikyys:
                $this->cecaguuoecmccuse("\167\x6f\157\x63\x6f\155\155\145\162\143\145\137\x73\145\x74\164\x69\156\147\163\137{$awcmekyiwwkeyisq}", [$this, $amcsoieoyceiwyiy]);
                goto gikmiimsmmugmewi;
                ikuyuccwmwasokmy:
                $amcsoieoyceiwyiy = "{$ekiuyucoiagmscgy}\x53\164\x61\162\164";
                goto gmwcswqmcyogosia;
                oesieyemekcikmuo:
                ggscugaoyeccwaoq:
                goto okcicyakakceigwe;
                gmwcswqmcyogosia:
                $oqeqeekoomwgugqi = "{$ekiuyucoiagmscgy}\x45\x6e\x64";
                goto aiegomwmomwugkaa;
                aiegomwmomwugkaa:
                if (!($amcsoieoyceiwyiy = ManipulateValidation::pwcgsiswecasgkgs($this, $amcsoieoyceiwyiy))) {
                    goto gciymsqoaosekywi;
                }
                goto oysgkcoiouaikyys;
                gikmiimsmmugmewi:
                gciymsqoaosekywi:
                goto ycwkcyukyieusyce;
                ycwkcyukyieusyce:
                if (!($oqeqeekoomwgugqi = ManipulateValidation::pwcgsiswecasgkgs($this, $oqeqeekoomwgugqi))) {
                    goto caawoosasoogaiwa;
                }
                goto ywskqocaomieoeuo;
                ikqqueokumaakwmk:
                $ekiuyucoiagmscgy = ManipulateString::qoqowykumameucwa("{$cciauwuwuqaywgce}\x5f\163\145\143\x74\151\157\x6e\137{$awcmekyiwwkeyisq}");
                goto ikuyuccwmwasokmy;
                ywskqocaomieoeuo:
                $this->cecaguuoecmccuse("\x77\x6f\157\x63\157\155\155\x65\x72\143\145\137\x73\145\164\164\151\156\x67\x73\x5f{$awcmekyiwwkeyisq}\137\145\156\144", [$this, $oqeqeekoomwgugqi]);
                goto yqysoqweammswcea;
                yqysoqweammswcea:
                caawoosasoogaiwa:
                goto oesieyemekcikmuo;
                okcicyakakceigwe:
            }
            goto qmeuekyqssiomcyy;
            eaeowkksqokeigsq:
            mseiksmausoaqecy:
            goto qcmiieemioisoyyi;
            iwcqqisaagoyaoyq:
            if (!($ekiuyucoiagmscgy = ManipulateValidation::pwcgsiswecasgkgs($this, $ekiuyucoiagmscgy))) {
                goto aaoueeomccwsoycq;
            }
            goto yeyuwakqagwqqmuc;
            qcmiieemioisoyyi:
        }
        goto ccwwqiosmasqqqwu;
        ccwwqiosmasqqqwu:
        psqooaaoocusoyag:
        goto scmkeeaewmeqguac;
        qqeiuucaguymmsws:
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
        goto gcywqkqkwkcmoawo;
        mcyamakgwewogwqi:
        return $ikgwqyuyckaewsow;
        goto aqamaqggiseeioqq;
        gmoykcyssieuqueu:
        $awcmekyiwwkeyisq = $this->gkookkaogucisskc($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc);
        goto iywiyewymemgqacq;
        kyaiywcwwmeqwyaw:
        if ($qmeuaeiseuacgiqc) {
            goto kwmgoowcwggsyokw;
        }
        goto maswyugssquqqggq;
        gcywqkqkwkcmoawo:
        foreach ($uwomkgseoiegeume as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto okgweyikqgcceggq;
            okgweyikqgcceggq:
            $aiowsaccomcoikus[self::ID] = ManipulateArray::get($aiowsaccomcoikus, self::ID, $momcykaoccoymeig);
            goto csisksagguuywuia;
            ycucsikocgkiesgi:
            $uwomkgseoiegeume[$momcykaoccoymeig] = $aiowsaccomcoikus;
            goto kquqieqqiieakmoa;
            kquqieqqiieakmoa:
            kqueakeekumokwoe:
            goto usakoyequcyysywo;
            csisksagguuywuia:
            $aiowsaccomcoikus[self::TYPE] = ManipulateArray::get($aiowsaccomcoikus, self::TYPE, self::TEXT);
            goto ycucsikocgkiesgi;
            usakoyequcyysywo:
        }
        goto cmcwskwgaiauugws;
        cmcwskwgaiauugws:
        owqiausosmeaugay:
        goto gmoykcyssieuqueu;
        gwucakcwqkiiqyyg:
        okamgiuocakyggwo:
        goto mcyamakgwewogwqi;
        iywiyewymemgqacq:
        if (!is_numeric($awcmekyiwwkeyisq)) {
            goto okamgiuocakyggwo;
        }
        goto kyaiywcwwmeqwyaw;
        egcycueumoemiuai:
        kwmgoowcwggsyokw:
        goto miyggyguyamiggcm;
        miyggyguyamiggcm:
        array_splice($ikgwqyuyckaewsow, $awcmekyiwwkeyisq, 0, $uwomkgseoiegeume);
        goto gwucakcwqkiiqyyg;
        maswyugssquqqggq:
        $awcmekyiwwkeyisq++;
        goto egcycueumoemiuai;
        aqamaqggiseeioqq:
    }
    
    public function gkookkaogucisskc(array $ikgwqyuyckaewsow, string $awcmekyiwwkeyisq, $qmeuaeiseuacgiqc = true) : string
    {
        goto uysqwomcuuccagkq;
        uysqwomcuuccagkq:
        foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) {
            goto swuquosuguoomaeq;
            swuquosuguoomaeq:
            if ($qmeuaeiseuacgiqc) {
                goto icksskeigsiugace;
            }
            goto occaiwsgmaykoqey;
            akkecgwmiimmeqmy:
            eyaesumwwwgisaym:
            goto kmykwuqougkwauiy;
            kuwecmygikeyisuq:
            $aokagokqyuysuksm = ManipulateArray::get($aiowsaccomcoikus, self::ID);
            goto augwgqgcukgkywiw;
            swwmkisacmieqiae:
            $ccamueccusigaaio = "\x73\x65\143\x74\x69\157\x6e\x65\x6e\x64";
            goto imqeimsscmwgasys;
            mweoqymwyuimuakm:
            icksskeigsiugace:
            goto swwmkisacmieqiae;
            occaiwsgmaykoqey:
            $ccamueccusigaaio = self::TITLE;
            goto iuikeaqqcukamyqm;
            imqeimsscmwgasys:
            ceyygoicaeoqwwio:
            goto kuwecmygikeyisuq;
            augwgqgcukgkywiw:
            $sqeykgyoooqysmca = ManipulateArray::get($aiowsaccomcoikus, self::TYPE);
            goto kmkoiwuimosekikq;
            iuikeaqqcukamyqm:
            goto ceyygoicaeoqwwio;
            goto mweoqymwyuimuakm;
            kmkoiwuimosekikq:
            if (!($aokagokqyuysuksm == $awcmekyiwwkeyisq && $sqeykgyoooqysmca === $ccamueccusigaaio)) {
                goto eyaesumwwwgisaym;
            }
            goto msmiaayuagocuswc;
            msmiaayuagocuswc:
            $awcmekyiwwkeyisq = $momcykaoccoymeig;
            goto ugwysoaqswaocsuu;
            kmykwuqougkwauiy:
            siuuokwymeygcosy:
            goto qeieqkqcyuasgqqk;
            ugwysoaqswaocsuu:
            goto sskkiisoqmmsocic;
            goto akkecgwmiimmeqmy;
            qeieqkqcyuasgqqk:
        }
        goto sucekaeksayiwooe;
        scykswkumgcoqgcc:
        return $awcmekyiwwkeyisq;
        goto wsksakoqeqwkigoq;
        sucekaeksayiwooe:
        sskkiisoqmmsocic:
        goto scykswkumgcoqgcc;
        wsksakoqeqwkigoq:
    }
    
    public static function eiwcuqigayigimak($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $yuwymayicwwqiske = self::WOOCOMMERCE_)
    {
        goto mioseimsuqaqiqae;
        ewecikeyyqmewkgy:
        auiaaeeakqkocmqu:
        goto eugoueaksseemowq;
        mioseimsuqaqiqae:
        if (!($yuwymayicwwqiske && substr($uusmaiomayssaecw, 0, strlen($yuwymayicwwqiske)) === $yuwymayicwwqiske)) {
            goto auiaaeeakqkocmqu;
        }
        goto qisaayswqcmucoqg;
        qisaayswqcmucoqg:
        $yuwymayicwwqiske = '';
        goto ewecikeyyqmewkgy;
        eugoueaksseemowq:
        return ManipulateWoocommerce::giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $yuwymayicwwqiske);
        goto awsqsasmmamcskkk;
        awsqsasmmamcskkk:
    }
    
    protected static function ossscgwwiwwqyuiy($uusmaiomayssaecw, $megmggkiokqkcwou = [])
    {
        goto mowimwgkwoymuoae;
        yesymsikkwmuikuc:
        wsiysogusuimayic:
        goto gessacesaaekqkws;
        siuaqaksaumkaeui:
        $cmqeouisgweqguee = array_flip($cmqeouisgweqguee);
        goto gkyuckeugacsewka;
        cgksasyqkkiiowyg:
        $oammesyieqmwuwyi = array_intersect_key($megmggkiokqkcwou, $cmqeouisgweqguee);
        goto yesymsikkwmuikuc;
        ukmkcwicoqcoyqog:
        iyuiasiuowggciss:
        goto siuaqaksaumkaeui;
        gkyuckeugacsewka:
        $oammesyieqmwuwyi = [];
        goto caeucwusaisgqaoe;
        yyyuemkeyacsssye:
        return $oammesyieqmwuwyi;
        goto eqeosomseicwmwqu;
        gqaecycgekomqqgu:
        $oammesyieqmwuwyi = $cmqeouisgweqguee;
        goto cygqsmeoqscsscqm;
        mowimwgkwoymuoae:
        $cmqeouisgweqguee = self::eiwcuqigayigimak($uusmaiomayssaecw);
        goto yukcsywomcgeqoiq;
        caeucwusaisgqaoe:
        if (!(is_array($megmggkiokqkcwou) && is_array($cmqeouisgweqguee))) {
            goto wsiysogusuimayic;
        }
        goto cgksasyqkkiiowyg;
        yukcsywomcgeqoiq:
        if (is_array($cmqeouisgweqguee) && $cmqeouisgweqguee && is_array($megmggkiokqkcwou) && $megmggkiokqkcwou) {
            goto iyuiasiuowggciss;
        }
        goto gqaecycgekomqqgu;
        gessacesaaekqkws:
        yquwqeooeyyociqm:
        goto yyyuemkeyacsssye;
        cygqsmeoqscsscqm:
        goto yquwqeooeyyociqm;
        goto ukmkcwicoqcoyqog;
        eqeosomseicwmwqu:
    }
}
