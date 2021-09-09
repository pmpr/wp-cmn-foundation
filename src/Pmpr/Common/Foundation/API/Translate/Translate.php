<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API\Translate;

use Exception;
use Pmpr\Common\Foundation\API\API;
use Pmpr\Common\Foundation\API\Translate\Token\Generator;
use Pmpr\Common\Foundation\API\Translate\Token\GeneratorInterface;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;
use UnexpectedValueException;

class Translate extends API
{
    const RESULT_REGEX = ["\57\x2c\53\57" => "\x2c", "\57\134\133\x2c\x2f" => "\x5b"];
    
    protected ?string $lastDetectedSource = null;
    
    protected ?GeneratorInterface $token = null;
    public function __construct()
    {
        goto ikcsoqwwgackmmgo;
        ikcsoqwwgackmmgo:
        $this->token = new Generator();
        goto aoqyomyemgqwqiok;
        aoqyomyemgqwqiok:
        $this->domain = "\x68\x74\x74\x70\x73\x3a\x2f\57\x74\162\x61\x6e\x73\154\x61\x74\145\56\x67\157\157\147\154\x65\56\x63\157\155\57\164\162\x61\156\x73\x6c\141\164\145\x5f\x61";
        goto aqwquiokswegekow;
        aqwquiokswegekow:
        $this->ueqoossgegqyosem([
            "\x63\154\151\145\x6e\164" => "\147\x74\x78",
            
            "\150\154" => "\x65\x6e",
            "\x64\x74" => ["\x74", "\x62\144", "\x61\164", "\x65\x78", "\154\x64", "\155\144", "\161\x63\x61", "\x72\167", "\x72\x6d", "\163\163"],
            "\163\154" => null,
            
            "\x74\x6c" => null,
            
            "\161" => null,
            
            "\x69\x65" => "\125\x54\x46\x2d\70",
            
            "\x6f\x65" => "\x55\x54\106\55\70",
            
            "\155\x75\154\164\x69\162\x65\163" => 1,
            "\x6f\x74\x66" => 0,
            "\x70\143" => 1,
            "\164\x72\x73" => 1,
            "\x73\x73\x65\x6c" => 0,
            "\x74\x73\145\x6c" => 0,
            "\153\143" => 1,
            "\x74\x6b" => null,
        ]);
        goto ikkeiacqssyycmok;
        ikkeiacqssyycmok:
        parent::__construct();
        goto oaukqecqqacgggag;
        oaukqecqqacgggag:
    }
    public function kgquecmsgcouyaya()
    {
        $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\160\151\x5f\x74\x72\141\x6e\163\154\141\164\145"), [$this, "\x74\x72\x61\156\163\154\141\x74\145"], 10, 4);
        parent::kgquecmsgcouyaya();
    }
    
