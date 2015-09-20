<?php

class OrdersController extends BaseController
{
    /**
     * Dashboard homepage
     *
     */
    public function create()
    {
        $this->setPageTitle('Create order');

        $currentUser = Sentry::getUser();

        $order = Order::findByTodayUserId($currentUser->id, date('Y-m-d'));

        if (!count($order)) {
            $order_code = $this->_generate_order_code();

            $order = new Order;

            $order->order_name = 'order_' . $order_code;
            $order->order_code = $order_code;
            $order->order_desc = 'Simulated order';
            $order->order_status = 1;
            $order->product_code = 'SampleRobot';
            $order->quantity = 1;
            $order->required_date = date('Y-m-d H:i:s');
            $order->status = 1;
            $order->user_id = $currentUser->id;

            $order->save();
        }

        $this->view('orders.create', compact('currentUser', 'order'));
    }

    /**
     * Order created successfully page.
     */
    public function createdSuccess()
    {
        $this->setPageTitle('Create order successfully');

        $currentUser = Sentry::getUser();

        $this->view('orders.created.success', compact('currentUser'));
    }

    /**
     * Generate a rand order code.
     *
     * @return string
     */
    private function _generate_order_code()
    {
        return date('Ymd') . mt_rand(100, 999);
    }
}
