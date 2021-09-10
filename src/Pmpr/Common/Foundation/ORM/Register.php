<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM;

use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\Register\RegisterPost;

class Register extends RegisterPost
{
    
    protected array $views = [];
    
    protected array $schema = [];
    
    protected array $notSchema = [];
    
    protected bool $isGlobal = false;
    
    protected ?string $prefix = null;
    
    protected ?bool $mapMetaCap = null;
    
    public function aeosueemgsygqese() : ?array
    {
        return $this->schema;
    }
    
    public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Field
    {
        return ManipulateArray::get($this->aeosueemgsygqese(), $uusmaiomayssaecw);
    }
    
    public function cquokmemekqqywgi(Field $aiowsaccomcoikus) : self
    {
        $this->schema[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus;
        return $this;
    }
    
    public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self
    {
        goto gowuaykeqimwouio;
        qaksccygequmaaku:
        emkywookycykucmu:
        goto emqmissqcckcecsy;
        emqmissqcckcecsy:
        return $this;
        goto vimsegsagoiwywys;
        gowuaykeqimwouio:
        foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) {
            goto qggoyqomgwciiigc;
            qggoyqomgwciiigc:
            if (!$aiowsaccomcoikus instanceof Field) {
                goto owqkeeeamewcmaum;
            }
            goto qiusaiuaqusoqcgm;
            qiusaiuaqusoqcgm:
            $this->cquokmemekqqywgi($aiowsaccomcoikus);
            goto icgomugwscaugkgm;
            icgomugwscaugkgm:
            owqkeeeamewcmaum:
            goto gceckcyyeqkgussg;
            gceckcyyeqkgussg:
            cymcgssycuaakwsu:
            goto agyygqioqggmgawy;
            agyygqioqggmgawy:
        }
        goto qaksccygequmaaku;
        vimsegsagoiwywys:
    }
    
    public function iegyckmmougkucya() : array
    {
        return $this->notSchema;
    }
    
    public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self
    {
        $this->notSchema[] = $uusmaiomayssaecw;
        return $this;
    }
    
