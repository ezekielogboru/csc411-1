!DOCTYPE html>
<html lang="en">


<head>

<script src="https://js.paystack.co/v1/inline.js"></script> <script>

var paymentForm = document.getElementById('paymentForm');

paymentForm.addEventListener('submit', payWithPaystack, false);

function payWithPaystack() {

  var handler = PaystackPop.setup({

    key: 'YOUR_PUBLIC_KEY', // Replace with your public key

    email: document.getElementById('email-address').value,

    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit

    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars

    ref: 'YOUR_REFERENCE', // Replace with a reference you generated

    callback: function(response) {

      //this happens after the payment is completed successfully

      var reference = response.reference;

      alert('Payment complete! Reference: ' + reference);

      // Make an AJAX call to your server with the reference to verify the transaction

    },

    onClose: function() {

      alert('Transaction was not completed, window closed.');

    },

  });

  handler.openIframe();

}

callback: function(response){

  $.ajax({

    url: '<?php echo "<script>window.location='confirmpayment.php'</script>"; ?>?reference='+ response.reference,

    method: 'get',

    success: function (response) {

      // the transaction status is in response.data.status

    }

  });

}

</script>
</head>


<body>
<form id="paymentForm">

  <div class="form-group">

    <label for="email">Email Address</label>

    <input type="email" id="email-address" required />

  </div>

  <div class="form-group">

    <label for="amount">Amount</label>

    <input type="tel" id="amount" required />

  </div>

  <div class="form-group">

    <label for="first-name">First Name</label>

    <input type="text" id="first-name" />

  </div>

  <div class="form-group">

    <label for="last-name">Last Name</label>

    <input type="text" id="last-name" />

  </div>

  <div class="form-submit">

    <button type="submit" onclick="payWithPaystack()"> Pay </button>

  </div>

</form>


</body>
</html>