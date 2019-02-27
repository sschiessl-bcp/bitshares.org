<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BitShares Blockchain provides a feature known as user-issued assets to help facilitate profitable business models for certain types of services.">
    <meta name="keywords" content="bitshares, user-issued assets, blockchain, tokens">
    <title>User Issued Assets | BitShares Blockchain</title>
	<base href="/">
    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/thesaas.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/popup.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.ico">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="User-Issued Assets | BitShares Blockchain">
    <meta property="og:description" content="BitShares Blockchain provides a feature known as "user-issued assets" to help facilitate profitable business models for certain types of services.">
    <meta property="og:image" content="../assets/img/og-img.jpg">
    <meta property="og:url" content="https://bitshares.org/">
    <meta name="twitter:card" content="summary_large_image">
</head>
  <body>
  <div canvas="container">
    <!-- Topbar Navigation Bar Begins-->
    <?php require('../assets/php/header.php'); ?>
    <!-- Top Navigation Bar Ends-->
    <!-- Header -->
    <header class="header header-inverse inner-headers">
      <div class="container text-center">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>User-Issued Assets</h1>
            <p class="fs-18 opacity-70">Regulation-compatible cryptoasset issuance</p>
          </div>
        </div>
      </div>
    </header>

    <!-- END Header -->

    <!-- Main container -->
    <main class="main-content">
		<section class="section no-show-btn pt-0 pb-0 cmc_div">
			<!-- MARKET CAP & PRICE -->
			<div class="price_mc">
			<div class="mc_data">
				<div class="mc_bts_price">BTS Price:</div><div class="coinmarketcap-currency-wig" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="false" data-volume="false" data-stats="USD" data-statsticker="true"></div>
			
				<div class="mc_bts_mc">Market Cap:</div><div class="coinmarketcap-currency-widget" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="true" data-volume="false" data-stats="USD" data-statsticker="true"></div>
			
				<div class="mc_bts_24">Volume (24h):</div><div class="coinmarketcap-currency-widget" data-currency="bitshares" data-base="USD" data-secondary="BTC" data-ticker="true" data-rank="false" data-marketcap="false" data-volume="true" data-stats="USD" data-statsticker="true"></div>
			</div>
			</div>
			<!-- MARKET CAP & PRICE -->
		</section>
      <section class="section section-x">
        <div class="container">
          <p>BitShares Blockchain provides a feature known as "user-issued assets" to help facilitate profitable business models for certain types
            of services. The term refers to a type of custom token registered on the platform, which users can hold and trade within certain restrictions.
            The creator of such an asset publicly names, describes, and distributes its tokens, and can specify customized requirements, such as an
            approved whitelist of accounts permitted to hold the tokens, or the associated trading and transfer fees.</p>

<p>The potential use cases for user-issued assets are innumerable. Regulations applied to different kinds of tokens vary widely, and are often different in every jurisdiction.
  BitShares provides the tools to allow issuers to remain compliant with all applicable regulations when issuing assets.</p>
<p>Following are a few sample use cases for user-issued assets.</p>
<br />
<h2 id="deposit-receipts">Deposit Receipts</h2>
<p>Banks are simply companies that maintain a database of customer account balances and facilitate the transfer of these assets among their depositors. Companies
  like Dwolla and PayPal essentially issue deposit receipts, and then offer cheaper transfers among their users than between banks. With BitShares, it is now possible
   to move these internal databases onto the blockchain where the deposits can be used with other smart contracts such as the internal markets, escrow, or bonds.</p>
<p>In talking to many different banks and exchanges, BitShares learnt a lot about what the law requires of those who wish to issue deposit receipts.</p>
<br />
<h4 id="1-know-your-customer">1. Know Your Customer</h4>
<p>First and foremost, the issuer must know every single customer. BitShares supports this by enabling both whitelists and blacklists. Rather than requiring every issuer
  to whitelist every customer separately, an issuer may specify a set of identity verifiers that they trust to do this job. This allows issuers to benefit from the
  network effect of validated users without having to do any direct identity verification themselves.</p>
<p>When an asset enables whitelists, no account may send or receive that asset without being on an authorized whitelist. An accounts funds can be frozen by removing them
  from the whitelist.</p>
<br />
<h4 id="2-asset-seizing">2. Asset Seizing</h4>
<p>From time to time, an issuer may be required to seize funds as a result of a court order. While this may be unappealing to cryptocurrency purists, it is an unavoidable
  reality of trust-based assets. An issuer can determine whether or not they wish to revoke this privilege, but it may be a requirement in some jurisdictions.</p>
<br />
<h4 id="3-market-restriction">3. Market Restriction</h4><p>An issuer who offers both USD and EUR deposits may need to restrict direct trading between their USD and EUR assets to
  avoid being subject to foreign currency exchange regulations. Some cryptocurrency exchanges allow trading between fiat and cryptocurrencies, but not between two fiat
  currencies. Without this feature, many exchanges would be unable to issue their assets on the BitShares blockchain.</p>
<br />
<h4 id="4-transfer-restrictions">4. Transfer Restrictions</h4>
<p>A transfer-restricted asset allows the holders of the asset to trade it in the markets but not transfer it from person to person. Only a few cryptocurrency exchanges
  allow user-to-user transfer of funds outside the market, because this particular activity is often subject to a different set of money transmission regulations.</p>
<p>The deposit receipt is probably one of the most important, yet most heavily regulated examples of user-issued assets.</p>
<br />
<h3 id="company-shares">Company Shares</h3>
<p>Corporate shares are heavily regulated by the SEC, but none of those regulations prevent them from being issued or traded on an
  <a href="http://en.wikipedia.org/wiki/Alternative_trading_system" target="_blank">alternative trading system</a>. The regulations in many jurisdictions require all
  shares to be registered (aka held by known identities). BitShares corporate shares can be used as collateral for a bond or be used in any number of smart contracts.</p>
