<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Closure;
use Exception;
use Generator;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;
use Illuminate\Database\QueryException;

class Database extends Common implements ConnectionInterface
{
    use FieldTrait;
    
    protected $db = null;
    
    protected array $configs = [];
    
    protected ?Manager $manager = null;
    
    protected ?int $transactionCount = 0;
    
    public function __construct()
    {
        goto uckusgwkoycmkeam;
        uckusgwkoycmkeam:
        global $wpdb;
        goto gscyiqmmegqmqcoe;
        gscyiqmmegqmqcoe:
        $this->db = $wpdb;
        goto mieoguuqiwqioeqa;
        mieoguuqiwqioeqa:
        parent::__construct();
        goto qosswumywsaeyqus;
        qosswumywsaeyqus:
    }
    
    public function wwiwswsasquukoqs()
    {
        return $this->db;
    }
    
    public function amosaeggmeksgwea() : ?Manager
    {
        return $this->manager;
    }
    public function cymcyywycwkawmsi()
    {
        goto swicauyqusmgeccu;
        icoiqskygugkgmkm:
        $uiewakwqscemywuo = ["\x64\x72\151\166\x65\x72" => "\x6d\x79\163\161\154", "\150\x6f\163\x74" => $ooggeikkseeqyyek->__get("\144\x62\x68\x6f\163\164"), "\x64\x61\164\x61\x62\141\x73\x65" => $ooggeikkseeqyyek->__get("\144\142\156\x61\x6d\x65"), "\x75\163\x65\x72\x6e\141\x6d\x65" => $ooggeikkseeqyyek->__get("\x64\142\165\163\x65\162"), "\160\x61\163\163\x77\x6f\162\144" => $ooggeikkseeqyyek->__get("\x64\142\x70\141\163\163\x77\157\x72\144"), "\x70\157\x72\164" => $ooggeikkseeqyyek->options, "\143\x68\141\x72\163\145\164" => $ooggeikkseeqyyek->charset, "\x63\157\154\x6c\x61\164\151\157\x6e" => $ooggeikkseeqyyek->collate, "\160\162\145\146\x69\170" => $ooggeikkseeqyyek->prefix];
        goto kocaieyauyiqmyiy;
        kocaieyauyiqmyiy:
        
        $eygsasmqycagyayw->addConnection($uiewakwqscemywuo);
        goto gcqssckowmywoesw;
        eekkcooqswqouoei:
        
        $eygsasmqycagyayw->setAsGlobal();
        goto cuayqmasemsqsume;
        swicauyqusmgeccu:
        $ooggeikkseeqyyek = $this->wwiwswsasquukoqs();
        goto maguoggkqamaiuag;
        maguoggkqamaiuag:
        $eygsasmqycagyayw = new Manager();
        goto icoiqskygugkgmkm;
        gcqssckowmywoesw:
        
        $eygsasmqycagyayw->bootEloquent();
        goto eekkcooqswqouoei;
        cuayqmasemsqsume:
        $this->manager = $eygsasmqycagyayw;
        goto igmawmwssyskqqag;
        igmawmwssyskqqag:
    }
    
    public function query() : Builder
    {
        goto iomwkkieqcswkkaw;
        iomwkkieqcswkkaw:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto eussqkkimciywios;
        ewsigoeswimiueqe:
        return new Builder($this, $kooimksequwgsyqc, $wgqamiqkugoqsmes);
        goto gaskcgoeywuyukke;
        eussqkkimciywios:
        $wgqamiqkugoqsmes = $this->yokcoiaqqaquwecc();
        goto ewsigoeswimiueqe;
        gaskcgoeywuyukke:
    }
    
    public function aakmagwggmkoiiyu() : ?string
    {
        return $this->aceaeommyuooiqge("\x6e\141\155\145");
    }
    
    public function aqoymmcygkssqmmy() : Grammar
    {
        return new Grammar();
    }
    
    public function yokcoiaqqaquwecc() : Processor
    {
        return new Processor();
    }
    
    public function xoiwkmeymocuuwcq($ywmkwiwkosakssii)
    {
        return $this->wwiwswsasquukoqs()->insert_id;
    }
    
