<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class UpdateDepartmentsResponse extends AbstractResponse
{
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
    }
}
