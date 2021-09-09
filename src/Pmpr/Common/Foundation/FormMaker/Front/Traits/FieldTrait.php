<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Traits;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait FieldTrait
{
    
    public static function uikcsmyiqacmyoau() : Fields\Html
    {
        goto ssuaiecwgwieuugg;
        eyooyicsiemqsguk:
        return $nsmgceoqaqogqmuw;
        goto kuqysugeaoqosigi;
        ssuaiecwgwieuugg:
        $nsmgceoqaqogqmuw = new Fields\Html("\x6e\157\156\143\145\x5f" . ManipulateString::uniqid(3));
        goto qgckaaawkwimwegg;
        qgckaaawkwimwegg:
        $nsmgceoqaqogqmuw->qigsyyqgewgskemg("\156\x6f\156\x63\145\x2d\143\157\x6e\x74\x61\x69\x6e\x65\162");
        goto eyooyicsiemqsguk;
        kuqysugeaoqosigi:
    }
    
    public static function aikamsoikcwsewac($aokagokqyuysuksm = null) : Fields\Html
    {
        goto geyqommgwmggqccq;
        geyqommgwmggqccq:
        if ($aokagokqyuysuksm) {
            goto wwggwoqkiogsgsuy;
        }
        goto quskcgyyawkiiqoi;
        quskcgyyawkiiqoi:
        $aokagokqyuysuksm = "\150\x74\155\154\x5f" . ManipulateString::uniqid(3);
        goto yquuyysqcawssmik;
        cocmuyqusmyqugik:
        return new Fields\Html($aokagokqyuysuksm);
        goto kgusyguuagwuwmga;
        yquuyysqcawssmik:
        wwggwoqkiogsgsuy:
        goto cocmuyqusmyqugik;
        kgusyguuagwuwmga:
    }
    
    public static function wowyaacgaccyeici(?string $meqocwsecsywiiqs = null) : Fields\Header
    {
        return new Fields\Header("\150\x65\x61\144\145\162\x5f" . ManipulateString::uniqid(3), $meqocwsecsywiiqs);
    }
    
    public static function ewgquygaowykwacc(?string $ymqmyyeuycgmigyo, ?string $aiamqeawckcsuaou) : Fields\Nonce
    {
        return new Fields\Nonce("\156\157\x6e\143\x65\137" . ManipulateString::uniqid(3), $ymqmyyeuycgmigyo, $aiamqeawckcsuaou);
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
