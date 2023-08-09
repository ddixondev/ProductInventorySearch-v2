function generateButton(title, price) {
      paypal
        .Buttons({
        	style: {
        		layout: 'vertical',
        		color: 'silver',
        		shape: 'rect',
        		label: 'paypal'
        	},
          // Sets up the transaction when a payment button is clicked
          createOrder() {
            return fetch("/my-server/create-paypal-order", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              // use the "body" param to optionally pass additional order information
              // like product skus and quantities
              body: JSON.stringify({
              	cart: [
                  {
                    sku: title,
                    quantity: "YOUR_PRODUCT_QUANTITY",
                  },
                ],
              }),
            })
              .then((response) => response.json())
              .then((order) => order.id);
          },
          // Finalize the transaction after payer approval
          onApprove(data) {
            return fetch("/my-server/capture-paypal-order", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                orderID: data.orderID,
              }),
            })
              .then((response) => response.json())
              .then((orderData) => {
                // Successful capture! For dev/demo purposes:
                console.log(
                  "Capture result",
                  orderData,
                  JSON.stringify(orderData, null, 2)
                );
                const transaction = orderData.purchase_units[0].payments.captures[0];
                alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // var element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
              });
          },
        })
        .render("#custom-paypal-button-container");
}