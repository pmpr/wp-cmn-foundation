<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Group extends OptionAwareField
{
    
    protected array $fields = [];
    
    protected array $nonDuplicate = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('group', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->acauweqyyugwisqc(['limit' => 0, 'sortable' => false, 'remove_button' => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg('form-container col-12')->ewweaossowcqywaw($ikgwqyuyckaewsow);
    }
    
    public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self
    {
        if ($pkyyagewkiyckmwy) {
            $this->acauweqyyugwisqc(['add_button' => sprintf(__('Add New %s', PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), 'group_title' => sprintf('%s {#}', $pkyyagewkiyckmwy)]);
        }
        return $this;
    }
    
    public function ugmceccgwaaaigiy() : ?array
    {
        return $this->fields;
    }
    
    public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self
    {
        $this->fields = $ikgwqyuyckaewsow;
        return $this;
    }
    
    public function omsoosuoikgueyke() : self
    {
        $this->qigsyyqgewgskemg('col-lg-6');
        return $this;
    }
    
    public function usosgsaaimqcysyk() : self
    {
        $this->qigsyyqgewgskemg('col-lg-6 col-xl-4');
        return $this;
    }
    
    public function wygoskowywcuyaiq() : self
    {
        $this->qigsyyqgewgskemg('col-md-6 col-lg-4 col-xl-3');
        return $this;
    }
    
    public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self
    {
        if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) {
            $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1);
        }
        if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ['checkbox', 'radio'])) {
            $aiowsaccomcoikus->yoimakcqmoqokkcu();
        } else {
            $aiowsaccomcoikus->mkmssscwmeekwgqo();
        }
        $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self
    {
        foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
            $this->mkksewyosgeumwsa($aiowsaccomcoikus);
            suuskagowwgsouqw:
        }
        kgmeiwiakwicgkkk:
        return $this;
    }
    
    public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = 'and', $wumguikkgaigkoee = []) : self
    {
        if (!$wumguikkgaigkoee) {
            $wumguikkgaigkoee = ['submit' => ManipulateHTML::ciuuiyckmsygceis(sprintf(__('Sorry, you can\'t submit form. Some field\'s value is duplicated in group, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), 'add_new' => ManipulateHTML::ciuuiyckmsygceis(sprintf(__('Sorry, you can\'t add new %s. Some field\'s value is duplicated, please fix errors and try again.', PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))];
        }
        $this->nonDuplicate[] = ['fields' => $ikgwqyuyckaewsow, 'boolean' => $qsycuegoicqcqkmo, 'messages' => $wumguikkgaigkoee];
        return $this;
    }
    
    public function iaogqeuosowauooc() : array
    {
        return $this->nonDuplicate;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) {
            $aiowsaccomcoikus['value'] = $this->qooeaookuemoqecm();
            csieaismmmocyacu:
        }
        omykokikgocoikec:
        if ($wmeooiyuiyagywsc = $this->iaogqeuosowauooc()) {
            $this->usoqcyyugsuyiewc('pr-non-duplicate-group')->igmaewykumgwoaoy('data-non-duplicate', json_encode($wmeooiyuiyagywsc));
        }
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
        $this->options['attributes'] = $this->ccekeuwwqqoiwuwy();
    }
}
