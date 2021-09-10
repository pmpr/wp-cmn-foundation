<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\Connection;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\ORM\DB\Field\Field;
use Pmpr\Common\Foundation\ORM\DB\Field\Foreign;
use Exception;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Database\Schema\ColumnDefinition;
use Pmpr\Common\Foundation\ORM\DB\Traits\FieldTrait;
use Pmpr\Common\Foundation\ORM\Register;

class Updater extends Common
{
    use FieldTrait;
    
    protected array $schema = [];
    
    protected ?Database $database = null;
    
    protected ?Register $register = null;
    
    protected ?SchemaBuilder $builder = null;
    public function wigskegsqequoeks()
    {
        $this->qcsmikeggeemccuu("\x61\x64\x6d\151\x6e\137\151\x6e\151\164", [$this, "\143\165\x63\161\147\x77\155\157\163\145\x71\141\x6b\147\x6f\145"]);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        goto uiakqoyqmcwokgse;
        uiakqoyqmcwokgse:
        $mgcmmwqwguicsews = null;
        goto oksimyciqsugcami;
        siiwoymcomqegmya:
        return $mgcmmwqwguicsews;
        goto wkokasiqoeycyukq;
        uecycmeaoqgqcomm:
        kmkwsqgumkwgemwc:
        goto siiwoymcomqegmya;
        oksimyciqsugcami:
        if (!($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea())) {
            goto kmkwsqgumkwgemwc;
        }
        goto gquyeowwseuycuoq;
        gquyeowwseuycuoq:
        
        $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        goto uecycmeaoqgqcomm;
        wkokasiqoeycyukq:
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        goto qioeuukaqkcsiiwk;
        qioeuukaqkcsiiwk:
        if (!(!$this->builder && $this->ysgiswuowuciwqaq())) {
            goto cgqmyikikqgmksgg;
        }
        goto cycwiouaowuswkmk;
        aoiwocgacociakoy:
        cgqmyikikqgmksgg:
        goto sguosuigwgwkikgs;
        cycwiouaowuswkmk:
        
        $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        goto aoiwocgacociakoy;
        sguosuigwgwkikgs:
        return $this->builder;
        goto ycyueqmkqyycmaus;
        ycyueqmkqyycmaus:
    }
    
    public function skckwsgymkimyuwo() : ?Database
    {
        return $this->database;
    }
    
    public function uwyqgmcuomgeccgy(?Database $wyeookkecoymuauy) : self
    {
        $this->database = $wyeookkecoymuauy;
        return $this;
    }
    
    public function oyeskqayoscwciem() : ?Register
    {
        return $this->register;
    }
    
    public function yuaecocyyyqqgsyw(Register $yyksucsgisomecgg) : self
    {
        $this->register = $yyksucsgisomecgg;
        return $this;
    }
    
