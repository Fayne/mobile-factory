<?php

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'order_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['order_name', 'order_code', 'order_desc', 'order_status', 'user_id', 'product_code', 'quantity', 'required_date', 'status'];

    /**
     * User relationship for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }

    /**
     * OrderTrack relationship for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function track()
    {
        return $this->hasMany('OrderTrack', 'order_id', 'order_id');
    }

    /**
     * Find orders by user_id.
     *
     * @param string $userId
     *
     * @return bool | array
     */
    public static function findByUserId($userId)
    {
        return static::where('user_id', $userId)->orderBy('order_id', 'desc');
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'order_name' => $this->order_name,

            'order_code' => $this->order_code,

            'order_desc' => $this->order_desc,

            'order_status' => $this->order_status,

            'user_id' => $this->user_id,

            'product_code' => $this->product_code,

            'quantity' => $this->quantity,

            'required_date' => $this->required_date,

            'status' => $this->status,

        ];
    }
}