<?php

namespace App\Http\Controllers;

use App\ShippingPrice;
use Illuminate\Http\Request;

class ShippingPricesController extends Controller
{
	public function index(Request $request)
	{
		$prices = ShippingPrice::select(['id', 'price', 'weight_from', 'weight_to']);

		if ($request->input('weight')) {
			$prices->where([
			    ['weight_from', '<=', $request->input('weight')],
			    ['weight_to', '>=', $request->input('weight')],
			]);
		}

		if ($request->input('sender')) {
			$sender = $request->input('sender');
			$prices->whereHas('shipping_method.senders', function ($query) use ($sender) {
				$query->where('name', $sender);
			});
		}

		if ($request->input('recipient')) {
			$recipient = $request->input('recipient');
			$prices->whereHas('shipping_method.recipients', function ($query) use ($recipient) {
				$query->where('name', $recipient);
			});
		}

		$prices = $prices->get();

		return view('shippingPrices.index', compact('prices'));
	}
}
