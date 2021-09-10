<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class File extends OptionAwareField
{
    
    protected $previewSize;
    
    protected array $queryArgs = [];
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('file', $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
        
        $this->qigsyyqgewgskemg('cmb2-upload-file')->wyqeckayigciacse('thumbnail')->kesomeowemmyygey('url', false);
    }
    
    public function wuwyssaosksokqga()
    {
        return $this->previewSize;
    }
    
    public function wyqeckayigciacse($cosceaceqiwayaag) : self
    {
        $this->previewSize = $cosceaceqiwayaag;
        return $this;
    }
    
    public function qaqaomkkmcmaamwm() : ?array
    {
        return $this->queryArgs;
    }
    public function oieccmgqekecomks($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self
    {
        $this->queryArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie;
        return $this;
    }
    
    public function qagaugomegkiimwa(array $seauiwyeoycowegg) : self
    {
        foreach ($seauiwyeoycowegg as $uusmaiomayssaecw => $awacioyscseiomkc) {
            $this->oieccmgqekecomks($uusmaiomayssaecw, $awacioyscseiomkc);
            mykiyqcqiegkiqys:
        }
        aquqkiggamaoegoo:
        return $this;
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        $kkeqqkkkqwkocsyu['text']['add_upload_file_text'] = __('Add or Upload File', PR__CMN__FOUNDATION);
        return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii);
    }
}
