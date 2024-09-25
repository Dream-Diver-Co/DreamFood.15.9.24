@extends("frontend.layouts.master")

@section("content")
    <!-- Hero Start -->
    <div class="container-fluid bg-light mt-0">
        <div class="container text-center animated bounceInDown">
            <h1 class="display-1 mb-4">Checkout</h1>
            <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                <li class="breadcrumb-item text-dark" aria-current="page">Checkout</li>
            </ol>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid">
        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="row px-xl-5">
                <!-- Billing Address Start -->
                <div class="col-lg-8 p-3">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                    <div class="bg-wheat p-4 mb-5">
                        <div class="row">
                            <!-- Form fields for address and contact information -->
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" name="email" placeholder="example@email.com" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="tel" name="mobile_no" placeholder="+123 456 789" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" name="address_line1" placeholder="123 Street" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" name="address_line2" placeholder="Apt 456">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="form-control custom-select" name="country" required>
                                    <option value="Netherland" selected>Netherland</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" name="city" placeholder="New York" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" name="state" placeholder="New York" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" name="zip_code" placeholder="12345" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Billing Address End -->

                <!-- Order Summary Start -->
                <div class="col-lg-4 p-3">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                    <div class="bg-wheat p-4 mb-3">
                        <div class="border-bottom bg-light p-30 pt-3 pb-2">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Total Items</h6>
                                <h6 class="font-weight-medium"><span id="overall-quantity">{{ $cartItems->sum('quantity') }}</span>ps</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Subtotal</h6>
                                <h6>${{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Home Delivery</h6>
                                <h6 class="font-weight-medium">Free</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Total</h5>
                                <h5>${{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods Start -->
                    <div class="mb-5">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                        <div class="bg-wheat p-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" required>
                                    <label class="custom-control-label" for="cash_on_delivery">Cash on Delivery</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="credit_card" name="payment_method" value="credit_card" required>
                                    <label class="custom-control-label" for="credit_card">Credit Card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="stripe" name="payment_method" value="stripe" required>
                                    <label class="custom-control-label" for="stripe">Pay with Credit Card (Stripe)</label>
                                </div>
                            </div>

                            <!-- Stripe Payment Form -->
                            <div id="stripe-payment-form" style="display: none;">
                                <label for="card-element">Credit or debit card</label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <input type="hidden" name="total_amount" value="{{ $cartItems->sum(fn($item) => $item->product->price * $item->quantity) }}">
                        </div>
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                    <!-- Payment Methods End -->
                </div>
                <!-- Order Summary End -->
            </div>

            <!-- Order Details Table -->
            <div class="row px-xl-5">
                <div class="col-lg-12">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Your Order</span></h5>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center align-middle bg-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="cart-body">
                                @foreach($cartItems as $item)
                                    <tr>
                                        <td>
                                            @if($item->product && $item->product->image)
                                                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" width="50">
                                            @else
                                                <span>No Image Available</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>${{ $item->product->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ $item->product->price * $item->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <!-- Stripe Payment Integration -->
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const card = elements.create('card');
        card.mount('#card-element');

        card.addEventListener('change', (event) => {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        const paymentMethod = document.querySelector('input[name="payment_method"]');
        const stripePaymentForm = document.getElementById('stripe-payment-form');

        paymentMethod.addEventListener('change', function () {
            if (this.value === 'stripe') {
                stripePaymentForm.style.display = 'block';
            } else {
                stripePaymentForm.style.display = 'none';
            }
        });

        const form = document.querySelector('form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            if (paymentMethod.value === 'stripe') {
                const {token, error} = await stripe.createToken(card);
                if (error) {
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    stripeTokenHandler(token);
                }
            } else {
                form.submit();
            }
        });

        function stripeTokenHandler(token) {
            const hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            form.submit();
        }
    </script>




@endsection
