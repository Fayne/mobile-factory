<?php

use Laracasts\Validation\FormValidationException;

class OrdersController extends BaseController
{
    /**
     * @var SignatureForm
     */
    private $signatureForm;

    /**
     * @param SignatureForm $signatureForm
     */
    function __construct(SignatureForm $signatureForm)
    {
        $this->signatureForm = $signatureForm;
    }

    /**
     * Enter signature page.
     */
    public function enterSignature()
    {
        $this->setPageTitle('Input signature');

        $currentUser = Sentry::getUser();

        $this->view('orders.enter_signature', compact('currentUser'));
    }

    /**
     * Create order.
     *
     */
    public function store()
    {
        try {
            $data = Input::only('signature');

            $this->signatureForm->validate($data);

            $currentUser = Sentry::getUser();

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
            $order->signature = $data['signature'];

            $order->save();

            return Redirect::route('orders.created')->with('order_code', $order_code);
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::back()->withInput()->withErrors(['nickname' => 'User was not found.']);
        } catch
        (FormValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Order created successfully page.
     */
    public function created()
    {
        $this->setPageTitle('Create order successfully');

        $currentUser = Sentry::getUser();

        $this->view('orders.created', compact('currentUser'));
    }

    /**
     * My orders page.
     */
    public function myOrders()
    {
        $this->setPageTitle('My orders');

        $currentUser = Sentry::getUser();

        $orders = Order::findByUserId($currentUser->id)->paginate(5);

        if (!count($orders)) {
            return Redirect::route('orders.create.signature')->with('message', 'Create your first order.');
        }

        $this->view('orders.my_orders', compact('currentUser', 'orders'));
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
