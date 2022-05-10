<?php

return [
    [
        'name' => 'Portals',
        'flag' => 'portal.index',
    ],
    [
        'name'        => 'Create',
        'flag'        => 'portal.create',
        'parent_flag' => 'portal.index',
    ],
    [
        'name'        => 'Edit',
        'flag'        => 'portal.edit',
        'parent_flag' => 'portal.index',
    ],
    [
        'name'        => 'Delete',
        'flag'        => 'portal.destroy',
        'parent_flag' => 'portal.index',
    ],
];
