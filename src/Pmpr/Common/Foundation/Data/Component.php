<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        goto uiikmyqamcckswyq;
        uiikmyqamcckswyq:
        $this->root = ManipulateFile::iygwwosmmgmouoyc($miawkwqioaeasiig);
        goto kggkkkouaeowcuea;
        iquamkkkakqceico:
        $this->shortname = ManipulateString::gumqicgiosoqweoy($ymqmyyeuycgmigyo);
        goto dakcgwwcguscwcgs;
        kmcoguowgwkcuaec:
        $this->domain = $ymqmyyeuycgmigyo;
        goto ogeqwcqesgmkyqaw;
        ogeqwcqesgmkyqaw:
        $this->object = $mksyucucyswaukig;
        goto iquamkkkakqceico;
        eggksuwcamuciuyu:
        $this->type = $sqeykgyoooqysmca;
        goto kmcoguowgwkcuaec;
        soeqqoegkeocasic:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig . self::__ROOT__PATH, $this->ikeqsmumgwwuqmkw());
        goto euyueamqiaoyikie;
        muemymcgeomwgqka:
        ManipulateFile::wwckmeoskuagomki($ooceusioyoimisig, $ymqmyyeuycgmigyo);
        goto soeqqoegkeocasic;
        dakcgwwcguscwcgs:
        $ooceusioyoimisig = strtoupper($ymqmyyeuycgmigyo);
        goto muemymcgeomwgqka;
        kggkkkouaeowcuea:
        $this->name = $ymqmyyeuycgmigyo;
        goto eggksuwcamuciuyu;
        euyueamqiaoyikie:
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
        goto yyciyacskyymkcks;
        amciqasycmesgweq:
        return $mkomwsiykqigmqca;
        goto qucimmcmsoikwmau;
        yaysquwmiyumwecu:
        
        $mkomwsiykqigmqca = realpath("{$couygeouymagssgw}\57\x2e\56\x2f\56\56");
        goto oeeayggmgimqigqm;
        tiyaygouckaskgga:
        $mkomwsiykqigmqca = "{$couygeouymagssgw}\57\x76\145\156\x64\157\x72";
        goto syowoqgquwemkyuy;
        syowoqgquwemkyuy:
        if (is_dir($mkomwsiykqigmqca)) {
            goto uaokswasiaegemqu;
        }
        goto yaysquwmiyumwecu;
        yyciyacskyymkcks:
        $couygeouymagssgw = $this->ikeqsmumgwwuqmkw();
        goto tiyaygouckaskgga;
        oeeayggmgimqigqm:
        uaokswasiaegemqu:
        goto amciqasycmesgweq;
        qucimmcmsoikwmau:
    }
}
