<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Admin\Field;

use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;

class Button extends Field
{
    
    protected ?string $link = null;
    
    protected ?string $element = null;
    
    protected ?string $target = null;
    
    protected ?string $label = null;
    
    protected ?string $icon = null;
    
    protected ?string $action = null;
    
    public function __construct(?string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy, ?string $mkqqqewsokcswckc = null)
    {
        parent::__construct('button', $aokagokqyuysuksm, '', $mkqqqewsokcswckc);
        $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau('button');
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self
    {
        return $this->igmaewykumgwoaoy('title', $meqocwsecsywiiqs);
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg('button-primary');
    }
    
    public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self
    {
        $this->label = $pkyyagewkiyckmwy;
        return $this;
    }
    
    public function uikgwcuascgeissw() : ?string
    {
        return $this->label;
    }
    
    public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self
    {
        $this->link = $iwywmkygwewiamwm;
        $this->comqsuwokcsmkcau('a');
        return $this;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function cwqickkaaokiquuo(?string $aiamqeawckcsuaou) : self
    {
        $this->action = $aiamqeawckcsuaou;
        return $this;
    }
    
    public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self
    {
        $this->target = $ccamueccusigaaio;
        return $this;
    }
    
    private function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self
    {
        $this->element = $kqywgoqsmuswammk;
        return $this;
    }
    
    public function ygagwkucacyassau() : self
    {
        return $this->usoqcyyugsuyiewc('pr-action');
    }
    
    public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self
    {
        $quyoyomkimissiqu = $quyoyomkimissiqu ? '-outline' : '';
        return $this->qigsyyqgewgskemg("btn btn{$quyoyomkimissiqu}-{$qoiwmokisgikggia}");
    }
    
    public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('danger', $quyoyomkimissiqu);
    }
    
    public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('warning', $quyoyomkimissiqu);
    }
    
    public function miqekcqciusawwie($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('info', $quyoyomkimissiqu);
    }
    
    public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('primary', $quyoyomkimissiqu);
    }
    
    public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('secondary', $quyoyomkimissiqu);
    }
    
    public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa('success', $quyoyomkimissiqu);
    }
    
    public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self
    {
        return $this->igmaewykumgwoaoy('data-nonce', wp_create_nonce($gwgqcsmomamyqsmy));
    }
    
    public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = 'button') : self
    {
        $this->qigsyyqgewgskemg('pr-confirmable-action');
        return $this->qcgocuceocquqcuw('data-config', ManipulateHTML::uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk));
    }
}
