<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        $this->name = "\154\x6f\143\x61\x6c";
        parent::__construct();
    }
    public function wigskegsqequoeks()
    {
        $this->koaegcswmcqsiykq("\x77\157\157\x63\x6f\x6d\x6d\145\162\x63\145\137\x73\x61\166\145\x5f\141\x74\164\x72\x69\x62\165\x74\145\x73", [$this, "\x73\141\166\x65"], 5)->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\x6d\x65\x72\143\145\x5f\x61\146\164\145\x72\x5f\160\162\x6f\x64\165\x63\x74\137\141\164\164\x72\151\142\165\x74\x65\x5f\x73\145\164\164\x69\156\147\x73", [$this, "\151\165\x61\165\143\165\x6f\x6f\153\147\x6f\161\x69\151\151\x6f"], 10, 2);
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
            oeqaomymqmegqway:
            agwucmswyeecgiwk:
            goto aeaaqimiugqwsiuo;
            iwcmwyyeuwuogkmy:
            wokoooqeguamsuso:
            goto yogcgegoayymyisi;
            auwsmkeaswcqwkiy:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ywymuuggyeqggyqo;
            ueyagkiewoigukeq:
            ykwmsugmueoosyka:
            goto oeqaomymqmegqway;
            kuiimqmaogsaoimi:
            foreach ($qqswgiawgeaeoecu as $momcykaoccoymeig => $eqgoocgaqwqcimie) {
                goto oieyimeswqquigei;
                sieqieowwakamuei:
                if (!$aiowsaccomcoikus instanceof Checkbox) {
                    goto iggimwweuooskmqi;
                }
                goto qcssqeugkggmssuq;
                mygyyacgawkwoaak:
                uiqqoqeguqksakak:
                goto mqecqicimeusigcs;
                oieyimeswqquigei:
                $ymqmyyeuycgmigyo = ManipulateArray::get($aiwgcyaewwagisoo, $momcykaoccoymeig);
                goto sieqieowwakamuei;
                cgummkmwkkyaomqq:
                ManipulatePost::ksmqawcowkmegigw($aokagokqyuysuksm . $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie, $product);
                goto mygyyacgawkwoaak;
                qksoacweieioouuu:
                $ymqmyyeuycgmigyo = DecoratorWoocommerce::scemgqiggsykoisk($ymqmyyeuycgmigyo);
                goto cgummkmwkkyaomqq;
                smsgocwimiqgewse:
                iggimwweuooskmqi:
                goto qksoacweieioouuu;
                qcssqeugkggmssuq:
                $eqgoocgaqwqcimie = true;
                goto smsgocwimiqgewse;
                mqecqicimeusigcs:
            }
            goto ueyagkiewoigukeq;
            ouyqacmgssaeeyaq:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wocmissqwqoccqgq;
            }
            goto auwsmkeaswcqwkiy;
            aeaaqimiugqwsiuo:
            wocmissqwqoccqgq:
            goto iwcmwyyeuwuogkmy;
            ywymuuggyeqggyqo:
            $qqswgiawgeaeoecu = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm, []);
            goto wyouyacqwaoscwco;
            wyouyacqwaoscwco:
            if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) {
                goto agwucmswyeecgiwk;
            }
            goto kuiimqmaogsaoimi;
            yogcgegoayymyisi:
        }
        goto ayyowoawokgaayaw;
        wkgqkogygougamck:
        oemswegiqoiyocyi:
        goto yukcaoieiswcmemu;
        oiuwwaimuiuasyak:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto mceqeoceqiqsqyig;
        yikcmigmymmyykyy:
        $product = $this->aqasygcsqysmmyke();
        goto uiokqiccsgcmweuw;
        awmmoggkmyueoasu:
        gayuuyucaseyequa:
        goto wkgqkogygougamck;
        uiokqiccsgcmweuw:
        $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto eycgkegwmmsgwgsu;
        ckocyicqgqesqcyw:
        if (!ManipulateAjax::wqsmsuyggkkyyocc("\163\141\x76\145\x2d\x61\164\164\162\x69\142\x75\x74\145\x73", "\x73\145\x63\165\162\x69\164\171")) {
            goto oemswegiqoiyocyi;
        }
        goto oiuwwaimuiuasyak;
        ayyowoawokgaayaw:
        kmawikcwmucoyeio:
        goto awmmoggkmyueoasu;
        mceqeoceqiqsqyig:
        $aiwgcyaewwagisoo = ManipulateArray::get($icwicymcioeyeyek, "\141\x74\164\x72\151\142\165\x74\145\x5f\156\141\x6d\x65\x73");
        goto yooikokuygygyscy;
        yooikokuygygyscy:
        if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) {
            goto gayuuyucaseyequa;
        }
        goto yikcmigmymmyykyy;
        yukcaoieiswcmemu:
    }
    
    public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea)
    {
        return ManipulatePost::igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true);
    }
    
    public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig)
    {
        goto sqsawqgiyogosigw;
        iycmcucyyqgqaiwa:
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ckgwkegaqysuugsa;
        qyisaqamyeauiyws:
        wqmqkiimcwkskqya:
        goto umkuoiowcowgywug;
        ugckgwumakkmewem:
        iyayoqqcasquscwy:
        goto kkcgaqkugmqqeyka;
        sqsawqgiyogosigw:
        if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) {
            goto cmwgwwgycwmmssak;
        }
        goto iciwkuugsssieams;
        umkuoiowcowgywug:
        $ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig);
        goto qsoeqiaiaaksgcik;
        qsoeqiaiaaksgcik:
        if (!$ikgwqyuyckaewsow) {
            goto iyayoqqcasquscwy;
        }
        goto iycmcucyyqgqaiwa;
        waqycyookeekysyw:
        ggywskiemyoaeqaw:
        goto egooqaeyqemyyueq;
        weoyykiwcagymoms:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product);
        goto koksqyyscgosmgua;
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
            ocykqucykqysewkc:
            swiiegskwgeogcoq:
            goto gwggseoomcggqiim;
            gaokasygggaaywkq:
            $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\133{$momcykaoccoymeig}\x5d")->oiwawawcmigageco(4)->yoimakcqmoqokkcu();
            goto ocykqucykqysewkc;
            osiuigcwawuayisk:
        }
        goto waqycyookeekysyw;
        koksqyyscgosmgua:
        if ($ymkomoccmymcoiea->is_taxonomy()) {
            goto wqmqkiimcwkskqya;
        }
        goto yyckoawemeecakki;
        yyckoawemeecakki:
        $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product));
        goto qyisaqamyeauiyws;
        egooqaeyqemyyueq:
        echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d", ["\151\144" => ManipulateString::uniqid(5), "\164\x69\x74\x6c\145" => __("\103\165\163\164\x6f\x6d\x20\x46\x69\x65\x6c\x64\x73", PR__CMN__FOUNDATION), "\x66\x69\145\x6c\144\x73" => MetaBox::iuaucuookgoqiiio($ikgwqyuyckaewsow, ["\145\x63\x68\157" => false]), "\x63\141\x6e\x5f\141\144\144\137\152\x73" => ManipulateAjax::mcgoysmkqsqooceq(), "\141\154\145\x72\164\x5f\x6d\145\x73\x73\141\147\x65" => __("\103\x61\x6e\x20\156\157\164\40\162\x65\156\144\x65\162\x20\x66\151\145\154\x64\x73\x20\143\x6f\162\x72\145\x63\164\x6c\171\x2c\40\x70\x6c\x65\x61\x73\145\40\x72\x65\x66\162\145\x73\x68\40\160\141\147\x65\40\155\141\x6e\x75\x61\154\x6c\171\x2e", PR__CMN__FOUNDATION), "\163\x75\143\x63\145\163\x73\137\155\x65\x73\163\x61\147\145" => __("\146\x69\145\x6c\144\163\x20\154\157\141\x64\x65\144\40\143\157\x72\x72\x65\143\x74\154\x79\x2e", PR__CMN__FOUNDATION)]);
        goto ugckgwumakkmewem;
        kkcgaqkugmqqeyka:
        cmwgwwgycwmmssak:
        goto eqcwgomkucsikows;
        iciwkuugsssieams:
        $product = $this->aqasygcsqysmmyke();
        goto weoyykiwcagymoms;
        eqcwgomkucsikows:
    }
    
    public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array
    {
        goto mwqgcamgeuigkmag;
        eiwsqkiauqoseceu:
        gkiswiyesyseqgyi:
        goto meuauqksicgeyqci;
        mwqgcamgeuigkmag:
        if (!$ikgwqyuyckaewsow) {
            goto gkiswiyesyseqgyi;
        }
        goto psgawyoyqymeaqmg;
        wwsimimccosesome:
        $product = $this->aqasygcsqysmmyke();
        goto ikccqyauagueyquo;
        psgawyoyqymeaqmg:
        parse_str(ManipulateServer::ayueggmoqeeukqmq(self::DATA), $icwicymcioeyeyek);
        goto wwsimimccosesome;
        meuauqksicgeyqci:
        return $ikgwqyuyckaewsow;
        goto ycwuaycumimegeaw;
        ikccqyauagueyquo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto siaaikmageayqqsu;
            uckeiuaoqmigcksq:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto wqwoeeeqwccksawi;
            mmmaegqwqsqomcso:
            wayyaaaewkgkyayk:
            goto yakgkywayukuuoeo;
            amyuqgaegykwgcgk:
            goto oykgoscoqcimcsqg;
            goto ecooysegquiascci;
            wekosqocigkegwgq:
            $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]);
            goto quyumosiyumgeqao;
            quyumosiyumgeqao:
            goto awewuysgsucyuiqu;
            goto swysacsiqeaqkeik;
            wiumcqqogqsqyaqo:
            gqiuuyygewuqosqe:
            goto amyuqgaegykwgcgk;
            swysacsiqeaqkeik:
            ameikuoiuqcsucgo:
            goto muiuuoeuoqqqqycq;
            ecooysegquiascci:
            egieyaugcwckokym:
            goto smgwweikoueukkom;
            quecaykkiwwgqoay:
            $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie);
            goto uymqegkssemcqegk;
            siaaikmageayqqsu:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto cqwcweokuiayeicq;
            }
            goto uckeiuaoqmigcksq;
            uymqegkssemcqegk:
            cqwcweokuiayeicq:
            goto mmmaegqwqsqomcso;
            sweakucgmumqsakg:
            if (!$product) {
                goto gqiuuyygewuqosqe;
            }
            goto scuegucswagswcio;
            muiuuoeuoqqqqycq:
            $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]);
            goto meeeuaakuscgcomc;
            meeeuaakuscgcomc:
            awewuysgsucyuiqu:
            goto goemgwueaswqayue;
            smgwweikoueukkom:
            if ($aiowsaccomcoikus instanceof Checkbox) {
                goto ameikuoiuqcsucgo;
            }
            goto wekosqocigkegwgq;
            wqwoeeeqwccksawi:
            $eqgoocgaqwqcimie = false;
            goto aymooygqycguekai;
            goemgwueaswqayue:
            oykgoscoqcimcsqg:
            goto quecaykkiwwgqoay;
            scuegucswagswcio:
            $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo);
            goto wiumcqqogqsqyaqo;
            aymooygqycguekai:
            if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) {
                goto egieyaugcwckokym;
            }
            goto sweakucgmumqsakg;
            yakgkywayukuuoeo:
        }
        goto wmgwiaksugguumki;
        wmgwiaksugguumki:
        beesceygkkecsask:
        goto eiwsqkiauqoseceu;
        ycwuaycumimegeaw:
    }
}
