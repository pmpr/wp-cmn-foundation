<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Traits;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait FieldTrait
{
    
    public static function uikcsmyiqacmyoau() : Fields\Html
    {
        goto umaiqkauouyokoeu;
        ceyuasuaekaygkey:
        $nsmgceoqaqogqmuw->qigsyyqgewgskemg("\x6e\157\156\143\145\55\x63\157\x6e\164\141\151\156\145\x72");
        goto yieqgyomcicomssk;
        umaiqkauouyokoeu:
        $nsmgceoqaqogqmuw = new Fields\Html("\x6e\x6f\156\x63\x65\x5f" . ManipulateString::uniqid(3));
        goto ceyuasuaekaygkey;
        yieqgyomcicomssk:
        return $nsmgceoqaqogqmuw;
        goto eeyucogkekkyiaam;
        eeyucogkekkyiaam:
    }
    
    public static function aikamsoikcwsewac($aokagokqyuysuksm = null) : Fields\Html
    {
        goto wukwyumwsocgeusi;
        oqiaecgmqmaeeoei:
        return new Fields\Html($aokagokqyuysuksm);
        goto ccaqwykysccwusuu;
        iwusokgqiqkumeem:
        ysiyqywawmqqiqqk:
        goto oqiaecgmqmaeeoei;
        wukwyumwsocgeusi:
        if ($aokagokqyuysuksm) {
            goto ysiyqywawmqqiqqk;
        }
        goto scsekeeysgugouca;
        scsekeeysgugouca:
        $aokagokqyuysuksm = "\x68\164\x6d\154\x5f" . ManipulateString::uniqid(3);
        goto iwusokgqiqkumeem;
        ccaqwykysccwusuu:
    }
    
    public static function wowyaacgaccyeici(?string $meqocwsecsywiiqs = null) : Fields\Header
    {
        return new Fields\Header("\x68\145\141\144\x65\162\x5f" . ManipulateString::uniqid(3), $meqocwsecsywiiqs);
    }
    
    public static function ewgquygaowykwacc(?string $ymqmyyeuycgmigyo, ?string $aiamqeawckcsuaou) : Fields\Nonce
    {
        return new Fields\Nonce("\156\x6f\x6e\143\145\x5f" . ManipulateString::uniqid(3), $ymqmyyeuycgmigyo, $aiamqeawckcsuaou);
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
