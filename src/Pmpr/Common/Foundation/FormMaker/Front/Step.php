<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\FormMaker\Front;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Step extends Element
{
    
    protected int $number = 1;
    
    protected ?string $icon = null;
    
    protected ?string $title = null;
    
    protected ?string $content = null;
    
    protected ?string $prevButton = null;
    
    protected ?string $nextButton = null;
    
    protected ?string $description = null;
    
    public function __construct(int $eusockqasqqmoess = 1)
    {
        goto eewoqsggiasaygku;
        eiseomciwegkimcw:
        parent::__construct("\x64\151\x76", ManipulateString::uniqid(5));
        goto ieyqeawyyscggouw;
        iuacwsuwkigmuocu:
        $this->mskugockcmmyukus(__("\120\162\x65\166\x69\157\165\163\40\123\x74\145\160", PR__CMN__FOUNDATION));
        goto kqqaauoucyygooug;
        kqqaauoucyygooug:
        $this->qigsyyqgewgskemg("\163\x74\145\160\x2d{$eusockqasqqmoess}");
        goto eiseomciwegkimcw;
        cqasaekogukkaawi:
        $this->gwwmcykumqueaosa(__("\x4e\145\x78\x74\40\123\x74\x65\x70", PR__CMN__FOUNDATION));
        goto iuacwsuwkigmuocu;
        eewoqsggiasaygku:
        $this->number = $eusockqasqqmoess;
        goto cqasaekogukkaawi;
        ieyqeawyyscggouw:
    }
    
    public function iyowqkwcwiuccgag() : int
    {
        return $this->number;
    }
    
    public function pwuigqciiuyoaccc(int $eusockqasqqmoess) : Step
    {
        $this->number = $eusockqasqqmoess;
        return $this;
    }
    
    public function eyamqkqiykagecsw() : ?string
    {
        return $this->icon;
    }
    
    public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : Step
    {
        $this->icon = $wkaqekwwgqsqwcoi;
        return $this;
    }
    
    public function qcgakseyaikigqco() : ?string
    {
        return $this->title;
    }
    
    public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : Step
    {
        $this->title = $meqocwsecsywiiqs;
        return $this;
    }
    
    public function souwykwwmyygqyqi() : ?string
    {
        return $this->content;
    }
    
    public function oguessuismosauuu(?string $ewgwqamkygiqaawc) : Step
    {
        $this->content = $ewgwqamkygiqaawc;
        return $this;
    }
    
    public function mekskkquqcumoioc(array $siquossayskcwkea = []) : ?string
    {
        return Form::qoeiescseggagsqs('', $this->prevButton)->sueyawuweyoqyeaq($siquossayskcwkea)->iswqmkousoeksaae()->render();
    }
    
    public function mskugockcmmyukus(?string $wuyuosykkccoageu) : Step
    {
        $this->prevButton = $wuyuosykkccoageu;
        return $this;
    }
    
    public function oqamwksqqyskgwge(array $siquossayskcwkea = []) : ?string
    {
        return Form::qoeiescseggagsqs('', $this->nextButton)->sueyawuweyoqyeaq($siquossayskcwkea)->iswqmkousoeksaae()->render();
    }
    
    public function gwwmcykumqueaosa(?string $iiiuiaciwyguwwka) : Step
    {
        $this->nextButton = $iiiuiaciwyguwwka;
        return $this;
    }
    
    public function meqceykmywmqgoym() : ?string
    {
        return $this->description;
    }
    
    public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : Step
    {
        $this->description = $ukwokcuqauuosmoo;
        return $this;
    }
}
