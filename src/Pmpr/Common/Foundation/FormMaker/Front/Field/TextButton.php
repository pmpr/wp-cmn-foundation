<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class TextButton extends Text
{
    
    protected array $buttons = [];
    public function __construct(?string $aokagokqyuysuksm, string $pkyyagewkiyckmwy = null, string $mkqqqewsokcswckc = null)
    {
        parent::__construct($aokagokqyuysuksm, $pkyyagewkiyckmwy, $mkqqqewsokcswckc);
        $this->mmuyuqussqkgkega(self::mecgagckeuagggyw()->qigsyyqgewgskemg('input-group mb-3'));
    }
    
    public function imswwiyicyksouus() : array
    {
        return $this->buttons;
    }
    
    public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self
    {
        $gskauacumcmekigs->qigsyyqgewgskemg('input-group-btn');
        $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs;
        return $this;
    }
    
    public function assmkuqekscwausm(?string $nsmgceoqaqogqmuw) : ?string
    {
        $heckyiakawemwsmu = false;
        $qyukicweqoisimwg = $this->imswwiyicyksouus();
        $gmwmsmkosomgguiq = '';
        if ($qyukicweqoisimwg && is_array($qyukicweqoisimwg)) {
            foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) {
                if ($gskauacumcmekigs instanceof Button) {
                    if ($momcykaoccoymeig == 0) {
                        $heckyiakawemwsmu = $gskauacumcmekigs->heckyiakawemwsmu();
                    }
                    $gmwmsmkosomgguiq = $gskauacumcmekigs->render(['echo' => false]);
                }
                qcssigmcayuyweiy:
            }
            quamuugoocyyceec:
        }
        if ($gmwmsmkosomgguiq) {
            $gmwmsmkosomgguiq = ManipulateHTML::uuccukgasskgimsq('div', ['class' => 'input-group-' . ($heckyiakawemwsmu ? 'prepend' : 'append')], $gmwmsmkosomgguiq);
            if ($heckyiakawemwsmu) {
                $nsmgceoqaqogqmuw = $gmwmsmkosomgguiq . $nsmgceoqaqogqmuw;
            } else {
                $nsmgceoqaqogqmuw .= $gmwmsmkosomgguiq;
            }
        }
        return parent::assmkuqekscwausm($nsmgceoqaqogqmuw);
    }
}
