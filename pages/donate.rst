.. title: Donate to OpenLP
.. slug: donate
.. date: 2015-10-03 20:31:32 UTC
.. type: text
.. previewimage: /cover-images/donate.jpg

Like most other voluntary open source projects, OpenLP has no income and is entirely funded by the personal funds of
the developers. We have a number of fixed costs, like server hosting, domain names, and the like. If you'd like to
help us out, please consider donating to our cause.

There are two ways to help out financially:

1. Once-off donations
2. Buy swag

Once-off Donations
^^^^^^^^^^^^^^^^^^

Once-off donations are gratefully accepted.

.. raw:: html

    <div id="error-alert" class="alert alert-danger hidden" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" tx-attrs="aria-label"><span class="notranslate" aria-hidden="true">&times;</span></button>
      <p><strong>Error:</strong> <span id="error-message"></span></p>
    </div>
    <div id="success-alert" class="alert alert-success hidden" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" tx-attrs="aria-label"><span class="notranslate" aria-hidden="true">&times;</span></button>
      <p id="success-message"></p>
    </div>
    <div class="clearfix">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">  
        <h3>PayPal <small>(Preferred)</small></h3>
        <p>You can donate via PayPal by clicking the button.</p>
        <p class="small text-info">You will be guided to create a PayPal account if you don't have one already.</p>
        <p><a class="btn btn-primary" href="https://paypal.me/raoulsnyman"><i class="fa fa-fw fa-paypal"></i> Donate via PayPal</a></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">  
        <h3>Bitcoin</h3>
        <p>Donate to us via Bitcoin using the address below.</p>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-fw fa-btc"></i></span>
          <input class="form-control type="text" value="1Hcuk8eX485NmfjUoPNSpJWci22FwuXJjV" readonly>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">  
        <h3>Credit Card</h3>
        <p>We also accept donations via debit or credit card.</p>
        <form id="donate" class="form" role="form" action="donate-cc.php" method="POST">
          <input type="hidden" name="token" id="token">
          <input type="hidden" name="return-url" id="return-url">
          <div class="form-group">
            <label class="sr-only" for="donate-amount">Amount</label>
            <div class="input-group">
              <span class="input-group-addon notranslate">$</span>
              <input type="number" value="10" class="form-control" name="amount" id="amount">
              <span class="input-group-addon notranslate">.00</span>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" id="donate-button" class="btn btn-primary"><i class="fa fa-fw fa-credit-card"></i> Donate to OpenLP</button>
            <div class="pull-right">
              <a href="https://stripe.com" title="Credit card donations processed by Stripe"><img src="/images/powered_by_stripe.png" alt="Credit card donations processed by Stripe"></a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>


Buy Swag
^^^^^^^^
One other way you can help us financially is by buying stuff from our online store. There are T-shirts, cups, hats,
USB drives, and other things for sale, and all proceeds go to OpenLP.

.. raw:: html

    <p><a href="https://www.zazzle.com/openlp" class="btn btn-primary"><i class="fa fa-fw fa-shopping-basket notranslate"></i> Buy Some Swag</a></p>
    <hr>

Regular Costs
^^^^^^^^^^^^^
Here's a breakdown of our regular costs:

1. $40/month for a `VPS from Linode.com`_ which is used for downloads, developer tools and First Time Wizard data.
2. $10/month for a `backup service`_, also from Linode.com.
3. $17/year for our main domain, `openlp.org`_. See `Gandi.net's pricing page`_ for information on domain name costs.
4. $35/year for our developer domain, `openlp.io`_.


[ Image Credit: `Tip Jar at Open Bar by Dave Dugdale`_ ]

.. _VPS from Linode.com: https://www.linode.com/pricing
.. _backup service: https://www.linode.com/backups
.. _Gandi.net's pricing page: https://www.gandi.net/domain/price/info
.. _openlp.org: https://openlp.org/
.. _openlp.io: https://openlp.io/
.. _Tip Jar at Open Bar by Dave Dugdale: https://www.flickr.com/photos/davedugdale/5025601209/

