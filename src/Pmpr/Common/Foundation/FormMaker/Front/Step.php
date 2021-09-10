<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        goto cqasaekogukkaawi;
        iuacwsuwkigmuocu:
        $this->gwwmcykumqueaosa(__("\x4e\145\x78\164\40\x53\x74\x65\160", PR__CMN__FOUNDATION));
        goto kqqaauoucyygooug;
        kqqaauoucyygooug:
        $this->mskugockcmmyukus(__("\x50\162\x65\166\151\157\x75\x73\x20\x53\x74\145\x70", PR__CMN__FOUNDATION));
        goto eiseomciwegkimcw;
        ieyqeawyyscggouw:
        parent::__construct("\x64\151\166", ManipulateString::uniqid(5));
        goto wqugqqoisssiewoa;
        cqasaekogukkaawi:
        $this->number = $eusockqasqqmoess;
        goto iuacwsuwkigmuocu;
        eiseomciwegkimcw:
        $this->qigsyyqgewgskemg("\x73\164\145\160\55{$eusockqasqqmoess}");
        goto ieyqeawyyscggouw;
        wqugqqoisssiewoa:
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