    public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self
    {
        goto mqseqwqcsesmmuag;
        mqseqwqcsesmmuag:
        if (!is_array($gmawcgiwcmsukeiu)) {
            goto ouowckcwkscikcic;
        }
        goto kwmeeuiuqcaokkye;
        iyomiywaoqgiskcc:
        ouowckcwkscikcic:
        goto yemqwgwwogceuekc;
        kwmeeuiuqcaokkye:
        foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) {
            $this->qokmgyacmymciaey($oaukocmsckciqaok);
            iywceuecmmmqksuu:
        }
        goto qkukcokaqekkoako;
        qkukcokaqekkoako:
        wucoiwmyomgymyku:
        goto iyomiywaoqgiskcc;
        yemqwgwwogceuekc:
        return $this;
        goto bowssiaeccamuiiq;
        bowssiaeccamuiiq:
    }
    
    public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self
    {
        $this->prefix = $yuwymayicwwqiske;
        return $this;
    }
    
    public function iemucaoqaisiwise()
    {
        return $this->mapMetaCap;
    }
    
    public function aioqieywgykaaoec() : ?array
    {
        return $this->views;
    }
    
    public function cgswceaawqgeskua($uusmaiomayssaecw)
    {
        return ManipulateArray::get($this->aioqieywgykaaoec(), $uusmaiomayssaecw);
    }
    
    public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, $ywmkwiwkosakssii = []) : self
    {
        goto mgqumoaokymooyou;
        ukwkqeoyuoageuwg:
        ieiwswkoqcqaykik:
        goto saosiwmguyawuouy;
        mgqumoaokymooyou:
        if ($this->cgswceaawqgeskua($uusmaiomayssaecw)) {
            goto ieiwswkoqcqaykik;
        }
        goto gooymcgycisyuowi;
        saosiwmguyawuouy:
        return $this;
        goto wwsasogecmwwikws;
        imciyymqukkwemqa:
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee);
        goto muakuckcsywcyuao;
        gooymcgycisyuowi:
        $ggauoeuaesiymgee = ["\164\171\x70\145" => $uusmaiomayssaecw, "\160\x6f\x73\x69\x74\x69\x6f\156" => 0, "\x6d\145\x6e\165\x5f\x73\154\165\147" => $this->aakmagwggmkoiiyu(), "\x70\x61\x67\145\x5f\164\151\164\x6c\x65" => $this->qeeuwmmksmqiuywg(), "\155\145\156\x75\137\164\151\x74\x6c\145" => $this->uikgwcuascgeissw("\141\x6c\154\137\x69\164\145\x6d\x73"), "\163\150\157\167\x5f\x69\x6e\137\x6d\145\x6e\165" => $this->egockcwgmeocqeqc()];
        goto ikekioqaccggcwko;
        muakuckcsywcyuao:
        awgqqokeqkaaqsko:
        goto oqwiceqiyckwgqkw;
        oqwiceqiyckwgqkw:
        $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii;
        goto ukwkqeoyuoageuwg;
        ikekioqaccggcwko:
        if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) {
            goto awgqqokeqkaaqsko;
        }
        goto imciyymqukkwemqa;
        wwsasogecmwwikws:
    }
    
    public function qemeyueyiwgsokuc($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\160\x65\x72\137\x70\x61\x67\145" => ManipulateSetting::omkaowmygoqwsywq(), "\x63\157\x6c\165\x6d\156\163" => []]);
        return $this->ecmiqywsauuoccwo("\151\x6e\144\x65\170", $ywmkwiwkosakssii);
    }
    
    public function wkesqcmiekqoykag($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\162\145\x6e\x74\x5f\x73\154\165\147" => $this->aakmagwggmkoiiyu(), "\x6d\145\x6e\165\x5f\163\154\x75\x67" => "\145\x64\151\164\137" . $this->aakmagwggmkoiiyu(), "\143\x6f\x6c\x75\155\156\163" => 2]);
        return $this->ecmiqywsauuoccwo("\145\x64\x69\x74", $ywmkwiwkosakssii);
    }
    
    public function gemkqqguesukeocw($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\x61\x72\x65\x6e\x74\137\x73\x6c\165\147" => $this->aakmagwggmkoiiyu(), "\155\145\x6e\165\137\163\x6c\x75\x67" => "\x61\144\x64\137" . $this->aakmagwggmkoiiyu(), "\x63\157\154\165\155\x6e\x73" => 2]);
        return $this->ecmiqywsauuoccwo("\x61\x64\144", $ywmkwiwkosakssii);
    }
    
    public function aseucqksocwomwos($ywmkwiwkosakssii = []) : self
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x70\141\162\145\156\x74\x5f\163\154\165\147" => $this->aakmagwggmkoiiyu(), "\x6d\x65\156\x75\x5f\163\x6c\165\x67" => "\x73\x68\157\x77\137" . $this->aakmagwggmkoiiyu(), "\143\157\154\x75\x6d\156\163" => []]);
        return $this->ecmiqywsauuoccwo("\163\x68\157\x77", $ywmkwiwkosakssii);
    }
    
    public function cykmceoageywgkqs() : bool
    {
        return $this->isGlobal;
    }
    
    public function iukgqamaqiamuosa() : self
    {
        $this->isGlobal = true;
        return $this;
    }
    
    public function ogqgmqymcwsqikme() : ?string
    {
        goto qgwcisoeysiwakak;
        qiayggmakgsuwwsm:
        ukeyisqesuoscwke:
        goto icqkceioeysykgua;
        icqkceioeysykgua:
        return $yuwymayicwwqiske;
        goto kqkgwqkwqeokgagk;
        wkceacsqeyiimcus:
        if (!$yuwymayicwwqiske) {
            goto ukeyisqesuoscwke;
        }
        goto acycwqqmgeygymkw;
        acycwqqmgeygymkw:
        $yuwymayicwwqiske .= "\x5f";
        goto qiayggmakgsuwwsm;
        qgwcisoeysiwakak:
        $yuwymayicwwqiske = $this->prefix;
        goto wkceacsqeyiimcus;
        kqkgwqkwqeokgagk:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}";
    }
    
    public function aiqioscoyukqgsgw() : ?string
    {
        return $this->name;
    }
    
    public function masyeqmaiuqwosei() : bool
    {
        return !empty($this->name);
    }
    
    public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array
    {
        goto wkakwguccsqwkiam;
        wkakwguccsqwkiam:
        ManipulateArray::unset($kkeqqkkkqwkocsyu, "\x6e\x6f\164\137\x73\x63\x68\x65\x6d\141");
        goto gmwcaekkucsikwye;
        icisiaukqqmgcwci:
        foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) {
            goto sosqqwiqmeqkwcsm;
            kkmeaociiyukweka:
            cewamoymcqkmsswi:
            goto cuoskwammceoauak;
            sosqqwiqmeqkwcsm:
            if (!$ymaogssqccumcyqa instanceof Field) {
                goto gaagyegguueymiec;
            }
            goto gwwyoyaqosoggkcu;
            gwwyoyaqosoggkcu:
            $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii);
            goto wwwkcwcigkeqiqwo;
            wwwkcwcigkeqiqwo:
            gaagyegguueymiec:
            goto kkmeaociiyukweka;
            cuoskwammceoauak:
        }
        goto qaggmqequkmcamma;
        wgksasuisoeqasuk:
        array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq);
        goto icisiaukqqmgcwci;
        ayaiiymgyagsoqia:
        if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) {
            goto cecsiuuukuegaqgq;
        }
        goto wksekwiuccskimmu;
        qaggmqequkmcamma:
        yaqgciyuusquaeea:
        goto qcysssoeueakqowq;
        wksekwiuccskimmu:
        $yygmoeguaqyumuui = array_map("\163\164\x72\154\145\156", array_keys($aaqqkgyougeiueyq));
        goto wgksasuisoeqasuk;
        mookyeaauceccaga:
        cecsiuuukuegaqgq:
        goto qasccueceswyusgy;
        qcysssoeueakqowq:
        $kkeqqkkkqwkocsyu["\x73\143\x68\145\x6d\141"] = $aaqqkgyougeiueyq;
        goto mookyeaauceccaga;
        qasccueceswyusgy:
        return $kkeqqkkkqwkocsyu;
        goto yuwiekiseooqagqo;
        gmwcaekkucsikwye:
        $aaqqkgyougeiueyq = ManipulateArray::get($kkeqqkkkqwkocsyu, "\x73\143\150\x65\155\141", []);
        goto ayaiiymgyagsoqia;
        yuwiekiseooqagqo:
    }
}
