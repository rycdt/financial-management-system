<?php

namespace App\Models\Requisition;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $supplier_classification_id
 * @property integer $currency_id
 * @property string $supplier_code
 * @property string $name
 * @property string $check_name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property string $country
 * @property string $disabled
 * @property string $date_disabled
 * @property string $disabled_by
 * @property string $logs
 * @property string $last_modified
 * @property string $created_at
 * @property string $updated_at
 * @property SupplierClassification $supplierClassification
 * @property Currency $currency
 */
class Supplier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'requisition.suppliers';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['supplier_classification_id', 'currency_id', 'supplier_code', 'name', 'check_name', 'address', 'city', 'state', 'zip_code', 'country', 'disabled', 'date_disabled', 'disabled_by', 'logs', 'last_modified', 'created_at', 'updated_at'];

    protected $dates = ['created_at', 'updated_at', 'date_disabled'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supplierClassification()
    {
        return $this->belongsTo(SupplierClassification::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