    public function tkgawykgecmsaeis() : ?array
    {
        return $this->configs;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq = null)
    {
        return ManipulateArray::get($this->tkgawykgecmsaeis(), $omkysikckkcieckq);
    }
    
    public function uawwgkimmooamyay() : ?int
    {
        return $this->transactionCount;
    }
    
    public function iqekeywwkoksagke($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : array
    {
        goto gqaqamewqeaqwcia;
        sgkqgucguyccaaki:
        return (array) $sogksuscggsicmac;
        goto omuemegmkesqgwys;
        gqaqamewqeaqwcia:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto okuqsqaiwwiigmyu;
        ksiwgckusukisueg:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto sgkqgucguyccaaki;
        okuqsqaiwwiigmyu:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto ksiwgckusukisueg;
        omuemegmkesqgwys:
    }
    
    private function quauggogguqkokkk($sogksuscggsicmac, $asiqcaccsgscgcyq, $iykmscciaowcagqu)
    {
        goto cmsiuimsiycomyay;
        ccgsycueagwegqeu:
        geyiosucqswaeasw:
        goto gmeiuoeewucukque;
        cmsiuimsiycomyay:
        if (!($sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error)) {
            goto geyiosucqswaeasw;
        }
        goto qmqmskywcgiqgygm;
        qmqmskywcgiqgygm:
        throw new QueryException($asiqcaccsgscgcyq, $iykmscciaowcagqu, new Exception($this->wwiwswsasquukoqs()->last_error));
        goto ccgsycueagwegqeu;
        gmeiuoeewucukque:
    }
    
    public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self
    {
        $this->configs[$uusmaiomayssaecw] = $omkysikckkcieckq;
        return $this;
    }
    
    private function qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, $suckquwcuiuyiogc = false)
    {
        goto yqqseqskcqeqkacm;
        sockocsycmkaeosg:
        $iykmscciaowcagqu = array_map(function ($moyaaaascoeowegu) {
            goto ceaamccscgcmqgka;
            igyesgemqesackws:
            $moyaaaascoeowegu = "\156\x75\154\x6c";
            goto wiaymoucakyaikii;
            ociesuicgmkekcue:
            goto ycecaauekkiqacuu;
            goto ymucaguacemwsgsi;
            wiaymoucakyaikii:
            sayqggaieocmskko:
            goto ociesuicgmkekcue;
            ceaamccscgcmqgka:
            if (is_string($moyaaaascoeowegu)) {
                goto qmguoqeawegcoeoa;
            }
            goto omumkeywqqogwwue;
            ymucaguacemwsgsi:
            qmguoqeawegcoeoa:
            goto qiikwossequwiuom;
            wqwmuuicoqigqwyc:
            return $moyaaaascoeowegu;
            goto oqgymyiwckkwueuw;
            gaouaiemokqqgssw:
            ycecaauekkiqacuu:
            goto wqwmuuicoqigqwyc;
            omumkeywqqogwwue:
            if (!($moyaaaascoeowegu === null)) {
                goto sayqggaieocmskko;
            }
            goto igyesgemqesackws;
            qiikwossequwiuom:
            $moyaaaascoeowegu = "\47" . esc_sql($moyaaaascoeowegu) . "\47";
            goto gaouaiemokqqgssw;
            oqgymyiwckkwueuw:
        }, $iykmscciaowcagqu);
        goto ugkwqaywmwqucoeo;
        kwasqmcyiswoaiuu:
        return $gqgemcmoicmgaqie;
        goto kiskwawumeiiieuk;
        asoecuscmsyusmkg:
        qywkykqkeeuccoui:
        goto kwasqmcyiswoaiuu;
        ugkwqaywmwqucoeo:
        $gqgemcmoicmgaqie = str_replace(["\45", "\77"], ["\45\45", "\45\163"], $gqgemcmoicmgaqie);
        goto syisomgawcsqeemk;
        ywokggauuiosegog:
        $iykmscciaowcagqu = $this->uooqikqsgykeymok($iykmscciaowcagqu);
        goto uoewiggumomegksg;
        uoewiggumomegksg:
        if (!$iykmscciaowcagqu) {
            goto qywkykqkeeuccoui;
        }
        goto sockocsycmkaeosg;
        yqqseqskcqeqkacm:
        $gqgemcmoicmgaqie = str_replace("\x22", "\x60", $gqgemcmoicmgaqie);
        goto ywokggauuiosegog;
        syisomgawcsqeemk:
        $gqgemcmoicmgaqie = vsprintf($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto asoecuscmsyusmkg;
        kiskwawumeiiieuk:
    }
    
    public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null, $yuwymayicwwqiske = true) : ?string
    {
        goto awuwuuuagqysukku;
        maggecymmmesqmqs:
        $syeseoiyagmgumcy = $syeseoiyagmgumcy . ManipulateString::gumqicgiosoqweoy($aasascamegmwqmqk);
        goto csaksaisgawusswg;
        miugmimciywcgswm:
        if (!$aasascamegmwqmqk) {
            goto kkmuuoscccmokkiw;
        }
        goto aqekkeqmmewoyawu;
        aqekkeqmmewoyawu:
        if (!$yuwymayicwwqiske) {
            goto oaqeoqsksuyyggmg;
        }
        goto mcqwuawosciucemq;
        emeeocqaisksyioq:
        oaqeoqsksuyyggmg:
        goto maggecymmmesqmqs;
        mcqwuawosciucemq:
        $syeseoiyagmgumcy = $this->wwiwswsasquukoqs()->prefix;
        goto emeeocqaisksyioq;
        csaksaisgawusswg:
        kkmuuoscccmokkiw:
        goto ecgwgamiseokmise;
        ecgwgamiseokmise:
        return $syeseoiyagmgumcy;
        goto qkiyyywwuiuackao;
        awuwuuuagqysukku:
        $syeseoiyagmgumcy = '';
        goto miugmimciywcgswm;
        qkiyyywwuiuackao:
    }
    
