<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        hkyamaausyicywiq:
        parent::__construct();
        goto ugkwkcaycececsay;
        ugkwkcaycececsay:
        ieuuecggquoakswk:
        goto wisgcoswiemiwicy;
        moscmqueqcmsuqaq:
        if ($this->miwqiiqeegeqcwis()) {
            goto iqeceuygmigawkoy;
        }
        goto yiiaeaqyyakeieqa;
        ukoemwwgmqeggiai:
        $this->mgoeqkosywwaoqyw();
        goto moscmqueqcmsuqaq;
        gemkckmaeeoqyusu:
        if ($aokagokqyuysuksm) {
            goto ieuuecggquoakswk;
        }
        goto ukoemwwgmqeggiai;
        yiiaeaqyyakeieqa:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto mymgcmggqauqoiee;
        mymgcmggqauqoiee:
        iqeceuygmigawkoy:
        goto hkyamaausyicywiq;
        wisgcoswiemiwicy:
    }
    public function wigskegsqequoeks()
    {
        goto aewweoqsskseouck;
        aewweoqsskseouck:
        $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\x6e\x69\164"], 99)->qcsmikeggeemccuu("\x61\x64\155\151\156\137\x6d\x65\156\165", [$this, "\x6b\x6d\171\167\163\x73\171\145\x77\141\157\x75\x73\153\x61\x6b"]);
        goto iwimkwucugqaemcu;
        iwimkwucugqaemcu:
        if (!method_exists($this, "\171\x65\x79\x69\147\165\171\x65\x67\155\155\x79\x75\x73\145\141")) {
            goto qgkgmseosomqwicm;
        }
        goto wggygymygomaekqo;
        wggygymygomaekqo:
        $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\151\156\x69\164", [$this, "\171\145\x79\151\x67\165\171\x65\147\155\155\x79\x75\x73\145\141"]);
        goto wmimsumiocyqcgyy;
        guigkeossquogciu:
        $this->qcsmikeggeemccuu("\145\144\x69\x74\145\x64\x5f{$ymqmyyeuycgmigyo}", [$this, "\x79\x67\143\x61\x6b\161\165\151\147\165\165\x73\x73\x73\163\x6f"], 99)->qcsmikeggeemccuu("\143\162\145\x61\164\145\144\x5f{$ymqmyyeuycgmigyo}", [$this, "\x79\147\143\141\x6b\161\x75\151\x67\165\x75\x73\x73\x73\x73\x6f"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x61\144\144\x5f\146\157\x72\x6d\137\x66\x69\x65\x6c\144\x73", [$this, "\157\167\x6f\147\165\x6f\x77\167\x65\145\x63\143\x75\171\x75\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\145\144\x69\x74\137\x66\157\162\x6d\x5f\x66\x69\145\x6c\x64\163", [$this, "\151\x75\x65\x77\161\x6f\x71\x77\155\x61\x73\165\x67\157\x69\165"], 10, 2);
        goto wuygicaasgauqiau;
        iaasuqsqgwgoecik:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto guigkeossquogciu;
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
        kcqwswsyeosyiqsa:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto aqwgmgywcwigwows;
        }
        goto ekeeiceksommsomi;
        keyyeiogkmkeiciu:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto qecaimiuamcewigw;
            qecaimiuamcewigw:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto ygmwoyocigkoocau;
            ggmguqccswssgoyo:
            ieokwscuyyokwuwa:
            goto uuagyckakcaquqss;
            ygmwoyocigkoocau:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto ggmguqccswssgoyo;
            uuagyckakcaquqss:
        }
        goto wikicusisykwugay;
        gogcokmkciecweag:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto oyuwoucekcqqaeca;
        eyesqscgaacqewus:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto kcqwswsyeosyiqsa;
        ekeeiceksommsomi:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto qmickcoaaqioicsy;
        aeicswayaimcoecy:
        goto cokkyaiqeeeecuqi;
        goto ewewgkiuwacswmmk;
        ugsmoyiommwgecww:
        cokkyaiqeeeecuqi:
        goto gkiwqegsueqsmweu;
        iyeiaaacusqewyuc:
        $acqqmqmcquukaqsc = [];
        goto ckwawmwkggqciguw;
        qmickcoaaqioicsy:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\x73\x6c\165\147");
        goto gogcokmkciecweag;
        ewewgkiuwacswmmk:
        kscwqewukwiwsyqc:
        goto keyyeiogkmkeiciu;
        eoyukkkuoiqakwgy:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto aeicswayaimcoecy;
        mwcayueuqqcqkseo:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto eoyukkkuoiqakwgy;
        ykaasokuacwyuoig:
        akusqieqmgiqoyio:
        goto agmakygyoykkegws;
        ckwawmwkggqciguw:
        if (is_array($mqyaskyaekmkegmg)) {
            goto kscwqewukwiwsyqc;
        }
        goto mwcayueuqqcqkseo;
        mooigscaaqwuikos:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto icumymgsimikeayo;
        wikicusisykwugay:
        iokkycyguewayiks:
        goto ugsmoyiommwgecww;
        agmakygyoykkegws:
        aqwgmgywcwigwows:
        goto gmwkmgkmawygkuuq;
        oyuwoucekcqqaeca:
        if (is_wp_error($sogksuscggsicmac)) {
            goto akusqieqmgiqoyio;
        }
        goto iyeiaaacusqewyuc;
        icumymgsimikeayo:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto eyesqscgaacqewus;
        gkiwqegsueqsmweu:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto ykaasokuacwyuoig;
        gmwkmgkmawygkuuq:
    }
    public function kmywssyewaouskak()
    {
        goto eeucaygkomwqoiys;
        ceugguwawauqcgqc:
        oougqkueomqysagg:
        goto umesgccceskkwcek;
        oguamsyoaimwgqos:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto ciakokmuycsamoew;
        oicciogwwqmcoaue:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\x65\x64\151\164\x5f\160\x6f\163\x74\163", "\145\144\x69\164\55\x74\141\x67\x73\x2e\x70\x68\160\x3f\x74\x61\x78\157\x6e\x6f\x6d\171\x3d{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto ceugguwawauqcgqc;
        ciakokmuycsamoew:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto oougqkueomqysagg;
        }
        goto oicciogwwqmcoaue;
        eeucaygkomwqoiys:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto oguamsyoaimwgqos;
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
            kmikysaiomgcocuq:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto euoyyamaesgwcumc;
            nwisymowgiuysywm:
            quykkkqkscyeakyc:
            goto uoukmckqqaewiack;
            iosumqekeyuyscwm:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto nwisymowgiuysywm;
            euoyyamaesgwcumc:
            ikuegsumgygqkoiq:
            goto iusisyuoomsaqyge;
            ycsyqeiqmgkqsykm:
            if (!$aiowsaccomcoikus instanceof File) {
                goto ikuegsumgygqkoiq;
            }
            goto wquwgeoesiweimsy;
            wquwgeoesiweimsy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\137\151\144";
            goto kmikysaiomgcocuq;
            iusisyuoomsaqyge:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto iosumqekeyuyscwm;
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
        cgmoawqqgooiomam:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto ccuemieucuwkaiug;
        }
        goto ckyyiokeqmgokkii;
        gkswmkowgekmoecu:
        return $this;
        goto owmcuewayukusqmo;
        ckyyiokeqmgokkii:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto igsmwqseogmyegee;
        igsmwqseogmyegee:
        ccuemieucuwkaiug:
        goto gkswmkowgekmoecu;
        owmcuewayukusqmo:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto qqicgmcqukmywgwu;
        mousymoamqcmauki:
        $this->register = new RegisterTaxonomy();
        goto yyiysucuymcuyycw;
        qqicgmcqukmywgwu:
        if ($this->register) {
            goto cueascwqacykggki;
        }
        goto mousymoamqcmauki;
        yyiysucuymcuyycw:
        cueascwqacykggki:
        goto agcwmeycmgsyqeok;
        agcwmeycmgsyqeok:
        return $this->register;
        goto esucokaeqgmiaige;
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
        return $this->sscegwueamckwmcy("\x74\x61\170\x6f\x6e\x6f\155\171\137{$kesssewsiegssiya}\137\x63\165\x73\164\x6f\x6d\x5f\146\151\145\x6c\x64\x73", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto kaccuycsyukugwao;
        ceasygsiuksuwwoc:
        aucqswuoeqocuiqk:
        goto smwkgmymskokcoek;
        kaccuycsyukugwao:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto wqmkwsgmeceakwaw;
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
        smwkgmymskokcoek:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto oimegeaimoymkmsc;
        qcmwkecooegwkkks:
        if (!$kiyaqqoyagguscog) {
            goto sgaaocqwgeqismmo;
        }
        goto myemeeaqoywegsok;
        yegimqcqoeaacsyq:
        return $ekuqiqmikiicgoss;
        goto remiaquuossuqoma;
        wcesgqaeqiqawysc:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto mimogmagkwkiyskc;
        }
        goto aemayukkiiaiueaq;
        kawmoeuiyqkqmsmo:
        $gqgemcmoicmgaqie = "\151\156\x64\145\x78\x2e\x70\150\x70\77\160\157\x73\164\x5f\x74\x79\160\145\x3d{$useksmwkuswkwcqg}\46{$ymqmyyeuycgmigyo}\x3d\x24\155\x61\x74\143\150\145\163\x5b\61\x5d";
        goto qcmwkecooegwkkks;
        caoauekaaegosauw:
        sgaaocqwgeqismmo:
        goto sieseicooqugaqgo;
        oimegeaimoymkmsc:
        $ekuqiqmikiicgoss = [];
        goto wcesgqaeqiqawysc;
        sieseicooqugaqgo:
        $ucccueqywigcukcc .= "\x3f\44";
        goto goukwgqscacouyqs;
        myemeeaqoywegsok:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto caoauekaaegosauw;
        goukwgqscacouyqs:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\160"];
        goto cyekoicwwmekycyy;
        cyekoicwwmekycyy:
        mimogmagkwkiyskc:
        goto yegimqcqoeaacsyq;
        aemayukkiiaiueaq:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\x2f\50\133\x5e\x2f\x5d\53\51\x2f{$useksmwkuswkwcqg}\x2f";
        goto kawmoeuiyqkqmsmo;
        remiaquuossuqoma:
    }
}
