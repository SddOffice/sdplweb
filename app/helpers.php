<?php
use Illuminate\Support\facades\DB;
use App\Models\DesignType;

function getDesignType($design_type)
{   
    $design_type_name = array();
    foreach ( explode(',', $design_type) as $key => $type) {
        $design_type_name[] = DesignType::find($type);
    }
    return $design_type_name;
}
