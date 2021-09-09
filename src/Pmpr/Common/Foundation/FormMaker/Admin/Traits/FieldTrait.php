<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Traits;

use CMB2;
use CMB2_hookup;
use CMB2_JS;
use Exception;
use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\FormMaker\Admin\Field as Fields;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateUser;
use Pmpr\Common\Foundation\Manipulate\ManipulateValidation;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use ReflectionClass;

trait FieldTrait
{
    
    public static function okmsgamiiemyesao($ywmkwiwkosakssii = []) : ?Fields\Field
    {
        goto ycokoqscowewwsau;
        ayqeeqsoekuuyaiq:
        return $aiowsaccomcoikus;
        goto qmqiyacuyoscwuak;
        osymqmgcqqyomacw:
        cmqkcsayqiqugyce:
        goto keowumoqcaqsmqwa;
        muascwyseakooami:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto gomegguceiicoocs;
        ekqeaqcmkqoiugms:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto muascwyseakooami;
        keowumoqcaqsmqwa:
        if (!$aiowsaccomcoikus) {
            goto amaswgogkauskswc;
        }
        goto cuwoscseqqwuiqem;
        ycokoqscowewwsau:
        $aiowsaccomcoikus = null;
        goto ekqeaqcmkqoiugms;
        myeogiaaukogiiqg:
        bkwacmcewmysqowo:
        goto ayqeeqsoekuuyaiq;
        uyiimywaiywogmeo:
        msakyecawuskgema:
        goto ckagwqgeeamsacqq;
        uasseoesmyukoosc:
        iuwimogikcucogci:
        goto uyiimywaiywogmeo;
        ckagwqgeeamsacqq:
        amaswgogkauskswc:
        goto myeogiaaukogiiqg;
        meawswqmqouaeuou:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto qsaomeeimaagqewc;
            yuscokykcoymyyiq:
            eqiigmauqkoswiys:
            goto wimsassgwgimayck;
            yauygqguooyuiick:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto aemgieoigwoaoqey;
            ksaecqkkqkqumiyy:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto aksqawoycgigewoo;
            aemgieoigwoaoqey:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto qaqeuqcqwyqigguw;
                wuaeweseqayacqis:
                gaweiceicsykweqs:
                goto iekcwimcmsemsgmo;
                memikioiiekcqoqc:
                goto eqiigmauqkoswiys;
                goto wkeegycggsggcsiy;
                keisauiosaguwkmg:
                ouomuyeqsugykuyk:
                goto ikigycmycsqieeoi;
                awuymmyewogkskka:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto gwoqwogmyqmaekeq;
                }
                goto wqsgwiecyyamgugu;
                qaqeuqcqwyqigguw:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto awuymmyewogkskka;
                wqsgwiecyyamgugu:
                switch ($wsmeuqcsyguikoci) {
                    case "\x63\157\154":
                        goto ceyumqqeccuiuwsw;
                        cywcqkecgwkgssgy:
                        ucomiwksyqswgwmm:
                        goto egkokuggowqoogwe;
                        ceyumqqeccuiuwsw:
                        $waaaiiqwsmggwsak = explode("\40", $eqgoocgaqwqcimie);
                        goto mskkgeiykcaoqosq;
                        egkokuggowqoogwe:
                        goto meuckssskyaesage;
                        goto mugykqoymeugqasw;
                        mskkgeiykcaoqosq:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto wugsmyikwkyususo;
                            wugsmyikwkyususo:
                            $ymkqyawksmqcgsei = explode("\x2d", $imgcoakmmgqsckkm);
                            goto icuoakkeswccquuo;
                            eqmgcgwcgkuoqyya:
                            iwwmukmsgwoesima:
                            goto egswwwwgmeecegem;
                            icuoakkeswccquuo:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto eqmgcgwcgkuoqyya;
                            egswwwwgmeecegem:
                        }
                        goto cywcqkecgwkgssgy;
                        mugykqoymeugqasw:
                    case "\x69\x67\156\x6f\162\141\x62\x6c\145":
                        goto qesoesykasouikck;
                        qesoesykasouikck:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\166\141\x6c\165\145\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\x69\x65\x6c\144\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x72\145\166\x65\162\163\145", false));
                            soakqssqaoaqkkck:
                        }
                        goto wyuiuogqiqasaumy;
                        gaeewoieegegmwmw:
                        goto meuckssskyaesage;
                        goto gesqgakoekiukmsa;
                        wyuiuogqiqasaumy:
                        yewqwkoaeqqegiyi:
                        goto gaeewoieegegmwmw;
                        gesqgakoekiukmsa:
                    default:
                        goto mawaowggkucoosoc;
                        iyoiumqkociwggwi:
                        ooyikkuecqewakee:
                        goto asqwcaswskmaiuei;
                        taisikggaaysayue:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto mouyseuswmcisysg;
                        asqwcaswskmaiuei:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto kusykiciiukqkwcs;
                        kusykiciiukqkwcs:
                        mmgaoiukskgaskye:
                        goto qsoicugccmgoaooq;
                        mouyseuswmcisysg:
                        goto mmgaoiukskgaskye;
                        goto iyoiumqkociwggwi;
                        mawaowggkucoosoc:
                        if ($wuyimwscukmqqsqk) {
                            goto ooyikkuecqewakee;
                        }
                        goto taisikggaaysayue;
                        qsoicugccmgoaooq:
                }
                goto keisauiosaguwkmg;
                ikigycmycsqieeoi:
                meuckssskyaesage:
                goto memikioiiekcqoqc;
                wkeegycggsggcsiy:
                gwoqwogmyqmaekeq:
                goto wuaeweseqayacqis;
                iekcwimcmsemsgmo:
            }
            goto yuscokykcoymyyiq;
            qygwmuiaqciwymgw:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto cgaoeuasmuicmyoq;
            }
            goto oqcoyuausmgccywa;
            wimsassgwgimayck:
            ccequccokicuawum:
            goto omimqwkiqwicccmw;
            aksqawoycgigewoo:
            cgaoeuasmuicmyoq:
            goto yauygqguooyuiick;
            qsaomeeimaagqewc:
            $wuyimwscukmqqsqk = true;
            goto qygwmuiaqciwymgw;
            oqcoyuausmgccywa:
            $wuyimwscukmqqsqk = false;
            goto ksaecqkkqkqumiyy;
            omimqwkiqwicccmw:
        }
        goto uasseoesmyukoosc;
        uqkeqwwaysocgsca:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto ccgamisoqiigouye;
        scakegmmqggqwysq:
        $ciagusimogciiumg = ["\x61\x64\144", "\x73\x65\164", ''];
        goto meawswqmqouaeuou;
        ccgamisoqiigouye:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto myoqkkuiequicmym;
        myoqkkuiequicmym:
        switch ($sqeykgyoooqysmca) {
            case "\150\164\x6d\x6c":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto cmqkcsayqiqugyce;
            case "\150\x69\144\x64\x65\156":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto cmqkcsayqiqugyce;
            case "\x63\x68\x65\143\x6b\x62\x6f\x78":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\x74\145\x78\x74":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\164\145\170\164\x61\x72\145\141":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\144\x61\164\x65":
            case "\x64\x61\164\145\164\151\x6d\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\x69\x63\x6f\x6e":
                goto ucwgiecogkaesuko;
                agwiwkwmowuuscsg:
                goto cmqkcsayqiqugyce;
                goto qskqawaewmgquwmq;
                uquugcsmgsmmwywo:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\141\x62\145\154\x73", []);
                goto oouomgcseggcugyi;
                ucwgiecogkaesuko:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto cekgqucskcgyoakq;
                cekgqucskcgyoakq:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\151\143\x6f\x6e\x73", IconFontawesomeInterface::class);
                goto uquugcsmgsmmwywo;
                oouomgcseggcugyi:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto agwiwkwmowuuscsg;
                qskqawaewmgquwmq:
            case "\146\151\x6c\145":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\x73\145\x6c\145\x63\164":
            case "\x73\145\154\145\x63\x74\x2d\62":
            case "\x62\x73\x73\x65\154\145\x63\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto cmqkcsayqiqugyce;
            case "\x73\145\x6c\145\143\x74\x2d\x72\157\154\145":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto cmqkcsayqiqugyce;
            case "\163\x65\x6c\145\x63\x74\x2d\x70\x6f\x73\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto cmqkcsayqiqugyce;
            case "\163\145\x6c\145\x63\164\55\x75\x73\x65\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto cmqkcsayqiqugyce;
            case "\163\145\154\x65\143\x74\55\151\143\157\156\x2d\x73\x69\172\145":
                goto wckioasgmwqugauw;
                eokeqaomwmsymuyi:
                $ymqmyyeuycgmigyo = __("\x49\x63\x6f\156\x20\x53\151\x7a\145", PR__CMN__FOUNDATION);
                goto siqwwuiuqwcayisu;
                emmseyuagaaweuek:
                goto cmqkcsayqiqugyce;
                goto waiqusgyaeegsqqw;
                uegaugwmyucmooyu:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x69\x63\157\156\x5f\163\x69\172\145\x73"), []);
                goto ecmwimqmggogysoe;
                ecmwimqmggogysoe:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto emmseyuagaaweuek;
                wckioasgmwqugauw:
                if ($ymqmyyeuycgmigyo) {
                    goto ueigayyqqomcisui;
                }
                goto eokeqaomwmsymuyi;
                siqwwuiuqwcayisu:
                ueigayyqqomcisui:
                goto uegaugwmyucmooyu;
                waiqusgyaeegsqqw:
        }
        goto swaokakkeggigiqi;
        gomegguceiicoocs:
        if (!$aokagokqyuysuksm) {
            goto bkwacmcewmysqowo;
        }
        goto uqkeqwwaysocgsca;
        wayycssguscgyuko:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\144", "\x74\x79\160\x65", "\156\141\155\x65"]);
        goto scakegmmqggqwysq;
        swaokakkeggigiqi:
        oeuiyomkweusgawu:
        goto osymqmgcqqyomacw;
        cuwoscseqqwuiqem:
        if (!is_array($ywmkwiwkosakssii)) {
            goto msakyecawuskgema;
        }
        goto wayycssguscgyuko;
        qmqiyacuyoscwuak:
    }
    
    public static function eakquuwmkweaeygy($aokagokqyuysuksm, $ggauoeuaesiymgee)
    {
        return DecoratorOption::get($aokagokqyuysuksm, $ggauoeuaesiymgee);
    }
    
    public static function qugwsaawyageaqgy($aokagokqyuysuksm, $ymqmyyeuycgmigyo = null, $mkqqqewsokcswckc = null) : Fields\Size
    {
        return new Fields\Size($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function ymuegqgyuagyucws(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Text
    {
        return new Fields\Text($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function sgsesoiwcgqgckoo(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Date
    {
        return new Fields\Date($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function sciaycsmsiekqueg(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) : Fields\Editor
    {
        return new Fields\Editor($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public static function kimoeccokowuaiic(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\File
    {
        return new Fields\File($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function uouyygwcgsmygaee(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, string $mkqqqewsokcswckc = null) : Fields\Textarea
    {
        return new Fields\Textarea($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function cwiuiiakukcsaakw(string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie = null) : Fields\Hidden
    {
        return new Fields\Hidden($aokagokqyuysuksm, $eqgoocgaqwqcimie);
    }
    
    public static function aikamsoikcwsewac(string $aokagokqyuysuksm) : Fields\Html
    {
        return new Fields\Html($aokagokqyuysuksm);
    }
    
    public static function wcwmusaouiqaqeww(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Checkbox
    {
        return new Fields\Checkbox($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function mwmcsiqiwkweayuw(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Colorpicker
    {
        return new Fields\Colorpicker($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public function qywgugocoiwoayqa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null) : Fields\Depended
    {
        return new Fields\Depended($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $cwucaoaqgwqcwews, $mkqqqewsokcswckc);
    }
    
    public static function meikyccyyskqkqks(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\MultiCheck
    {
        return new Fields\MultiCheck($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc);
    }
    
    public static function yyuwuqsiucweeoue(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Radio
    {
        return new Fields\Radio($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc);
    }
    
    public static function mccagaqeagiikkec($aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select
    {
        return new Fields\Select($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc);
    }
    
    public static function kqcemgcowgomaqwa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select2
    {
        return new Fields\Select2($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc);
    }
    
    public static function ckuwucygcwsiawms(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\BSSelect
    {
        return new Fields\BSSelect($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc);
    }
    
    public static function qoeiescseggagsqs(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Button
    {
        return new Fields\Button($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function yqeauksoiomwkqkq(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\MultiButton
    {
        return new Fields\MultiButton($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public static function iseogkiymousogom(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null) : Fields\Group
    {
        return new Fields\Group($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ikgwqyuyckaewsow, $mkqqqewsokcswckc);
    }
    
    public static function aowmyucqigeeakaa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $somsiuiquigiqsmk = [], ?string $mkqqqewsokcswckc = null, array $ucwamkesemusoeyc = []) : Fields\Slider
    {
        return new Fields\Slider($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $somsiuiquigiqsmk, $ucwamkesemusoeyc, $mkqqqewsokcswckc);
    }
    
    public static function scweoguicmyeqqem(?string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie, ?string $ymqmyyeuycgmigyo = null) : Fields\Display
    {
        return new Fields\Display($aokagokqyuysuksm, $eqgoocgaqwqcimie, $ymqmyyeuycgmigyo);
    }
    
    public static function ekakmekqeqwcuacm(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $ukwokcuqauuosmoo = null) : Fields\Title
    {
        return new Fields\Title($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ukwokcuqauuosmoo);
    }
    public static function asimeyiqqkeawyoq()
    {
        goto ogiiukgqwuyeyiqo;
        kauoikqowoeoeyaw:
        CMB2_hookup::enqueue_cmb_js();
        goto wsykmmiowmoisiwg;
        ogiiukgqwuyeyiqo:
        CMB2_JS::enqueue();
        goto kauoikqowoeoeyaw;
        wsykmmiowmoisiwg:
        CMB2_hookup::enqueue_cmb_css();
        goto qigoakiooqiyqeou;
        qigoakiooqiyqeou:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto owayewqwggkmqgqm;
        ikykyueiiiiekmkq:
        if (!$koaqeegoeiaiccse) {
            goto mqamggsomwomqkyq;
        }
        goto wckceqoyawaeusuy;
        eewasogiegqkcaae:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\151\144" => $aokagokqyuysuksm]));
        goto immamiuusugcmuqk;
        qkeqcqsgessimeos:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\154\141\x73\x73", "\146\157\162\x6d\55\x63\157\156\164\x61\x69\156\x65\162");
        goto sucwmosiwgasymic;
        ocosqqykmeikqycm:
        eoimqaiguyaqgome:
        goto ikykyueiiiiekmkq;
        gaagyqguomuaaqac:
        qcqykequcgokomay:
        goto ocosqqykmeikqycm;
        immamiuusugcmuqk:
        ob_start();
        goto ceossuqockaiuecg;
        wckceqoyawaeusuy:
        echo $nsmgceoqaqogqmuw;
        goto cwskuqkeauugauqu;
        yqowauukqgsoucmg:
        if (!$omwmuycmeqcqokom) {
            goto qcqykequcgokomay;
        }
        goto qkeqcqsgessimeos;
        cwskuqkeauugauqu:
        mqamggsomwomqkyq:
        goto qcwqmyukgscaigeq;
        uekcooqsuqkmkayi:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto yqowauukqgsoucmg;
        asgemimceqgyaewi:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\151\x64", ManipulateString::uniqid(5));
        goto mmwmuokmikccoaig;
        owayewqwggkmqgqm:
        $nsmgceoqaqogqmuw = '';
        goto asgemimceqgyaewi;
        yaiawiwigqoemyqm:
        self::asimeyiqqkeawyoq();
        goto sgyogmaauquycqaa;
        mmwmuokmikccoaig:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\145\143\x68\x6f", true);
        goto wkkykweqcekcuwqa;
        sgyogmaauquycqaa:
        $eaoumsseceiowgsk->show_form();
        goto uekcooqsuqkmkayi;
        wkkykweqcekcuwqa:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\160\x61\x72\145\156\164", false);
        goto mqkkicswmsaiyuic;
        ceossuqockaiuecg:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto yaiawiwigqoemyqm;
        mqkkicswmsaiyuic:
        if (!$ikgwqyuyckaewsow) {
            goto eoimqaiguyaqgome;
        }
        goto eewasogiegqkcaae;
        qcwqmyukgscaigeq:
        return $nsmgceoqaqogqmuw;
        goto keieieqewwgqcoia;
        sucwmosiwgasymic:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x64\x69\x76", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto gaagyqguomuaaqac;
        keieieqewwgqcoia:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto cyiogsuyagwgiuma;
        msueyoiiiyskyswg:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            migagikgsqkwcqca:
        }
        goto oyioqyigmkwuwuua;
        oyioqyigmkwuwuua:
        ugskaqyksuoawecc:
        goto omcqsmseccqsckym;
        yyeugqugwkyagksm:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto qeasguwmwomcioyy;
        qeasguwmwomcioyy:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto msueyoiiiyskyswg;
        aeoywewiquusyamg:
        return $eaoumsseceiowgsk;
        goto mkigueyysgcycqcs;
        wyaayucwkugmakku:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto koqamsqgiomsceqq;
        }
        goto yyeugqugwkyagksm;
        omcqsmseccqsckym:
        koqamsqgiomsceqq:
        goto aeoywewiquusyamg;
        cyiogsuyagwgiuma:
        $eaoumsseceiowgsk = null;
        goto wyaayucwkugmakku;
        mkigueyysgcycqcs:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto liyqekcciiuuqasi;
        kmoseqyccceksags:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto eiseqmycikmoeiom;
        ocuuyosqkeqwcima:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto smmasacqsmkeauwc;
        imwckieoaqoqqqyi:
        if (!is_string($aiowsaccomcoikus)) {
            goto umieiuyswauuyeww;
        }
        goto gugumscsyciuscus;
        sqsqwmwwiwukccqo:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto qckaywmcygiwiygs;
            oqsaekyeiusqaiki:
            uoiysouwossowgsg:
            goto gyykicucayuwysqu;
            cuyikgqsqwymuwem:
            ieuecgaimowummkq:
            goto ysscsgaukqoycyga;
            imewokywqaacyowg:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto cuoksycuqykycike;
            cuoksycuqykycike:
            goto kiaeuwkmumywykei;
            goto mgyiqoksoygoguya;
            mgyiqoksoygoguya:
            ygsgoaecoskqsyqs:
            goto ekoikoqkigaauoqc;
            ysscsgaukqoycyga:
            kiaeuwkmumywykei:
            goto oqsaekyeiusqaiki;
            ekoikoqkigaauoqc:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                cesmmckwemyiugwo:
            }
            goto cuyikgqsqwymuwem;
            qckaywmcygiwiygs:
            if (is_array($ccamueccusigaaio)) {
                goto ygsgoaecoskqsyqs;
            }
            goto imewokywqaacyowg;
            gyykicucayuwysqu:
        }
        goto kioowwygisuiwkmk;
        eiseqmycikmoeiom:
        goto ioqssequcuseayyc;
        goto omqwgiywimsmoaec;
        amuuyacmuasceoog:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto sweoiiwceiqwkuao;
        }
        goto kmoseqyccceksags;
        osaummwikmkmekys:
        ewmcauccuggcigme:
        goto imwckieoaqoqqqyi;
        qaucmoeewcagkmsy:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto aquaysowoigawawe;
        gsqokscmqccqioog:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto gaymoimsoqmkkcio;
        wckowwygqqukeqgk:
        cckaaosgusoowiqm:
        goto kseiwaqicoamaqoy;
        gaymoimsoqmkkcio:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto cckaaosgusoowiqm;
        }
        goto sqsqwmwwiwukccqo;
        mqokweusqkqwakmw:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto ewmcauccuggcigme;
        }
        goto amuuyacmuasceoog;
        gugumscsyciuscus:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto csoysmsiecqsoiss;
        kseiwaqicoamaqoy:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto wiiymmquiymeygoe;
        }
        goto ocuuyosqkeqwcima;
        csoysmsiecqsoiss:
        umieiuyswauuyeww:
        goto oooussisqgggcaua;
        liyqekcciiuuqasi:
        $sogksuscggsicmac = null;
        goto mqokweusqkqwakmw;
        giiycgoccsyaqcyg:
        
        goto wckowwygqqukeqgk;
        omqwgiywimsmoaec:
        sweoiiwceiqwkuao:
        goto kkgkueoqokwuyyqc;
        aquaysowoigawawe:
        ioqssequcuseayyc:
        goto osaummwikmkmekys;
        kioowwygisuiwkmk:
        uiqkqauoskuseqku:
        goto giiycgoccsyaqcyg;
        oooussisqgggcaua:
        return $sogksuscggsicmac;
        goto caswcwsisomwyuoe;
        kkgkueoqokwuyyqc:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto gsqokscmqccqioog;
        smmasacqsmkeauwc:
        wiiymmquiymeygoe:
        goto qaucmoeewcagkmsy;
        caswcwsisomwyuoe:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto waemqmkmioaucwcy;
        wisagegqkywwycew:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            oociqkqiawuqqksy:
        }
        goto omymmwgqumuugieq;
        omymmwgqumuugieq:
        wgguwusmimcskmym:
        goto uoqqiuaqysmiimgu;
        uoqqiuaqysmiimgu:
        return $ikgwqyuyckaewsow;
        goto qcoykumuwgysoewo;
        waemqmkmioaucwcy:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto wisagegqkywwycew;
        qcoykumuwgysoewo:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto okqikeeiigwooqqu;
        yoackssggyiukquk:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto kmmgqmcikmqwguoc;
        uoeksuocoiscuwom:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto yoackssggyiukquk;
        koiuymoiquiegggc:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto oqiyycgoiogemoes;
            caiuegssgqocqoou:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\x20{$iyqygqimawuycsyq}";
            goto gqigmewamcgquoqg;
            oqiyycgoiogemoes:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto caiuegssgqocqoou;
            gqigmewamcgquoqg:
            masyywacqueuqmgq:
            goto qmgewyssegcgqsyc;
            qmgewyssegcgqsyc:
        }
        goto umcoewewouwwgwwo;
        uikwsekwsekqqieg:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto oisgwmkkeumoyigq;
        swsqucqiewccgiuk:
        $ygykagaqyuawwiyo = __("\x68\162", PR__CMN__FOUNDATION);
        goto uikwsekwsekqqieg;
        okqikeeiigwooqqu:
        $sckumcuqemuukces = __("\155\x69\x6e", PR__CMN__FOUNDATION);
        goto swsqucqiewccgiuk;
        kmmgqmcikmqwguoc:
        return $aiowsaccomcoikus;
        goto gooskwcomqmcaikc;
        umcoewewouwwgwwo:
        ikiymiceygwcysuq:
        goto uoeksuocoiscuwom;
        oisgwmkkeumoyigq:
        $qiouiwasaauyaaue = [0 => __("\116\157\x20\x4c\x69\x6d\151\164", PR__CMN__FOUNDATION)];
        goto koiuymoiquiegggc;
        gooskwcomqmcaikc:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\154\141\x62\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto uacyogkcoymicomk;
        yumgwmaewkusyeig:
        return $ykiyyumywksqcisg;
        goto ceeqsgoagsueoyqw;
        uacyogkcoymicomk:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\x69\x64" => $uusmaiomayssaecw, "\164\x65\170\164" => $wkaqekwwgqsqwcoi]);
            imgssikcuusmegqq:
        }
        goto iquqmweckeciauye;
        iquqmweckeciauye:
        memsekycgguswasc:
        goto yumgwmaewkusyeig;
        ceeqsgoagsueoyqw:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto kqeewuquwymmgkuk;
        gsoqwsgmqqyyaygm:
        iscwwmewqmgikukm:
        goto qsoesaysemiyeqam;
        wqgasgaukewquyau:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto iouwqegyciamycei;
        }
        goto oqssqoagygwswmiq;
        muqcakiqomgiouww:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto qmywkmasiqksiqik;
            ykwsoacemwimkmqe:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto aeoimcysgcwaekqe;
            keiigcicaqummyyw:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto amggqcemagwskmcm;
            wuysakkwmqwqmusy:
            oimasmccamqaqymu:
            goto swgekwwyccscqcsk;
            akcwucackkcwoqqm:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto uesauaikigwieyqa;
            aeoimcysgcwaekqe:
            cquoyqoigoicqyyi:
            goto wuysakkwmqwqmusy;
            qmywkmasiqksiqik:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\163\x73" => "\x69\143\157\156\55\160\x72\x69\x6d\x61\x72\x79"]);
            goto akcwucackkcwoqqm;
            uesauaikigwieyqa:
            if ($mwaeiygkcuuqqgga) {
                goto wqskmukeywsocaiu;
            }
            goto keiigcicaqummyyw;
            yemmmimewycgacke:
            wqskmukeywsocaiu:
            goto ykwsoacemwimkmqe;
            amggqcemagwskmcm:
            goto cquoyqoigoicqyyi;
            goto yemmmimewycgacke;
            swgekwwyccscqcsk:
        }
        goto kmmqosikyuewwkgc;
        kqeewuquwymmgkuk:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto qmkyoqkqcamsemeq;
        qsoesaysemiyeqam:
        return array_map("\145\x73\143\137\x61\164\164\x72", $ygogqywsaqoukoqy);
        goto esgweiiwaggqyssi;
        fommawgqgyucksqg:
        uyeqykaqeuuwwakq:
        goto ckagmemuawawoiea;
        sakiquicymmmqoqw:
        if ($mwaeiygkcuuqqgga) {
            goto eeyqmmkgmucumosg;
        }
        goto qaykmqcaiaqoemia;
        eeguamkaugacsiky:
        iouwqegyciamycei:
        goto osqiaawasseesgeu;
        wuaemamkwigigqsm:
        $mwaeiygkcuuqqgga = true;
        goto fommawgqgyucksqg;
        gwsquykmiyoueaem:
        if (!$ykiyyumywksqcisg) {
            goto iscwwmewqmgikukm;
        }
        goto muqcakiqomgiouww;
        gsgoqwyueokycimc:
        $mwaeiygkcuuqqgga = false;
        goto wqgasgaukewquyau;
        kmmqosikyuewwkgc:
        eycqeyuoiicccoyc:
        goto sakiquicymmmqoqw;
        oqssqoagygwswmiq:
        if (!is_array($ykiyyumywksqcisg)) {
            goto uyeqykaqeuuwwakq;
        }
        goto wuaemamkwigigqsm;
        ckagmemuawawoiea:
        goto saykkkmgucwiauqm;
        goto eeguamkaugacsiky;
        qaykmqcaiaqoemia:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\145\163\x63\141\160\145\x64\137\151\x63\x6f\x6e\163\x5f\x64\x72\157\160\144\157\167\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto iaccmcoomkyomscs;
        osqiaawasseesgeu:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto eqgwasegeiumuiwk;
        eqgwasegeiumuiwk:
        saykkkmgucwiauqm:
        goto gwsquykmiyoueaem;
        iaccmcoomkyomscs:
        eeyqmmkgmucumosg:
        goto gsoqwsgmqqyyaygm;
        qmkyoqkqcamsemeq:
        $ygogqywsaqoukoqy = [];
        goto gsgoqwyueokycimc;
        esgweiiwaggqyssi:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto kukwiwysceakqikm;
        acwocicyuosecagq:
        gakgswamiwuiikwy:
        goto ocimkeagywsaisoi;
        kukwiwysceakqikm:
        $qimgcsugeskcqeyc = "\x77\x68\x69\x74\145";
        goto imuiggqqqussckae;
        ocimkeagywsaisoi:
        if (!(false !== strpos($qoiwmokisgikggia, "\x6c\151\147\x68\x74") || false !== strpos($qoiwmokisgikggia, "\164\145\162\x74\151\x61\162\171") || false !== strpos($qoiwmokisgikggia, "\x71\x75\141\164\145\x72\156\x61\162\171") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto wimgomkqmqqwgkco;
        }
        goto eooycgwgyygmcmuu;
        imuiggqqqussckae:
        if ($qoiwmokisgikggia) {
            goto gakgswamiwuiikwy;
        }
        goto qmscsiuiwaaeeoom;
        cgygmkeaueiwgmqk:
        wimgomkqmqqwgkco:
        goto icukugckqoqgiuws;
        qmscsiuiwaaeeoom:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto acwocicyuosecagq;
        eooycgwgyygmcmuu:
        $qimgcsugeskcqeyc = "\x64\141\x72\x6b";
        goto cgygmkeaueiwgmqk;
        icukugckqoqgiuws:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\154\x61\x73\x73" => "\x62\x67\x2d{$qoiwmokisgikggia}\40\164\145\x78\x74\x2d{$qimgcsugeskcqeyc}\x20\164\145\x78\x74\55\x63\x65\x6e\x74\145\x72\x20\160\157\x73\x69\164\151\157\x6e\x2d\141\x62\163\157\154\165\x74\145\x20\x77\x2d\x31\x30\60\x20\150\55\61\60\x30\x20\x74\157\x70\x2d\60\40\x6c\x65\146\164\55\60\40\162\157\x75\156\x64\x65\x64"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\x6c\x61\163\x73" => "\154\150\x2d\x6c\147"]));
        goto qwwsykceiouooeau;
        qwwsykceiouooeau:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto kwiemwkcogquuews;
        cueusceyaaqiwkgc:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto qcseosqqiqckoqws;
            nggwsegkqocuqeqk:
            ikcsaouaieccseqi:
            goto uickeqcoyomssici;
            mocyksssaegycmey:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto nggwsegkqocuqeqk;
            qcseosqqiqckoqws:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto mocyksssaegycmey;
            uickeqcoyomssici:
        }
        goto wososskoguokaqei;
        wososskoguokaqei:
        cgokkieyawykgueo:
        goto uemuqgqeiwcwscqs;
        uemuqgqeiwcwscqs:
        return $ukqisiguweqciuei;
        goto qqmkagsyoaowquya;
        kwiemwkcogquuews:
        $ukqisiguweqciuei = ['' => __("\x4e\157\156\x65", PR__CMN__FOUNDATION)];
        goto cueusceyaaqiwkgc;
        qqmkagsyoaowquya:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto ceuiqusmmawsykea;
        eawaqosecwqaaqqe:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\x6f\154\157\162\137\144\162\157\x70\x64\157\x77\156\137\151\164\145\155\x73"), []);
        goto oegywukowukugmiu;
        ceuiqusmmawsykea:
        if ($ukqisiguweqciuei) {
            goto eokggumwwwmgoioy;
        }
        goto eawaqosecwqaaqqe;
        eiiwooasmosecscs:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\154\141\142\145\154" => $uusmaiomayssaecw, "\x64\x61\x74\x61\x2d\143\x6f\156\x74\x65\156\x74" => $qoiwmokisgikggia];
            ggwwawgwoucowuyo:
        }
        goto cuisuaicowuooksy;
        oegywukowukugmiu:
        eokggumwwwmgoioy:
        goto wceqqamckqyeuaqw;
        cuisuaicowuooksy:
        iisomisiocmgsuyw:
        goto gkoeeqqmggqygwyw;
        gkoeeqqmggqygwyw:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x43\x6f\154\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto uwugswmqgicawims;
        wceqqamckqyeuaqw:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto eiiwooasmosecscs;
        uwugswmqgicawims:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto gimsigcqasysqcoq;
        yemgiiosomcamyae:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\111\x63\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto cqskcaaagwgwmiya;
        ssgeagqeoeosoeei:
        return $gmksciycsesoouoi;
        goto eogoakwqsaomuygg;
        suuksqiggsoogugm:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto ssgeagqeoeosoeei;
        cqskcaaagwgwmiya:
        if ($pacsomcuwcegguua) {
            goto ikukmsmyyikckikm;
        }
        goto simuyqcsmiuiykim;
        ikceueaaocmccgkc:
        ikukmsmyyikckikm:
        goto suuksqiggsoogugm;
        gimsigcqasysqcoq:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto yemgiiosomcamyae;
        simuyqcsmiuiykim:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto ikceueaaocmccgkc;
        eogoakwqsaomuygg:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto ewcwuwuyyqggiago;
        ewcwuwuyyqggiago:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto ckqwwskgokgsmiqc;
        aooaoguggyasagge:
        msqukekiockgmsme:
        goto rwmqgyyueoeaimik;
        ckqwwskgokgsmiqc:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\x6c\141\142\x65\154" => $uusmaiomayssaecw, "\x64\141\164\141\55\143\157\x6e\164\145\x6e\164" => $wkaqekwwgqsqwcoi];
            ycmwuecqmmgiskyk:
        }
        goto aooaoguggyasagge;
        rwmqgyyueoeaimik:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x49\143\157\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto gswsickyiywowuqm;
        gswsickyiywowuqm:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto sauyacymwesqauua;
        cyicqmoiqscscwya:
        cyqkqseuausyusek:
        goto uucoyymywsyuqeke;
        uucoyymywsyuqeke:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto mqoyyykwyuayacou;
        sauyacymwesqauua:
        if ($meqocwsecsywiiqs) {
            goto cyqkqseuausyusek;
        }
        goto wcwakqcywmskawsg;
        wcwakqcywmskawsg:
        $meqocwsecsywiiqs = __("\x49\x63\x6f\156", PR__CMN__FOUNDATION);
        goto cyicqmoiqscscwya;
        mqoyyykwyuayacou:
    }
}
