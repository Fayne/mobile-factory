<?php

class OrderTrackTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->createOrderTracks();

    }

    /**
     * Seed order_tracks
     */
    private function createOrderTracks()
    {
        DB::table('order_tracks')->truncate();

        OrderTrack::create([
            'order_track_name' => '订单生成',
            'order_id' => 52,
            'finished_qty' => 0,
            'order_status' => '1',
            'status' => '1',
        ]);

        OrderTrack::create([
            'order_track_name' => '已生产',
            'order_id' => 52,
            'finished_qty' => 90,
            'order_status' => '1',
            'status' => '1',
        ]);

        $order = Order::find(52);

        $order->progress = 50;

        $order->save();

    }

}