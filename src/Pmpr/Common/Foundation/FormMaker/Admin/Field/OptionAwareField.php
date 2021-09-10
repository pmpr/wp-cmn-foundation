<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class OptionAwareField extends Field
{
    
    protected array $options = [];
    
    protected array $extendable = [];
    
    public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = [])
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        $this->options = $qiouiwasaauyaaue;
    }
    
    public function gkwkqmwweiawigae() : ?array
    {
        return $this->options;
    }
    
    public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self
    {
        $this->options = $qiouiwasaauyaaue;
        return $this;
    }
    
    public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self
    {
        $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self
    {
        foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq);
            cwswueuqoamqasya:
        }
        kicwiowcogmauwiy:
        return $this;
    }
    
    public function asicmoumkgkcmiqq() : array
    {
        return $this->extendable;
    }
    
    public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [
            'variations' => [],
            
            'fields' => [],
        ]);
        $ikgwqyuyckaewsow = ManipulateArray::get($ywmkwiwkosakssii, 'fields');
        if (!$ikgwqyuyckaewsow) {
            $ikgwqyuyckaewsow = [];
        } else {
            if (!is_array($ikgwqyuyckaewsow)) {
                $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow];
            }
        }
        $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea();
        $ywmkwiwkosakssii['fields'] = $ikgwqyuyckaewsow;
        $this->extendable = $ywmkwiwkosakssii;
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        $mmswksymsquueauk = $this->asicmoumkgkcmiqq();
        if ($mmswksymsquueauk) {
            $this->qigsyyqgewgskemg('pr-extendable-input')->igmaewykumgwoaoy('data-extendable', json_encode($mmswksymsquueauk));
        }
        if ($this->msmiagueogcsucgc()) {
            $qiouiwasaauyaaue = $this->gkwkqmwweiawigae();
            if ($qiouiwasaauyaaue) {
                $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue);
                if (is_array($isksgswsmmqgeqmo)) {
                    if (isset($isksgswsmmqgeqmo['options'])) {
                        if (is_array($isksgswsmmqgeqmo['options'])) {
                            $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo['options'])[0];
                        }
                    } else {
                        $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0];
                    }
                } else {
                    $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0];
                }
                $this->eyygsasuqmommkua($omkysikckkcieckq);
            }
        }
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
    }
}
