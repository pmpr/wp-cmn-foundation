<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto ysscsgaukqoycyga;
        sqsqwmwwiwukccqo:
        return $aiowsaccomcoikus;
        goto kioowwygisuiwkmk;
        gsqokscmqccqioog:
        ekoikoqkigaauoqc:
        goto gaymoimsoqmkkcio;
        gaymoimsoqmkkcio:
        cuyikgqsqwymuwem:
        goto sqsqwmwwiwukccqo;
        wiiymmquiymeygoe:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto sweoiiwceiqwkuao;
        kkgkueoqokwuyyqc:
        mgyiqoksoygoguya:
        goto gsqokscmqccqioog;
        cckaaosgusoowiqm:
        if (!$aokagokqyuysuksm) {
            goto cuyikgqsqwymuwem;
        }
        goto wiiymmquiymeygoe;
        amuuyacmuasceoog:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\x64", "\164\171\x70\145", "\x6e\141\x6d\145"]);
        goto kmoseqyccceksags;
        kmoseqyccceksags:
        $ciagusimogciiumg = ["\141\144\144", "\163\145\x74", ''];
        goto eiseqmycikmoeiom;
        ysscsgaukqoycyga:
        $aiowsaccomcoikus = null;
        goto oqsaekyeiusqaiki;
        gyykicucayuwysqu:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto cckaaosgusoowiqm;
        omqwgiywimsmoaec:
        ckagwqgeeamsacqq:
        goto kkgkueoqokwuyyqc;
        oqsaekyeiusqaiki:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto gyykicucayuwysqu;
        umieiuyswauuyeww:
        ycokoqscowewwsau:
        goto liyqekcciiuuqasi;
        ewmcauccuggcigme:
        ekqeaqcmkqoiugms:
        goto umieiuyswauuyeww;
        liyqekcciiuuqasi:
        if (!$aiowsaccomcoikus) {
            goto ekoikoqkigaauoqc;
        }
        goto mqokweusqkqwakmw;
        mqokweusqkqwakmw:
        if (!is_array($ywmkwiwkosakssii)) {
            goto mgyiqoksoygoguya;
        }
        goto amuuyacmuasceoog;
        sweoiiwceiqwkuao:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto ioqssequcuseayyc;
        eiseqmycikmoeiom:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto mkigueyysgcycqcs;
            ygsgoaecoskqsyqs:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto kiaeuwkmumywykei;
            mkigueyysgcycqcs:
            $wuyimwscukmqqsqk = true;
            goto uiqkqauoskuseqku;
            uoiysouwossowgsg:
            $wuyimwscukmqqsqk = false;
            goto ieuecgaimowummkq;
            uiqkqauoskuseqku:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto ayqeeqsoekuuyaiq;
            }
            goto uoiysouwossowgsg;
            ieuecgaimowummkq:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto cesmmckwemyiugwo;
            imewokywqaacyowg:
            myeogiaaukogiiqg:
            goto cuoksycuqykycike;
            kiaeuwkmumywykei:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto koqamsqgiomsceqq;
                qeasguwmwomcioyy:
                kauoikqowoeoeyaw:
                goto msueyoiiiyskyswg;
                oyioqyigmkwuwuua:
                migagikgsqkwcqca:
                goto omcqsmseccqsckym;
                cyiogsuyagwgiuma:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto migagikgsqkwcqca;
                }
                goto wyaayucwkugmakku;
                omcqsmseccqsckym:
                ogiiukgqwuyeyiqo:
                goto aeoywewiquusyamg;
                msueyoiiiyskyswg:
                goto qmqiyacuyoscwuak;
                goto oyioqyigmkwuwuua;
                yyeugqugwkyagksm:
                wsykmmiowmoisiwg:
                goto qeasguwmwomcioyy;
                wyaayucwkugmakku:
                switch ($wsmeuqcsyguikoci) {
                    case "\x63\x6f\x6c":
                        goto mmwmuokmikccoaig;
                        wkkykweqcekcuwqa:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto eoimqaiguyaqgome;
                            mqamggsomwomqkyq:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto owayewqwggkmqgqm;
                            owayewqwggkmqgqm:
                            qcqykequcgokomay:
                            goto asgemimceqgyaewi;
                            eoimqaiguyaqgome:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto mqamggsomwomqkyq;
                            asgemimceqgyaewi:
                        }
                        goto mqkkicswmsaiyuic;
                        mqkkicswmsaiyuic:
                        qigoakiooqiyqeou:
                        goto eewasogiegqkcaae;
                        mmwmuokmikccoaig:
                        $waaaiiqwsmggwsak = explode("\40", $eqgoocgaqwqcimie);
                        goto wkkykweqcekcuwqa;
                        eewasogiegqkcaae:
                        goto kauoikqowoeoeyaw;
                        goto immamiuusugcmuqk;
                        immamiuusugcmuqk:
                    case "\151\147\156\157\x72\x61\142\154\x65":
                        goto sgyogmaauquycqaa;
                        uekcooqsuqkmkayi:
                        ceossuqockaiuecg:
                        goto yqowauukqgsoucmg;
                        yqowauukqgsoucmg:
                        goto kauoikqowoeoeyaw;
                        goto qkeqcqsgessimeos;
                        sgyogmaauquycqaa:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\x76\x61\x6c\x75\x65\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x66\151\x65\154\144\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\162\x65\x76\x65\162\x73\x65", false));
                            yaiawiwigqoemyqm:
                        }
                        goto uekcooqsuqkmkayi;
                        qkeqcqsgessimeos:
                    default:
                        goto ocosqqykmeikqycm;
                        cwskuqkeauugauqu:
                        sucwmosiwgasymic:
                        goto qcwqmyukgscaigeq;
                        ocosqqykmeikqycm:
                        if ($wuyimwscukmqqsqk) {
                            goto sucwmosiwgasymic;
                        }
                        goto ikykyueiiiiekmkq;
                        ikykyueiiiiekmkq:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto wckceqoyawaeusuy;
                        wckceqoyawaeusuy:
                        goto gaagyqguomuaaqac;
                        goto cwskuqkeauugauqu;
                        qcwqmyukgscaigeq:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto keieieqewwgqcoia;
                        keieieqewwgqcoia:
                        gaagyqguomuaaqac:
                        goto ugskaqyksuoawecc;
                        ugskaqyksuoawecc:
                }
                goto yyeugqugwkyagksm;
                koqamsqgiomsceqq:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto cyiogsuyagwgiuma;
                aeoywewiquusyamg:
            }
            goto qckaywmcygiwiygs;
            cesmmckwemyiugwo:
            ayqeeqsoekuuyaiq:
            goto ygsgoaecoskqsyqs;
            qckaywmcygiwiygs:
            qmqiyacuyoscwuak:
            goto imewokywqaacyowg;
            cuoksycuqykycike:
        }
        goto omqwgiywimsmoaec;
        ioqssequcuseayyc:
        switch ($sqeykgyoooqysmca) {
            case "\x68\164\x6d\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto ycokoqscowewwsau;
            case "\150\x69\x64\144\x65\156":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto ycokoqscowewwsau;
            case "\x63\150\x65\143\153\x62\157\170":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x74\x65\x78\x74":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\164\145\x78\164\141\x72\145\x61":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\144\x61\x74\x65":
            case "\144\141\x74\x65\164\x69\x6d\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\151\143\157\156":
                goto muascwyseakooami;
                uqkeqwwaysocgsca:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\141\142\x65\154\163", []);
                goto ccgamisoqiigouye;
                ccgamisoqiigouye:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto myoqkkuiequicmym;
                myoqkkuiequicmym:
                goto ycokoqscowewwsau;
                goto swaokakkeggigiqi;
                muascwyseakooami:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto gomegguceiicoocs;
                gomegguceiicoocs:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x63\x6f\156\x73", IconFontawesomeInterface::class);
                goto uqkeqwwaysocgsca;
                swaokakkeggigiqi:
            case "\146\151\x6c\145":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\163\x65\154\x65\x63\x74":
            case "\x73\145\154\x65\x63\x74\55\x32":
            case "\142\x73\x73\145\x6c\145\x63\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x73\x65\154\145\143\164\55\x72\x6f\154\145":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto ycokoqscowewwsau;
            case "\x73\x65\x6c\145\x63\164\55\160\x6f\163\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto ycokoqscowewwsau;
            case "\x73\x65\x6c\x65\x63\x74\55\165\163\x65\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto ycokoqscowewwsau;
            case "\x73\145\154\145\x63\164\55\151\143\157\x6e\55\163\x69\x7a\x65":
                goto keowumoqcaqsmqwa;
                scakegmmqggqwysq:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\151\x63\x6f\156\137\x73\x69\172\145\x73"), []);
                goto meawswqmqouaeuou;
                wayycssguscgyuko:
                osymqmgcqqyomacw:
                goto scakegmmqggqwysq;
                cuwoscseqqwuiqem:
                $ymqmyyeuycgmigyo = __("\x49\x63\157\x6e\40\x53\151\x7a\x65", PR__CMN__FOUNDATION);
                goto wayycssguscgyuko;
                meawswqmqouaeuou:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto uasseoesmyukoosc;
                keowumoqcaqsmqwa:
                if ($ymqmyyeuycgmigyo) {
                    goto osymqmgcqqyomacw;
                }
                goto cuwoscseqqwuiqem;
                uasseoesmyukoosc:
                goto ycokoqscowewwsau;
                goto uyiimywaiywogmeo;
                uyiimywaiywogmeo:
        }
        goto ewmcauccuggcigme;
        kioowwygisuiwkmk:
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
        goto giiycgoccsyaqcyg;
        giiycgoccsyaqcyg:
        CMB2_JS::enqueue();
        goto wckowwygqqukeqgk;
        kseiwaqicoamaqoy:
        CMB2_hookup::enqueue_cmb_css();
        goto ocuuyosqkeqwcima;
        wckowwygqqukeqgk:
        CMB2_hookup::enqueue_cmb_js();
        goto kseiwaqicoamaqoy;
        ocuuyosqkeqwcima:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto osaummwikmkmekys;
        qcoykumuwgysoewo:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\154\141\163\163", "\146\x6f\162\155\x2d\143\157\x6e\x74\141\151\x6e\x65\162");
        goto ikiymiceygwcysuq;
        csoysmsiecqsoiss:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\160\x61\162\145\156\164", false);
        goto oooussisqgggcaua;
        wisagegqkywwycew:
        $eaoumsseceiowgsk->show_form();
        goto omymmwgqumuugieq;
        omymmwgqumuugieq:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto uoqqiuaqysmiimgu;
        waemqmkmioaucwcy:
        self::asimeyiqqkeawyoq();
        goto wisagegqkywwycew;
        wgguwusmimcskmym:
        ob_start();
        goto oociqkqiawuqqksy;
        qmgewyssegcgqsyc:
        aquaysowoigawawe:
        goto okqikeeiigwooqqu;
        masyywacqueuqmgq:
        smmasacqsmkeauwc:
        goto oqiyycgoiogemoes;
        oqiyycgoiogemoes:
        qaucmoeewcagkmsy:
        goto caiuegssgqocqoou;
        caiuegssgqocqoou:
        if (!$koaqeegoeiaiccse) {
            goto aquaysowoigawawe;
        }
        goto gqigmewamcgquoqg;
        gugumscsyciuscus:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\145\x63\x68\x6f", true);
        goto csoysmsiecqsoiss;
        ikiymiceygwcysuq:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\144\151\x76", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto masyywacqueuqmgq;
        oooussisqgggcaua:
        if (!$ikgwqyuyckaewsow) {
            goto qaucmoeewcagkmsy;
        }
        goto caswcwsisomwyuoe;
        imwckieoaqoqqqyi:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\151\144", ManipulateString::uniqid(5));
        goto gugumscsyciuscus;
        oociqkqiawuqqksy:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto waemqmkmioaucwcy;
        uoqqiuaqysmiimgu:
        if (!$omwmuycmeqcqokom) {
            goto smmasacqsmkeauwc;
        }
        goto qcoykumuwgysoewo;
        caswcwsisomwyuoe:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\151\144" => $aokagokqyuysuksm]));
        goto wgguwusmimcskmym;
        gqigmewamcgquoqg:
        echo $nsmgceoqaqogqmuw;
        goto qmgewyssegcgqsyc;
        okqikeeiigwooqqu:
        return $nsmgceoqaqogqmuw;
        goto swsqucqiewccgiuk;
        osaummwikmkmekys:
        $nsmgceoqaqogqmuw = '';
        goto imwckieoaqoqqqyi;
        swsqucqiewccgiuk:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto umcoewewouwwgwwo;
        yoackssggyiukquk:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto kmmgqmcikmqwguoc;
        imgssikcuusmegqq:
        koiuymoiquiegggc:
        goto uacyogkcoymicomk;
        uoeksuocoiscuwom:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto koiuymoiquiegggc;
        }
        goto yoackssggyiukquk;
        uacyogkcoymicomk:
        return $eaoumsseceiowgsk;
        goto iquqmweckeciauye;
        kmmgqmcikmqwguoc:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto gooskwcomqmcaikc;
        gooskwcomqmcaikc:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            oisgwmkkeumoyigq:
        }
        goto memsekycgguswasc;
        umcoewewouwwgwwo:
        $eaoumsseceiowgsk = null;
        goto uoeksuocoiscuwom;
        memsekycgguswasc:
        uikwsekwsekqqieg:
        goto imgssikcuusmegqq;
        iquqmweckeciauye:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto kqeewuquwymmgkuk;
        wqgasgaukewquyau:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto oqssqoagygwswmiq;
        sakiquicymmmqoqw:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto qaykmqcaiaqoemia;
        qmkyoqkqcamsemeq:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto eeyqmmkgmucumosg;
        }
        goto gsgoqwyueokycimc;
        qsoesaysemiyeqam:
        eeyqmmkgmucumosg:
        goto esgweiiwaggqyssi;
        osqiaawasseesgeu:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto oimasmccamqaqymu;
            qmywkmasiqksiqik:
            saykkkmgucwiauqm:
            goto akcwucackkcwoqqm;
            akcwucackkcwoqqm:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                iouwqegyciamycei:
            }
            goto uesauaikigwieyqa;
            cquoyqoigoicqyyi:
            goto eycqeyuoiicccoyc;
            goto qmywkmasiqksiqik;
            wqskmukeywsocaiu:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto cquoyqoigoicqyyi;
            amggqcemagwskmcm:
            ceeqsgoagsueoyqw:
            goto yemmmimewycgacke;
            oimasmccamqaqymu:
            if (is_array($ccamueccusigaaio)) {
                goto saykkkmgucwiauqm;
            }
            goto wqskmukeywsocaiu;
            keiigcicaqummyyw:
            eycqeyuoiicccoyc:
            goto amggqcemagwskmcm;
            uesauaikigwieyqa:
            uyeqykaqeuuwwakq:
            goto keiigcicaqummyyw;
            yemmmimewycgacke:
        }
        goto eqgwasegeiumuiwk;
        ckagmemuawawoiea:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto eeguamkaugacsiky;
        iaccmcoomkyomscs:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto gsoqwsgmqqyyaygm;
        wimgomkqmqqwgkco:
        iscwwmewqmgikukm:
        goto kukwiwysceakqikm;
        esgweiiwaggqyssi:
        if (!is_string($aiowsaccomcoikus)) {
            goto iscwwmewqmgikukm;
        }
        goto gakgswamiwuiikwy;
        kukwiwysceakqikm:
        return $sogksuscggsicmac;
        goto imuiggqqqussckae;
        qaykmqcaiaqoemia:
        aeoimcysgcwaekqe:
        goto iaccmcoomkyomscs;
        oqssqoagygwswmiq:
        goto swgekwwyccscqcsk;
        goto wuaemamkwigigqsm;
        wuaemamkwigigqsm:
        wuysakkwmqwqmusy:
        goto fommawgqgyucksqg;
        kqeewuquwymmgkuk:
        $sogksuscggsicmac = null;
        goto qmkyoqkqcamsemeq;
        kmmqosikyuewwkgc:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto aeoimcysgcwaekqe;
        }
        goto sakiquicymmmqoqw;
        eeguamkaugacsiky:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto ykwsoacemwimkmqe;
        }
        goto osqiaawasseesgeu;
        eqgwasegeiumuiwk:
        yumgwmaewkusyeig:
        goto gwsquykmiyoueaem;
        gsgoqwyueokycimc:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto wuysakkwmqwqmusy;
        }
        goto wqgasgaukewquyau;
        muqcakiqomgiouww:
        ykwsoacemwimkmqe:
        goto kmmqosikyuewwkgc;
        gwsquykmiyoueaem:
        
        goto muqcakiqomgiouww;
        gsoqwsgmqqyyaygm:
        swgekwwyccscqcsk:
        goto qsoesaysemiyeqam;
        fommawgqgyucksqg:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto ckagmemuawawoiea;
        gakgswamiwuiikwy:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto wimgomkqmqqwgkco;
        imuiggqqqussckae:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto ocimkeagywsaisoi;
        cgygmkeaueiwgmqk:
        qmscsiuiwaaeeoom:
        goto icukugckqoqgiuws;
        ocimkeagywsaisoi:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto eooycgwgyygmcmuu;
        eooycgwgyygmcmuu:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            acwocicyuosecagq:
        }
        goto cgygmkeaueiwgmqk;
        icukugckqoqgiuws:
        return $ikgwqyuyckaewsow;
        goto qwwsykceiouooeau;
        qwwsykceiouooeau:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto kwiemwkcogquuews;
        eokggumwwwmgoioy:
        cgokkieyawykgueo:
        goto iisomisiocmgsuyw;
        qqmkagsyoaowquya:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto qcseosqqiqckoqws;
            mocyksssaegycmey:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\x20\x20{$iyqygqimawuycsyq}";
            goto nggwsegkqocuqeqk;
            qcseosqqiqckoqws:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto mocyksssaegycmey;
            nggwsegkqocuqeqk:
            ikcsaouaieccseqi:
            goto uickeqcoyomssici;
            uickeqcoyomssici:
        }
        goto eokggumwwwmgoioy;
        wososskoguokaqei:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto uemuqgqeiwcwscqs;
        iisomisiocmgsuyw:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto ggwwawgwoucowuyo;
        ggwwawgwoucowuyo:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto ceuiqusmmawsykea;
        uemuqgqeiwcwscqs:
        $qiouiwasaauyaaue = [0 => __("\116\x6f\40\x4c\x69\155\151\164", PR__CMN__FOUNDATION)];
        goto qqmkagsyoaowquya;
        ceuiqusmmawsykea:
        return $aiowsaccomcoikus;
        goto eawaqosecwqaaqqe;
        kwiemwkcogquuews:
        $sckumcuqemuukces = __("\155\151\x6e", PR__CMN__FOUNDATION);
        goto cueusceyaaqiwkgc;
        cueusceyaaqiwkgc:
        $ygykagaqyuawwiyo = __("\150\162", PR__CMN__FOUNDATION);
        goto wososskoguokaqei;
        eawaqosecwqaaqqe:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\x6c\x61\142\145\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto eiiwooasmosecscs;
        eiiwooasmosecscs:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\151\x64" => $uusmaiomayssaecw, "\x74\x65\170\164" => $wkaqekwwgqsqwcoi]);
            wceqqamckqyeuaqw:
        }
        goto cuisuaicowuooksy;
        cuisuaicowuooksy:
        oegywukowukugmiu:
        goto gkoeeqqmggqygwyw;
        gkoeeqqmggqygwyw:
        return $ykiyyumywksqcisg;
        goto uwugswmqgicawims;
        uwugswmqgicawims:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto cyicqmoiqscscwya;
        yoaskikikuasaowi:
        return array_map("\145\x73\x63\x5f\x61\x74\164\162", $ygogqywsaqoukoqy);
        goto ymkwemoiaecikiwk;
        memgwegygimsusma:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto yyaksmygsgquwsec;
        aswkgqywucwyesou:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\x65\x73\143\141\160\145\x64\137\151\x63\157\156\x73\137\x64\162\157\160\144\x6f\x77\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto ggcccqcqwcuigcck;
        iekaceqmyeiaeckc:
        ikukmsmyyikckikm:
        goto agioaayyccacmayy;
        kcgucisscoiakqqs:
        if ($mwaeiygkcuuqqgga) {
            goto sauyacymwesqauua;
        }
        goto aswkgqywucwyesou;
        mqoyyykwyuayacou:
        $mwaeiygkcuuqqgga = false;
        goto iwwkscmcmisuuqmo;
        gmggkymmymiciwys:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto ssgeagqeoeosoeei;
            aooaoguggyasagge:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto rwmqgyyueoeaimik;
            ckqwwskgokgsmiqc:
            ikceueaaocmccgkc:
            goto aooaoguggyasagge;
            rwmqgyyueoeaimik:
            suuksqiggsoogugm:
            goto gswsickyiywowuqm;
            ewcwuwuyyqggiago:
            goto suuksqiggsoogugm;
            goto ckqwwskgokgsmiqc;
            ssgeagqeoeosoeei:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\x73\163" => "\151\x63\x6f\156\x2d\x70\x72\x69\155\141\162\171"]);
            goto eogoakwqsaomuygg;
            ycmwuecqmmgiskyk:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto ewcwuwuyyqggiago;
            eogoakwqsaomuygg:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto msqukekiockgmsme;
            gswsickyiywowuqm:
            simuyqcsmiuiykim:
            goto cyqkqseuausyusek;
            msqukekiockgmsme:
            if ($mwaeiygkcuuqqgga) {
                goto ikceueaaocmccgkc;
            }
            goto ycmwuecqmmgiskyk;
            cyqkqseuausyusek:
        }
        goto sicwscwumksmqsku;
        agioaayyccacmayy:
        goto yemgiiosomcamyae;
        goto gwkaucoeaqieesqc;
        yismkseqgqygcsuc:
        wcwakqcywmskawsg:
        goto yoaskikikuasaowi;
        uucoyymywsyuqeke:
        $ygogqywsaqoukoqy = [];
        goto mqoyyykwyuayacou;
        iwwkscmcmisuuqmo:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto gimsigcqasysqcoq;
        }
        goto uiwwywukcysqoqkg;
        iwieeieuciqogska:
        $mwaeiygkcuuqqgga = true;
        goto iekaceqmyeiaeckc;
        uiwwywukcysqoqkg:
        if (!is_array($ykiyyumywksqcisg)) {
            goto ikukmsmyyikckikm;
        }
        goto iwieeieuciqogska;
        rwmmmmyeyiqguesa:
        if (!$ykiyyumywksqcisg) {
            goto wcwakqcywmskawsg;
        }
        goto gmggkymmymiciwys;
        cyicqmoiqscscwya:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto uucoyymywsyuqeke;
        gwkaucoeaqieesqc:
        gimsigcqasysqcoq:
        goto memgwegygimsusma;
        yyaksmygsgquwsec:
        yemgiiosomcamyae:
        goto rwmmmmyeyiqguesa;
        ggcccqcqwcuigcck:
        sauyacymwesqauua:
        goto yismkseqgqygcsuc;
        sicwscwumksmqsku:
        cqskcaaagwgwmiya:
        goto kcgucisscoiakqqs;
        ymkwemoiaecikiwk:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto eokggymayausyoiy;
        cmygaeicigygyiws:
        wcuiwqqcksycgaos:
        goto cwaascimmcuekgws;
        cwaascimmcuekgws:
        if (!(false !== strpos($qoiwmokisgikggia, "\x6c\x69\x67\150\164") || false !== strpos($qoiwmokisgikggia, "\164\x65\162\x74\151\x61\162\x79") || false !== strpos($qoiwmokisgikggia, "\x71\165\141\164\145\x72\156\x61\162\x79") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto giiucgmqsqakyyau;
        }
        goto qcawuomoeekkekma;
        uacmomqsimieooai:
        if ($qoiwmokisgikggia) {
            goto wcuiwqqcksycgaos;
        }
        goto amwkckmmkweisiuk;
        wqasamwokmcayawg:
        return ManipulateHTML::uuccukgasskgimsq("\x64\151\166", ["\x63\x6c\141\163\163" => "\x62\147\55{$qoiwmokisgikggia}\40\x74\145\x78\x74\55{$qimgcsugeskcqeyc}\40\x74\145\x78\164\x2d\143\x65\x6e\x74\x65\x72\x20\x70\x6f\163\151\x74\151\x6f\x6e\55\141\142\x73\157\154\x75\164\x65\40\x77\x2d\61\60\x30\x20\x68\55\x31\x30\60\40\164\x6f\160\x2d\x30\40\154\x65\x66\164\55\x30\40\162\157\x75\x6e\144\145\x64"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\x6c\x61\163\x73" => "\154\x68\x2d\154\147"]));
        goto ckussqqwiokyqoco;
        oequgyowkkssiiqs:
        giiucgmqsqakyyau:
        goto wqasamwokmcayawg;
        eokggymayausyoiy:
        $qimgcsugeskcqeyc = "\x77\x68\151\x74\x65";
        goto uacmomqsimieooai;
        amwkckmmkweisiuk:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto cmygaeicigygyiws;
        qcawuomoeekkekma:
        $qimgcsugeskcqeyc = "\x64\x61\162\x6b";
        goto oequgyowkkssiiqs;
        ckussqqwiokyqoco:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto ieggmouaisogwcuu;
        cqwcyykqggwgsiaw:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto yauuseeeaqyqwmug;
            imccymawgooqumwc:
            aayquskmqceamsgg:
            goto uiukigcawkqkqgyy;
            wkqgikkkmmwmwwgm:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto imccymawgooqumwc;
            yauuseeeaqyqwmug:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto wkqgikkkmmwmwwgm;
            uiukigcawkqkqgyy:
        }
        goto uauqkwumkkqqmesy;
        ikcskcwwcegkoeyy:
        return $ukqisiguweqciuei;
        goto scgucwgayiomwsqu;
        ieggmouaisogwcuu:
        $ukqisiguweqciuei = ['' => __("\x4e\x6f\x6e\145", PR__CMN__FOUNDATION)];
        goto cqwcyykqggwgsiaw;
        uauqkwumkkqqmesy:
        gygmwgucwuyoqiye:
        goto ikcskcwwcegkoeyy;
        scgucwgayiomwsqu:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto ugwoqaioqkmegewk;
        ywiwccokwsyckmyu:
        musiqkgmwycoaguk:
        goto weyuuecsicoyokwc;
        uqockgyiaycuesmi:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\x6f\154\x6f\x72\137\x64\x72\x6f\x70\144\157\x77\156\x5f\151\x74\x65\155\163"), []);
        goto ywiwccokwsyckmyu;
        kgycewokaywkmaiq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x43\157\154\x6f\x72", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto eimwkwakqsagimiq;
        ugwoqaioqkmegewk:
        if ($ukqisiguweqciuei) {
            goto musiqkgmwycoaguk;
        }
        goto uqockgyiaycuesmi;
        wkoewioscwccmkyk:
        ccqumwomwukegucm:
        goto kgycewokaywkmaiq;
        weyuuecsicoyokwc:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto oomsucckcykayauy;
        oomsucckcykayauy:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x6c\x61\142\145\x6c" => $uusmaiomayssaecw, "\x64\x61\x74\x61\55\x63\157\x6e\x74\145\156\164" => $qoiwmokisgikggia];
            ocaicikesocsgoag:
        }
        goto wkoewioscwccmkyk;
        eimwkwakqsagimiq:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto kcwcekkkmwskicqs;
        mcosskywgakgqkgo:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\111\x63\157\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ykeekemagwoeeuwk;
        csukqqcyukewowyu:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto csimuygeycgqmuwa;
        wiaiamgmiiiiowsu:
        return $gmksciycsesoouoi;
        goto yasyescomqgwccau;
        kcwcekkkmwskicqs:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto mcosskywgakgqkgo;
        csimuygeycgqmuwa:
        mmqygmmymswssgak:
        goto umkaksiuoaugusem;
        umkaksiuoaugusem:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto wiaiamgmiiiiowsu;
        ykeekemagwoeeuwk:
        if ($pacsomcuwcegguua) {
            goto mmqygmmymswssgak;
        }
        goto csukqqcyukewowyu;
        yasyescomqgwccau:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto kqamquasawismmyq;
        goyoeacyyikeigyo:
        ecgguiikaeeiwooi:
        goto ociiyomqweeuyqaw;
        ociiyomqweeuyqaw:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\111\x63\157\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto oggeooaecikkokqy;
        fisyqseiiseakuku:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\154\x61\x62\x65\x6c" => $uusmaiomayssaecw, "\144\x61\x74\x61\55\x63\x6f\156\x74\x65\156\x74" => $wkaqekwwgqsqwcoi];
            ieqgkomksqsuoaaa:
        }
        goto goyoeacyyikeigyo;
        kqamquasawismmyq:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto fisyqseiiseakuku;
        oggeooaecikkokqy:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto gmmqkkwsagswkwkm;
        gmmqkkwsagswkwkm:
        if ($meqocwsecsywiiqs) {
            goto ogggoiwaseooqyee;
        }
        goto mkoukageucsqewms;
        mkoukageucsqewms:
        $meqocwsecsywiiqs = __("\x49\x63\x6f\x6e", PR__CMN__FOUNDATION);
        goto qaogwawmaiqokycq;
        qaogwawmaiqokycq:
        ogggoiwaseooqyee:
        goto ougeaoiicseiqwsi;
        ougeaoiicseiqwsi:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto ikiyswysiaqmeuam;
        ikiyswysiaqmeuam:
    }
}
