<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Traits;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait FieldTrait
{
    
    public static function uikcsmyiqacmyoau() : Fields\Html
    {
        goto ikqgowwocacwwews;
        ceyuasuaekaygkey:
        return $nsmgceoqaqogqmuw;
        goto yieqgyomcicomssk;
        umaiqkauouyokoeu:
        $nsmgceoqaqogqmuw->qigsyyqgewgskemg("\x6e\157\156\143\x65\x2d\143\x6f\156\164\141\x69\x6e\145\162");
        goto ceyuasuaekaygkey;
        ikqgowwocacwwews:
        $nsmgceoqaqogqmuw = new Fields\Html("\x6e\x6f\156\143\145\137" . ManipulateString::uniqid(3));
        goto umaiqkauouyokoeu;
        yieqgyomcicomssk:
    }
    
    public static function aikamsoikcwsewac($aokagokqyuysuksm = null) : Fields\Html
    {
        goto ysiyqywawmqqiqqk;
        ysiyqywawmqqiqqk:
        if ($aokagokqyuysuksm) {
            goto eeyucogkekkyiaam;
        }
        goto wukwyumwsocgeusi;
        wukwyumwsocgeusi:
        $aokagokqyuysuksm = "\150\164\155\x6c\x5f" . ManipulateString::uniqid(3);
        goto scsekeeysgugouca;
        scsekeeysgugouca:
        eeyucogkekkyiaam:
        goto iwusokgqiqkumeem;
        iwusokgqiqkumeem:
        return new Fields\Html($aokagokqyuysuksm);
        goto oqiaecgmqmaeeoei;
        oqiaecgmqmaeeoei:
    }
    
    public static function wowyaacgaccyeici(?string $meqocwsecsywiiqs = null) : Fields\Header
    {
        return new Fields\Header("\150\x65\x61\x64\145\x72\137" . ManipulateString::uniqid(3), $meqocwsecsywiiqs);
    }
    
    public static function ewgquygaowykwacc(?string $ymqmyyeuycgmigyo, ?string $aiamqeawckcsuaou) : Fields\Nonce
    {
        return new Fields\Nonce("\x6e\x6f\156\143\x65\137" . ManipulateString::uniqid(3), $ymqmyyeuycgmigyo, $aiamqeawckcsuaou);
    }
    
    public static function qoeiescseggagsqs(string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null) : Fields\Button
    {
        return new Fields\Button($aokagokqyuysuksm, $pkyyagewkiyckmwy);
    }
    
    public static function ucmasmuimegwqeuk(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null) : Fields\Submit
    {
        return new Fields\Submit($aokagokqyuysuksm, $pkyyagewkiyckmwy);
    }
    
    public static function cwiuiiakukcsaakw(string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie = null) : Fields\Hidden
    {
        return new Fields\Hidden($aokagokqyuysuksm, $eqgoocgaqwqcimie);
    }
    
    public static function ymuegqgyuagyucws(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null, ?string $mkqqqewsokcswckc = null) : Fields\Text
    {
        return new Fields\Text($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function yyuwuqsiucweeoue(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null, ?string $mkqqqewsokcswckc = null) : Fields\Radio
    {
        return new Fields\Radio($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function cmmsoiggwwuyqqks($aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null) : Fields\Datepicker
    {
        return new Fields\Datepicker($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function mccagaqeagiikkec(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null, ?string $mkqqqewsokcswckc = null) : Fields\Select
    {
        return new Fields\Select($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function uouyygwcgsmygaee(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null, ?string $mkqqqewsokcswckc = null) : Fields\Textarea
    {
        return new Fields\Textarea($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function qqmgmgasauucoago(string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null) : Fields\Collection
    {
        return new Fields\Collection($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
    
    public static function owsksqyywuckswgo(string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy = null, ?string $mkqqqewsokcswckc = null) : Fields\TextButton
    {
        return new Fields\TextButton($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
    }
}
