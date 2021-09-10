<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $aiowsaccomcoikus = null;
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ID => '', self::NAME => '']);
        $aokagokqyuysuksm = ManipulateArray::get($ywmkwiwkosakssii, self::ID);
        if ($aokagokqyuysuksm) {
            $ymqmyyeuycgmigyo = ManipulateArray::get($ywmkwiwkosakssii, self::NAME, '');
            $sqeykgyoooqysmca = ManipulateArray::get($ywmkwiwkosakssii, self::TYPE, self::TEXT);
            switch ($sqeykgyoooqysmca) {
                case 'html':
                    $aiowsaccomcoikus = self::aikamsoikcwsewac($aokagokqyuysuksm);
                    goto ukomuiwukymcoaso;
                case 'hidden':
                    $aiowsaccomcoikus = self::cwiuiiakukcsaakw($aokagokqyuysuksm);
                    goto ukomuiwukymcoaso;
                case 'checkbox':
                    $aiowsaccomcoikus = self::wcwmusaouiqaqeww($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'text':
                    $aiowsaccomcoikus = self::ymuegqgyuagyucws($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'textarea':
                    $aiowsaccomcoikus = self::uouyygwcgsmygaee($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'date':
                case 'datetime':
                    $aiowsaccomcoikus = self::sgsesoiwcgqgckoo($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'icon':
                    $meqocwsecsywiiqs = ManipulateArray::get($ywmkwiwkosakssii, self::TITLE);
                    $ykiyyumywksqcisg = ManipulateArray::get($ywmkwiwkosakssii, 'icons', IconFontawesomeInterface::class);
                    $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, 'labels', []);
                    $aiowsaccomcoikus = self::auouusgocuwkgaok($aokagokqyuysuksm, $ykiyyumywksqcisg, $iwkyyocymeukcceu)->usuqmwksoeaayaig($meqocwsecsywiiqs);
                    goto ukomuiwukymcoaso;
                case 'file':
                    $aiowsaccomcoikus = self::kimoeccokowuaiic($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'select':
                case 'select-2':
                case 'bsselect':
                    $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo);
                    goto ukomuiwukymcoaso;
                case 'select-role':
                    $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc(ManipulateUser::yagwwwqikmkuyicq(true));
                    goto ukomuiwukymcoaso;
                case 'select-post':
                    $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->smmismmuuccmscya();
                    goto ukomuiwukymcoaso;
                case 'select-user':
                    $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->soyqkauogoaqekos();
                    goto ukomuiwukymcoaso;
                case 'select-icon-size':
                    if (!$ymqmyyeuycgmigyo) {
                        $ymqmyyeuycgmigyo = __('Icon Size', PR__CMN__FOUNDATION);
                    }
                    $wyicceigkekkkwgs = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw('icon_sizes'), []);
                    $aiowsaccomcoikus = self::ckuwucygcwsiawms($aokagokqyuysuksm, $ymqmyyeuycgmigyo)->acauweqyyugwisqc($wyicceigkekkkwgs);
                    goto ukomuiwukymcoaso;
            }
            wkgskiuiukiuyque:
            ukomuiwukymcoaso:
            if ($aiowsaccomcoikus) {
                if (is_array($ywmkwiwkosakssii)) {
                    ManipulateArray::unset($ywmkwiwkosakssii, ['id', 'type', 'name']);
                    $ciagusimogciiumg = ['add', 'set', ''];
                    foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) {
                        $wuyimwscukmqqsqk = true;
                        if (is_numeric($wsmeuqcsyguikoci)) {
                            $wuyimwscukmqqsqk = false;
                            $wsmeuqcsyguikoci = $eqgoocgaqwqcimie;
                        }
                        $wsmeuqcsyguikoci = ManipulateString::qoqowykumameucwa($wsmeuqcsyguikoci);
                        foreach ($ciagusimogciiumg as $yuwymayicwwqiske) {
                            $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($wsmeuqcsyguikoci);
                            if ($qgciuiagkkguykgs = ManipulateValidation::pwcgsiswecasgkgs($aiowsaccomcoikus, $qgciuiagkkguykgs)) {
                                switch ($wsmeuqcsyguikoci) {
                                    case 'col':
                                        $waaaiiqwsmggwsak = explode(' ', $eqgoocgaqwqcimie);
                                        foreach ($waaaiiqwsmggwsak as $imgcoakmmgqsckkm) {
                                            $ymkqyawksmqcgsei = explode('-', $imgcoakmmgqsckkm);
                                            $aiowsaccomcoikus->imgcoakmmgqsckkm($ymkqyawksmqcgsei[1], $ymkqyawksmqcgsei[0]);
                                            smiemmcqqukyguuu:
                                        }
                                        quaqmuusokiyqgqe:
                                        goto easqmyamcmeesgya;
                                    case 'ignorable':
                                        foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) {
                                            $aiowsaccomcoikus->oeeumggeiyyckkom(ManipulateArray::get($oyumuuqqsmuacmak, 'values', []), ManipulateArray::get($oyumuuqqsmuacmak, 'fields', []), ManipulateArray::get($oyumuuqqsmuacmak, 'reverse', false));
                                            yamyagayiooyeekg:
                                        }
                                        iksewmsaugayqaqq:
                                        goto easqmyamcmeesgya;
                                    default:
                                        if ($wuyimwscukmqqsqk) {
                                            $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie);
                                        } else {
                                            $aiowsaccomcoikus->{$qgciuiagkkguykgs}();
                                        }
                                }
                                yuqgwwmqwqiuwmaw:
                                easqmyamcmeesgya:
                                goto siecswkggyikqkga;
                            }
                            qkuiwoqksgayqqmg:
                        }
                        siecswkggyikqkga:
                        goqmywuiicciasyk:
                    }
                    oyiuyywyeoskckuw:
                }
            }
        }
        return $aiowsaccomcoikus;
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
        CMB2_JS::enqueue();
        CMB2_hookup::enqueue_cmb_js();
        CMB2_hookup::enqueue_cmb_css();
    }
    
    public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = [])
    {
        $nsmgceoqaqogqmuw = '';
        $aokagokqyuysuksm = ManipulateArray::get($uiewakwqscemywuo, 'id', ManipulateString::uniqid(5));
        $koaqeegoeiaiccse = ManipulateArray::get($uiewakwqscemywuo, 'echo', true);
        $omwmuycmeqcqokom = ManipulateArray::get($uiewakwqscemywuo, 'parent', false);
        if ($ikgwqyuyckaewsow) {
            $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, ManipulateFormat::omaawkkwwyesqwcc($uiewakwqscemywuo, ['id' => $aokagokqyuysuksm]));
            ob_start();
            $eaoumsseceiowgsk->object_id($aokagokqyuysuksm);
            self::asimeyiqqkeawyoq();
            $eaoumsseceiowgsk->show_form();
            $nsmgceoqaqogqmuw = ob_get_clean();
            if ($omwmuycmeqcqokom) {
                $omwmuycmeqcqokom = ManipulateHTML::igmaewykumgwoaoy($omwmuycmeqcqokom, 'class', 'form-container');
                $nsmgceoqaqogqmuw = ManipulateHTML::qgsekwygcgawekeq('div', $omwmuycmeqcqokom, true, $nsmgceoqaqogqmuw);
            }
        }
        if ($koaqeegoeiaiccse) {
            echo $nsmgceoqaqogqmuw;
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = [])
    {
        $eaoumsseceiowgsk = null;
        if (is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow) {
            $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow);
            $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo);
            foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
                $eaoumsseceiowgsk->add_field($aiowsaccomcoikus);
                eckcqesiokgwkkiw:
            }
            yoagcooekomeokwg:
        }
        return $eaoumsseceiowgsk;
    }
    
    public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A)
    {
        $sogksuscggsicmac = null;
        if ($aiowsaccomcoikus instanceof Fields\Field) {
            if ($aqykuigiuwmmcieu === ARRAY_A) {
                $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea());
                $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic();
                if ($yuwymayicwwqiske && $oyumuuqqsmuacmak) {
                    foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) {
                        if (is_array($ccamueccusigaaio)) {
                            foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) {
                                $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok;
                                sgiwoiscywusgmmm:
                            }
                            qmoocweoekqueuyy:
                        } else {
                            $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio;
                        }
                        mqiiqkuaoekeuswo:
                    }
                    ecouwqosmoyyqmkw:
                    
                }
                if ($aiowsaccomcoikus instanceof Fields\Group) {
                    $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske));
                }
                $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq();
            } else {
                $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea();
            }
        }
        if (is_string($aiowsaccomcoikus)) {
            $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus;
        }
        return $sogksuscggsicmac;
    }
    
    public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array
    {
        
        $ikgwqyuyckaewsow = ManipulateArray::yaeiiwwyckwugsem($ikgwqyuyckaewsow);
        foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) {
            $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu);
            quyogmwugsyoaaiu:
        }
        skuqigsokaguscas:
        return $ikgwqyuyckaewsow;
    }
    
    public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio
    {
        $sckumcuqemuukces = __('min', PR__CMN__FOUNDATION);
        $ygykagaqyuawwiyo = __('hr', PR__CMN__FOUNDATION);
        $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo];
        $qiouiwasaauyaaue = [0 => __('No Limit', PR__CMN__FOUNDATION)];
        foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) {
            $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60;
            $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}  {$iyqygqimawuycsyq}";
            wmumywgyyeagqoeq:
        }
        mmgmqogugasaqkgg:
        $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true);
        $aiowsaccomcoikus->eumecwmqmukqgyea();
        return $aiowsaccomcoikus;
    }
    
    public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek)
    {
        return array_merge(['label' => $pkyyagewkiyckmwy], $wwgucssaecqekuek);
    }
    
    private static function _getIconsMarkup($ykiyyumywksqcisg = [])
    {
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode(['aokagokqyuysuksm' => $uusmaiomayssaecw, 'text' => $wkaqekwwgqsqwcoi]);
            mgcuiguaomoqwwwm:
        }
        smcguieygyqcaqgs:
        return $ykiyyumywksqcisg;
    }
    
    public static function _getEscapedIcons($ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = [])
    {
        $gskuwmeemyeuwogc = ManipulateHTML::cuumgioggkmuecyo();
        $ygogqywsaqoukoqy = [];
        $mwaeiygkcuuqqgga = false;
        if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) {
            try {
                $oqkmoekaagukcwia = new ReflectionClass($ykiyyumywksqcisg);
                $ykiyyumywksqcisg = array_slice($oqkmoekaagukcwia->uamsoaqoskqmyesm(), 0, 500);
            } catch (Exception $wgaoewqkwgomoaai) {
                $ykiyyumywksqcisg = [];
            }
        } else {
            if (is_array($ykiyyumywksqcisg)) {
                $mwaeiygkcuuqqgga = true;
            }
        }
        if ($ykiyyumywksqcisg) {
            foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
                $swmoiamakysysggq = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ['class' => 'icon-primary']);
                $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, $uusmaiomayssaecw), $swmoiamakysysggq);
                if ($mwaeiygkcuuqqgga) {
                    $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu;
                } else {
                    $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu;
                }
                yuoeumyiuqkuouey:
            }
            eoyiumycaigawmmc:
            if (!$mwaeiygkcuuqqgga) {
                $ygogqywsaqoukoqy = DecoratorHook::sscegwueamckwmcy('escaped_icons_dropdown', $ygogqywsaqoukoqy, $gskuwmeemyeuwogc);
            }
        }
        return array_map('esc_attr', $ygogqywsaqoukoqy);
    }
    
    private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '')
    {
        $qimgcsugeskcqeyc = 'white';
        if (!$qoiwmokisgikggia) {
            $qoiwmokisgikggia = ManipulateString::igcwuwuymeuomaqo($cmwygeyygwqaemaq);
        }
        if (false !== strpos($qoiwmokisgikggia, 'light') || false !== strpos($qoiwmokisgikggia, 'tertiary') || false !== strpos($qoiwmokisgikggia, 'quaternary') || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc)) {
            $qimgcsugeskcqeyc = 'dark';
        }
        return ManipulateHTML::uuccukgasskgimsq('div', ['class' => "bg-{$qoiwmokisgikggia} text-{$qimgcsugeskcqeyc} text-center position-absolute w-100 h-100 top-0 left-0 rounded"], ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ['class' => 'lh-lg']));
    }
    
    private static function _generateColors($yyiwywqmmsqmwqes) : array
    {
        $ukqisiguweqciuei = ['' => __('None', PR__CMN__FOUNDATION)];
        foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) {
            $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia);
            $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs);
            sckioayasmkcoeoo:
        }
        eyiwqgqcsqakwqss:
        return $ukqisiguweqciuei;
    }
    
    public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect
    {
        if (!$ukqisiguweqciuei) {
            $ukqisiguweqciuei = DecoratorHook::sscegwueamckwmcy(ManipulateHook::ygyygikyocoymgaw('color_dropdown_items'), []);
        }
        $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei);
        foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) {
            $ukqisiguweqciuei[$uusmaiomayssaecw] = ['pkyyagewkiyckmwy' => $uusmaiomayssaecw, 'yqguucaeeaigaygq' => $qoiwmokisgikggia];
            ooqksueucyagyuoe:
        }
        yssqmyoaokkksukc:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __('Color', PR__CMN__FOUNDATION), $ukqisiguweqciuei);
    }
    
    public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select
    {
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __('Icon', PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
        if (!$pacsomcuwcegguua) {
            $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg);
        }
        $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu);
        return $gmksciycsesoouoi;
    }
    
    public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconFontawesomeInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect
    {
        $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu);
        foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) {
            $ykiyyumywksqcisg[$uusmaiomayssaecw] = ['pkyyagewkiyckmwy' => $uusmaiomayssaecw, 'yqguucaeeaigaygq' => $wkaqekwwgqsqwcoi];
            wgiygcmqaokywuqa:
        }
        osmmoyqkqoucsgow:
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, __('Icon', PR__CMN__FOUNDATION), $ykiyyumywksqcisg);
    }
    
    public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect
    {
        if (!$meqocwsecsywiiqs) {
            $meqocwsecsywiiqs = __('Icon', PR__CMN__FOUNDATION);
        }
        return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu();
    }
}
