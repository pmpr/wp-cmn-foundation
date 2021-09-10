<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Traits;

use Pmpr\Common\Foundation\FormMaker\Front\Field as Fields;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

trait FieldTrait
{
    
    public static function uikcsmyiqacmyoau() : Fields\Html
    {
        $nsmgceoqaqogqmuw = new Fields\Html('nonce_' . ManipulateString::uniqid(3));
        $nsmgceoqaqogqmuw->qigsyyqgewgskemg('nonce-container');
        return $nsmgceoqaqogqmuw;
    }
    
    public static function aikamsoikcwsewac($aokagokqyuysuksm = null) : Fields\Html
    {
        if (!$aokagokqyuysuksm) {
            $aokagokqyuysuksm = 'html_' . ManipulateString::uniqid(3);
        }
        return new Fields\Html($aokagokqyuysuksm);
    }
    
    public static function wowyaacgaccyeici(?string $meqocwsecsywiiqs = null) : Fields\Header
    {
        return new Fields\Header('header_' . ManipulateString::uniqid(3), $meqocwsecsywiiqs);
    }
    
    public static function ewgquygaowykwacc(?string $ymqmyyeuycgmigyo, ?string $aiamqeawckcsuaou) : Fields\Nonce
    {
        return new Fields\Nonce('nonce_' . ManipulateString::uniqid(3), $ymqmyyeuycgmigyo, $aiamqeawckcsuaou);
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
