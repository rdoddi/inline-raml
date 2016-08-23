<?php

namespace net\iremote\library\inline\raml;

use Com\PaulDevelop\Library\Common\GenericCollection;

class AnnotationParameterCollection extends GenericCollection
{
    public function __construct($initialValues = array(), $keyFieldName = '')
    {
        parent::__construct('net\iremote\library\inline\raml\AnnotationParameter', $initialValues, $keyFieldName);
    }
}