    public function getPdo() : self
    {
        return $this;
    }
    
    public function raw($eqgoocgaqwqcimie) : Expression
    {
        return new Expression($eqgoocgaqwqcimie);
    }
    
    public function table($aasascamegmwqmqk, $aikcyecgesuiaacw = null) : Builder
    {
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy($aasascamegmwqmqk);
        
        return $this->query()->from($aasascamegmwqmqk);
    }
    
    public function insert($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        
        return $this->statement($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function update($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function delete($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        return $this->niiwccguwykyacek($gqgemcmoicmgaqie, $iykmscciaowcagqu);
    }
    
    public function statement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : bool
    {
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        
        return $this->unprepared($gmyoogwqukkgwiwk);
    }
    
    public function affectingStatement($gqgemcmoicmgaqie, $iykmscciaowcagqu = []) : int
    {
        goto gyskcwykkyakeims;
        mcagemacuqyskogs:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gmyoogwqukkgwiwk, $iykmscciaowcagqu);
        goto aamgqoqyyooimqkm;
        gyskcwykkyakeims:
        $gmyoogwqukkgwiwk = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu, true);
        goto ossakckwskyqusmm;
        ossakckwskyqusmm:
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gmyoogwqukkgwiwk);
        goto mcagemacuqyskogs;
        aamgqoqyyooimqkm:
        return intval($sogksuscggsicmac);
        goto cimascmiesomqgqs;
        cimascmiesomqgqs:
    }
    
    public function select($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true) : array
    {
        goto easuiqiooiwgswmm;
        easuiqiooiwgswmm:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto saiuoomgskwgyeya;
        kwocaqggwcksesce:
        return $sogksuscggsicmac;
        goto momuweiasiwskekw;
        kuuawiosmkgqsscy:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto kwocaqggwcksesce;
        saiuoomgskwgyeya:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_results($gqgemcmoicmgaqie);
        goto kuuawiosmkgqsscy;
        momuweiasiwskekw:
    }
    
    public function cursor($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
    }
    
