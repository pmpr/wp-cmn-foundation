<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Checkbox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\ManipulateAjax;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use WC_Product_Attribute;

class LocalAttribute extends BaseAttribute
{
    
    public function __construct()
    {
        $this->name = "\154\x6f\143\141\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\167\157\157\x63\x6f\155\x6d\145\162\x63\x65\x5f\x73\141\x76\x65\137\141\164\x74\162\151\x62\165\x74\145\163", [$this, "\163\x61\x76\x65"], 5)->qcsmikeggeemccuu("\167\x6f\x6f\x63\x6f\x6d\155\x65\162\x63\x65\x5f\141\146\164\145\162\137\x70\x72\157\144\165\143\164\x5f\x61\x74\164\x72\151\x62\165\x74\x65\137\x73\x65\x74\x74\x69\x6e\147\163", [$this, "\x69\165\x61\x75\143\x75\x6f\157\x6b\x67\x6f\161\x69\x69\x69\x6f"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto yogcgegoayymyisi;
        uiokqiccsgcmweuw:
        aeaaqimiugqwsiuo:
        goto eycgkegwmmsgwgsu;
        eycgkegwmmsgwgsu:
        iwcmwyyeuwuogkmy:
        goto ayyowoawokgaayaw;
        yooikokuygygyscy:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto mqecqicimeusigcs;
            ouyqacmgssaeeyaq:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto cgummkmwkkyaomqq;
            }
            goto auwsmkeaswcqwkiy;
            wocmissqwqoccqgq:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto ouyqacmgssaeeyaq;
            agwucmswyeecgiwk:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wocmissqwqoccqgq;
            mqecqicimeusigcs:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto mygyyacgawkwoaak;
            }
            goto agwucmswyeecgiwk;
            auwsmkeaswcqwkiy:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto ykwmsugmueoosyka;
                oieyimeswqquigei:
                wokoooqeguamsuso:
                goto sieqieowwakamuei;
                iggimwweuooskmqi:
                $eqgoocgaqwqcimie = true;
                goto oieyimeswqquigei;
                uiqqoqeguqksakak:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto wokoooqeguamsuso;
                }
                goto iggimwweuooskmqi;
                sieqieowwakamuei:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto qcssqeugkggmssuq;
                ykwmsugmueoosyka:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto uiqqoqeguqksakak;
                qcssqeugkggmssuq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto smsgocwimiqgewse;
                smsgocwimiqgewse:
                kmawikcwmucoyeio:
                goto qksoacweieioouuu;
                qksoacweieioouuu:
            }
            goto ywymuuggyeqggyqo;
            kuiimqmaogsaoimi:
            mygyyacgawkwoaak:
            goto ueyagkiewoigukeq;
            ueyagkiewoigukeq:
            yiuwqcqesuysmegs:
            goto oeqaomymqmegqway;
            wyouyacqwaoscwco:
            cgummkmwkkyaomqq:
            goto kuiimqmaogsaoimi;
            ywymuuggyeqggyqo:
            mauoymckskucuemc:
            goto wyouyacqwaoscwco;
            oeqaomymqmegqway:
        }
        goto yikcmigmymmyykyy;
        ckocyicqgqesqcyw:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto aeaaqimiugqwsiuo;
        }
        goto oiuwwaimuiuasyak;
        oemswegiqoiyocyi:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\x74\164\162\x69\x62\x75\164\x65\137\x6e\x61\155\145\163");
        goto ckocyicqgqesqcyw;
        yikcmigmymmyykyy:
        iieykwekyukgsias:
        goto uiokqiccsgcmweuw;
        oiuwwaimuiuasyak:
        $product = $this->aqasygcsqysmmyke();
        goto mceqeoceqiqsqyig;
        yogcgegoayymyisi:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\x73\141\x76\x65\x2d\141\x74\164\x72\151\x62\x75\164\x65\163", "\x73\145\143\165\162\151\164\x79")) {
            goto iwcmwyyeuwuogkmy;
        }
        goto gayuuyucaseyequa;
        mceqeoceqiqsqyig:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto yooikokuygygyscy;
        gayuuyucaseyequa:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto oemswegiqoiyocyi;
        ayyowoawokgaayaw:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto osiuigcwawuayisk;
        weoyykiwcagymoms:
        awmmoggkmyueoasu:
        goto koksqyyscgosmgua;
        yyckoawemeecakki:
        if (!$ikgwqyuyckaewsow) {
            goto ocykqucykqysewkc;
        }
        goto qyisaqamyeauiyws;
        cmwgwwgycwmmssak:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto sqsawqgiyogosigw;
        qsoeqiaiaaksgcik:
        wkgqkogygougamck:
        goto iycmcucyyqgqaiwa;
        sqsawqgiyogosigw:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto awmmoggkmyueoasu;
        }
        goto iciwkuugsssieams;
        koksqyyscgosmgua:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto yyckoawemeecakki;
        iciwkuugsssieams:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto weoyykiwcagymoms;
        ckgwkegaqysuugsa:
        ocykqucykqysewkc:
        goto waqycyookeekysyw;
        umkuoiowcowgywug:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ggywskiemyoaeqaw;
            mgmiwyeiyuecmaso:
            yukcaoieiswcmemu:
            goto gaokasygggaaywkq;
            ggywskiemyoaeqaw:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wqmqkiimcwkskqya;
            }
            goto owkkogeoyukumywq;
            swiiegskwgeogcoq:
            wqmqkiimcwkskqya:
            goto mgmiwyeiyuecmaso;
            owkkogeoyukumywq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\x5d")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto swiiegskwgeogcoq;
            gaokasygggaaywkq:
        }
        goto qsoeqiaiaaksgcik;
        osiuigcwawuayisk:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto gwggseoomcggqiim;
        }
        goto iyayoqqcasquscwy;
        qyisaqamyeauiyws:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto umkuoiowcowgywug;
        iyayoqqcasquscwy:
        $product = $this->aqasygcsqysmmyke();
        goto cmwgwwgycwmmssak;
        waqycyookeekysyw:
        gwggseoomcggqiim:
        goto egooqaeyqemyyueq;
        iycmcucyyqgqaiwa:
        echo $this->iuygowkemiiwqmiw("\146\157\x72\155", ["\151\x64" => ManipulateString::uniqid(5), "\164\151\x74\x6c\x65" => __("\x43\x75\163\164\157\x6d\x20\x46\151\145\x6c\x64\163", PR__CMN__FOUNDATION), "\x66\151\145\154\x64\163" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\143\150\x6f" => false]), "\143\x61\x6e\137\x61\x64\144\137\152\163" => ManipulateAjax::mcgoysmkqsqooceq(), "\141\x6c\145\x72\164\137\x6d\145\163\x73\141\x67\x65" => __("\103\x61\156\x20\156\x6f\x74\x20\x72\145\x6e\x64\x65\162\40\146\151\145\154\x64\163\40\143\x6f\x72\x72\x65\x63\164\x6c\171\54\40\x70\x6c\145\x61\163\145\40\x72\145\x66\162\145\x73\x68\40\160\x61\147\145\40\x6d\141\156\165\141\154\x6c\x79\56", PR__CMN__FOUNDATION), "\163\165\143\143\x65\x73\x73\137\155\145\x73\x73\x61\147\x65" => __("\146\151\145\154\144\x73\x20\154\x6f\141\x64\x65\144\x20\143\x6f\x72\162\x65\x63\x74\154\x79\x2e", PR__CMN__FOUNDATION)]);
        goto ckgwkegaqysuugsa;
        egooqaeyqemyyueq:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto mmmaegqwqsqomcso;
        mmmaegqwqsqomcso:
        if (!$ikgwqyuyckaewsow) {
            goto uymqegkssemcqegk;
        }
        goto yakgkywayukuuoeo;
        mwqgcamgeuigkmag:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto egieyaugcwckokym;
            ecooysegquiascci:
            goto beesceygkkecsask;
            goto smgwweikoueukkom;
            swysacsiqeaqkeik:
            awewuysgsucyuiqu:
            goto muiuuoeuoqqqqycq;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto quyumosiyumgeqao;
            siaaikmageayqqsu:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto ameikuoiuqcsucgo;
            }
            goto uckeiuaoqmigcksq;
            cqwcweokuiayeicq:
            $eqgoocgaqwqcimie = false;
            goto siaaikmageayqqsu;
            scuegucswagswcio:
            ameikuoiuqcsucgo:
            goto wiumcqqogqsqyaqo;
            aymooygqycguekai:
            wayyaaaewkgkyayk:
            goto sweakucgmumqsakg;
            goemgwueaswqayue:
            kkcgaqkugmqqeyka:
            goto quecaykkiwwgqoay;
            wiumcqqogqsqyaqo:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto eqcwgomkucsikows;
            }
            goto amyuqgaegykwgcgk;
            oykgoscoqcimcsqg:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto cqwcweokuiayeicq;
            amyuqgaegykwgcgk:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto ecooysegquiascci;
            sweakucgmumqsakg:
            goto awewuysgsucyuiqu;
            goto scuegucswagswcio;
            quyumosiyumgeqao:
            beesceygkkecsask:
            goto swysacsiqeaqkeik;
            smgwweikoueukkom:
            eqcwgomkucsikows:
            goto wekosqocigkegwgq;
            uckeiuaoqmigcksq:
            if (!$product) {
                goto wayyaaaewkgkyayk;
            }
            goto wqwoeeeqwccksawi;
            muiuuoeuoqqqqycq:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto meeeuaakuscgcomc;
            meeeuaakuscgcomc:
            gqiuuyygewuqosqe:
            goto goemgwueaswqayue;
            egieyaugcwckokym:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto gqiuuyygewuqosqe;
            }
            goto oykgoscoqcimcsqg;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto aymooygqycguekai;
            quecaykkiwwgqoay:
        }
        goto psgawyoyqymeaqmg;
        gkiswiyesyseqgyi:
        $product = $this->aqasygcsqysmmyke();
        goto mwqgcamgeuigkmag;
        ikccqyauagueyquo:
        return $ikgwqyuyckaewsow;
        goto wmgwiaksugguumki;
        yakgkywayukuuoeo:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto gkiswiyesyseqgyi;
        psgawyoyqymeaqmg:
        ugckgwumakkmewem:
        goto wwsimimccosesome;
        wwsimimccosesome:
        uymqegkssemcqegk:
        goto ikccqyauagueyquo;
        wmgwiaksugguumki:
    }
}
