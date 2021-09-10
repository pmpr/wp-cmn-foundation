<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        ggkkqomssqyqiquq:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig . self::__ROOT__PATH, $this->ikeqsmumgwwuqmkw());
        goto iuqoaqsqmamokiaa;
        yiqceakcgqweqwkq:
        $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo);
        goto sgykyaiuwiykyqqc;
        ysqeawycwuosoawe:
        $this->domain = $ymqmyyeuycgmigyo;
        goto omikseuuygmokqsw;
        iekwmuigmiooiugw:
        $this->name = $ymqmyyeuycgmigyo;
        goto oscqsgwcimqawseu;
        sgykyaiuwiykyqqc:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo);
        goto ggkkqomssqyqiquq;
        omikseuuygmokqsw:
        $this->object = $mksyucucyswaukig;
        goto sqackyqqakkykaus;
        oscqsgwcimqawseu:
        $this->type = $sqeykgyoooqysmca;
        goto ysqeawycwuosoawe;
        sqackyqqakkykaus:
        $this->shortname = ManipulateString::gumqicgiosoqweoy($ymqmyyeuycgmigyo);
        goto yiqceakcgqweqwkq;
        igsmkqcwksaogqaq:
        $this->root = ManipulateFile::iygwwosmmgmouoyc($miawkwqioaeasiig);
        goto iekwmuigmiooiugw;
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
        csmemsmogwosqkks:
        $mkomwsiykqigmqca = "{$couygeouymagssgw}\57\166\x65\156\x64\157\x72";
        goto wiuqggsaqsscggyq;
        ecsieaukkkskmiye:
        uquoikaaykqmayco:
        goto iqoqyuokokywiqsg;
        iqoqyuokokywiqsg:
        return $mkomwsiykqigmqca;
        goto soqqgkywqwwiuymo;
        qemwkwgoywqqwscg:
        $couygeouymagssgw = $this->ikeqsmumgwwuqmkw();
        goto csmemsmogwosqkks;
        muuoiakkusqamoia:
        
        $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\57\x2e\56\x2f\56\x2e");
        goto ecsieaukkkskmiye;
        wiuqggsaqsscggyq:
        if (is_dir($mkomwsiykqigmqca)) {
            goto uquoikaaykqmayco;
        }
        goto muuoiakkusqamoia;
        soqqgkywqwwiuymo:
    }
}
