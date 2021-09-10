<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        mqokweusqkqwakmw:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto amuuyacmuasceoog;
        wckowwygqqukeqgk:
        cckaaosgusoowiqm:
        goto kseiwaqicoamaqoy;
        ocuuyosqkeqwcima:
        return $aiowsaccomcoikus;
        goto smmasacqsmkeauwc;
        amuuyacmuasceoog:
        switch ($sqeykgyoooqysmca) {
            case "\x68\164\155\x6c":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x68\x69\x64\x64\145\x6e":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x63\150\145\x63\153\x62\157\x78":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\164\145\x78\164":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x74\145\170\x74\141\162\145\x61":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x64\141\x74\145":
            case "\x64\x61\164\145\164\x69\x6d\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x69\x63\157\x6e":
                goto swaokakkeggigiqi;
                cuwoscseqqwuiqem:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto wayycssguscgyuko;
                wayycssguscgyuko:
                goto ccgamisoqiigouye;
                goto scakegmmqggqwysq;
                swaokakkeggigiqi:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto osymqmgcqqyomacw;
                osymqmgcqqyomacw:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\x69\143\157\156\163", IconFontawesomeInterface::class);
                goto keowumoqcaqsmqwa;
                keowumoqcaqsmqwa:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\141\142\145\x6c\163", []);
                goto cuwoscseqqwuiqem;
                scakegmmqggqwysq:
            case "\146\x69\x6c\145":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x73\x65\x6c\x65\143\164":
            case "\x73\145\154\145\143\x74\x2d\x32":
            case "\142\x73\163\x65\x6c\x65\143\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\163\145\x6c\145\143\x74\55\162\x6f\154\x65":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto ccgamisoqiigouye;
            case "\x73\145\x6c\x65\x63\164\55\x70\x6f\x73\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto ccgamisoqiigouye;
            case "\x73\x65\x6c\145\x63\x74\55\x75\x73\145\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto ccgamisoqiigouye;
            case "\163\145\x6c\x65\143\164\55\151\x63\157\x6e\55\163\x69\x7a\x65":
                goto uasseoesmyukoosc;
                myeogiaaukogiiqg:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x69\143\157\156\137\x73\151\x7a\x65\163"), []);
                goto ayqeeqsoekuuyaiq;
                uyiimywaiywogmeo:
                $ymqmyyeuycgmigyo = __("\x49\143\157\x6e\x20\x53\151\x7a\145", PR__CMN__FOUNDATION);
                goto ckagwqgeeamsacqq;
                uasseoesmyukoosc:
                if ($ymqmyyeuycgmigyo) {
                    goto meawswqmqouaeuou;
                }
                goto uyiimywaiywogmeo;
                ckagwqgeeamsacqq:
                meawswqmqouaeuou:
                goto myeogiaaukogiiqg;
                qmqiyacuyoscwuak:
                goto ccgamisoqiigouye;
                goto ogiiukgqwuyeyiqo;
                ayqeeqsoekuuyaiq:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto qmqiyacuyoscwuak;
                ogiiukgqwuyeyiqo:
        }
        goto kmoseqyccceksags;
        giiycgoccsyaqcyg:
        gyykicucayuwysqu:
        goto wckowwygqqukeqgk;
        gsqokscmqccqioog:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\x64", "\164\171\x70\145", "\156\x61\x6d\x65"]);
        goto gaymoimsoqmkkcio;
        kseiwaqicoamaqoy:
        wiiymmquiymeygoe:
        goto ocuuyosqkeqwcima;
        sqsqwmwwiwukccqo:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto ygsgoaecoskqsyqs;
            cuyikgqsqwymuwem:
            qcqykequcgokomay:
            goto ysscsgaukqoycyga;
            imewokywqaacyowg:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto cuoksycuqykycike;
            mgyiqoksoygoguya:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto ekoikoqkigaauoqc;
            qckaywmcygiwiygs:
            $wuyimwscukmqqsqk = false;
            goto imewokywqaacyowg;
            ysscsgaukqoycyga:
            wsykmmiowmoisiwg:
            goto oqsaekyeiusqaiki;
            kiaeuwkmumywykei:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto qigoakiooqiyqeou;
            }
            goto qckaywmcygiwiygs;
            cuoksycuqykycike:
            qigoakiooqiyqeou:
            goto mgyiqoksoygoguya;
            ygsgoaecoskqsyqs:
            $wuyimwscukmqqsqk = true;
            goto kiaeuwkmumywykei;
            ekoikoqkigaauoqc:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto msueyoiiiyskyswg;
                mkigueyysgcycqcs:
                mqamggsomwomqkyq:
                goto uiqkqauoskuseqku;
                uiqkqauoskuseqku:
                goto qcqykequcgokomay;
                goto uoiysouwossowgsg;
                uoiysouwossowgsg:
                qeasguwmwomcioyy:
                goto ieuecgaimowummkq;
                omcqsmseccqsckym:
                switch ($wsmeuqcsyguikoci) {
                    case "\143\x6f\x6c":
                        goto ceossuqockaiuecg;
                        sgyogmaauquycqaa:
                        asgemimceqgyaewi:
                        goto uekcooqsuqkmkayi;
                        ceossuqockaiuecg:
                        $waaaiiqwsmggwsak = explode("\x20", $eqgoocgaqwqcimie);
                        goto yaiawiwigqoemyqm;
                        uekcooqsuqkmkayi:
                        goto mqamggsomwomqkyq;
                        goto yqowauukqgsoucmg;
                        yaiawiwigqoemyqm:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto wkkykweqcekcuwqa;
                            mqkkicswmsaiyuic:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto eewasogiegqkcaae;
                            wkkykweqcekcuwqa:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto mqkkicswmsaiyuic;
                            eewasogiegqkcaae:
                            mmwmuokmikccoaig:
                            goto immamiuusugcmuqk;
                            immamiuusugcmuqk:
                        }
                        goto sgyogmaauquycqaa;
                        yqowauukqgsoucmg:
                    case "\x69\147\x6e\157\x72\141\142\x6c\x65":
                        goto gaagyqguomuaaqac;
                        ocosqqykmeikqycm:
                        qkeqcqsgessimeos:
                        goto ikykyueiiiiekmkq;
                        ikykyueiiiiekmkq:
                        goto mqamggsomwomqkyq;
                        goto wckceqoyawaeusuy;
                        gaagyqguomuaaqac:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\166\141\x6c\165\145\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\151\145\154\x64\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\162\x65\166\145\162\163\x65", false));
                            sucwmosiwgasymic:
                        }
                        goto ocosqqykmeikqycm;
                        wckceqoyawaeusuy:
                    default:
                        goto keieieqewwgqcoia;
                        migagikgsqkwcqca:
                        goto qcwqmyukgscaigeq;
                        goto koqamsqgiomsceqq;
                        ugskaqyksuoawecc:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto migagikgsqkwcqca;
                        koqamsqgiomsceqq:
                        cwskuqkeauugauqu:
                        goto cyiogsuyagwgiuma;
                        keieieqewwgqcoia:
                        if ($wuyimwscukmqqsqk) {
                            goto cwskuqkeauugauqu;
                        }
                        goto ugskaqyksuoawecc;
                        cyiogsuyagwgiuma:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto wyaayucwkugmakku;
                        wyaayucwkugmakku:
                        qcwqmyukgscaigeq:
                        goto yyeugqugwkyagksm;
                        yyeugqugwkyagksm:
                }
                goto aeoywewiquusyamg;
                aeoywewiquusyamg:
                owayewqwggkmqgqm:
                goto mkigueyysgcycqcs;
                ieuecgaimowummkq:
                eoimqaiguyaqgome:
                goto cesmmckwemyiugwo;
                msueyoiiiyskyswg:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto oyioqyigmkwuwuua;
                oyioqyigmkwuwuua:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto qeasguwmwomcioyy;
                }
                goto omcqsmseccqsckym;
                cesmmckwemyiugwo:
            }
            goto cuyikgqsqwymuwem;
            oqsaekyeiusqaiki:
        }
        goto kioowwygisuiwkmk;
        omqwgiywimsmoaec:
        if (!$aiowsaccomcoikus) {
            goto cckaaosgusoowiqm;
        }
        goto kkgkueoqokwuyyqc;
        eiseqmycikmoeiom:
        ccgamisoqiigouye:
        goto omqwgiywimsmoaec;
        kmoseqyccceksags:
        myoqkkuiequicmym:
        goto eiseqmycikmoeiom;
        ewmcauccuggcigme:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto umieiuyswauuyeww;
        kkgkueoqokwuyyqc:
        if (!is_array($ywmkwiwkosakssii)) {
            goto gyykicucayuwysqu;
        }
        goto gsqokscmqccqioog;
        ioqssequcuseayyc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto ewmcauccuggcigme;
        gaymoimsoqmkkcio:
        $ciagusimogciiumg = ["\141\144\144", "\x73\145\164", ''];
        goto sqsqwmwwiwukccqo;
        liyqekcciiuuqasi:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto mqokweusqkqwakmw;
        umieiuyswauuyeww:
        if (!$aokagokqyuysuksm) {
            goto wiiymmquiymeygoe;
        }
        goto liyqekcciiuuqasi;
        sweoiiwceiqwkuao:
        $aiowsaccomcoikus = null;
        goto ioqssequcuseayyc;
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
        aquaysowoigawawe:
        CMB2_hookup::enqueue_cmb_js();
        goto osaummwikmkmekys;
        osaummwikmkmekys:
        CMB2_hookup::enqueue_cmb_css();
        goto imwckieoaqoqqqyi;
        qaucmoeewcagkmsy:
        CMB2_JS::enqueue();
        goto aquaysowoigawawe;
        imwckieoaqoqqqyi:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto caswcwsisomwyuoe;
        caswcwsisomwyuoe:
        $nsmgceoqaqogqmuw = '';
        goto wgguwusmimcskmym;
        oisgwmkkeumoyigq:
        echo $nsmgceoqaqogqmuw;
        goto koiuymoiquiegggc;
        uikwsekwsekqqieg:
        if (!$koaqeegoeiaiccse) {
            goto oooussisqgggcaua;
        }
        goto oisgwmkkeumoyigq;
        oqiyycgoiogemoes:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto caiuegssgqocqoou;
        qmgewyssegcgqsyc:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x64\x69\166", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto okqikeeiigwooqqu;
        uoqqiuaqysmiimgu:
        ob_start();
        goto qcoykumuwgysoewo;
        omymmwgqumuugieq:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\151\x64" => $aokagokqyuysuksm]));
        goto uoqqiuaqysmiimgu;
        qcoykumuwgysoewo:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto ikiymiceygwcysuq;
        umcoewewouwwgwwo:
        return $nsmgceoqaqogqmuw;
        goto uoeksuocoiscuwom;
        oociqkqiawuqqksy:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\x65\143\150\157", true);
        goto waemqmkmioaucwcy;
        masyywacqueuqmgq:
        $eaoumsseceiowgsk->show_form();
        goto oqiyycgoiogemoes;
        caiuegssgqocqoou:
        if (!$omwmuycmeqcqokom) {
            goto gugumscsyciuscus;
        }
        goto gqigmewamcgquoqg;
        okqikeeiigwooqqu:
        gugumscsyciuscus:
        goto swsqucqiewccgiuk;
        wisagegqkywwycew:
        if (!$ikgwqyuyckaewsow) {
            goto csoysmsiecqsoiss;
        }
        goto omymmwgqumuugieq;
        koiuymoiquiegggc:
        oooussisqgggcaua:
        goto umcoewewouwwgwwo;
        waemqmkmioaucwcy:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\x70\141\x72\x65\x6e\x74", false);
        goto wisagegqkywwycew;
        wgguwusmimcskmym:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\x69\x64", ManipulateString::uniqid(5));
        goto oociqkqiawuqqksy;
        gqigmewamcgquoqg:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\x6c\141\163\x73", "\146\157\162\155\55\x63\157\x6e\164\141\151\x6e\x65\x72");
        goto qmgewyssegcgqsyc;
        ikiymiceygwcysuq:
        self::asimeyiqqkeawyoq();
        goto masyywacqueuqmgq;
        swsqucqiewccgiuk:
        csoysmsiecqsoiss:
        goto uikwsekwsekqqieg;
        uoeksuocoiscuwom:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto memsekycgguswasc;
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
        ceeqsgoagsueoyqw:
        yoackssggyiukquk:
        goto uyeqykaqeuuwwakq;
        uyeqykaqeuuwwakq:
        gooskwcomqmcaikc:
        goto iouwqegyciamycei;
        iouwqegyciamycei:
        return $eaoumsseceiowgsk;
        goto saykkkmgucwiauqm;
        uacyogkcoymicomk:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto iquqmweckeciauye;
        iquqmweckeciauye:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto yumgwmaewkusyeig;
        memsekycgguswasc:
        $eaoumsseceiowgsk = null;
        goto imgssikcuusmegqq;
        saykkkmgucwiauqm:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto wuaemamkwigigqsm;
        kmmqosikyuewwkgc:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto iscwwmewqmgikukm;
        }
        goto sakiquicymmmqoqw;
        qaykmqcaiaqoemia:
        eycqeyuoiicccoyc:
        goto iaccmcoomkyomscs;
        wimgomkqmqqwgkco:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto kukwiwysceakqikm;
        sakiquicymmmqoqw:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto uesauaikigwieyqa;
            amggqcemagwskmcm:
            goto akcwucackkcwoqqm;
            goto yemmmimewycgacke;
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
            aeoimcysgcwaekqe:
            wqskmukeywsocaiu:
            goto wuysakkwmqwqmusy;
            yemmmimewycgacke:
            qmywkmasiqksiqik:
            goto ykwsoacemwimkmqe;
            keiigcicaqummyyw:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto amggqcemagwskmcm;
            swgekwwyccscqcsk:
            oimasmccamqaqymu:
            goto eeyqmmkgmucumosg;
            wuysakkwmqwqmusy:
            akcwucackkcwoqqm:
            goto swgekwwyccscqcsk;
            eeyqmmkgmucumosg:
        }
        goto qaykmqcaiaqoemia;
        acwocicyuosecagq:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto ocimkeagywsaisoi;
        ckagmemuawawoiea:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto qmkyoqkqcamsemeq;
        }
        goto eeguamkaugacsiky;
        iaccmcoomkyomscs:
        
        goto gsoqwsgmqqyyaygm;
        fommawgqgyucksqg:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto wqgasgaukewquyau;
        }
        goto ckagmemuawawoiea;
        wuaemamkwigigqsm:
        $sogksuscggsicmac = null;
        goto fommawgqgyucksqg;
        kukwiwysceakqikm:
        gsgoqwyueokycimc:
        goto imuiggqqqussckae;
        esgweiiwaggqyssi:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto gakgswamiwuiikwy;
        qsoesaysemiyeqam:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto kqeewuquwymmgkuk;
        }
        goto esgweiiwaggqyssi;
        qmscsiuiwaaeeoom:
        if (!is_string($aiowsaccomcoikus)) {
            goto oqssqoagygwswmiq;
        }
        goto acwocicyuosecagq;
        eqgwasegeiumuiwk:
        qmkyoqkqcamsemeq:
        goto gwsquykmiyoueaem;
        ocimkeagywsaisoi:
        oqssqoagygwswmiq:
        goto eooycgwgyygmcmuu;
        eooycgwgyygmcmuu:
        return $sogksuscggsicmac;
        goto cgygmkeaueiwgmqk;
        imuiggqqqussckae:
        wqgasgaukewquyau:
        goto qmscsiuiwaaeeoom;
        gsoqwsgmqqyyaygm:
        iscwwmewqmgikukm:
        goto qsoesaysemiyeqam;
        eeguamkaugacsiky:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto osqiaawasseesgeu;
        gakgswamiwuiikwy:
        kqeewuquwymmgkuk:
        goto wimgomkqmqqwgkco;
        osqiaawasseesgeu:
        goto gsgoqwyueokycimc;
        goto eqgwasegeiumuiwk;
        gwsquykmiyoueaem:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto muqcakiqomgiouww;
        muqcakiqomgiouww:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto kmmqosikyuewwkgc;
        cgygmkeaueiwgmqk:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto cgokkieyawykgueo;
        mocyksssaegycmey:
        return $ikgwqyuyckaewsow;
        goto nggwsegkqocuqeqk;
        cgokkieyawykgueo:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ikcsaouaieccseqi;
        ikcsaouaieccseqi:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            qwwsykceiouooeau:
        }
        goto qcseosqqiqckoqws;
        qcseosqqiqckoqws:
        icukugckqoqgiuws:
        goto mocyksssaegycmey;
        nggwsegkqocuqeqk:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto eokggumwwwmgoioy;
        wceqqamckqyeuaqw:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto eiiwooasmosecscs;
        oegywukowukugmiu:
        uickeqcoyomssici:
        goto wceqqamckqyeuaqw;
        ggwwawgwoucowuyo:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto ceuiqusmmawsykea;
        cuisuaicowuooksy:
        return $aiowsaccomcoikus;
        goto gkoeeqqmggqygwyw;
        eiiwooasmosecscs:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto cuisuaicowuooksy;
        iisomisiocmgsuyw:
        $ygykagaqyuawwiyo = __("\x68\162", PR__CMN__FOUNDATION);
        goto ggwwawgwoucowuyo;
        ceuiqusmmawsykea:
        $qiouiwasaauyaaue = [0 => __("\x4e\157\40\x4c\151\155\x69\x74", PR__CMN__FOUNDATION)];
        goto eawaqosecwqaaqqe;
        eokggumwwwmgoioy:
        $sckumcuqemuukces = __("\155\151\156", PR__CMN__FOUNDATION);
        goto iisomisiocmgsuyw;
        eawaqosecwqaaqqe:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto cueusceyaaqiwkgc;
            uemuqgqeiwcwscqs:
            kwiemwkcogquuews:
            goto qqmkagsyoaowquya;
            wososskoguokaqei:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\40{$iyqygqimawuycsyq}";
            goto uemuqgqeiwcwscqs;
            cueusceyaaqiwkgc:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto wososskoguokaqei;
            qqmkagsyoaowquya:
        }
        goto oegywukowukugmiu;
        gkoeeqqmggqygwyw:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\x6c\x61\142\x65\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto gimsigcqasysqcoq;
        cqskcaaagwgwmiya:
        return $ykiyyumywksqcisg;
        goto simuyqcsmiuiykim;
        yemgiiosomcamyae:
        uwugswmqgicawims:
        goto cqskcaaagwgwmiya;
        gimsigcqasysqcoq:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\x61\x6f\153\x61\147\x6f\153\x71\171\165\x79\163\165\x6b\163\x6d" => $uusmaiomayssaecw, "\x74\x65\x78\x74" => $wkaqekwwgqsqwcoi]);
            ikukmsmyyikckikm:
        }
        goto yemgiiosomcamyae;
        simuyqcsmiuiykim:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto iwieeieuciqogska;
        memgwegygimsusma:
        if (!is_array($ykiyyumywksqcisg)) {
            goto ikceueaaocmccgkc;
        }
        goto yyaksmygsgquwsec;
        yyaksmygsgquwsec:
        $mwaeiygkcuuqqgga = true;
        goto rwmmmmyeyiqguesa;
        gwkaucoeaqieesqc:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto suuksqiggsoogugm;
        }
        goto memgwegygimsusma;
        iekaceqmyeiaeckc:
        $ygogqywsaqoukoqy = [];
        goto agioaayyccacmayy;
        ggcccqcqwcuigcck:
        if (!$ykiyyumywksqcisg) {
            goto uiwwywukcysqoqkg;
        }
        goto yismkseqgqygcsuc;
        yoaskikikuasaowi:
        eogoakwqsaomuygg:
        goto ymkwemoiaecikiwk;
        rwmmmmyeyiqguesa:
        ikceueaaocmccgkc:
        goto gmggkymmymiciwys;
        kcgucisscoiakqqs:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto aswkgqywucwyesou;
        giiucgmqsqakyyau:
        iwwkscmcmisuuqmo:
        goto eokggymayausyoiy;
        iwieeieuciqogska:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto iekaceqmyeiaeckc;
        uacmomqsimieooai:
        return array_map("\x65\163\143\x5f\x61\x74\x74\162", $ygogqywsaqoukoqy);
        goto amwkckmmkweisiuk;
        wcuiwqqcksycgaos:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\x65\163\x63\141\x70\145\x64\x5f\151\143\157\x6e\x73\137\x64\162\x6f\160\144\157\167\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto giiucgmqsqakyyau;
        aswkgqywucwyesou:
        ssgeagqeoeosoeei:
        goto ggcccqcqwcuigcck;
        ymkwemoiaecikiwk:
        if ($mwaeiygkcuuqqgga) {
            goto iwwkscmcmisuuqmo;
        }
        goto wcuiwqqcksycgaos;
        yismkseqgqygcsuc:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto ckqwwskgokgsmiqc;
            wcwakqcywmskawsg:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto cyicqmoiqscscwya;
            rwmqgyyueoeaimik:
            if ($mwaeiygkcuuqqgga) {
                goto ycmwuecqmmgiskyk;
            }
            goto gswsickyiywowuqm;
            uucoyymywsyuqeke:
            msqukekiockgmsme:
            goto mqoyyykwyuayacou;
            cyicqmoiqscscwya:
            ewcwuwuyyqggiago:
            goto uucoyymywsyuqeke;
            aooaoguggyasagge:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto rwmqgyyueoeaimik;
            cyqkqseuausyusek:
            goto ewcwuwuyyqggiago;
            goto sauyacymwesqauua;
            ckqwwskgokgsmiqc:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\163\163" => "\x69\143\x6f\x6e\55\160\162\x69\x6d\x61\162\x79"]);
            goto aooaoguggyasagge;
            sauyacymwesqauua:
            ycmwuecqmmgiskyk:
            goto wcwakqcywmskawsg;
            gswsickyiywowuqm:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto cyqkqseuausyusek;
            mqoyyykwyuayacou:
        }
        goto yoaskikikuasaowi;
        gmggkymmymiciwys:
        goto ssgeagqeoeosoeei;
        goto sicwscwumksmqsku;
        agioaayyccacmayy:
        $mwaeiygkcuuqqgga = false;
        goto gwkaucoeaqieesqc;
        eokggymayausyoiy:
        uiwwywukcysqoqkg:
        goto uacmomqsimieooai;
        sicwscwumksmqsku:
        suuksqiggsoogugm:
        goto kcgucisscoiakqqs;
        amwkckmmkweisiuk:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto qcawuomoeekkekma;
        oequgyowkkssiiqs:
        if ($qoiwmokisgikggia) {
            goto cmygaeicigygyiws;
        }
        goto wqasamwokmcayawg;
        aayquskmqceamsgg:
        $qimgcsugeskcqeyc = "\144\x61\162\153";
        goto yauuseeeaqyqwmug;
        qcawuomoeekkekma:
        $qimgcsugeskcqeyc = "\167\150\x69\164\145";
        goto oequgyowkkssiiqs;
        yauuseeeaqyqwmug:
        cwaascimmcuekgws:
        goto wkqgikkkmmwmwwgm;
        ckussqqwiokyqoco:
        cmygaeicigygyiws:
        goto gygmwgucwuyoqiye;
        wqasamwokmcayawg:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto ckussqqwiokyqoco;
        wkqgikkkmmwmwwgm:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\x76", ["\x63\x6c\x61\x73\x73" => "\x62\x67\55{$qoiwmokisgikggia}\x20\164\x65\x78\164\x2d{$qimgcsugeskcqeyc}\x20\164\x65\170\x74\55\143\145\x6e\x74\x65\162\x20\x70\157\163\x69\164\x69\x6f\156\55\x61\142\x73\157\x6c\x75\x74\145\40\x77\x2d\61\60\60\x20\150\55\61\60\x30\x20\x74\x6f\160\x2d\60\x20\x6c\x65\146\164\55\60\40\162\x6f\x75\156\144\145\144"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\163\x73" => "\154\150\x2d\x6c\147"]));
        goto imccymawgooqumwc;
        gygmwgucwuyoqiye:
        if (!(false !== strpos($qoiwmokisgikggia, "\x6c\151\147\x68\x74") || false !== strpos($qoiwmokisgikggia, "\164\x65\162\x74\x69\141\162\171") || false !== strpos($qoiwmokisgikggia, "\161\x75\x61\164\x65\x72\156\x61\162\171") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto cwaascimmcuekgws;
        }
        goto aayquskmqceamsgg;
        imccymawgooqumwc:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto musiqkgmwycoaguk;
        ocaicikesocsgoag:
        uiukigcawkqkqgyy:
        goto ugwoqaioqkmegewk;
        ugwoqaioqkmegewk:
        return $ukqisiguweqciuei;
        goto uqockgyiaycuesmi;
        musiqkgmwycoaguk:
        $ukqisiguweqciuei = ['' => __("\x4e\157\x6e\145", PR__CMN__FOUNDATION)];
        goto ccqumwomwukegucm;
        ccqumwomwukegucm:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto cqwcyykqggwgsiaw;
            ikcskcwwcegkoeyy:
            ieggmouaisogwcuu:
            goto scgucwgayiomwsqu;
            cqwcyykqggwgsiaw:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto uauqkwumkkqqmesy;
            uauqkwumkkqqmesy:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto ikcskcwwcegkoeyy;
            scgucwgayiomwsqu:
        }
        goto ocaicikesocsgoag;
        uqockgyiaycuesmi:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto wkoewioscwccmkyk;
        eimwkwakqsagimiq:
        ywiwccokwsyckmyu:
        goto mmqygmmymswssgak;
        mmqygmmymswssgak:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto kcwcekkkmwskicqs;
        kgycewokaywkmaiq:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\x6f\154\x6f\x72\137\144\162\157\160\x64\x6f\x77\x6e\x5f\151\x74\145\155\163"), []);
        goto eimwkwakqsagimiq;
        wkoewioscwccmkyk:
        if ($ukqisiguweqciuei) {
            goto ywiwccokwsyckmyu;
        }
        goto kgycewokaywkmaiq;
        ykeekemagwoeeuwk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\103\x6f\154\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto csukqqcyukewowyu;
        mcosskywgakgqkgo:
        weyuuecsicoyokwc:
        goto ykeekemagwoeeuwk;
        kcwcekkkmwskicqs:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x70\x6b\171\x79\141\x67\145\167\153\151\x79\143\153\155\167\171" => $uusmaiomayssaecw, "\x79\161\x67\165\165\x63\141\x65\x65\141\151\x67\141\x79\x67\161" => $qoiwmokisgikggia];
            oomsucckcykayauy:
        }
        goto mcosskywgakgqkgo;
        csukqqcyukewowyu:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto umkaksiuoaugusem;
        kqamquasawismmyq:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto fisyqseiiseakuku;
        fisyqseiiseakuku:
        return $gmksciycsesoouoi;
        goto goyoeacyyikeigyo;
        ieqgkomksqsuoaaa:
        csimuygeycgqmuwa:
        goto kqamquasawismmyq;
        yasyescomqgwccau:
        if ($pacsomcuwcegguua) {
            goto csimuygeycgqmuwa;
        }
        goto ecgguiikaeeiwooi;
        wiaiamgmiiiiowsu:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\143\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto yasyescomqgwccau;
        ecgguiikaeeiwooi:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto ieqgkomksqsuoaaa;
        umkaksiuoaugusem:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto wiaiamgmiiiiowsu;
        goyoeacyyikeigyo:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto ogggoiwaseooqyee;
        ogggoiwaseooqyee:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto gmmqkkwsagswkwkm;
        mkoukageucsqewms:
        ociiyomqweeuyqaw:
        goto qaogwawmaiqokycq;
        qaogwawmaiqokycq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x49\x63\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ougeaoiicseiqwsi;
        gmmqkkwsagswkwkm:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\160\x6b\x79\x79\x61\147\145\167\x6b\x69\x79\x63\x6b\x6d\167\x79" => $uusmaiomayssaecw, "\x79\161\x67\165\165\x63\x61\x65\x65\141\x69\x67\141\x79\x67\161" => $wkaqekwwgqsqwcoi];
            oggeooaecikkokqy:
        }
        goto mkoukageucsqewms;
        ougeaoiicseiqwsi:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto eqgiaawwcamuckce;
        meowuayekqaqeggq:
        ikiyswysiaqmeuam:
        goto qkyucemgwyyueywk;
        eqgiaawwcamuckce:
        if ($meqocwsecsywiiqs) {
            goto ikiyswysiaqmeuam;
        }
        goto mowkckamsoqiugqo;
        mowkckamsoqiugqo:
        $meqocwsecsywiiqs = __("\x49\x63\157\156", PR__CMN__FOUNDATION);
        goto meowuayekqaqeggq;
        qkyucemgwyyueywk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto guikuyakqquuuwaq;
        guikuyakqquuuwaq:
    }
}
