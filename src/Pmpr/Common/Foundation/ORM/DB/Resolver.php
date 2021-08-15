<?php
 namespace Pmpr\Common\Foundation\ORM\DB; use Illuminate\Database\ConnectionInterface; use Illuminate\Database\ConnectionResolverInterface; class Resolver extends Common implements ConnectionResolverInterface { public function connection($x7nNw = null) { return Database::getInstance(); } public function getDefaultConnection() { } public function setDefaultConnection($x7nNw) { } }
