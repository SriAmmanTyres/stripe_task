// JavaScript section in show.blade.php or a separate JS file

document.addEventListener('DOMContentLoaded', function() {
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();
    
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');
    
    var form = document.getElementById('payment-form');
    var submitButton = document.getElementById('submit-payment');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        submitButton.disabled = true;
        
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: cardElement,
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer
                alert(result.error.message);
                submitButton.disabled = false;
            } else {
                // Payment succeeded, redirect or show success message
                handlePaymentSuccess();
            }
        });
    });
    
    function handlePaymentSuccess() {
        // Handle successful payment, e.g., redirect to a thank you page
        window.location.href = "{{ route('payment.success') }}";
    }
});
