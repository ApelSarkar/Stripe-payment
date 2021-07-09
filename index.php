<?php
require 'config.php';
?>

<form action="payment.php" method="post">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    //data-key="pk_test_51JAy9oEOH2QAlGRbCa3kcNSpM5mKxpbsfggiJVpqGZV2nUkwLSiA389X63il9Zk042P9giH0Qvzu1fWr078kgyL700xXifsD3X"
    data-name="Custom t-shirt"
    data-description="Your custom designed t-shirt"
    data-amount="5000"
    data-currency="usd">
  </script>
</form>
