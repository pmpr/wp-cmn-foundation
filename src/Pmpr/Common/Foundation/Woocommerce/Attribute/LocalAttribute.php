<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        $this->name = "\154\157\143\141\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\167\x6f\157\143\157\x6d\x6d\145\162\143\x65\x5f\163\x61\166\145\x5f\x61\x74\164\x72\x69\142\x75\x74\145\163", [$this, "\x73\141\x76\x65"], 5)->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\155\x6d\x65\x72\143\145\137\141\146\x74\x65\162\137\x70\x72\x6f\x64\165\143\164\x5f\x61\164\164\162\x69\142\165\164\x65\137\163\x65\x74\x74\x69\x6e\x67\163", [$this, "\151\165\141\165\x63\x75\x6f\157\153\x67\x6f\161\x69\x69\x69\x6f"], 10, 2);
        parent::wigskegsqequoeks();
    }
    
    public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk($ymkomoccmymcoiea->get_name());
    }
    public function save()
    {
        goto ckocyicqgqesqcyw;
        oiuwwaimuiuasyak:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto mceqeoceqiqsqyig;
        eycgkegwmmsgwgsu:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ouyqacmgssaeeyaq;
            kuiimqmaogsaoimi:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto oieyimeswqquigei;
                qksoacweieioouuu:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto cgummkmwkkyaomqq;
                smsgocwimiqgewse:
                iggimwweuooskmqi:
                goto qksoacweieioouuu;
                sieqieowwakamuei:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto iggimwweuooskmqi;
                }
                goto qcssqeugkggmssuq;
                oieyimeswqquigei:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto sieqieowwakamuei;
                cgummkmwkkyaomqq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto mygyyacgawkwoaak;
                qcssqeugkggmssuq:
                $eqgoocgaqwqcimie = true;
                goto smsgocwimiqgewse;
                mygyyacgawkwoaak:
                uiqqoqeguqksakak:
                goto mqecqicimeusigcs;
                mqecqicimeusigcs:
            }
            goto ueyagkiewoigukeq;
            ywymuuggyeqggyqo:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wyouyacqwaoscwco;
            wyouyacqwaoscwco:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto agwucmswyeecgiwk;
            }
            goto kuiimqmaogsaoimi;
            iwcmwyyeuwuogkmy:
            wokoooqeguamsuso:
            goto yogcgegoayymyisi;
            ueyagkiewoigukeq:
            ykwmsugmueoosyka:
            goto oeqaomymqmegqway;
            ouyqacmgssaeeyaq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wocmissqwqoccqgq;
            }
            goto auwsmkeaswcqwkiy;
            aeaaqimiugqwsiuo:
            wocmissqwqoccqgq:
            goto iwcmwyyeuwuogkmy;
            auwsmkeaswcqwkiy:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ywymuuggyeqggyqo;
            oeqaomymqmegqway:
            agwucmswyeecgiwk:
            goto aeaaqimiugqwsiuo;
            yogcgegoayymyisi:
        }
        goto ayyowoawokgaayaw;
        ayyowoawokgaayaw:
        kmawikcwmucoyeio:
        goto awmmoggkmyueoasu;
        mceqeoceqiqsqyig:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\164\164\x72\x69\x62\165\164\145\137\156\141\155\145\163");
        goto yooikokuygygyscy;
        wkgqkogygougamck:
        oemswegiqoiyocyi:
        goto yukcaoieiswcmemu;
        ckocyicqgqesqcyw:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\141\x76\145\x2d\x61\164\164\162\151\x62\x75\164\x65\163", "\163\x65\143\165\162\x69\x74\x79")) {
            goto oemswegiqoiyocyi;
        }
        goto oiuwwaimuiuasyak;
        awmmoggkmyueoasu:
        gayuuyucaseyequa:
        goto wkgqkogygougamck;
        yikcmigmymmyykyy:
        $product = $this->aqasygcsqysmmyke();
        goto uiokqiccsgcmweuw;
        yooikokuygygyscy:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto gayuuyucaseyequa;
        }
        goto yikcmigmymmyykyy;
        uiokqiccsgcmweuw:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto eycgkegwmmsgwgsu;
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
        iycmcucyyqgqaiwa:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ckgwkegaqysuugsa;
        ugckgwumakkmewem:
        iyayoqqcasquscwy:
        goto kkcgaqkugmqqeyka;
        iciwkuugsssieams:
        $product = $this->aqasygcsqysmmyke();
        goto weoyykiwcagymoms;
        kkcgaqkugmqqeyka:
        cmwgwwgycwmmssak:
        goto eqcwgomkucsikows;
        egooqaeyqemyyueq:
        echo $this->iuygowkemiiwqmiw("\x66\x6f\x72\155", ["\151\x64" => ManipulateString::uniqid(5), "\164\151\x74\154\x65" => __("\103\165\x73\x74\x6f\x6d\x20\106\151\x65\x6c\x64\x73", PR__CMN__FOUNDATION), "\146\x69\145\x6c\x64\x73" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\145\x63\x68\x6f" => false]), "\x63\x61\156\137\x61\x64\x64\x5f\152\x73" => ManipulateAjax::mcgoysmkqsqooceq(), "\x61\x6c\145\162\164\x5f\x6d\145\x73\x73\x61\x67\x65" => __("\103\141\x6e\x20\156\x6f\164\40\162\145\x6e\144\145\162\x20\x66\151\x65\154\144\163\40\x63\157\162\162\145\143\164\x6c\171\54\40\160\x6c\145\141\x73\x65\x20\162\x65\x66\162\145\163\150\x20\160\141\147\145\40\155\141\156\x75\x61\x6c\x6c\x79\56", PR__CMN__FOUNDATION), "\x73\165\143\143\145\x73\163\137\155\145\x73\163\141\x67\x65" => __("\146\x69\x65\154\144\163\x20\x6c\157\x61\x64\145\x64\x20\143\157\162\162\x65\143\164\154\x79\56", PR__CMN__FOUNDATION)]);
        goto ugckgwumakkmewem;
        yyckoawemeecakki:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto qyisaqamyeauiyws;
        qyisaqamyeauiyws:
        wqmqkiimcwkskqya:
        goto umkuoiowcowgywug;
        umkuoiowcowgywug:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto qsoeqiaiaaksgcik;
        ckgwkegaqysuugsa:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto mgmiwyeiyuecmaso;
            gwggseoomcggqiim:
            owkkogeoyukumywq:
            goto osiuigcwawuayisk;
            mgmiwyeiyuecmaso:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto swiiegskwgeogcoq;
            }
            goto gaokasygggaaywkq;
            gaokasygggaaywkq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\135")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto ocykqucykqysewkc;
            ocykqucykqysewkc:
            swiiegskwgeogcoq:
            goto gwggseoomcggqiim;
            osiuigcwawuayisk:
        }
        goto waqycyookeekysyw;
        weoyykiwcagymoms:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto koksqyyscgosmgua;
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
        qsoeqiaiaaksgcik:
        if (!$ikgwqyuyckaewsow) {
            goto iyayoqqcasquscwy;
        }
        goto iycmcucyyqgqaiwa;
        eqcwgomkucsikows:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto mwqgcamgeuigkmag;
        ikccqyauagueyquo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto siaaikmageayqqsu;
            amyuqgaegykwgcgk:
            goto oykgoscoqcimcsqg;
            goto ecooysegquiascci;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = false;
            goto aymooygqycguekai;
            muiuuoeuoqqqqycq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto meeeuaakuscgcomc;
            ecooysegquiascci:
            egieyaugcwckokym:
            goto smgwweikoueukkom;
            mmmaegqwqsqomcso:
            wayyaaaewkgkyayk:
            goto yakgkywayukuuoeo;
            quecaykkiwwgqoay:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto uymqegkssemcqegk;
            goemgwueaswqayue:
            oykgoscoqcimcsqg:
            goto quecaykkiwwgqoay;
            quyumosiyumgeqao:
            goto awewuysgsucyuiqu;
            goto swysacsiqeaqkeik;
            siaaikmageayqqsu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cqwcweokuiayeicq;
            }
            goto uckeiuaoqmigcksq;
            scuegucswagswcio:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto wiumcqqogqsqyaqo;
            swysacsiqeaqkeik:
            ameikuoiuqcsucgo:
            goto muiuuoeuoqqqqycq;
            meeeuaakuscgcomc:
            awewuysgsucyuiqu:
            goto goemgwueaswqayue;
            uckeiuaoqmigcksq:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wqwoeeeqwccksawi;
            aymooygqycguekai:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto egieyaugcwckokym;
            }
            goto sweakucgmumqsakg;
            uymqegkssemcqegk:
            cqwcweokuiayeicq:
            goto mmmaegqwqsqomcso;
            smgwweikoueukkom:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto ameikuoiuqcsucgo;
            }
            goto wekosqocigkegwgq;
            wiumcqqogqsqyaqo:
            gqiuuyygewuqosqe:
            goto amyuqgaegykwgcgk;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto quyumosiyumgeqao;
            sweakucgmumqsakg:
            if (!$product) {
                goto gqiuuyygewuqosqe;
            }
            goto scuegucswagswcio;
            yakgkywayukuuoeo:
        }
        goto wmgwiaksugguumki;
        wwsimimccosesome:
        $product = $this->aqasygcsqysmmyke();
        goto ikccqyauagueyquo;
        wmgwiaksugguumki:
        beesceygkkecsask:
        goto eiwsqkiauqoseceu;
        eiwsqkiauqoseceu:
        gkiswiyesyseqgyi:
        goto meuauqksicgeyqci;
        mwqgcamgeuigkmag:
        if (!$ikgwqyuyckaewsow) {
            goto gkiswiyesyseqgyi;
        }
        goto psgawyoyqymeaqmg;
        meuauqksicgeyqci:
        return $ikgwqyuyckaewsow;
        goto ycwuaycumimegeaw;
        psgawyoyqymeaqmg:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto wwsimimccosesome;
        ycwuaycumimegeaw:
    }
}
