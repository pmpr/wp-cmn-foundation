<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\API;

use Pmpr\Common\Foundation\Decorator\DecoratorOption;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Psr\Http\Message\ResponseInterface;

class Cartridge extends API
{
    const CURRENT_DOMAIN = 'api_current_domain';
    const LOCK_REQUEST_TRANSIENT = 'api_lock_request_transient';
    
    protected array $domains = [];
    
    public function __construct()
    {
        $this->kesomeowemmyygey('timeout', false);
        parent::__construct();
    }
    
    public function wiqumkmqkqoycqyi() : array
    {
        return $this->domains;
    }
    
    public function iggeecowsiwyaooe(string $mokawwccycoiqeka) : string
    {
        $this->domains[] = $mokawwccycoiqeka;
        return $mokawwccycoiqeka;
    }
    
    public function next() : self
    {
        $mokawwccycoiqeka = $this->wwawisckiqeueoua();
        if ($mokawwccycoiqeka) {
            $wqogggcaamgeiwew = $this->wiqumkmqkqoycqyi();
            $this->ucuoiawgsicougqu($mokawwccycoiqeka);
            $momcykaoccoymeig = array_search($mokawwccycoiqeka, $wqogggcaamgeiwew);
            $mokawwccycoiqeka = ManipulateArray::get($wqogggcaamgeiwew, intval($momcykaoccoymeig) + 1);
            if ($mokawwccycoiqeka) {
                DecoratorOption::update(self::CURRENT_DOMAIN, $mokawwccycoiqeka);
                $this->gyuwiwqqyesiekag($mokawwccycoiqeka);
            } else {
                $this->saqqeqmcyyoeqici('Cartridge api locked for next 20 minutes.');
                
                set_transient(self::LOCK_REQUEST_TRANSIENT, 1, MINUTE_IN_SECONDS * 2);
                DecoratorOption::delete(self::CURRENT_DOMAIN);
            }
        }
        return $this;
    }
    
    public function wwawisckiqeueoua() : ?string
    {
        $yeacayasgueouoqc = null;
        if (!$this->yyqoaomsmcauuscg()) {
            $yeacayasgueouoqc = DecoratorOption::get(self::CURRENT_DOMAIN, ManipulateArray::get($this->wiqumkmqkqoycqyi(), 0));
        }
        return $yeacayasgueouoqc;
    }
    
    public function send($xeciwimgioieayek, $qiouiwasaauyaaue = [], $qgciuiagkkguykgs = 'get') : ?ResponseInterface
    {
        if (!$this->yyqoaomsmcauuscg()) {
            $keccaugmemegoimu = parent::send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) {
                $this->next();
                sleep(2);
                $keccaugmemegoimu = $this->send($xeciwimgioieayek, $qiouiwasaauyaaue, $qgciuiagkkguykgs);
            }
        } else {
            $keccaugmemegoimu = null;
        }
        return $keccaugmemegoimu;
    }
    
    public function yyqoaomsmcauuscg() : bool
    {
        
        return false;
    }
    
    public function ucuoiawgsicougqu($yeacayasgueouoqc)
    {
    }
    
    public function gyuwiwqqyesiekag($yeacayasgueouoqc)
    {
    }
}
