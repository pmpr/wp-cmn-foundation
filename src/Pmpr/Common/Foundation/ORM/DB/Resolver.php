<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\ORM\DB;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\ConnectionResolverInterface;

class Resolver extends Common implements ConnectionResolverInterface
{
    
    public function connection($ymqmyyeuycgmigyo = null) : ConnectionInterface
    {
        return Database::symcgieuakksimmu();
    }
    
    public function getDefaultConnection()
    {
    }
    
    public function setDefaultConnection($ymqmyyeuycgmigyo)
    {
    }
}
