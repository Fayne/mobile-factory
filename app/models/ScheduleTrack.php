<?php

use Illuminate\Database\Eloquent\Model;

class ScheduleTrack extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schedule_tracks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['plant_id', 'shift_date', 'shift_no', 'current_shift', 'product_plan', 'product_target', 'product_actual', 'total_available_time', 'total_run_time', 'total_down_time', 'total_wait_time', 'equipment_down_time', 'quality_down_time', 'total_FTP', 'status'];

    /**
     * User relationship for the plant.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plant()
    {
        return $this->belongsTo('Plant', 'plant_id', 'plant_id');
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'plant_id' => $this->plant_id,

            'shift_date' => $this->shift_date,

            'shift_no' => $this->shift_no,

            'current_shift' => $this->current_shift,

            'product_plan' => $this->product_plan,

            'product_target' => $this->product_target,

            'product_actual' => $this->product_actual,

            'total_available_time' => $this->total_available_time,

            'total_run_time' => $this->total_run_time,

            'total_down_time' => $this->total_down_time,

            'total_wait_time' => $this->total_wait_time,

            'equipment_down_time' => $this->equipment_down_time,

            'quality_down_time' => $this->quality_down_time,

            'total_FTP' => $this->total_FTP,

            'status' => $this->status,

        ];
    }
}