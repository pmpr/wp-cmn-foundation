<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        $this->koaegcswmcqsiykq("\167\157\x6f\143\157\155\155\x65\x72\x63\x65\137\163\141\166\145\x5f\141\164\x74\162\x69\x62\165\x74\145\163", [$this, "\x73\x61\x76\145"], 5)->qcsmikeggeemccuu("\x77\157\x6f\x63\157\x6d\155\145\162\x63\145\x5f\x61\x66\164\x65\162\x5f\160\162\157\144\165\143\164\137\x61\164\x74\x72\x69\142\165\164\145\137\163\145\164\x74\x69\x6e\x67\163", [$this, "\151\165\141\165\x63\x75\x6f\157\x6b\x67\157\x71\x69\151\x69\x6f"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto ckocyicqgqesqcyw;
        yikcmigmymmyykyy:
        $product = $this->aqasygcsqysmmyke();
        goto uiokqiccsgcmweuw;
        wkgqkogygougamck:
        oemswegiqoiyocyi:
        goto yukcaoieiswcmemu;
        uiokqiccsgcmweuw:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto eycgkegwmmsgwgsu;
        eycgkegwmmsgwgsu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouyqacmgssaeeyaq;
            wyouyacqwaoscwco:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto agwucmswyeecgiwk;
            }
            goto kuiimqmaogsaoimi;
            iwcmwyyeuwuogkmy:
            wokoooqeguamsuso:
            goto yogcgegoayymyisi;
            ywymuuggyeqggyqo:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wyouyacqwaoscwco;
            aeaaqimiugqwsiuo:
            wocmissqwqoccqgq:
            goto iwcmwyyeuwuogkmy;
            ouyqacmgssaeeyaq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wocmissqwqoccqgq;
            }
            goto auwsmkeaswcqwkiy;
            auwsmkeaswcqwkiy:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ywymuuggyeqggyqo;
            kuiimqmaogsaoimi:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto oieyimeswqquigei;
                smsgocwimiqgewse:
                iggimwweuooskmqi:
                goto qksoacweieioouuu;
                mygyyacgawkwoaak:
                uiqqoqeguqksakak:
                goto mqecqicimeusigcs;
                oieyimeswqquigei:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto sieqieowwakamuei;
                cgummkmwkkyaomqq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto mygyyacgawkwoaak;
                sieqieowwakamuei:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto iggimwweuooskmqi;
                }
                goto qcssqeugkggmssuq;
                qksoacweieioouuu:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto cgummkmwkkyaomqq;
                qcssqeugkggmssuq:
                $eqgoocgaqwqcimie = true;
                goto smsgocwimiqgewse;
                mqecqicimeusigcs:
            }
            goto ueyagkiewoigukeq;
            oeqaomymqmegqway:
            agwucmswyeecgiwk:
            goto aeaaqimiugqwsiuo;
            ueyagkiewoigukeq:
            ykwmsugmueoosyka:
            goto oeqaomymqmegqway;
            yogcgegoayymyisi:
        }
        goto ayyowoawokgaayaw;
        awmmoggkmyueoasu:
        gayuuyucaseyequa:
        goto wkgqkogygougamck;
        oiuwwaimuiuasyak:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto mceqeoceqiqsqyig;
        ckocyicqgqesqcyw:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\141\166\145\55\x61\x74\x74\162\x69\x62\x75\164\145\x73", "\x73\145\x63\165\162\x69\164\171")) {
            goto oemswegiqoiyocyi;
        }
        goto oiuwwaimuiuasyak;
        ayyowoawokgaayaw:
        kmawikcwmucoyeio:
        goto awmmoggkmyueoasu;
        yooikokuygygyscy:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto gayuuyucaseyequa;
        }
        goto yikcmigmymmyykyy;
        mceqeoceqiqsqyig:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\164\x74\162\x69\142\x75\x74\x65\x5f\x6e\x61\x6d\145\x73");
        goto yooikokuygygyscy;
        yukcaoieiswcmemu:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto sqsawqgiyogosigw;
        waqycyookeekysyw:
        ggywskiemyoaeqaw:
        goto egooqaeyqemyyueq;
        egooqaeyqemyyueq:
        echo $this->iuygowkemiiwqmiw("\146\157\162\155", ["\x69\144" => ManipulateString::uniqid(5), "\x74\151\x74\x6c\x65" => __("\103\165\x73\x74\x6f\155\40\106\151\x65\x6c\144\x73", PR__CMN__FOUNDATION), "\x66\151\x65\154\x64\163" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\143\150\157" => false]), "\143\x61\156\137\x61\x64\x64\x5f\x6a\163" => ManipulateAjax::mcgoysmkqsqooceq(), "\x61\154\145\162\164\x5f\155\145\163\163\x61\x67\x65" => __("\103\141\x6e\x20\156\x6f\x74\40\x72\x65\x6e\x64\145\x72\x20\146\151\x65\154\x64\x73\x20\143\157\x72\x72\145\143\x74\154\171\54\40\x70\x6c\145\141\x73\145\40\x72\x65\146\162\145\x73\150\40\x70\141\x67\145\40\155\x61\x6e\165\x61\x6c\x6c\x79\56", PR__CMN__FOUNDATION), "\163\x75\x63\x63\x65\x73\x73\x5f\155\145\x73\163\141\147\x65" => __("\146\x69\x65\x6c\x64\163\x20\154\157\x61\144\x65\x64\x20\x63\157\x72\x72\145\143\164\x6c\171\56", PR__CMN__FOUNDATION)]);
        goto ugckgwumakkmewem;
        iycmcucyyqgqaiwa:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ckgwkegaqysuugsa;
        ckgwkegaqysuugsa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto mgmiwyeiyuecmaso;
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
            gaokasygggaaywkq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\133{$momcykaoccoymeig}\x5d")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto ocykqucykqysewkc;
            osiuigcwawuayisk:
        }
        goto waqycyookeekysyw;
        qyisaqamyeauiyws:
        wqmqkiimcwkskqya:
        goto umkuoiowcowgywug;
        kkcgaqkugmqqeyka:
        cmwgwwgycwmmssak:
        goto eqcwgomkucsikows;
        iciwkuugsssieams:
        $product = $this->aqasygcsqysmmyke();
        goto weoyykiwcagymoms;
        weoyykiwcagymoms:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto koksqyyscgosmgua;
        qsoeqiaiaaksgcik:
        if (!$ikgwqyuyckaewsow) {
            goto iyayoqqcasquscwy;
        }
        goto iycmcucyyqgqaiwa;
        yyckoawemeecakki:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto qyisaqamyeauiyws;
        koksqyyscgosmgua:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wqmqkiimcwkskqya;
        }
        goto yyckoawemeecakki;
        sqsawqgiyogosigw:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto cmwgwwgycwmmssak;
        }
        goto iciwkuugsssieams;
        ugckgwumakkmewem:
        iyayoqqcasquscwy:
        goto kkcgaqkugmqqeyka;
        umkuoiowcowgywug:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto qsoeqiaiaaksgcik;
        eqcwgomkucsikows:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto mwqgcamgeuigkmag;
        wwsimimccosesome:
        $product = $this->aqasygcsqysmmyke();
        goto ikccqyauagueyquo;
        meuauqksicgeyqci:
        return $ikgwqyuyckaewsow;
        goto ycwuaycumimegeaw;
        ikccqyauagueyquo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto siaaikmageayqqsu;
            wiumcqqogqsqyaqo:
            gqiuuyygewuqosqe:
            goto amyuqgaegykwgcgk;
            meeeuaakuscgcomc:
            awewuysgsucyuiqu:
            goto goemgwueaswqayue;
            muiuuoeuoqqqqycq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto meeeuaakuscgcomc;
            smgwweikoueukkom:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto ameikuoiuqcsucgo;
            }
            goto wekosqocigkegwgq;
            scuegucswagswcio:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto wiumcqqogqsqyaqo;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = false;
            goto aymooygqycguekai;
            uckeiuaoqmigcksq:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wqwoeeeqwccksawi;
            mmmaegqwqsqomcso:
            wayyaaaewkgkyayk:
            goto yakgkywayukuuoeo;
            quecaykkiwwgqoay:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto uymqegkssemcqegk;
            ecooysegquiascci:
            egieyaugcwckokym:
            goto smgwweikoueukkom;
            amyuqgaegykwgcgk:
            goto oykgoscoqcimcsqg;
            goto ecooysegquiascci;
            goemgwueaswqayue:
            oykgoscoqcimcsqg:
            goto quecaykkiwwgqoay;
            aymooygqycguekai:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto egieyaugcwckokym;
            }
            goto sweakucgmumqsakg;
            siaaikmageayqqsu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cqwcweokuiayeicq;
            }
            goto uckeiuaoqmigcksq;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto quyumosiyumgeqao;
            uymqegkssemcqegk:
            cqwcweokuiayeicq:
            goto mmmaegqwqsqomcso;
            quyumosiyumgeqao:
            goto awewuysgsucyuiqu;
            goto swysacsiqeaqkeik;
            swysacsiqeaqkeik:
            ameikuoiuqcsucgo:
            goto muiuuoeuoqqqqycq;
            sweakucgmumqsakg:
            if (!$product) {
                goto gqiuuyygewuqosqe;
            }
            goto scuegucswagswcio;
            yakgkywayukuuoeo:
        }
        goto wmgwiaksugguumki;
        wmgwiaksugguumki:
        beesceygkkecsask:
        goto eiwsqkiauqoseceu;
        psgawyoyqymeaqmg:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto wwsimimccosesome;
        eiwsqkiauqoseceu:
        gkiswiyesyseqgyi:
        goto meuauqksicgeyqci;
        mwqgcamgeuigkmag:
        if (!$ikgwqyuyckaewsow) {
            goto gkiswiyesyseqgyi;
        }
        goto psgawyoyqymeaqmg;
        ycwuaycumimegeaw:
    }
}
