<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        parent::__construct("\142\x75\164\164\157\x6e", $aokagokqyuysuksm, '', $mkqqqewsokcswckc);
        $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\142\x75\164\164\157\x6e");
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self
    {
        return $this->igmaewykumgwoaoy("\164\151\x74\x6c\x65", $meqocwsecsywiiqs);
    }
    
    public function micmwmywmkguiyyk()
    {
        return $this->qigsyyqgewgskemg("\x62\165\x74\164\x6f\156\55\160\x72\x69\155\x61\x72\171");
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
        goto ayiaemgweeeaiakm;
        okocseuucyymsegg:
        $this->comqsuwokcsmkcau("\141");
        goto qeigaagyemyysqks;
        qeigaagyemyysqks:
        return $this;
        goto qieqeemowgauqwci;
        ayiaemgweeeaiakm:
        $this->link = $iwywmkygwewiamwm;
        goto okocseuucyymsegg;
        qieqeemowgauqwci:
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
        return $this->usoqcyyugsuyiewc("\160\x72\x2d\141\143\164\151\x6f\156");
    }
    
    public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self
    {
        $quyoyomkimissiqu = $quyoyomkimissiqu ? "\55\157\x75\x74\154\151\x6e\x65" : '';
        return $this->qigsyyqgewgskemg("\x62\164\x6e\x20\142\x74\x6e{$quyoyomkimissiqu}\x2d{$qoiwmokisgikggia}");
    }
    
    public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x64\141\156\x67\x65\x72", $quyoyomkimissiqu);
    }
    
    public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\x77\141\x72\156\151\x6e\147", $quyoyomkimissiqu);
    }
    
    public function miqekcqciusawwie($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\151\156\x66\x6f", $quyoyomkimissiqu);
    }
    
    public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\160\x72\151\x6d\141\x72\x79", $quyoyomkimissiqu);
    }
    
    public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\163\145\x63\157\x6e\x64\x61\162\171", $quyoyomkimissiqu);
    }
    
    public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self
    {
        return $this->gioaiiyakuoimewa("\163\x75\143\x63\x65\163\x73", $quyoyomkimissiqu);
    }
    
    public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self
    {
        return $this->igmaewykumgwoaoy("\x64\141\x74\141\x2d\x6e\157\156\x63\145", wp_create_nonce($gwgqcsmomamyqsmy));
    }
    
    public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\x62\x75\x74\x74\x6f\x6e") : self
    {
        $this->qigsyyqgewgskemg("\x70\162\x2d\143\x6f\x6e\x66\x69\x72\x6d\x61\x62\154\145\x2d\x61\143\164\x69\157\x6e");
        return $this->qcgocuceocquqcuw("\144\x61\x74\x61\x2d\x63\x6f\156\146\151\147", ManipulateHTML::uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk));
    }
}
