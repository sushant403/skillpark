<!-- Invoice Modal -->
<div class="modal fade" id="invoiceReceiptModal" style="background: rgba(0, 0, 0, 0.9);" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background: #fbfbfb">
            <!-- Header -->
            <div class="modal-top-cover bg-primary text-center" style="min-height: 6rem">
                <figure class="position-absolute right-0 bottom-0 left-0">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 1920 100.1">
                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                    </svg>
                </figure>

                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal"
                        aria-label="Close">
                        <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Header -->

            <div class="modal-top-cover-avatar">
                <img class="avatar avatar-lg avatar-circle avatar-border-lg avatar-centered shadow-soft"
                    src="{{ asset('images/logo/logo.svg') }}" alt="Logo">
            </div>

            <!-- Body -->
            <div class="modal-body pt-3 pb-sm-5 px-sm-5">
                <div class="text-center mb-5">
                    <h3 class="mb-1">Invoice for <i>{{ $job->title }}</i></h3>
                    <span class="d-block">Invoice #3682303</span>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <small class="text-cap">Amount to Pay:</small>
                        <span class="text-dark"><b>Rs. {{ $job->budget }}</b></span>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <small class="text-cap">Date Posted:</small>
                        <span class="text-dark" style="font-size: 12px"><i>{{ $job->created_at }}</i></span>
                    </div>

                    <div class="col-md-4">
                        <small class="text-cap">Payment method:</small>
                        <div class="d-flex align-items-center">
                            <img class="avatar mr-2" src="{{ asset('images/visa.svg') }}" alt="VISA">
                            <img class="avatar mr-2" src="{{ asset('images/mastercard.svg') }}" alt="MasterCard">
                            {{-- <span class="text-dark">&bull;&bull;&bull;&bull; 4242</span> --}}
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('jobs.pay', $job) }}" class="card-form mb-3">
                    @csrf
                    <input type="hidden" name="payment_method" class="payment-method">
                    <div class="col-12 col-md-10 px-0">
                        <label for="name">Cardholder Name:</label><br>
                        <input class="StripeElement mb-3" name="card_holder_name" style="width:100%" placeholder="Card Holder Name"
                           value="{{ $job->employer->name }}" required>
                        <div id="card-element"></div>
                        <div id="card-errors" class="feedback" style="color: red;" role="alert"></div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary pay">
                                Pay Now
                            </button>
                        </div>
                    </div>
                </form>

                {{-- <div class="d-flex justify-content-end">
                    <a class="btn btn-xs btn-white" href="#"><i class="fas fa-file-download mr-1"></i> PDF</a>
                    <span class="mx-1"></span>
                    <a class="btn btn-xs btn-white" href="#"><i class="fas fa-print mr-1"></i> Print Details</a>
                </div> --}}

                <hr class="my-5">

                <p class="modal-footer-text">If you have any questions, please contact us at <a
                        href="mailto:skillparknepal@gmail.com">skillparknepal@gmail.com</a> or call at <a
                        class="text-nowrap" href="#">+977 986 048 9494</a></p>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Invoice Modal -->