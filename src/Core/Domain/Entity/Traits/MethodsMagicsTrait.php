<?php

namespace Core\Domain\Entity\Traits;

use mysql_xdevapi\Exception;
trait MethodsMagicsTrait{
    public function __get($name)
    {
        if($this->{$propery})
            return $this->{$name};


        $className = get_class($this);
        throw new Exception("Property {$propery} not found in class {$className} " );
    }
}