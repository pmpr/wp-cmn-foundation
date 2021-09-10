<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\Field;
use Pmpr\Common\Foundation\FormMaker\Admin\Field\File;
use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait;
use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite;
use Pmpr\Common\Foundation\Manipulate\ManipulateServer;
use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Register\RegisterTaxonomy;

class CTX extends Container
{
    use FieldTrait;
    
    protected ?RegisterTaxonomy $register = null;
    
    protected ?array $fields = [];
    
    public function __construct($aokagokqyuysuksm = null)
    {
        goto wkoguegaagqeqkeq;
        gemkckmaeeoqyusu:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto ukoemwwgmqeggiai;
        iqeceuygmigawkoy:
        $this->mgoeqkosywwaoqyw();
        goto ieuuecggquoakswk;
        yiiaeaqyyakeieqa:
        sewckeyeiguewqki:
        goto mymgcmggqauqoiee;
        moscmqueqcmsuqaq:
        parent::__construct();
        goto yiiaeaqyyakeieqa;
        ukoemwwgmqeggiai:
        qkesssukmqqcqikg:
        goto moscmqueqcmsuqaq;
        ieuuecggquoakswk:
        if ($this->miwqiiqeegeqcwis()) {
            goto qkesssukmqqcqikg;
        }
        goto gemkckmaeeoqyusu;
        wkoguegaagqeqkeq:
        if ($aokagokqyuysuksm) {
            goto sewckeyeiguewqki;
        }
        goto iqeceuygmigawkoy;
        mymgcmggqauqoiee:
    }
    public function wigskegsqequoeks()
    {
        goto ugkwkcaycececsay;
        aewweoqsskseouck:
        hkyamaausyicywiq:
        goto iwimkwucugqaemcu;
        iwimkwucugqaemcu:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto wggygymygomaekqo;
        ugkwkcaycececsay:
        $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\x69\156\x69\x74"], 99)->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\x6d\x65\156\165", [$this, "\153\155\171\x77\163\x73\x79\145\167\141\x6f\x75\163\153\141\x6b"]);
        goto wisgcoswiemiwicy;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\x65\144\x69\x74\x65\144\137{$ymqmyyeuycgmigyo}", [$this, "\x79\147\143\141\153\x71\x75\151\x67\165\165\x73\163\x73\163\x6f"], 99)->qcsmikeggeemccuu("\143\x72\145\141\x74\x65\144\137{$ymqmyyeuycgmigyo}", [$this, "\x79\x67\x63\x61\x6b\161\165\151\147\165\x75\x73\163\163\x73\157"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x61\144\x64\137\x66\x6f\x72\155\x5f\x66\151\x65\154\x64\163", [$this, "\157\167\x6f\x67\165\x6f\167\x77\145\x65\143\x63\x75\171\165\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\x64\x69\164\137\x66\157\x72\x6d\137\x66\x69\x65\x6c\144\x73", [$this, "\151\x75\145\167\x71\x6f\x71\x77\155\x61\163\x75\147\x6f\x69\165"], 10, 2);
        goto wmimsumiocyqcgyy;
        qgkgmseosomqwicm:
        $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\151\x6e\151\164", [$this, "\x79\145\x79\151\x67\165\171\145\147\155\x6d\x79\165\x73\x65\x61"]);
        goto aewweoqsskseouck;
        wisgcoswiemiwicy:
        if (!method_exists($this, "\171\145\x79\x69\x67\x75\171\145\147\155\155\x79\165\x73\145\x61")) {
            goto hkyamaausyicywiq;
        }
        goto qgkgmseosomqwicm;
        wmimsumiocyqcgyy:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto cokkyaiqeeeecuqi;
        qmickcoaaqioicsy:
        $acqqmqmcquukaqsc = [];
        goto gogcokmkciecweag;
        ewewgkiuwacswmmk:
        ggmguqccswssgoyo:
        goto keyyeiogkmkeiciu;
        eoyukkkuoiqakwgy:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto wuygicaasgauqiau;
            wuygicaasgauqiau:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto iokkycyguewayiks;
            ieokwscuyyokwuwa:
            guigkeossquogciu:
            goto qecaimiuamcewigw;
            iokkycyguewayiks:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto ieokwscuyyokwuwa;
            qecaimiuamcewigw:
        }
        goto aeicswayaimcoecy;
        cokkyaiqeeeecuqi:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto akusqieqmgiqoyio;
        wikicusisykwugay:
        uuagyckakcaquqss:
        goto ugsmoyiommwgecww;
        oyuwoucekcqqaeca:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto iyeiaaacusqewyuc;
        mwcayueuqqcqkseo:
        ygmwoyocigkoocau:
        goto eoyukkkuoiqakwgy;
        aqwgmgywcwigwows:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto mooigscaaqwuikos;
        icumymgsimikeayo:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto eyesqscgaacqewus;
        kcqwswsyeosyiqsa:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto ekeeiceksommsomi;
        ckwawmwkggqciguw:
        goto ggmguqccswssgoyo;
        goto mwcayueuqqcqkseo;
        eyesqscgaacqewus:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\163\154\x75\147");
        goto kcqwswsyeosyiqsa;
        ugsmoyiommwgecww:
        kscwqewukwiwsyqc:
        goto gkiwqegsueqsmweu;
        gogcokmkciecweag:
        if (is_array($mqyaskyaekmkegmg)) {
            goto ygmwoyocigkoocau;
        }
        goto oyuwoucekcqqaeca;
        ekeeiceksommsomi:
        if (is_wp_error($sogksuscggsicmac)) {
            goto uuagyckakcaquqss;
        }
        goto qmickcoaaqioicsy;
        keyyeiogkmkeiciu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto wikicusisykwugay;
        akusqieqmgiqoyio:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto aqwgmgywcwigwows;
        mooigscaaqwuikos:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto kscwqewukwiwsyqc;
        }
        goto icumymgsimikeayo;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto ckwawmwkggqciguw;
        aeicswayaimcoecy:
        iaasuqsqgwgoecik:
        goto ewewgkiuwacswmmk;
        gkiwqegsueqsmweu:
    }
    public function kmywssyewaouskak()
    {
        goto agmakygyoykkegws;
        oougqkueomqysagg:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto ykaasokuacwyuoig;
        }
        goto eeucaygkomwqoiys;
        gmwkmgkmawygkuuq:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto oougqkueomqysagg;
        eeucaygkomwqoiys:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x65\144\151\x74\137\160\157\x73\164\163", "\145\x64\151\164\x2d\x74\x61\x67\163\56\x70\150\x70\x3f\x74\x61\170\157\x6e\x6f\155\171\75{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto oguamsyoaimwgqos;
        oguamsyoaimwgqos:
        ykaasokuacwyuoig:
        goto ciakokmuycsamoew;
        agmakygyoykkegws:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto gmwkmgkmawygkuuq;
        ciakokmuycsamoew:
    }
    
    public function migkyseymeomymmy() : bool
    {
        return DecoratorQuery::qmssqeyayicowkgy($this->miwqiiqeegeqcwis());
    }
    public function mgoeqkosywwaoqyw()
    {
    }
    
    public function ygcakquiguusssso($iwewcwusemqaiggk)
    {
        goto iosumqekeyuyscwm;
        gowseceuccyoykqg:
        oicciogwwqmcoaue:
        goto wmmymakwgisiiemm;
        iosumqekeyuyscwm:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto nwisymowgiuysywm;
        nwisymowgiuysywm:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto uoukmckqqaewiack;
        uoukmckqqaewiack:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto emmyeiacygokoyqm;
            ycsyqeiqmgkqsykm:
            umesgccceskkwcek:
            goto wquwgeoesiweimsy;
            euoyyamaesgwcumc:
            ceugguwawauqcgqc:
            goto iusisyuoomsaqyge;
            emmyeiacygokoyqm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto umesgccceskkwcek;
            }
            goto quykkkqkscyeakyc;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto kmikysaiomgcocuq;
            ikuegsumgygqkoiq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto ycsyqeiqmgkqsykm;
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            quykkkqkscyeakyc:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\137\151\144";
            goto ikuegsumgygqkoiq;
            iusisyuoomsaqyge:
        }
        goto gowseceuccyoykqg;
        wmmymakwgisiiemm:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        goto auawcgwsgmocyikg;
        ccuemieucuwkaiug:
        sqmgyqqesycegaog:
        goto cgmoawqqgooiomam;
        auawcgwsgmocyikg:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto sqmgyqqesycegaog;
        }
        goto csiywiqqacqiooam;
        csiywiqqacqiooam:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ccuemieucuwkaiug;
        cgmoawqqgooiomam:
        return $this;
        goto ckyyiokeqmgokkii;
        ckyyiokeqmgokkii:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto gkswmkowgekmoecu;
        owmcuewayukusqmo:
        $this->register = new RegisterTaxonomy();
        goto cueascwqacykggki;
        cueascwqacykggki:
        igsmwqseogmyegee:
        goto qqicgmcqukmywgwu;
        qqicgmcqukmywgwu:
        return $this->register;
        goto mousymoamqcmauki;
        gkswmkowgekmoecu:
        if ($this->register) {
            goto igsmwqseogmyegee;
        }
        goto owmcuewayukusqmo;
        mousymoamqcmauki:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto agcwmeycmgsyqeok;
        agcwmeycmgsyqeok:
        if (!$aiowsaccomcoikus) {
            goto yyiysucuymcuyycw;
        }
        goto esucokaeqgmiaige;
        esucokaeqgmiaige:
        ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        goto oqgmiysscyygyaqg;
        oqgmiysscyygyaqg:
        yyiysucuymcuyycw:
        goto isyassymuywsayyy;
        isyassymuywsayyy:
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("\164\x61\x78\x6f\x6e\157\x6d\171\137{$kesssewsiegssiya}\137\143\165\163\164\x6f\155\137\146\x69\145\154\x64\x73", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto ayemyskkicqyskos;
        wqmkwsgmeceakwaw:
        gqugaamwqqookmyc:
        goto ygsiuoyewwecoemg;
        aucqswuoeqocuiqk:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            gwwgqgceskcqukig:
        }
        goto kaccuycsyukugwao;
        kaccuycsyukugwao:
        qyckkgmuykqyaieq:
        goto wqmkwsgmeceakwaw;
        eoeoaoomoeayemks:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto gqugaamwqqookmyc;
        }
        goto aucqswuoeqocuiqk;
        ayemyskkicqyskos:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto eoeoaoomoeayemks;
        ygsiuoyewwecoemg:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto smwkgmymskokcoek;
        caoauekaaegosauw:
        ceasygsiuksuwwoc:
        goto sieseicooqugaqgo;
        kawmoeuiyqkqmsmo:
        ywuegkmgqmweogqq:
        goto qcmwkecooegwkkks;
        myemeeaqoywegsok:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\157\160"];
        goto caoauekaaegosauw;
        qcmwkecooegwkkks:
        $ucccueqywigcukcc .= "\77\44";
        goto myemeeaqoywegsok;
        sgaaocqwgeqismmo:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto ceasygsiuksuwwoc;
        }
        goto mimogmagkwkiyskc;
        aemayukkiiaiueaq:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto kawmoeuiyqkqmsmo;
        smwkgmymskokcoek:
        $ekuqiqmikiicgoss = [];
        goto sgaaocqwgeqismmo;
        oimegeaimoymkmsc:
        $gqgemcmoicmgaqie = "\151\x6e\x64\x65\170\56\x70\x68\x70\x3f\160\157\x73\x74\x5f\164\171\x70\x65\x3d{$useksmwkuswkwcqg}\x26{$ymqmyyeuycgmigyo}\75\x24\155\141\164\143\150\x65\163\x5b\61\x5d";
        goto wcesgqaeqiqawysc;
        wcesgqaeqiqawysc:
        if (!$kiyaqqoyagguscog) {
            goto ywuegkmgqmweogqq;
        }
        goto aemayukkiiaiueaq;
        sieseicooqugaqgo:
        return $ekuqiqmikiicgoss;
        goto goukwgqscacouyqs;
        mimogmagkwkiyskc:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\57\50\x5b\136\57\x5d\53\51\57{$useksmwkuswkwcqg}\57";
        goto oimegeaimoymkmsc;
        goukwgqscacouyqs:
    }
}
