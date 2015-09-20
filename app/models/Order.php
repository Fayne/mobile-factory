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
     * Find orders by user_id.
     *
     * @param string $userId
     */
    public static function findByUserIdOrFail($userId)
    {
        if (!is_null($model = static::where('user_id', $userId)->get())) return $model;

        throw (new \Illuminate\Database\Eloquent\ModelNotFoundException)->setModel(get_called_class());
    }

    /**
     * Find orders by user_id which created at $date.
     *
     * @param string $userId
     * @param $date
     * @return bool | result
     */
    public static function findByTodayUserId($userId, $date)
    {
        if (!is_null($model = static::where(['user_id' => $userId, 'required_date' => $date])->first())) return $model;

        return false;
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