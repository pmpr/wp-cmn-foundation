<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        goto sweoiiwceiqwkuao;
        kioowwygisuiwkmk:
        kauoikqowoeoeyaw:
        goto giiycgoccsyaqcyg;
        kseiwaqicoamaqoy:
        wiiymmquiymeygoe:
        goto ocuuyosqkeqwcima;
        sweoiiwceiqwkuao:
        $aiowsaccomcoikus = null;
        goto ioqssequcuseayyc;
        ocuuyosqkeqwcima:
        return $aiowsaccomcoikus;
        goto smmasacqsmkeauwc;
        mqokweusqkqwakmw:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto amuuyacmuasceoog;
        eiseqmycikmoeiom:
        ccgamisoqiigouye:
        goto omqwgiywimsmoaec;
        sqsqwmwwiwukccqo:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto ygsgoaecoskqsyqs;
            mgyiqoksoygoguya:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto ekoikoqkigaauoqc;
            cuyikgqsqwymuwem:
            qcqykequcgokomay:
            goto ysscsgaukqoycyga;
            kiaeuwkmumywykei:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto qigoakiooqiyqeou;
            }
            goto qckaywmcygiwiygs;
            imewokywqaacyowg:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto cuoksycuqykycike;
            ygsgoaecoskqsyqs:
            $wuyimwscukmqqsqk = true;
            goto kiaeuwkmumywykei;
            qckaywmcygiwiygs:
            $wuyimwscukmqqsqk = false;
            goto imewokywqaacyowg;
            ysscsgaukqoycyga:
            wsykmmiowmoisiwg:
            goto oqsaekyeiusqaiki;
            cuoksycuqykycike:
            qigoakiooqiyqeou:
            goto mgyiqoksoygoguya;
            ekoikoqkigaauoqc:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto msueyoiiiyskyswg;
                omcqsmseccqsckym:
                switch ($wsmeuqcsyguikoci) {
                    case "\143\157\x6c":
                        goto ceossuqockaiuecg;
                        uekcooqsuqkmkayi:
                        goto mqamggsomwomqkyq;
                        goto yqowauukqgsoucmg;
                        ceossuqockaiuecg:
                        $waaaiiqwsmggwsak = explode("\x20", $eqgoocgaqwqcimie);
                        goto yaiawiwigqoemyqm;
                        yaiawiwigqoemyqm:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto wkkykweqcekcuwqa;
                            wkkykweqcekcuwqa:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto mqkkicswmsaiyuic;
                            eewasogiegqkcaae:
                            mmwmuokmikccoaig:
                            goto immamiuusugcmuqk;
                            mqkkicswmsaiyuic:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto eewasogiegqkcaae;
                            immamiuusugcmuqk:
                        }
                        goto sgyogmaauquycqaa;
                        sgyogmaauquycqaa:
                        asgemimceqgyaewi:
                        goto uekcooqsuqkmkayi;
                        yqowauukqgsoucmg:
                    case "\151\x67\x6e\x6f\x72\141\x62\154\145":
                        goto gaagyqguomuaaqac;
                        ocosqqykmeikqycm:
                        qkeqcqsgessimeos:
                        goto ikykyueiiiiekmkq;
                        ikykyueiiiiekmkq:
                        goto mqamggsomwomqkyq;
                        goto wckceqoyawaeusuy;
                        gaagyqguomuaaqac:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\x76\141\x6c\x75\145\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\x69\x65\154\144\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x72\x65\x76\x65\162\x73\145", false));
                            sucwmosiwgasymic:
                        }
                        goto ocosqqykmeikqycm;
                        wckceqoyawaeusuy:
                    default:
                        goto keieieqewwgqcoia;
                        keieieqewwgqcoia:
                        if ($wuyimwscukmqqsqk) {
                            goto cwskuqkeauugauqu;
                        }
                        goto ugskaqyksuoawecc;
                        migagikgsqkwcqca:
                        goto qcwqmyukgscaigeq;
                        goto koqamsqgiomsceqq;
                        ugskaqyksuoawecc:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto migagikgsqkwcqca;
                        cyiogsuyagwgiuma:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto wyaayucwkugmakku;
                        koqamsqgiomsceqq:
                        cwskuqkeauugauqu:
                        goto cyiogsuyagwgiuma;
                        wyaayucwkugmakku:
                        qcwqmyukgscaigeq:
                        goto yyeugqugwkyagksm;
                        yyeugqugwkyagksm:
                }
                goto aeoywewiquusyamg;
                oyioqyigmkwuwuua:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto qeasguwmwomcioyy;
                }
                goto omcqsmseccqsckym;
                uiqkqauoskuseqku:
                goto qcqykequcgokomay;
                goto uoiysouwossowgsg;
                ieuecgaimowummkq:
                eoimqaiguyaqgome:
                goto cesmmckwemyiugwo;
                mkigueyysgcycqcs:
                mqamggsomwomqkyq:
                goto uiqkqauoskuseqku;
                aeoywewiquusyamg:
                owayewqwggkmqgqm:
                goto mkigueyysgcycqcs;
                uoiysouwossowgsg:
                qeasguwmwomcioyy:
                goto ieuecgaimowummkq;
                msueyoiiiyskyswg:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto oyioqyigmkwuwuua;
                cesmmckwemyiugwo:
            }
            goto cuyikgqsqwymuwem;
            oqsaekyeiusqaiki:
        }
        goto kioowwygisuiwkmk;
        amuuyacmuasceoog:
        switch ($sqeykgyoooqysmca) {
            case "\x68\164\155\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x68\x69\144\144\145\156":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x63\x68\x65\x63\x6b\x62\157\170":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\164\145\170\x74":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x74\145\170\x74\141\x72\x65\141":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x64\141\x74\145":
            case "\x64\x61\164\145\x74\x69\155\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\151\x63\157\x6e":
                goto swaokakkeggigiqi;
                wayycssguscgyuko:
                goto ccgamisoqiigouye;
                goto scakegmmqggqwysq;
                osymqmgcqqyomacw:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\151\x63\157\156\x73", IconFontawesomeInterface::class);
                goto keowumoqcaqsmqwa;
                cuwoscseqqwuiqem:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto wayycssguscgyuko;
                keowumoqcaqsmqwa:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\x61\x62\x65\x6c\163", []);
                goto cuwoscseqqwuiqem;
                swaokakkeggigiqi:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto osymqmgcqqyomacw;
                scakegmmqggqwysq:
            case "\x66\x69\154\145":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\163\145\x6c\145\143\x74":
            case "\x73\x65\x6c\145\143\x74\55\x32":
            case "\142\x73\x73\x65\x6c\145\143\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\163\145\154\145\x63\x74\55\162\157\154\145":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto ccgamisoqiigouye;
            case "\163\x65\x6c\145\143\164\x2d\160\x6f\x73\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto ccgamisoqiigouye;
            case "\x73\145\154\145\143\x74\55\165\163\x65\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto ccgamisoqiigouye;
            case "\x73\x65\x6c\145\143\x74\x2d\x69\x63\157\x6e\x2d\x73\151\x7a\145":
                goto uasseoesmyukoosc;
                ckagwqgeeamsacqq:
                meawswqmqouaeuou:
                goto myeogiaaukogiiqg;
                myeogiaaukogiiqg:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x69\x63\157\156\137\x73\x69\172\x65\x73"), []);
                goto ayqeeqsoekuuyaiq;
                uyiimywaiywogmeo:
                $ymqmyyeuycgmigyo = __("\111\x63\157\x6e\40\123\151\172\145", PR__CMN__FOUNDATION);
                goto ckagwqgeeamsacqq;
                qmqiyacuyoscwuak:
                goto ccgamisoqiigouye;
                goto ogiiukgqwuyeyiqo;
                uasseoesmyukoosc:
                if ($ymqmyyeuycgmigyo) {
                    goto meawswqmqouaeuou;
                }
                goto uyiimywaiywogmeo;
                ayqeeqsoekuuyaiq:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto qmqiyacuyoscwuak;
                ogiiukgqwuyeyiqo:
        }
        goto kmoseqyccceksags;
        gaymoimsoqmkkcio:
        $ciagusimogciiumg = ["\x61\x64\144", "\x73\x65\x74", ''];
        goto sqsqwmwwiwukccqo;
        kkgkueoqokwuyyqc:
        if (!is_array($ywmkwiwkosakssii)) {
            goto gyykicucayuwysqu;
        }
        goto gsqokscmqccqioog;
        umieiuyswauuyeww:
        if (!$aokagokqyuysuksm) {
            goto wiiymmquiymeygoe;
        }
        goto liyqekcciiuuqasi;
        giiycgoccsyaqcyg:
        gyykicucayuwysqu:
        goto wckowwygqqukeqgk;
        liyqekcciiuuqasi:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto mqokweusqkqwakmw;
        ewmcauccuggcigme:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto umieiuyswauuyeww;
        kmoseqyccceksags:
        myoqkkuiequicmym:
        goto eiseqmycikmoeiom;
        omqwgiywimsmoaec:
        if (!$aiowsaccomcoikus) {
            goto cckaaosgusoowiqm;
        }
        goto kkgkueoqokwuyyqc;
        ioqssequcuseayyc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto ewmcauccuggcigme;
        gsqokscmqccqioog:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\x64", "\x74\x79\x70\145", "\156\141\x6d\x65"]);
        goto gaymoimsoqmkkcio;
        wckowwygqqukeqgk:
        cckaaosgusoowiqm:
        goto kseiwaqicoamaqoy;
        smmasacqsmkeauwc:
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
        goto qaucmoeewcagkmsy;
        qaucmoeewcagkmsy:
        CMB2_JS::enqueue();
        goto aquaysowoigawawe;
        osaummwikmkmekys:
        CMB2_hookup::enqueue_cmb_css();
        goto imwckieoaqoqqqyi;
        aquaysowoigawawe:
        CMB2_hookup::enqueue_cmb_js();
        goto osaummwikmkmekys;
        imwckieoaqoqqqyi:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto caswcwsisomwyuoe;
        swsqucqiewccgiuk:
        csoysmsiecqsoiss:
        goto uikwsekwsekqqieg;
        gqigmewamcgquoqg:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\x6c\x61\x73\163", "\x66\157\162\155\55\x63\157\156\x74\141\151\156\x65\162");
        goto qmgewyssegcgqsyc;
        omymmwgqumuugieq:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\x69\144" => $aokagokqyuysuksm]));
        goto uoqqiuaqysmiimgu;
        oisgwmkkeumoyigq:
        echo $nsmgceoqaqogqmuw;
        goto koiuymoiquiegggc;
        koiuymoiquiegggc:
        oooussisqgggcaua:
        goto umcoewewouwwgwwo;
        uoqqiuaqysmiimgu:
        ob_start();
        goto qcoykumuwgysoewo;
        waemqmkmioaucwcy:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\x70\141\x72\x65\156\164", false);
        goto wisagegqkywwycew;
        qcoykumuwgysoewo:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto ikiymiceygwcysuq;
        uikwsekwsekqqieg:
        if (!$koaqeegoeiaiccse) {
            goto oooussisqgggcaua;
        }
        goto oisgwmkkeumoyigq;
        wgguwusmimcskmym:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\151\144", ManipulateString::uniqid(5));
        goto oociqkqiawuqqksy;
        caswcwsisomwyuoe:
        $nsmgceoqaqogqmuw = '';
        goto wgguwusmimcskmym;
        umcoewewouwwgwwo:
        return $nsmgceoqaqogqmuw;
        goto uoeksuocoiscuwom;
        okqikeeiigwooqqu:
        gugumscsyciuscus:
        goto swsqucqiewccgiuk;
        caiuegssgqocqoou:
        if (!$omwmuycmeqcqokom) {
            goto gugumscsyciuscus;
        }
        goto gqigmewamcgquoqg;
        wisagegqkywwycew:
        if (!$ikgwqyuyckaewsow) {
            goto csoysmsiecqsoiss;
        }
        goto omymmwgqumuugieq;
        qmgewyssegcgqsyc:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\144\x69\166", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto okqikeeiigwooqqu;
        masyywacqueuqmgq:
        $eaoumsseceiowgsk->show_form();
        goto oqiyycgoiogemoes;
        ikiymiceygwcysuq:
        self::asimeyiqqkeawyoq();
        goto masyywacqueuqmgq;
        oociqkqiawuqqksy:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\145\143\150\x6f", true);
        goto waemqmkmioaucwcy;
        oqiyycgoiogemoes:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto caiuegssgqocqoou;
        uoeksuocoiscuwom:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto memsekycgguswasc;
        iouwqegyciamycei:
        return $eaoumsseceiowgsk;
        goto saykkkmgucwiauqm;
        uacyogkcoymicomk:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto iquqmweckeciauye;
        uyeqykaqeuuwwakq:
        gooskwcomqmcaikc:
        goto iouwqegyciamycei;
        imgssikcuusmegqq:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto gooskwcomqmcaikc;
        }
        goto uacyogkcoymicomk;
        yumgwmaewkusyeig:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            kmmgqmcikmqwguoc:
        }
        goto ceeqsgoagsueoyqw;
        iquqmweckeciauye:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto yumgwmaewkusyeig;
        memsekycgguswasc:
        $eaoumsseceiowgsk = null;
        goto imgssikcuusmegqq;
        ceeqsgoagsueoyqw:
        yoackssggyiukquk:
        goto uyeqykaqeuuwwakq;
        saykkkmgucwiauqm:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto wuaemamkwigigqsm;
        fommawgqgyucksqg:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto wqgasgaukewquyau;
        }
        goto ckagmemuawawoiea;
        qsoesaysemiyeqam:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto kqeewuquwymmgkuk;
        }
        goto esgweiiwaggqyssi;
        osqiaawasseesgeu:
        goto gsgoqwyueokycimc;
        goto eqgwasegeiumuiwk;
        eqgwasegeiumuiwk:
        qmkyoqkqcamsemeq:
        goto gwsquykmiyoueaem;
        wimgomkqmqqwgkco:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto kukwiwysceakqikm;
        wuaemamkwigigqsm:
        $sogksuscggsicmac = null;
        goto fommawgqgyucksqg;
        acwocicyuosecagq:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto ocimkeagywsaisoi;
        kmmqosikyuewwkgc:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto iscwwmewqmgikukm;
        }
        goto sakiquicymmmqoqw;
        gwsquykmiyoueaem:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto muqcakiqomgiouww;
        sakiquicymmmqoqw:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto uesauaikigwieyqa;
            yemmmimewycgacke:
            qmywkmasiqksiqik:
            goto ykwsoacemwimkmqe;
            wuysakkwmqwqmusy:
            akcwucackkcwoqqm:
            goto swgekwwyccscqcsk;
            swgekwwyccscqcsk:
            oimasmccamqaqymu:
            goto eeyqmmkgmucumosg;
            aeoimcysgcwaekqe:
            wqskmukeywsocaiu:
            goto wuysakkwmqwqmusy;
            ykwsoacemwimkmqe:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                cquoyqoigoicqyyi:
            }
            goto aeoimcysgcwaekqe;
            uesauaikigwieyqa:
            if (is_array($ccamueccusigaaio)) {
                goto qmywkmasiqksiqik;
            }
            goto keiigcicaqummyyw;
            keiigcicaqummyyw:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto amggqcemagwskmcm;
            amggqcemagwskmcm:
            goto akcwucackkcwoqqm;
            goto yemmmimewycgacke;
            eeyqmmkgmucumosg:
        }
        goto qaykmqcaiaqoemia;
        qaykmqcaiaqoemia:
        eycqeyuoiicccoyc:
        goto iaccmcoomkyomscs;
        esgweiiwaggqyssi:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto gakgswamiwuiikwy;
        imuiggqqqussckae:
        wqgasgaukewquyau:
        goto qmscsiuiwaaeeoom;
        ocimkeagywsaisoi:
        oqssqoagygwswmiq:
        goto eooycgwgyygmcmuu;
        gakgswamiwuiikwy:
        kqeewuquwymmgkuk:
        goto wimgomkqmqqwgkco;
        eeguamkaugacsiky:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto osqiaawasseesgeu;
        eooycgwgyygmcmuu:
        return $sogksuscggsicmac;
        goto cgygmkeaueiwgmqk;
        ckagmemuawawoiea:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto qmkyoqkqcamsemeq;
        }
        goto eeguamkaugacsiky;
        qmscsiuiwaaeeoom:
        if (!is_string($aiowsaccomcoikus)) {
            goto oqssqoagygwswmiq;
        }
        goto acwocicyuosecagq;
        kukwiwysceakqikm:
        gsgoqwyueokycimc:
        goto imuiggqqqussckae;
        muqcakiqomgiouww:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto kmmqosikyuewwkgc;
        iaccmcoomkyomscs:
        
        goto gsoqwsgmqqyyaygm;
        gsoqwsgmqqyyaygm:
        iscwwmewqmgikukm:
        goto qsoesaysemiyeqam;
        cgygmkeaueiwgmqk:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto cgokkieyawykgueo;
        qcseosqqiqckoqws:
        icukugckqoqgiuws:
        goto mocyksssaegycmey;
        ikcsaouaieccseqi:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            qwwsykceiouooeau:
        }
        goto qcseosqqiqckoqws;
        mocyksssaegycmey:
        return $ikgwqyuyckaewsow;
        goto nggwsegkqocuqeqk;
        cgokkieyawykgueo:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ikcsaouaieccseqi;
        nggwsegkqocuqeqk:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto eokggumwwwmgoioy;
        eawaqosecwqaaqqe:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto cueusceyaaqiwkgc;
            uemuqgqeiwcwscqs:
            kwiemwkcogquuews:
            goto qqmkagsyoaowquya;
            wososskoguokaqei:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\x20{$iyqygqimawuycsyq}";
            goto uemuqgqeiwcwscqs;
            cueusceyaaqiwkgc:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto wososskoguokaqei;
            qqmkagsyoaowquya:
        }
        goto oegywukowukugmiu;
        ceuiqusmmawsykea:
        $qiouiwasaauyaaue = [0 => __("\x4e\157\40\114\x69\x6d\x69\164", PR__CMN__FOUNDATION)];
        goto eawaqosecwqaaqqe;
        ggwwawgwoucowuyo:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto ceuiqusmmawsykea;
        wceqqamckqyeuaqw:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto eiiwooasmosecscs;
        oegywukowukugmiu:
        uickeqcoyomssici:
        goto wceqqamckqyeuaqw;
        cuisuaicowuooksy:
        return $aiowsaccomcoikus;
        goto gkoeeqqmggqygwyw;
        eiiwooasmosecscs:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto cuisuaicowuooksy;
        iisomisiocmgsuyw:
        $ygykagaqyuawwiyo = __("\x68\162", PR__CMN__FOUNDATION);
        goto ggwwawgwoucowuyo;
        eokggumwwwmgoioy:
        $sckumcuqemuukces = __("\155\151\156", PR__CMN__FOUNDATION);
        goto iisomisiocmgsuyw;
        gkoeeqqmggqygwyw:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\x6c\141\142\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto gimsigcqasysqcoq;
        gimsigcqasysqcoq:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\151\144" => $uusmaiomayssaecw, "\x74\x65\x78\164" => $wkaqekwwgqsqwcoi]);
            ikukmsmyyikckikm:
        }
        goto yemgiiosomcamyae;
        yemgiiosomcamyae:
        uwugswmqgicawims:
        goto cqskcaaagwgwmiya;
        cqskcaaagwgwmiya:
        return $ykiyyumywksqcisg;
        goto simuyqcsmiuiykim;
        simuyqcsmiuiykim:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto iwieeieuciqogska;
        yoaskikikuasaowi:
        eogoakwqsaomuygg:
        goto ymkwemoiaecikiwk;
        iwieeieuciqogska:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto iekaceqmyeiaeckc;
        gwkaucoeaqieesqc:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto suuksqiggsoogugm;
        }
        goto memgwegygimsusma;
        yyaksmygsgquwsec:
        $mwaeiygkcuuqqgga = true;
        goto rwmmmmyeyiqguesa;
        wcuiwqqcksycgaos:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\x65\163\x63\141\160\x65\144\x5f\151\143\157\x6e\163\137\x64\x72\x6f\160\x64\157\x77\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto giiucgmqsqakyyau;
        yismkseqgqygcsuc:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto ckqwwskgokgsmiqc;
            ckqwwskgokgsmiqc:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\x73\x73" => "\x69\x63\x6f\156\x2d\x70\162\151\155\x61\x72\x79"]);
            goto aooaoguggyasagge;
            gswsickyiywowuqm:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto cyqkqseuausyusek;
            sauyacymwesqauua:
            ycmwuecqmmgiskyk:
            goto wcwakqcywmskawsg;
            cyqkqseuausyusek:
            goto ewcwuwuyyqggiago;
            goto sauyacymwesqauua;
            rwmqgyyueoeaimik:
            if ($mwaeiygkcuuqqgga) {
                goto ycmwuecqmmgiskyk;
            }
            goto gswsickyiywowuqm;
            aooaoguggyasagge:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto rwmqgyyueoeaimik;
            uucoyymywsyuqeke:
            msqukekiockgmsme:
            goto mqoyyykwyuayacou;
            wcwakqcywmskawsg:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto cyicqmoiqscscwya;
            cyicqmoiqscscwya:
            ewcwuwuyyqggiago:
            goto uucoyymywsyuqeke;
            mqoyyykwyuayacou:
        }
        goto yoaskikikuasaowi;
        ggcccqcqwcuigcck:
        if (!$ykiyyumywksqcisg) {
            goto uiwwywukcysqoqkg;
        }
        goto yismkseqgqygcsuc;
        eokggymayausyoiy:
        uiwwywukcysqoqkg:
        goto uacmomqsimieooai;
        memgwegygimsusma:
        if (!is_array($ykiyyumywksqcisg)) {
            goto ikceueaaocmccgkc;
        }
        goto yyaksmygsgquwsec;
        gmggkymmymiciwys:
        goto ssgeagqeoeosoeei;
        goto sicwscwumksmqsku;
        rwmmmmyeyiqguesa:
        ikceueaaocmccgkc:
        goto gmggkymmymiciwys;
        uacmomqsimieooai:
        return array_map("\x65\163\143\137\141\164\x74\162", $ygogqywsaqoukoqy);
        goto amwkckmmkweisiuk;
        giiucgmqsqakyyau:
        iwwkscmcmisuuqmo:
        goto eokggymayausyoiy;
        aswkgqywucwyesou:
        ssgeagqeoeosoeei:
        goto ggcccqcqwcuigcck;
        sicwscwumksmqsku:
        suuksqiggsoogugm:
        goto kcgucisscoiakqqs;
        agioaayyccacmayy:
        $mwaeiygkcuuqqgga = false;
        goto gwkaucoeaqieesqc;
        ymkwemoiaecikiwk:
        if ($mwaeiygkcuuqqgga) {
            goto iwwkscmcmisuuqmo;
        }
        goto wcuiwqqcksycgaos;
        iekaceqmyeiaeckc:
        $ygogqywsaqoukoqy = [];
        goto agioaayyccacmayy;
        kcgucisscoiakqqs:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto aswkgqywucwyesou;
        amwkckmmkweisiuk:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto qcawuomoeekkekma;
        ckussqqwiokyqoco:
        cmygaeicigygyiws:
        goto gygmwgucwuyoqiye;
        wqasamwokmcayawg:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto ckussqqwiokyqoco;
        gygmwgucwuyoqiye:
        if (!(false !== strpos($qoiwmokisgikggia, "\154\151\x67\150\164") || false !== strpos($qoiwmokisgikggia, "\164\145\162\x74\151\141\162\171") || false !== strpos($qoiwmokisgikggia, "\x71\165\x61\x74\x65\162\156\x61\x72\171") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto cwaascimmcuekgws;
        }
        goto aayquskmqceamsgg;
        oequgyowkkssiiqs:
        if ($qoiwmokisgikggia) {
            goto cmygaeicigygyiws;
        }
        goto wqasamwokmcayawg;
        yauuseeeaqyqwmug:
        cwaascimmcuekgws:
        goto wkqgikkkmmwmwwgm;
        qcawuomoeekkekma:
        $qimgcsugeskcqeyc = "\x77\x68\151\164\x65";
        goto oequgyowkkssiiqs;
        wkqgikkkmmwmwwgm:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\x76", ["\143\154\141\x73\x73" => "\142\x67\x2d{$qoiwmokisgikggia}\40\164\x65\170\164\55{$qimgcsugeskcqeyc}\x20\164\x65\170\x74\x2d\x63\145\156\164\x65\x72\40\160\157\163\151\164\x69\x6f\x6e\55\141\142\x73\157\154\165\164\x65\40\167\x2d\61\x30\x30\x20\150\x2d\x31\x30\60\x20\164\x6f\x70\x2d\x30\40\154\145\146\164\55\60\40\162\157\x75\x6e\144\x65\144"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\x6c\141\x73\x73" => "\154\150\55\x6c\147"]));
        goto imccymawgooqumwc;
        aayquskmqceamsgg:
        $qimgcsugeskcqeyc = "\144\x61\162\153";
        goto yauuseeeaqyqwmug;
        imccymawgooqumwc:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto musiqkgmwycoaguk;
        ugwoqaioqkmegewk:
        return $ukqisiguweqciuei;
        goto uqockgyiaycuesmi;
        ccqumwomwukegucm:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto cqwcyykqggwgsiaw;
            uauqkwumkkqqmesy:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto ikcskcwwcegkoeyy;
            ikcskcwwcegkoeyy:
            ieggmouaisogwcuu:
            goto scgucwgayiomwsqu;
            cqwcyykqggwgsiaw:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto uauqkwumkkqqmesy;
            scgucwgayiomwsqu:
        }
        goto ocaicikesocsgoag;
        musiqkgmwycoaguk:
        $ukqisiguweqciuei = ['' => __("\116\157\156\x65", PR__CMN__FOUNDATION)];
        goto ccqumwomwukegucm;
        ocaicikesocsgoag:
        uiukigcawkqkqgyy:
        goto ugwoqaioqkmegewk;
        uqockgyiaycuesmi:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto wkoewioscwccmkyk;
        ykeekemagwoeeuwk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\103\x6f\154\157\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto csukqqcyukewowyu;
        kgycewokaywkmaiq:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\157\154\x6f\x72\137\144\162\157\160\x64\x6f\x77\x6e\x5f\151\x74\145\x6d\x73"), []);
        goto eimwkwakqsagimiq;
        mcosskywgakgqkgo:
        weyuuecsicoyokwc:
        goto ykeekemagwoeeuwk;
        eimwkwakqsagimiq:
        ywiwccokwsyckmyu:
        goto mmqygmmymswssgak;
        kcwcekkkmwskicqs:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x6c\141\142\x65\154" => $uusmaiomayssaecw, "\144\141\x74\141\x2d\x63\157\x6e\x74\145\x6e\164" => $qoiwmokisgikggia];
            oomsucckcykayauy:
        }
        goto mcosskywgakgqkgo;
        mmqygmmymswssgak:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto kcwcekkkmwskicqs;
        wkoewioscwccmkyk:
        if ($ukqisiguweqciuei) {
            goto ywiwccokwsyckmyu;
        }
        goto kgycewokaywkmaiq;
        csukqqcyukewowyu:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto umkaksiuoaugusem;
        ieqgkomksqsuoaaa:
        csimuygeycgqmuwa:
        goto kqamquasawismmyq;
        fisyqseiiseakuku:
        return $gmksciycsesoouoi;
        goto goyoeacyyikeigyo;
        umkaksiuoaugusem:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto wiaiamgmiiiiowsu;
        kqamquasawismmyq:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto fisyqseiiseakuku;
        wiaiamgmiiiiowsu:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\143\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto yasyescomqgwccau;
        yasyescomqgwccau:
        if ($pacsomcuwcegguua) {
            goto csimuygeycgqmuwa;
        }
        goto ecgguiikaeeiwooi;
        ecgguiikaeeiwooi:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto ieqgkomksqsuoaaa;
        goyoeacyyikeigyo:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto ogggoiwaseooqyee;
        mkoukageucsqewms:
        ociiyomqweeuyqaw:
        goto qaogwawmaiqokycq;
        gmmqkkwsagswkwkm:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\x6c\141\x62\x65\x6c" => $uusmaiomayssaecw, "\x64\x61\x74\141\x2d\x63\x6f\x6e\x74\145\x6e\164" => $wkaqekwwgqsqwcoi];
            oggeooaecikkokqy:
        }
        goto mkoukageucsqewms;
        ogggoiwaseooqyee:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto gmmqkkwsagswkwkm;
        qaogwawmaiqokycq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\111\x63\x6f\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ougeaoiicseiqwsi;
        ougeaoiicseiqwsi:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto eqgiaawwcamuckce;
        mowkckamsoqiugqo:
        $meqocwsecsywiiqs = __("\x49\x63\x6f\156", PR__CMN__FOUNDATION);
        goto meowuayekqaqeggq;
        qkyucemgwyyueywk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto guikuyakqquuuwaq;
        meowuayekqaqeggq:
        ikiyswysiaqmeuam:
        goto qkyucemgwyyueywk;
        eqgiaawwcamuckce:
        if ($meqocwsecsywiiqs) {
            goto ikiyswysiaqmeuam;
        }
        goto mowkckamsoqiugqo;
        guikuyakqquuuwaq:
    }
}
