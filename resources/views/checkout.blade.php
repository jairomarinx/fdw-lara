<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fit.Reset.Consultation - Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center px-4">

    <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-8 sm:p-10">
        <div class="mb-6 text-center">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-2">Fit.Reset.Consultation</h1>
            <p class="text-sm text-gray-500">Secure payment to confirm your session</p>
        </div>

        <div class="mb-6 bg-gray-50 border border-gray-200 rounded-lg p-5 text-center">
            <p class="text-gray-600 text-lg">You’re about to book your consultation for:</p>
            <p class="text-2xl font-bold text-green-600 mt-2">${{ number_format($amount / 100, 2) }} USD</p>
        </div>

        <form action="{{ route('checkout.pay') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="amount" value="{{ $amount }}">

            <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold rounded-xl shadow hover:shadow-md transition duration-200">
                Pay with Stripe
            </button>
        </form>

        <p class="text-center text-sm text-gray-400 mt-6">One of our coaches will contact you within 24 hours to schedule your session.</p>
    </div>

</body>
</html>
