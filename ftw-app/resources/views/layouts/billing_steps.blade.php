<style type="text/css">
    
    .stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.btn-circle:hover {
    font-size: 12px !important;
}
</style>
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn {{(Request::is('register/*')?"btn-primary":"btn-default")}} btn-circle">1</a>
        <p>Enter Personal Details</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn {{(Request::is('user/billing')?"btn-primary":"btn-default")}} btn-circle" {{(Request::is('user/billing')?"":"disabled")}}>2</a>
        <p>Membership Fee</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn {{(Request::is('user/paypal-email')?"btn-primary":"btn-default")}} btn-circle" {{(Request::is('user/paypal-email')?"":"disabled")}}>3</a>
        <p>Your Earnings</p>
      </div>
    </div>
  </div>