<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ukoemwwgmqeggiai:
        $this->mgoeqkosywwaoqyw();
        goto moscmqueqcmsuqaq;
        hkyamaausyicywiq:
        parent::__construct();
        goto ugkwkcaycececsay;
        mymgcmggqauqoiee:
        iqeceuygmigawkoy:
        goto hkyamaausyicywiq;
        ugkwkcaycececsay:
        ieuuecggquoakswk:
        goto wisgcoswiemiwicy;
        moscmqueqcmsuqaq:
        if ($this->miwqiiqeegeqcwis()) {
            goto iqeceuygmigawkoy;
        }
        goto yiiaeaqyyakeieqa;
        yiiaeaqyyakeieqa:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto mymgcmggqauqoiee;
        gemkckmaeeoqyusu:
        if ($aokagokqyuysuksm) {
            goto ieuuecggquoakswk;
        }
        goto ukoemwwgmqeggiai;
        wisgcoswiemiwicy:
    }
    public function wigskegsqequoeks()
    {
        goto aewweoqsskseouck;
        iaasuqsqgwgoecik:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto guigkeossquogciu;
        aewweoqsskseouck:
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\x74"], 99)->qcsmikeggeemccuu("\x61\x64\155\151\x6e\x5f\155\145\x6e\165", [$this, "\153\155\x79\x77\163\163\x79\x65\167\141\157\x75\163\153\x61\x6b"]);
        goto iwimkwucugqaemcu;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\137\x69\156\x69\x74", [$this, "\x79\145\x79\x69\147\x75\x79\x65\x67\155\x6d\171\x75\x73\145\x61"]);
        goto wmimsumiocyqcgyy;
        guigkeossquogciu:
        $this->qcsmikeggeemccuu("\x65\x64\151\164\145\144\137{$ymqmyyeuycgmigyo}", [$this, "\171\147\143\x61\153\161\165\x69\147\x75\165\x73\x73\x73\163\157"], 99)->qcsmikeggeemccuu("\x63\162\x65\x61\164\x65\x64\x5f{$ymqmyyeuycgmigyo}", [$this, "\x79\147\x63\x61\x6b\161\x75\151\x67\x75\x75\163\163\x73\x73\157"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\x64\x64\x5f\146\157\x72\x6d\137\x66\151\145\x6c\144\x73", [$this, "\157\x77\x6f\147\x75\x6f\167\x77\x65\145\x63\143\x75\x79\165\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\x64\x69\164\x5f\146\157\162\x6d\137\146\x69\145\154\144\163", [$this, "\x69\165\x65\x77\x71\157\161\x77\x6d\x61\x73\165\x67\157\x69\165"], 10, 2);
        goto wuygicaasgauqiau;
        wmimsumiocyqcgyy:
        qgkgmseosomqwicm:
        goto iaasuqsqgwgoecik;
        iwimkwucugqaemcu:
        if (!method_exists($this, "\x79\145\x79\151\x67\165\x79\x65\147\155\155\x79\x75\x73\x65\x61")) {
            goto qgkgmseosomqwicm;
        }
        goto wggygymygomaekqo;
        wuygicaasgauqiau:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto mooigscaaqwuikos;
        kcqwswsyeosyiqsa:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aqwgmgywcwigwows;
        }
        goto ekeeiceksommsomi;
        mooigscaaqwuikos:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto icumymgsimikeayo;
        eoyukkkuoiqakwgy:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto aeicswayaimcoecy;
        gkiwqegsueqsmweu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ykaasokuacwyuoig;
        ugsmoyiommwgecww:
        cokkyaiqeeeecuqi:
        goto gkiwqegsueqsmweu;
        ewewgkiuwacswmmk:
        kscwqewukwiwsyqc:
        goto keyyeiogkmkeiciu;
        eyesqscgaacqewus:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto kcqwswsyeosyiqsa;
        keyyeiogkmkeiciu:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto qecaimiuamcewigw;
            qecaimiuamcewigw:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto ygmwoyocigkoocau;
            ygmwoyocigkoocau:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto ggmguqccswssgoyo;
            ggmguqccswssgoyo:
            ieokwscuyyokwuwa:
            goto uuagyckakcaquqss;
            uuagyckakcaquqss:
        }
        goto wikicusisykwugay;
        aeicswayaimcoecy:
        goto cokkyaiqeeeecuqi;
        goto ewewgkiuwacswmmk;
        oyuwoucekcqqaeca:
        if (is_wp_error($sogksuscggsicmac)) {
            goto akusqieqmgiqoyio;
        }
        goto iyeiaaacusqewyuc;
        wikicusisykwugay:
        iokkycyguewayiks:
        goto ugsmoyiommwgecww;
        agmakygyoykkegws:
        aqwgmgywcwigwows:
        goto gmwkmgkmawygkuuq;
        qmickcoaaqioicsy:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\163\154\x75\147");
        goto gogcokmkciecweag;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc = [];
        goto ckwawmwkggqciguw;
        icumymgsimikeayo:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto eyesqscgaacqewus;
        ckwawmwkggqciguw:
        if (is_array($mqyaskyaekmkegmg)) {
            goto kscwqewukwiwsyqc;
        }
        goto mwcayueuqqcqkseo;
        ekeeiceksommsomi:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto qmickcoaaqioicsy;
        gogcokmkciecweag:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto oyuwoucekcqqaeca;
        mwcayueuqqcqkseo:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto eoyukkkuoiqakwgy;
        ykaasokuacwyuoig:
        akusqieqmgiqoyio:
        goto agmakygyoykkegws;
        gmwkmgkmawygkuuq:
    }
    public function kmywssyewaouskak()
    {
        goto eeucaygkomwqoiys;
        oicciogwwqmcoaue:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x65\144\x69\164\137\x70\x6f\x73\164\x73", "\x65\144\151\164\55\164\x61\x67\163\x2e\160\x68\x70\77\164\x61\170\x6f\156\x6f\155\171\x3d{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto ceugguwawauqcgqc;
        ciakokmuycsamoew:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto oougqkueomqysagg;
        }
        goto oicciogwwqmcoaue;
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
        auawcgwsgmocyikg:
        emmyeiacygokoyqm:
        goto csiywiqqacqiooam;
        sqmgyqqesycegaog:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto ycsyqeiqmgkqsykm;
            iosumqekeyuyscwm:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto nwisymowgiuysywm;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\x5f\151\x64";
            goto kmikysaiomgcocuq;
            iusisyuoomsaqyge:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto iosumqekeyuyscwm;
            nwisymowgiuysywm:
            quykkkqkscyeakyc:
            goto uoukmckqqaewiack;
            euoyyamaesgwcumc:
            ikuegsumgygqkoiq:
            goto iusisyuoomsaqyge;
            ycsyqeiqmgkqsykm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto ikuegsumgygqkoiq;
            }
            goto wquwgeoesiweimsy;
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            uoukmckqqaewiack:
        }
        goto auawcgwsgmocyikg;
        gowseceuccyoykqg:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto wmmymakwgisiiemm;
        wmmymakwgisiiemm:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto sqmgyqqesycegaog;
        csiywiqqacqiooam:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        goto cgmoawqqgooiomam;
        gkswmkowgekmoecu:
        return $this;
        goto owmcuewayukusqmo;
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
        owmcuewayukusqmo:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto qqicgmcqukmywgwu;
        qqicgmcqukmywgwu:
        if ($this->register) {
            goto cueascwqacykggki;
        }
        goto mousymoamqcmauki;
        mousymoamqcmauki:
        $this->register = new RegisterTaxonomy();
        goto yyiysucuymcuyycw;
        agcwmeycmgsyqeok:
        return $this->register;
        goto esucokaeqgmiaige;
        yyiysucuymcuyycw:
        cueascwqacykggki:
        goto agcwmeycmgsyqeok;
        esucokaeqgmiaige:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto isyassymuywsayyy;
        gwwgqgceskcqukig:
        oqgmiysscyygyaqg:
        goto gqugaamwqqookmyc;
        isyassymuywsayyy:
        if (!$aiowsaccomcoikus) {
            goto oqgmiysscyygyaqg;
        }
        goto qyckkgmuykqyaieq;
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
        return $this->sscegwueamckwmcy("\x74\x61\170\157\156\157\155\x79\x5f{$kesssewsiegssiya}\x5f\x63\x75\x73\x74\x6f\x6d\137\x66\x69\x65\x6c\x64\x73", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto kaccuycsyukugwao;
        ceasygsiuksuwwoc:
        aucqswuoeqocuiqk:
        goto smwkgmymskokcoek;
        ygsiuoyewwecoemg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            eoeoaoomoeayemks:
        }
        goto ywuegkmgqmweogqq;
        ywuegkmgqmweogqq:
        ayemyskkicqyskos:
        goto ceasygsiuksuwwoc;
        wqmkwsgmeceakwaw:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto aucqswuoeqocuiqk;
        }
        goto ygsiuoyewwecoemg;
        kaccuycsyukugwao:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto wqmkwsgmeceakwaw;
        smwkgmymskokcoek:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto oimegeaimoymkmsc;
        caoauekaaegosauw:
        sgaaocqwgeqismmo:
        goto sieseicooqugaqgo;
        goukwgqscacouyqs:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\x70"];
        goto cyekoicwwmekycyy;
        myemeeaqoywegsok:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto caoauekaaegosauw;
        kawmoeuiyqkqmsmo:
        $gqgemcmoicmgaqie = "\x69\156\x64\145\170\56\x70\150\160\x3f\x70\x6f\163\164\x5f\x74\171\160\x65\x3d{$useksmwkuswkwcqg}\46{$ymqmyyeuycgmigyo}\75\44\155\x61\164\143\150\x65\163\133\x31\x5d";
        goto qcmwkecooegwkkks;
        oimegeaimoymkmsc:
        $ekuqiqmikiicgoss = [];
        goto wcesgqaeqiqawysc;
        wcesgqaeqiqawysc:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto mimogmagkwkiyskc;
        }
        goto aemayukkiiaiueaq;
        yegimqcqoeaacsyq:
        return $ekuqiqmikiicgoss;
        goto remiaquuossuqoma;
        cyekoicwwmekycyy:
        mimogmagkwkiyskc:
        goto yegimqcqoeaacsyq;
        qcmwkecooegwkkks:
        if (!$kiyaqqoyagguscog) {
            goto sgaaocqwgeqismmo;
        }
        goto myemeeaqoywegsok;
        aemayukkiiaiueaq:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\x2f\50\x5b\136\x2f\135\x2b\51\x2f{$useksmwkuswkwcqg}\x2f";
        goto kawmoeuiyqkqmsmo;
        sieseicooqugaqgo:
        $ucccueqywigcukcc .= "\77\44";
        goto goukwgqscacouyqs;
        remiaquuossuqoma:
    }
}