    public function aceaeommyuooiqge($omkysikckkcieckq) : ?string
    {
        goto amkeeqecmwsmwqma;
        ioqmgaeuiicymgky:
        wgkamcmqescgqcyw:
        goto ywmcuouqguawueqm;
        amkeeqecmwsmwqma:
        $uiewakwqscemywuo = null;
        goto vkmscascaoysaqoc;
        ywmcuouqguawueqm:
        return $uiewakwqscemywuo;
        goto gkoaywyuyqemyiqw;
        soskeqqausokwugo:
        
        $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        goto ioqmgaeuiicymgky;
        vkmscascaoysaqoc:
        if (!($omkysikckkcieckq && $this->ysgiswuowuciwqaq())) {
            goto wgkamcmqescgqcyw;
        }
        goto soskeqqausokwugo;
        gkoaywyuyqemyiqw:
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            goto gcgsyyiismkwoyck;
            ycgsmkkioyqqawyk:
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            goto qywueycgouwamkso;
            qywueycgouwamkso:
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
            goto wecgakiimqymkmiy;
            aswikmsouwkequca:
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            goto ycgsmkkioyqqawyk;
            gcgsyyiismkwoyck:
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            goto aswikmsouwkequca;
            wecgakiimqymkmiy:
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        goto kqiakyymyiosoeia;
        iceuoqgyqsmywqqq:
        if (!$cgomysauusagiwqu) {
            goto agwsusimqmoesgck;
        }
        goto eugisyswkecacase;
        alomqucgmacieuoa:
        foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
            goto twusqqkmqgswisei;
            mwmwmswiueocaeug:
            qaykqsyoyscaqsce:
            goto ukugqakgsqqmgege;
            oaimckymswkqoysq:
            cuqwswgmwuwmgkwe:
            goto mwmwmswiueocaeug;
            ysykemiscamquoce:
            ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
            goto oaimckymswkqoysq;
            twusqqkmqgswisei:
            if (!($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu())) {
                goto cuqwswgmwuwmgkwe;
            }
            goto ysykemiscamquoce;
            ukugqakgsqqmgege:
        }
        goto yiskaoskyyiswkki;
        ookeyiumgkqqucia:
        if (!(json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya))) {
            goto yikyagqossasyqcu;
        }
        goto ioocowswsiqoyaai;
        eugisyswkecacase:
        
        $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
        goto emyuskcwqyscewue;
        ioocowswsiqoyaai:
        if (!ManipulateSetting::esoowymaimwcuecq()) {
            goto umosyyqqcuqiscco;
        }
        goto csuwemcoeyqemwks;
        qckqeqqcoawmwwqw:
        foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
            goto qgoaooycwyiyycoa;
            qgoaooycwyiyycoa:
            if (!($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya))) {
                goto mcguyegywqyasmii;
            }
            goto okacwwwygceucqsg;
            gcykaeaisuqiqyqi:
            wwcougcmsuqogqyc:
            goto swkeqqkqioecmgia;
            okacwwwygceucqsg:
            
            $uwqmqcmssaeieiqa[] = ["\141\143\x74\151\x6f\x6e" => "\x41\104\104", "\x63\157\154\165\155\x6e" => $aokagokqyuysuksm];
            goto igosooeimygcmois;
            igosooeimygcmois:
            mcguyegywqyasmii:
            goto gcykaeaisuqiqyqi;
            swkeqqkqioecmgia:
        }
        goto yqywgkymmowyggqa;
        wygeysociiyqokyk:
        $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
        goto qyguqmkmyqeyqaac;
        ccqagygkoaagksyw:
        agwsusimqmoesgck:
        goto oguigickaoqigcoi;
        akieywkiweasukyw:
        $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
        goto qoqgokiaagioccqg;
        wcmsamoqaogoouey:
        awcgiyqmoemqumeg:
        goto oyciiqiqoqkgoqec;
        oyciiqiqoqkgoqec:
        umosyyqqcuqiscco:
        goto qckqeqqcoawmwwqw;
        qyguqmkmyqeyqaac:
        
        $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
        goto igeoagaweewiscas;
        oogmmeccymcuwwac:
        $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
            foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                goto eeoiyiuccooeigmk;
                eeoiyiuccooeigmk:
                $qgoqiacsiccwoawi = $ocyscigwmouqaiia["\143\157\154\165\x6d\156"];
                goto owkyiywsooiwewgw;
                owkyiywsooiwewgw:
                $aiamqeawckcsuaou = $ocyscigwmouqaiia["\141\143\164\x69\x6f\x6e"];
                goto wqyymgoekecmskmm;
                cgyikucmysgcmweu:
                geqwascicmuguaom:
                goto sswmkkcyawawqwwg;
                wqyymgoekecmskmm:
                switch ($aiamqeawckcsuaou) {
                    case "\101\104\104":
                    case "\x4d\x4f\x44\x49\x46\131":
                        goto ugseakwywkuwgyug;
                        isqokqgukyemmqcg:
                        okaiokeeaqccisaq:
                        goto gemuuqmegqkkgeua;
                        gemuuqmegqkkgeua:
                        goto geqwascicmuguaom;
                        goto yeiawaisoceoysau;
                        kwcyggeukmgacqsy:
                        yoeqaicysswwgkmm:
                        goto isqokqgukyemmqcg;
                        ugseakwywkuwgyug:
                        if (!isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                            goto okaiokeeaqccisaq;
                        }
                        goto eecyiiwsqomoggmq;
                        mumeawggkmqsowae:
                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === "\115\117\x44\x49\x46\x59");
                        goto kwcyggeukmgacqsy;
                        eecyiiwsqomoggmq:
                        $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                        goto ckaggwgwsyowuuem;
                        ckaggwgwsyowuuem:
                        if (!$aiowsaccomcoikus instanceof Field) {
                            goto yoeqaicysswwgkmm;
                        }
                        goto mumeawggkmqsowae;
                        yeiawaisoceoysau:
                    case "\101\x44\x44\40\x49\x4e\x44\105\x58":
                    case "\104\x52\x4f\x50\x20\111\x4e\x44\x45\x58":
                        goto ecimugmwcawqmyaa;
                        uooisauooikkciom:
                        goto geqwascicmuguaom;
                        goto ymkoykouaqiusygo;
                        ygywowuyoygiiqaq:
                        
                        $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                        goto imwcikaiagkakiic;
                        msieagoikksumcwa:
                        if (!($aiamqeawckcsuaou == "\101\104\x44\x20\111\116\104\105\x58")) {
                            goto kyiewmuguyyccsca;
                        }
                        goto ygywowuyoygiiqaq;
                        ecimugmwcawqmyaa:
                        
                        $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                        goto msieagoikksumcwa;
                        imwcikaiagkakiic:
                        kyiewmuguyyccsca:
                        goto uooisauooikkciom;
                        ymkoykouaqiusygo:
                    case "\x44\x52\x4f\x50":
                        
                        $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                        goto geqwascicmuguaom;
                }
                goto emuckswusmmeuwma;
                sswmkkcyawawqwwg:
                cyssqgqaoaasmogc:
                goto kaocmesokyiikyci;
                emuckswusmmeuwma:
                qgyeyyagaeyoequw:
                goto cgyikucmysgcmweu;
                kaocmesokyiikyci:
            }
            yomuicigicmugscy:
        };
        goto wygeysociiyqokyk;
        emyuskcwqyscewue:
        ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ["\151\144"]);
        goto alomqucgmacieuoa;
        csuwemcoeyqemwks:
        foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
            goto cywmgwogisiyymoi;
            omagsowousaeaiou:
            emiugswuagoacakq:
            goto kcesecosoiwocymi;
            kcesecosoiwocymi:
            gcgwqksqskumiumq:
            goto ckyamgmuoswcaiak;
            cywmgwogisiyymoi:
            if (in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                goto emiugswuagoacakq;
            }
            goto qkygewgkycsuawgm;
            qkygewgkycsuawgm:
            $uwqmqcmssaeieiqa[] = ["\141\143\x74\151\x6f\156" => "\104\122\117\120", "\143\x6f\x6c\x75\155\156" => $qgoqiacsiccwoawi];
            goto omagsowousaeaiou;
            ckyamgmuoswcaiak:
        }
        goto wcmsamoqaogoouey;
        yiskaoskyyiswkki:
        uggisigeswwyqmqi:
        goto akieywkiweasukyw;
        igeoagaweewiscas:
        yikyagqossasyqcu:
        goto ccqagygkoaagksyw;
        qoqgokiaagioccqg:
        sort($uwomkgseoiegeume);
        goto oeukmyymqaaakksa;
        yqywgkymmowyggqa:
        qauuogkoosmuggas:
        goto oogmmeccymcuwwac;
        kqiakyymyiosoeia:
        $uwqmqcmssaeieiqa = [];
        goto iceuoqgyqsmywqqq;
        oeukmyymqaaakksa:
        sort($wkkweuacukumqmya);
        goto ookeyiumgkqqucia;
        oguigickaoqigcoi:
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            goto aouauysuwimgygie;
            aouauysuwimgygie:
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            goto sqkmkmcmocigewua;
            ogaqcigmoyoqcsws:
            akieyasekuwqeugc:
            goto egmauuemqqqqsgic;
            kquqgyygaeiwkeko:
            $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge("\x63\157\154\154\141\164\x69\x6f\156");
            goto qogyssukouuesqis;
            egmauuemqqqqsgic:
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                ikoaokuwokyiigsu:
            }
            goto agwyiymkkwmywcsw;
            qogyssukouuesqis:
            qmugciukukckmeiu:
            goto kkoukeoyauekomau;
            sqkmkmcmocigewua:
            if ($aasascamegmwqmqk->collation) {
                goto qmugciukukckmeiu;
            }
            goto kquqgyygaeiwkeko;
            wgeqwaisweikegck:
            $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge("\143\x68\x61\162\163\x65\x74");
            goto ogaqcigmoyoqcsws;
            agwyiymkkwmywcsw:
            gqwcuusyiggisuok:
            goto qkeyoeyiuqeyicqa;
            kkoukeoyauekomau:
            if ($aasascamegmwqmqk->charset) {
                goto akieyasekuwqeugc;
            }
            goto wgeqwaisweikegck;
            qkeyoeyiuqeyicqa:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        goto osamucgweicwoiqy;
        imquocywcscomayo:
        qcgyuksgqucyquwi:
        goto gammkicacakosigu;
        meueuqeagkwkoiuk:
        if ($aiowsaccomcoikus->yseywyqacmugimme()) {
            goto ywyceqcyssuuyauc;
        }
        goto cseucimaukwaskwk;
        cmqmcaowowcccgka:
        wcuqgoiokweuwycq:
        goto imcseqowgomyokwi;
        quumuskukkcuuciu:
        ukcoymqsgmcwokoq:
        goto iiwuqoagoqgmwwiq;
        cseucimaukwaskwk:
        
        $keuuiqywyuiuegkq->nullable(false);
        goto kucymsiiugmiooyo;
        ycqcgaauyqmkwskc:
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        goto gkaayykiiqqogeiw;
        quowmcomwmsmugqe:
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        goto ycqcgaauyqmkwskc;
        kiwacoqesuqmyiiu:
        
        $keuuiqywyuiuegkq->autoIncrement();
        goto aimwoikqsqkyicsu;
        qiggceewmyagkisq:
        if (!(($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false)) {
            goto wcuqgoiokweuwycq;
        }
        goto yaieemqskkgmcqou;
        oeyoiicmckkgoyqg:
        caskecmuwociuumq:
        goto owkgksuymewqqiwu;
        yaieemqskkgmcqou:
        
        $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
        goto cmqmcaowowcccgka;
        esewmcieucesaqcw:
        if (!$keuuiqywyuiuegkq instanceof ColumnDefinition) {
            goto qyeomiwmooookysu;
        }
        goto sgqackwokosksyua;
        awwyuikkmaaomkqc:
        
        $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
        goto imquocywcscomayo;
        ogwmeoaswuqwamim:
        
        $keuuiqywyuiuegkq->change();
        goto kimwcesmkuqqyamq;
        qwsmwwskogygagea:
        $keuuiqywyuiuegkq = null;
        goto saoickmcegceesyw;
        qwwmqqkoeuywmqys:
        uckqwisqmyeuegei:
        goto soqakmcacqiqamku;
        soqakmcacqiqamku:
        if (!($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky())) {
            goto gesaagokeamiwuws;
        }
        goto ciksycqiaaueqaaq;
        igsweakykqomoqgi:
        
        $keuuiqywyuiuegkq->nullable(true);
        goto kqkcowkuqsuemmmc;
        aqyweyyyygygswmy:
        
        $keuuiqywyuiuegkq->unique();
        goto awwyuikkmaaomkqc;
        caeiwemymyceqqei:
        if (!$vkgsqsqqqgyaqkog) {
            goto uokwiwsewewgcocy;
        }
        goto ogwmeoaswuqwamim;
        owkgksuymewqqiwu:
        if (!$aiowsaccomcoikus->kweqqkiwiugikyam()) {
            goto qcgyuksgqucyquwi;
        }
        goto aqyweyyyygygswmy;
        saoickmcegceesyw:
        switch ($sqeykgyoooqysmca) {
            case "\112\x53\117\x4e":
            case "\101\122\x52\101\131":
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                goto mgkaweokcicgiegg;
            case "\x46\x4f\x52\x45\111\107\x4e":
                goto qmawgkeuyyqwcmok;
                kkyumyewcymikswk:
                if (!$gsmssqouaueqkeui instanceof Model) {
                    goto degewusuggmqqeso;
                }
                goto ayeysmcoemkcsegm;
                cwccggguqewowygo:
                $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto csoecqymkecmuueu;
                oqiqyekweaomiwgy:
                uemgoaamkymwuiko:
                goto owssugkggmiascii;
                wgicusccasmuiosy:
                yqaqgsyaqomgoowq:
                goto oaqqykskqqqqsqem;
                iyaawicgsuuoykiq:
                $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}\137{$wkwywcemusswkgwk}", false));
                goto ammqgccmiuwcaeuq;
                ksiuacaiaiauywae:
                if (!($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem())) {
                    goto goaaoqkgsieiyuqm;
                }
                goto mqcoyamukmaoqwmw;
                aqakqumsuimkkkus:
                if (!($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke())) {
                    goto wqiwmousomaigmgm;
                }
                goto qkeogqcekgawsgwe;
                qseiiaweiykcwacy:
                wqiwmousomaigmgm:
                goto kewsuqsoqkyikkis;
                eseyciuwmwyauuio:
                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                goto kkyumyewcymikswk;
                mqcgsiaawwkqmksi:
                
                $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                goto wgicusccasmuiosy;
                mqcoyamukmaoqwmw:
                
                $keuuiqywyuiuegkq->on($koegqoagisewcica);
                goto kygqagmyyqysywkm;
                gsiegqomuuccaoos:
                aywsyyewoswacqqy:
                goto kcieymewycqwegis;
                yoeoiuuuqakicgam:
                goto mgkaweokcicgiegg;
                goto yuyyeiiewiuogceo;
                swqkecoseauacwio:
                
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                goto ksiuacaiaiauywae;
                ayeysmcoemkcsegm:
                $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                goto cwccggguqewowygo;
                csoecqymkecmuueu:
                $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                goto iyaawicgsuuoykiq;
                kygqagmyyqysywkm:
                goaaoqkgsieiyuqm:
                goto aqakqumsuimkkkus;
                qmawgkeuyyqwcmok:
                if (!$aiowsaccomcoikus instanceof Foreign) {
                    goto cyomeoyuoqywoysa;
                }
                goto mmgqsmogqmouuskw;
                qkeogqcekgawsgwe:
                
                $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                goto qseiiaweiykcwacy;
                yeecswicmoyiqssi:
                
                $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                goto oqiqyekweaomiwgy;
                uikqgasygyaeqcac:
                return $aasascamegmwqmqk;
                goto gsiegqomuuccaoos;
                owssugkggmiascii:
                if (!($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie())) {
                    goto yqaqgsyaqomgoowq;
                }
                goto mqcgsiaawwkqmksi;
                skeqeeuuemswqgwu:
                mogweaaaqocouiug:
                goto uikqgasygyaeqcac;
                ammqgccmiuwcaeuq:
                degewusuggmqqeso:
                goto skeqeeuuemswqgwu;
                kcieymewycqwegis:
                
                $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                goto swqkecoseauacwio;
                kewsuqsoqkyikkis:
                if (!($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo())) {
                    goto uemgoaamkymwuiko;
                }
                goto yeecswicmoyiqssi;
                oaqqykskqqqqsqem:
                cyomeoyuoqywoysa:
                goto yoeoiuuuqakicgam;
                mmgqsmogqmouuskw:
                if (!$aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    goto aywsyyewoswacqqy;
                }
                goto suycyuwkgakgikqw;
                suycyuwkgakgikqw:
                if (!$aiowsaccomcoikus->ygswmewosceowmya()) {
                    goto mogweaaaqocouiug;
                }
                goto eseyciuwmwyauuio;
                yuyyeiiewiuogceo:
            case "\x53\x45\124":
            case "\x45\116\x55\x4d":
                goto skeyqsaqsiwgiyog;
                awwgggeiaceyecco:
                if (!ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                    goto ugomsuwwuqsskuqc;
                }
                goto ayeqwsqywosymiwu;
                ayeqwsqywosymiwu:
                $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                goto oemkgkauqekgkumy;
                oemkgkauqekgkumy:
                ugomsuwwuqsskuqc:
                goto iuoayeiykmokiiys;
                skeyqsaqsiwgiyog:
                $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                goto awwgggeiaceyecco;
                iuoayeiykmokiiys:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                goto mmmgeukkswewyuoa;
                mmmgeukkswewyuoa:
                goto mgkaweokcicgiegg;
                goto ygegasgiwgmswaog;
                ygegasgiwgmswaog:
            case "\x46\114\x4f\101\124":
            case "\104\117\125\x42\x4c\x45":
            case "\104\x45\x43\x49\115\x41\x4c":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                goto mgkaweokcicgiegg;
            case "\x54\111\x4d\x45":
            case "\x44\101\124\x45\x54\x49\115\105":
            case "\124\x49\115\x45\123\x54\x41\x4d\120":
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                goto mgkaweokcicgiegg;
            case "\x43\110\101\122":
            case "\123\x54\122\111\x4e\x47":
            case "\x56\x41\122\x43\x48\x41\122":
                goto ayuwkwsuioumscca;
                osoukeawsoyqmwgo:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                goto wesooeakucoqmisw;
                gswoagoguesomwyc:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto ecomecoqggyssmsk;
                ayuwkwsuioumscca:
                if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                    goto qiaaqckmooiayuae;
                }
                goto gswoagoguesomwyc;
                wesooeakucoqmisw:
                mswucuuigmosimuo:
                goto cmwaakkwwqameeec;
                ecomecoqggyssmsk:
                goto mswucuuigmosimuo;
                goto agicooogqyeyoyqi;
                agicooogqyeyoyqi:
                qiaaqckmooiayuae:
                goto osoukeawsoyqmwgo;
                cmwaakkwwqameeec:
                goto mgkaweokcicgiegg;
                goto ykgkuccgawoyquga;
                ykgkuccgawoyquga:
            default:
                $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                goto mgkaweokcicgiegg;
        }
        goto quumuskukkcuuciu;
        gkaayykiiqqogeiw:
        if (!method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            goto oeoyiakocyacqsys;
        }
        goto qwsmwwskogygagea;
        kimwcesmkuqqyamq:
        uokwiwsewewgcocy:
        goto cegokyqcmuuwyoey;
        kqkcowkuqsuemmmc:
        gucokiskmccmsaac:
        goto caeiwemymyceqqei;
        eosiakwgiemwwqwy:
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        goto quowmcomwmsmugqe;
        semwcosqeukmgoey:
        
        $keuuiqywyuiuegkq->unsigned();
        goto oeyoiicmckkgoyqg;
        qkusmocauegwwqwy:
        
        $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
        goto qwwmqqkoeuywmqys;
        cegokyqcmuuwyoey:
        qyeomiwmooookysu:
        goto yayicayasmkmsemm;
        imcseqowgomyokwi:
        if (!$aiowsaccomcoikus->qumigiaaeieaemgy()) {
            goto caskecmuwociuumq;
        }
        goto semwcosqeukmgoey;
        qcgekwgksmkoamik:
        return $aasascamegmwqmqk;
        goto ekykiumoyeyamsew;
        goemggymkikoquwi:
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        goto eosiakwgiemwwqwy;
        ciksycqiaaueqaaq:
        
        $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
        goto ecoygmauwycmweyq;
        sgqackwokosksyua:
        if (!$aiowsaccomcoikus->oikqausqaykqkmqi()) {
            goto cecoqgqcckqoouwy;
        }
        goto kiwacoqesuqmyiiu;
        yayicayasmkmsemm:
        oeoyiakocyacqsys:
        goto qcgekwgksmkoamik;
        gammkicacakosigu:
        if (!($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa())) {
            goto uckqwisqmyeuegei;
        }
        goto qkusmocauegwwqwy;
        kucymsiiugmiooyo:
        goto gucokiskmccmsaac;
        goto auakugikcequsiia;
        aimwoikqsqkyicsu:
        cecoqgqcckqoouwy:
        goto qiggceewmyagkisq;
        osamucgweicwoiqy:
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        goto goemggymkikoquwi;
        ecoygmauwycmweyq:
        gesaagokeamiwuws:
        goto meueuqeagkwkoiuk;
        iiwuqoagoqgmwwiq:
        mgkaweokcicgiegg:
        goto esewmcieucesaqcw;
        auakugikcequsiia:
        ywyceqcyssuuyauc:
        goto igsweakykqomoqgi;
        ekykiumoyeyamsew:
    }
}
