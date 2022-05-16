<?php

namespace Botble\Portal\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Page\Models\Page;

class Portal extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'portals';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'image',
        'link',
        'order',
        'page_id',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }
}
