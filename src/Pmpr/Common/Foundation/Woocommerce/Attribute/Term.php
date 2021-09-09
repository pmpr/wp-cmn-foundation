<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce;
use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class Term extends Common
{
    const SHOW_ON_LIST = "\163\150\x6f\167\x2d\x6f\x6e\55\154\151\x73\164";
    
    protected array $fields = [];
    
    protected $taxonomy = null;
    
    public function ugmceccgwaaaigiy() : array
    {
        return $this->fields;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function yyoeeseewqmmyaee()
    {
        return $this->taxonomy;
    }
    
    public function __construct($kesssewsiegssiya)
    {
        goto yooikokuygygyscy;
        uiokqiccsgcmweuw:
        $this->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms("\144\141\164\145\x5f\x74\x79\160\145", __("\x44\141\x74\x65\40\124\171\x70\145", PR__CMN__FOUNDATION), [self::SECOND => __("\x53\145\x63\x6f\x6e\144\x73", PR__CMN__FOUNDATION), self::MINUTE => __("\115\x69\x6e\x75\x74\x65\163", PR__CMN__FOUNDATION), self::HOUR => __("\x4d\151\x6e\165\164\x65\163", PR__CMN__FOUNDATION), self::DAY => __("\x44\141\171\x73", PR__CMN__FOUNDATION), self::WEEK => __("\x57\x65\145\x6b\163", PR__CMN__FOUNDATION), self::MONTH => __("\x4d\x6f\x6e\164\x68\163", PR__CMN__FOUNDATION), self::YEAR => __("\x59\145\141\162\x73", PR__CMN__FOUNDATION)])->qigsyyqgewgskemg(Term::SHOW_ON_LIST));
        goto eycgkegwmmsgwgsu;
        yukcaoieiswcmemu:
        parent::__construct();
        goto wqmqkiimcwkskqya;
        eycgkegwmmsgwgsu:
        mceqeoceqiqsqyig:
        goto ayyowoawokgaayaw;
        yikcmigmymmyykyy:
        if (!(ManipulateArray::get($kesssewsiegssiya, "\x76\141\154\165\x65\x5f\164\x79\x70\x65") === self::DATE)) {
            goto mceqeoceqiqsqyig;
        }
        goto uiokqiccsgcmweuw;
        ayyowoawokgaayaw:
        $this->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::VALUE, __("\126\141\154\165\x65", PR__CMN__FOUNDATION))->escqqisecooswqgo(0)->qigsyyqgewgskemg(Term::SHOW_ON_LIST)->ccmwycqioaicegoc(__("\111\x66\x20\x61\164\x74\162\x69\142\x75\164\x65\40\151\x73\x20\141\x20\156\x75\155\x62\x65\x72\40\146\x69\145\154\144\x2c\40\x66\x69\x6c\154\x20\164\150\x69\163\40\x66\x69\x65\x6c\144\40\x74\x6f\157\56", PR__CMN__FOUNDATION)));
        goto awmmoggkmyueoasu;
        wkgqkogygougamck:
        $this->fields = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\x63\x6f\x6d\x6d\145\162\143\x65\x5f\160\x72\157\144\x75\143\164\x5f\x74\141\x78\x6f\x6e\x6f\x6d\x79\x5f{$this->kuaoscooeuayycye()}\137\143\165\x73\x74\157\x6d\137\x66\x69\x65\154\x64\x73"), $ikgwqyuyckaewsow);
        goto yukcaoieiswcmemu;
        awmmoggkmyueoasu:
        $ikgwqyuyckaewsow = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\167\157\157\143\157\155\155\x65\162\x63\145\137\160\162\157\x64\165\143\x74\x5f\x74\141\x78\157\156\x6f\x6d\x79\137\x63\165\163\x74\157\155\137\146\x69\x65\x6c\144\x73"), $this->ugmceccgwaaaigiy());
        goto wkgqkogygougamck;
        yooikokuygygyscy:
        $this->taxonomy = $kesssewsiegssiya;
        goto yikcmigmymmyykyy;
        wqmqkiimcwkskqya:
    }
    public function wigskegsqequoeks()
    {
        goto ggywskiemyoaeqaw;
        ggywskiemyoaeqaw:
        $ymqmyyeuycgmigyo = $this->kuaoscooeuayycye();
        goto owkkogeoyukumywq;
        owkkogeoyukumywq:
        $this->qcsmikeggeemccuu("\x65\x64\x69\x74\137\164\145\x72\x6d", [$this, "\157\145\167\x79\x77\x61\x6d\x6f\x71\145\151\x69\x67\x61\x67\163"], 10, 3)->qcsmikeggeemccuu("\x63\x72\145\x61\x74\145\x64\137\164\145\x72\155", [$this, "\x6f\145\167\171\167\x61\x6d\x6f\161\x65\x69\x69\x67\x61\147\x73"], 10, 3)->qcsmikeggeemccuu("\x64\x65\154\145\x74\x65\137\164\x65\162\155", [$this, "\163\x6d\147\x79\143\141\x73\x61\161\155\x67\143\141\145\153\x71"], 5, 3)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\x64\x64\x5f\146\x6f\x72\155\137\146\x69\145\154\144\163", [$this, "\x61\144\x64"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\144\x69\x74\137\x66\x6f\162\x6d\x5f\x66\151\x65\154\x64\x73", [$this, "\x77\167\x67\145\x61\145\x71\x67\x61\x63\x67\x77\157\x6f\x71\151"])->qcsmikeggeemccuu("\155\141\x6e\141\x67\x65\137{$ymqmyyeuycgmigyo}\137\x63\165\163\x74\x6f\155\x5f\143\157\154\165\155\156", [$this, "\165\157\x61\x6f\165\145\163\167\167\167\155\x69\x77\x77\161\x73"], 10, 3);
        goto swiiegskwgeogcoq;
        swiiegskwgeogcoq:
        parent::wigskegsqequoeks();
        goto mgmiwyeiyuecmaso;
        mgmiwyeiyuecmaso:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse("\x6d\141\156\141\147\x65\x5f\x65\144\151\164\x2d{$this->kuaoscooeuayycye()}\137\143\157\154\x75\155\156\x73", [$this, "\x65\147\x67\x65\143\x75\x75\x77\171\x6b\x61\x61\x77\157\x71\x77"]);
        parent::kgquecmsgcouyaya();
    }
    public function add()
    {
        $this->iuaucuookgoqiiio();
    }
    
    public function wwgeaeqgacgwooqi($iwewcwusemqaiggk)
    {
        $this->iuaucuookgoqiiio($iwewcwusemqaiggk);
    }
    
    public function kuaoscooeuayycye() : string
    {
        return DecoratorWoocommerce::scemgqiggsykoisk(ManipulateArray::get($this->yyoeeseewqmmyaee(), "\x61\x74\x74\162\x69\142\165\164\x65\137\156\x61\x6d\145"));
    }
    
    public function eggecuuwykaawoqw($wkkweuacukumqmya)
    {
        goto weoyykiwcagymoms;
        weoyykiwcagymoms:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto osiuigcwawuayisk;
            iyayoqqcasquscwy:
            $wkkweuacukumqmya[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus->aakmagwggmkoiiyu();
            goto cmwgwwgycwmmssak;
            sqsawqgiyogosigw:
            ocykqucykqysewkc:
            goto iciwkuugsssieams;
            cmwgwwgycwmmssak:
            gwggseoomcggqiim:
            goto sqsawqgiyogosigw;
            osiuigcwawuayisk:
            if (!$aiowsaccomcoikus->aeiayqcuemyeackg(self::SHOW_ON_LIST)) {
                goto gwggseoomcggqiim;
            }
            goto iyayoqqcasquscwy;
            iciwkuugsssieams:
        }
        goto koksqyyscgosmgua;
        koksqyyscgosmgua:
        gaokasygggaaywkq:
        goto yyckoawemeecakki;
        yyckoawemeecakki:
        return $wkkweuacukumqmya;
        goto qyisaqamyeauiyws;
        qyisaqamyeauiyws:
    }
    
    public function iuaucuookgoqiiio($iwewcwusemqaiggk = false)
    {
        goto awewuysgsucyuiqu;
        egieyaugcwckokym:
        umkuoiowcowgywug:
        goto oykgoscoqcimcsqg;
        gqiuuyygewuqosqe:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto waqycyookeekysyw;
            waqycyookeekysyw:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto ckgwkegaqysuugsa;
            }
            goto egooqaeyqemyyueq;
            wayyaaaewkgkyayk:
            qsoeqiaiaaksgcik:
            goto ameikuoiuqcsucgo;
            beesceygkkecsask:
            ckgwkegaqysuugsa:
            goto wayyaaaewkgkyayk;
            eqcwgomkucsikows:
            echo ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            goto beesceygkkecsask;
            ugckgwumakkmewem:
            $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($iwewcwusemqaiggk, $aiowsaccomcoikus->mwikyscisascoeea()));
            goto kkcgaqkugmqqeyka;
            egooqaeyqemyyueq:
            if (!$iwewcwusemqaiggk) {
                goto iycmcucyyqgqaiwa;
            }
            goto ugckgwumakkmewem;
            kkcgaqkugmqqeyka:
            iycmcucyyqgqaiwa:
            goto eqcwgomkucsikows;
            ameikuoiuqcsucgo:
        }
        goto egieyaugcwckokym;
        awewuysgsucyuiqu:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy();
        goto gqiuuyygewuqosqe;
        oykgoscoqcimcsqg:
    }
    
    public function qooeaookuemoqecm($mceokigoiqekskwe, $qqgocisyeuuqmcwc)
    {
        return ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qqgocisyeuuqmcwc, true);
    }
    
    public function oewywamoqeiigags($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto swysacsiqeaqkeik;
        muiuuoeuoqqqqycq:
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            goto aymooygqycguekai;
            amyuqgaegykwgcgk:
            uckeiuaoqmigcksq:
            goto ecooysegquiascci;
            wiumcqqogqsqyaqo:
            ManipulateTerm::ksmqawcowkmegigw($mceokigoiqekskwe, $aokagokqyuysuksm, $_POST[$aokagokqyuysuksm]);
            goto amyuqgaegykwgcgk;
            ecooysegquiascci:
            wqwoeeeqwccksawi:
            goto smgwweikoueukkom;
            aymooygqycguekai:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto wqwoeeeqwccksawi;
            }
            goto sweakucgmumqsakg;
            sweakucgmumqsakg:
            $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea();
            goto scuegucswagswcio;
            scuegucswagswcio:
            if (!isset($_POST[$aokagokqyuysuksm])) {
                goto uckeiuaoqmigcksq;
            }
            goto wiumcqqogqsqyaqo;
            smgwweikoueukkom:
            siaaikmageayqqsu:
            goto wekosqocigkegwgq;
            wekosqocigkegwgq:
        }
        goto meeeuaakuscgcomc;
        swysacsiqeaqkeik:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto quyumosiyumgeqao;
        }
        goto muiuuoeuoqqqqycq;
        meeeuaakuscgcomc:
        cqwcweokuiayeicq:
        goto goemgwueaswqayue;
        goemgwueaswqayue:
        quyumosiyumgeqao:
        goto quecaykkiwwgqoay;
        quecaykkiwwgqoay:
    }
    
    public function smgycasaqmgcaekq($mceokigoiqekskwe, $tt_id, $kesssewsiegssiya)
    {
        goto yakgkywayukuuoeo;
        wwsimimccosesome:
        uymqegkssemcqegk:
        goto ikccqyauagueyquo;
        mwqgcamgeuigkmag:
        if (!$mceokigoiqekskwe) {
            goto uymqegkssemcqegk;
        }
        goto psgawyoyqymeaqmg;
        ikccqyauagueyquo:
        mmmaegqwqsqomcso:
        goto wmgwiaksugguumki;
        yakgkywayukuuoeo:
        if (!($kesssewsiegssiya === $this->kuaoscooeuayycye())) {
            goto mmmaegqwqsqomcso;
        }
        goto gkiswiyesyseqgyi;
        gkiswiyesyseqgyi:
        global $wpdb;
        goto mwqgcamgeuigkmag;
        psgawyoyqymeaqmg:
        $wpdb->delete($wpdb->termmeta, ["\x74\x65\162\x6d\137\x69\x64" => $mceokigoiqekskwe], ["\x25\144"]);
        goto wwsimimccosesome;
        wmgwiaksugguumki:
    }
    
    public function uoaoueswwwmiwwqs($wkkweuacukumqmya, $qgoqiacsiccwoawi, $mceokigoiqekskwe)
    {
        echo ManipulateTerm::igawqaomowicuayw($mceokigoiqekskwe, $qgoqiacsiccwoawi, true);
    }
}
