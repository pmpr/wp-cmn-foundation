<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        $this->name = "\154\x6f\x63\x61\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\x77\x6f\157\143\157\x6d\155\145\162\143\145\x5f\163\x61\x76\x65\137\141\164\164\162\151\x62\165\164\145\x73", [$this, "\x73\x61\166\x65"], 5)->qcsmikeggeemccuu("\x77\x6f\157\143\157\x6d\x6d\145\x72\x63\x65\137\141\x66\164\x65\162\137\160\162\x6f\144\165\143\x74\137\x61\x74\x74\162\151\x62\165\x74\145\x5f\x73\145\164\164\151\x6e\x67\163", [$this, "\151\165\141\165\143\x75\x6f\x6f\x6b\x67\x6f\161\151\x69\x69\x6f"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto ckocyicqgqesqcyw;
        mceqeoceqiqsqyig:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\x74\x74\x72\x69\142\165\x74\x65\x5f\x6e\x61\155\x65\x73");
        goto yooikokuygygyscy;
        oiuwwaimuiuasyak:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto mceqeoceqiqsqyig;
        yooikokuygygyscy:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto gayuuyucaseyequa;
        }
        goto yikcmigmymmyykyy;
        eycgkegwmmsgwgsu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouyqacmgssaeeyaq;
            kuiimqmaogsaoimi:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto oieyimeswqquigei;
                mygyyacgawkwoaak:
                uiqqoqeguqksakak:
                goto mqecqicimeusigcs;
                qcssqeugkggmssuq:
                $eqgoocgaqwqcimie = true;
                goto smsgocwimiqgewse;
                smsgocwimiqgewse:
                iggimwweuooskmqi:
                goto qksoacweieioouuu;
                qksoacweieioouuu:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto cgummkmwkkyaomqq;
                cgummkmwkkyaomqq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto mygyyacgawkwoaak;
                oieyimeswqquigei:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto sieqieowwakamuei;
                sieqieowwakamuei:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto iggimwweuooskmqi;
                }
                goto qcssqeugkggmssuq;
                mqecqicimeusigcs:
            }
            goto ueyagkiewoigukeq;
            aeaaqimiugqwsiuo:
            wocmissqwqoccqgq:
            goto iwcmwyyeuwuogkmy;
            oeqaomymqmegqway:
            agwucmswyeecgiwk:
            goto aeaaqimiugqwsiuo;
            ouyqacmgssaeeyaq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wocmissqwqoccqgq;
            }
            goto auwsmkeaswcqwkiy;
            wyouyacqwaoscwco:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto agwucmswyeecgiwk;
            }
            goto kuiimqmaogsaoimi;
            ueyagkiewoigukeq:
            ykwmsugmueoosyka:
            goto oeqaomymqmegqway;
            auwsmkeaswcqwkiy:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ywymuuggyeqggyqo;
            ywymuuggyeqggyqo:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wyouyacqwaoscwco;
            iwcmwyyeuwuogkmy:
            wokoooqeguamsuso:
            goto yogcgegoayymyisi;
            yogcgegoayymyisi:
        }
        goto ayyowoawokgaayaw;
        uiokqiccsgcmweuw:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto eycgkegwmmsgwgsu;
        wkgqkogygougamck:
        oemswegiqoiyocyi:
        goto yukcaoieiswcmemu;
        ayyowoawokgaayaw:
        kmawikcwmucoyeio:
        goto awmmoggkmyueoasu;
        ckocyicqgqesqcyw:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\x61\x76\x65\x2d\x61\x74\164\162\151\x62\x75\x74\x65\163", "\x73\x65\143\165\162\151\164\x79")) {
            goto oemswegiqoiyocyi;
        }
        goto oiuwwaimuiuasyak;
        awmmoggkmyueoasu:
        gayuuyucaseyequa:
        goto wkgqkogygougamck;
        yikcmigmymmyykyy:
        $product = $this->aqasygcsqysmmyke();
        goto uiokqiccsgcmweuw;
        yukcaoieiswcmemu:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto sqsawqgiyogosigw;
        qsoeqiaiaaksgcik:
        if (!$ikgwqyuyckaewsow) {
            goto iyayoqqcasquscwy;
        }
        goto iycmcucyyqgqaiwa;
        sqsawqgiyogosigw:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto cmwgwwgycwmmssak;
        }
        goto iciwkuugsssieams;
        qyisaqamyeauiyws:
        wqmqkiimcwkskqya:
        goto umkuoiowcowgywug;
        weoyykiwcagymoms:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto koksqyyscgosmgua;
        ckgwkegaqysuugsa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto mgmiwyeiyuecmaso;
            gaokasygggaaywkq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\133{$momcykaoccoymeig}\x5d")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto ocykqucykqysewkc;
            ocykqucykqysewkc:
            swiiegskwgeogcoq:
            goto gwggseoomcggqiim;
            mgmiwyeiyuecmaso:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto swiiegskwgeogcoq;
            }
            goto gaokasygggaaywkq;
            gwggseoomcggqiim:
            owkkogeoyukumywq:
            goto osiuigcwawuayisk;
            osiuigcwawuayisk:
        }
        goto waqycyookeekysyw;
        kkcgaqkugmqqeyka:
        cmwgwwgycwmmssak:
        goto eqcwgomkucsikows;
        koksqyyscgosmgua:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wqmqkiimcwkskqya;
        }
        goto yyckoawemeecakki;
        ugckgwumakkmewem:
        iyayoqqcasquscwy:
        goto kkcgaqkugmqqeyka;
        egooqaeyqemyyueq:
        echo $this->iuygowkemiiwqmiw("\146\157\x72\155", ["\151\x64" => ManipulateString::uniqid(5), "\164\151\x74\154\145" => __("\x43\165\x73\164\x6f\x6d\x20\106\151\x65\x6c\144\163", PR__CMN__FOUNDATION), "\x66\151\x65\x6c\144\163" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\145\x63\150\157" => false]), "\143\x61\156\x5f\141\144\x64\x5f\x6a\x73" => ManipulateAjax::mcgoysmkqsqooceq(), "\141\154\x65\x72\164\x5f\x6d\145\163\163\141\147\x65" => __("\103\x61\x6e\40\156\157\x74\40\162\145\156\x64\x65\162\x20\146\x69\x65\x6c\144\x73\40\x63\x6f\x72\x72\x65\x63\164\x6c\171\54\40\160\x6c\x65\x61\163\x65\x20\162\145\146\162\x65\x73\150\40\x70\141\x67\145\x20\x6d\x61\x6e\x75\141\154\x6c\171\x2e", PR__CMN__FOUNDATION), "\x73\x75\143\143\145\163\163\137\155\x65\x73\163\141\147\x65" => __("\x66\151\x65\154\x64\163\x20\x6c\x6f\141\144\x65\x64\x20\143\157\x72\162\145\x63\x74\154\x79\56", PR__CMN__FOUNDATION)]);
        goto ugckgwumakkmewem;
        iycmcucyyqgqaiwa:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ckgwkegaqysuugsa;
        yyckoawemeecakki:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto qyisaqamyeauiyws;
        iciwkuugsssieams:
        $product = $this->aqasygcsqysmmyke();
        goto weoyykiwcagymoms;
        waqycyookeekysyw:
        ggywskiemyoaeqaw:
        goto egooqaeyqemyyueq;
        umkuoiowcowgywug:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto qsoeqiaiaaksgcik;
        eqcwgomkucsikows:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto mwqgcamgeuigkmag;
        ikccqyauagueyquo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto siaaikmageayqqsu;
            smgwweikoueukkom:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto ameikuoiuqcsucgo;
            }
            goto wekosqocigkegwgq;
            quecaykkiwwgqoay:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto uymqegkssemcqegk;
            sweakucgmumqsakg:
            if (!$product) {
                goto gqiuuyygewuqosqe;
            }
            goto scuegucswagswcio;
            aymooygqycguekai:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto egieyaugcwckokym;
            }
            goto sweakucgmumqsakg;
            amyuqgaegykwgcgk:
            goto oykgoscoqcimcsqg;
            goto ecooysegquiascci;
            uckeiuaoqmigcksq:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wqwoeeeqwccksawi;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = false;
            goto aymooygqycguekai;
            siaaikmageayqqsu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cqwcweokuiayeicq;
            }
            goto uckeiuaoqmigcksq;
            muiuuoeuoqqqqycq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto meeeuaakuscgcomc;
            uymqegkssemcqegk:
            cqwcweokuiayeicq:
            goto mmmaegqwqsqomcso;
            ecooysegquiascci:
            egieyaugcwckokym:
            goto smgwweikoueukkom;
            wiumcqqogqsqyaqo:
            gqiuuyygewuqosqe:
            goto amyuqgaegykwgcgk;
            goemgwueaswqayue:
            oykgoscoqcimcsqg:
            goto quecaykkiwwgqoay;
            scuegucswagswcio:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto wiumcqqogqsqyaqo;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto quyumosiyumgeqao;
            meeeuaakuscgcomc:
            awewuysgsucyuiqu:
            goto goemgwueaswqayue;
            mmmaegqwqsqomcso:
            wayyaaaewkgkyayk:
            goto yakgkywayukuuoeo;
            swysacsiqeaqkeik:
            ameikuoiuqcsucgo:
            goto muiuuoeuoqqqqycq;
            quyumosiyumgeqao:
            goto awewuysgsucyuiqu;
            goto swysacsiqeaqkeik;
            yakgkywayukuuoeo:
        }
        goto wmgwiaksugguumki;
        wmgwiaksugguumki:
        beesceygkkecsask:
        goto eiwsqkiauqoseceu;
        psgawyoyqymeaqmg:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto wwsimimccosesome;
        meuauqksicgeyqci:
        return $ikgwqyuyckaewsow;
        goto ycwuaycumimegeaw;
        eiwsqkiauqoseceu:
        gkiswiyesyseqgyi:
        goto meuauqksicgeyqci;
        wwsimimccosesome:
        $product = $this->aqasygcsqysmmyke();
        goto ikccqyauagueyquo;
        mwqgcamgeuigkmag:
        if (!$ikgwqyuyckaewsow) {
            goto gkiswiyesyseqgyi;
        }
        goto psgawyoyqymeaqmg;
        ycwuaycumimegeaw:
    }
}
