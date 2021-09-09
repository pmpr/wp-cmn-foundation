<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;

use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;

class Engine extends Common
{
    const INFO_CODE = 200;
    const ERROR_CODE = 400;
    const DEBUG_CODE = 100;
    const ALERT_CODE = 550;
    const NOTICE_CODE = 250;
    const WARNING_CODE = 300;
    const CRITICAL_CODE = 500;
    const EMERGENCY_CODE = 600;
    const FILE_EXTENSION = "\56\154\x6f\x67";
    
    protected array $channels = [];
    
    public function eqosmaiseggiwsqi()
    {
        return ManipulateFile::cmaecekuqkwmemms(self::PR__LOG__PATH);
    }
    
    public function oquccoakoiimcoyk() : array
    {
        return $this->channels;
    }
    
    public function meyuyyociockkgow($ymqmyyeuycgmigyo)
    {
        $esmqigouaegaycwg = self::symcgieuakksimmu()->oquccoakoiimcoyk();
        return ManipulateArray::get($esmqigouaegaycwg, $ymqmyyeuycgmigyo, false);
    }
    
    public function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self
    {
        try {
            goto owisiqaowqeemuws;
            meqygagoeowmwyek:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto mgskawmqsikcgaoo;
            }
            goto emkywookycykucmu;
            owisiqaowqeemuws:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto eueowawgacsksksk;
            agyygqioqggmgawy:
            skiykgkiekmkcmwe:
            goto gowuaykeqimwouio;
            qggoyqomgwciiigc:
            throw new Exception("{$wkcwykowmmmwioqs}\x20\x63\141\x6e\x6e\x6f\164\x20\x61\x64\x64\40\x74\x6f\x20\154\157\x67\x67\x65\162\40\154\x69\x73\x74\72\x20\103\150\141\156\156\x65\154\40{$ymqmyyeuycgmigyo}\40\x69\x73\40\141\154\x72\145\141\x64\x79\40\x65\170\x69\163\164\x20\x69\x6e\40\x63\150\141\x6e\x6e\x65\154\x20\154\x69\163\164\x2e");
            goto qiusaiuaqusoqcgm;
            owqkeeeamewcmaum:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto qegqgskaeckoqaiq;
            }
            goto qggoyqomgwciiigc;
            icgomugwscaugkgm:
            qegqgskaeckoqaiq:
            goto gceckcyyeqkgussg;
            emkywookycykucmu:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\123\x74\141\162\164\x20\x4c\157\x67\x20\x66\157\x72\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto cymcgssycuaakwsu;
            qiusaiuaqusoqcgm:
            goto skiykgkiekmkcmwe;
            goto icgomugwscaugkgm;
            eueowawgacsksksk:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\57" . $wkcwykowmmmwioqs;
            goto meqygagoeowmwyek;
            cymcgssycuaakwsu:
            mgskawmqsikcgaoo:
            goto owqkeeeamewcmaum;
            gceckcyyeqkgussg:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto agyygqioqggmgawy;
            gowuaykeqimwouio:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\123\x6f\155\145\164\x68\151\156\x67\40\151\163\40\167\162\x6f\156\x67\x20\151\x6e\40\141\144\x64\x43\x68\x61\156\156\145\x6c\40\157\x6e\x20\154\x6f\147\147\x65\x72\x2e", PR__CMN__FOUNDATION));
        }
        return $this;
    }
    
    public function kukckykeywuqakmu($esmqigouaegaycwg)
    {
        foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) {
            $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs);
            emqmissqcckcecsy:
        }
        qaksccygequmaaku:
    }
    
    public function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string
    {
        goto ouowckcwkscikcic;
        ikekioqaccggcwko:
        return $qogsmwakwacwqogk;
        goto imciyymqukkwemqa;
        yemqwgwwogceuekc:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto bowssiaeccamuiiq;
        gooymcgycisyuowi:
        iywceuecmmmqksuu:
        goto ikekioqaccggcwko;
        qkukcokaqekkoako:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto iyomiywaoqgiskcc;
        iyomiywaoqgiskcc:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto wucoiwmyomgymyku;
        }
        goto yemqwgwwogceuekc;
        kwmeeuiuqcaokkye:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto iywceuecmmmqksuu;
        }
        goto qkukcokaqekkoako;
        mqseqwqcsesmmuag:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto kwmeeuiuqcaokkye;
        bowssiaeccamuiiq:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto vimsegsagoiwywys;
        }
        goto awgqqokeqkaaqsko;
        ouowckcwkscikcic:
        $qogsmwakwacwqogk = null;
        goto mqseqwqcsesmmuag;
        ieiwswkoqcqaykik:
        vimsegsagoiwywys:
        goto mgqumoaokymooyou;
        mgqumoaokymooyou:
        wucoiwmyomgymyku:
        goto gooymcgycisyuowi;
        awgqqokeqkaaqsko:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ieiwswkoqcqaykik;
        imciyymqukkwemqa:
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        goto wwsasogecmwwikws;
        wwwkcwcigkeqiqwo:
        saosiwmguyawuouy:
        goto kkmeaociiyukweka;
        ukeyisqesuoscwke:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto saosiwmguyawuouy;
        }
        goto qgwcisoeysiwakak;
        icqkceioeysykgua:
        if ($iqaosyayeiuaisqi) {
            goto muakuckcsywcyuao;
        }
        goto kqkgwqkwqeokgagk;
        wwsasogecmwwikws:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto ukeyisqesuoscwke;
        gwwyoyaqosoggkcu:
        ukwkqeoyuoageuwg:
        goto wwwkcwcigkeqiqwo;
        gaagyegguueymiec:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto sosqqwiqmeqkwcsm;
        sosqqwiqmeqkwcsm:
        oqwiceqiyckwgqkw:
        goto gwwyoyaqosoggkcu;
        kqkgwqkwqeokgagk:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto yaqgciyuusquaeea;
        wkceacsqeyiimcus:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto ukwkqeoyuoageuwg;
        }
        goto acycwqqmgeygymkw;
        yaqgciyuusquaeea:
        goto oqwiceqiyckwgqkw;
        goto cewamoymcqkmsswi;
        cewamoymcqkmsswi:
        muakuckcsywcyuao:
        goto gaagyegguueymiec;
        acycwqqmgeygymkw:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qiayggmakgsuwwsm;
        qiayggmakgsuwwsm:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto icqkceioeysykgua;
        qgwcisoeysiwakak:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto wkceacsqeyiimcus;
        kkmeaociiyukweka:
    }
}
