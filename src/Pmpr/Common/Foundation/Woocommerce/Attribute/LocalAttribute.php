<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        $this->name = "\x6c\157\143\141\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\167\157\x6f\143\157\x6d\155\x65\162\x63\145\137\x73\141\166\x65\137\x61\164\164\162\x69\142\x75\x74\145\163", [$this, "\x73\x61\x76\145"], 5)->qcsmikeggeemccuu("\x77\157\x6f\143\x6f\x6d\x6d\x65\162\143\145\x5f\141\x66\x74\145\x72\x5f\x70\162\x6f\144\x75\x63\164\x5f\x61\164\164\x72\x69\x62\x75\164\145\x5f\163\x65\164\x74\151\156\147\163", [$this, "\x69\165\x61\165\143\165\x6f\157\x6b\147\x6f\161\151\151\151\157"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto ckocyicqgqesqcyw;
        eycgkegwmmsgwgsu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouyqacmgssaeeyaq;
            kuiimqmaogsaoimi:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto oieyimeswqquigei;
                sieqieowwakamuei:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto iggimwweuooskmqi;
                }
                goto qcssqeugkggmssuq;
                oieyimeswqquigei:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto sieqieowwakamuei;
                smsgocwimiqgewse:
                iggimwweuooskmqi:
                goto qksoacweieioouuu;
                mygyyacgawkwoaak:
                uiqqoqeguqksakak:
                goto mqecqicimeusigcs;
                qksoacweieioouuu:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto cgummkmwkkyaomqq;
                cgummkmwkkyaomqq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto mygyyacgawkwoaak;
                qcssqeugkggmssuq:
                $eqgoocgaqwqcimie = true;
                goto smsgocwimiqgewse;
                mqecqicimeusigcs:
            }
            goto ueyagkiewoigukeq;
            ueyagkiewoigukeq:
            ykwmsugmueoosyka:
            goto oeqaomymqmegqway;
            wyouyacqwaoscwco:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto agwucmswyeecgiwk;
            }
            goto kuiimqmaogsaoimi;
            auwsmkeaswcqwkiy:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ywymuuggyeqggyqo;
            oeqaomymqmegqway:
            agwucmswyeecgiwk:
            goto aeaaqimiugqwsiuo;
            ywymuuggyeqggyqo:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wyouyacqwaoscwco;
            iwcmwyyeuwuogkmy:
            wokoooqeguamsuso:
            goto yogcgegoayymyisi;
            aeaaqimiugqwsiuo:
            wocmissqwqoccqgq:
            goto iwcmwyyeuwuogkmy;
            ouyqacmgssaeeyaq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wocmissqwqoccqgq;
            }
            goto auwsmkeaswcqwkiy;
            yogcgegoayymyisi:
        }
        goto ayyowoawokgaayaw;
        ckocyicqgqesqcyw:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\x61\166\x65\x2d\x61\x74\x74\162\x69\142\165\x74\x65\x73", "\163\145\x63\x75\x72\151\164\171")) {
            goto oemswegiqoiyocyi;
        }
        goto oiuwwaimuiuasyak;
        oiuwwaimuiuasyak:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto mceqeoceqiqsqyig;
        wkgqkogygougamck:
        oemswegiqoiyocyi:
        goto yukcaoieiswcmemu;
        yooikokuygygyscy:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto gayuuyucaseyequa;
        }
        goto yikcmigmymmyykyy;
        yikcmigmymmyykyy:
        $product = $this->aqasygcsqysmmyke();
        goto uiokqiccsgcmweuw;
        awmmoggkmyueoasu:
        gayuuyucaseyequa:
        goto wkgqkogygougamck;
        uiokqiccsgcmweuw:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto eycgkegwmmsgwgsu;
        mceqeoceqiqsqyig:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\x61\164\x74\162\x69\142\x75\x74\145\137\156\x61\x6d\x65\x73");
        goto yooikokuygygyscy;
        ayyowoawokgaayaw:
        kmawikcwmucoyeio:
        goto awmmoggkmyueoasu;
        yukcaoieiswcmemu:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto sqsawqgiyogosigw;
        kkcgaqkugmqqeyka:
        cmwgwwgycwmmssak:
        goto eqcwgomkucsikows;
        yyckoawemeecakki:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto qyisaqamyeauiyws;
        ugckgwumakkmewem:
        iyayoqqcasquscwy:
        goto kkcgaqkugmqqeyka;
        ckgwkegaqysuugsa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto mgmiwyeiyuecmaso;
            gaokasygggaaywkq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\133{$momcykaoccoymeig}\135")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto ocykqucykqysewkc;
            ocykqucykqysewkc:
            swiiegskwgeogcoq:
            goto gwggseoomcggqiim;
            gwggseoomcggqiim:
            owkkogeoyukumywq:
            goto osiuigcwawuayisk;
            mgmiwyeiyuecmaso:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto swiiegskwgeogcoq;
            }
            goto gaokasygggaaywkq;
            osiuigcwawuayisk:
        }
        goto waqycyookeekysyw;
        umkuoiowcowgywug:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto qsoeqiaiaaksgcik;
        iycmcucyyqgqaiwa:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ckgwkegaqysuugsa;
        egooqaeyqemyyueq:
        echo $this->iuygowkemiiwqmiw("\146\157\162\x6d", ["\x69\144" => ManipulateString::uniqid(5), "\x74\x69\x74\x6c\x65" => __("\103\165\x73\x74\x6f\155\x20\106\151\x65\154\144\x73", PR__CMN__FOUNDATION), "\x66\151\145\154\x64\x73" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\x65\143\x68\x6f" => false]), "\x63\141\156\x5f\141\x64\144\137\x6a\x73" => ManipulateAjax::mcgoysmkqsqooceq(), "\x61\154\x65\x72\x74\137\x6d\x65\x73\163\x61\147\145" => __("\103\141\156\x20\x6e\x6f\164\x20\x72\145\x6e\x64\145\x72\x20\x66\x69\x65\154\144\163\40\143\157\x72\x72\145\143\164\x6c\x79\54\x20\x70\x6c\x65\x61\x73\x65\x20\162\x65\146\162\145\x73\150\40\160\x61\147\x65\x20\155\141\x6e\165\141\154\x6c\171\x2e", PR__CMN__FOUNDATION), "\163\165\x63\143\145\163\x73\137\x6d\145\x73\163\141\147\x65" => __("\x66\x69\x65\154\144\163\x20\154\157\141\144\x65\144\40\x63\157\162\162\145\x63\x74\154\x79\x2e", PR__CMN__FOUNDATION)]);
        goto ugckgwumakkmewem;
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
        iciwkuugsssieams:
        $product = $this->aqasygcsqysmmyke();
        goto weoyykiwcagymoms;
        qyisaqamyeauiyws:
        wqmqkiimcwkskqya:
        goto umkuoiowcowgywug;
        koksqyyscgosmgua:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wqmqkiimcwkskqya;
        }
        goto yyckoawemeecakki;
        waqycyookeekysyw:
        ggywskiemyoaeqaw:
        goto egooqaeyqemyyueq;
        weoyykiwcagymoms:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto koksqyyscgosmgua;
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
        mwqgcamgeuigkmag:
        if (!$ikgwqyuyckaewsow) {
            goto gkiswiyesyseqgyi;
        }
        goto psgawyoyqymeaqmg;
        eiwsqkiauqoseceu:
        gkiswiyesyseqgyi:
        goto meuauqksicgeyqci;
        psgawyoyqymeaqmg:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto wwsimimccosesome;
        ikccqyauagueyquo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto siaaikmageayqqsu;
            meeeuaakuscgcomc:
            awewuysgsucyuiqu:
            goto goemgwueaswqayue;
            wiumcqqogqsqyaqo:
            gqiuuyygewuqosqe:
            goto amyuqgaegykwgcgk;
            quecaykkiwwgqoay:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto uymqegkssemcqegk;
            uymqegkssemcqegk:
            cqwcweokuiayeicq:
            goto mmmaegqwqsqomcso;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto quyumosiyumgeqao;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = false;
            goto aymooygqycguekai;
            sweakucgmumqsakg:
            if (!$product) {
                goto gqiuuyygewuqosqe;
            }
            goto scuegucswagswcio;
            swysacsiqeaqkeik:
            ameikuoiuqcsucgo:
            goto muiuuoeuoqqqqycq;
            muiuuoeuoqqqqycq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto meeeuaakuscgcomc;
            aymooygqycguekai:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto egieyaugcwckokym;
            }
            goto sweakucgmumqsakg;
            mmmaegqwqsqomcso:
            wayyaaaewkgkyayk:
            goto yakgkywayukuuoeo;
            smgwweikoueukkom:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto ameikuoiuqcsucgo;
            }
            goto wekosqocigkegwgq;
            ecooysegquiascci:
            egieyaugcwckokym:
            goto smgwweikoueukkom;
            quyumosiyumgeqao:
            goto awewuysgsucyuiqu;
            goto swysacsiqeaqkeik;
            uckeiuaoqmigcksq:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wqwoeeeqwccksawi;
            scuegucswagswcio:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto wiumcqqogqsqyaqo;
            amyuqgaegykwgcgk:
            goto oykgoscoqcimcsqg;
            goto ecooysegquiascci;
            siaaikmageayqqsu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cqwcweokuiayeicq;
            }
            goto uckeiuaoqmigcksq;
            goemgwueaswqayue:
            oykgoscoqcimcsqg:
            goto quecaykkiwwgqoay;
            yakgkywayukuuoeo:
        }
        goto wmgwiaksugguumki;
        wmgwiaksugguumki:
        beesceygkkecsask:
        goto eiwsqkiauqoseceu;
        ycwuaycumimegeaw:
    }
}