    public function selectOne($gqgemcmoicmgaqie, $iykmscciaowcagqu = [], $ykwkqeocyaeasoqy = true)
    {
        goto qaewauyekqucciyc;
        qaewauyekqucciyc:
        $gqgemcmoicmgaqie = $this->qyiiuyacuommoyso($gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto bgakaasgwwygosyi;
        aucwccaiqwsmyuaq:
        $this->quauggogguqkokkk($sogksuscggsicmac, $gqgemcmoicmgaqie, $iykmscciaowcagqu);
        goto agyooskogigyayws;
        bgakaasgwwygosyi:
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->get_row($gqgemcmoicmgaqie);
        goto aucwccaiqwsmyuaq;
        agyooskogigyayws:
        return $sogksuscggsicmac;
        goto iiiwsgameuomumgw;
        iiiwsgameuomumgw:
    }
    
    public function unprepared($gqgemcmoicmgaqie) : bool
    {
        
        $sogksuscggsicmac = $this->wwiwswsasquukoqs()->query($gqgemcmoicmgaqie);
        return $sogksuscggsicmac === false || $this->wwiwswsasquukoqs()->last_error;
    }
    
    public function prepareBindings(array $iykmscciaowcagqu) : array
    {
        goto mmcikqikqecaeswu;
        mmcikqikqecaeswu:
        $kooimksequwgsyqc = $this->aqoymmcygkssqmmy();
        goto ywsywoumuaykkeaa;
        wsqiqkiucakewgou:
        mcukocaaoyuugoeu:
        goto yaumwqeommqigswq;
        ywsywoumuaykkeaa:
        foreach ($iykmscciaowcagqu as $uusmaiomayssaecw => $eqgoocgaqwqcimie) {
            goto mciumqyyossyiuyk;
            aeuosggumiiwoesm:
            goto uwusswwekqcsisus;
            goto wyqmeyoaggwuioak;
            sqmqwqeoygcmqcim:
            uwusswwekqcsisus:
            goto syykqmkiyoekqsek;
            uyksacasqywyessc:
            $iykmscciaowcagqu[$uusmaiomayssaecw] = intval($eqgoocgaqwqcimie);
            goto sqmqwqeoygcmqcim;
            omemqagskckoeoog:
            egwgyekaiqomyeaa:
            goto aeuosggumiiwoesm;
            acaeigkmigikeuyu:
            if (is_scalar($eqgoocgaqwqcimie)) {
                goto cgwokqwakqcmiieo;
            }
            goto kqyeukywmgismyaq;
            syykqmkiyoekqsek:
            scockmiqikwwkqse:
            goto aiqekkyauwswayyq;
            wykuosegisygosiq:
            goto egwgyekaiqomyeaa;
            goto ugikgkwuwmgymgus;
            cqeoguiqiymkyweo:
            
            $iykmscciaowcagqu[$uusmaiomayssaecw] = $eqgoocgaqwqcimie->format($ocogsiouoiuuguym);
            goto omgcsmsikaggaooc;
            mukwsuuuqcgesmwc:
            
            
            
            
            $ocogsiouoiuuguym = $kooimksequwgsyqc->getDateFormat();
            goto cqeoguiqiymkyweo;
            ugikgkwuwmgymgus:
            cgwokqwakqcmiieo:
            goto gsgyayuaekgyoumc;
            mciumqyyossyiuyk:
            
            if (is_bool($eqgoocgaqwqcimie)) {
                goto kssuqmsgmaaeqigw;
            }
            goto acaeigkmigikeuyu;
            gsgyayuaekgyoumc:
            goto scockmiqikwwkqse;
            goto omemqagskckoeoog;
            kqyeukywmgismyaq:
            if (!$eqgoocgaqwqcimie instanceof \DateTime) {
                goto okycquokqoamsquy;
            }
            goto mukwsuuuqcgesmwc;
            omgcsmsikaggaooc:
            okycquokqoamsquy:
            goto wykuosegisygosiq;
            wyqmeyoaggwuioak:
            kssuqmsgmaaeqigw:
            goto uyksacasqywyessc;
            aiqekkyauwswayyq:
        }
        goto wsqiqkiucakewgou;
        yaumwqeommqigswq:
        return $iykmscciaowcagqu;
        goto wiiqigwgyuiuksia;
        wiiqigwgyuiuksia:
    }
    
    public function transaction(Closure $ekiuyucoiagmscgy, $mogwwoaswuuykekc = 1)
    {
        
        $this->beginTransaction();
        try {
            goto mqoygcuqwacgycek;
            aiukiwqmikscoswm:
            return $icwicymcioeyeyek;
            goto mcmkqgkwyqoiikcq;
            mqoygcuqwacgycek:
            $icwicymcioeyeyek = $ekiuyucoiagmscgy();
            goto agyycikucwgmysee;
            agyycikucwgmysee:
            
            $this->commit();
            goto aiukiwqmikscoswm;
            mcmkqgkwyqoiikcq:
        } catch (Exception $iewosgggaueeyymg) {
            
            $this->rollBack();
            throw $iewosgggaueeyymg;
        }
    }
    
    public function beginTransaction()
    {
        goto gskacikgkwcuauko;
        qmegcmqemmywoqas:
        ssyukuseoymackeo:
        goto giooasyeqwaaocea;
        yyieomeeqycmikqw:
        if (!(false !== $ammuiskickemgqgc)) {
            goto ssyukuseoymackeo;
        }
        goto kwiuqqwamsimqgme;
        kwiuqqwamsimqgme:
        $this->transactionCount++;
        goto qmegcmqemmywoqas;
        gskacikgkwcuauko:
        
        $ammuiskickemgqgc = $this->unprepared("\123\x54\x41\122\124\40\124\x52\x41\116\123\101\x43\x54\x49\x4f\x4e\73");
        goto yyieomeeqycmikqw;
        giooasyeqwaaocea:
    }
    
    public function commit()
    {
        goto qgyoesyiasqimcoe;
        gsgkayokisiesciy:
        if (!(false !== $ammuiskickemgqgc)) {
            goto uueywyysiicuauem;
        }
        goto ascogkesqmuuaesq;
        ascogkesqmuuaesq:
        $this->transactionCount--;
        goto askukaucmocewkgg;
        askukaucmocewkgg:
        uueywyysiicuauem:
        goto kiemqsgcmouqscao;
        qgyoesyiasqimcoe:
        if (!($this->transactionCount >= 1)) {
            goto seieguyaaiqismgo;
        }
        goto kkwqmewaksmokuqy;
        kkwqmewaksmokuqy:
        
        $ammuiskickemgqgc = $this->unprepared("\x43\117\x4d\x4d\x49\x54\73");
        goto gsgkayokisiesciy;
        kiemqsgcmouqscao:
        seieguyaaiqismgo:
        goto wssaaemscmmiomee;
        wssaaemscmmiomee:
    }
    
    public function rollBack()
    {
        goto iusaeoimukymskgs;
        meoweqcaaosoomeu:
        $this->transactionCount--;
        goto ywmoieqkigsykequ;
        asciaakaoygususy:
        
        $ammuiskickemgqgc = $this->unprepared("\x52\117\x4c\x4c\102\101\x43\x4b\x3b");
        goto eaggoasiwogmquwc;
        eaggoasiwogmquwc:
        if (!(false !== $ammuiskickemgqgc)) {
            goto meqmcgmksqiqcoyq;
        }
        goto meoweqcaaosoomeu;
        iaousaauoawkqkkg:
        euskosgaksmimgug:
        goto kkwucaoumyayagcq;
        ywmoieqkigsykequ:
        meqmcgmksqiqcoyq:
        goto iaousaauoawkqkkg;
        iusaeoimukymskgs:
        if (!($this->transactionCount >= 1)) {
            goto euskosgaksmimgug;
        }
        goto asciaakaoygususy;
        kkwucaoumyayagcq:
    }
    
    public function transactionLevel() : ?int
    {
        return $this->transactionCount;
    }
    
    public function pretend(Closure $ekiuyucoiagmscgy) : array
    {
        return [];
    }
    
    public function getDatabaseName()
    {
        return $this->wwiwswsasquukoqs()->__get("\x64\x62\156\x61\x6d\145");
    }
}
