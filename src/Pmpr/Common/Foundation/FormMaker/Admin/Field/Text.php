<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;


class Text extends Field
{
    
    public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, ?string $sqeykgyoooqysmca = 'text')
    {
        parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc);
    }
    
    public function cskceqqgyuqssayi()
    {
        return $this->aseocggwwegcmqes('text_small');
    }
    
    public function mkiaygiogeeyogqm() : self
    {
        return $this->igmaewykumgwoaoy('type', 'email')->yskkmqiusguummwa();
    }
    
    public function smigkcmumwkgamkk() : self
    {
        return $this->igmaewykumgwoaoy('type', 'Tel')->yskkmqiusguummwa();
    }
    
    public function xkgcwkwsqysqamic() : self
    {
        return $this->igmaewykumgwoaoy('type', 'url')->yskkmqiusguummwa();
    }
    
    public function yscssskqyicmogii() : self
    {
        return $this->igmaewykumgwoaoy('type', 'time');
    }
    
    public function sqsumkuougquscyg() : self
    {
        $this->yskkmqiusguummwa();
        return $this->igmaewykumgwoaoy('type', 'password');
    }
    
    public function escqqisecooswqgo(?string $mwsawgusoeygascy = null, ?string $giqggecqqikcysgq = null) : self
    {
        $this->yskkmqiusguummwa();
        if (is_numeric($mwsawgusoeygascy)) {
            $this->igmaewykumgwoaoy('min', $mwsawgusoeygascy);
        }
        if (is_numeric($giqggecqqikcysgq)) {
            $this->igmaewykumgwoaoy('max', $giqggecqqikcysgq);
        }
        return $this->igmaewykumgwoaoy('type', 'number');
    }
    
    public function uagmgmommooaewkk($qiouiwasaauyaaue = [], $wickicgoyskysuuc = true) : self
    {
        $qiouiwasaauyaaue['placeholder'] = 'IR -- --- --- --- ---- ---- ----';
        $this->yskkmqiusguummwa();
        return $this->sousgskgsoaaukcs('IR 00 000 000 0000 0000 0000 0000', $qiouiwasaauyaaue, $wickicgoyskysuuc);
    }
    
    public function wykoackkeuuqeyss($qiouiwasaauyaaue = [], $wickicgoyskysuuc = true) : self
    {
        $qiouiwasaauyaaue['placeholder'] = '---- ---- ---- ----';
        $this->yskkmqiusguummwa();
        return $this->sousgskgsoaaukcs('0000 0000 0000 0000', $qiouiwasaauyaaue, $wickicgoyskysuuc);
    }
    
    public function iaggyqeqiyqgmgoo($qiouiwasaauyaaue = [], $wickicgoyskysuuc = true) : self
    {
        $qiouiwasaauyaaue['placeholder'] = '--';
        $this->yskkmqiusguummwa();
        return $this->sousgskgsoaaukcs('##', $qiouiwasaauyaaue, $wickicgoyskysuuc);
    }
    
    public function mouwuossggyiwems($qiouiwasaauyaaue = [], $wickicgoyskysuuc = true) : self
    {
        $this->yskkmqiusguummwa();
        return $this->sousgskgsoaaukcs('#,##0', $qiouiwasaauyaaue, $wickicgoyskysuuc);
    }
    
    public function sousgskgsoaaukcs($wamcomkuwysqgwgk, $qiouiwasaauyaaue = [], $wickicgoyskysuuc = true) : self
    {
        if ($wickicgoyskysuuc) {
            $this->qigsyyqgewgskemg('unmaskable');
        }
        return $this->qcgocuceocquqcuw('data-custom-mask', $wamcomkuwysqgwgk)->qcgocuceocquqcuw('data-custom-mask-options', json_encode($qiouiwasaauyaaue));
    }
    
    public function ucwmaimegouwwocg($qiouiwasaauyaaue = []) : self
    {
        $this->yskkmqiusguummwa();
        $qiouiwasaauyaaue['translation'] = ['Z' => ['pattern' => '[0-9]', 'optional' => true]];
        return $this->sousgskgsoaaukcs('0ZZ.0ZZ.0ZZ.0ZZ', $qiouiwasaauyaaue, false);
    }
    
    public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi) : self
    {
        if ($iwiewowoqmoekyqi) {
            $this->igmaewykumgwoaoy('placeholder', $iwiewowoqmoekyqi);
        }
        return $this;
    }
}
