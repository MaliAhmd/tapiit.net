<?php
use App\Models\Cart;
use App\Models\User;
if (!function_exists('getCartSize')) {
    function getCartSize() {
        if (session()->has('user')) {
            $u = User::where('email', session('user')['email'])->first();
            $data = cart::where('user_id', $u->id)->get();
            // dd($data->count());
            return $data->count();
        }

        return 0; // Default value if user is not logged in or cart is empty
    }
}
