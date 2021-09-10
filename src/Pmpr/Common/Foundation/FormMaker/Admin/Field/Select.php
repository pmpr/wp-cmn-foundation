<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Select extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = 'select')
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : Field
    {
        if ($eqgoocgaqwqcimie) {
            if (is_array($eqgoocgaqwqcimie)) {
                $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie);
            }
            $this->qcgocuceocquqcuw('data-values', (string) $eqgoocgaqwqcimie);
        }
        return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie);
    }
    
    public function wkimkisugugasowe($uusmaiomayssaecw, $pkyyagewkiyckmwy, $qiouiwasaauyaaue, $yuwymayicwwqiske = true) : self
    {
        foreach ($qiouiwasaauyaaue as $eqgoocgaqwqcimie => $meqocwsecsywiiqs) {
            if ($yuwymayicwwqiske) {
                unset($qiouiwasaauyaaue[$eqgoocgaqwqcimie]);
                $eqgoocgaqwqcimie = $uusmaiomayssaecw . '_' . $eqgoocgaqwqcimie;
            }
            if ($pkyyagewkiyckmwy) {
                $meqocwsecsywiiqs .= " ({$pkyyagewkiyckmwy})";
            }
            $qiouiwasaauyaaue[$eqgoocgaqwqcimie] = $meqocwsecsywiiqs;
            cquecqekuucwoumw:
        }
        agemwookwseyycqo:
        if (is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue) {
            $this->kesomeowemmyygey($uusmaiomayssaecw, ['pkyyagewkiyckmwy' => $pkyyagewkiyckmwy, 'options' => $qiouiwasaauyaaue]);
        }
        return $this;
    }
    
    public function qgcscuuessikoiko($igaagwuyasawwqms) : self
    {
        $this->qigsyyqgewgskemg('pr-updatable-input')->igmaewykumgwoaoy('data-updatable', $igaagwuyasawwqms);
        return $this;
    }
}
