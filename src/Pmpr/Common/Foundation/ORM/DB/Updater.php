<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
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
        $this->qcsmikeggeemccuu('admin_init', [$this, 'cucqgwmoseqakgoe']);
        parent::wigskegsqequoeks();
    }
    
    public function ysgiswuowuciwqaq() : ?Connection
    {
        $mgcmmwqwguicsews = null;
        if ($this->skckwsgymkimyuwo() && $this->skckwsgymkimyuwo()->amosaeggmeksgwea()) {
            
            $mgcmmwqwguicsews = $this->skckwsgymkimyuwo()->amosaeggmeksgwea()->getConnection();
        }
        return $mgcmmwqwguicsews;
    }
    
    public function cokoiaeeomgssqgy() : ?string
    {
        return $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy($this->oyeskqayoscwciem()->aakmagwggmkoiiyu(), false);
    }
    
    public function gqaysymikgeawkqa() : ?SchemaBuilder
    {
        if (!$this->builder && $this->ysgiswuowuciwqaq()) {
            
            $this->builder = $this->ysgiswuowuciwqaq()->getSchemaBuilder();
        }
        return $this->builder;
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
        $uiewakwqscemywuo = null;
        if ($omkysikckkcieckq && $this->ysgiswuowuciwqaq()) {
            
            $uiewakwqscemywuo = $this->ysgiswuowuciwqaq()->getConfig($omkysikckkcieckq);
        }
        return $uiewakwqscemywuo;
    }
    public function cucqgwmoseqakgoe()
    {
        try {
            $ikgwqyuyckaewsow = $this->oyeskqayoscwciem()->aeosueemgsygqese();
            $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
            
            $iygikoguosecwqgw = $this->gqaysymikgeawkqa()->hasTable($aasascamegmwqmqk);
            $iygikoguosecwqgw ? $this->update($ikgwqyuyckaewsow, $aasascamegmwqmqk) : $this->create($ikgwqyuyckaewsow, $aasascamegmwqmqk);
        } catch (Exception $wgaoewqkwgomoaai) {
        }
    }
    
    public function update($ikgwqyuyckaewsow, $cgomysauusagiwqu)
    {
        $uwqmqcmssaeieiqa = [];
        if ($cgomysauusagiwqu) {
            
            $wkkweuacukumqmya = $this->gqaysymikgeawkqa()->getColumnListing($cgomysauusagiwqu);
            ManipulateArray::gyciysooayoqiisg($wkkweuacukumqmya, ['id']);
            foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) {
                if ($aiowsaccomcoikus instanceof Foreign && $aiowsaccomcoikus->iueigwuckeaswyuu()) {
                    ManipulateArray::unset($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo);
                }
                kqksuugcgsyeoayy:
            }
            ygcsmkuycoagwyou:
            $uwomkgseoiegeume = array_keys($ikgwqyuyckaewsow);
            sort($uwomkgseoiegeume);
            sort($wkkweuacukumqmya);
            if (json_encode($uwomkgseoiegeume) != json_encode($wkkweuacukumqmya)) {
                if (ManipulateSetting::esoowymaimwcuecq()) {
                    foreach ($wkkweuacukumqmya as $qgoqiacsiccwoawi) {
                        if (!in_array($qgoqiacsiccwoawi, $uwomkgseoiegeume)) {
                            $uwqmqcmssaeieiqa[] = ['action' => 'DROP', 'column' => $qgoqiacsiccwoawi];
                        }
                        qqewoyookaskiuek:
                    }
                    iggyqogweyosuikc:
                }
                foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) {
                    if ($aiowsaccomcoikus instanceof Field && !in_array($aiowsaccomcoikus->mwikyscisascoeea(), $wkkweuacukumqmya)) {
                        
                        $uwqmqcmssaeieiqa[] = ['action' => 'ADD', 'column' => $aokagokqyuysuksm];
                    }
                    qkcyqocqqwmqgqww:
                }
                ssoucoucsgccekwe:
                $ekiuyucoiagmscgy = function (Blueprint &$aasascamegmwqmqk) use($uwqmqcmssaeieiqa, $ikgwqyuyckaewsow) {
                    foreach ($uwqmqcmssaeieiqa as $ocyscigwmouqaiia) {
                        $qgoqiacsiccwoawi = $ocyscigwmouqaiia['column'];
                        $aiamqeawckcsuaou = $ocyscigwmouqaiia['action'];
                        switch ($aiamqeawckcsuaou) {
                            case 'ADD':
                            case 'MODIFY':
                                if (isset($ikgwqyuyckaewsow[$qgoqiacsiccwoawi])) {
                                    $aiowsaccomcoikus = $ikgwqyuyckaewsow[$qgoqiacsiccwoawi];
                                    if ($aiowsaccomcoikus instanceof Field) {
                                        $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus, $aiamqeawckcsuaou === 'MODIFY');
                                    }
                                }
                                goto ywqgcegomwaiuquc;
                            case 'ADD INDEX':
                            case 'DROP INDEX':
                                
                                $aasascamegmwqmqk->dropIndex($qgoqiacsiccwoawi);
                                if ($aiamqeawckcsuaou == 'ADD INDEX') {
                                    
                                    $aasascamegmwqmqk->index($qgoqiacsiccwoawi);
                                }
                                goto ywqgcegomwaiuquc;
                            case 'DROP':
                                
                                $aasascamegmwqmqk->dropColumn($qgoqiacsiccwoawi);
                                goto ywqgcegomwaiuquc;
                        }
                        wmmggowmigekyoso:
                        ywqgcegomwaiuquc:
                        eegqyykygiccaoeo:
                    }
                    miyqyeiwquwsacsm:
                };
                $aasascamegmwqmqk = $this->cokoiaeeomgssqgy();
                
                $this->gqaysymikgeawkqa()->table($aasascamegmwqmqk, $ekiuyucoiagmscgy);
            }
        }
    }
    
    public function create($ikgwqyuyckaewsow, $ymqmyyeuycgmigyo)
    {
        $this->gqaysymikgeawkqa()->create($ymqmyyeuycgmigyo, function (Blueprint &$aasascamegmwqmqk) use($ikgwqyuyckaewsow) {
            
            $aasascamegmwqmqk->bigIncrements(self::ID);
            if (!$aasascamegmwqmqk->collation) {
                $aasascamegmwqmqk->collation = $this->aceaeommyuooiqge('collation');
            }
            if (!$aasascamegmwqmqk->charset) {
                $aasascamegmwqmqk->charset = $this->aceaeommyuooiqge('charset');
            }
            foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) {
                $aasascamegmwqmqk = $this->gqeeyaqcuukysmes($aasascamegmwqmqk, $aiowsaccomcoikus);
                acaqummmoyiemqss:
            }
            soqqemyioggmoakg:
        });
    }
    
    public function gqeeyaqcuukysmes(Blueprint $aasascamegmwqmqk, Field $aiowsaccomcoikus, $vkgsqsqqqgyaqkog = false) : Blueprint
    {
        $ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea();
        $sqeykgyoooqysmca = $aiowsaccomcoikus->gueasuouwqysmomu();
        $ykiwomimkkuiigoq = $aiowsaccomcoikus->qamkswcgsoeggmau();
        $qgciuiagkkguykgs = ManipulateString::snake2camel($sqeykgyoooqysmca);
        $sqeykgyoooqysmca = strtoupper($sqeykgyoooqysmca);
        if (method_exists($aasascamegmwqmqk, $qgciuiagkkguykgs)) {
            $keuuiqywyuiuegkq = null;
            switch ($sqeykgyoooqysmca) {
                case 'JSON':
                case 'ARRAY':
                    
                    $keuuiqywyuiuegkq = $aasascamegmwqmqk->json($ymqmyyeuycgmigyo);
                    goto suswcqoyyqkkquuo;
                case 'FOREIGN':
                    if ($aiowsaccomcoikus instanceof Foreign) {
                        if ($aiowsaccomcoikus->iueigwuckeaswyuu()) {
                            if ($aiowsaccomcoikus->ygswmewosceowmya()) {
                                $gsmssqouaueqkeui = $aiowsaccomcoikus->uecyuoauykiqqkey()::symcgieuakksimmu();
                                if ($gsmssqouaueqkeui instanceof Model) {
                                    $usymcioagieycusu = $this->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                                    $wkwywcemusswkgwk = $gsmssqouaueqkeui->oyeskqayoscwciem()->aiqioscoyukqgsgw();
                                    $yuwymayicwwqiske = $this->oyeskqayoscwciem()->ogqgmqymcwsqikme();
                                    $this->create([self::geqyygqiwiqusekc($usymcioagieycusu . self::_ID)->qkwyekmiceaogwci(false), self::geqyygqiwiqusekc($wkwywcemusswkgwk . self::_ID)->qkwyekmiceaogwci(false)], $this->skckwsgymkimyuwo()->cokoiaeeomgssqgy("{$yuwymayicwwqiske}{$usymcioagieycusu}_{$wkwywcemusswkgwk}", false));
                                }
                            }
                            return $aasascamegmwqmqk;
                        }
                        
                        $aasascamegmwqmqk->bigInteger($ymqmyyeuycgmigyo)->unsigned();
                        
                        $keuuiqywyuiuegkq = $aasascamegmwqmqk->foreign($ymqmyyeuycgmigyo);
                        if ($koegqoagisewcica = $aiowsaccomcoikus->miosasgcmguoamem()) {
                            
                            $keuuiqywyuiuegkq->on($koegqoagisewcica);
                        }
                        if ($ykqcceqiqygieeks = $aiowsaccomcoikus->syccewqoeggkkgke()) {
                            
                            $keuuiqywyuiuegkq->references($ykqcceqiqygieeks);
                        }
                        if ($smgycasaqmgcaekq = $aiowsaccomcoikus->giqekaueqsgsmkgo()) {
                            
                            $keuuiqywyuiuegkq->onDelete($smgycasaqmgcaekq);
                        }
                        if ($muegsmmicsqsgucm = $aiowsaccomcoikus->ucqugkkuiooayqie()) {
                            
                            $keuuiqywyuiuegkq->onUpdate($muegsmmicsqsgucm);
                        }
                    }
                    goto suswcqoyyqkkquuo;
                case 'SET':
                case 'ENUM':
                    $qiouiwasaauyaaue = $aiowsaccomcoikus->gkwkqmwweiawigae();
                    if (ManipulateArray::wuoqgcwmkicakygs($qiouiwasaauyaaue)) {
                        $qiouiwasaauyaaue = array_keys($qiouiwasaauyaaue);
                    }
                    $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $qiouiwasaauyaaue);
                    goto suswcqoyyqkkquuo;
                case 'FLOAT':
                case 'DOUBLE':
                case 'DECIMAL':
                    $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq, $aiowsaccomcoikus->siamswkmsqckqgeu());
                    goto suswcqoyyqkkquuo;
                case 'TIME':
                case 'DATETIME':
                case 'TIMESTAMP':
                    $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, 0);
                    goto suswcqoyyqkkquuo;
                case 'CHAR':
                case 'STRING':
                case 'VARCHAR':
                    if ($ykiwomimkkuiigoq && $ykiwomimkkuiigoq > 0) {
                        $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo, $ykiwomimkkuiigoq);
                    } else {
                        $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                    }
                    goto suswcqoyyqkkquuo;
                default:
                    $keuuiqywyuiuegkq = $aasascamegmwqmqk->{$qgciuiagkkguykgs}($ymqmyyeuycgmigyo);
                    goto suswcqoyyqkkquuo;
            }
            eeqesooyqagwawae:
            suswcqoyyqkkquuo:
            if ($keuuiqywyuiuegkq instanceof ColumnDefinition) {
                if ($aiowsaccomcoikus->oikqausqaykqkmqi()) {
                    
                    $keuuiqywyuiuegkq->autoIncrement();
                }
                if (($ggauoeuaesiymgee = $aiowsaccomcoikus->oiswysuiioecsaae()) !== false) {
                    
                    $keuuiqywyuiuegkq->default($ggauoeuaesiymgee);
                }
                if ($aiowsaccomcoikus->qumigiaaeieaemgy()) {
                    
                    $keuuiqywyuiuegkq->unsigned();
                }
                if ($aiowsaccomcoikus->kweqqkiwiugikyam()) {
                    
                    $keuuiqywyuiuegkq->unique();
                    
                    $aasascamegmwqmqk->unique($ymqmyyeuycgmigyo);
                }
                if ($guuwoyaeoeeaauug = $aiowsaccomcoikus->ogmguwgoqkqkkisa()) {
                    
                    $keuuiqywyuiuegkq->charset($guuwoyaeoeeaauug);
                }
                if ($kokmwkcqkgkewiuw = $aiowsaccomcoikus->yuwwmewqqauckiky()) {
                    
                    $keuuiqywyuiuegkq->collation($kokmwkcqkgkewiuw);
                }
                if ($aiowsaccomcoikus->yseywyqacmugimme()) {
                    
                    $keuuiqywyuiuegkq->nullable(true);
                } else {
                    
                    $keuuiqywyuiuegkq->nullable(false);
                }
                if ($vkgsqsqqqgyaqkog) {
                    
                    $keuuiqywyuiuegkq->change();
                }
            }
        }
        return $aasascamegmwqmqk;
    }
}