    public function translate(string $cmwygeyygwqaemaq = '', string $ccamueccusigaaio = "\x66\141", string $egsumesakcaaukem = "\x65\156", array $qiouiwasaauyaaue = [])
    {
        goto wgocagmosmkgeiwg;
        yekawwgsiywkaweq:
        sukmqsesceacgcsk:
        goto mowmeukkokkimoau;
        scmcqswckkigswau:
        if (!(is_string($keccaugmemegoimu) && $keccaugmemegoimu != '')) {
            goto sukmqsesceacgcsk;
        }
        goto eeksyuwwaiiaieiw;
        eeksyuwwaiiaieiw:
        $keccaugmemegoimu = [$keccaugmemegoimu];
        goto yekawwgsiywkaweq;
        eekeymsuaqauyyws:
        sucsiskcequmcegg:
        goto kaymcqwmgywuwgyq;
        gusmiieseekkmgaa:
        foreach ($keccaugmemegoimu as $igqsaukqcqscimok) {
            goto iiwcwoqcissmkesc;
            miowwmmmyucwauei:
            somowkeqasuacoco:
            goto qyuomwuuoguquuyq;
            iiwcwoqcissmkesc:
            if (!is_string($igqsaukqcqscimok)) {
                goto somowkeqasuacoco;
            }
            goto usmcsiysgwoqegku;
            usmcsiysgwoqegku:
            $coamwgceiiaocqmi[] = $igqsaukqcqscimok;
            goto miowwmmmyucwauei;
            qyuomwuuoguquuyq:
            ewqgyoqokosiwoiq:
            goto oaysgscuccmyyquw;
            oaysgscuccmyyquw:
        }
        goto eekeymsuaqauyyws;
        uoqocqgeokeqiuay:
        return $keccaugmemegoimu;
        goto wauuckiwcmyacuma;
        swikoiucwuiceysc:
        waqsouimkiiiagis:
        goto wokyagyeqmesumqy;
        kaymcqwmgywuwgyq:
        emsgkcioccgyqagu:
        goto wkqcyqymkacgoaym;
        uqmcygaemmsmwyow:
        if (is_string($keccaugmemegoimu)) {
            goto emsgkcioccgyqagu;
        }
        goto gusmiieseekkmgaa;
        wkmwqeaqmcicykyk:
        try {
            goto oykmaseogsuigwyk;
            oykmaseogsuigwyk:
            $this->ueqoossgegqyosem(["\x73\154" => $egsumesakcaaukem, "\x74\154" => $ccamueccusigaaio, "\161" => $cmwygeyygwqaemaq], true);
            goto cskmgmquecaqwukc;
            gcmeqoywuowwqckm:
            $keccaugmemegoimu = $this->qemyqseaomicaacs($keccaugmemegoimu);
            goto smoguaqmiogcyeii;
            cskmgmquecaqwukc:
            $keccaugmemegoimu = $this->get("\x2f\x73\x69\x6e\147\154\x65", $qiouiwasaauyaaue);
            goto gcmeqoywuowwqckm;
            smoguaqmiogcyeii:
        } catch (Exception $wgaoewqkwgomoaai) {
            $keccaugmemegoimu = $cmwygeyygwqaemaq;
        }
        goto scmcqswckkigswau;
        eiymiwgmeiauaosi:
        eggyeisewmwoyogm:
        goto kmaoowwieyqkceyi;
        kmaoowwieyqkceyi:
        goto yamsgeqwmskukass;
        goto qgiqqowasuukysmw;
        sccwseckqcqsccia:
        yamsgeqwmskukass:
        goto mqqwcwiuiecyiyuo;
        kgmyuoeauccsioko:
        if ($ccamueccusigaaio === $egsumesakcaaukem) {
            goto yyseeweqeyqeykec;
        }
        goto wkmwqeaqmcicykyk;
        umoqwucyssaacyme:
        
        foreach ($coamwgceiiaocqmi as $swaukaagekiououo) {
            goto ikyqecyakgkuassc;
            omqoyywiseosgemk:
            asekqqiwmgkgsmcq:
            goto sooowgiqueeqkuey;
            sooowgiqueeqkuey:
            msuykcqiymewymmi:
            goto eukgyqwumyckyiyo;
            ywiwssuaqigigukm:
            $this->ekcqeousicimaeww($swaukaagekiououo);
            goto ccsayioycemkwkow;
            ikyqecyakgkuassc:
            if (!$this->rkacqeomakmygemu($swaukaagekiououo)) {
                goto asekqqiwmgkgsmcq;
            }
            goto ywiwssuaqigigukm;
            ccsayioycemkwkow:
            goto iogaqqsmyokcsiko;
            goto omqoyywiseosgemk;
            eukgyqwumyckyiyo:
        }
        goto qiieaaosemmqmiue;
        miyimgycuyikiooo:
        if (!$cmwygeyygwqaemaq) {
            goto wiiigesqguyoqmoo;
        }
        goto kgmyuoeauccsioko;
        seassaykqmiysgio:
        if (is_string($keccaugmemegoimu)) {
            goto msqiqgiuckeymuae;
        }
        goto uumeieesomyymaqm;
        wgocagmosmkgeiwg:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto miyimgycuyikiooo;
        ceayysceqwmecmau:
        $coamwgceiiaocqmi[] = $keccaugmemegoimu[count($keccaugmemegoimu) - 2][0][0];
        goto sggyoiawcusoueeu;
        sqakwskcwaoyyegm:
        goto iegswgukwsmcasgs;
        goto swikoiucwuiceysc;
        wkqcyqymkacgoaym:
        
        if (!isset($mguwwsqkwwekgegu[count($keccaugmemegoimu) - 2][0][0])) {
            goto sikemkqimkwuggwy;
        }
        goto ceayysceqwmecmau;
        aoqagoicwgewaggg:
        
        $this->ekcqeousicimaeww(null);
        goto umoqwucyssaacyme;
        qiieaaosemmqmiue:
        iogaqqsmyokcsiko:
        goto seassaykqmiysgio;
        sggyoiawcusoueeu:
        sikemkqimkwuggwy:
        goto aoqagoicwgewaggg;
        wgiokeiwiauugqyy:
        $keccaugmemegoimu = $cmwygeyygwqaemaq;
        goto sccwseckqcqsccia;
        qgiqqowasuukysmw:
        yyseeweqeyqeykec:
        goto wgiokeiwiauugqyy;
        mqqwcwiuiecyiyuo:
        wiiigesqguyoqmoo:
        goto uoqocqgeokeqiuay;
        kswoimcsooaaqgsy:
        $keccaugmemegoimu = (string) $keccaugmemegoimu[0];
        goto sqakwskcwaoyyegm;
        uumeieesomyymaqm:
        if (is_array($keccaugmemegoimu[0])) {
            goto waqsouimkiiiagis;
        }
        goto kswoimcsooaaqgsy;
        wokyagyeqmesumqy:
        $keccaugmemegoimu = (string) array_reduce($keccaugmemegoimu[0], function ($ouameqkugmqkussm, $igqsaukqcqscimok) {
            $ouameqkugmqkussm .= $igqsaukqcqscimok[0];
            return $ouameqkugmqkussm;
        });
        goto euooqqsiougwiwem;
        joooswimiiwuokyk:
        msqiqgiuckeymuae:
        goto eiymiwgmeiauaosi;
        mowmeukkokkimoau:
        
        if (!(isset($keccaugmemegoimu[0]) && $keccaugmemegoimu[0])) {
            goto eggyeisewmwoyogm;
        }
        goto cuugyskiwckuiegg;
        euooqqsiougwiwem:
        iegswgukwsmcasgs:
        goto joooswimiiwuokyk;
        cuugyskiwckuiegg:
        $coamwgceiiaocqmi = [];
        goto uqmcygaemmsmwyow;
        wauuckiwcmyacuma:
    }
    
