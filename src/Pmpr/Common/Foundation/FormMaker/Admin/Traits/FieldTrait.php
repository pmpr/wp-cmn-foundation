<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        amuuyacmuasceoog:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\x69\x64", "\164\171\x70\x65", "\x6e\141\x6d\x65"]);
        goto kmoseqyccceksags;
        wiiymmquiymeygoe:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto sweoiiwceiqwkuao;
        sweoiiwceiqwkuao:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto ioqssequcuseayyc;
        mqokweusqkqwakmw:
        if (!is_array($ywmkwiwkosakssii)) {
            goto mgyiqoksoygoguya;
        }
        goto amuuyacmuasceoog;
        sqsqwmwwiwukccqo:
        return $aiowsaccomcoikus;
        goto kioowwygisuiwkmk;
        umieiuyswauuyeww:
        ycokoqscowewwsau:
        goto liyqekcciiuuqasi;
        ioqssequcuseayyc:
        switch ($sqeykgyoooqysmca) {
            case "\150\164\155\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto ycokoqscowewwsau;
            case "\150\151\x64\144\x65\x6e":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto ycokoqscowewwsau;
            case "\143\150\145\x63\153\142\157\x78":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x74\x65\170\164":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x74\145\x78\x74\141\162\145\x61":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\144\141\164\145":
            case "\144\141\x74\145\x74\x69\155\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x69\x63\157\156":
                goto muascwyseakooami;
                gomegguceiicoocs:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\151\143\157\x6e\x73", IconFontawesomeInterface::class);
                goto uqkeqwwaysocgsca;
                ccgamisoqiigouye:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto myoqkkuiequicmym;
                myoqkkuiequicmym:
                goto ycokoqscowewwsau;
                goto swaokakkeggigiqi;
                muascwyseakooami:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto gomegguceiicoocs;
                uqkeqwwaysocgsca:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\x61\142\x65\x6c\x73", []);
                goto ccgamisoqiigouye;
                swaokakkeggigiqi:
            case "\x66\x69\x6c\145":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\x73\x65\154\145\x63\164":
            case "\x73\x65\154\x65\143\164\x2d\x32":
            case "\x62\163\x73\145\154\145\x63\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto ycokoqscowewwsau;
            case "\163\x65\154\145\143\164\55\162\157\x6c\x65":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto ycokoqscowewwsau;
            case "\x73\145\154\145\143\x74\55\160\x6f\163\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto ycokoqscowewwsau;
            case "\163\x65\x6c\x65\143\x74\55\165\x73\145\162":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto ycokoqscowewwsau;
            case "\x73\145\154\145\x63\x74\55\151\x63\157\x6e\55\163\151\172\x65":
                goto keowumoqcaqsmqwa;
                uasseoesmyukoosc:
                goto ycokoqscowewwsau;
                goto uyiimywaiywogmeo;
                cuwoscseqqwuiqem:
                $ymqmyyeuycgmigyo = __("\x49\143\x6f\156\x20\123\x69\x7a\x65", PR__CMN__FOUNDATION);
                goto wayycssguscgyuko;
                meawswqmqouaeuou:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto uasseoesmyukoosc;
                wayycssguscgyuko:
                osymqmgcqqyomacw:
                goto scakegmmqggqwysq;
                keowumoqcaqsmqwa:
                if ($ymqmyyeuycgmigyo) {
                    goto osymqmgcqqyomacw;
                }
                goto cuwoscseqqwuiqem;
                scakegmmqggqwysq:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x69\x63\x6f\x6e\x5f\163\x69\x7a\x65\163"), []);
                goto meawswqmqouaeuou;
                uyiimywaiywogmeo:
        }
        goto ewmcauccuggcigme;
        ysscsgaukqoycyga:
        $aiowsaccomcoikus = null;
        goto oqsaekyeiusqaiki;
        omqwgiywimsmoaec:
        ckagwqgeeamsacqq:
        goto kkgkueoqokwuyyqc;
        gyykicucayuwysqu:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto cckaaosgusoowiqm;
        oqsaekyeiusqaiki:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto gyykicucayuwysqu;
        liyqekcciiuuqasi:
        if (!$aiowsaccomcoikus) {
            goto ekoikoqkigaauoqc;
        }
        goto mqokweusqkqwakmw;
        kmoseqyccceksags:
        $ciagusimogciiumg = ["\141\144\x64", "\x73\x65\x74", ''];
        goto eiseqmycikmoeiom;
        eiseqmycikmoeiom:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto mkigueyysgcycqcs;
            qckaywmcygiwiygs:
            qmqiyacuyoscwuak:
            goto imewokywqaacyowg;
            mkigueyysgcycqcs:
            $wuyimwscukmqqsqk = true;
            goto uiqkqauoskuseqku;
            uoiysouwossowgsg:
            $wuyimwscukmqqsqk = false;
            goto ieuecgaimowummkq;
            cesmmckwemyiugwo:
            ayqeeqsoekuuyaiq:
            goto ygsgoaecoskqsyqs;
            ygsgoaecoskqsyqs:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto kiaeuwkmumywykei;
            ieuecgaimowummkq:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto cesmmckwemyiugwo;
            kiaeuwkmumywykei:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto koqamsqgiomsceqq;
                koqamsqgiomsceqq:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto cyiogsuyagwgiuma;
                wyaayucwkugmakku:
                switch ($wsmeuqcsyguikoci) {
                    case "\143\x6f\154":
                        goto mmwmuokmikccoaig;
                        mmwmuokmikccoaig:
                        $waaaiiqwsmggwsak = explode("\40", $eqgoocgaqwqcimie);
                        goto wkkykweqcekcuwqa;
                        wkkykweqcekcuwqa:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto eoimqaiguyaqgome;
                            owayewqwggkmqgqm:
                            qcqykequcgokomay:
                            goto asgemimceqgyaewi;
                            mqamggsomwomqkyq:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto owayewqwggkmqgqm;
                            eoimqaiguyaqgome:
                            $ymkqyawksmqcgsei = explode("\x2d", $imgcoakmmgqsckkm);
                            goto mqamggsomwomqkyq;
                            asgemimceqgyaewi:
                        }
                        goto mqkkicswmsaiyuic;
                        mqkkicswmsaiyuic:
                        qigoakiooqiyqeou:
                        goto eewasogiegqkcaae;
                        eewasogiegqkcaae:
                        goto kauoikqowoeoeyaw;
                        goto immamiuusugcmuqk;
                        immamiuusugcmuqk:
                    case "\x69\x67\x6e\157\162\141\x62\x6c\145":
                        goto sgyogmaauquycqaa;
                        sgyogmaauquycqaa:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\x76\x61\154\165\145\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\x69\x65\154\x64\163", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x72\145\166\145\x72\163\145", false));
                            yaiawiwigqoemyqm:
                        }
                        goto uekcooqsuqkmkayi;
                        yqowauukqgsoucmg:
                        goto kauoikqowoeoeyaw;
                        goto qkeqcqsgessimeos;
                        uekcooqsuqkmkayi:
                        ceossuqockaiuecg:
                        goto yqowauukqgsoucmg;
                        qkeqcqsgessimeos:
                    default:
                        goto ocosqqykmeikqycm;
                        keieieqewwgqcoia:
                        gaagyqguomuaaqac:
                        goto ugskaqyksuoawecc;
                        wckceqoyawaeusuy:
                        goto gaagyqguomuaaqac;
                        goto cwskuqkeauugauqu;
                        ocosqqykmeikqycm:
                        if ($wuyimwscukmqqsqk) {
                            goto sucwmosiwgasymic;
                        }
                        goto ikykyueiiiiekmkq;
                        cwskuqkeauugauqu:
                        sucwmosiwgasymic:
                        goto qcwqmyukgscaigeq;
                        ikykyueiiiiekmkq:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto wckceqoyawaeusuy;
                        qcwqmyukgscaigeq:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto keieieqewwgqcoia;
                        ugskaqyksuoawecc:
                }
                goto yyeugqugwkyagksm;
                oyioqyigmkwuwuua:
                migagikgsqkwcqca:
                goto omcqsmseccqsckym;
                msueyoiiiyskyswg:
                goto qmqiyacuyoscwuak;
                goto oyioqyigmkwuwuua;
                yyeugqugwkyagksm:
                wsykmmiowmoisiwg:
                goto qeasguwmwomcioyy;
                omcqsmseccqsckym:
                ogiiukgqwuyeyiqo:
                goto aeoywewiquusyamg;
                cyiogsuyagwgiuma:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto migagikgsqkwcqca;
                }
                goto wyaayucwkugmakku;
                qeasguwmwomcioyy:
                kauoikqowoeoeyaw:
                goto msueyoiiiyskyswg;
                aeoywewiquusyamg:
            }
            goto qckaywmcygiwiygs;
            uiqkqauoskuseqku:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto ayqeeqsoekuuyaiq;
            }
            goto uoiysouwossowgsg;
            imewokywqaacyowg:
            myeogiaaukogiiqg:
            goto cuoksycuqykycike;
            cuoksycuqykycike:
        }
        goto omqwgiywimsmoaec;
        kkgkueoqokwuyyqc:
        mgyiqoksoygoguya:
        goto gsqokscmqccqioog;
        gsqokscmqccqioog:
        ekoikoqkigaauoqc:
        goto gaymoimsoqmkkcio;
        cckaaosgusoowiqm:
        if (!$aokagokqyuysuksm) {
            goto cuyikgqsqwymuwem;
        }
        goto wiiymmquiymeygoe;
        ewmcauccuggcigme:
        ekqeaqcmkqoiugms:
        goto umieiuyswauuyeww;
        gaymoimsoqmkkcio:
        cuyikgqsqwymuwem:
        goto sqsqwmwwiwukccqo;
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
        kseiwaqicoamaqoy:
        CMB2_hookup::enqueue_cmb_css();
        goto ocuuyosqkeqwcima;
        wckowwygqqukeqgk:
        CMB2_hookup::enqueue_cmb_js();
        goto kseiwaqicoamaqoy;
        giiycgoccsyaqcyg:
        CMB2_JS::enqueue();
        goto wckowwygqqukeqgk;
        ocuuyosqkeqwcima:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto osaummwikmkmekys;
        osaummwikmkmekys:
        $nsmgceoqaqogqmuw = '';
        goto imwckieoaqoqqqyi;
        caswcwsisomwyuoe:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\x69\x64" => $aokagokqyuysuksm]));
        goto wgguwusmimcskmym;
        masyywacqueuqmgq:
        smmasacqsmkeauwc:
        goto oqiyycgoiogemoes;
        okqikeeiigwooqqu:
        return $nsmgceoqaqogqmuw;
        goto swsqucqiewccgiuk;
        uoqqiuaqysmiimgu:
        if (!$omwmuycmeqcqokom) {
            goto smmasacqsmkeauwc;
        }
        goto qcoykumuwgysoewo;
        qcoykumuwgysoewo:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\154\141\163\x73", "\146\x6f\x72\155\55\143\x6f\156\x74\x61\x69\156\x65\x72");
        goto ikiymiceygwcysuq;
        oociqkqiawuqqksy:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto waemqmkmioaucwcy;
        wgguwusmimcskmym:
        ob_start();
        goto oociqkqiawuqqksy;
        imwckieoaqoqqqyi:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\x69\x64", ManipulateString::uniqid(5));
        goto gugumscsyciuscus;
        qmgewyssegcgqsyc:
        aquaysowoigawawe:
        goto okqikeeiigwooqqu;
        omymmwgqumuugieq:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto uoqqiuaqysmiimgu;
        caiuegssgqocqoou:
        if (!$koaqeegoeiaiccse) {
            goto aquaysowoigawawe;
        }
        goto gqigmewamcgquoqg;
        csoysmsiecqsoiss:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\x70\141\x72\x65\x6e\x74", false);
        goto oooussisqgggcaua;
        waemqmkmioaucwcy:
        self::asimeyiqqkeawyoq();
        goto wisagegqkywwycew;
        gqigmewamcgquoqg:
        echo $nsmgceoqaqogqmuw;
        goto qmgewyssegcgqsyc;
        ikiymiceygwcysuq:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x64\x69\166", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto masyywacqueuqmgq;
        oooussisqgggcaua:
        if (!$ikgwqyuyckaewsow) {
            goto qaucmoeewcagkmsy;
        }
        goto caswcwsisomwyuoe;
        wisagegqkywwycew:
        $eaoumsseceiowgsk->show_form();
        goto omymmwgqumuugieq;
        gugumscsyciuscus:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\x65\143\x68\157", true);
        goto csoysmsiecqsoiss;
        oqiyycgoiogemoes:
        qaucmoeewcagkmsy:
        goto caiuegssgqocqoou;
        swsqucqiewccgiuk:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto umcoewewouwwgwwo;
        gooskwcomqmcaikc:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            oisgwmkkeumoyigq:
        }
        goto memsekycgguswasc;
        uacyogkcoymicomk:
        return $eaoumsseceiowgsk;
        goto iquqmweckeciauye;
        uoeksuocoiscuwom:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto koiuymoiquiegggc;
        }
        goto yoackssggyiukquk;
        imgssikcuusmegqq:
        koiuymoiquiegggc:
        goto uacyogkcoymicomk;
        kmmgqmcikmqwguoc:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto gooskwcomqmcaikc;
        yoackssggyiukquk:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto kmmgqmcikmqwguoc;
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
        ckagmemuawawoiea:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto eeguamkaugacsiky;
        kmmqosikyuewwkgc:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto aeoimcysgcwaekqe;
        }
        goto sakiquicymmmqoqw;
        gsoqwsgmqqyyaygm:
        swgekwwyccscqcsk:
        goto qsoesaysemiyeqam;
        iaccmcoomkyomscs:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto gsoqwsgmqqyyaygm;
        gwsquykmiyoueaem:
        
        goto muqcakiqomgiouww;
        qsoesaysemiyeqam:
        eeyqmmkgmucumosg:
        goto esgweiiwaggqyssi;
        oqssqoagygwswmiq:
        goto swgekwwyccscqcsk;
        goto wuaemamkwigigqsm;
        gakgswamiwuiikwy:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto wimgomkqmqqwgkco;
        fommawgqgyucksqg:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto ckagmemuawawoiea;
        kukwiwysceakqikm:
        return $sogksuscggsicmac;
        goto imuiggqqqussckae;
        sakiquicymmmqoqw:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto qaykmqcaiaqoemia;
        gsgoqwyueokycimc:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto wuysakkwmqwqmusy;
        }
        goto wqgasgaukewquyau;
        wimgomkqmqqwgkco:
        iscwwmewqmgikukm:
        goto kukwiwysceakqikm;
        qaykmqcaiaqoemia:
        aeoimcysgcwaekqe:
        goto iaccmcoomkyomscs;
        wqgasgaukewquyau:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto oqssqoagygwswmiq;
        eqgwasegeiumuiwk:
        yumgwmaewkusyeig:
        goto gwsquykmiyoueaem;
        esgweiiwaggqyssi:
        if (!is_string($aiowsaccomcoikus)) {
            goto iscwwmewqmgikukm;
        }
        goto gakgswamiwuiikwy;
        qmkyoqkqcamsemeq:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto eeyqmmkgmucumosg;
        }
        goto gsgoqwyueokycimc;
        kqeewuquwymmgkuk:
        $sogksuscggsicmac = null;
        goto qmkyoqkqcamsemeq;
        eeguamkaugacsiky:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto ykwsoacemwimkmqe;
        }
        goto osqiaawasseesgeu;
        osqiaawasseesgeu:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto oimasmccamqaqymu;
            akcwucackkcwoqqm:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                iouwqegyciamycei:
            }
            goto uesauaikigwieyqa;
            keiigcicaqummyyw:
            eycqeyuoiicccoyc:
            goto amggqcemagwskmcm;
            qmywkmasiqksiqik:
            saykkkmgucwiauqm:
            goto akcwucackkcwoqqm;
            amggqcemagwskmcm:
            ceeqsgoagsueoyqw:
            goto yemmmimewycgacke;
            cquoyqoigoicqyyi:
            goto eycqeyuoiicccoyc;
            goto qmywkmasiqksiqik;
            oimasmccamqaqymu:
            if (is_array($ccamueccusigaaio)) {
                goto saykkkmgucwiauqm;
            }
            goto wqskmukeywsocaiu;
            wqskmukeywsocaiu:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto cquoyqoigoicqyyi;
            uesauaikigwieyqa:
            uyeqykaqeuuwwakq:
            goto keiigcicaqummyyw;
            yemmmimewycgacke:
        }
        goto eqgwasegeiumuiwk;
        muqcakiqomgiouww:
        ykwsoacemwimkmqe:
        goto kmmqosikyuewwkgc;
        wuaemamkwigigqsm:
        wuysakkwmqwqmusy:
        goto fommawgqgyucksqg;
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
        cueusceyaaqiwkgc:
        $ygykagaqyuawwiyo = __("\150\x72", PR__CMN__FOUNDATION);
        goto wososskoguokaqei;
        qqmkagsyoaowquya:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto qcseosqqiqckoqws;
            mocyksssaegycmey:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\x20{$iyqygqimawuycsyq}";
            goto nggwsegkqocuqeqk;
            nggwsegkqocuqeqk:
            ikcsaouaieccseqi:
            goto uickeqcoyomssici;
            qcseosqqiqckoqws:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto mocyksssaegycmey;
            uickeqcoyomssici:
        }
        goto eokggumwwwmgoioy;
        ceuiqusmmawsykea:
        return $aiowsaccomcoikus;
        goto eawaqosecwqaaqqe;
        eokggumwwwmgoioy:
        cgokkieyawykgueo:
        goto iisomisiocmgsuyw;
        wososskoguokaqei:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto uemuqgqeiwcwscqs;
        ggwwawgwoucowuyo:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto ceuiqusmmawsykea;
        uemuqgqeiwcwscqs:
        $qiouiwasaauyaaue = [0 => __("\116\x6f\x20\x4c\x69\x6d\x69\x74", PR__CMN__FOUNDATION)];
        goto qqmkagsyoaowquya;
        iisomisiocmgsuyw:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto ggwwawgwoucowuyo;
        kwiemwkcogquuews:
        $sckumcuqemuukces = __("\155\151\x6e", PR__CMN__FOUNDATION);
        goto cueusceyaaqiwkgc;
        eawaqosecwqaaqqe:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\x6c\x61\142\x65\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto eiiwooasmosecscs;
        cuisuaicowuooksy:
        oegywukowukugmiu:
        goto gkoeeqqmggqygwyw;
        gkoeeqqmggqygwyw:
        return $ykiyyumywksqcisg;
        goto uwugswmqgicawims;
        eiiwooasmosecscs:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\151\144" => $uusmaiomayssaecw, "\x74\x65\170\164" => $wkaqekwwgqsqwcoi]);
            wceqqamckqyeuaqw:
        }
        goto cuisuaicowuooksy;
        uwugswmqgicawims:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto cyicqmoiqscscwya;
        uiwwywukcysqoqkg:
        if (!is_array($ykiyyumywksqcisg)) {
            goto ikukmsmyyikckikm;
        }
        goto iwieeieuciqogska;
        kcgucisscoiakqqs:
        if ($mwaeiygkcuuqqgga) {
            goto sauyacymwesqauua;
        }
        goto aswkgqywucwyesou;
        yoaskikikuasaowi:
        return array_map("\x65\163\x63\137\141\164\164\x72", $ygogqywsaqoukoqy);
        goto ymkwemoiaecikiwk;
        yyaksmygsgquwsec:
        yemgiiosomcamyae:
        goto rwmmmmyeyiqguesa;
        cyicqmoiqscscwya:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto uucoyymywsyuqeke;
        iekaceqmyeiaeckc:
        ikukmsmyyikckikm:
        goto agioaayyccacmayy;
        agioaayyccacmayy:
        goto yemgiiosomcamyae;
        goto gwkaucoeaqieesqc;
        uucoyymywsyuqeke:
        $ygogqywsaqoukoqy = [];
        goto mqoyyykwyuayacou;
        yismkseqgqygcsuc:
        wcwakqcywmskawsg:
        goto yoaskikikuasaowi;
        memgwegygimsusma:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto yyaksmygsgquwsec;
        sicwscwumksmqsku:
        cqskcaaagwgwmiya:
        goto kcgucisscoiakqqs;
        gmggkymmymiciwys:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto ssgeagqeoeosoeei;
            eogoakwqsaomuygg:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto msqukekiockgmsme;
            rwmqgyyueoeaimik:
            suuksqiggsoogugm:
            goto gswsickyiywowuqm;
            ssgeagqeoeosoeei:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\163\x73" => "\x69\x63\157\156\55\160\x72\151\x6d\141\162\171"]);
            goto eogoakwqsaomuygg;
            ewcwuwuyyqggiago:
            goto suuksqiggsoogugm;
            goto ckqwwskgokgsmiqc;
            msqukekiockgmsme:
            if ($mwaeiygkcuuqqgga) {
                goto ikceueaaocmccgkc;
            }
            goto ycmwuecqmmgiskyk;
            ckqwwskgokgsmiqc:
            ikceueaaocmccgkc:
            goto aooaoguggyasagge;
            gswsickyiywowuqm:
            simuyqcsmiuiykim:
            goto cyqkqseuausyusek;
            aooaoguggyasagge:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto rwmqgyyueoeaimik;
            ycmwuecqmmgiskyk:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto ewcwuwuyyqggiago;
            cyqkqseuausyusek:
        }
        goto sicwscwumksmqsku;
        rwmmmmyeyiqguesa:
        if (!$ykiyyumywksqcisg) {
            goto wcwakqcywmskawsg;
        }
        goto gmggkymmymiciwys;
        aswkgqywucwyesou:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\145\x73\143\141\x70\145\x64\137\x69\x63\x6f\x6e\163\x5f\x64\162\x6f\x70\x64\x6f\x77\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto ggcccqcqwcuigcck;
        mqoyyykwyuayacou:
        $mwaeiygkcuuqqgga = false;
        goto iwwkscmcmisuuqmo;
        iwieeieuciqogska:
        $mwaeiygkcuuqqgga = true;
        goto iekaceqmyeiaeckc;
        ggcccqcqwcuigcck:
        sauyacymwesqauua:
        goto yismkseqgqygcsuc;
        gwkaucoeaqieesqc:
        gimsigcqasysqcoq:
        goto memgwegygimsusma;
        iwwkscmcmisuuqmo:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto gimsigcqasysqcoq;
        }
        goto uiwwywukcysqoqkg;
        ymkwemoiaecikiwk:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto eokggymayausyoiy;
        uacmomqsimieooai:
        if ($qoiwmokisgikggia) {
            goto wcuiwqqcksycgaos;
        }
        goto amwkckmmkweisiuk;
        cwaascimmcuekgws:
        if (!(false !== strpos($qoiwmokisgikggia, "\154\151\147\150\x74") || false !== strpos($qoiwmokisgikggia, "\164\145\x72\x74\x69\141\x72\x79") || false !== strpos($qoiwmokisgikggia, "\161\x75\141\164\145\x72\x6e\141\162\171") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto giiucgmqsqakyyau;
        }
        goto qcawuomoeekkekma;
        amwkckmmkweisiuk:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto cmygaeicigygyiws;
        oequgyowkkssiiqs:
        giiucgmqsqakyyau:
        goto wqasamwokmcayawg;
        eokggymayausyoiy:
        $qimgcsugeskcqeyc = "\167\x68\x69\x74\x65";
        goto uacmomqsimieooai;
        wqasamwokmcayawg:
        return ManipulateHTML::uuccukgasskgimsq("\144\x69\x76", ["\143\154\x61\x73\163" => "\x62\x67\x2d{$qoiwmokisgikggia}\x20\164\145\x78\x74\x2d{$qimgcsugeskcqeyc}\40\164\145\170\x74\x2d\x63\145\156\x74\145\x72\x20\160\x6f\163\151\164\x69\157\156\55\x61\142\163\x6f\154\165\x74\x65\40\167\x2d\x31\x30\x30\40\150\x2d\x31\x30\x30\x20\x74\157\160\55\x30\x20\154\x65\x66\x74\x2d\60\40\x72\x6f\165\156\x64\x65\x64"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\x61\x73\x73" => "\x6c\150\x2d\154\x67"]));
        goto ckussqqwiokyqoco;
        qcawuomoeekkekma:
        $qimgcsugeskcqeyc = "\144\141\162\153";
        goto oequgyowkkssiiqs;
        cmygaeicigygyiws:
        wcuiwqqcksycgaos:
        goto cwaascimmcuekgws;
        ckussqqwiokyqoco:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto ieggmouaisogwcuu;
        ieggmouaisogwcuu:
        $ukqisiguweqciuei = ['' => __("\x4e\157\156\x65", PR__CMN__FOUNDATION)];
        goto cqwcyykqggwgsiaw;
        uauqkwumkkqqmesy:
        gygmwgucwuyoqiye:
        goto ikcskcwwcegkoeyy;
        ikcskcwwcegkoeyy:
        return $ukqisiguweqciuei;
        goto scgucwgayiomwsqu;
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
        scgucwgayiomwsqu:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto ugwoqaioqkmegewk;
        wkoewioscwccmkyk:
        ccqumwomwukegucm:
        goto kgycewokaywkmaiq;
        uqockgyiaycuesmi:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\143\x6f\154\157\162\137\x64\162\157\160\144\157\167\x6e\x5f\151\164\145\155\x73"), []);
        goto ywiwccokwsyckmyu;
        ugwoqaioqkmegewk:
        if ($ukqisiguweqciuei) {
            goto musiqkgmwycoaguk;
        }
        goto uqockgyiaycuesmi;
        weyuuecsicoyokwc:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto oomsucckcykayauy;
        oomsucckcykayauy:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x6c\x61\x62\x65\154" => $uusmaiomayssaecw, "\144\141\164\141\55\143\157\156\164\x65\x6e\x74" => $qoiwmokisgikggia];
            ocaicikesocsgoag:
        }
        goto wkoewioscwccmkyk;
        kgycewokaywkmaiq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x43\157\x6c\157\x72", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto eimwkwakqsagimiq;
        ywiwccokwsyckmyu:
        musiqkgmwycoaguk:
        goto weyuuecsicoyokwc;
        eimwkwakqsagimiq:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto kcwcekkkmwskicqs;
        csukqqcyukewowyu:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto csimuygeycgqmuwa;
        mcosskywgakgqkgo:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\x63\x6f\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto ykeekemagwoeeuwk;
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
        kcwcekkkmwskicqs:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto mcosskywgakgqkgo;
        wiaiamgmiiiiowsu:
        return $gmksciycsesoouoi;
        goto yasyescomqgwccau;
        yasyescomqgwccau:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto kqamquasawismmyq;
        goyoeacyyikeigyo:
        ecgguiikaeeiwooi:
        goto ociiyomqweeuyqaw;
        kqamquasawismmyq:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto fisyqseiiseakuku;
        fisyqseiiseakuku:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\154\x61\x62\145\x6c" => $uusmaiomayssaecw, "\144\141\164\x61\x2d\x63\157\x6e\x74\145\156\164" => $wkaqekwwgqsqwcoi];
            ieqgkomksqsuoaaa:
        }
        goto goyoeacyyikeigyo;
        ociiyomqweeuyqaw:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\111\143\157\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto oggeooaecikkokqy;
        oggeooaecikkokqy:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto gmmqkkwsagswkwkm;
        ougeaoiicseiqwsi:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto ikiyswysiaqmeuam;
        qaogwawmaiqokycq:
        ogggoiwaseooqyee:
        goto ougeaoiicseiqwsi;
        mkoukageucsqewms:
        $meqocwsecsywiiqs = __("\111\x63\x6f\x6e", PR__CMN__FOUNDATION);
        goto qaogwawmaiqokycq;
        gmmqkkwsagswkwkm:
        if ($meqocwsecsywiiqs) {
            goto ogggoiwaseooqyee;
        }
        goto mkoukageucsqewms;
        ikiyswysiaqmeuam:
    }
}
