<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        goto sqackyqqakkykaus;
        wiuqggsaqsscggyq:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig . self::__ROOT__PATH, $this->ikeqsmumgwwuqmkw());
        goto muuoiakkusqamoia;
        yiqceakcgqweqwkq:
        $this->name = $ymqmyyeuycgmigyo;
        goto sgykyaiuwiykyqqc;
        qemwkwgoywqqwscg:
        $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo);
        goto csmemsmogwosqkks;
        iuqoaqsqmamokiaa:
        $this->object = $mksyucucyswaukig;
        goto uquoikaaykqmayco;
        csmemsmogwosqkks:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo);
        goto wiuqggsaqsscggyq;
        sqackyqqakkykaus:
        $this->root = ManipulateFile::iygwwosmmgmouoyc($miawkwqioaeasiig);
        goto yiqceakcgqweqwkq;
        uquoikaaykqmayco:
        $this->shortname = ManipulateString::gumqicgiosoqweoy($ymqmyyeuycgmigyo);
        goto qemwkwgoywqqwscg;
        ggkkqomssqyqiquq:
        $this->domain = $ymqmyyeuycgmigyo;
        goto iuqoaqsqmamokiaa;
        sgykyaiuwiykyqqc:
        $this->type = $sqeykgyoooqysmca;
        goto ggkkqomssqyqiquq;
        muuoiakkusqamoia:
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
        goto iqoqyuokokywiqsg;
        iqoqyuokokywiqsg:
        $couygeouymagssgw = $this->ikeqsmumgwwuqmkw();
        goto soqqgkywqwwiuymo;
        eeegygkcwmqmqyes:
        
        $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\x2f\56\x2e\x2f\56\x2e");
        goto cgewwoksiyocyiga;
        mickaocycsqkssoi:
        if (is_dir($mkomwsiykqigmqca)) {
            goto ecsieaukkkskmiye;
        }
        goto eeegygkcwmqmqyes;
        qocgiimiggeksoky:
        return $mkomwsiykqigmqca;
        goto uwowyggggqcqiuao;
        cgewwoksiyocyiga:
        ecsieaukkkskmiye:
        goto qocgiimiggeksoky;
        soqqgkywqwwiuymo:
        $mkomwsiykqigmqca = "{$couygeouymagssgw}\x2f\x76\x65\x6e\x64\x6f\x72";
        goto mickaocycsqkssoi;
        uwowyggggqcqiuao:
    }
}
