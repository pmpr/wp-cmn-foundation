<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        ocuuyosqkeqwcima:
        return $aiowsaccomcoikus;
        goto smmasacqsmkeauwc;
        amuuyacmuasceoog:
        switch ($sqeykgyoooqysmca) {
            case "\x68\164\x6d\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x68\x69\x64\144\145\x6e":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto ccgamisoqiigouye;
            case "\x63\150\x65\x63\x6b\x62\157\x78":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\164\x65\x78\164":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x74\145\170\164\x61\162\x65\x61":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\144\x61\164\145":
            case "\144\x61\164\145\164\x69\155\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x69\143\x6f\x6e":
                goto swaokakkeggigiqi;
                wayycssguscgyuko:
                goto ccgamisoqiigouye;
                goto scakegmmqggqwysq;
                swaokakkeggigiqi:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto osymqmgcqqyomacw;
                osymqmgcqqyomacw:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\151\x63\157\156\x73", IconFontawesomeInterface::class);
                goto keowumoqcaqsmqwa;
                cuwoscseqqwuiqem:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto wayycssguscgyuko;
                keowumoqcaqsmqwa:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\x6c\141\x62\x65\x6c\x73", []);
                goto cuwoscseqqwuiqem;
                scakegmmqggqwysq:
            case "\146\151\154\x65":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\x73\x65\x6c\145\x63\164":
            case "\x73\x65\154\x65\x63\164\x2d\x32":
            case "\142\163\x73\145\154\145\143\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ccgamisoqiigouye;
            case "\163\145\154\145\143\164\55\x72\157\x6c\145":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto ccgamisoqiigouye;
            case "\163\x65\x6c\x65\143\x74\x2d\x70\157\163\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto ccgamisoqiigouye;
            case "\x73\145\154\145\x63\164\55\x75\x73\x65\162":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto ccgamisoqiigouye;
            case "\x73\x65\154\145\143\x74\55\x69\x63\157\x6e\55\163\151\x7a\x65":
                goto uasseoesmyukoosc;
                uasseoesmyukoosc:
                if ($ymqmyyeuycgmigyo) {
                    goto meawswqmqouaeuou;
                }
                goto uyiimywaiywogmeo;
                myeogiaaukogiiqg:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x69\x63\x6f\x6e\x5f\163\x69\x7a\x65\x73"), []);
                goto ayqeeqsoekuuyaiq;
                qmqiyacuyoscwuak:
                goto ccgamisoqiigouye;
                goto ogiiukgqwuyeyiqo;
                ayqeeqsoekuuyaiq:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto qmqiyacuyoscwuak;
                ckagwqgeeamsacqq:
                meawswqmqouaeuou:
                goto myeogiaaukogiiqg;
                uyiimywaiywogmeo:
                $ymqmyyeuycgmigyo = __("\111\143\x6f\156\40\123\151\172\145", PR__CMN__FOUNDATION);
                goto ckagwqgeeamsacqq;
                ogiiukgqwuyeyiqo:
        }
        goto kmoseqyccceksags;
        sqsqwmwwiwukccqo:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto ygsgoaecoskqsyqs;
            kiaeuwkmumywykei:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto qigoakiooqiyqeou;
            }
            goto qckaywmcygiwiygs;
            ekoikoqkigaauoqc:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto msueyoiiiyskyswg;
                aeoywewiquusyamg:
                owayewqwggkmqgqm:
                goto mkigueyysgcycqcs;
                mkigueyysgcycqcs:
                mqamggsomwomqkyq:
                goto uiqkqauoskuseqku;
                uoiysouwossowgsg:
                qeasguwmwomcioyy:
                goto ieuecgaimowummkq;
                uiqkqauoskuseqku:
                goto qcqykequcgokomay;
                goto uoiysouwossowgsg;
                oyioqyigmkwuwuua:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto qeasguwmwomcioyy;
                }
                goto omcqsmseccqsckym;
                msueyoiiiyskyswg:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto oyioqyigmkwuwuua;
                omcqsmseccqsckym:
                switch ($wsmeuqcsyguikoci) {
                    case "\x63\x6f\154":
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
                            eewasogiegqkcaae:
                            mmwmuokmikccoaig:
                            goto immamiuusugcmuqk;
                            mqkkicswmsaiyuic:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto eewasogiegqkcaae;
                            wkkykweqcekcuwqa:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto mqkkicswmsaiyuic;
                            immamiuusugcmuqk:
                        }
                        goto sgyogmaauquycqaa;
                        yqowauukqgsoucmg:
                    case "\x69\147\156\x6f\x72\x61\x62\x6c\145":
                        goto gaagyqguomuaaqac;
                        ocosqqykmeikqycm:
                        qkeqcqsgessimeos:
                        goto ikykyueiiiiekmkq;
                        ikykyueiiiiekmkq:
                        goto mqamggsomwomqkyq;
                        goto wckceqoyawaeusuy;
                        gaagyqguomuaaqac:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\x76\x61\x6c\165\x65\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x66\x69\145\154\x64\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x72\145\x76\145\x72\163\145", false));
                            sucwmosiwgasymic:
                        }
                        goto ocosqqykmeikqycm;
                        wckceqoyawaeusuy:
                    default:
                        goto keieieqewwgqcoia;
                        wyaayucwkugmakku:
                        qcwqmyukgscaigeq:
                        goto yyeugqugwkyagksm;
                        koqamsqgiomsceqq:
                        cwskuqkeauugauqu:
                        goto cyiogsuyagwgiuma;
                        cyiogsuyagwgiuma:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto wyaayucwkugmakku;
                        migagikgsqkwcqca:
                        goto qcwqmyukgscaigeq;
                        goto koqamsqgiomsceqq;
                        ugskaqyksuoawecc:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto migagikgsqkwcqca;
                        keieieqewwgqcoia:
                        if ($wuyimwscukmqqsqk) {
                            goto cwskuqkeauugauqu;
                        }
                        goto ugskaqyksuoawecc;
                        yyeugqugwkyagksm:
                }
                goto aeoywewiquusyamg;
                ieuecgaimowummkq:
                eoimqaiguyaqgome:
                goto cesmmckwemyiugwo;
                cesmmckwemyiugwo:
            }
            goto cuyikgqsqwymuwem;
            ysscsgaukqoycyga:
            wsykmmiowmoisiwg:
            goto oqsaekyeiusqaiki;
            mgyiqoksoygoguya:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto ekoikoqkigaauoqc;
            qckaywmcygiwiygs:
            $wuyimwscukmqqsqk = false;
            goto imewokywqaacyowg;
            imewokywqaacyowg:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto cuoksycuqykycike;
            cuyikgqsqwymuwem:
            qcqykequcgokomay:
            goto ysscsgaukqoycyga;
            ygsgoaecoskqsyqs:
            $wuyimwscukmqqsqk = true;
            goto kiaeuwkmumywykei;
            cuoksycuqykycike:
            qigoakiooqiyqeou:
            goto mgyiqoksoygoguya;
            oqsaekyeiusqaiki:
        }
        goto kioowwygisuiwkmk;
        kseiwaqicoamaqoy:
        wiiymmquiymeygoe:
        goto ocuuyosqkeqwcima;
        gsqokscmqccqioog:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\151\144", "\x74\x79\160\x65", "\x6e\141\155\145"]);
        goto gaymoimsoqmkkcio;
        giiycgoccsyaqcyg:
        gyykicucayuwysqu:
        goto wckowwygqqukeqgk;
        liyqekcciiuuqasi:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto mqokweusqkqwakmw;
        kmoseqyccceksags:
        myoqkkuiequicmym:
        goto eiseqmycikmoeiom;
        kioowwygisuiwkmk:
        kauoikqowoeoeyaw:
        goto giiycgoccsyaqcyg;
        ioqssequcuseayyc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto ewmcauccuggcigme;
        kkgkueoqokwuyyqc:
        if (!is_array($ywmkwiwkosakssii)) {
            goto gyykicucayuwysqu;
        }
        goto gsqokscmqccqioog;
        mqokweusqkqwakmw:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto amuuyacmuasceoog;
        omqwgiywimsmoaec:
        if (!$aiowsaccomcoikus) {
            goto cckaaosgusoowiqm;
        }
        goto kkgkueoqokwuyyqc;
        wckowwygqqukeqgk:
        cckaaosgusoowiqm:
        goto kseiwaqicoamaqoy;
        eiseqmycikmoeiom:
        ccgamisoqiigouye:
        goto omqwgiywimsmoaec;
        gaymoimsoqmkkcio:
        $ciagusimogciiumg = ["\x61\x64\144", "\163\145\164", ''];
        goto sqsqwmwwiwukccqo;
        umieiuyswauuyeww:
        if (!$aokagokqyuysuksm) {
            goto wiiymmquiymeygoe;
        }
        goto liyqekcciiuuqasi;
        sweoiiwceiqwkuao:
        $aiowsaccomcoikus = null;
        goto ioqssequcuseayyc;
        ewmcauccuggcigme:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto umieiuyswauuyeww;
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
        caswcwsisomwyuoe:
        $nsmgceoqaqogqmuw = '';
        goto wgguwusmimcskmym;
        wisagegqkywwycew:
        if (!$ikgwqyuyckaewsow) {
            goto csoysmsiecqsoiss;
        }
        goto omymmwgqumuugieq;
        swsqucqiewccgiuk:
        csoysmsiecqsoiss:
        goto uikwsekwsekqqieg;
        omymmwgqumuugieq:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\x69\x64" => $aokagokqyuysuksm]));
        goto uoqqiuaqysmiimgu;
        ikiymiceygwcysuq:
        self::asimeyiqqkeawyoq();
        goto masyywacqueuqmgq;
        qmgewyssegcgqsyc:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x64\x69\x76", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto okqikeeiigwooqqu;
        oociqkqiawuqqksy:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\x65\143\x68\x6f", true);
        goto waemqmkmioaucwcy;
        koiuymoiquiegggc:
        oooussisqgggcaua:
        goto umcoewewouwwgwwo;
        qcoykumuwgysoewo:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto ikiymiceygwcysuq;
        umcoewewouwwgwwo:
        return $nsmgceoqaqogqmuw;
        goto uoeksuocoiscuwom;
        gqigmewamcgquoqg:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\x6c\x61\163\x73", "\x66\x6f\162\155\55\x63\x6f\156\164\141\x69\156\145\x72");
        goto qmgewyssegcgqsyc;
        oqiyycgoiogemoes:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto caiuegssgqocqoou;
        wgguwusmimcskmym:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\x69\x64", ManipulateString::uniqid(5));
        goto oociqkqiawuqqksy;
        waemqmkmioaucwcy:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\160\141\x72\145\156\x74", false);
        goto wisagegqkywwycew;
        caiuegssgqocqoou:
        if (!$omwmuycmeqcqokom) {
            goto gugumscsyciuscus;
        }
        goto gqigmewamcgquoqg;
        oisgwmkkeumoyigq:
        echo $nsmgceoqaqogqmuw;
        goto koiuymoiquiegggc;
        uikwsekwsekqqieg:
        if (!$koaqeegoeiaiccse) {
            goto oooussisqgggcaua;
        }
        goto oisgwmkkeumoyigq;
        okqikeeiigwooqqu:
        gugumscsyciuscus:
        goto swsqucqiewccgiuk;
        masyywacqueuqmgq:
        $eaoumsseceiowgsk->show_form();
        goto oqiyycgoiogemoes;
        uoqqiuaqysmiimgu:
        ob_start();
        goto qcoykumuwgysoewo;
        uoeksuocoiscuwom:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto memsekycgguswasc;
        ceeqsgoagsueoyqw:
        yoackssggyiukquk:
        goto uyeqykaqeuuwwakq;
        uacyogkcoymicomk:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto iquqmweckeciauye;
        imgssikcuusmegqq:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto gooskwcomqmcaikc;
        }
        goto uacyogkcoymicomk;
        uyeqykaqeuuwwakq:
        gooskwcomqmcaikc:
        goto iouwqegyciamycei;
        iouwqegyciamycei:
        return $eaoumsseceiowgsk;
        goto saykkkmgucwiauqm;
        iquqmweckeciauye:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto yumgwmaewkusyeig;
        yumgwmaewkusyeig:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            kmmgqmcikmqwguoc:
        }
        goto ceeqsgoagsueoyqw;
        memsekycgguswasc:
        $eaoumsseceiowgsk = null;
        goto imgssikcuusmegqq;
        saykkkmgucwiauqm:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto wuaemamkwigigqsm;
        ckagmemuawawoiea:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto qmkyoqkqcamsemeq;
        }
        goto eeguamkaugacsiky;
        eooycgwgyygmcmuu:
        return $sogksuscggsicmac;
        goto cgygmkeaueiwgmqk;
        qaykmqcaiaqoemia:
        eycqeyuoiicccoyc:
        goto iaccmcoomkyomscs;
        esgweiiwaggqyssi:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto gakgswamiwuiikwy;
        fommawgqgyucksqg:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto wqgasgaukewquyau;
        }
        goto ckagmemuawawoiea;
        wimgomkqmqqwgkco:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto kukwiwysceakqikm;
        gsoqwsgmqqyyaygm:
        iscwwmewqmgikukm:
        goto qsoesaysemiyeqam;
        kmmqosikyuewwkgc:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto iscwwmewqmgikukm;
        }
        goto sakiquicymmmqoqw;
        ocimkeagywsaisoi:
        oqssqoagygwswmiq:
        goto eooycgwgyygmcmuu;
        muqcakiqomgiouww:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto kmmqosikyuewwkgc;
        gwsquykmiyoueaem:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto muqcakiqomgiouww;
        imuiggqqqussckae:
        wqgasgaukewquyau:
        goto qmscsiuiwaaeeoom;
        wuaemamkwigigqsm:
        $sogksuscggsicmac = null;
        goto fommawgqgyucksqg;
        eqgwasegeiumuiwk:
        qmkyoqkqcamsemeq:
        goto gwsquykmiyoueaem;
        qsoesaysemiyeqam:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto kqeewuquwymmgkuk;
        }
        goto esgweiiwaggqyssi;
        osqiaawasseesgeu:
        goto gsgoqwyueokycimc;
        goto eqgwasegeiumuiwk;
        qmscsiuiwaaeeoom:
        if (!is_string($aiowsaccomcoikus)) {
            goto oqssqoagygwswmiq;
        }
        goto acwocicyuosecagq;
        iaccmcoomkyomscs:
        
        goto gsoqwsgmqqyyaygm;
        gakgswamiwuiikwy:
        kqeewuquwymmgkuk:
        goto wimgomkqmqqwgkco;
        sakiquicymmmqoqw:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto uesauaikigwieyqa;
            amggqcemagwskmcm:
            goto akcwucackkcwoqqm;
            goto yemmmimewycgacke;
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
            wuysakkwmqwqmusy:
            akcwucackkcwoqqm:
            goto swgekwwyccscqcsk;
            keiigcicaqummyyw:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto amggqcemagwskmcm;
            ykwsoacemwimkmqe:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                cquoyqoigoicqyyi:
            }
            goto aeoimcysgcwaekqe;
            swgekwwyccscqcsk:
            oimasmccamqaqymu:
            goto eeyqmmkgmucumosg;
            eeyqmmkgmucumosg:
        }
        goto qaykmqcaiaqoemia;
        eeguamkaugacsiky:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto osqiaawasseesgeu;
        acwocicyuosecagq:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto ocimkeagywsaisoi;
        kukwiwysceakqikm:
        gsgoqwyueokycimc:
        goto imuiggqqqussckae;
        cgygmkeaueiwgmqk:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto cgokkieyawykgueo;
        mocyksssaegycmey:
        return $ikgwqyuyckaewsow;
        goto nggwsegkqocuqeqk;
        qcseosqqiqckoqws:
        icukugckqoqgiuws:
        goto mocyksssaegycmey;
        ikcsaouaieccseqi:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            qwwsykceiouooeau:
        }
        goto qcseosqqiqckoqws;
        cgokkieyawykgueo:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto ikcsaouaieccseqi;
        nggwsegkqocuqeqk:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto eokggumwwwmgoioy;
        eiiwooasmosecscs:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto cuisuaicowuooksy;
        ceuiqusmmawsykea:
        $qiouiwasaauyaaue = [0 => __("\x4e\157\x20\x4c\151\155\151\164", PR__CMN__FOUNDATION)];
        goto eawaqosecwqaaqqe;
        eokggumwwwmgoioy:
        $sckumcuqemuukces = __("\x6d\151\x6e", PR__CMN__FOUNDATION);
        goto iisomisiocmgsuyw;
        oegywukowukugmiu:
        uickeqcoyomssici:
        goto wceqqamckqyeuaqw;
        eawaqosecwqaaqqe:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto cueusceyaaqiwkgc;
            cueusceyaaqiwkgc:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto wososskoguokaqei;
            wososskoguokaqei:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\40{$iyqygqimawuycsyq}";
            goto uemuqgqeiwcwscqs;
            uemuqgqeiwcwscqs:
            kwiemwkcogquuews:
            goto qqmkagsyoaowquya;
            qqmkagsyoaowquya:
        }
        goto oegywukowukugmiu;
        ggwwawgwoucowuyo:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto ceuiqusmmawsykea;
        iisomisiocmgsuyw:
        $ygykagaqyuawwiyo = __("\150\x72", PR__CMN__FOUNDATION);
        goto ggwwawgwoucowuyo;
        wceqqamckqyeuaqw:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto eiiwooasmosecscs;
        cuisuaicowuooksy:
        return $aiowsaccomcoikus;
        goto gkoeeqqmggqygwyw;
        gkoeeqqmggqygwyw:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\154\x61\142\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto gimsigcqasysqcoq;
        yemgiiosomcamyae:
        uwugswmqgicawims:
        goto cqskcaaagwgwmiya;
        gimsigcqasysqcoq:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\151\x64" => $uusmaiomayssaecw, "\164\x65\170\164" => $wkaqekwwgqsqwcoi]);
            ikukmsmyyikckikm:
        }
        goto yemgiiosomcamyae;
        cqskcaaagwgwmiya:
        return $ykiyyumywksqcisg;
        goto simuyqcsmiuiykim;
        simuyqcsmiuiykim:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto iwieeieuciqogska;
        yyaksmygsgquwsec:
        $mwaeiygkcuuqqgga = true;
        goto rwmmmmyeyiqguesa;
        uacmomqsimieooai:
        return array_map("\145\x73\x63\x5f\141\164\x74\162", $ygogqywsaqoukoqy);
        goto amwkckmmkweisiuk;
        sicwscwumksmqsku:
        suuksqiggsoogugm:
        goto kcgucisscoiakqqs;
        kcgucisscoiakqqs:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto aswkgqywucwyesou;
        gmggkymmymiciwys:
        goto ssgeagqeoeosoeei;
        goto sicwscwumksmqsku;
        gwkaucoeaqieesqc:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto suuksqiggsoogugm;
        }
        goto memgwegygimsusma;
        aswkgqywucwyesou:
        ssgeagqeoeosoeei:
        goto ggcccqcqwcuigcck;
        giiucgmqsqakyyau:
        iwwkscmcmisuuqmo:
        goto eokggymayausyoiy;
        iekaceqmyeiaeckc:
        $ygogqywsaqoukoqy = [];
        goto agioaayyccacmayy;
        yoaskikikuasaowi:
        eogoakwqsaomuygg:
        goto ymkwemoiaecikiwk;
        ymkwemoiaecikiwk:
        if ($mwaeiygkcuuqqgga) {
            goto iwwkscmcmisuuqmo;
        }
        goto wcuiwqqcksycgaos;
        agioaayyccacmayy:
        $mwaeiygkcuuqqgga = false;
        goto gwkaucoeaqieesqc;
        wcuiwqqcksycgaos:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\145\x73\143\141\x70\x65\x64\x5f\151\x63\x6f\156\x73\x5f\x64\162\157\160\144\x6f\167\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto giiucgmqsqakyyau;
        iwieeieuciqogska:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto iekaceqmyeiaeckc;
        memgwegygimsusma:
        if (!is_array($ykiyyumywksqcisg)) {
            goto ikceueaaocmccgkc;
        }
        goto yyaksmygsgquwsec;
        yismkseqgqygcsuc:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto ckqwwskgokgsmiqc;
            aooaoguggyasagge:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto rwmqgyyueoeaimik;
            wcwakqcywmskawsg:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto cyicqmoiqscscwya;
            uucoyymywsyuqeke:
            msqukekiockgmsme:
            goto mqoyyykwyuayacou;
            ckqwwskgokgsmiqc:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\x73\163" => "\151\143\x6f\156\55\x70\x72\x69\155\x61\x72\171"]);
            goto aooaoguggyasagge;
            gswsickyiywowuqm:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto cyqkqseuausyusek;
            sauyacymwesqauua:
            ycmwuecqmmgiskyk:
            goto wcwakqcywmskawsg;
            rwmqgyyueoeaimik:
            if ($mwaeiygkcuuqqgga) {
                goto ycmwuecqmmgiskyk;
            }
            goto gswsickyiywowuqm;
            cyicqmoiqscscwya:
            ewcwuwuyyqggiago:
            goto uucoyymywsyuqeke;
            cyqkqseuausyusek:
            goto ewcwuwuyyqggiago;
            goto sauyacymwesqauua;
            mqoyyykwyuayacou:
        }
        goto yoaskikikuasaowi;
        rwmmmmyeyiqguesa:
        ikceueaaocmccgkc:
        goto gmggkymmymiciwys;
        eokggymayausyoiy:
        uiwwywukcysqoqkg:
        goto uacmomqsimieooai;
        ggcccqcqwcuigcck:
        if (!$ykiyyumywksqcisg) {
            goto uiwwywukcysqoqkg;
        }
        goto yismkseqgqygcsuc;
        amwkckmmkweisiuk:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto qcawuomoeekkekma;
        yauuseeeaqyqwmug:
        cwaascimmcuekgws:
        goto wkqgikkkmmwmwwgm;
        wkqgikkkmmwmwwgm:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\166", ["\143\x6c\141\x73\163" => "\142\x67\x2d{$qoiwmokisgikggia}\40\x74\145\x78\x74\x2d{$qimgcsugeskcqeyc}\40\x74\145\x78\x74\55\143\x65\156\x74\x65\x72\40\160\x6f\163\x69\164\x69\157\156\x2d\x61\x62\163\157\154\165\x74\145\x20\167\x2d\61\x30\60\x20\150\x2d\x31\x30\60\40\164\157\x70\x2d\x30\40\154\145\146\164\55\60\40\162\x6f\165\156\x64\145\x64"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\141\163\163" => "\x6c\x68\55\x6c\147"]));
        goto imccymawgooqumwc;
        gygmwgucwuyoqiye:
        if (!(false !== strpos($qoiwmokisgikggia, "\154\151\147\x68\164") || false !== strpos($qoiwmokisgikggia, "\164\145\162\x74\x69\x61\162\x79") || false !== strpos($qoiwmokisgikggia, "\x71\165\141\x74\x65\x72\156\x61\162\x79") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto cwaascimmcuekgws;
        }
        goto aayquskmqceamsgg;
        ckussqqwiokyqoco:
        cmygaeicigygyiws:
        goto gygmwgucwuyoqiye;
        oequgyowkkssiiqs:
        if ($qoiwmokisgikggia) {
            goto cmygaeicigygyiws;
        }
        goto wqasamwokmcayawg;
        wqasamwokmcayawg:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto ckussqqwiokyqoco;
        aayquskmqceamsgg:
        $qimgcsugeskcqeyc = "\x64\141\x72\x6b";
        goto yauuseeeaqyqwmug;
        qcawuomoeekkekma:
        $qimgcsugeskcqeyc = "\x77\150\151\x74\145";
        goto oequgyowkkssiiqs;
        imccymawgooqumwc:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto musiqkgmwycoaguk;
        ugwoqaioqkmegewk:
        return $ukqisiguweqciuei;
        goto uqockgyiaycuesmi;
        ocaicikesocsgoag:
        uiukigcawkqkqgyy:
        goto ugwoqaioqkmegewk;
        ccqumwomwukegucm:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto cqwcyykqggwgsiaw;
            cqwcyykqggwgsiaw:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto uauqkwumkkqqmesy;
            uauqkwumkkqqmesy:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto ikcskcwwcegkoeyy;
            ikcskcwwcegkoeyy:
            ieggmouaisogwcuu:
            goto scgucwgayiomwsqu;
            scgucwgayiomwsqu:
        }
        goto ocaicikesocsgoag;
        musiqkgmwycoaguk:
        $ukqisiguweqciuei = ['' => __("\116\157\x6e\x65", PR__CMN__FOUNDATION)];
        goto ccqumwomwukegucm;
        uqockgyiaycuesmi:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto wkoewioscwccmkyk;
        kcwcekkkmwskicqs:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x6c\141\142\145\x6c" => $uusmaiomayssaecw, "\144\x61\x74\141\55\x63\157\x6e\164\x65\x6e\x74" => $qoiwmokisgikggia];
            oomsucckcykayauy:
        }
        goto mcosskywgakgqkgo;
        mcosskywgakgqkgo:
        weyuuecsicoyokwc:
        goto ykeekemagwoeeuwk;
        mmqygmmymswssgak:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto kcwcekkkmwskicqs;
        kgycewokaywkmaiq:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\143\157\x6c\157\162\137\144\x72\157\160\x64\x6f\167\156\x5f\x69\x74\x65\x6d\163"), []);
        goto eimwkwakqsagimiq;
        eimwkwakqsagimiq:
        ywiwccokwsyckmyu:
        goto mmqygmmymswssgak;
        wkoewioscwccmkyk:
        if ($ukqisiguweqciuei) {
            goto ywiwccokwsyckmyu;
        }
        goto kgycewokaywkmaiq;
        ykeekemagwoeeuwk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\103\x6f\154\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto csukqqcyukewowyu;
        csukqqcyukewowyu:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto umkaksiuoaugusem;
        wiaiamgmiiiiowsu:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\x63\x6f\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto yasyescomqgwccau;
        umkaksiuoaugusem:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto wiaiamgmiiiiowsu;
        ecgguiikaeeiwooi:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto ieqgkomksqsuoaaa;
        ieqgkomksqsuoaaa:
        csimuygeycgqmuwa:
        goto kqamquasawismmyq;
        fisyqseiiseakuku:
        return $gmksciycsesoouoi;
        goto goyoeacyyikeigyo;
        yasyescomqgwccau:
        if ($pacsomcuwcegguua) {
            goto csimuygeycgqmuwa;
        }
        goto ecgguiikaeeiwooi;
        kqamquasawismmyq:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto fisyqseiiseakuku;
        goyoeacyyikeigyo:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto ogggoiwaseooqyee;
        ogggoiwaseooqyee:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto gmmqkkwsagswkwkm;
        qaogwawmaiqokycq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\111\143\157\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ougeaoiicseiqwsi;
        mkoukageucsqewms:
        ociiyomqweeuyqaw:
        goto qaogwawmaiqokycq;
        gmmqkkwsagswkwkm:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\154\141\142\145\154" => $uusmaiomayssaecw, "\x64\141\164\x61\55\143\157\x6e\x74\x65\x6e\x74" => $wkaqekwwgqsqwcoi];
            oggeooaecikkokqy:
        }
        goto mkoukageucsqewms;
        ougeaoiicseiqwsi:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto eqgiaawwcamuckce;
        eqgiaawwcamuckce:
        if ($meqocwsecsywiiqs) {
            goto ikiyswysiaqmeuam;
        }
        goto mowkckamsoqiugqo;
        qkyucemgwyyueywk:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto guikuyakqquuuwaq;
        mowkckamsoqiugqo:
        $meqocwsecsywiiqs = __("\111\x63\x6f\156", PR__CMN__FOUNDATION);
        goto meowuayekqaqeggq;
        meowuayekqaqeggq:
        ikiyswysiaqmeuam:
        goto qkyucemgwyyueywk;
        guikuyakqquuuwaq:
    }
}
