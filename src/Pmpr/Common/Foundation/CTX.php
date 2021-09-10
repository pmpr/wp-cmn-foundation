<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto gemkckmaeeoqyusu;
        moscmqueqcmsuqaq:
        if ($this->miwqiiqeegeqcwis()) {
            goto iqeceuygmigawkoy;
        }
        goto yiiaeaqyyakeieqa;
        ugkwkcaycececsay:
        ieuuecggquoakswk:
        goto wisgcoswiemiwicy;
        mymgcmggqauqoiee:
        iqeceuygmigawkoy:
        goto hkyamaausyicywiq;
        gemkckmaeeoqyusu:
        if ($aokagokqyuysuksm) {
            goto ieuuecggquoakswk;
        }
        goto ukoemwwgmqeggiai;
        ukoemwwgmqeggiai:
        $this->mgoeqkosywwaoqyw();
        goto moscmqueqcmsuqaq;
        yiiaeaqyyakeieqa:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto mymgcmggqauqoiee;
        hkyamaausyicywiq:
        parent::__construct();
        goto ugkwkcaycececsay;
        wisgcoswiemiwicy:
    }
    public function wigskegsqequoeks()
    {
        goto aewweoqsskseouck;
        iwimkwucugqaemcu:
        if (!method_exists($this, "\171\145\x79\x69\x67\x75\x79\145\x67\155\x6d\171\165\163\145\x61")) {
            goto qgkgmseosomqwicm;
        }
        goto wggygymygomaekqo;
        guigkeossquogciu:
        $this->qcsmikeggeemccuu("\x65\x64\151\164\145\x64\137{$ymqmyyeuycgmigyo}", [$this, "\x79\x67\143\141\153\161\165\151\147\x75\165\163\163\163\x73\157"], 99)->qcsmikeggeemccuu("\x63\x72\x65\141\x74\145\x64\137{$ymqmyyeuycgmigyo}", [$this, "\x79\147\143\141\x6b\161\x75\x69\147\165\x75\163\x73\163\x73\157"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\141\x64\x64\x5f\x66\157\x72\155\137\x66\151\145\154\x64\x73", [$this, "\x6f\167\x6f\147\165\157\167\x77\145\145\143\x63\165\x79\165\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\x65\x64\151\x74\137\146\157\x72\155\x5f\146\151\x65\154\x64\163", [$this, "\x69\x75\145\x77\x71\x6f\x71\x77\x6d\141\163\x75\147\x6f\151\165"], 10, 2);
        goto wuygicaasgauqiau;
        aewweoqsskseouck:
        $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\x6e\151\x74"], 99)->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\x5f\155\145\x6e\165", [$this, "\x6b\155\x79\167\x73\x73\x79\145\167\141\157\165\163\153\x61\x6b"]);
        goto iwimkwucugqaemcu;
        iaasuqsqgwgoecik:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto guigkeossquogciu;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\151\x6e\151\x74", [$this, "\171\145\x79\x69\147\165\x79\145\147\155\x6d\171\x75\163\145\141"]);
        goto wmimsumiocyqcgyy;
        wmimsumiocyqcgyy:
        qgkgmseosomqwicm:
        goto iaasuqsqgwgoecik;
        wuygicaasgauqiau:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto mooigscaaqwuikos;
        gkiwqegsueqsmweu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ykaasokuacwyuoig;
        aeicswayaimcoecy:
        goto cokkyaiqeeeecuqi;
        goto ewewgkiuwacswmmk;
        keyyeiogkmkeiciu:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto qecaimiuamcewigw;
            ygmwoyocigkoocau:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto ggmguqccswssgoyo;
            qecaimiuamcewigw:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto ygmwoyocigkoocau;
            ggmguqccswssgoyo:
            ieokwscuyyokwuwa:
            goto uuagyckakcaquqss;
            uuagyckakcaquqss:
        }
        goto wikicusisykwugay;
        eyesqscgaacqewus:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto kcqwswsyeosyiqsa;
        gogcokmkciecweag:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto oyuwoucekcqqaeca;
        ckwawmwkggqciguw:
        if (is_array($mqyaskyaekmkegmg)) {
            goto kscwqewukwiwsyqc;
        }
        goto mwcayueuqqcqkseo;
        ekeeiceksommsomi:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto qmickcoaaqioicsy;
        mwcayueuqqcqkseo:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto eoyukkkuoiqakwgy;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc = [];
        goto ckwawmwkggqciguw;
        kcqwswsyeosyiqsa:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aqwgmgywcwigwows;
        }
        goto ekeeiceksommsomi;
        icumymgsimikeayo:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto eyesqscgaacqewus;
        ykaasokuacwyuoig:
        akusqieqmgiqoyio:
        goto agmakygyoykkegws;
        ugsmoyiommwgecww:
        cokkyaiqeeeecuqi:
        goto gkiwqegsueqsmweu;
        oyuwoucekcqqaeca:
        if (is_wp_error($sogksuscggsicmac)) {
            goto akusqieqmgiqoyio;
        }
        goto iyeiaaacusqewyuc;
        qmickcoaaqioicsy:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\163\x6c\165\x67");
        goto gogcokmkciecweag;
        wikicusisykwugay:
        iokkycyguewayiks:
        goto ugsmoyiommwgecww;
        eoyukkkuoiqakwgy:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto aeicswayaimcoecy;
        mooigscaaqwuikos:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto icumymgsimikeayo;
        agmakygyoykkegws:
        aqwgmgywcwigwows:
        goto gmwkmgkmawygkuuq;
        ewewgkiuwacswmmk:
        kscwqewukwiwsyqc:
        goto keyyeiogkmkeiciu;
        gmwkmgkmawygkuuq:
    }
    public function kmywssyewaouskak()
    {
        goto eeucaygkomwqoiys;
        ciakokmuycsamoew:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto oougqkueomqysagg;
        }
        goto oicciogwwqmcoaue;
        oicciogwwqmcoaue:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\145\144\x69\x74\x5f\x70\x6f\x73\164\x73", "\x65\x64\x69\x74\x2d\x74\x61\x67\x73\56\x70\150\x70\77\164\x61\170\x6f\156\157\x6d\171\75{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto ceugguwawauqcgqc;
        oguamsyoaimwgqos:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto ciakokmuycsamoew;
        eeucaygkomwqoiys:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto oguamsyoaimwgqos;
        ceugguwawauqcgqc:
        oougqkueomqysagg:
        goto umesgccceskkwcek;
        umesgccceskkwcek:
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
        goto gowseceuccyoykqg;
        gowseceuccyoykqg:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto wmmymakwgisiiemm;
        sqmgyqqesycegaog:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ycsyqeiqmgkqsykm;
            euoyyamaesgwcumc:
            ikuegsumgygqkoiq:
            goto iusisyuoomsaqyge;
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            ycsyqeiqmgkqsykm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto ikuegsumgygqkoiq;
            }
            goto wquwgeoesiweimsy;
            iusisyuoomsaqyge:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto iosumqekeyuyscwm;
            nwisymowgiuysywm:
            quykkkqkscyeakyc:
            goto uoukmckqqaewiack;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\137\x69\x64";
            goto kmikysaiomgcocuq;
            iosumqekeyuyscwm:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto nwisymowgiuysywm;
            uoukmckqqaewiack:
        }
        goto auawcgwsgmocyikg;
        wmmymakwgisiiemm:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto sqmgyqqesycegaog;
        auawcgwsgmocyikg:
        emmyeiacygokoyqm:
        goto csiywiqqacqiooam;
        csiywiqqacqiooam:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        goto cgmoawqqgooiomam;
        cgmoawqqgooiomam:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ccuemieucuwkaiug;
        }
        goto ckyyiokeqmgokkii;
        igsmwqseogmyegee:
        ccuemieucuwkaiug:
        goto gkswmkowgekmoecu;
        ckyyiokeqmgokkii:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto igsmwqseogmyegee;
        gkswmkowgekmoecu:
        return $this;
        goto owmcuewayukusqmo;
        owmcuewayukusqmo:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto qqicgmcqukmywgwu;
        yyiysucuymcuyycw:
        cueascwqacykggki:
        goto agcwmeycmgsyqeok;
        qqicgmcqukmywgwu:
        if ($this->register) {
            goto cueascwqacykggki;
        }
        goto mousymoamqcmauki;
        agcwmeycmgsyqeok:
        return $this->register;
        goto esucokaeqgmiaige;
        mousymoamqcmauki:
        $this->register = new RegisterTaxonomy();
        goto yyiysucuymcuyycw;
        esucokaeqgmiaige:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto isyassymuywsayyy;
        isyassymuywsayyy:
        if (!$aiowsaccomcoikus) {
            goto oqgmiysscyygyaqg;
        }
        goto qyckkgmuykqyaieq;
        gwwgqgceskcqukig:
        oqgmiysscyygyaqg:
        goto gqugaamwqqookmyc;
        qyckkgmuykqyaieq:
        ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        goto gwwgqgceskcqukig;
        gqugaamwqqookmyc:
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("\164\x61\170\157\156\157\155\x79\x5f{$kesssewsiegssiya}\137\143\x75\x73\x74\x6f\x6d\137\x66\151\145\x6c\x64\163", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto kaccuycsyukugwao;
        ceasygsiuksuwwoc:
        aucqswuoeqocuiqk:
        goto smwkgmymskokcoek;
        wqmkwsgmeceakwaw:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto aucqswuoeqocuiqk;
        }
        goto ygsiuoyewwecoemg;
        kaccuycsyukugwao:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto wqmkwsgmeceakwaw;
        ywuegkmgqmweogqq:
        ayemyskkicqyskos:
        goto ceasygsiuksuwwoc;
        ygsiuoyewwecoemg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            eoeoaoomoeayemks:
        }
        goto ywuegkmgqmweogqq;
        smwkgmymskokcoek:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto oimegeaimoymkmsc;
        caoauekaaegosauw:
        sgaaocqwgeqismmo:
        goto sieseicooqugaqgo;
        kawmoeuiyqkqmsmo:
        $gqgemcmoicmgaqie = "\x69\156\144\x65\170\x2e\x70\x68\x70\x3f\160\x6f\163\164\x5f\164\171\x70\x65\75{$useksmwkuswkwcqg}\46{$ymqmyyeuycgmigyo}\x3d\44\x6d\x61\164\143\x68\145\x73\x5b\61\x5d";
        goto qcmwkecooegwkkks;
        oimegeaimoymkmsc:
        $ekuqiqmikiicgoss = [];
        goto wcesgqaeqiqawysc;
        yegimqcqoeaacsyq:
        return $ekuqiqmikiicgoss;
        goto remiaquuossuqoma;
        myemeeaqoywegsok:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto caoauekaaegosauw;
        cyekoicwwmekycyy:
        mimogmagkwkiyskc:
        goto yegimqcqoeaacsyq;
        qcmwkecooegwkkks:
        if (!$kiyaqqoyagguscog) {
            goto sgaaocqwgeqismmo;
        }
        goto myemeeaqoywegsok;
        wcesgqaeqiqawysc:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto mimogmagkwkiyskc;
        }
        goto aemayukkiiaiueaq;
        sieseicooqugaqgo:
        $ucccueqywigcukcc .= "\x3f\44";
        goto goukwgqscacouyqs;
        aemayukkiiaiueaq:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\57\x28\x5b\x5e\x2f\135\x2b\51\x2f{$useksmwkuswkwcqg}\x2f";
        goto kawmoeuiyqkqmsmo;
        goukwgqscacouyqs:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\x6f\160"];
        goto cyekoicwwmekycyy;
        remiaquuossuqoma:
    }
}
