<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        goto igsmkqcwksaogqaq;
        omikseuuygmokqsw:
        $this->object = $mksyucucyswaukig;
        goto sqackyqqakkykaus;
        iekwmuigmiooiugw:
        $this->name = $ymqmyyeuycgmigyo;
        goto oscqsgwcimqawseu;
        yiqceakcgqweqwkq:
        $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo);
        goto sgykyaiuwiykyqqc;
        igsmkqcwksaogqaq:
        $this->root = ManipulateFile::iygwwosmmgmouoyc($miawkwqioaeasiig);
        goto iekwmuigmiooiugw;
        oscqsgwcimqawseu:
        $this->type = $sqeykgyoooqysmca;
        goto ysqeawycwuosoawe;
        ggkkqomssqyqiquq:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig . self::__ROOT__PATH, $this->ikeqsmumgwwuqmkw());
        goto iuqoaqsqmamokiaa;
        sgykyaiuwiykyqqc:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo);
        goto ggkkqomssqyqiquq;
        ysqeawycwuosoawe:
        $this->domain = $ymqmyyeuycgmigyo;
        goto omikseuuygmokqsw;
        sqackyqqakkykaus:
        $this->shortname = ManipulateString::gumqicgiosoqweoy($ymqmyyeuycgmigyo);
        goto yiqceakcgqweqwkq;
        iuqoaqsqmamokiaa:
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
        goto qemwkwgoywqqwscg;
        wiuqggsaqsscggyq:
        if (is_dir($mkomwsiykqigmqca)) {
            goto uquoikaaykqmayco;
        }
        goto muuoiakkusqamoia;
        csmemsmogwosqkks:
        $mkomwsiykqigmqca = "{$couygeouymagssgw}\x2f\x76\x65\156\x64\x6f\162";
        goto wiuqggsaqsscggyq;
        ecsieaukkkskmiye:
        uquoikaaykqmayco:
        goto iqoqyuokokywiqsg;
        qemwkwgoywqqwscg:
        $couygeouymagssgw = $this->ikeqsmumgwwuqmkw();
        goto csmemsmogwosqkks;
        muuoiakkusqamoia:
        
        $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\57\56\x2e\57\x2e\56");
        goto ecsieaukkkskmiye;
        iqoqyuokokywiqsg:
        return $mkomwsiykqigmqca;
        goto soqqgkywqwwiuymo;
        soqqgkywqwwiuymo:
    }
}
