<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto qiayqwouwmkgkgsa;
        asokiwyqmawokkeq:
        $this->mgoeqkosywwaoqyw();
        goto umyoqguamkcimsci;
        qiayqwouwmkgkgsa:
        if ($aokagokqyuysuksm) {
            goto yyaeqgumuoaseuiu;
        }
        goto asokiwyqmawokkeq;
        wwoueyigeiukcwes:
        iesqwciwsqiwqoga:
        goto wwuimucgqsyicsoi;
        quokmqgeweiggmag:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig(ManipulateString::ogimogiceeekegoi(self::ugwmakayykcmcmqa()));
        goto wwoueyigeiukcwes;
        wwuimucgqsyicsoi:
        parent::__construct();
        goto mqmeqiyoawukmesi;
        mqmeqiyoawukmesi:
        yyaeqgumuoaseuiu:
        goto qeikaiueqcoiowse;
        umyoqguamkcimsci:
        if ($this->miwqiiqeegeqcwis()) {
            goto iesqwciwsqiwqoga;
        }
        goto quokmqgeweiggmag;
        qeikaiueqcoiowse:
    }
    public function wigskegsqequoeks()
    {
        goto oiycaieiumsmwscm;
        meygqsoqsiieysca:
        iukuugggmakeqqwe:
        goto iuwuwckwayyuyowa;
        aqyucckkqokygkmc:
        $this->qcsmikeggeemccuu("\145\x64\151\x74\x65\x64\137{$ymqmyyeuycgmigyo}", [$this, "\x79\x67\x63\141\153\x71\x75\x69\147\x75\x75\163\163\163\x73\157"], 99)->qcsmikeggeemccuu("\x63\x72\x65\141\x74\x65\144\137{$ymqmyyeuycgmigyo}", [$this, "\x79\147\143\141\x6b\x71\165\151\147\x75\x75\163\x73\x73\163\157"], 99)->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\137\141\144\x64\137\146\x6f\x72\x6d\x5f\146\151\145\x6c\144\x73", [$this, "\157\167\157\x67\x75\157\x77\x77\145\145\x63\143\165\x79\165\x77"])->qcsmikeggeemccuu("{$ymqmyyeuycgmigyo}\x5f\x65\x64\151\x74\137\x66\157\162\155\x5f\146\151\x65\154\x64\x73", [$this, "\x69\x75\145\x77\x71\157\161\167\x6d\141\x73\x75\147\157\151\165"], 10, 2);
        goto cuaummwqgqwqeeak;
        qgogmmwuycacecke:
        $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\x5f\151\156\x69\164", [$this, "\171\x65\171\x69\147\x75\x79\x65\x67\155\x6d\x79\x75\x73\x65\x61"]);
        goto meygqsoqsiieysca;
        oiycaieiumsmwscm:
        $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\151\x6e\x69\164"], 99)->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\x6d\145\x6e\165", [$this, "\x6b\155\171\167\163\x73\171\145\x77\x61\157\x75\x73\x6b\141\153"]);
        goto guiqgcoeisukskww;
        iuwuwckwayyuyowa:
        $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis();
        goto aqyucckkqokygkmc;
        guiqgcoeisukskww:
        if (!method_exists($this, "\x79\x65\171\151\x67\x75\x79\x65\x67\x6d\155\x79\x75\x73\145\141")) {
            goto iukuugggmakeqqwe;
        }
        goto qgogmmwuycacecke;
        cuaummwqgqwqeeak:
    }
    public function init()
    {
        $this->register();
    }
    public function register()
    {
        goto ugoaowieykmsgyym;
        kmqiosiucmeisgmm:
        $aaokuekaimigoyue = $yyksucsgisomecgg->kuggecgwaickowwu("\163\154\x75\x67");
        goto ssoukiueqkwsyeqs;
        mcmemeyicaoaqeag:
        cokamkuguggscwgk:
        goto uqisumgcgcwswuui;
        cggigywqsqoeyaeq:
        $mqyaskyaekmkegmg = $yyksucsgisomecgg->aaamyckgicycisqq();
        goto kmqiosiucmeisgmm;
        eaeqmmyocycmmesu:
        if (is_wp_error($sogksuscggsicmac)) {
            goto euygyqmakaqocgey;
        }
        goto bsqiksqiqiooqeik;
        ugoaowieykmsgyym:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto yiuwkccqkwyicwsi;
        gqwwymuckywoyimi:
        euygyqmakaqocgey:
        goto ayaawwiioeysswkm;
        giaiosokigwkciok:
        goto cokamkuguggscwgk;
        goto yksceugwkyaiuwym;
        mggukkeoaaisgyye:
        $ymqmyyeuycgmigyo = $yyksucsgisomecgg->aakmagwggmkoiiyu();
        goto soayoeqageqoqyyg;
        bsqiksqiqiooqeik:
        $acqqmqmcquukaqsc = [];
        goto kmoskscsgqgsywsy;
        yiuwkccqkwyicwsi:
        $ywmkwiwkosakssii = $yyksucsgisomecgg->sacmkccceuywoqsq();
        goto mggukkeoaaisgyye;
        soayoeqageqoqyyg:
        if (!($ywmkwiwkosakssii && $ymqmyyeuycgmigyo)) {
            goto iciwsoyouucqaqss;
        }
        goto cggigywqsqoeyaeq;
        yksceugwkyaiuwym:
        ukyucsogqyemmeck:
        goto qyqqqsoggykumeuu;
        ogqqumwguoeiwsks:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg, true);
        goto giaiosokigwkciok;
        qyqqqsoggykumeuu:
        foreach ($mqyaskyaekmkegmg as $useksmwkuswkwcqg) {
            goto sgmqgegycguwamuc;
            sgmqgegycguwamuc:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg);
            goto quuukywosagemmai;
            kusweouquycaokkg:
            amaiiayeosswqwmm:
            goto kaeguyeyckamaqum;
            quuukywosagemmai:
            $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, true);
            goto kusweouquycaokkg;
            kaeguyeyckamaqum:
        }
        goto ocoykqeawcqmyiak;
        uqisumgcgcwswuui:
        ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc);
        goto gqwwymuckywoyimi;
        kmoskscsgqgsywsy:
        if (is_array($mqyaskyaekmkegmg)) {
            goto ukyucsogqyemmeck;
        }
        goto wewoyqywmiuawquq;
        ayaawwiioeysswkm:
        iciwsoyouucqaqss:
        goto eawayoqwuukkgywo;
        wewoyqywmiuawquq:
        $acqqmqmcquukaqsc[] = $this->uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $mqyaskyaekmkegmg);
        goto ogqqumwguoeiwsks;
        ocoykqeawcqmyiak:
        migcueeaqkeowqmw:
        goto mcmemeyicaoaqeag;
        ssoukiueqkwsyeqs:
        $sogksuscggsicmac = DecoratorTaxonomy::register(substr($ymqmyyeuycgmigyo, 0, 32), $mqyaskyaekmkegmg, array_filter($ywmkwiwkosakssii));
        goto eaeqmmyocycmmesu;
        eawayoqwuukkgywo:
    }
    public function kmywssyewaouskak()
    {
        goto muacgquwssyosaae;
        muacgquwssyosaae:
        $yyksucsgisomecgg = $this->oyeskqayoscwciem();
        goto ksemeemissoewyig;
        ksemeemissoewyig:
        $cyiwaggmwimigmcc = $yyksucsgisomecgg->egockcwgmeocqeqc();
        goto yggkaqimymwgeusw;
        yggkaqimymwgeusw:
        if (!is_string($cyiwaggmwimigmcc)) {
            goto awisawmceeigyqqm;
        }
        goto kygqqoowekeicswe;
        kygqqoowekeicswe:
        add_submenu_page($cyiwaggmwimigmcc, $yyksucsgisomecgg->qeeuwmmksmqiuywg(), $yyksucsgisomecgg->qeeuwmmksmqiuywg(), "\145\x64\151\164\137\x70\157\x73\164\163", "\145\144\x69\x74\55\x74\141\x67\x73\x2e\x70\x68\160\77\x74\x61\x78\157\x6e\x6f\155\171\75{$yyksucsgisomecgg->aakmagwggmkoiiyu()}", false);
        goto eeicuakiuucqekwq;
        eeicuakiuucqekwq:
        awisawmceeigyqqm:
        goto mcgaeoqcascioikk;
        mcgaeoqcascioikk:
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
        goto wuqgkeayuqmoiuyo;
        qkesssukmqqcqikg:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            goto gmgacakgauwigcwa;
            ieuawqgmecwsukqg:
            miqqmoomyyiwcayu:
            goto kgoiagiewgoeuyym;
            qkmuqqwoyoykqwwy:
            $uusmaiomayssaecw = "{$aiowsaccomcoikus->mwikyscisascoeea()}\x5f\151\x64";
            goto uqeegayckqykygcg;
            ocqwquesqkeuaqss:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto ieuawqgmecwsukqg;
            kackciqogeecyokm:
            kseaceiacycsqkoo:
            goto oouwaqoyakqgqwam;
            oouwaqoyakqgqwam:
            $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea();
            goto ocqwquesqkeuaqss;
            uqeegayckqykygcg:
            $this->wqeaqyusommocmsi($iwewcwusemqaiggk, $uusmaiomayssaecw, ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw));
            goto kackciqogeecyokm;
            gmgacakgauwigcwa:
            if (!$aiowsaccomcoikus instanceof File) {
                goto kseaceiacycsqkoo;
            }
            goto qkmuqqwoyoykqwwy;
            kgoiagiewgoeuyym:
        }
        goto sewckeyeiguewqki;
        sewckeyeiguewqki:
        kcswcoeaqiwuukiy:
        goto wkoguegaagqeqkeq;
        swiqkgiecwkaegge:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($this->miwqiiqeegeqcwis());
        goto qkesssukmqqcqikg;
        wuqgkeayuqmoiuyo:
        $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq();
        goto swiqkgiecwkaegge;
        wkoguegaagqeqkeq:
    }
    
    public function miwqiiqeegeqcwis() : ?string
    {
        return $this->oyeskqayoscwciem()->aakmagwggmkoiiyu();
    }
    
    public function mkksewyosgeumwsa(?Field $aiowsaccomcoikus) : self
    {
        goto ieuuecggquoakswk;
        gemkckmaeeoqyusu:
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        goto ukoemwwgmqeggiai;
        moscmqueqcmsuqaq:
        return $this;
        goto yiiaeaqyyakeieqa;
        ieuuecggquoakswk:
        if (!$aiowsaccomcoikus instanceof Field) {
            goto iqeceuygmigawkoy;
        }
        goto gemkckmaeeoqyusu;
        ukoemwwgmqeggiai:
        iqeceuygmigawkoy:
        goto moscmqueqcmsuqaq;
        yiiaeaqyyakeieqa:
    }
    
    public function owoguowweeccuyuw($kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya);
    }
    
    public function oyeskqayoscwciem() : RegisterTaxonomy
    {
        goto hkyamaausyicywiq;
        wisgcoswiemiwicy:
        mymgcmggqauqoiee:
        goto qgkgmseosomqwicm;
        hkyamaausyicywiq:
        if ($this->register) {
            goto mymgcmggqauqoiee;
        }
        goto ugkwkcaycececsay;
        ugkwkcaycececsay:
        $this->register = new RegisterTaxonomy();
        goto wisgcoswiemiwicy;
        qgkgmseosomqwicm:
        return $this->register;
        goto aewweoqsskseouck;
        aewweoqsskseouck:
    }
    
    public function wqeaqyusommocmsi($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie)
    {
        goto wggygymygomaekqo;
        wggygymygomaekqo:
        if (!$aiowsaccomcoikus) {
            goto iwimkwucugqaemcu;
        }
        goto wmimsumiocyqcgyy;
        wmimsumiocyqcgyy:
        ManipulateTerm::ksmqawcowkmegigw($iwewcwusemqaiggk, $aiowsaccomcoikus, $eqgoocgaqwqcimie);
        goto iaasuqsqgwgoecik;
        iaasuqsqgwgoecik:
        iwimkwucugqaemcu:
        goto guigkeossquogciu;
        guigkeossquogciu:
    }
    
    public function iuewqoqwmasugoiu($iwewcwusemqaiggk, $kesssewsiegssiya)
    {
        $this->qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk = null) : ?array
    {
        return $this->sscegwueamckwmcy("\164\141\170\157\x6e\x6f\155\171\137{$kesssewsiegssiya}\137\143\x75\x73\x74\x6f\x6d\137\146\x69\x65\x6c\144\163", $this->fields, $kesssewsiegssiya, $iwewcwusemqaiggk);
    }
    
    public function qcwkymmgakaeyqaq($kesssewsiegssiya, $iwewcwusemqaiggk = null)
    {
        goto qecaimiuamcewigw;
        uuagyckakcaquqss:
        wuygicaasgauqiau:
        goto kscwqewukwiwsyqc;
        ggmguqccswssgoyo:
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            ManipulateTerm::qkauysqeioauswys($aiowsaccomcoikus, !empty($iwewcwusemqaiggk));
            iokkycyguewayiks:
        }
        goto uuagyckakcaquqss;
        ygmwoyocigkoocau:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto ieokwscuyyokwuwa;
        }
        goto ggmguqccswssgoyo;
        kscwqewukwiwsyqc:
        ieokwscuyyokwuwa:
        goto cokkyaiqeeeecuqi;
        qecaimiuamcewigw:
        $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($kesssewsiegssiya, $iwewcwusemqaiggk);
        goto ygmwoyocigkoocau;
        cokkyaiqeeeecuqi:
    }
    
    public function uueaoikucyigousq($ymqmyyeuycgmigyo, $aaokuekaimigoyue, $useksmwkuswkwcqg, $kiyaqqoyagguscog = false) : array
    {
        goto mooigscaaqwuikos;
        icumymgsimikeayo:
        if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue && $useksmwkuswkwcqg)) {
            goto aqwgmgywcwigwows;
        }
        goto eyesqscgaacqewus;
        ckwawmwkggqciguw:
        aqwgmgywcwigwows:
        goto mwcayueuqqcqkseo;
        ekeeiceksommsomi:
        if (!$kiyaqqoyagguscog) {
            goto akusqieqmgiqoyio;
        }
        goto qmickcoaaqioicsy;
        gogcokmkciecweag:
        akusqieqmgiqoyio:
        goto oyuwoucekcqqaeca;
        mooigscaaqwuikos:
        $ekuqiqmikiicgoss = [];
        goto icumymgsimikeayo;
        eyesqscgaacqewus:
        $ucccueqywigcukcc = "{$aaokuekaimigoyue}\57\50\133\136\x2f\135\x2b\x29\x2f{$useksmwkuswkwcqg}\x2f";
        goto kcqwswsyeosyiqsa;
        kcqwswsyeosyiqsa:
        $gqgemcmoicmgaqie = "\x69\156\x64\145\170\56\x70\150\x70\x3f\x70\x6f\x73\164\x5f\x74\x79\160\x65\x3d{$useksmwkuswkwcqg}\46{$ymqmyyeuycgmigyo}\x3d\44\x6d\141\x74\x63\150\145\163\133\x31\x5d";
        goto ekeeiceksommsomi;
        qmickcoaaqioicsy:
        ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2);
        goto gogcokmkciecweag;
        oyuwoucekcqqaeca:
        $ucccueqywigcukcc .= "\x3f\x24";
        goto iyeiaaacusqewyuc;
        iyeiaaacusqewyuc:
        $ekuqiqmikiicgoss = [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"];
        goto ckwawmwkggqciguw;
        mwcayueuqqcqkseo:
        return $ekuqiqmikiicgoss;
        goto eoyukkkuoiqakwgy;
        eoyukkkuoiqakwgy:
    }
}
