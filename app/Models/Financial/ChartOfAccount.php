<?php

namespace App\Models\Financial;

use App\Models\BaseModel;

/**
 * @property integer $id
 * @property integer $account_category_id
 * @property string $acct_code
 * @property string $description
 * @property string $posting_type
 * @property string $typical_balance
 * @property string $disabled
 * @property string $date_disabled
 * @property string $disabled_by
 * @property string $logs
 * @property string $last_modified
 * @property string $created_at
 * @property string $updated_at
 * @property AccountCategory $accountCategory
 */
class ChartOfAccount extends BaseModel
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'financial.chart_of_accounts';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['account_category_id', 'acct_code', 'description', 'posting_type', 'typical_balance', 'disabled', 'date_disabled', 'disabled_by', 'logs', 'last_modified', 'created_at', 'updated_at'];

    protected $dates = ['created_at', 'updated_at', 'date_disabled'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accountCategory()
    {
        return $this->belongsTo(AccountCategory::class);
    }
}
