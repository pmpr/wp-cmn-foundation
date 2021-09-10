<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Editor extends OptionAwareField
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = [])
    {
        parent::__construct('wysiwyg', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue);
    }
    
    public function qsecygiycssgacqs($essikcmqiyqaqoaq)
    {
        $this->kesomeowemmyygey('textarea_rows', (string) $essikcmqiyqaqoaq);
        return $this;
    }
    
    public function gsomueooycksswcy() : self
    {
        $this->kesomeowemmyygey('media_buttons', false);
        return $this;
    }
    
    public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void
    {
        $cmkqisoeyioisqaw = $this->waecsyqmwascmqoa('class');
        if (is_array($cmkqisoeyioisqaw)) {
            $cmkqisoeyioisqaw = implode(' ', $cmkqisoeyioisqaw);
        }
        $this->kesomeowemmyygey('editor_class', $cmkqisoeyioisqaw);
        parent::qgsieamsswkgysow($ywmkwiwkosakssii);
    }
}