<br />
<h3 id="event-tickets">Event Tickets</h3>
<p>Event tickets are a largely unregulated use case for user-issued assets. Tickets to a school play could be issued as digital tokens that are auctioned off to the
  highest bidder, who would then resell them. This ensures that the ticket issuer raises as much money as possible up front, while transferring the risk of ticket sales
  on to speculators.</p>
<p>On the day of the event, the issuer can freeze all trading of the asset and then allow users to cryptographically check in.</p>
<br />
<h3 id="rewards-points">Rewards Points</h3>
<p>Merchants around the world offer rewards points for loyal customers. These points are accumulated to earn discounts on future purchases. Rewards systems are a prime
  opportunity to add value by making them available to BitShares smart contracts.</p>
<br />
<h3 id="individual-or-corporate-debt">Individual or Corporate Debt</h3>
<p>Many businesses raise money by selling bonds. With BitShares, these bonds can be made tradeable and/or fungible, which makes them more compelling to investors.</p>
<br />
<h3 id="crowd-funding">Crowd Funding</h3>
<p>Whether being used as a transferable coupon for a pre-sale, or doing an IPO on a small company, issuing an asset is one of the most effective means of raising money
  for a cause.</p>
<br />
<h3 id="digital-property">Digital Property</h3>
<p>Software and music licenses can be made transferable by issuing them as a digital asset. Every copy of a program can check to make sure that the user has control
  of a token before running. Software implementing such a licensing scheme can remain functional even if the company that produced the license goes out of business.</p>
<p>Trading cards can be simulated by creating many limited issue assets. Online games can use these assets to represent game items.</p>
<br />
<h2 id="privatized-smartcoins-stable-cryptocurrencies">Privatized SmartCoins (Stable Cryptocurrencies)</h2>
<p><a href="technology/price-stable-cryptocurrencies" target="_blank">Price-stable cryptocurrencies</a> (aka SmartCoins) were the inspiration for BitShares. Now, users
  can create their own price-stable assets with custom parameters designed to track the value of any asset they can imagine. The benefit of price-stable cryptocurrencies
  is that they are fully collateralized, and the issuer only needs to be trusted to appoint an honest set of independent (non-collusive) feed producers. Unlike deposit
  receipts, the value of a Privatized SmartCoin is secured even if the issuer disappears.</p>
<p>BitShares provides many parameters that an issuer may tune. In addition to account whitelists, market restrictions, and transfer restrictions, the issuer of a
  private SmartCoin has control over:</p>
<ol class="ml-50">
<li>Collateral Type</li>
<li>Initial Collateral Rate</li>
<li>Maintenance Collateral Rate</li>
<li>Forced Settlement Fee, Delay, and Daily Volume</li>
<li>Price Feed Update Rate</li>
<li>Global Forced Settlement</li>
</ol>
<p>With these tools it is possible to emulate a pure contract for difference with periodic global forced settlement (i.e. monthly, yearly, etc.), or to emulate BitShares
  1.0 BitAssets by having a 30-day delay on forced settlement.</p>
<p>Arbitrary financial indexes can be used for the price feed to mimic all manner of exotic assets.</p>
<br />
<h3 id="informationprediction-markets">Information/Prediction Markets</h3>
<p>A <a href="http://en.wikipedia.org/wiki/Prediction_market" target="_blank">prediction market</a> is a specialization of SmartCoins where there is no
need for margin calls or forced settlement because all positions are fully collateralized at any price. A prediction market has a price between 0 and 1 and the
issuer settles all positions after the event occurs and the final price is known. These prediction markets can be very secure if the issuer is a multi-sig account
with many independent and trustworthy parties involved.</p>
<br />
<h3 id="how-to-profit-by-issuing-an-asset">How to Profit by Issuing an Asset</h3>
<p>There are many ways to profit from issuing an asset. As the issuer you have complete control over market fees and can tune parameters such as the percent of
  each trade that is collected as a fee. This percentage can be bounded by a minimum and maximum fee. The combination of these three parameters give issuers great
  flexibility in pricing.</p>
<br />
<h3 id="fee-pools">Fee Pools</h3>
<p>Issuers may optionally maintain a Fee Pool. The Fee Pool is a pool of BTS and an exchange rate at which the issued asset may be converted into BTS.
  When a user wishes to pay a network fee with the asset, the fee pool will step in to convert the asset into BTS at the rate that the issuer has specified.
  This means that issuers may charge a premium every time users opt to use their asset to pay network fees rather than paying them directly with BTS.</p>
<p>The purpose of the fee pool is to provide a convenience to users that would like to use an asset without concerning themselves with the details of acquiring BTS.
  Anyone may fund the fee pool, but only the issuer may specify the exchange rate. This exchange rate is automatically set to the settlement price if the asset is
  collateralized by BTS.</p>
        </div>
      </section>
    </main>
    <!-- END Main container -->

<!-- Footer -->
<?php require('../assets/php/footer.php');?>
<!-- END Footer -->

</div>
<?php require('../assets/php/mobilemenu.php');?>

    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/thesaas.js"></script>
    <script src="../assets/js/script.js"></script>
	<script type="text/javascript" src="../assets/js/marketcap.js"></script>
	<!-- End Scripts -->
	<!-- Go to Top Button -->
	  <div id="stop" class="scrollTop bttt-border bttt-round bttt-positionRight bttt-slideFromBottom">
		<i class='fa fa-chevron-up'></i>
	  </div>
	<!-- End Go to Top Button -->
	  	<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	</body>
</html>
