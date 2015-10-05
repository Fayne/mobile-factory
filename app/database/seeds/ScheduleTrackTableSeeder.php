<?php

class ScheduleTrackTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->createScheduleTracks();

    }

    /**
     * Seed schedule_tracks
     */
    private function createScheduleTracks()
    {
        DB::table('schedule_tracks')->truncate();

        ScheduleTrack::create([
            'plant_id' => '1',
            'shift_date' => '2015/10/01',
            'shift_no' => '1',
            'current_shift' => '1',
            'product_plan' => '37837',
            'product_target' => '16304',
            'product_actual' => '12133',
            'total_available_time' => '10000',
            'total_run_time' => '480',
            'total_down_time' => '167',
            'total_wait_time' => '91',
            'equipment_down_time' => '',
            'quality_down_time' => '',
            'total_FTP' => '0.8900963189974607',
            'status' => '1',
        ]);

        ScheduleTrack::create([
            'plant_id' => '1',
            'shift_date' => '2015/10/02',
            'shift_no' => '1',
            'current_shift' => '1',
            'product_plan' => '37837',
            'product_target' => '1859',
            'product_actual' => '7219',
            'total_available_time' => '10000',
            'total_run_time' => '480',
            'total_down_time' => '0',
            'total_wait_time' => '19',
            'equipment_down_time' => '',
            'quality_down_time' => '',
            'total_FTP' => '0.8832752431243577',
            'status' => '1',
        ]);

        ScheduleTrack::create([
            'plant_id' => '1',
            'shift_date' => '2015/10/03',
            'shift_no' => '1',
            'current_shift' => '1',
            'product_plan' => '37837',
            'product_target' => '32626',
            'product_actual' => '585',
            'total_available_time' => '10000',
            'total_run_time' => '480',
            'total_down_time' => '137',
            'total_wait_time' => '14',
            'equipment_down_time' => '',
            'quality_down_time' => '',
            'total_FTP' => '0.9459631747855235',
            'status' => '1',
        ]);

        ScheduleTrack::create([
            'plant_id' => '1',
            'shift_date' => '2015/10/04',
            'shift_no' => '1',
            'current_shift' => '1',
            'product_plan' => '37839',
            'product_target' => '4702',
            'product_actual' => '25495',
            'total_available_time' => '10000',
            'total_run_time' => '480',
            'total_down_time' => '8',
            'total_wait_time' => '46',
            'equipment_down_time' => '',
            'quality_down_time' => '',
            'total_FTP' => '0.8980018298163869',
            'status' => '1',
        ]);

        ScheduleTrack::create([
            'plant_id' => '1',
            'shift_date' => '2015/10/05',
            'shift_no' => '1',
            'current_shift' => '1',
            'product_plan' => '37840',
            'product_target' => '20642',
            'product_actual' => '36626',
            'total_available_time' => '10000',
            'total_run_time' => '480',
            'total_down_time' => '195',
            'total_wait_time' => '5',
            'equipment_down_time' => '',
            'quality_down_time' => '',
            'total_FTP' => '0.9068315916446036',
            'status' => '1',
        ]);


    }

}