    public function qemyqseaomicaacs(?ResponseInterface $keccaugmemegoimu)
    {
        goto aamewgauekskkmqy;
        dauumiwwoaomeeiq:
        ukquewooeyquymyg:
        goto kiyaqowgamikyywa;
        mqamoqcwieeeaogq:
        $oouuuwawmuaayiku = preg_replace(array_keys(self::RESULT_REGEX), array_values(self::RESULT_REGEX), $kuukgsmqkagwaciu);
        goto aiiugysmmiyeweqw;
        kiyaqowgamikyywa:
        return $kuukgsmqkagwaciu;
        goto uqckucscguaykcqq;
        coycukegioumceac:
        throw new UnexpectedValueException(__("\104\141\x74\141\40\143\141\156\x6e\x6f\x74\40\x62\x65\40\144\x65\143\x6f\144\145\x64\40\x6f\162\x20\x69\x74\40\x69\163\x20\144\145\145\x70\145\162\x20\164\x68\141\156\x20\x74\x68\145\40\x72\x65\143\165\x72\x73\151\x6f\156\x20\x6c\x69\x6d\151\164", PR__CMN__FOUNDATION));
        goto dauumiwwoaomeeiq;
        aamewgauekskkmqy:
        $kuukgsmqkagwaciu = $keccaugmemegoimu->wesecsykkuakgyec();
        goto mqamoqcwieeeaogq;
        aiiugysmmiyeweqw:
        
        if (!(($kuukgsmqkagwaciu = json_decode($oouuuwawmuaayiku, true)) === null)) {
            goto ukquewooeyquymyg;
        }
        goto coycukegioumceac;
        uqckucscguaykcqq:
    }
    
    public function sygeeqgwywmygsyu() : ?GeneratorInterface
    {
        return $this->token;
    }
    
    public function eksymsucwkowwise() : ?string
    {
        return $this->lastDetectedSource;
    }
    
    private function rkacqeomakmygemu(string $aamkqmkgsaqmcuao) : bool
    {
        return (bool) preg_match("\57\x5e\50\x5b\x61\x2d\x7a\135\x7b\62\175\x29\x28\55\x5b\x41\55\132\135\x7b\x32\x7d\51\x3f\x24\x2f", $aamkqmkgsaqmcuao);
    }
    
    public function xowwwqwgumcsaaqc(&$xeciwimgioieayek, &$qiouiwasaauyaaue, &$qgciuiagkkguykgs)
    {
        goto qeqecusgmismyekk;
        qeqecusgmismyekk:
        $qqmmggwcsmymegca = ManipulateArray::get($this->ksqekagyyameaceq(), "\161");
        goto aumowykksoissaee;
        aumowykksoissaee:
        if (!$qqmmggwcsmymegca) {
            goto qogqquussuskqcws;
        }
        goto lowyoqyqsskqwkoc;
        amakaqaagmewkmcq:
        qogqquussuskqcws:
        goto oesiikeuecwqyacc;
        oesiikeuecwqyacc:
        parent::xowwwqwgumcsaaqc($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
        goto ogwukogyomoywaus;
        lowyoqyqsskqwkoc:
        $this->ksiyskmggywgsayu("\164\x6b", $this->sygeeqgwywmygsyu()->ysyiouymigoigsma($qqmmggwcsmymegca), true);
        goto amakaqaagmewkmcq;
        ogwukogyomoywaus:
    }
    
    public function ekcqeousicimaeww(?string $gesecasgkkioeega) : self
    {
        $this->lastDetectedSource = $gesecasgkkioeega;
        return $this;
    }
}
