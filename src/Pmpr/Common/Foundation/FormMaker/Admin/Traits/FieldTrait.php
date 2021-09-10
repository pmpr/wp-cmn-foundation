<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        goto mgyiqoksoygoguya;
        liyqekcciiuuqasi:
        $ciagusimogciiumg = ["\141\x64\x64", "\x73\x65\164", ''];
        goto mqokweusqkqwakmw;
        ekoikoqkigaauoqc:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        goto cuyikgqsqwymuwem;
        ewmcauccuggcigme:
        if (!is_array($ywmkwiwkosakssii)) {
            goto qckaywmcygiwiygs;
        }
        goto umieiuyswauuyeww;
        eiseqmycikmoeiom:
        imewokywqaacyowg:
        goto omqwgiywimsmoaec;
        omqwgiywimsmoaec:
        cuoksycuqykycike:
        goto kkgkueoqokwuyyqc;
        umieiuyswauuyeww:
        ManipulateArray::unset($ywmkwiwkosakssii, ["\151\144", "\x74\x79\x70\x65", "\x6e\x61\155\x65"]);
        goto liyqekcciiuuqasi;
        oqsaekyeiusqaiki:
        $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
        goto gyykicucayuwysqu;
        kkgkueoqokwuyyqc:
        return $aiowsaccomcoikus;
        goto gsqokscmqccqioog;
        mqokweusqkqwakmw:
        foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
            goto oyioqyigmkwuwuua;
            uiqkqauoskuseqku:
            uyiimywaiywogmeo:
            goto uoiysouwossowgsg;
            uoiysouwossowgsg:
            $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
            goto ieuecgaimowummkq;
            ygsgoaecoskqsyqs:
            uasseoesmyukoosc:
            goto kiaeuwkmumywykei;
            cesmmckwemyiugwo:
            ckagwqgeeamsacqq:
            goto ygsgoaecoskqsyqs;
            oyioqyigmkwuwuua:
            $wuyimwscukmqqsqk = true;
            goto omcqsmseccqsckym;
            mkigueyysgcycqcs:
            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
            goto uiqkqauoskuseqku;
            omcqsmseccqsckym:
            if (!is_numeric($wsmeuqcsyguikoci)) {
                goto uyiimywaiywogmeo;
            }
            goto aeoywewiquusyamg;
            ieuecgaimowummkq:
            foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                goto keieieqewwgqcoia;
                ugskaqyksuoawecc:
                if (!($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs))) {
                    goto qcwqmyukgscaigeq;
                }
                goto migagikgsqkwcqca;
                migagikgsqkwcqca:
                switch ($wsmeuqcsyguikoci) {
                    case "\x63\157\x6c":
                        goto mqamggsomwomqkyq;
                        mqamggsomwomqkyq:
                        $waaaiiqwsmggwsak = explode("\40", $eqgoocgaqwqcimie);
                        goto owayewqwggkmqgqm;
                        mmwmuokmikccoaig:
                        goto ayqeeqsoekuuyaiq;
                        goto wkkykweqcekcuwqa;
                        asgemimceqgyaewi:
                        ogiiukgqwuyeyiqo:
                        goto mmwmuokmikccoaig;
                        owayewqwggkmqgqm:
                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                            goto wsykmmiowmoisiwg;
                            wsykmmiowmoisiwg:
                            $ymkqyawksmqcgsei = explode("\55", $imgcoakmmgqsckkm);
                            goto qigoakiooqiyqeou;
                            qcqykequcgokomay:
                            kauoikqowoeoeyaw:
                            goto eoimqaiguyaqgome;
                            qigoakiooqiyqeou:
                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                            goto qcqykequcgokomay;
                            eoimqaiguyaqgome:
                        }
                        goto asgemimceqgyaewi;
                        wkkykweqcekcuwqa:
                    case "\x69\147\x6e\x6f\162\x61\x62\x6c\x65":
                        goto immamiuusugcmuqk;
                        ceossuqockaiuecg:
                        mqkkicswmsaiyuic:
                        goto yaiawiwigqoemyqm;
                        yaiawiwigqoemyqm:
                        goto ayqeeqsoekuuyaiq;
                        goto sgyogmaauquycqaa;
                        immamiuusugcmuqk:
                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, "\x76\x61\154\x75\145\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\146\151\145\x6c\x64\x73", []), ManipulateArray::get($oyumuuqqsmuacmak, "\x72\145\166\x65\x72\x73\x65", false));
                            eewasogiegqkcaae:
                        }
                        goto ceossuqockaiuecg;
                        sgyogmaauquycqaa:
                    default:
                        goto qkeqcqsgessimeos;
                        sucwmosiwgasymic:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                        goto gaagyqguomuaaqac;
                        wckceqoyawaeusuy:
                        yqowauukqgsoucmg:
                        goto cwskuqkeauugauqu;
                        qkeqcqsgessimeos:
                        if ($wuyimwscukmqqsqk) {
                            goto uekcooqsuqkmkayi;
                        }
                        goto sucwmosiwgasymic;
                        gaagyqguomuaaqac:
                        goto yqowauukqgsoucmg;
                        goto ocosqqykmeikqycm;
                        ikykyueiiiiekmkq:
                        $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                        goto wckceqoyawaeusuy;
                        ocosqqykmeikqycm:
                        uekcooqsuqkmkayi:
                        goto ikykyueiiiiekmkq;
                        cwskuqkeauugauqu:
                }
                goto koqamsqgiomsceqq;
                cyiogsuyagwgiuma:
                ayqeeqsoekuuyaiq:
                goto wyaayucwkugmakku;
                wyaayucwkugmakku:
                goto ckagwqgeeamsacqq;
                goto yyeugqugwkyagksm;
                qeasguwmwomcioyy:
                myeogiaaukogiiqg:
                goto msueyoiiiyskyswg;
                keieieqewwgqcoia:
                $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                goto ugskaqyksuoawecc;
                yyeugqugwkyagksm:
                qcwqmyukgscaigeq:
                goto qeasguwmwomcioyy;
                koqamsqgiomsceqq:
                qmqiyacuyoscwuak:
                goto cyiogsuyagwgiuma;
                msueyoiiiyskyswg:
            }
            goto cesmmckwemyiugwo;
            aeoywewiquusyamg:
            $wuyimwscukmqqsqk = false;
            goto mkigueyysgcycqcs;
            kiaeuwkmumywykei:
        }
        goto amuuyacmuasceoog;
        ioqssequcuseayyc:
        if (!$aiowsaccomcoikus) {
            goto imewokywqaacyowg;
        }
        goto ewmcauccuggcigme;
        amuuyacmuasceoog:
        meawswqmqouaeuou:
        goto kmoseqyccceksags;
        cckaaosgusoowiqm:
        switch ($sqeykgyoooqysmca) {
            case "\150\164\x6d\154":
                $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                goto msakyecawuskgema;
            case "\150\151\144\144\x65\156":
                $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                goto msakyecawuskgema;
            case "\x63\150\x65\143\x6b\x62\x6f\x78":
                $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\164\145\x78\164":
                $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\x74\x65\170\x74\141\162\145\141":
                $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\144\141\x74\145":
            case "\x64\141\x74\x65\164\151\x6d\x65":
                $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\151\x63\157\156":
                goto bkwacmcewmysqowo;
                bkwacmcewmysqowo:
                $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                goto ycokoqscowewwsau;
                muascwyseakooami:
                $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                goto gomegguceiicoocs;
                ycokoqscowewwsau:
                $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, "\x69\x63\157\156\163", IconFontawesomeInterface::class);
                goto ekqeaqcmkqoiugms;
                ekqeaqcmkqoiugms:
                $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, "\154\141\x62\x65\x6c\163", []);
                goto muascwyseakooami;
                gomegguceiicoocs:
                goto msakyecawuskgema;
                goto uqkeqwwaysocgsca;
                uqkeqwwaysocgsca:
            case "\x66\x69\154\x65":
                $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\163\x65\x6c\x65\x63\164":
            case "\163\145\x6c\x65\x63\164\55\x32":
            case "\x62\163\x73\145\x6c\x65\143\x74":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                goto msakyecawuskgema;
            case "\x73\x65\x6c\145\x63\x74\55\x72\157\154\x65":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                goto msakyecawuskgema;
            case "\163\x65\x6c\x65\143\164\x2d\160\x6f\163\164":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                goto msakyecawuskgema;
            case "\163\145\x6c\x65\143\x74\55\x75\163\x65\x72":
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                goto msakyecawuskgema;
            case "\163\x65\x6c\x65\x63\x74\x2d\x69\x63\x6f\x6e\x2d\163\x69\x7a\x65":
                goto myoqkkuiequicmym;
                swaokakkeggigiqi:
                $ymqmyyeuycgmigyo = __("\x49\143\x6f\x6e\x20\123\151\172\145", PR__CMN__FOUNDATION);
                goto osymqmgcqqyomacw;
                wayycssguscgyuko:
                goto msakyecawuskgema;
                goto scakegmmqggqwysq;
                osymqmgcqqyomacw:
                ccgamisoqiigouye:
                goto keowumoqcaqsmqwa;
                myoqkkuiequicmym:
                if ($ymqmyyeuycgmigyo) {
                    goto ccgamisoqiigouye;
                }
                goto swaokakkeggigiqi;
                keowumoqcaqsmqwa:
                $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\151\143\157\156\x5f\163\151\172\x65\x73"), []);
                goto cuwoscseqqwuiqem;
                cuwoscseqqwuiqem:
                $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                goto wayycssguscgyuko;
                scakegmmqggqwysq:
        }
        goto wiiymmquiymeygoe;
        mgyiqoksoygoguya:
        $aiowsaccomcoikus = null;
        goto ekoikoqkigaauoqc;
        cuyikgqsqwymuwem:
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        goto ysscsgaukqoycyga;
        ysscsgaukqoycyga:
        if (!$aokagokqyuysuksm) {
            goto cuoksycuqykycike;
        }
        goto oqsaekyeiusqaiki;
        gyykicucayuwysqu:
        $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
        goto cckaaosgusoowiqm;
        kmoseqyccceksags:
        qckaywmcygiwiygs:
        goto eiseqmycikmoeiom;
        sweoiiwceiqwkuao:
        msakyecawuskgema:
        goto ioqssequcuseayyc;
        wiiymmquiymeygoe:
        amaswgogkauskswc:
        goto sweoiiwceiqwkuao;
        gsqokscmqccqioog:
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
        goto gaymoimsoqmkkcio;
        gaymoimsoqmkkcio:
        CMB2_JS::enqueue();
        goto sqsqwmwwiwukccqo;
        sqsqwmwwiwukccqo:
        CMB2_hookup::enqueue_cmb_js();
        goto kioowwygisuiwkmk;
        kioowwygisuiwkmk:
        CMB2_hookup::enqueue_cmb_css();
        goto giiycgoccsyaqcyg;
        giiycgoccsyaqcyg:
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        goto smmasacqsmkeauwc;
        caiuegssgqocqoou:
        return $nsmgceoqaqogqmuw;
        goto gqigmewamcgquoqg;
        imwckieoaqoqqqyi:
        if (!$ikgwqyuyckaewsow) {
            goto kseiwaqicoamaqoy;
        }
        goto gugumscsyciuscus;
        omymmwgqumuugieq:
        $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq("\x64\151\x76", $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
        goto uoqqiuaqysmiimgu;
        wisagegqkywwycew:
        $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, "\143\x6c\141\x73\163", "\146\x6f\x72\155\55\143\x6f\x6e\x74\141\151\156\x65\x72");
        goto omymmwgqumuugieq;
        oooussisqgggcaua:
        $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
        goto caswcwsisomwyuoe;
        masyywacqueuqmgq:
        echo $nsmgceoqaqogqmuw;
        goto oqiyycgoiogemoes;
        ikiymiceygwcysuq:
        if (!$koaqeegoeiaiccse) {
            goto ocuuyosqkeqwcima;
        }
        goto masyywacqueuqmgq;
        qcoykumuwgysoewo:
        kseiwaqicoamaqoy:
        goto ikiymiceygwcysuq;
        aquaysowoigawawe:
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, "\145\x63\150\157", true);
        goto osaummwikmkmekys;
        osaummwikmkmekys:
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, "\x70\x61\x72\145\156\164", false);
        goto imwckieoaqoqqqyi;
        wgguwusmimcskmym:
        $eaoumsseceiowgsk->show_form();
        goto oociqkqiawuqqksy;
        smmasacqsmkeauwc:
        $nsmgceoqaqogqmuw = '';
        goto qaucmoeewcagkmsy;
        uoqqiuaqysmiimgu:
        wckowwygqqukeqgk:
        goto qcoykumuwgysoewo;
        oqiyycgoiogemoes:
        ocuuyosqkeqwcima:
        goto caiuegssgqocqoou;
        gugumscsyciuscus:
        $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ["\x69\144" => $aokagokqyuysuksm]));
        goto csoysmsiecqsoiss;
        waemqmkmioaucwcy:
        if (!$omwmuycmeqcqokom) {
            goto wckowwygqqukeqgk;
        }
        goto wisagegqkywwycew;
        oociqkqiawuqqksy:
        $nsmgceoqaqogqmuw = ob_get_clean();
        goto waemqmkmioaucwcy;
        csoysmsiecqsoiss:
        ob_start();
        goto oooussisqgggcaua;
        caswcwsisomwyuoe:
        self::asimeyiqqkeawyoq();
        goto wgguwusmimcskmym;
        qaucmoeewcagkmsy:
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, "\x69\144", ManipulateString::uniqid(5));
        goto aquaysowoigawawe;
        gqigmewamcgquoqg:
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        goto uikwsekwsekqqieg;
        umcoewewouwwgwwo:
        $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
        goto uoeksuocoiscuwom;
        yoackssggyiukquk:
        qmgewyssegcgqsyc:
        goto kmmgqmcikmqwguoc;
        uoeksuocoiscuwom:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
            okqikeeiigwooqqu:
        }
        goto yoackssggyiukquk;
        koiuymoiquiegggc:
        $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
        goto umcoewewouwwgwwo;
        oisgwmkkeumoyigq:
        if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) {
            goto swsqucqiewccgiuk;
        }
        goto koiuymoiquiegggc;
        kmmgqmcikmqwguoc:
        swsqucqiewccgiuk:
        goto gooskwcomqmcaikc;
        gooskwcomqmcaikc:
        return $eaoumsseceiowgsk;
        goto memsekycgguswasc;
        uikwsekwsekqqieg:
        $eaoumsseceiowgsk = null;
        goto oisgwmkkeumoyigq;
        memsekycgguswasc:
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        goto swgekwwyccscqcsk;
        gsoqwsgmqqyyaygm:
        $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        goto qsoesaysemiyeqam;
        muqcakiqomgiouww:
        amggqcemagwskmcm:
        goto kmmqosikyuewwkgc;
        eeyqmmkgmucumosg:
        if (!$aiowsaccomcoikus instanceof Fields\Field) {
            goto aeoimcysgcwaekqe;
        }
        goto iscwwmewqmgikukm;
        wuaemamkwigigqsm:
        if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) {
            goto keiigcicaqummyyw;
        }
        goto fommawgqgyucksqg;
        kqeewuquwymmgkuk:
        $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
        goto qmkyoqkqcamsemeq;
        eqgwasegeiumuiwk:
        if (!$aiowsaccomcoikus instanceof Fields\Group) {
            goto amggqcemagwskmcm;
        }
        goto gwsquykmiyoueaem;
        kmmqosikyuewwkgc:
        $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
        goto sakiquicymmmqoqw;
        wqgasgaukewquyau:
        $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
        goto oqssqoagygwswmiq;
        iscwwmewqmgikukm:
        if ($aqykuigiuwmmcieu === ARRAY_A) {
            goto yemmmimewycgacke;
        }
        goto kqeewuquwymmgkuk;
        eeguamkaugacsiky:
        
        goto osqiaawasseesgeu;
        qmkyoqkqcamsemeq:
        goto ykwsoacemwimkmqe;
        goto gsgoqwyueokycimc;
        swgekwwyccscqcsk:
        $sogksuscggsicmac = null;
        goto eeyqmmkgmucumosg;
        oqssqoagygwswmiq:
        $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
        goto wuaemamkwigigqsm;
        sakiquicymmmqoqw:
        ykwsoacemwimkmqe:
        goto qaykmqcaiaqoemia;
        osqiaawasseesgeu:
        keiigcicaqummyyw:
        goto eqgwasegeiumuiwk;
        gsgoqwyueokycimc:
        yemmmimewycgacke:
        goto wqgasgaukewquyau;
        fommawgqgyucksqg:
        foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
            goto iouwqegyciamycei;
            wqskmukeywsocaiu:
            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                yumgwmaewkusyeig:
            }
            goto cquoyqoigoicqyyi;
            iouwqegyciamycei:
            if (is_array($ccamueccusigaaio)) {
                goto ceeqsgoagsueoyqw;
            }
            goto saykkkmgucwiauqm;
            akcwucackkcwoqqm:
            uacyogkcoymicomk:
            goto uesauaikigwieyqa;
            oimasmccamqaqymu:
            ceeqsgoagsueoyqw:
            goto wqskmukeywsocaiu;
            saykkkmgucwiauqm:
            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
            goto eycqeyuoiicccoyc;
            cquoyqoigoicqyyi:
            iquqmweckeciauye:
            goto qmywkmasiqksiqik;
            eycqeyuoiicccoyc:
            goto uyeqykaqeuuwwakq;
            goto oimasmccamqaqymu;
            qmywkmasiqksiqik:
            uyeqykaqeuuwwakq:
            goto akcwucackkcwoqqm;
            uesauaikigwieyqa:
        }
        goto ckagmemuawawoiea;
        iaccmcoomkyomscs:
        if (!is_string($aiowsaccomcoikus)) {
            goto wuysakkwmqwqmusy;
        }
        goto gsoqwsgmqqyyaygm;
        gwsquykmiyoueaem:
        $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
        goto muqcakiqomgiouww;
        qsoesaysemiyeqam:
        wuysakkwmqwqmusy:
        goto esgweiiwaggqyssi;
        ckagmemuawawoiea:
        imgssikcuusmegqq:
        goto eeguamkaugacsiky;
        esgweiiwaggqyssi:
        return $sogksuscggsicmac;
        goto gakgswamiwuiikwy;
        qaykmqcaiaqoemia:
        aeoimcysgcwaekqe:
        goto iaccmcoomkyomscs;
        gakgswamiwuiikwy:
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        goto imuiggqqqussckae;
        imuiggqqqussckae:
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        goto qmscsiuiwaaeeoom;
        qmscsiuiwaaeeoom:
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            kukwiwysceakqikm:
        }
        goto acwocicyuosecagq;
        acwocicyuosecagq:
        wimgomkqmqqwgkco:
        goto ocimkeagywsaisoi;
        ocimkeagywsaisoi:
        return $ikgwqyuyckaewsow;
        goto eooycgwgyygmcmuu;
        eooycgwgyygmcmuu:
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        goto mocyksssaegycmey;
        uickeqcoyomssici:
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        goto kwiemwkcogquuews;
        eokggumwwwmgoioy:
        return $aiowsaccomcoikus;
        goto iisomisiocmgsuyw;
        kwiemwkcogquuews:
        $qiouiwasaauyaaue = [0 => __("\x4e\157\40\x4c\x69\155\x69\x74", PR__CMN__FOUNDATION)];
        goto cueusceyaaqiwkgc;
        mocyksssaegycmey:
        $sckumcuqemuukces = __("\x6d\151\156", PR__CMN__FOUNDATION);
        goto nggwsegkqocuqeqk;
        uemuqgqeiwcwscqs:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        goto qqmkagsyoaowquya;
        wososskoguokaqei:
        cgygmkeaueiwgmqk:
        goto uemuqgqeiwcwscqs;
        nggwsegkqocuqeqk:
        $ygykagaqyuawwiyo = __("\x68\162", PR__CMN__FOUNDATION);
        goto uickeqcoyomssici;
        cueusceyaaqiwkgc:
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            goto qwwsykceiouooeau;
            qwwsykceiouooeau:
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            goto cgokkieyawykgueo;
            cgokkieyawykgueo:
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\x20{$iyqygqimawuycsyq}";
            goto ikcsaouaieccseqi;
            ikcsaouaieccseqi:
            icukugckqoqgiuws:
            goto qcseosqqiqckoqws;
            qcseosqqiqckoqws:
        }
        goto wososskoguokaqei;
        qqmkagsyoaowquya:
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        goto eokggumwwwmgoioy;
        iisomisiocmgsuyw:
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(["\154\x61\x62\145\154" => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        goto eawaqosecwqaaqqe;
        eawaqosecwqaaqqe:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(["\151\x64" => $uusmaiomayssaecw, "\x74\145\x78\164" => $wkaqekwwgqsqwcoi]);
            ceuiqusmmawsykea:
        }
        goto oegywukowukugmiu;
        oegywukowukugmiu:
        ggwwawgwoucowuyo:
        goto wceqqamckqyeuaqw;
        wceqqamckqyeuaqw:
        return $ykiyyumywksqcisg;
        goto eiiwooasmosecscs;
        eiiwooasmosecscs:
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        goto cyqkqseuausyusek;
        yyaksmygsgquwsec:
        ikukmsmyyikckikm:
        goto rwmmmmyeyiqguesa;
        cyqkqseuausyusek:
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        goto sauyacymwesqauua;
        sicwscwumksmqsku:
        rwmqgyyueoeaimik:
        goto kcgucisscoiakqqs;
        aswkgqywucwyesou:
        return array_map("\145\163\143\137\x61\164\164\162", $ygogqywsaqoukoqy);
        goto ggcccqcqwcuigcck;
        iwieeieuciqogska:
        gkoeeqqmggqygwyw:
        goto iekaceqmyeiaeckc;
        gwkaucoeaqieesqc:
        if (!$ykiyyumywksqcisg) {
            goto gswsickyiywowuqm;
        }
        goto memgwegygimsusma;
        cyicqmoiqscscwya:
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            goto gkoeeqqmggqygwyw;
        }
        goto uucoyymywsyuqeke;
        rwmmmmyeyiqguesa:
        if ($mwaeiygkcuuqqgga) {
            goto rwmqgyyueoeaimik;
        }
        goto gmggkymmymiciwys;
        agioaayyccacmayy:
        uwugswmqgicawims:
        goto gwkaucoeaqieesqc;
        sauyacymwesqauua:
        $ygogqywsaqoukoqy = [];
        goto wcwakqcywmskawsg;
        iwwkscmcmisuuqmo:
        cuisuaicowuooksy:
        goto uiwwywukcysqoqkg;
        wcwakqcywmskawsg:
        $mwaeiygkcuuqqgga = false;
        goto cyicqmoiqscscwya;
        uiwwywukcysqoqkg:
        goto uwugswmqgicawims;
        goto iwieeieuciqogska;
        kcgucisscoiakqqs:
        gswsickyiywowuqm:
        goto aswkgqywucwyesou;
        mqoyyykwyuayacou:
        $mwaeiygkcuuqqgga = true;
        goto iwwkscmcmisuuqmo;
        gmggkymmymiciwys:
        $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy("\x65\163\x63\x61\x70\x65\x64\137\x69\x63\x6f\156\x73\x5f\x64\162\157\x70\x64\157\167\x6e", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
        goto sicwscwumksmqsku;
        iekaceqmyeiaeckc:
        try {
            $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
            $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
        } catch (Exception $wgaoewqkwgomoaai) {
            $ykiyyumywksqcisg = [];
        }
        goto agioaayyccacmayy;
        memgwegygimsusma:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            goto simuyqcsmiuiykim;
            ewcwuwuyyqggiago:
            cqskcaaagwgwmiya:
            goto ckqwwskgokgsmiqc;
            ycmwuecqmmgiskyk:
            $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
            goto ewcwuwuyyqggiago;
            eogoakwqsaomuygg:
            goto cqskcaaagwgwmiya;
            goto msqukekiockgmsme;
            ckqwwskgokgsmiqc:
            gimsigcqasysqcoq:
            goto aooaoguggyasagge;
            ssgeagqeoeosoeei:
            $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
            goto eogoakwqsaomuygg;
            msqukekiockgmsme:
            yemgiiosomcamyae:
            goto ycmwuecqmmgiskyk;
            ikceueaaocmccgkc:
            $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
            goto suuksqiggsoogugm;
            suuksqiggsoogugm:
            if ($mwaeiygkcuuqqgga) {
                goto yemgiiosomcamyae;
            }
            goto ssgeagqeoeosoeei;
            simuyqcsmiuiykim:
            $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\x73\163" => "\x69\143\x6f\x6e\55\160\x72\x69\155\x61\x72\171"]);
            goto ikceueaaocmccgkc;
            aooaoguggyasagge:
        }
        goto yyaksmygsgquwsec;
        uucoyymywsyuqeke:
        if (!is_array($ykiyyumywksqcisg)) {
            goto cuisuaicowuooksy;
        }
        goto mqoyyykwyuayacou;
        ggcccqcqwcuigcck:
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        goto ymkwemoiaecikiwk;
        wcuiwqqcksycgaos:
        if ($qoiwmokisgikggia) {
            goto yismkseqgqygcsuc;
        }
        goto giiucgmqsqakyyau;
        cmygaeicigygyiws:
        yoaskikikuasaowi:
        goto cwaascimmcuekgws;
        uacmomqsimieooai:
        if (!(false !== strpos($qoiwmokisgikggia, "\x6c\151\x67\x68\x74") || false !== strpos($qoiwmokisgikggia, "\164\145\x72\x74\x69\x61\x72\171") || false !== strpos($qoiwmokisgikggia, "\x71\165\141\x74\x65\162\x6e\141\x72\x79") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) {
            goto yoaskikikuasaowi;
        }
        goto amwkckmmkweisiuk;
        ymkwemoiaecikiwk:
        $qimgcsugeskcqeyc = "\167\x68\151\x74\x65";
        goto wcuiwqqcksycgaos;
        amwkckmmkweisiuk:
        $qimgcsugeskcqeyc = "\x64\x61\x72\x6b";
        goto cmygaeicigygyiws;
        giiucgmqsqakyyau:
        $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        goto eokggymayausyoiy;
        eokggymayausyoiy:
        yismkseqgqygcsuc:
        goto uacmomqsimieooai;
        cwaascimmcuekgws:
        return ManipulateHTML::uuccukgasskgimsq("\144\151\166", ["\x63\x6c\x61\x73\163" => "\x62\x67\55{$qoiwmokisgikggia}\x20\x74\x65\170\x74\x2d{$qimgcsugeskcqeyc}\40\x74\x65\170\164\55\143\x65\156\164\x65\162\40\160\157\163\x69\164\151\157\x6e\x2d\141\x62\163\x6f\x6c\x75\x74\x65\x20\x77\55\61\x30\60\x20\150\55\61\x30\60\x20\164\x6f\160\55\x30\x20\154\145\x66\x74\55\x30\x20\x72\x6f\x75\156\144\145\x64"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\141\x73\x73" => "\x6c\x68\x2d\154\x67"]));
        goto qcawuomoeekkekma;
        qcawuomoeekkekma:
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        goto wkqgikkkmmwmwwgm;
        imccymawgooqumwc:
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            goto ckussqqwiokyqoco;
            ckussqqwiokyqoco:
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            goto gygmwgucwuyoqiye;
            aayquskmqceamsgg:
            wqasamwokmcayawg:
            goto yauuseeeaqyqwmug;
            gygmwgucwuyoqiye:
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            goto aayquskmqceamsgg;
            yauuseeeaqyqwmug:
        }
        goto uiukigcawkqkqgyy;
        ieggmouaisogwcuu:
        return $ukqisiguweqciuei;
        goto cqwcyykqggwgsiaw;
        wkqgikkkmmwmwwgm:
        $ukqisiguweqciuei = ['' => __("\116\x6f\156\x65", PR__CMN__FOUNDATION)];
        goto imccymawgooqumwc;
        uiukigcawkqkqgyy:
        oequgyowkkssiiqs:
        goto ieggmouaisogwcuu;
        cqwcyykqggwgsiaw:
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        goto musiqkgmwycoaguk;
        ccqumwomwukegucm:
        $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw("\x63\157\x6c\157\162\x5f\144\x72\157\160\x64\157\167\x6e\x5f\x69\x74\145\x6d\x73"), []);
        goto ocaicikesocsgoag;
        ywiwccokwsyckmyu:
        ikcskcwwcegkoeyy:
        goto weyuuecsicoyokwc;
        weyuuecsicoyokwc:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\103\157\x6c\157\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei);
        goto oomsucckcykayauy;
        uqockgyiaycuesmi:
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ["\x6c\141\x62\145\x6c" => $uusmaiomayssaecw, "\144\141\164\x61\x2d\x63\x6f\156\164\x65\x6e\164" => $qoiwmokisgikggia];
            scgucwgayiomwsqu:
        }
        goto ywiwccokwsyckmyu;
        ugwoqaioqkmegewk:
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        goto uqockgyiaycuesmi;
        ocaicikesocsgoag:
        uauqkwumkkqqmesy:
        goto ugwoqaioqkmegewk;
        musiqkgmwycoaguk:
        if ($ukqisiguweqciuei) {
            goto uauqkwumkkqqmesy;
        }
        goto ccqumwomwukegucm;
        oomsucckcykayauy:
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        goto kgycewokaywkmaiq;
        csukqqcyukewowyu:
        return $gmksciycsesoouoi;
        goto csimuygeycgqmuwa;
        mcosskywgakgqkgo:
        wkoewioscwccmkyk:
        goto ykeekemagwoeeuwk;
        kgycewokaywkmaiq:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto eimwkwakqsagimiq;
        mmqygmmymswssgak:
        if ($pacsomcuwcegguua) {
            goto wkoewioscwccmkyk;
        }
        goto kcwcekkkmwskicqs;
        ykeekemagwoeeuwk:
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        goto csukqqcyukewowyu;
        kcwcekkkmwskicqs:
        $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        goto mcosskywgakgqkgo;
        eimwkwakqsagimiq:
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\x63\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto mmqygmmymswssgak;
        csimuygeycgqmuwa:
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        goto yasyescomqgwccau;
        kqamquasawismmyq:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x49\x63\x6f\x6e", PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        goto fisyqseiiseakuku;
        ieqgkomksqsuoaaa:
        umkaksiuoaugusem:
        goto kqamquasawismmyq;
        ecgguiikaeeiwooi:
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ["\154\x61\x62\x65\x6c" => $uusmaiomayssaecw, "\x64\141\x74\141\55\x63\x6f\156\x74\x65\156\164" => $wkaqekwwgqsqwcoi];
            wiaiamgmiiiiowsu:
        }
        goto ieqgkomksqsuoaaa;
        yasyescomqgwccau:
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        goto ecgguiikaeeiwooi;
        fisyqseiiseakuku:
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        goto ociiyomqweeuyqaw;
        ogggoiwaseooqyee:
        goyoeacyyikeigyo:
        goto gmmqkkwsagswkwkm;
        gmmqkkwsagswkwkm:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
        goto mkoukageucsqewms;
        ociiyomqweeuyqaw:
        if ($meqocwsecsywiiqs) {
            goto goyoeacyyikeigyo;
        }
        goto oggeooaecikkokqy;
        oggeooaecikkokqy:
        $meqocwsecsywiiqs = __("\x49\143\x6f\156", PR__CMN__FOUNDATION);
        goto ogggoiwaseooqyee;
        mkoukageucsqewms:
    }
}
