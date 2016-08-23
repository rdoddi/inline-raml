<?php

namespace net\iremote\library\inline\raml;

use Com\PaulDevelop\Library\Common\GenericCollection;

class AnnotationCollection extends GenericCollection
{
    public function __construct($initialValues = array(), $keyFieldName = '')
    {
        parent::__construct('net\iremote\library\inline\raml\Annotation', $initialValues, $keyFieldName);
    }
}
