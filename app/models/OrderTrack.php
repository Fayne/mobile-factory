<?php

use Illuminate\Database\Eloquent\Model;

class OrderTrack extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_tracks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['order_track_name', 'order_id', 'finished_qty', 'order_status', 'schedule_id', 'status'];

    /**
     * OrderTrack relationship for the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order()
    {
        return $this->belongsTo('Order', 'order_id', 'order_id');
    }

    /**
     * Find order_tracks by order_id.
     *
     * @param string $orderId
     *
     * @return bool | array
     */
    public static function findByOrderId($orderId)
    {
        return static::where('order_id', $orderId)->orderBy('created_at')->get();
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'order_track_name' => $this->order_track_name,

            'order_id' => $this->order_id,

            'finished_qty' => $this->finished_qty,

            'order_status' => $this->order_status,

            'schedule_id' => $this->schedule_id,

            'status' => $this->status,

        ];
    }
}