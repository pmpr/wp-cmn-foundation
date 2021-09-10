<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto ioqssequcuseayyc;
        eiseqmycikmoeiom:
        swaokakkeggigiqi:
        goto omqwgiywimsmoaec;
        giiycgoccsyaqcyg:
        wsykmmiowmoisiwg:
        goto wckowwygqqukeqgk;
        amuuyacmuasceoog:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto kmoseqyccceksags;
        liyqekcciiuuqasi:
        if (!$aokagokqyuysuksm) {
            goto sweoiiwceiqwkuao;
        }
        goto mqokweusqkqwakmw;
        omqwgiywimsmoaec:
        myoqkkuiequicmym:
        goto kkgkueoqokwuyyqc;
        wckowwygqqukeqgk:
        cckaaosgusoowiqm:
        goto kseiwaqicoamaqoy;
        mqokweusqkqwakmw:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto amuuyacmuasceoog;
        ewmcauccuggcigme:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto umieiuyswauuyeww;
        kkgkueoqokwuyyqc:
        if (!$aiowsaccomcoikus) {
            goto wiiymmquiymeygoe;
        }
        goto gsqokscmqccqioog;
        sqsqwmwwiwukccqo:
        $ciagusimogciiumg = ["\141\144\144", "\x73\145\x74", ''];
        goto kioowwygisuiwkmk;
        kmoseqyccceksags:
        switch ($sqeykgyoooqysmca) {
            case "\x68\x74\155\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto myoqkkuiequicmym;
            case "\150\151\x64\x64\145\156":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto myoqkkuiequicmym;
            case "\143\x68\145\143\153\x62\157\170":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\164\145\x78\164":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\x74\145\x78\164\141\162\145\141":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\144\141\x74\145":
            case "\x64\141\x74\x65\x74\x69\x6d\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\x69\143\157\156":
                goto osymqmgcqqyomacw;
                keowumoqcaqsmqwa:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x63\x6f\156\163", IconFontawesomeInterface::class);
                goto cuwoscseqqwuiqem;
                scakegmmqggqwysq:
                goto myoqkkuiequicmym;
                goto meawswqmqouaeuou;
                osymqmgcqqyomacw:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto keowumoqcaqsmqwa;
                cuwoscseqqwuiqem:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\x61\x62\145\x6c\x73", []);
                goto wayycssguscgyuko;
                wayycssguscgyuko:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto scakegmmqggqwysq;
                meawswqmqouaeuou:
            case "\146\x69\x6c\x65":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\163\145\x6c\x65\143\x74":
            case "\163\x65\x6c\x65\x63\x74\55\62":
            case "\x62\x73\163\x65\x6c\x65\143\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto myoqkkuiequicmym;
            case "\163\x65\x6c\145\143\164\x2d\162\x6f\x6c\x65":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto myoqkkuiequicmym;
            case "\163\x65\x6c\x65\143\x74\55\x70\157\163\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto myoqkkuiequicmym;
            case "\163\145\x6c\145\143\164\x2d\x75\x73\x65\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto myoqkkuiequicmym;
            case "\163\145\154\x65\x63\x74\x2d\151\x63\157\x6e\x2d\x73\151\172\x65":
                goto uyiimywaiywogmeo;
                uyiimywaiywogmeo:
                if ($ymqmyyeuycgmigyo) {
                    goto uasseoesmyukoosc;
                }
                goto ckagwqgeeamsacqq;
                ckagwqgeeamsacqq:
                $ymqmyyeuycgmigyo = __("\x49\143\157\156\40\123\151\x7a\145", PR__CMN__FOUNDATION);
                goto myeogiaaukogiiqg;
                myeogiaaukogiiqg:
                uasseoesmyukoosc:
                goto ayqeeqsoekuuyaiq;
                qmqiyacuyoscwuak:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto ogiiukgqwuyeyiqo;
                ogiiukgqwuyeyiqo:
                goto myoqkkuiequicmym;
                goto kauoikqowoeoeyaw;
                ayqeeqsoekuuyaiq:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\151\143\x6f\x6e\x5f\x73\x69\x7a\x65\x73"), []);
                goto qmqiyacuyoscwuak;
                kauoikqowoeoeyaw:
        }
        goto eiseqmycikmoeiom;
        ioqssequcuseayyc:
        $aiowsaccomcoikus = null;
        goto ewmcauccuggcigme;
        gsqokscmqccqioog:
        if (!is_array($ywmkwiwkosakssii)) {
            goto cckaaosgusoowiqm;
        }
        goto gaymoimsoqmkkcio;
        kioowwygisuiwkmk:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto kiaeuwkmumywykei;
            oqsaekyeiusqaiki:
            qigoakiooqiyqeou:
            goto gyykicucayuwysqu;
            kiaeuwkmumywykei:
            $wuyimwscukmqqsqk = true;
            goto qckaywmcygiwiygs;
            cuyikgqsqwymuwem:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto oyioqyigmkwuwuua;
                ieuecgaimowummkq:
                msueyoiiiyskyswg:
                goto cesmmckwemyiugwo;
                cesmmckwemyiugwo:
                mqamggsomwomqkyq:
                goto ygsgoaecoskqsyqs;
                mkigueyysgcycqcs:
                asgemimceqgyaewi:
                goto uiqkqauoskuseqku;
                uiqkqauoskuseqku:
                owayewqwggkmqgqm:
                goto uoiysouwossowgsg;
                omcqsmseccqsckym:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto msueyoiiiyskyswg;
                }
                goto aeoywewiquusyamg;
                uoiysouwossowgsg:
                goto eoimqaiguyaqgome;
                goto ieuecgaimowummkq;
                aeoywewiquusyamg:
                switch ($wsmeuqcsyguikoci) {
                    case "\143\157\x6c":
                        goto yaiawiwigqoemyqm;
                        sgyogmaauquycqaa:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto mqkkicswmsaiyuic;
                            mqkkicswmsaiyuic:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto eewasogiegqkcaae;
                            eewasogiegqkcaae:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto immamiuusugcmuqk;
                            immamiuusugcmuqk:
                            wkkykweqcekcuwqa:
                            goto ceossuqockaiuecg;
                            ceossuqockaiuecg:
                        }
                        goto uekcooqsuqkmkayi;
                        uekcooqsuqkmkayi:
                        mmwmuokmikccoaig:
                        goto yqowauukqgsoucmg;
                        yaiawiwigqoemyqm:
                        $waaaiiqwsmggwsak = explode("\40", $eqgoocgaqwqcimie);
                        goto sgyogmaauquycqaa;
                        yqowauukqgsoucmg:
                        goto owayewqwggkmqgqm;
                        goto qkeqcqsgessimeos;
                        qkeqcqsgessimeos:
                    case "\x69\x67\x6e\x6f\162\x61\142\x6c\145":
                        goto ocosqqykmeikqycm;
                        ocosqqykmeikqycm:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\166\141\x6c\x75\145\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\151\145\x6c\144\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\162\145\166\145\x72\163\x65", false));
                            gaagyqguomuaaqac:
                        }
                        goto ikykyueiiiiekmkq;
                        ikykyueiiiiekmkq:
                        sucwmosiwgasymic:
                        goto wckceqoyawaeusuy;
                        wckceqoyawaeusuy:
                        goto owayewqwggkmqgqm;
                        goto cwskuqkeauugauqu;
                        cwskuqkeauugauqu:
                    default:
                        goto ugskaqyksuoawecc;
                        wyaayucwkugmakku:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto yyeugqugwkyagksm;
                        ugskaqyksuoawecc:
                        if ($wuyimwscukmqqsqk) {
                            goto qcwqmyukgscaigeq;
                        }
                        goto migagikgsqkwcqca;
                        yyeugqugwkyagksm:
                        keieieqewwgqcoia:
                        goto qeasguwmwomcioyy;
                        cyiogsuyagwgiuma:
                        qcwqmyukgscaigeq:
                        goto wyaayucwkugmakku;
                        migagikgsqkwcqca:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto koqamsqgiomsceqq;
                        koqamsqgiomsceqq:
                        goto keieieqewwgqcoia;
                        goto cyiogsuyagwgiuma;
                        qeasguwmwomcioyy:
                }
                goto mkigueyysgcycqcs;
                oyioqyigmkwuwuua:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto omcqsmseccqsckym;
                ygsgoaecoskqsyqs:
            }
            goto ysscsgaukqoycyga;
            imewokywqaacyowg:
            $wuyimwscukmqqsqk = false;
            goto cuoksycuqykycike;
            qckaywmcygiwiygs:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto qcqykequcgokomay;
            }
            goto imewokywqaacyowg;
            mgyiqoksoygoguya:
            qcqykequcgokomay:
            goto ekoikoqkigaauoqc;
            ekoikoqkigaauoqc:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto cuyikgqsqwymuwem;
            cuoksycuqykycike:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto mgyiqoksoygoguya;
            ysscsgaukqoycyga:
            eoimqaiguyaqgome:
            goto oqsaekyeiusqaiki;
            gyykicucayuwysqu:
        }
        goto giiycgoccsyaqcyg;
        gaymoimsoqmkkcio:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\144", "\164\x79\160\145", "\x6e\x61\155\145"]);
        goto sqsqwmwwiwukccqo;
        umieiuyswauuyeww:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto liyqekcciiuuqasi;
        ocuuyosqkeqwcima:
        sweoiiwceiqwkuao:
        goto smmasacqsmkeauwc;
        kseiwaqicoamaqoy:
        wiiymmquiymeygoe:
        goto ocuuyosqkeqwcima;
        smmasacqsmkeauwc:
        return $aiowsaccomcoikus;
        goto qaucmoeewcagkmsy;
        qaucmoeewcagkmsy:
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
        goto aquaysowoigawawe;
        osaummwikmkmekys:
        CMB2_hookup::enqueue_cmb_js();
        goto imwckieoaqoqqqyi;
        aquaysowoigawawe:
        CMB2_JS::enqueue();
        goto osaummwikmkmekys;
        imwckieoaqoqqqyi:
        CMB2_hookup::enqueue_cmb_css();
        goto gugumscsyciuscus;
        gugumscsyciuscus:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto wgguwusmimcskmym;
        oociqkqiawuqqksy:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\151\x64", ManipulateString::uniqid(5));
        goto waemqmkmioaucwcy;
        gqigmewamcgquoqg:
        if (!$omwmuycmeqcqokom) {
            goto csoysmsiecqsoiss;
        }
        goto qmgewyssegcgqsyc;
        koiuymoiquiegggc:
        echo $nsmgceoqaqogqmuw;
        goto umcoewewouwwgwwo;
        qcoykumuwgysoewo:
        ob_start();
        goto ikiymiceygwcysuq;
        wgguwusmimcskmym:
        $nsmgceoqaqogqmuw = '';
        goto oociqkqiawuqqksy;
        qmgewyssegcgqsyc:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\154\141\163\163", "\x66\157\162\x6d\x2d\143\157\156\x74\141\x69\x6e\x65\162");
        goto okqikeeiigwooqqu;
        wisagegqkywwycew:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\x70\x61\162\x65\156\164", false);
        goto omymmwgqumuugieq;
        oisgwmkkeumoyigq:
        if (!$koaqeegoeiaiccse) {
            goto caswcwsisomwyuoe;
        }
        goto koiuymoiquiegggc;
        omymmwgqumuugieq:
        if (!$ikgwqyuyckaewsow) {
            goto oooussisqgggcaua;
        }
        goto uoqqiuaqysmiimgu;
        uoeksuocoiscuwom:
        return $nsmgceoqaqogqmuw;
        goto yoackssggyiukquk;
        masyywacqueuqmgq:
        self::asimeyiqqkeawyoq();
        goto oqiyycgoiogemoes;
        swsqucqiewccgiuk:
        csoysmsiecqsoiss:
        goto uikwsekwsekqqieg;
        uikwsekwsekqqieg:
        oooussisqgggcaua:
        goto oisgwmkkeumoyigq;
        uoqqiuaqysmiimgu:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\151\144" => $aokagokqyuysuksm]));
        goto qcoykumuwgysoewo;
        waemqmkmioaucwcy:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\145\x63\150\157", true);
        goto wisagegqkywwycew;
        umcoewewouwwgwwo:
        caswcwsisomwyuoe:
        goto uoeksuocoiscuwom;
        oqiyycgoiogemoes:
        $eaoumsseceiowgsk->show_form();
        goto caiuegssgqocqoou;
        ikiymiceygwcysuq:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto masyywacqueuqmgq;
        caiuegssgqocqoou:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto gqigmewamcgquoqg;
        okqikeeiigwooqqu:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\144\151\166", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto swsqucqiewccgiuk;
        yoackssggyiukquk:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto imgssikcuusmegqq;
        iquqmweckeciauye:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto yumgwmaewkusyeig;
        saykkkmgucwiauqm:
        return $eaoumsseceiowgsk;
        goto eycqeyuoiicccoyc;
        ceeqsgoagsueoyqw:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            gooskwcomqmcaikc:
        }
        goto uyeqykaqeuuwwakq;
        iouwqegyciamycei:
        memsekycgguswasc:
        goto saykkkmgucwiauqm;
        uacyogkcoymicomk:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto memsekycgguswasc;
        }
        goto iquqmweckeciauye;
        uyeqykaqeuuwwakq:
        kmmgqmcikmqwguoc:
        goto iouwqegyciamycei;
        yumgwmaewkusyeig:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto ceeqsgoagsueoyqw;
        imgssikcuusmegqq:
        $eaoumsseceiowgsk = null;
        goto uacyogkcoymicomk;
        eycqeyuoiicccoyc:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto fommawgqgyucksqg;
        qsoesaysemiyeqam:
        kqeewuquwymmgkuk:
        goto esgweiiwaggqyssi;
        fommawgqgyucksqg:
        $sogksuscggsicmac = null;
        goto ckagmemuawawoiea;
        qaykmqcaiaqoemia:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto keiigcicaqummyyw;
            amggqcemagwskmcm:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto yemmmimewycgacke;
            keiigcicaqummyyw:
            if (is_array($ccamueccusigaaio)) {
                goto akcwucackkcwoqqm;
            }
            goto amggqcemagwskmcm;
            yemmmimewycgacke:
            goto uesauaikigwieyqa;
            goto ykwsoacemwimkmqe;
            ykwsoacemwimkmqe:
            akcwucackkcwoqqm:
            goto aeoimcysgcwaekqe;
            eeyqmmkgmucumosg:
            wqskmukeywsocaiu:
            goto iscwwmewqmgikukm;
            wuysakkwmqwqmusy:
            cquoyqoigoicqyyi:
            goto swgekwwyccscqcsk;
            swgekwwyccscqcsk:
            uesauaikigwieyqa:
            goto eeyqmmkgmucumosg;
            aeoimcysgcwaekqe:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                qmywkmasiqksiqik:
            }
            goto wuysakkwmqwqmusy;
            iscwwmewqmgikukm:
        }
        goto iaccmcoomkyomscs;
        eooycgwgyygmcmuu:
        wuaemamkwigigqsm:
        goto cgygmkeaueiwgmqk;
        eeguamkaugacsiky:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto gsgoqwyueokycimc;
        }
        goto osqiaawasseesgeu;
        qmscsiuiwaaeeoom:
        oqssqoagygwswmiq:
        goto acwocicyuosecagq;
        esgweiiwaggqyssi:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto qmkyoqkqcamsemeq;
        }
        goto gakgswamiwuiikwy;
        gwsquykmiyoueaem:
        gsgoqwyueokycimc:
        goto muqcakiqomgiouww;
        ckagmemuawawoiea:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto oqssqoagygwswmiq;
        }
        goto eeguamkaugacsiky;
        acwocicyuosecagq:
        if (!is_string($aiowsaccomcoikus)) {
            goto wuaemamkwigigqsm;
        }
        goto ocimkeagywsaisoi;
        eqgwasegeiumuiwk:
        goto wqgasgaukewquyau;
        goto gwsquykmiyoueaem;
        imuiggqqqussckae:
        wqgasgaukewquyau:
        goto qmscsiuiwaaeeoom;
        sakiquicymmmqoqw:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto kqeewuquwymmgkuk;
        }
        goto qaykmqcaiaqoemia;
        gakgswamiwuiikwy:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto wimgomkqmqqwgkco;
        cgygmkeaueiwgmqk:
        return $sogksuscggsicmac;
        goto icukugckqoqgiuws;
        iaccmcoomkyomscs:
        oimasmccamqaqymu:
        goto gsoqwsgmqqyyaygm;
        muqcakiqomgiouww:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto kmmqosikyuewwkgc;
        kukwiwysceakqikm:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto imuiggqqqussckae;
        gsoqwsgmqqyyaygm:
        
        goto qsoesaysemiyeqam;
        kmmqosikyuewwkgc:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto sakiquicymmmqoqw;
        osqiaawasseesgeu:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto eqgwasegeiumuiwk;
        ocimkeagywsaisoi:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto eooycgwgyygmcmuu;
        wimgomkqmqqwgkco:
        qmkyoqkqcamsemeq:
        goto kukwiwysceakqikm;
        icukugckqoqgiuws:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto ikcsaouaieccseqi;
        mocyksssaegycmey:
        qwwsykceiouooeau:
        goto nggwsegkqocuqeqk;
        ikcsaouaieccseqi:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto qcseosqqiqckoqws;
        nggwsegkqocuqeqk:
        return $ikgwqyuyckaewsow;
        goto uickeqcoyomssici;
        qcseosqqiqckoqws:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            cgokkieyawykgueo:
        }
        goto mocyksssaegycmey;
        uickeqcoyomssici:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto iisomisiocmgsuyw;
        oegywukowukugmiu:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto wososskoguokaqei;
            wososskoguokaqei:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto uemuqgqeiwcwscqs;
            uemuqgqeiwcwscqs:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\40{$iyqygqimawuycsyq}";
            goto qqmkagsyoaowquya;
            qqmkagsyoaowquya:
            cueusceyaaqiwkgc:
            goto eokggumwwwmgoioy;
            eokggumwwwmgoioy:
        }
        goto wceqqamckqyeuaqw;
        ceuiqusmmawsykea:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto eawaqosecwqaaqqe;
        eiiwooasmosecscs:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto cuisuaicowuooksy;
        eawaqosecwqaaqqe:
        $qiouiwasaauyaaue = [0 => __("\116\x6f\x20\114\151\x6d\151\x74", PR__CMN__FOUNDATION)];
        goto oegywukowukugmiu;
        iisomisiocmgsuyw:
        $sckumcuqemuukces = __("\155\151\156", PR__CMN__FOUNDATION);
        goto ggwwawgwoucowuyo;
        gkoeeqqmggqygwyw:
        return $aiowsaccomcoikus;
        goto uwugswmqgicawims;
        wceqqamckqyeuaqw:
        kwiemwkcogquuews:
        goto eiiwooasmosecscs;
        cuisuaicowuooksy:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto gkoeeqqmggqygwyw;
        ggwwawgwoucowuyo:
        $ygykagaqyuawwiyo = __("\x68\162", PR__CMN__FOUNDATION);
        goto ceuiqusmmawsykea;
        uwugswmqgicawims:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\154\141\x62\145\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto yemgiiosomcamyae;
        simuyqcsmiuiykim:
        return $ykiyyumywksqcisg;
        goto ikceueaaocmccgkc;
        yemgiiosomcamyae:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\x61\157\153\x61\147\x6f\153\x71\171\x75\171\163\165\153\163\x6d" => $uusmaiomayssaecw, "\x74\145\170\164" => $wkaqekwwgqsqwcoi]);
            gimsigcqasysqcoq:
        }
        goto cqskcaaagwgwmiya;
        cqskcaaagwgwmiya:
        ikukmsmyyikckikm:
        goto simuyqcsmiuiykim;
        ikceueaaocmccgkc:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto iekaceqmyeiaeckc;
        giiucgmqsqakyyau:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\x65\163\143\x61\x70\145\x64\x5f\151\x63\157\x6e\163\x5f\x64\x72\157\160\x64\x6f\167\x6e", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto eokggymayausyoiy;
        kcgucisscoiakqqs:
        ssgeagqeoeosoeei:
        goto aswkgqywucwyesou;
        sicwscwumksmqsku:
        goto eogoakwqsaomuygg;
        goto kcgucisscoiakqqs;
        yismkseqgqygcsuc:
        if (!$ykiyyumywksqcisg) {
            goto iwieeieuciqogska;
        }
        goto yoaskikikuasaowi;
        gmggkymmymiciwys:
        suuksqiggsoogugm:
        goto sicwscwumksmqsku;
        eokggymayausyoiy:
        uiwwywukcysqoqkg:
        goto uacmomqsimieooai;
        yyaksmygsgquwsec:
        if (!is_array($ykiyyumywksqcisg)) {
            goto suuksqiggsoogugm;
        }
        goto rwmmmmyeyiqguesa;
        agioaayyccacmayy:
        $ygogqywsaqoukoqy = [];
        goto gwkaucoeaqieesqc;
        rwmmmmyeyiqguesa:
        $mwaeiygkcuuqqgga = true;
        goto gmggkymmymiciwys;
        amwkckmmkweisiuk:
        return array_map("\x65\x73\x63\x5f\141\164\x74\x72", $ygogqywsaqoukoqy);
        goto cmygaeicigygyiws;
        wcuiwqqcksycgaos:
        if ($mwaeiygkcuuqqgga) {
            goto uiwwywukcysqoqkg;
        }
        goto giiucgmqsqakyyau;
        ggcccqcqwcuigcck:
        eogoakwqsaomuygg:
        goto yismkseqgqygcsuc;
        aswkgqywucwyesou:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto ggcccqcqwcuigcck;
        ymkwemoiaecikiwk:
        msqukekiockgmsme:
        goto wcuiwqqcksycgaos;
        memgwegygimsusma:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto ssgeagqeoeosoeei;
        }
        goto yyaksmygsgquwsec;
        yoaskikikuasaowi:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto aooaoguggyasagge;
            cyicqmoiqscscwya:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto uucoyymywsyuqeke;
            gswsickyiywowuqm:
            if ($mwaeiygkcuuqqgga) {
                goto ewcwuwuyyqggiago;
            }
            goto cyqkqseuausyusek;
            wcwakqcywmskawsg:
            ewcwuwuyyqggiago:
            goto cyicqmoiqscscwya;
            rwmqgyyueoeaimik:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto gswsickyiywowuqm;
            uucoyymywsyuqeke:
            ckqwwskgokgsmiqc:
            goto mqoyyykwyuayacou;
            sauyacymwesqauua:
            goto ckqwwskgokgsmiqc;
            goto wcwakqcywmskawsg;
            aooaoguggyasagge:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\x61\x73\163" => "\x69\143\157\x6e\55\x70\x72\x69\x6d\141\x72\x79"]);
            goto rwmqgyyueoeaimik;
            cyqkqseuausyusek:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto sauyacymwesqauua;
            mqoyyykwyuayacou:
            ycmwuecqmmgiskyk:
            goto iwwkscmcmisuuqmo;
            iwwkscmcmisuuqmo:
        }
        goto ymkwemoiaecikiwk;
        iekaceqmyeiaeckc:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto agioaayyccacmayy;
        uacmomqsimieooai:
        iwieeieuciqogska:
        goto amwkckmmkweisiuk;
        gwkaucoeaqieesqc:
        $mwaeiygkcuuqqgga = false;
        goto memgwegygimsusma;
        cmygaeicigygyiws:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto oequgyowkkssiiqs;
        wqasamwokmcayawg:
        if ($qoiwmokisgikggia) {
            goto cwaascimmcuekgws;
        }
        goto ckussqqwiokyqoco;
        oequgyowkkssiiqs:
        $qimgcsugeskcqeyc = "\167\150\x69\x74\x65";
        goto wqasamwokmcayawg;
        aayquskmqceamsgg:
        if (!(false !== strpos($qoiwmokisgikggia, "\x6c\x69\147\x68\164") || false !== strpos($qoiwmokisgikggia, "\x74\x65\x72\164\151\x61\x72\171") || false !== strpos($qoiwmokisgikggia, "\x71\165\x61\x74\145\162\x6e\x61\x72\x79") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto qcawuomoeekkekma;
        }
        goto yauuseeeaqyqwmug;
        yauuseeeaqyqwmug:
        $qimgcsugeskcqeyc = "\144\141\162\x6b";
        goto wkqgikkkmmwmwwgm;
        gygmwgucwuyoqiye:
        cwaascimmcuekgws:
        goto aayquskmqceamsgg;
        ckussqqwiokyqoco:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto gygmwgucwuyoqiye;
        wkqgikkkmmwmwwgm:
        qcawuomoeekkekma:
        goto imccymawgooqumwc;
        imccymawgooqumwc:
        return ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\x63\x6c\x61\163\x73" => "\x62\x67\55{$qoiwmokisgikggia}\x20\164\145\170\x74\55{$qimgcsugeskcqeyc}\40\164\x65\x78\x74\x2d\143\145\156\x74\145\x72\40\160\157\x73\151\x74\151\x6f\156\x2d\x61\142\163\157\154\165\164\x65\x20\167\55\61\60\60\x20\150\x2d\61\x30\x30\x20\x74\157\160\x2d\60\40\154\145\146\164\55\x30\40\162\x6f\165\x6e\144\145\144"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\163\163" => "\x6c\150\55\x6c\x67"]));
        goto uiukigcawkqkqgyy;
        uiukigcawkqkqgyy:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto ccqumwomwukegucm;
        ocaicikesocsgoag:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto uauqkwumkkqqmesy;
            scgucwgayiomwsqu:
            cqwcyykqggwgsiaw:
            goto musiqkgmwycoaguk;
            uauqkwumkkqqmesy:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto ikcskcwwcegkoeyy;
            ikcskcwwcegkoeyy:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto scgucwgayiomwsqu;
            musiqkgmwycoaguk:
        }
        goto ugwoqaioqkmegewk;
        uqockgyiaycuesmi:
        return $ukqisiguweqciuei;
        goto ywiwccokwsyckmyu;
        ugwoqaioqkmegewk:
        ieggmouaisogwcuu:
        goto uqockgyiaycuesmi;
        ccqumwomwukegucm:
        $ukqisiguweqciuei = ['' => __("\116\157\x6e\145", PR__CMN__FOUNDATION)];
        goto ocaicikesocsgoag;
        ywiwccokwsyckmyu:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto kgycewokaywkmaiq;
        eimwkwakqsagimiq:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\x6f\x6c\x6f\x72\x5f\144\x72\157\x70\x64\157\x77\x6e\x5f\x69\x74\145\155\163"), []);
        goto mmqygmmymswssgak;
        kgycewokaywkmaiq:
        if ($ukqisiguweqciuei) {
            goto weyuuecsicoyokwc;
        }
        goto eimwkwakqsagimiq;
        mcosskywgakgqkgo:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x70\x6b\x79\x79\141\147\145\167\x6b\151\x79\x63\153\155\x77\171" => $uusmaiomayssaecw, "\171\x71\147\x75\x75\143\141\x65\x65\x61\151\147\x61\171\147\161" => $qoiwmokisgikggia];
            wkoewioscwccmkyk:
        }
        goto ykeekemagwoeeuwk;
        mmqygmmymswssgak:
        weyuuecsicoyokwc:
        goto kcwcekkkmwskicqs;
        kcwcekkkmwskicqs:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto mcosskywgakgqkgo;
        csukqqcyukewowyu:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x43\157\x6c\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto csimuygeycgqmuwa;
        ykeekemagwoeeuwk:
        oomsucckcykayauy:
        goto csukqqcyukewowyu;
        csimuygeycgqmuwa:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto wiaiamgmiiiiowsu;
        kqamquasawismmyq:
        umkaksiuoaugusem:
        goto fisyqseiiseakuku;
        fisyqseiiseakuku:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto goyoeacyyikeigyo;
        ieqgkomksqsuoaaa:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto kqamquasawismmyq;
        yasyescomqgwccau:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\143\157\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ecgguiikaeeiwooi;
        ecgguiikaeeiwooi:
        if ($pacsomcuwcegguua) {
            goto umkaksiuoaugusem;
        }
        goto ieqgkomksqsuoaaa;
        wiaiamgmiiiiowsu:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto yasyescomqgwccau;
        goyoeacyyikeigyo:
        return $gmksciycsesoouoi;
        goto ociiyomqweeuyqaw;
        ociiyomqweeuyqaw:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto gmmqkkwsagswkwkm;
        gmmqkkwsagswkwkm:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto mkoukageucsqewms;
        ougeaoiicseiqwsi:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\111\x63\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ikiyswysiaqmeuam;
        mkoukageucsqewms:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\x70\153\171\171\141\147\145\x77\x6b\x69\x79\x63\x6b\x6d\x77\x79" => $uusmaiomayssaecw, "\x79\161\x67\165\165\x63\141\145\x65\x61\x69\x67\x61\171\x67\x71" => $wkaqekwwgqsqwcoi];
            ogggoiwaseooqyee:
        }
        goto qaogwawmaiqokycq;
        qaogwawmaiqokycq:
        oggeooaecikkokqy:
        goto ougeaoiicseiqwsi;
        ikiyswysiaqmeuam:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto mowkckamsoqiugqo;
        mowkckamsoqiugqo:
        if ($meqocwsecsywiiqs) {
            goto eqgiaawwcamuckce;
        }
        goto meowuayekqaqeggq;
        guikuyakqquuuwaq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto oeaggeimyssqskqy;
        qkyucemgwyyueywk:
        eqgiaawwcamuckce:
        goto guikuyakqquuuwaq;
        meowuayekqaqeggq:
        $meqocwsecsywiiqs = __("\x49\x63\157\156", PR__CMN__FOUNDATION);
        goto qkyucemgwyyueywk;
        oeaggeimyssqskqy:
    }
}
