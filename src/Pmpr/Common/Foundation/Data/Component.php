<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Data;

use Pmpr\Common\Foundation\Container\Container;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;

class Component extends Data
{
    
    protected ?string $uri = null;
    
    protected ?string $type = null;
    
    protected ?string $name = null;
    
    protected ?string $root = null;
    
    protected ?string $domain = null;
    
    protected ?Container $object = null;
    
    protected ?string $shortname = null;
    
    public function __construct(Container $mksyucucyswaukig, string $sqeykgyoooqysmca, string $ymqmyyeuycgmigyo, string $miawkwqioaeasiig)
    {
        goto qykicwksywyiiqkk;
        iekwmuigmiooiugw:
        $this->object = $mksyucucyswaukig;
        goto oscqsgwcimqawseu;
        ysqeawycwuosoawe:
        $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo);
        goto omikseuuygmokqsw;
        awiawgewcmmiugqm:
        $this->name = $ymqmyyeuycgmigyo;
        goto meayoamiqaqouykk;
        oscqsgwcimqawseu:
        $this->shortname = ManipulateString::gumqicgiosoqweoy($ymqmyyeuycgmigyo);
        goto ysqeawycwuosoawe;
        qykicwksywyiiqkk:
        $this->root = ManipulateFile::iygwwosmmgmouoyc($miawkwqioaeasiig);
        goto awiawgewcmmiugqm;
        omikseuuygmokqsw:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo);
        goto sqackyqqakkykaus;
        meayoamiqaqouykk:
        $this->type = $sqeykgyoooqysmca;
        goto igsmkqcwksaogqaq;
        sqackyqqakkykaus:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig . self::__ROOT__PATH, $this->ikeqsmumgwwuqmkw());
        goto yiqceakcgqweqwkq;
        igsmkqcwksaogqaq:
        $this->domain = $ymqmyyeuycgmigyo;
        goto iekwmuigmiooiugw;
        yiqceakcgqweqwkq:
    }
    
    public function mceoyuqgagciommq() : ?string
    {
        return $this->uri;
    }
    
    public function qckqeoeasgoeywoa(?string $xeciwimgioieayek) : self
    {
        $this->uri = $xeciwimgioieayek;
        return $this;
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->name;
    }
    
    public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self
    {
        $this->name = $ymqmyyeuycgmigyo;
        return $this;
    }
    
    public function gueasuouwqysmomu() : ?string
    {
        return $this->type;
    }
    
    public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self
    {
        $this->type = $sqeykgyoooqysmca;
        return $this;
    }
    
    public function ikeqsmumgwwuqmkw() : ?string
    {
        return $this->root;
    }
    
    public function wmokamoeekequoqw(?string $couygeouymagssgw) : self
    {
        $this->root = $couygeouymagssgw;
        return $this;
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        return $this->domain;
    }
    
    public function suyquyoaausqsuay(?string $mokawwccycoiqeka) : self
    {
        $this->domain = $mokawwccycoiqeka;
        return $this;
    }
    
    public function imgymusqgccqsqqq() : ?Container
    {
        return $this->object;
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->shortname;
    }
    
    public function aqkmwawoaaigkoyq() : string
    {
        return self::AT_SYMBOL . $this->wwawisckiqeueoua();
    }
    
    public function eeucessuemoysgqg() : string
    {
        return basename($this->ikeqsmumgwwuqmkw());
    }
    
    public function aksiegmauqiaueis() : ?string
    {
        goto ggkkqomssqyqiquq;
        qemwkwgoywqqwscg:
        
        $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\x2f\x2e\56\57\56\x2e");
        goto csmemsmogwosqkks;
        uquoikaaykqmayco:
        if (is_dir($mkomwsiykqigmqca)) {
            goto sgykyaiuwiykyqqc;
        }
        goto qemwkwgoywqqwscg;
        iuqoaqsqmamokiaa:
        $mkomwsiykqigmqca = "{$couygeouymagssgw}\x2f\166\x65\x6e\x64\x6f\162";
        goto uquoikaaykqmayco;
        ggkkqomssqyqiquq:
        $couygeouymagssgw = $this->ikeqsmumgwwuqmkw();
        goto iuqoaqsqmamokiaa;
        wiuqggsaqsscggyq:
        return $mkomwsiykqigmqca;
        goto muuoiakkusqamoia;
        csmemsmogwosqkks:
        sgykyaiuwiykyqqc:
        goto wiuqggsaqsscggyq;
        muuoiakkusqamoia:
    }
}
